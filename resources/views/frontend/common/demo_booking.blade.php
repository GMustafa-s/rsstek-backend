@php 
$site_dat = App\Models\GeneralSetting::first();
@endphp

<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate();
$language = session()->get('language');
    ?>
<div class="booking-area">
    <div class="container">
        <div class="holder">
            <div class="text-box">
                <h2 class="viewport-holder slideDown"><span>
                @if($language)
                    {{ $tr->setSource('en')->setTarget($language)->translate('GET DEMO')}}
                    @else
                   {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('GET DEMO')}}
                @endif
                </span>
                @if($language)
                    {{ $tr->setSource('en')->setTarget($language)->translate(' Try RRSTEK in Your Business')}}
                    @else
                   {{ $tr->setSource('en')->setTarget($site_dat->language)->translate(' Try RRSTEK in Your Business')}}
                @endif
            </h2>
                <p class="viewport-holder slideDown delay-1">
                @if($language)
                    {{ $tr->setSource('en')->setTarget($language)->translate('Learn more about how RRSTEK analytic modules work! Demo mode is an opportunity to see for yourself how the system operates, and also check the interface and test all the functions')}}
                    @else
                   {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Learn more about how RRSTEK analytic modules work! Demo mode is an opportunity to see for yourself how the system operates, and also check the interface and test all the functions')}}
                @endif
                </p>
            </div>
            <div class="form-area">
                <div class="frame viewport-holder slideDown delay-2">
                    <h3 class="viewport-holder slideDown delay-3">
                    @if($language)
                    {{ $tr->setSource('en')->setTarget($language)->translate('Book a Demo')}}
                    @else
                   {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Book a Demo')}}
                @endif
                    </h3>
                    <p class="viewport-holder slideDown delay-4">
                    @if($language)
                    {{ $tr->setSource('en')->setTarget($language)->translate('Book a Demo for  your facility for demotrastion of camera operation.')}}
                    @else
                   {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Book a Demo for  your facility for demotrastion of camera operation.')}}
                @endif 
                    </p>
                    <form action="{{route('add.demo')}}"  method="POST" onsubmit="demoEmail()" class="user-form">
                    @csrf
                        <input class="form-control" id="name" type="text" 
                        placeholder="@if($language)
                            {{ $tr->setSource('en')->setTarget($language)->translate('Your Name')}}
                            @else
                        {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Your Name')}}
                        @endif"
                         name="name" required>

                        <input class="form-control" id="email" type="email" 
                        placeholder="@if($language)
                            {{ $tr->setSource('en')->setTarget($language)->translate('Your Email')}}
                            @else
                        {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Your Email')}}
                        @endif" 
                        name="email" required>

                        <input class="login-btn" type="submit" value="@if($language)
                        {{ $tr->setSource('en')->setTarget($language)->translate('Book Now')}}
                        @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Book Now')}}
                        @endif">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
