<!DOCTYPE html>
<html lang="en">
<body>
	<div id="wrapper">

		@include('frontend.layouts.header')

        @yield('content')

		@include('frontend.layouts.footer')

    </div>


    
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
	<script src="{{asset('frontend')}}/js/jquery-1.11.2.min.js"></script>
	<script src="{{asset('frontend')}}/js/jquery.main.js"></script>

		<script src="https://smtpjs.com/v3/smtp.js"></script>
	<script src="{{asset('frontend')}}/js/email.js"></script>


<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25847682.js"></script>
	<!-- End of HubSpot Embed Code -->

</body>
</html>
