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
                    <h3 class="page-title">Settings</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="route('dashboard')">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">general settings</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Success!</strong>  {{ session()->get('success') }}
                                
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Success!</strong> {{ session()->get('error') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
                    @endif
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('add.siteinfo')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card leave-box mb-5" id="leave_annual">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 bg-ccc">
                                <div class="h3 card-title with-switch">
                                    <br />
                                    Site Information
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label>Site Title</label>
                                    <input type="text" class="form-control" name="site_title" value=" @if($generals!=null)  {{$generals->site_title}} @endif" required />
                                </div>

                                <div class="form-group mb-4">
                                    <label>Site description</label>
                                    <textarea name="description" rows="3" cols="5" class="form-control" maxlength="215" placeholder="site description here" >@if($generals!=null)  {{$generals->description}} @endif</textarea>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Favicon</label>
                                            <input  name="favicon" class="form-control" type="file" />
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-4">
                                        @if($generals->favicon !=null) 
                                        <img src="{{asset('frontend')}}/images/fevicon/{{$generals->favicon}} " alt="" width="100" height="70" />
                                         @endif
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Logo</label>
                                            <input name="logo"  class="form-control" type="file" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        @if($generals->logo !=null) 
                                        <img src="{{asset('frontend')}}/images/{{$generals->logo}} " alt="" width="100%" height="70" />
                                         @endif
                                    </div>
                                </div>
                              
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <form action="{{route('add.contactInfo')}}" method="post">
                    @csrf
                <div class="card leave-box" id="leave_annual">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 bg-ccc">
                                    <div class="h3 card-title with-switch">
                                        <br />
                                        Contact Information
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group mb-4">
                                        <label>Phone#</label>
                                        
                                        <input type="phone" class="form-control" name="phone" value="@if($generals->phone !=null) {{$generals->phone}} @endif" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="@if($generals->email !=null) {{$generals->email}} @endif" placeholder="abc@gmail.com" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>Adress</label>
                                        <input type="text" class="form-control" name="address" value="@if($generals->address !=null) {{$generals->address}} @endif" />
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Update</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                </form>

             
                <div class="card leave-box" id="leave_annual">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 bg-ccc">
                                    <div class="h3 card-title with-switch">
                                        <br />
                                        Language
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group mb-4">
                                        <form action="{{route('add.language')}}" method="post">
                                            @csrf
                                        <label>select default language</label>
                                        <select class="form-control" name="language" id="">
                                            <option value="@if($generals->language !=null) {{$generals->language}} @endif" disabled selected>{{$generals->language}}</option>
                                            <option value="en">en</option>
                                            <option value="nl">nl</option>
                                            <option value="fr">fr</option>
                                            <option value="es">es</option>
                                        </select>
                                        <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Update</button>
                                    </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{route('add.copyright')}}" method="post">
                    @csrf
                <div class="card leave-box" id="leave_annual">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 bg-ccc">
                                    <div class="h3 card-title with-switch">
                                        <br />
                                        Footer settings
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group mb-4">
                                        <label>Copy Right Text</label>
                                        <input type="text"  name="copy_right_text" class="form-control" value="@if($generals->copy_right_text !=null) {{$generals->copy_right_text}} @endif" placeholder="Copyright © 2022 RRSTEK All rights reserved" />
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="card leave-box" id="leave_annual">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 bg-ccc">
                                    <div class="h3 card-title with-switch">
                                        <br />
                                        Social Links
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-8"></div>
                                        <div class="col-4">
                                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_social_links"><i class="fa fa-plus"></i> Add new link</a>
                                        </div>
                                        <br />
                                        <br />
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Social Links</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive table table-bordered">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>link URL</th>
                                                            <th>link image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($social_links->count()>0) @foreach($social_links as $link)
                                                        <tr>
                                                            <td>
                                                                <form action="{{route('edit.socials',$link->id)}}" method="post">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-8">
                                                                        <div class="form-group mb-4">
                                                                            <input type="text" class="form-control" name="url" value="{{$link->url}}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <button type="submit" class="btn btn-info">Update</button>
                                                                    </div>
                                                                
                                                                    
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <img src="{{asset('frontend')}}/images/social-icons/Button/{{$link->image}}" alt="image description" width="50" height="50" />
                                                            </td>
                                                            <td>
                                                                        <a class="dropdown-item" href="{{route('del.socials',$link->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach @else
                                                        <tr class="bg-ccc">
                                                            <td></td>
                                                            <td>No links added</td>
                                                            <td></td>
                                                        </tr>
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
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->

<div class="modal custom-modal fade" id="add_social_links" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add Social Link</h5>
                <form action="{{route('add.socials')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Url</label>
                                <input type="text" name="url" placeholder="http://www.facebook.com" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-6">
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

@endsection