@extends('frontend.index')
@section('content')
    <div id="wrapper">

        <div id="promo-health-care" class="promo product">
            <div class="frame">
                <div class="holder">
                    <div class="container">
                        <div class="box">
                            <ul class="breadcrumbs viewport-holder slideDown">
                                <li><a href="{{ route('/') }}">Main</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Analitys</a></li>
                                <li><a href="{{ route('/health_care') }}">Healthcare</a></li>
                            </ul>
                            <div class="text">
                                <h1 class="viewport-holder slideDown delay-1">Healthcare</h1>
                                <p class="viewport-holder slideDown delay-2">
                                    Protect people’s health in your area with RRSTEK Healthcare
                                    Modules!
                                </p>
                                <ul class="viewport-holder slideDown delay-3">
                                    <li><a href="#" class="btn sec">Watch Video</a></li>
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
                    <li><a href="{{ route('/face_mask_detector') }}">Face Mask Detector</a></li>
                    <li><a href="{{ route('/social_distance_detector') }}">Social Distance Detector</a></li>
                    <li><a href="{{ route('/thermal_camera') }}">Thermal Camera</a></li>
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
                                <span><i>OUR PRODUCT</i></span> Face Mask Detector
                            </h2>
                            <p class="viewport-holder slideDown delay-3">
                                The Face Mask Detector module is designed to monitor compliance with security measures in a
                                pandemic or
                                epidemic - wearing a medical mask as a means of personal protection.
                            </p>
                            <a class="viewport-holder slideDown delay-4 more" href="face-mask-detector.html"><span>Read
                                    More</span></a>
                        </div>
                    </article>
                    <article class="article">
                        <div class="img-box viewport-holder slideDown delay-1">
                            <img src="{{ asset('frontend') }}/images/Health-care/SocialDistance_Detector.png"
                                alt="image description" />
                        </div>
                        <div class="text-box">
                            <h2 class="viewport-holder slideDown delay-2">
                                <span><i>OUR PRODUCT</i></span> Social Distance Detector
                            </h2>
                            <p class="viewport-holder slideDown delay-3">
                                The Social Distance Detector module is designed to monitor the observance of social distance
                                between
                                people in queues and in public places characterized by a crowd of people.
                            </p>
                            <a href="social-distance-detector.html"
                                class="viewport-holder slideDown delay-4 more"><span>Read
                                    More</span></a>
                        </div>
                    </article>
                    <article class="article">
                        <div class="img-box viewport-holder slideDown delay-1">
                            <img src="{{ asset('frontend') }}/images/Health-care/Thermal_camera.png"
                                alt="image description" />
                        </div>
                        <div class="text-box">
                            <h2 class="viewport-holder slideDown delay-2">
                                <span><i>OUR PRODUCT</i></span> Thermal Camera
                            </h2>
                            <p class="viewport-holder slideDown delay-3">
                                The Thermal Camera module is intended to connect a thermal imaging camera to Trassir OS. It
                                displays not only video data, but also the information of changing the body temperature of a
                                person.
                            </p>
                            <a href="thermal-camera.html" class="viewport-holder slideDown delay-4 more"><span>Read
                                    More</span></a>
                        </div>
                    </article>
                </div>
            </div>
            @include('frontend.common.our_work')
            @include('frontend.common.demo_booking')
        </main>

    </div>
@endsection
