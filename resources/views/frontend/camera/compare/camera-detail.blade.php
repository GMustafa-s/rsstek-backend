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
    <div class="promo camera-detail">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                            <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Product')}}</a></li>

                            <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Camera')}}</a></li>

                            <li><a href="{{ route('/camera/compare') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Compare')}}</a></li>

                            <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('TR-D3181IR3 v2 3.6')}}</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">{{$tr->setSource('en')->setTarget($site_language)->translate($camera->title)}}</h1>

                            <p class="viewport-holder slideDown delay-2">{{$tr->setSource('en')->setTarget($site_language)->translate($camera->sub_title)}}</p>
                            
                            <div class="btn-holder viewport-holder slideDown delay-2">
                                <a href="{{ route('/solutions') }}" class="btn primary"><span>{{$tr->setSource('en')->setTarget($site_language)->translate('Book a Demo')}}</span></a>
                                <a href="{{ route('/contactus') }}" class="btn default"><span>{{$tr->setSource('en')->setTarget($site_language)->translate('How To Buy')}}</span></a>
                            </div>
                        </div>

                    </div>
                    <div class="cam-holder viewport-holder slideDown delay-4">
                        <img src="{{ asset('frontend') }}/images/camera/{{$camera->image}}"
                            alt="image description">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="main" class="main-camera">
        <div class="post-area">
            <div class="container">
                <div class="post">
                    <div class="viewport-holder slideDown">
                        <h1>
                            <span>{{$tr->setSource('en')->setTarget($site_language)->translate('OVERVIEW')}}</span>
                            <br>
                            {{$tr->setSource('en')->setTarget($site_language)->translate($camera->title)}}
                        </h1>
                        <div class="text">
                            <p>
                                {{$tr->setSource('en')->setTarget($site_language)->translate($camera->description)}}
                            </p>
                            <!-- <p>TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p> -->
                        </div>
                    </div>
                    @if($sections !=null)
                    @foreach($sections as $section)
                    <div class="viewport-holder slideDown delay-1">
                        <h2>
                            {{$tr->setSource('en')->setTarget($site_language)->translate($section ->title)}}
                        </h2>
                        <div class="text">
                            {{$tr->setSource('en')->setTarget($site_language)->translate($section ->description)}}
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>

            <div class="specifications">
                <div class="container">
                    <div class="heading viewport-holder slideDown delay-1">
                        <a href="#" class="btn-open">
                            <h2>
                                <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('Specifications')}}</i></span>

                                {{$tr->setSource('en')->setTarget($site_language)->translate('Technical Specifications')}}
                            </h2>
                        </a>
                    </div>
                    <div class="holder">
                        @if($specifications != null)

                            @if($specifications->wdr != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('WDR')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->wdr)}}</strong>
                                    </div>
                                </div>
                            @endif
                            @if($specifications->resoluton != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Maximum video output resolution')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->resoluton)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->sensor != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Image sensor')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->sensor)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->bitrate != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Bitrate (Mb/sec)')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->bitrate)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->power_supply != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Power supply')}}
                                </div>
                                <div class="row">
                                    <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->power_supply)}}</strong>
                                </div>
                            </div>
                            @endif

                            @if($specifications->lens != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Lens')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->lens)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->weight != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate(' Weight Net (kg)')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->weight)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->senstivity != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Sensitivity')}}
                                </div>
                                <div class="row">
                                    <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->senstivity)}}</strong>
                                </div>
                            </div>
                            @endif

                            @if($specifications->ingress_protection != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate(' Ingress protection')}}
                                </div>
                                <div class="row">
                                    <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->ingress_protection)}}</strong>
                                </div>
                            </div>
                            @endif

                            @if($specifications->dimensions != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Dimensions (mm)')}}
                                </div>
                                <div class="row">
                                    <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->dimensions)}}</strong>
                                </div>
                            </div>
                            @endif

                            @if($specifications->power_consumption != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Power consumption(Watt)')}}
                                </div>
                                <div class="row">
                                    <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->power_consumption)}}</strong>
                                </div>
                            </div>
                            @endif

                            @if($specifications->temprature != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Working temperature, C°')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->temprature)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->mode != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Day/Night Mode')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->mode)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->network_interface != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Network interfaces')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->network_interface)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->ir_range != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('IR range')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->ir_range)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->focal_length != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Focal length')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->focal_length)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->horizontal_fov != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Horizontal FOV')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->horizontal_fov)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->aperture != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Aperture')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->aperture)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->zoom_focus != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Zoom and Focus')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->zoom_focus)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->colors != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Colors')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->colors)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->retention != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Retention')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->retention)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->audio_analytics != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Audio Analytics')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->audio_analytics)}}</strong>
                                    </div>
                                </div>
                            @endif

                            @if($specifications->aspect_ratio != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Aspect Ratio')}}
                                    </div>
                                    <div class="row">
                                        <strong>{{$tr->setSource('en')->setTarget($site_language)->translate($specifications->aspect_ratio)}}</strong>
                                    </div>
                                </div>
                            @endif

                        @endif
                    </div>
                </div>
            </div>
            <div class="download-area">
                <div class="container">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2>
                            <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('documentation')}}</i></span>
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Download Documentation')}}
                        </h2>
                    </div>
                    <div class="btn viewport-holder slideDown delay-2">
                        <a href="#">
                            <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Download here')}}</span>
                            <i class="ico"><img src="{{ asset('frontend') }}/images/ico-download.svg" alt="image description"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="advantages-area">
                <div class="container">
                    <div class="heading center viewport-holder slideDown delay-1">
                        <h2>
                            <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('ABOUT OUR PRODUCT')}}</i></span>

                            {{$tr->setSource('en')->setTarget($site_language)->translate('The Camera Series Advantge')}}
                        </h2>
                    </div>
                    <div class="holder">
                        <div class="box viewport-holder slideDown delay-2">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon.png"
                                        alt="image description"></i>
                            </div>
                            <p>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Easy installation, use, and management')}}
                            </p>
                        </div>
                        <div class="box viewport-holder slideDown delay-3">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-1.png"
                                        alt="image description"></i>
                            </div>
                            <p>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('AI video and audio analytics')}}
                            </p>
                        </div>
                        <div class="box viewport-holder slideDown delay-4">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-2.png"
                                        alt="image description"></i>
                            </div>
                            <p>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Cloud-connected deployment')}}
                            </p>
                        </div>
                        <div class="box viewport-holder slideDown delay-5">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-3.png"
                                        alt="image description"></i>
                            </div>
                            <p>
                                {{$tr->setSource('en')->setTarget($site_language)->translate('10 year warrantly')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <div id="footer-compare-section" class="compare-section viewport-holder slideDown">
        <div class="container">
            <div class="heading">
                <h2 class="viewport-holder slideDown delay-3">
                    <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Products')}}</span>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('Other Products')}}
                </h2>
            </div>

            <div class="slick-slider-compare">
                @if($other_cameras != null)
                @foreach($other_cameras as $camera)
                <div class="slide viewport-holder slideDown delay-5">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/products/camera-04.png" alt="image description">
                    </div>
                    <div class="txt">
                        <h3>{{$tr->setSource('en')->setTarget($site_language)->translate($camera->title)}}</h3>

                        <h4>{{$tr->setSource('en')->setTarget($site_language)->translate($camera->sub_title)}}</h4>

                        <a href="{{route('camera.compare',$camera->id)}}" class="more">
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Compare')}}</a>

                    </div>
                </div>
                @endforeach
                @endif
        </div>
    </div>
</div>
@endsection
