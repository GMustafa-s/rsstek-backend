<?php

namespace App\Http\Controllers\cms\solution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageCategory;
use App\Models\SolutionSubPage;
use App\Models\SolutionSections;
use Illuminate\Support\Str;

class SolutionController extends Controller
{
     public function showSlug($slug)
    {
        $page = PageCategory::whereSlug($slug)->first();
        if($page == null){
            abort(404);
        }
        else{
            $sub_pages = SolutionSubPage::where('page_categories_id',$page->id)->get();
            return view('frontend.business.index',compact('page','sub_pages'));
        }
    }

    public function showSubSlug($slg,$slug)
    {
        
        $page = SolutionSubPage::whereSlug($slug)->first();
      
        if($page == null){
            abort(404);
        }
        else{
            $other_pages = SolutionSubPage::where('page_categories_id',$page->page_categories_id)->where('id','!=',$page->id)->get();
            $main_page = PageCategory::find($page->page_categories_id);
            $sections = SolutionSections::where('solution_sub_pages_id',$page->id)->get();
           
            return view('frontend.business.single-page',compact('page','other_pages','main_page','sections'));
        }
    }
    //
    public function index(){
        $category = PageCategory::orderby('created_at','DESC')->get();
         $sub_category = SolutionSubPage::all();
        return view('admin.cms.solution.home',compact('category','sub_category'));
       
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
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$request->name.'//';
            $file->move($destinationPath,$filename);
            $add_categ->bg_image = $filename;
        }
        $add_categ->name = $request->name ;
        $add_categ->description = $request->description ;
        $add_categ->slug = Str::slug($request->name);
        if($add_categ->save()){
            return redirect('/solution')->with('success','solution created succssfully!');
        }
        else{
            return redirect('/solution')->with('error','something went wrong!');
        }
    }
    }

    public function edit($id){
        $category = PageCategory::find($id);
        return view('admin.cms.solution.edit-page',compact('category')); 

    }

    public function update(Request $request, $id){
        $check_page = PageCategory::where('name',$request->name)->where('id','!=',$id)->first();
        if($check_page !=null){
            return redirect()->back()->with('error','page name already exist!');
        }
        $category = PageCategory::find($id);
        if($request->bg_image){
            $file = $request->file('bg_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$request->name.'//';
            $file->move($destinationPath,$filename);
            $category->bg_image = $filename;
        }
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        if($category->save()){
            return redirect('/solution')->with('success','solution updated successfully!');
        }
        else{
            return redirect('/solution')->with('error','Something went Wrong!');
        }
        
    }

    public function destroy($id){
        $category = PageCategory::find($id);
        $sub_pages = SolutionSubPage::where('page_categories_id',$id)->get();
        foreach($sub_pages as $sub_page){
            $sub_page->delete();
        }
        if($category->delete()){
            return redirect('/solution')->with('success','solution deleted successfully!');
        }
    }
    //subpages
    public function subPage(){
        $subpages = SolutionSubPage::join('page_categories','page_categories.id','=','solution_sub_pages.page_categories_id')->select('solution_sub_pages.*','page_categories.name as parent_name','page_categories.slug as parent_slug')->get();

        return view('admin.cms.solution.sub-pages',compact('subpages'));
    }
    public function subCreate (){
        $categories = PageCategory::orderby('created_at','DESC')->get();
        return view('admin.cms.solution.add-sub-page',compact('categories'));
    }

    public function sobStore(Request $request){
      
        $check_page = SolutionSubPage::where('title',$request->title)->first();
        if($check_page !=null){
            return redirect('/solution/sub-page/create')->with('error','page name already exist!');
        }
        else{
            $categ_name = PageCategory::find($request->page_categories_id);
            $categ_name = $categ_name->name;
        $add_categ = new SolutionSubPage;
        if($request->featured_image){
            $file = $request->file('featured_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$categ_name.'/'.$request->title.'/';
            $file->move($destinationPath,$filename);
            $add_categ->fetaured_image = $filename;
        }
        if($request->video){
            $file = $request->file('video');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$categ_name.'/'.$request->title.'/';
            $file->move($destinationPath,$filename);
            $add_categ->video = $filename;
        }
        $add_categ->title = $request->title ;
        $add_categ->description = $request->description;
        $add_categ->page_categories_id = $request->page_categories_id;
        $add_categ->slug = Str::slug($request->title);
      
        if($add_categ->save()){
            if($request->title_1 && $request->description_1 ){
                $section_1 = $this->addSection($add_categ->id,$request->title_1,$request->description_1);         
            }
            if($request->title_2 && $request->description_2 ){
                $section_2 = $this->addSection($add_categ->id,$request->title_2,$request->description_2);         
            }
            if($request->title_3 && $request->description_3 ){
                $section_3 = $this->addSection($add_categ->id,$request->title_3,$request->description_3);         
            }
            return redirect('/solution/sub-page')->with('success','sub solution created succssfully!');
        }
        else{
            return redirect('/solution/create')->with('error','something went wrong!');
        }
    }
    }

    public function subEdit($id){
        $sub_page = SolutionSubPage::find($id);
        $category = PageCategory::where('id',$sub_page->page_categories_id)->first();
        $categories = PageCategory::where('id','!=',$category->id)->get();
        $sections = SolutionSections::where('solution_sub_pages_id',$id)->get();
        return view('admin.cms.solution.edit-sub-page',compact('sub_page','category','categories','sections')); 

    }

    public function subUpdate(Request $request,$id){
       
        $sub_page = SolutionSubPage::find($id);
        $sub_page->title =$request->title;
        $sub_page->description =$request->description;
        if($request->page_categories_id){
            $sub_page->page_categories_id =$request->page_categories_id;
        }
        if($request->featured_image){
            $categ_name = PageCategory::find($sub_page->page_categories_id);
            $categ_name = $categ_name->name;

            $file = $request->file('featured_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$categ_name.'/'.$request->title.'/';
            $file->move($destinationPath,$filename);
            $add_categ->fetaured_image = $filename;
        }

        if($request->video){
            $categ_name = PageCategory::find($sub_page->page_categories_id);
            $categ_name = $categ_name->name;
            $file = $request->file('video');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/'.$categ_name.'/'.$request->title.'/';
            $file->move($destinationPath,$filename);
            $add_categ->video = $filename;
        }
        if($sub_page->save()){
          
            // updating old sections

            if($request->title_1 && $request->description_1 ){
      
                if($request->section_id_1){
                    $section_1 = $this->updateSection($request->section_id_1,$request->title_1,$request->description_1);
                }     
            }
            if($request->title_2 && $request->description_2 ){
      
                if($request->section_id_2){
                    $section_2 = $this->updateSection($request->section_id_2,$request->title_2,$request->description_2);
                }     
            }

            if($request->title_3 && $request->description_3 ){
      
                if($request->section_id_3){
                    $section_3 = $this->updateSection($request->section_id_3,$request->title_3,$request->description_3);
                }     
            }

            // Adding new sections
            if($request->title_5 && $request->description_5){
               
                $section_1 = $this->addSection($sub_page->id,$request->title_5,$request->description_5);
            }
            if($request->title_6 && $request->description_6){
               
                $section_2 = $this->addSection($sub_page->id,$request->title_6,$request->description_6);
            }
            if($request->title_7 && $request->description_7){
               
                $section_3 = $this->addSection($sub_page->id,$request->title_7,$request->description_7);
            }
          
            // if($request->title_2 && $request->description_2 ){
            //     $section_2 = $this->updateSection($request->section_id_2,$request->title_2,$request->description_2);         
            // }
            // if($request->title_3 && $request->description_3 ){
            //     $section_3 = $this->updateSection($request->section_id_1,$request->title_3,$request->description_3);         
            // }
            return redirect('/solution/sub-page')->with('success','sub solution updated successfully!');
        }

    }

    public function subDelete($id){
        $sub_page = SolutionSubPage::find($id);
        $section = SolutionSections::where('solution_sub_pages_id',$id)->first();
        if($section !=null){
            $section->delete();
        }
    if($sub_page->delete()){
        return redirect('/solution/sub-page')->with('success','sub solution  deleted successfully!');
    }
    }

    public function addSection($sub_categ_id,$title,$description){
       $section = new SolutionSections;
       $section->solution_sub_pages_id =$sub_categ_id;
       $section->title =$title;
       $section->body =$description;
        if( $section->save()){
            return $section;
        }
    }

    public function updateSection($id,$title,$body){
        $section = SolutionSections::find($id);
        $section->title =$title;
        $section->body =$body;
         if( $section->save()){
             return redirect('/solution/sub-page')->with('success','section updated  successfully!');
         }
    }

    public function deleteSection($id){
        $section = SolutionSections::find($id);
        if( $section->delete()){
            return redirect('/solution/sub-page')->with('success','section deleted  successfully!');
        }
    }
}
