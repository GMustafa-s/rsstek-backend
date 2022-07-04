@extends('frontend.index')
@section('content')

<?php
$site_dat = App\Models\GeneralSetting::first();

$data = App\Models\Demo::first();
$demo_sections = App\Models\DemoSection::all();

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
    <div id="promo-demo" class="promo product">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('Main')}}
                            </a></li>
                            <li><a href="">Get Demo</a></li>
                        </ul>
                        <div id="#text-banner-overview" class="text">
                            <h1 class="viewport-holder slideDown delay-1">
                                @if($data->main_heading !=null)
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($data->main_heading)}}
                                @endif
                            </h1>
                            <p class="viewport-holder slideDown delay-2">
                                @if($data->main_description !=null)
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($data->main_description)}}
                                @endif
                            </p>
                            <!-- <ul class="viewport-holder slideDown delay-3">
          <li><a href="#" class="btn sec">Watch Video</a></li>
         </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="main">
        <div class="solutions-area demo">
            <div class="container">
                <div class="heading center viewport-holder slideDown delay-1">
                    <h2>
                        <span><i>
                            {{ $tr->setSource('en')->setTarget($site_language)->translate('GET DEMO')}}
                        </i></span>
                        @if($data->demo_section_heading !=null)
                        {{ $tr->setSource('en')->setTarget($site_language)->translate($data->demo_section_heading)}}
                        @endif
                    </h2>
                </div>
                <div class="holder">
                    @if($demo_sections !=null)
                    @foreach ($demo_sections as $ds)
                    <div class="text-box viewport-holder slideDown delay-3">
                        <i class="ico"><img src="{{asset('frontend')}}/images/Solutions/demo-section-icon/{{$ds->image}}" alt="image"></i>
                        <div class="frame">
                            <p>
                                @if($ds->text !=null)
                                {{ $tr->setSource('en')->setTarget($site_language)->translate($ds->text)}}
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <!-- 0 -->
                </div>
            </div>
        </div>
        <div class="article-holder">
            <div class="container">
                <!--Article one image on left and text on the right-->
                <article id="image-left-aligned" class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Solutions/regular-security-needs-section/{{$data->security_section_image}}"  alt="image" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>
                                {{ $tr->setSource('en')->setTarget($site_language)->translate('REGULAR SECURITY NEEDS')}}
                            </i></span>
                            @if($data->security_section_heading !=null)
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($data->security_section_heading)}}
                            @endif
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            @if($data->security_section_description !=null)
                            {{ $tr->setSource('en')->setTarget($site_language)->translate($data->security_section_description)}}
                            @endif
                        </p>
                        <a href="{{route('/cases')}}" class="viewport-holder slideDown delay-4 more"><span>see
                                cases</span></a>
                    </div>
                </article>
            </div>
        </div>
        @include('frontend.common.contact_form')

    </main>
@endsection
