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


        {{-- camera compare --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.camera-compare.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                   Camera Compare
                                </div>
                            </div>
                            <div class="col-8">
                                <h3>Header Section</h3>
                                <div class="form-group mb-4">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="header_heading" value="@if($data->header_heading) {{$data->header_heading}} @endif" required />
                                </div>
                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <textarea type="text" rows="4" cols="4" class="form-control" name="header_description"  required>@if($data->header_description) {{$data->header_description}} @endif</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <label>Background Image</label>
                                        <input type="file" name="bg_image" id="">
                                    </div>
                                    <div class="col-4">
                                        <img width="50px" height="50px" src="{{asset('frontend')}}/images/{{$data->bg_image}}" alt="image" srcset="">
                                    </div>
                                </div>
                                <hr>
                                <h3>Product Crousal</h3>
                                <div class="form-group mb-4">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="product_crousal_heading" value="@if($data->product_crousal_heading) {{$data->product_crousal_heading}} @endif" required />
                                </div>
                                <hr>
                                <h3>Compare Table</h3>
                                <div class="form-group mb-4">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="table_heading" value="@if($data->table_heading) {{$data->table_heading}} @endif" required />
                                </div>
                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <textarea type="text" rows="4" cols="4" class="form-control" name="table_description"  required>@if($data->table_description) {{$data->table_description}} @endif</textarea>
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
        {{-- /camera compare --}}



    </div>
</div>

@endsection
