


<div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Collection without sidebar</span>
    </div>
</div>
<main id="main">
    <section class="shop-content section-ptb">
        <div class="container">
            <div class="row row-mtm" data-animate="animate__fadeIn">
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
                <div class="shop-product-wrap data-grid">
                    <div class="row">
                    <div class="col-md-3">
                       <div class="card card-body border-none">
                       <div class="row">
                            <div class="col-md-12">
                            <form class="shop-form" action="javascript:void(0)" id="shopForm">
                                   
                                    <div class="shop-sidebar availability">
                                        <h6 class="font-18">Availability</h6>
                                        <div class="shop-header d-flex justify-content-between mst-22">
                                            <span class="shop-selected">2 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-23">
                                            <ul class="shop-filters ul-mtm-15">
                                                <li>
                                                    <label class="cust-checkbox-label d-flex align-items-center justify-content-between">
                                                        <input type="checkbox" id="shop-in-stock" name="shop-in-stock" class="cust-checkbox" value="in-stock" checked>
                                                        <span class="d-block cust-check"></span>
                                                        <span class="shop-name me-auto">In stock</span>
                                                        <span class="shop-count">12</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label d-flex align-items-center justify-content-between disabled">
                                                        <input type="checkbox" id="shop-out-of-stock" name="shop-out-of-stock" class="cust-checkbox" value="out-of-stock" checked>
                                                        <span class="d-block cust-check"></span>
                                                        <span class="shop-name me-auto">Out of stock</span>
                                                        <span class="shop-count">1</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar availability end -->
                                    <!-- shop-sidebar price start -->
                                    <div class="shop-sidebar price">
                                        <h6 class="font-18">Price</h6>
                                        <div class="shop-header d-flex justify-content-between mst-22">
                                            <span class="shop-selected">The highest price is $89.00</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <div class="price-input-range">
                                                <div class="price-range">
                                                    <div class="price-container">
                                                        <div class="price-slider"></div>
                                                    </div>
                                                    <div class="range-input position-relative">
                                                        <input type="range" class="min-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="89" value="0" step="1">
                                                        <input type="range" class="max-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="89" value="89" step="1">
                                                    </div>
                                                </div>
                                                <div class="price-input d-flex align-items-center mst-30">
                                                    <div class="price-field position-relative w-100">
                                                        <span class="price-input-title position-absolute top-0 start-0">From</span>
                                                        <span class="price-input-prefix position-absolute top-50 translate-middle-y">$</span>
                                                        <input type="number" id="min-price" name="min-price" class="min-input w-100 h-100 text-end" min="0" max="89" value="0">
                                                    </div>
                                                    <div class="price-input-separator mlr-15">-</div>
                                                    <div class="price-field position-relative w-100">
                                                        <span class="price-input-title position-absolute top-0 start-0">To</span>
                                                        <span class="price-input-prefix position-absolute top-50 translate-middle-y">$</span>
                                                        <input type="number" id="max-price" name="max-price" class="max-input w-100 h-100 text-end" min="0" max="89" value="89">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar price end -->
                                    <!-- shop-sidebar color start -->
                                    <div class="shop-sidebar color">
                                        <h6 class="font-18">Color</h6>
                                        <div class="shop-header d-flex justify-content-between mst-22">
                                            <span class="shop-selected">1 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <ul class="shop-filters ul-mt10">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-aliceblue" name="shop-aliceblue" class="cust-checkbox" value="aliceblue" checked>
                                                        <span class="d-block cust-check aliceblue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label disabled">
                                                        <input type="checkbox" id="shop-antiquewhite" name="shop-antiquewhite" class="cust-checkbox" value="antiquewhite">
                                                        <span class="d-block cust-check antiquewhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-azure" name="shop-azure" class="cust-checkbox" value="azure">
                                                        <span class="d-block cust-check azure"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-beige" name="shop-beige" class="cust-checkbox" value="beige">
                                                        <span class="d-block cust-check beige"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-bisque" name="shop-bisque" class="cust-checkbox" value="bisque">
                                                        <span class="d-block cust-check bisque"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-black" name="shop-black" class="cust-checkbox" value="black">
                                                        <span class="d-block cust-check black"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-cadetblue" name="shop-cadetblue" class="cust-checkbox" value="cadetblue">
                                                        <span class="d-block cust-check cadetblue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-chocolate" name="shop-chocolate" class="cust-checkbox" value="chocolate">
                                                        <span class="d-block cust-check chocolate"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-coral" name="shop-coral" class="cust-checkbox" value="coral">
                                                        <span class="d-block cust-check coral"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-darkcyan" name="shop-darkcyan" class="cust-checkbox" value="darkcyan">
                                                        <span class="d-block cust-check darkcyan"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-darkgoldenrod" name="shop-darkgoldenrod" class="cust-checkbox" value="darkgoldenrod">
                                                        <span class="d-block cust-check darkgoldenrod"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-darkgray" name="shop-darkgray" class="cust-checkbox" value="darkgray">
                                                        <span class="d-block cust-check darkgray"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-floralwhite" name="shop-floralwhite" class="cust-checkbox" value="floralwhite">
                                                        <span class="d-block cust-check floralwhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-gainsboro" name="shop-gainsboro" class="cust-checkbox" value="gainsboro">
                                                        <span class="d-block cust-check gainsboro"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-ghostwhite" name="shop-ghostwhite" class="cust-checkbox" value="ghostwhite">
                                                        <span class="d-block cust-check ghostwhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-gold" name="shop-gold" class="cust-checkbox" value="gold">
                                                        <span class="d-block cust-check gold"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-honeydew" name="shop-honeydew" class="cust-checkbox" value="honeydew">
                                                        <span class="d-block cust-check honeydew"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-hotpink" name="shop-hotpink" class="cust-checkbox" value="hotpink">
                                                        <span class="d-block cust-check hotpink"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-ivory" name="shop-ivory" class="cust-checkbox" value="ivory">
                                                        <span class="d-block cust-check ivory"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-khaki" name="shop-khaki" class="cust-checkbox" value="khaki">
                                                        <span class="d-block cust-check khaki"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lavender" name="shop-lavender" class="cust-checkbox" value="lavender">
                                                        <span class="d-block cust-check lavender"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lavenderblush" name="shop-lavenderblush" class="cust-checkbox" value="lavenderblush">
                                                        <span class="d-block cust-check lavenderblush"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lemonchiffon" name="shop-lemonchiffon" class="cust-checkbox" value="lemonchiffon">
                                                        <span class="d-block cust-check lemonchiffon"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lightblue" name="shop-lightblue" class="cust-checkbox" value="lightblue">
                                                        <span class="d-block cust-check lightblue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-mintcream" name="shop-mintcream" class="cust-checkbox" value="mintcream">
                                                        <span class="d-block cust-check mintcream"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-navajowhite" name="shop-navajowhite" class="cust-checkbox" value="navajowhite">
                                                        <span class="d-block cust-check navajowhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-oldlace" name="shop-oldlace" class="cust-checkbox" value="oldlace">
                                                        <span class="d-block cust-check oldlace"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar color end -->
                                    <!-- shop-sidebar size start -->
                                    <div class="shop-sidebar size">
                                        <h6 class="font-18">Size</h6>
                                        <div class="shop-header d-flex justify-content-between mst-22">
                                            <span class="shop-selected">1 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <ul class="shop-filters ul-mt5">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-16cm" name="shop-16cm" class="cust-checkbox" value="16cm" checked>
                                                        <span class="d-block cust-check border-full border-radius">16cm</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label disabled">
                                                        <input type="checkbox" id="shop-18cm" name="shop-18cm" class="cust-checkbox" value="18cm">
                                                        <span class="d-block cust-check border-full border-radius">18cm</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-20cm" name="shop-20cm" class="cust-checkbox" value="20cm">
                                                        <span class="d-block cust-check border-full border-radius">20cm</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-22cm" name="shop-22cm" class="cust-checkbox" value="22cm">
                                                        <span class="d-block cust-check border-full border-radius">22cm</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-petite" name="shop-petite" class="cust-checkbox" value="petite">
                                                        <span class="d-block cust-check border-full border-radius">Petite</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-slim" name="shop-slim" class="cust-checkbox" value="slim">
                                                        <span class="d-block cust-check border-full border-radius">Slim</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-bold" name="shop-bold" class="cust-checkbox" value="bold">
                                                        <span class="d-block cust-check border-full border-radius">Bold</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-chunky" name="shop-chunky" class="cust-checkbox" value="chunky">
                                                        <span class="d-block cust-check border-full border-radius">Chunky</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-mini" name="shop-mini" class="cust-checkbox" value="mini">
                                                        <span class="d-block cust-check border-full border-radius">Mini</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-maxi" name="shop-maxi" class="cust-checkbox" value="maxi">
                                                        <span class="d-block cust-check border-full border-radius">Maxi</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-dainty" name="shop-dainty" class="cust-checkbox" value="dainty">
                                                        <span class="d-block cust-check border-full border-radius">Dainty</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-layered" name="shop-layered" class="cust-checkbox" value="layered">
                                                        <span class="d-block cust-check border-full border-radius">Layered</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-adjustable" name="shop-adjustable" class="cust-checkbox" value="adjustable">
                                                        <span class="d-block cust-check border-full border-radius">Adjustable</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar size end -->
                                    <!-- shop-sidebar tag start -->
                                    <div class="shop-sidebar tag">
                                        <h6 class="font-18">Tag</h6>
                                        <div class="shop-header d-flex justify-content-between mst-22">
                                            <span class="shop-selected">1 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <ul class="shop-filters ul-mt5">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-rings" name="shop-rings" class="cust-checkbox" value="rings" checked>
                                                        <span class="d-block cust-check border-radius">Rings</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-chains" name="shop-chains" class="cust-checkbox" value="chains">
                                                        <span class="d-block cust-check border-radius">Chains</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-diamond" name="shop-diamond" class="cust-checkbox" value="diamond">
                                                        <span class="d-block cust-check border-radius">Diamond</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-luxury" name="shop-luxury" class="cust-checkbox" value="luxury">
                                                        <span class="d-block cust-check border-radius">Luxury</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-handmade" name="shop-handmade" class="cust-checkbox" value="handmade">
                                                        <span class="d-block cust-check border-radius">Handmade</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-classic" name="shop-classic" class="cust-checkbox" value="classic">
                                                        <span class="d-block cust-check border-radius">Classic</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-trendy" name="shop-trendy" class="cust-checkbox" value="trendy">
                                                        <span class="d-block cust-check border-radius">Trendy</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-minimal" name="shop-minimal" class="cust-checkbox" value="minimal">
                                                        <span class="d-block cust-check border-radius">Minimal</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-elegant" name="shop-elegant" class="cust-checkbox" value="elegant">
                                                        <span class="d-block cust-check border-radius">Elegant</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-vintage" name="shop-vintage" class="cust-checkbox" value="vintage">
                                                        <span class="d-block cust-check border-radius">Vintage</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar tag end -->
                                </form>
                            </div>
                        </div>
                       </div>
                     </div>
                     <div class="col-md-9">
                    <div class="row row-mtm30">
                        <?php 
                        if(!empty($products) && count($products)>0){
                            if(count($products)>0){
                                foreach($products as $row)
                                {
                                    $imgs=explode('||',$row['product_image']);

                                    ?>  
                                    <div class="col-6 col-md-4 col-xl-4 d-flex shop-col" data-animate="animate__fadeIn">
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
                                                            <span class="d-block heading-weight">
                                                                <a href="<?=base_url()?>user/product_details/<?=$row['prod_gold_id']?>" class="d-block w-100 dominant-link text-truncate">
                                                                    <?=$row['product_name']?>
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
                                                                <a class="add-to-cart <?= $inCart ? 'in-cart' : '' ?>" onclick="addToCart('<?=$row['prod_gold_id']?>')">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16">
                                                                            <i class="<?= $inCart ? 'ri-shopping-bag-fill text-success' : 'ri-shopping-bag-3-line' ?> d-block lh-1"></i>
                                                                        </span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text"><?= $inCart ? 'Added to cart' : 'Add to cart' ?></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-price">
                                                        <div class="price-box heading-weight">
                                                            <!-- <span class="new-price dominant-color"><?=$row['formatted_discounted_price']?></span> -->
                                                            <?php if ($row['total_discount_amt'] > 0) { ?>
                                                                <!-- <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through"><?=$row['formatted_original_price']?></span></span> -->
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class="product-description">
                                                        <p><?=$row['product_details']?></p>
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
                                                        <a class="add-to-cart <?= $inCart ? 'in-cart' : '' ?>" onclick="addToCart('<?=$row['prod_gold_id']?>')">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon icon-16">
                                                                    <i class="<?= $inCart ? 'ri-shopping-bag-fill text-success' : 'ri-shopping-bag-3-line' ?> d-block lh-1"></i>
                                                                </span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                            <span class="tooltip-text"><?= $inCart ? 'Added to cart' : 'Add to cart' ?></span>
                                                        </a>

                                                        <?php 
                                                        if (isset($_SESSION['user_id'])) {
                                                            $wt = $this->My_model->select_where("user_wishlist", [
                                                                'user_id' => $_SESSION['user_id'],
                                                                'prod_id' => $row['prod_gold_id']
                                                            ]);
                                                            ?>
                                                            <a class="add-to-wishlist" onclick="addToWishlist('<?=$row['prod_gold_id']?>')"> 
                                                                <span class="product-icon">
                                                                    <i id="add-to-wishlist<?=$row['prod_gold_id']?>" class="<?= isset($wt[0]) ? 'ri-heart-fill' : 'ri-heart-line' ?> d-block icon-16 lh-1"></i>
                                                                </span>
                                                                <span class="tooltip-text">wishlist</span>
                                                            </a>
                                                        <?php } else { ?>
                                                            <a class="add-to-wishlist" onclick="addToWishlist('<?=$row['prod_gold_id']?>')"> 
                                                                <span class="product-icon">
                                                                    <i id="add-to-wishlist<?=$row['prod_gold_id']?>" class="<?= isset($_SESSION['wishlist'][$row['prod_gold_id']]) ? 'ri-heart-fill' : 'ri-heart-line' ?> d-block icon-16 lh-1"></i>
                                                                </span>
                                                                <span class="tooltip-text">wishlist</span>
                                                            </a>
                                                        <?php } ?>

                                                        <a class="quick-view">
                                                            <span class="product-icon">
                                                                <i onclick="openModal('<?=$row['prod_gold_id']?>')" class="ri-eye-line d-block icon-16 lh-1"></i>
                                                            </span>
                                                            <span class="tooltip-text">quickview</span>
                                                        </a>
                                                    </div>
                                                </div>


                                                
                                                <div class="pro-sku-variant">


                                                    <div class="product-sku-variant">
                                                        <!-- if isset session - user it -->

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
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>





    <script>
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

