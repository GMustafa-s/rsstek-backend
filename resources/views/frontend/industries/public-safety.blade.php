@extends('frontend.layouts.app')
@section('content')
      <div id="promo-publicSafety" class="promo product">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{ route('/') }}">Main</a></li>
                  <li><a href="{{ route('solutions') }}">Solutions</a></li>
                  <li><a href="{{ route('public.safety') }}">Public safety</a></li>
                </ul>
                <div id="text-banner-overview" class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    Public safety
                  </h1>
                  <p class="viewport-holder slideDown delay-2">
                    It is important to stay safe in public places, communities,
                    neighborhoods and other municipal districts. However, it can
                    be challenging for law enforcement to control traffic and
                    monitor other public disturbances not using on-site
                    monitoring.
                  </p>
                  <ul class="viewport-holder slideDown delay-3">
                    <li><a href="{{ route('solutions') }}" class="btn sec w-spe-btn-m">Get Solutions</a></li>
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
            <li><a href="#">Lowering crime rate</a></li>
            <li><a href="#">Public transport safety</a></li>
            <li><a href="#">Improving convenience</a></li>
          </ul>
        </div>
      </div>
      <main id="main">
        <div class="article-holder">
          <div class="container">
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{ asset('frontend') }}/images/Industries/Public-safety/Lowering-crime-rate.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Lowering crime rate
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Most private businesses and households are afraid to lose or
                  damage their houses, but they cannot afford security service.
                  To guarantee public safety, the authorities need to find a
                  compromise between vigilance, security, peace-of-mind and
                  cost. They should be able to lower the crime rate of the
                  region to a minimum The best way is to prevent crime before it
                  happens. A potential criminal would refrain from the crime out
                  of the fear of being caught.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{ asset('frontend') }}/images/Industries//Public-safety/PublicTransportSafety.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Public transport
                  safety
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  The public transport system is one of the key elements of
                  modern society. Travelling by public transport ought to be one
                  of the most safe ways to travel. Security measures, from
                  deterring graffiti artists in the depot to ensuring a secure
                  ride on a bus or tram, are of great importance to
                  transportation companies. Having well-trained staff is not
                  enough to keep passengers safe. The public transport network
                  should have modern safety solutions automatically functioning
                  round the clock.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{ asset('frontend') }}/images/Industries/Public-safety/ImprovingConvenience.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>Regular security needs</i></span
                  >Improving convenience
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  It is impossible to under-evaluate the impact of sense of
                  security to everyday life. No one wants to live in an
                  uncomfortable area. A careful and protective environment
                  should be created on the routes people use every day. To bring
                  more comfort and convenience in everyday life, people should
                  be alerted from speeding or from crossing the road at a red
                  light. It is also noteworthy to monitor traffic to make
                  real-time traffic reports.
                </p>
              </div>
            </article>
          </div>
        </div>

        <div class="solution-area">
          <div class="container">
            <h2 class="viewport-holder slideDown">
              <span>OUR PRODUCT</span> <br />
              Effective RRSTEK solutions
            </h2>
            <div class="btn-holder">
              <a href="#" class="show-all"
                ><span class="active">See All</span>
                <span class="show-less">Show Less</span></a
              >
            </div>
            <div class="carousel">
              <div class="mask">
                <div class="slideset">
                  <div class="slide viewport-holder slideDown">
                    <div class="frame">
                      <img
                        src="{{asset('frontend')}}/images/Industries/Public-safety/PoseDetector.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('pose.detector')}}" class="more">Pose Detector</a>
                      </div>
                    </div>
                  </div>
                  <div class="slide viewport-holder slideDown delay-1">
                    <div class="frame">
                      <img
                        src="{{asset('frontend')}}/images/Industries/Public-safety/CrowdDetector.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('crowd.detector')}}" class="more">Crowd Detector</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pagination"></div>
            </div>
          </div>
        </div>


        @include('frontend.common.our_work')

        @include('frontend.common.demo_booking')
      </main>
@endsection
