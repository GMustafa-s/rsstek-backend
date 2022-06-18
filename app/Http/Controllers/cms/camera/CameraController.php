<?php

namespace App\Http\Controllers\cms\camera;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camera;
use App\Models\CameraSpecification;
use App\Models\CameraSection;
use Session;

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
       if($camera->save()){

        if($request->title_1 && $request->description_1 ){
            $section_1 = $this->addSection($camera->id,$request->title_1,$request->description_1);      
        }
        if($request->title_2 && $request->description_2 ){
            $section_2 = $this->addSection($camera->id,$request->title_2,$request->description_2);      
        }
        if($request->title_3 && $request->description_3 ){
            $section_3 = $this->addSection($camera->id,$request->title_3,$request->description_3);      
        }
        $specification = new CameraSpecification;
        $specification->camera_id = $camera->id;
        if($request->wdr){
            $specification->wdr = $request->wdr;
        }
        if($request->resoluton){
            $specification->resoluton = $request->resoluton;
        }
        if($request->max_resoluton){
            $specification->max_resoluton = $request->max_resoluton;
        }
        if($request->sensor){
            $specification->sensor = $request->sensor;
        }
        if($request->bitrate){
            $specification->bitrate = $request->bitrate;
        }
        if($request->power_supply){
            $specification->power_supply = $request->power_supply;
        }
        if($request->lens){
            $specification->lens = $request->lens;
        }
        if($request->weight){
            $specification->weight = $request->weight;
        }
        if($request->senstivity){
            $specification->senstivity = $request->senstivity;
        }
        if($request->ingress_protection){
            $specification->ingress_protection = $request->ingress_protection;
        }
        if($request->dimensions){
            $specification->dimensions = $request->dimensions;
        }
        if($request->power_consumption){
            $specification->power_consumption = $request->power_consumption;
        }
        if($request->temprature){
            $specification->temprature = $request->temprature;
        }
        if($request->mode){
            $specification->mode = $request->mode;
        }
        if($request->network_interface){
            $specification->network_interface = $request->network_interface;
        }
        if($request->network_interface){
            $specification->network_interface = $request->network_interface;
        }
        if($request->ir_range){
            $specification->ir_range = $request->ir_range;
        }
        if($request->focal_length){
            $specification->focal_length = $request->focal_length;
        }
        if($request->horizontal_fov){
            $specification->horizontal_fov = $request->horizontal_fov;
        }
        if($request->aperture){
            $specification->aperture = $request->aperture;
        }
        if($request->zoom_focus){
            $specification->zoom_focus = $request->zoom_focus;
        }
        if($request->colors){
            $specification->colors = $request->colors;
        }
        if($request->retention){
            $specification->retention = $request->retention;
        }
        if($request->audio_analytics){
            $specification->audio_analytics = $request->audio_analytics;
        }
        if($request->aspect_ratio){
            $specification->aspect_ratio = $request->aspect_ratio;
        }
        $specification->save();
        return redirect('cms/camera/')->with('success','camera page created succesfully');
    //     for($i=1;$i<50;$i++){
    //         $a = 'spec_name_'.$i;
    //         $b = 'spec_value_'.$i;
    //         if($request->$a){
    //             $specification = new CameraSpecification;
    //             $specification->camera_id = $camera->id;
    //             $specification->name = $request->$a;
    //             $specification->value = $request->$b;
    //             $specification->save();
    //         }
    //         else{
    //             break;
    //         }
    //    }
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
        $camera = Camera::find($id);
        $specifications = CameraSpecification::where('camera_id',$camera->id)->first();
        $sections = CameraSection::where('camera_id',$camera->id)->get();
        return view('admin.cms.camera.edit',compact('camera','specifications','sections')); 
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
        $camera = Camera::find($id);
        $camera->title = $request->title;
        $camera->description = $request->description;
        if($request->image){
            $file = $request->file('image');
            $filename = rand().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('frontend').'/images/camera/';
            $file->move($destinationPath,$filename);
            $camera->image = $filename;
        }
        if($camera->save()){
            if($camera->save()){
                $specification = CameraSpecification::where('camera_id',$id)->first();
                    $specification->wdr = $request->wdr;
                    $specification->resoluton = $request->resoluton;
                    $specification->sensor = $request->sensor;
                    $specification->bitrate = $request->bitrate;
                    $specification->power_supply = $request->power_supply;
                    $specification->lens = $request->lens;
                    $specification->weight = $request->weight;
                    $specification->senstivity = $request->senstivity;
                    $specification->ingress_protection = $request->ingress_protection;
                    $specification->dimensions = $request->dimensions;
                    $specification->power_consumption = $request->power_consumption;
                    $specification->temprature = $request->temprature;
                    $specification->mode = $request->mode;
                    $specification->network_interface = $request->network_interface;
                    $specification->network_interface = $request->network_interface;
                    $specification->ir_range = $request->ir_range;
                    $specification->focal_length = $request->focal_length;
                    $specification->horizontal_fov = $request->horizontal_fov;
                    $specification->aperture = $request->aperture;
                    $specification->zoom_focus = $request->zoom_focus;
                    $specification->colors = $request->colors;
                    $specification->retention = $request->retention;
                    $specification->max_resoluton = $request->max_resoluton;
                    $specification->aspect_ratio = $request->aspect_ratio;
                    $specification->audio_analytics = $request->audio_analytics;
                $specification->save();

            //  Sections
                // updating old sections

            if($request->title_1 && $request->description_1 ){
                if($request->section_id_1){
                    $section_1 = $this->updateSection($request->section_id_1,$request->title_1,$request->description_1);
                }     
            }
            if($request->title_2 && $request->description_2 ){
      
                if($request->section_id_2){
                    $section_2 = $this->updateSection($request->section_id_2,$request->title_2,$request->description_2);
                }     
            }

            if($request->title_3 && $request->description_3 ){
      
                if($request->section_id_3){
                    $section_3 = $this->updateSection($request->section_id_3,$request->title_3,$request->description_3);
                }     
            }

            // Adding new sections
            if($request->title_5 && $request->description_5){
               
                $section_1 = $this->addSection($camera->id,$request->title_5,$request->description_5);
            }
            if($request->title_6 && $request->description_6){
               
                $section_2 = $this->addSection($camera->id,$request->title_6,$request->description_6);
            }
            if($request->title_7 && $request->description_7){
               
                $section_3 = $this->addSection($camera->id,$request->title_7,$request->description_7);
            }
            return redirect('cms/camera/')->with('success','camera updated succesfully');
        }
    }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $camera = Camera::find($id);
        $sectionsv= $this->deleteAllSection($id);
        if($camera->delete()){
            return redirect('cms/camera/')->with('success','camera deleted succesfully');
        }
    }

    public function showSlug($slug){
    
        $camera = Camera::where('slug',$slug)->first();
        if($camera==null){
            abort(404);
        }   
        else{
            $specifications = CameraSpecification::where('camera_id',$camera->id)->first();
            $sections = CameraSection::where('camera_id',$camera->id)->get();
            $other_cameras = Camera::where('id','!=',$camera->id)->get();

            return view('frontend.camera.compare.camera-detail',compact('camera','specifications','sections','other_cameras'));
        }

    }

    public function addSection($camera_id,$title,$description){
        $section = new CameraSection;
        $section->camera_id =$camera_id;
        $section->title =$title;
        $section->description =$description;
         if( $section->save()){
             return $section;
         }
     }
 
     public function updateSection($id,$title,$body){
         $section = CameraSection::find($id);
         $section->title =$title;
         $section->description =$body;
          if( $section->save()){
            return $section;
          }
     }
     public function deleteSection($id){
        $section = CameraSection::find($id);
        if( $section->delete()){
            return redirect()->back()->with('success','camera section deleted succesfully');
        }
    }

    public function deleteAllSection($id){
        $sections = CameraSection::where('camera_id',$id)->get();
        if($sections !=null){
            foreach($sections as $section){
                $section->delete();
            }
        }
       return ;
    }

    public function compare(){
        $cameras = Camera::all();
        $comparings = null;
    return view('frontend.camera.compare.camera-compare',compact('cameras','comparings'));
    }

    public function compareCamera($id){

        $session_values = session()->get('cart.id');
        if($session_values ==null){
            $session=  Session::put('cart.id',[$id]);
        }
        else{
            $count=count($session_values);
            if($count >= 3){
                array_shift($session_values);
                $session=  Session::put('cart.id',$session_values);
             }
             $session=  session()->push('cart.id',$id);
        }
        $camera_ids = session()->get('cart.id');
        $comparings = CameraSpecification::whereIn('camera_specifications.camera_id',$camera_ids)->join('cameras','cameras.id','=','camera_specifications.camera_id')->get();
        $cameras = Camera::all();
        return view('frontend.camera.compare.camera-compare',compact('cameras','comparings'));

        
    }
}
