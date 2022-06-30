@extends('frontend.index')
@section('content')
@php
    $site_dat = App\Models\GeneralSetting::first();
    $heading_section = App\Models\Integration::find(1);
    $cameras = App\Models\Camera::all();
    $second_camera_sections = App\Models\IntegrationSecondCameraSection::all();

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
                    @if($heading_section->camera_heading) 
                    {{ $tr->setSource('en')->setTarget($site_language)->translate($heading_section->camera_heading)}} 
                    @endif
                    
                <h2>
                <p class="viewport-holder slideDown delay-1">
                    @if($heading_section->camera_description)
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
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($camera->description) !!} 
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
                            
                        @endforeach
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/camera-vivotek.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">
                                        @if($second_camera_section->name !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($second_camera_section->name) !!} 
                                        @endif
                                    </h3>
                                    <p class="viewport-holder slideDown delay-5">
                                        @if($second_camera_section->description !=null)
                                        {!! $tr->setSource('en')->setTarget($site_language)->translate($second_camera_section->description) !!} 
                                        @endif
                                    </p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>CONTROL</i></span>Access control systems</h2>
                    </div>
                    <div class="frame">
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-open-path.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">OpenPath</h3>
                                    <p class="viewport-holder slideDown delay-5">The 360 is a cloud-managed 12MP panoramic
                                        camera that secures locations requiring coverage in all directions.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-lenel.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">OnGuard Camera</h3>
                                    <p class="viewport-holder slideDown delay-6">The 360 is a cloud-managed 12MP panoramic
                                        camera that secures locations requiring coverage in all directions.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-feenics.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Keep By Freenics</h3>
                                    <p class="viewport-holder slideDown delay-5">The 360 is a cloud-managed 12MP panoramic
                                        camera that secures locations requiring coverage in all directions.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-nedap.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">Nedap</h3>
                                    <p class="viewport-holder slideDown delay-6">The 360 is a cloud-managed 12MP panoramic
                                        camera that secures locations requiring coverage in all directions.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-system.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Other Acces Control System</h3>
                                    <p class="viewport-holder slideDown delay-5">Use the openness of the Trassir Generic
                                        Access Control API to build your own Access Control Proxy and allow the Cloud VMS to
                                        talk to any access control system.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>OUTPUTS</i></span>Outputs to external systems</h2>
                    </div>
                    <div class="frame">
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-webhooks.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Webhooks</h3>
                                    <p class="viewport-holder slideDown delay-5">Create custom integrations with
                                        communication tools to send automatic Cloud VMS notifications.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-api.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">API</h3>
                                    <p class="viewport-holder slideDown delay-6">Use Trasssir API to integrate with other
                                        systems, automate operations, or export data for further analysis.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-email.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Email</h3>
                                    <p class="viewport-holder slideDown delay-5">Send email alerts to specific users or
                                        user groups directly from the Aware Cloud VMS.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-telegram.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">Telegram</h3>
                                    <p class="viewport-holder slideDown delay-6">Send email alerts to specific users or
                                        user groups directly from the Cloud VMS.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-rtsp.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">RTSP</h3>
                                    <p class="viewport-holder slideDown delay-5">View Real Time Streaming Protocol (RTSP)
                                        streams from cameras connected to your Trassir Cloud.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-api.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">Camera API</h3>
                                    <p class="viewport-holder slideDown delay-6">Use the Aware API to integrate with other
                                        systems, automate operations, or export data for further analysis.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>MANAGEMENT</i></span>User management</h2>
                    </div>
                    <div class="frame">
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-microsoft.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Active Directory</h3>
                                    <p class="viewport-holder slideDown delay-5">Create and manage users in the Aware Cloud
                                        VMS via Microsoft Active Directory Federation Services.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-saml.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">SAML</h3>
                                    <p class="viewport-holder slideDown delay-6">Configure SAML to enable single sign-on
                                        for users.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>PROVIDERS</i></span>Identity providers</h2>
                    </div>
                    <div class="frame">
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-google.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Google</h3>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-azure.png" alt="image description">
                                </div>
                                <div class="txt viewport-holder slideDown delay-5">
                                    <h3>Azure Active Directory</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>COMMUNICATION TOOLS</i></span>Instant communication tools</h2>
                    </div>
                    <div class="frame">
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-slack.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Slack</h3>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-workplace.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">Facebook Workplace</h3>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/img-webex.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Webex Teams</h3>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/img-microsoft-team.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">Microsoft Teams</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
