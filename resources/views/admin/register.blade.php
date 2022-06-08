@include('admin.includes.head')
<div class="account-content">
				<!-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> -->
				<div class="container">

					<!-- Account Logo -->
					<div class="account-logo">
						<a href="{{url('/')}}"><img src="{{asset('admin')}}/assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->

					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Register</h3>
							<p class="account-subtitle">Access to our dashboard</p>

							<!-- Account Form -->
							<form action="index.html" method="POST">
                                @csrf
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="text">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password">
								</div>
								<div class="form-group">
									<label>Repeat Password</label>
									<input class="form-control" type="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Register</button>
								</div>
								<div class="account-footer">
									<p>Already have an account? <a href="{{url('login')}}">Login</a></p>
								</div>
							</form>
							<!-- /Account Form -->
						</div>
					</div>
				</div>
			</div>
@include('admin.includes.footer')
