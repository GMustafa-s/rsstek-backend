<?php

namespace App\Http\Controllers\cms\camera;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camera;
use App\Models\CameraSpecification;
use Illuminate\Support\Str;
class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cameras = Camera::paginate(15);
        return view('admin.cms.camera.index',compact('cameras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.camera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $check_title = Camera::where('title',$request->name)->first();
        if($check_title != null){
            return redirect('cms/camera/create')->with('error ',' Title already exist!');
        }
       $camera = new Camera;
       $camera->title = $request->name;
       $camera->sub_title = $request->sub_title;
       $camera->description = $request->description;
       $camera->slug = Str::slug($request->name);
       if($request->image){
        $file = $request->file('image');
        $filename = rand().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('frontend').'/images/camera/';
        $file->move($destinationPath,$filename);
        $camera->image = $filename;
        }
    for($i=1;$i<20;$i++){
        $special = $request->spec_name_;
        dd($i);
        dd($request->spec_name_1);

        if($request->spec_name_.$i){
            echo $request->spec_name_1;
        }
    }
    exit;

       if($camera->save()){
        return redirect('cms/camera/')->with('success','camera page created succesfully');
       }
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

    public function showSlug($slug){
        $camera = Camera::where('slug',$slug)->first();
        return view('frontend.camera.compare.camera-detail',compact('camera'));
    }
}
