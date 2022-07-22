@extends('frontend.index')
@section('content')
    <div id="promo-contact-us" class="promo product">
        @if (session()->has('success'))
            <div class="alert-success">
                <p>
                    {{ session()->get('success') }}
                </p>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert-error">
                <p>
                    {{ session()->get('error') }}
            </p>
            </div>
        @endif
@php
$site_dat = App\Models\GeneralSetting::first();
$contactus = App\Models\contact_us::first();
// dd($contactus)
$page = App\Models\CustomPage::find(3);
@endphp



@section('meta')
<meta name="name" content="{{$page->meta_name}}">
<meta name="description" content="{{$page->meta_description}}">
@endsection
@section('title')
<title>@if($page->page_title !=null) {{$page->page_title}} - {{$site_dat->site_title}}  @else RRSTEK | Intelligent Video Analitycs @endif</title>
@endsection

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
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>
    {{ session()->get('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>
    {{ session()->get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="index.html">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                            <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('Contact Us')}}</a></li>
                        </ul>

                        <div id="text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">
                                @if($contactus->main_heading !=null)
                                {{$tr->setSource('en')->setTarget($site_language)->translate($contactus->main_heading)}}
                                @endif
                            </h1>

                            <p class=" viewport-holder slideDown delay-2">
                                @if($contactus->small_description !=null)
                                {{$tr->setSource('en')->setTarget($site_language)->translate($contactus->small_description)}}
                                @endif
                            </p>
                            <div></div>
                            <div class="vl viewport-holder slideDown delay-3"></div>
                            <a href="#contact-form"><img class=" viewport-holder slideDown delay-4"
                                    src="{{ asset('frontend') }}/images/arrow down.png" alt=""></a>
                            <div class="text-scroll">
                                <h2 class="viewport-holder slideDown delay-5">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Fill out the form')}}
                                </h2>
                                <p class=" viewport-holder slideDown delay-5">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Scroll down')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.common.contact_form')

@endsection
