

        <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
            <div class="container">
                <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Collection without sidebar</span>
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
                        <!-- collection-img start -->
                        
                        <!-- collection-img end -->
                        <!-- shop-top-bar start -->
                        
                        <!-- shop-top-bar end -->
                        <!-- shop-filter-list start -->
                        <div class="shop-filter-list d-flex align-items-start justify-content-between">
                            <ul class="shop-filter-ul ul-mt5 align-items-center">
                                <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Out of stock<i class="ri-close-large-line"></i></a></li>
                                <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">In stock<i class="ri-close-large-line"></i></a></li>
                                <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Aliceblue<i class="ri-close-large-line"></i></a></li>
                                <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">16cm<i class="ri-close-large-line"></i></a></li>
                                <li class="shop-filter-li"><a class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Rings<i class="ri-close-large-line"></i></a></li>
                                <li class="shop-filter-li"><button type="submit" class="shop-filter-active text-decoration-underline">Clear all</button></li>
                            </ul>
                            <div class="shop-filter-loader"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="3" cx="33" cy="33" r="30"></circle></svg></div>
                        </div>
                        <!-- shop-filter-list end -->
                        <div class="shop-product-wrap data-grid">
                            <!-- shop-grid start -->
                            <div class="row row-mtm30">
                                <?php 
                                    if(!empty($products) && count($products)>0){
                                        if(count($products)>0){
                                                    foreach($products as $row)
                                                            {
                                                        $imgs=explode('||',$row['product_image']);
                                                       
                                ?>  
                                <div class="col-6 col-md-4 col-xl-3 d-flex shop-col" data-animate="animate__fadeIn">
                                    <div class="single-product w-100">
                                        <div class="row single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?=base_url()?>user/product_details/<?=$row['prod_gold_id']?>" class="pro-img">
                                                    <img src="<?=base_url()?>uploads/<?=$imgs[0]?>" class="w-100 img-fluid img1" alt="p-1">
                                                    <?php 
                                                        if(count($imgs) > 1)
                                                        {
                                                            ?>
                                                            <img src="<?=base_url()?>uploads/<?=$imgs[1]?>" class="w-100 img-fluid img2" alt="p-2">

                                                            <?php
                                                        }else{
                                                            ?>
                                                            <img src="<?=base_url()?>uploads/<?=$imgs[0]?>" class="w-100 img-fluid img2" alt="p-2">
                                                            <?php
                                                        }
                                                    ?>
                                                    
                                                </a>
                                                <div class="product-action">
                                                     <?php 
                                                                if(isset($_SESSION['user_id']))
                                                                {
                                                                    $wt = $this->My_model->select_where("user_wishlist",['user_id'=>$_SESSION['user_id'],'prod_id'=>$row['prod_gold_id']]);
                                                                    ?>
                                                    <a class="add-to-wishlist" onclick="addToWishlist('<?=$row['prod_gold_id']?>')" class="wishlist">
                                                        <span class="product-icon">
                                                            <i id="add-to-wishlist<?=$row['prod_gold_id']?>" class="<?php if(isset($wt[0])){ echo "ri-heart-fill";}else{echo 'ri-heart-line';} ?> d-block icon-16 lh-1"></i>
                                                        </span>
                                                    </a>
                                                                    <?php
                                                                }
                                                                else{
                                                                    ?>
                                                    <a class="add-to-wishlist" onclick="addToWishlist('<?=$row['prod_gold_id']?>')" class="wishlist">
                                                        <span class="product-icon">
                                                            <i id="add-to-wishlist<?=$row['prod_gold_id']?>" class="<?php if(isset($_SESSION['wishlist'][$row['prod_gold_id']])){ echo "ri-heart-fill";}else{echo 'ri-heart-line';} ?> d-block icon-16 lh-1"></i>
                                                        </span>
                                                    </a>
                                                                    <?php
                                                                }
                                                                    ?>
                                                                

                                                    


                                                    <a onclick="openModal('<?=$row['prod_gold_id']?>')" >
                                                        <span class="product-icon">Quickview</span>
                                                    </a>
                                                </div>
                                            </div>
<script>
function addToWishlist(prodId) {
 
    $.ajax({
        url: '<?= base_url() ?>user/add_in_wishlist',
        type: 'POST',
        data: { prod_id: prodId },
        dataType: 'json',
        success: function(response) {
            console.log('test',response);
            return 1;
            // Target the <i> tag using its ID
            var icon = $('#add-to-wishlist' + prodId);

            if (response.status === 'added') {
                icon.removeClass('ri-heart-line').addClass('ri-heart-fill');
            } else if (response.status === 'removed') {
                icon.removeClass('ri-heart-fill').addClass('ri-heart-line');
            }

            $('#wishlistCount').html(response.cnt);
            $('#wishlistCountmv').html(response.cnt);
        }
    });
}
</script>


                                            <div class="product-content">
                                                                   

                                                <div class="pro-content">
                                                    <div class="pro-content-action">
                                                        <div class="product-title">
                                                            <span class="d-block meb-8">Ring / Shine</span>
                                                            <span class="d-block heading-weight"><a href="<?=base_url()?>user/product_details/<?=$row['prod_gold_id']?>" class="d-block w-100 dominant-link text-truncate"><?=$row['product_name']?></a></span>
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
                                                            <?php
                                                                    }else{
                                                                        ?>
                                                                         <div class="price-box heading-weight">
                                                                            <span class="new-price dominant-color"><?= number_format1($row['price']) ?> &#8377;</span>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                            <div class="product-action">
                                                                <a class="add-to-cart" onclick="addToCart('<?=$row['prod_gold_id']?>')">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="price-box heading-weight">
                                                            <span class="new-price dominant-color"><?=$row['formatted_discounted_price']?></span>
                                                            <?php
                                                                if ($row['total_discount_amt'] > 0) {
                                                            ?>
                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through"><?=$row['formatted_original_price']?></span></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="product-description">
                                                        <p><?=$row['product_details']?></p>
                                                    </div>
                                                    <div class="product-action">
                                                        <?php 
                                                            if(isset($_SESSION['user_id']))
                                                            {
                                                            $ucart = $this->My_model->select_where("user_cart",['user_id'=>$_SESSION['user_id'],$row['prod_gold_id'],'status'=>'active']);

                                                        ?>
                                                        <a class="add-to-cart" onclick="addToCart('<?=$row['prod_gold_id']?>')">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon icon-16">
                                                                    <i class="ri-shopping-bag-3-line d-block lh-1 "></i>
                                                                </span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                            <span class="tooltip-text">add to cart</span>
                                                        </a>
                                                        <?php
                                                        }else{
                                                            ?>
                                                        <a class="add-to-cart" onclick="addToCart('<?=$row['prod_gold_id']?>')">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon icon-16">
                                                                    <i  class="ri-shopping-bag-3-line d-block lh-1 "></i>
                                                                </span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                            <span class="tooltip-text">add to cart</span>
                                                        </a>   
                                                            <?php
                                                        } 
                                                                if(isset($_SESSION['user_id']))
                                                                {
                                                                    $wt = $this->My_model->select_where("user_wishlist",['user_id'=>$_SESSION['user_id'],'prod_id'=>$row['prod_gold_id']]);
                                                                    ?>
                                                        <a class="add-to-wishlist" onclick="addToWishlist('<?=$row['prod_gold_id']?>')"> 
                                                            <span  class="product-icon"><i id="add-to-wishlist<?=$row['prod_gold_id']?>" class="<?php if(isset($wt[0])){ echo "ri-heart-fill";}else{echo 'ri-heart-line';} ?> d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                        <a class="add-to-wishlist" onclick="addToWishlist('<?=$row['prod_gold_id']?>')"> 
                                                            <span  class="product-icon"><i id="add-to-wishlist<?=$row['prod_gold_id']?>" class="<?php if(isset($_SESSION['wishlist'][$row['prod_gold_id']])){ echo "ri-heart-fill";}else{echo 'ri-heart-line';} ?> d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                                    <?php
                                                                }
                                                                    ?>
                                                                

                                                        
                                                        <a class="quick-view">
                                                            <span class="product-icon"><i onclick="openModal('<?=$row['prod_gold_id']?>')"  class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">quickview</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="pro-sku-variant">
                                                    <div class="product-sku-variant">
                                                        <div class="pro-sku font-14">
                                                            <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
                                                        </div>
                                                        <div class="pro-select-variant font-14">
                                                            <span class="heading-color text-uppercase heading-weight font-14">Size:</span>
                                                             <?php 
                                                            if(!empty($row['ring_size']))
                                                            {
                                                                $sizes = explode(',',$row['ring_size']);
                                                                 $i=0;
                                                                ?>
                                                            <select id="gleam-band-size" name="gleam-band-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0 font-14">
                                                                <?php 
                                                                foreach($sizes as $sz){ 
                                                                    $i++;
                                                                ?>
                                                                <option  value="<?=$sz?>" <?=($i == 1)? 'selected':'';?> ><?=$sz?></option>
                                                                <?php } ?>
                                                            </select>
                                                        <?php } else{
                                                            ?>
                                                            <select id="gleam-band-size" name="gleam-band-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0 font-14">
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
                            <?php } } }?>
                                
                            </div>
                            <!-- shop-grid end -->
                            <!-- paginatoin start -->
                            <div class="paginatoin-area section-pt" data-animate="animate__fadeIn">
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
                            </div>
                            <!-- paginatoin end -->
                        </div>
                    </div>
                    <!-- collection-info end -->
                </div>
            </section>
            <!-- shop-content start -->
        </main>


        


<script>
    // Function to show the mini cart
    function miniCart() {
        $("#cart-drawer").removeClass("invisible").addClass("active visible");
        $(".bg-shop").removeClass("opacity-0 invisible").addClass("opacity-50 visible");
    }

    function addToCart(pId) {
        event.preventDefault();

        var selectedSize = document.getElementById("gleam-band-size").value;

        if (selectedSize === "") {
            alert("Please select a size before adding to cart.");
            return;
        }
          $.ajax({
            url: '<?= base_url("user/addToCart") ?>',
            type: 'POST',
            data: { prod_id: pId,size:selectedSize },
            dataType: 'json',
            success: function (res) {
                console.log(res);
                if(res.status == 'success')
                {
                        var $this = $(this);
                        $this.addClass("loading active disabled");

                        // Simulate button animation
                        setTimeout(function () {
                            $this.removeClass("loading").addClass("done");

                            setTimeout(function () {
                                $this.removeClass("done active disabled");

                                // Call miniCart function
                                miniCart();

                                // Close quickview modal
                                $this.parents(".quickview-modal").find(".quickview-modal-header button").click();

                                // ✅ Load cart drawer content via AJAX
                                $("#cart-drawer").load("<?= base_url('user/load_cart_drawer') ?>?pId=" + encodeURIComponent(pId) + "&size=" + encodeURIComponent(selectedSize));

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


    }
</script>

