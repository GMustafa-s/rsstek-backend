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
        $generals = GeneralSetting::all();
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
        $filename = rand().$file->getClientOriginalName();
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
