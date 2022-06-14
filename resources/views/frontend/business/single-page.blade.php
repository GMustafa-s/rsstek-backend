@extends('frontend.index')
@section('content')


<div class="promo">
			<div style="margin-top: 36px" class="frame">
				<div class="holder">
					<div  class="container">
						<div class="box">
							<ul class="breadcrumbs viewport-holder slideDown">
								<li><a href="{{route('/')}}">Main</a></li>
								<li><a href="{{route('category.slug',$main_page->slug)}}">{{$main_page->name}}</a></li>
								<li><a href="{{route('category.sub.slug',['solution'=>$main_page->slug,'name'=>$page->slug])}}">{{$page->title}}</a></li>
							</ul>
							<div class="text">
								<h1 class="viewport-holder slideDown delay-1">{{$page->title}}</h1>
								<ul class="viewport-holder slideDown delay-2">
									<li><a href="{{route('/demo')}}" class="btn"><span>Book a Demo</span></a></li>
									<li><a href="{{route('/contactus')}}" class="btn add">How to Buy</a></li>
								</ul>
							</div>
						</div>
						<div class="align-right">
							<div class="video-holder  viewport-holder slideDown delay-2">
								<video width="100%" height="320" loop="true" autoplay="autoplay" muted>
									<source src="{{asset('frontend')}}/images/{{$main_page->name}}/{{$page->title}}/{{$page->video}}" type="video/mp4">
									Your browser does not support the video tag.
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
							<h1 class="viewport-holder slideDown"><span>OVERVIEW</span><br>{{$page->title}}</h1>
							<div class="text viewport-holder slideDown delay-1">
								<p class="viewport-holder slideDown delay-2">
                                    {!! $page->description !!}
                                </p>
							</div>
						</div>
						@if($sections !=null)
						@foreach($sections as $section)
						<div>
							<h2 class="viewport-holder slideDown delay-4">{{$section->title}}</h2>
							<div class="text viewport-holder slideDown delay-5">
								{!! $section->body !!}
							</div>
						</div>
						@endforeach
						@endif
					</div>
					<div class="product-box">
    <div class="frame viewport-holder slideDown delay-1">
        <h2 class="viewport-holder slideDown delay-2">Other Products</h2>
        <ul class="accordion" data-accordion="close">
            @if($other_pages->count()>0)
                @foreach($other_pages as $other)
                    <li class="viewport-holder slideDown delay-3">
				
                        <a    href="{{route('category.sub.slug',['solution'=>$main_page->slug,'name'=>$other->slug])}}">{{$other->title}}</a>
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
