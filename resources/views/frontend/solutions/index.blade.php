@extends('frontend.index')
@section('content')
      <div id="promo-solutions" class="promo product">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{route('/')}}">Main</a></li>
                  <li><a href="{{route('/solutions')}}">Solutions</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    A solution for every business
                  </h1>
                  <p class="viewport-holder slideDown delay-2">
                    Each business is different, and our company creates unique
                    solutions for each of them. Our many years of experience
                    allows us to take every detail into consideration and take
                    an individual approach to effectively solve the problems of
                    our clients.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="link-holder">
        <div class="container">
          <ul class="links viewport-holder slideDown">
            <li><a href="{{route('/transport_and_storage')}}">Transport and storage</a></li>
            <li><a href="{{route('/public_safety')}}">Public safety</a></li>
            <li><a href="{{route('/health_care')}}">Healthcare</a></li>
            <li><a href="{{route('/real_state')}}">Real estate</a></li>
            <li><a href="{{route('/retail')}}">Retail</a></li>
            <li><a href="{{route('/industrial')}}">Industrial</a></li>
          </ul>
        </div>
      </div>
      <main id="main">
        <div class="article-holder">
          <div class="container">
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Solutions/Transport-and-storage.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>SOLUTIONS BY INDUSTRY</i></span> Transport and
                  storage
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Hundreds of employees move tens of thousands of goods every
                  hour in large warehouses. All processes have to be monitored -
                  from distributing new consignments to storage locations to
                  shipping orders to the customers. Also, employee and customer
                  access to certain areas of the warehouse must be carefully
                  managed.
                </p>
                <a class="viewport-holder slideDown delay-4 more" href="/Industries/transport-and-storage.html"
                  ><span>Read More</span></a
                >
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Solutions/Real-estate.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Real estate
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Video surveillance and video analytics can optimize management
                  and maintenance of the property, help with identifying and
                  proactively responding to problems, increase predictability
                  and efficiency of the real estate.
                </p>
                <a href="/Industries/real-estate.html" class="viewport-holder slideDown delay-4 more"
                  ><span>Read More</span></a
                >
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Solutions/Public-Safety.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Public safety
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  It is important to stay safe in public places, communities,
                  neighborhoods and other municipal districts. However, it can
                  be challenging for law enforcement to control traffic and
                  monitor other public disturbances not using on-site
                  monitoring.
                </p>
                <a href="/Industries/public-safety.html" class="viewport-holder slideDown delay-4 more"
                  ><span>Read More</span></a
                >
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Solutions/Retail.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span>Retail
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Video analytics and IP camera technology firstly were adopted
                  in the retail aiming to avoid or lower the losses from
                  shoplifting and fraud. It cause retailers’ huge financial
                  losses, they can be up to 1.42% of all income. A great part of
                  these losses are associated with staff: cashiers, salespeople
                  and others.
                </p>
                <a href="/Industries/retail.html" class="viewport-holder slideDown delay-4 more"
                  ><span>Read More</span></a
                >
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Solutions/HealthCare.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Healthcare
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  The intelligent video analytics in healthcare is a new and
                  effective tool for security purposes. Intelligent video
                  analysis for hospitals is necessary to balance patient’s
                  accessibility with safeguard.
                </p>
                <p class="viewport-holder slideDown delay-3">
                  Healthcare and medical industries face more crime and
                  vulnerability than any other industry. It is essential to use
                  video surveillance along with Intelligent video analytics for
                  hospitals that can notify real-time incidents and improve
                  overall health facilities.
                </p>
                <a href="/Industries/health-care.html" class="viewport-holder slideDown delay-3 more"
                  ><span>Read More</span></a
                >
              </div>
            </article>
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/Solutions/Industrial.png"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>REGULAR SECURITY NEEDS</i></span> Industrial
                </h2>
                <p class="viewport-holder slideDown delay-3">
                  Video analytics systems are beneficial for large manufacturing
                  industries and factories. They are efficient to the entire
                  security process. The security system data can be used in a
                  better way to raise labor safety. It also helps to get an
                  emergency response with other systems, including police, fire
                  control and traffic control. Theft and damage of equipment,
                  machine and cargo are prominent all thetime in the industry.
                  To avoid it, video solutions have become a necessity to all
                  manufacturing industries.
                </p>
                <a
                  href="/Industries/industrial.html"
                  class="viewport-holder slideDown delay-4 more"
                  ><span>Read More</span></a
                >
              </div>
            </article>
          </div>
        </div>
      </main>
@endsection
