<!DOCTYPE html>
<html lang="en-US">
<!-- header -->
<body>


<!-- End Navbar -->
<!--End Sponsors Section-->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{ route('front.index') }}"><img src="{{ asset('front/images/footer-logo.png') }}" width="50px" alt="" /></a>
                                </div>
                                <div class="text"></div>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-phone"></span> +123 (4567) 890</li>
                                    <li><span class="icon fa fa-envelope"></span> support@altriagroupassets.com</li>
                                    <li><span class="icon fa fa-home"></span>England Cres, <br> Leamington Spa, UK</li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Links</h4>
                                <ul class="list-link">
                                    <li><a href="{{ route('front.index') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('packages') }}">Investment Plans</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Support</h4>
                                <ul class="list-link">
                                    <li><a href="{{ route('legacy') }}">Legacy</a></li>
                                    <li><a href="">Contact</a></li>
                                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                                    <li><a href="{{ route('terms') }}">Terms</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h4>TRUST GUARD</h4>
                                <div class="widget-content">
                                    <div class="images-outer clearfix">
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="{{ asset('front/images/background/privacy.jpeg') }}" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{ asset('front/images/background/privacy.jpeg') }}" alt=""></a></figure>
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="{{ asset('front/images/background/certified.jpeg') }}" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{ asset('front/images/background/certified.jpeg') }}" alt=""></a></figure>
                                        <!--Image Box-->
                                        <figure class="image-box"><a href="{{ asset('front/images/background/business.jpeg') }}" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="{{ asset('front/images/background/business.jpeg') }}" alt=""></a></figure>
                                    </div>
                                    <b>Risk Disclaimer:</b> Past Returns Do Not Assure Future Returns. All financial products with a margin involve a certain risk for your capital. They are not suitable for all participants. Please make sure you fully understand the risks involved. Any reference to possible earnings, whether implicit or explicit, is provided for illustrative purposes only.
                                    {{ env('APP_NAME') }} Investment does not guarantee profits or any kind of success. Profits depend on the returns, skills and leadership of each Independent Distributor
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d610.2185662715325!2d-1.5444223707450817!3d52.281984619191036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48773495e4d28a9b%3A0xa10d9d48472a2d07!2sEngland%20Cres%2C%20Leamington%20Spa%2C%20UK!5e0!3m2!1sen!2sng!4v1637540724356!5m2!1sen!2sng" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Copyright Column -->
                <div class="copyright-column col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright">2019 &copy; All rights reserved by <a href="#">{{ env('APP_NAME') }}</a></div>
                </div>

                <!-- Social Column -->
                <div class="social-column col-lg-6 col-md-6 col-sm-12">
                    <ul>
                        <li class="follow">Follow us: </li>
                        <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-rss-square"></span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

</div>
@include('partials.front.auth.head')

@include('partials.front.scripts')




</body>
</html>
