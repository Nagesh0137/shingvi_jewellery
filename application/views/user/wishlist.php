 <main id="main">
            <!-- wishlist-page strat -->
            <section class="wish-area section-ptb">
                <div class="container">
                    <form method="post">
                        <div class="row row-mtm">
                            <div class="col-12 col-lg-8" data-animate="animate__fadeIn">
                                <div class="wish-textview ul-mtm30">
                                    <div class="wish-text">Create your very own personalized collections of items and save them in your account for future reference. Your collection are waiting!</div>
                                    <div class="wish-text">
                                        <div class="wish-text-content ul-mtm-15">
                                            <span>This list will expire in 30 days.</span>
                                            <span><a href="login.html" class="body-dominant-color text-decoration-underline">Login</a> or <a href="register.html" class="body-dominant-color text-decoration-underline">Create account</a> to make sure lists will be saved.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4" data-animate="animate__fadeIn">
                                <div class="wish-summary ptb-30 plr-15 plr-sm-30 extra-bg border-radius">
                                    <h6 class="font-18 meb-22">Wishlist summary</h6>
                                    <div class="wish-total ul-mtm20">
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Subtotal</span>
                                            <span class="heading-color heading-weight">$246.00</span>
                                        </div>
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Shipping</span>
                                            <span class="text-success heading-weight">Excluding</span>
                                        </div>
                                    </div>
                                    <div class="wish-total mst-26 pst-27 bst">
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="heading-color heading-weight">$246.00</span>
                                        </div>
                                    </div>
                                    <div class="wish-summary-btn mst-26">
                                        <div class="row row-mtm15">
                                            <div class="col-12">
                                                <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon">All add to cart</span>
                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-12">
                                                <a href="wishlist-empty.html" class="w-100 btn-style secondary-btn">Clear wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wish-itemview section-pt">
                            <div class="wish-title d-flex align-items-center justify-content-between peb-30 beb" data-animate="animate__fadeIn">
                                <h6 class="font-18">My favorites</h6>
                                <span class="wish-count"><span class="wish-counter">5</span> Items</span>
                            </div>
                            <div class="wish-table">
                                <div class="wish-table-heading d-none d-md-block ptb-30 beb" data-animate="animate__fadeIn">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-4 heading-color heading-weight">Product</div>
                                        <div class="col-md-3 heading-color heading-weight">Qty</div>
                                        <div class="col-md-2 col-lg-3 heading-color heading-weight">Total</div>
                                        <div class="col-md-2 heading-color heading-weight text-end">Option</div>
                                    </div>
                                </div>
                                <div class="wish-table-data">
                                    <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                        <div class="row row-mtm">
                                            <div class="wish-table-item">
                                                <div class="row row-mtm30">
                                                    <div class="col-12 col-md-5 col-lg-4">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                        <div class="wish-item-content d-flex flex-wrap">
                                                            <div class="wish-item-image width-88">
                                                                <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-1.jpg" class="w-100 img-fluid" alt="cart-1"></a>
                                                            </div>
                                                            <div class="wish-item-info width-calc-88 psl-15">
                                                                <a href="product.html" class="dominant-link heading-weight">Gleam band</a>
                                                                <div class="wish-item-price heading-color mst-8 heading-weight">$79.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-4 col-md-3">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                        <div class="js-qty-wrapper">
                                                            <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                                <input type="number" name="bread-machine" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 col-lg-3">
                                                        <div class="d-md-none heading-color heading-weight meb-9">Total</div>
                                                        <div class="wish-total-price heading-color heading-weight">$79.00</div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 text-end">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                        <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wish-note-cart">
                                                <div class="row row-mtm justify-content-sm-between align-items-sm-end">
                                                    <div class="col-12 col-sm-7 col-md-8 col-lg-4">
                                                        <div class="wish-note-content">
                                                            <div class="wish-note">
                                                                <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center extra-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                            </div>
                                                            <div class="wish-textarea d-none">
                                                                <div class="row field-row">
                                                                    <div class="col-12 field-col">
                                                                        <label for="bread-machine-note" class="field-label">Order note</label>
                                                                        <textarea rows="5" id="bread-machine-note" name="bread-machine-note" class="w-100 cart-notes"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wish-btn d-none mst-15">
                                                                <div class="ul-mtm15">
                                                                    <button type="button" class="wish-save body-dominant-color">Save changes</button>
                                                                    <button type="button" class="wish-cancel body-dominant-color">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 col-md-4">
                                                        <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                        <div class="row row-mtm">
                                            <div class="wish-table-item">
                                                <div class="row row-mtm30">
                                                    <div class="col-12 col-md-5 col-lg-4">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                        <div class="wish-item-content d-flex flex-wrap">
                                                            <div class="wish-item-image width-88">
                                                                <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-2.jpg" class="w-100 img-fluid" alt="cart-2"></a>
                                                            </div>
                                                            <div class="wish-item-info width-calc-88 psl-15">
                                                                <a href="product.html" class="dominant-link heading-weight">Luxe loop</a>
                                                                <div class="wish-item-price heading-color mst-8 heading-weight">$49.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-4 col-md-3">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                        <div class="js-qty-wrapper">
                                                            <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                                <input type="number" name="brushoff-whisk" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 col-lg-3">
                                                        <div class="d-md-none heading-color heading-weight meb-9">Total</div>
                                                        <div class="wish-total-price heading-color heading-weight">$49.00</div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 text-end">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                        <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wish-note-cart">
                                                <div class="row row-mtm justify-content-sm-between align-items-sm-end">
                                                    <div class="col-12 col-sm-7 col-md-8 col-lg-4">
                                                        <div class="wish-note-content">
                                                            <div class="wish-note d-none">
                                                                <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center extra-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                            </div>
                                                            <div class="wish-textarea">
                                                                <div class="row field-row">
                                                                    <div class="col-12 field-col">
                                                                        <label for="brushoff-whisk-note" class="field-label">Order note</label>
                                                                        <textarea rows="5" id="brushoff-whisk-note" name="brushoff-whisk-note" class="w-100 cart-notes">Please arrange the delivery as soon as possible, Please keep safe.</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wish-btn d-none mst-15">
                                                                <div class="ul-mtm15">
                                                                    <button type="button" class="wish-save body-dominant-color">Save changes</button>
                                                                    <button type="button" class="wish-cancel body-dominant-color">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 col-md-4">
                                                        <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                        <div class="row row-mtm">
                                            <div class="wish-table-item">
                                                <div class="row row-mtm30">
                                                    <div class="col-12 col-md-5 col-lg-4">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                        <div class="wish-item-content d-flex flex-wrap">
                                                            <div class="wish-item-image width-88">
                                                                <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-3.jpg" class="w-100 img-fluid" alt="cart-3"></a>
                                                            </div>
                                                            <div class="wish-item-info width-calc-88 psl-15">
                                                                <a href="product.html" class="dominant-link heading-weight">Opal stud</a>
                                                                <div class="wish-item-price heading-color mst-8 heading-weight">$69.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-4 col-md-3">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                        <div class="js-qty-wrapper">
                                                            <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                                <input type="number" name="cold-kettle" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 col-lg-3">
                                                        <div class="d-md-none heading-color heading-weight meb-9">Total</div>
                                                        <div class="wish-total-price heading-color heading-weight">$69.00</div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 text-end">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                        <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wish-note-cart">
                                                <div class="row row-mtm justify-content-sm-between align-items-sm-end">
                                                    <div class="col-12 col-sm-7 col-md-8 col-lg-4">
                                                        <div class="wish-note-content">
                                                            <div class="wish-note d-none">
                                                                <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center extra-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                            </div>
                                                            <div class="wish-textarea">
                                                                <div class="row field-row">
                                                                    <div class="col-12 field-col">
                                                                        <label for="cold-kettle-note" class="field-label">Order note</label>
                                                                        <textarea rows="5" id="cold-kettle-note" name="cold-kettle-note" class="w-100 cart-notes focus">Please arrange the delivery at my neighbor's house, Because at that time I am not available at home.</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wish-btn mst-15">
                                                                <div class="ul-mtm15">
                                                                    <button type="button" class="wish-save body-dominant-color">Save changes</button>
                                                                    <button type="button" class="wish-cancel body-dominant-color">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 col-md-4">
                                                        <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wish-table-info ptb-30 beb" data-animate="animate__fadeIn">
                                        <div class="row row-mtm">
                                            <div class="wish-table-item">
                                                <div class="row row-mtm30">
                                                    <div class="col-12 col-md-5 col-lg-4">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                        <div class="wish-item-content d-flex flex-wrap">
                                                            <div class="wish-item-image width-88">
                                                                <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-4.jpg" class="w-100 img-fluid" alt="cart-4"></a>
                                                            </div>
                                                            <div class="wish-item-info width-calc-88 psl-15">
                                                                <a href="product.html" class="dominant-link heading-weight">Ruby hoop</a>
                                                                <div class="wish-item-price heading-color mst-8 heading-weight">$49.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-4 col-md-3">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                        <div class="js-qty-wrapper">
                                                            <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                                <input type="number" name="dry-mixer-machine" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 col-lg-3">
                                                        <div class="d-md-none heading-color heading-weight meb-9">Total</div>
                                                        <div class="wish-total-price heading-color heading-weight">$49.00</div>
                                                    </div>
                                                    <div class="col-3 col-sm-4 col-md-2 text-end">
                                                        <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                        <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wish-note-cart">
                                                <div class="row row-mtm justify-content-sm-between align-items-sm-end">
                                                    <div class="col-12 col-sm-7 col-md-8 col-lg-4">
                                                        <div class="wish-note-content">
                                                            <div class="wish-note">
                                                                <button type="button" class="st-field-btn wish-add-note body-color d-flex align-items-center"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center extra-bg mer-5 border-full border-radius"><i class="ri-add-line d-block lh-1"></i></span>Add a note</button>
                                                            </div>
                                                            <div class="wish-textarea d-none">
                                                                <div class="row field-row">
                                                                    <div class="col-12 field-col">
                                                                        <label for="dry-mixer-machine-note" class="field-label">Order note</label>
                                                                        <textarea rows="5" id="dry-mixer-machine-note" name="dry-mixer-machine-note" class="w-100 cart-notes"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wish-btn d-none mst-15">
                                                                <div class="ul-mtm15">
                                                                    <button type="button" class="wish-save body-dominant-color">Save changes</button>
                                                                    <button type="button" class="wish-cancel body-dominant-color">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 col-md-4">
                                                        <button type="submit" class="w-100 btn-style secondary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-mtm section-pt">
                            <div class="col-12 col-lg-4 ms-lg-auto" data-animate="animate__fadeIn">
                                <div class="wish-summary ptb-30 plr-15 plr-sm-30 extra-bg border-radius">
                                    <h6 class="font-18 meb-22">Wishlist summary</h6>
                                    <div class="wish-total ul-mtm20">
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Subtotal</span>
                                            <span class="heading-color heading-weight">$246.00</span>
                                        </div>
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Shipping</span>
                                            <span class="text-success heading-weight">Excluding</span>
                                        </div>
                                    </div>
                                    <div class="wish-total mst-26 pst-27 bst">
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="heading-color heading-weight">$246.00</span>
                                        </div>
                                    </div>
                                    <div class="wish-summary-btn mst-26">
                                        <div class="row row-mtm15">
                                            <div class="col-12">
                                                <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon">All add to cart</span>
                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-12">
                                                <a href="wishlist-empty.html" class="w-100 btn-style secondary-btn">Clear wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- wishlist-page end -->
        </main>


          <div class="cart-drawer position-fixed top-0 bottom-0 body-bg z-index-5 invisible box-shadow" id="cart-drawer">
            <form method="post" action="javascript:void(0)" class="drawer-contents d-flex flex-column">
                <div class="drawer-fixed-header ptb-10 plr-15 beb">
                    <div class="drawer-header d-flex align-items-center justify-content-between">
                        <h6 class="font-18">Cart</h6>
                        <div class="drawer-close">
                            <button type="button" class="drawer-close-btn body-secondary-color icon-16" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="pst-10 plr-15 text-center">
                    <div class="extra-color font-14 ptb-6 plr-15 dominant-bg">First order? Get 11% Off with code <span class="heading-weight blinking">11%OFF</span>.</div>
                </div>
                <div class="drawer-cart-empty d-none h-100 ptb-30 plr-15">
                    <div class="drawer-scrollable h-100 d-flex flex-column align-items-center justify-content-center text-center">
                        <span class="secondary-color icon-32 meb-23"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                        <h2 class="font-24">Your cart is currently empty</h2>
                        <a href="collection.html" class="link-secondary-color mst-20">Continue shopping</a>
                    </div>
                </div>
                <div class="drawer-inner h-100 d-flex flex-column justify-content-between overflow-hidden">
                    <div class="drawer-scrollable h-100 overflow-auto">
                        <div class="cart-drawer-table plr-15">
                            <div class="cart-drawer-info ptb-15 bst">
                                <div class="cart-drawer-content d-flex flex-wrap">
                                    <div class="cart-drawer-image width-88">
                                        <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-1.jpg" class="w-100 img-fluid" alt="cart-1"></a>
                                    </div>
                                    <div class="cart-drawer-info width-calc-88 psl-15">
                                        <div class="cart-drawer-detail">
                                            <a href="product.html" class="dominant-link heading-weight">Gleam band</a>
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
                                        <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-2.jpg" class="w-100 img-fluid" alt="cart-2"></a>
                                    </div>
                                    <div class="cart-drawer-info width-calc-88 psl-15">
                                        <div class="cart-drawer-detail">
                                            <a href="product.html" class="dominant-link heading-weight">Luxe loop</a>
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
                            <div class="cart-drawer-info ptb-15 bst">
                                <div class="cart-drawer-content d-flex flex-wrap">
                                    <div class="cart-drawer-image width-88">
                                        <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-3.jpg" class="w-100 img-fluid" alt="cart-3"></a>
                                    </div>
                                    <div class="cart-drawer-info width-calc-88 psl-15">
                                        <div class="cart-drawer-detail">
                                            <a href="product.html" class="dominant-link heading-weight">Opal stud</a>
                                            <span class="d-block mst-7">22cm / Aliceblue</span>
                                        </div>
                                        <div class="heading-color heading-weight mst-7">$69.00</div>
                                        <div class="cart-drawer-qty-remove d-flex align-items-end justify-content-between mst-16">
                                            <div class="js-qty-wrapper">
                                                <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                    <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                    <input type="number" name="opal-stud-22cm-aliceblue" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                    <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                </div>
                                            </div>
                                            <button type="submit" class="cart-drawer-remove text-danger icon-16" aria-label="Remove item"><i class="ri-delete-bin-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-drawer-info ptb-15 bst">
                                <div class="cart-drawer-content d-flex flex-wrap">
                                    <div class="cart-drawer-image width-88">
                                        <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>u_assets/assets/image/cart/cart-4.jpg" class="w-100 img-fluid" alt="cart-4"></a>
                                    </div>
                                    <div class="cart-drawer-info width-calc-88 psl-15">
                                        <div class="cart-drawer-detail">
                                            <a href="product.html" class="dominant-link heading-weight">Ruby hoop</a>
                                            <span class="d-block mst-7">Petite / Azure</span>
                                        </div>
                                        <div class="heading-color heading-weight mst-7">$49.00</div>
                                        <div class="cart-drawer-qty-remove d-flex align-items-end justify-content-between mst-16">
                                            <div class="js-qty-wrapper">
                                                <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                    <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                    <input type="number" name="ruby-hoop-mat-petite-azure" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                    <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                </div>
                                            </div>
                                            <button type="submit" class="cart-drawer-remove text-danger icon-16" aria-label="Remove item"><i class="ri-delete-bin-line d-block lh-1"></i></button>
                                        </div>
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
                                                        <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-1.jpg" class="w-100 img-fluid" alt="p-1"></a>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block font-14"><a href="product.html" class="d-block w-100 text-truncate">Gleam band</a></span>
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
                                                        <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-3.jpg" class="w-100 img-fluid" alt="p-3"></a>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block font-14"><a href="product.html" class="d-block w-100 text-truncate">Luxe loop</a></span>
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
                                                        <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-5.jpg" class="w-100 img-fluid" alt="p-5"></a>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block font-14"><a href="product.html" class="d-block w-100 text-truncate">Opal stud</a></span>
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
                                                        <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-7.jpg" class="w-100 img-fluid" alt="p-7"></a>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block font-14"><a href="product.html" class="d-block w-100 text-truncate">Ruby hoop</a></span>
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
                                    <span class="login-read">I have agree with the <a href="<?=base_url()?>user/terms-condition" class="body-secondary-color text-decoration-underline">terms & conditions</a>.</span>
                                </label>
                            </div>
                            <div class="row btn-row15">
                                <div class="col-sm-6 col-12">
                                    <a href="<?=base_url()?>user/cart_page" class="w-100 btn-style quaternary-btn">View cart</a>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <a href="<?=base_url()?>user/checkout" class="w-100 btn-style secondary-btn hide-btn opacity-50 disabled pe-none">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>