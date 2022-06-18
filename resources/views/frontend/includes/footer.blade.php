</div>

<footer id="footer">
    <div class="container">
        <div class="footer-t">
            <div class="col">
                <strong class="sub-logo">
                    <a href="/index.html">
                        <img src="{{ asset('frontend') }}/images/logo.svg" alt="image description" />
                    </a>
                </strong>
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
                            <li><a href="/Business/index.html">Business</a></li>
                            <li><a href="/health-care/index.html">Healthcare</a></li>
                            <li><a href="/security/index.html">Security</a></li>
                            <li><a href="/work-safety/index.html">Work safety</a></li>
                        </ul>
                    </li>
                    <li>
                        <strong class="open">SOLUTIONS</strong>
                        <ul class="drop">
                            <li><a href="/Solutions/index.html">Solutions</a></li>
                            <li><a href="/cases/index.html">Cases</a></li>
                            <li><a href="/Solutions/demo.html">Demo</a></li>
                        </ul>
                    </li>
                    <li>
                        <strong class="open">SUPPORT</strong>
                        <ul class="drop">
                            <li><a href="/integrations/">Integrations</a></li>
                            <li><a href="/camera/Compare/">Compare Camera</a></li>
                        </ul>
                    </li>
                    <li>
                        <strong class="open">ABOUT US</strong>
                        <ul class="drop">
                            <li><a href="/about-rrstek.html">About rrstek</a></li>
                            <li><a href="/contact-us.html">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-b">
            <div class="col">
                <ul>
                    <li>
                        <a href="#"><img src="{{ asset('frontend') }}/images/social-icons/Button/Social Icons.png"
                                alt="image description" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('frontend') }}/images/social-icons/Button/Social Icons-1.png"
                                alt="image description" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('frontend') }}/images/social-icons/Button/Social Icons-2.png"
                                alt="image description" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('frontend') }}/images/social-icons/Button/Social Icons-3.png"
                                alt="image description" /></a>
                    </li>
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
                    Copyright &copy; 2022 <a href="#">RRSTEK</a> All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>


<script>
    var div_top = $('#header').offset().top;

    $(window).scroll(function() {
        var window_top = $(window).scrollTop() - 0;
        if (window_top > div_top) {
            if (!$('#header').is('.sticky')) {
                $('#header').addClass('sticky');
            }
        } else {
            $('#header').removeClass('sticky');
        }
    });
</script>
<script src="{{ asset('frontend') }}/js/jquery-1.11.2.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.main.js"></script>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="{{ asset('frontend') }}/js/email.js"></script>


<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25847682.js"></script>
<!-- End of HubSpot Embed Code -->

</body>

</html>
