

@php
   $site_dat = App\Models\GeneralSetting::first();
   $owh = App\Models\Cases::find(1);
   $our_works = App\Models\OurWork::all();

   @endphp
<?php
    use Stichoza\GoogleTranslate\GoogleTranslate;
    $tr = new GoogleTranslate();
    $language = session()->get('language');
    if ($language) {
        $site_language = $language;
    } else {
        $site_language = $site_dat->language;
    }
?>

<div class="our-work">
    <div class="container">
        <div class="heading">
            <div class="text viewport-holder slideDown">
                <h2>
                    <span><i>{{ $tr->setSource('en')->setTarget($site_language)->translate('OUR WORK') }}</i></span>

                    {{ $tr->setSource('en')->setTarget($site_language)->translate($owh->ourwork_section_heading) }}
                </h2>
            </div>
            <div class="btn-holder viewport-holder slideDown delay-1">
                <a class="see-all" href="#">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('See All') }}
                </a>
            </div>
        </div>
        <div class="slick-slider-add">
            @if($our_works !=null)
            @foreach ($our_works as $ow)
            <div class="slide viewport-holder slideDown delay-1">
                <div class="img">
                    <img src="{{ asset('frontend') }}/images/common-pages/our-work/{{$ow->image}}" alt="image" />
                </div>
                <div class="txt">
                    <h3>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate($ow->name)}}
                    </h3>
                    <h4>
                        <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg" alt="image description" /></i>

                        {{ $tr->setSource('en')->setTarget($site_language)->translate($ow->location) }}
                    </h4>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
