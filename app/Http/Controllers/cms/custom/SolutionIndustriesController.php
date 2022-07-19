<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Models\SolutionIndustries;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SolutionIndustriesController extends Controller
{
    //frontendsolution/index
    public function solutionsIndustries($id){
        $page = CustomPage::find($id);
        $data = SolutionIndustries::first();
       return view('admin.cms.custome-pages.edit-solution-industries', compact('page', 'data'));
    }

    // main header details update
    public function solutionsIndustriesUpdate(Request $request){
        // dd($request->all());
        $data = SolutionIndustries::first();
        if($request->header_heading){
            $data->header_heading = $request->header_heading;
        }
        if($request->header_description){
            $data->header_description = $request->header_description;
        }
        if($request->file('bg_image')){
            // delete file form folder functionality
            $desti_4 = public_path('frontend').'/images/Solutions/'.$data->bg_image;
            if(File::exists($desti_4)){
                File::delete($desti_4);
            }
           $file = $request->file('bg_image');
           $filename = rand().'.'. $file->getClientOriginalExtension();
           $destinationPath = public_path('frontend').'/images/Solutions/';
           $file->move($destinationPath, $filename);
           $data->bg_image = $filename;
       }
        if($data->save()){
            return redirect()->back()->with('success', 'Solution Industries page has been updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
