@extends('frontend.index')
@section('content')
		<div class="promo">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{ route('/') }}">Main</a></li>
								<li><a href="{{ route('/security') }}">  Security</a></li>
								<li><a href="{{ route('/neuro_left_object_detector') }}">Neuro Left Object Detector</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">Neuro Left Object Detector</h1>
								<ul class="viewport-holder slideDown delay-2">
									<li><a href="{{ route('/demo') }}" class="btn"><span>Book a Demo</span></a></li>
									<li><a href="{{ route('/contactus') }}" class="btn add">How to Buy</a></li>
								</ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
								<video width="100%" height="320" loop="true" autoplay="autoplay" muted>
									<source src="{{asset('frontend')}}/images/videos/NLO_Archive (1).mp4" type="video/mp4">
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
							<h1><span>OVERVIEW</span><br> Neuro Left Object Detector</h1>
							<div class="text">
								<p>The module is designed to detect orphan and forgotten objects left in the field of view of the camera. The detector is used in areas where security is especially important, for example, at airports, train stations, in the "Safe City" on street cameras, etc.</p>
								<p>Neuro Left Object Detector works on the basis of a detector of objects and people - unlike the classical one, it does not depend on the background and works better in difficult conditions. The detector is based on two grids and tracking. The first network detects people and several classes of objects: suitcase, backpack, box, bag, duffle and bag. The second uses frames of objects recognized by the first network to create their unique features. Tracking is the main part of the object detector. Works on the basis of the unique features of objects. Having carried out basic heuristics over the tracks, he determines the owner of the object (by the nature of movement and proximity to the object), whether he left the frame or moved away a certain distance.</p>
							</div>
						</div>
						<div class="viewport-holder slideDown delay-1">
							<h2>Functionality</h2>
							<div class="text">
								<ul>
									<li>The quality of the network, which affects the accuracy and speed of work. The higher the quality, the better the detector works on complex scenes, but at the same time the higher the load on the server.</li>
									<li>The number of frames per second collected for the detector to operate. The more frames, the lower the number of false positives, but the higher the load on the video card.</li>
									<li>The minimum and maximum size of the object to be detected.</li>
									<!-- <li>Recognition from complex angles.</li>
									<li>No problems with the admission of cars on the territory.</li>
									<li>Flexible configuration of the recognition module.</li>
									<li>Delegation of computing on a server with a GPU from low-power DVRs.</li> -->
								</ul>
								<!-- <p>The new version of AutoRRSTEK 5 is compatible with the NeuroStation and QuattroStation series recorders. These servers use hardware graphics accelerators to achieve high efficiency when processing large video streams. Using the off-load technology, the module remotely processes video on any RRSTEK video recorders - connect them to NeuroStation servers over the network or through the cloud.</p> -->
							</div>
						</div>
					</div>
					<div class="product-box">
						<div class="frame viewport-holder slideDown delay-1">
							<h2>Other Products</h2>
							<ul class="accordion" data-accordion="close">
								<li>
                                <a href="Auto-anpr.html">Auto ANPR</a>

								</li>
								<!-- <li>
									<a    href="neuro-left-object-detector.html">Neuro Left Object Detector</a>

								</li> -->
								<li>
									<a  href="pose-detector.html">Pose Detector</a>

								</li>
								<li>
									<a    href="face-recognition.html">Face Recognition</a>

								</li>

								<li>
									<a    href="neuro-detector.html">Neuro Detector</a>

								</li>
								<li>
									<a    href="direction-detector.html">Direction Detector</a>

								</li>
								<li>
									<a    href="crowd-detector.html">Crowd Detector</a>

								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            @include('frontend.common.solutions_area')

			@include('frontend.common.contact_form')
		</main>
@endsection

