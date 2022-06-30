@extends('admin.layouts.app') @section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Edit {{$sub_page->title}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/solution')}}">solution</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/solution/sub-page')}}">sub pages</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Edit {{$sub_page->title}}</li>
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
                <form action="{{route('cms.solution.subupdate',$sub_page->id)}}" method="post" enctype="multipart/form-data">
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
                                        <label>Select Parent Sloution</label>
                                        <select class="form-control" requireds name="page_categories_id">
                                            <option value="{{$category->id}}" disabled selected>{{$category->name}}</option>
                                            @if($categories->count()>0) @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach @endif
                                        </select>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label> Sub Page Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$sub_page->title}}" required />
                                    </div>
                                    <!-- 
                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <textarea  name="description" rows="3" cols="5" class="form-control" maxlength="165" placeholder=" description here" >{{$sub_page->description}}</textarea>
                                </div> -->
                                  
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <img src="{{asset('frontend/images')}}/{{$category->name}}/{{$sub_page->title}}/{{$sub_page->fetaured_image}}" width="100%" height="250" alt="" />
                                            <div class="form-group">
                                                <label>Change Image</label>
                                                <input name="featured_image" class="form-control" type="file" accept="image/png, image/gif, image/jpeg" />
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <img src="{{asset('frontend')}}/video.png" width="100%" height="250" alt="" />
                                            <div class="form-group">
                                                <label>Change Video</label>
                                                <input name="video" class="form-control" type="file" accept="video/mp4,video/x-m4v,video/*" />
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h2 style="text-align: center;">Overview Section</h2>
                                    <div class="form-group mb-4">
                                        <label>Description</label>
                                        <textarea name="description" rows="4" class="form-control summernote" placeholder="Enter your content">{{$sub_page->description}}</textarea>
                                    </div>
                                    <div id="section-container">
                                        <?php $n=1; ?>
                                        @if($sections->count()>0)
                                       
                                        @foreach($sections as $section)
                                        <hr>
                                        <h2 class="text-center">{{$section->title}}</h2>
                                        <a style="float: right;" class="btn btn-danger mb-2" href="{{route('cms.solution.section.delete',$section->id)}}"><i class="la la-trash"></i></a>
                                        <input type="hidden" name="section_id_{{$n}}" value="{{$section->id}}">
                                        <div class="form-group">
                                            <label>Section Title</label>
                                            <input class="form-control" value="{{$section->title}}" type="text" name='title_{{$n}}' />
                                        </div>
                                  
                                <div class="form-group">
                                    <label>Section body</label>
                                    <textarea name="description_{{$n}}" rows="4" class="form-control summernote" placeholder="Enter your content">{{$section->body}}</textarea>
                                </div>
                                        <?php  $n++  ?>
                                        @endforeach
                                        @endif
                                        <!-- here will be the new section content -->
                                    </div>
                                  
                                    @if($n <=3)
                                    <a id="add-sec-btn" href="javascript:void(0)" onclick="addSection()" style="float: right;"><i class="fa fa-plus"></i> Add section</a>
                                    @endif
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn"><i class="fa fa-plus"></i> Update Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.solution.sub.meta.update',$sub_page->id)}}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="meta_name" value="{{$sub_page->meta_name}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Meta Description</label>
                                    <textarea required name="meta_description" rows="3" cols="5" class="form-control" maxlength="500" placeholder=" description here" >{{$sub_page->meta_description}}</textarea>
                                </div>
                               
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn"> <i class="fa fa-edit"></i> update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>

<script>
    var i = 4;
function addSection() {
    ++i;
   $("#section-container").append('<h2 style="text-align: center;">Add Section</h2><div id="title"><div class="form-group"><label>Section Title</label><input class="form-control" type="text" name="title_'+i+'"></div><div class="form-group"><label>Section body</label></div><textarea name="description_'+i+'" id="body-'+i+'"></textarea><hr>'
   );
   $("#section-container #body-"+i).summernote('insertText', 'Section description');
  if(i==7){
   $('#add-sec-btn').css("display","none"); 
  }
}
</script>
@endsection
