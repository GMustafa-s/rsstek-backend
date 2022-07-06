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
                    <h3 class="page-title">New Regular Security Section</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cms.industries.index')}}">Industries</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cms.industries.section.index')}}">Regular Security Section</a></li>

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

        <div class="card leave-box" id="leave_annual">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 bg-ccc">
                            <div class="h3 card-title with-switch">
                                <br>
                                Regular Security Section
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Regular Security Section</h4>
                                </div>
                                <div class="card-body">

                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <label for="">Select Industries Page</label>
                                            <select class="form-control" name="" id="" required>
                                                <option value="">---select industries page--</option>
                                            </select>
                                            <div class="col-12 mt-2">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control" name="control_heading" value="">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    <hr>
                                    </form>

                                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#regular_security_section"><i class="fa fa-plus"></i> Add New</a>
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
                                                {{-- @if($control_sections !=null)
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
                                                    <form action="{{route('cms.custome.integration-control-section.delete', $control_section->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button  style="border: none" onclick="return confirm('Are you sure want ot delete {{$control_section->name}}?')" type="submit"><i class="fa fa-trash-o m-r-5"></i></button>

                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif --}}
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
    </div>


{{-- regular security section pop up form --}}

<div class="modal custom-modal fade" id="regular_security_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
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
{{-- /regular security section pop up form --}}
@endsection
