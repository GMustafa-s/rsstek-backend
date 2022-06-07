@extends('frontend.index')
@section('content')
    <div class="promo">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="{{ route('/business') }}">Business</a></li>
                            <li><a href="{{ route('/queue_counter') }}">Queue Detector</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1 bann-head"><span>Queue &nbsp; </span><span>
                                    Detector</span></h1>
                            <ul class="viewport-holder slideDown delay-2">
                                <li><a href="{{ route('/demo') }}" class="btn"><span>Book a Demo</span></a></li>
                                <li><a href="{{ route('/contactus') }}" class="btn add">How to Buy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="align-right">
                        <div class="video-holder  viewport-holder slideDown delay-2">
                            <video width="100%" height="320" loop="true" autoplay="autoplay" muted>
                                <source src="{{asset('frontend')}}/images/videos/Queue detector.mp4" type="video/mp4">
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
                        <h1><span>OVERVIEW</span><br> Queue Detector</h1>
                        <div class="text">
                            <p>Queue detection module based on a neural network. Includes a reporting module and alerts on
                                exceeding the queue length. When used in conjunction with the TRASSIR ActivePOS module, it
                                allows you to enable alerts based on the number of operating cash registers. Works on the
                                Neuro Station server. Offload analytics is possible (multiple RRSTEK servers transmit images
                                to 1 server for processing).</p>

                        </div>
                    </div>
                    <div class="viewport-holder slideDown delay-1">
                        <h2>How it Works</h2>
                        <div class="text">
                            <ul>
                                <li>Monitor queue lengths;</li>
                                <li>Respond to incidents in a timely manner;</li>
                                <li>Use statistics to optimize work processes.</li>

                            </ul>
                            <p>The functionality can be expanded by connecting additional scripts.</p>
                        </div>
                    </div>
                </div>
                <div class="product-box">
                    <div class="frame viewport-holder slideDown delay-1">
                        <h2>Other Products</h2>
                        <ul class="accordion" data-accordion="close">
                            <li>
                                <a href="{{route('/active_post')}}">ActivePOS</a>

                            </li>
                            <li>
                                <a href="{{route('/workspace_detector')}}">Workspace Detector</a>

                            </li>
                            <li>
                                <a href="{{route('/staff_tracker')}}">Staff Tracker</a>

                            </li>
                            <li>
                                <a    href="{{ route('/shelf_detector') }}">Shelf Detector</a>

                            </li>
                            <li>
                                <a href="{{route('/heat_map')}}">Heat Map on Map</a>

                            </li>
                            <li>
                                <a href="{{route('/neuro_counter')}}">Neuro Counter</a>

                            </li>
                            {{-- <li>
                                <a href="{{route('/queue_counter')}}">Queue Counter</a>

                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.common.solutions_area')
        @include('frontend.common.contact_form')

    </main>

@endsection
