<style>
    .drawer-scrollable {
        flex: 1 1 auto;
        overflow-y: auto;
        max-height: calc(100vh - 200px);
        -webkit-overflow-scrolling: touch;
        /* For smooth scrolling on iOS */
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

    /* Smooth transitions for cart item removal */
    .cart-drawer-info {
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .cart-drawer-info.removing {
        opacity: 0;
        transform: translateX(-100%);
    }

    /* Loading state for remove button */
    .remove-cart-item:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% {
            opacity: 0.6;
        }

        50% {
            opacity: 0.3;
        }

        100% {
            opacity: 0.6;
        }
    }

    /* Smooth subtotal update animation */
    .drawer-total .heading-color.heading-weight {
        transition: all 0.3s ease;
    }

    .drawer-total .heading-color.heading-weight.updating {
        color: #28a745;
        font-weight: bold;
    }
</style>

<form method="post" action="javascript:void(0)" class="drawer-contents d-flex flex-column h-100">
    <div class="drawer-fixed-header ptb-10 plr-15 beb">
        <div class="drawer-header d-flex align-items-center justify-content-between">
            <h6 class="font-18">Cart</h6>
            <div class="drawer-close">
                <button type="button" class="drawer-close-btn body-secondary-color icon-16" aria-label="Close"><i
                        class="ri-close-large-line d-block lh-1"></i></button>
            </div>
        </div>
    </div>

    <div class="pst-10 plr-15 text-center">
        <div class="extra-color font-14 ptb-6 plr-15 dominant-bg">
            You're just a few steps away from <span class="heading-weight blinking">completing your order. Review your
                items and proceed to checkout! </span>.
        </div>
    </div>

    <div class="drawer-inner h-100 d-flex flex-column">
        <!-- Scrollable content area -->
        <div class="drawer-scrollable">
            <div class="cart-drawer-table plr-15">
                <?php if (!empty($cart)): ?>
                    <?php
                    $subtotal = 0;
                    foreach ($cart as $item):

                        $price = isset($item[0]['fixed_amount']) ? $item[0]['fixed_amount'] : 0;
                        $subtotal += $price;
                        ?>
                        <div class="cart-drawer-info ptb-15 bst">
                            <div class="cart-drawer-content d-flex flex-wrap">
                                <div class="cart-drawer-image  width-88">
                                    <a href="<?= base_url() ?>user/product_detail/<?= $item[0]['product_id'] ?>"
                                        class="d-block br-hidden">
                                        <img src="<?= base_url() ?>uploads/<?= $item[0]['imgs'][0] ?>" class="w-100 img-fluid"
                                            alt="<?= $item[0]['product_name'] ?>">
                                    </a>
                                </div>
                                <div class=" width-calc-88 psl-15">
                                    <div class="cart-drawer-detail">
                                        <?php if (!empty($item[0]['product_name'])) {
                                            ?>
                                            <a href="<?= base_url() ?>user/product_detail/<?= $item[0]['product_id'] ?>"
                                                class="dominant-link heading-weight"><?= $item[0]['product_name'] ?></a>
                                        <?php } ?>
                                        <!-- <?php if (!empty($size)): ?>
                                        <span class="d-block mst-7">Size: <?= $size ?></span>
                                    <?php endif; ?> -->
                                        <span class="d-block mst-7"></span>
                                    </div>
                                    <div class="heading-color heading-weight mst-7">₹<?= number_format($price, 2) ?></div>

                                    <div class="cart-drawer-qty-remove d-flex align-items-end justify-content-between mst-16">
                                        <div class="js-qty-wrapper">
                                            <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                <button type="button"
                                                    class="js-qty-adjust js-qty-adjust-minus body-color icon-16"
                                                    aria-label="Remove item">
                                                    <i class="ri-subtract-line d-block lh-1"></i>
                                                </button>
                                                <input type="number" class="js-qty-num p-0 text-center border-0" value="1"
                                                    min="1">
                                                <button type="button"
                                                    class="js-qty-adjust js-qty-adjust-plus body-color icon-16"
                                                    aria-label="Add item">
                                                    <i class="ri-add-line d-block lh-1"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <button type="button" data-id="<?= $item[0]['prod_gold_id'] ?>"
                                            class="cart-drawer-remove text-danger icon-16 remove-cart-item"
                                            aria-label="Remove item">
                                            <i class="ri-delete-bin-line d-block lh-1"></i>
                                        </button>
                                    </div>

                                    <div class="text-danger font-14 mst-6">
                                        <i class="ri-error-warning-line mer-4"></i>Only <span class="heading-weight">15</span>
                                        in stock.
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div
                        class="drawer-cart-empty h-100 ptb-30 plr-15 d-flex flex-column align-items-center justify-content-center text-center">
                        <span class="secondary-color icon-32 meb-23"><i
                                class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                        <h2 class="font-24">Your cart is currently empty</h2>
                        <a href="<?= base_url() ?>" class="link-secondary-color mst-20">Continue shopping</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>


        <div class="drawer-footer ptb-15 plr-15 bst">
            <div class="drawer-total d-flex justify-content-between">
                <span>Subtotal</span>
                <span
                    class="heading-color heading-weight">₹<?= isset($subtotal) ? number_format($subtotal, 2) : '0.00' ?></span>
            </div>
            <div class="font-12 mst-8">Shipping, taxes, and discount codes calculated at checkout</div>
            <div class="drawer-cart-checkout mst-12">

                <div class="row btn-row15">
                    <!-- <div class="col-sm-6 col-12">
                        <a href="<?= base_url() ?>user/cart_page" class="w-100 btn-style quaternary-btn">View cart</a>
                    </div> -->
                    <div class="col-sm-12 col-12">
                        <a href="<?= base_url() ?>user/checkout" class="w-100 btn-style secondary-btn ">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).on('click', '.remove-cart-item', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let prod_id = $(this).data('id');
        console.log('Removing item with ID:', prod_id); // Debug log
        let $button = $(this);
        let $cartItem = $button.closest('.cart-drawer-info');

        // Get the price of the item being removed for subtotal calculation
        let itemPrice = parseFloat($cartItem.find('.heading-color.heading-weight').text().replace('₹', '').replace(',', '')) || 0;

        // Disable button to prevent multiple clicks and show loading state
        $button.prop('disabled', true);
        $button.addClass('loading');

        $.ajax({
            url: "<?= base_url() ?>user/remove_cart_item",
            type: "POST",
            data: { prod_id: prod_id },
            dataType: 'json',
            success: function (response) {
                console.log('Remove cart response:', response); // Debug log

                if (response.status === 'success') {
                    // Add removing class for smooth animation
                    $cartItem.addClass('removing');

                    // Remove the item from the cart display with animation
                    setTimeout(function () {
                        $cartItem.slideUp(400, function () {
                            $(this).remove();

                            // Update subtotal immediately with animation
                            updateSubtotal();

                            // Check if cart is empty and show empty state
                            checkEmptyCart();

                            // Update cart count in header using response data
                            updateCartCountFromResponse(response.cartCount || 0);

                            console.log('Cart count after removal:', response.cartCount); // Debug log

                            // If cart count is 0, make sure we show the proper empty state
                            if (response.cartCount === 0) {
                                console.log('Cart is empty, reloading drawer...'); // Debug log
                                // Force reload from server to get the proper empty state
                                setTimeout(function () {
                                    reloadCartDrawer();
                                }, 800);
                            }
                        });
                    }, 100);
                } else {
                    alert('Error removing item from cart: ' + (response.message || 'Unknown error'));
                    $button.prop('disabled', false).removeClass('loading');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('Failed to remove item from cart. Please try again.');
                $button.prop('disabled', false).removeClass('loading');
            }
        });
    });

    // Function to update subtotal accounting for quantities
    function updateSubtotalWithQuantity() {
        let subtotal = 0;
        $('.cart-drawer-info').each(function () {
            let priceText = $(this).find('.heading-color.heading-weight').text().replace('₹', '').replace(/,/g, '');
            let price = parseFloat(priceText) || 0;
            let quantity = parseInt($(this).find('.js-qty-num').val()) || 1;
            subtotal += (price * quantity);
        });

        // Update the subtotal display with animation
        let $subtotalElement = $('.drawer-total .heading-color.heading-weight');
        $subtotalElement.addClass('updating');

        setTimeout(function () {
            $subtotalElement.text('₹' + subtotal.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));

            setTimeout(function () {
                $subtotalElement.removeClass('updating');
            }, 300);
        }, 100);
    }

    // Function to update subtotal without reloading (keep for compatibility)
    function updateSubtotal() {
        updateSubtotalWithQuantity();
    }

    // Function to check if cart is empty and show appropriate state
    function checkEmptyCart() {
        console.log('Checking if cart is empty, found', $('.cart-drawer-info').length, 'items'); // Debug log

        if ($('.cart-drawer-info').length === 0) {
            console.log('Cart appears empty, showing empty state'); // Debug log

            // Show empty cart state
            $('.cart-drawer-table').html(`
                <div class="drawer-cart-empty h-100 ptb-30 plr-15 d-flex flex-column align-items-center justify-content-center text-center">
                    <span class="secondary-color icon-32 meb-23">
                        <i class="ri-shopping-bag-3-line d-block lh-1"></i>
                    </span>
                    <h2 class="font-24">Your cart is currently empty</h2>
                    <a href="<?= base_url() ?>" class="link-secondary-color mst-20">Continue shopping</a>
                </div>
            `);

            // Hide the footer checkout section when cart is empty
            $('.drawer-footer').hide();

            // Also trigger a reload of the cart drawer to ensure server state is synced
            setTimeout(function () {
                reloadCartDrawer();
            }, 500);
        }
    }

    // Function to reload cart drawer from server (useful when database changes)
    function reloadCartDrawer() {
        console.log('Reloading cart drawer from server...'); // Debug log
        let reloadUrl = "<?= base_url() ?>user/load_cart_drawer?pId=0&size=";

        $.get(reloadUrl, function (data) {
            console.log('Cart drawer reload response received'); // Debug log

            // Parse the returned HTML
            let $newContent = $(data);

            // Check if the server returns empty cart
            if (data.indexOf('drawer-cart-empty') !== -1 || data.indexOf('Your cart is currently empty') !== -1) {
                console.log('Server returned empty cart, updating UI'); // Debug log
                // Replace the cart content area
                $('.drawer-scrollable').html($newContent.find('.drawer-scrollable').html());
                $('.drawer-footer').hide();
            } else {
                console.log('Server returned cart with items, updating UI'); // Debug log
                // Cart has items, update the content
                $('.drawer-scrollable').html($newContent.find('.drawer-scrollable').html());
                $('.drawer-footer').show();
                updateSubtotal();
            }
        }).fail(function () {
            console.log('Failed to reload cart drawer');
        });
    }

    // Handle quantity adjustments
    $(document).off('click', '.js-qty-adjust').on('click', '.js-qty-adjust', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let $this = $(this);
        let $qtyInput = $this.siblings('.js-qty-num');
        let currentQty = parseInt($qtyInput.val()) || 1;
        let newQty = currentQty;

        if ($this.hasClass('js-qty-adjust-plus')) {
            newQty = currentQty++;
        } else if ($this.hasClass('js-qty-adjust-minus')) {
            newQty = Math.max(1, currentQty - 1);
        }

        if (newQty !== currentQty) {
            $qtyInput.val(newQty);
            updateSubtotalWithQuantity();
        }
    });

    // Handle direct quantity input changes
    $(document).off('change', '.js-qty-num').on('change', '.js-qty-num', function () {
        let newQty = Math.max(1, parseInt($(this).val()) || 1);
        $(this).val(newQty);
        updateSubtotalWithQuantity();
    });

    // Function to update cart count (you may need to implement this based on your header structure)
    function updateCartCount() {
        let cartCount = $('.cart-drawer-info').length;
        updateCartCountFromResponse(cartCount);
    }

    // Function to update cart count from server response
    function updateCartCountFromResponse(cartCount) {
        // Update cart counter in header - adjust selector based on your header structure
        $('.cart-counter, .cart-count').text(cartCount);

        // If you have a specific cart count element in header, update it
        if ($('.header-cart-count').length) {
            $('.header-cart-count').text(cartCount);
        }

        // Update any cart badge indicators
        if ($('.cart-badge').length) {
            $('.cart-badge').text(cartCount);
            if (cartCount === 0) {
                $('.cart-badge').hide();
            } else {
                $('.cart-badge').show();
            }
        }
    }
</script>