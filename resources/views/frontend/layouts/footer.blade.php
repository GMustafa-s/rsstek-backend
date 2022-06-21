@php 
$socilas = App\Models\SocialLink::all();
$site_dat = App\Models\GeneralSetting::first();
@endphp


<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$tr = new GoogleTranslate();
$language = session()->get('language');
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
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('PRODUCTS')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('PRODUCTS')}}
                @endif
              </strong>
              <ul class="drop">
                <li><a href="#">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Products')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Products')}}
                @endif

                </a></li>
                <li><a href="#">Analitycs
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Analitycs')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Analitycs')}}
                @endif
                </a></li>
                <li><a href="#">Camera
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Camera')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Camera')}}
                @endif
                </a></li>
                <li><a href="#">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Hardware')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Hardware')}}
                @endif
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
              @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('BUSINESS')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('BUSINESS')}}
                @endif
              </strong>
              <ul class="drop">
                <li><a href="{{route('/business')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Business')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Business')}}
                @endif
                </a></li>
                <li><a href="{{route('/health_care')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Healthcare')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Healthcare')}}
                @endif
                </a></li>
                <li><a href="{{route('/security')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Security')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Security')}}
                @endif
                </a></li>
                <li><a href="{{route('/work_safety')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Work safety')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Work safety')}}
                @endif
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
              @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('SOLUTIONS')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('SOLUTIONS')}}
                @endif
              </strong>
              <ul class="drop">
                <li><a href="{{route('/solutions')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Solutions')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Solutions')}}
                @endif
                </a></li>
                <li><a href="{{route('/cases')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Cases')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Cases')}}
                @endif
                </a></li>
                <li><a href="{{route('/demo')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Demo')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Demo')}}
                @endif
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
              @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('SUPPORT')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('SUPPORT')}}
                @endif
              </strong>
              <ul class="drop">
                <li><a href="{{route('/integrations')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Integrations')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Integrations')}}
                @endif
                </a></li>
                <li><a href="{{route('/camera/compare')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Compare Camera')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Compare Camera')}}
                @endif
                </a></li>
              </ul>
            </li>
            <li>
              <strong class="open">
              @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('ABOUT US')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('ABOUT US')}}
                @endif
              </strong>
              <ul class="drop">
                <li><a href="{{route('/aboutus')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('About rrstek')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('About rrstek')}}
                @endif
                </a></li>
                <li><a href="{{route('/contactus')}}">
                @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Contact Us')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Contact Us')}}
                @endif
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
          @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Privacy policy')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Privacy policy')}}
          @endif
          </a></p>
        </div>
        <div class="col">
          <p><a href="#">
          @if($language)
                     {{ $tr->setSource('en')->setTarget($language)->translate('Cookie policy')}}
                    @else
                    {{ $tr->setSource('en')->setTarget($site_dat->language)->translate('Cookie policy')}}
          @endif
          </a></p>
        </div>
        <div class="col">
          <p>
             @if($site_dat->copy_right_text !=null) {{$site_dat->copy_right_text}} @else Copyright &copy; 2022 <a href="{{route('/')}}">RRSTEK</a> All rights reserved @endif
          </p>
        </div>
      </div>
    </div>
  </footer>
