@extends('frontend.index')
@section('content')
      <div class="promo">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{route('/')}}">Main</a></li>
                  <li><a href="{{route('/work_safety')}}">Work Safety</a></li>
                  <li><a href="{{route('/hardhat_detector')}}">Hardhat Detector</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    Hardhat Detector
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
                  Hardhat Detector
                </h1>
                <div class="text">
                  <p>
                    Safety helmet presence detector helps to monitor safety
                    compliance. If an employee appears in the work area without
                    a protective helmet, the intelligent module sends a
                    notification in real time and saves a frame for the
                    evidentiary base.
                  </p>
                </div>
              </div>
              <div class="viewport-holder slideDown delay-1">
                <h2>Functionality</h2>
                <div class="text">
                  <ul>
                    <li>Reduction of industrial injuries,</li>
                    <li>Improving employee discipline,</li>
                    <li>Reducing the cost of paying sick leave,</li>
                    <li>Reduction of the company's reputational risks.</li>
                  </ul>
                  <p>
                    The Hardhat Detector module automates and simplifies the
                    work of operators, but its capabilities are not limitless -
                    if you cannot see whether a person is wearing a helmet while
                    watching a video, then the module will also not be able to
                    recognize it.
                  </p>
                </div>
              </div>
            </div>
            <div class="product-box">
              <div class="frame viewport-holder slideDown delay-1">
                <h2>Other Products</h2>
                <ul class="accordion" data-accordion="close">
                  {{-- <li>
                    <a href="{{route('/hardhat_detector')}}">Hardhat Detector </a>
                  </li> --}}
                  <li>
                    <a href="{{route('/wear_detector')}}">Wear Detector</a>
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
