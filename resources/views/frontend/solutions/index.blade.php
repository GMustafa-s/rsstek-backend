@extends('frontend.index')
@section('content')
@php
    $site_dat = App\Models\GeneralSetting::first();
    $data = App\Models\SolutionIndustries::first();
    $page = App\Models\CustomPage::find(8);

    // dd($data);
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
@section('meta')
<meta name="name" content="{{$page->meta_name}}">
<meta name="description" content="{{$page->meta_description}}">
@endsection
@section('title')
<title>@if($page->page_title !=null) {{$page->page_title}} - {{$site_dat->site_title}}  @else RRSTEK | Intelligent Video Analitycs @endif</title>
@endsection
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
            @isset($solutions)
            @if($solutions->count()>0)
            @foreach($solutions as $solution)
            <li><a href="{{route('category.slug',$solution->slug)}}">
                {{$tr->setSource('en')->setTarget($site_language)->translate($solution->name)}}</a></li>
            @endforeach
            @endif
            @endisset
          </ul>
        </div>
      </div>
      <main id="main">
        <div class="article-holder">
          <div class="container">
          @isset($solutions)
          @if($solutions->count()>0)
          <?php $n = 1; ?>
                @foreach($solutions as $solution)

                @if($n % 2 == 0)
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
              <img
                  src="{{asset('frontend')}}/images/{{$solution->name}}/{{$solution->bg_image}}"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                <span><i>
                {{$tr->setSource('en')->setTarget($site_language)->translate($solution->name)}}</i></span>

                {{$tr->setSource('en')->setTarget($site_language)->translate($solution->name)}}
                </h2>
                <p class="viewport-holder slideDown delay-3">
                {{$tr->setSource('en')->setTarget($site_language)->translate($solution->description)}}
                </p>
                <a class="viewport-holder slideDown delay-4 more" href="{{route('category.slug',$solution->slug)}}"
                  ><span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span></a
                >
              </div>
            </article>
            @else
            <article class="article">
              <div class="img-box viewport-holder slideDown delay-1">
                <img
                  src="{{asset('frontend')}}/images/{{$solution->name}}/{{$solution->bg_image}}"
                  alt="image description"
                />
              </div>
              <div class="text-box">
                <h2 class="viewport-holder slideDown delay-2">
                  <span><i>
                    {{$tr->setSource('en')->setTarget($site_language)->translate($solution->name)}}
                   </i></span>
                    {{$tr->setSource('en')->setTarget($site_language)->translate($solution->name)}}

                </h2>
                <p class="viewport-holder slideDown delay-3">
                    {{$tr->setSource('en')->setTarget($site_language)->translate($solution->description)}}

                </p>
                <a href="{{route('category.slug',$solution->slug)}}" class="viewport-holder slideDown delay-4 more"
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
