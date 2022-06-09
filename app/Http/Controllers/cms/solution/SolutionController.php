<?php

namespace App\Http\Controllers\cms\solution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageCategory;
use App\Models\SolutionSubPage;
use Illuminate\Support\Str;

class SolutionController extends Controller
{
    //
    public function index(){
        $category = PageCategory::orderby('created_at','DESC')->get();
        // $sub_category = PageCategory::all();
        return view('admin.cms.solution.home',compact('category'));
    }

    public function create(){
        return view('admin.cms.solution.add-page');
    }

    public function store(Request $request){
        $check_page = PageCategory::where('name',$request->name)->first();
        if($check_page !=null){
            return redirect('/solution/create')->with('error','page name already exist!');
        }
        else{
        $add_categ = new PageCategory;  
        if($request->bg_image){
            $file = $request->file('bg_image');
            $filename = str_replace(' ', '_', strtolower($request->name)).'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$request->name.'//';
            $file->move($destinationPath,$filename);
            $add_categ->bg_image = $filename;
        }
        $add_categ->name = $request->name ;
        $add_categ->description = $request->description ;
        $add_categ->slug = Str::slug($request->name);
        if($add_categ->save()){
            return redirect('/solution/index')->with('success','Category created succssfully!');
        }
        else{
            return redirect('/solution/index')->with('error','something went wrong!');

        }
    }
    }



    //subpages
    public function subPage(){
        $subpages = SolutionSubPage::join('page_categories','page_categories.id','=','solution_sub_pages.page_categories_id')->select('solution_sub_pages.*','page_categories.name as parent_name')->get();
        // dd($subpages);
        return view('admin.cms.solution.sub-pages',compact('subpages'));
    }
    public function subCreate (){
        $categories = PageCategory::orderby('created_at','DESC')->get();
        return view('admin.cms.solution.add-sub-page',compact('categories'));
    }

    public function sobStore(Request $request){
        
        $check_page = SolutionSubPage::where('title',$request->title)->first();
        if($check_page !=null){
            return redirect('/solution/sub-create')->with('error','page name already exist!');
        }
        else{
            $categ_name = PageCategory::find($request->page_categories_id);
            $categ_name = $categ_name->name;
        $add_categ = new SolutionSubPage;
        if($request->featured_image){
            $file = $request->file('featured_image');
            $filename = str_replace(' ', '_', strtolower($request->title)).'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$categ_name.'/'.$request->title.'/';
            $file->move($destinationPath,$filename);
            $add_categ->fetaured_image = $filename;
        }
        if($request->video){
            $file = $request->file('video');
            $filename = str_replace(' ', '_', strtolower($request->title)).'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$categ_name.'/'.$request->title.'/';
            $file->move($destinationPath,$filename);
            $add_categ->video = $filename;
        }
        $add_categ->title = $request->title ;
        $add_categ->description = $request->description;
        $add_categ->page_categories_id = $request->page_categories_id;
        $add_categ->slug = Str::slug($request->title);
        if($add_categ->save()){
            return redirect('/solution/sub')->with('success','Category created succssfully!');
        }
        else{
            return redirect('/solution/sub-create')->with('error','something went wrong!');
        }
    }
    }
}
