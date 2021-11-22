

		<link rel="stylesheet" href="{{ asset('front/build/css/countrySelect.css')}}">
		<link rel="stylesheet" href="{{ asset('front/build/css/demo.css')}}">


                        <!-- Load jQuery from CDN so can run demo immediately -->
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <script src="{{ asset('front/build/js/countrySelect.js')}}"></script>


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
