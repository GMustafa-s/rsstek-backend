@extends('frontend.layouts.app')
@section('content')
      <div class="promo">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{ route('/') }}">Main</a></li>
                  <li><a href="{{ route('security') }}"> Security</a></li>
                  <li><a href="{{ route('crowd.detector') }}">Crowd Detector</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    Crowd Detector
                  </h1>
                  <ul class="viewport-holder slideDown delay-2">
                    <li>
                      <a href="{{route('demo')}}" class="btn"><span>Book a Demo</span></a>
                    </li>
                    <li><a href="{{route('contactus')}}" class="btn add">How to Buy</a></li>
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
                  Crowd Detector
                </h1>
                <div class="text">
                  <p>
                    Overcrowding detector with customizable threshold - when the
                    allowed number of people is exceeded, the module sends a
                    notification in real time. Designed to ensure safety in
                    indoor and outdoor areas.
                  </p>
                  <p>
                    The detector is built on the basis of neural technology,
                    which reduces the number of false positives.
                  </p>
                  <p>
                    Crowd Detector works with NeuroStation series servers.
                    Supports Offload analytics - processes streams from other
                    RRSTEK DVRs.
                  </p>
                </div>
              </div>
              <!-- <div class="viewport-holder slideDown delay-1">
                <h2>Functionality</h2>
                <div class="text">
                  <ul>
                    <li>
                      High accuracy of recognition of car registration plates;
                    </li>
                    <li>Recognition of any license plates and vehicles;</li>
                    <li>
                      Recognition of registration plates of cars from different
                      countries.
                    </li>
                    <li>Recognition from complex angles.</li>
                    <li>
                      No problems with the admission of cars on the territory.
                    </li>
                    <li>Flexible configuration of the recognition module.</li>
                    <li>
                      Delegation of computing on a server with a GPU from
                      low-power DVRs.
                    </li>
                  </ul>
                  <p>
                    The new version of AutoRRSTEK 5 is compatible with the
                    NeuroStation and QuattroStation series recorders. These
                    servers use hardware graphics accelerators to achieve high
                    efficiency when processing large video streams. Using the
                    off-load technology, the module remotely processes video on
                    any RRSTEK video recorders - connect them to NeuroStation
                    servers over the network or through the cloud.
                  </p>
                </div>
              </div> -->
            </div>
            <div class="product-box">
              <div class="frame viewport-holder slideDown delay-1">
                <h2>Other Products</h2>
                <ul class="accordion" data-accordion="close">
                  <li>
                    <a href="{{route('auto.anpr')}}">Auto Anpr</a>
                  </li>
                  <li>
                    <a href="{{route('neuro.left.object.detector')}}">Neuro Left Object Detector</a>
                  </li>
                  <li>
                    <a href="{{route('pose.detector')}}">Pose Detector</a>
                  </li>
                  {{-- <li>
                    <a href="{{route('face.recognition')}}">Face Recognition</a>
                  </li> --}}

                  <li>
                    <a href="{{route('neuro.detector')}}">Neuro Detector</a>
                  </li>
                  <li>
                    <a href="{{route('direction.detector')}}">Direction Detector</a>
                  </li>
                  {{-- <li>
									<a    href="{{route('crowd.detector')}}">Crowd Detector</a>

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
