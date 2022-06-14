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
                    <h3 class="page-title">Edit {{$sub_page->title}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin-dashboard')}}">dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/solution')}}">solution</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/solution/sub-page')}}">sub pages</a></li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Edit {{$sub_page->title}} </li>
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

			@if($section == null )
            <div class="row mb-2">
                <div class="col-9"></div>
                <div class="col-3">
                <button  type="submit" data-toggle="modal" data-target="#create_project" class="btn btn-primary submit-btn"> <i class="fa fa-plus"></i> Add Section</button>
                </div>
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
                                    <label>Select Parent Category</label>
                                    <select class="form-control" requireds name="page_categories_id">
													<option value="{{$category->id}}" disabled selected>{{$category->name}}</option>
                                                        @if($categories->count()>0)
                                                        @foreach($categories as $category)
													    <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                        @endif
												</select>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label> Sub-category title</label>
                                    <input type="text" class="form-control" name="title" value="{{$sub_page->title}}" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Description</label>
                                    <textarea  name="description" rows="3" cols="5" class="form-control" maxlength="165" placeholder=" description here" >{{$sub_page->description}}</textarea>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <img src="{{asset('frontend/images')}}/{{$category->name}}/{{$sub_page->title}}/{{$sub_page->fetaured_image}}" width="100%" height="250" alt="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Change Image</label>
                                            <input  name="featured_image" class="form-control" type="file" accept="image/png, image/gif, image/jpeg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Change Video</label>
                                            <input  name="video" class="form-control" type="file" accept="video/mp4,video/x-m4v,video/*" />
                                        </div>
                                    </div>
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

            @if($section !=null)
            <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.solution.section.update',$section->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Section Information
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Section Title</label>
                                            <input class="form-control" value="{{$section->title}}" type="text" name="title">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Section body</label>
                                    <textarea name="body" rows="4" class="form-control summernote" placeholder="Enter your content">{{$section->body}}</textarea>
                                </div>
                            
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Update</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
            @endif
            </div>
            </div>
					
				<!-- Create Project Modal -->
				<div id="create_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Section</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{route('cms.solution.section.add',$sub_page->id)}}" method="post"  enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Section Title</label>
												<input class="form-control" type="text" name="title">
											</div>
										</div>

									</div>
									<div class="form-group">
										<label>Section body</label>
										<textarea name="body" rows="4" class="form-control summernote" placeholder="Enter your content"></textarea>
									</div>
								
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
            
@endsection