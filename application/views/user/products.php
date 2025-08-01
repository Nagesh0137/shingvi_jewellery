<div class="breadcrumb-area ptb-15" data-bgimg="<?= base_url() ?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?= base_url() ?>" class="extra-color">Home</a> / Products</span>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- main start -->
<main id="main">
    <!-- shop-content start -->
    <section class="shop-content section-ptb">
        <div class="container">
            <!-- shop-sidebar start -->

            <!-- shop-sidebar end -->
            <!-- collection-info start -->
            <div class="row row-mtm" data-animate="animate__fadeIn">

                <!-- <div class="shop-filter-list d-flex align-items-start justify-content-between">
                    <ul class="shop-filter-ul ul-mt5 align-items-center">
                        <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Out of stock<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">In stock<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Aliceblue<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">16cm<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Rings<i class="ri-close-large-line"></i></a></li>
                        <li class="shop-filter-li"><button type="submit" class="shop-filter-active text-decoration-underline">Clear all</button></li>
                    </ul>
                    <div class="shop-filter-loader"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="3" cx="33" cy="33" r="30"></circle></svg></div>
                </div> -->

                <div class="shop-product-wrap data-grid">
                    <!-- shop-grid start -->
                    <div class="row row-mtm30">
                        <?php
                        if (!empty($products) && count($products) > 0) {
                            if (count($products) > 0) {
                                foreach ($products as $row) {
                                    $imgs = explode('||', $row['product_image']);

                        ?>
                                    <div class="col-6 col-md-4 col-xl-3 d-flex shop-col" data-animate="animate__fadeIn">
                                        <div class="single-product w-100">
                                            <div class="row single-product-wrap">
                                                <div class="product-image">
                                                    <a href="<?= base_url() ?>user/product_details/<?= $row['prod_gold_id'] ?>" class="pro-img">
                                                        <img src="<?= base_url() ?>uploads/<?= $imgs[0] ?>" class="w-100 img-fluid img1" alt="p-1">
                                                        <?php
                                                        if (count($imgs) > 1) {
                                                        ?>
                                                            <img src="<?= base_url() ?>uploads/<?= $imgs[1] ?>" class="w-100 img-fluid img2" alt="p-2">

                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?= base_url() ?>uploads/<?= $imgs[0] ?>" class="w-100 img-fluid img2" alt="p-2">
                                                        <?php
                                                        }
                                                        ?>

                                                    </a>
                                                    <div class="product-action">
                                                        <?php
                                                        if (isset($_SESSION['user_id'])) {
                                                            $wt = $this->My_model->select_where("user_wishlist", ['user_id' => $_SESSION['user_id'], 'prod_id' => $row['prod_gold_id']]);
                                                        ?>
                                                            <!-- <a class="add-to-wishlist" onclick="addToWishlist('<?= $row['prod_gold_id'] ?>')" class="wishlist">
                                                            <span class="product-icon">
                                                                <i id="add-to-wishlist<?= $row['prod_gold_id'] ?>" class="<?php if (isset($wt[0])) {
                                                                                                                                echo "ri-heart-fill";
                                                                                                                            } else {
                                                                                                                                echo 'ri-heart-line';
                                                                                                                            } ?> d-block icon-16 lh-1"></i>
                                                            </span>
                                                        </a> -->
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <!-- <a class="add-to-wishlist" onclick="addToWishlist('<?= $row['prod_gold_id'] ?>')" class="wishlist">
                                                            <span class="product-icon">
                                                                <i id="add-to-wishlist<?= $row['prod_gold_id'] ?>" class="<?php if (isset($_SESSION['wishlist'][$row['prod_gold_id']])) {
                                                                                                                                echo "ri-heart-fill";
                                                                                                                            } else {
                                                                                                                                echo 'ri-heart-line';
                                                                                                                            } ?> d-block icon-16 lh-1"></i>
                                                            </span>
                                                        </a> -->
                                                        <?php
                                                        }
                                                        ?>
                                                        <a onclick="openModal('<?= $row['prod_gold_id'] ?>')">
                                                            <span class="product-icon">Quickview</span>
                                                        </a>
                                                    </div>
                                                </div>



                                                <div class="product-content">

                                                    <div class="pro-content">
                                                        <div class="pro-content-action">
                                                            <div class="product-title">
                                                                <span class="d-block meb-8"><?= isset($row['category_name']) ? $row['category_name'] : cat_name($row['cat_id']) ?></span>
                                                                <span class="d-block heading-weight">
                                                                    <a href="<?= base_url() ?>user/product_details/<?= $row['prod_gold_id'] ?>" class="d-block w-100 dominant-link text-truncate text-capitalize">
                                                                        <?= $row['product_name'] ?>
                                                                    </a>
                                                                </span>
                                                            </div>

                                                            <div class="pro-price-action">
                                                                <?php
                                                                if ($row['total_discount_amt'] > 0) {
                                                                    $original_price = $row['price'];
                                                                    $discount_amount = $row['total_discount_amt'];
                                                                    $discounted_price = $original_price - $discount_amount;
                                                                    $formatted_original_price = number_format1($original_price);
                                                                    $formatted_discounted_price = number_format1($discounted_price);
                                                                ?>
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color"> <?= $formatted_discounted_price ?> &#8377;</span>
                                                                        <span class="old-price text-decoration-line-through"><?= $formatted_original_price ?> &#8377;</span>
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color"><?= number_format1($row['price']) ?> &#8377;</span>
                                                                    </div>
                                                                <?php } ?>

                                                                <div class="product-action">
                                                                    <?php
                                                                    if (isset($_SESSION['user_id'])) {
                                                                        $ucart = $this->My_model->select_where("user_cart", [
                                                                            'user_id' => $_SESSION['user_id'],
                                                                            'prod_id' => $row['prod_gold_id'],
                                                                            'status' => 'active'
                                                                        ]);
                                                                        $inCart = isset($ucart[0]);
                                                                    } else {
                                                                        $inCart = isset($_SESSION['cart'][$row['prod_gold_id']]);
                                                                    }
                                                                    ?>
                                                                    <a class="add-to-cart <?= $inCart ? 'in-cart' : '' ?>" id="add-to-cart-btn-1-<?= $row['prod_gold_id'] ?>" onclick="addToCart('<?= $row['prod_gold_id'] ?>', this)">
                                                                        <span class="product-icon">
                                                                            <span class="product-bag-icon icon-16">
                                                                                <i class="<?= $inCart ? 'ri-shopping-bag-fill text-white' : 'ri-shopping-bag-3-line text-white' ?> d-block lh-1"></i>
                                                                            </span>
                                                                            <span class="product-loader-icon icon-16" style="display: none;"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                            <span class="product-check-icon icon-16" style="display: none;"><i class="ri-check-line d-block lh-1"></i></span>
                                                                        </span>
                                                                        <span class="tooltip-text text-nowrap px-2"><?= $inCart ? 'Added to cart' : 'Add to cart' ?></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="product-price">
                                                            <div class="price-box heading-weight">
                                                                <span class="new-price dominant-color"><?= isset($row['formatted_discounted_price']) ? $row['formatted_discounted_price'] : '' ?></span>
                                                                <?php if ($row['total_discount_amt'] > 0) { ?>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through"><?= $row['formatted_original_price'] ?></span></span>
                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                        <div class="product-description">
                                                            <p><?= $row['product_details'] ?></p>
                                                        </div>

                                                        <div class="product-action">
                                                            <?php
                                                            if (isset($_SESSION['user_id'])) {
                                                                $ucart = $this->My_model->select_where("user_cart", [
                                                                    'user_id' => $_SESSION['user_id'],
                                                                    'prod_id' => $row['prod_gold_id'],
                                                                    'status' => 'active'
                                                                ]);
                                                                $inCart = isset($ucart[0]);
                                                            } else {
                                                                $inCart = isset($_SESSION['cart'][$row['prod_gold_id']]);
                                                            }
                                                            ?>
                                                            <a class="add-to-cart <?= $inCart ? 'in-cart' : '' ?>" id="add-to-cart-btn-2-<?= $row['prod_gold_id'] ?>" onclick="addToCart('<?= $row['prod_gold_id'] ?>', this)">
                                                                <span class="product-icon">
                                                                    <span class="product-bag-icon icon-16">
                                                                        <i class="<?= $inCart ? 'ri-shopping-bag-fill text-dark' : 'ri-shopping-bag-3-line' ?> d-block lh-1"></i>
                                                                    </span>
                                                                    <span class="product-loader-icon icon-16" style="display: none;"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                    <span class="product-check-icon icon-16" style="display: none;"><i class="ri-check-line d-block lh-1"></i></span>
                                                                </span>
                                                                <span class="tooltip-text"><?= $inCart ? 'Added_to_cart' : 'Add to cart' ?></span>
                                                            </a>

                                                            <!-- <?php
                                                                    if (isset($_SESSION['user_id'])) {
                                                                        $wt = $this->My_model->select_where("user_wishlist", [
                                                                            'user_id' => $_SESSION['user_id'],
                                                                            'prod_id' => $row['prod_gold_id']
                                                                        ]);
                                                                    ?> -->
                                                            <!-- <a class="add-to-wishlist" onclick="addToWishlist('<?= $row['prod_gold_id'] ?>')"> 
                                                                <span class="product-icon">
                                                                    <i id="add-to-wishlist<?= $row['prod_gold_id'] ?>" class="<?= isset($wt[0]) ? 'ri-heart-fill' : 'ri-heart-line' ?> d-block icon-16 lh-1"></i>
                                                                </span>
                                                                <span class="tooltip-text">wishlist</span>
                                                            </a> -->
                                                        <?php } else { ?>
                                                            <!-- <a class="add-to-wishlist" onclick="addToWishlist('<?= $row['prod_gold_id'] ?>')"> 
                                                                <span class="product-icon">
                                                                    <i id="add-to-wishlist<?= $row['prod_gold_id'] ?>" class="<?= isset($_SESSION['wishlist'][$row['prod_gold_id']]) ? 'ri-heart-fill' : 'ri-heart-line' ?> d-block icon-16 lh-1"></i>
                                                                </span>
                                                                <span class="tooltip-text">wishlist</span>
                                                            </a> -->
                                                        <?php } ?>

                                                        <a class="quick-view d-none">
                                                            <span class="product-icon">
                                                                <i onclick="openModal('<?= $row['prod_gold_id'] ?>')" class="ri-eye-line d-block icon-16 lh-1"></i>
                                                            </span>
                                                            <span class="tooltip-text">quickview</span>
                                                        </a>
                                                        </div>
                                                    </div>



                                                    <div class="pro-sku-variant">


                                                        <div class="product-sku-variant">
                                                            <!-- if isset session - user it -->

                                                            <div class="pro-sku font-14">
                                                                <span
                                                                    class="heading-color text-uppercase heading-weight">Product ID:<span
                                                                        class="dominant-color msl-4"><?= $row['product_id'] ?></span></span><br>
                                                            </div>
                                                            <div class="pro-select-variant font-14">

                                                                <?php
                                                                if (!empty($row['ring_size'])) {
                                                                    $sizes = explode(',', $row['ring_size']);
                                                                    $i = 0;
                                                                ?>
                                                                    <span class="heading-color text-uppercase heading-weight font-14">Size:</span>
                                                                    <select id="gleam-band-size-<?= $row['prod_gold_id'] ?>" name="gleam-band-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0 font-14">
                                                                        <?php
                                                                        foreach ($sizes as $sz) {
                                                                            $i++;
                                                                        ?>
                                                                            <option value="<?= $sz ?>" <?= ($i == 1) ? 'selected' : ''; ?>><?= $sz ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                <?php } else {
                                                                ?>
                                                                    <select id="gleam-band-size-<?= $row['prod_gold_id'] ?>" style="visibility: hidden;" name="gleam-band-size" style="visibility: hidden;" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0 font-14">
                                                                        <option value="NA" selected>NA</option>
                                                                    </select>
                                                                <?php
                                                                } ?>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            <?php }
                            ?>
                            <div class="d-flex justify-content-center align-items-center text-center mt-5">
                <?php if(isset($ttl_pages)){ pagination($ttl_pages, $page_no); } ?>
            </div>
                            <?php
                            }
                        } else { ?>
                            <div class="col-12">
                                <div class="text-center">
                                    <h3 class="text-muted">No products found</h3>
                                    <a href="<?= base_url() ?>user/products" class="btn btn-mute">View All Products</a>
                                </div>

                            <?php } ?>

                            </div>
                            <!-- shop-grid end -->
                            <!-- paginatoin start -->
                            <!-- <div class="paginatoin-area section-pt" data-animate="animate__fadeIn">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination ul-mt5 align-items-center justify-content-center pagination-box">
                                    <li class="page-item first">
                                        <a class="page-link p-0 m-0 bg-transparent heading-weight border-0 lh-1" aria-label="First page">First</a>
                                    </li>
                                    <li class="page-item prev">
                                        <a class="page-link icon-16 d-flex align-items-center justify-content-center p-0 m-0 bg-transparent heading-weight border-0 border-radius" aria-label="Previous"><i class="ri-arrow-left-line d-block lh-1"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1" aria-label="Page number">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1" aria-label="Page number">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1" aria-label="Page number">3</a>
                                    </li>
                                    <li class="page-item next">
                                        <a class="page-link icon-16 d-flex align-items-center justify-content-center p-0 m-0 bg-transparent heading-weight border-0 border-radius" aria-label="Next"><i class="ri-arrow-right-line d-block lh-1"></i></a>
                                    </li>
                                    <li class="page-item last">
                                        <a class="page-link p-0 m-0 bg-transparent heading-weight border-0 lh-1" aria-label="Last page">Last</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                            <!-- paginatoin end -->
                    </div>
                </div>
                <!-- collection-info end -->
            </div>
    </section>
    <!-- shop-content start -->
