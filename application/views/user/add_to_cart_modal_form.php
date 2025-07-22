<style>
    .drawer-scrollable {
        flex: 1 1 auto;
        overflow-y: auto;
        max-height: calc(100vh - 200px);
        -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS */
    }
    
    .drawer-inner {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    /* Ensure the container has a defined height */
    .drawer-contents {
        height: 100%;
        display: flex;
        flex-direction: column;
    }
</style>

<form method="post" action="javascript:void(0)" class="drawer-contents d-flex flex-column h-100">
    <div class="drawer-fixed-header ptb-10 plr-15 beb">
        <div class="drawer-header d-flex align-items-center justify-content-between">
            <h6 class="font-18">Cart</h6>
            <div class="drawer-close">
                <button type="button" class="drawer-close-btn body-secondary-color icon-16" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
            </div>
        </div>
    </div>

    <div class="pst-10 plr-15 text-center">
        <div class="extra-color font-14 ptb-6 plr-15 dominant-bg">
            You're just a few steps away from <span class="heading-weight blinking">completing your order. Review your items and proceed to checkout! </span>.
        </div>
    </div>

    <div class="drawer-inner h-100 d-flex flex-column">
        <!-- Scrollable content area -->
        <div class="drawer-scrollable">
            <div class="cart-drawer-table plr-15">
                <?php if (!empty($cart)) : ?>
                    <?php 
                        $subtotal = 0;
                        foreach ($cart as $item) : 
                            $price = isset($item[0]['fixed_amount']) ? $item[0]['fixed_amount'] : 0;
                            $subtotal += $price;
                    ?>
                    <div class="cart-drawer-info ptb-15 bst">
                        <div class="cart-drawer-content d-flex flex-wrap">
                            <div class="cart-drawer-image width-88">
                                <a href="<?= base_url() ?>user/product_detail/" class="d-block br-hidden">
                                    <img src="<?= base_url() ?>uploads/<?= $item[0]['imgs'][0] ?>" class="w-100 img-fluid" alt="<?= $item[0]['product_name'] ?>">
                                </a>
                            </div>
                            <div class="cart-drawer-info width-calc-88 psl-15">
                                <div class="cart-drawer-detail">
                                    <?php if(!empty($item[0]['product_name'])){
                                        ?>
                                    <a href="<?= base_url() ?>user/product_detail/<?= $item[0]['product_id'] ?>" class="dominant-link heading-weight"><?= $item[0]['product_name'] ?></a>
                                <?php } ?>
                                    <!-- <?php if (!empty($size)) : ?>
                                        <span class="d-block mst-7">Size: <?= $size ?></span>
                                    <?php endif; ?> -->
                                    <span class="d-block mst-7"><?= $item[0]['caret'] ?> / <?= $item[0]['purity'] ?>%</span>
                                </div>
                                <div class="heading-color heading-weight mst-7">₹<?= number_format($price, 2) ?></div>

                                <div class="cart-drawer-qty-remove d-flex align-items-end justify-content-between mst-16">
                                    <div class="js-qty-wrapper">
                                        <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                            <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item">
                                                <i class="ri-subtract-line d-block lh-1"></i>
                                            </button>
                                            <input type="number" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                            <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item">
                                                <i class="ri-add-line d-block lh-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" data-id="<?= $item[0]['product_id'] ?>" class="cart-drawer-remove text-danger icon-16 remove-cart-item" aria-label="Remove item">
                                        <i class="ri-delete-bin-line d-block lh-1"></i>
                                    </button>
                                </div>

                                <div class="text-danger font-14 mst-6">
                                    <i class="ri-error-warning-line mer-4"></i>Only <span class="heading-weight">15</span> in stock.
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="drawer-cart-empty h-100 ptb-30 plr-15 d-flex flex-column align-items-center justify-content-center text-center">
                        <span class="secondary-color icon-32 meb-23"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                        <h2 class="font-24">Your cart is currently empty</h2>
                        <a href="<?= base_url() ?>" class="link-secondary-color mst-20">Continue shopping</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="drawer-footer ptb-15 plr-15 bst">
            <div class="drawer-total d-flex justify-content-between">
                <span>Subtotal</span>
                <span class="heading-color heading-weight">₹<?= number_format($subtotal, 2) ?></span>
            </div>
            <div class="font-12 mst-8">Shipping, taxes, and discount codes calculated at checkout</div>
            <div class="drawer-cart-checkout mst-12">
                <div class="drawer-cart-box meb-11">
                    <label class="cust-checkbox-label checkbox-agree">
                        <input type="checkbox" id="drawer-terms" name="drawer-terms" class="cust-checkbox checkboxbtn">
                        <span class="d-block cust-check"></span>
                        <span class="login-read">I agree to the <a href="<?=base_url()?>rohan/terms_of_use" class="body-secondary-color text-decoration-underline">terms & conditions</a>.</span>
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

<script>
    $(document).on('click', '.remove-cart-item', function () {
        let prod_id = $(this).data('id');
        $.ajax({
            url: "<?= base_url() ?>user/remove_cart_item",
            type: "POST",
            data: { prod_id: prod_id },
            success: function (response) {
                // reload drawer via AJAX
                $('#cartDrawerContainer').load("<?= base_url() ?>user/load_cart_drawer?pId=<?= $product_details['product_id'] ?>&size=<?= $size ?>");
            }
        });
    });
</script>