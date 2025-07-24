
<div class="bg-screen">
    <div class="bg-back filter-backdrop opacity-0 invisible"></div>
</div>
<div class="breadcrumb-area ptb-15" data-bgimg="<?= base_url() ?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?= base_url() ?>user/index" class="extra-color">Home</a> /
            Products</span>
    </div>
</div>
<main id="main">
<section class="shop-content section-ptb">
                <div class="container">
                    <div class="row align-items-xl-start">
                        <div class="col-12 col-xl-3 p-xl-sticky top-0 mt-4">
                            <div class="shop-sidebar-wrap shop-filter-sidebar card bg-white p-4 border-0" data-animate="animate__fadeIn">
                                <button type="button" class="shop-sidebar-close body-secondary-color icon-16 position-absolute" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                <form class="shop-form" method="get" id="shopForm">

                                    <div class="shop-sidebar availability" >
                                        <h2 style="font-size: 18px; font-weight: 600; color: #000;">
                                            <?php

                                            if (isset($category)) {
                                                echo 'Search By Products';
                                            }
                                            ?>
                                        </h2>
                                       <style>
                                        .widget__categories--menu{
	height: 200px;
	width: 100%;
	background: #F5F5F5;
	overflow-y: scroll;
                                        }
                                       #widget__categories::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#widget__categories::-webkit-scrollbar
{
	width: 7px;
	background-color: #F5F5F5;
}

