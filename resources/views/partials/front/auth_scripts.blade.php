

		<link rel="stylesheet" href="{{ asset('front/build/css/countrySelect.css')}}">
		<link rel="stylesheet" href="{{ asset('front/build/css/demo.css')}}">


                        <!-- Load jQuery from CDN so can run demo immediately -->
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <script src="{{ asset('front/build/js/countrySelect.js')}}"></script>

<style>

form {
  background:#111;
  width:300px;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}


.inset {
  padding:20px;
  border-top:1px solid #19191a;
}

form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}



input[type=text],
input[type=password],
input[type=email],
input[type=tel] {
  width:100%;
  padding:8px 5px;
  background:black;
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
    color: silver;
}


input[type=text]:hover,
input[type=password]:hover,
input[type=email]:hover,
input[type=passowrd]:hover,
input[type=tel]:hover {
  background:black;
}
  /*@import url('https://fonts.googleapis.com/css?family=Poppins');*/

/* BASIC */


/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  min-height: 100%;
  padding: 20px;
}






/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}
</style>


<!-- Script for Telephone -->
<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:

      // const phoneInput = window.intlTelInput(phoneInputField, {
      // initialCountry: "auto",
      // geoIpLookup: getIp,
      // utilsScript:

      // const phoneInput = window.intlTelInput(phoneInputField, {
      // preferredCountries: ["us", "co", "in", "de"],
      // utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

 </script>

 <!-- email validation -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

                            <style media="screen">
                            #icon{
                                float: right;
                                height: 50px;
                                position: relative;
                                font-size: 20px;
                            }
                            #error-msg{
                                display: none;
                                color: #ff2851;
                                font-size: 14px;
                            }
                            #error-msg-valid{
                                display: none;
                                color: #2ecc71;
                                font-size: 14px;
                            }
                                </style>
                            <!--Script-->
                            <script type="text/javascript">


                              let emailId = document.getElementById("email-id");
                              let errorMsg = document.getElementById("error-msg");
                              let errorMsgValid = document.getElementById("error-msg-valid");
                              let icon = document.getElementById("icon");
                              let mailRegex = /^[a-zA-Z][a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/;

                              function checker(){
                                  icon.style.display="inline-block";
                                  if(emailId.value.match(mailRegex)){
                                      icon.innerHTML = '<i class="fas fa-check-circle"></i>';
                                      icon.style.color = '#2ecc71';
                                      errorMsg.style.display = 'none';
                                      errorMsgValid.style.display = 'block';
                                      emailId.style.border = '2px solid #2ecc71';
                                  }
                                  else if(emailId.value == ""){
                                      icon.style.display = 'none';
                                      errorMsg.style.display = 'none';
                                      errorMsgValid.style.display = 'block';
                                      emailId.style.border = '2px solid #d1d3d4';
                                  }
                                  else{
                                      icon.innerHTML = '<i class="fas fa-exclamation-circle"></i>';
                                      icon.style.color = '#ff2851';
                                      errorMsg.style.display = 'block';
                                      errorMsgValid.style.display = 'none';
                                      emailId.style.border = '2px solid #ff2851';
                                  }

                              }
                              </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $('#password, #password_confirmation').on('keyup', function () {
    if ($('#password').val() == $('#password_confirmation').val()) {
        $('#message').html('Matched!').css('color', 'green');
    }
    // elseif ($('#password').val() == null() ){
    //   $('#message').html('');
    // }
      else
        $('#message').html('Not Match...').css('color', 'red');
    });
</script>
