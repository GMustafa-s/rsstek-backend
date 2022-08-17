<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\Demo;
use App\Models\CustomPage;
use App\Models\DemoSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DemoController extends Controller
{
    //
    public function editDemo(){
        $page = CustomPage::find(6);
        $data = Demo::first();
        $demo_sections = DemoSection::all();

        return view('admin.cms.custome-pages.edit-demo', compact('page', 'data', 'demo_sections'));
    }
    //demo heading update
    public function demoHeadingUpdate(Request $request){
        $data = Demo::first();
        if($request->main_heading){
            $data->main_heading = $request->main_heading;
        }
        if($request->main_description){
            $data->main_description = $request->main_description;
        }
        if($data->save()){
            return redirect()->back()->with('success', 'Demo Page heading has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    //get demo section heading update
    public function getDemoHeadingUpdate(Request $request){
        $data = Demo::first();
        if($request->demo_section_heading){
            $data->demo_section_heading = $request->demo_section_heading;
        }
        if($data->save()){
            return redirect()->back()->with('success', 'Get demo section heading has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    //get demo section update
    public function getDemoUpdate(Request $request){
        // dd('here');
        $demo = new DemoSection;
        if($request->text){
            $demo->text = $request->text;
        }
        if($request->file('image')){
            //delete file form folder functionality
           //  $desti_4 = public_path('frontend').'/images/common-pages/our-work/'.$data->image;
           //  if(File::exists($desti_4)){
           //      File::delete($desti_4);
           //  }
           $file = $request->file('image');
           $filename = rand().'.'. $file->getClientOriginalExtension();
           $destinationPath = public_path('frontend').'/images/Solutions/demo-section-icon/';
           $file->move($destinationPath, $filename);
           $demo->image = $filename;
       }
       if($demo->save()){
           return redirect()->back()->with('success', 'Get demo section has been updated successfully');
       }else{
           return redirect()->back()->with('error', 'Something went wrong!');
       }
    }

    //get demo section update functionality
    public function getDemoDelete($id){
        // dd('here');
        $data = DemoSection::find($id);
        if($data->delete()){
            return redirect()->back()->with('success', 'Get demo Section row has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    // new update from client for editing Button our work section
    public function getDemoNewUpdate(Request $request, $id){
        $data = DemoSection::find($id);
        if($request->text){
            $data->text = $request->text;
        }
        if($request->image){
            $path = public_path('frontend').'/images/Solutions/demo-section-icon/'.$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/Solutions/demo-section-icon/';
            $file->move($destinationPath,$filename);
            $data->image = $filename;
        }
        if($data->save()){

            return redirect()->back()->with('success', 'Get demo section updated successfully');
        }
    }

    //regular security needs section update functionality
    public function securityNeedsUpdate(Request $request){
        $sn = Demo::first();
        if($request->security_section_heading){
            $sn->security_section_heading = $request->security_section_heading;
        }
        if($request->security_section_description){
            $sn->security_section_description = $request->security_section_description;
        }
        if($request->file('security_section_image')){
            //delete file form folder functionality
           //  $desti_4 = public_path('frontend').'/images/common-pages/our-work/'.$data->image;
           //  if(File::exists($desti_4)){
           //      File::delete($desti_4);
           //  }
           $file = $request->file('security_section_image');
           $filename = rand().'.'. $file->getClientOriginalExtension();
           $destinationPath = public_path('frontend').'/images/Solutions/regular-security-needs-section/';
           $file->move($destinationPath, $filename);
           $sn->security_section_image = $filename;
       }
        if($sn->save()){
            return redirect()->back()->with('success', 'Regular security needs section updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
