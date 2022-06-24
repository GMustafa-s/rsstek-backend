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
                    <li><a href="{{ route('/') }}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Main') }}</a></li>

                    <li><a href="{{ route('security') }}"> {{ $tr->setSource('en')->setTarget($site_language)->translate('Security') }}</a></li>
                  <li><a href="{{ route('neuro.detector') }}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector') }}</a></li>
                </ul>
                <div class="text">
                  <h1 class="viewport-holder slideDown delay-1">
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector') }}
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
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector') }}
                </h1>
                <div class="text">
                  <p>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Object detector (people, people heads, cars, bicycles)
                    based on neural networks, for use in security purposes.
                    Allows you to accurately detect objects in the frame. When a
                    foreign object enters the specified area, the detector
                    generates an alarm. Allows to significantly reduce the
                    number of false alarms by filtering foreign objects and
                    noise. Works on the NeuroStation server. Offload analytics
                    is possible (multiple RRSTEK servers transmit images to 1
                    server for processing.') }}

                  </p>
                </div>
              </div>
              <div class="viewport-holder slideDown delay-1">
                <h2>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Functionality') }}
                </h2>
                <div class="text">
                  <ul>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Improve control of the territory') }}
                    </li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Control access to "sterile areas') }}”
                    </li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Assist security services to significantly improve
                        efficiency') }}
                    </li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Act in a timely manner in response to sensitive events at
                        the site') }}”
                    </li>
                    <li>
                        {{ $tr->setSource('en')->setTarget($site_language)->translate('Eliminate false alarms') }}
                    </li>
                  </ul>
                  <p>
                    {{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector allows for highly accurate recognition and
                    classification of objects. The module avoids triggering on
                    other moving objects, such as trees and animals (as opposed
                    to a motion detector).') }}
                  </p>
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
                        {{-- <li>
                            <a href="{{route('neuro.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Neuro Detector') }}</a>
                        </li> --}}
                        <li>
                            <a href="{{route('direction.detector')}}">{{ $tr->setSource('en')->setTarget($site_language)->translate('Direction Detector') }}</a>
                         </li>
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
