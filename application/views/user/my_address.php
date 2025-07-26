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
                                <h6 class="font-18"><?= $customer_details[0]['firstname'] ?> <?= $customer_details[0]['lastname'] ?></h6>
                                <h3 class="font-12"><?= $customer_details[0]['mobile'] ?></h3>
                                <h3 class="font-12"><?= $customer_details[0]['email'] ?></h3>

                            </div>
                        </div>
                        <div class="ap-profile">
                            <a href="<?= base_url() ?>user/my_account" class="dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15">
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

                            <a href="<?= base_url('user/logout') ?>" class="body-dominant-color d-flex align-items-center justify-content-between ptb-15 plr-15" onclick="return confirm('Are you sure you want to logout?')">
                                <span class="ap-icon body-color icon-16 mer-5"><i class="ri-logout-box-line"></i></span>
                                <span class="ap-name me-auto">Logout</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-9 p-lg-sticky top-0">
                    <div class="ap-detail">

                        <form action="<?= base_url() ?>rohan/update_user_address" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                            <div class="ap-detail-info">
                                <div class="acc-info" data-animate="animate__fadeIn">
                                    <div class="acc-title d-flex align-items-center justify-content-between">
                                        <h6 class="font-18 mb-2">Shipping address</h6>
                                        <button type="button" class="acc-edit d-none body-secondary-color icon-16" aria-label="Edit"><i class="ri-edit-2-line d-block lh-1"></i></button>
                                    </div>
                                    <div class="acc-detail mst-22">
                                        <div class="acc-detail-form" id="address-list">
                                            <?php if (!empty($address)) : ?>
                                                <?php foreach ($address as $addr) : ?>
                                                    <div class="row field-row align-items-center mb-3 border p-2 rounded address-row" data-id="<?= $addr['customer_address_id'] ?>">
                                                        <div class="col-1 d-flex align-items-center justify-content-center">
                                                        <input type="radio" name="default_address" value="<?= $addr['customer_address_id'] ?>" class="default-address-checkbox" data-id="<?= $addr['customer_address_id'] ?>" <?= $addr['default_address'] == 'yes' ? 'checked' : '' ?> style="height: 25px;width: 25px;">
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="hidden" name="customer_address_id[]" value="<?= $addr['customer_address_id'] ?>">
                                                            <textarea class="form-control address-textarea" rows="2" placeholder="Address" name="address[]" ><?= htmlspecialchars($addr['address']) ?></textarea>
                                                        </div>
                                                        <div class="col-3">
                                                            <input type="text" class="form-control address-city" placeholder="City" name="city[]" value="<?= htmlspecialchars($addr['city']) ?>">
                                                        </div>
                                                        <div class="col-2">
                                                            <input type="text" class="form-control address-pincode" placeholder="Pincode" name="pincode[]" value="<?= htmlspecialchars($addr['pincode']) ?>">
                                                        </div>
                                                        <div class="col-2 text-end">
                                                            <?php if ($addr['default_address'] != 'yes') : ?>
                                                                <a href="<?=base_url()?>rohan/delete_address/<?=$addr['customer_address_id']?>" class="btn btn-danger btn-sm delete-address-btn">
                                                                    <i class="ri-delete-bin-line font-14"></i>
                                                            </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                    <div class="col-12" id="no-address-message">
                                                        <p class="text-center text-danger">Address not found please add address</p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text-end mt-3">
                                            <button type="button" class="btn btn-success btn-sm" id="show-add-address-fields-btn">Add Address</button>
                                        </div>

                                        <div id="add-address-fields" style="display:none;">
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <textarea class="form-control" name="new_address" placeholder="New Address"></textarea>
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" name="new_city" placeholder="City">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" name="new_pincode" placeholder="Pincode">
                                                </div>
                                            </div>
                                            <div class="text-end mt-2">
                                                <button type="button" class="btn btn-secondary btn-sm" id="cancel-add-address-btn">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <?php if (!empty($address)) : ?>
                                                <button type="submit" class="btn" style="background-color: #9c1138; color: #fff; border-radius: 0px;">Update Address</button>
                                            <?php else: ?>
                                                <button type="submit" class="btn" id="update-address-btn" style="background-color: #9c1138; color: #fff; border-radius: 0px; display: none;">Update Address</button>
                                            <?php endif; ?>
                                                
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
<script>
// Form validation function
function validateForm() {
    // Check if add address fields are visible
    if ($('#add-address-fields').is(':visible')) {
        var newAddress = $('textarea[name="new_address"]').val();
        var newCity = $('input[name="new_city"]').val();
        var newPincode = $('input[name="new_pincode"]').val();
        
        if (!newAddress || !newCity || !newPincode) {
            alert('Please fill all new address fields before submitting.');
            return false;
        }
    }
    return true;
}

// Only one checkbox can be checked at a time
// Only one radio can be selected at a time (built-in behavior)
$(document).on('change', '.default-address-checkbox', function() {
    var id = $(this).data('id');
    // AJAX call to set default address
    $.post('<?= base_url('user/set_default_address') ?>', { address_id: id }, function(res) {
        try {
            var response = JSON.parse(res);
            if (response.status !== 'success') {
                alert('Failed to update default address');
            }
        } catch(e) {
            console.error('Error parsing response', e);
        }
    });
    // Update delete button visibility
    $('.address-row').each(function() {
        var row = $(this);
        var checkbox = row.find('.default-address-checkbox');
        var deleteBtn = row.find('.delete-address-btn');
        if (checkbox.is(':checked')) {
            deleteBtn.hide();
        } else {
            deleteBtn.show();
        }
    });
});

// Initial delete button visibility
$(function() {
    $('.address-row').each(function() {
        var row = $(this);
        var checkbox = row.find('.default-address-checkbox');
        var deleteBtn = row.find('.delete-address-btn');
        if (checkbox.is(':checked')) {
            deleteBtn.hide();
        } else {
            deleteBtn.show();
        }
    });
});

// Delete address
$(document).on('click', '.delete-address-btn', function() {
    var row = $(this).closest('.address-row');
    var id = row.data('id');
    if (confirm('Are you sure you want to delete this address?')) {
        $.post('<?= base_url('user/delete_address') ?>', { address_id: id }, function(res) {
            try {
                var response = JSON.parse(res);
                if (response.status === 'success') {
                    row.remove();
                } else {
                    alert(response.message || 'Failed to delete address');
                }
            } catch(e) {
                alert('Failed to delete address');
            }
        });
    }
});

// Show add address fields on button click
$('#show-add-address-fields-btn').on('click', function() {
    $('#add-address-fields').show();
    $(this).hide();
    // Hide the "no address" message when adding address
    $('#no-address-message').hide();
    // Show the "Update Address" button when adding new address
    $('#update-address-btn').show();
});

// Hide add address fields on cancel button click
$('#cancel-add-address-btn').on('click', function() {
    $('#add-address-fields').hide();
    $('#show-add-address-fields-btn').show();
    // Show the "no address" message again if no addresses exist
    if ($('.address-row').length === 0) {
        $('#no-address-message').show();
    }
    // Hide the "Update Address" button when canceling
    $('#update-address-btn').hide();
});
</script>