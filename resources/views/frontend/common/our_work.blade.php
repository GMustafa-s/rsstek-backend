@php
    $site_dat = App\Models\GeneralSetting::first();
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

                    {{ $tr->setSource('en')->setTarget($site_language)->translate('See Our Product in Action') }}
                </h2>
            </div>
            <div class="btn-holder viewport-holder slideDown delay-1">
                <a class="see-all" href="#">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('See All') }}
                </a>
            </div>
        </div>
        <div class="slick-slider-add">
            <div class="slide viewport-holder slideDown delay-1">
                <div class="img">
                    <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                </div>
                <div class="txt">
                    <h3>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty International Airport') }}
                    </h3>
                    <h4>
                        <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg" alt="image description" /></i>

                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty Airport Turkey') }}
                    </h4>
                </div>
            </div>
            <div class="slide viewport-holder slideDown delay-2">
                <div class="img">
                    <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                </div>
                <div class="txt">
                    <h3>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty International Airport') }}
                    </h3>
                    <h4>
                        <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg" alt="image description" /></i>

                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty Airport Turkey') }}

                    </h4>
                </div>
            </div>
            <div class="slide viewport-holder slideDown delay-3">
                <div class="img">
                    <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                </div>
                <div class="txt">
                     <h3>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty International Airport') }}
                    </h3>
                    <h4>
                        <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg" alt="image description" /></i>

                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty Airport Turkey') }}

                    </h4>
                </div>
            </div>
            <div class="slide viewport-holder slideDown delay-1">
                <div class="img">
                    <img src="{{ asset('frontend') }}/images/img-12.jpg"
                        alt="image description" />
                </div>
                <div class="txt">
                    <h3>
                       {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty International Airport') }}
                   </h3>
                   <h4>
                       <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg" alt="image description" /></i>

                       {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty Airport Turkey') }}

                   </h4>
               </div>
            </div>
            <div class="slide viewport-holder slideDown delay-2">
                <div class="img">
                    <img src="{{ asset('frontend') }}/images/img-12.jpg"
                        alt="image description" />
                </div>
                <div class="txt">
                    <h3>
                       {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty International Airport') }}
                   </h3>
                   <h4>
                       <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg" alt="image description" /></i>

                       {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty Airport Turkey') }}

                   </h4>
               </div>
            </div>
            <div class="slide viewport-holder slideDown delay-3">
                <div class="img">
                    <img src="{{ asset('frontend') }}/images/img-12.jpg" alt="image description" />
                </div>
                <div class="txt">
                    <h3>
                       {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty International Airport') }}
                   </h3>
                   <h4>
                       <i class="ico"><img src="{{ asset('frontend') }}/images/ico-location-solid.svg" alt="image description" /></i>

                       {{ $tr->setSource('en')->setTarget($site_language)->translate('Almaty Airport Turkey') }}

                   </h4>
               </div>
            </div>
        </div>
    </div>
</div>
