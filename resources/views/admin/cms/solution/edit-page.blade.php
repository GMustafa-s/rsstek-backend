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
                    <h3 class="page-title">Edit {{$category->name}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/solution')}}">solution</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit {{$category->name}}</li>
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
                <form action="{{route('cms.solution.update',$category->id)}}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Header Description</label>
                                    <textarea required name="description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" >{{$category->description}}</textarea>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <img src="{{asset('frontend/images')}}/{{$category->name}}/{{$category->bg_image}}" width="100%" alt="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-1"></div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label>Header Background Image</label>
                                            <input accept="image/png, image/gif, image/jpeg"  name="bg_image" class="form-control" type="file" />
                                        </div>
                                    </div>
                                    <div class="col-2"></div>
                                   
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-edit"></i> update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.solution..meta.update',$category->id)}}" method="post" enctype="multipart/form-data">
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
                                    <label>Meta Name</label>
                                    <input type="text" class="form-control" name="meta_name" value="{{$category->meta_name}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Meta Description</label>
                                    <textarea required name="meta_description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" >{{$category->meta_description}}</textarea>
                                </div>
                               
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-edit"></i> update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection