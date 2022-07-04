@extends('frontend.index')
@section('content')
@php
$site_dat = App\Models\GeneralSetting::first();
$data = App\Models\Cases::first();
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
    <div id="promo-cases" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('work.safety') }}">
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}
                            </a></li>
                            <li><a href="{{ route('/cases') }}">
                                {{$tr->setSource('en')->setTarget($site_language)->translate('Cases')}}
                            </a></li>
                        </ul>
                        <div id="text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">
                                @if($data->cases_heading !=null)
                                {{$tr->setSource('en')->setTarget($site_language)->translate($data->cases_heading)}}
                                @endif
                            </h1>
                            <p class="viewport-holder slideDown delay-2">
                                @if($data->cases_description !=null)
                                {{$tr->setSource('en')->setTarget($site_language)->translate($data->cases_description)}}
                                @endif
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
