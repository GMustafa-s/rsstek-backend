@extends('frontend.index')
@section('content')
      <div id="promo-healthcare" class="promo product">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{ route('/') }}">Main</a></li>
                  <li><a href="{{ route('/solutions') }}">Solutions</a></li>
                  <li><a href="{{ route('/health_care') }}">Health Care</a></li>
                </ul>
                <div id="text-banner-overview" class="text">
                  <h1 class="viewport-holder slideDown delay-1">Health Care</h1>
                  <p class=" viewport-holder slideDown delay-2">
                    The intelligent video analytics in healthcare is a new and
                    effective tool for security purposes. Intelligent video
                    analysis for hospitals is necessary to balance patient’s
                    accessibility with safeguard.
                  </p>
                  <br />
                  <p class="viewport-holder slideDown delay-2">
                    Healthcare and medical industries face more crime and
                    vulnerability than any other industry. It is essential to
                    use video surveillance along with Intelligent video
                    analytics for hospitals that can notify real-time incidents
                    and improve overall health facilities.
                  </p>

                  <ul class="viewport-holder slideDown delay-3">
                    <li><a href="{{route('/solutions')}}" class="btn sec w-spe-btn-m">Get Solutions</a></li>
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
            <li><a href="#">Improving productivity</a></li>
            <li><a href="#">Legal troubles</a></li>
            <li><a href="#">Spreading of COVID-19</a></li>
          </ul>
        </div>
      </div>
      <main id="main">
        <div class="article-holder">
          <div class="container">
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Industries/Healthcare/improvingProductivity.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Improving
                  productivity
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Any hospital should be capable to ensure staff, patients and
                  visitors that the environment is safe. The medical departments
                  have strict surrounding with zero tolerance to violence where
                  protection and freedom are paramount.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Industries/Healthcare/LegalTroubles.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Legal troubles
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Drug diversion monitoring is not only pharmacy problem , but
                  the same for the hospitals. To avoid financial losses and to
                  improve safety, there should be a system of identification for
                  medical support staff.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Industries/Healthcare/Spreading-Covid19.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>Regular security needs</i></span
                  >Spreading of COVID-19
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Keeping social distance is a necessary preventive measure
                  during pandemic or epidemic, and strengthening control is an
                  important task for hospitals. Automatically checking the face
                  masks is also of great importance.
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
                        src="{{asset('frontend')}}/images/Industries/Healthcare/Thermal-Camera.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('/thermal_camera')}}" class="more">Thermal Camera</a>
                      </div>
                    </div>
                  </div>
                  <div class="slide viewport-holder slideDown delay-1">
                    <div class="frame">
                      <img
                        src="{{ asset('frontend') }}/images/Industries/Healthcare/SocialDistance.png"
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
                        src="{{ asset('frontend') }}/images/Industries/Healthcare/FaceMaskDetector.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('/face_mask_detector')}}" class="more">Face Mask Detector</a>
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
