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
                                    <label>Meta Name</label>
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
        {{-- /Header --}}
        {{-- Home page top content --}}

        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custom.update.header')}}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="header_heading" value="{{$home_page_data->header_heading}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Header Description</label>
                                    <textarea required name="header_description " rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" >{{$home_page_data->header_description}}</textarea>

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

        {{-- Hero Section--}}

        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custom.update.hero')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                   Hero Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4 ">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Hero Section Video URL </label>
                                            <input class="form-control" type="text" name="hero_section_video" value="{{$home_page_data->hero_section_video}}">
                                           
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
        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                what we use section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">what we use</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('cms.custom.update.wwu')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group">
                                                    <label>What we Use heading  </label>
                                                    <input type="text" class="form-control" name="what_we_use_heading" value="{{$home_page_data->what_we_use_heading}}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" style="margin-top: 10px;" class="btn add-btn"> <i class="fa fa-edit"></i> update</button>
                                            </div>
                                        </div>
                                    <hr>
                                       
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_what_we_use"><i class="fa fa-plus"></i> Add new</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <!-- <th>Linking URL</th> -->
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($home_page_wwu !=null)
                                                @foreach($home_page_wwu as $wwu_img)
                                                <tr>
                                                   
                                                    <td>
                                                        <img width="100" height="100" src="{{asset('frontend')}}/images/custompages/home/what-we-use/{{$wwu_img->image}}" alt="">
                                                    </td>
                                                    <td>
                                               
                                                    <a class="dropdown-item" href="{{route('cms.custom.delete.wwu',$wwu_img->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>
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
       

        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                               Abbout Us
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">About us</h4>
                                </div>
                                <div class="card-body">

                                <form action="{{route('cms.custom.aboutus.title')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group">
                                                    <label>AboutUs Heading  </label>
                                                    <input type="text" class="form-control" name="about_us_heading" value="{{$home_page_data->about_us_heading}}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" style="margin-top: 10px;" class="btn add-btn"> <i class="fa fa-edit"></i> update</button>
                                            </div>
                                        </div>
                                    <hr>
                                       
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_about_us_feature"><i class="fa fa-plus"></i> Add new Feture</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Feature Heading</th>
                                                    <th>Feature Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($aboutus_features !=null)
                                                @foreach($aboutus_features as $feature)
                                                <tr>
                                                    <td>
                                                       {{$feature->title}}
                                                    </td>
                                                    <td>
                                                        {{$feature->description}}
                                                    </td>
                                                    <td>
                                                        <img height="50" src="{{asset('frontend')}}//images/custompages/home/about-features/{{$feature->image}}" alt="">
                                                    </td>
                                                    <td>
                                               
                                                    <a class="dropdown-item" href="{{route('cms.custom.aboutus.delete',$feature->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>
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


        {{-- Features Section --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custom.features.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Features Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Features Section title</label>
                                    <input type="text" class="form-control" name="features_heading" value="{{$home_page_data->features_heading}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Features Secttion description</label>
                                    <input type="text" class="form-control" name="features_description" value="{{$home_page_data->features_description}}" required />
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                    <div class="form-group">
                                        <label> Features Section Image</label>
                                        <input name="features_image" type="file" class="form-control">
                                     </div>
                                    </div>
                                    <div class="col-6">
                                        <img width="100%" src="{{asset('frontend')}}/images/{{$home_page_data->features_image}}" alt="">
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
        {{-- /Features --}}
        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                              Business Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Business</h4>
                                </div>
                                <div class="card-body">

                                <form action="{{route('cms.custom.business.title')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group">
                                                    <label>section title</label>
                                                    <input type="text" class="form-control" name="business_heding" value="{{$home_page_data->business_heding}}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" style="margin-top: 10px;" class="btn add-btn"> <i class="fa fa-edit"></i> update</button>
                                            </div>
                                        </div>
                                    <hr>
                                       
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#business"><i class="fa fa-plus"></i> Add new business</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Business Heading</th>
                                                    <th>Business Heading</th>
                                                    <th> Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($business !=null)
                                                @foreach($business as $feature)
                                                <tr>
                                                    <td>
                                                       {{$feature->title}}
                                                    </td>
                                                    <td>
                                                        {{$feature->description}}
                                                    </td>
                                                    <td>
                                                        <img height="50" src="{{asset('frontend')}}/images/custompages/home/bisiness/{{$feature->image}}" alt="">
                                                    </td>
                                                    <td>
                                               
                                                    <a class="dropdown-item" href="{{route('cms.custom.business.delete',$feature->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>
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

        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                              BroadCast Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Broadcast</h4>
                                </div>
                                <div class="card-body">

                                <form action="{{route('cms.custom.broadcast.title')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group">
                                                    <label>section title</label>
                                                    <input type="text" class="form-control" name="broadcast_heding" value="{{$home_page_data->broadcast_heding}}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" style="margin-top: 10px;" class="btn add-btn"> <i class="fa fa-edit"></i> update</button>
                                            </div>
                                        </div>
                                    <hr>
                                       
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#broadcast"><i class="fa fa-plus"></i> Add new broadcast</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Camera</th>
                                                    <th>Locationing</th>
                                                    <th>Digree</th>
                                                    <th>Temprature</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($broadcasts !=null)
                                                @foreach($broadcasts as $feature)
                                                <tr>
                                                    <td>
                                                       {{$feature->cam}}
                                                    </td>
                                                    <td>
                                                        {{$feature->location}}
                                                    </td>
                                                    <td>
                                                       {{$feature->degree}}
                                                    </td>
                                                    <td>
                                                        {{$feature->temperature}}
                                                    </td>
                                                    <td>
                                                        <img height="50" src="{{asset('frontend')}}/images/custompages/home/bisiness/{{$feature->image}}" alt="">
                                                    </td>
                                                    <td>
                                               
                                                    <a class="dropdown-item" href="{{route('cms.custom.broadcast.delete',$feature->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </td>
                                                </tr>
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
        
<div class="modal custom-modal fade" id="add_what_we_use" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add What We Use Image</h5>
                <form action="{{route('cms.custom.add.wwu')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Url</label>
                                <input type="text" name="url" placeholder="http://www.facebook.com" class="form-control" required />
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Select Image</label>
                                <input name="image" type="file" class="form-control" required />
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
<div class="modal custom-modal fade" id="add_about_us_feature" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add About Us Feature</h5>
                <form action="{{route('cms.custom.aboutus.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Feature Title</label>
                                <input type="text" name="title" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Image</label>
                                <input name="image" type="file" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Feature Description</label>
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


<div class="modal custom-modal fade" id="business" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add new business</h5>
                <form action="{{route('cms.custom.business.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Business Title</label>
                                <input type="text" name="title" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Business Image</label>
                                <input name="image" type="file" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Business Description</label>
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
<div class="modal custom-modal fade" id="broadcast" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add new broadcast</h5>
                <form action="{{route('cms.custom.broadcast.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Camera</label>
                                <input type="text" name="cam" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Locationing</label>
                                <input type="text" name="location" placeholder="" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Temperature</label>
                                <input type="text" name="temperature" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Temperature</label>
                                <input type="text" name="temperature" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Business Image</label>
                                <input name="image" type="file" class="form-control" required />
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
@endsection
