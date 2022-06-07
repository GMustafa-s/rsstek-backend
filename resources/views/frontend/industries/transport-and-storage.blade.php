@extends('frontend.index')
@section('content')
      <div id="promo-transport" class="promo product">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{route('/')}}">Main</a></li>
                  <li><a href="{{route('/solutions')}}">Solutions</a></li>
                  <li><a href="{{route('/transport_and_storage')}}">Transport and storage</a></li>
                </ul>
                <div id="text-banner-overview" class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    Transport and storage
                  </h1>
                  <p class="viewport-holder slideDown delay-2">
                    Hundreds of employees move tens of thousands of goods every
                    hour in large warehouses. All processes have to be monitored
                    - from distributing new consignments to storage locations to
                    shipping orders to the customers. Also, employee and
                    customer access to certain areas of the warehouse must be
                    carefully managed.
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
            <li><a href="#">Constant monitoring of goods</a></li>
            <li><a href="#">Site security and occupational safety</a></li>
            <li><a href="#">Fire prevention</a></li>
          </ul>
        </div>
      </div>
      <main id="main">
        <div class="article-holder">
          <div class="container">
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Industries//transport-and-storage/Constant-Monitoring.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Constant monitoring
                  of goods
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  It is vital to track all movements of goods and monitor all
                  operations, such as distributing goods to storage locations,
                  collecting orders and shipping them to customers. At each
                  stage, the location of the goods and the person in charge of
                  moving them should be known. A device capable of tracking
                  goods can be of great help in the warehouse. Workers should be
                  able to easily distinguish between types of goods and find
                  them in the data archive.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Industries//transport-and-storage/Site-security.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Site security and
                  occupational safety
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  In case of direct damage to goods or staff errors leading to
                  material losses, the time of the incident and the person
                  responsible should be quickly established. Transport is a
                  critical infrastructure. Each vehicle that moves around the
                  warehouse should be monitored. This concerns both the
                  customers' cars and the company’s vehicles. In case of an
                  accident, it ought to be easy to establish the chain of
                  events. Employee personal protective equipment is often
                  essential to preserving their health. Manually checking
                  whether employees are wearing work clothes or helmets can be
                  quite challenging.
                </p>
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Industries//transport-and-storage/Fire-prevention.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>Regular security needs</i></span
                  >Fire prevention
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Fire safety is of utmost importance for any warehouse.
                  Business owners are responsible for ensuring that the
                  workplace meets all required fire safety standards. There are
                  many reasons why a fire may occur, and not all of them are
                  easily predictable. In the right conditions, flames and smoke
                  can spread rapidly and cause considerable damage. The fire is
                  hazardous to the building itself and staff. It is vital to set
                  up a fire protection system in the warehouse or logistics
                  center.
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
                        src="{{asset('frontend')}}/images/Industries/transport-and-storage/Neuro-detector.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="{{route('/neuro_counter')}}" class="more">Neuro Detector</a>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="slide viewport-holder slideDown delay-1">
                    <div class="frame">
                      <img
                        src="../images/Industries/Heat_map_on_map.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="#" class="more">Heat Map On Map</a>
                      </div>
                    </div>
                  </div>
                  <div class="slide viewport-holder slideDown delay-2">
                    <div class="frame">
                      <img
                        src="../images/Industries/Staff_tracker.png"
                        alt="image description"
                      />
                      <div class="txt-box">
                        <a href="#" class="more">Staff Tracker</a>
                      </div>
                    </div>
                  </div> -->
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
