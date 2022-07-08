@extends('frontend.index')
@section('content')
@php
    $site_dat = App\Models\GeneralSetting::first();
    $heading_section = App\Models\Integration::find(1);
    $cameras = App\Models\Camera::all();
    $second_camera_sections = App\Models\IntegrationSecondCameraSection::all();
    $control_sections = App\Models\IntegrationControlSection::all();
    $outputs_sections = App\Models\IntegrationOutputSection::all();
    $management_sections = App\Models\IntegrationManagementSection::all();
    $provider_sections = App\Models\IntegrationProviderSection::all();
    $communication_tools_sections = App\Models\IntegrationCommunicationToolsSection::all();

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
    <div class="promo integ">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{route('/')}}">Main</a></li>
                            <li><a href="{{route('/integrations')}}">Integrations</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">
                                @if($heading_section->header_heading)
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->header_heading)}}
                                 @endif
                            </h1>
                            <p class="viewport-holder slideDown delay-2">
                                @if($heading_section->header_description)
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->header_description)}}
                                @endif
                            </p>
                            <a href="{{route('demo')}}" class="btn sec">Get Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="link-holder col2">
        <div class="container">
            <ul class="links viewport-holder slideDown">
                <li><a href="#">Trassir Camera</a></li>
                <li><a href="#">Third-party security cameras</a></li>
                <li><a href="#">Access control systems</a></li>
                <li><a href="#">Outputs to external systems</a></li>
                <li><a href="#">User management</a></li>
                <li><a href="#">Identity providers</a></li>
                <li><a href="#">Instant communication tools</a></li>
            </ul>
        </div>
    </div>
    <main id="main">
        <div class="text-frame">
            <div class="container">
                <h2 class="viewport-holder slideDown"><span><i>CAMERA</i></span>
                    @if($heading_section->camera_heading !=null)
                    {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->camera_heading)}}
                    @endif

                <h2>
                <p style="font-size: 16px" class="viewport-holder slideDown">
                    @if($heading_section->camera_description !=null)
                    {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->camera_description)}}
                    @endif
                </p>
            </div>
        </div>
        <div class="items-holder">
            <div class="container">
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>PRODUCT</i></span>RRSTEK Camera</h2>
                    </div>
                    <div class="frame">
                        @if($cameras != null)
                        @foreach ($cameras as $camera)
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/camera/{{$camera->image}}"
                                    alt="{!! $tr->setSource('en')->setTarget($site_language)->translate($camera->title) !!}">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">
                                        @if($camera->title !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($camera->title) !!}
                                        @endif
                                    </h3>
                                    <p class="viewport-holder slideDown delay-6">
                                        @if($camera->description !=null)
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate( Illuminate\Support\Str::of(strip_tags( $camera->description))->words(22)) }}
                                        @endif
                                    </p>
                                    <a href="{{route('camera.slug', $camera->slug)}}" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <p class="text-center">No Camera Page Available</p>
                        @endif
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>CAMERA</i></span>
                            @if($heading_section->second_camera_heading !=null)
                            {!! $tr->setSource('en')->setTarget($site_language)->translate($heading_section->second_camera_heading) !!}
                            @endif
                        </h2>
                    </div>
                    <div class="frame">
                        @if($second_camera_sections !=null)
                        @foreach ($second_camera_sections as $second_camera_section)
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/integration/second-camera-section/{{$second_camera_section->image}}" alt="image">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">
                                        @if($second_camera_section->name !=null)
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate($second_camera_section->name) }}
                                        @endif
                                    </h3>
                                    <p class="viewport-holder slideDown delay-5">
                                        @if($second_camera_section->description !=null)
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate($second_camera_section->description) }}
                                        @endif
                                    </p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p class="text-center">No Data Available!</p>

                        @endif
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>CONTROL</i></span>
                            @if($heading_section->control_heading)
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->control_heading)}}
                            @endif
                        </h2>
                    </div>
                    <div class="frame">
                        @if($control_sections !=null)
                        @foreach($control_sections as $cs)
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/integration/control-section/{{$cs->image}}" alt="image">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">
                                        @if($cs->name !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($cs->name) !!}
                                        @endif
                                    </h3>
                                    <p class="viewport-holder slideDown delay-5">
                                        @if($cs->description !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($cs->description) !!}
                                        @endif
                                    </p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>

                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>OUTPUTS</i></span>
                            @if($heading_section->outputs_heading)
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->outputs_heading)}}
                            @endif
                        </h2>
                    </div>
                    <div class="frame">
                        @if($outputs_sections !=null)
                        @foreach ($outputs_sections as $os)
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/integration/outputs-section/{{$os->image}}" alt="image">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">
                                        @if($cs->name !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($os->name) !!}
                                        @endif
                                    </h3>
                                    <p class="viewport-holder slideDown delay-5">
                                        @if($cs->description !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($os->description) !!}
                                        @endif
                                    </p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>MANAGEMENT</i></span>
                            @if($heading_section->management_heading)
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->management_heading)}}
                            @endif
                        </h2>
                    </div>
                    <div class="frame">
                        @if($management_sections !=null)
                        @foreach ($management_sections as $ms)
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/integration/management-section/{{$ms->image}}" alt="image">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">
                                        @if($ms->name !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($ms->name) !!}
                                        @endif
                                    </h3>
                                    <p class="viewport-holder slideDown delay-5">
                                        @if($ms->description !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($ms->description) !!}
                                        @endif
                                    </p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>PROVIDERS</i></span>
                            @if($heading_section->providers_heading)
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->providers_heading)}}
                            @endif
                        </h2>
                    </div>
                    <div class="frame">
                        @if($provider_sections !=null)
                        @foreach ($provider_sections as $ps)
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/integration/providers-section/{{$ps->image}}" alt="image">
                                </div>
                                <div class="txt viewport-holder slideDown delay-5">
                                    <h3>
                                        @if($ms->name !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($ps->name) !!}
                                        @endif
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>COMMUNICATION TOOLS</i></span>
                            @if($heading_section->communication_tools_heading)
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->communication_tools_heading)}}
                            @endif
                        </h2>
                    </div>
                    <div class="frame">
                        @if($communication_tools_sections !=null)
                        @foreach ($communication_tools_sections as $cts)
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/integration/communication-tools-section/{{$cts->image}}">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">
                                        @if($ms->name !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($cts->name) !!}
                                        @endif
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
