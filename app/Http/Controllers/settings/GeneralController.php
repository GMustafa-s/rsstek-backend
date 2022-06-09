<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\SocialLink;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generals = GeneralSetting::first();
        $social_links = SocialLink::all();
        return  view('admin.settings.general',compact('generals','social_links'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createSiteInfo(Request $request){
        $site_data = GeneralSetting::find(1);
        if($site_data ==null){
        $site_data = new GeneralSetting;
        }
        if($request->site_title){
            $site_data->site_title = $request->site_title;
        }
        if($request->description){
        $site_data->description = $request->description;
        }
        else{
        $site_data->description = "";

        }
        if($request->favicon !=null){
            $file = $request->file('favicon');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/fevicon/';
            $file->move($destinationPath,$filename);
            $site_data->favicon = $filename;
        }
        if($request->logo !=null){
            $file = $request->file('logo');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images';
            $file->move($destinationPath,$filename);
            $site_data->logo = $filename;
        }
        if($site_data->save()){
            return redirect()->back();

        }
    }

        public function createContactInfo(Request $request){
            $site_data = GeneralSetting::find(1);
            if($site_data ==null){
            $site_data = new GeneralSetting;
            }
            if($request->phone){
                $site_data->phone = $request->phone;
            }
            if($request->email){
                $site_data->email = $request->email;
            }
            if($request->address){
                $site_data->address = $request->address;
            }
            if($site_data->save()){
                return redirect()->back();
    
            }
        }
        public function createCopyRight(Request $request){
            $site_data = GeneralSetting::find(1);
            if($site_data ==null){
            $site_data = new GeneralSetting;
            }
            if($request->copy_right_text){
                $site_data->copy_right_text = $request->copy_right_text;
            }
            if($site_data->save()){
                return redirect()->back();
    
            }
            else{
                return redirect()->back();
            }

        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
// Social links management
    public function createSocials(Request $request)
    {
        $file = $request->file('image');
        $filename = rand().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('frontend').'/images/social-icons/Button/';
        $file->move($destinationPath,$filename);
        $data_array = ['url'=>$request->url,'image'=>$filename];
        if(SocialLink::create($data_array)){
            return redirect()->back();
        }
    }

    public function editSocials(Request $request,$id)
    {
        $socials = SocialLink::find($id);
        $socials->url = $request->url;
        if($socials->save()){
            return redirect()->back();
        }

    }
    public function deleteSicials($id)
    {
        $socials = SocialLink::find($id);
        if($socials->delete()){

            return redirect()->back();
        }
    }
}
