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
                    <h3 class="page-title">New solution sub page</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/solution')}}">solution</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/solution/sub-page')}}">sub pages</a></li>
                            
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
    
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.solution.substore')}}" method="post" enctype="multipart/form-data">
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
                                    <label>Select Parent solution</label>
                                    <select class="form-control" requireds name="page_categories_id">
													<option disabled selected>-- Select --</option>
                                                        @if($categories->count()>0)
                                                        @foreach($categories as $category)
													    <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                        @endif
												</select>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" maxlength="100" value="" required />
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Featured Image</label>
                                            <input required name="featured_image" class="form-control" type="file" accept="image/png, image/gif, image/jpeg" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Header Video URL</label>
                                            <input required name="video" class="form-control" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h2 style="text-align: center;">Overview Section</h2>
                                <div class="form-group mb-4">
                                    <label> Description</label>
                                    <textarea name="description" rows="4" class="form-control summernote" placeholder="Enter your content"></textarea>
                                </div>
                                <div id="section-container">
                                    <!-- here will be the new section content -->
                                </div>
                                <a id="add-sec-btn" href="javascript:void(0)" onclick="addSection()" style="float: right;"><i class="fa fa-plus"></i> Add section</a>
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
    </div>
    <script>
        var i = 0;
   function addSection() {
        ++i;
       $("#section-container").append('<h2 style="text-align: center;">Add Section</h2><div id="title"><div class="form-group"><label>Section Title</label><input class="form-control" type="text" name="title_'+i+'"></div><div class="form-group"><label>Section body</label></div><textarea name="description_'+i+'" id="body-'+i+'"></textarea><hr>'
       );
       $("#section-container #body-"+i).summernote('insertText', 'Section description');
       
      if(i==3){
       $('#add-sec-btn').css("display","none"); 
      }
}
   </script>
@endsection