@extends('frontend.index')
@section('content')
    @php
    $site_dat = App\Models\GeneralSetting::first();
    $data = App\Models\Cases::first();
    $our_works = App\Models\OurWork::all();
    $casesPage = App\Models\CustomPage::find(5);
    

    @endphp
    <?php
    use Stichoza\GoogleTranslate\GoogleTranslate;
    $tr = new GoogleTranslate();
    $language = session()->get('language');
    if ($language) {
        $site_language = $language;
    } else {
        $site_language = $site_dat->language;
    }
    ?>
@section('meta')
<meta name="name" content="{{$casesPage->meta_name}}">
<meta name="description" content="{{$casesPage->meta_description}}">
@endsection
<?php dd($casesPage->meta_description)?>

@section('title')
<title>@if($casesPage->page_title !=null) {{$casesPage->page_title}}   @else RRSTEK | Intelligent Video Analitycs @endif</title>
@endsection
    <div id="promo-cases" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('work.safety') }}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Main') }}
                                </a></li>
                            <li><a href="{{ route('/cases') }}">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Cases') }}
                                </a></li>
                        </ul>
                        <div id="text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">
                                @if ($data->cases_heading != null)
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate($data->cases_heading) }}
                                @endif
                            </h1>
                            <p class="viewport-holder slideDown delay-2">
                                @if ($data->cases_description != null)
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate($data->cases_description) }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-area slider-disabled case">
        <div class="container">
            <h2 class="viewport-holder slideDown"><span>
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Our Work') }}
                </span> <br>
                @if ($data->ourwork_section_heading != null)
                    {{ $tr->setSource('en')->setTarget($site_language)->translate($data->ourwork_section_heading) }}
                @endif
            </h2>
            <div class="carousel case">
                <div class="mask">
                    @if($our_works !=null)
                    @foreach($our_works as $ow)
                        <div class="slide viewport-holder slideDown delay-1">
                            <div class="img">
                                <img src="{{asset('frontend')}}/images/common-pages/our-work/{{$ow->image}}" alt="image" />
                            </div>
                            <div class="txt">
                                <h3>
                                    @if ($ow->name != null)
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate($ow->name) }}
                                    @endif
                                </h3>
                                <h4>
                                    <i class="ico"><img src="{{asset('frontend/images/ico-location-solid.svg')}}" alt="image" /></i>
                                    @if ($ow->location != null)
                                        {{ $tr->setSource('en')->setTarget($site_language)->translate($ow->location) }}
                                    @endif
                                </h4>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
                {{-- <div class="pagination"></div> --}}
            </div>
        </div>
    </div>
@endsection
