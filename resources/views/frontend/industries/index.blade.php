@extends('frontend.index')
@section('content')

@php
$site_dat = App\Models\GeneralSetting::first();
$pc = App\Models\PageCategory::all();

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
style="background-image: url('{{ asset('frontend/images/industries/' . $page->bg_image) }}')"
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
                        <p style="width: 1000px" class="viewport-holder slideDown delay-2">
                            {!! $tr->setSource('en')->setTarget($site_language)->translate($page->header_description) !!}
                        </p>
                        <ul class="viewport-holder slideDown delay-3">

                            <li><a href="#" class="btn sec">{{$tr->setSource('en')->setTarget($site_language)->translate('Get Solution')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

{{-- second try --}}
<div class="link-holder col2-tab">
    <div class="container">
        <ul class="links viewport-holder slideDown">
            @if($security_sections->count()>0)
                @foreach($security_sections as $security_section)
                    <li><a onclick="myfunc({{$security_section->heading}})" href="">{{$tr->setSource('en')->setTarget($site_language)->translate($security_section->heading)}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
<main id="main">
    <div class="article-holder">
        <div class="container">

            @if($security_sections->count()>0)

                @foreach($security_sections as $security_section)
                <?php $n = 1; ?>
                @if($n % 2 == 0)
                <article class="article">
                    <div class="img-box viewport-holder slideDown delay-1">
                        <img src="{{ asset('frontend') }}/images/Business/active-pos-Image.png" alt="image description" />
                    </div>
                    <div class="text-box">
                        <h2 class="viewport-holder slideDown delay-2">
                            <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('OUR PRODUCT')}}</i></span>
                            {{$tr->setSource('en')->setTarget($site_language)->translate($security_section->heading)}}
                        </h2>
                        <p class="viewport-holder slideDown delay-3">
                        {{ $tr->setSource('en')->setTarget($site_language)->translate( Illuminate\Support\Str::of(strip_tags($security_section->description))->words(55)) }}
                        </p>
                        <a href="active-post.html" class="viewport-holder slideDown delay-4 more">
                            <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                        </a>
                    </div>
                </article>
                @else
            <article id="scroll_article" class="article">
                <div class="img-box viewport-holder slideDown delay-1">
                    <img src="{{asset('frontend')}}/images/industries/security-section/{{$security_section->image}}"
                        alt="image description" />
                </div>
                <div class="text-box">
                    <h2 class="viewport-holder slideDown delay-2">
                        <span><i>{{$tr->setSource('en')->setTarget($site_language)->translate('REGULAR SECURITY NEEDS')}}</i></span>
                        {{$tr->setSource('en')->setTarget($site_language)->translate($security_section->heading)}}
                    </h2>
                    <p class="viewport-holder slideDown delay-3">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate( Illuminate\Support\Str::of(strip_tags($security_section->description))->words(55)) }}
                    </p>
{{--
                    <a class="viewport-holder slideDown delay-4 more" href="{{route('category.sub.slug',['solution'=>$page->slug,'name'=>$sub_page->slug])}}">
                        <span>{{$tr->setSource('en')->setTarget($site_language)->translate('Read More')}}</span>
                    </a> --}}
                </div>
            </article>
            @endif
            <?php $n++; ?>
            @endforeach
            @endif

        </div>
    </div>
    <div class="solution-area">
        <div class="container">
          <h2 class="viewport-holder slideDown">
            <span>OUR PRODUCT</span> <br />
            Effective RRSTEK solutions
          </h2>
          <div class="btn-holder">
            <a href="#" class="show-all"
              ><span class="active">See All</span>
              <span class="show-less">Show Less</span></a
            >
        </div>
          <div class="carousel">
            <div class="mask">
              <div class="slideset">

                @if($sub_pages->count()>0)
                    @foreach($sub_pages as $sp)
                <div class="slide viewport-holder slideDown">
                  <div class="frame">
                    <video width="340" height="150" loop="true" autoplay="autoplay" muted="" id="fitvid330684" __idm_id__="147457">
                        <!-- <source src="../images/videos/ActivePOS.mp4" type="video/mp4"> -->
                        <source  src="https://drive.google.com/uc?id={{$sp->video}}" type="video/mp4">
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Your browser does not support the video tag.')}}
                    </video>

                    <div class="txt-box">
                      <a href="../health-care/thermal-camera.html" class="more">{{$sp->title}}</a>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif

              </div>
            </div>
            <div class="pagination"></div>
          </div>
        </div>
      </div>



    @include('frontend.common.demo_booking')

</main>

<script type="text/javascript">
    function myfunc($id){
        console.log($id);
    }
</script>
@endsection
