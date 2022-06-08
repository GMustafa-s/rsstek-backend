@extends('frontend.layouts.app')
@section('content')
		<div class="promo">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{ route('/') }}">Main</a></li>
								<li><a href="{{ route('security') }}">  Security</a></li>
								<li><a href="{{ route('pose.detector') }}">Pose Detector</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">Pose Detector</h1>
								<ul class="viewport-holder slideDown delay-2">
									<li><a href="{{ route('demo') }}" class="btn"><span>Book a Demo</span></a></li>
									<li><a href="{{ route('/contactus') }}" class="btn add">How to Buy</a></li>
								</ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
								<video width="100%" height="320" loop="true" autoplay="autoplay" muted>
									<source src="{{asset('frontend')}}/images/videos/Pose detector.mp4" type="video/mp4">
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
							<h1><span>OVERVIEW</span><br> Pose Detector</h1>
							<div class="text">
								<p>The neural detector detects and classifies various postures of people - to track atypical behavior (unusual posture at the ATM, falling, raised arms during an attack, etc.). TRASSIR Pose Detector consists of a neural network, tracking, and a script (you can add new poses to the classification). The neural network detects a person and finds the position of his body parts. By tracking the detected detection, the Pose Detector determines what the pose corresponds to at the moment (the average position of body parts in 2 seconds), and classifies it using a script.</p>
								<p>It is possible to customize the size of detected objects, zones where you need to define poses, sensitivity, quality and speed of recognition:</p>
								<p> <b> Quality: </b> the detector operates in two modes - simple and advanced; in advanced mode recognizes smaller poses using the high definition network and requires more powerful equipment.</p>
								<p><b>Recognition speed:</b> 6 fps, 12 fps, constantly - in each frame; the fewer frames per second, the more difficult it is for the detector to recognize the pose.</p>
								<p><b>Sensitivity:</b> the higher this value, the more susceptible the detector is to changes in posture; a decrease in the indicator eliminates false positives.</p>
							</div>
						</div>
						<!-- <div class="viewport-holder slideDown delay-1">
							<h2>Functionality</h2>
							<div class="text">
								<ul>
									<li>High accuracy of recognition of car registration plates;</li>
									<li>Recognition of any license plates and vehicles;</li>
									<li>Recognition of registration plates of cars from different countries.</li>
									<li>Recognition from complex angles.</li>
									<li>No problems with the admission of cars on the territory.</li>
									<li>Flexible configuration of the recognition module.</li>
									<li>Delegation of computing on a server with a GPU from low-power DVRs.</li>
								</ul>
								<p>The new version of AutoRRSTEK 5 is compatible with the NeuroStation and QuattroStation series recorders. These servers use hardware graphics accelerators to achieve high efficiency when processing large video streams. Using the off-load technology, the module remotely processes video on any RRSTEK video recorders - connect them to NeuroStation servers over the network or through the cloud.</p>
							</div>
						</div> -->
					</div>
					<div class="product-box">
						<div class="frame viewport-holder slideDown delay-1">
							<h2>Other Products</h2>
							<ul class="accordion" data-accordion="close">
                                <li>
                                  <a href="{{route('auto.anpr')}}">Auto Anpr</a>
                                </li>
                                <li>
                                  <a href="{{route('neuro.left.object.detector')}}"
                                    >Neuro Left Object Detector</a
                                  >
                                </li>
                                {{-- <li>
                                  <a href="{{route('pose.detector')}}">Pose Detector</a>
                                </li> --}}
                                <li>
                                  <a href="{{route('face.recognition')}}">Face Recognition</a>
                                </li>

                                <li>
                                    <a    href="{{route('neuro.detector')}}">Neuro Detector</a>

                                </li>
                                <li>
                                  <a href="{{route('direction.detector')}}">Direction Detector</a>
                                </li>
                                <li>
                                  <a href="{{route('crowd.detector')}}">Crowd Detector</a>
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
