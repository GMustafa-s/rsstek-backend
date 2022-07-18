@extends('frontend.index')
@section('content')

@php
    $site_dat = App\Models\GeneralSetting::first();
    $data = App\Models\SolutionIndustries::first();
    // dd($data);
    $page = App\Models\CustomPage::find(8);

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
      <div id="promo-solutions" class="promo product" style="background-image: url('{{asset('frontend/images/Solutions/'. $data->bg_image)}}')">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{route('/')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>
                  <li><a href="{{route('/solutions')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Solutions')}}</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    {{$tr->setSource('en')->setTarget($site_language)->translate($data->header_heading)}}
                  </h1>
                  <p class="viewport-holder slideDown delay-2">
                    {{$tr->setSource('en')->setTarget($site_language)->translate($data->header_description)}}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="link-holder">
        <div class="container">
          <ul class="links viewport-holder slideDown">
            @isset($industries_pages)
            @if($industries_pages->count()>0)
            @foreach($industries_pages as $industries_page)
            <li><a href="{{route('industries.slug', $industries_page->slug)}}">
                {{$tr->setSource('en')->setTarget($site_language)->translate($industries_page->page_title)}}</a></li>
            @endforeach
            @endif
            @endisset
          </ul>
        </div>
      </div>
      <main id="main">
        <div class="article-holder">
          <div class="container">
          @isset($industries_pages)
          @if($industries_pages->count()>0)
          <?php $n = 1; ?>
                @foreach($industries_pages as $industries_page)

                @if($n % 2 == 0)
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
              <img style="border-radius: 20px;" src="{{asset('frontend')}}/images/industries/{{$industries_page->bg_image}}"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate($industries_page->page_title)}}</i></span> {{$tr->setSource('en')->setTarget($site_language)->translate($industries_page->page_title)}}
                </h2>
                <p class="viewport-holder slideDown delay-3">
                    {{$tr->setSource('en')->setTarget($site_language)->translate($industries_page->header_description)}}
                </p>
                <a class="viewport-holder slideDown delay-4 more" href="{{route('industries.slug', $industries_page->slug)}}"><span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span></a
                >
              </div>
            </article>
            @else
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img style="border-radius: 20px;"
                  src="{{asset('frontend')}}/images/industries/{{$industries_page->bg_image}}"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate($industries_page->page_title)}}</i></span> {{$tr->setSource('en')->setTarget($site_language)->translate($industries_page->page_title)}}
                </h2>
                <p class="viewport-holder slideDown delay-3">
                    {{$tr->setSource('en')->setTarget($site_language)->translate($industries_page->header_description)}}
                </p>
                <a href="{{route('industries.slug', $industries_page->slug)}}" class="viewport-holder slideDown delay-4 more"
                  ><span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span></a
                >
              </div>
            </article>
            @endif
            <?php $n++; ?>
          @endforeach
          @endif
          @endisset
          </div>
        </div>
      </main>
@endsection
