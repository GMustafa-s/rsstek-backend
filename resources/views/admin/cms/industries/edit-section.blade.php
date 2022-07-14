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
                    <h3 class="page-title">Edit {{$data->heading}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cms.industries.security-section.index')}}">sections</a></li>
                            <li class="breadcrumb-item active" aria-current="page">edit</li>
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
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.industries.security-section.update', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    {{$data->heading}} Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <select class="form-control" name="industries_page_id" id="" required>
                                        <option value="@if($data->industries_page_id == $ipn->id) {{$ipn->id}} @endif" selected>@if($data->industries_page_id == $ipn->id) {{$ipn->page_title}} @endif</option>
                                        @if($industries_pages->count()>0)
                                        @foreach ($industries_pages as $ip)
                                        <option value="{{$ip->id}}">{{$ip->page_title}}</option>
                                        @endforeach
                                        @endif
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label>Heading</label>
                                        <input  type="text" class="form-control" name="heading" value="@if($data->heading != null){{$data->heading}} @endif" required />
                                    </div>
                                    <div class="col-6">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description" value="@if($data->description != null){{$data->description}} @endif" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <label for="">Backgroung image</label>
                                        <input type="file" class="form-control" name="image" id="">
                                    </div>
                                    <div class="col-4">
                                        @if($data->image != null)
                                        <img width="50px" height="50px" src="{{asset('frontend')}}/images/industries/security-section/{{$data->image}}" alt="image" srcset="">
                                        @endif
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-plus"></i> Update</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
@endsection
