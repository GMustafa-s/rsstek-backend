@extends('frontend.index')
@section('content')
    <div id="promo-cases" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('work.safety') }}">Main</a></li>
                            <li><a href="{{ route('/cases') }}">cases</a></li>
                        </ul>
                        <div id="text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">
                                Success stories from our clients
                            </h1>
                            <p class="viewport-holder slideDown delay-2">
                                We are proud that our customers come back to us: they
                                usually add new objects to our systems; modernize the
                                equipment; add modules. And one of the reasons we are
                                able to sustain such a long partnership is our case-by-
                                case approach to every application.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        @include('frontend.common.our_work')
    </main>
@endsection
