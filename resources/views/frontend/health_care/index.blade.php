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
    <div id="wrapper">

        <div id="promo-health-care" class="promo product">
            <div class="frame">
                <div class="holder">
                    <div class="container">
                        <div class="box">
                            <ul class="breadcrumbs viewport-holder slideDown">
                                <li><a href="{{ route('/') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                                <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Products')}}</a></li>

                                <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Analytics')}}</a></li>

                                <li><a href="{{route('health.care')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Health Care')}}</a></li>
                            </ul>
                            <div class="text">
                                <h1 class="viewport-holder slideDown delay-1">{{$tr->setSource('en')->setTarget($site_language)->translate('Health Care')}}</h1>

                                <p class="viewport-holder slideDown delay-2">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Protect people’s health in your area with RRSTEK Healthcare
                                    Modules!')}}
                                </p>
                                <ul class="viewport-holder slideDown delay-3">
                                    <li><a href="#" class="btn sec">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Watch Video')}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="link-holder">
            <div class="container">
                <ul class="links viewport-holder slideDown">
                    <li><a href="{{ route('face.mask.detector') }}">
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Face Mask Detector')}}
                        </a>
                    </li>
                    <li><a href="{{ route('social.distance.detector') }}">
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Social Distance Detector')}}
                        </a>
                    </li>
                    <li><a href="{{ route('thermal.camera') }}">
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Thermal Camera')}}
                        </a>
                    </li>
            </div>
        </div>
        <main id="main">
            <div class="article-holder">
                <div class="container">
                    <article class="article">
                        <div class="img-box viewport-holder slideDown delay-1">
                            <img src="{{ asset('frontend') }}/images/Health-care/Facemask_detector.png"
                                alt="image description" />
                        </div>
                        <div class="text-box">
                            <h2 class="viewport-holder slideDown delay-2">
                                <span><i>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}
                                </i></span>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Face Mask Detector')}}
                            </h2>
                            <p class="viewport-holder slideDown delay-3">
                                {{$tr->setSource('en')->setTarget($site_language)->translate('The Face Mask Detector module is designed to monitor compliance with security measures in a
                                pandemic or
                                epidemic - wearing a medical mask as a means of personal protection.')}}

                            </p>
                            <a class="viewport-holder slideDown delay-4 more" href="{{route('face.mask.detector')}}">
                                <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                            </a>
                        </div>
                    </article>
                    <article class="article">
                        <div class="img-box viewport-holder slideDown delay-1">
                            <img src="{{ asset('frontend') }}/images/Health-care/SocialDistance_Detector.png"
                                alt="image description" />
                        </div>
                        <div class="text-box">
                            <h2 class="viewport-holder slideDown delay-2">
                                <span><i>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}
                                </i></span>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Social Distance Detector')}}
                            </h2>
                            <p class="viewport-holder slideDown delay-3">
                                {{$tr->setSource('en')->setTarget($site_language)->translate(' The Social Distance Detector module is designed to monitor the observance of social distance
                                between
                                people in queues and in public places characterized by a crowd of people.')}}

                            </p>
                            <a href="{{route('social.distance.detector')}}"
                                class="viewport-holder slideDown delay-4 more">
                                <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                            </a>
                        </div>
                    </article>
                    <article class="article">
                        <div class="img-box viewport-holder slideDown delay-1">
                            <img src="{{ asset('frontend') }}/images/Health-care/Thermal_camera.png"
                                alt="image description" />
                        </div>
                        <div class="text-box">
                            <h2 class="viewport-holder slideDown delay-2">
                                <span><i>
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}
                                </i></span>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Thermal Camera')}}

                            </h2>
                            <p class="viewport-holder slideDown delay-3">
                                {{$tr->setSource('en')->setTarget($site_language)->translate(' The Thermal Camera module is intended to connect a thermal imaging camera to Trassir OS. It
                                displays not only video data, but also the information of changing the body temperature of a
                                person.')}}

                            </p>
                            <a href="{{route('thermal.camera')}}" class="viewport-holder slideDown delay-4 more">
                                <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            @include('frontend.common.our_work')
            @include('frontend.common.demo_booking')
        </main>

    </div>
@endsection
