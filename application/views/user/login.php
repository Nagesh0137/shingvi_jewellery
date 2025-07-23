
        <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
            <div class="container">
                <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Login</span>
            </div>
        </div>
      <style type="text/css">
          /* Add this to your stylesheet */
.google-login-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background-color: #fff;
    color: #5f6368;
    border: 1px solid #dadce0;
    border-radius: 4px;
    padding: 10px;
    font-weight: 500;
    transition: background-color 0.3s;
}

.google-login-btn:hover {
    background-color: #f8f9fa;
    border-color: #d2e3fc;
}

.google-login-btn svg {
    color: #4285F4;
}
      </style>  <!-- breadcrumb-area end -->
        <!-- main start -->
        <main id="main">
    <section class="customer-account section-ptb">
        <div class="container">
            <div class="section-capture text-center" data-animate="animate__fadeIn">
                <div class="section-title">
                    <h2 class="section-heading">Login account</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-md-auto">
                    
                    <form method="post" id="otpForm">
                        <div class="buy-now-modal-form">
                            <div class="row field-row">
                                <div class="col-12 field-col">
                                    <label for="phone" class="field-label">Mobile number</label>
                                    <input type="text" id="phone" name="phone" class="w-100" placeholder="10 Digit Mobile number" autocomplete="tel" required>
                                </div>

                                <div class="col-12 field-col d-none" id="otp-field">
                                    <label for="otp" class="field-label">OTP <span id="dummyOtp"></span></label>
                                    <input type="number" minlength="4" maxlength="4" id="otp" name="otp" class="w-100" placeholder="Enter OTP" inputmode="numeric" required>
                                </div>

                                <div class="col-12 field-col">
                                    <span id="errMsg" class="text-danger"></span>
                                </div>
                            </div>

                            <!-- Send OTP -->
                            <div class="question-form-btn mst-20 mst-sm-30" id="send-otp-btn">
                                <button type="button" class="w-100 btn-style secondary-btn">Send OTP</button>
                            </div>

                            <!-- Verify -->
                            <div class="question-form-btn mst-20 mst-sm-30 d-none" id="verify-otp-btn">
                                <button type="submit" class="w-100 btn-style secondary-btn">Verify</button>
                            </div>
                        </div>
                    </form>

                    <!-- OR divider -->
                    <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="px-3">OR</span>
                        <hr class="flex-grow-1">
                    </div>

                    <!-- Login with Google button -->
                    <div class="question-form-btn">
                        <a href="<?= base_url() ?>user/login_with_google">
                        <button type="button" class="w-100 btn-style google-login-btn" id="google-login-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-google">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"></path>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"></path>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"></path>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"></path>
                            </svg>
                            <span>Login with Google</span>
                        </button>
                    </a>
                    </div>

                  
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</main>
      <script>
let receivedOtp = '';
let userDet = '';
let user_status = '';

// === Send OTP ===
$(document).on('click', '#send-otp-btn button', function () {
  const mobile = $('#phone').val().trim();
  $('#errMsg').text('');

  const regex = /^[789]\d{9}$/;
  if (!regex.test(mobile)) {
    $('#errMsg').text('Enter a valid 10-digit mobile number starting with 7, 8, or 9.');
    return;
  }

  $.ajax({
    url: '<?= base_url("user/login_otp") ?>',
    type: 'POST',
    data: { mobile_number: mobile },
    dataType: 'json',
    success: function (res) {
      if (res.status === 'success') {
        receivedOtp = res.otp; // For demo only, normally don't expose
        user_status = res.user_status;
        userDet = (res.user_status === 'existing') ? res.data[0] : '';

        // Show OTP input & verify button
        $('#otp-field').removeClass('d-none');
        $('#send-otp-btn').addClass('d-none');
        $('#verify-otp-btn').removeClass('d-none');

        // REMOVE THIS LINE IN PRODUCTION
        $('#dummyOtp').text(receivedOtp);
      } else {
        $('#errMsg').text(res.msg || 'Something went wrong.');
      }
    },
    error: function () {
      $('#errMsg').text('Failed to send OTP. Try again.');
    }
  });
});

// === Verify OTP ===
$(document).on('submit', '#otpForm', function (e) {
  e.preventDefault();
  const inputOtp = $('#otp').val().trim();

  if (inputOtp.length !== 4) {
    $('#errMsg').text('Please enter the 4-digit OTP.');
    return;
  }

  // ✅ For real security, you should verify OTP on server side
  if (inputOtp == receivedOtp) {
    // If you still want to call backend to set session
    const userId = userDet ? userDet.customers_id : ''; // handle new user case
    $.ajax({
      url: '<?= base_url("user/setUserLogin") ?>',
      type: 'POST',
      data: { user_id: userId },
      dataType: 'json',
      success: function (res) {
        if (res.status === 'success') {
          alert('✅ OTP Verified & User Session Set');
          window.location.href = '<?= base_url("user/my_account") ?>'; // Redirect to user account page
        } else {
          $('#errMsg').text('Failed to set session.');
        }
      },
      error: function () {
        $('#errMsg').text('Error while setting session.');
      }
    });
  } else {
    $('#errMsg').text('❌ Wrong OTP. Please try again.');
  }
});


</script>