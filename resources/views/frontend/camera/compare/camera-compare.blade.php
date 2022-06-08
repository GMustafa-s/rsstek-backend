@extends('frontend.layouts.app')
@section('content')
		<div class="promo camera">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{ route('/') }}">Main</a></li>
								<li><a href="#">product</a></li>
								<li><a href="#">Camera</a></li>
								<li><a href="{{ route('camera.compare') }}">Compare</a></li>

							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">Find the camera needs for your Smart Video Surveillance</h1>
								<p class="viewport-holder slideDown delay-2">Protect your mission with an AI-powered cloud-connected video surveillance camera.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<main id="main">
			<div class="compare-section viewport-holder slideDown">
				<div class="container">
					<div class="heading">
						<h2 class="viewport-holder slideDown delay-3"><span>COMPARE CAMERAS</span> Smart Survaillance Video choice for you</h2>
					</div>
					<div class="slick-slider-compare">
						<div class="slide viewport-holder slideDown delay-5">
							<div class="img">
								<img src="{{asset('frontend')}}/images/products/camera-04.png" alt="image description">
							</div>
							<div class="txt">
								<h3>TR-D2181IR3 v2 3.6</h3>
								<h4>Outdoor IP camera with IR illumination</h4>
								<a href="#" class="more">Compare</a>
							</div>
						</div>
						<div class="slide viewport-holder slideDown delay-6">
							<div class="img">
								<img src="{{asset('frontend')}}/images/products/camera-04.png" alt="image description">
							</div>
							<div class="txt">
								<h3>TR-D2181IR3 v2 2.8</h3>
								<h4>Outdoor IP camera with IR illumination</h4>
								<a href="#" class="more">Compare</a>							</div>
						</div>
						<div class="slide viewport-holder slideDown delay-7">
							<div class="img">
								<img src="{{asset('frontend')}}/images/products/camera-03.png" alt="image description">
							</div>
							<div class="txt">
								<h3>TR-D2183IR6 v2 2.7-13.5</h3>
								<h4>Outdoor IP camera with IR illumination</h4>
								<a href="#" class="more">Compare</a>
							</div>
						</div>
						<div class="slide viewport-holder slideDown delay-5">
							<div class="img">
								<img src="{{asset('frontend')}}/images/products/camera-04.png" alt="image description">
							</div>
							<div class="txt">
								<h3>TR-D2181IR3 v2 3.6</h3>
								<h4>Outdoor IP camera with IR illumination</h4>
								<a href="#" class="more">Compare</a>
							</div>
						</div>
						<div class="slide viewport-holder slideDown delay-6">
							<div class="img">
								<img src="{{asset('frontend')}}/images/products/camera-04.png" alt="image description">
							</div>
							<div class="txt">
								<h3>TR-D2181IR3 v2 2.8</h3>
								<h4>Outdoor IP camera with IR illumination</h4>
								<a href="#" class="more">Compare</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="product-info">
				<div class="container">
					<div class="product-frame">
						<table class="table">
							<thead>
								<th>
									<h2><span><i>COMPARE</i></span> Compare Our Product</h2>
									<p>Select up to three models to compare below</p>
								</th>
								<td>
									<div class="box">
										<img src="{{asset('frontend')}}/images/products/camera-01.png" alt="image discription">
										<span class="model">TR-D2181IR3 v2 3.6</span>
									</div>
								</td>
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">Select a model</span>
									</div>
								</td>
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">Select a model</span>
									</div>
								</td>
							</thead>
							<tbody>
								<tr>
									<th>WDR</th>
									<td>Outdoor and indoor</td>
									<td>Outdoor and indoor</td>
									<td>Outdoor and indoor</td>
								</tr>
								<tr>
									<th>Max. Vid. Output Resulution</th>
									<td>V</td>
									<td>V</td>
									<td>V</td>
								</tr>
								<tr>
									<th>Resolution</th>
									<td>4K</td>
									<td>4K</td>
									<td>4K</td>
								</tr>
								<tr>
									<th>Sensor format</th>
									<td>1/1.8"</td>
									<td>1/1.8"</td>
									<td>1/1.8"</td>
								</tr>
								<tr>
									<th>IR range</th>
									<td>30m</td>
									<td>30m</td>
									<td>30m</td>
								</tr>
								<tr>
									<th>Focal length</th>
									<td>3.6-10mm</td>
									<td>3.6-10mm</td>
									<td>3.6-10mm</td>
								</tr>
								<tr>
									<th>Horizontal FOV</th>
									<td>45°-100°</td>
									<td>45°-100°</td>
									<td>45°-100°</td>
								</tr>
								<tr>
									<th>Aperture</th>
									<td>ƒ/1.5</td>
									<td>ƒ/1.5</td>
									<td>ƒ/1.5</td>
								</tr>
								<tr>
									<th>Aspect ratio</th>
									<td>16:9</td>
									<td>16:9</td>
									<td>16:9</td>
								</tr>
								<tr>
									<th>Zoom and focus</th>
									<td>3x optical zoom</td>
									<td>3x optical zoom</td>
									<td>3x optical zoom</td>
								</tr>
								<tr>
									<th>Colors </th>
									<td><i class="ico blue"></i> <i class="ico dark-blue"></i></td>
									<td><i class="ico blue"></i> <i class="ico dark-blue"></i></td>
									<td><i class="ico blue"></i> <i class="ico dark-blue"></i></td>
								</tr>
								<tr>
									<th>Retention (days)</th>
									<td>0*, 30, 60, 120</td>
									<td>0*, 30, 60, 120</td>
									<td>0*, 30, 60, 120</td>
								</tr>
								<tr>
									<th>Audio analytics</th>
									<td>Directional audio analytics</td>
									<td>Directional audio analytics</td>
									<td>Directional audio analytics</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<div class="holder">
											<h3><span>Overview</span></h3>
											<h4>TR-D2181IR3 v2 3.6</h4>
											<p>IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard ....</p>
											<a href="#" class="more">See Details</a>
										</div>
									</td>
									<td>
										<div class="holder">
											<h3><span>Overview</span></h3>
											<h4>TR-D2181IR3 v2 3.6</h4>
											<p>IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard ....</p>
											<a href="#" class="more">See Details</a>
										</div>
									</td>
									<td>
										<div class="holder">
											<h3><span>Overview</span></h3>
											<h4>TR-D2181IR3 v2 3.6</h4>
											<p>IP-camera is designed taking into account the conditions of round-the-clock year-round outdoor operation: the metal case is protected from moisture and dust according to the IP67 standard ....</p>
											<a href="#" class="more">See Details</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            @include('frontend.common.contact_form')

		</main>
@endsection
