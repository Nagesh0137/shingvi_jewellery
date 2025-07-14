

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
                                                    <a href="<?=base_url()?>user/wishlist" class="wishlist">
                                                        <span class="product-icon">Wishlist<i class="fa fa-heart"></i></span>
                                                    </a>
                                                    <a onclick="openModal('<?=$row['prod_gold_id']?>')" >
                                                        <span class="product-icon">Quickview</span>
                                                    </a>
                                                </div>
                                            </div>
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
                                                                <a class="add-to-cart">
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
                                                            <span class="new-price dominant-color">$79.00</span>
                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$89.00</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-description">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                            <span class="tooltip-text">add to cart</span>
                                                        </a>
                                                        <a class="add-to-wishlist">
                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a>
                                                        <a class="quick-view">
                                                            <span class="product-icon"><i onclick="openModal('<?=$row['prod_gold_id']?>')"  class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">quickview</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="pro-sku-variant">
                                                    <div class="product-sku-variant">
                                                        <div class="pro-sku">
                                                            <span class="heading-color text-uppercase heading-weight">SKU:<span class="dominant-color msl-4">RT89GT</span></span>
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
function openModal(pid) {
    $.ajax({
        url: '<?= base_url("user/quick_view") ?>',
        method: 'POST',
        data: { product_id: pid },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            if (data && data.length > 0) {
                const product = data[0];

                // Set product title
                $('#product-title').text(product.product_name);
                 let bigSliderHtml = '';
                let smallSliderHtml = '';

                if (product.imgs && product.imgs.length > 0) {
                    product.imgs.forEach(function(img) {
                        const imgUrl = '<?= base_url("uploads/") ?>' + img;

                        bigSliderHtml += `
                            <div class="swiper-slide">
                                <img src="${imgUrl}" class="w-100 img-fluid" alt="${product.product_name}">
                            </div>`;

                        smallSliderHtml += `
                            <div class="swiper-slide">
                                <img src="${imgUrl}" class="w-100 img-fluid border-radius" alt="${product.product_name}">
                            </div>`;
                    });
                }

                $('#quickview-slider-big .swiper-wrapper').html(bigSliderHtml);
                $('#quickview-slider-small .swiper-wrapper').html(smallSliderHtml);


                $('#available-stock').text(product.product_qty);
                $('#formatted_discounted_price').text(product.formatted_discounted_price);
                $('#formatted_original_price').text(product.formatted_original_price);
                // --- Ring Size Logic Start ---
                const sizesContainer = $('#sizes');
                sizesContainer.empty(); // Clear existing sizes

                if (product.ring_size) {
                    const sizes = product.ring_size.split(',');
                    sizes.forEach((size, index) => {
                        const checked = index === 0 ? 'checked' : '';
                        sizesContainer.append(`
                            <li>
                                <label class="cust-checkbox-label">
                                    <input type="radio" name="quick-ring-size" class="cust-checkbox" value="${size}" ${checked}>
                                    <span class="d-block cust-check border-full border-radius">${size}</span>
                                </label>
                            </li>
                        `);
                    });
                } else {
                    sizesContainer.append(`
                        <li><span class="text-muted">No sizes available</span></li>
                    `);
                }
                // --- Ring Size Logic End ---

                // Show modal
                $('#quickview-modal').modal('show');
            }
        },
        error: function() {
            alert('Something went wrong while fetching product info.');
        }
    });
}
</script>

        <div class="quickview-modal modal fade" id="quickview-modal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content body-bg border-0 br-hidden">
            <div class="modal-body ptb-30 plr-15 plr-sm-30">
                <div class="quickview-modal-header d-flex align-items-center justify-content-between meb-30">
                    <h6 class="font-18">Quickview</h6>
                    <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                </div>
                <div class="row row-mtm quickview-modal-content">
                    <div class="col-12 col-md-6">
                        <!-- quickview-detail-slider start -->
                        <div class="quickview-detail-slider">
                            <div class="row ul-mt15">
                                <div class="col-12">
                                    <!-- quickview-img-big start -->
                                    <div class="quickview-img-big quickview-slider-big position-relative br-hidden">
                                        <div class="swiper" id="quickview-slider-big">
                                            <div class="swiper-wrapper">
                                               
                                            </div>
                                            <div class="swiper-buttons">
                                                <button type="button" class="swiper-prev swiper-prev-quickview-big secondary-btn icon-16 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                                <button type="button" class="swiper-next swiper-next-quickview-big secondary-btn icon-16 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- quickview-img-big end -->
                                </div>
                                <div class="col-12">
                                    <!-- quickview-img-small start -->
                                    <div class="quickview-img-small quickview-slider-small">
                                        <div class="swiper" id="quickview-slider-small">
                                            <div class="swiper-wrapper">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- quickview-img-small end -->
                                </div>
                            </div>
                        </div>
                        <!-- quickview-detail-slider end -->
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- quickview-info start -->
                        <div class="quickview-info p-md-relative height-md-100">
                            <div class="quickview-detail-info p-md-absolute top-0 bottom-0 start-0 psl-md-3 per-md-30">
                                <div class="quick-info" data-animate="animate__fadeIn">
                                    <div class="product-sku">
                                        <span class="font-14 text-uppercase">SKU-RT89GT</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-5" data-animate="animate__fadeIn">
                                    <div class="product-title">
                                        <h2 class="font-20" id="product-title"></h2>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-price">
                                        <div class="price-box font-18">
                                            <span id="formatted_discounted_price" class="new-price dominant-color heading-weight"></span>
                                            <span class="old-price heading-weight"><span class="mer-3">~</span>
                                            <span id="formatted_original_price"  class="text-decoration-line-through"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-info mst-15" data-animate="animate__fadeIn">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-info mst-15" data-animate="animate__fadeIn">
                                    <div class="product-view">
                                        <span class="heading-color"><i class="ri-eye-line icon-16 mer-4 blinking"></i><span class="product-live-visitor"></span> people are viewing this product right now</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-availability">
                                        <span class="d-inline-block text-success"><span class="heading-color heading-weight mer-10">Availability:</span>In stock</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-stock">
                                        <span class="d-inline-block stock-fill text-success ptb-10 plr-15 bg-success heading-weight border-success border-radius">Hurry up! only <span class="available-stock" id="available-stock">66</span> products left in stock!</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-sold">
                                        <span class="text-danger"><i class="ri-fire-line icon-16 mer-4 blinking"></i><span class="heading-weight"><span class="product-sold-count"></span> products sold in last <span class="product-hours-count"></span> hours</span></span>
                                    </div>
                                </div>
                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-border bst"></div>
                                </div>
                                <div class="quick-info mst-15" data-animate="animate__fadeIn">
                                    <div class="product-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                
                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-variant">
                                        <div class="product-variant-option">
                                            <span class="d-inline-block meb-11"><span class="heading-color heading-weight mer-10">Size:</span></span>
                                            <div class="product-option-block size">
                                                <ul class="ul-mt5" id="sizes">
                                                    <li>
                                                        <label class="cust-checkbox-label">
                                                            <input type="radio" name="quick-gleam-band-size" class="cust-checkbox" value="16cm" checked>
                                                            <span class="d-block cust-check border-full border-radius">16cm</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-quantity d-flex flex-wrap align-items-center">
                                        <span class="heading-color heading-weight mer-10">Quantity:</span>
                                        <div class="js-qty-wrapper">
                                            <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                <input type="number" name="quick-gleam-band-16cm-aliceblue" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button mst-15">
                                        <div class="row btn-row15">
                                            <div class="col-12">
                                                <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon">Add to cart</span>
                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-12">
                                                <a class="w-100 btn-style secondary-btn">Buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-info mst-15" data-animate="animate__fadeIn">
                                    <div class="ul-row">
                                        <div class="product-wishlist">
                                            <a class="add-to-wishlist heading-color"><i class="ri-heart-line icon-16 mer-4"></i>Wishlist</a>
                                        </div>
                                        <div class="product-compare">
                                            <a class="add-to-compare heading-color"><i class="ri-stack-line icon-16 mer-4"></i>Compare</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-border bst"></div>
                                </div>
                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-delivery">
                                        <span class="d-inline-block"><i class="ri-check-line heading-color icon-16 mer-4"></i>Your order will reach you within 5-7 business days</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-return">
                                        <span class="d-inline-block"><i class="ri-check-line heading-color icon-16 mer-4"></i>We accept returns within 30 days of purchase</span>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <!-- quickview-info end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



