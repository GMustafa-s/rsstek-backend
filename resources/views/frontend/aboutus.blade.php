@extends('frontend.layouts.app')
@section('content')
<div id="promo-about-rrstek" class="promo product">
    <div class="frame">
      <div class="holder">
        <div class="container">
          <div class="box">
            <ul class="breadcrumbs viewport-holder slideDown">
              <li><a href="index.html">Main</a></li>
              <li><a href="#">About RRSTEK</a></li>
            </ul>
            <div id="#text-banner-overview" class="text">
              <h1 class="viewport-holder slideDown delay-1">Security
                and Innovation
                in a single touch</h1>
              <!-- <p class="viewport-holder slideDown delay-2">
                Confidence and security without constant control on your
                part, the stability of all processes in the company - that
                is what RRSTEK intelligent systems are all about.
              </p> -->
              <ul class="viewport-holder slideDown delay-3">
                <li><a href="#" class="btn sec">Watch Video</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<main id="main">
    <div class="achievements viewport-holder slideDown delay-1">
        <div class="container">
            <div class="holder">
                <div class="txt viewport-holder slideDown delay-3">
                    <h2>800+ <i class="ico"><img src="{{asset('frontend')}}/images/ico-building.svg" alt="image description"></i></h2>
                    <p>Global employees</p>
                </div>
                <div class="txt viewport-holder slideDown delay-5">
                    <h2>2002 <i class="ico"><img src="{{asset('frontend')}}/images/ico-home.svg" alt="image description"></i></h2>
                    <p>Year founded</p>
                </div>
                <div class="txt viewport-holder slideDown delay-7">
                    <h2>50+ <i class="ico"><img src="{{asset('frontend')}}/images/ico-users.svg" alt="image description"></i></h2>
                    <p>Partners worldwide</p>
                </div>
            </div>
        </div>
    </div>
    <div class="article-holder">
        <div class="container">
          <!--Article two image on right and text on the left-->
          <article id="image-left-aligned"  class="article">
            <div  class="img-box viewport-holder slideDown delay-1">
              <img
                src="{{asset('frontend')}}/images/About-rrstek/about-us.png"
                alt="image description"
              />
            </div>
            <div class="text-box">
              <h2 class="viewport-holder slideDown delay-2">
                <span><i>About Us</i></span> Who we are
              </h2>
              <p class="viewport-holder slideDown delay-3">
                RRSTEK is a manufacturer of CCTV systems and a video surveillance software developer. All advanced solutions implemented by our company are designed in-house. Our key principle - modern security solutions should be engineered on a deep future-proof concept and wide-spread compatibility between all system components. This allows the selected elements in the TRASSIR system to work with maximum productivity in a timely and cost-effective manner. It’s the essence of TRASSIR CCTV surveillance ecosystem.
              </p>
              <!-- <a href="active-post.html" class="viewport-holder slideDown delay-4 more"
                ><span>Read More</span></a
              > -->
            </div>
          </article>
        </div>
      </div>
    <div class="solutions-area">
        <div class="container">
            <div class="heading center viewport-holder slideDown delay-1">
                <h2><span><i>OUR WORK</i></span> Since 2002, TRASSIR has been developing solutions for CCTV surveillance and security:</h2>
            </div>
            <div class="holder">
                <div class="txt-box viewport-holder slideDown delay-3">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-pc.svg" alt="image description"></i>
                    <div class="frame">
                        <p>Professional CCTV <br> surveillance software</p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-4">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-chart.svg" alt="image description"></i>
                    <div class="frame">
                        <p>Comprehensive <br> partnership policy</p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-5">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-camera-small.svg" alt="image description"></i>
                    <div class="frame">
                        <p>CCTV cameras and <br> video recorders</p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-6">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-vehicle.svg" alt="image description"></i>
                    <div class="frame">
                        <p>Technical support <br> 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article-holder">
        <div class="container">
          <!--Article two image on right and text on the left-->
          <article  class="article">
            <div  class="img-box viewport-holder slideDown delay-1">
              <img
                src="{{asset('frontend')}}/images/Image.png"
                alt="image description"
              />
            </div>
            <div class="text-box">
              <h2 class="viewport-holder slideDown delay-2">
                <span><i>Chief Executive Officer</i></span> Igor Oleynik
              </h2>
              <p class="viewport-holder slideDown delay-3">
                I’ve always been fascinated by engineering design and technologies. Throughout the years I’ve pursued my inner passion as an opportunity to learn and bring my ideas to life. This became well-suited to the way that the company has had such a strong focus on the desire to drive progress. Thanks to an amazing team of experienced developers, data-obsessed experts and our network of forward-thinking partners we deliver superb results and continue to expand the international footprint of the TRASSIR brand. The mission statement of our company is to play a leading role in providing state-of-the-art security solutions, from the core to the edge.
              </p>
              <!-- <a href="active-post.html" class="viewport-holder slideDown delay-4 more"
                ><span>Read More</span></a
              > -->
            </div>
          </article>
        </div>
      </div>
    <div class="advantages-area">
        <div class="container">
            <div class="heading center viewport-holder slideDown delay-1">
                <h2><span><i>ABOUT OUR PRODUCT</i></span> The Camera Series Advantge</h2>
            </div>
            <div class="holder">
                <div class="box viewport-holder slideDown delay-2">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon.png" alt="image description"></i>
                    </div>
                    <p>Easy installation, use, and management</p>
                </div>
                <div class="box viewport-holder slideDown delay-3">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon-1.png" alt="image description"></i>
                    </div>
                    <p>AI video and audio analytics</p>
                </div>
                <div class="box viewport-holder slideDown delay-4">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon-2.png" alt="image description"></i>
                    </div>
                    <p>Cloud-connected deployment</p>
                </div>
                <div class="box viewport-holder slideDown delay-5">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon-3.png" alt="image description"></i>
                    </div>
                    <p>10 year warrantly</p>
                </div>
            </div>
        </div>
    </div>
    <section class="overview-section viewport-holder slideDown delay-1">
        <div class="container">
            <div class="holder">
                <div class="text-box viewport-holder slideDown delay-2">
                    <h3>19 <i class="ico"><img src="{{asset('frontend')}}/images/ico-check.svg" alt="image description"></i></h3>
                    <p>Years of experience in <br> CCTV surveillance</p>
                </div>
                <div class="text-box viewport-holder slideDown delay-3">
                    <h3>35+ <i class="ico"><img src="{{asset('frontend')}}/images/ico-eye.svg" alt="image description"></i></h3>
                    <p>Countries of Trassir <br> installations</p>
                </div>
                <div class="text-box viewport-holder slideDown delay-4">
                    <h3>5000+ <i class="ico"><img src="{{asset('frontend')}}/images/ico-men.svg" alt="image description"></i></h3>
                    <p>Loyal customers all <br> over the globe</p>
                </div>
                <div class="text-box viewport-holder slideDown delay-5">
                    <h3>30% <i class="ico"><img src="{{asset('frontend')}}/images/ico-graph.svg" alt="image description"></i></h3>
                    <p>Compound annual growth rate</p>
                </div>
            </div>
        </div>
    </section>
    <div class="map-area">
        <div class="container">
            <div class="heading center viewport-holder slideDown delay-1">
                <h2><span><i>OUR Customer</i></span> Engage Customers Everywhere</h2>
            </div>
        </div>
        <div class="img-box viewport-holder slideDown delay-2">
            <img src="{{asset('frontend')}}/images/img-world-map.png" alt="image description">
        </div>
    </div>
    <div class="booking-area">
        <div class="container">
            <div class="holder">
                <div class="text-box">
                    <h2 class="viewport-holder slideDown"><span>GET DEMO</span> Try RRSTEK in Your Business</h2>
                    <p class="viewport-holder slideDown delay-1">Learn more about how RRSTEK analytic modules work! Demo mode is an opportunity to see for yourself how the system operates, and also check the interface and test all the functions</p>
                </div>
                <div class="form-area">
                    <div class="frame viewport-holder slideDown delay-2">
                        <h3 class="viewport-holder slideDown delay-3">Book a Demo</h3>
                        <p class="viewport-holder slideDown delay-4">Book a Demo for  your facility for demotrastion of camera operation.</p>
                        <form  onsubmit="demoEmail(); reset(); return false" method="POST" class="user-form">
                            <input class="form-control" id="name" type="text" placeholder="Your Name" name="name" required>
                            <input class="form-control" id="email" type="email" placeholder="Your Email" name="email" required>
                            <input class="login-btn" type="submit" value="Book Now" class="viewport-holder slideDown delay-7">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
