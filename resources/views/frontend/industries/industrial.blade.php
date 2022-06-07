@extends('frontend.index')
@section('content')
      <div id="promo-industrial" class="promo product">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{ route('/') }}">Main</a></li>
                  <li><a href="{{ route('/solutions') }}">Solutions</a></li>
                  <li><a href="{{ route('/industrial') }}">Industrial</a></li>
                </ul>
                <div id="text-banner-overview" class="text">
                  <h1 class="viewport-holder slideDown delay-1">Industrial</h1>
                  <p class="viewport-holder slideDown delay-2">
                    Video analytics systems are beneficial for large
                    manufacturing industries and factories. They are efficient
                    to the entire security process. The security system data can
                    be used in a better way to raise labor safety. It also helps
                    to get an emergency response with other systems, including
                    police, fire control and traffic control. Theft and damage
                    of equipment, machine and cargo are prominent all thetime in
                    the industry. To avoid it, video solutions have become a
                    necessity to all manufacturing industries.
                  </p>
                  <ul class="viewport-holder slideDown delay-3">
                    <li><a href="{{ route('/solutions') }}" class="btn sec w-spe-btn-m">Get Solutions</a></li>
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
            <li><a href="#">Production efficiency</a></li>
            <li><a href="#">Internal factors security</a></li>
            <li><a href="#">Technical service security</a></li>
          </ul>
        </div>
      </div>
      <main id="main">
        <div class="article-holder">
          <div class="container">
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{ asset('frontend') }}/images/Industries/Industrial/ProductionEfficiency.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Production
                  efficiency
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  The work of a conveyor can help or ruin your business. Time is
                  money - if your conveyors are operating ineffectively, you are
                  cutting into your bottom line. At least, a conveyor system
                  should run constantly and should not require many downtime.
                  However, the conveyor system is also a key for increasing of
                  your business’ efficiency.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{ asset('frontend') }}/images/Industries/Industrial/InternalFactorsSecurity.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Internal factors
                  security
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Plants and manufactures usually have large property: for
                  example, an average metallurgical plant is comparable to a
                  small city, and the sewing fabric or food production factory
                  is about the size of a stadium. You have observe entry permits
                  to special areas restricted for vehicles or persons. It is
                  quite challenging to control such an area visually by
                  patrolling.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{ asset('frontend') }}/images/Industries/Industrial/TechnicalServiceSecurity.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>Regular security needs</i></span
                  >Technical service security
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Industrial processes increasingly involve the use and the
                  manufacture of highly dangerous substances. An occasional fire
                  may occur, if can cause a potential hazard to the industrial
                  plant, its staff and the people living nearby. Fires affect
                  thousands of companies every year, resulting in injury, lost
                  customer trust and building damage. Security service should
                  establish a fire prevention and readiness program to avoid
                  potential threats to your business.
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
                        src="{{ asset('frontend') }}/images/Industries/Industrial/HardHatDetector.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('/hardhat_detector')}}" class="more">Hardhat Detector</a>
                      </div>
                    </div>
                  </div>
                  <div class="slide viewport-holder slideDown delay-1">
                    <div class="frame">
                      <img
                        src="{{ asset('frontend') }}/images/Industries/Industrial/SocialDistanceDetector.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('/social_distance_detector')}}" class="more">Social Distance Detector</a>
                      </div>
                    </div>
                  </div>
                  <div class="slide viewport-holder slideDown delay-2">
                    <div class="frame">
                      <img
                        src="{{ asset('frontend') }}/images/Industries/Industrial/WorkSpaceDetector.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('/workspace_detector')}}" class="more">Workspace Detector</a>
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
