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
	<link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/images/fevicon/@if($site_dat->favicon!=null)  {{$site_dat->favicon}} @endif">
</head>

<body>

<?php 
 $url = $_SERVER['REQUEST_URI']; 
    if (!str_contains($url, '/camera/compare/')) { 
        return  session()->forget('cart');
    }
?>

<header id="header" class="sticky">
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
                        <li><a class="active" href="#">ENG</a></li>
                        <li><a href="#">NL</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a href="#">ES</a></li>
                    </ul>
                    <div class="holder">
                        <ul class="list">
                            <li>
                                <a href="{{route('/')}}" class="title">Home</a>
                            </li>
                            <li class="has-dropdown">
                                <a href="{{route('business')}}" class="title">BUSINESS</a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">Back</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('business')}}">Business</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('health.care')}}">Healthcare</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('security')}}">Security</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('work.safety')}}">Work safety</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="{{route('solutions')}}" class="title">SOLUTIONS</a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">Back</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('solutions')}}">Solutions</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('cases')}}">Cases</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('demo')}}">demo</a></li>
                                </ul>
                            </li>

                        </ul>
                        <ul class="list">
                            <li class="has-dropdown">
                                <a href="{{route('aboutus')}}" class="title">ABOUT US</a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">Back</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('aboutus')}}">About RRSTEK</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('/contactus')}}">Contact Us</a></li>
                                </ul>
                            </li>

                            <li class="has-dropdown">
                                <a href="#" class="title">SUPPORT</a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">Back</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('integrations')}}">Integrations</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('camera.compare')}}">Compare Camera</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="#">Car Charger</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-holder">
                        <a href="{{route('demo')}}" class="btn secondary">Get Demo</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="header-b">
        <div class="container">
            <div class="text-area">
                <div class="text viewport-holder slideDown">
                    <h1>Smart Video <br> Surveillance Solutions<h1>
                </div>
                <div class="desc">
                    <p class="viewport-holder slideDown delay-1">We produce all types of devices: video recorders, IP cameras, (including IR and ultrawide-field-of-view cameras) analytical and software modules.</p>
                    <div class="btn-holder viewport-holder slideDown delay-2">
                        <a href="{{route('demo')}}" class="btn secondary"><span>Get Demo</span></a>
                        <a href="#" class="btn primary"><span>Video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
