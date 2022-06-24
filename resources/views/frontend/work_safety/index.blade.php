@extends('frontend.index')
@section('content')
@php
    $site_dat = App\Models\GeneralSetting::first();
@endphp
<?php
    use Stichoza\GoogleTranslate\GoogleTranslate;
    $tr = new GoogleTranslate();
    $language = session()->get('language');
    if ($language) {
        $site_language = $language;
    } else {
        $site_language = $site_dat->language;
    }
?>
		<div id="promo-health-care" class="promo product">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{ route('/') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                                <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Products')}}</a></li>

                                <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Analytics')}}</a></li>

								<li><a href="{{route('work.safety')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Work Safety')}}</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Work Safety')}}
                                </h1>
								<p class="viewport-holder slideDown delay-2">
									{{$tr->setSource('en')->setTarget($site_language)->translate('Labor protection systems from TRASSIR are an investment to your reputation!')}}

								</p>
								<ul class="viewport-holder slideDown delay-3">
									<li>
                                        <a href="#" class="btn sec">{{$tr->setSource('en')->setTarget($site_language)->translate('Watch Video')}}</a>
                                    </li>
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
					<li>
                        <a href="{{route('hardhat.detector')}}">
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Hardhat Detector')}}</a>
                    </li>
					<li>
                        <a href="{{route('wear.detector')}}">
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Wear Detector')}}</a>
                    </li>
			</div>
		</div>
		<main id="main">
			<div class="article-holder">
				<div class="container">
					<article class="article">
						<div class="img-box viewport-holder slideDown delay-1">
							<img src="{{asset('frontend')}}/images/work-safety/wear-detector-Image.png" alt="image description" />
						</div>
						<div class="text-box">
							<h2 class="viewport-holder slideDown delay-2">
								<span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}</i></span>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Wear Detector')}}
							</h2>
							<p class="viewport-holder slideDown delay-3">
								{{$tr->setSource('en')->setTarget($site_language)->translate('Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.')}}
							</p>
							<a class="viewport-holder slideDown delay-4 more" href="{{route('wear.detector')}}">
                                <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                            </a>
						</div>
					</article>
					<article class="article">
						<div class="img-box viewport-holder slideDown delay-1">
							<img src="{{asset('frontend')}}/images/work-safety/hardhat-detector-Image.png" alt="image description" />
						</div>
						<div class="text-box">
							<h2 class="viewport-holder slideDown delay-2">
								<span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}</i></span>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Hardhat Detector')}}
							</h2>
							<p class="viewport-holder slideDown delay-3">

                                {{$tr->setSource('en')->setTarget($site_language)->translate('Safety helmet presence detector helps to monitor safety compliance. If an employee appears in the work area without a protective helmet, the intelligent module sends a notification in real time and saves a frame for the evidentiary base.')}}
							</p>
							<a href="{{route('hardhat.detector')}}" class="viewport-holder slideDown delay-4 more">
                                <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                            </a>
						</div>
					</article>
				</div>
			</div>
			@include('frontend.common.our_work')

            @include('frontend.common.demo_booking')

		</main>
@endsection
