<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\Camera;
use App\Models\CustomPage;
use App\Models\Integration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\IntegrationSecondCameraSection;

class IntegrationController extends Controller
{
    //
    public function editIntegration(){
        $page = CustomPage::find(4);
        
        $data = Integration::find(1);
        $cameras = Camera::all();
        $second_camera_sections = IntegrationSecondCameraSection::all();

        return view('admin.cms.custome-pages.edit-integrations', compact('page', 'data', 'cameras', 'second_camera_sections'));
    }

    //integration header update 
    public function headerUpdate(Request $request){
       $data =  Integration::find(1);
       if($data != null){
           if($request->header_heading){
               $data->header_heading = $request->header_heading;
           }
      
           if($request->header_description){
               $data->header_description = $request->header_description;
           }
       }
       if($data->save()){
            return redirect()->back()->with('success' , 'Integration heading section updated successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }

    }
    //integration camera section update 
    public function cameraSectionUpdate(Request $request){
       $data =  Integration::find(1);
       if($data != null){
           if($request->camera_heading){
               $data->camera_heading = $request->camera_heading;
           }
      
           if($request->camera_description){
               $data->camera_description = $request->camera_description;
           }
       }
       if($data->save()){
            return redirect()->back()->with('success' , 'Integration camera section updated successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }

    }
    //integration second camera section update 
    public function secondCameraSectionUpdate(Request $request){
       $data =  Integration::find(1);
       if($data != null){
           if($request->second_camera_heading){
               $data->second_camera_heading = $request->second_camera_heading;
           }
       }
       if($data->save()){
            return redirect()->back()->with('success' , 'Second camera section heading updated successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }

    }
    //integration second camera section delete 
    public function secondCameraSectionDelete($id){
       $data =  IntegrationSecondCameraSection::find($id);
       if($data->delete()){
            return redirect()->back()->with('success' , 'Second camera section deleted updated successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }

    }
}
