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
<div class="booking-area">
    <div class="container">
        <div class="holder">
            <div class="text-box">
                <h2 class="viewport-holder slideDown"><span>
                   {{ $tr->setSource('en')->setTarget($site_language)->translate('GET DEMO')}}
                </span>
                   {{ $tr->setSource('en')->setTarget($site_language)->translate(' Try RRSTEK in Your Business')}}
            </h2>
                <p class="viewport-holder slideDown delay-1">
                   {{ $tr->setSource('en')->setTarget($site_language)->translate('Learn more about how RRSTEK analytic modules work! Demo mode is an opportunity to see for yourself how the system operates, and also check the interface and test all the functions')}}
                </p>
            </div>
            <div class="form-area">
                <div class="frame viewport-holder slideDown delay-2">
                    <h3 class="viewport-holder slideDown delay-3">
                   {{ $tr->setSource('en')->setTarget($site_language)->translate('Book a Demo')}}
                    </h3>
                    <p class="viewport-holder slideDown delay-4">
                   {{ $tr->setSource('en')->setTarget($site_language)->translate('Book a Demo for  your facility for demotrastion of camera operation.')}}
                    </p>
                    <form action="{{route('add.demo')}}"  method="POST" onsubmit="demoEmail()" class="user-form">
                        @csrf
                            <input class="form-control" id="name" type="text" placeholder="{{ $tr->setSource('en')->setTarget($site_language)->translate('Your Name')}}" name="name" required>
                            <input class="form-control" id="email" type="email" placeholder="{{ $tr->setSource('en')->setTarget($site_language)->translate('Your Email')}}" name="email" required>
                            <input class="login-btn" type="submit" value="{{ $tr->setSource('en')->setTarget($site_language)->translate('Book Now')}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
