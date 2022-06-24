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

								<li><a href="{{ route('face.recognition') }}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Face Recognition') }}</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Face Recognition') }}
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
									<source src="{{asset('frontend')}}/images/videos/Face Tracker_Recognizer.mp4" type="video/mp4">
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
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('Face Recognition') }}
                            </h1>
							<div class="text">
								<p>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('The face recognition module consists of FaceSDK to compare faces and Face Search to search for faces in the database.') }}
                                </p>

								<!-- <p>Supported maintenance, generation of detailed reports, hierarchical logging of recognized autonomous groups, integration with speed measuring devices and security complexes, including access control and fire alarm equipment (barriers, barriers, barriers). In automatic mode, the module detects vehicles that are stolen or violate parking rules.</p> -->
							</div>
						</div>
						<div class="viewport-holder slideDown delay-1">
							<h2>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('Functionality') }}
                            </h2>
							<div class="text">
								<ul>
									<li>
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Human Face Detection: Find and highlight a face in the camera image. Face detection from any angle, including a profile.') }}
                                    </li>
									<li>
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Face identification and quality assessment: comparing the found face with a photo in the database and determining the degree of match.') }}
                                    </li>
									<li>
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Determination of gender and age by face.') }}
                                    </li>
									<li>
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Recognition of certain attributes of a person appearance: recognition of the color of hair, glasses, headwear, etc. and search by these parameters.') }}
                                    </li>
									<li>
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Recognition of the use of a photograph in the frame: comparison of various characteristics of a face with a static image to prevent deception.') }}
                                    </li>
									<li>
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Search in the archive by face.') }}
                                    </li>
									<li>
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Integration into ACS.') }}
                                    </li>
								</ul>
								<p>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('In the access control mode, the logic of work changes: the result is not immediately submitted for comparison with the persons in the database, but within a certain time (a specified period of optimal quality), the incoming data is checked against the existing ones and replaced with better ones - better information is used for recognition. The result does not wait for the end of the track - recording to the database and the generation of the Face Recognized event occur immediately.') }}
                                </p>
							</div>
						</div>
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
                                <li>
                                    <a href="{{route('pose.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Pose Detector') }}</a>
                                </li>
                                {{-- <li>
                                    <a href="{{route('face.recognition')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Face Recognition') }}</a>
                                </li> --}}
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
