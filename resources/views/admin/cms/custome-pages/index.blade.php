@extends('admin.layouts.app')
@section('content')
<div class="page-wrapper" style="min-height: 198px;">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Custom Pages</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/')}}">dashboard</a></li>
									<li class="breadcrumb-item active">custom-pages</li>
								</ul>
							</div>
						</div>
					</div>

                    <!-- code editor -->
                    <!-- <div style="width:500px ;">
                        <pre id="editor2">minHeight = 2 lines


                        </pre>

                    </div> -->
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

									<d<div class="table-responsive">
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

        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="datatable table table-stripped mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 187.141px;">Page title</th>

							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108.406px;">Meta Name</th>

                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 108.406px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($pages !=null)
                         @foreach($pages as $page)
                        <tr role="row" class="odd">
                            <td class="sorting_1">
								<a href="">{{$page->page_title}}</a>
							</td>
                            <td>
                                {{$page->meta_name}}
                            </td>

                            <td style="font-size: 20px;">
                                @if($page->id==1)
                                <a href="{{route('cms.custom.edit',$page->id)}}"><i class="la la-edit"></i></a>
                                @endif
                                @if($page->id ==2)
                                <a href="{{route('cms.custome.edit.aboutus',$page->id)}}"><i class="la la-edit"></i></a>
                                @endif
                                @if ($page->id == 3)
                                <a disabled="disabled" href="{{route('cms.custome.edit.contactus',$page->id)}}"> <i class="la la-edit"></i> </a>
                                @endif
                                @if ($page->id == 4)
                                <a disabled="disabled" href="{{route('cms.custome.edit.integration',$page->id)}}"> <i class="la la-edit"></i> </a>
                                @endif

                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr role="row" class="bg_ccc">
                            No data
                        </tr>
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
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.6.0/ace.js" integrity="sha512-mCwKQ3CvPxkAIwyhkfKGNMEH7mE7VAyoBq3pJIuer8G9BXEDAqnfuMHlt26sdPApAgKAXCPNkLAmMXlEVHezqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                var editor2 = ace.edit("editor2", {
                    theme: "ace/theme/tomorrow_night_blue",
                    mode: "ace/mode/html",
                    autoScrollEditorIntoView: true,
                    maxLines: 30,
                    minLines: 2

                });
                console.log(editor2.getValue());
            </script> -->
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
