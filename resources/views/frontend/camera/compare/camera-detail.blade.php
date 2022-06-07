@extends('frontend.index')
@section('content')
    <div class="promo camera-detail">
        <div class="frame">
            <div class="holder">
                <div class="container">
                    <div class="box">
                        <ul class="breadcrumbs viewport-holder slideDown">
                            <li><a href="{{ route('/') }}">Main</a></li>
                            <li><a href="#">product</a></li>
                            <li><a href="#">Camera</a></li>
                            <li><a href="{{ route('/camera/compare') }}">Compare</a></li>
                            <li><a href="#">TR-D3181IR3 v2 3.6</a></li>
                        </ul>
                        <div class="text">
                            <h1 class="viewport-holder slideDown delay-1">TR-D3181IR3 v2 3.6</h1>
                            <p class="viewport-holder slideDown delay-2">Outdoor IP camera with IR illumination</p>
                            <div class="btn-holder viewport-holder slideDown delay-2">
                                <a href="{{ route('/solutions') }}" class="btn primary"><span>Book a Demo</span></a>
                                <a href="{{ route('/contactus') }}" class="btn default"><span>How To Buy</span></a>
                            </div>
                        </div>

                    </div>
                    <div class="cam-holder viewport-holder slideDown delay-4">
                        <img src="{{ asset('frontend') }}/images/compare-camera/Camera Compare - TR-D3181IR3 v2 3.6.png"
                            alt="image description">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="main" class="main-camera">
        <div class="post-area">
            <div class="container">
                <div class="post">
                    <div class="viewport-holder slideDown">
                        <h1><span>OVERVIEW</span><br>TRASSIR TR-D3181IR3 v2 (3.6 mm)</h1>
                        <div class="text">
                            <p>8 MP (3840 × 2160) IP-camera is designed taking into account the conditions of
                                round-the-clock year-round outdoor operation in places out of sight of security personnel:
                                the metal case is protected from mechanical impacts according to the IK10 code, from
                                moisture and dust - according to the IP67 standard, operating temperatures - –40 ° C… +60 °
                                C, lightning protection - TVS 2000 V, range of integrated backlighting - 30 m.</p>
                            <!-- <p>TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p> -->
                        </div>
                    </div>
                    <div class="viewport-holder slideDown delay-1">
                        <h2>Functionality:</h2>
                        <div class="text">
                            <ul>
                                <li>Built-in microphone.</li>
                                <li>Detection of people.</li>
                                <li>Motion detection.</li>
                                <li>Control of the area.</li>
                                <li>Finding abandoned items.</li>
                                <li>Virtual line crossing detection, crossing statistics.</li>
                                <li>WDR 120 dB - minimizes the effect of changes in light level on image quality.</li>
                                <li>3D DNR - spatial noise reduction.</li>
                                <li>Supports vertical resolution (corridor mode) with an aspect ratio of 9:16.</li>
                                <li>Defog - Automatically removes blur introduced by fog or smoke by enhancing the contrast.
                                </li>
                                <li>ROI - fixing on the selected area and parallel reducing the resolution in the rest of
                                    the frame to optimize the bit rate.</li>
                                <li>BLC - Backlight Compensation.</li>
                                <li>Day / night mode with ICR, with sufficient illumination to block the rays of the
                                    infrared range to normalize color reproduction; in the dark, the filter is shifted away
                                    from the matrix so that its sensitivity increases and the backlight can work.</li>
                                <li>Compression with H.265 +, H.264 +, H.265, H.264 codecs.</li>
                                <li>Stream broadcasting speed with a resolution of 8 Mp - 15 fps.</li>
                            </ul>

                            <!-- <p>Default alarming event colouring
             The module implements a system of detectors of violations, based on many years of
             experience and consultations with leading experts in the field of trade, as a result of which
             ActivePOS independently monitors possible violations in the work of the cashier and, if
             detected, immediately notifies the operator. The detectors are created in the form of plug-in
             scripts, which allows them to be adapted to the conditions of a particular object. Data on
             suspicious incidents and confirmation of uncleanness of employees, along with a dozen
             unique reports, are provided to analysts and can be verified by manual event search, which in
             total guarantees full control over the situation.</p>
             <p>The system saves not the receipt text but the sales events, cancellations, refunds, annulment
              etc in the database. Also there is capability of data search in any combination of facts, receipt
              number, the cashier's name, period of time, purchase sum etc.</p> -->
                        </div>
                        <div class="viewport-holder slideDown">
                            <h1><span>Basics</span></h1>
                            <div class="text">
                                <p>TR-D3181IR3 v2 (3.6 mm) is equipped with a 3.6 mm fixed focal length lens, 91 °
                                    horizontal field of view, 46 ° vertical field, F / 1.8 aperture. Equipped with an RJ-45
                                    network port, a microSD slot with a capacity of up to 128 GB, a power connector. Power
                                    Supply - 12V DC or PoE. The maximum power consumption is 13 W. Dimensions - Ø142.0 ×
                                    113.4 mm. Weight - 650 g.</p>
                                <!-- <p>TRASSIR Workplace Detector is designed to monitor and track employees' working time.</p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="specifications">
                <div class="container">
                    <div class="heading viewport-holder slideDown delay-1">
                        <a href="#" class="btn-open">
                            <h2><span><i>Specifications</i></span> Technical Specifications</h2>
                        </a>
                    </div>
                    <div class="holder">
                        <div class="col viewport-holder slideDown delay-2">
                            <div class="row">WDR</div>
                            <div class="row"><strong>WDR (120 dB)</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-3">
                            <div class="row">Maximum video output resolution</div>
                            <div class="row"><strong>3840x2160</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-4">
                            <div class="row">Image sensor</div>
                            <div class="row"><strong>1/2.7" CMOS</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-5">
                            <div class="row">Bitrate (Mb/sec)</div>
                            <div class="row"><strong>10</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-6">
                            <div class="row">Power supply</div>
                            <div class="row"><strong>DC 12 V, PoE</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-7">
                            <div class="row">Lens</div>
                            <div class="row"><strong>3.6</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-8">
                            <div class="row">Weight Net (kg)</div>
                            <div class="row"><strong>0.364</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-9">
                            <div class="row">Sensitivity</div>
                            <div class="row"><strong>0,005</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-10">
                            <div class="row">Ingress protection</div>
                            <div class="row"><strong>IP67</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-11">
                            <div class="row">Dimensions (mm)</div>
                            <div class="row"><strong>64.8x64.8x165.3</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-12">
                            <div class="row">Power consumption, Watt</div>
                            <div class="row"><strong>13</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-13">
                            <div class="row">Working temperature, C°</div>
                            <div class="row"><strong>-40…+60</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-14">
                            <div class="row">Day/Night Mode</div>
                            <div class="row"><strong>Mechanic IR-filter</strong></div>
                        </div>
                        <div class="col viewport-holder slideDown delay-15">
                            <div class="row">Network interfaces</div>
                            <div class="row"><strong>RJ-45</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="download-area">
                <div class="container">
                    <div class="heading viewport-holder slideDown delay-1">
                        <h2><span><i>documentation</i></span> Download Documentation</h2>
                    </div>
                    <div class="btn viewport-holder slideDown delay-2">
                        <a href="#"><span>Download here</span><i class="ico"><img
                                    src="{{ asset('frontend') }}/images/ico-download.svg" alt="image description"></i></a>
                    </div>
                </div>
            </div>
            <div class="advantages-area">
                <div class="container">
                    <div class="heading center viewport-holder slideDown delay-1">
                        <h2><span><i>ABOUT OUR PRODUCT</i></span> The Camera Series Advantge</h2>
                    </div>
                    <div class="holder">
                        <div class="box viewport-holder slideDown delay-2">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon.png"
                                        alt="image description"></i>
                            </div>
                            <p>Easy installation, use, and management</p>
                        </div>
                        <div class="box viewport-holder slideDown delay-3">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-1.png"
                                        alt="image description"></i>
                            </div>
                            <p>AI video and audio analytics</p>
                        </div>
                        <div class="box viewport-holder slideDown delay-4">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-2.png"
                                        alt="image description"></i>
                            </div>
                            <p>Cloud-connected deployment</p>
                        </div>
                        <div class="box viewport-holder slideDown delay-5">
                            <div class="ico">
                                <i><img src="{{ asset('frontend') }}/images/compare-camera/Solid/Icon-3.png"
                                        alt="image description"></i>
                            </div>
                            <p>10 year warrantly</p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <div id="footer-compare-section" class="compare-section viewport-holder slideDown">
        <div class="container">
            <div class="heading">
                <h2 class="viewport-holder slideDown delay-3"><span>Products</span> Other Products</h2>
            </div>
            <div class="slick-slider-compare">
                <div class="slide viewport-holder slideDown delay-5">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/products/camera-04.png" alt="image description">
                    </div>
                    <div class="txt">
                        <h3>TR-D2181IR3 v2 3.6</h3>
                        <h4>Outdoor IP camera with IR illumination</h4>
                        <a href="#" class="more">Compare</a>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-6">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/products/camera-04.png" alt="image description">
                    </div>
                    <div class="txt">
                        <h3>TR-D2181IR3 v2 2.8</h3>
                        <h4>Outdoor IP camera with IR illumination</h4>
                        <a href="#" class="more">Compare</a>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-7">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/products/camera-03.png" alt="image description">
                    </div>
                    <div class="txt">
                        <h3>TR-D2183IR6 v2 2.7-13.5</h3>
                        <h4>Outdoor IP camera with IR illumination</h4>
                        <a href="#" class="more">Compare</a>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-5">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/products/camera-04.png" alt="image description">
                    </div>
                    <div class="txt">
                        <h3>TR-D2181IR3 v2 3.6</h3>
                        <h4>Outdoor IP camera with IR illumination</h4>
                        <a href="#" class="more">Compare</a>
                    </div>
                </div>
                <div class="slide viewport-holder slideDown delay-6">
                    <div class="img">
                        <img src="{{ asset('frontend') }}/images/products/camera-04.png" alt="image description">
                    </div>
                    <div class="txt">
                        <h3>TR-D2181IR3 v2 2.8</h3>
                        <h4>Outdoor IP camera with IR illumination</h4>
                        <a href="#" class="more">Compare</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
