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
                            <div class="search-bar w-100 position-relative">
                                <form onsubmit="searchProducts(event)">
                                    <div class="form-search w-100 d-flex flex-wrap">
                                        <input type="search" style="border-bottom:2px solid #CD081B !important;box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;" name="search-input"
                                            class="search-input  pb-2 width-calc-16 h-auto text-color bg-transparent ptb-0 plr-0 border-0 rounded-0"
                                            id="search-prod" placeholder="Find our product" required>
                                        <button type="submit"
                                            class="d-block width-16 body-secondary-color icon-16"
                                            aria-label="Go to search">
                                            <i class="ri-search-line d-block lh-1" style="color:#CD081B"></i>
                                        </button>
                                    </div>
                                </form>

                                <script>
                                    function searchProducts(event) {
                                        // alert('sdfghjk');
                                        event.preventDefault(); // stop form from submitting normally

                                        const query = document.getElementById('search-prod').value.trim();
                                        console.log(query);
                                        if (query) {
                                            // Redirect to products page with GET parameter q
                                            window.location.href = "<?= base_url('user/products') ?>?q=" + encodeURIComponent(query);
                                        }
                                        return false;
                                    }
                                </script>



                                <!-- <div
                                        class="d-none search-results position-absolute top-auto start-0 end-0 body-bg z-2 border-full border-radius box-shadow">
                                        <div class="search-for ptb-10 plr-15 beb">Search for <span
                                                class="search-text">a</span></div>
                                        <ul class="search-ul">
                                            <?php foreach ($products as $key => $product) {
                                                // Split the string if it contains multiple paths (like in your example)
                                                $images = explode('||', $product['product_image']);
                                                $firstImage = trim($images[0]);
                                                // print_r($firstImage);
                                            ?>
                                                <li class="search-li ptb-5 plr-15 bst">
                                                    <a href="<?= base_url() ?>user/products"
                                                        class="body-dominant-color d-flex flex-wrap align-items-center">
                                                        <span class="width-48"><img
                                                                src="<?= base_url() ?>uploads/<?= $firstImage ?>"
                                                                class="w-100 img-fluid border-radius"
                                                                alt="search-product1"></span>
                                                        <span class="width-calc-48 psl-15 text-truncate"><?= $product['product_name'] ?></span>
                                                    </a>
                                                </li>
                                            <?php } ?>

                                        </ul>

                                        <div class="search-fail ptb-10 plr-15">Search not found</div>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <ul class="ul-mt30 justify-content-end">
                            <li><span class="d-inline-block body-secondary-color"><a
                                        href="mailto:<?= $social_media['email'] ?>"><i
                                            class="ri-mail-line icon-16 mer-5"></i><?= $social_media['email'] ?></a></span>
                            </li>
                            <li><span class="d-inline-block body-secondary-color"><a href="https://play.google.com/store/apps/details?id=com.instalaxmi.shingavi" target="_blank">
                                        <!-- all icon -->
                                        <i class="ri-apps-line icon-16 mer-5"></i>
                                        Get App</a></span></li>

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

                                       
                                    </li>
                                    <li class="menu-li">
                                        <a href="<?= base_url() ?>user/products"
                                            class="menu-link font-16 d-flex align-items-center plr-15">
                                            <span class="menu-title text-uppercase heading-weight">Products</span>
                                            <!-- <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span> -->
                                        </a>
                                    </li>
                                    <?php
                                    $category = $this->db->query("SELECT * FROM category WHERE status='active'")->result_array();

                                    if (!empty($category) && count($category) > 0) {
                                        foreach ($category as $key => $row) {
                                            $subcatdetails = $this->db->query("SELECT * FROM product_group WHERE group_category = " . $row['category_id'] . " AND status = 'active'")->result_array();
                                            // Fetch products for each group, but do not filter out empty groups
                                            if (!empty($subcatdetails) && count($subcatdetails) > 0) {
                                                foreach ($subcatdetails as $key1 => $row1) {
                                                    $details = $this->db->query("SELECT * FROM product_gold WHERE status='active' AND cat_id = " . $row['category_id'] . " AND group_id = " . $row1['product_group_id'] . " AND label != 'Out Of Stock'")->result_array();
                                                    $row1['details'] = $details; // Always add details, even if empty
                                                    $subcatdetails[$key1] = $row1;
                                                }
                                                $category[$key]['sub_category_details'] = $subcatdetails;
                                            } else {
                                                unset($category[$key]['sub_category_details']);
                                            }
                                        }
                                    }

                                    $category = array_filter($category, function ($cat) {
                                        return isset($cat['sub_category_details']);
                                    });


                                    ?>





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

                                                <?php if (count($row['sub_category_details']) > 0) { ?>
                                                    <ul class="dropdown-menu" style="width: 300px;border:none;border-radius:0px;padding:5px 30px;text-transform: uppercase;">
                                                        <?php foreach (
                                                            $row['sub_category_details'] as $subCat
                                                        ) { ?>
                                                            <li class="position-relative">
                                                                <a
                                                                    href="<?= base_url() ?>user/product_details_filter?cat_id=<?= $row['category_id'] ?>&g_id=<?= $subCat['product_group_id'] ?>">
                                                                    <?= $subCat['product_group_name'] ?>
                                                                    <?php if (!empty($subCat['details'])) { ?>
                                                                        <span class="icon-16 fw-normal" style="float:right; margin-left:8px;"><i class="ri-arrow-right-s-line d-block lh-1"></i></span>
                                                                    <?php } ?>
                                                                </a>
                                                                <?php if (!empty($subCat['details'])) { ?>
                                                                    <ul class="dropdown-menu"
                                                                        style="left: 200px; top: 0; min-width: 300px;border:none;">
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

                                    <li class="menu-li specials-dropdown">
                                        <a style="text-decoration:none;" href="<?= base_url() ?>user/products"
                                            class="menu-link d-flex align-items-center plr-15">
                                            <span class="menu-title text-uppercase heading-weight">Specials</span>
                                            <?php if (!empty($special_days)) { ?>
                                                <i class="ri-arrow-down-s-line d-block lh-1"></i>
                                            <?php } ?>
                                        </a>
                                        <ul class="header__sub--menu">
                                            <?php if (!empty($special_days)) {
                                                foreach ($special_days as $row) { ?>
                                                    <li style="text-decoration:none;" class="header__sub--menu__items">
                                                        <a href="<?= base_url() ?>user/show_special_product?special_days_id=<?= $row['special_days_id'] ?>" class="header__sub--menu__link text-uppercase"><?= $row['special_day'] ?></a>
                                                    </li>
                                            <?php }
                                            } ?>
                                        </ul>
                                    </li>



                                    


                                    <!--<li class="menu-li">-->
                                    <!--    <a href="<?= base_url() ?>user/contact"-->
                                    <!--        class="menu-link font-16 d-flex align-items-center plr-15">-->
                                    <!--        <span class="menu-title text-uppercase heading-weight">Contact Us</span>-->
                                    <!--    </a>-->
                                     
                                    <!--</li>-->

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
                                                <span class="d-none d-xl-block header-text-content" style="cursor: pointer;">Cart</span>
                                                <span id="cart-counter" class="header-block-counter cart-counter dominant-color"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span> 
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
                                                 <!--<span class="header-block-counter cart-counter dominant-color"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span> -->
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

    .specials-dropdown {
        position: relative;
    }

    .specials-dropdown>.header__sub--menu {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        min-width: 200px;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        z-index: 1000;
        padding: 10px 0;
        border-radius: 4px;
    }

    .specials-dropdown:hover>.header__sub--menu {
        display: block;
    }

    .header__sub--menu__items {
        padding: 0;
    }

    .header__sub--menu__link {
        display: block;
        padding: 8px 20px;
        color: #222;
        text-decoration: none;
        font-size: 14px;
    }

    .header__sub--menu__link:hover {
        background: #f5f5f5;
        color: #007bff;
    }
</style>