</main>




<style>
    /* Add to Cart Button States */
    .add-to-cart.loading {
        pointer-events: none;
        opacity: 0.7;
    }

    .add-to-cart.done {
        background-color: #4CAF50 !important;
        color: white !important;
    }

    .product-loader-icon {
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .product-check-icon {
        color: #4CAF50;
    }

    .add-to-cart.in-cart .product-bag-icon i {
        color: #4CAF50;
    }
</style>


<script>
    // Function to show the mini cart
    function miniCart() {
        $("#cart-drawer").removeClass("invisible").addClass("active visible");
        $(".bg-shop").removeClass("opacity-0 invisible").addClass("opacity-50 visible");
    }

    // function addToCart(pId, clickedElement) {
    //     event.preventDefault();

    //     // Get the clicked button element
    //     var $clickedBtn = $(clickedElement);

    //     var selectedSize = document.getElementById("gleam-band-size-"+pId).value;
    //     console.log(selectedSize,'selectedSize');
    //     if (selectedSize === "") {
    //         // alert("Please select a size before adding to cart.");
    //         selectedSize = 'NA';
    //         return;
    //     }

    //     // Show loading state immediately
    //     $clickedBtn.addClass("loading active disabled");
    //     $clickedBtn.find('.product-bag-icon').hide();
    //     $clickedBtn.find('.product-loader-icon').show();

    //     $.ajax({
    //         url: '<?= base_url("user/addToCart") ?>',
    //         type: 'POST',
    //         data: { prod_id: pId, size: selectedSize },
    //         dataType: 'json',
    //         success: function (res) {
    //             console.log(res);
    //             if(res.status == 'success') {
    //                 // Show success state
    //                 setTimeout(function () {
    //                     $clickedBtn.removeClass("loading").addClass("done");
    //                     $clickedBtn.find('.product-loader-icon').hide();
    //                     $clickedBtn.find('.product-check-icon').show();

    //                     setTimeout(function () {
    //                         $clickedBtn.removeClass("done active disabled");
    //                         $clickedBtn.find('.product-check-icon').hide();
    //                         $clickedBtn.find('.product-bag-icon').show();

    //                         // Update all add-to-cart buttons for this product
    //                         var allCartButtons = $('[id^="add-to-cart-btn-"][id$="-' + pId + '"]');
    //                         allCartButtons.each(function() {
    //                             $(this).addClass("in-cart");
    //                             // $(this).find('.tooltip-text').text('Added to cart');
    //                             $(this).find('.product-bag-icon i')
    //                                 .removeClass('ri-shopping-bag-3-line')
    //                                 .addClass('ri-shopping-bag-fill text-success');
    //                         });

    //                         // Call miniCart function
    //                         miniCart();

    //                         // Close quickview modal if exists
    //                         $clickedBtn.closest(".quickview-modal").find(".quickview-modal-header button").click();

    //                         // Load cart drawer content via AJAX
    //                         $("#cart-drawer").load("<?= base_url('user/load_cart_drawer') ?>?pId=" + encodeURIComponent(pId) + "&size=" + encodeURIComponent(selectedSize));

    //                     }, 800);
    //                 }, 500);
    //             } else {
    //                 // Reset button state on failure
    //                 $clickedBtn.removeClass("loading active disabled");
    //                 $clickedBtn.find('.product-loader-icon').hide();
    //                 $clickedBtn.find('.product-bag-icon').show();
    //                 alert("Failed to add to cart. Please try again.");
    //             }
    //         },
    //         error: function (err) {
    //             console.log(err);
    //             // Reset button state on error
    //             $clickedBtn.removeClass("loading active disabled");
    //             $clickedBtn.find('.product-loader-icon').hide();
    //             $clickedBtn.find('.product-bag-icon').show();
    //             alert("Error occurred. Try again.");
    //         }
    //     });

    //     console.log("Product ID:", pId);
    //     console.log("Selected Size:", selectedSize);
    // }
</script>