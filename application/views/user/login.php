<div class="breadcrumb-area ptb-15" data-bgimg="<?= base_url() ?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
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
</style> <!-- breadcrumb-area end -->
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

                    <form method="post" id="otpFormLogin">
                        <div class="buy-now-modal-form">
                            <div class="row field-row">
                                <div class="col-12 field-col">
                                    <label for="phone" class="field-label">Mobile number</label>
                                    <input type="tel" pattern="^[987][0-9]{9}$" inputmode="numeric" maxlength="10" minlength="10" id="loginphone" name="phone" class="w-100" placeholder="10 Digit Mobile number" autocomplete="tel" required>
                                </div>

                                <div class="col-12 field-col d-none" id="otp-field">
                                    <label for="otp" class="field-label">OTP <span id="dummyOtp"></span></label>
                                    <input type="number" minlength="4" maxlength="4" id="otplogin" name="otp" class="w-100" placeholder="Enter OTP" inputmode="numeric" required>
                                </div>

                                <div class="col-12 field-col">
                                    <span id="errMsgg" class="text-danger"></span>
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



                </div>
            </div>
        </div>
    </section>
    <!-- login end -->
</main>
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let enteredMobileLogin = '';
    // === Send OTP ===
    $(document).on('click', '#send-otp-btn button', function() {
        const mobile = $('#loginphone').val().trim();
        $('#errMsgg').text('');
        enteredMobileLogin = mobile;
        $('#loginphone').attr('readonly', true);
        const regex = /^[789]\d{9}$/;
        if (!regex.test(mobile)) {
            $('#errMsgg').text('Enter a valid 10-digit mobile number starting with 7, 8, or 9.');
            return;
        }

        $.ajax({
            url: '<?= base_url("user/login_otp") ?>',
            type: 'POST',
            data: {
                mobile_number: mobile
            },
            dataType: 'json',
            success: function(res) {
                if (res.status === 'success') {
                    receivedOtp = res.otp; // For demo only, normally don't expose
                    user_status = res.user_status;
                    userDet = res.user_id;

                    // Show OTP input & verify button
                    $('#otp-field').removeClass('d-none');
                    $('#send-otp-btn').addClass('d-none');
                    $('#verify-otp-btn').removeClass('d-none');

                    // REMOVE THIS LINE IN PRODUCTION
                    // $('#dummyOtp').text(receivedOtp);
                } else {
                    $('#errMsgg').text(res.msg || 'Something went wrong.');
                }
            },
            error: function() {
                $('#errMsgg').text('Failed to send OTP. Try again.');
            }
        });
    });

    // === Verify OTP ===
    $(document).on('submit', '#otpFormLogin', function(e) {
        e.preventDefault();
        const inputOtp = $('#otplogin').val().trim();

        if (inputOtp.length !== 4) {
            $('#errMsgg').text('Please enter the 4-digit OTP.');
            return;
        }

        // ✅ For real security, you should verify OTP on server side
        $.ajax({
            url: '<?= base_url("user/checkOtpMatched") ?>',
            type: 'POST',
            data: {
                mobile_number: enteredMobileLogin,
                otp: inputOtp
            },
            dataType: 'json',
            success: function(res) {
                console.log("checkOtpMatched -- ", res);
                if (res.status === 'success') {
                    location.reload();
                } else {
                    alert('Failed To Login, Try Again');
                }
            },
            error: function() {
                // alert("Failed to send OTP. Try again.");
                document.getElementById('errMsgg').innerHTML = 'Failed to send OTP. Try again.';

            }
        });
    });
</script>