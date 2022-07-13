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
style="background-image: url('{{ asset('frontend/images/user-custome-pages/' . $page->bg_image) }}')"
>
    <div class="frame">
        <div class="holder">
            <div class="container ">
                <div class="box">
                    <ul  class="breadcrumbs viewport-holder slideDown">
                        <li><a href="{{route('/')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                        <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate($page->page_title)}}</a></li>
                    </ul>
                    <div id="#text-banner-overview" class="text">
                        <h1 class="viewport-holder slideDown delay-1">
                            {{$tr->setSource('en')->setTarget($site_language)->translate($page->header_heading)}}
                        </h1>
                        <p class="viewport-holder slideDown delay-2">
                            {{$tr->setSource('en')->setTarget($site_language)->translate($page->header_description)}}
                        </p>
                        {{-- <ul class="viewport-holder slideDown delay-3">

                            <li><a href="#" class="btn sec">{{$tr->setSource('en')->setTarget($site_language)->translate('Watch Video')}}</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="link-holder col2-tab">
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
</div> --}}
<main id="main">
    @if($page->body != null)
    <div class="post-area">
        <div class="container">
            <div class="post">

                        {!! $tr->setSource('en')->setTarget($site_language)->translate($page->body) !!}
            </div>
        </div>
    </div>
    @endif




    {{-- @include('frontend.common.our_work') --}}


    {{-- @include('frontend.common.demo_booking') --}}

</main>
@endsection
