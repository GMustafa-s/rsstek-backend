<?php

namespace App\Http\Controllers\cms\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomPage;

class CustomPagesController extends Controller
{
    
    public function index(){
        $pages = CustomPage::all();
        return view('admin.cms.custome-pages.index',compact('pages'));
    }

    public function edit($id){
        $page = CustomPage::find($id);
        return view('admin.cms.custome-pages.edit',compact('page'));
    }

    public function update(Request $request,$id){
        $page = CustomPage::find($id);
        $page->page_title = $request->page_title;
        $page->meta_name = $request->meta_name;
        $page->meta_description= $request->meta_description;
        if($page->save()){
            return redirect()->route('cms.custom.index')->with('success','Page Updated Successfully!');
        }
    }

}
