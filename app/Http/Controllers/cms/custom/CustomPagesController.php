<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\HomePage;
use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Models\AboutUsFeature;
use App\Models\NewCustomePage;
use App\Models\whatWeUseImage;
use App\Models\HomeFeatureSection;
use App\Models\HomeChoiceUsSection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\HomePageBusinessSection;
use App\Models\HomePageroadcastSection;

class CustomPagesController extends Controller
{

    public function index(){
        $pages = CustomPage::all();
        // dd($pages);
        return view('admin.cms.custome-pages.index',compact('pages'));
    }

    public function edit($id){
        if($id == 2){
            return redirect()->route('cms.custome.edit.aboutus', $id);
        }
        else if($id == 3){
            return redirect()->route('cms.custome.edit.contactus', $id);

        }
        else if($id == 4){
            return redirect()->route('cms.custome.edit.integration', $id);

        }
        else if($id == 5){
            return redirect()->route('cms.custome.edit.cases', $id);

        }
        else if($id == 6){
            return redirect()->route('cms.custome.edit.demo', $id);

        }
        $page = CustomPage::find($id);
        $home_page_data =  HomePage::first();
        $home_page_wwu = whatWeUseImage::get();
        $aboutus_features = AboutUsFeature::get();
        $business = HomePageBusinessSection::get();
        $broadcasts = HomePageroadcastSection::get();
        $feature = HomeFeatureSection::find(1);
        $choieUs = HomeChoiceUsSection::find(1);
        return view('admin.cms.custome-pages.edit',compact('page', 'feature', 'choieUs','home_page_data','home_page_wwu','aboutus_features','business','broadcasts'));
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
    public function homeHeaderUpdate(Request $request){
        $page = HomePage::first();
        $page->header_heading = $request->header_heading;
        $page->header_description = $request->header_description;
        if($page->save()){
            return redirect()->route('cms.custom.index')->with('success','Page Updated Successfully!');
        }
    }

    public function homeHeroSectionUpdate(Request $request){
        $page = HomePage::first();
        $page->hero_section_video = $request->hero_section_video;
        if($page->save()){
            return redirect()->route('cms.custom.index')->with('success','Page Updated Successfully!');
        }
    }

    public function homeWhatWeUseUpdate(Request $request){
        $page = HomePage::first();
        $page->what_we_use_heading = $request->what_we_use_heading;
        if($page->save()){
            return redirect()->route('cms.custom.index')->with('success','Page Updated Successfully!');
        }
    }

    public function homeWhatWeUseUpadd(Request $request){
        $wwu = new whatWeUseImage;
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/custompages/home/what-we-use/';
            $file->move($destinationPath,$filename);
            $wwu->image = $filename;
            if($wwu->save()){
                return redirect()->back()->with('success', 'added successfully');
            }

    }
    public function homeWhatWeUseDelete($id){
        $wwu = whatWeUseImage::find($id);
        if($wwu->delete()){
            return redirect()->back()->with('success', 'deleted successfully');
        }

    }

    public function aboutusTitle(Request $request){
        $home_page_data =  HomePage::first();
        $home_page_data->about_us_heading =$request->about_us_heading;
        if($home_page_data->save()){
            return redirect()->back()->with('success', 'updated successfully');
        }

    }
    public function aboutusAdd(Request $request){
        $feature = new AboutUsFeature;
        $feature->title = $request->title;
        $feature->description = $request->description;
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/custompages/home/about-features/';
            $file->move($destinationPath,$filename);
            $feature->image = $filename;
        }
        if($feature->save()){

            return redirect()->back()->with('success', 'added successfully');
        }


    }

    public function aboutusDelete($id){
        $feature = AboutUsFeature::find($id);
        if($feature->delete()){
            return redirect()->back()->with('success', 'deleted successfully');
        }
    }

