 <main id="main">
            <!-- wishlist-page strat -->
            <section class="wish-area section-ptb">
                <div class="container">
                    <form method="post">
                        <div class="row row-mtm">
                             <?php if(isset($products[0])){ ?>
                            <div class="col-12 col-lg-8 pt-0 mt-0" data-animate="animate__fadeIn">
                                <div class="wish-textview " style="position: relative;">
                                  <div class="wish-itemview section-pt">
                                
                                    <div class="wish-table pt-0 mt-0">
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
                                                <?php $subtotal = 0; foreach($products as $row){ ?>
                                                <div class="row row-mtm mb-2 row_<?=$row['prod_gold_id']?>">
                                                    <div class="wish-table-item">
                                                        <div class="row row-mtm30">
                                                            <div class="col-12 col-md-5 col-lg-4">
                                                                <div class="d-md-none heading-color heading-weight meb-11">Product</div>
                                                                <div class="wish-item-content d-flex flex-wrap">
                                                                    <div class="wish-item-image width-88">
                                                                        <a href="product.html" class="d-block br-hidden"><img src="<?=base_url()?>uploads/<?=$row['imgs'][0]?>" class="w-100 img-fluid" alt="cart-1"></a>
                                                                    </div>
                                                                    <div class="wish-item-info width-calc-88 psl-15">
                                                                        <a href="product.html" class="dominant-link heading-weight"><?=$row['product_name']?></a>
                                                                        <div class="wish-item-price heading-color mst-8 heading-weight"><?=$row['formatted_discounted_price']?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 col-md-3">
                                                                <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                                <div class="js-qty-wrapper">
                                                                    <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                                        
                                                                        <button onclick="wishlistQty('<?=$row['prod_gold_id']?>','remove','<?=$row['discounted_price']?>','<?=$_SESSION['wishlist'][$row['prod_gold_id']]?>')" type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>

                                                                        <input type="number" name="bread-machine" class="js-qty-num p-0 text-center border-0" value="<?=$_SESSION['wishlist'][$row['prod_gold_id']]?>" min="0">

                                                                        <button onclick="wishlistQty('<?=$row['prod_gold_id']?>','add','<?=$row['discounted_price']?>','<?=$_SESSION['wishlist'][$row['prod_gold_id']]?>')" type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3 col-sm-4 col-md-2 col-lg-3">
                                                                <div class="d-md-none heading-color heading-weight meb-9">Total</div>
                                                                <div id="wish-total-price_<?=$row['prod_gold_id']?>" class="wish-total-price heading-color heading-weight">
                                                                    <?php 
                                                                        $subtotal = $subtotal + floatval($row['discounted_price'] * $_SESSION['wishlist'][$row['prod_gold_id']]);
                                                                    ?>
                                                                    <?=number_format(floatval($row['discounted_price'] * $_SESSION['wishlist'][$row['prod_gold_id']])); ?> </div>
                                                            </div>
                                                            <div class="col-3 col-sm-4 col-md-2 text-end">
                                                                <div class="d-md-none heading-color heading-weight meb-11">Option</div>
                                                                <button type="submit" class="wish-remove text-danger icon-16" aria-label="Remove item"><i class="ri-close-large-line d-block lh-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wish-note-cart">
                                                        <div class="row row-mtm  justify-content-sm-start align-items-sm-end">
                                                            
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
                                            <?php 
                                            } ?>
                                            </div>
                                            
<script>
    function wishlistQty(pId,manageQty,price,qty)
    {
        let p = 'wish-total-price_'+pId;
        console.log(qty);
        let productPrice = document.getElementById(p);
        $.ajax({
            url: '<?= base_url() ?>user/manage_wishlist',
            type: 'POST',
            data: { prod_id: pId,manageQty:manageQty,price:price},
            dataType: 'json',
            success: function(response) {
                
                console.log(response);
                
                productPrice.innerHTML = response.price;
                if(response.msg == 'deleted')
                {
                    $('.row_' + pId).remove(); 
                }

                if(response.msg == 'no products')
                {
                    location.reload();
                } 

            }
        });
}
    
</script>                                            
                                            
                                        </div>
                                    </div>
                        </div>
                                </div>
                            </div>
                        <?php }else{
                            ?>
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
                            <?php
                        } 
                         if(isset($products[0])){ 
                            
           

                        ?>
                            <div class="col-12 col-lg-4" data-animate="animate__fadeIn" style="position: sticky;top: 10px;">
                                <div class="wish-summary ptb-30 plr-15 plr-sm-30 extra-bg border-radius">
                                    <h6 class="font-18 meb-22">Wishlist summary</h6>
                                    <div class="wish-total ul-mtm20">
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Subtotal</span>
                                            <span class="heading-color heading-weight"><?=number_format($subtotal)?></span>
                                        </div>
                                        <?php 
                                         $sttl=$subtotal;
                                        foreach ($order_charges as $order_charges1) 
                                        {
                                            if((float)$order_charges1['percent']!=0)
                                            {
                                                $order_charges1['rate']=($sttl*(float)$order_charges1['percent'])/100;
                                            }
                                            $subtotal+=$order_charges1['rate'];
                                        ?>
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span><?=$order_charges1['charges_label'];?></span>
                                            <span class="text-success heading-weight">&#8377; <?=(int)$order_charges1['rate'];?>/-</span>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="wish-total mst-26 pst-27 bst">
                                        <div class="wish-total-info d-flex justify-content-between">
                                            <span>Total</span>
                                            <span class="heading-color heading-weight"><?=number_format($subtotal)?></span>
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
                        <?php } ?>
                        </div>
                        
                        
                    </form>
                </div>
            </section>
            <!-- wishlist-page end -->
        </main>


          