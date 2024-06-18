<!--Main Footer-->
<footer class="main-footer" style="background-image:url({{ asset('assets/images/background/7.jpg') }})">

    <div class="container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">

                <!-- Logo Widget-->
                <div class="footer-column col-lg-6 col-md-6">
                    <div class="footer-widget logo-widget">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/zyonne_logo.png') }}" alt="zyonne" width="130" /></a>
                        </div>
                        <p class="text">
                            The journey is not over.
                            But it is different now.
                            The pace is slower,
                            and the focus is on the simple things.

                            All these things…

                            The colors of the sunset,
                            The texture of a soft blanket,
                            The sound of a bird chirping, The taste of the last meal, and the touch of a loved one.

                            These are the things that matter most as the journey continues.
                        </p>
                        <ul class="list-style-two">
                            {{-- <li><a href="contact.html#map-location"><span class="icon  flaticon-map-pin-marked"></span>29 Union Square W <br> New York, NY 10003, USA</a></li> --}}
                            <li><a href=""><span class="icon flaticon-phone"></span>+1 (708) 465-5438</a></li>
                            <li><a href="mailto:gracelandbyzyonne@gmail.com"><span class="icon flaticon-mail"></span>gracelandbyzyonne@gmail.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Links Widget-->
                <div class="footer-column col-lg-3 col-md-6">
                </div>

                <!-- Links Widget-->
                <div class="footer-column col-lg-3 col-md-6">
                    <div class="footer-widget times-widget">
                        <h2 style="color: rgba(58, 72, 218, 0.9);">Open For Consultation</h2>
                        <ul class="time-list">
                            <li>Monday :<span>08.00am - 08.00pm</span></li>
                            <li>Tuesday :<span>08.00am - 08.00pm</span></li>
                            <li>Wednesday :<span>08.00am - 08.00pm</span></li>
                            <li>Thursday :<span>08.00am - 08.00pm</span></li>
                            <li>Friday :<span>09.00am - 07.00pm</span></li>
                            <li>Saturday :<span>Closed</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="clearfix">

                <div class="pull-left">
                    <!-- Copyright -->
                    <p class="text-white">Copyright &copy; {{ date('Y') }} Powered by <a target="_blank" href="">Trovolink</a>.Company name All rights reserved.</p>
                </div>

                <div class="pull-right">
                    <ul class="social-box">
                        {{-- <li class="messanger"><a href="#"><span class="icon flaticon-messenger"></span> msg.center</a></li> --}}
                        {{-- <li class="facebook"><a href="#" class="icon icon-facebook"></a></li>
                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a></li>
                        <li class="twitter"><a href="#" class="icon icon-twitter"></a></li>
                        <li class="youtube"><a href="#" class="icon icon-youtube"></a></li> --}}
                    </ul>
                </div>

            </div>
        </div>
    </div>

</footer>
