<main id="main">
    <!-- <?php
    print_r($products[0]);

    ?> -->
    <!-- product-detail start -->
    <section class="product-detail section-pt">
        <!-- product prev-next start -->
        <a href="<?= base_url() ?>"
            class="d-none d-xl-block position-fixed top-50 translate-middle-y z-2 np-product prev">
            <span class="d-block body-secondary-color msl-5 heading-weight text-uppercase lh-1">Prev</span>
        </a>
        <a href="<?= base_url() ?>"
            class="d-none d-xl-block position-fixed top-50 translate-middle-y z-2 np-product next">
            <span class="d-block body-secondary-color mer-5 heading-weight text-uppercase lh-1">Next</span>
        </a>
        <!-- product prev-next end -->
        <div class="container">
            <div class="row row-mtm align-items-lg-start">
                <div class="col-12 col-lg-6 p-lg-sticky top-0">
                    <!-- product-detail-slider start -->
                    <div class="product-detail-slider per-xxl-10">
                        <div class="row ul-mt15 flex-sm-row-reverse">
                            <div class="col-12 col-sm-10" data-animate="animate__fadeIn">
                                <!-- product-img-big start -->
                                <div class="product-img-big slider-big-v position-relative br-hidden">
                                    <div class="swiper" id="slider-big-v">
                                        <div class="swiper-wrapper product-swiper-wrapper">
                                            <?php
                                            foreach ($products[0]['imgs'] as $row) {
                                                ?>
                                                <div class="swiper-slide product-swiper-slide">
                                                    <div class="product-item-img position-relative">
                                                        <a href="<?= base_url() ?>uploads/<?= $row ?>"
                                                            class="full-view product-thumbnail heading-color position-absolute top-0 end-0 width-40 height-40 d-flex align-items-center justify-content-center body-bg z-1 mst-15 mer-15 rounded-circle box-shadow"
                                                            aria-label="Image full view"><i
                                                                class="ri-fullscreen-line d-block lh-1"></i></a>
                                                        <img src="<?= base_url() ?>uploads/<?= $row ?>"
                                                            data-zoom="assets/image/product/p-1.jpg"
                                                            class="w-100 img-fluid zoom" alt="p-1">
                                                    </div>
                                                </div>

                                            <?php } ?>


                                        </div>
                                    </div>
                                    <div class="swiper-buttons">
                                        <button type="button"
                                            class="swiper-prev swiper-prev-big secondary-btn icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1 rounded-circle"
                                            aria-label="Arrow previous"><i
                                                class="ri-arrow-left-line d-block lh-1"></i></button>
                                        <button type="button"
                                            class="swiper-next swiper-next-big secondary-btn icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1 rounded-circle"
                                            aria-label="Arrow next"><i
                                                class="ri-arrow-right-line d-block lh-1"></i></button>
                                    </div>
                                </div>
                                <!-- product-img-big end -->
                            </div>
                            <div class="col-12 col-sm-2" data-animate="animate__fadeIn">
                                <!-- product-img-small start -->
                                <div class="product-img-small slider-small-v">
                                    <div class="swiper" id="slider-small-v">
                                        <div class="swiper-wrapper">
                                            <?php
                                            foreach ($products[0]['imgs'] as $row) {
                                                ?>
                                                <div class="swiper-slide product-swiper-slide">
                                                    <div class="product-item-img br-hidden">
                                                        <a href="javascript:void(0)" class="d-block product-thumbnail">
                                                            <img src="<?= base_url() ?>uploads/<?= $row ?>"
                                                                class="w-100 img-fluid" alt="p-1">
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-img-small end -->
                            </div>
                        </div>
                    </div>
                    <!-- product-detail-slider end -->
                </div>
                <div class="col-12 col-lg-6 p-lg-sticky top-0">
                    <!-- product-detail-info start -->
                    <div class="product-detail-info psl-xxl-10">
                        <div class="product-info" data-animate="animate__fadeIn">
                            <div class="product-sku">
                                <span class="font-14 text-uppercase"><?= $products[0]['category_name'] ?></span>
                            </div>
                        </div>
                        <div class="product-info mst-5" data-animate="animate__fadeIn">
                            <div class="product-title">
                                <h2 class="font-24 text-uppercase"><?= $products[0]['product_name'] ?></h2>
                            </div>
                        </div>
                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <?php
                            if ($products[0]['discount_amount'] > 0) {
                                $original_price = $products[0]['original_price'];
                                $discounted_price = $products[0]['discounted_price'];
                                $discount_percent = round((($original_price - $discounted_price) / $original_price) * 100);
                                ?>
                                <div class="product-price">
                                    <div class="price-box font-20">
                                        <span class="new-price dominant-color heading-weight">
                                            <?= $products[0]['formatted_discounted_price'] ?></span>
                                        <span class="old-price heading-weight"><span class="mer-3">~</span><span
                                                class="text-decoration-line-through">
                                                <?= $products[0]['formatted_original_price'] ?></span></span>
                                        <span class="discount-price secondary-color">-<?= $discount_percent ?>% off</span>
                                    </div>
                                </div>
                            <?php } else {
                                ?>
                                <div class="product-price">
                                    <div class="price-box font-20">
                                        <span class="new-price dominant-color heading-weight">
                                            <?= $products[0]['formatted_discounted_price'] ?></span>

                                    </div>
                                </div>
                                <?php
                            } ?>
                        </div>
                        <div class="product-info mst-20" data-animate="animate__fadeIn">
                            <div class="product-ratting">
                                <div class="pro-review-write">
                                    <div class="pro-review">
                                        <span class="review-ratting">
                                            <span class="review-star icon-16">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line"></i>
                                            </span>
                                            <span class="review-caption">2 reviews</span>
                                        </span>
                                    </div>
                                    <div class="pro-write">
                                        <a href="#reviews"
                                            class="text-uppercase heading-weight text-decoration-underline">Write a
                                            review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-info mst-20" data-animate="animate__fadeIn">
                            <div class="product-view">
                                <span class="heading-color"><i class="ri-eye-line icon-16 mer-4 blinking"></i><span
                                        class="product-live-visitor"></span> people are viewing this product right
                                    now</span>
                            </div>
                        </div>
                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-availability">
                                <span class="d-inline-block text-success"><span
                                        class="heading-color heading-weight mer-10">Availability:</span><?= $products[0]['product_qty'] ?>
                                    stock</span>
                            </div>
                        </div>

                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="product-sold">
                                <span class="text-danger"><i class="ri-fire-line icon-16 mer-4 blinking"></i><span
                                        class="heading-weight"><span class="product-sold-count"></span> products sold in
                                        last <span class="product-hours-count"></span> hours</span></span>
                            </div>
                        </div>
                        <div class="product-info mst-25" data-animate="animate__fadeIn">
                            <div class="product-border bst"></div>
                        </div>
                        <div class="product-info mst-20" data-animate="animate__fadeIn">
                            <div class="product-desc">
                                <p><?= $products[0]['product_details'] ?></p>
                            </div>
                        </div>

                        <div class="product-info mst-25" data-animate="animate__fadeIn">
                            <div class="product-variant">
                                <div class="product-variant-option">
                                    <?php
                                    if (!empty($products[0]['ring_size'])) {
                                        $sizes = explode(',', $products[0]['ring_size']);
                                        ?>
                                        <span class="d-inline-block meb-11">
                                            <span class="heading-color heading-weight mer-10">Size:</span>
                                            <span id="display-size"> <?= $sizes[0] ?></span>
                                            <a href="#size-modal" data-bs-toggle="modal"
                                                class="msl-15 msl-sm-30 text-uppercase heading-weight text-decoration-underline">Size
                                                guide</a>
                                        </span>
                                        <div class="product-option-block size">
                                            <ul class="ul-mt5">
                                                <?php
                                                if (!empty($products[0]['ring_size'])) {
                                                    $i = 0;
                                                    foreach ($sizes as $sz) {
                                                        $i++;
                                                        ?>
                                                        <li>
                                                            <label class="cust-checkbox-label">
                                                                <input type="radio" name="selected_size" id="selected_size"
                                                                    class="cust-checkbox" value="<?= $sz ?>" <?= ($i == 1) ? 'checked' : ''; ?>>
                                                                <span
                                                                    class="d-block cust-check border-full border-radius"><?= $sz ?></span>
                                                            </label>
                                                        </li>
                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </ul>
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="product-option-block size">
                                            <ul class="ul-mt5">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="radio" name="selected_size" id="selected_size"
                                                            class="cust-checkbox" value="NA" checked>
                                                        <span class="d-inline-block meb-11"><span
                                                                class="heading-color heading-weight mer-10">Size:</span>Not Available
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php
                                    } ?>
                                </div>

                            </div>
                        </div>
                        <script>

                        </script>



                        <div class="product-info mst-25" data-animate="animate__fadeIn">
                            <div class="product-quantity d-flex flex-wrap align-items-center">
                                <span class="heading-color heading-weight mer-10">Quantity:</span>
                                <div class="js-qty-wrapper">
                                    <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                        <button type="button"
                                            class="js-qty-adjust js-qty-adjust-minus body-color icon-16"
                                            aria-label="Remove item"><i
                                                class="ri-subtract-line d-block lh-1"></i></button>
                                        <input type="number" name="selected_qty" id="selected_qty"
                                            class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                        <button type="button"
                                            class="js-qty-adjust js-qty-adjust-plus body-color icon-16"
                                            aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-button mst-15">
                                <div class="row btn-row15">
                                    <?php
                                    $cat_id = isset($user_cat['prod_id']) ? $user_cat['prod_id'] : '';
                                    ?>
                                    <div class="col-12 col-sm-6">
                                        <?php if ($cat_id == $products[0]['prod_gold_id']) { ?>
                                            <button type="button" class="w-100 btn-style quaternary-btn add-to-cart"
                                                onclick="addToCartpd('<?= $products[0]['prod_gold_id'] ?>')">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon">Remove from Cart</span>
                                                    <span class="product-loader-icon icon-16"><i
                                                            class="ri-loader-4-line d-block lh-1"></i></span>
                                                    <span class="product-check-icon icon-16"><i
                                                            class="ri-check-line d-block lh-1"></i></span>
                                                </span>
                                            </button>
                                        <?php } else { ?>
                                            <button type="button" class="w-100 btn-style quaternary-btn add-to-cart"
                                                onclick="addToCartpd('<?= $products[0]['prod_gold_id'] ?>')">
                                                <span class="product-icon">
                                                    <span class="product-bag-icon">Add to Cart</span>
                                                    <span class="product-loader-icon icon-16"><i
                                                            class="ri-loader-4-line d-block lh-1"></i></span>
                                                    <span class="product-check-icon icon-16"><i
                                                            class="ri-check-line d-block lh-1"></i></span>
                                                </span>
                                            </button>
                                        <?php } ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                            <a onclick="openAddressModal('<?= $products[0]['prod_gold_id'] ?>')"
                                                class="w-100 btn-style secondary-btn">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-info mst-15" data-animate="animate__fadeIn">
                            <div class="ul-row">
                                <!-- <div class="product-wishlist">
                                    <a href="javascript:void(0)" class="add-to-wishlist heading-color"><i
                                            class="ri-heart-line icon-16 mer-4"></i>Wishlist</a>
                                </div> -->

                                <div class="product-ask">
                                    <a href="#buy-now-modal" data-bs-toggle="modal"
                                        class="ask-question heading-color"><i
                                            class="ri-edit-box-line icon-16 mer-4"></i>Ask a question</a>
                                </div>
                                <div class="product-share">
                                    <a href="#share-modal" data-bs-toggle="modal" class="share heading-color"><i
                                            class="ri-share-line icon-16 mer-4"></i>Share</a>
                                </div>
                            </div>
                        </div>


                        <div class="product-info mst-20" data-animate="animate__fadeIn">
                            <div class="product-border bst"></div>
                        </div>
                        <div class="product-info mst-25" data-animate="animate__fadeIn">
                            <div class="product-delivery">
                                <span class="d-inline-block"><i
                                        class="ri-check-line heading-color icon-16 mer-4"></i>Your order will reach you
                                    within 5-7 business days</span>
                            </div>
                        </div>


                    </div>
                    <!-- product-detail-info end -->
                </div>
            </div>
            <!-- product-service start -->
            <div class="product-service mst-30">
                <div class="ptb-15 plr-15 extra-bg br-hidden">
                    <div class="ul-mt15">
                        <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated"
                            data-animate="animate__fadeIn">
                            <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                <span class="mer-5"><i class="ri-box-3-line icon-24"></i></span>
                                <span>Return & exchange</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated"
                            data-animate="animate__fadeIn">
                            <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                <span class="mer-5"><i class="ri-hand-coin-line icon-24"></i></span>
                                <span>Cash on delivery</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated"
                            data-animate="animate__fadeIn">
                            <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                <span class="mer-5"><i class="ri-truck-line icon-24"></i></span>
                                <span>Free delivery</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated"
                            data-animate="animate__fadeIn">
                            <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                <span class="mer-5"><i class="ri-secure-payment-line icon-24"></i></span>
                                <span>Safe payment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-service end -->
        </div>
        <!-- size-modal start -->
        <div class="size-modal modal fade" id="size-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <div class="size-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Size guide</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal"
                                aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="size-modal-content text-center">
                            <div class="table-responsive">
                                <table class="table w-100">
                                    <thead>
                                        <tr>
                                            <th scope="row"
                                                class="heading-color heading-weight text-nowrap border-full">Size</th>
                                            <th scope="row"
                                                class="heading-color heading-weight text-nowrap border-full">US</th>
                                            <th scope="row"
                                                class="heading-color heading-weight text-nowrap border-full">Bust</th>
                                            <th scope="row"
                                                class="heading-color heading-weight text-nowrap border-full">Waist</th>
                                            <th scope="row"
                                                class="heading-color heading-weight text-nowrap border-full">Low Hip
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap border-full">XS</td>
                                            <td class="text-nowrap border-full">2</td>
                                            <td class="text-nowrap border-full">32</td>
                                            <td class="text-nowrap border-full">24-25</td>
                                            <td class="text-nowrap border-full">33-34</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap border-full">S</td>
                                            <td class="text-nowrap border-full">4</td>
                                            <td class="text-nowrap border-full">34-35</td>
                                            <td class="text-nowrap border-full">26-27</td>
                                            <td class="text-nowrap border-full">35-26</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap border-full">M</td>
                                            <td class="text-nowrap border-full">6</td>
                                            <td class="text-nowrap border-full">36-37</td>
                                            <td class="text-nowrap border-full">28-29</td>
                                            <td class="text-nowrap border-full">38-40</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap border-full">L</td>
                                            <td class="text-nowrap border-full">8</td>
                                            <td class="text-nowrap border-full">38-29</td>
                                            <td class="text-nowrap border-full">30-31</td>
                                            <td class="text-nowrap border-full">42-44</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap border-full">XL</td>
                                            <td class="text-nowrap border-full">10</td>
                                            <td class="text-nowrap border-full">40-41</td>
                                            <td class="text-nowrap border-full">32-33</td>
                                            <td class="text-nowrap border-full">45-47</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-img mx-auto">
                                <img src="<?= base_url() ?>u_assets/assets/image/product/size-guide.png"
                                    class="w-100 img-fluid" alt="size-guide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- size-modal end -->



        <!-- Address Modal -->
        <div class="address-modal modal fade justify-content-center" id="address-modal" data-bs-backdrop="static"
            style="height: 100vh;top:0;overflow: hidden;margin: 0;padding: 0;border-radius: 0px !important;">
            <div style="overflow-y: auto;border-radius: 0px !important;"
                class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered my-0 justify-content-center">
                <div class="modal-content body-bg border-0 br-hidden"
                    style=";height: 100vh; border-radius: 16px 16px 0 0; overflow-y: auto;border-radius: 0px !important;">
                    <div class="modal-body plr-15 plr-sm-30" id="address-modal-body"
                        style="border-radius: 0px !important;">

                    </div>
                </div>
            </div>
        </div>
        <!-- buy-now-modal start -->
        <!-- Buy Now Modal -->
        <div class="modal fade" id="buy-now-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="buyNowModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-header">
                        <h5 class="modal-title" id="buyNowModalLabel">Purchase Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="buy-now-modal-body">
                        <!-- OTP Form will be loaded here -->
                        <form method="post" id="otpForm">
                            <div class="buy-now-modal-form">
                                <div class="row field-row">
                                    <input type="hidden" name="product_id" value="" id="product_id" class="product_id">
                                    <div class="col-12 field-col">
                                        <label for="phone" class="field-label">Mobile number</label>
                                        <input type="text" id="phone" name="phone" class="w-100"
                                            placeholder="10 Digit Mobile number" autocomplete="tel" required>
                                    </div>
                                    <div class="col-12 field-col d-none">
                                        <label for="otp" class="field-label">OTP <span id="dummyOtp"></span></label>
                                        <input type="number" minlength="4" maxlength="4" id="otp" name="otp"
                                            class="w-100" placeholder="Enter OTP" inputmode="numeric" required>
                                    </div>
                                    <div class="col-12 field-col">
                                        <span id="errMsg" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="question-form-btn mst-20 mst-sm-30">
                                    <button type="button"
                                        class="w-100 btn-style secondary-btn question-form-submit-otp">Send OTP</button>
                                </div>
                                <div class="question-form-btn mst-20 mst-sm-30 d-none">
                                    <button type="submit"
                                        class="w-100 btn-style secondary-btn question-form-submit">Verify</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script>

     


            function addToCartpd(pId) {
                event.preventDefault();

                // Get selected size from radio buttons
                var selectedSize = document.querySelector('input[name="selected_size"]:checked');

                if (!selectedSize) {
                    alert("Please select a size before adding to cart.");
                    return;
                }

                selectedSize = selectedSize.value;

                // Get selected quantity
                var selectedQty = document.getElementById('selected_qty').value || 1;

                // Get the clicked button
                var $clickedButton = $(event.target).closest('.add-to-cart');
                var $buttonText = $clickedButton.find('.product-bag-icon');
                var currentText = $buttonText.text().trim();

                $.ajax({
                    url: '<?= base_url("user/addToCart") ?>',
                    type: 'POST',
                    data: {
                        prod_id: pId,
                        size: selectedSize,
                        qty: selectedQty
                    },
                    dataType: 'json',
                    success: function (res) {
                        console.log(res);
                        if (res.status == 'success') {
                            $clickedButton.addClass("loading active disabled");

                            // Simulate button animation
                            setTimeout(function () {
                                $clickedButton.removeClass("loading").addClass("done");

                                setTimeout(function () {
                                    $clickedButton.removeClass("done active disabled");

                                    // Toggle button text based on current state
                                    if (currentText === 'Add to Cart') {
                                        $buttonText.text('Remove from Cart');
                                    } else {
                                        $buttonText.text('Add to Cart');
                                    }

                                    // Call miniCart function
                                    miniCart();

                                    // ✅ Load cart drawer content via AJAX
                                    $("#cart-drawer").load("<?= base_url('user/load_cart_drawer') ?>?pId=" + encodeURIComponent(pId) + "&size=" + encodeURIComponent(selectedSize) + "&qty=" + encodeURIComponent(selectedQty));

                                }, 500);
                            }, 500);
                        }
                    },
                    error: function (err) {
                        console.log(err);
                        alert("Error occurred. Try again.");
                    }
                });

                console.log("Product ID:", pId);
                console.log("Selected Size:", selectedSize);
                console.log("Selected Quantity:", selectedQty);


            }

            
            function updateSelectedSize() {

                const selected = document.querySelector('input[name="selected_size"]:checked');
                if (selected) {
                    const size = selected.value;
                    selected_Size_to_Buy = selected.value;
                    console.log("Selected Size:", size);
                    document.getElementById('display-size').innerText = size;
                }
            }

            window.addEventListener('DOMContentLoaded', function () {
                let selected_Size_to_Buy = '';
                updateSelectedSize();
                // Add change listener to all radios
                const radios = document.querySelectorAll('input[name="selected_size"]');
                radios.forEach(radio => {
                    radio.addEventListener('change', updateSelectedSize);
                });
            });





        </script>
        <!-- buy-now-modal end -->
        <!-- share-modal start -->
        <div class="share-modal modal fade" id="share-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <div class="share-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Share</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal"
                                aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="share-modal-content">
                            <div class="product-link d-md-flex">
                                <input type="text" id="copy-link" class="copy-url width-100 text-center text-md-start"
                                    readonly>
                                <button type="button"
                                    class="copy-btn width-100 width-md-auto btn-style secondary-btn mst-15 mst-md-0 text-nowrap">Copy</button>
                            </div>
                            <div class="product-social mst-15">
                                <ul class="social-ul ul-mt15">
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="dribbble icon-16"
                                            aria-label="Social link"><i class="ri-dribbble-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="facebook icon-16"
                                            aria-label="Social link"><i class="ri-facebook-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="instagram icon-16"
                                            aria-label="Social link"><i
                                                class="ri-instagram-fill d-block instagram lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="linkedin icon-16"
                                            aria-label="Social link"><i class="ri-linkedin-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="pinterest icon-16"
                                            aria-label="Social link"><i class="ri-pinterest-fill d-block lh-1"></i></a>
                                    </li>
                                    <li class="social-li">
                                        <a href="javascript:void(0)" class="twitter icon-16" aria-label="Social link"><i
                                                class="ri-twitter-fill d-block lh-1"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- share-modal end -->

        <!-- pickup-modal start -->
        <div class="pickup-modal modal fade" id="pickup-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-sm-30">
                        <div class="pickup-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Choose Pickup and Save Time!</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal"
                                aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="row row-mtm15 pickup-modal-content">
                            <div class="col-12">
                                <span class="d-block heading-color meb-19 heading-weight">👉 Why choose pickup?</span>
                                <div class="ul-mtm-15">
                                    <span><span class="heading-color heading-weight">Speedy service:</span> Skip the
                                        wait and grab your items on the same day.</span>
                                    <span><span class="heading-color heading-weight">No shipping fees:</span> Save money
                                        by picking up your order in-store.</span>
                                    <span><span class="heading-color heading-weight">Flexible pickup times:</span>
                                        Choose a time that suits your schedule.</span>
                                    <span><span class="heading-color heading-weight">Expert assistance:</span> Our
                                        friendly staff are on hand to help with any queries.</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="d-block heading-color meb-19 heading-weight">👉 How it works:</span>
                                <div class="ul-mtm-15">
                                    <span><span class="heading-color heading-weight">Select pickup:</span> During
                                        checkout, choose the pickup option.</span>
                                    <span><span class="heading-color heading-weight">Receive confirmation:</span> You'll
                                        receive an email confirmation once your order is ready for pickup.</span>
                                    <span><span class="heading-color heading-weight">Visit the store:</span> Head to
                                        your chosen store location at your convenience.</span>
                                    <span><span class="heading-color heading-weight">Collect your order:</span> Present
                                        your confirmation email at the pickup point, and our team will hand over your
                                        items.</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="d-block heading-color meb-19 heading-weight">👉 Frequently asked
                                    questions:</span>
                                <ul class="ul-mt15">
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">Is pickup available for
                                                all items?</span>
                                            <span class="d-block">Pickup is available for most items. If an item is
                                                eligible, you'll see the pickup option during checkout.</span>
                                        </div>
                                    </li>
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">When will my order be
                                                ready for pickup?</span>
                                            <span class="d-block">Orders are typically ready for pickup within a few
                                                hours. You'll receive an email notification once your order is
                                                ready.</span>
                                        </div>
                                    </li>
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">Can someone else pick up
                                                my order for me?</span>
                                            <span class="d-block">Yes, you can authorize someone else to pick up your
                                                order. Simply forward them the confirmation email, and they can collect
                                                the items on your behalf.</span>
                                        </div>
                                    </li>
                                    <li class="d-block">
                                        <div class="ul-mtm-15">
                                            <span class="d-block heading-color heading-weight">Is there a cutoff time
                                                for same-day pickup?</span>
                                            <span class="d-block">Yes, orders placed before [insert cutoff time] are
                                                usually available for same-day pickup. Orders placed after this time
                                                will be ready the following day.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pickup-modal end -->
    </section>
    <!-- product-detail end -->
    <!-- product-detail-description start -->
    <div class="product-detail-description section-pt">
        <div class="container">
            <div class="section-capture text-center" data-animate="animate__fadeIn">
                <div class="section-title">
                    <h2 class="section-heading">Description</h2>
                </div>
            </div>
            <div class="product-tab-description" data-animate="animate__fadeIn">
                <div class="product-description-info">
                    <h6>About this item</h6>
                    <p><?= $products[0]['product_details'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- product-detail-description end -->
    <!-- product-detail-additiona-info start -->
    <div class="product-detail-additiona-info section-pt">
        <div class="container">
            <div class="section-capture text-center" data-animate="animate__fadeIn">
                <div class="section-title">
                    <h2 class="section-heading">Additional-info</h2>
                </div>
            </div>
            <div class="product-tab-info" data-animate="animate__fadeIn">
                <div class="product-tab-ai">
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Vendor
                                </th>
                                <td class="ptb-10 plr-15 border-full"><a href="<?= base_url() ?>"
                                        class="body-dominant-color text-decoration-underline">Shingavi</a></td>
                            </tr>
                            <tr>
                                <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Type</th>
                                <td class="ptb-10 plr-15 border-full"><a
                                        class="body-dominant-color text-decoration-underline">
                                    <?= $products[0]['category_name'] ?>
                                    </a></td>
                            </tr>
                            
                            <?php if(!empty($products[0]['ring_size'])) { ?>
                            <tr>
                                <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Size</th>
                                <td class="body-color ptb-10 plr-15 border-full">
                                    <?= $products[0]['ring_size'] ?>
                                </td>
                            </tr>
                            <?php } ?>
                            <!-- <tr>
                                <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Color
                                </th>
                                <td class="body-color ptb-10 plr-15 border-full">Aliceblue, Antiquewhite, Azure</td>
                            </tr> -->
                            <!-- <tr>
                                <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Sku</th>
                                <td class="body-color ptb-10 plr-15 border-full">RT89GT</td>
                            </tr> -->
                            <?php if(!empty($products[0]['net_weight'])) { ?>
                            <tr>
                                <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Weight
                                </th>
                                <td class="body-color ptb-10 plr-15 border-full"> <?= $products[0]['net_weight'] ?> KG </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- product-detail-additiona-info end -->
    <!-- product-detail-review start -->
    <section class="product-detail-review section-pt" id="reviews">
        <div class="container">
            <!-- <div class="section-capture text-center" data-animate="animate__fadeIn">
                <div class="section-title">
                    <h2 class="section-heading">Customer love</h2>
                </div>
            </div> -->
            <div class="product-review" data-animate="animate__fadeIn">
                    <div class="row row-mtm">
                        <div class="product-review-info">
                            <div class="row row-mtm">
                                <!-- <div class="col-12 col-sm-6 col-md-4">
                                    <h6 class="font-18 meb-18">Customer reviews</h6>
                                    <div class="product-review-rating"><span class="heading-color fs-3"
                                            data-id>0</span>/<span data-score="5">0</span></div>
                                    <div class="product-star">
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star icon-16">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-review-text mst-12">Based on <span data-base>0</span> reviews
                                    </div>
                                </div> -->
                                <!-- <div class="col-12 col-sm-6 col-md-4">
                                    <div class="row row-mtm15">
                                        <div class="product-review-count d-flex align-items-center">
                                            <span
                                                class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">5<span
                                                    class="review-color msl-5"><i
                                                        class="ri-star-fill d-block lh-1"></i></span></span>
                                            <span class="product-review-progress mlr-10">
                                                <span
                                                    class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                            </span>
                                            <span class="product-review-number lh-1" data-number="1"></span>
                                        </div>
                                        <div class="product-review-count d-flex align-items-center">
                                            <span
                                                class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">4<span
                                                    class="review-color msl-5"><i
                                                        class="ri-star-fill d-block lh-1"></i></span></span>
                                            <span class="product-review-progress mlr-10">
                                                <span
                                                    class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                            </span>
                                            <span class="product-review-number lh-1" data-number="0"></span>
                                        </div>
                                        <div class="product-review-count d-flex align-items-center">
                                            <span
                                                class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">3<span
                                                    class="review-color msl-5"><i
                                                        class="ri-star-fill d-block lh-1"></i></span></span>
                                            <span class="product-review-progress mlr-10">
                                                <span
                                                    class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                            </span>
                                            <span class="product-review-number lh-1" data-number="1"></span>
                                        </div>
                                        <div class="product-review-count d-flex align-items-center">
                                            <span
                                                class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">2<span
                                                    class="review-color msl-5"><i
                                                        class="ri-star-fill d-block lh-1"></i></span></span>
                                            <span class="product-review-progress mlr-10">
                                                <span
                                                    class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                            </span>
                                            <span class="product-review-number lh-1" data-number="0"></span>
                                        </div>
                                        <div class="product-review-count d-flex align-items-center">
                                            <span
                                                class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">1<span
                                                    class="review-color msl-5"><i
                                                        class="ri-star-fill d-block lh-1"></i></span></span>
                                            <span class="product-review-progress mlr-10">
                                                <span
                                                    class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                            </span>
                                            <span class="product-review-number lh-1" data-number="0"></span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-12 col-md-12 text-end ">
                                    <button type="button"
                                        class="d-none width-100 width-md-auto btn-style secondary-btn write-review-btn">Write
                                        a review</button>
                                    <button type="button"
                                        class="width-100 width-md-auto btn-style secondary-btn close-review-btn">Close
                                        review</button>
                                </div>
                            </div>
                        </div>
                        <form action="<?= base_url('user/save_review') ?>" enctype="multipart/form-data" method="post">
                        <div class="product-review-form">
                            <div class="row field-row">
                            <div class="col-6 field-col">
                                    <label class="field-label">Rating <span class="text-danger">*</span></label>
                                    <div class="product-review-ratting">
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <style>
                                                    .star-rating {
                                                        direction: rtl;
                                                        display: inline-flex;
                                                    }
                                                    .star-rating input[type="radio"] {
                                                        display: none;
                                                    }
                                                    .star-rating label {
                                                        font-size: 2em;
                                                        color: #ccc;
                                                        cursor: pointer;
                                                    }
                                                    .star-rating input[type="radio"]:checked ~ label,
                                                    .star-rating label:hover,
                                                    .star-rating label:hover ~ label {
                                                        color: #ffc700;
                                                    }
                                                </style>
                                                <div class="star-rating">
                                                    <input type="radio" id="star5" name="review_stars" value="5" required><label for="star5">★</label>
                                                    <input type="radio" id="star4" required name="review_stars" value="4"><label for="star4">★</label>
                                                    <input type="radio" id="star3" required name="review_stars" value="3"><label for="star3">★</label>
                                                    <input type="radio" id="star2" required name="review_stars" value="2"><label for="star2">★</label>
                                                    <input type="radio" id="star1" required name="review_stars" value="1"><label for="star1">★</label>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 field-col">
                                    <label class="field-label">Upload attachment</label>
                                    <div class="field-attachment ptb-30 plr-15 plr-sm-30 text-center">
                                        <div class="review-attachment-upload d-flex flex-column align-items-center">
                                            <label for="review-img"
                                                class="review-attachment-file-upload dominant-link text-decoration-underline">Upload
                                                here</label>
                                            <div class="review-attachment-count d-none mst-10 meb-26">0 attachments
                                            </div>
                                            <input type="file" id="review-img" name="review_img"
                                                class="w-100 review-attachment-file"  hidden accept="image/*">
                                            <div class="field-attached">
                                                <ul class="ul-mt15 review-attachment-uploaded"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 field-col">
                                    <input type="hidden" name="prod_gold_id" value="<?= $products[0]['prod_gold_id'] ?>" hidden>
                                    <label for="review-name" class="field-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" id="review-name" name="review_name" class="w-100"
                                        placeholder="Enter your name" autocomplete="name" required>
                                    <!-- <span class="text-danger d-block" id="review_name_error" style="display:none;">Name is required.</span> -->
                                </div>
                                
                                <div class="col-6 field-col">
                                    <label for="review-message" class="field-label">Review message <span class="text-danger">*</span></label>
                                    <textarea rows="3" id="review-message" name="review_message" class="w-100"
                                        placeholder="Review message" autocomplete="off" required></textarea>
                                    <!-- <span class="text-danger d-block" id="review_message_error" style="display:none;">Review message is required.</span> -->
                                </div>
                                <div class="col-12 col-md-6 field-col">
                                    <label for="review-email" class="field-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="review-email" name="review_email" class="w-100"
                                        placeholder="Email address" autocomplete="email" required>
                                    <!-- <span class="text-danger d-block" id="review_email_error" style="display:none;">Email is required.</span> -->
                                </div>
                              
                                    <div class="col-12 col-sm-6 col-xl-6 d-flex justify-content-end" style="margin-top: 57px;">
                                        <button type="submit" class="w-100 width-md-auto btn-style secondary-btn ">Submit review</button>
                                </div>
                                
                                
                            </div>
                           
                        </div>
                        <div class="product-review-comment mb-2 mt-4">
                            <div class="row row-mtm">
                                
                            <?php foreach ($reviews as $row) { ?>
                                <div class="product-review-detail mt-5">
                                    <div class="product-reviewer-info d-flex flex-wrap align-items-center">
                                        <span
                                            class="width-48 height-48 secondary-color icon-16 d-flex align-items-center justify-content-center overflow-hidden rounded-circle"><i
                                                class="ri-user-line d-block lh-1"></i></span>
                                        <h6 class="product-reviewer-name width-calc-48 font-18 psl-15"><?= $row['review_name'] ?></h6>
                                    </div>
                                    <div class="product-reviewer-date mst-12">Reviwed on <?= date('d M Y', $row['entry_time']) ?></div>
                                    <div class="product-review-love mst-11">
                                        <div class="product-ratting">
                                            <span class="review-ratting">
                                                <span class="review-star icon-16">
                                                    <?php
                                                    $stars = isset($row['review_stars']) ? (int)$row['review_stars'] : 0;
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        if ($i <= $stars) {
                                                            echo '<i class="ri-star-fill"></i>';
                                                        } else {
                                                            echo '<i class="ri-star-line"></i>';
                                                        }
                                                    }
                                                    ?>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-reviewer-subject heading-color heading-weight mst-12">Very good
                                    </div>
                                        <p class="product-reviewer-review mst-5"><?= $row['review_message'] ?>.</p>
                                    <div class="product-reviewer-attachment mst-8">
                                        <ul class="ul-mt5">
                                      
                                               <li>
                                                        <img src="<?= base_url() ?>uploads/<?= $row['review_img'] ?>"
                                                            class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden"  >
                                                </li>

                                            <?php } ?>
                                            <!-- <li><img src="<?= base_url() ?>u_assets/assets/image/product/review-product1.jpg"
                                                    class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden"
                                                    alt="review-product1"></li>
                                            <li><img src="<?= base_url() ?>u_assets/assets/image/product/review-product2.jpg"
                                                    class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden"
                                                    alt="review-product2"></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <script>
document.addEventListener('DOMContentLoaded', function() {
    var reviewForm = document.querySelector('form[action*="save_review"]');
    var hasTriedSubmit = false;
    if (reviewForm) {
        // Hide all errors on load
        document.getElementById('review_stars_error').style.display = 'none';
        document.getElementById('review_name_error').style.display = 'none';
        document.getElementById('review_message_error').style.display = 'none';
        document.getElementById('review_email_error').style.display = 'none';

        // Hide error when user selects a star
        var starRadios = reviewForm.querySelectorAll('input[name="review_stars"]');
        starRadios.forEach(function(radio) {
            radio.addEventListener('change', function() {
                document.getElementById('review_stars_error').style.display = 'none';
            });
        });
        // Hide error when user types in name
        document.getElementById('review-name').addEventListener('input', function() {
            if (hasTriedSubmit) document.getElementById('review_name_error').style.display = 'none';
        });
        // Hide error when user types in message
        document.getElementById('review-message').addEventListener('input', function() {
            if (hasTriedSubmit) document.getElementById('review_message_error').style.display = 'none';
        });
        // Hide error when user types in email
        document.getElementById('review-email').addEventListener('input', function() {
            if (hasTriedSubmit) document.getElementById('review_email_error').style.display = 'none';
        });

        reviewForm.addEventListener('submit', function(e) {
            hasTriedSubmit = true;
            var valid = true;
            // Rating validation
            var checked = reviewForm.querySelector('input[name="review_stars"]:checked');
            var ratingError = document.getElementById('review_stars_error');
            if (!checked) {
                ratingError.style.display = 'block';
                valid = false;
            } else {
                ratingError.style.display = 'none';
            }
            // Name validation
            var nameInput = document.getElementById('review-name');
            var nameError = document.getElementById('review_name_error');
            if (!nameInput.value.trim()) {
                nameError.style.display = 'block';
                valid = false;
            } else {
                nameError.style.display = 'none';
            }
            // Message validation
            var messageInput = document.getElementById('review-message');
            var messageError = document.getElementById('review_message_error');
            if (!messageInput.value.trim()) {
                messageError.style.display = 'block';
                valid = false;
            } else {
                messageError.style.display = 'none';
            }
            // Email validation
            var emailInput = document.getElementById('review-email');
            var emailError = document.getElementById('review_email_error');
            if (!emailInput.value.trim()) {
                emailError.style.display = 'block';
                valid = false;
            } else {
                emailError.style.display = 'none';
            }
            if (!valid) {
                e.preventDefault();
                return false;
            }
        });
    }
});
</script>

                    </div>
            </div>
        </div>
    </section>
    <!-- product-detail-review end -->

    <!-- related-product start -->
    <section class="related-area section-ptb">
        <div class="container">
            <div class="collection-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">Related product</h2>
                    </div>
                </div>
                <div class="collection-wrap">
                    <div class="related-slider swiper" id="related-slider">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($relatedProducts as $row) {
                                ?>
                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                <div class="single-product w-100">
                                    <div class="row single-product-wrap">
                                        <div class="product-image">
                                            <a class="pro-img">

                                                <img src="<?= base_url() ?>uploads/<?= $row['imgs'][0] ?>"
                                                    class="w-100 img-fluid img1" alt="p-1">
                                                <?php
                                                if (count($row['imgs']) > 1) {
                                                    ?>
                                                <img src="<?= base_url() ?>uploads/<?= $row['imgs'][1] ?>"
                                                    class="w-100 img-fluid img2" alt="p-2">
                                                <?php } else {
                                                    ?>
                                                <img src="<?= base_url() ?>uploads/<?= $row['imgs'][0] ?>"
                                                    class="w-100 img-fluid img2" alt="p-1">
                                                <?php
                                                } ?>

                                            </a>
                                            <div class="product-action">
                                                <a class="wishlist">
                                                    <span class="product-icon">Wishlist</span>
                                                </a>
                                                <a onclick="openModal('<?= $row['prod_gold_id'] ?>')"
                                                    class="quick-view">
                                                    <span class="product-icon">Quickview</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-content">
                                                <div class="pro-content-action">
                                                    <div class="product-title">
                                                        <span
                                                            class="d-block meb-8"><?= $row['product_group_name'] ?></span>
                                                        <span class="d-block heading-weight"><a
                                                                class="d-block w-100 dominant-link text-truncate"><?= $row['product_name'] ?></a></span>
                                                    </div>
                                                    <div class="pro-price-action">
                                                        <div class="price-box heading-weight">
                                                            <span
                                                                class="new-price dominant-color"><?= $row['formatted_discounted_price'] ?></span>
                                                            <span class="old-price text-decoration-line-through">
                                                                <?php
                                                                if ($row['discount_amount'] > 0) {
                                                                    echo $row['formatted_original_price'];
                                                                }
                                                                ?>
                                                            </span>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="javascript:void(0)" class="add-to-cart"
                                                                onclick="addToCartRelated('<?= $row['prod_gold_id'] ?>')">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16"><i
                                                                            class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                    <span class="product-loader-icon icon-16"><i
                                                                            class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16"><i
                                                                            class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                                <span class="tooltip-text">add to cart</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <div class="price-box heading-weight">
                                                        <span
                                                            class="new-price dominant-color"><?= $row['formatted_discounted_price'] ?></span>
                                                        <?php
                                                        if ($row['discount_amount'] > 0) {
                                                            ?>
                                                        <span class="old-price"><span class="mer-3">~</span><span
                                                                class="text-decoration-line-through"><?= $row['formatted_original_price'] ?></span></span><?php } ?>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p><?= $row['product_details'] ?></p>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="add-to-cart"
                                                        onclick="addToCartRelated('<?= $row['prod_gold_id'] ?>')">
                                                        <span class="product-icon">
                                                            <span class="product-bag-icon icon-16"><i
                                                                    class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                            <span class="product-loader-icon icon-16"><i
                                                                    class="ri-loader-4-line d-block lh-1"></i></span>
                                                            <span class="product-check-icon icon-16"><i
                                                                    class="ri-check-line d-block lh-1"></i></span>
                                                        </span>
                                                        <span class="tooltip-text">add to cart</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="add-to-wishlist">
                                                        <span class="product-icon"><i
                                                                class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">wishlist</span>
                                                    </a>
                                                    <a onclick="openModal('<?= $row['prod_gold_id'] ?>')"
                                                        class="quick-view">
                                                        <span class="product-icon"><i
                                                                class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                        <span class="tooltip-text">quickview</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- <div class="pro-sku-variant">
                                                        <div class="product-sku-variant">
                                                            <div class="pro-sku">
                                                                <span class="heading-color text-uppercase heading-weight"><span class="dominant-color msl-4"><?= $row['category_name'] ?></span></span>
                                                            </div>
                                                            <div class="pro-select-variant">
                                                                <span class="heading-color text-uppercase heading-weight">Size:</span>
                                                                <select id="gleam-band-size" name="gleam-band-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
                                                                    <option value="16cm" selected>16cm</option>
                                                                    <option value="18cm">18cm</option>
                                                                    <option value="20cm">20cm</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>





                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button type="button" class="swiper-prev swiper-prev-related" aria-label="Arrow previous"><i
                                    class="ri-arrow-left-line d-block lh-1"></i></button>
                            <button type="button" class="swiper-next swiper-next-related" aria-label="Arrow next"><i
                                    class="ri-arrow-right-line d-block lh-1"></i></button>
                        </div>
                    </div>
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-related"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related-product end -->
</main>
<!-- main end -->