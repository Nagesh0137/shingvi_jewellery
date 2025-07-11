

<!doctype html>
<html lang="en" class="theme-fs-md">
  
<!-- Mirrored from templates.iqonic.design/socialv-dist/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 15:24:39 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Virtual Pan India | A2Z IT HUB</title>
      <!-- Config Options -->
      <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;socialV&quot;,&quot;setting&quot;:{&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{prefix}}primary&quot;:&quot;#50b5ff&quot;,&quot;--{{prefix}}info&quot;:&quot;#d592ff&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;navs-rounded-all&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;}}}'>
      <!-- End Config Options -->
      <link rel="shortcut icon" href="<?=base_url()?>uploads/clogo.png" />
      <link rel="stylesheet" href="<?=base_url()?>assets/assets/css/libs.min.css">
      <link rel="stylesheet" href="<?=base_url()?>assets/assets/css/socialv097b.css?v=5.2.0">
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
      <!-- flatpickr css -->
      <link rel="stylesheet" href="<?=base_url()?>assets/assets/vendor/flatpickr/dist/flatpickr.min.css" />
      <!-- Sweetlaert2 css -->
      <link rel="stylesheet" href="<?=base_url()?>assets/assets/vendor/sweetalert2/dist/sweetalert2.min.css" />
      
      <!-- vanillajs css -->
      <link rel="stylesheet" href="<?=base_url()?>assets/assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      
      <!-- zuck -->
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="<?=base_url()?>assets/assets/css/custom097b.css?v=5.2.0" />
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="<?=base_url()?>assets/assets/css/customizer097b.css?v=5.2.0" />  </head>
  <body class="">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
<section class="sign-in-page">
   <div class="container-fluid">
      <div class="row align-items-center ">
         <div class="col-md-6 overflow-hidden position-relative" >
            <div class="bg-primary w-100 h-100 position-absolute top-0 bottom-0 start-0 end-0"></div>
            <div class="container-inside z-1">
               <div class="main-circle circle-small"></div>
               <div class="main-circle circle-medium"></div>
               <div class="main-circle circle-large"></div>
               <div class="main-circle circle-xlarge"></div>
               <div class="main-circle circle-xxlarge"></div>
            </div>
            <div class="sign-in-detail container-inside-top">
               <div class="swiper swiper-general overflow-hidden " data-slide="1" data-laptop="1" data-tab="1" data-mobile="1"
                  data-mobile-sm="1" data-autoplay="true" data-loop="true" data-navigation="false" data-pagination="true"
                  data-space="16">
                  <ul  class="swiper-wrapper list-inline m-0 p-0 ">
                     <li class="swiper-slide">
                        <img src="<?=base_url()?>assets/istockphoto-671580278-612x612.jpg" class="signin-img img-fluid mb-5 rounded-3" alt="image">
                        <h2 class="mb-3 text-white fw-semibold">Power UP Your Friendship</h2>
                        <p class="font-size-16 text-white mb-0">It is a long established fact that a reader will be<br/> distracted by the readable content.</p>
                     </li>
                     <li class="swiper-slide">
                        <img src="<?=base_url()?>assets/pngtree-raw-material-pure-cotton-cotton-wool-xinjiang-cotton-photography-map-with-image_850000.jpg" class="signin-img img-fluid mb-5 rounded-3" alt="image"> 
                        <h2 class="mb-3 text-white fw-semibold">Connect with the world</h2>
                        <p class="font-size-16 text-white mb-0">It is a long established fact that a reader will be<br/> distracted by the readable content.</p>
                     </li>
                     <li class="swiper-slide">
                        <img src="<?=base_url()?>assets/wcbb4.jpg" class="signin-img img-fluid mb-5 rounded-3" alt="image">
                        <h2 class="mb-3 text-white fw-semibold">Together Is better</h2>
                        <p class="font-size-16 text-white mb-0">It is a long established fact that a reader will be<br/> distracted by the readable content.</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-6 mt-0">

            <div class="sign-in-from p-0 mt-0 text-center">
                  <img src="<?=base_url()?>uploads/clogo.png" style="height: 20vh;"><br>
               
               <p class="font-size-16 m-0 p-0">Welcome to Virtual White Flame, a platform to connect with<br/> the social world</p>
               <form class="" id="mobileForm" action="<?=base_url()?>login/new_sign_up" method="post">
                  <div class="form-group text-start">
                     <h6 class="form-label fw-bold">Your Full Name</h6>
                     <input type="text" name="user_name"required class="form-control mb-0" placeholder="Your Full Name" >
                  </div>
                  <div class="form-group text-start">
                     <h6 class="form-label fw-bold">Company Name</h6>
                     <input type="text" name="user_company_name" required class="form-control mb-0" placeholder="Your Company Name">
                  </div>
                  <div class="form-group text-start">
                     <h6 class="form-label fw-bold">Email Address</h6>
                     <input type="email" class="form-control mb-0" required name="user_email" placeholder="Your Full Name">
                  </div>
                  <div class="form-group text-start">
                            <label for="validationCustomUsername" class="form-label fw-bold h6">Mobile Number</label>
                            <div class="form-group input-group">
                             <input id="validationCustomUsername" type="text" name="user_mobile_no" required maxlength="10" class="form-control mb-0 mobileNumber" placeholder="Your Mobile Number" onkeyup="validateMobileNumber()">
                               <div id="otpBtn" style="display:none;"><span class="input-group-text text-dark" onclick="sendOtp()" >SEND OTP</span></div>
                            </div>
                           <small id="error-msg" style="color: red;display: none;">Please enter a valid 10-digit mobile number.</small>
                           <b id="otp-sent-msg"></b>
                            </div>
                  <div class="form-group text-start" id="otpDiv" style="display:none;">
                     <h6 class="form-label fw-bold">Enter OTP</h6>
                     <input type="text" name="otp" required maxlength="6" min="6" class="form-control mb-0" placeholder="Enter OTP" id="otpTxt" onkeyup="validateOtp(this)">
                     <b id="otp-matched-msg"></b>
                  </div>
                  <div class="form-group text-start">
                     <h6 class="form-label fw-bold">Your Password</h6>
                     <input type="password" name="user_password" required class="form-control mb-0" placeholder="Password">
                  </div>

                  <div class="d-flex align-items-center justify-content-between">
                     <div class="form-check d-inline-block m-0">
                        <input type="checkbox" required class="form-check-input">
                        <h6 class="form-check-label fw-500 font-size-14">I accept <a class="fw-light ms-1">Terms and Conditions</a></h6>
                     </div>
                   </div>
                  <button type="submit" class="btn btn-primary mt-0 fw-semibold text-uppercase w-100" disabled id="submitBtn">sign up</button>
                  <h6 class="mt-2">Already Have An Account ? <a href="<?=base_url()?>login/">Login</a></h6>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
