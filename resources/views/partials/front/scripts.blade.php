<script src="{{ asset('front/js/jquery.js')}}"></script>
<script src="{{ asset('front/js/popper.min.js')}}"></script>
<script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('front/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('front/js/appear.js')}}"></script>
<script src="{{ asset('front/js/owl.js')}}"></script>
<script src="{{ asset('front/js/wow.js')}}"></script>
<script src="{{ asset('front/js/jquery-ui.js')}}"></script>
<script src="{{ asset('front/js/main.js')}}"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="{{ asset('front/js/map-script.js')}}"></script>

<style>


    .bar1, .bar2, .bar3 {
        width: 35px;
        height: 5px;
        background-color: #333;
        margin: 6px 0;
        transition: 0.4s;
    }

    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-9px, 6px);
    }

    .change .bar2 {opacity: 0;}

    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
    }
</style>
<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
