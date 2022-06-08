@extends('frontend.layouts.app')
@section('content')
	<div id="wrapper">

		<div class="visual">
			<div class="video-holder">
				<video width="100%" height="654" loop="true" autoplay="autoplay" muted>
					<source src="{{asset('frontend')}}/images/videos/video-01.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
		<div id="link-holder-3col" class="link-holder">
			<div id="link-holder-container" class="container">
				<ul class="links viewport-holder slideDown">
					<li><a href="#">What We Use</a></li>
					<li><a href="#">Our Product</a></li>
					<li><a href="#">Video BroadCast</a></li>
					<li><a href="/about-rrstek.html">About Our Product</a></li>
					<li><a href="#">Choose Your Business</a></li>
					<li><a href="/Solutions/demo.html">Get Demo</a></li>
				</ul>
			</div>
		</div>
		<main id="main">
			<div class="brand-holder">
				<div class="container">
					<div class="heading-area">
						<h1 class="viewport-holder slideDown"><span>WHAT WE USE</span> We use only high-Quality brands</h1>
					</div>
					<div class="brands-logo">
						<ul class="slick-slider">
							<li class="viewport-holder slideDown delay-5"><img src="{{asset('frontend')}}/images/TRASSIR.png" alt="TRASSIR"></li>
							<li class="viewport-holder slideDown delay-2"><img src="{{asset('frontend')}}/images/brand-logo-02.svg" alt="VIVOTEK"></li>
							<li class="viewport-holder slideDown delay-3"><img src="{{asset('frontend')}}/images/brand-logo-03.svg" alt="HIKVISION"></li>
							<li class="viewport-holder slideDown delay-4"><img src="{{asset('frontend')}}/images/brand-logo-04.svg" alt="ADHUSA"></li>
							<li class="viewport-holder slideDown delay-1"><img src="{{asset('frontend')}}/images/brand-logo-01.svg" alt="AXIS"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="about-area">
				<div class="container">
					<div class="heading-area viewport-holder slideDown delay-3">
						<h1><span>about us</span> Why RRSTEK: Bring security together</h1>
					</div>
					<div class="holder">
						<div class="text-holder">
							<ol class="accordion" data-accordion="close">
								<li class="viewport-holder slideDown delay-1">
									<a class="opener" href="#">A compartible solution customization</a>
									<div class="drop">
										<hr class="border">
										<p>Support 99,9% of IP-Cameras can be connected by: Navive integration (manufature protocol) ONVIF RTSP connectivity</p>
										<div class="img-box">
											<img class="img" src="{{asset('frontend')}}/images/compatible-solution.svg" alt="image description">
										</div>
									</div>
								</li>
								<li class="viewport-holder slideDown delay-2">
									<a class="opener" href="#">Customized</a>
									<div class="drop">
										<hr class="border">
										<p>Addresses unique challenges by using special rules and Phyton scripts</p>
										<div class="img-box">
											<img class="img" src="{{asset('frontend')}}/images/customize-phyton.png" alt="image description">
										</div>
									</div>
								</li>
								<li class="viewport-holder slideDown delay-3">
									<a class="opener" href="#">Project Support</a>
									<div class="drop">
										<hr class="border">
										<p>RRSTEK professionals build complete solutions for your projects</p>
										<div class="img-box">
											<img class="img" src="{{asset('frontend')}}/images/project-support.svg" alt="image description">
										</div>
									</div>
								</li>
								<li class="viewport-holder slideDown delay-4">
									<a class="opener" href="#">Pre-Sale Demo</a>
									<div class="drop">
										<hr class="border">
										<p>Our engineers can demonstrate system functions remotly</p>
										<div class="img-box">
											<img class="img" src="{{asset('frontend')}}/images/pre-sale-demo.png" alt="image description">
										</div>
									</div>
								</li>
								<li class="viewport-holder slideDown delay-5">
									<a class="opener" href="#">Technical Support</a>
									<div class="drop">
										<hr class="border">
										<p>Agile cutomer serviceand direct response to complaints</p>
										<div class="img-box">
											<img class="img" src="{{asset('frontend')}}/images/technical-support.png" alt="image description">
										</div>
									</div>
								</li>
								<li class="viewport-holder slideDown delay-6">
									<a class="opener" href="#">Advertising Support</a>
									<div class="drop">
										<hr class="border">
										<p>Printed and electronic promotional materials are available to the partners</p>
										<div class="img-box">
											<img class="img" src="{{asset('frontend')}}/images/Advertising Support.jpg" alt="image description">
										</div>
									</div>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-holder">
				<div class="feature-area">
					<div class="container">
						<div class="heading-area viewport-holder slideDown">
							<h1><span>Features</span> Seamless TRASSIR Network integration</h1>
							<p>Easily incorporate Protect cameras into a new or existing  TRASSIR Network.</p>
						</div>
						<div class="product viewport-holder slideDown delay-1">
							<img class="viewport-holder slideDown delay-2" src="{{asset('frontend')}}/images/network-integration.png" alt="image description">

							<!-- <img class="viewport-holder slideDown delay-1" src="images/home-illustration-Background-Image.png" alt="image description">
							<img class="image-2 viewport-holder slideDown delay-2"  src="images/home-illustration-Names-And-Arrows.png" alt="image description"> -->
						</div>
					</div>
				</div>
				<div class="business-area">
					<div class="container">
						<div class="heading-area viewport-holder slideDown">
							<h1><span>Business</span> Choose Your Business</h1>
						</div>
						<div class="holder">
							<div class="col viewport-holder slideDown">
								<div class="image-holder">
									<img src="{{asset('frontend')}}/images/img-01.jpg" alt="image description">
								</div>
								<div class="text">
									<h2>Business</h2>
									<p>Confidence and security without constant control on your part, the stability of all processes in the company - that is what TRASSIR intelligent systems are all about.</p>
									<a href="/Business/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
								</div>
							</div>
							<div class="col viewport-holder slideDown delay-1">
								<div class="image-holder">
									<img src="{{asset('frontend')}}/images/img-02.jpg" alt="image description">
								</div>
								<div class="text">
									<h2>Health Care</h2>
									<p>Protect people’s health in your area with TRASSIR Healthcare Modules!</p>
									<a href="/health-care/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
								</div>
							</div>
						</div>
						<div class="holder">
							<div class="col viewport-holder slideDown">
								<div class="image-holder">
									<img src="{{asset('frontend')}}/images/img-03.jpg" alt="image description">
								</div>
								<div class="text">
									<h2>Security</h2>
									<p>Intelligent modules for warehouses, sales areas and lands. Protect your business more effectively without raising the number of security guards! Neural network-based systems analyze the data from video cameras, identify dangerous situations and instantly warn on them.</p>
									<a href="/security/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
								</div>
							</div>
							<div class="col viewport-holder slideDown delay-1">
								<div class="image-holder">
									<img src="{{asset('frontend')}}/images/img-04.jpg" alt="image description">
								</div>
								<div class="text">
									<h2>Work Safety</h2>
									<p>Labor protection systems from TRASSIR are an investment to your reputation!</p>
									<a href="/work-safety/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="broadcast-area">
				<div class="container">
					<div class="heading-area viewport-holder slideDown">
						<h1><span>BROADCAST</span> Video Broadcast</h1>
					</div>
					<div class="holder">
						<div class="col viewport-holder slideDown">
							<div class="video-box">
								<img src="{{asset('frontend')}}/images/img-01.jpg" alt="image description">
							</div>
							<ul class="info">
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-camera.svg" alt="image description"></i>
									<span class="txt">Trassir TR-D4111IR1</span>
								</li>
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-temperature.svg" alt="image description"></i>
									<span class="txt">20°C</span>
								</li>
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-location.svg" alt="image description"></i>
									<span class="txt">Location here DSSL</span>
								</li>
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-degree.svg" alt="image description"></i>
									<span class="txt">100°</span>
								</li>
							</ul>
						</div>
						<div class="col viewport-holder slideDown delay-1">
							<div class="video-box">
								<img src="{{asset('frontend')}}/images/img-01.jpg" alt="image description">
							</div>
							<ul class="info">
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-camera.svg" alt="image description"></i>
									<span class="txt">Trassir TR-D4111IR1</span>
								</li>
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-temperature.svg" alt="image description"></i>
									<span class="txt">20°C</span>
								</li>
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-location.svg" alt="image description"></i>
									<span class="txt">Location here DSSL</span>
								</li>
								<li>
									<i class="ico"><img src="{{asset('frontend')}}/images/ico-degree.svg" alt="image description"></i>
									<span class="txt">100°</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="subscribe-area">
				<div class="container">
					<div class="holder">
						<div class="image-holder viewport-holder slideDown delay-1">
							<img src="{{asset('frontend')}}/images/img-05.png" alt="image description">
						</div>
						<div class="form-holder">
							<h2 class="viewport-holder slideDown delay-2"><span>GET PRODUCT</span>Ready To Install?</h2>
							<p class="viewport-holder slideDown delay-3">Fill your name and mobile number below so we can contact you to proceed to the next step</p>
							<form  onsubmit="demoInstall(); reset(); return false" method="POST" class="form">
									<input class="form-control" id="name" type="text" placeholder="Your Name" name="name" required>
									<input class="form-control" id="phone" type="tel" placeholder="Your Phone" name="phone" required>
									<input class="login-btn" type="submit" value="Book Now">
								</form>
						</div>
					</div>
				</div>
			</div>
			<div class="booking-area">
				<div class="container">
					<div class="holder">
						<div class="text-box">
							<h2 class="viewport-holder slideDown"><span>GET DEMO</span> Try RRSTEK in Your Business</h2>
							<p class="viewport-holder slideDown delay-1">Learn more about how RRSTEK analytic modules work! Demo mode is an opportunity to see for yourself how the system operates, and also check the interface and test all the functions</p>
						</div>
						<div class="form-area">
							<div class="frame viewport-holder slideDown delay-2">
								<h3 class="viewport-holder slideDown delay-3">Book a Demo</h3>
								<p class="viewport-holder slideDown delay-4">Book a Demo for  your facility for demotrastion of camera operation.</p>
								<form  onsubmit="demoEmail(); reset(); return false" method="POST" class="user-form">
									<input class="form-control" id="name" type="text" placeholder="Your Name" name="name" required>
									<input class="form-control" id="email" type="email" placeholder="Your Email" name="emai" required>
									<input class="login-btn" type="submit" value="Book Now">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	</div>
@endsection
