@extends('admin.layouts.app') @section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Edit {{$camera->title}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin-dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cms.camera.index')}}">camera</a></li>
                            <li class="breadcrumb-item"><a href="">Edit {{$camera->title}} </a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>
            {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
      @endif
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>success!</strong>
          {{ session()->get('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.camera.update',$camera->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card leave-box mb-5" id="leave_annual">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 bg-ccc">
                                    <div class="h3 card-title with-switch">
                                        <br />
                                        Header Information
                                    </div>
                                </div>
                                <div class="col-8">

                                    <div class="form-group mb-4">
                                        <label> Camera Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$camera->title}}" required />
                                    </div>
                                 
                                  
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <img src="{{asset('frontend/images')}}/camera/{{$camera->image}}" width="100%" height="250" alt="" />
                                            <div class="form-group">
                                                <label>Change Image</label>
                                                <input name="image" class="form-control" type="file" accept="image/png, image/gif, image/jpeg" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                <h3 class="text-center">Camera Specifications</h3>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>WDR</label>
                                        <input type="text" class="form-control" name="wdr" value="{{$specifications->wdr}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Resoluton</label>
                                        <input type="text" class="form-control" name="resoluton" value="{{$specifications->resoluton}}"  />
                                    </div>
                                   
                                    <div class="col-4">
                                        <label>Sensor</label>
                                        <input type="text" class="form-control" name="sensor" value="{{$specifications->sensor}}" />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>Bitrate(Mb/sec)</label>
                                        <input type="text" class="form-control" name="bitrate" value="{{$specifications->bitrate}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Power Supply</label>
                                        <input type="text" class="form-control" name="power_supply" value="{{$specifications->power_supply}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Lens</label>
                                        <input type="text" class="form-control" name="lens" value="{{$specifications->lens}}" />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Weight Net(Kg)</label>
                                        <input type="text" class="form-control" name="weight" value="{{$specifications->weight}}" />
                                    </div>
                                    <div class="col-4">
                                        <label>Senstivity</label>
                                        <input type="text" class="form-control" name="senstivity" value="{{$specifications->senstivity}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Ingress Protection</label>
                                        <input type="text" class="form-control" name="ingress_protection" value="{{$specifications->ingress_protection}}"  />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Dimensions(mm)</label>
                                        <input type="text" class="form-control" name="dimensions" value="{{$specifications->dimensions}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Power Consumption(watt)</label>
                                        <input type="text" class="form-control" name="power_consumption" value="{{$specifications->power_consumption}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Working Temprature(C°)</label>
                                        <input type="text" class="form-control" name="temprature" value="{{$specifications->temprature}}" />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Day/Night Mode</label>
                                        <input type="text" class="form-control" name="mode" value="{{$specifications->mode}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Network Interfaces</label>
                                        <input type="text" class="form-control" name="network_interface" value="{{$specifications->network_interface}}" />
                                    </div>
                                    <div class="col-4">
                                        <label>IR range</label>
                                        <input type="text" class="form-control" name="ir_range" value="{{$specifications->ir_range}}"  />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Focal Length</label>
                                        <input type="text" class="form-control" name="focal_length" value="{{$specifications->focal_length}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Horizontal Fov</label>
                                        <input type="text" class="form-control" name="horizontal_fov" value="{{$specifications->horizontal_fov}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Aperture</label>
                                        <input type="text" class="form-control" name="aperture" value="{{$specifications->aperture}}"  />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>Zoom and focus</label>
                                        <input type="text" class="form-control" name="zoom_focus" value="{{$specifications->zoom_focus}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Colors</label>
                                        <input type="text" class="form-control" name="colors" value="{{$specifications->colors}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Retention </label>
                                        <input type="text" class="form-control" name="retention" value="{{$specifications->retention}}"  />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>Audio analytics</label>
                                        <input type="text" class="form-control" name="audio_analytics" value="{{$specifications->audio_analytics}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Max. Vid. Output Resulution</label>
                                        <input type="text" class="form-control" name="max_resoluton" value="{{$specifications->max_resoluton}}"  />
                                    </div>
                                    <div class="col-4">
                                        <label>Aspect ratio</label>
                                        <input type="text" class="form-control" name="aspect_ratio" value="{{$specifications->aspect_ratio}}"  />
                                    </div>
                                </div>


                                    <hr>
                                    <h2 style="text-align: center;">Overview Section</h2>
                                    <div class="form-group mb-4">
                                        <label>Description</label>
                                        <textarea name="description" rows="4" class="form-control summernote" placeholder="Enter your content">{{$camera->description}}</textarea>
                                    </div>
                                    <div id="section-container">
                                        <?php $n=1; ?>
                                        @if($sections->count()>0)
                                       
                                        @foreach($sections as $section)
                                        <hr>
                                        <h2 class="text-center">{{$section->title}}</h2>
                                        <a style="float: right;" class="btn btn-danger mb-2" href="{{route('cms.camera.deletesection',$section->id)}}"><i class="la la-trash"></i></a>
                                        <input type="hidden" name="section_id_{{$n}}" value="{{$section->id}}">
                                        <div class="form-group">
                                            <label>Section Title</label>
                                            <input class="form-control" value="{{$section->title}}" type="text" name='title_{{$n}}' />
                                        </div>
                                  
                                <div class="form-group">
                                    <label>Section body</label>
                                    <textarea name="description_{{$n}}" rows="4" class="form-control summernote" placeholder="Enter your content">{{$section->description}}</textarea>
                                </div>
                                        <?php  $n++  ?>
                                        @endforeach
                                        @endif
                                        <!-- here will be the new section content -->
                                    </div>
                                  
                                    @if($n <=3)
                                    <a id="add-sec-btn" href="javascript:void(0)" onclick="addSection()" style="float: right;"><i class="fa fa-plus"></i> Add section</a>
                                    @endif
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn"><i class="fa fa-plus"></i> Update Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var i = 4;
function addSection() {
    ++i;
   $("#section-container").append('<h2 style="text-align: center;">Add Section</h2><div id="title"><div class="form-group"><label>Section Title</label><input class="form-control" type="text" name="title_'+i+'" required></div><div class="form-group"><label>Section body</label></div><textarea name="description_'+i+'" id="body-'+i+'"></textarea><hr>'
   );
   $("#section-container #body-"+i).summernote('insertText', 'Section description');
  if(i==7){
   $('#add-sec-btn').css("display","none"); 
  }
}
</script>
@endsection
