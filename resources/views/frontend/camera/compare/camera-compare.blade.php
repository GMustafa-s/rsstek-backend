@extends('frontend.index')
@section('content')
@php
$site_dat = App\Models\GeneralSetting::first();
@endphp
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

<?php $_SESSION['previous'] = basename($_SERVER['PHP_SELF']); ?>
		<div class="promo camera">
			<div class="frame">
				<div class="holder">
					<div class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{ route('/') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>
								<li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Product')}}</a></li>
								<li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Camera')}}</a></li>
								<li><a href="{{ route('/camera/compare') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Compare')}}</a></li>

							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Find the camera needs for your Smart Video Surveillance')}}
                                </h1>
								<p class="viewport-holder slideDown delay-2">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Protect your mission with an AI-powered cloud-connected video surveillance camera.')}}
                                </p>
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
						<h2 class="viewport-holder slideDown delay-3">
                            <span>{{$tr->setSource('en')->setTarget($site_language)->translate('COMPARE CAMERAS')}}</span>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Smart Survaillance Video choice for you')}}
                        </h2>
					</div>
					<div class="slick-slider-compare">
						@if($cameras->count()> 0)
						@foreach($cameras as $camera)
						<div class="slide viewport-holder slideDown delay-5">
							<div class="img">
								<img src="{{asset('frontend')}}/images/camera/{{$camera->image}}" alt="image description">
							</div>
							<div class="txt">
								<h3>{{$tr->setSource('en')->setTarget($site_language)->translate($camera->title)}}</h3>

								<h4>{{$tr->setSource('en')->setTarget($site_language)->translate($camera->sub_title)}}</h4>
								<a href="{{route('camera.compare',$camera->id)}}" class="more">{{$tr->setSource('en')->setTarget($site_language)->translate('Compare')}}</a>
							</div>
						</div>
						@endforeach
						@endif
					</div>
				</div>
			</div>
			<div class="product-info" id="sroll-here">
				<div class="container">
					<div class="product-frame">
						<table class="table">
							<thead>
								<th>
									<h2>
                                        <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('Compare')}}</i></span>
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Compare Our Product')}}
                                    </h2>
									<p>
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Select up to three models to compare below')}}
                                    </p>
								</th>
								@isset($comparings)
								@if($comparings->count()==1)
								@foreach($comparings as $compare)

								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/camera/{{$compare->image}}" width="135" alt="image discription">
										<span class="model">
                                            {{$tr->setSource('en')->setTarget($site_language)->translate($compare->title)}}
                                        </span>
									</div>
								</td>
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">

										<span class="model">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Select a model')}}
                                        </span>
									</div>
								</td>
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Select a model')}}
                                        </span>
									</div>
								</td>
								@endforeach
								@elseif($comparings->count()==2)
								@foreach($comparings as $compare)
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/camera/{{$compare->image}}" width="135" alt="image discription">
										<span class="model">
                                            {{$tr->setSource('en')->setTarget($site_language)->translate($compare->title)}}
                                        </span>
									</div>
								</td>
								@endforeach
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">
                                            {{$tr->setSource('en')->setTarget($site_language)->translate('Select a model')}}
                                        </span>
									</div>
								</td>
								@elseif($comparings->count()==3)
								@foreach($comparings as $compare)
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/camera/{{$compare->image}}" width="135" alt="image discription">
										<span class="model">
                                            {{$tr->setSource('en')->setTarget($site_language)->translate($compare->title)}}
                                        </span>
									</div>
								</td>
								@endforeach
								@endif
								@endisset
								@if($comparings==null)
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">
                                            {{$tr->setSource('en')->setTarget($site_language)->translate('Select a model')}}
                                        </span>
									</div>
								</td>
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">
                                            {{$tr->setSource('en')->setTarget($site_language)->translate('Select a model')}}
                                        </span>
									</div>
								</td>
								<td>
									<div class="box dash">
										<img src="{{asset('frontend')}}/images/ico-upload-file.png" alt="image discription">
										<span class="model">
                                            {{$tr->setSource('en')->setTarget($site_language)->translate('Select a model')}}
                                        </span>
									</div>
								</td>
								@endif
							</thead>
							<tbody>
								<tr>
									<th>{{$tr->setSource('en')->setTarget($site_language)->translate('WDR')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->wdr !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->wdr)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Max Resulution')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->max_resoluton !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->max_resoluton)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Resolution')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->resoluton !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->resoluton)}}
                                        </td>
									@else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Sensor format')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->sensor !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->sensor)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Bitrate')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->bitrate !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->bitrate)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Power Supply')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->power_supply !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->power_supply)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Lens')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->lens !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->lens)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Weight')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->weight !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->weight)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Sensitivity')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->senstivity !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->senstivity)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Ingress Protection')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->ingress_protection !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->ingress_protection)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Dimensions')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->dimensions !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->dimensions)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Power Consumption')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->power_consumption !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->power_consumption)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Temperature')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->temprature !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->temprature)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Mode')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->mode !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->mode)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Network Interface')}}</th>
									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->network_interface !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->network_interface)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('IR range')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->ir_range !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->ir_range)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Focal length')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->focal_length !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->focal_length)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Horizontal FOV')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->horizontal_fov !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->horizontal_fov)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Aperture')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->aperture !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->aperture)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Aspect ratio')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->aspect_ratio !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->aspect_ratio)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Zoom and focus')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->zoom_focus !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->zoom_focus)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
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
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Retention (days)')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->retention !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->retention)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
                                    <th>{{$tr->setSource('en')->setTarget($site_language)->translate('Audio analytics')}}</th>

									@isset($comparings)
									@foreach($comparings as $compare)
                                    @if($compare->audio_analytics !=null)
										<td>
											{{$tr->setSource('en')->setTarget($site_language)->translate($compare->audio_analytics)}}
										</td>
                                    @else
									<td>
										<p>-</p>
									</td>
									@endif
									@endforeach
									@endisset
								</tr>
								<tr>
									<th></th>
									@if($cameras !=null)
									@foreach($cameras->take(3) as $camera)
									<td>
										<div class="holder">
											<h3>
                                                <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Overview')}}</span>
                                            </h3>

                                            <h4>{{$tr->setSource('en')->setTarget($site_language)->translate($camera->title)}}</h4>

											<p>
                                                @if($camera->description !=null)
												{{ $tr->setSource('en')->setTarget($site_language)->translate( Illuminate\Support\Str::of(strip_tags( $camera->description))->words(25)) }}
                                                @endif
                                            </p>

											<a href="{{route('camera.slug',$camera->slug)}}" class="more">{{$tr->setSource('en')->setTarget($site_language)->translate('See Details')}}</a>
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
		<script>
			var camparings = <?PHP echo isset($comparings); ?>;
			if(camparings){
				document.getElementById("sroll-here").scrollIntoView();
			}
		</script>
@endsection
