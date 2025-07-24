<div class="breadcrumb-area ptb-15" data-bgimg="<?= base_url() ?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?= base_url() ?>" class="extra-color">Home</a> / Checkout</span>
    </div>
</div>

<main id="main">
    <section class="checkout-area section-ptb">
        <form method="post" action="<?= base_url() ?>user/checkout_save">
            <div class="container">
                <div class="row row-mtm flex-lg-row-reverse align-items-lg-start">
                    <div class="col-12 col-lg-5 p-lg-sticky top-0" data-animate="animate__fadeIn">
                        <div class="checkout-summary">
                            <div class="checkout-orderview">
                                <h6 class="font-18 meb-25">Shopping cart <span class="checkcart-count">(<?php if(isset($cart) && !empty($cart))
                                    { echo count($cart);}?>)</span></h6>
                                <div class="row row-mtm15">
                                    <?php if(isset($cart) && !empty($cart))
                                    {
                                        foreach($cart as $key => $row){
                                            // print_r($row);
                                    ?>
                                    <div class="checkitem-content">
                                        <div class="ul-mt15">
                                            <div class="checkitem-img width-88">
                                                <div class="position-relative">
                                                    <?php if(isset($row[0]['imgs'][0])){
                                                    ?>
                                                    <img src="<?= base_url() ?>uploads/<?=$row[0]['imgs'][0]?>"
                                                        class="w-100 img-fluid border-radius" alt="cart-1">
                                                    <?php } ?>
                                                    <span
                                                        class="checkitem-qty extra-color font-11 position-absolute d-flex align-items-center justify-content-center secondary-bg rounded-circle lh-1"></span>
                                                </div>
                                            </div>
                                            <div class="checkitem-info width-calc-88">
                                                <div
                                                    class="checkitem-detail h-100 d-flex flex-column justify-content-between">
                                                    <div class="checkitem-text">
                                                        <a href="<?= base_url() ?>"
                                                            class="dominant-link heading-weight"><?=$row[0]['product_name']?></a>
                                                        <div class="mst-8">Size : <?php if(isset($_SESSION['Size'][$row[0]['prod_gold_id']])) {echo  $_SESSION['Size'][$row[0]['prod_gold_id']].' / '; }else{echo  'NA / ';} ?> <?=$row[0]['category_name']?></div>
                                                    </div>
                                                    <div class="checkitem-price mst-23 text-end">
                                                        <div class="heading-color heading-weight"><?=$row[0]['formatted_discounted_price']?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }} else{
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
                                    }?>
                                    
                                    
                                </div>
                            </div>
                            <div class="checkout-costview">
                                <div class="checkout-cost mst-30 pst-30 bst">
                                    <h6 class="font-18 meb-22">Cost summary</h6>
                                    <div class="row row-mtm20">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Subtotal</span>
                                            <span class="heading-color heading-weight">$246.00</span>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Discount</span>
                                            <span class="text-danger heading-weight">$11.00</span>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Shipping</span>
                                            <span class="text-success heading-weight">$0.00</span>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Tax</span>
                                            <span class="heading-color heading-weight">$10.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-cost mst-30 pst-30 bst">
                                    <div class="row row-mtm20">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="heading-color heading-weight">$245.00</span>
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
                                                    <div class="acc-detail-info d-none">
                                                        <div class="row row-mtm">
                                                            <div class="col-12 col-sm-6">
                                                                <!-- acc-info shipping-address start -->
                                                                <span
                                                                    class="d-inline-block heading-color heading-weight meb-23">Shipping
                                                                    address</span>
                                                                <div class="st-label d-flex mst-3 meb-12">
                                                                    <span
                                                                        class="d-inline-block st-small-label bg-dark">Home</span>
                                                                </div>
                                                                <div class="ul-mtm-15">
                                                                    <span>Demo name</span>
                                                                    <span>Spacingtech infotech</span>
                                                                    <a href="mailto:demo@demo.com"
                                                                        class="body-dominant-color">demo@demo.com</a>
                                                                    <a href="tel:(+00)123456789"
                                                                        class="body-dominant-color">(+00)-123456789</a>
                                                                    <span>7882, Reliance GIDC</span>
                                                                    <span>Chowk bazzar</span>
                                                                    <span>Surat</span>
                                                                    <span>Gujarat 395006</span>
                                                                    <span>India</span>
                                                                </div>
                                                                <!-- acc-info shipping-address end -->
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <!-- acc-info billing-address start -->
                                                                <span
                                                                    class="d-inline-block heading-color heading-weight meb-23">Billing
                                                                    address</span>
                                                                <div class="st-label d-flex mst-3 meb-12">
                                                                    <span
                                                                        class="d-inline-block st-small-label bg-dark">Home</span>
                                                                </div>
                                                                <div class="ul-mtm-15">
                                                                    <span>Demo name</span>
                                                                    <span>Spacingtech infotech</span>
                                                                    <a href="mailto:demo@demo.com"
                                                                        class="body-dominant-color">demo@demo.com</a>
                                                                    <a href="tel:(+00)123456789"
                                                                        class="body-dominant-color">(+00)-123456789</a>
                                                                    <span>7882, Reliance GIDC</span>
                                                                    <span>Chowk bazzar</span>
                                                                    <span>Surat</span>
                                                                    <span>Gujarat 395006</span>
                                                                    <span>India</span>
                                                                </div>
                                                                <!-- acc-info billing-address end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="acc-detail-form">
                                                        <div class="acc-detail-field">
                                                            <div class="row row-mtm">
                                                                <div class="acc-field-box">
                                                                    <div class="acc-detail-hide">
                                                                        <div class="row field-row">
                                                                            <div class="col-12 col-md-12 field-col">
                                                                                <label for="name"
                                                                                    class="field-label">Full Name</label>
                                                                                <input type="text" id="name" name="name"
                                                                                    class="w-100" value="Demo name"
                                                                                    placeholder="Your name"
                                                                                    autocomplete="name">
                                                                            </div>
                                                                            
                                                                            <div class="col-12 col-md-6 field-col">
                                                                                <label for="email"
                                                                                    class="field-label">Email</label>
                                                                                <input type="email" id="email"
                                                                                    name="email" class="w-100"
                                                                                    value="demo@demo.com"
                                                                                    placeholder="Email address"
                                                                                    autocomplete="email">
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col">
                                                                                <label for="phone"
                                                                                    class="field-label">Phone</label>
                                                                                <input type="text" id="phone"
                                                                                    name="phone" class="w-100"
                                                                                    value="(+00)-123456789"
                                                                                    placeholder="Phone number"
                                                                                    autocomplete="tel">
                                                                            </div>
                                                                            <div class="col-12 col-md-12 field-col">
                                                                                <label for="address"
                                                                                    class="field-label">Address</label>
                                                                                <input type="text" id="address"
                                                                                    name="address" class="w-100"
                                                                                    value="Reliance GIDC"
                                                                                    placeholder="Address line1"
                                                                                    autocomplete="address-line1">
                                                                            </div>
                                                                            
                                                                            
                                                                            <div class="col-12 col-md-6 field-col">
                                                                                <label for="country"
                                                                                    class="field-label">Country</label>
                                                                                <select id="country" name="country"
                                                                                    class="w-100"
                                                                                    autocomplete="country">
                                                                                    <option disabled>--Select your
                                                                                        country--</option>
                                                                                    <option selected>India</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col">
                                                                                <label for="province"
                                                                                    class="field-label">State</label>
                                                                                <input type="text" id="province"
                                                                                    name="province" class="w-100"
                                                                                    value="Maharashtra" placeholder="State"
                                                                                    autocomplete="address-level1">
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col">
                                                                                <label for="city"
                                                                                    class="field-label">City</label>
                                                                                <input type="text" id="city" name="city"
                                                                                    class="w-100" value="Surat"
                                                                                    placeholder="City"
                                                                                    autocomplete="address-level2">
                                                                            </div>
                                                                            <div class="col-12 col-md-6 field-col">
                                                                                <label for="pincode"
                                                                                    class="field-label">Pincode</label>
                                                                                <input type="text" id="pincode"
                                                                                    name="pincode" class="w-100"
                                                                                    value="395006" placeholder="Pincode"
                                                                                    autocomplete="postal-code">
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