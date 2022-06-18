@extends('admin.layouts.app')

@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">New Camera Page</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin-dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cms.camera.index')}}">camera</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create</li>
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
    
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.camera.store')}}" method="post" enctype="multipart/form-data">
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
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="name" value="" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" value="" required />
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Header  Image</label>
                                            <input required name="image" class="form-control" type="file" />
                                        </div>  
                                    </div>
                                </div>
                                <hr>
                                <h3 class="text-center">Camera Specifications</h3>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>WDR</label>
                                        <input type="text" class="form-control" name="wdr" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Resoluton</label>
                                        <input type="text" class="form-control" name="resoluton" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Sensor</label>
                                        <input type="text" class="form-control" name="sensor" value="" />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>Bitrate(Mb/sec)</label>
                                        <input type="text" class="form-control" name="bitrate" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Power Supply</label>
                                        <input type="text" class="form-control" name="power_supply" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Lens</label>
                                        <input type="text" class="form-control" name="lens" value="" />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Weight Net(Kg)</label>
                                        <input type="text" class="form-control" name="weight" value="" />
                                    </div>
                                    <div class="col-4">
                                        <label>Senstivity</label>
                                        <input type="text" class="form-control" name="senstivity" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Ingress Protection</label>
                                        <input type="text" class="form-control" name="ingress_protection" value=""  />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Dimensions(mm)</label>
                                        <input type="text" class="form-control" name="dimensions" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Power Consumption(watt)</label>
                                        <input type="text" class="form-control" name="power_consumption" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Working Temprature(C°)</label>
                                        <input type="text" class="form-control" name="temprature" value="" />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Day/Night Mode</label>
                                        <input type="text" class="form-control" name="mode" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Network Interfaces</label>
                                        <input type="text" class="form-control" name="network_interface" value="" />
                                    </div>
                                    <div class="col-4">
                                        <label>IR range</label>
                                        <input type="text" class="form-control" name="ir_range" value=""  />
                                    </div>
                                </div><div class="row mb-4">
                                    <div class="col-4">
                                        <label>Focal Length</label>
                                        <input type="text" class="form-control" name="focal_length" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Horizontal Fov</label>
                                        <input type="text" class="form-control" name="horizontal_fov" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Aperture</label>
                                        <input type="text" class="form-control" name="aperture" value="" required />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>Zoom and focus</label>
                                        <input type="text" class="form-control" name="zoom_focus" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Colors</label>
                                        <input type="text" class="form-control" name="colors" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Retention </label>
                                        <input type="text" class="form-control" name="retention" value=""  />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4">
                                        <label>Audio analytics</label>
                                        <input type="text" class="form-control" name="audio_analytics" value=""  />
                                    </div>
                                    <div class="col-4">
                                        <label>Max. Vid. Output Resulution</label>
                                        <input type="text" class="form-control" name="max_resoluton" value=""  />
                                    </div>
                                     <div class="col-4">
                                        <label>Aspect ratio</label>
                                        <input type="text" class="form-control" name="aspect_ratio" value=""  />
                                    </div>
                                </div>


                                <hr>
                                <h2 style="text-align: center;">Overview Section</h2>
                                <div class="form-group mb-4">
                                    <label> Description</label>
                                    <textarea required name="description" rows="4" class="form-control summernote" placeholder="Enter your content"></textarea>
                                </div>
                                <div id="section-container">
                                    <!-- here will be the new section content -->
                                </div>
                                <!-- <div id="specification-container">
                                     here will be the new specification content 
                                </div> -->
                                <!-- <a id="add-specification-btn" href="javascript:void(0)" onclick="addSpecification()" style="float: right;margin-left: 20px;"><i class="fa fa-plus"></i> Add Specification</a> -->
                                <span><a id="add-sec-btn" href="javascript:void(0)" onclick="addSection()" style="float: right;"><i class="fa fa-plus"></i> Add Section</a></span>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-plus"></i> Create Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <script>
//         var a = 0;
//    function addSpecification() {
//         ++a;
//        $("#specification-container").append('<div class="row"><div class="col-6"><div class="form-group"><label>Specification Name</label><input required name="spec_name_'+a+'" class="form-control" type="text" /></div>  </div><div class="col-6"><div class="form-group"><label>Specification Value</label><input required name="spec_value_'+a+'" class="form-control" type="text" /></div></div></div><hr>');
//       if(a==20){
//        $('#add-specification-btn').css("display","none"); 
//       }
// }
    var i = 0;
   function addSection() {
        ++i;
       $("#section-container").append('<h2 style="text-align: center;">Add Section</h2><div id="title"><div class="form-group"><label>Section Title</label><input class="form-control" type="text" name="title_'+i+'"></div><div class="form-group"><label>Section body</label></div><textarea  name="description_'+i+'" id="body-'+i+'"></textarea><hr>'
       );
       $("#section-container #body-"+i).summernote('insertText', 'Section description');
       
      if(i==3){
       $('#add-sec-btn').css("display","none"); 
      }
}
   </script>
@endsection