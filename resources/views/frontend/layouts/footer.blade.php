@php
$socilas = App\Models\SocialLink::all();
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
<footer id="footer">
    <div class="container">
      <div class="footer-t">
        <div class="col">
          <strong class="sub-logo">
          <a href="{{url('/')}}">
          <img src="{{asset('frontend')}}/images/@if($site_dat->logo!=null){{$site_dat->logo}} @endif" alt="RRSTEK | Home Automation System" width="109" height="37">

              <!-- <img src="{{asset('frontend')}}/images/logo.svg" alt="image description" /> -->
            </a>
          </strong>

          @if($site_dat->description !=null)
           <p>{{$site_dat->description}}</p>
          @endif
        </div>
        <div class="col">
          <ul class="links">
            <li>
              <strong class="open">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('PRODUCTS')}}
              </strong>
              <ul class="drop">
                <li><a href="#">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Products')}}
                </a></li>
                <li><a href="#">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Analitycs')}}
                </a></li>
                <li><a href="#">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Camera')}}
                </a></li>
                <li><a href="#">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Hardware')}}
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('BUSINESS')}}
              </strong>
              <ul class="drop">
                <li><a href="{{route('/business')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Business')}}
                </a></li>
                <li><a href="{{route('/health_care')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Healthcare')}}
                </a></li>
                <li><a href="{{route('/security')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Security')}}
                </a></li>
                <li><a href="{{route('/work_safety')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Work safety')}}
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('SOLUTIONS')}}
              </strong>
              <ul class="drop">
                <li><a href="{{route('/solutions')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Solutions')}}
                </a></li>
                <li><a href="{{route('/cases')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Cases')}}
                </a></li>
                <li><a href="{{route('/demo')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Demo')}}
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('SUPPORT')}}
              </strong>
              <ul class="drop">
                <li><a href="{{route('/integrations')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Integrations')}}
                </a></li>
                <li><a href="{{route('/camera/compare')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Compare Camera')}}
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('ABOUT US')}}
              </strong>
              <ul class="drop">
                <li><a href="{{route('/aboutus')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('About rrstek')}}
                </a></li>
                <li><a href="{{route('/contactus')}}">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Contact Us')}}
                </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-b">
          <div class="col">
              <ul>
                @if($socilas->count()>0)
                @foreach($socilas as $link)
                <li>
                  <a href="{{$link->url}}"
                  ><img
                  src="{{asset('frontend')}}/images/social-icons/Button/{{$link->image}}"
                  alt="image description"
                /></a>
                </li>
                @endforeach
                @endif
              </ul>
          </div>
        <div class="col">
          <p><a href="#">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Privacy policy')}}
          </a></p>
        </div>
        <div class="col">
          <p><a href="#">
                {{ $tr->setSource('en')->setTarget($site_language)->translate('Cookie policy')}}
          </a></p>
        </div>
        <div class="col">
          <p>
            {{-- @if($site_dat->copy_right_text !=null) {{$site_dat->copy_right_text}} @else Copyright &copy; 2022 <a href="{{route('/')}}">RRSTEK</a> All rights reserved @endif --}}
             @if($site_dat->copy_right_text !=null)
              {{$tr->setSource('en')->setTarget($site_language)->translate($site_dat->copy_right_text)}}
              @else
              Copyright &copy; 2022
              <a href="{{route('/')}}">RRSTEK</a>
             {{ $tr->setSource('en')->setTarget($site_language)->translate('All rights reserved')}} @endif
          </p>
        </div>
      </div>
    </div>
  </footer>
