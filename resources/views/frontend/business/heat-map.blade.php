@extends('frontend.layouts.app')
@section('content')
    <div class="promo">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="{{ route('business') }}">Business</a></li>
                            <li><a href="{{ route('heat.map') }}">Heat Map on Map</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">Heat Map on Map</h1>
                            <ul class="viewport-holder slideDown delay-2">
                                <li><a href="{{ route('demo') }}" class="btn"><span>Book a Demo</span></a></li>
                                <li><a href="{{ route('/contactus') }}" class="btn add">How to Buy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="align-right">
                        <div class="video-holder  viewport-holder slideDown delay-2">
                            <video width="100%" height="320" loop="true" autoplay="autoplay" muted>
                                <source src="{{ asset('frontend') }}/images/videos/HeatMap_1.mp4" type="video/mp4">
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
                        <h1><span>OVERVIEW</span><br>Heat Map on Map</h1>
                        <div class="text">
                            <p>Multi-camera map of the movement of people, working on the basis of a neural
                                network detector of people (superimposed on the map of the room). Three types of
                                map: static (highlighting the places where visitors stay the longest), traffic amount
                                map, traffic direction map. The module allows you to exclude employees from
                                statistics by the color of their clothes. Works on the TRASSIR Neuro Station server.
                                offload analytics is possible (multiple TRASSIR servers transfer images to 1 server for
                                processing). The cost for processing one video channel is indicated (the number of
                                channels depends on the configuration of the room)</p>
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
                                <a href="{{ route('active.post') }}">ActivePOS</a>

                            </li>
                            <li>
                                <a href="{{ route('workspace.detector') }}">Workspace Detector</a>

                            </li>
                            <li>
                                <a href="{{ route('staff.tracker') }}">Staff Tracker</a>

                            </li>
                            <li>
                                <a href="{{ route('shelf.detector') }}">Shelf Detector</a>

                            </li>
                            {{-- <li>
                                <a href="{{route('/heat.map')}}">Heat Map on Map</a>

                            </li> --}}
                            <li>
                                <a href="{{ route('neuro.counter') }}">Neuro Counter</a>

                            </li>
                            <li>
                                <a href="{{ route('queue.counter') }}">Queue Counter</a>

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
