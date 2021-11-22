<!DOCTYPE html>
<html lang="en-US">
    @include('partials.front.head')
    <!-- header -->
    <body>


        <!-- End Navbar -->

        @yield('content')
        <!-- body of the site -->

        <!-- Footer -->

        <section class="sponsors-section call-to-action" style="background-image:url({{ asset('front/images/background/3.jpg') }})">
            <div class="auto-container">

                <div class="carousel-outer">
                    <!--Sponsors Slider-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/1.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/2.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/3.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/4.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/5.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/6.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/1.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/1.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/3.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/4.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/5.png') }}" alt=""></a></div></li>
                        <li><div class="image-box"><a href="#"><img src="{{ asset('front/images/clients/6.png') }}" alt=""></a></div></li>
                    </ul>
                </div>

            </div>
        </section>
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


    @include('partials.front.scripts')

        <style>
            #lang{
                position: absolute;
            }

            .rotate {
                animation: rotation 20s infinite linear;
            }
            @keyframes rotation {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(359deg);
                }
            }
        </style>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>
    <!-- <a id="lang" onClick="window.scroll({ top: 100,left: 0,behavior: 'smooth' });"></a> -->
<!-- <script>
    window.scroll({
   top: 100,
   left: 0,
   behavior: 'smooth'
});
</script> -->

{{--        back to top--}}
        <button
            type="button"
            class="btn btn-primary btn-floating btn-lg"
            id="btn-back-to-top"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-up-alt" viewBox="0 0 16 16">
                <path d="M3.5 13.5a.5.5 0 0 1-1 0V4.707L1.354 5.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 4.707V13.5zm4-9.5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z"/>
            </svg>
        </button>

        <style>
            #btn-back-to-top {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none;
            }
        </style>

        <script>
            //Get the button
            let mybutton = document.getElementById("btn-back-to-top");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction();
            };

            function scrollFunction() {
                if (
                    document.body.scrollTop > 20 ||
                    document.documentElement.scrollTop > 20
                ) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            // When the user clicks on the button, scroll to the top of the document
            mybutton.addEventListener("click", backToTop);

            function backToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </body>
    </html>
