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
                <form action="{{route('cms.custome.solutions-industries.update')}}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="header_heading" value="@if($data->header_heading !=null) {{$data->header_heading}} @endif" required />
                                </div>
                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <textarea type="text" rows="4" cols="4" class="form-control" name="header_description"  required>@if($data->header_description !=null) {{$data->header_description}} @endif</textarea>
                                </div>
                                <div class="form-group mb-4 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Background Image</label>
                                            <input type="file" name="bg_image" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            @if($data->bg_image !=null)
                                            <img src="{{asset('frontend')}}/images/Solutions/{{$data->bg_image}}" alt="img" width="auto" height="100" />
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
        {{-- /page heading section --}}


    </div>
</div>

@endsection




