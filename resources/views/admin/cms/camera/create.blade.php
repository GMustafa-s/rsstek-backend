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
                                <h2 style="text-align: center;">Overview Section</h2>
                                <div class="form-group mb-4">
                                    <label> Description</label>
                                    <textarea required name="description" rows="4" class="form-control summernote" placeholder="Enter your content"></textarea>
                                </div>
                                <div id="specification-container">
                                    
                                    <!-- here will be the new section content -->
                                </div>
                                <a id="add-specification-btn" href="javascript:void(0)" onclick="addSpecification()" style="float: right;"><i class="fa fa-plus"></i> Add section</a>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-plus"></i> Create Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <script>
        var i = 0;
   function addSpecification() {
        ++i;
       $("#specification-container").append('<div class="row"><div class="col-6"><div class="form-group"><label>Specification Name</label><input required name="spec_name_'+i+'" class="form-control" type="text" /></div>  </div><div class="col-6"><div class="form-group"><label>Specification Value</label><input required name="spec_value_'+i+'" class="form-control" type="text" /></div></div></div><hr>');
    //   if(i==15){
    //    $('#add-sec-btn').css("display","none"); 
    //   }
}
   </script>
@endsection