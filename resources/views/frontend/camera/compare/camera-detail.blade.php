@extends('frontend.layouts.app')
@section('content')
    <div class="promo camera-detail">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="#">product</a></li>
                            <li><a href="#">Camera</a></li>
                            <li><a href="{{ route('camera.compare') }}">Compare</a></li>
                            <li><a href="#">TR-D3181IR3 v2 3.6</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">{{$camera->title}}</h1>
                            <p class="viewport-holder slideDown delay-2">{{$camera->sub_title}}</p>
                            <div class="btn-holder viewport-holder slideDown delay-2">
                                <a href="{{ route('/solutions') }}" class="btn primary"><span>Book a Demo</span></a>
                                <a href="{{ route('/contactus') }}" class="btn default"><span>How To Buy</span></a>
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
                        <h1><span>OVERVIEW</span><br>{{$camera->title}}</h1>
                        <div class="text">
                            <p>{!! $camera->description !!}</p>
                            <!-- <p>TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p> -->
                        </div>
                    </div>
                    @if($sections !=null)
                    @foreach($sections as $section)
                    <div class="viewport-holder slideDown delay-1">
                        <h2>{{$section ->title}}</h2>
                        <div class="text">
                            {!! $section->description !!}
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
                            <h2><span><i>Specifications</i></span> Technical Specifications</h2>
                        </a>
                    </div>
                    <div class="holder">
                        @if($specifications != null)

                            @if($specifications->wdr != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">WDR</div>
                                    <div class="row"><strong>{{$specifications->wdr}}</strong></div>
                                </div>
                            @endif
                            @if($specifications->resoluton != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Maximum video output resolution</div>
                                    <div class="row"><strong>{{$specifications->resoluton}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->sensor != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Image sensor</div>
                                    <div class="row"><strong>{{$specifications->sensor}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->bitrate != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Bitrate (Mb/sec)</div>
                                    <div class="row"><strong>{{$specifications->bitrate}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->power_supply != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">Power supply</div>
                                <div class="row"><strong>{{$specifications->power_supply}}</strong></div>
                            </div>
                            @endif

                            @if($specifications->lens != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Lens</div>
                                    <div class="row"><strong>{{$specifications->lens}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->weight != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Weight Net (kg)</div>
                                    <div class="row"><strong>{{$specifications->weight}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->senstivity != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">Sensitivity</div>
                                <div class="row"><strong>{{$specifications->senstivity}}</strong></div>
                            </div>
                            @endif

                            @if($specifications->ingress_protection != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">Ingress protection</div>
                                <div class="row"><strong>{{$specifications->ingress_protection}}</strong></div>
                            </div>
                            @endif

                            @if($specifications->dimensions != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">Dimensions (mm)</div>
                                <div class="row"><strong>{{$specifications->dimensions}}</strong></div>
                            </div>
                            @endif

                            @if($specifications->power_consumption != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">Power consumption(Watt)</div>
                                <div class="row"><strong>{{$specifications->power_consumption}}</strong></div>
                            </div>
                            @endif

                            @if($specifications->power_consumption != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">Power consumption(Watt)</div>
                                <div class="row"><strong>{{$specifications->power_consumption}}</strong></div>
                            </div>
                            @endif

                            @if($specifications->temprature != null)
                            <div class="col viewport-holder slideDown delay-2">
                                <div class="row">Power consumption(Watt)</div>
                                <div class="row"><strong>{{$specifications->temprature}}</strong></div>
                            </div>
                            @endif
                            
                            @if($specifications->temprature != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Working temperature, C°</div>
                                    <div class="row"><strong>{{$specifications->temprature}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->mode != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Day/Night Mode</div>
                                    <div class="row"><strong>{{$specifications->mode}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->network_interface != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Network interfaces</div>
                                    <div class="row"><strong>{{$specifications->network_interface}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->ir_range != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">IR range</div>
                                    <div class="row"><strong>{{$specifications->ir_range}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->focal_length != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Focal length</div>
                                    <div class="row"><strong>{{$specifications->focal_length}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->horizontal_fov != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Horizontal FOV</div>
                                    <div class="row"><strong>{{$specifications->horizontal_fov}}</strong></div>
                                </div>
                            @endif

                            @if($specifications->horizontal_fov != null)
                                <div class="col viewport-holder slideDown delay-2">
                                    <div class="row">Horizontal FOV</div>
                                    <div class="row"><strong>{{$specifications->horizontal_fov}}</strong></div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="download-area">
                <div class="container">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>documentation</i></span> Download Documentation</h2>
                    </div>
                    <div class="btn viewport-holder slideDown delay-2">
                        <a href="#"><span>Download here</span><i class="ico"><img
                                    src="{{ asset('frontend') }}/images/ico-download.svg" alt="image description"></i></a>
                    </div>
                </div>
            </div>
            <div class="advantages-area">
                <div class="container">
                    <div class="heading center viewport-holder slideDown delay-1">
                        <h2><span><i>ABOUT OUR PRODUCT</i></span> The Camera Series Advantge</h2>
                    </div>
                    <div class="holder">
                        <div class="box viewport-holder slideDown delay-2">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon.png"
                                        alt="image description"></i>
                            </div>
                            <p>Easy installation, use, and management</p>
                        </div>
                        <div class="box viewport-holder slideDown delay-3">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-1.png"
                                        alt="image description"></i>
                            </div>
                            <p>AI video and audio analytics</p>
                        </div>
                        <div class="box viewport-holder slideDown delay-4">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-2.png"
                                        alt="image description"></i>
                            </div>
                            <p>Cloud-connected deployment</p>
                        </div>
                        <div class="box viewport-holder slideDown delay-5">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-3.png"
                                        alt="image description"></i>
                            </div>
                            <p>10 year warrantly</p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <div id="footer-compare-section" class="compare-section viewport-holder slideDown">
        <div class="container">
            <div class="heading">
                <h2 class="viewport-holder slideDown delay-3"><span>Products</span> Other Products</h2>
            </div>

            <div class="slick-slider-compare">
                @if($other_cameras != null)
                @foreach($other_cameras as $camera)
                <div class="slide viewport-holder slideDown delay-5">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/products/camera-04.png" alt="image description">
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
@endsection
