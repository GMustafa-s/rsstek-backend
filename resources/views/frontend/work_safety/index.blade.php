@extends('frontend.index')
@section('content')
		<div id="promo-health-care" class="promo product">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{route('/')}}">Main</a></li>
								<li><a href="#">Products</a></li>
								<li><a href="#">Analitys</a></li>
								<li><a href="{{route('/work_safety')}}">Work Safety</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">Work Safety</h1>
								<p class="viewport-holder slideDown delay-2">
									Labor protection systems from TRASSIR are an investment to your reputation!
								</p>
								<ul class="viewport-holder slideDown delay-3">
									<li><a href="#" class="btn sec">Watch Video</a></li>
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
					<li><a href="{{route('/hardhat_detector')}}">Hardhat Detector</a></li>
					<li><a href="{{route('/wear_detector')}}">Wear Detector</a></li>
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
								<span><i>OUR PRODUCT</i></span> Wear Detector
							</h2>
							<p class="viewport-holder slideDown delay-3">
								Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.
							</p>
							<a class="viewport-holder slideDown delay-4 more" href="wear-detector.html"><span>Read
									More</span></a>
						</div>
					</article>
					<article class="article">
						<div class="img-box viewport-holder slideDown delay-1">
							<img src="{{asset('frontend')}}/images/work-safety/hardhat-detector-Image.png" alt="image description" />
						</div>
						<div class="text-box">
							<h2 class="viewport-holder slideDown delay-2">
								<span><i>OUR PRODUCT</i></span> Hardhat Detector
							</h2>
							<p class="viewport-holder slideDown delay-3">
								Safety helmet presence detector helps to monitor safety compliance. If an employee appears in the work area without a protective helmet, the intelligent module sends a notification in real time and saves a frame for the evidentiary base.
							</p>
							<a href="hardhat-detector.html" class="viewport-holder slideDown delay-4 more"><span>Read
									More</span></a>
						</div>
					</article>
				</div>
			</div>
			@include('frontend.common.our_work')

            @include('frontend.common.demo_booking')

		</main>
@endsection
