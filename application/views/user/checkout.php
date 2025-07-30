<div class="breadcrumb-area ptb-15" data-bgimg="<?= base_url() ?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?= base_url() ?>" class="extra-color">Home</a> / Checkout</span>
    </div>
</div>

<main id="main pt-0 mt-0">
    <section class="checkout-area section-ptb pt-5">
        <form method="post" action="<?= base_url() ?>user/checkout_save">
            <div class="container">
                <div class="row row-mtm flex-lg-row-reverse align-items-lg-start">
                    <div class="col-12 col-lg-5 border border-light bg-white p-3 rounded p-lg-sticky top-0" data-animate="animate__fadeIn">
                        <div class="checkout-summary">
                            <div class="checkout-orderview">
                                <h6 class="font-18 meb-25">Shopping cart <span class="checkcart-count">(<?php if (isset($cart) && !empty($cart)) {
                                                                                                            echo count($cart);
                                                                                                        } ?>)</span></h6>
                                <div class="row row-mtm15">
                                    <?php
                                    $subtotal = 0;
                                    if (isset($cart) && !empty($cart)) {
                                        foreach ($cart as $key => $row) {
                                            // print_r($row);
                                            // exit;
                                    ?>
                                            <div class="checkitem-content">
                                                <div class="ul-mt15">
                                                    <div class="checkitem-img width-88">
                                                        <div class="position-relative">
                                                            <?php if (isset($row[0]['imgs'][0])) {
                                                            ?>
                                                                <img src="<?= base_url() ?>uploads/<?= $row[0]['imgs'][0] ?>"
                                                                    class="w-100 img-fluid border border-radius" alt="cart-1">
                                                            <?php } ?>
                                                            <span
                                                                class="checkitem-qty extra-color font-11 position-absolute d-flex align-items-center justify-content-center secondary-bg rounded-circle lh-1"></span>
                                                        </div>
                                                    </div>


                                                    <input type="hidden" name="order_det[prod_gold_id][]" value="<?= $row[0]['prod_gold_id'] ?>">
                                                    <input type="hidden" name="order_det[qty][]" value="<?= $_SESSION['cart'][$row[0]['prod_gold_id']] ?>">
                                                    <input type="hidden" name="order_det[size][]" value="<?php if (isset($_SESSION['Size'][$row[0]['prod_gold_id']])) {
                                                                                                                echo $_SESSION['Size'][$row[0]['prod_gold_id']];
                                                                                                            } else {
                                                                                                                echo 'NA';
                                                                                                            } ?>">
                                                    <input type="hidden" name="order_det[caret][]" value="<?= $row[0]['caret'] ?>">
                                                    <input type="hidden" name="order_det[purity][]" value="<?= $row[0]['purity'] ?>">
                                                    <input type="hidden" name="order_det[original_price][]" value="<?= $row[0]['original_price'] ?>">
                                                    <input type="hidden" name="order_det[discount_amount][]" value="<?= $row[0]['discount_amount'] ?>">
                                                    <input type="hidden" name="order_det[final_amount_after_discount][]" value="<?= $row[0]['final_amount_after_discount'] ?>">
                                                    <input type="hidden" name="order_det[product_id][]" value="<?= $row[0]['product_id'] ?>">
                                                    <input type="hidden" name="order_det[billing_type][]" value="<?= $row[0]['billing_type'] ?>">
                                                    <input type="hidden" name="order_det[gold_rate][]" value="<?= $row[0]['gold_rate'] ?>">
                                                    <input type="hidden" name="order_det[silver_rate][]" value="<?= $row[0]['silver_rate'] ?>">
                                                    <input type="hidden" name="order_det[cross_weight][]" value="<?= $row[0]['cross_weight'] ?>">
                                                    <input type="hidden" name="order_det[other_weight][]" value="<?= $row[0]['other_weight'] ?>">
                                                    <input type="hidden" name="order_det[net_weight][]" value="<?= $row[0]['net_weight'] ?>">
                                                    <input type="hidden" name="order_det[labour_char][]" value="<?= $row[0]['labour_char'] ?>">
                                                    <input type="hidden" name="order_det[wastage_per][]" value="<?= $row[0]['wastage_per'] ?>">
                                                    <input type="hidden" name="order_det[other_amt][]" value="<?= $row[0]['other_amt'] ?>">
                                                    <input type="hidden" name="order_det[gst_per][]" value="<?= $row[0]['gst_per'] ?>">
                                                    <input type="hidden" name="order_det[fixed_amount][]" value="<?= $row[0]['fixed_amount'] ?>">
                                                    <input type="hidden" name="order_det[total_discount_amt][]" value="<?= $row[0]['total_discount_amt'] ?>">
                                                    <input type="hidden" name="order_det[category_name][]" value="<?= $row[0]['category_name'] ?>">
                                                    <input type="hidden" name="order_det[group_id][]" value="<?= $row[0]['group_id'] ?>">

                                                    <div class="checkitem-info width-calc-88">
                                                        <div
                                                            class="checkitem-detail h-100 d-flex flex-column justify-content-between">
                                                            <div class="checkitem-text">
                                                                <a href="<?= base_url() ?>user/product_details/<?= $row[0]['prod_gold_id'] ?>"
                                                                    class="dominant-link heading-weight"><?= $row[0]['product_name'] ?> (<?= $row[0]['formatted_discounted_price'] ?>)</a>
                                                                <div class="mst-8"> <?php if (isset($_SESSION['Size'][$row[0]['prod_gold_id']]) && $_SESSION['Size'][$row[0]['prod_gold_id']]!='NA') {
                                                                                                echo  'Size : '.$_SESSION['Size'][$row[0]['prod_gold_id']] . ' / ';
                                                                                            } else {
                                                                                               
                                                                                            } ?> <?= $row[0]['category_name'] ?></div>
                                                                <div class="mst-8">Qty : <?= $_SESSION['cart'][$row[0]['prod_gold_id']] ?></div>
                                                            </div>
                                                            <?php
                                                            $subtotal += floatval($row[0]['discounted_price']) * $_SESSION['cart'][$row[0]['prod_gold_id']];
                                                            $psubtotal = floatval($row[0]['discounted_price']) * $_SESSION['cart'][$row[0]['prod_gold_id']];
                                                            ?>
                                                            <input type="hidden" name="order_det[subtotal][]" value="<?= $psubtotal ?>">

                                                            <div class="checkitem-price mst-23 mt-0 pt-0 pb-1 text-end border-bottom">
                                                                <div class="heading-color heading-weight">&#8377; <?= number_format(floatval($row[0]['discounted_price']) * $_SESSION['cart'][$row[0]['prod_gold_id']]) ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } else {
                                        ?>
                                        <div class="checkitem-content">
                                            <div class="ul-mt15">
                                                <div class="checkitem-img width-88">
                                                    <div class="position-relative">
                                                        <h5>No Items Available</h5>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php
                                    } ?>


                                </div>
                            </div>
                            <div class="checkout-costview">
                                <div class="checkout-cost mst-30 pst-30 bst pt-1">
                                    <h6 class="font-18 meb-22 p-0 pb-2 m-0">Cost summary</h6>
                                    <div class="row row-mtm20">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Subtotal</span>
                                            <span class="heading-color heading-weight">&#8377; <?= number_format($subtotal) ?></span>
                                        </div>

                                        <?php
                                        $sttl =  $subtotal;
                                        $totalOrderCharges = 0;
                                        $total = 0;
                                        $order_charges_det = [];

                                        foreach ($order_charges as $key => $order_charges1) {
                                            $order_charges_det[$key]['charges_id'] = $order_charges1['charges_id'];
                                            $order_charges_det[$key]['charges_label'] = $order_charges1['charges_label'];
                                            $order_charges_det[$key]['percent'] = $order_charges1['percent'];
                                            $order_charges_det[$key]['rate'] = 0;

                                            if ((float)$order_charges1['percent'] != 0) {
                                                $order_charges1['rate'] = ($sttl * (float)$order_charges1['percent']) / 100;
                                                $order_charges_det[$key]['rate'] = $order_charges1['rate'];
                                            }
                                            $totalOrderCharges += $order_charges1['rate'];
                                        }
                                        $total = $subtotal + $totalOrderCharges;

                                        foreach ($order_charges_det as $ordrow) {
                                        ?>
                                            <input type="hidden" name="charges_id[]" value="<?= $ordrow['charges_id'] ?>">
                                            <input type="hidden" name="charges_label[]" value="<?= $ordrow['charges_label'] ?>">
                                            <input type="hidden" name="percent[]" value="<?= $ordrow['percent'] ?>">
                                            <input type="hidden" name="rate[]" value="<?= $ordrow['rate'] ?>">


                                            <div class="col-12 d-flex justify-content-between">
                                                <span class="text-capitalize"><?= $ordrow['charges_label'] ?></span>
                                                <span class="text-secondary heading-weight text-capitalize">&#8377; <?= number_format($ordrow['rate']) ?></span>
                                            </div>
                                        <?php } ?>
                                        <input type="hidden" name="order_charges" value="<?= $totalOrderCharges ?>">
                                        <input type="hidden" name="sub_total_amount" value="<?= $subtotal ?>">
                                        <input type="hidden" name="total_amount" value="<?= $total ?>">
                                    </div>
                                </div>
                                <div class="checkout-cost mst-30 pt-2 pst-30 bst">
                                    <div class="row row-mtm20">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="heading-color heading-weight">&#8377; <?= number_format($total) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 p-lg-sticky top-0">
                        <div class="checktab-overview">

                            <div class="checktab-content">

                                <div class="checktab-detail" data-animate="animate__fadeIn">
                                    <div class="checktab-data">
                                        <div class="checktab-info">
                                            <div class="acc-info">
                                                <div
                                                    class="acc-title d-flex align-items-center justify-content-between">
                                                    <h6 class="font-18">Shipping address</h6>
                                                    <button type="button"
                                                        class="acc-edit d-none body-secondary-color icon-16"
                                                        aria-label="Edit"><i
                                                            class="ri-edit-2-line d-block lh-1"></i></button>
                                                </div>
                                                <div class="acc-detail mst-22">
                                                    <?php
                                                    if (isset($_SESSION['user_id'])) {
                                                    ?>
                                                        <input type="hidden" name="customers_id" value="<?= $_SESSION['user_id'] ?>">
                                                        <input type="hidden" name="user_type" value="old">

                                                    <?php
                                                        $user = $this->My_model->select_where("customers", ['status' => 'active', 'customers_id' => $_SESSION['user_id']]);
                                                        $userAddress = $this->My_model->select_where("customer_address", ['customers_id' => $_SESSION['user_id'], 'status' => 'active', 'default_address' => 'yes']);
                                                    } else {
                                                        $user = [];
                                                        $userAddress = [];
                                                    ?>
                                                        <input type="hidden" name="user_type" value="new">
                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="acc-detail-form">
                                                        <div class="acc-detail-field">
                                                            <div class="row row-mtm">
                                                                <div class="acc-field-box">
                                                                    <div class="acc-detail-hide">
                                                                        <div class="row field-row">
                                                                            <div class="col-12 col-md-12 field-col mt-2">
                                                                                <label for="name"
                                                                                    class="field-label p-0 mt-1 mb-1">Full Name</label>
                                                                                <input type="text" id="name" name="c_name" value="<?= (isset($user[0]['name'])) ? $user[0]['name'] : ''; ?>"
                                                                                    class="w-100"
                                                                                    placeholder="Your Full name"
                                                                                    autocomplete="name">
                                                                            </div>

                                                                            <div class="col-12 col-md-6 field-col mt-2">
                                                                                <label for="email"
                                                                                    class="field-label p-0 mt-1 mb-1">Email</label>
                                                                                <input type="email" id="email"
                                                                                    name="c_email" value="<?= (isset($user[0]['email'])) ? $user[0]['email'] : ''; ?>" class="w-100"
                                                                                    placeholder="Email address"
                                                                                    autocomplete="email">
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col mt-2">
                                                                                <label for="phone"
                                                                                    class="field-label p-0 mt-1 mb-1">Phone</label>
                                                                                <input type="text" id="phone"
                                                                                    name="c_mobile" value="<?= (isset($user[0]['mobile'])) ? $user[0]['mobile'] : ''; ?>" class="w-100"
                                                                                    placeholder="Enter Mobile number"
                                                                                    autocomplete="tel">
                                                                            </div>
                                                                            <div class="col-12 col-md-12 field-col mt-2">
                                                                                <label for="address"
                                                                                    class="field-label p-0 mt-1 mb-1">Address</label>
                                                                                <input type="text" id="address"
                                                                                    name="cust_address" value="<?= (isset($user[0]['address'])) ? $user[0]['address'] : ''; ?>" class="w-100"
                                                                                    placeholder="Address line1"
                                                                                    autocomplete="address-line1">
                                                                            </div>


                                                                            <div class="col-12 col-md-6 field-col mt-2">
                                                                                <label for="country"
                                                                                    class="field-label p-0 mt-1 mb-1">Payment Type</label>
                                                                                <select id="payment_type" name="payment_type"
                                                                                    class="w-100">
                                                                                    <option disabled>--Select your
                                                                                        payment Type--</option>
                                                                                    <option value="cod" selected>&nbsp;Cash On Delivery</option>
                                                                                    <option value="Online">&nbsp;Online</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col mt-2">
                                                                                <label for="pincode"
                                                                                    class="field-label p-0 mt-1 mb-1">Pincode</label>
                                                                                <input type="text" onkeyup="getCityByPincode(this)" id="pincode"
                                                                                    name="cust_pincode" value="<?= (isset($userAddress[0]['pincode'])) ? $userAddress[0]['pincode'] : ''; ?>" class="w-100"
                                                                                    placeholder="Pincode"
                                                                                    autocomplete="postal-code">
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col mt-2">
                                                                                <label for="province"
                                                                                    class="field-label p-0 mt-1 mb-1">State</label>
                                                                                <input type="text" id="province"
                                                                                    name="cust_state" value="<?= (isset($userAddress[0]['state'])) ? $userAddress[0]['state'] : ''; ?>" class="w-100"
                                                                                    placeholder="State"
                                                                                    autocomplete="address-level1">
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col mt-2">
                                                                                <label for="city"
                                                                                    class="field-label p-0 mt-1 mb-1">City</label>
                                                                                <input type="text" id="new_city" name="cust_city" value="<?= (isset($userAddress[0]['city'])) ? $userAddress[0]['city'] : ''; ?>"
                                                                                    class="w-100"
                                                                                    placeholder="City"
                                                                                    autocomplete="address-level2">
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="acc-detail-button mst-20 mst-sm-30">
                                                            <div class="row btn-row">
                                                                <div class="col-12 col-sm-6">

                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <button type="submit"
                                                                        class="w-100 acc-cancel btn-style secondary-btn">Save & Continue</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- pickup-availability-modal end -->
    </section>
    <!-- checkout end -->
</main>

<script type="text/javascript">
    function getCityByPincode(event) {
        const pincode = event.value;

        if (pincode.length === 6) {
            fetch(`https://api.postalpincode.in/pincode/${pincode}`)
                .then(response => response.json())
                .then(data => {
                    if (data[0].Status === "Success") {
                        const block = data[0].PostOffice[0].Block;
                        const circle = data[0].PostOffice[0].Circle;
                        document.getElementById('new_city').value = block;
                        document.getElementById('province').value = circle;
                    } else {
                        console.error("Invalid pincode or not found");
                        document.getElementById('new_city').value = '';
                        document.getElementById('province').value = '';

                    }
                })
                .catch(error => {
                    console.error("Error fetching pincode details:", error);
                });
        } else {
            document.getElementById('new_city').value = '';
        }
    }
</script>