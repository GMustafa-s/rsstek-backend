@extends('frontend.layouts.app')
@section('content')
    <div id="promo-security" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Analitys</a></li>
                            <li><a href="{{ route('security') }}">Security</a></li>
                        </ul>
                        <div id="text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">Security</h1>
                            <p class="viewport-holder slideDown delay-2">Intelligent modules for warehouses, sales areas and
                                lands. Protect your business more effectively without raising the number of security guards!
                                Neural network-based systems analyze the data from video cameras, identify dangerous
                                situations and instantly warn on them.</p>
                            <ul class="viewport-holder slideDown delay-3">
                                <li><a href="#" class="btn sec w-spe-btn-m">Watch Video</a></li>
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
                <li><a href="#">What We Use</a></li>
                <li><a href="#">Our Product</a></li>
                <li><a href="#">Video BroadCast</a></li>
                <li><a href="#">About Our Product</a></li>
                <li><a href="../Business/">Choose Your Business</a></li>
                <li><a href="../Solutions/demo.html">Get Demo</a></li>
            </ul>
        </div>
    </div>
    <main id="main">
        <div class="article-holder">
            <div class="container">
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{asset('frontend')}}/images/security/img-01.jpg" alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>OUR PRODUCT</i></span> Auto ANPR</h2>
                        <p class="viewport-holder slideDown delay-3">An intelligent module for recognizing state
                            registration plates of cars is designed for automatic identification of license plates of
                            vehicles that come into the field of view of a video camera.</p>
                        <a class="viewport-holder slideDown delay-4 more" href="{{route('/auto_anpr')}}"><span>Read More</span></a>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{asset('frontend')}}/images/security/img-02.jpg" alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>OUR PRODUCT</i></span> Neuro Left Object
                            Detector</h2>
                        <p class="viewport-holder slideDown delay-3">Neuro Left Object Detector works on the basis of a
                            detector of objects and people - unlike the classical one, it does not depend on the background
                            and works better in difficult conditions. The detector is based on two grids and tracking.</p>
                        <a href="{{route('neuro.left.object.detector')}}" class="viewport-holder slideDown delay-4 more"><span>Read
                                More</span></a>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{asset('frontend')}}/images/security/img-03.jpg" alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>OUR PRODUCT</i></span> Pose Detector</h2>
                        <p class="viewport-holder slideDown delay-3">TRASSIR Pose Detector consists of a neural network,
                            tracking, and a script (you can add new poses to the classification). The neural network detects
                            a person and finds the position of his body parts.</p>
                        <a href="{{route('/pose_detector')}}" class="viewport-holder slideDown delay-4 more"><span>Read
                                More</span></a>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{asset('frontend')}}/images/security/img-04.jpg" alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>OUR PRODUCT</i></span> Face Recognition</h2>
                        <p class="viewport-holder slideDown delay-3">The face recognition module consists of FaceSDK to
                            compare faces and Face Search to search for faces in the database.</p>
                        <a href="{{route('/face_recognition')}}" class="viewport-holder slideDown delay-4 more"><span>Read
                                More</span></a>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{asset('frontend')}}/images/security/img-05.jpg" alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>OUR PRODUCT</i></span> Neuro Detector</h2>
                        <p class="viewport-holder slideDown delay-3">Object detector (people, people's heads, cars,
                            bicycles) based on neural networks, for use in security purposes. Allows you to accurately
                            detect objects in the frame. When a foreign object enters the specified area, the detector
                            generates an alarm. Allows to significantly reduce the number of false alarms by filtering
                            foreign objects and noise.</p>
                        <a href="{{route('neuro.detector')}}" class="viewport-holder slideDown delay-3 more"><span>Read
                                More</span></a>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{asset('frontend')}}/images/security/img-06.jpg" alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>OUR PRODUCT</i></span> Direction Detector
                        </h2>
                        <p class="viewport-holder slideDown delay-3">The module is used to ensure safety, track the movement
                            of objects - people, cars, bicycles - in a prohibited direction. When crossing a predetermined
                            line or changing the trajectory of movement, the module sends alarm notifications to the guard
                            and saves the frame for the evidentiary base.</p>
                        <a href="{{route('direction.detector')}}" class="viewport-holder slideDown delay-4 more"><span>Read
                                More</span></a>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{asset('frontend')}}/images/security/img-06.jpg" alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>OUR PRODUCT</i></span> Crowd Detector</h2>
                        <p class="viewport-holder slideDown delay-3">Overcrowding detector with customizable threshold -
                            when the allowed number of people is exceeded, the module sends a notification in real time.
                            Designed to ensure safety in indoor and outdoor areas.</p>
                        <a href="{{route('crowd.detector')}}" class="viewport-holder slideDown delay-4 more"><span>Read
                                More</span></a>
                    </div>
                </article>
            </div>
        </div>

        @include('frontend.common.our_work')

        @include('frontend.common.demo_booking')



    </main>
@endsection
