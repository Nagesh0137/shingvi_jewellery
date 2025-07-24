<!-- preloader start -->
<div class="preloader position-fixed top-0 start-0 w-100 h-100 body-bg z-index-5">
    <div
        class="loader-img position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
        <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>"
            class="width-96 width-xl-144 img-fluid" alt="logo">
    </div>
</div>
<!-- preloader end -->
<!-- newsletter-modal start -->
<!-- <div class="newsletter-modal modal fade" id="newslettermodal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body p-0">
                        <button type="button" class="d-block secondary-btn icon-16 width-32 height-32 position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        <div class="newsletter-content d-flex flex-wrap br-hidden">
                            <div class="col-12 col-md-6">
                                <img src="<?= base_url() ?>u_assets/assets/image/index3/newsletter-popup.jpg" class="w-100 img-fluid" alt="newsletter-popup">
                            </div>
                            <div class="col-12 col-md-6 section-ptb">
                                <div class="d-md-flex flex-md-column justify-content-md-center height-md-100 plr-15 plr-sm-30 plr-xxl-50">
                                    <h2 class="font-32 section-heading-family section-heading-text section-heading-weight section-heading-lh">Enter your email to enjoy 20% off your first order</h2>
                                    <div class="newsletter-form mst-19 mst-xl-29">
                                        <form method="post" class="news-form">
                                            <div class="news-wrap d-flex flex-wrap peb-5 beb">
                                                <input type="email" id="popup-email" name="popup-email" class="width-calc-16 h-auto dominant-color bg-transparent p-0 border-0 rounded-0" placeholder="Enter your email">
                                                <button type="submit" class="width-16 dominant-color icon-16" aria-label="Subscribe button"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- newsletter-modal end -->
