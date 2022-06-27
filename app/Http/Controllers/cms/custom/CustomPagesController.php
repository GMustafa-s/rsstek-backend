<?php

namespace App\Http\Controllers\cms\custom;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use App\Models\HomeFeatureSection;
use App\Http\Controllers\Controller;
use App\Models\HomeChoiceUsSection;

class CustomPagesController extends Controller
{

    public function index(){
        $pages = CustomPage::all();
        // dd($pages);
        return view('admin.cms.custome-pages.index',compact('pages'));
    }

    public function edit($id){
        $page = CustomPage::find($id);
        $feature = HomeFeatureSection::find(1);
        $choieUs = HomeChoiceUsSection::find(1);
        return view('admin.cms.custome-pages.edit',compact('page', 'feature', 'choieUs'));
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

    //home page feature section
    public function homeFeatureSection(Request $request)
    {
        $feature_data = HomeFeatureSection::find(1);
        if($feature_data ==null){
            $feature_data = new HomeFeatureSection;
            }
            if($request->feature_heading){
                $feature_data->feature_heading = $request->feature_heading;
            }
            if($request->feature_description){
            $feature_data->feature_description = $request->feature_description;
            }
            else{
            $feature_data->description = "";

            }

        if($request->feature_image !=null){
         $file = $request->file('feature_image');
         $filename = rand().'.'.$file->getClientOriginalExtension();
         $destinationPath = public_path('frontend').'/images/home_feature_section/';
         $file->move($destinationPath,$filename);
         $feature_data->feature_image = $filename;
         }
        if($feature_data->save())
        {
            return redirect()->back()->with('success', 'Home Feature section updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');

        }


    }

    //home page Choice us section

    public function homeChoiceUsSection(Request $request)
    {
        dd($request->all());
        $choiceusData = HomeChoiceUsSection::find(1);
        if($choiceusData ==null){
            $choiceusData = new HomeChoiceUsSection;
            }
            if($request->choice_us_heading){
                $choiceusData->choice_us_heading = $request->choice_us_heading;
            }
            if($request->choice_us_sub_heading){
            $choiceusData->choice_us_sub_heading = $request->choice_us_sub_heading;
            }
            if($request->choice_us_description){
            $choiceusData->choice_us_description = $request->choice_us_description;
            }
            else{
            $choiceusData->description = "";

            }

        if($request->choice_us_image !=null){
         $file = $request->file('choice_us_image');
         $filename = rand().'.'.$file->getClientOriginalExtension();
         $destinationPath = public_path('frontend').'/images/home_choiceus_section/';
         $file->move($destinationPath,$filename);
         $choiceusData->choice_us_image = $filename;
         }
        if($choiceusData->save())
        {
            return redirect()->back()->with('success', 'Home "Why Choice us" section updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');

        }


    }

}
