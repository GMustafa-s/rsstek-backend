<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\Camera;
use App\Models\CustomPage;
use App\Models\Integration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\IntegrationCommunicationToolsSection;
use App\Models\IntegrationControlSection;
use App\Models\IntegrationManagementSection;
use App\Models\IntegrationOutputSection;
use App\Models\IntegrationProviderSection;
use App\Models\IntegrationSecondCameraSection;
use Illuminate\Support\Str;

class IntegrationController extends Controller
{
    //
    public function editIntegration(){
        $page = CustomPage::find(4);

        $data = Integration::find(1);
        $cameras = Camera::all();
        $second_camera_sections = IntegrationSecondCameraSection::all();
        $control_sections = IntegrationControlSection::all();
        $outputs_sections = IntegrationOutputSection::all();
        $management_sections = IntegrationManagementSection::all();
        $providers_sections = IntegrationProviderSection::all();
        $communication_tools_sections = IntegrationCommunicationToolsSection::all();

        return view('admin.cms.custome-pages.edit-integrations', compact('page', 'data', 'cameras', 'second_camera_sections', 'control_sections', 'outputs_sections','management_sections','providers_sections','communication_tools_sections'));
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
    //camera section update
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
    //second camera section heading update
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

    //second camera section create
    public function secondCameraSectionCreate(Request $request){
        $data = new IntegrationSecondCameraSection;

        if($request->name){
             $data->name = $request->name;
        }
        if($request->description){
             $data->description = $request->description;
        }
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/integration/second-camera-section/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->back()->with('success' , 'Second camera section added successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }
     }

    //second camera section delete
    public function secondCameraSectionDelete($id){
       $data =  IntegrationSecondCameraSection::find($id);
       if($data->delete()){
            return redirect()->back()->with('success' , 'Second camera section deleted successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }
    }
    //control section heading update
    public function controlSectionUpdate(Request $request){
        $data =  Integration::find(1);
        if($data != null){
            if($request->control_heading){
                $data->control_heading = $request->control_heading;
            }
        }
        if($data->save()){
             return redirect()->back()->with('success' , 'Control section heading updated successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }
     //control section create
    public function controlSectionCreate(Request $request){
        $data = new IntegrationControlSection();

        if($request->name){
             $data->name = $request->name;
        }
        if($request->description){
             $data->description = $request->description;
        }
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/integration/control-section/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->back()->with('success' , 'Control section added successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }
     }
     //control section delete
    public function controlSectionDelete($id){
        $data =  IntegrationControlSection::find($id);
        if($data->delete()){
             return redirect()->back()->with('success' , 'Control section deleted successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }

      //outputs section heading update
    public function outputsSectionUpdate(Request $request){
        $data =  Integration::find(1);
        if($data != null){
            if($request->outputs_heading){
                $data->outputs_heading = $request->outputs_heading;
            }
        }
        if($data->save()){
             return redirect()->back()->with('success' , 'Outputs section heading updated successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }
     //outputs section create
    public function outputsSectionCreate(Request $request){
        $data = new IntegrationOutputSection();

        if($request->name){
             $data->name = $request->name;
        }
        if($request->description){
             $data->description = $request->description;
        }
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/integration/outputs-section/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->back()->with('success' , 'Outputs section added successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }
     }
     //outputs section delete
    public function outputsSectionDelete($id){
        $data =  IntegrationOutputSection::find($id);
        if($data->delete()){
             return redirect()->back()->with('success' , 'Outputs section deleted successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }

     //management section heading update
    public function managementSectionUpdate(Request $request){
        $data =  Integration::find(1);
        if($data != null){
            if($request->management_heading){
                $data->management_heading = $request->management_heading;
            }
        }
        if($data->save()){
             return redirect()->back()->with('success' , 'Management section heading updated successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }
     //management section create
    public function managementSectionCreate(Request $request){
        $data = new IntegrationManagementSection();

        if($request->name){
             $data->name = $request->name;
        }
        if($request->description){
             $data->description = $request->description;
        }
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/integration/management-section/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->back()->with('success' , 'Management section added successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }
     }
     //management section delete
    public function managementSectionDelete($id){
        $data =  IntegrationManagementSection::find($id);
        if($data->delete()){
             return redirect()->back()->with('success' , 'Management section deleted successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }

     //providers section heading update
    public function providersSectionUpdate(Request $request){
        $data =  Integration::find(1);
        if($data != null){
            if($request->providers_heading){
                $data->providers_heading = $request->providers_heading;
            }
        }
        if($data->save()){
             return redirect()->back()->with('success' , 'Providers section heading updated successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }
     //providers section create
    public function providersSectionCreate(Request $request){
        $data = new IntegrationProviderSection();

        if($request->name){
             $data->name = $request->name;
        }
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/integration/providers-section/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->back()->with('success' , 'Providers section added successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }
     }
     //providers section delete
    public function providersSectionDelete($id){
        $data =  IntegrationProviderSection::find($id);
        if($data->delete()){
             return redirect()->back()->with('success' , 'Providers section deleted successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }

      //communication tools section heading update
    public function communicationToolsSectionUpdate(Request $request){
        $data =  Integration::find(1);
        if($data != null){
            if($request->communication_tools_heading){
                $data->communication_tools_heading = $request->communication_tools_heading;
            }
        }
        if($data->save()){
             return redirect()->back()->with('success' , 'Communication tools section heading updated successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }
     //communication tools section create
    public function communicationToolsSectionCreate(Request $request){
        $data = new IntegrationCommunicationToolsSection();

        if($request->name){
             $data->name = $request->name;
        }
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/integration/communication-tools-section/';
            $file->move($destinationPath, $filename);
            $data->image = $filename;
        }
        if($data->save()){
            return redirect()->back()->with('success' , 'Communication section added successfully');
       }else{
        return redirect()->back()->with('error', 'Something went wrong!');

        }
     }
     //communication tools section delete
    public function communicationToolsSectionDelete($id){
        $data =  IntegrationCommunicationToolsSection::find($id);
        if($data->delete()){
             return redirect()->back()->with('success' , 'Communication section deleted successfully');
        }else{
         return redirect()->back()->with('error', 'Something went wrong!');

         }
     }





}
