<!DOCTYPE html>
<html lang="en">
@php
$site_dat = App\Models\GeneralSetting::first();
$home_data = App\Models\HomePage::first();
$wwu = App\Models\whatWeUseImage::get();
$aboutus_features = App\Models\AboutUsFeature::get();
$header_info = App\Models\CustomPage::find(1);
$feature_section = App\Models\HomeFeatureSection::findOrFail(1);
// $business = App\Models\HomePageBusinessSection::get();
$broadcast = App\Models\HomePageroadcastSection::get();
// $choice_us_section = App\Models\HomeChoiceUsSection::findOrFail(1);
$page_category = App\Models\PageCategory::get();


@endphp

<body>
@include('frontend.layouts.header')
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
	<div id="wrapper">
		<header id="header">

			<div class="header-b">
				<div class="container">
					<div class="text-area">
						<div class="text viewport-holder slideDown">
							<h1>

                                {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->header_heading)}}<h1>
						</div>
						<div class="desc">
							<p class="viewport-holder slideDown delay-1">
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->header_description)}}</p>
							<div class="btn-holder viewport-holder slideDown delay-2">
								<a href="/Solutions/demo.html" class="btn secondary"><span>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Get Demo')}}
                                </span></a>
								<a href="#" class="btn primary"><span>
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Video')}}
                                    </span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
@if(session()->has('success'))
  <div class="alert-success">
    <p>
      </!-- {{ session()->get('success') }} -->
    </p>
   </div>
@endif
@if(session()->has('error'))
<div class="alert-error">
  <p>
    {{ session()->get('error') }}
  </p>
 </div>
@endif
{{-- Home page slider's video --}}
<div class="visual">
    <div class="video-holder">
        <video width="100%" height="654" loop="true" autoplay="autoplay" muted>
            <source src="{{asset('frontend')}}/images/videos/{{$home_data->hero_section_video}}" type="video/mp4">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Your browser does not support the video tag.')}}
        </video>
    </div>
</div>
<div id="link-holder-3col" class="link-holder">
    <div id="link-holder-container" class="container">
        <ul class="links viewport-holder slideDown">
            <li><a href="#">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('What We Use')}}
            </a></li>
            <li><a href="#">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Our Product')}}
            </a></li>
            <li><a href="#">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Video BroadCast')}}
            </a></li>
            <li><a href="/about-rrstek.html">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('About Our Product')}}
            </a></li>
            <li><a href="#">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Choose Your Business')}}
            </a></li>
            <li><a href="/Solutions/demo.html">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Get Demo')}}
            </a></li>
        </ul>
    </div>
