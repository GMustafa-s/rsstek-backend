@extends('frontend.index')
@section('content')
    <div id="promo-retail" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="{{ route('/solutions') }}">Solutions</a></li>
                            <li><a href="{{ route('/retail') }}">Retail</a></li>

                        </ul>
                        <div id="text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">Retail</h1>
                            <p class="viewport-holder slideDown delay-2">
                                Video analytics and IP camera technology firstly were adopted in the retail aiming to avoid
                                or lower the losses from shoplifting and fraud. It cause retailers’ huge financial losses,
                                they can be up to 1.42% of all income. A great part of these losses are associated with
                                staff: cashiers, salespeople and others.
                            </p>
                            <ul class="viewport-holder slideDown delay-3">
                                <li><a href="{{ route('/solutions') }}" class="btn sec">Get Solutions</a></li>
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
                <li><a href="#">Security and loss prevention</a></li>
                <li><a href="#">Optimizing business operations</a></li>
                <li><a href="#">Improving marketing strategies</a></li>
            </ul>
        </div>
    </div>
    <main id="main">
        <div class="article-holder">
            <div class="container">
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Industries/Retail/Security and loss prevention.png"
                            alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>REGULAR SECURITY NEEDS</i></span> Security and loss prevention
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            Implementing of a retail surveillance system with remote access can help to deter theft and
                            catch
                            shoplifting real-time. Retail video analytics can help loss prevention teams get more out of
                            their
                            limited manpower and budget by focusing on anomalies that indicate deviations from settled
                            protocols,
                            internal shrink, shoplifting or fraudulent activities. Complex use of video cameras and
                            analytical
                            modules remarkably reduces losses at the checkout. The module monitors cashier transactions and
                            points
                            out suspicious actions. Then the system automatically alerts the person in charge.
                        </p>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Industries/Retail/Optimisation business.png"
                            alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>REGULAR SECURITY NEEDS</i></span> Optimizing business operations
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            A store equipped with a 360° ceiling-mounted camera, with a clear line of sight to every corner
                            and
                            video analytics on board, can generate valuable data. It helps to avoid long queues and optimize
                            the
                            cashier's work. Using the object recognition program, the module determines number of people in
                            the
                            queue. If the number exceeds the specified value, the manager receives a notification activate
                            one more
                            cash register. Video analytics helps to understand reasons for patterns and peaks in store
                            traffic,
                            allowing you to react in a timely manner to increasing of buyers’ flow. It is also important to
                            have
                            remote access to staff work when selling.
                        </p>
                    </div>
                </article>
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Industries/Retail/Improving marketing strategies.png"
                            alt="image description">
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2"><span><i>Regular security needs</i></span>Improving
                            marketing strategies</h2>
                        <p class="viewport-holder slideDown delay-3">Video analytic applications can optimize marketing
                            strategies by analyzing customer behavior and providing actionable insights to retail
                            management. The layout of a store or supermarket is quite an important factor for successful
                            business. Knowing how customers typically move around a store and how much time they spend in
                            specific departments can help to optimize product placement to raise sales.You can evaluate
                            advertising strategies by defining trends in customer’s interaction with a product - plan more
                            effective promotions, special offers and discounts. The data obtained through video analytics
                            can be used to improve interaction with different demographic groups to expand the customer
                            base.</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="solution-area">
            <div class="container">
                <h2 class="viewport-holder slideDown"><span>OUR PRODUCT</span> <br> Effective RRSTEK solutions</h2>
                <div class="btn-holder">
                    <a href="#" class="show-all"><span class="active">See All</span> <span
                            class="show-less">Show Less</span></a>
                </div>
                <div class="carousel">
                    <div class="mask">
                        <div class="slideset">
                            <div class="slide viewport-holder slideDown">
                                <div class="frame">
                                    <img src="{{asset('frontend')}}/images/Industries/Retail/Queue_detector.png" alt="image description">
                                    <div class="txt-box">
                                        <a href="{{route('/queue_counter')}}" class="more">Queue Detector</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide viewport-holder slideDown delay-1">
                                <div class="frame">
                                    <img src="{{asset('frontend')}}/images/Industries/Retail/Heat_map_on_map.png" alt="image description">
                                    <div class="txt-box">
                                        <a href="{{route('/heat_map')}}" class="more">Heat Map On Map</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide viewport-holder slideDown delay-2">
                                <div class="frame">
                                    <img src="{{asset('frontend')}}/images/Industries/Retail/Staff_tracker.png" alt="image description">
                                    <div class="txt-box">
                                        <a href="{{route('/staff_tracker')}}" class="more">Staff Tracker</a>
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
