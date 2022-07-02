@extends('frontend.index')
@section('content')

@php
$site_dat = App\Models\GeneralSetting::first();
$aboutus_heading = DB::table('aboutus_page_heading')->first();
$top_info_section = DB::table('aboutus_top_info_section')->first();
$aboutus_section = DB::table('aboutus_section')->first();
$ourwork_section = DB::table('aboutus_our_work_section')->first();
$chief_officer = DB::table('aboutus_cheif_officer')->first();
$our_product = DB::table('aboutus_about_our_product_section')->where('id', '1')->first();
$product_info_section = DB::table('aboutus_our_product_info_section')->where('id', '1')->first();
$our_customer = DB::table('aboutus_our_customer')->first();
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

<div id="promo-about-rrstek" class="promo product">
    <div class="frame">
      <div class="holder">
        <div class="container">
          <div class="box">
            <ul class="breadcrumbs viewport-holder slideDown">
              <li><a href="index.html">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>
              <li><a href="#">{{$tr->setSource('en')->setTarget($site_language)->translate('About RRSTEK')}}</a></li>
            </ul>
            <div id="#text-banner-overview" class="text">
              <h1 class="viewport-holder slideDown delay-1">
                @if($aboutus_heading->aboutus_heading !=null)

                {{$tr->setSource('en')->setTarget($site_language)->translate($aboutus_heading->aboutus_heading)}}</h1>
                @endif
                <!-- <p class="viewport-holder slideDown delay-2">
                Confidence and security without constant control on your
                part, the stability of all processes in the company - that
                is what RRSTEK intelligent systems are all about.
              </p> -->
              <ul class="viewport-holder slideDown delay-3">
                <li><a href="#" class="btn sec">{{$tr->setSource('en')->setTarget($site_language)->translate('Watch Video')}}</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<main id="main">
    <div class="achievements viewport-holder slideDown delay-1">
        <div class="container">
            <div class="holder">
                <div class="txt viewport-holder slideDown delay-3">
                    <h2>
                        @if($top_info_section->value_1 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($top_info_section->value_1)}}
                        @endif
                        <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/top-info-section-icon/{{$top_info_section->icon_1}}" alt="img"></i>
                    </h2>
                    <p>
                        @if($top_info_section->text_1 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($top_info_section->text_1)}}
                        @endif
                    </p>
                </div>
                <div class="txt viewport-holder slideDown delay-5">
                    <h2>
                        @if($top_info_section->value_2 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($top_info_section->value_2)}}
                        @endif
                        <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/top-info-section-icon/{{$top_info_section->icon_2}}" alt="img"></i>
                    </h2>
                    <p>
                        @if ($top_info_section->text_2 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($top_info_section->text_2)}}
                        @endif
                    </p>
                </div>
                <div class="txt viewport-holder slideDown delay-7">
                    <h2>
                        @if($top_info_section->value_3 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($top_info_section->value_3)}}
                        @endif
                        <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/top-info-section-icon/{{$top_info_section->icon_3}}" alt="img"></i>
                    </h2>
                    <p>
                        @if($top_info_section->text_3 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($top_info_section->text_3)}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="article-holder">
        <div class="container">
          <!--Article two image on right and text on the left-->
          <article id="image-left-aligned"  class="article">
            <div  class="img-box viewport-holder slideDown delay-1">
              <img
                src="{{asset('frontend')}}/images/About-rrstek/aboutus-section/{{$aboutus_section->our_image}}"
                alt="about us"
              />
            </div>
            <div class="text-box">
              <h2 class="viewport-holder slideDown delay-2">
                <span><i>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('About Us')}}
                    </i>
                </span>
                @if($aboutus_section->our_heading !=null)
                {{$tr->setSource('en')->setTarget($site_language)->translate($aboutus_section->our_heading)}}
                @endif

              </h2>
              <p class="viewport-holder slideDown delay-3">
                @if($aboutus_section->our_description !=null)
                {{$tr->setSource('en')->setTarget($site_language)
                ->translate($aboutus_section->our_description)}}
                @endif
              </p>
              <!-- <a href="active-post.html" class="viewport-holder slideDown delay-4 more"
                ><span>Read More</span></a
              > -->
            </div>
          </article>
        </div>
      </div>
    <div class="solutions-area">
        <div class="container">
            <div class="heading center viewport-holder slideDown delay-1">
                <h2>
                    <span><i>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('OUR WORK')}}
                    </i></span>
                    @if($ourwork_section->our_work_heading !=null)
                    {{$tr->setSource('en')->setTarget($site_language)
                    ->translate($ourwork_section->our_work_heading)}}
                    @endif
                </h2>
            </div>
            <div id="linebreak2" class="holder">
                <div class="txt-box viewport-holder slideDown delay-3">
                    <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_1_icon}}" alt="image"></i>
                    <div class="frame">
                        <p>
                            @if($ourwork_section->sub_heading_1 !=null)
                            {{$tr->setSource('en')->setTarget($site_language)->translate($ourwork_section->sub_heading_1)}}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-4">
                    <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_2_icon}}" alt="image"></i>
                    <div class="frame">
                        <p>
                            @if($ourwork_section->sub_heading_2 !=null)
                            {{$tr->setSource('en')->setTarget($site_language)->translate($ourwork_section->sub_heading_2)}}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-5">
                    <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_3_icon}}" alt="image"></i>
                    <div class="frame">
                        <p>
                            @if($ourwork_section->sub_heading_3 !=null)
                            {{$tr->setSource('en')->setTarget($site_language)->translate($ourwork_section->sub_heading_3)}}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="txt-box viewport-holder slideDown delay-6">
                    <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/ourwork-section/{{$ourwork_section->sub_heading_4_icon}}" alt="image"></i>
                    <div class="frame">
                        <p>

                            @if($ourwork_section->sub_heading_4 !=null)
                            {{$tr->setSource('en')->setTarget($site_language)->translate($ourwork_section->sub_heading_4)}}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article-holder">
        <div class="container">
          <!--Article two image on right and text on the left-->
          <article  class="article">
            <div  class="img-box viewport-holder slideDown delay-1">
                <img src="{{asset('frontend')}}/images/About-rrstek/chief-officer/{{$chief_officer->image}}" alt="{{$chief_officer->name}}" width="auto" height="100" />
            </div>
            <div class="text-box">
              <h2 class="viewport-holder slideDown delay-2">
                <span><i>
                    {{$tr->setSource('en')->setTarget($site_language)->translate('Chief Executive Officer')}}
                </i></span>
                @if($chief_officer->name !=null)
                {{$tr->setSource('en')->setTarget($site_language)->translate($chief_officer->name)}}
                @endif
              </h2>
              <p class="viewport-holder slideDown delay-3">
                @if($chief_officer->about !=null)
                {{$tr->setSource('en')->setTarget($site_language)
                ->translate($chief_officer->about)}}
                @endif

              </p>
              <!-- <a href="active-post.html" class="viewport-holder slideDown delay-4 more"
                ><span>Read More</span></a
              > -->
            </div>
          </article>
        </div>
      </div>
    <div class="advantages-area">
        <div class="container">
            <div class="heading center viewport-holder slideDown delay-1">
                <h2><span><i>
                {{$tr->setSource('en')->setTarget($site_language)->translate('ABOUT OUR PRODUCT')}}
                </i></span>
                @if($our_product->heading !=null)
                {{$tr->setSource('en')->setTarget($site_language)->translate($our_product->heading)}}
                @endif
                </h2>
            </div>
            <div class="holder">
                <div class="box viewport-holder slideDown delay-2">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_1}}" alt="image"></i>
                    </div>
                    <p>
                        @if($our_product->text_1 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($our_product->text_1)}}
                        @endif
                    </p>
                </div>
                <div class="box viewport-holder slideDown delay-3">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_2}}" alt="image"></i>
                    </div>
                    <p>
                        @if($our_product->text_2 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($our_product->text_2)}}
                        @endif
                    </p>
                </div>
                <div class="box viewport-holder slideDown delay-4">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_3}}" alt="image"></i>
                    </div>
                    <p>
                        @if($our_product->text_3 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($our_product->text_3)}}
                        @endif
                    </p>
                </div>
                <div class="box viewport-holder slideDown delay-5">
                    <div class="ico">
                        <i><img src="{{asset('frontend')}}/images/About-rrstek/our-product/{{$our_product->icon_4}}" alt="image"></i>
                    </div>
                    <p>
                        @if($our_product->text_4 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($our_product->text_4)}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="overview-section viewport-holder slideDown delay-1">
        <div class="container">
            <div id="linebreak" class="holder">
                <div  class="text-box viewport-holder slideDown delay-2">
                    <h3>
                        @if($product_info_section->value_1 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->value_1)}}
                        @endif
                        <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_1}}" alt="image"></i>
                    </h3>

                    <p id="p1">
                        @if($product_info_section->text_1 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->text_1)}}
                        @endif

                    </p>
                </div>
                <div class="text-box viewport-holder slideDown delay-3">
                    <h3>
                        @if($product_info_section->value_2 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->value_2)}}
                        @endif
                        <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_2}}" alt="image"></i>
                    </h3>
                    <p>
                        @if($product_info_section->text_2 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->text_2)}}
                        @endif
                    </p>
                </div>
                <div class="text-box viewport-holder slideDown delay-4">
                    <h3>
                        @if($product_info_section->value_3 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->value_3)}}
                        @endif

                        <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_3}}" alt="image"></i></h3>
                    <p>
                        @if($product_info_section->text_3 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->text_3)}}
                        @endif
                    </p>
                </div>
                <div class="text-box viewport-holder slideDown delay-5">
                    <h3>
                        @if($product_info_section->value_4 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->value_4)}}
                        @endif
                        <i class="ico"><img src="{{asset('frontend')}}/images/About-rrstek/product-info-section/{{$product_info_section->icon_4}}" alt="image"></i></h3>
                    <p>
                        @if($product_info_section->text_4 !=null)
                        {{$tr->setSource('en')->setTarget($site_language)->translate($product_info_section->text_4)}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="map-area">
        <div class="container">
            <div class="heading center viewport-holder slideDown delay-1">
                <h2>
                    <span><i>
                        {{$tr->setSource('en')->setTarget($site_language)->translate('OUR Customer')}}
                    </i></span>
                    @if($our_customer->heading !=null)
                    {{$tr->setSource('en')->setTarget($site_language)->translate($our_customer->heading)}}
                    @endif
                </h2>
            </div>
        </div>
        <div class="img-box viewport-holder slideDown delay-2">
            <img src="{{asset('frontend')}}/images/About-rrstek/our-customer/{{$our_customer->image}}" alt="img">
        </div>
    </div>
    @include('frontend.common.demo_booking')
</main>

@endsection