</div>
<main id="main">
    <div class="brand-holder">
        <div class="container">
            <div class="heading-area">
                <h1 class="viewport-holder slideDown"><span>
                {{ $tr->setSource('en')->setTarget($site_language)->translate('WHAT WE USE')}}
                </span>
                {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->what_we_use_heading)}}
            </h1>
            </div>
            <div class="brands-logo">
                <ul class="slick-slider">
                @if($wwu !=null)
                    @foreach($wwu as $img)
                    <li class="viewport-holder slideDown delay-5"><img  src="{{asset('frontend')}}/images/custompages/home/what-we-use/{{$img->image}}" alt="image"></li>
                    @endforeach
                    @endif
                    <!-- <li class="viewport-holder slideDown delay-5"><img src="{{asset('frontend')}}/images/" alt="TRASSIR"></li>
                    <li class="viewport-holder slideDown delay-2"><img src="{{asset('frontend')}}/images/brand-logo-02.svg" alt="VIVOTEK"></li>
                    <li class="viewport-holder slideDown delay-3"><img src="{{asset('frontend')}}/images/brand-logo-03.svg" alt="HIKVISION"></li>
                    <li class="viewport-holder slideDown delay-4"><img src="{{asset('frontend')}}/images/brand-logo-04.svg" alt="ADHUSA"></li>
                    <li class="viewport-holder slideDown delay-1"><img src="{{asset('frontend')}}/images/brand-logo-01.svg" alt="AXIS"></li> -->
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area">
        <div class="container">
            <div class="heading-area viewport-holder slideDown delay-3">
                <h1><span>
                {{ $tr->setSource('en')->setTarget($site_language)->translate('about us')}}
                </span>
                {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->about_us_heading)}}
            </h1>
            </div>
            <div class="holder">
                <div class="text-holder">
                    <ol class="accordion" data-accordion="close">
                        @if($aboutus_features!=null)
                        @foreach($aboutus_features as $feature)
                        <li class="viewport-holder slideDown delay-1">
                            <a class="opener" href="#">
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($feature->title)}}
                            </a>
                            <div class="drop">
                                <hr class="border">
                                <p>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($feature->description)}}
                                </p>
                                <div class="img-box">
                                    <img class="img" src="{{asset('frontend')}}/images/custompages/home/about-features/{{$feature->image}}" alt="image description">
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @endif

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-holder">
        <div class="feature-area">
            <div class="container">
                <div class="heading-area viewport-holder slideDown">
                    <h1>
                        <span>{{ $tr->setSource('en')->setTarget($site_language)->translate('Features')}}</span>
                       {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->features_heading)}}
                    </h1>
                    <p>
                       {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->features_description)}}
                    </p>
                </div>
                <div class="product viewport-holder slideDown delay-1">
                    <img class="viewport-holder slideDown delay-2" src="{{asset('frontend')}}/images/{{$home_data->features_image}}" alt="image description">

                    <!-- <img class="viewport-holder slideDown delay-1" src="images/home-illustration-Background-Image.png" alt="image description">
                    <img class="image-2 viewport-holder slideDown delay-2"  src="images/home-illustration-Names-And-Arrows.png" alt="image description"> -->
                </div>
            </div>
        </div>
        <div class="business-area">
            <div class="container">
                <div class="heading-area viewport-holder slideDown">
                    <h1><span>
                       {{ $tr->setSource('en')->setTarget($site_language)->translate('Business')}}
                    </span>
                       {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->business_heding)}}
                </h1>
                </div>
                <div class="holder">
                    @foreach($page_category as $pc)
                    <div class="col viewport-holder slideDown">
                        <div class="image-holder">
                            <img src="{{asset('frontend/images')}}/{{$pc->name}}/{{$pc->bg_image}}" alt="image description">
                        </div>
                        <div class="text">
                            <h2>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($pc->name)}}
                            </h2>
                            <p>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($pc->description)}}
                            </p>
                            <a href="{{route('category.slug', $pc->slug)}}" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <div class="broadcast-area">
        <div class="container">
            <div class="heading-area viewport-holder slideDown">
                <h1><span>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('BROADCAST')}}
                </span>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate($home_data->broadcast_heding)}}
            </h1>
            </div>
            <div class="holder">
                @foreach($broadcast as $broad)
                <div class="col viewport-holder slideDown">
                    <div class="video-box">
                        <img src="{{asset('frontend')}}/images/custompages/home/broadcast/{{$broad->image}}" alt="image description">
                    </div>
                    <ul class="info">
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-camera.svg" alt="image description"></i>
                            <span class="txt">{{$broad->cam}}</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-temperature.svg" alt="image description"></i>
                            <span class="txt">{{$broad->temperature}}</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-location.svg" alt="image description"></i>
                            <span class="txt">{{$broad->location}}</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-degree.svg" alt="image description"></i>
                            <span class="txt">{{$broad->degree}}</span>
                        </li>
                    </ul>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="subscribe-area">
        <div class="container">
            <div class="holder">
                <div class="image-holder viewport-holder slideDown delay-1">
                    <img src="{{asset('frontend')}}/images/img-05.png" alt="image description">
                </div>
                <div class="form-holder">
                    <h2 class="viewport-holder slideDown delay-2"><span>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('GET PRODUCT')}}
                    </span>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Ready To Install?')}}
                </h2>
                    <p class="viewport-holder slideDown delay-3">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Fill your name and mobile number below so we can contact you to proceed to the next step')}}
                    </p>
                    <form  action="{{route('add.intallation')}}"method="POST" onsubmit="demoInstall()"  class="form">
                        @csrf
                                <input class="form-control" id="name" type="text" placeholder="{{ $tr->setSource('en')->setTarget($site_language)->translate('Your Name')}}" name="name" required>
                                <input class="form-control" id="phone" type="tel" placeholder="{{ $tr->setSource('en')->setTarget($site_language)->translate('Your Phone')}}" name="phone" required>
                                <input class="login-btn" type="submit" value="{{ $tr->setSource('en')->setTarget($site_language)->translate('Book Now')}}">
                            </form>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.common.demo_booking')
</main>
@include('frontend.layouts.footer')
</div>



<script>
    var div_top = $('#header').offset().top;

    $(window).scroll(function() {
        var window_top = $(window).scrollTop() - 0;
        if (window_top > div_top) {
            if (!$('#header').is('.sticky')) {
                $('#header').addClass('sticky');
            }
        } else {
            $('#header').removeClass('sticky');
        }
    });
</script>
<script src="{{asset('frontend')}}/js/jquery-1.11.2.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.main.js"></script>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="{{asset('frontend')}}/js/email.js"></script>


<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25847682.js"></script>
<!-- End of HubSpot Embed Code -->

</body>
</html>

