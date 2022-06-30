@extends('frontend.index')
@section('content')

@php
$site_dat = App\Models\GeneralSetting::first();

@endphp
@section('meta')
<meta name="name" content="{{$page->meta_name}}">
<meta name="description" content="{{$page->meta_description}}">
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

<div id="promo-business" class="promo product"
style="background-image: url('{{ asset('frontend/images/' . $page->name.'/'.$page->bg_image) }}')"
>
    <div class="frame">
        <div class="holder">
            <div class="container ">
                <div class="box">
                    <ul  class="breadcrumbs viewport-holder slideDown">
                        <li><a href="{{route('/')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                        <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate($page->name)}}</a></li>
                    </ul>
                    <div id="#text-banner-overview" class="text">
                        <h1 class="viewport-holder slideDown delay-1">
                            {{$tr->setSource('en')->setTarget($site_language)->translate($page->name)}}
                        </h1>
                        <p class="viewport-holder slideDown delay-2">
                            {{$tr->setSource('en')->setTarget($site_language)->translate($page->description)}}
                        </p>
                        <ul class="viewport-holder slideDown delay-3">

                            <li><a href="#" class="btn sec">{{$tr->setSource('en')->setTarget($site_language)->translate('Watch Video')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="link-holder col2-tab">
    <div class="container">
        <ul class="links viewport-holder slideDown">
            @if($sub_pages->count()>0)
                @foreach($sub_pages as $sub_page)
                    <li><a href="{{route('category.sub.slug',['solution'=>$page->slug,'name'=>$sub_page->slug])}}">
                    {{$tr->setSource('en')->setTarget($site_language)->translate($sub_page->title)}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
<main id="main">
    <div class="article-holder">
        <div class="container">

            @if($sub_pages->count()>0)
                @foreach($sub_pages as $sub_page)
                <?php $n = 1; ?>
                @if($n % 2 == 0)
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Business/active-pos-Image.png" alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}</i></span>
                            {{$tr->setSource('en')->setTarget($site_language)->translate($sub_page->title)}}
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                            {{$tr->setSource('en')->setTarget($site_language)->translate($sub_page->description)}}
                        </p>
                        <a href="active-post.html" class="viewport-holder slideDown delay-4 more">
                            <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                        </a>
                    </div>
                </article>
                @else
            <article class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{asset('frontend/images')}}/{{$page->name}}/{{$sub_page->title}}/{{$sub_page->fetaured_image}}"
                        alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}</i></span>
                        {{$tr->setSource('en')->setTarget($site_language)->translate($sub_page->title)}}
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                        {{$tr->setSource('en')->setTarget($site_language)->translate($sub_page->description)}}
                    </p>
                    <a class="viewport-holder slideDown delay-4 more" href="workspace-detector.html">
                        <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                    </a>
                </div>
            </article>
            @endif
            <?php $n++; ?>
            @endforeach
            @endif

        </div>
    </div>
    @include('frontend.common.our_work')


    @include('frontend.common.demo_booking')

</main>
@endsection
