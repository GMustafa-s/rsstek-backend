<!DOCTYPE html>
<html lang="en">
@php 
$site_dat = App\Models\GeneralSetting::first();
@endphp
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@if($site_dat !=null) {{$site_dat->site_title}} @else RRSTEK | Intelligent Video Analitycs @endif</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('frontend/')}}/css/style.css">
	<link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/images/fevicon/{{$site_dat->favicon}}">
</head>
<body>
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
			<div class="header-t">
                <div class="container">
                    <strong class="logo">
                        <a href="{{route('/')}}">
                            <img src="{{asset('frontend')}}/images/@if($site_dat->logo!=null){{$site_dat->logo}} @endif" alt="RRSTEK | Home Automation System">
                        </a>
                    </strong>
                    <nav id="nav">
                        <a href="#" class="open"><img src="{{asset('frontend')}}/images/menu-icon.svg" alt="image description"></a>
                        <div class="drop-down">
                            <ul class="lang">
                                <li><a class="active" href="{{route('change.language','en')}}">ENG</a></li>
                                <li><a href="{{route('change.language','nl')}}">NL</a></li>
                                <li><a href="{{route('change.language','fr')}}">FR</a></li>
                                <li><a href="{{route('change.language','es')}}">ES</a></li>
                            </ul>
                            <div class="holder">
                                <ul class="list">
                                    <li>
                                <a href="{{route('/')}}" class="title">
                                @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Home')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Home')}}
                                @endif
                                </a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{route('category.slug','category-1')}}" class="title">
                                        @if($language)
                                        {{ $tr->setSource('en')->setTarget($language)->translate('BUSINESS')}}
                                        @else
                                        {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('BUSINESS')}}
                                        @endif
                                        </a>
                                        <ul class="link">
                                            <li><a href="#" class="nav-back">Back</a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/business')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Business')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Business')}}
                                            @endif
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/health_care')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Healthcare')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Healthcare')}}
                                            @endif
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/security')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Security')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Security')}}
                                            @endif
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/work_safety')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Work Safety')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Work safety')}}
                                            @endif</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{route('/solutions')}}" class="title">
                                        @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('SOLUTIONS')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('SOLUTIONS')}}
                                        @endif
                                        </a>
                                        <ul class="link">
                                            <li><a href="#" class="nav-back">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Back')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Back')}}
                                            @endif
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/solutions')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Solutions')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Solutions')}}
                                            @endif
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/cases')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Cases')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Cases')}}
                                            @endif
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/demo')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('demo')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('demo')}}
                                            @endif
                                            </a></li>
                                        </ul>
                                    </li>
        
                                </ul>
                                <ul class="list">
                                    <li class="has-dropdown">
                                        <a href="{{route('/aboutus')}}" class="title">
                                        @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('ABOUT US')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('ABOUT US')}}
                                            @endif  
                                        </a>
                                        <ul class="link">
                                            <li><a href="#" class="nav-back">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Back')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Back')}}
                                            @endif 
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/aboutus')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('About RRSTEK')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('About RRSTEK')}}
                                            @endif 
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/contactus')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Contact Us')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Contact Us')}}
                                            @endif
                                            </a></li>
                                        </ul>
                                    </li>
        
                                    <li class="has-dropdown">
                                        <a href="#" class="title">
                                        @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('SUPPORT')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('SUPPORT')}}
                                            @endif  
                                        </a>
                                        <ul class="link">
                                            <li><a href="#" class="nav-back">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Back')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Back')}}
                                            @endif 
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/integrations')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Integrations')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Integrations')}}
                                            @endif 
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="{{route('/camera/compare')}}">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Compare Camera')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Compare Camera')}}
                                            @endif  
                                            </a></li>
                                            <!-- <li><span class="label">Text Label</span></li> -->
                                            <li><a href="#">
                                            @if($language)
                                            {{ $tr->setSource('en')->setTarget($language)->translate('Car Charger')}}
                                            @else
                                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Car Charger')}}
                                            @endif
                                            </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-holder">
                                <a href="../Solutions/demo.html" class="btn secondary">
                                @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Get Demo')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Get Demo')}}
                                @endif
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
			<div class="header-b">
				<div class="container">
					<div class="text-area">
						<div class="text viewport-holder slideDown">
							<h1>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('Smart Video')}} <br> 
                                {{ $tr->setSource('en')->setTarget($site_language)->translate(' Surveillance Solutions')}}<h1>
						</div>
						<div class="desc">
							<p class="viewport-holder slideDown delay-1">
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('  We produce all types of devices: video recorders, IP cameras, (including IR and ultrawide-field-of-view cameras) analytical and software modules.')}}</p>
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
            <source src="{{asset('frontend')}}/images/videos/video-01.mp4" type="video/mp4">
            
            @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('Your browser does not support the video tag.')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Your browser does not support the video tag.')}}
             @endif
            
        </video>
    </div>
