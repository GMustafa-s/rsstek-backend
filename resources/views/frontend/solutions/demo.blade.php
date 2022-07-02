@extends('frontend.index')
@section('content')

<?php
$site_dat = App\Models\GeneralSetting::first();
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
    <div id="promo-demo" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="">Get Demo</a></li>
                        </ul>
                        <div id="#text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">Get a demo
                                of your
                                business</h1>
                            <p class="viewport-holder slideDown delay-2">Get a detailed demo of the services based on the
                                example of your business.
                            </p>
                            <!-- <ul class="viewport-holder slideDown delay-3">
          <li><a href="#" class="btn sec">Watch Video</a></li>
         </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="main">
        <div class="solutions-area demo">
            <div class="container">
                <div class="heading center viewport-holder slideDown delay-1">
                    <h2><span><i>GET DEMO</i></span>How to get demo?</h2>
                </div>
                <div class="holder">
                    <div class="text-box viewport-holder slideDown delay-3">
                        <i class="ico"><img src="{{asset('frontend')}}/images/Solutions/demo-Icon (Stroke).png"
                                alt="image description"></i>
                        <div class="frame">
                            <p>Fill the form bellow</p>
                        </div>
                    </div>
                    <div class="text-box viewport-holder slideDown delay-4">
                        <i class="ico"><img src="{{asset('frontend')}}/images/Solutions/demo-Icon (msgs).png"
                                alt="image description"></i>
                        <div class="frame">
                            <p>We will get in touch shortly<br>and discuss the time</p>
                        </div>
                    </div>
                    <div class="text-box viewport-holder slideDown delay-5">
                        <i class="ico"><img src="{{asset('frontend')}}/images/Solutions/demo-Icon (analysis).png"
                                alt="image description"></i>
                        <div class="frame">
                            <p>See how RRSTEK can<br>improve your business</p>
                        </div>
                    </div>
                    <!-- 0 -->
                </div>
            </div>
        </div>
        <div class="article-holder">
            <div class="container">
                <!--Article one image on left and text on the right-->
                <article id="image-left-aligned" class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Solutions/demo-article-Image.png"
                            alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>REGULAR SECURITY NEEDS</i></span> See how TRASSIR products work based on real cases
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            Online demonstration of capabilities: interface and operation of video analytics modules.
                            Address your questions to a manager and a technical expert and receive detailed information
                            about the devices, software and system configurations.
                        </p>
                        <a href="/cases/index.html" class="viewport-holder slideDown delay-4 more"><span>see
                                cases</span></a>
                    </div>
                </article>
            </div>
        </div>
        @include('frontend.common.contact_form')

    </main>
@endsection