#widget__categories::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #D62929;
}
                                        .widget__categories--menu__list{

                                        }
                                       </style>
                                        <ul class="widget__categories--menu mt-3 "
                                            id="widget__categories">
                                           

                                            <?php if (isset($_GET['cat_id']) && $_GET['cat_id'] != ''): ?>
                                                <?php if (!empty($product_group)) { ?>
                                                    <?php foreach ($product_group as $row1) { ?>
                                                        <li
                                                            class="widget__categories--menu__list <?php if (isset($_GET['g_id']) && $_GET['g_id'] == $row1['product_group_id']) ?>">
                                                            <a href="<?= base_url() ?>user/product_details_filter?cat_id=<?= $_GET['cat_id'] ?>&g_id=<?= $row1['product_group_id'] ?>"
                                                                style="cursor: pointer;">
                                                                <label class="bg-white d-flex align-items-center p-2 text-center justify-content-justify <?php if (isset($_GET['g_id']) && $_GET['g_id'] == $row1['product_group_id'])
                                                                    ?>"
                                                                    style="margin-bottom: 10px;cursor: pointer;border:1px solid hsla(0, 92.70%, 52.00%, 0.2);">
                                                                    <!-- <img style="width: 20px; height: 20px;cursor: pointer;" src="<?= base_url() ?>uploads/<?= $row1['product_group_image'] ?>" alt="categories-img"> -->
                                                                    <span class="widget__categories--menu__text"
                                                                        style="text-transform: uppercase;">
                                                                        <?= $row1['product_group_name'] ?>
                                                                    </span>
                                                                </label>
                                                            </a>

                                                        </li>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <li>No product groups found for this category.</li>
                                                <?php } ?>
                                            <?php else: ?>
                                                <li>Please select a category from the menu above.</li>
                                            <?php endif; ?>
                                        </ul>
                                        <!-- Search By Products section end -->

                                    </div>
                                    <div class="row mt-4">
                                        <h6>Jewellery For</h6>
                                        <div class="col-md-12">
                                            <select name="age_cat" style="font-size:14px;height:40px;"
                                                class="form-select form-control mt-3" onchange="this.form.submit()">
                                                <option <?= (isset($_GET['age_cat']) && ($_GET['age_cat'] == 'all')) ? 'selected' : ''; ?> value='all'>ALL</option>
                                                <option <?= (isset($_GET['age_cat']) && ($_GET['age_cat'] == 'women')) ? 'selected' : ''; ?> value="women">Women</option>
                                                <option <?= (isset($_GET['age_cat']) && ($_GET['age_cat'] == 'men')) ? 'selected' : ''; ?> value="men">Men</option>
                                                <option <?= (isset($_GET['age_cat']) && ($_GET['age_cat'] == 'kids')) ? 'selected' : ''; ?> value="kids">Kid's</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shop-sidebar price">
                                        <h6 class="font-18 mb-3">Price</h6>
                                        <div class="shop-header d-flex justify-content-between mb-2">
                                            <span class="shop-selected">Refine Search</span>
                                        </div>
                                        <!-- <div class="shop-element mb-3 p-3 border rounded bg-light">
                                            <div class="d-flex flex-column align-items-stretch gap-2"> -->
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <div class="flex-fill">
                                                <label for="min-price" class="form-label mb-1 fw-bold">From
                                                    (&#8377;)</label>
                                                <input type="number" id="min-price" name="min_amt" class="" min="0"
                                                    max="200000"
                                                    value="<?= isset($_GET['min_amt']) ? htmlspecialchars($_GET['min_amt']) : '0' ?>">
                                            </div>
                                            <!-- <span class="mx-2 mt-4">-</span> -->
                                            <div class="flex-fill">
                                                <label for="max-price" class="form-label mb-1 fw-bold">To
                                                    (&#8377;)</label>
                                                <input type="number" id="max-price" name="max_amt" class="" min="0"
                                                    max="200000"
                                                    value="<?= isset($_GET['max_amt']) ? htmlspecialchars($_GET['max_amt']) : '200000' ?>">
                                            </div>
                                        </div>
                                        <div class="range-slider-container">
                                            <div class="range-values-above">
                                            </div>
                                            <div class="range-slider">
                                                <div class="slider-track"></div>
                                                <div class="slider-range" id="slider-range-bar"></div>
                                                <input type="range" id="min-range" min="0" max="200000" step="1"
                                                    value="<?= isset($_GET['min_amt']) ? htmlspecialchars($_GET['min_amt']) : '0' ?>">
                                                <input type="range" id="max-range" min="0" max="200000" step="1"
                                                    value="<?= isset($_GET['max_amt']) ? htmlspecialchars($_GET['max_amt']) : '200000' ?>">
                                            </div>
                                           
                                        </div>
                                        <button class="btn btn-danger btn-sm mt-3 w-100" type="submit">Filter</button>
                                    </div>
                                    <!-- </div>
                                    </div> -->

                                </form>
                            </div>
                            <!-- <div class="collection-product-list d-none d-xl-block pst-30 mst-30 bst">
                                <div class="side-collection-category">
                                    <h6 class="font-18" data-animate="animate__fadeIn">Special products</h6>
                                    <div class="side-collection-wrap mst-25">
                                        <div class="collection-slider swiper" id="special-product-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                    <div class="single-product-list w-100">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/index/product/p-1.jpg" class="w-100 img-fluid" alt="p-1"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gleam band</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price dominant-color">$79.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$89.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                    <div class="single-product-list w-100">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/index/product/p-3.jpg" class="w-100 img-fluid" alt="p-3"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Luxe loop</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price dominant-color">$49.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$59.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                    <div class="single-product-list w-100">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/index/product/p-5.jpg" class="w-100 img-fluid" alt="p-5"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Opal stud</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price dominant-color">$69.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$79.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                    <div class="single-product-list w-100">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/index/product/p-7.jpg" class="w-100 img-fluid" alt="p-7"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Ruby hoop</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price dominant-color">$49.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$54.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                    <div class="single-product-list w-100">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/index/product/p-9.jpg" class="w-100 img-fluid img1" alt="p-9"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Pearl link</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price dominant-color">$89.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$99.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                    <div class="single-product-list w-100">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/index/product/p-11.jpg" class="w-100 img-fluid img1" alt="p-11"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gold bead</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price dominant-color">$79.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$84.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-buttons" data-animate="animate__fadeIn">
                                            <div class="swiper-buttons-wrap">
                                                <button type="button" class="swiper-prev swiper-prev-special-product" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                                <button type="button" class="swiper-next swiper-next-special-product" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="sidebar-banner d-none d-xl-block banner-hover mst-30" data-animate="animate__fadeIn">
                                <a href="collection.html" class="d-block banner-img position-relative br-hidden">
                                    <span class="banner-icon secondary-color font-20 position-absolute top-50 start-50 width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1 rounded-circle"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                    <img src="assets/image/collection/side-image.jpg" class="w-100 img-fluid" alt="side-image">
                                </a>
                            </div> -->
                            <!-- shop-sidebar banner end -->
                        </div>
                        <!-- shop-sidebar end -->
                        <div class="col-12 col-xl-9 p-xl-sticky top-0">
                            <div class="row row-mtm" data-animate="animate__fadeIn">
                             <div class="shop-top-bar">
                                    <div class="row row-mtm15 align-items-md-center">
                                        <div class="col-12 col-sm-6 col-md-7 col-lg-8">
                                            <div class="shop-filter-view ul-mt15 align-items-center">
                                                <div class="shop-filter">
                                                    <button type="button" class="shop-filter-btn secondary-color d-flex align-items-center"><i class="ri-filter-line icon-16 mer-5"></i>Filter</button>
                                                </div>
                                                <!-- <div class="shop-view-mode">
                                                    <div class="ul-mt10">
                                                        <button type="button" class="shop-view-btn dominant-color icon-16 opacity-100 disabled" data-view="grid" aria-label="Grid view"><i class="ri-layout-grid-line"></i></button>
                                                        <button type="button" class="shop-view-btn body-color icon-16 opacity-100" data-view="list" aria-label="List view"><i class="ri-list-unordered"></i></button>
                                                    </div>
                                                </div> -->
                                               
                                            </div>
                                        </div>
                                        <!-- <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                                            <div class="shop-short d-flex flex-wrap position-relative">
                                                <label for="sortby" class="width-72 secondary-color heading-weight">Sort by:</label>
                                                <select id="sortby" name="sortby" class="d-xl-none width-calc-72 h-auto ptb-0 bg-transparent border-0">
                                                    <option value="manual">Featured</option>
                                                    <option value="best-selling">Best selling</option>
                                                    <option value="title-ascending" selected>Alphabetically, A-Z</option>
                                                    <option value="title-descending">Alphabetically, Z-A</option>
                                                    <option value="price-ascending">Price, low to high</option>
                                                    <option value="price-descending">Price, high to low</option>
                                                    <option value="created-descending">Date, new to old</option>
                                                    <option value="created-ascending">Date, old to new</option>
                                                </select>
                                                <a href="javascript:void(0)" class="short-title width-calc-72 body-color d-none d-xl-flex align-items-xl-start justify-content-xl-between">
                                                    <span class="sort-title">Alphabetically, A-Z</span>
                                                    <span class="sort-icon heading-weight"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                </a>
                                                <ul class="collapse position-absolute top-100 start-0 end-0 ptb-5 body-bg z-1 DropDownSlide br-hidden box-shadow" id="select-wrap">
                                                    <li><a href="javascript:void(0)" data-value="manual" class="d-block body-dominant-color ptb-5 plr-15">Featured</a></li>
                                                    <li><a href="javascript:void(0)" data-value="best-selling" class="d-block body-dominant-color ptb-5 plr-15">Best selling</a></li>
                                                    <li class="selected"><a href="javascript:void(0)" data-value="title-ascending" class="d-block secondary-color ptb-5 plr-15 extra-bg">Alphabetically, A-Z</a></li>
                                                    <li><a href="javascript:void(0)" data-value="title-descending" class="d-block body-dominant-color ptb-5 plr-15">Alphabetically, Z-A</a></li>
                                                    <li><a href="javascript:void(0)" data-value="price-ascending" class="d-block body-dominant-color ptb-5 plr-15">Price, low to high</a></li>
                                                    <li><a href="javascript:void(0)" data-value="price-descending" class="d-block body-dominant-color ptb-5 plr-15">Price, high to low</a></li>
                                                    <li><a href="javascript:void(0)" data-value="created-descending" class="d-block body-dominant-color ptb-5 plr-15">Date, new to old</a></li>
                                                    <li><a href="javascript:void(0)" data-value="created-ascending" class="d-block body-dominant-color ptb-5 plr-15">Date, old to new</a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- <div class="shop-filter-list d-flex align-items-start justify-content-between">
                                    <ul class="shop-filter-ul ul-mt5 align-items-center">
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Out of stock<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">In stock<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Aliceblue<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">16cm<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Rings<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><button type="submit" class="shop-filter-active text-decoration-underline">Clear all</button></li>
                                    </ul>
                                    <div class="shop-filter-loader"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="3" cx="33" cy="33" r="30"></circle></svg></div>
                                </div> -->
                                <div class="shop-product-wrap data-grid">
                                    <div class="row">
                                <?php
                                if (!empty($products) && count($products) > 0) {
                                    if (count($products) > 0) {
                                        foreach ($products as $row) {
                                            $imgs = explode('||', $row['product_image']);

                                            ?>
                                            <div class="col-6 col-md-4 col-xl-4 d-flex shop-col mb-3" data-animate="animate__fadeIn">
                                                <div class="single-product w-100">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?= base_url() ?>user/product_details/<?= $row['prod_gold_id'] ?>"
                                                                class="pro-img">
                                                                <img src="<?= base_url() ?>uploads/<?= $imgs[0] ?>"
                                                                    class="w-100 img-fluid img1" alt="p-1">
                                                                <?php
                                                                if (count($imgs) > 1) {
                                                                    ?>
                                                                    <img src="<?= base_url() ?>uploads/<?= $imgs[1] ?>"
                                                                        class="w-100 img-fluid img2" alt="p-2">

                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <img src="<?= base_url() ?>uploads/<?= $imgs[0] ?>"
                                                                        class="w-100 img-fluid img2" alt="p-2">
                                                                    <?php
                                                                }
                                                                ?>

                                                            </a>
                                                            <div class="product-action">


                                                                <a onclick="openModal('<?= $row['prod_gold_id'] ?>')">
                                                                    <span class="product-icon" style="cursor: pointer;">Quickview</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            function addToWishlist(prodId) {

                                                                $.ajax({
                                                                    url: '<?= base_url() ?>user/add_in_wishlist',
                                                                    type: 'POST',
                                                                    data: {
                                                                        prod_id: prodId
                                                                    },
                                                                    dataType: 'json',
                                                                    success: function (response) {
                                                                        console.log('test', response);
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
                                                                        <span
                                                                            class="d-block meb-8"><?= htmlspecialchars($row['category_name']) ?></span>
                                                                        <span class="d-block heading-weight">
                                                                            <a href="<?= base_url() ?>user/product_details/<?= $row['prod_gold_id'] ?>"
                                                                                class="d-block w-100 dominant-link text-truncate"
                                                                                style="text-transform: uppercase;">
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
                                                                                <span class="new-price dominant-color">
                                                                                    <?= $formatted_discounted_price ?> &#8377;</span>
                                                                                <span
                                                                                    class="old-price text-decoration-line-through"><?= $formatted_original_price ?>
                                                                                    &#8377;</span>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="price-box heading-weight">
                                                                                <span
                                                                                    class="new-price dominant-color"><?= number_format1($row['price']) ?>
                                                                                    &#8377;</span>
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
                                                                            <a class="add-to-cart <?= $inCart ? 'in-cart' : '' ?>"
                                                                                onclick="addToCart('<?= $row['prod_gold_id'] ?>')">
                                                                                <span class="product-icon" style="cursor: pointer;">
                                                                                    <span class="product-bag-icon icon-16" style="cursor: pointer;">
                                                                                        <i
                                                                                            class="<?= $inCart ? 'ri-shopping-bag-fill text-success' : 'ri-shopping-bag-3-line' ?> d-block lh-1"></i>
                                                                                    </span>
                                                                                    <span class="product-loader-icon icon-16" style="cursor: pointer;"><i
                                                                                            class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                    <span class="product-check-icon icon-16" style="cursor: pointer;"><i
                                                                                            class="ri-check-line d-block lh-1"></i></span>
                                                                                </span>
                                                                                <span
                                                                                    class="tooltip-text" style="cursor: pointer;"><?= $inCart ? 'Added to cart' : 'Add to cart' ?></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <!-- <span class="new-price dominant-color"><?= $row['formatted_discounted_price'] ?></span> -->
                                                                        <?php if ($row['total_discount_amt'] > 0) { ?>
                                                                            <!-- <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through"><?= $row['formatted_original_price'] ?></span></span> -->
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
                                                                    <a class="add-to-cart <?= $inCart ? 'in-cart' : '' ?>"
                                                                        onclick="addToCart('<?= $row['prod_gold_id'] ?>')">
                                                                        <span class="product-icon">
                                                                            <span class="product-bag-icon icon-16" style="cursor: pointer;">
                                                                                <i
                                                                                    class="<?= $inCart ? 'ri-shopping-bag-fill text-success' : 'ri-shopping-bag-3-line' ?> d-block lh-1"></i>
                                                                            </span>
                                                                            <span class="product-loader-icon icon-16" style="cursor: pointer;"><i
                                                                                    class="ri-loader-4-line d-block lh-1"></i></span>
                                                                            <span class="product-check-icon icon-16" style="cursor: pointer;"><i
                                                                                    class="ri-check-line d-block lh-1"></i></span>
                                                                        </span>
                                                                        <span
                                                                            class="tooltip-text" style="cursor: pointer;"><?= $inCart ? 'Added to cart' : 'Add to cart' ?></span>
                                                                    </a>



                                                                    <a class="quick-view">
                                                                        <span class="product-icon">
                                                                            <i onclick="openModal('<?= $row['prod_gold_id'] ?>')"
                                                                                class="ri-eye-line d-block icon-16 lh-1"></i>
                                                                        </span>
                                                                        <span class="tooltip-text">quickview</span>
                                                                    </a>
                                                                </div>
                                                            </div>



                                                            <div class="pro-sku-variant">


                                                                <div class="product-sku-variant">

                                                                    <div class="pro-sku font-14">
                                                                        <span
                                                                            class="heading-color text-uppercase heading-weight">SKU:<span
                                                                                class="dominant-color msl-4">RT89GT</span></span>
                                                                    </div>
                                                                    <div class="pro-select-variant font-14">
                                                                        <span
                                                                            class="heading-color text-uppercase heading-weight font-14">Size:</span>
                                                                        <?php
                                                                        if (!empty($row['ring_size'])) {
                                                                            $sizes = explode(',', $row['ring_size']);
                                                                            $i = 0;
                                                                            ?>
                                                                            <select id="gleam-band-size" name="gleam-band-size"
                                                                                class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0 font-14">
                                                                                <?php
                                                                                foreach ($sizes as $sz) {
                                                                                    $i++;
                                                                                    ?>
                                                                                    <option value="<?= $sz ?>" <?= ($i == 1) ? 'selected' : ''; ?>><?= $sz ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        <?php } else {
                                                                            ?>
                                                                            <select id="gleam-band-size" name="gleam-band-size"
                                                                                class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0 font-14">
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
                                    }
                                } ?>
                            </div>
                                   
                                    <!-- <div class="paginatoin-area section-pt" data-animate="animate__fadeIn">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination ul-mt5 align-items-center justify-content-center pagination-box">
                                                <li class="page-item first">
                                                    <a href="javascript:void(0)" class="page-link p-0 m-0 bg-transparent heading-weight border-0 lh-1" aria-label="First page">First</a>
                                                </li>
                                                <li class="page-item prev">
                                                    <a href="javascript:void(0)" class="page-link icon-16 d-flex align-items-center justify-content-center p-0 m-0 bg-transparent heading-weight border-0 border-radius" aria-label="Previous"><i class="ri-arrow-left-line d-block lh-1"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0)" class="page-link d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1" aria-label="Page number">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0)" class="page-link active d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1" aria-label="Page number">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0)" class="page-link d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1" aria-label="Page number">3</a>
                                                </li>
                                                <li class="page-item next">
                                                    <a href="javascript:void(0)" class="page-link icon-16 d-flex align-items-center justify-content-center p-0 m-0 bg-transparent heading-weight border-0 border-radius" aria-label="Next"><i class="ri-arrow-right-line d-block lh-1"></i></a>
                                                </li>
                                                <li class="page-item last">
                                                    <a href="javascript:void(0)" class="page-link p-0 m-0 bg-transparent heading-weight border-0 lh-1" aria-label="Last page">Last</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div> -->
                                </div>
                            </div>
                            <!-- collection-info end -->
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
            data: {
                prod_id: pId,
                size: selectedSize
            },
            dataType: 'json',
            success: function (res) {
                console.log(res);
                if (res.status == 'success') {
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
<script>
    // --- Dual range slider and input sync logic ---
    document.addEventListener('DOMContentLoaded', function () {
        var minInput = document.getElementById('min-price');
        var maxInput = document.getElementById('max-price');
        var minRange = document.getElementById('min-range');
        var maxRange = document.getElementById('max-range');
        var minRangeLabel = document.getElementById('min-range-label');
        var maxRangeLabel = document.getElementById('max-range-label');
        var minRangeValue = document.getElementById('min-range-value');
        var maxRangeValue = document.getElementById('max-range-value');
        var sliderRangeBar = document.getElementById('slider-range-bar');
        var minGap = 1;
        var maxValue = 200000;

        // Update slider bar between handles
        function updateSliderBar() {
            if (!sliderRangeBar) return;
            var percentMin = (parseInt(minRange.value) / maxValue) * 100;
            var percentMax = (parseInt(maxRange.value) / maxValue) * 100;
            sliderRangeBar.style.left = percentMin + '%';
            sliderRangeBar.style.width = (percentMax - percentMin) + '%';
        }
        // Sync range to input
        function syncRangeToInput() {
            if (minInput && minRange) minInput.value = minRange.value;
            if (maxInput && maxRange) maxInput.value = maxRange.value;
        }
        // Sync input to range
        function syncInputToRange() {
            if (minInput && minRange) minRange.value = minInput.value || 0;
            if (maxInput && maxRange) maxRange.value = maxInput.value || 0;
        }
        // Update labels
        function updateLabels() {
            if (!minRange || !maxRange) return;
            var minVal = parseInt(minRange.value);
            var maxVal = parseInt(maxRange.value);
            if (minRangeLabel) minRangeLabel.textContent = minVal.toLocaleString();
            if (maxRangeLabel) maxRangeLabel.textContent = maxVal.toLocaleString();
            if (minRangeValue) minRangeValue.textContent = minVal.toLocaleString();
            if (maxRangeValue) maxRangeValue.textContent = maxVal.toLocaleString();
        }
        // Prevent overlap
        function enforceMinGap(event) {
            if (!minRange || !maxRange) return;
            if (parseInt(maxRange.value) - parseInt(minRange.value) < minGap) {
                if (event && event.target === minRange) {
                    minRange.value = maxRange.value - minGap;
                } else {
                    maxRange.value = parseInt(minRange.value) + minGap;
                }
            }
        }
        if (minRange && maxRange && minInput && maxInput) {
            minRange.addEventListener('input', function (e) {
                enforceMinGap(e);
                syncRangeToInput();
                updateLabels();
                updateSliderBar();
            });
            maxRange.addEventListener('input', function (e) {
                enforceMinGap(e);
                syncRangeToInput();
                updateLabels();
                updateSliderBar();
            });
            minInput.addEventListener('input', function () {
                if (parseInt(minInput.value) > parseInt(maxInput.value) - minGap) {
                    minInput.value = parseInt(maxInput.value) - minGap;
                }
                syncInputToRange();
                updateLabels();
                updateSliderBar();
            });
            maxInput.addEventListener('input', function () {
                if (parseInt(maxInput.value) < parseInt(minInput.value) + minGap) {
                    maxInput.value = parseInt(minInput.value) + minGap;
                }
                syncInputToRange();
                updateLabels();
                updateSliderBar();
            });
            // Initial sync
            syncInputToRange();
            updateLabels();
            updateSliderBar();
        }
    });
</script>
<script>
    // --- Form submit filtering logic ---
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('shopForm');
        if (!form) return;
        form.addEventListener('submit', function (e) {
            // Get all form fields
            var formData = new FormData(form);
            var catId = formData.get('cat_id');
            var gId = formData.get('g_id');
            var ageCat = formData.get('age_cat');
            var minAmt = formData.get('min_amt');
            var maxAmt = formData.get('max_amt');

            // Build new URL
            var params = [];
            if ((catId && catId !== '') || (gId && gId !== '')) {
                // Product group/category search: only cat_id and g_id
                if (catId && catId !== '') params.push('cat_id=' + encodeURIComponent(catId));
                if (gId && gId !== '') params.push('g_id=' + encodeURIComponent(gId));
            } else {
                // Jewellery For/Price search: only age_cat, min_amt, max_amt
                if (ageCat && ageCat !== '') params.push('age_cat=' + encodeURIComponent(ageCat));
                if (minAmt && minAmt !== '') params.push('min_amt=' + encodeURIComponent(minAmt));
                if (maxAmt && maxAmt !== '') params.push('max_amt=' + encodeURIComponent(maxAmt));
            }
            var baseUrl = window.location.pathname;
            var newUrl = baseUrl + (params.length ? ('?' + params.join('&')) : '');
            window.location = newUrl;
            e.preventDefault();
        });
    });
</script>
<style>
    /* Attractive dual range slider styles */
    .range-slider-container {
        position: relative;
        width: 100%;
        padding: 24px 0 16px 0;
    }

    .range-slider {
        position: relative;
        height: 40px;
    }

    .range-slider input[type=range] {
        position: absolute;
        width: 100%;
        pointer-events: none;
        -webkit-appearance: none;
        background: none;
        height: 40px;
        margin: 0;
        z-index: 2;
    }

    .range-slider input[type=range]:nth-child(2) {
        z-index: 3;
    }

    .range-slider input[type=range]::-webkit-slider-thumb {
        pointer-events: all;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #dc3545;
        border: 2px solid #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        -webkit-appearance: none;
        transition: background 0.2s;
    }

    .range-slider input[type=range]::-webkit-slider-thumb:hover {
        background: #b52a37;
    }

    .range-slider input[type=range]::-moz-range-thumb {
        pointer-events: all;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #dc3545;
        border: 2px solid #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        transition: background 0.2s;
    }

    .range-slider input[type=range]::-moz-range-thumb:hover {
        background: #b52a37;
    }

    .range-slider input[type=range]::-ms-thumb {
        pointer-events: all;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #dc3545;
        border: 2px solid #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        transition: background 0.2s;
    }

    .range-slider input[type=range]:focus {
        outline: none;
    }

    .range-slider .slider-track {
        position: absolute;
        height: 8px;
        border-radius: 4px;
        background: #e9ecef;
        top: 50%;
        left: 0;
        width: 100%;
        transform: translateY(-50%);
        z-index: 1;
    }

    .range-slider .slider-range {
        position: absolute;
        height: 8px;
        border-radius: 4px;
        background: #dc3545;
        top: 50%;
        z-index: 2;
        transform: translateY(-50%);
    }

    .range-values-above {
        display: flex;
        justify-content: space-between;
        position: absolute;
        width: 100%;
        top: -24px;
        left: 0;
        font-weight: bold;
        color: #dc3545;
        font-size: 1rem;
        pointer-events: none;
    }

    .range-values-below {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 8px;
        font-weight: bold;
        color: #212529;
        font-size: 1rem;
    }

    /* Attractive scrollable product list */
    .bg-screen {
        position: fixed;
        inset: 0;
        /* z-index: 1040; */
        pointer-events: none;
    }

    .filter-backdrop {
        position: fixed;
        inset: 0;
        background: #000;
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1041;
        pointer-events: auto;
    }

    .filter-backdrop.opacity-50 {
        opacity: 0.5 !important;
        pointer-events: auto;
    }

    .filter-backdrop.visible {
        pointer-events: auto;
    }

    .filter-backdrop.invisible {
        pointer-events: none;
    }

    .shop-filter-sidebar.active {
        z-index: 1050;
        /* add your open animation if needed */
    }
</style>