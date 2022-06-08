@extends('frontend.layouts.app')
@section('content')


<div class="promo">
			<div style="margin-top: 36px" class="frame">
				<div class="holder">
					<div  class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{route('/')}}">Main</a></li>
								<li><a href="{{route('business')}}">Business</a></li>
								<li><a href="{{route('workspace.detector')}}">Workspace Detector</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">Workspace Detector</h1>
								<ul class="viewport-holder slideDown delay-2">
									<li><a href="{{route('demo')}}" class="btn"><span>Book a Demo</span></a></li>
									<li><a href="{{route('/contactus')}}" class="btn add">How to Buy</a></li>
								</ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
								<video width="100%" height="320" loop="true" autoplay="autoplay" muted>
									<source src="{{asset('frontend')}}/images/videos/Workplace detector.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<main id="main">
			<div class="post-area">
				<div class="container">
					<div class="post">
						<div>
							<h1 class="viewport-holder slideDown"><span>OVERVIEW</span><br> Workspace Detector</h1>
							<div class="text viewport-holder slideDown delay-1">
								<p class="viewport-holder slideDown delay-2">Neural network intelligent module that works only on TRASSIR Neuro Station series video recorders. Supports Offload analytics.</p>
								<p class="viewport-holder slideDown delay-3">TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p>
							</div>
						</div>
						<div>
							<h2 class="viewport-holder slideDown delay-4">How it Works</h2>
							<div class="text viewport-holder slideDown delay-5">
								<ul>
									<li class="viewport-holder slideDown delay-6">The person in charge sets the necessary parameters for the module's work: the area of the working area, the schedule of employees, the permissible time of absence of an employee at the workplace.</li>
									<li class="viewport-holder slideDown delay-7">A camera with a connected module is installed in an office or other work area.</li>
									<li class="viewport-holder slideDown delay-8">The module generates a notification and sends a message to the person in charge if the employee is late, left earlier or has been absent from the workplace for more than the prescribed time.</li>
									<li class="viewport-holder slideDown delay-9">The module daily generates reports on the actual time of stay and absence of an employee on site, sends reports by mail to the person in charge.</li>
								</ul>
								<p class="viewport-holder slideDown delay-10">The functionality can be expanded by connecting additional scripts.</p>
							</div>
						</div>
					</div>
					<div class="product-box">
                        <div class="frame viewport-holder slideDown delay-1">
                            <h2 class="viewport-holder slideDown delay-2">Other Products</h2>
                            <ul class="accordion" data-accordion="close">
                                <li class="viewport-holder slideDown delay-3">
                                    <a    href="{{route('active.post')}}">ActivePOS</a>

                                </li>
                                <!-- <li class="viewport-holder slideDown delay-4">
                                    <a    href="workspace-detector.html">Workspace Detector</a>

                                </li> -->
                                <li class="viewport-holder slideDown delay-4">
                                    <a    href="{{route('staff.tracker')}}">Staff Tracker</a>

                                </li>
                                <li class="viewport-holder slideDown delay-5">
                                    <a    href="{{route('shelf.detector')}}">Shelf Detector</a>

                                </li>
                                <li class="viewport-holder slideDown delay-6">
                                    <a    href="{{route('heat.map')}}">Heat Map on Map</a>

                                </li>
                                <li class="viewport-holder slideDown delay-7">
                                    <a    href="{{route('neuro.counter')}}">Neuro Counter</a>

                                </li>
                                <li class="viewport-holder slideDown delay-8">
                                    <a    href="{{route('queue.counter')}}">Queue Counter</a>

                                </li>
                            </ul>
                        </div>
                    </div>

				</div>
			</div>
			@include('frontend.common.solutions_area')
            @include('frontend.common.contact_form')

</main>


@endsection
