			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Admin</span>
							</li>
							@can('dashbord')
							<li class="submenu">
								<a href="{{url('/admin-dashboard')}}"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="{{url('/admin-dashboard')}}">Admin Dashboard</a></li>
									<!-- <li><a href="employee-dashboard.html">Employee Dashboard</a></li> -->
								</ul>
							</li>
							@endcan
						
						@can('users.view')
								<li class="submenu">
									<a href="{{url('/admin-dashboard')}}"><i class="la la-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
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
							<!-- <li class="submenu">
								<a href="{{route('permissions.create')}}"><i class="la la-circle-thin"></i> <span> Permissions</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="" href="{{route('permissions.create')}}">Add New</a></li>
									<li><a href="{{route('permissions.index')}}">All Permission</a></li>
								</ul>
							</li> -->
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="chat.html">Chat</a></li>
									<li class="submenu">
										<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="voice-call.html">Voice Call</a></li>
											<li><a href="video-call.html">Video Call</a></li>
											<li><a href="outgoing-call.html">Outgoing Call</a></li>
											<li><a href="incoming-call.html">Incoming Call</a></li>
										</ul>
									</li>
									<li><a href="events.html">Calendar</a></li>
									<li><a href="contacts.html">Contacts</a></li>
									<li><a href="inbox.html">Email</a></li>
									<li><a href="file-manager.html">File Manager</a></li>
								</ul>
							</li>
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
							<li class="menu-title"> 

								<span>Queries</span>
							</li>
							<li class="submenu">
								<a href="#" class=""><i class="la la-phone"></i> <span>Contact Queries</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('contactus/show')}}">Main ContactUs </a></li>
									<li><a href="{{route('show.intallation')}}">Installation Queries</a></li>
									<li><a href="{{route('show.demo')}}">Demo Queries</a></li>
								</ul>
							</li>
							<li class="menu-title"> 

								<span>CMS</span>
							</li>
							<li class="submenu">
								<a href="#" class=""><i class="la la-desktop"></i> <span>CMS</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li>
									<li class="submenu">
								<a href="#" class=""><span>Custome Pages</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<!-- <li><a href="{{route('cms.custom.home')}}">Home</a></li>
									<li><a href="{{route('show.demo')}}">About Us</a></li>
									<li><a href="{{route('show.intallation')}}">Contact Us</a></li>
									<li><a href="{{route('show.demo')}}">Demo</a></li>
									<li><a href="{{route('show.demo')}}">Cases</a></li>
									<li><a href="{{route('show.demo')}}">Integration</a></li>
									<li><a href="{{route('show.demo')}}">Camera Compare</a></li> -->

								</ul>
							</li>
									</li>
									<li>
									<li class="submenu">
								<a href="#" class=""><span>Camera Pages</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{route('cms.camera.index')}}">Camera Pages</a></li>
									<li><a href="{{route('show.demo')}}">compare Page</a></li>
								</ul>
									</li>
									<li class="submenu">
										<a href="#" class=""><span>Solution Pages</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="{{route('cms.solution.index')}}">Main Pages</a></li>
											<li><a href="{{route('cms.solution.subpage')}}">Sub Pages</a></li>
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