@extends('frontend.index')
@section('content')
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
      <div class="promo">
        <div class="frame">
          <div class="holder">
            <div class="container">
              <div class="box">
                <ul class="breadcrumbs viewport-holder slideDown">
                  <li><a href="{{ route('/') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Main')}}</a></li>

                  <li><a href="{{ route('security') }}"> {{$tr->setSource('en')->setTarget($site_language)->translate('Security')}}</a></li>

                  <li><a href="{{ route('direction.detector') }}">{{$tr->setSource('en')->setTarget($site_language)->translate('Direction Detector')}}</a></li>

                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    {{$tr->setSource('en')->setTarget($site_language)->translate('Direction Detector')}}
                  </h1>
                  <ul class="viewport-holder slideDown delay-2">
                    <li>
                      <a href="{{route('demo')}}" class="btn">
                        <span>{{ $tr->setSource('en')->setTarget($site_language)->translate('Book a Demo') }}</span>
                    </a>
                    </li>
                    <li><a href="{{route('/contactus')}}" class="btn add">{{ $tr->setSource('en')->setTarget($site_language)->translate('How to Buy') }}</a></li>
                  </ul>
                </div>
              </div>
              <div class="align-right">
                <div class="video-holder viewport-holder slideDown delay-2">
                  <video
                    width="100%"
                    height="320"
                    loop="true"
                    autoplay="autoplay"
                    muted
                  >
                    <source
                      src="{{asset('frontend')}}/images/videos/Face Tracker_Recognizer.mp4"
                      type="video/mp4"
                    />
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Your browser does not support the video tag.') }}
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <main id="main">
        <div class="post-area">
          <div class="container">
            <div class="post">
              <div class="viewport-holder slideDown">
                <h1>
                    <span>
                      {{ $tr->setSource('en')->setTarget($site_language)->translate('OVERVIEW') }}</span>
                    <br/>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Direction Detector') }}
                  </h1>
                <div class="text">
                  <p>

                    {{ $tr->setSource('en')->setTarget($site_language)->translate('The module is used to ensure safety, track the movement of
                    objects - people, cars, bicycles - in a prohibited
                    direction. When crossing a predetermined line or changing
                    the trajectory of movement, the module sends alarm
                    notifications to the guard and saves the frame for the
                    evidentiary base.') }}
                  </p>
                </div>
              </div>
              <div class="viewport-holder slideDown delay-1">
                <h2>{{ $tr->setSource('en')->setTarget($site_language)->translate('Functionality') }}</h2>
                <div class="text">
                  <ul>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Works on the basis of a neural object detector, which
                        allows you to recognize objects with high accuracy.') }}
                    </li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Uses an object tracking mechanism to count unique objects and analyze their movement') }}
					</li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('The operator can mark up to 16 lines on the screen for motion analysis.') }}
                    </li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Generates notifications if an object crosses the line in a prohibited direction') }}
                    </li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('It is possible to expand the basic functionality using scripts') }}

                    </li>
                    <!-- <li>Flexible configuration of the recognition module.</li>
									<li>Delegation of computing on a server with a GPU from low-power DVRs.</li> -->
                  </ul>
                  <!-- <p>The new version of AutoRRSTEK 5 is compatible with the NeuroStation and QuattroStation series recorders. These servers use hardware graphics accelerators to achieve high efficiency when processing large video streams. Using the off-load technology, the module remotely processes video on any RRSTEK video recorders - connect them to NeuroStation servers over the network or through the cloud.</p> -->
                </div>
              </div>
            </div>
            <div class="product-box">
                <div class="frame viewport-holder slideDown delay-1">
                    <h2>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Other Products') }}
                    </h2>
                    <ul class="accordion" data-accordion="close">

                        <li>
                            <a href="{{route('auto.anpr')}}">{{$tr->setSource('en')->setTarget($site_language)->translate('Auto ANPR')}}</a>
                        </li>
                        <li>
                            <a href="{{route('neuro.left.object.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Left Object Detector') }}</a>
                        </li>
                        <li>
                            <a href="{{route('pose.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Pose Detector') }}</a>
                        </li>
                        <li>
                            <a href="{{route('face.recognition')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Face Recognition') }}</a>
                        </li>
                        <li>
                            <a href="{{route('neuro.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector') }}</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('direction.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Direction Detector') }}</a>
                         </li> --}}
                        <li>
                            <a href="{{route('crowd.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Crowd Detector') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
        @include('frontend.common.solutions_area')

        @include('frontend.common.contact_form')
      </main>
@endsection
