@extends('frontend.index')
@section('content')
      <div class="promo">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{route('/')}}">Main</a></li>
                  <li><a href="{{route('/work_safety')}}"> Work Safety</a></li>
                  <li><a href="{{route('/wear_detector')}}">Wear Detector</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    Wear Detector
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
                      src="{{asset('frontend')}}/images/videos/video-01.mp4"
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
                  Wear Detector
                </h1>
                <div class="text">
                  <p>
                    Determines whether an employee is wearing overalls (vest,
                    dressing gown, overalls) by color. Helps to monitor
                    compliance with safety measures: when an employee appears in
                    the work area without a uniform, it sends real-time
                    notifications.
                  </p>
                </div>
              </div>
              <div class="viewport-holder slideDown delay-1">
                <h2>Functionality</h2>
                <div class="text">
                  <ul>
                    <li>
                      Ensure compliance with safety regulations at manufacturing
                      and industrial plants;
                    </li>
                    <li>
                      Differentiate access rights to different areas by color of
                      uniform;
                    </li>
                    <li>
                      Respond in a timely manner to the appearance of
                      unauthorized persons in designated areas;
                    </li>
                    <li>Count the number of employees in a given uniform;</li>
                    <li>
                      Reduce the risk of workplace injuries and prevent
                      accidents from occurring;
                    </li>
                    <li>
                      Respond in a timely manner to violations of regulations.
                    </li>
                  </ul>
                  <p>
                    TRASSIR Wear Detector detects objects in the frame with high
                    accuracy, built on a neural network, which significantly
                    reduces the number of false positives..
                  </p>
                </div>
              </div>
            </div>
            <div class="product-box">
              <div class="frame viewport-holder slideDown delay-1">
                <h2>Other Products</h2>
                <ul class="accordion" data-accordion="close">
                  <li>
                    <a href="{{route('/hardhat_detector')}}">Hardhat Detector </a>
                  </li>
                  {{-- <li>
						<a    href="{{route('/hardhat_detector')}}">Wear Detector</a>
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
