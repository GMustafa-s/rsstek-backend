			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>
                                    @if(Auth()->user()->name == 'Admin')
                                    Admin</span>
                                    @endif
							</li>
							@can('dashbord')
							<li class="submenu">
								<a href="javascript:void(0)"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="{{route('dashboard')}}">Admin Dashboard</a></li>
									<!-- <li><a href="employee-dashboard.html">Employee Dashboard</a></li> -->
								</ul>
							</li>
							@endcan

						@can('users.view')
								<li class="submenu">
									<a href="route('dashboard')"><i class="la la-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
									<ul style="display: none;">
									@can('users.create')
										<li><a class="" href="{{route('users.create')}}">Add New</a></li>
									@endcan
										<li><a href="{{route('users.index')}}">All Users</a></li>
									</ul>
								</li>
						@endcan

						@can('roles.view')
							<li class="submenu">
								<a href="{{route('roles.create')}}"><i class="la la-circle-thin"></i> <span> Roles</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="" href="{{route('roles.create')}}">Add New</a></li>
									<li><a href="{{route('roles.index')}}">All Roles</a></li>
								</ul>
							</li>
						@endcan()
							{{-- <li class="submenu">
								<a href="{{route('permissions.create')}}"><i class="la la-circle-thin"></i> <span> Permissions</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="" href="{{route('permissions.create')}}">Add New</a></li>
									<li><a href="{{route('permissions.index')}}">All Permission</a></li>
								</ul>
							</li> --}}

                            @can('general.settings.view')
							<li class="menu-title">

								<span>Settings</span>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-globe"></i> <span>Website Settings </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('settings/general')}}">General Settings</a></li>
									<li>
								</ul>
							</li>
                            @endcan

                            @canany(['contactus.quesries.view', 'installation.quesries.view', 'demo.quesries.view'])
							<li class="menu-title">

								<span>Queries</span>
							</li>
                            @endcanany
							<li class="submenu">
                                @canany(['contactus.quesries.view', 'installation.quesries.view', 'demo.quesries.view'])
								<a href="#" class=""><i class="la la-phone"></i> <span>Contact Queries</span> <span class="menu-arrow"></span></a>
                                @endcanany
								<ul style="display: none;">
                                    @can('contactus.quesries.view')
									<li><a href="{{url('contactus/show')}}">Main ContactUs </a></li>
                                    @endcan
                                    @can('installation.quesries.view')
									<li><a href="{{route('show.intallation')}}">Installation Queries</a></li>
                                    @endcan
                                    @can('demo.quesries.view')
									<li><a href="{{route('show.demo')}}">Demo Queries</a></li>
                                    @endcan
								</ul>
							</li>
                            @canany(['cms.custome.pages.index', 'cms.camera.view', 'cms.camera.view','cms.camera.create', 'cms.camera.edit', 'cms.camera.delete', 'cms.solution.view', 'cms.solution.create', 'cms.solution.edit' ,'cms.solution.delete', 'cms.solution.sub-page.view', 'cms.solution.sub-page.create', 'cms.solution.sub-page.edit', 'cms.solution.sub-page.delete'])
							<li class="menu-title">

								<span>CMS</span>
							</li>
                            @endcanany
							<li class="submenu">
                                @canany(['cms.custome.pages.index', 'cms.camera.view', 'cms.camera.view','cms.camera.create', 'cms.camera.edit', 'cms.camera.delete', 'cms.solution.view', 'cms.solution.create', 'cms.solution.edit' ,'cms.solution.delete', 'cms.solution.sub-page.view', 'cms.solution.sub-page.create', 'cms.solution.sub-page.edit', 'cms.solution.sub-page.delete'])
								<a href="#" class=""><i class="la la-desktop"></i> <span>CMS</span> <span class="menu-arrow"></span></a>
                                @endcanany

								<ul style="display: none;">
                                    @can('cms.custome.pages.index')
									<li><a href="{{route('cms.custom.index')}}">Custom Pages</a></li>
                                    @endcan

									<li><a href="{{route('user.custome.page')}}">New Custom Pages</a></li>


									<li>
									<li class="submenu">
                                        @canany(['cms.camera.view','cms.camera.create', 'cms.camera.edit', 'cms.camera.delete'])
								        <a href="#" class=""><span>Camera Pages</span> <span class="menu-arrow"></span></a>
                                        @endcanany
                                        <ul style="display: none;">
                                            @can('cms.camera.view')
                                            <li><a href="{{route('cms.camera.index')}}">Camera Pages</a></li>
                                            @endcan
                                            @can('demo.quesries.view')
                                            <li><a href="{{route('show.demo')}}">compare Page</a></li>
                                            @endcan
                                        </ul>
									</li>
									<li class="submenu">
                                        @canany(['cms.solution.view', 'cms.solution.create', 'cms.solution.edit' ,'cms.solution.delete', 'cms.solution.sub-page.view', 'cms.solution.sub-page.create', 'cms.solution.sub-page.edit', 'cms.solution.sub-page.delete'])
										<a href="#" class=""><span>Solution Pages</span>
                                        @endcanany
                                        <span class="menu-arrow"></span></a>
										<ul style="display: none;">

                                            @canany(['cms.solution.view', 'cms.solution.create', 'cms.solution.edit' ,'cms.solution.delete'])
											<li><a href="{{route('cms.solution.index')}}">Main Pages</a></li>
                                            @endcanany

                                            @canany(['cms.solution.sub-page.view', 'cms.solution.sub-page.create', 'cms.solution.sub-page.edit', 'cms.solution.sub-page.delete'])
											<li><a href="{{route('cms.solution.subpage')}}">Sub Pages</a></li>
                                            @endcanany
										</ul>
									</li>

                                    <li class="submenu">
										<a href="javascript:void(0)" class=""><span>Industries Pages</span>
                                        <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="{{route('cms.industries.index')}}">Pages</a></li>
                                            <li><a href="{{route('cms.industries.security-section.index')}}">Industries Security Sections</a></li>
										</ul>
									</li>
									<!-- <li><a href="{{route('cms.solution.index')}}">Solution Pages</a></li> -->
								</ul>

							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
