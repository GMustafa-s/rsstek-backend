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
        {{-- /meta section --}}


        {{-- page heading section--}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.cases-header.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Page Heading
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="cases_heading" value="@if($data->cases_heading !=null) {{$data->cases_heading}} @endif" required />
                                </div>
                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <textarea type="text" rows="4" cols="4" class="form-control" name="cases_description"  required>@if($data->cases_description !=null) {{$data->cases_description}} @endif</textarea>
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

        {{-- our work section "common page"--}}
        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Our Work Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Our Work Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{route('our-work-common-page-heading')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="ourwork_section_heading" value="@if($data->ourwork_section_heading) {{$data->ourwork_section_heading}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#ourwork_section"><i class="fa fa-plus"></i> Add New</a>
                                    <br><br>
                                    <div class="table-responsive table table-bordered">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Location</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($our_works !=null)
                                                @foreach($our_works as $ow)
                                                <tr>
                                                    <td>
                                                       {{$ow->name}}
                                                    </td>
                                                    <td>
                                                        {{$ow->location}}
                                                    </td>
                                                    <td>
                                                        @if($ow->image !=null)
                                                        <img width="100px" height="100px" src="{{asset('frontend')}}/images/common-pages/our-work/{{$ow->image}}" alt="image">
                                                        @endif
                                                    </td>
                                                    <td>
                                                    <form action="{{route('cms.custome.our-work-section.delete', $ow->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button  style="border: none" onclick="return confirm('Are you sure want ot delete {{$ow->name}}?')" type="submit"><i class="fa fa-trash-o m-r-5"></i></button>

                                                    </form>
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
        {{-- /our work section --}}

    </div>
</div>


{{-- our work section popup form --}}
<div class="modal custom-modal fade" id="ourwork_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New</h5>
                <form action="{{route('cms.custome.our-work-section.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Enter name" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="image" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" required name="location" class="form-control" placeholder="Enter location" />
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
{{-- /our work section popup form --}}
@endsection