function validateOtp(otp) {
    var OTP = otp.value;
    const mobileNumber = document.querySelector('.mobileNumber').value;
    const submitBtn = document.getElementById('submitBtn');
    const otpTxt = document.getElementById('otpTxt');
    const otpMatchMsg = document.getElementById('otp-matched-msg');
        $.ajax({
            url: '<?=base_url()?>login/validateOtp',
            type: 'POST',
            dataType: 'json',
            data: {otp: OTP,mobileNumber:mobileNumber},
        })
        .done(function(res) {
            if (res.status === 'success') {
               otpMatchMsg.innerHTML = "OTP Matched.";
               otpMatchMsg.style.color = 'green';
               submitBtn.removeAttribute('disabled');
               otpTxt.setAttribute('readonly', true);
            } else {
               otpMatchMsg.innerHTML = "OTP Not Matched.";
               otpMatchMsg.style.color = 'red';
            }
        });
}
function sendOtp() {
    const otpBtn = document.getElementById('otpBtn');
    const mobileNumber = document.querySelector('.mobileNumber').value;
    const otpMsg = document.getElementById('otp-sent-msg');
    const otpDiv = document.getElementById('otpDiv');

    otpBtn.style.display = 'none'; 

    $.ajax({
            url: '<?=base_url()?>login/sendOtp',
            type: 'POST',
            dataType: 'json',
            data: {mobileNumber: mobileNumber},
        })
        .done(function(res) {
            if (res.status === 'success') {
                otpMsg.innerHTML = "OTP Has Been Sent To Your Mobile No. Please Check.";
                otpMsg.style.color = 'green';
                otpDiv.style.display = 'block'; // Hide OTP button
            } else {
                otpMsg.innerHTML = "Mobile No. Already Registered. Please Login.";
                otpMsg.style.color = 'red';
                otpDiv.style.display = 'none'; // Hide OTP button
            }
        });
}


