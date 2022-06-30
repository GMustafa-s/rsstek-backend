@extends('frontend.index')
@section('content')

@php
$site_dat = App\Models\GeneralSetting::first();
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
<div class="promo">
			<div style="margin-top: 36px" class="frame">
				<div class="holder">
					<div  class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">

                                <li><a href="{{route('/')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

								<li><a href="{{route('category.slug',$main_page->slug)}}">
                                {{$tr->setSource('en')->setTarget($site_language)->translate($main_page->name)}}</a></li>

								<li><a href="{{route('category.sub.slug',['solution'=>$main_page->slug,'name'=>$page->slug])}}">{{$tr->setSource('en')->setTarget($site_language)->translate($page->title)}}</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">{{$tr->setSource('en')->setTarget($site_language)->translate($page->title)}}</h1>

								<ul class="viewport-holder slideDown delay-2">
									<li><a href="{{route('demo')}}" class="btn"><span>
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('Book a Demo')}}</span></a></li>

                                    <li><a href="{{route('/contactus')}}" class="btn add">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('How to Buy')}}</a></li>
								</ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
							<video loop="true" autoplay="autoplay" muted="" id="fitvid330684" __idm_id__="147457">
									<!-- <source src="../images/videos/ActivePOS.mp4" type="video/mp4"> -->
									<source src="https://drive.google.com/uc?id={{$page->video}}" type="video/mp4">
                                        {{$tr->setSource('en')->setTarget($site_language)->translate('Your browser does not support the video tag.')}}
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
<main id="main">
			<div class="post-area">
				<div class="container">
					<div class="post">
						<div>
							<h1 class="viewport-holder slideDown">
                                <span>
                                    {{$tr->setSource('en')->setTarget($site_language)->translate('OVERVIEW')}}</span>
                                    <br>
                                    {{$tr->setSource('en')->setTarget($site_language)->translate($page->title)}}
                                </h1>
							<div class="text viewport-holder slideDown delay-1">
								<p class="viewport-holder slideDown delay-2">
                                    {{$tr->setSource('en')->setTarget($site_language)->translate($page->description)}}
                                </p>
							</div>
						</div>
						@if($sections !=null)
						@foreach($sections as $section)
						<div>
							<h2 class="viewport-holder slideDown delay-4">
                                {{$tr->setSource('en')->setTarget($site_language)->translate($section->title)}}
                            </h2>
							<div class="text viewport-holder slideDown delay-5">
                                {{$tr->setSource('en')->setTarget($site_language)->translate($section->body)}}
							</div>
						</div>
						@endforeach
						@endif
					</div>
					<div class="product-box">
    <div class="frame viewport-holder slideDown delay-1">
        <h2 class="viewport-holder slideDown delay-2">
            {{$tr->setSource('en')->setTarget($site_language)->translate('Other Products')}}
        </h2>
        <ul class="accordion" data-accordion="close">
            @if($other_pages->count()>0)
                @foreach($other_pages as $other)
                    <li class="viewport-holder slideDown delay-3">
                        <a href="{{route('category.sub.slug',['solution'=>$main_page->slug,'name'=>$other->slug])}}">

                        {{$tr->setSource('en')->setTarget($site_language)->translate($other->title)}}</a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>

				</div>
			</div>
			@include('frontend.common.solutions_area')
            @include('frontend.common.contact_form')

</main>


@endsection