</div>
<div id="link-holder-3col" class="link-holder">
    <div id="link-holder-container" class="container">
        <ul class="links viewport-holder slideDown">
            <li><a href="#">
            @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('What We Use')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('What We Use')}}
            @endif

            </a></li>
            <li><a href="#">
            @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('Our Product')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Our Product')}}
            @endif

            </a></li>
            <li><a href="#">
            @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('Video BroadCast')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Video BroadCast')}}
            @endif

            </a></li>
            <li><a href="/about-rrstek.html">
            @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('About Our Product')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('About Our Product')}}
            @endif      
            </a></li>
            <li><a href="#">
            @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('Choose Your Business')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Choose Your Business')}}
            @endif
            </a></li>
            <li><a href="/Solutions/demo.html">Get Demo
            @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('Get Demo')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Get Demo')}}
            @endif
            </a></li>
        </ul>
    </div>
</div>
<main id="main">
    <div class="brand-holder">
        <div class="container">
            <div class="heading-area">
                <h1 class="viewport-holder slideDown"><span>
                @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('WHAT WE USE')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('WHAT WE USE')}}
                @endif
                </span> 
                @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('We use only high-Quality brands')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('We use only high-Quality brands')}}
                @endif
            </h1>
            </div>
            <div class="brands-logo">
                <ul class="slick-slider">
                    <li class="viewport-holder slideDown delay-5"><img src="{{asset('frontend')}}/images/TRASSIR.png" alt="TRASSIR"></li>
                    <li class="viewport-holder slideDown delay-2"><img src="{{asset('frontend')}}/images/brand-logo-02.svg" alt="VIVOTEK"></li>
                    <li class="viewport-holder slideDown delay-3"><img src="{{asset('frontend')}}/images/brand-logo-03.svg" alt="HIKVISION"></li>
                    <li class="viewport-holder slideDown delay-4"><img src="{{asset('frontend')}}/images/brand-logo-04.svg" alt="ADHUSA"></li>
                    <li class="viewport-holder slideDown delay-1"><img src="{{asset('frontend')}}/images/brand-logo-01.svg" alt="AXIS"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area">
        <div class="container">
            <div class="heading-area viewport-holder slideDown delay-3">
                <h1><span>
                @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('about us')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('about us')}}
                @endif
                </span> 
                @if($language)
                {{ $tr->setSource('en')->setTarget($language)->translate('Why RRSTEK: Bring security together')}}
                @else
                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Why RRSTEK: Bring security together')}}
                @endif
            </h1>
            </div>
            <div class="holder">
                <div class="text-holder">
                    <ol class="accordion" data-accordion="close">
                        <li class="viewport-holder slideDown delay-1">
                            <a class="opener" href="#">
                            @if($language)
                            {{ $tr->setSource('en')->setTarget($language)->translate('A compartible solution customization')}}
                            @else
                            {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('A compartible solution customization')}}
                            @endif
                            </a>
                            <div class="drop">
                                <hr class="border">
                                <p>
                                    @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Support 99,9% of IP-Cameras can be connected by: Navive integration (manufature protocol) ONVIF RTSP connectivity')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Support 99,9% of IP-Cameras can be connected by: Navive integration (manufature protocol) ONVIF RTSP connectivity')}}
                                @endif
                                
                                </p>
                                <div class="img-box">
                                    <img class="img" src="{{asset('frontend')}}/images/compatible-solution.svg" alt="image description">
                                </div>
                            </div>
                        </li>
                        <li class="viewport-holder slideDown delay-2">
                            <a class="opener" href="#">
                            @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Customized')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Customized')}}
                            @endif
                            </a>
                            <div class="drop">
                                <hr class="border">
                                <p>
                                @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Addresses unique challenges by using special rules and Phyton scripts')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Addresses unique challenges by using special rules and Phyton scripts')}}
                            @endif
                                </p>
                                <div class="img-box">
                                    <img class="img" src="{{asset('frontend')}}/images/customize-phyton.png" alt="image description">
                                </div>
                            </div>
                        </li>
                        <li class="viewport-holder slideDown delay-3">
                            <a class="opener" href="#">
                            @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Project Support')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Project Support')}}
                            @endif
                            </a>
                            <div class="drop">
                                <hr class="border">
                                <p>
                                @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('RRSTEK professionals build complete solutions for your projects')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('RRSTEK professionals build complete solutions for your projects')}}
                                @endif
                                </p>
                                <div class="img-box">
                                    <img class="img" src="{{asset('frontend')}}/images/project-support.svg" alt="image description">
                                </div>
                            </div>
                        </li>
                        <li class="viewport-holder slideDown delay-4">
                            <a class="opener" href="#">
                            @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Pre-Sale Demo')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Pre-Sale Demo')}}
                                @endif
                            </a>
                            <div class="drop">
                                <hr class="border">
                                <p>
                                @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Our engineers can demonstrate system functions remotly')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Our engineers can demonstrate system functions remotly')}}
                                @endif
                                </p>
                                <div class="img-box">
                                    <img class="img" src="{{asset('frontend')}}/images/pre-sale-demo.png" alt="image description">
                                </div>
                            </div>
                        </li>
                        <li class="viewport-holder slideDown delay-5">
                            <a class="opener" href="#">
                            @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Technical Support')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Technical Support')}}
                                @endif
                            </a>
                            <div class="drop">
                                <hr class="border">
                                <p>
                                @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Agile cutomer serviceand direct response to complaints')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Agile cutomer serviceand direct response to complaints')}}
                                @endif
                                </p>
                                <div class="img-box">
                                    <img class="img" src="{{asset('frontend')}}/images/technical-support.png" alt="image description">
                                </div>
                            </div>
                        </li>
                        <li class="viewport-holder slideDown delay-6">
                            <a class="opener" href="#">
                            @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Advertising Support')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Advertising Support')}}
                                @endif 
                            </a>
                            <div class="drop">
                                <hr class="border">
                                <p>
                                @if($language)
                                    {{ $tr->setSource('en')->setTarget($language)->translate('Printed and electronic promotional materials are available to the partners')}}
                                    @else
                                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Printed and electronic promotional materials are available to the partners')}}
                                @endif 
                                </p>
                                <div class="img-box">
                                    <img class="img" src="{{asset('frontend')}}/images/Advertising Support.jpg" alt="image description">
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-holder">
        <div class="feature-area">
            <div class="container">
                <div class="heading-area viewport-holder slideDown">
                    <h1><span>
                    @if($language)
                        {{ $tr->setSource('en')->setTarget($language)->translate('Features')}}
                     @else
                       {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Features')}}
                    @endif
                    </span> 
                    @if($language)
                        {{ $tr->setSource('en')->setTarget($language)->translate('Seamless TRASSIR Network integration')}}
                     @else
                       {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Seamless TRASSIR Network integration')}}
                    @endif
                </h1>
                    <p>
                    @if($language)
                        {{ $tr->setSource('en')->setTarget($language)->translate('Easily incorporate Protect cameras into a new or existing  TRASSIR Network.')}}
                     @else
                       {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Easily incorporate Protect cameras into a new or existing  TRASSIR Network.')}}
                    @endif
                    </p>
                </div>
                <div class="product viewport-holder slideDown delay-1">
                    <img class="viewport-holder slideDown delay-2" src="{{asset('frontend')}}/images/network-integration.png" alt="image description">

                    <!-- <img class="viewport-holder slideDown delay-1" src="images/home-illustration-Background-Image.png" alt="image description">
                    <img class="image-2 viewport-holder slideDown delay-2"  src="images/home-illustration-Names-And-Arrows.png" alt="image description"> -->
                </div>
            </div>
        </div>
        <div class="business-area">
            <div class="container">
                <div class="heading-area viewport-holder slideDown">
                    <h1><span>
                    @if($language)
                        {{ $tr->setSource('en')->setTarget($language)->translate('Business')}}
                     @else
                       {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Business')}}
                    @endif
                    </span> 
                    @if($language)
                        {{ $tr->setSource('en')->setTarget($language)->translate('Choose Your Business')}}
                     @else
                       {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Choose Your Business')}}
                    @endif
                </h1>
                </div>
                <div class="holder">
                    <div class="col viewport-holder slideDown">
                        <div class="image-holder">
                            <img src="{{asset('frontend')}}/images/img-01.jpg" alt="image description">
                        </div>
                        <div class="text">
                            <h2>
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Business')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Business')}}
                            @endif
                            </h2>
                            <p>C
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('onfidence and security without constant control on your part, the stability of all processes in the company - that is what TRASSIR intelligent systems are all about.')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('onfidence and security without constant control on your part, the stability of all processes in the company - that is what TRASSIR intelligent systems are all about.')}}
                            @endif
                            </p>
                            <a href="/Business/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
                        </div>
                    </div>
                    <div class="col viewport-holder slideDown delay-1">
                        <div class="image-holder">
                            <img src="{{asset('frontend')}}/images/img-02.jpg" alt="image description">
                        </div>
                        <div class="text">
                            <h2>
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Health Care')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Health Care')}}
                            @endif
                            </h2>
                            <p>
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Protect people’s health in your area with TRASSIR Healthcare Modules!')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Protect people’s health in your area with TRASSIR Healthcare Modules!')}}
                            @endif
                            </p>
                            <a href="/health-care/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
                        </div>
                    </div>
                </div>
                <div class="holder">
                    <div class="col viewport-holder slideDown">
                        <div class="image-holder">
                            <img src="{{asset('frontend')}}/images/img-03.jpg" alt="image description">
                        </div>
                        <div class="text">
                            <h2>
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Security')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Security')}}
                            @endif
                            </h2>
                            <p>
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Intelligent modules for warehouses, sales areas and lands. Protect your business more effectively without raising the number of security guards! Neural network-based systems analyze the data from video cameras, identify dangerous situations and instantly warn on them.')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Intelligent modules for warehouses, sales areas and lands. Protect your business more effectively without raising the number of security guards! Neural network-based systems analyze the data from video cameras, identify dangerous situations and instantly warn on them.')}}
                            @endif
                            </p>
                            <a href="/security/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
                        </div>
                    </div>
                    <div class="col viewport-holder slideDown delay-1">
                        <div class="image-holder">
                            <img src="{{asset('frontend')}}/images/img-04.jpg" alt="image description">
                        </div>
                        <div class="text">
                            <h2>
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Work Safety')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Work Safety')}}
                            @endif
                            </h2>
                            <p>
                            @if($language)
                                {{ $tr->setSource('en')->setTarget($language)->translate('Labor protection systems from TRASSIR are an investment to your reputation!')}}
                                @else
                                {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Labor protection systems from TRASSIR are an investment to your reputation!')}}
                            @endif
                            </p>
                            <a href="/work-safety/index.html" class="more"><img src="{{asset('frontend')}}/images/ico-right.svg" alt="image description"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="broadcast-area">
        <div class="container">
            <div class="heading-area viewport-holder slideDown">
                <h1><span>
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('BROADCAST')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('BROADCAST')}}
                @endif
                </span> 
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Video Broadcast')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Video Broadcast')}}
                @endif
            </h1>
            </div>
            <div class="holder">
                <div class="col viewport-holder slideDown">
                    <div class="video-box">
                        <img src="{{asset('frontend')}}/images/img-01.jpg" alt="image description">
                    </div>
                    <ul class="info">
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-camera.svg" alt="image description"></i>
                            <span class="txt">Trassir TR-D4111IR1</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-temperature.svg" alt="image description"></i>
                            <span class="txt">20°C</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-location.svg" alt="image description"></i>
                            <span class="txt">Location here DSSL</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-degree.svg" alt="image description"></i>
                            <span class="txt">100°</span>
                        </li>
                    </ul>
                </div>
                <div class="col viewport-holder slideDown delay-1">
                    <div class="video-box">
                        <img src="{{asset('frontend')}}/images/img-01.jpg" alt="image description">
                    </div>
                    <ul class="info">
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-camera.svg" alt="image description"></i>
                            <span class="txt">Trassir TR-D4111IR1</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-temperature.svg" alt="image description"></i>
                            <span class="txt">20°C</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-location.svg" alt="image description"></i>
                            <span class="txt">Location here DSSL</span>
                        </li>
                        <li>
                            <i class="ico"><img src="{{asset('frontend')}}/images/ico-degree.svg" alt="image description"></i>
                            <span class="txt">100°</span>
                        </li>
                    </ul>
                </div>
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
                    @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('GET PRODUCT')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('GET PRODUCT')}}
                    @endif
                    </span>
                    @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Ready To Install?')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Ready To Install?')}}
                    @endif                

                </h2>
                    <p class="viewport-holder slideDown delay-3">
                    @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Fill your name and mobile number below so we can contact you to proceed to the next step')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Fill your name and mobile number below so we can contact you to proceed to the next step')}}
                    @endif  
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