function validateMobileNumber() {
    const mobileNumber = document.querySelector('.mobileNumber').value;
    const errorMsg = document.getElementById('error-msg');
    const otpBtn = document.getElementById('otpBtn');
    const otpMsg = document.getElementById('otp-sent-msg');

    // Remove any non-numeric characters
    document.querySelector('.mobileNumber').value = mobileNumber.replace(/\D/g, '');

    // Check if the length is 10 digits
    if (mobileNumber.length !== 10) {
        errorMsg.style.display = 'block'; // Show error message
        otpBtn.style.display = 'none'; // Hide OTP button
    } else {
        errorMsg.style.display = 'none'; 
        otpBtn.style.display = 'block'; 
    }
}

</script>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="<?=base_url()?>assets/assets/js/libs.min.js"></script>
    <!-- Lodash Utility -->
    <script src="<?=base_url()?>assets/assets/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="<?=base_url()?>assets/assets/js/setting/utility.js"></script>
    <!-- Settings Script -->
    <script src="<?=base_url()?>assets/assets/js/setting/setting.js"></script>
    <!-- Settings Init Script -->
    <script src="<?=base_url()?>assets/assets/js/setting/setting-init.js" defer></script>
    <!-- slider JavaScript -->
    <script src="<?=base_url()?>assets/assets/js/slider.js"></script>
    <!-- masonry JavaScript --> 
    <script src="<?=base_url()?>assets/assets/js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="<?=base_url()?>assets/assets/js/enchanter.js"></script>
    <!-- Sweet-alert Script -->
    <script src="<?=base_url()?>assets/assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
    <script src="<?=base_url()?>assets/assets/js/sweet-alert.js" defer></script>
    <!-- Chart Custom JavaScript -->
    <!-- app JavaScript -->
    <script src="<?=base_url()?>assets/assets/js/charts/weather-chart.js"></script>
    <script src="<?=base_url()?>assets/assets/js/app.js"></script>
    <!-- Flatpickr Script -->
    <script src="<?=base_url()?>assets/assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <!-- fslightbox Script -->
    <script src="<?=base_url()?>assets/assets/js/fslightbox.js" defer></script> 
    <!-- vanilla Script -->
    <script src="<?=base_url()?>assets/assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <!--lottie Script -->
    <script src="<?=base_url()?>assets/assets/js/lottie.js"></script>
    <!--select2 Script -->
    <script src="<?=base_url()?>assets/assets/js/select2.js"></script>
    <!--ecommerce Script -->
    <script src="<?=base_url()?>assets/assets/js/ecommerce.js"></script>
    <?php if($this->session->flashdata('success')): ?>
    

    <div id="alertDiv"  class="toaster_div alert alert-left alert-success align-items-center gap-2 alert-dismissible mb-3 col-5" style="position: fixed;top: 20px;right: 20px;z-index: 11111;display: flex;" role="alert">
                           <span class="d-flex"><i class="material-symbols-outlined">thumb_up</i></span>
                           <span> <?php echo $this->session->flashdata('danger'); ?></span>
                           <button type="button" class="btn-close" data-bs-dismiss="alert"
                              aria-label="Close"></button>
   </div>

<?php endif; ?>


<?php if($this->session->flashdata('danger')): ?>
    <div id="alertDiv"  class="toaster_div alert alert-left alert-warning align-items-center gap-2 alert-dismissible mb-3 col-5" style="position: fixed;top: 20px;right: 20px;z-index: 11111;display: flex;" role="alert">
                           <span class="d-flex"><i class="material-symbols-outlined">thumb_up</i></span>
                           <span> <?php echo $this->session->flashdata('danger'); ?></span>
                           <button type="button" class="btn-close" data-bs-dismiss="alert"
                              aria-label="Close"></button>
   </div>
<?php endif; ?>

<script>
    setTimeout(function(){
      $(".toaster_div").fadeOut();
    }, 4000); 
</script> 
  </body>

<!-- Mirrored from templates.iqonic.design/socialv-dist/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 15:24:39 GMT -->
</html>