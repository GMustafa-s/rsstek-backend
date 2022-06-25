@extends('frontend.index')
@section('content')
      <div id="promo-solutions" class="promo product">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{route('/')}}">Main</a></li>
                  <li><a href="{{route('/solutions')}}">Solutions</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    A solution for every business
                  </h1>
                  <p class="viewport-holder slideDown delay-2">
                    Each business is different, and our company creates unique
                    solutions for each of them. Our many years of experience
                    allows us to take every detail into consideration and take
                    an individual approach to effectively solve the problems of
                    our clients.
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
            <li><a href="{{route('category.slug',$solution->slug)}}">{{ $solution->name }}</a></li>
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
                <span><i>{{$solution->name}}</i></span> {{$solution->name}}
                </h2>
                <p class="viewport-holder slideDown delay-3">
                {{$solution->description}}
                </p>
                <a class="viewport-holder slideDown delay-4 more" href="/Industries/transport-and-storage.html"
                  ><span>Read More</span></a
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
                  <span><i>{{$solution->name}}</i></span> {{$solution->name}}
                </h2>
                <p class="viewport-holder slideDown delay-3">
                {{$solution->description}}
                </p>
                <a href="{{route('category.slug',$solution->slug)}}" class="viewport-holder slideDown delay-4 more"
                  ><span>Read More</span></a
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
