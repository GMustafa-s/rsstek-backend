<div id="contact-form" class="contact-form">
    <div class="container">
        <h3 class="viewport-holder slideDown">
            <span>
                {{$tr->setSource('en')->setTarget($site_language)->translate('Contact Us')}}
            </span>
            {{$tr->setSource('en')->setTarget($site_language)->translate('Contact Sales for questions or a live video
            security demo')}}
        </h3>

        <form action="{{ route('add.contactus') }}" method="POST" onsubmit="sendEmail();">
            @csrf
            <div class="holder">
                <div class="cols viewport-holder slideDown delay-1">
                    <div class="rows">
                        <label for="first-name">
                            {{$tr->setSource('en')->setTarget($site_language)->translate('First Name')}}
                            <sup>*</sup>
                        </label>
                        <input class="form-control" id="first-name" type="text" placeholder="{{$tr->setSource('en')->setTarget($site_language)->translate('First Name')}}"
                        name="f_name" required>
                    </div>
                    <div class="rows">
                        <label for="last-name">
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Last Name')}}
                            <sup>*</sup>
                        </label>
                        <input class="form-control" id="last-name" type="text" placeholder="{{$tr->setSource('en')->setTarget($site_language)->translate('Last Name')}}"
                            name="l_name" required>
                    </div>
                    <div class="rows">
                        <label for="email">
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Email')}}
                            <sup>*</sup>
                        </label>
                        <input class="form-control email" id="email" type="email" placeholder="{{$tr->setSource('en')->setTarget($site_language)->translate('Email')}}"
                            name="email" required>
                    </div>
                </div>
                <div class="cols viewport-holder slideDown delay-2">
                    <div class="rows">
                        <label for="region">
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Region/Country')}}
                            <sup>*</sup>
                        </label>
                        <input list="Country" class="form-control" id="region" type="text"
                            placeholder="Region/Country" name="country" required>
                        <datalist id="Country">
                        </datalist>
                    </div>
                    <div class="rows">
                        <label for="message">
                            {{$tr->setSource('en')->setTarget($site_language)->translate('Message')}}
                        </label>
                        <textarea type="text" class="form-control" id="message" cols="30" rows="10"
                            placeholder="Let us know about your needs, interest, and other quetions." name="message" required></textarea>
                    </div>
                </div>
            </div>
            <div class="box viewport-holder slideDown delay-3">
                <input class="form-control" id="chkbx" type="checkbox" required>
                <h4>Privacy Policy</h4>
                <label for="chkbx">

                    {{$tr->setSource('en')->setTarget($site_language)->translate('I have read and understood the Privacy Policy and the same regarding cookies.')}}
                    @php
                        $privacy_page = App\Models\NewCustomePage::find(1);
                        // dd($privacy_page);
                     @endphp
                    <a href="{{route('custome-page.slug', $privacy_page->slug)}}">
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Privacy Policy')}}
                    </a>
                </label>

                <input class="form-control" id="chkbx1" type="checkbox" required>
                <h4>Newsletter</h4>
                <label for="chkbx1">
                    {{$tr->setSource('en')->setTarget($site_language)->translate('I would like to subscribe to the newsletter and receive news and promotions.')}}

                </label>

            </div>
            <div class="box viewport-holder slideDown delay-4">
                <div class="form-group">
                    <label for="capatcha">
                        {{$tr->setSource('en')->setTarget($site_language)->translate('Captcha')}}
                    </label>
                    <div class="captcha">
                        <span>{!! app('captcha')->display() !!}</span>
                        <!-- <button type="button" class="btn btn-success refresh-cpatcha"><i class="fa fa-refresh"></i></button> -->
                    </div>

                    @error('g-recaptcha-response')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input class="login-btn" type="submit" value="{{$tr->setSource('en')->setTarget($site_language)->translate('Send')}}">
            </div>
        </form>
    </div>
</div>
