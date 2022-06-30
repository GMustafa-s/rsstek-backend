@php
$site_dat = App\Models\GeneralSetting::first();
@endphp
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
	<title>@if($site_dat !=null) {{$site_dat->site_title}} @else RRSTEK | Intelligent Video Analitycs @endif</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('frontend/')}}/css/style.css">
	<link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/images/fevicon/@if($site_dat->favicon!=null)  {{$site_dat->favicon}} @endif">
</head>
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
                        <li><a class="active" href="{{route('change.language','en')}}">ENG</a></li>
                        <li><a href="{{route('change.language','nl')}}">NL</a></li>
                        <li><a href="{{route('change.language','fr')}}">FR</a></li>
                        <li><a href="{{route('change.language','es')}}">ES</a></li>
                    </ul>
                    <div class="holder">
                        <ul class="list">
                            <li>
                        <a href="{{route('/')}}" class="title">

                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Home')}}
                        </a>
                            </li>
                            <li class="has-dropdown">
                                <a href="javascript:vod(0)" class="title">

                                {{ $tr->setSource('en')->setTarget($site_language)->translate('BUSINESS')}}
                                </a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">Back</a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('category.slug','category-1')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Business')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('health.care')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Healthcare')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('security')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Security')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('work.safety')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Work safety')}}</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="javascript:vod(0)" class="title">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('SOLUTIONS')}}
                                </a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Back')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('/solutions')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Solutions')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('/cases')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Cases')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('demo')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('demo')}}
                                    </a></li>
                                </ul>
                            </li>

                        </ul>
                        <ul class="list">
                            <li class="has-dropdown">
                                <a href="javascript:vod(0)" class="title">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('ABOUT US')}}
                                </a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Back')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('/aboutus')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('About RRSTEK')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('/contactus')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Contact Us')}}
                                    </a></li>
                                </ul>
                            </li>

                            <li class="has-dropdown">
                                <a href="javascript:vod(0)" class="title">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('SUPPORT')}}
                                </a>
                                <ul class="link">
                                    <li><a href="#" class="nav-back">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Back')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('/integrations')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Integrations')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="{{route('/camera/compare')}}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Compare Camera')}}
                                    </a></li>
                                    <!-- <li><span class="label">Text Label</span></li> -->
                                    <li><a href="#">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Car Charger')}}
                                    </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-holder">
                        <a href="../Solutions/demo.html" class="btn secondary">
                            {{ $tr->setSource('en')->setTarget($site_language)->translate('Get Demo')}}
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
