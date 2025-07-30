<!-- breadcrumb-area start -->
<div class="breadcrumb-area ptb-15" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?= base_url() ?>" class="extra-color">Home</a> / Profile</span>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- main start -->
<main id="main">
    <!-- account-page strat -->
    <section class="account-page section-ptb">
        <div class="container">
            <div class="row row-mtm align-items-lg-start">
                <div class="col-12 col-lg-4 col-xl-3 p-lg-sticky top-0" data-animate="animate__fadeIn">
                    <div class="ap-info">
                        <div class="ap-author ptb-30 plr-15 extra-bg text-center border-radius">

                            <img src="<?= base_url() ?>uploads/dummy_profile.png" class="img-fluid" alt="customer Profile" style="height:70px; width:70px; border-radius:50%; object-fit:cover;">

                            <div class="ap-ac mst-26">
                                <h6 class="font-18"><?php if (!empty($customer_details) && isset($customer_details[0]['firstname'])) {
                                                        echo $customer_details[0]['firstname'];
                                                    } ?> <?php if (!empty($customer_details) && isset($customer_details[0]['lastname'])) {
                                                                echo $customer_details[0]['lastname'];
                                                            } ?></h6>
                                <h3 class="font-12"><?php if (!empty($customer_details) && isset($customer_details[0]['mobile'])) {
                                                        echo $customer_details[0]['mobile'];
                                                    } ?></h3>
                                <h3 class="font-12"><?php if (!empty($customer_details) && isset($customer_details[0]['email'])) {
                                                        echo $customer_details[0]['email'];
                                                    } ?></h3>

                            </div>
                        </div>
                        <div class="ap-profile">
                            <a href="javascript:void(0)" class="dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15">
                                <span class="ap-icon dominant-color icon-16 mer-5"><i class="ri-user-settings-line"></i></span>
                                <span class="ap-name me-auto">Profile</span>
                            </a>

                            <!--  <a href="profile-order.html" class="body-dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15">
                                <span class="ap-icon body-color icon-16 mer-5"><i class="ri-shopping-bag-3-line"></i></span>
                                <span class="ap-name me-auto">Orders</span>
                                <span class="ap-count extra-color font-12 d-flex align-items-center justify-content-center secondary-bg rounded-circle">3</span>
                            </a> -->


                            <a href="<?= base_url() ?>user/my_address" class="body-dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15">
                                <span class="ap-icon body-color icon-16 mer-5">
                                    <i class="ri-map-pin-line"></i>
                                </span>
                                <span class="ap-name me-auto">Address</span>
                            </a>

                            <a href="<?= base_url() ?>user/my_orders" class="body-dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15">
                                <span class="ap-icon body-color icon-16 mer-5">
                                    <i class="ri-shopping-bag-3-line"></i>
                                </span>
                                <span class="ap-name me-auto">My Orders</span>
                            </a>
                            <a href="<?= base_url() ?>user/customer_jewellery_list" class="body-dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15">
                                <span class="ap-icon body-color icon-16 mer-5">
                                    <i class="ri-gemini-line"></i>
                                </span>
                                <span class="ap-name me-auto">Custom Jeweller</span>
                            </a>

                            <a href="<?= base_url('user/logout') ?>" class="body-dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15" onclick="return confirm('Are you sure you want to logout?')">
                                <span class="ap-icon body-color icon-16 mer-5"><i class="ri-logout-box-line"></i></span>
                                <span class="ap-name me-auto">Logout</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-9 p-lg-sticky top-0">
                    <div class="ap-detail">
                        <form action="<?= base_url() ?>user/update_user_details" method="post" enctype="multipart/form-data">
                            <div class="ap-detail-info">
                                <div class="acc-info" data-animate="animate__fadeIn">
                                    <div class="acc-title d-flex align-items-center justify-content-between">
                                        <h6 class="font-18">Personal Information</h6>
                                        <button type="button" class="acc-edit d-none body-secondary-color icon-16" aria-label="Edit">
                                            <i class="ri-edit-2-line d-block lh-1"></i>
                                        </button>
                                    </div>

                                    <div class="acc-detail mst-22">
                                        <div class="acc-detail-form">
                                            <div class="acc-detail-field">
                                                <div class="row field-row">
                                                    <!-- <input type="hidden" name="profile_photo1" value="<?php if (!empty($customer_details) && isset($customer_details[0]['profile_photo'])) {
                                                                                                                echo $customer_details[0]['profile_photo'];
                                                                                                            } ?>"> -->
                                                    <input type="hidden" name="customers_id" value="<?= $_SESSION['user_id'] ?>">

                                                    <!-- First Name -->
                                                    <div class="col-12 col-md-6 field-col">
                                                        <label for="fname" class="field-label">
                                                            Name <span style="color: red;">*</span>
                                                        </label>
                                                        <input type="text" 
                                                               id="fname" 
                                                               name="name" 
                                                               class="w-100" 
                                                               placeholder="name" 
                                                               autocomplete="given-name" 
                                                               required 
                                                               minlength="2" 
                                                               maxlength="50" 
                                                               pattern="[A-Za-z\s]+" 
                                                               title="Name must contain only letters and spaces, minimum 2 characters"
                                                               value="<?php if (!empty($customer_details) && isset($customer_details[0]['name'])) {
                                                                           echo $customer_details[0]['name'];
                                                                       } ?>">
                                                    </div>

                                                    <!-- Last Name -->
                                                    <!-- <div class="col-12 col-md-6 field-col">
                                                        <label for="lname" class="field-label">
                                                            Last Name <span style="color: red;">*</span>
                                                        </label>
                                                        <input type="text" id="lname" name="lastname" class="w-100" placeholder="Last name" autocomplete="family-name" value="<?php if (!empty($customer_details) && isset($customer_details[0]['lastname'])) {
                                                                                                                                                                                    echo $customer_details[0]['lastname'];
                                                                                                                                                                                } ?>">
                                                    </div> -->

                                                    <!-- Mobile -->
                                                    <div class="col-12 col-md-6 field-col">
                                                        <label for="mobile" class="field-label">
                                                            Mobile <span style="color: red;">*</span>
                                                        </label>
                                                        <input type="tel" 
       id="mobile" 
       name="mobile" 
       class="w-100" 
       maxlength="10"
       placeholder="Mobile number" 
       autocomplete="tel" 
       required 
       pattern="[7-9][0-9]{9}" 
       title="Mobile number must start with 7, 8, or 9 and be 10 digits"
       value="<?php if (!empty($customer_details) && isset($customer_details[0]['mobile'])) {
                   echo $customer_details[0]['mobile'];
               } ?>">

                                                    </div>

                                                    <!-- Email -->
                                                    <div class="col-12 col-md-6 field-col">
                                                        <label for="email" class="field-label">
                                                            Email <span style="color: red;">*</span>
                                                        </label>
                                                        <input type="email" 
                                                               id="email" 
                                                               name="email" 
                                                               class="w-100" 
                                                               placeholder="Email address" 
                                                               autocomplete="email" 
                                                               required 
                                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                                                               title="Please enter a valid email address"
                                                               value="<?php if (!empty($customer_details) && isset($customer_details[0]['email'])) {
                                                                           echo $customer_details[0]['email'];
                                                                       } ?>">
                                                    </div>

                                                    <!-- Upload Image -->
                                                    <!-- <div class="col-12 field-col">
                        <label class="field-label">
                          Upload Image <span style="color: red;">*</span>
                      </label>
                      <div class="field-attachment ptb-30 plr-15 plr-sm-30 text-center">
                          <div class="img-upload d-flex flex-column align-items-center">
                            <label for="profile-img" class="img-file-upload dominant-link text-decoration-underline">Upload here</label>
                            <div class="mst-10 meb-26">Upload image 512px X 512px</div>
                            <input type="file" id="profile-img" name="profile_photo" class="w-100 img-file" hidden>
                            <div class="field-attached">
                              <img src="<?= base_url() ?>uploads/<?= $customer_details[0]['profile_photo'] ?>" class="img-fluid img-preview border-radius" alt="Profile Image">
                          </div>
                      </div>
                  </div>
              </div> -->

                                                </div>
                                            </div>

                                            <!-- Buttons -->
                                            <div class="ap-profile-button mst-20 mst-sm-30">
                                                <div class="row btn-row">
                                                    <div class="col-12 col-sm-6 col-xl-3">
                                                        <button type="submit" class="w-100 acc-save btn-style quaternary-btn">Update Profile</button>
                                                    </div>
                                                    <!-- <div class="col-12 col-sm-6 col-xl-3">
                                                        <button type="reset" class="w-100 acc-cancel btn-style secondary-btn">Cancel</button>
                                                    </div> -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- delete-modal start -->
        <div class="delete-modal modal fade" id="deletemodal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <form method="post" action="javascript:void(0)">
                            <div class="delete-modal-header d-flex align-items-center justify-content-between meb-30">
                                <h6 class="font-18">Are you sure you want to delete account?</h6>
                                <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                            </div>
                            <div class="delete-modal-text">Orders history and all data associated with your account will be removed.</div>
                            <div class="delete-modal-button mst-30">
                                <div class="row btn-row">
                                    <div class="col-12 col-sm-6">
                                        <a href="<?= base_url() ?>user/delete_account" class="w-100 btn-style quaternary-btn">Delete</a>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <button type="submit" class="w-100 btn-style secondary-btn" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete-modal end -->
        <!-- field-delete-modal start -->
        <div class="field-deletemodal modal fade" id="field-deletemodal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <form method="post" action="javascript:void(0)">
                            <div class="field-deletemodal-header d-flex align-items-center justify-content-between meb-30">
                                <h6 class="font-18"><i class="ri-error-warning-line text-danger icon-16"></i> Field delete!</h6>
                                <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                            </div>
                            <div class="field-deletemodal-text">Are you sure you want to delete this field?</div>
                            <div class="field-deletemodal-button mst-30">
                                <div class="row btn-row">
                                    <div class="col-12 col-sm-6">
                                        <button type="button" class="w-100 btn-style quaternary-btn" data-bs-dismiss="modal">No</button>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <button type="submit" class="w-100 btn-style secondary-btn" id="fieldremove">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- field-delete-modal end -->
    </section>
    <!-- account-page end -->
