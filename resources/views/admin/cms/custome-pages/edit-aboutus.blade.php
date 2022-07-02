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

         {{-- About Us Page  --}}

         {{-- page heading section--}}
         <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.aboutus_page_heading.update')}}" method="post" enctype="multipart/form-data">
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
                                    <label>Page Heading</label>
                                    <input type="text" class="form-control" name="aboutus_heading" value="@if($aboutus_heading->aboutus_heading) {{$aboutus_heading->aboutus_heading}} @endif" required />
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

        {{-- top info section --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.top_info_section.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Information Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <h4 class="text-primary mt-2">Info One</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">Value</label>
                                            <input type="text" class="form-control" name="value_1" value="@if($top_info_section->value_1) {{$top_info_section->value_1}} @endif" required />
                                        </div>
                                        <div class="col-6">
                                            <label for="">Text</label>
                                            <input type="text" class="form-control" name="text_1" value="@if($top_info_section->text_1) {{$top_info_section->text_1}} @endif" required />
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="">Icon</label>
                                            <input type="file" class="form-control" name="icon_1" value=""/>
                                        </div>
                                        <div class="imgColor" class="col-4">
                                            @if($top_info_section->icon_1 !=null)
                                            <img  src="{{asset('frontend')}}/images/About-rrstek/top-info-section-icon/{{$top_info_section->icon_1}}" alt="icon" width="auto" height="100" />
                                            @else
                                                <p class="row mt-4"> no icon </p>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="text-primary">Info Two</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">Value</label>
                                            <input type="text" class="form-control" name="value_2" value="@if($top_info_section->value_2) {{$top_info_section->value_2}} @endif" required />
                                        </div>
                                        <div class="col-6">
                                            <label for="">Text</label>
                                            <input type="text" class="form-control" name="text_2" value="@if($top_info_section->text_2) {{$top_info_section->text_2}} @endif" required />
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="">Icon</label>
                                            <input type="file" class="form-control" name="icon_2" value=""/>
                                        </div>
                                        <div class="imgColor" class="col-4">
                                            @if($top_info_section->icon_2 !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/top-info-section-icon/{{$top_info_section->icon_2}}" alt="icon" width="auto" height="100" />
                                            @else
                                                <p class="row mt-4"> no icon </p>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="text-primary">Info Three</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">Value</label>
                                            <input type="text" class="form-control" name="value_3" value="@if($top_info_section->value_3) {{$top_info_section->value_3}} @endif" required />
                                        </div>
                                        <div class="col-6">
                                            <label for="">Text</label>
                                            <input type="text" class="form-control" name="text_3" value="@if($top_info_section->text_3) {{$top_info_section->text_3}} @endif" required />
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="">Icon</label>
                                            <input type="file" class="form-control" name="icon_3" value="" />
                                        </div>
                                        <div class="imgColor" class="col-4">
                                            @if($top_info_section->icon_3 !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/top-info-section-icon/{{$top_info_section->icon_3}}" alt="icon" width="auto" height="100" />
                                            @else
                                                <p class="row mt-4"> no icon </p>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>


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
        {{-- /top info section --}}


        {{-- aboutus section--}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.aboutus_section.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    About Us Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>About Us Heading</label>
                                    <input type="text" class="form-control" name="our_heading" value="@if($aboutus_section->our_heading) {{$aboutus_section->our_heading}} @endif" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>About Us Description</label>
                                    <textarea rows="7" cols="5" maxlength="200" class="form-control" name="our_description"  required>@if($aboutus_section->our_description) {{$aboutus_section->our_description}} @endif</textarea>
                                </div>
                                <div class="form-group mb-4 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>About Us Image</label>
                                            <input type="file" name="our_image" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            @if($aboutus_section->our_image !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/aboutus-section/{{$aboutus_section->our_image}}" alt="img" width="auto" height="100" />
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
        {{-- /aboutus section--}}

        {{-- our work section--}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.ourwork_section.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Our Work Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Our Work Heading</label>
                                    <input type="text" class="form-control" name="our_work_heading" value="@if($ourwork_section->our_work_heading) {{$ourwork_section->our_work_heading}} @endif" required />
                                </div>

                                <hr>
                                <h4 class="text-primary">Card One</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="sub_heading_1" value="@if($ourwork_section->sub_heading_1) {{$ourwork_section->sub_heading_1}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Icon</label>
                                            <input type="file" class="form-control" name="sub_heading_1_icon"  />
                                        </div>
                                    </div>
                                    <div class="col-2 workImage">
                                        @if($ourwork_section->sub_heading_1_icon !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_1_icon}}" alt="icon" width="auto" height="50  " />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
                                    </div>
                                </div>

                                <hr>
                                <h4 class="text-primary">Card Two</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="sub_heading_2" value="@if($ourwork_section->sub_heading_2) {{$ourwork_section->sub_heading_2}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Icon</label>
                                            <input type="file" class="form-control" name="sub_heading_2_icon" />
                                        </div>
                                    </div>
                                    <div class="col-2 workImage">
                                        @if($ourwork_section->sub_heading_2_icon !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_2_icon}}" alt="icon" width="auto" height="50  " />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
                                    </div>
                                </div>

                                <hr>
                                <h4 class="text-primary">Card Three</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="sub_heading_3" value="@if($ourwork_section->sub_heading_3) {{$ourwork_section->sub_heading_3}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Icon</label>
                                            <input type="file" class="form-control" name="sub_heading_3_icon"  />
                                        </div>
                                    </div>
                                    <div class="col-2 workImage">
                                        @if($ourwork_section->sub_heading_3_icon !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_3_icon}}" alt="icon" width="auto" height="50  " />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
                                    </div>
                                </div>

                                <hr>
                                <h4 class="text-primary">Card Four</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="sub_heading_4" value="@if($ourwork_section->sub_heading_4) {{$ourwork_section->sub_heading_4}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group mb-4">
                                            <label>Icon</label>
                                            <input type="file" class="form-control" name="sub_heading_4_icon" />
                                        </div>
                                    </div>
                                    <div class="col-2 workImage">
                                        @if($ourwork_section->sub_heading_4_icon !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_4_icon}}" alt="icon" width="auto" height="50  " />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
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
        {{-- /our work section--}}

         {{-- cheif office section--}}
         <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.chief-office.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Chief Exective Officer
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="@if($chief_officer->name) {{$chief_officer->name}} @endif" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>About</label>
                                    <textarea rows="7" cols="5" maxlength="200" class="form-control" name="about"  required>@if($chief_officer->about) {{$chief_officer->about}} @endif</textarea>
                                </div>
                                <div class="form-group mb-4 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>About Us Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            @if($chief_officer->image !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/chief-officer/{{$chief_officer->image}}" alt="image" width="auto" height="100" />
                                            @else
                                                <img class="row mt-4" > no image/>
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
         {{-- /cheif office section--}}

         {{-- about our product section --}}
         <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.our-product.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    About Our Product Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading" value="@if($our_product->heading) {{$our_product->heading}} @endif" required />
                                </div>
                                <h4 class="text-primary mt-2">Card One</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <label for="text_1">Text</label>
                                        <input type="text" class="form-control" name="text_1" value="@if($our_product->text_1) {{$our_product->text_1}} @endif" required />
                                    </div>
                                    <div class="col-5">
                                        <label for="icon_1">Icon</label>
                                        <input type="file" class="form-control" name="icon_1"/>
                                    </div>
                                    <div class="col-2 ourProductImage">
                                        @if($our_product->icon_1 !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_1}}" alt="img" width="auto" height="100" />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <h4 class="text-primary mt-2">Card Two</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <label for="number">Text</label>
                                        <input type="text" class="form-control" name="text_2" value="@if($our_product->text_2) {{$our_product->text_2}} @endif" required />
                                    </div>
                                    <div class="col-5">
                                        <label for="icon_2">Icon</label>
                                        <input type="file" class="form-control" name="icon_2" value=""/>
                                    </div>
                                    <div class="col-2 ourProductImage">
                                        @if($our_product->icon_2 !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_2}}" alt="img" width="auto" height="100" />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <h4 class="text-primary mt-2">Card Three</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <label for="text_3">Text</label>
                                        <input type="text" class="form-control" name="text_3" value="@if($our_product->text_3) {{$our_product->text_3}} @endif" required />
                                    </div>
                                    <div class="col-5">
                                        <label for="icon_3">Icon</label>
                                        <input type="file" class="form-control" name="icon_3" value=""/>
                                    </div>
                                    <div class="col-2 ourProductImage">
                                        @if($our_product->icon_3 !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_3}}" alt="img" width="auto" height="100" />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <h4 class="text-primary mt-2">Card Four</h4>
                                <div class="row">
                                    <div class="col-5">
                                        <label for="text_4">Text</label>
                                        <input type="text" class="form-control" name="text_4" value="@if($our_product->text_4) {{$our_product->text_4}} @endif" required />
                                    </div>
                                    <div class="col-5">
                                        <label for="icon_4">Icon</label>
                                        <input type="file" class="form-control" name="icon_4" value=""/>
                                    </div>
                                    <div class="col-2 ourProductImage">
                                        @if($our_product->icon_4 !=null)
                                        <img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_4}}" alt="img" width="50" height="50" />
                                        @else
                                            <p class="row mt-4" > no image</p>
                                        @endif
                                    </div>
                                </div>
                                <hr>
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
         {{-- /about our product section --}}

         {{-- Product information section --}}
         <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.product-info-section.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Our Product Info Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <h4 class="text-primary mt-2">Info One</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="value_1">Value</label>
                                            <input type="text" class="form-control" name="value_1" value="@if($product_info_section->value_1) {{$product_info_section->value_1}} @endif" required />
                                        </div>
                                        <div class="col-6">
                                            <label for="text_1">Text</label>
                                            <input type="text" class="form-control" name="text_1" value="@if($product_info_section->text_1) {{$product_info_section->text_1}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="icon_1">Icon</label>
                                            <input type="file" class="form-control" name="icon_1" value="" required />
                                        </div>
                                        <div class="imgColor" class="col-4">
                                            @if($product_info_section->icon_1 !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_1}}" alt="img" width="auto" height="100" />
                                            @else
                                                <p class="row mt-4" > no image</p>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="text-primary">Info Two</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="value_2">Value</label>
                                            <input type="text" class="form-control" name="value_2" value="@if($product_info_section->value_2) {{$product_info_section->value_2}} @endif" required />
                                        </div>
                                        <div class="col-6">
                                            <label for="text_2">Text</label>
                                            <input type="text" class="form-control" name="text_2" value="@if($product_info_section->text_2) {{$product_info_section->text_2}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="icon_2">Icon</label>
                                            <input type="file" class="form-control" name="icon_2" value="" required />
                                        </div>
                                        <div class="imgColor" class="col-4">
                                            @if($product_info_section->icon_2 !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_2}}" alt="img" width="auto" height="100" />
                                            @else
                                                <p class="row mt-4" > no image</p>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="text-primary">Info Three</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="value_3">Value</label>
                                            <input type="text" class="form-control" name="value_3" value="@if($product_info_section->value_3) {{$product_info_section->value_3}} @endif" required />
                                        </div>
                                        <div class="col-6">
                                            <label for="text_3">Text</label>
                                            <input type="text" class="form-control" name="text_3" value="@if($product_info_section->text_3) {{$product_info_section->text_3}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="icon_3">Icon</label>
                                            <input type="file" class="form-control" name="icon_3" value="" required />
                                        </div>
                                        <div class="imgColor" class="col-4">
                                            @if($product_info_section->icon_3 !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_3}}" alt="img" width="auto" height="100" />
                                            @else
                                                <p class="row mt-4" > no image</p>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="text-primary">Info Four</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="value_4">Value</label>
                                            <input type="text" class="form-control" name="value_4" value="@if($product_info_section->value_4) {{$product_info_section->value_4}} @endif" required />
                                        </div>
                                        <div class="col-6">
                                            <label for="text_4">Text</label>
                                            <input type="text" class="form-control" name="text_4" value="@if($product_info_section->text_4) {{$product_info_section->text_4}} @endif" required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="icon_4">Icon</label>
                                            <input type="file" class="form-control" name="icon_4" value="" required />
                                        </div>
                                        <div class="imgColor" class="col-4">
                                            @if($product_info_section->icon_4 !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_4}}" alt="img" width="auto" height="100" />
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
         {{-- /Product  information section --}}

         {{-- our customer section --}}
         <div class="row">
            <div class="col-md-12">
                <form action="{{route('cms.custome.our-customer.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Our Customer Section
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading" value="@if($our_customer->heading) {{$our_customer->heading}} @endif" required />
                                </div>
                                <div class="form-group mb-4 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            @if($our_customer->image !=null)
                                            <img src="{{asset('frontend')}}/images/About-rrstek/our-customer/{{$our_customer->image}}" alt="img" width="auto" height="100" />
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
         {{-- /our customer section --}}
    </div>
</div>






@endsection
