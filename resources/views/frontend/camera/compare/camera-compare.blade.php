@extends('frontend.layouts.app')
@section('content')
<?php $_SESSION['previous'] = basename($_SERVER['PHP_SELF']); ?>
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
						@if($cameras->count()> 0)
						@foreach($cameras as $camera)
						<div class="slide viewport-holder slideDown delay-5">
							<div class="img">
								<img src="{{asset('frontend')}}/images/camera/{{$camera->image}}" alt="image description">
							</div>
							<div class="txt">
								<h3>{{$camera->title}}</h3>
								<h4>{{$camera->sub_title}}</h4>
								<a href="{{route('camera.compare',$camera->id)}}" class="more">Compare</a>
							</div>
						</div>
						@endforeach
						@endif
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
								@isset($comparings)
								@if($comparings->count()==1)
								@foreach($comparings as $compare)

								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/camera/{{$compare->image}}" width="135" alt="image discription">
										<span class="model">{{$compare->title}}</span>
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
								@endforeach
								@elseif($comparings->count()==2)
								@foreach($comparings as $compare)
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/camera/{{$compare->image}}" width="135" alt="image discription">
										<span class="model">{{$compare->title}}</span>
									</div>
								</td>
								@endforeach
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">Select a model</span>
									</div>
								</td>
								@elseif($comparings->count()==3)
								@foreach($comparings as $compare)
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/camera/{{$compare->image}}" width="135" alt="image discription">
										<span class="model">{{$compare->title}}</span>
									</div>
								</td>
								@endforeach
								@endif
								@endisset
								@if($comparings==null)
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
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">Select a model</span>
									</div>
								</td>
								@endif
							</thead>
							<tbody>
								<tr>
									<th>WDR</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->wdr}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Max. Vid. Output Resulution</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->max_resoluton}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Resolution</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->resoluton}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Sensor format</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->sensor}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>IR range</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->ir_range}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Focal length</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->focal_length}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Horizontal FOV</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->horizontal_fov}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Aperture</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->aperture}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Aspect ratio</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->aspect_ratio}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Zoom and focus</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->zoom_focus}}
										</td>
									@endforeach
									@endisset
								</tr>
								<!-- <tr>
									<th>Colors </th>
									<td><i class="ico blue"></i> <i class="ico dark-blue"></i></td>
									<td><i class="ico blue"></i> <i class="ico dark-blue"></i></td>
									<td><i class="ico blue"></i> <i class="ico dark-blue"></i></td>
								</tr> -->
								<tr>
									<th>Retention (days)</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->retention}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th>Audio analytics</th>
									@isset($comparings)
									@foreach($comparings as $compare)
										<td>
											{{$compare->audio_analytics}}
										</td>
									@endforeach
									@endisset
								</tr>
								<tr>
									<th></th>
									@if($cameras !=null)
									@foreach($cameras as $camera)
									<td>
										<div class="holder">
											<h3><span>Overview</span></h3>
											<h4>{{$camera->title}}</h4>
											<p>{!! $camera->description !!}</p>
											<a href="{{route('camera.slug',$camera->slug)}}" class="more">See Details</a>
										</div>
									</td>
									@endforeach
									@endif
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            @include('frontend.common.contact_form')

		</main>
@endsection