</main>
<!-- main end -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[action*="update_user_details"]');
    const nameInput = document.getElementById('fname');
    const mobileInput = document.getElementById('mobile');
    const emailInput = document.getElementById('email');

    // Function to show validation message
    function showValidationMessage(input, message) {
        // Remove existing error message
        const existingError = input.parentNode.querySelector('.validation-error');
        if (existingError) {
            existingError.remove();
        }

        // Create and show new error message
        const errorDiv = document.createElement('div');
        errorDiv.className = 'validation-error';
        errorDiv.style.color = 'red';
        errorDiv.style.fontSize = '12px';
        errorDiv.style.marginTop = '5px';
        errorDiv.textContent = message;
        input.parentNode.appendChild(errorDiv);
    }

    // Function to remove validation message
    function removeValidationMessage(input) {
        const existingError = input.parentNode.querySelector('.validation-error');
        if (existingError) {
            existingError.remove();
        }
    }

    // Real-time validation for name field
    nameInput.addEventListener('input', function() {
        const value = this.value.trim();
        removeValidationMessage(this);
        
        if (value.length < 2) {
            showValidationMessage(this, 'Name must be at least 2 characters long');
        } else if (!/^[A-Za-z\s]+$/.test(value)) {
            showValidationMessage(this, 'Name can only contain letters and spaces');
        }
    });

    // Real-time validation for mobile field
    mobileInput.addEventListener('input', function() {
        const value = this.value.trim();
        removeValidationMessage(this);
        
        if (value.length > 0 && value.length !== 10) {
            showValidationMessage(this, 'Mobile number must be exactly 10 digits');
        } else if (value.length === 10 && !/^[7-9][0-9]{9}$/.test(value)) {
            showValidationMessage(this, 'Mobile number must start with 7, 8, or 9');
        }
    });

    // Real-time validation for email field
    emailInput.addEventListener('input', function() {
        const value = this.value.trim();
        removeValidationMessage(this);
        
        if (value.length > 0) {
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(value)) {
                showValidationMessage(this, 'Please enter a valid email address');
            }
        }
    });

    // Form submission validation
    form.addEventListener('submit', function(e) {
        const name = nameInput.value.trim();
        const mobile = mobileInput.value.trim();
        const email = emailInput.value.trim();

        let isValid = true;
        let errorMessages = [];

        // Validate name
        if (!name) {
            errorMessages.push('Name is required');
            isValid = false;
        } else if (name.length < 2) {
            errorMessages.push('Name must be at least 2 characters long');
            isValid = false;
        } else if (!/^[A-Za-z\s]+$/.test(name)) {
            errorMessages.push('Name can only contain letters and spaces');
            isValid = false;
        }

        // Validate mobile
        if (!mobile) {
            errorMessages.push('Mobile number is required');
            isValid = false;
        } else if (mobile.length !== 10) {
            errorMessages.push('Mobile number must be exactly 10 digits');
            isValid = false;
        } else if (!/^[7-9][0-9]{9}$/.test(mobile)) {
            errorMessages.push('Mobile number must start with 7, 8, or 9');
            isValid = false;
        }

        // Validate email
        if (!email) {
            errorMessages.push('Email is required');
            isValid = false;
        } else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
            errorMessages.push('Please enter a valid email address');
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
            
            // Show error messages inline
            if (!name) {
                showValidationMessage(nameInput, 'Name is required');
            }
            if (!mobile) {
                showValidationMessage(mobileInput, 'Mobile number is required');
            }
            if (!email) {
                showValidationMessage(emailInput, 'Email is required');
            }
            
            // Also show alert for better visibility
            alert('Please fix the following errors:\n\n' + errorMessages.join('\n'));
            return false;
        }
    });
});
</script>

<!-- footer start -->



<!-- Delete Account Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete your account? This action is permanent.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="<?= base_url('user/delete_account') ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>