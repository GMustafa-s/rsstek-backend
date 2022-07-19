<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CameraComparePage;

class CameraComparePageController extends Controller
{
    //
    public function editCameraCompare($id){
        $page = CustomPage::find($id);
        $data = CameraComparePage::first();
        return view('admin.cms.custome-pages.edit-camera-compare', compact('page', 'data'));
    }
    public function cameraCompareUpdate(Request $request){
        $data = CameraComparePage::first();
        if($request->header_heading){
            $data->header_heading = $request->header_heading;
        }
        if($request->header_description){
            $data->header_description = $request->header_description;
        }
        if($request->file('bg_image')){
             //delete file form folder functionality
            //  $desti_4 = public_path('frontend').'/images/common-pages/our-work/'.$data->image;
            //  if(File::exists($desti_4)){
            //      File::delete($desti_4);
            //  }
            $file = $request->file('bg_image');
            $filename = rand().'.'. $file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images';
            $file->move($destinationPath, $filename);
            $data->bg_image = $filename;
        }
        if($request->product_crousal_heading){
            $data->product_crousal_heading = $request->product_crousal_heading;
        }
        if($request->table_heading){
            $data->table_heading = $request->table_heading;
        }
        if($request->table_description){
            $data->table_description = $request->table_description;
        }
        if($data->save()){
            return redirect()->back()->with('success', 'Camera compare page has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
