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
                    <h3 class="page-title">New Industrial Page</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cms.industries.index')}}">industrial</a></li>
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
                <form action="{{route('cms.industries.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Meta Info & Header Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label>Page Title</label>
                                        <input type="text" class="form-control" name="page_title" value="" required />
                                    </div>
                                    <div class="col-6">
                                        <label>Meta title</label>
                                        <input type="text" class="form-control" name="meta_name" value="" required />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Meta Description</label>
                                    <textarea required name="meta_description" rows="3" cols="5" class="form-control" placeholder="description here" ></textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Header Heading</label>
                                    <input type="text" class="form-control" name="header_heading" value="" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Header Description</label>
                                    <textarea required name="header_description" rows="3" cols="5" class="form-control" placeholder=" description here" ></textarea>
                                </div>
                                <div class="form-group mb-4 row">
                                    <div class="col-8">
                                        <label for="">Backgroung image</label>
                                        <input class="form-control" required type="file" name="bg_image" id="">
                                    </div>
                                    <div class="col-4">
                                       <img src="" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Select Solution Sub Page Videos</label>
                                    <select class="form-control select" name="solution_sub_page_title[]" id="" multiple="">
                                        @if($solution_sub_pages->count()>0)
                                        @foreach ($solution_sub_pages as $sp)
                                        <option value="{{$sp->title}}">{{$sp->title}}</option>
                                        @endforeach
                                        @else
                                        <option value="">---No solution sub pages--</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-plus"></i> Create Now</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
{{-- @section('select-script')
        <script>
            $(document).ready(function(){
                $('.select').select2({
                    maximumSelectionLength: 1
                });
            });
        </script>
@endsection --}}
@endsection
