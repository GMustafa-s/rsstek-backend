@php
    $site_dat = App\Models\GeneralSetting::first();
    $industries_pages = App\Models\IndustriesPage::get();

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
                    @if($industries_pages != null)
                    @foreach ($industries_pages as $ip)
                    <div class="slide viewport-holder slideDown">
                        <div class="frame">
                            <img src="{{asset('frontend')}}/images/industries/{{$ip->bg_image}}" alt="image description">
                            <div class="txt-box">
                                <a href="{{route('industries.slug', $ip->slug)}}" class="more">
                                    {{ $tr->setSource('en')->setTarget($site_language)->translate($ip->page_title) }}
                                </a>
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
