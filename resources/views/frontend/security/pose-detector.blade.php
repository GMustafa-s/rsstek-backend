@extends('frontend.index')
@section('content')
@php
    $site_dat = App\Models\GeneralSetting::first();
@endphp
<?php
    use Stichoza\GoogleTranslate\GoogleTranslate;
    $tr = new GoogleTranslate();
    $language = session()->get('language');
    if ($language) {
        $site_language = $language;
    } else {
        $site_language = $site_dat->language;
    }
?>
		<div class="promo">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{ route('/') }}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Main') }}</a></li>

                                <li><a href="{{ route('security') }}"> {{ $tr->setSource('en')->setTarget($site_language)->translate('Security') }}</a></li>

								<li><a href="{{ route('pose.detector') }}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Pose Detector') }}</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Pose Detector') }}
                                </h1>
								<ul class="viewport-holder slideDown delay-2">
                                    <li>
                                    <a href="{{route('demo')}}" class="btn">
                                        <span>{{ $tr->setSource('en')->setTarget($site_language)->translate('Book a Demo') }}</span>
                                    </a>
                                    </li>
                                    <li><a href="{{route('/contactus')}}" class="btn add">{{ $tr->setSource('en')->setTarget($site_language)->translate('How to Buy') }}</a></li>
                                </ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
								<video width="100%" height="320" loop="true" autoplay="autoplay" muted>
									<source src="{{asset('frontend')}}/images/videos/Pose detector.mp4" type="video/mp4">
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Your browser does not support the video tag.') }}
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
							<h1>
                                <span>
                                  {{ $tr->setSource('en')->setTarget($site_language)->translate('OVERVIEW') }}</span>
                                <br/>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('Pose Detector') }}
                              </h1>
							<div class="text">
								<p>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('The neural detector detects and classifies various postures of people - to track atypical behavior (unusual posture at the ATM, falling, raised arms during an attack, etc.). TRASSIR Pose Detector consists of a neural network, tracking, and a script (you can add new poses to the classification). The neural network detects a person and finds the position of his body parts. By tracking the detected detection, the Pose Detector determines what the pose corresponds to at the moment (the average position of body parts in 2 seconds), and classifies it using a script.') }}
                                </p>
								<p>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('It is possible to customize the size of detected objects, zones where you need to define poses, sensitivity, quality and speed of recognition:') }}
                                </p>
								<p>
                                    <b> {{ $tr->setSource('en')->setTarget($site_language)->translate('Quality:') }} </b>

                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('the detector operates in two modes - simple and advanced; in advanced mode recognizes smaller poses using the high definition network and requires more powerful equipment.') }}
                                </p>
								<p>
                                    <b> {{ $tr->setSource('en')->setTarget($site_language)->translate('Recognition speed:') }} </b>

                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('6 fps, 12 fps, constantly - in each frame; the fewer frames per second, the more difficult it is for the detector to recognize the pose.') }}
                                </p>
								<p>
                                    <b> {{ $tr->setSource('en')->setTarget($site_language)->translate('Sensitivity:') }} </b>

                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('the higher this value, the more susceptible the detector is to changes in posture; a decrease in the indicator eliminates false positives.') }}</p>
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
                            <h2>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('Other Products') }}
                            </h2>
                            <ul class="accordion" data-accordion="close">

                                <li>
                                    <a href="{{route('auto.anpr')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Auto ANPR')}}</a>
                                </li>
                                <li>
                                    <a href="{{route('neuro.left.object.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Left Object Detector') }}</a>
                                </li>
                                {{-- <li>
                                    <a href="{{route('pose.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Pose Detector') }}</a>
                                </li> --}}
                                <li>
                                    <a href="{{route('face.recognition')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Face Recognition') }}</a>
                                </li>
                                <li>
                                    <a href="{{route('neuro.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector') }}</a>
                                </li>
                                <li>
                                    <a href="{{route('direction.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Direction Detector') }}</a>
                                 </li>
                                <li>
                                    <a href="{{route('crowd.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Crowd Detector') }}</a>
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
