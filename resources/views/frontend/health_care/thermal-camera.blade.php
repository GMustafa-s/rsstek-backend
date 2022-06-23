@extends('frontend.index')
@section('content')

@php
$site_dat = App\Models\GeneralSetting::first();
@endphp

<?php
    use Stichoza\GoogleTranslate\GoogleTranslate;
    $tr = new GoogleTranslate();
    $language = session()->get('language');
    if($language){
        $site_language = $language;
    }
    else{
        $site_language = $site_dat->language;

    }
?>
    <div class="promo">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                            <li><a href="{{ route('health.care') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Health Care')}}</a></li>

                            <li><a href="{{ route('thermal.camera') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Thermal Camera')}}</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">{{$tr->setSource('en')->setTarget($site_language)->translate('Thermal Camera')}}</h1>

                            <ul class="viewport-holder slideDown delay-2">
                                <li><a href="{{ route('demo') }}" class="btn"><span>
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Book a Demo')}}</span></a>
                                </li>
                                <li><a href="{{ route('/contactus') }}" class="btn add">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('How to Buy')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="align-right">
                        <div class="video-holder  viewport-holder slideDown delay-2">
                            <video width="100%" height="320" loop="true" autoplay="autoplay" muted>
                                <source src="{{asset('frontend')}}/images/videos/Masks detector.mp4" type="video/mp4">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Your browser does not support the video tag.')}}
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
                            {{$tr->setSource('en')->setTarget($site_language)->translate('OVERVIEW')}}</span>
                            <br>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Thermal Camera')}}
                        </h1>
                        <div class="text">
                            <p>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('The Thermal Camera module is intended to connect a thermal imaging camera to RRSTEK OS. It
                            displays not only video data, but also the information of changing the body temperature of a
                            person.')}}
                            </p>
                            <!-- <p>TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p> -->
                        </div>
                    </div>
                    <div class="viewport-holder slideDown delay-1">
                        <!-- <h2>How it Works</h2>
                        <div class="text">
                            <ul>
                            <li>A CCTV camera monitors the monitoring area and transmits data to the server.</li>
                            <li>The detector analyzes the flow.</li>
                            <li>The customized script measures the distance between people.</li>
                            <li>In the event of a violation, the script closes dry contacts - a notification about the need to observe security measures is heard over the speakerphone - and initiates the sending of a violation message.</li>
                            </ul>
                            <p>Social Distance Detector includes neural network modules - a people detector and a lens, an object tracker.</p>
                        </div> -->
                    </div>
                </div>
                <div class="product-box">
                    <div class="frame viewport-holder slideDown delay-1">
                        <h2>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Other Products')}}
                        </h2>
                        <ul class="accordion" data-accordion="close">
                            <li>
                                <a href="{{ route('social.distance.detector') }}">
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Social Distance Detector')}} </a>

                            </li>
                            {{-- <li>
                                <a href="{{ route('thermal.camera') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Thermal Detector')}}</a>

                            </li> --}}
                            <li>
                                <a href="{{ route('face.mask.detector') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Face Mask Detector')}}</a>

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