    public function faturesUpdate(Request $request){
        $feature =HomePage::first();
        $feature->features_heading = $request->features_heading;
        $feature->features_description = $request->features_description;
        if($request->features_image){
            $file = $request->file('features_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images';
            $file->move($destinationPath,$filename);
            $feature->features_image = $filename;
    }
    if($feature->save()){
        return redirect()->back()->with('success', 'updated successfully');
    }

}
public function busniessTitle(Request $request){
    $home_page_data =  HomePage::first();
    $home_page_data->business_heding =$request->business_heding;
    if($home_page_data->save()){
        return redirect()->back()->with('success', 'updated successfully');
    }

}
public function busniessadd(Request $request){
    $feature = new HomePageBusinessSection;
    $feature->title = $request->title;
    $feature->description = $request->description;
    if($request->image){
        $file = $request->file('image');
        $filename = rand().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('frontend').'/images/custompages/home/bisiness/';
        $file->move($destinationPath,$filename);
        $feature->image = $filename;
    }
    if($feature->save()){
        return redirect()->back()->with('success', 'added successfully');
    }
}
    public function businessDelete($id){
        $feature = HomePageBusinessSection::find($id);
        if($feature->delete()){
            return redirect()->back()->with('success', 'deleted successfully');
        }
    }

    public function broadcastTitle(Request $request){
        $home_page_data =  HomePage::first();
        $home_page_data->broadcast_heding = $request->broadcast_heding;
        if($home_page_data->save()){
            return redirect()->back()->with('success', 'updated successfully');
        }

    }

    public function broadcastadd(Request $request){
        $feature = new HomePageroadcastSection;
        $feature->cam = $request->cam;
        $feature->temperature = $request->temperature;
        $feature->location = $request->location;
        $feature->degree = $request->degree;
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/custompages/home/broadcast/';
            $file->move($destinationPath,$filename);
            $feature->image = $filename;
        }
        if($feature->save()){
            return redirect()->back()->with('success', 'added successfully');
        }
    }
    public function broadcastDelete($id){
        $feature = HomePageroadcastSection::find($id);
        if($feature->delete()){
            return redirect()->back()->with('success', 'deleted successfully');
        }
    }

    //custome page
    public function userCustomePage(){
        $custome_pages = NewCustomePage::all();
        return view('admin.cms.custome-pages.user-custome-page-index', compact('custome_pages'));
    }
    //add new custome page
    public function addNewCustomePage(){

        return view('admin.cms.custome-pages.add-custome-page');
    }
    //store new custome page
    public function storeNewCustomePage(Request $request){
        $data = new NewCustomePage;
        if($request->page_title){
            $data->page_title = $request->page_title;
        }
        if($request->meta_name){
            $data->meta_name = $request->meta_name;
        }
        if($request->meta_description){
            $data->meta_description = $request->meta_description;
        }
        if($request->header_heading){
            $data->header_heading = $request->header_heading;
        }
        if($request->header_description){
            $data->header_description = $request->header_description;
        }
        if($request->bg_image){
            $file = $request->file('bg_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/user-custome-pages/';
            $file->move($destinationPath, $filename);
            $data->bg_image = $filename;
        }
        if($request->body){
            $data->body = $request->body;
        }
        if($data->save()){
            return redirect()->route('user.custome.page')->with('success', 'New Custome Page added successfully');

        }
        else{
            return redirect()->route('user.custome.page')->with('error', 'Something went wrong!');

        }
    }
    //edit custome page
    public function editNewCustomePage($id){
        $custome_page =  NewCustomePage::find($id);
        return view('admin.cms.custome-pages.edit-user-custome-page', compact('custome_page'));
    }
    //update user custome page
    public function updateNewCustomePage(Request $request, $id){

        $data =  NewCustomePage::find($id);
        if($request->page_title){
            $data->page_title = $request->page_title;
        }
        if($request->meta_name){
            $data->meta_name = $request->meta_name;
        }
        if($request->meta_description){
            $data->meta_description = $request->meta_description;
        }
        if($request->header_heading){
            $data->header_heading = $request->header_heading;
        }
        if($request->header_description){
            $data->header_description = $request->header_description;
        }
        if($request->bg_image != null){
             //delete file form folder functionality
             $path =  public_path('frontend').'/images/user-custome-pages/'.
             $data->bg_image;
             if(File::exists($path)){
                 File::delete($path);
             }
            $file = $request->file('bg_image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/user-custome-pages/';
            $file->move($destinationPath, $filename);
            $data->bg_image = $filename;
        }
        if($request->body){
            $data->body = $request->body;
        }
        if($data->save()){
            return redirect()->route('user.custome.page')->with('success', $request->page_title.' custome Page updated successfully');

        }
        else{
            return redirect()->route('user.custome.page')->with('error', 'Something went wrong!');

        }
    }

    //delete user custome page
    public function deleteNewCustomePage($id){
        $data = NewCustomePage::find($id);
        if($data->delete()){
            return redirect()->route('user.custome.page')->with('success', '$data->page_title'. ' custome Page delete successfully');
        }else{
            return redirect()->route('user.custome.page')->with('error', 'Something went wrong!');

        }
    }
}
