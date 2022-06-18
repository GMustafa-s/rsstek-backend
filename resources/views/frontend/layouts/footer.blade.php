@php 
$socilas = App\Models\SocialLink::all();
$site_dat = App\Models\GeneralSetting::first();
@endphp
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
              <strong class="open">PRODUCTS</strong>
              <ul class="drop">
                <li><a href="#">Products</a></li>
                <li><a href="#">Analitycs</a></li>
                <li><a href="#">Camera</a></li>
                <li><a href="#">Hardware</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">BUSINESS</strong>
              <ul class="drop">
                <li><a href="{{route('/business')}}">Business</a></li>
                <li><a href="{{route('/health_care')}}">Healthcare</a></li>
                <li><a href="{{route('/security')}}">Security</a></li>
                <li><a href="{{route('/work_safety')}}">Work safety</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">SOLUTIONS</strong>
              <ul class="drop">
                <li><a href="{{route('/solutions')}}">Solutions</a></li>
                <li><a href="{{route('/cases')}}">Cases</a></li>
                <li><a href="{{route('/demo')}}">Demo</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">SUPPORT</strong>
              <ul class="drop">
                <li><a href="{{route('/integrations')}}">Integrations</a></li>
                <li><a href="{{route('/camera/compare')}}">Compare Camera</a></li>
              </ul>
            </li>
            <li>
              <strong class="open">ABOUT US</strong>
              <ul class="drop">
                <li><a href="{{route('/aboutus')}}">About rrstek</a></li>
                <li><a href="{{route('/contactus')}}">Contact Us</a></li>
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
          <p><a href="#">Privacy policy</a></p>
        </div>
        <div class="col">
          <p><a href="#">Cookie policy</a></p>
        </div>
        <div class="col">
          <p>
             @if($site_dat->copy_right_text !=null) {{$site_dat->copy_right_text}} @else Copyright &copy; 2022 <a href="{{route('/')}}">RRSTEK</a> All rights reserved @endif
          </p>
        </div>
      </div>
    </div>
  </footer>
