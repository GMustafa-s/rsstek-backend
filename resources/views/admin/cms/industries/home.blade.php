@extends('admin.layouts.app')
@section('content')
<div class="page-wrapper" style="min-height: 198px;">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Industries</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/')}}">dashboard</a></li>
									<li class="breadcrumb-item active">industries</li>
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
			<a href="{{route('cms.industries.create')}}" class="btn add-btn" ><i class="fa fa-plus"></i> Add Page</a>
			</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="datatable table table-stripped mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 187.141px;">Page Name</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 187.141px;">Meta Name</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 187.141px;">Bg Image</th>

                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108.406px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($industries_pages->count()>0)
                        @foreach ($industries_pages as $industries_page)
                            <tr>
                                <td>
                                    <a href="{{route('industries.slug', $industries_page->slug)}}">{{$industries_page->page_title}}</a>
                                </td>
                                <td>
                                    {{$industries_page->meta_name}}
                                </td>
                                <td>
                                    <img width="50px" height="50px" src="{{asset('frontend')}}/images/industries/{{$industries_page->bg_image}}" alt="image" srcset="">
                                </td>
                                <td style="font-size: 20px;display: flex;gap: 10px;">
                                    <a href="{{route('industries.slug', $industries_page->slug)}}" class="btn btn-warning btn-sm">show</a>
                                    <a href="{{route('cms.industries.edit', $industries_page->id)}}" class="btn btn-primary btn-sm">edit</a>

                                    <form action="{{route('cms.industries.delete', $industries_page->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick= "return confirm('Are you sure want to delete record? it will aslo delete it\'s security section!')" type="submit" class="btn btn-danger btn-sm">delete</button>
                                    </form>

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
