@extends('frontend.index')
@section('content')
      <div class="promo">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{ route('/') }}">Main</a></li>
                  <li><a href="{{ route('/security') }}"> Security</a></li>
                  <li><a href="{{ route('/neuro_detector') }}">Neuro Detector</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    Neuro Detector
                  </h1>
                  <ul class="viewport-holder slideDown delay-2">
                    <li>
                      <a href="{{route('/demo')}}" class="btn"><span>Book a Demo</span></a>
                    </li>
                    <li><a href="{{route('/contactus')}}" class="btn add">How to Buy</a></li>
                  </ul>
                </div>
              </div>
              <div class="align-right">
                <div class="video-holder viewport-holder slideDown delay-2">
                  <video
                    width="100%"
                    height="320"
                    loop="true"
                    autoplay="autoplay"
                    muted
                  >
                    <source
                      src="{{asset('frontend')}}/images/videos/Face Tracker_Recognizer.mp4"
                      type="video/mp4"
                    />
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
                <h1>
                  <span>OVERVIEW</span><br />
                  Neuro Detector
                </h1>
                <div class="text">
                  <p>
                    Object detector (people, people's heads, cars, bicycles)
                    based on neural networks, for use in security purposes.
                    Allows you to accurately detect objects in the frame. When a
                    foreign object enters the specified area, the detector
                    generates an alarm. Allows to significantly reduce the
                    number of false alarms by filtering foreign objects and
                    noise. Works on the NeuroStation server. Offload analytics
                    is possible (multiple RRSTEK servers transmit images to 1
                    server for processing).
                  </p>
                </div>
              </div>
              <div class="viewport-holder slideDown delay-1">
                <h2>Functionality</h2>
                <div class="text">
                  <ul>
                    <li>Improve control of the territory</li>
                    <li>Control access to "sterile areas ”</li>
                    <li>
                      Assist security services to significantly improve
                      efficiency
                    </li>
                    <li>
                      Act in a timely manner in response to sensitive events at
                      the site
                    </li>
                    <li>Eliminate false alarms</li>
                  </ul>
                  <p>
                    Neuro Detector allows for highly accurate recognition and
                    classification of objects. The module avoids triggering on
                    other moving objects, such as trees and animals (as opposed
                    to a motion detector).
                  </p>
                </div>
              </div>
            </div>
            <div class="product-box">
              <div class="frame viewport-holder slideDown delay-1">
                <h2>Other Products</h2>
                <ul class="accordion" data-accordion="close">
                  <li>
                    <a href="Auto-anpr.html">Auto Anpr</a>
                  </li>
                  <li>
                    <a href="neuro-left-object-detector.html"
                      >Neuro Left Object Detector</a
                    >
                  </li>
                  <li>
                    <a href="pose-detector.html">Pose Detector</a>
                  </li>
                  <li>
                    <a href="face-recognition.html">Face Recognition</a>
                  </li>

                  <!-- <li>
									<a    href="neuro-detector.html">Neuro Detector</a>

								</li> -->
                  <li>
                    <a href="direction-detector.html">Direction Detector</a>
                  </li>
                  <li>
                    <a href="crowd-detector.html">Crowd Detector</a>
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
