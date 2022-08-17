<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\Cases;
use App\Models\OurWork;
use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CasesController extends Controller
{
    //
    public function editCases(){
        $page = CustomPage::find(5);
        $data = Cases::first();
        $our_works = OurWork::all();
        // dd($our_works);

        return view('admin.cms.custome-pages.edit-cases', compact('page', 'data', 'our_works'));
    }

    //header update
    public  function headerUpdate(Request $request){
        $data = Cases::first();
        if($request->cases_heading){
            $data->cases_heading = $request->cases_heading;
        }
        if($request->cases_description){
            $data->cases_description = $request->cases_description;
        }
        if($data->save()){
            return redirect()->back()->with('success', 'Cases heading has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    //ourwork section heading update functionality
    public function ourWorkSectionHeadingUpdate(Request $request){
        $data = Cases::first();
        // dd($data);
        if($request->ourwork_section_heading){
            $data->ourwork_section_heading = $request->ourwork_section_heading;
        }
        if($data->save()){
            return redirect()->back()->with('success', 'Our Work Section heading has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    //ourwork section update functionality
    public function ourWorkSectionUpdate(Request $request){
        $data = OurWork::first();
        if($request->name){
            $data->name = $request->name;
        }
        if($request->location){
            $data->location = $request->location;
        }
        if($request->file('image')){
             //delete file form folder functionality
            //  $desti_4 = public_path('frontend').'/images/common-pages/our-work/'.$data->image;
            //  if(File::exists($desti_4)){
            //      File::delete($desti_4);
            //  }
            $file = $request->file('image');
            $filename = rand().'.'. $file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/common-pages/our-work/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->back()->with('success', 'Our Work Section heading has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    //ourwork section update functionality
    public function ourWorkSectionDelete(Request $request, $id){
        // dd('here');
        $data = OurWork::find($id);
        if($data->delete()){
            return redirect()->back()->with('success', 'Our Work Section heading row has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

     // new update from client for editing Button our work section
     public function ourWorkNewUpdate(Request $request, $id){
        $data = OurWork::find($id);
        if($request->name){
            $data->name = $request->name;
        }
        if($request->location){
            $data->location = $request->location;
        }
        if($request->image){
            $path = public_path('frontend').'/images/common-pages/our-work/'.$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/common-pages/our-work/';
            $file->move($destinationPath,$filename);
            $data->image = $filename;
        }
        if($data->save()){

            return redirect()->back()->with('success', 'Our work section updated successfully');
        }
    }


}
