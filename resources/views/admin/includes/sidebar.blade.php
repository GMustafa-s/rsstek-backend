			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>Admin</span>
							</li>
							<li class="submenu">
								<a href="{{url('/admin-dashboard')}}"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="{{url('/admin-dashboard')}}">Admin Dashboard</a></li>
									<!-- <li><a href="employee-dashboard.html">Employee Dashboard</a></li> -->
								</ul>
							</li>
							<li class="submenu">
								<a href="{{url('/admin-dashboard')}}"><i class="la la-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="" href="{{route('users.create')}}">Add New</a></li>
									<li><a href="{{route('users.index')}}">All Users</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="{{route('roles.create')}}"><i class="la la-circle-thin"></i> <span> Roles</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="" href="{{route('roles.create')}}">Add New</a></li>
									<li><a href="{{route('roles.index')}}">All Roles</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="{{route('permissions.create')}}"><i class="la la-circle-thin"></i> <span> Permissions</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="" href="{{route('permissions.create')}}">Add New</a></li>
									<li><a href="{{route('permissions.index')}}">All Permission</a></li>
								</ul>
							</li>
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
									<li><a href="holidays.html">Pages</a></li>

								</ul>
							</li>

							<li>
								<a href="{{url('contactus/show')}}"><i class="la la-envelope"></i> <span>Mail Box</span></a>
							</li>

						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
