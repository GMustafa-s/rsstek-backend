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

         {{-- page heading section--}}
         <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.demo-heading.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Main Page Heading
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="main_heading" value="@if($data->main_heading !=null) {{$data->main_heading}} @endif" required />
                                </div>
                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <textarea type="text" rows="4" cols="4" class="form-control" name="main_description"  required>@if($data->main_description !=null) {{$data->main_description}} @endif</textarea>
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
        {{-- /page heading section--}}

         {{-- get demo section --}}
         <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Get Demo Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Get Demo Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custome.get-demo-heading.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="demo_section_heading" value="@if($data->demo_section_heading) {{$data->demo_section_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#get_demo_section"><i class="fa fa-plus"></i> Add New</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Text</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($demo_sections !=null)
                                                @foreach($demo_sections as $ds)
                                                <tr>
                                                    <td>
                                                       {{$ds->text}}
                                                    </td>
                                                    <td>
                                                        @if($ds->image !=null)
                                                        <img class="getDemoSection" width="100px" height="100px" src="{{asset('frontend')}}/images/Solutions/demo-section-icon/{{$ds->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit_get_demo_section{{$ds->id}}"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('cms.custome.get-demo.delete', $ds->id)}}" onclick="return confirm('Are you sure want ot delete {{$ds->name}}?')" class="dropdown-item" ><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>

                                                  {{-- Get Demo Section popup edit form --}}
                                                  <div class="modal custom-modal fade" id="edit_get_demo_section{{$ds->id}}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title text-center mb-3">Edit Get Demo Section</h5>
                                                                <form action="{{route('cms.custom.newUpdate_get_demo', $ds->id)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label>Text</label>
                                                                                <input name="text" type="text" class="form-control" value="  {{$ds->text}}" required  />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row ml-2">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">New Image</label>
                                                                                    <input name="image" type="file" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <img class="getDemoSection" width="100px" height="100px" src="{{asset('frontend')}}/images/Solutions/demo-section-icon/{{$ds->image}}" alt="img">
                                                                                </div>
                                                                            </div>
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
                                                {{-- /Get Demo Section popup edit form --}}
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
        {{-- /get demo section --}}

        {{--  Regular Security Needs section--}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.security-needs.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Regular Security Needs Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label> Regular Security Needs Heading</label>
                                    <input type="text" class="form-control" name="security_section_heading" value="@if($data->security_section_heading) {{$data->security_section_heading}} @endif" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label> Regular Security Needs Description</label>
                                    <textarea rows="4" cols="5" class="form-control" name="security_section_description"  required>@if($data->security_section_description) {{$data->security_section_description}} @endif</textarea>
                                </div>
                                <div class="form-group mb-4 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label> Regular Security Needs Image</label>
                                            <input type="file" name="security_section_image" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            @if($data->security_section_image !=null)
                                            <img src="{{asset('frontend')}}/images/Solutions/regular-security-needs-section/{{$data->security_section_image}}" alt="img" width="auto" height="100" />
                                            @else
                                                <p class="row mt-4" > no image</p>
                                            @endif
                                        </div>
                                    </div>
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
        {{-- / Regular Security Needs section--}}

    </div>
</div>


{{-- get demo section popup form --}}
<div class="modal custom-modal fade" id="get_demo_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New</h5>
                <form action="{{route('cms.custome.get-demo.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" name="text" placeholder="Enter text" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control"/>
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
{{-- /get demo section popup form --}}
@endsection
