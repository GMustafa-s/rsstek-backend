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

							<li class="submenu">
								<a href="#" class=""><i class="la la-list"></i> <span>Contact Queries</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('contactus/show')}}">Main ContactUs </a></li>
									<li><a href="{{route('show.intallation')}}">Installation Queries</a></li>
									<li><a href="{{route('show.demo')}}">Demo Queries</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->