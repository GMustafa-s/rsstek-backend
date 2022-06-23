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
                            <li><a
                                    href="{{ route('/') }}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Main') }}</a>
                            </li>

                            <li><a href="{{ route('security') }}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Security') }}</a></li>

                            <li><a
                                    href="{{ route('auto.anpr') }}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Auto ANPR') }}</a>
                            </li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('Auto ANPR') }}
                            </h1>
                            <ul class="viewport-holder slideDown delay-2">
                                <li><a href="{{ route('demo') }}" class="btn"><span>
                                            {{ $tr->setSource('en')->setTarget($site_language)->translate('Book a Demo') }}</span></a>
                                </li>
                                <li><a href="{{ route('/contactus') }}" class="btn add">
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate('How to Buy') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="align-right">
                        <div class="video-holder  viewport-holder slideDown delay-2">
                            <video width="100%" height="320" loop="true" autoplay="autoplay" muted>
                                <source src="{{ asset('frontend') }}/images/videos/video-01.mp4" type="video/mp4">
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
                        <h1><span>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('OVERVIEW') }}</span>
                            <br>
                            {{ $tr->setSource('en')->setTarget($site_language)->translate('Auto ANPR') }}
                        </h1>
                        <div class="text">
                            <p>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('An intelligent module for recognizing state registration plates of cars is designed for automatic identification of license plates of vehicles that come into the field of view of a video camera.
                                									The automatic license plate recognition system allows you to track the passage of the vehicle of interest from the archive on screenshots and video fragments.') }}
                            </p>
                            <p>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate(' Supported maintenance, generation of detailed reports, hierarchical logging of recognized autonomous groups, integration with speed measuring devices and security complexes, including access control and fire alarm equipment (barriers, barriers, barriers). In automatic mode, the module detects vehicles that are stolen or violate parking rules.') }}
                            </p>
                        </div>
                    </div>
                    <div class="viewport-holder slideDown delay-1">
                        <h2>
                            {{ $tr->setSource('en')->setTarget($site_language)->translate('Functionality') }}</h2>
                        <div class="text">
                            <ul>
                                <li>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('High accuracy of recognition of car registration plates;') }}
                                </li>
                                <li>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Recognition of any license plates and vehicles;') }}
                                </li>
                                <li>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Recognition of registration plates of cars from different countries.') }}
                                </li>
                                <li>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Recognition from complex angles.') }}
                                </li>
                                <li>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('No problems with the admission of cars on the territory.') }}
                                </li>
                                <li>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Flexible configuration of the recognition module.') }}
                                </li>
                                <li>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Delegation of computing on a server with a GPU from low-power DVRs.') }}
                                </li>
                            </ul>
                            <p>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('The new version of Auto ANPR 5 is compatible with the NeuroStation and QuattroStation series recorders. These servers use hardware graphics accelerators to achieve high efficiency when processing large video streams. Using the off-load technology, the module remotely processes video on any RRSTEK video recorders - connect them to NeuroStation servers over the network or through the cloud.') }}
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

                            {{-- <li>
                                    <a href="{{route('auto.anpr')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Auto ANPR')}}</a>

								</li> --}}
                            <li>
                                <a
                                    href="{{route('neuro.left.object.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Left Object Detector') }}</a>


                            </li>
                            <li>
                                <a
                                    href="{{route('pose.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Pose Detector') }}</a>


                            </li>
                            <li>
                                <a
                                    href="{{route('face.recognition')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Face Recognition') }}</a>


                            </li>
                            <li>
                                <a
                                    href="{{route('neuro.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector') }}</a>


                            </li>
                            <li>
                                <a
                                    href="{{route('direction.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Direction Detector') }}</a>


                            </li>
                            <li>
                                <a
                                    href="{{route('crowd.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Crowd Detector') }}</a>


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
