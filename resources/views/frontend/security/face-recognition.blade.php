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
								<li><a href="{{ route('/face_recognition') }}">Face Recognition</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">Face Recognition</h1>
								<ul class="viewport-holder slideDown delay-2">
									<li><a href="{{route('/demo')}}" class="btn"><span>Book a Demo</span></a></li>
									<li><a href="{{route('/contactus')}}" class="btn add">How to Buy</a></li>
								</ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
								<video width="100%" height="320" loop="true" autoplay="autoplay" muted>
									<source src="{{asset('frontend')}}/images/videos/Face Tracker_Recognizer.mp4" type="video/mp4">
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
							<h1><span>OVERVIEW</span><br> Face Recognition</h1>
							<div class="text">
								<p>The face recognition module consists of FaceSDK to compare faces and Face Search to search for faces in the database.</p>
								<!-- <p>Supported maintenance, generation of detailed reports, hierarchical logging of recognized autonomous groups, integration with speed measuring devices and security complexes, including access control and fire alarm equipment (barriers, barriers, barriers). In automatic mode, the module detects vehicles that are stolen or violate parking rules.</p> -->
							</div>
						</div>
						<div class="viewport-holder slideDown delay-1">
							<h2>Functionality</h2>
							<div class="text">
								<ul>
									<li>Human Face Detection: Find and highlight a face in the camera image. Face detection from any angle, including a profile.</li>
									<li>Face identification and quality assessment: comparing the found face with a photo in the database and determining the degree of match.</li>
									<li>Determination of gender and age by face.</li>
									<li>Recognition of certain attributes of a person's appearance: recognition of the color of hair, glasses, headwear, etc. and search by these parameters.</li>
									<li>Recognition of the use of a photograph in the frame: comparison of various characteristics of a face with a static image to prevent deception.</li>
									<li>Search in the archive by face.</li>
									<li>Integration into ACS.</li>
								</ul>
								<p>In the access control mode, the logic of work changes: the result is not immediately submitted for comparison with the persons in the database, but within a certain time (a specified period of optimal quality), the incoming data is checked against the existing ones and replaced with better ones - better information is used for recognition. The result does not wait for the end of the track - recording to the database and the generation of the Face Recognized event occur immediately.</p>
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
								<li>
									<a    href="neuro-left-object-detector.html">Neuro Left Object Detector</a>

								</li>
								<li>
									<a  href="pose-detector.html">Pose Detector</a>

								</li>
								<!-- <li>
									<a    href="face-recognition.html">Face Recognition</a>

								</li> -->

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
