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

<div class="solution-area">
    <div class="container">
        <h2 class="viewport-holder slideDown">
            <span>{{ $tr->setSource('en')->setTarget($site_language)->translate('SOLUTIONS BY') }}</span>
            <br>
            {{ $tr->setSource('en')->setTarget($site_language)->translate('Industries') }}
        </h2>
        <div class="btn-holder">
            <a href="#" class="show-all">
                <span class="active">{{ $tr->setSource('en')->setTarget($site_language)->translate('See All') }}</span>

                <span class="active">{{ $tr->setSource('en')->setTarget($site_language)->translate('See Less') }}</span>
            </a>
        </div>
        <div class="carousel">
            <div class="mask">
                <div class="slideset">
                    <div class="slide viewport-holder slideDown">
                        <div class="frame">
                            <img src="{{asset('frontend')}}/images/img-06.jpg" alt="image description">
                            <div class="txt-box">
                                <a href="../Industries/retail.html" class="more">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Retail') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide viewport-holder slideDown delay-1">
                        <div class="frame">
                            <img src="{{asset('frontend')}}/images/img-07.jpg" alt="image description">
                            <div class="txt-box">
                                <a href="../Industries/industrial.html" class="more">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Industrial') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide viewport-holder slideDown delay-2">
                        <div class="frame">
                            <img src="{{asset('frontend')}}/images/img-08.jpg" alt="image description">
                            <div class="txt-box">
                                <a href="../Industries/public-safety.html" class="more">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Public Safety') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide viewport-holder slideDown">
                        <div class="frame">
                            <img src="{{asset('frontend')}}/images/img-09.jpg" alt="image description">
                            <div class="txt-box">
                                <a href="../Industries/health-care.html" class="more">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Health Care') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide viewport-holder slideDown delay-1">
                        <div class="frame">
                            <img src="{{asset('frontend')}}/images/img-10.jpg" alt="image description">
                            <div class="txt-box">
                                <a href="../Industries/real-estate.html" class="more">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Real Estate') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slide viewport-holder slideDown delay-2">
                        <div class="frame">
                            <img src="{{asset('frontend')}}/images/img-11.jpg" alt="image description">
                            <div class="txt-box">
                                <a href="../Industries/transport-and-storage.html" class="more">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Transport/Storage') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination"></div>
        </div>
    </div>
</div>