<!-- header start -->
<header id="header" class="main-header">
    <!-- header-top start -->
    <div class="header-top-area">
        <!-- notification-bar start -->
        <div class="notification-bar ptb-10 dominant-bg">
            <div class="container-fluid d-none d-xl-block">
                <div class="text-center extra-color"> 🛒 Find the best deals and newest arrivals — shop now and enjoy
                    fast delivery! <a href="<?= base_url() ?>user/products"
                        class="extra-color text-uppercase text-decoration-underline blinking">Shop now</a>!</div>
            </div>
            <div class="notification-marquee d-flex d-xl-none overflow-hidden">
                <div class="notification-marquee-row notification-marquee1 d-flex">
                    <div class="extra-color psl-15 text-nowrap">Save now 50% on jewellery appliances discount <a
                            href="<?= base_url() ?>user/products"
                            class="extra-color text-uppercase text-decoration-underline blinking">Shop now</a>!</div>
                    <div class="extra-color psl-15 text-nowrap">Super best jewellery sale up to <span
                            class="blinking">20% Off</span></div>
                    <div class="extra-color psl-15 text-nowrap"><i class="ri-mail-line icon-16 mer-5"></i><a
                            href="mailto:<?= $social_media['email'] ?>"
                            class="d-inline-block text-white"><?= $social_media['email'] ?></a></div>
                    <div class="extra-color psl-15 text-nowrap">Save now 50% on jewellery appliances discount <a
                            href="<?= base_url() ?>user/products"
                            class="extra-color text-uppercase text-decoration-underline blinking">Shop now</a>!</div>
                    <div class="extra-color psl-15 text-nowrap">Super best jewellery sale up to <span
                            class="blinking">20% Off</span></div>
                    <div class="extra-color psl-15 text-nowrap"><i class="ri-mail-line icon-16 mer-5"></i><a
                            href="mailto:<?= $social_media['email'] ?>"
                            class="d-inline-block text-white"><?= $social_media['email'] ?></a></div>
                </div>
                <div class="notification-marquee-row notification-marquee2 d-flex">
                    <div class="extra-color psl-15 text-nowrap">Save now 50% on jewellery appliances discount <a
                            href="<?= base_url() ?>user/products"
                            class="extra-color text-uppercase text-decoration-underline blinking">Shop now</a>!</div>
                    <div class="extra-color psl-15 text-nowrap">Super best jewellery sale up to <span
                            class="blinking">20% Off</span></div>
                    <div class="extra-color psl-15 text-nowrap"><i class="ri-mail-line icon-16 mer-5"></i><a
                            href="mailto:<?= $social_media['email'] ?>"
                            class="d-inline-block text-white"><?= $social_media['email'] ?></a></div>
                    <div class="extra-color psl-15 text-nowrap">Save now 50% on jewellery appliances discount <a
                            href="<?= base_url() ?>user/products"
                            class="extra-color text-uppercase text-decoration-underline blinking">Shop now</a>!</div>
                    <div class="extra-color psl-15 text-nowrap">Super best jewellery sale up to <span
                            class="blinking">20% Off</span></div>
                    <div class="extra-color psl-15 text-nowrap"><i class="ri-mail-line icon-16 mer-5"></i><a
                            href="mailto:<?= $social_media['email'] ?>"
                            class="d-inline-block text-white"><?= $social_media['email'] ?></a></div>
                </div>
            </div>
        </div>
        <!-- notification-bar end -->
        <!-- header-bar start -->
        <div class="header-bar d-none d-xl-block ptb-11 extra-bg beb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <span class="d-block">Explore exclusive collections crafted <span
                                class="dominant-color text-uppercase heading-weight blinking">just for
                                you.</span></span>
                    </div>
                    <div class="col-3">
                        <div class="notification-search w-100">
                            <form method="get" action="javascript:void(0)" class="search-form w-100">
                                <div class="search-bar w-100 position-relative">
                                    <div class="form-search w-100 d-flex flex-wrap">
                                        <input type="search" name="search-input"
                                            class="search-input width-calc-16 h-auto text-color bg-transparent ptb-0 plr-0 border-0 rounded-0"
                                            value="" placeholder="Find our product" required>
                                        <button type="submit" class="d-block width-16 body-secondary-color icon-16"
                                            aria-label="Go to search" disabled><i
                                                class="ri-search-line d-block lh-1"></i></button>
                                    </div>
                                    <div
                                        class="d-none search-results position-absolute top-auto start-0 end-0 body-bg z-2 border-full border-radius box-shadow">
                                        <div class="search-for ptb-10 plr-15 beb">Search for <span
                                                class="search-text">a</span></div>
                                        <ul class="search-ul">
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product1.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product1"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Gleam band</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product2.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product2"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Luxe loop</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product3.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product3"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Opal stud</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product4.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product4"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Ruby hoop</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product5.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product5"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Pearl link</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product6.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product6"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Gold bead</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product7.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product7"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Sway drop</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product8.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product8"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Star charm</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product9.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product9"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Glim cuff</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product10.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product10"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Jade bead</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product11.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product11"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Twist bangle</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="<?= base_url() ?>user/products"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product12.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product12"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Shiny choke</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="search-more ptb-10 plr-15 bst"><a
                                                href="<?= base_url() ?>user/products"
                                                class="body-secondary-color text-decoration-underline">See all results
                                                (12)</a></div>
                                        <div class="search-fail ptb-10 plr-15">Search not found</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <ul class="ul-mt30 justify-content-end">
                            <li><span class="d-inline-block body-secondary-color"><a
                                        href="mailto:<?= $social_media['email'] ?>"><i
                                            class="ri-mail-line icon-16 mer-5"></i><?= $social_media['email'] ?></a></span>
                            </li>
                            <li><span class="d-inline-block body-secondary-color"><a><i
                                            class="ri-map-pin-line icon-16 mer-5"></i>Track order</a></span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bar end -->
        <!-- header-top-first start -->
        <div class="header-top-first ptb-15 ptb-xl-20 position-relative extra-bg">
            <div class="container-fluid">
                <div class="row align-items-center header-area">
                    <!-- header-logo start -->
                    <style>
                        @media (max-width: 767.98px) {
                            .theme-logo img {
                                width: 70px !important;
                                height: auto;
                            }
                        }
                    </style>

                    <div class="col-6 col-xl-2 header-element header-logo">
                        <div class="header-theme-logo">
                            <a href="<?= base_url() ?>user/index" class="d-inline-block theme-logo">
                                <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>"
                                    class="width-96 width-xl-144 img-fluid" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- header-logo end -->
                    <!-- header-menu start -->
                    <div class="col-xl-6 d-none d-xl-block header-element header-menu">
                        <div class="mainmenu-content">
                            <div class="main-wrap">
                                <ul class="menu-ul d-flex flex-wrap">
                                    <!-- <a href="<?= base_url() ?>user/unset_ses"
                                        class="menu-link font-16 d-flex align-items-center plr-15">
                                        <span class="menu-title text-uppercase heading-weight">Logout</span>
                                    </a> -->

                                    <li class="menu-li">
                                        <a href="<?= base_url() ?>user/index"
                                            class="menu-link font-16 d-flex active align-items-center plr-15">
                                            <span class="menu-title text-uppercase heading-weight">Home</span>
                                        </a>

                                        <!-- <div class="menu-dropdown collapse position-absolute top-auto start-0 end-0 extra-bg z-2 DropDownSlide box-shadow">
                                                    <div class="container ptb-30 text-center">
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="banner-hover">
                                                                    <a href="<?= base_url() ?>user/index" class="d-block banner-img br-hidden">
                                                                        <img src="<?= base_url() ?>u_assets/assets/image/menu/menu-banner1.jpg" class="w-100 img-fluid" alt="menu-banner1">
                                                                    </a>
                                                                </div>
                                                                <a href="<?= base_url() ?>user/index" class="d-inline-block dominant-link mst-15 heading-weight">01 Clean demo</a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="banner-hover">
                                                                    <a href="index2.html" class="d-block banner-img br-hidden">
                                                                        <img src="<?= base_url() ?>u_assets/assets/image/menu/menu-banner2.jpg" class="w-100 img-fluid" alt="menu-banner2">
                                                                    </a>
                                                                </div>
                                                                <a href="index2.html" class="d-inline-block dominant-link mst-15 heading-weight">02 Classic demo</a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="banner-hover">
                                                                    <a href="index3.html" class="d-block banner-img br-hidden">
                                                                        <img src="<?= base_url() ?>u_assets/assets/image/menu/menu-banner3.jpg" class="w-100 img-fluid" alt="menu-banner3">
                                                                    </a>
                                                                </div>
                                                                <a href="index3.html" class="d-inline-block dominant-link mst-15 heading-weight">03 Modern demo</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                    </li>

                                    <?php
                                    $category = $this->db->query("SELECT * FROM category WHERE status='active'")->result_array();

                                    if (!empty($category) && count($category) > 0) {
                                        foreach ($category as $key => $row) {
                                            $subcatdetails = $this->db->query("SELECT * FROM product_group WHERE group_category = " . $row['category_id'] . " AND status = 'active'")->result_array();
                                            $filtered_subcat = [];

                                            if (!empty($category) && count($subcatdetails) > 0) {
                                                foreach ($subcatdetails as $key1 => $row1) {
                                                    $details = $this->db->query("SELECT * FROM product_gold WHERE status='active' AND cat_id = " . $row['category_id'] . " AND group_id = " . $row1['product_group_id'] . " AND label != 'Out Of Stock'")->result_array();

                                                    if (count($details) > 0) {
                                                        $row1['details'] = $details;
                                                        $filtered_subcat[] = $row1;
                                                    }
                                                }
                                            }

                                            if (count($filtered_subcat) > 0) {
                                                $category[$key]['sub_category_details'] = $filtered_subcat;
                                            } else {
                                                unset($category[$key]['sub_category_details']);
                                            }
                                        }
                                    }

                                    $category = array_filter($category, function ($cat) {
                                        return isset($cat['sub_category_details']);
                                    });
                                    ?>

                                    <!-- Categories displayed directly in navbar -->
                                    <?php if (!empty($category)) { ?>
                                        <?php foreach ($category as $key => $row) { ?>
                                            <li
                                                class="menu-li <?= count($row['sub_category_details']) > 0 ? 'has-dropdown' : '' ?>">
                                                <?php if (strtolower($row['category_name']) == 'gift') { ?>
                                                    <a href="javascript:void(0)"
                                                        class="menu-link font-16 d-flex align-items-center plr-15"
                                                        style="font-weight: 600;text-transform: uppercase;">
                                                        <?= $row['category_name'] ?>
                                                        <?php if (count($row['sub_category_details']) > 0) { ?>
                                                            <span class="icon-16 fw-normal"><i
                                                                    class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                        <?php } ?>
                                                    </a>
                                                <?php } else if ($row['category_name'] != 'Diamond' && strtolower($row['category_name']) != 'coin') { ?>
                                                        <a href="<?= base_url() ?>user/product_details_filter?cat_id=<?= $row['category_id'] ?>"
                                                            class="menu-link font-16 d-flex align-items-center plr-15"
                                                            style="font-weight: 600;text-transform: uppercase;">
                                                        <?= $row['category_name'] ?>
                                                        <?php if (count($row['sub_category_details']) > 0) { ?>
                                                                <span class="icon-16 fw-normal"><i
                                                                        class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                        <?php } ?>
                                                        </a>
                                                <?php } ?>

                                                <!-- Subcategories dropdown -->
                                                <?php if (count($row['sub_category_details']) > 0) { ?>
                                                    <ul class="dropdown-menu" style="width: 200px;">
                                                        <?php foreach (
                                                            $row['sub_category_details'] as $subCat) { ?>
                                                            <li class="position-relative">
                                                                <a
                                                                    href="<?= base_url() ?>user/product_details_filter?cat_id=<?= $row['category_id'] ?>&g_id=<?= $subCat['product_group_id'] ?>">
                                                                    <?= $subCat['product_group_name'] ?>
                                                                </a>
                                                                <?php if (!empty($subCat['details'])) { ?>
                                                                    <ul class="dropdown-menu"
                                                                        style="left: 200px; top: 0; min-width: 220px;">
                                                                        <?php foreach ($subCat['details'] as $product) { ?>
                                                                            <li>
                                                                                <a
                                                                                    href="<?= base_url() ?>user/product_details_filter?cat_id=<?= $row['category_id'] ?>&g_id=<?= $subCat['product_group_id'] ?>&p_id=<?= $product['product_id'] ?>">
                                                                                    <?= $product['product_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                <?php } ?>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>

                                    <li class="menu-li">
                                        <a href="<?= base_url() ?>user/products"
                                            class="menu-link font-16 d-flex align-items-center plr-15">
                                            <span class="menu-title text-uppercase heading-weight">Product</span>
                                            <!-- <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span> -->
                                        </a>
                                        <!-- <div class="menu-dropdown collapse position-absolute top-auto start-0 end-0 extra-bg z-2 DropDownSlide box-shadow">
                                                    <div class="container ptb-25">
                                                        <div class="row row-cols-xl-4"> -->
                                        <!--  <div class="col">
                                                                <div class="shop-title">
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="collections.html" class="d-inline-block dominant-link">Collections</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="collection-category.html" class="d-inline-block dominant-link">Collection category</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="collection-without.html" class="d-inline-block dominant-link">Collection full</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="<?= base_url() ?>user/products" class="d-inline-block dominant-link">Collection left</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="collection-right.html" class="d-inline-block dominant-link">Collection right</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="collection-list-without.html" class="d-inline-block dominant-link">Collection list full</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="collection-list.html" class="d-inline-block dominant-link">Collection list left</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="collection-list-right.html" class="d-inline-block dominant-link">Collection list right</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="search-empty.html" class="d-inline-block dominant-link">Search empty</a></span>
                                                                    <span class="d-block ptb-5 text-uppercase heading-weight"><a href="search-product.html" class="d-inline-block dominant-link">Search product</a></span>
                                                                </div>
                                                            </div> -->
                                        <!-- <div class="col">
                                                                <div class="d-block heading-color ptb-5 text-uppercase heading-weight">Product layout</div>
                                                                <div class="mst-5">
                                                                    <span class="d-block ptb-5"><a href="<?= base_url() ?>user/products" class="d-inline-block body-dominant-color">01 Bottom thumbnail frequently together</a></span>
                                                                    <span class="d-block ptb-5"><a href="product2.html" class="d-inline-block body-dominant-color">02 Right thumbnail tab details</a></span>
                                                                    <span class="d-block ptb-5"><a href="product3.html" class="d-inline-block body-dominant-color">03 Left thumbnail simple layout</a></span>
                                                                    <span class="d-block ptb-5"><a href="product4.html" class="d-inline-block body-dominant-color">04 Solo modern vertical-tab full layout</a></span>
                                                                    <span class="d-block ptb-5"><a href="product5.html" class="d-inline-block body-dominant-color">05 Full thumbnail creative layout</a></span>
                                                                    <span class="d-block ptb-5"><a href="product6.html" class="d-inline-block body-dominant-color">06 Advance accordion-tab layout</a></span>
                                                                    <span class="d-block ptb-5"><a href="product-comparison.html" class="d-inline-block body-dominant-color">Product comparision</a></span>
                                                                </div>
                                                            </div> -->
                                        <!--  <div class="col">
                                                                <div class="banner-hover">
                                                                    <a href="<?= base_url() ?>user/products" class="d-block banner-img br-hidden">
                                                                        <img src="<?= base_url() ?>u_assets/assets/image/index3/menu/menu-banner-product1.jpg" class="w-100 img-fluid" alt="menu-banner-product1">
                                                                    </a>
                                                                </div>
                                                            </div> -->
                                        <!-- <div class="col">
                                                                <div class="banner-hover">
                                                                    <a href="<?= base_url() ?>user/products" class="d-block banner-img br-hidden">
                                                                        <img src="<?= base_url() ?>u_assets/assets/image/index3/menu/menu-banner-product2.jpg" class="w-100 img-fluid" alt="menu-banner-product2">
                                                                    </a>
                                                                </div>
                                                            </div> -->
                                        <!--  </div>
                                                    </div>
                                                </div> -->
                                    </li>


                                    <li class="menu-li">
                                        <a href="<?= base_url() ?>user/blog"
                                            class="menu-link font-16 d-flex align-items-center plr-15">
                                            <span class="menu-title text-uppercase heading-weight">Blog</span>
                                            <!-- <span class="icon-16 fw-normal">
                                                        <i class="ri-arrow-down-s-line d-block lh-1"></i></span> -->
                                        </a>
                                        <!-- <div class="menu-dropdown menu-sub collapse position-absolute top-auto extra-bg z-2 DropDownSlide box-shadow"> -->
                                        <!-- <ul class="menudrop-ul ptb-25"> -->
                                        <!-- <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="blog-without.html" class="d-inline-block body-dominant-color">About</a></div>
                                                        </li> -->
                                        <!-- <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="<?= base_url() ?>user/about" class="d-inline-block body-dominant-color">Blog left</a></div>
                                                        </li>
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="blog-right.html" class="d-inline-block body-dominant-color">Blog right</a></div>
                                                        </li> -->
                                        <!-- <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="article-without.html" class="d-inline-block body-dominant-color">Article</a></div>
                                                        </li> -->
                                        <!-- <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="article.html" class="d-inline-block body-dominant-color">Article left</a></div>
                                                        </li> -->
                                        <!-- <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="article-right.html" class="d-inline-block body-dominant-color">Article right</a></div>
                                                        </li> -->
                                        <!-- <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="search-blog.html" class="d-inline-block body-dominant-color">Search blog</a></div>
                                                        </li> -->
                                        <!--  </ul>
                                                </div> -->
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header-menu end -->
                    <!-- header-icon start -->
                    <div class="col-6 col-xl-4 header-element header-icon">
                        <div class="header-icon-block d-flex justify-content-end">
                            <ul class="ul-mt30 flex-nowrap align-items-center header-icon-element">
                                <li class="header-icon-wrap toggler-wrap d-xl-none">
                                    <div class="header-icon-wrapper">
                                        <a href="javascript:void(0)" class="d-block header-icon-toggler toggler-btn"
                                            aria-label="Menu toggler button">
                                            <span class="d-block header-block-icon dominant-link icon-16"><i
                                                    class="ri-menu-line"></i></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="header-icon-wrap search-wrap d-xl-none">
                                    <div class="header-icon-wrapper">
                                        <a href="#searchmodal" class="d-block header-icon-search" data-bs-toggle="modal"
                                            aria-label="Search modal">
                                            <span class="d-block header-block-icon dominant-link icon-16"><i
                                                    class="ri-search-line"></i></span>
                                        </a>
                                    </div>
                                </li>

                                <!-- <li class="header-icon-wrap wishlist-wrap d-none d-md-block">
                                    <div class="header-icon-wrapper">
                                        <a href="<?= base_url() ?>user/wishlist" class="d-block header-icon-wishlist">
                                            <span
                                                class="header-block-icon-wrap dominant-link ul-mt5 flex-nowrap align-items-center">
                                                <span class="header-block-icon icon-16"><i
                                                        class="ri-heart-line"></i></span>
                                                <span class="d-none d-xl-block header-text-content">Wishlist</span>
                                                <span id="wishlistCount"
                                                    class="header-block-counter wishlist-counter dominant-color">
                                                    <?php
                                                    if (isset($_SESSION['user_id'])) {
                                                        $wt = $this->My_model->select_where("user_wishlist", ['user_id' => $_SESSION['user_id']]);
                                                        echo count($wt);
                                                    } else {
                                                        if (isset($_SESSION['wishlist'])) {
                                                            echo count($_SESSION['wishlist']);
                                                        } else {
                                                            echo 0;
                                                        }
                                                    }
                                                    ?>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </li> -->
                                <li class="header-icon-wrap cart-wrap d-none d-md-block">
                                    <div class="header-icon-wrapper">
                                        <a onclick="miniCart()" class="d-block header-icon-cart js-cart-drawer">
                                            <span
                                                class="header-block-icon-wrap dominant-link ul-mt5 flex-nowrap align-items-center">
                                                <span class="header-block-icon icon-16"><i
                                                        class="ri-shopping-bag-3-line"></i></span>
                                                <span class="d-none d-xl-block header-text-content">Cart</span>
                                                <!-- <span class="header-block-counter cart-counter dominant-color"><?= isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0 ?></span> -->
                                            </span>
                                        </a>
                                    </div>
                                </li>

                                <li class="header-icon-wrap cart-wrap d-none d-md-block">
                                    <div class="header-icon-wrapper">
                                        <?php
                                        if (isset($_SESSION['user_id'])) {
                                            $urlAccount = 'my_account';
                                        } else {
                                            $urlAccount = 'login';
                                        }
                                        ?>
                                        <a href="<?= base_url() ?>user/<?= $urlAccount ?>" class="d-block">
                                            <span
                                                class="header-block-icon-wrap dominant-link ul-mt5 flex-nowrap align-items-center">
                                                <span class="header-block-icon icon-16"><i
                                                        class="ri-user-line"></i></span>
                                                <span class="d-none d-xl-block header-text-content">Account</span>
                                                <!-- <span class="header-block-counter cart-counter dominant-color"><?= isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0 ?></span> -->
                                            </span>
                                        </a>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!-- header-icon end -->
                </div>
            </div>
        </div>
        <!-- header-top-first end -->
    </div>
    <!-- header-top end -->
</header>
<style>
    .menu-li.has-dropdown {
        position: relative;
    }

    .menu-li.has-dropdown>.dropdown-menu {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        z-index: 1000;
        background: #fff;
        min-width: 200px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .menu-li.has-dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-menu li a {
        display: block;
        padding: 10px 20px;
        color: #222;
        text-decoration: none;
    }

    .dropdown-menu li a:hover {
        background: #f5f5f5;
    }

    .menu-li.has-dropdown>.dropdown-menu>li.position-relative:hover>.dropdown-menu {
        display: block;
    }

    .menu-li.has-dropdown>.dropdown-menu>li.position-relative>.dropdown-menu {
        display: none;
        position: absolute;
        left: 200px;
        top: 0;
        z-index: 1001;
        background: #fff;
        min-width: 220px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }
</style>