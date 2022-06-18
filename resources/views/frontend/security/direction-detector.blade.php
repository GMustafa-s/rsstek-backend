@extends('frontend.layous.appt')
@section('content')
      <div class="promo">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{ route('/') }}">Main</a></li>
                  <li><a href="{{ route('security') }}"> Security</a></li>
                  <li><a href="{{ route('direction.detector') }}">Direction Detector</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    Direction Detector
                  </h1>
                  <ul class="viewport-holder slideDown delay-2">
                    <li>
                      <a href="../Solutions/demo.html" class="btn"><span>Book a Demo</span></a>
                    </li>
                    <li><a href="../contact-us.html" class="btn add">How to Buy</a></li>
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
                  Direction Detector
                </h1>
                <div class="text">
                  <p>
                    The module is used to ensure safety, track the movement of
                    objects - people, cars, bicycles - in a prohibited
                    direction. When crossing a predetermined line or changing
                    the trajectory of movement, the module sends alarm
                    notifications to the guard and saves the frame for the
                    evidentiary base.
                  </p>
                </div>
              </div>
              <div class="viewport-holder slideDown delay-1">
                <h2>Functionality</h2>
                <div class="text">
                  <ul>
                    <li>
                      Works on the basis of a neural object detector, which
                      allows you to recognize objects with high accuracy.
                    </li>
                    <li>Uses an object tracking mechanism to count unique objects and analyze their movement
										</li>
                    <li>
                      The operator can mark up to 16 lines on the screen for motion analysis.
                    </li>
                    <li>Generates notifications if an object crosses the line in a prohibited direction
										</li>
                    <li>
                      It is possible to expand the basic functionality using scripts
                    </li>
                    <!-- <li>Flexible configuration of the recognition module.</li>
									<li>Delegation of computing on a server with a GPU from low-power DVRs.</li> -->
                  </ul>
                  <!-- <p>The new version of AutoRRSTEK 5 is compatible with the NeuroStation and QuattroStation series recorders. These servers use hardware graphics accelerators to achieve high efficiency when processing large video streams. Using the off-load technology, the module remotely processes video on any RRSTEK video recorders - connect them to NeuroStation servers over the network or through the cloud.</p> -->
                </div>
              </div>
            </div>
            <div class="product-box">
              <div class="frame viewport-holder slideDown delay-1">
                <h2>Other Products</h2>
                <ul class="accordion" data-accordion="close">
                  <li>
                    <a href="{{route('auto.anpr')}}">Auto Anpr</a>
                  </li>
                  <li>
                    <a href="{{route('neuro.left.object.detector')}}"
                      >Neuro Left Object Detector</a
                    >
                  </li>
                  <li>
                    <a href="{{route('pose.detector')}}">Pose Detector</a>
                  </li>
                  <li>
                    <a href="{{route('face.recognition')}}">Face Recognition</a>
                  </li>

                  <li>
                    <a href="{{route('neuro.detector')}}">Neuro Detector</a>
                  </li>
                  <li>
									<a    href="{{route('direction.detector')}}">Direction Detector</a>

								</li>
                  <li>
                    <a href="{{route('crowd.detector')}}">Crowd Detector</a>
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
