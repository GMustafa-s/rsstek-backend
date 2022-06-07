@extends('frontend.index')
@section('content')
    <div class="promo">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{route('/')}}">Main</a></li>
                            <li><a href="{{route('/business')}}">Business</a></li>
                            <li><a href="{{route('/shelf_detector')}}">Shelf Detector</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">Shelf Detector</h1>
                            <ul class="viewport-holder slideDown delay-2">
                                <li><a href="{{route('/demo')}}" class="btn"><span>Book a Demo</span></a></li>
                                <li><a href="{{route('/contactus')}}" class="btn add">How to Buy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="align-right">
                        <div class="video-holder  viewport-holder slideDown delay-2">
                            <video width="100%" height="320" loop="true" autoplay="autoplay" muted>
                                <source src="{{asset('frontend')}}/images/videos/Shelf detector.mp4" type="video/mp4">
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
                        <h1><span>OVERVIEW</span><br>Shelf Detector</h1>
                        <div class="text">
                            <p>The module for analyzing the fullness of the shelves is used to timely inform about empty
                                shelves with goods. In the event of voids exceeding the specified value, the module sends
                                notifications to the store employees. The module also generates reports on the status of
                                shelves at specified intervals. Thanks to reporting, the administration of the retail
                                network can determine / predict the level of demand for certain groups of goods and track
                                the performance of employees responsible for filling the shelves.</p>
                            <!-- <p>TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p> -->
                        </div>
                    </div>
                    <div class="viewport-holder slideDown delay-1">
                        <!-- <h2>How it Works</h2>
                        <div class="text">
                            <ul>
                            <li>Centralised analytics over the network from multiple servers;</li>
                            <li>Automatic detection of alarming incidents at the checkout;</li>
                            <li>Lots of interactive reports and built-in detectors of violations;</li>
                            <li>Support for most cash register systems on the market;</li>
                            <li>Ergonomic event analytics interface;</li>
                            </ul>
                            <p>Default alarming event colouring
                            The module implements a system of detectors of violations, based on many years of
                            experience and consultations with leading experts in the field of trade, as a result of which
                            ActivePOS independently monitors possible violations in the work of the cashier and, if
                            detected, immediately notifies the operator. The detectors are created in the form of plug-in
                            scripts, which allows them to be adapted to the conditions of a particular object. Data on
                            suspicious incidents and confirmation of uncleanness of employees, along with a dozen
                            unique reports, are provided to analysts and can be verified by manual event search, which in
                            total guarantees full control over the situation.</p>
                            <p>The system saves not the receipt text but the sales events, cancellations, refunds, annulment
                            etc in the database. Also there is capability of data search in any combination of facts, receipt
                            number, the cashier's name, period of time, purchase sum etc.</p>
                        </div> -->
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
                            {{-- <li>
                                <a    href="{{ route('/shelf_detector') }}">Shelf Detector</a>

                            </li> --}}
                            <li>
                                <a href="{{route('/heat_map')}}">Heat Map on Map</a>

                            </li>
                            <li>
                                <a href="{{route('/neuro_counter')}}">Neuro Counter</a>

                            </li>
                            <li>
                                <a href="{{route('/queue_counter')}}">Queue Counter</a>

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
