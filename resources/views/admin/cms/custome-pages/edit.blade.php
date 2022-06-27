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

        {{-- Header --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custom.update',$page->id)}}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="page_title" value="{{$page->page_title}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="meta_name" value="{{$page->meta_name}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Header Description</label>
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
        {{-- /Header --}}

        @if($page->id==1)
        {{-- Home page top content --}}

        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Home Content
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Main Heading</label>
                                    <input type="text" class="form-control" name="main_heading" value="{{$page->page_title}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="small_description" value="{{$page->meta_name}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Video</label>
                                    <input type="text" class="form-control" name="video" value="{{$page->meta_name}}" required />

                                </div>
                                <div class="form-group mb-4">
                                    <label>Slider Heading</label>
                                    <input type="text" class="form-control" name="video" value="{{$page->meta_name}}" required />

                                </div>
                                <div class="form-group mb-4">
                                    <label>Slider Images</label>
                                    <input type="file" multiple class="form-control" name="video" value="{{$page->meta_name}}" required />

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
        {{-- /Home page top content --}}

        {{-- Home page Why use RRSTEK section --}}
        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 text-center bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br />
                                About Us Section
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_social_links"><i class="fa fa-plus"></i> Add new</a>
                        </div>
                        <br />
                        <br />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table table-bordered">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Sub Heading</th>
                                            <th>Sub Heading Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <form action="" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-8">
                                                        <div class="form-group mb-4">
                                                            <input type="text" class="form-control" name="url" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="submit" class="btn btn-info">Update</button>
                                                    </div>


                                                </form>
                                            </td>
                                            <td>
                                                <img src="" alt="image description" width="50" height="50" />
                                            </td>
                                            <td>
                                                        <a class="dropdown-item" href=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-ccc">
                                            <td></td>
                                            <td>No data</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Home page Why use RRSTEK section --}}

        {{-- Home page Feature section --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.feature.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Home Feature Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Feature Heading</label>
                                    <input type="text" class="form-control" name="feature_heading" value="@if($feature->feature_heading !=null) {{$feature->feature_heading}} @endif" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Feature Description</label>
                                    <textarea rows="2" cols="5" maxlength="200" class="form-control" name="feature_description"  required>@if($feature->feature_description !=null) {{$feature->feature_description}} @endif</textarea>
                                </div>
                                <div class="form-group mb-4 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Feature Image</label>
                                            <input type="hidden" name="feature_image">
                                            <input type="file" class="form-control" name="feature_image"/>
                                        </div>
                                        <div class="col-6">
                                            @if($feature->feature_image !=null)
                                            <img src="{{asset('frontend')}}/images/home_feature_section/{{$feature->feature_image}}" alt="" width="auto" height="100" />
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
        {{-- /Home page Feature section --}}
        @endif
@endsection
