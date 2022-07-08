@extends('admin.layouts.app')
@section('content')
<div class="page-wrapper" style="min-height: 198px;">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Industries Security Section</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/')}}">dashboard</a></li>
									<li class="breadcrumb-item active">industries security section</li>
								</ul>
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
						<div class="col-sm-12">
							<div class="card mb-0">

								<div class="card-body">

									<div class="table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="DataTables_Table_0_length">
                    <label>
                        Show
                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        entries
                    </label>

                </div>
            </div>
            <div class="col-sm-12 col-md-6">
			<a href="#" class="btn add-btn" data-toggle="modal" data-target="#regular_security_section"><i class="fa fa-plus"></i> Add new security section</a>
			</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="datatable table table-stripped mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 187.141px;">Security Section Heading</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 187.141px;">Industries Page</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 187.141px;">Section Image</th>

                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108.406px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($security_sections->count()>0)
                        @foreach ($security_sections as $ss)
                            <tr>
                                <td>
                                    {{$ss->heading}}
                                </td>
                                <td>
                                    {{-- @if ($ss->industries_page_id == $ss->industriesPage()->id)
                                        {{$ss->industriesPage()->page_title}}
                                    @endif --}}
                                </td>
                                <td>
                                    <img width="50px" height="50px" src="{{asset('frontend')}}/images/industries/security-section/{{$ss->image}}" alt="image" srcset="">
                                </td>
                                <td style="font-size: 20px;">
                                    <span> <a href=""><i class="la la-eye"></i></a> </span> |
                                    <span> <a href=""><i class="la la-edit"></i></a> </span> |
                                    <span> <a href=""><i class="la la-trash"></i> </a></span>
                                </td>
                            </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div></div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                    </ul>
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

{{-- regular security section pop up form --}}

<div class="modal custom-modal fade" id="regular_security_section" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            <div class="modal-body">
                <h5 class="modal-title text-center mb-3">Add New Control System</h5>
                <form action="{{route('cms.industries.security-section.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <label for="">Select Industries Page</label>
                        <select class="form-control" name="industries_page_id" id="" required>
                            <option value="">---select industries page--</option>
                            @if($industries_pages->count()>0)
                            @foreach ($industries_pages as $ip)
                            <option value="{{$ip->id}}">{{$ip->page_title}}</option>
                            @endforeach
                            @endif
                        </select>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" name="heading" placeholder="" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6 mt-2">
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



            <script>
                function showtext(){
                    $('#sub-pages').toggleClass( "text-hide" );
                    $('#seemore').toggleClass( "text-hide" );
                    $('#seeless').toggleClass( "text-hide" );

                }
            </script>
		<script src="{{asset('adminn')}}/assets/js/jquery.dataTables.min.js"></script>
		<script src="{{asset('adminn')}}/assets/js/dataTables.bootstrap4.min.js"></script>
@endsection
