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
                    <h3 class="page-title">Edit {{$page->page_title}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cms.custom.index')}}">custom-pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit {{$page->page_title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- /Page Header -->
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>
                {{ session()->get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
            {{-- meta section --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custom.update.meta',$page->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Meta Information
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Page Title</label>
                                    <input type="text" class="form-control" name="page_title" value="{{$page->page_title}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Meta title</label>
                                    <input type="text" class="form-control" name="meta_name" value="{{$page->meta_name}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Meta Description</label>
                                    <textarea required name="meta_description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" >{{$page->meta_description}}</textarea>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-edit"></i> update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        {{-- /meta section --}}


        {{-- header section --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.integration-header.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                 Header Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Header Heading</label>
                                    <input type="text" class="form-control" name="header_heading" value="@if($data->header_heading) {{$data->header_heading}} @endif" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Header Description</label>
                                    <textarea required name="header_description " rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" >@if($data->header_description) {{$data->header_description}} @endif</textarea>

                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-edit"></i> update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        {{-- /header section --}}

        {{-- camera section --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.integration-camera_section.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                 Camera Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Camera Heading</label>
                                    <input type="text" class="form-control" name="camera_heading" value="@if($data->camera_heading) {{$data->camera_heading}} @endif" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Camera Description</label>
                                    <textarea required name="camera_description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" >@if($data->camera_description) {{$data->camera_description}} @endif</textarea>

                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-edit"></i> update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        {{-- /camera section --}}

         {{-- 2nd camera section --}}
         <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Second Camera Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Second Camera Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custome.integration-second-camera-section.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>2nd Camera heading</label>
                                                    <input type="text" class="form-control" name="second_camera_heading" value="@if($data->second_camera_heading) {{$data->second_camera_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#second_camera_section"><i class="fa fa-plus"></i> Add New Third Party Camera Company</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($second_camera_sections !=null)
                                                @foreach($second_camera_sections as $second_camera_section)
                                                <tr>
                                                    <td>
                                                       {{$second_camera_section->name}}
                                                    </td>
                                                    <td>
                                                        {{$second_camera_section->description}}
                                                    </td>
                                                    <td>
                                                        @if($second_camera_section->image !=null)
                                                        <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/second-camera-section/{{$second_camera_section->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#edit_second_camera{{$second_camera_section->id}}"><i class="fa fa-edit"></i> Edit</a>

                                                    <a class="dropdown-item" onclick="return confirm('Are you sure want ot delete {{$second_camera_section->name}}?')" href="{{route('cms.custome.integration-second-camera-section.delete', $second_camera_section->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                {{-- Second Camera popup edit form --}}
                                                <div class="modal custom-modal fade" id="edit_second_camera{{$second_camera_section->id}}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center mb-3">Edit Second Camera Section</h5>
                                                                <form action="{{route('cms.custom.newUpdate_second_camera', $second_camera_section->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Name</label>
                                                                                <input name="name" type="text" class="form-control" value=" {{$second_camera_section->name}}" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Description</label>
                                                                                <textarea name="description" type="text" class="form-control" required>{{$second_camera_section->description}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ml-2">
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                    <label for="">New Image</label>
                                                                                    <input name="image" type="file" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                            @if($second_camera_section->image !=null)
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/second-camera-section/{{$second_camera_section->image}}" alt="img" >
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-t-20 text-center">
                                                                        <button class="btn btn-primary submit-btn">Update Section</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- /Second Camera popup edit form --}}

                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /2nd camera section --}}


        {{-- control section --}}
        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Control Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Control Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custome.integration-control-section.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="control_heading" value="@if($data->control_heading) {{$data->control_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#control_section"><i class="fa fa-plus"></i> Add New</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($control_sections !=null)
                                                @foreach($control_sections as $control_section)
                                                <tr>
                                                    <td>
                                                       {{$control_section->name}}
                                                    </td>
                                                    <td>
                                                        {{$control_section->description}}
                                                    </td>
                                                    <td>
                                                        @if($control_section->image !=null)
                                                        <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/control-section/{{$control_section->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#edit_control_section{{$control_section->id}}"><i class="fa fa-edit"></i> Edit</a>

                                                    <a class="dropdown-item" onclick="return confirm('Are you sure want ot delete {{$control_section->name}}?')" href="{{route('cms.custome.integration-control-section.delete', $control_section->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>

                                                {{-- Control Section popup edit form --}}
                                                <div class="modal custom-modal fade" id="edit_control_section{{$control_section->id}}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center mb-3">Edit Control Section Section</h5>
                                                                <form action="{{route('cms.custom.newUpdate_control_section', $control_section->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Name</label>
                                                                                <input name="name" type="text" class="form-control" value=" {{$control_section->name}}" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Description</label>
                                                                                <textarea name="description" rows="3" type="text" class="form-control" required>{{$control_section->description}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ml-2">
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                    <label for="">New Image</label>
                                                                                    <input name="image" type="file" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                            @if($control_section->image !=null)
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/control-section/{{$control_section->image}}" alt="img" >
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-t-20 text-center">
                                                                        <button class="btn btn-primary submit-btn">Update Section</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- /Control Section popup edit form --}}

                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /control section --}}

          {{-- outputs section --}}
          <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Outputs Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Outputs Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custome.integration-outputs-section.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="outputs_heading" value="@if($data->outputs_heading) {{$data->outputs_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#outputs_section"><i class="fa fa-plus"></i> Add New</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($outputs_sections !=null)
                                                @foreach($outputs_sections as $os)
                                                <tr>
                                                    <td>
                                                       {{$os->name}}
                                                    </td>
                                                    <td>
                                                        {{$os->description}}
                                                    </td>
                                                    <td>
                                                        @if($os->image !=null)
                                                        <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/outputs-section/{{$os->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_outputs_section{{$os->id}}"><i class="fa fa-edit"></i> Edit</a>

                                                        <a class="dropdown-item" onclick="return confirm('Are you sure want ot delete {{$os->name}}?')" href="{{route('cms.custome.integration-outputs-section.delete', $os->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

                                                    </td>
                                                </tr>
                                                {{-- Outputs Section popup edit form --}}
                                                <div class="modal custom-modal fade" id="edit_outputs_section{{$os->id}}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center mb-3">Edit Outputs Section Section</h5>
                                                                <form action="{{route('cms.custom.newUpdate_outputs_section', $os->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Name</label>
                                                                                <input name="name" type="text" class="form-control" value=" {{$os->name}}" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Description</label>
                                                                                <textarea name="description" rows="3" type="text" class="form-control" required>{{$os->description}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ml-2">
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                    <label for="">New Image</label>
                                                                                    <input name="image" type="file" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                            @if($os->image !=null)
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/outputs-section/{{$os->image}}" alt="img" >
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-t-20 text-center">
                                                                        <button class="btn btn-primary submit-btn">Update Section</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- /Control Section popup edit form --}}
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /outputs section --}}

         {{-- management section --}}
         <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Management Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Management Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custome.integration-management-section.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="management_heading" value="@if($data->management_heading) {{$data->management_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#management_section"><i class="fa fa-plus"></i> Add New</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($management_sections !=null)
                                                @foreach($management_sections as $ms)
                                                <tr>
                                                    <td>
                                                       {{$ms->name}}
                                                    </td>
                                                    <td>
                                                        {{$ms->description}}
                                                    </td>
                                                    <td>
                                                        @if($ms->image !=null)
                                                        <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/management-section/{{$ms->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_management_section{{$ms->id}}"><i class="fa fa-edit"></i> Edit</a>

                                                        <a class="dropdown-item" onclick="return confirm('Are you sure want ot delete {{$ms->name}}?')" href="{{route('cms.custome.integration-management-section.delete', $ms->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

                                                    </td>
                                                </tr>
                                                {{-- Management Section popup edit form --}}
                                                <div class="modal custom-modal fade" id="edit_management_section{{$ms->id}}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center mb-3">Edit Management Section Section</h5>
                                                                <form action="{{route('cms.custom.newUpdate_management_section', $ms->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Name</label>
                                                                                <input name="name" type="text" class="form-control" value=" {{$ms->name}}" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Description</label>
                                                                                <textarea name="description" rows="3" type="text" class="form-control" required>{{$ms->description}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ml-2">
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                    <label for="">New Image</label>
                                                                                    <input name="image" type="file" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                            @if($ms->image !=null)
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/management-section/{{$ms->image}}" alt="img" >
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-t-20 text-center">
                                                                        <button class="btn btn-primary submit-btn">Update Section</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- /Control Section popup edit form --}}
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /management section --}}

        {{-- provides section --}}
        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Providers Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Providers Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custome.integration-providers-section.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="providers_heading" value="@if($data->providers_heading) {{$data->providers_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#providers_section"><i class="fa fa-plus"></i> Add New</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($providers_sections !=null)
                                                @foreach($providers_sections as $ps)
                                                <tr>
                                                    <td>
                                                       {{$ps->name}}
                                                    </td>
                                                    <td>
                                                        @if($ps->image !=null)
                                                        <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/providers-section/{{$ps->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_providers_section{{$ps->id}}"><i class="fa fa-edit"></i> Edit</a>

                                                        <a class="dropdown-item" onclick="return confirm('Are you sure want ot delete {{$ps->name}}?')" href="{{route('cms.custome.integration-providers-section.delete', $ps->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                 {{-- Providers Section popup edit form --}}
                                                 <div class="modal custom-modal fade" id="edit_providers_section{{$ps->id}}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center mb-3">Edit providers Section Section</h5>
                                                                <form action="{{route('cms.custom.newUpdate_providers_section', $ps->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Name</label>
                                                                                <input name="name" type="text" class="form-control" value=" {{$ps->name}}" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ml-2">
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                    <label for="">New Image</label>
                                                                                    <input name="image" type="file" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                            @if($ps->image !=null)
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/providers-section/{{$ps->image}}" alt="img" >
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-t-20 text-center">
                                                                        <button class="btn btn-primary submit-btn">Update Section</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- /Control Section popup edit form --}}
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /provides section --}}

         {{-- communication tools section --}}
         <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Communication Tools  Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Communication Tools Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custome.integration-communication-tools-section.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="communication_tools_heading" value="@if($data->communication_tools_heading) {{$data->communication_tools_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#communication_tools_section"><i class="fa fa-plus"></i> Add New</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($communication_tools_sections !=null)
                                                @foreach($communication_tools_sections as $cts)
                                                <tr>
                                                    <td>
                                                       {{$cts->name}}
                                                    </td>
                                                    <td>
                                                        @if($cts->image !=null)
                                                        <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/communication-tools-section/{{$cts->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_communication_tools_section{{$cts->id}}"><i class="fa fa-edit"></i> Edit</a>

                                                        <a class="dropdown-item" onclick="return confirm('Are you sure want ot delete {{$cts->name}}?')" href="{{route('cms.custome.integration-communication-tools-section.delete', $cts->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                {{-- Communication Tools Section popup edit form --}}
                                                <div class="modal custom-modal fade" id="edit_communication_tools_section{{$cts->id}}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center mb-3">Edit Communication Tools Section Section</h5>
                                                                <form action="{{route('cms.custom.newUpdate_communication_tools_section', $cts->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Name</label>
                                                                                <input name="name" type="text" class="form-control" value=" {{$cts->name}}" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ml-2">
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                    <label for="">New Image</label>
                                                                                    <input name="image" type="file" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                            @if($cts->image !=null)
                                                                            <div class="col-md-6-6">
                                                                                <div class="form-group">
                                                                                <img width="100px" height="100px" src="{{asset('frontend')}}/images/integration/communication-tools-section/{{$cts->image}}" alt="img" >
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-t-20 text-center">
                                                                        <button class="btn btn-primary submit-btn">Update Section</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- /Control Section popup edit form --}}
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /communication tools  section --}}

    </div>
</div>




{{-- second cameras section popup form --}}
<div class="modal custom-modal fade" id="second_camera_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New Third Party Company </h5>
                <form action="{{route('cms.custome.integration-second-camera-section.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required name="description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" ></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /second cameras section popup form --}}

{{-- control section popup form --}}
<div class="modal custom-modal fade" id="control_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New Control System</h5>
                <form action="{{route('cms.custome.integration-control-section.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required name="description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" ></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /control section popup form --}}

{{-- outputs section popup form --}}
<div class="modal custom-modal fade" id="outputs_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New Outputs System</h5>
                <form action="{{route('cms.custome.integration-outputs-section.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required name="description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" ></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /outputs section popup form --}}

{{-- management section popup form --}}
<div class="modal custom-modal fade" id="management_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New Managment</h5>
                <form action="{{route('cms.custome.integration-management-section.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required name="description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" ></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /management section popup form --}}

{{-- providers section popup form --}}
<div class="modal custom-modal fade" id="providers_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New providers</h5>
                <form action="{{route('cms.custome.integration-providers-section.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /providers section popup form --}}

{{-- communication tools section section popup form --}}
<div class="modal custom-modal fade" id="communication_tools_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New Communication Tools</h5>
                <form action="{{route('cms.custome.integration-communication-tools-section.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /providers section popup form --}}
@endsection
