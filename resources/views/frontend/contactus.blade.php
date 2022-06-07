@extends('frontend.index')
@section('content')
<div id="promo-contact-us" class="promo product">
  @if(session()->has('success'))
  <div class="alert-success">
    <p>
      {{ session()->get('success') }}
    </p>
   </div>
@endif
@if(session()->has('error'))
<div class="alert-error">
  <p>
    {{ session()->get('error') }}
  </p>
 </div>
@endif

    <div class="frame">
      <div class="holder">
        <div class="container">
          <div class="box">
            <ul class="breadcrumbs viewport-holder slideDown">
              <li><a href="index.html">Main</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
        
            <div id="text-banner-overview" class="text">
              <h1 class="viewport-holder slideDown delay-1">Have a question?</h1>
              <p class=" viewport-holder slideDown delay-2">
                Lets talk about what you need. Fill out the form and we'll get back to you.
              </p>
              <div></div>
              <div class="vl viewport-holder slideDown delay-3"></div>
              <a  href="#contact-form"><img class=" viewport-holder slideDown delay-4" src="{{asset('frontend')}}/images/arrow down.png" alt=""></a>
                <div class="text-scroll">
                  <h2 class="viewport-holder slideDown delay-5">Fill out the form</h2>
                <p class=" viewport-holder slideDown delay-5">
                  Scroll down
                </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main id="main">
    <div id="contact-form" class="contact-form">
      <div class="container">
        <h3 class="viewport-holder slideDown"><span>Contact Us</span> Contact Sales for questions or a live video security demo</h3>
       
        <form  action="{{route('add.contactus')}}" method="POST" onsubmit="sendEmail();">
          @csrf
                    <div class="holder">
                        <div class="cols viewport-holder slideDown delay-1">
                            <div class="rows">
                                <label for="first-name">First Name <sup>*</sup></label>
                                <input class="form-control" id="first-name" type="text" placeholder="First Name" name="f_name" required>
                            </div>
                            <div class="rows">
                                <label for="last-name">Last Name <sup>*</sup></label>
                                <input class="form-control" id="last-name" type="text" placeholder="Last Name" name="l_name" required>
                            </div>
                            <div class="rows">
                                <label for="email">Email <sup>*</sup></label>
                                <input class="form-control email" id="email" type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="cols viewport-holder slideDown delay-2">
                            <div class="rows">
                                <label for="region">Region/Country <sup>*</sup></label>
                                <input list="Country" class="form-control" id="region" type="text" placeholder="Region/Country" name="country" required>
                                <datalist id="Country">
                                  @foreach($countries as $country)
                                    <option value="{{$country->country_name}}" />
                                  @endforeach
                                </datalist>
                            </div>
                            <div class="rows">
                                <label for="message">Message</label>
                                <textarea type="text" class="form-control" id="message" cols="30" rows="10" placeholder="Let us know about your needs, interest, and other quetions." name="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box viewport-holder slideDown delay-3">
                        <input class="form-control" id="chkbx" type="checkbox" required>
                        <label for="chkbx">I would like to receive communications from reCAPTCHA about products, services, and other news. You can unsubscribe at any time. For more information, please read our <a href="#">Privacy Policy</a>.</label>
                    </div>
                    <div class="box viewport-holder slideDown delay-4">
                      <div class="form-group">
                        <label for="capatcha">Captcha</label>
                        <div class="captcha">
                          <span>{!! app('captcha')->display() !!}</span>
                          <!-- <button type="button" class="btn btn-success refresh-cpatcha"><i class="fa fa-refresh"></i></button> -->
                        </div>
                       
                        @error('g-recaptcha-response')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                        <input class="login-btn" type="submit" value="Send">
                    </div>
                </form>
      </div>
    </div>
</main>
@endsection
