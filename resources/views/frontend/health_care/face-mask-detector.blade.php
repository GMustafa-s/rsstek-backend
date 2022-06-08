@extends('frontend.layouts.app')
@section('content')
		<div class="promo">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{ route('/') }}">Main</a></li>
								<li><a href="{{ route('health.care') }}">Health Care</a></li>
								<li><a href="{{ route('face.mask.detector') }}">Face Mask Detector</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">Face Mask Detector</h1>
								<ul class="viewport-holder slideDown delay-2">
									<li><a href="{{ route('demo') }}" class="btn"><span>Book a Demo</span></a></li>
									<li><a href="{{ route('/contactus') }}" class="btn add">How to Buy</a></li>
								</ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
								<video width="100%" height="320" loop="true" autoplay="autoplay" muted>
									<source src="{{asset('frontend')}}/images/videos/Masks detector.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<main id="main">
			<div class="post-area">
				<div class="container">
					<div class="post">
						<div class="viewport-holder slideDown">
							<h1><span>OVERVIEW</span><br> Face Mask Detector</h1>
							<div class="text">
								<p>Neural network software, works only on Neuro Station series DVRs.
									The Face Mask Detector module is designed to monitor compliance with security measures in a pandemic or epidemic - wearing a medical mask as a means of personal protection.</p>
								<!-- <p>TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p> -->
							</div>
						</div>
						<div class="viewport-holder slideDown delay-1">
							<h2>How it Works</h2>
							<div class="text">
								<ul>
									<li>A CCTV camera monitors the monitoring area and transmits data to the server.</li>
									<li>The detector analyzes the stream, finds faces and determines if they have a mask.</li>
									<li>An additional script closes dry contacts, initiating a speakerphone announcement and sends a violation message.</li>

								</ul>
								<p>The functionality can be expanded by connecting additional scripts. Eliminated false positives on faces that are not visible in the frame.</p>
							</div>
						</div>
					</div>
					<div class="product-box">
                        <div class="frame viewport-holder slideDown delay-1">
                            <h2>Other Products</h2>
                            <ul class="accordion" data-accordion="close">
                                <li>
                                    <a href="{{ route('social.distance.detector') }}">Social Distance Detector</a>

                                </li>
                                <li>
                                    <a href="{{ route('thermal.camera') }}">Thermal Detector</a>

                                </li>
                                {{-- <li>
                                    <a href="{{ route('face.mask.detector') }}">Face Mask Detector</a>

                                </li> --}}
                            </ul>
                        </div>
                    </div>
				</div>
			</div>

            @include('frontend.common.solutions_area')

            @include('frontend.common.contact_form')

		</main>
@endsection

