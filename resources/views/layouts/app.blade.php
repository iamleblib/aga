<!DOCTYPE html>
<html lang="en-US">
    @include('partials.front.head')
    <!-- header -->
    <body>
            @yield('content')

            <div id="contact_wrapper" class="wrapper footer_wrapper" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover" data-src="{{ asset('front/img/footer-bg.jpg')}}">
        <div class="container">
            <div class="row no-gutters justify-content-between">
                <div class="col-lg-3 col-md-12">
                    <div><a href="{{ route('front.index')}}"><img class="footer_logo" src="{{ asset('front/img/logo.png')}}" width="60%" alt=""></a></div>

                    <div class="row no-gutters">
                        <div class="col">
                            <p><i class="fa fa-map-marker text_colored"></i> Address: 557 Cyan Avenue, Suite <br><span style="padding-left:85px">65 New York, CA 9008</span></p>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col">
                            <p><i class="fa fa-phone text_colored"></i> Phone: (123) 456-7890</p>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col">
                            <p><i class="fa fa-envelope text_colored"></i> Email: support@coinbaseassets.com</p>
                        </div>
                    </div>
                    <div class="header_top_right">
                        <a href="{{ route('login')}}" class="text-light"><span><img class="icon_img" src="{{ asset('front/img/icons/user.png')}}" alt=""> SignIn</span></a>
                            <span class="vertical_divider"></span>
                            <a href="{{ route('register')}}" class="text-light"><span><img class="icon_img" src="{{ asset('front/img/icons/chat.png')}}" width="30px" alt=""> SignUp</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 footer_middle p-4">
                    <h5 class="footer_header">Information</h5>
                    <ul>
                        <li><a href="#payment_option"><i class="fa fa-angle-right"></i> Payment Option</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> How It Work</a></li>
                        <li><a href="#apps"><i class="fa fa-angle-right"></i> Security Utility</a></li>
                        <li><a href="#aapl"><i class="fa fa-angle-right"></i> AAPL Checker</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Coinbase Assets Worthiness</a></li>
                        <li><a href="{{ route('packages')}}"><i class="fa fa-angle-right"></i> Our Packages</a></li>
                        <li><a href="{{ route('legacy')}}"><i class="fa fa-angle-right"></i> Legal Certificate</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-12 p-4">
                    <h5 class="footer_header">Subscribe</h5>
                        <form class="row no-gutters" action="" method="POST">
                            <div class="col-12">
                                <div class="subscribe-form">
                                    <input type="text" style="color:grey" name="mail" placeholder="Email Address" required>
                                    <button type="submit" name="send" class="btn_default"><i class="fa fa-paper-plane-o"></i></button>
                                   <br>
                                   @if (isset($_POST["mail"])) {
                                                echo ' <span class="text-danger">You encounter service error please try again</span>';
                                            } else {
                                                echo "";
                                            }
                                       @endif
                                </div>
                            </div>
                        </form>
                        <br>
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



                                @if (isset($_POST["mail"])) {
                                    echo " <script>
                                    Swal.fire(
                                        'Service connection failed!',
                                        'Unable to subscribe, please try again or click <b>OK</b> below to Contact us for more enquires',
                                        'error'
                                      ).then(function() {
                                        window.location = 'index.php#contact_wrapper';
                                    });
                                      </script> ";
                                } @else {
                                    echo "";
                                }
                            @endif

                    <div class="footer_socials">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    <br>
                    <p class="">
                    Risk Disclaimer: Past Returns Do Not Assure Future Returns. All financial products with a margin involve a certain risk for your capital. They are not suitable for all participants. Please make sure you fully understand the risks involved. Any reference to possible earnings, whether implicit or explicit, is provided for illustrative purposes only. Amarexcoin Investment does not guarantee profits or any kind of success. Profits depend on the returns, skills and leadership of each Independent Distributor
                    </p>
                    <div class="row">
                        <div class="col-lg-4 p-2">
                            <img src="{{ asset('front/img/138-small.jpeg')}}" alt="Privacy verified">
                        </div>
                        <div class="col-lg-4 p-2">
                            <img src="{{ asset('front/img/140-small.jpeg')}}" alt="Business verified">
                        </div>
                        <div class="col-lg-4 p-2">
                            <img src="{{ asset('front/img/139-small.jpeg')}}" alt="certified">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyright @2018 Design By <a href="#" class="text_colored">Coinbase Assets</a></p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="text-lg-right text-md-center">
                        <li><a href="{{ route('front.index')}}">Home</a></li>
                        <li><a href="{{ route('real_estate')}}">Real Estate</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="{{ route('terms')}}">Terms of use</a></li>
                        <li><a href="{{ route('front.index')}}#faq_wrapper">Faq</a></li>
                        <li><a href="legacy">Legacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('partials.front.scripts')
    <span id="lang"><div id="google_translate_element"></div></span>
    <style>
#lang{
    position: fixed;
    bottom: -20px;
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
    </body>
    </html>
