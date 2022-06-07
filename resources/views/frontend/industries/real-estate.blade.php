@extends('frontend.index')
@section('content')
    <div id="promo-real-estate" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="{{ route('/solutions') }}">Solutions</a></li>
                            <li><a href="{{ route('/real_estate') }}">Real estate</a></li>
                        </ul>
                        <div id="text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">Real estate</h1>
                            <p class="viewport-holder slideDown delay-2">
                                Video surveillance and video analytics can optimize
                                management and maintenance of the property, help with
                                identifying and proactively responding to problems, increase
                                predictability and efficiency of the real estat
                            </p>
                            <ul class="viewport-holder slideDown delay-3">
                                <li><a href="{{ route('/solutions') }}" class="btn sec w-spe-btn-m">Get Solutions</a></li>
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
                <li><a href="#">Prevention of incidents</a></li>
                <li><a href="#">Site security and occupational safety</a></li>
                <li><a href="#">Fire prevention</a></li>
            </ul>
        </div>
    </div>
    <main id="main">
        <div class="article-holder">
            <div class="container">
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Industries/Real-estate/Preventions-of-incidents.png"
                            alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>REGULAR SECURITY NEEDS</i></span> Prevention of
                            incidents
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            Damage to human health or property should be avoided by
                            monitoring the property round the clock. It is quite
                            challenging to monitor a large area by patrolling. Security
                            service needs a certain device tobv react to suspicious
                            incidents faster and more effectively, reducing the number of
                            false positives.
                        </p>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Industries/Real-estate/Effective-authentications.png"
                            alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>REGULAR SECURITY NEEDS</i></span> Effective
                            authentication system
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            There might be special areas demanding authorized access.
                            Manual control of visitors is not always possible or
                            convenient, furthermore it requires additional labor force.
                            Authentication enables you to keep certain zones secure by
                            admitting authorized persons. Ideally, the system identifies
                            people automatically and grants them access in a few seconds.
                            Authentication acts as the first protection line and allows
                            access to the property only for those who are authorized by
                            the manager or other authorities.
                        </p>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Industries/Real-estate/Fire-protection.png"
                            alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>Regular security needs</i></span>Fire protection
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            Fire can have a devastating impact on anybody who is
                            unfortunate enough to be near. There are many aspects of fires
                            that can cause a great harm. The risk of fire and the
                            consequent loss of life, injury and damage to property is
                            always vital. To detect smoke and fires there are solutions
                            that function round the clock.
                        </p>
                    </div>
                </article>
            </div>
        </div>

        <div class="solution-area">
            <div class="container">
                <h2 class="viewport-holder slideDown">
                    <span>OUR PRODUCT</span> <br />
                    Effective RRSTEK solutions
                </h2>
                <div class="btn-holder">
                    <a href="#" class="show-all"><span class="active">See All</span>
                        <span class="show-less">Show Less</span></a>
                </div>
                <div class="carousel">
                    <div class="mask">
                        <div class="slideset">
                            <div class="slide viewport-holder slideDown">
                                <div class="frame">
                                    <img src="{{asset('frontend')}}/images/Industries/Real-estate/Neuro-counter.png" alt="image description" />
                                    <div class="txt-box">
                                        <a href="{{ route('/neuro_counter') }}" class="more">Neuro Counter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide viewport-holder slideDown delay-1">
                                <div class="frame">
                                    <img src="{{ asset('frontend') }}/images/Industries/Real-estate/Direction-director.png"
                                        alt="image description" />
                                    <div class="txt-box">
                                        <a href="{{ route('/direction_detector') }}" class="more">Direction
                                            Director</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination"></div>
                </div>
            </div>
        </div>

        @include('frontend.common.our_work')

        @include('frontend.common.demo_booking')
    </main>
@endsection
