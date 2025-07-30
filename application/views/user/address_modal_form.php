<div class="address-modal-header mb-0 body-bg d-flex align-items-center justify-content-between">
    <h6 class="font-18"></h6>
    <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close">
        <i class="ri-close-large-line d-block lh-1"></i>
    </button>
</div>
<div class="p-2 mb-2 pt-0 mt-0 text-center align-items-center justify-content-between ">

    <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>" style="height: 50px;width: 70px;">

</div>

<input type="hidden" id="Selected_size" value="<?= $size ?>">
<input type="hidden" id="Selected_qty" value="<?= $qty ?>">
<style>
    .size-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .size-list li {
        display: inline-block;
    }

    .cust-checkbox-label {
        cursor: pointer;
        display: block;
    }

    .cust-checkbox {
        display: none;
    }

    .cust-check {
        display: inline-flex;
        white-space: nowrap;
        min-width: 38px;
        overflow: hidden;
        vertical-align: middle;
        justify-content: center;
        align-items: center;
        height: 35px !important;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-weight: 600;
        font-size: 13px;
        color: #444;
        background-color: #f9f6f2;
        transition: all 0.2s ease-in-out;
    }

    .cust-checkbox:checked+.cust-check {
        border: 1px solid #800000;
        color: #800000;
        background-color: #fff;
    }

    label.cust-checkbox-label input.cust-checkbox:checked~span.cust-check {
        background-color: #fadbe4 !important;
    }

    .clamp-text {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        /* Limit to 4 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .payment-option {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 5px 10px;
        margin-bottom: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        transition: background 0.3s, border-color 0.3s;
        font-family: sans-serif;
    }

    .payment-option:hover,
    .payment-option input[type="radio"]:checked+label {
        background-color: ghostwhite;
        /* Light orange-like hover */
        border-color: #9c1137;
    }

    .payment-option input[type="radio"] {
        /* cursor: pointer; */
    }

    .payment-label {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 100%;
    }

    .payment-price {
        font-weight: bold;
        color: #000;
    }

    .cod-note {
        font-size: 12px;
        color: #f06543;
        margin-top: 4px;
    }

    .modaladdress {
        display: none;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        position: fixed !important;
        bottom: 20;
        left: 0;
        right: 0;
        background: none;
        z-index: 1050;
    }



    .modal.modal-bottom .modal-dialog {
        position: absolute;
        bottom: 0;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        width: 100%;
        height: 75%;
        /* Makes the modal height 75% of screen */
        margin: 0 auto;
        animation: slideUp 0.3s ease-out;
    }

    .modal.modal-bottom .modal-content {
        height: 100%;
        border-radius: 20px 20px 0 0;
        overflow-y: auto;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    @keyframes slideInFromBottom {
        from {
            transform: translateY(100px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideOutToTop {
        from {
            transform: translateY(0);
            opacity: 1;
        }

        to {
            transform: translateY(-100px);
            opacity: 0;
        }
    }

    .modal-show-anim {
        animation: slideInFromBottom 0.4s ease forwards;
    }

    .modal-hide-anim {
        animation: slideOutToTop 0.4s ease forwards;
    }


    #modalOverlay {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        background-color: rgba(0, 0, 0, 0.5);
        /* dark semi-transparent */
        z-index: 1040;
        /* below modal (Bootstrap modal uses 1050) */
    }
</style>
<div id="modalOverlay" style="display:none;"></div>

<!-- OTP Form -->
<?php
if (!isset($_SESSION['user_id'])) {
    // print_r($_SESSION);
?>
    <form method="post" id="otpForm">

        <div class="buy-now-modal-form">
            <div class="row field-row">
                <input type="hidden" name="product_id" value="<?= $product_id ?>" id="product_id" class="product_id">
                <div class="col-12 field-col">
                    <label for="phone" class="field-label">Mobile number</label>
                    <input type="text" id="phone" name="phone" class="w-100" placeholder="10 Digit Mobile number"
                        autocomplete="tel" required>
                </div>
                <div class="col-12 field-col d-none">
                    <label for="message" class="field-label">OTP <span id="dummyOtp"></span></label>
                    <input type="number" minlength="4" maxlength="4" id="otp" name="otp" class="w-100"
                        placeholder="Enter OTP" inputmode="numeric" required>

                </div>
                <div class="col-12 field-col">
                    <span id="errMsg" class="text-danger"></span>
                </div>
            </div>
            <div class="question-form-btn mst-20 mst-sm-30">
                <button type="button" class="w-100 btn-style secondary-btn question-form-submit-otp">Send OTP</button>
            </div>
            <div class="question-form-btn mst-20 mst-sm-30 d-none">
                <button type="submit" class="w-100 btn-style secondary-btn question-form-submit">Verify</button>
            </div>
        </div>
    </form>
    <?php } else {
    $showAddressForm = true;

    if ($showAddressForm) {
        // echo $userStatus;
        // print_r($user);
        if ($userStatus == 'Old') {
    ?>
            <!-- address_modal_form.php -->

            <form method="post" action="<?= base_url() ?>user/save_buy_now" id="AddressModalForm">
                <div class="card p-2">
                    <div class="d-flex justify-content-between">
                        <div class="col-3" style="">

                            <img src="<?= base_url() ?>uploads/<?= $product_details[0]['imgs'][0] ?>"
                                style="height: 100%;width: 100%;overflow: hidden;object-fit: cover;border: 0.1px solid lightgray;border-radius: 20px;">
                        </div>
                        <div class="col-9">
                            <div class="p-2">
                                <h6 class="font-15" style="color: darkcyan;"><?= $product_details[0]['category_name'] ?></h6>
                                <h6><?= $product_details[0]['product_name'] ?></h6>
                                <p class="clamp-text" style="font-size: 12px;">lorem<?= $product_details[0]['product_details'] ?>
                                </p>

                                <?php
                                if ($size != 'NA') {
                                ?>
                                    <p class="font-15"><b><span>Size : </span><span></span><?= $size ?></b></p>
                                <?php } ?>
                                <p class="font-15"><b><span>Qty : </span><span></span><?= $qty ?></b></p>

                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class="address-modal-header bg-white p-2 mt-2 mb-1 rounded d-flex align-items-center justify-content-between meb-30">
                    <h6 class="font-15">Order Summary (<?=$qty?>)</h6>
                    <h6>&#8377;
    
                        <?= number_format(floatval($product_details[0]['discounted_price']) * floatval($qty)) ?>
                        
                    </h6>
                    <input type="hidden" name="product_id" value="<?= $product_id ?>" id="product_id" class="product_id">
                    <input type="hidden" name="customers_id" value="<?= $user[0]['customers_id'] ?>" id="customers_id"
                        class="customers_id">
                    <input type="hidden" name="size" value="<?= $size ?>">
                    <input type="hidden" name="qty" value="<?= $qty ?>">

                </div>
                <?php
                if ($userAddressStatus == 'New') {
                ?>
                    <div class="card p-1 mt-2">
                        <div class="d-flex p-2 align-items-center justify-content-between" style="vertical-align:middle;">
                            <h6 style="font-size:13px;" class="card-title">No Address Details</h6>
                            <button type="button" class="btn col-6 justify-content-end btn-sm text-white mb-1 float-end"
                                style="background:#9c1137" onclick="openModal()">+ Add Address</button>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="card p-1 mt-2">
                        <div class="d-flex p-2 align-items-center justify-content-between">
                            <h6 style="font-size:15px;" class="card-title">Delivery Details</h6>
                            <h6 style="font-size:15px;color: #9C1137;cursor:pointer" onclick="openModal()" class="card-title">Change
                            </h6>

                        </div>
                        <div class="card-body p-2 mt-0 pt-0">
                            <h6 style="font-size:14px;" class="pt-0 mt-0"><?= $user[0]['name'] ?></h6>
                            <p><?= $user_address[0]['address'] ?></p>
                        </div>
                    </div>
                <?php } ?>
                <div class="card p-1 mt-2">
                    <div class="payment-option">
                        <input type="radio" checked name="payment_type" id="online" value="Online">
                        <label class="payment-label" for="online">
                            <span>&nbsp;Online
                                Payment</span>
                        </label>
                    </div>

                    <div class="payment-option">
                        <input type="radio" name="payment_type" id="cod" value="COD">
                        <label class="payment-label" for="cod">
                            <span>&nbsp;Cash on
                                Delivery</span>
                        </label>
                    </div>

                </div>
                  <?php
                if ($userAddressStatus != 'New') {
                ?>
                <div class="mt-3">
                    <button type="submit" class="w-100 btn-style secondary-btn">PURCHASE NOW</button>
                </div>
                <?php } ?>
            </form>
        <?php
        } else {
        ?>
            <form method="post" action="<?= base_url() ?>user/save_buy_now" id="customerdetails">
                <div class="address-modal-header body-bg d-flex align-items-center justify-content-between meb-30">
                    <!-- <h6 class="font-18">We never ask for payments outside our website or apps</h6> -->
                    <!-- <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-large-line d-block lh-1"></i>
                    </button> -->
                </div>
                <div
                    class="address-modal-header d-none bg-white p-2 rounded d-flex align-items-center justify-content-between meb-30">
                    <h6 class="font-18">Order Summary</h6>
                    <h6><?= number_format(floatval($product_details[0]['discounted_price']) * floatval($qty)) ?></h6>
                    <button type="button" onclick="showProductDetails('<?= $product_details[0]['prod_gold_id'] ?>')"
                        class="body-secondary-color icon-16"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                </div>


                <div class="address-modal-form mt-2">
                    <div class="row field-row">
                        <input type="hidden" name="product_id" value="<?= $product_id ?>" class="product_id">
                        <input type="hidden" name="user_status" class="user_status">
                        <input type="hidden" name="customers_id" class="customers_id" value="<?= $_SESSION['user_id'] ?>">
                        <input type="hidden" name="size" value="<?= $size ?>">
                        <input type="hidden" name="qty" value="<?= $qty ?>">

                        <div class="col-12 field-col">
                            <label for="uname" class="field-label">Name</label>
                            <input type="text" id="uname" name="name" class="w-100" placeholder="Enter Full Name" required>
                        </div>
                        <div class="col-12 field-col">
                            <label for="uemail" class="field-label">Email</label>
                            <input type="email" id="uemail" name="email" class="w-100" placeholder="Enter Email" required>
                        </div>
                        <div class="col-12 field-col">
                            <label for="uaddress" class="field-label">Address</label>
                            <input type="text" id="uaddress" name="address" class="w-100" placeholder="Enter Address" required>
                        </div>
                        <div class="col-6 field-col">
                            <label for="pincode" class="field-label">Pincode</label>
                            <input type="number" id="pincode" name="pincode" class="w-100" placeholder="Enter Pincode" required>
                        </div>
                        <div class="col-6 field-col">
                            <label for="city" class="field-label">City</label>
                            <input type="text" id="city" name="city" class="w-100" placeholder="Enter City" required>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="w-100 btn-style secondary-btn">BUY NOW</button>
                    </div>
                </div>
            </form>
<?php
        }
    }
} ?>



<script>
    function showProductDetails(pId) {
        alert();
    }
</script>

<div id="addressModal" class="modaladdress"
    style="position: fixed;bottom: 0;box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;">
    <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-scrollable modal-bottom my-0 justify-content-center">
        <div class="modal-content bg-white p-3"
            style="animation: slideUp 0.3s ease-out; border-top-left-radius: 20px;border-top-right-radius: 20px;">

            <!-- Saved Addresses Section -->
            <div id="savedAddressesSection" class="pb-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Saved Addresses</h5>

                    <button type="button" class="body-secondary-color icon-16" onclick="closeAddressModal()">
                        <i class="ri-close-large-line d-block lh-1"></i>
                    </button>
                </div>
                <div class="m-0 p-0">
                    <hr style="color:#9c1137;width: 100%;" />
                </div>
                <div class="row mt-0 pt-0">
                    <div class=" col-6">

                    </div>
                    <button class="btn col-6 mb-2 justify-content-end btn-sm text-white float-end" style="background:#9c1137"
                        onclick="toggleForm()">+ Add address</button>
                </div>
                <?php
                if (isset($user_all_address[0])) {
                    foreach ($user_all_address as $row) {
                ?>
                        <div class="address-box d-flex mb-1 p-1 border">
                            <input onchange="useThisAddress(this,'<?= $product_id ?>')"
                                value="<?= $row['customer_address_id'] ?>" type="radio" name="address" id="address1"
                                <?= ($row['default_address'] == 'yes') ? 'checked' : ''; ?>>
                            <label class="font-12 p-1" for="address1"><?= $row['pincode'] ?> <br><?= $row['address'] ?></label>
                        </div>
                    <?php }
                    ?>

                <?php
                } else {
                ?>
                    <div class="address-box">
                        <label>No Address Found, Add New Address</label>
                    </div>
                <?php
                } ?>
            </div>

            <!-- Add Address Form -->
            <div id="addAddressSection"
                style="display:none; border-top-left-radius: 20px;border-top-right-radius: 20px;">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Add New Address</h5>
                    <button type="button" class="body-secondary-color icon-16" onclick="closeAddressModal()">
                        <i class="ri-close-large-line d-block lh-1"></i>
                    </button>
                </div>
                <form id="newAddressForm">
                    <div class="address-modal-form mt-2">
                        <div class="row field-row">
                            <input type="hidden" name="product_id" value="<?= $product_id ?>" class="product_id">
                            <input type="hidden" value="<?= $userStatus ?>" name="user_status" class="user_status">
                            <input type="hidden" value="<?= $_SESSION['user_id'] ?>" name="customers_id"
                                class="customers_id">


                            <div class="col-6 field-col">
                                <label for="pincode" class="field-label">Pincode</label>
                                <input type="number" onkeyup="getCityByPincode(this)" id="new_pincode" name="pincode"
                                    class="w-100" placeholder="Enter Pincode" required>
                            </div>
                            <div class="col-6 field-col">
                                <label for="city" class="field-label">City</label>
                                <input type="text" id="new_city" name="city" class="w-100" placeholder="Enter City"
                                    required>
                            </div>
                            <div class="col-12 field-col">
                                <label for="uaddress" class="field-label">Address</label>
                                <input type="text" id="new_address" name="address" class="w-100"
                                    placeholder="Enter Address" required>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="w-100 btn-style secondary-btn">Add New Address</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    function closeAddressModal() {
        const modal = document.getElementById('addressModal');
        const overlay = document.getElementById('modalOverlay');
        overlay.style.display = 'none';

        modal.classList.add('modal-hide-anim');

        // Wait for animation to complete, then hide the modal
        setTimeout(() => {
            modal.style.display = 'none';
            modal.classList.remove('modal-hide-anim'); // Clean up
        }, 400); // Match this to animation duration
    }

    function openModal() {
        const modal = document.getElementById('addressModal');
        const overlay = document.getElementById('modalOverlay');

        overlay.style.display = 'block';
        modal.style.display = 'block';
        modal.classList.remove('modal-hide-anim');
        modal.classList.add('modal-show-anim');

        document.getElementById('savedAddressesSection').style.display = 'block';
        document.getElementById('addAddressSection').style.display = 'none';
    }


    function toggleForm() {
        const saved = document.getElementById('savedAddressesSection');
        const form = document.getElementById('addAddressSection');
        saved.style.display = form.style.display === 'none' ? 'none' : 'block';
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('addressModal');
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    function getCityByPincode(event) {
        const pincode = event.value;

        if (pincode.length === 6) {
            fetch(`https://api.postalpincode.in/pincode/${pincode}`)
                .then(response => response.json())
                .then(data => {
                    if (data[0].Status === "Success") {
                        const block = data[0].PostOffice[0].Block;
                        document.getElementById('new_city').value = block;
                    } else {
                        console.error("Invalid pincode or not found");
                        document.getElementById('new_city').value = '';
                    }
                })
                .catch(error => {
                    console.error("Error fetching pincode details:", error);
                });
        } else {
            document.getElementById('new_city').value = '';
        }
    }


    $(document).ready(function() {
        $('#newAddressForm').on('submit', function(e) {
            e.preventDefault(); // Prevent form default submit

            let formData = $(this).serialize();

            // Get additional parameters
            let product_id = $('.product_id').val();
            let selected_size = $('#Selected_size').val();
            let selected_qty = $('#Selected_qty').val();

            $.ajax({
                url: '<?= base_url("user/save_new_address") ?>', // Change to your actual PHP insert handler
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(res) {
                    console.log(res); // Console the response

                    if (res.status === 'success') {
                        // Re-open the address form with updated parameters
                        let url = '?pId=' + encodeURIComponent(product_id) +
                            '&size=' + encodeURIComponent(selected_size) +
                            '&qty=' + encodeURIComponent(selected_qty);

                        $('#address-modal-body').load('<?= base_url("user/load_address_form") ?>' + url);
                    } else {
                        alert('Failed to add address. Please try again.');
                    }
                },
                error: function() {
                    alert('Something went wrong while submitting the form.');
                }
            });
        });
        $('#customerdetails').on('submit', function(e) {
            e.preventDefault(); // Prevent form default submit

            let formData = $(this).serialize();

            // Get additional parameters
            let product_id = $('.product_id').val();
            let selected_size = $('#Selected_size').val();
            let selected_qty = $('#Selected_qty').val();

            $.ajax({
                url: '<?= base_url("user/save_customer_details") ?>', // Change to your actual PHP insert handler
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(res) {
                    console.log(res); // Console the response

                    if (res.status === 'success') {
                        // Re-open the address form with updated parameters
                        let url = '?pId=' + encodeURIComponent(product_id) +
                            '&size=' + encodeURIComponent(selected_size) +
                            '&qty=' + encodeURIComponent(selected_qty);

                        $('#address-modal-body').load('<?= base_url("user/load_address_form") ?>' + url);
                    } else {
                        alert('Failed to add address. Please try again.');
                    }
                },
                error: function() {
                    alert('Something went wrong while submitting the form.');
                }
            });
        });
    });
</script>

<script>
    function useThisAddress(radio, product_id) {
        let customer_address_id = radio.value;
        let selected_size = $('#Selected_size').val();
        let selected_qty = $('#Selected_qty').val();

        $.ajax({
            type: "POST",
            url: '<?= base_url("user/use_this_address") ?>',
            dataType: 'json',
            data: {
                product_id: product_id,
                customer_address_id: customer_address_id,
                size: selected_size,
                qty: selected_qty
            },
            success: function(response) {
                console.log(response);
                // On success, reload the modal body with updated address form
                let url = '?pId=' + encodeURIComponent(product_id) +
                    '&size=' + encodeURIComponent(selected_size) +
                    '&qty=' + encodeURIComponent(selected_qty);

                if (response.status == 'success') {
                    $('#address-modal-body').load('<?= base_url("user/load_address_form") ?>' + url);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX error:", error);
            }
        });
    }
</script>