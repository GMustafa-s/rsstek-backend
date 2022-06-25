@extends('frontend.index')
@section('content')
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
                            <h1 class="viewport-holder slideDown delay-1">Ecosystem security in your hands</h1>
                            <p class="viewport-holder slideDown delay-2">Designed to integrate with the technology you use
                                daily.</p>
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
                <h2 class="viewport-holder slideDown"><span><i>CAMERA</i></span> With RRSTEK, you don't need to rip and
                    replace.</h2>
                <p class="viewport-holder slideDown delay-1">Unlock enhanced flexibility and integrate the systems, tools,
                    and devices your teams use every day to get the most out of the TRASSIR Cloud™ video management system,
                    Ava Cloud Connector</p>
            </div>
        </div>
        <div class="items-holder">
            <div class="container">
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>PRODUCT</i></span>RRSTEK Camera</h2>
                    </div>
                    <div class="frame">
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/products/camera-02.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">TR-D3181IR3</h3>
                                    <p class="viewport-holder slideDown delay-5">IP-camera adapted for outdoor use in places
                                        of direct access, regardless of the season: protection of the case against moisture
                                        and ....</p>
                                    <a href="" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/products/camera-02.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class=" viewport-holder slideDown delay-5">TR-D3183ZIR3 v2</h3>
                                    <p class=" viewport-holder slideDown delay-6">IP-camera adapted for outdoor use in
                                        places of direct access, regardless of the season: protection of the case against
                                        moisture and ....</p>
                                    <a href="#" class="details  viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/products/camera-03.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">TR-D2183IR6 v2</h3>
                                    <p class="viewport-holder slideDown delay-5">IP-camera adapted for outdoor use in places
                                        of direct access, regardless of the season: protection of the case against moisture
                                        and ....</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/products/camera-03.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">TR-D2183IR6 v2</h3>
                                    <p class="viewport-holder slideDown delay-6">IP-camera adapted for outdoor use in places
                                        of direct access, regardless of the season: protection of the case against moisture
                                        and ....</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="holder">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>CAMERA</i></span>Third-party security cameras</h2>
                    </div>
                    <div class="frame">
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/camera-onvif.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">ONIV</h3>
                                    <p class="viewport-holder slideDown delay-5">Your ONVIF-conformant IP physical security
                                        products integrate with the flexible Aware Cloud VMS.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-3">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-4">
                                    <img src="{{asset('frontend')}}/images/camera-vapix.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-5">VAPIX</h3>
                                    <p class="viewport-holder slideDown delay-6">Connect your existing Axis security cameras
                                        with the Aware Cloud VMS to gain proactive insights.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-7">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item viewport-holder slideDown delay-2">
                            <div class="box viewport-holder slideDown">
                                <div class="img viewport-holder slideDown delay-3">
                                    <img src="{{asset('frontend')}}/images/camera-vivotek.png" alt="image description">
                                </div>
                                <div class="txt">
                                    <h3 class="viewport-holder slideDown delay-4">Vivotek</h3>
                                    <p class="viewport-holder slideDown delay-5">Connect your existing Vivotek security
                                        cameras with the Aware Cloud VMS to gain proactive insights.</p>
                                    <a href="#" class="details viewport-holder slideDown delay-6">See Details</a>
                                </div>
                            </div>
                        </div>
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
