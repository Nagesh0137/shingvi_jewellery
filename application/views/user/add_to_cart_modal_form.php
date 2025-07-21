<form method="post" action="javascript:void(0)" class="drawer-contents d-flex flex-column">
        <div class="drawer-fixed-header ptb-10 plr-15 beb">
            <?php 
            // print_r($size);
            //     print_r($cart); 
            ?>
            <div class="drawer-header d-flex align-items-center justify-content-between">
                <h6 class="font-18">Cart</h6>
                <div class="drawer-close">
                    <button type="button" class="drawer-close-btn body-secondary-color icon-16" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                </div>
            </div>
        </div>
        <div class="pst-10 plr-15 text-center">
            <div class="extra-color font-14 ptb-6 plr-15 dominant-bg">You're just a few steps away from <span class="heading-weight blinking">completing your order. Review your items and proceed to checkout! </span>.</div>
        </div>
        <div class="drawer-cart-empty d-none h-100 ptb-30 plr-15">
            <div class="drawer-scrollable h-100 d-flex flex-column align-items-center justify-content-center text-center">
                <span class="secondary-color icon-32 meb-23"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                <h2 class="font-24">Your cart is currently empty</h2>
                <a href="<?=base_url()?>" class="link-secondary-color mst-20">Continue shopping</a>
            </div>
        </div>
        <div class="drawer-inner h-100 d-flex flex-column justify-content-between overflow-hidden">
            <div class="drawer-scrollable h-100 overflow-auto">
                <div class="cart-drawer-table plr-15">
                    <div class="cart-drawer-info ptb-15 bst">
                        <div class="cart-drawer-content d-flex flex-wrap">
                            <div class="cart-drawer-image width-88">
                                <a href="<?=base_url()?>" class="d-block br-hidden"><img src="<?= base_url() ?>u_assets/assets/image/cart/cart-1.jpg" class="w-100 img-fluid" alt="cart-1"></a>
                            </div>
                            <div class="cart-drawer-info width-calc-88 psl-15">
                                <div class="cart-drawer-detail">
                                    <a href="<?=base_url()?>" class="dominant-link heading-weight">Gleam band</a>
                                    <span class="d-block mst-7">16cm / Aliceblue</span>
                                </div>
                                <div class="heading-color heading-weight mst-7">$79.00</div>
                                <div class="cart-drawer-qty-remove d-flex align-items-end justify-content-between mst-16">
                                    <div class="js-qty-wrapper">
                                        <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                            <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                            <input type="number" name="gleam-band-16cm-aliceblue" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                            <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                    <button type="submit" class="cart-drawer-remove text-danger icon-16" aria-label="Remove item"><i class="ri-delete-bin-line d-block lh-1"></i></button>
                                </div>
                                <div class="text-danger font-14 mst-6"><i class="ri-error-warning-line mer-4"></i>Hurry! Only <span class="heading-weight">15</span> in stock.</div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-drawer-info ptb-15 bst">
                        <div class="cart-drawer-content d-flex flex-wrap">
                            <div class="cart-drawer-image width-88">
                                <a href="<?=base_url()?>" class="d-block br-hidden"><img src="<?= base_url() ?>u_assets/assets/image/cart/cart-2.jpg" class="w-100 img-fluid" alt="cart-2"></a>
                            </div>
                            <div class="cart-drawer-info width-calc-88 psl-15">
                                <div class="cart-drawer-detail">
                                    <a href="<?=base_url()?>" class="dominant-link heading-weight">Luxe loop</a>
                                    <span class="d-block mst-7">20cm / Azure</span>
                                </div>
                                <div class="heading-color heading-weight mst-7">$49.00</div>
                                <div class="cart-drawer-qty-remove d-flex align-items-end justify-content-between mst-16">
                                    <div class="js-qty-wrapper">
                                        <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                            <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                            <input type="number" name="luxe-loop-20cm-azure" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                            <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                    <button type="submit" class="cart-drawer-remove text-danger icon-16" aria-label="Remove item"><i class="ri-delete-bin-line d-block lh-1"></i></button>
                                </div>
                                <div class="text-danger font-14 mst-6"><i class="ri-error-warning-line mer-4"></i>Hurry! Only <span class="heading-weight">9</span> in stock.</div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="drawer-recommended-product ptb-15 plr-15 bst">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="heading-color"><i class="ri-thumb-up-line icon-16 mer-4"></i>Recommended for you</div>
                        <div class="swiper-buttons lh-1">
                            <div class="swiper-buttons-wrap">
                                <button type="button" class="swiper-prev swiper-prev-drawer-recommended-product dominant-link icon-16" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                <button type="button" class="swiper-next swiper-next-drawer-recommended-product dominant-link icon-16" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="drawer-recommended-product-wrap pst-15">
                        <div class="drawer-recommended-product-slider swiper" id="drawer-recommended-product-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="drawer-recommended-product">
                                        <div class="row drawer-recommended-single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?=base_url()?>" class="pro-img"><img src="<?= base_url() ?>u_assets/assets/image/index/product/p-1.jpg" class="w-100 img-fluid" alt="p-1"></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-content">
                                                    <div class="product-title">
                                                        <span class="d-block font-14"><a href="<?=base_url()?>" class="d-block w-100 text-truncate">Gleam band</a></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="price-box font-14 heading-weight">
                                                            <span class="new-price dominant-color">$79.00</span>
                                                            <span class="old-price text-decoration-line-through">$89.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="drawer-recommended-product">
                                        <div class="row drawer-recommended-single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?=base_url()?>" class="pro-img"><img src="<?= base_url() ?>u_assets/assets/image/index/product/p-3.jpg" class="w-100 img-fluid" alt="p-3"></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-content">
                                                    <div class="product-title">
                                                        <span class="d-block font-14"><a href="<?=base_url()?>" class="d-block w-100 text-truncate">Luxe loop</a></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="price-box font-14 heading-weight">
                                                            <span class="new-price dominant-color">$49.00</span>
                                                            <span class="old-price text-decoration-line-through">$59.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="drawer-recommended-product">
                                        <div class="row drawer-recommended-single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?=base_url()?>" class="pro-img"><img src="<?= base_url() ?>u_assets/assets/image/index/product/p-5.jpg" class="w-100 img-fluid" alt="p-5"></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-content">
                                                    <div class="product-title">
                                                        <span class="d-block font-14"><a href="<?=base_url()?>" class="d-block w-100 text-truncate">Opal stud</a></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="price-box font-14 heading-weight">
                                                            <span class="new-price dominant-color">$69.00</span>
                                                            <span class="old-price text-decoration-line-through">$79.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="drawer-recommended-product">
                                        <div class="row drawer-recommended-single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?=base_url()?>" class="pro-img"><img src="<?= base_url() ?>u_assets/assets/image/index/product/p-7.jpg" class="w-100 img-fluid" alt="p-7"></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-content">
                                                    <div class="product-title">
                                                        <span class="d-block font-14"><a href="<?=base_url()?>" class="d-block w-100 text-truncate">Ruby hoop</a></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="price-box font-14 heading-weight">
                                                            <span class="new-price dominant-color">$49.00</span>
                                                            <span class="old-price text-decoration-line-through">$54.00</span>
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
                <div class="drawer-instruction ptb-15 plr-15 bst">
                    <a href="#collapse-drawer-note" class="d-flex flex-wrap align-items-center justify-content-between" data-bs-toggle="collapse" aria-expanded="true">
                        <span class="drawer-instruction-title width-calc-16"><i class="ri-edit-line icon-16 mer-4"></i>Type a note for the seller</span>
                        <span class="drawer-instruction-icon width-16 icon-16"><i class="ri-arrow-down-s-line"></i></span>
                    </a>
                    <div class="collapse show" id="collapse-drawer-note">
                        <div class="pst-15">
                            <textarea rows="3" id="drawernote" name="drawernote" class="w-100" placeholder="Write your message..." autocomplete="off"></textarea>
                        </div>
                    </div>
                </div>
                <div class="drawer-instruction ptb-15 plr-15 bst">
                    <a href="#collapse-drawer-discount" class="d-flex flex-wrap align-items-center justify-content-between" data-bs-toggle="collapse" aria-expanded="true">
                        <span class="drawer-instruction-title width-calc-16"><i class="ri-discount-percent-line icon-16 mer-4"></i>Have a code? Apply here</span>
                        <span class="drawer-instruction-icon width-16 icon-16"><i class="ri-arrow-down-s-line"></i></span>
                    </a>
                    <div class="collapse show" id="collapse-drawer-discount">
                        <div class="pst-15">
                            <div class="d-flex flex-wrap extra-bg border-full br-hidden">
                                <input type="text" id="drawerdiscount" name="drawerdiscount" class="width-calc-40 h-auto border-0 rounded-0" placeholder="Type your code here" autocomplete="off" required>
                                <button type="button" class="width-40 icon-16 dominant-link drawer-dis-btn" aria-label="Discount code button"><i class="ri-arrow-right-up-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="drawer-footer ptb-15 plr-15 bst">
                <div class="drawer-total d-flex justify-content-between">
                    <span>Subtotal</span>
                    <span class="heading-color heading-weight">$246.00</span>
                </div>
                <div class="font-12 mst-8">Shipping, taxes, and discount codes calculated at checkout</div>
                <div class="drawer-cart-checkout mst-12">
                    <div class="drawer-cart-box meb-11">
                        <label class="cust-checkbox-label checkbox-agree">
                            <input type="checkbox" id="drawer-terms" name="drawer-terms" class="cust-checkbox checkboxbtn">
                            <span class="d-block cust-check"></span>
                            <span class="login-read">I have agree with the <a href="<?=base_url()?>rohan/terms_of_use" class="body-secondary-color text-decoration-underline">terms & conditions</a>.</span>
                        </label>
                    </div>
                    <div class="row btn-row15">
                        <div class="col-sm-6 col-12">
                            <a href="<?= base_url() ?>user/cart_page" class="w-100 btn-style quaternary-btn">View cart</a>
                        </div>
                        <div class="col-sm-6 col-12">
                            <a href="<?= base_url() ?>user/checkout" class="w-100 btn-style secondary-btn hide-btn opacity-50 disabled pe-none">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>