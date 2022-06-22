@extends('frontend.index')
@section('content')

<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate();
$language = session()->get('language');
if($language){
    $site_language = $language;
}
else{
    $site_language = $site_dat->language;

}

?>
<div id="promo-about-rrstek" class="promo product">
    <div class="frame">
      <div class="holder">
        <div class="container">
          <div class="box">
            <ul class="breadcrumbs viewport-holder slideDown">
              <li><a href="index.html">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>
              <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('About RRSTEK')}}</a></li>
            </ul>
            <div id="#text-banner-overview" class="text">
              <h1 class="viewport-holder slideDown delay-1">
                {{$tr->setSource('en')->setTarget($site_language)->translate('Security
                and Innovation
                in a single touch')}}</h1>
              <!-- <p class="viewport-holder slideDown delay-2">
                Confidence and security without constant control on your
                part, the stability of all processes in the company - that
                is what RRSTEK intelligent systems are all about.
              </p> -->
              <ul class="viewport-holder slideDown delay-3">
                <li><a href="#" class="btn sec">{{$tr->setSource('en')->setTarget($site_language)->translate('Watch Video')}}</a></li>
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
                    <h2>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('800+')}}
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-building.svg" alt="image description"></i></h2>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Global employees')}}
                    </p>
                </div>
                <div class="txt viewport-holder slideDown delay-5">
                    <h2>2002 <i class="ico"><img src="{{asset('frontend')}}/images/ico-home.svg" alt="image description"></i></h2>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Year founded')}}
                    </p>
                </div>
                <div class="txt viewport-holder slideDown delay-7">
                    <h2>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('50+')}}
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-users.svg" alt="image description"></i></h2>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Partners worldwide')}}
                    </p>
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
                <span><i>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('About Us')}}
                    </i>
                </span>
                {{$tr->setSource('en')->setTarget($site_language)->translate('Who we are')}}

              </h2>
              <p class="viewport-holder slideDown delay-3">
                {{$tr->setSource('en')->setTarget($site_language)
                ->translate('RRSTEK is a manufacturer of CCTV systems and a video surveillance software developer. All advanced solutions implemented by our company are designed in-house. Our key principle - modern security solutions should be engineered on a deep future-proof concept and wide-spread compatibility between all system components. This allows the selected elements in the TRASSIR system to work with maximum productivity in a timely and cost-effective manner. It’s the essence of TRASSIR CCTV surveillance ecosystem.')}}
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
                <h2>
                    <span><i>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('OUR WORK')}}
                    </i></span>
                    {{$tr->setSource('en')->setTarget($site_language)
                    ->translate('Since 2002, TRASSIR has been developing solutions for CCTV surveillance and security:')}}
                </h2>
            </div>
            <div class="holder">
                <div class="txt-box viewport-holder slideDown delay-3">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-pc.svg" alt="image description"></i>
                    <div class="frame">
                        <p>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('Professional CCTV')}}
                        <br>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('surveillance software')}}
                        </p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-4">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-chart.svg" alt="image description"></i>
                    <div class="frame">
                        <p>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Comprehensive')}}
                            <br>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('partnership policy')}}</p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-5">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-camera-small.svg" alt="image description"></i>
                    <div class="frame">
                        <p>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('CCTV cameras and')}}
                        <br>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('video recorders')}}
                        </p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-6">
                    <i class="ico"><img src="{{asset('frontend')}}/images/ico-vehicle.svg" alt="image description"></i>
                    <div class="frame">
                        <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Technical support')}}
                        <br> {{$tr->setSource('en')->setTarget($site_language)->translate('24/7')}}
                    </p>
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
                <span><i>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('Chief Executive Officer')}}
                </i></span>
                {{$tr->setSource('en')->setTarget($site_language)->translate('Igor Oleynik')}}
              </h2>
              <p class="viewport-holder slideDown delay-3">
                {{$tr->setSource('en')->setTarget($site_language)
                ->translate('I’ve always been fascinated by engineering design and technologies. Throughout the years I’ve pursued my inner passion as an opportunity to learn and bring my ideas to life. This became well-suited to the way that the company has had such a strong focus on the desire to drive progress. Thanks to an amazing team of experienced developers, data-obsessed experts and our network of forward-thinking partners we deliver superb results and continue to expand the international footprint of the TRASSIR brand. The mission statement of our company is to play a leading role in providing state-of-the-art security solutions, from the core to the edge.')}}

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
                <h2><span><i>
                {{$tr->setSource('en')->setTarget($site_language)->translate('ABOUT OUR PRODUCT')}}
                </i></span>
                {{$tr->setSource('en')->setTarget($site_language)->translate('The Camera Series Advantge')}}
                </h2>
            </div>
            <div class="holder">
                <div class="box viewport-holder slideDown delay-2">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon.png" alt="image description"></i>
                    </div>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Easy installation, use, and management')}}
                    </p>
                </div>
                <div class="box viewport-holder slideDown delay-3">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon-1.png" alt="image description"></i>
                    </div>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('AI video and audio analytics')}}
                    </p>
                </div>
                <div class="box viewport-holder slideDown delay-4">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon-2.png" alt="image description"></i>
                    </div>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Cloud-connected deployment')}}
                    </p>
                </div>
                <div class="box viewport-holder slideDown delay-5">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/compare-camera/Solid/Icon-3.png" alt="image description"></i>
                    </div>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('10 year warrantly')}}
                        </p>
                </div>
            </div>
        </div>
    </div>
    <section class="overview-section viewport-holder slideDown delay-1">
        <div class="container">
            <div class="holder">
                <div class="text-box viewport-holder slideDown delay-2">
                    <h3>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('19')}}
                        <i class="ico"><img src="{{asset('frontend')}}/images/ico-check.svg" alt="image description"></i>
                    </h3>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Years of experience in')}}
                         <br>
                         {{$tr->setSource('en')->setTarget($site_language)->translate('CCTV surveillance')}}
                    </p>
                </div>
                <div class="text-box viewport-holder slideDown delay-3">
                    <h3>35+ <i class="ico"><img src="{{asset('frontend')}}/images/ico-eye.svg" alt="image description"></i></h3>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Countries of Trassir')}}
                        <br>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('installations')}}
                    </p>
                </div>
                <div class="text-box viewport-holder slideDown delay-4">
                    <h3>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('5000+')}} <i class="ico"><img src="{{asset('frontend')}}/images/ico-men.svg" alt="image description"></i></h3>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Loyal customers all')}} <i class="ico"><img src="{{asset('frontend')}}/images/ico-men.svg" alt="image description"></i></h3>
                        <br>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('over the globe')}}
                    </p>
                </div>
                <div class="text-box viewport-holder slideDown delay-5">
                    <h3>{{$tr->setSource('en')->setTarget($site_language)->translate('30%')}} <i class="ico"><img src="{{asset('frontend')}}/images/ico-graph.svg" alt="image description"></i></h3>
                    <p>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Compound annual growth rate')}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="map-area">
        <div class="container">
            <div class="heading center viewport-holder slideDown delay-1">
                <h2>
                    <span><i>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('OUR Customer')}}
                    </i></span>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('Engage Customers Everywhere')}}
                </h2>
            </div>
        </div>
        <div class="img-box viewport-holder slideDown delay-2">
            <img src="{{asset('frontend')}}/images/img-world-map.png" alt="image description">
        </div>
    </div>
    @include('frontend.common.demo_booking')
</main>

@endsection
