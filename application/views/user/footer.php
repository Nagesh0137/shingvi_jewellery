<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        <?php if ($this->session->flashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "<?= $this->session->flashdata('success'); ?>",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#4CAF50',
                color: '#ffffff'
            });
            <?php $this->session->unset_userdata('success'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "<?= $this->session->flashdata('error'); ?>",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#F44336',
                color: '#ffffff'
            });
            <?php $this->session->unset_userdata('error'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('info')): ?>
            Swal.fire({
                icon: 'info',
                title: 'Info',
                text: "<?= $this->session->flashdata('info'); ?>",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#2196F3',
                color: '#ffffff'
            });
            <?php $this->session->unset_userdata('info'); ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('warning')): ?>
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: "<?= $this->session->flashdata('warning'); ?>",
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#FF9800',
                color: '#ffffff'
            });
            <?php $this->session->unset_userdata('warning'); ?>
        <?php endif; ?>
    });
</script>


<footer id="footer" style="background-color: #f4ead6;">
    <div class="footer-area section-ptb py-4">
        <div class="container">
            <div class="row align-items-start gy-4">

                <!-- DIGITAL GOLD + QR -->
                <div class="col-12 col-lg-3 px-3 d-flex justify-content-center justify-content-lg-start">
                    <div class="footer-menu text-center text-lg-start w-100">
                        <h6 class="ft-title font-18" style="color: #080e27; font-weight: bold;">DIGITAL GOLD</h6>
                        <hr class="footer-line">
                        <div class="footer-news-form">
                            <div class="d-inline-block border-radius"
                                style="background: white; padding: 10px; border-radius: 16px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
                                <img src="<?= base_url() ?>u_assets/assets/image/qr_image/qr-code.png"
                                    alt="Download App QR Code" class="img-fluid" style="width: 100%; height: 180px;">
                                <p class="heading-weight font-14 mt-3 mb-0 text-center" style="color: #909090;">Scan And
                                    Download The App</p>
                            </div>
                        </div>
                        <style>
                            .footer_download_app {
                                padding-left: 39px;
                            }

                            @media(max-width:800px) {
                                .footer_download_app {
                                    padding-left: 0;
                                    text-align: center;
                                }
                            }
                        </style>
                        <div class="mt-3 footer_download_app">
                            <a href="https://play.google.com/store/apps/details?id=com.instalaxmi.shingavi" target="_blank" class="btn text-white " style="background-color: #9c1138;border-radius:0;">Download App</a>
                        </div>
                    </div>
                </div>


                <!-- Footer Columns -->
                <div class="col-12 col-lg-9">
                    <div class="row gy-4">

                        <!-- Top Category -->
                        <div class="col-6 col-md-3">
                            <div class="footer-menu">
                                <h6 class="ft-title font-18">Top category</h6>
                                <hr class="footer-line">
                                <ul class="ftlink-ul ul-ft">
                                    <li><a href="<?= base_url() ?>user/custome_jewellery">Custom Jewellery</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Information -->
                        <div class="col-6 col-md-3">
                            <div class="footer-menu">
                                <h6 class="ft-title font-18">Information</h6>
                                <hr class="footer-line">
                                <ul class="ftlink-ul ul-ft">
                                    <li><a href="<?= base_url() ?>user/about">About us</a></li>
                                    <li><a href="<?= base_url() ?>user/contact">Contact us</a></li>
                                    <li><a href="<?= base_url() ?>user/faq">Faqs</a></li>
                                    <li><a href="<?= base_url() ?>user/blog">Blog</a></li>
                                    <li><a href="<?= base_url() ?>user/branch">Our Branches</a></li>
                                    <li><a href="<?= base_url() ?>user/event">Events</a></li>
                                    <li><a href="<?= base_url() ?>user/history">Our History</a></li>
                                    <li><a href="<?= base_url() ?>user/customer_review">Customer Review</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Policies -->
                        <div class="col-6 col-md-3">
                            <div class="footer-menu">
                                <h6 class="ft-title font-18">Policies</h6>
                                <hr class="footer-line">
                                <ul class="ftlink-ul ul-ft">
                                    <?php if (isset($pages_name[0]) && count($pages_name) > 0) {
                                        foreach ($pages_name as $row) { ?>
                                            <li><a
                                                    href="<?= base_url(); ?>user/policies/<?= $row['pages_name_id'] ?>"><?= $row['pages_name'] ?></a>
                                            </li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Follow Us -->
                        <div class="col-6 col-md-3">
                            <div class="footer-menu">
                                <h6 class="ft-title font-18">Follow Us</h6>
                                <hr class="footer-line" style="width: 60px;">
                                <ul class="ftlink-ul ul-ft">
                                    <li><a href="<?= $social_media['facebook'] ?>" target="_blank"
                                            class="d-flex align-items-center"><i class="ri-facebook-fill me-2"></i>
                                            Facebook</a></li>
                                    <li><a href="<?= $social_media['instagram'] ?>" target="_blank"
                                            class="d-flex align-items-center"><i class="ri-instagram-line me-2"></i>
                                            Instagram</a></li>
                                    <li><a href="<?= $social_media['whatsapp'] ?>" target="_blank"
                                            class="d-flex align-items-center"><i class="ri-whatsapp-line me-2"></i>
                                            WhatsApp</a></li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- row -->
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="copyright ptb-10 extra-bg" style="background-color: #f4ead6;">
        <div class="container">
            <hr>
            <div class="text-center" style="color: #2f2f48;">
                Designed & Developed by
                <a href="https://a2zithub.com" target="_blank" rel="noopener noreferrer"
                    style="color: #2f2f48; font-weight: 500;">
                    A2Z IT HUB PVT LTD
                </a>
                for Shingavi Jewellers © 2025
            </div>
        </div>
    </div>
</footer>


<!-- FOOTER STYLES -->
<style>
    .footer-menu ul li a {
        color: #2f2f48;
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .footer-menu ul li a:hover {
        color: #FF7F7F !important;
    }

    .footer-menu ul li a:hover i {
        color: #FF7F7F !important;
    }

    .footer-menu ul li a i {
        color: #1b1a17;
        transition: color 0.3s ease;
    }

    .footer-line {
        width: 80px;
        border-color: #080e27;
        height: 3px;
        opacity: 1;
        border-width: 2px;
        margin: 5px 0;
        margin-left: 0;
        /* align with heading */
    }

    @media (max-width: 576px) {
        #footer .footer-menu {
            text-align: left !important;
        }

        #footer .footer-news-form {
            display: flex;
            justify-content: center;
        }

        .footer-line {
            width: 60px !important;
            margin-left: 0 !important;
        }

        .footer-menu h6 {
            font-size: 16px;
        }
    }
</style>
<!-- footer-bottom end -->
<!-- footer end -->

<!-- mobile-menu start -->
<div class="mobile-menu d-xl-none position-fixed top-0 bottom-0 extra-bg z-index-5 invisible box-shadow"
    id="mobile-menu">
    <div class="mobile-contents d-flex flex-column">
        <div class="menu-close ptb-10 plr-15 beb">
            <button type="button" class="menu-close-btn d-block body-secondary-color icon-16 ms-auto"
                aria-label="Menu close"><i class="ri-close-large-line d-block lh-1"></i></button>
        </div>
        <div class="mobilemenu-content h-100 d-flex flex-column justify-content-between overflow-hidden">
            <div class="main-wrap h-100 overflow-auto">
                <ul class="menu-ul beb">
                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse"
                                data-bs-target="#menu-home" aria-expanded="false" aria-label="Menu accordion"><i
                                    class="ri-add-line d-block lh-1"></i></button>
                            <span class="width-calc-48 ptb-10 plr-15"><a href="<?= base_url() ?>"
                                    class="d-inline-block body-color">Home</a></span>
                        </div>
                        <div class="menu-dropdown collapse" id="menu-home">
                            <ul class="menudrop-ul">
                                <li class="menudrop-li bst">
                                    <span class="d-block ptb-10 psl-20 per-15"><a href="index.html"
                                            class="d-inline-block body-color">01 Clean demo</a></span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse"
                                data-bs-target="#menu-product" aria-expanded="false" aria-label="Menu accordion"><i
                                    class="ri-add-line d-block lh-1"></i></button>
                            <span class="width-calc-48 ptb-10 plr-15"><a href="javascript:void(0)"
                                    class="d-inline-block">Product</a></span>
                        </div>
                        <div class="menu-dropdown collapse" id="menu-product">
                            <ul class="menudrop-ul">
                                <li class="menudrop-li bst">
                                    <span class="d-block ptb-10 psl-20 per-15"><a href="<?= base_url() ?>user/products"
                                            class="d-inline-block body-color">Products Page</a></span>
                                </li>



                            </ul>
                        </div>
                    </li>
                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse"
                                data-bs-target="#menu-shop" aria-expanded="false" aria-label="Menu accordion"><i
                                    class="ri-add-line d-block lh-1"></i></button>
                            <span class="width-calc-48 ptb-10 plr-15"><a href="<?= base_url() ?>"
                                    class="d-inline-block body-color">Shop</a></span>
                        </div>
                        <div class="menu-dropdown collapse" id="menu-shop">
                            <ul class="menudrop-ul">
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-account"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Account</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-account">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="login.html"
                                                        class="d-inline-block body-color">Login</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="forgot-password.html"
                                                        class="d-inline-block body-color">Forgot password</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="register.html"
                                                        class="d-inline-block body-color">Register</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-other" aria-expanded="false"
                                            aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Other</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-other">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="cancellation.html"
                                                        class="d-inline-block body-color">404</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="cart-empty.html"
                                                        class="d-inline-block body-color">Cart empty</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="cart-page.html"
                                                        class="d-inline-block body-color">Cart</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="checkout.html"
                                                        class="d-inline-block body-color">Checkout</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="coming-soon.html"
                                                        class="d-inline-block body-color">Comingsoon</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="invoice.html"
                                                        class="d-inline-block body-color">Invoice</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-order" aria-expanded="false"
                                            aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Order</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-order">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="<?= base_url() ?>"
                                                        class="d-inline-block body-color">Order complete</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="order.html"
                                                        class="d-inline-block body-color">Order</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="order-info.html"
                                                        class="d-inline-block body-color">Order info</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-default.html"
                                                        class="d-inline-block body-color">Order default</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-unfulfilled.html"
                                                        class="d-inline-block body-color">Order unfulfilled</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-fulfilled.html"
                                                        class="d-inline-block body-color">Order fulfilled</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-inprogress.html"
                                                        class="d-inline-block body-color">Order inprogress</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-intransit.html"
                                                        class="d-inline-block body-color">Order intransit</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-indelivery.html"
                                                        class="d-inline-block body-color">Order indelivery</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-delivered.html"
                                                        class="d-inline-block body-color">Order delivered</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-pickup.html"
                                                        class="d-inline-block body-color">Order pickup</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="order-info-cancel.html"
                                                        class="d-inline-block body-color">Order cancel</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-profile"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Profile</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-profile">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="profile.html"
                                                        class="d-inline-block body-color">Profile</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="profile-address.html"
                                                        class="d-inline-block body-color">Profile address</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="profile-notification.html"
                                                        class="d-inline-block body-color">Profile
                                                        notification</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="profile-order.html"
                                                        class="d-inline-block body-color">Profile order</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="profile-order-empty.html"
                                                        class="d-inline-block body-color">Profile order empty</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="profile-ticket.html"
                                                        class="d-inline-block body-color">Profile ticket</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="profile-ticket-empty.html"
                                                        class="d-inline-block body-color">Profile ticket
                                                        empty</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="profile-wishlist.html"
                                                        class="d-inline-block body-color">Profile wishlist</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="profile-wishlist-empty.html"
                                                        class="d-inline-block body-color">Profile wishlist
                                                        empty</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-ticket"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Ticket</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-ticket">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="ticket.html"
                                                        class="d-inline-block body-color">Ticket</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="ticket-create.html"
                                                        class="d-inline-block body-color">Ticket create</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="ticket-edit.html"
                                                        class="d-inline-block body-color">Ticket edit</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="ticket-info.html"
                                                        class="d-inline-block body-color">Ticket info</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-features"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Features</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-features">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="button.html"
                                                        class="d-inline-block body-color">Button</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="cart-drawer-empty.html"
                                                        class="d-inline-block body-color">Cart drawer empty</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-policies"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Policies</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-policies">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="cancellation.html"
                                                        class="d-inline-block body-color">Cancellation</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="cookie.html"
                                                        class="d-inline-block body-color">Cookie</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="legal.html"
                                                        class="d-inline-block body-color">Legal</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="payment-policy.html"
                                                        class="d-inline-block body-color">Payment policy</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="privacy-policy.html"
                                                        class="d-inline-block body-color">Privacy policy</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="return-policy.html"
                                                        class="d-inline-block body-color">Return policy</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="shipping-policy.html"
                                                        class="d-inline-block body-color">Shipping policy</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a
                                                        href="<?= base_url() ?>rohan/terms_of_use"
                                                        class="d-inline-block body-color">Terms & condition</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse"
                                data-bs-target="#menu-blog" aria-expanded="false" aria-label="Menu accordion"><i
                                    class="ri-add-line d-block lh-1"></i></button>
                            <span class="width-calc-48 ptb-10 plr-15"><a href="javascript:void(0)"
                                    class="d-inline-block">Blog</a></span>
                        </div>
                        <div class="menu-dropdown collapse" id="menu-blog">
                            <ul class="menudrop-ul">
                                <li class="menudrop-li bst">
                                    <span class="d-block ptb-10 psl-20 per-15"><a href="<?= base_url() ?>user/blog"
                                            class="d-inline-block body-color">Blog Page</a></span>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse"
                                data-bs-target="#menu-page" aria-expanded="false" aria-label="Menu accordion"><i
                                    class="ri-add-line d-block lh-1"></i></button>
                            <span class="width-calc-48 ptb-10 plr-15"><a href="javascript:void(0)"
                                    class="d-inline-block">Page</a></span>
                        </div>
                        <div class="menu-dropdown collapse" id="menu-page">
                            <ul class="menudrop-ul">
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-aboutus"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">About us</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-aboutus">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="about-us.html"
                                                        class="d-inline-block body-color">01 Clean aboutus</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="about-us2.html"
                                                        class="d-inline-block body-color">02 Standard aboutus</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="about-us3.html"
                                                        class="d-inline-block body-color">02 Classic aboutus</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-contactus"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Contact us</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-contactus">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="contact-us.html"
                                                        class="d-inline-block body-color">01 Simple contactus</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="contact-us2.html"
                                                        class="d-inline-block body-color">02 Minimalist
                                                        contactus</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menudrop-li bst">
                                    <span class="d-block ptb-10 psl-20 per-15"><a href="<?= base_url() ?>user/faq"
                                            class="d-inline-block body-color">Faqs</a></span>
                                </li>
                                <li class="menudrop-li bst">
                                    <span class="d-block ptb-10 psl-20 per-15"><a href="sitemap.html"
                                            class="d-inline-block body-color">Sitemap</a></span>
                                </li>

                                <li class="menudrop-li bst">
                                    <span class="d-block ptb-10 psl-20 per-15"><a href="track-order.html"
                                            class="d-inline-block body-color">Track order</a></span>
                                </li>
                                <li class="menudrop-li bst">
                                    <div class="menu-btn d-flex flex-row-reverse">
                                        <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                            data-bs-toggle="collapse" data-bs-target="#menu-wishlist"
                                            aria-expanded="false" aria-label="Menu accordion"><i
                                                class="ri-add-line d-block lh-1"></i></button>
                                        <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)"
                                                class="d-inline-block">Wishlist</a></span>
                                    </div>
                                    <div class="menusub-dropdown collapse" id="menu-wishlist">
                                        <ul class="menusub-ul">
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="wishlist.html"
                                                        class="d-inline-block body-color">Wishlist</a></span>
                                            </li>
                                            <li class="menusub-li bst">
                                                <span class="d-block ptb-10 psl-25 per-15"><a href="wishlist-empty.html"
                                                        class="d-inline-block body-color">Wishlist empty</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile-cl bst">
                <div class="d-flex">
                    <div class="col-6">
                        <div class="local-cl">
                            <form method="post" action="JavaScript:void(0)" class="localization-form"
                                enctype="multipart/form-data">
                                <button type="submit"
                                    class="mobile-cl-btn w-100 body-color d-flex align-items-center justify-content-between ptb-10 plr-15 beb">English<i
                                        class="ri-arrow-down-s-line d-block icon-16 lh-1"></i></button>
                                <div
                                    class="local-cl-drodown-menu position-absolute bottom-0 start-0 end-0 body-bg z-1 bst">
                                    <button type="button"
                                        class="mobile-cl-close-btn d-block w-100 heading-color ptb-10 plr-15"
                                        aria-label="Currency / Language menu close">Close</button>
                                    <ul>
                                        <li class="active bst"><a href="javascript:void(0)"
                                                class="d-block ptb-10 plr-15">English</a></li>
                                        <li class="bst"><a href="javascript:void(0)"
                                                class="d-block ptb-10 plr-15">Spanish</a></li>
                                        <li class="bst"><a href="javascript:void(0)"
                                                class="d-block ptb-10 plr-15">French</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6 bsl">
                        <div class="local-cl">
                            <form method="post" action="JavaScript:void(0)" class="localization-form"
                                enctype="multipart/form-data">
                                <button type="submit"
                                    class="mobile-cl-btn w-100 body-color d-flex align-items-center justify-content-between ptb-10 plr-15 beb">USD
                                    $<i class="ri-arrow-down-s-line d-block icon-16 lh-1"></i></button>
                                <div
                                    class="local-cl-drodown-menu position-absolute bottom-0 start-0 end-0 body-bg z-1 bst">
                                    <button type="button"
                                        class="mobile-cl-close-btn d-block w-100 heading-color ptb-10 plr-15"
                                        aria-label="Currency / Language menu close">Close</button>
                                    <ul>
                                        <li class="active bst"><a href="javascript:void(0)"
                                                class="d-block ptb-10 plr-15">USD $</a></li>
                                        <li class="bst"><a href="javascript:void(0)" class="d-block ptb-10 plr-15">EUR
                                                €</a></li>
                                        <li class="bst"><a href="javascript:void(0)" class="d-block ptb-10 plr-15">INR
                                                ₹</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu end -->
<!-- search-modal start -->
<div class="search-modal modal fade" id="searchmodal">
    <div class="modal-dialog mw-100 m-0">
        <div class="modal-content body-bg border-0 rounded-0">
            <div class="modal-body p-0">
                <div class="container">
                    <div class="search-content ptb-30">
                        <div class="search-box d-flex flex-row-reverse">
                            <button type="button" class="d-block search-close body-secondary-color icon-16"
                                data-bs-dismiss="modal" aria-label="Close"><i
                                    class="ri-close-large-line d-block lh-1"></i></button>
                            <form method="get" action="javascript:void(0)" class="search-form w-100">
                                <div class="search-bar position-relative">
                                    <div class="form-search d-flex flex-row-reverse">
                                        <input type="search" name="search-input"
                                            class="search-input w-100 h-auto ptb-0 plr-15 bg-transparent border-0"
                                            value="" placeholder="Search here" required>
                                        <button type="submit" onclick="window.location.href='search-product.html'"
                                            class="d-block search-btn body-secondary-color icon-16"
                                            aria-label="Go to search" disabled><i
                                                class="ri-search-line d-block lh-1"></i></button>
                                    </div>
                                    <div
                                        class="d-none search-results position-absolute top-100 start-0 end-0 body-bg z-1 border-full border-radius box-shadow">
                                        <div class="search-for ptb-10 plr-15 beb">Search for <span
                                                class="search-text">a</span></div>
                                        <ul class="search-ul">
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product1.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product1"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Gleam band</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product2.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product2"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Luxe loop</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product3.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product3"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Opal stud</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product4.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product4"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Ruby hoop</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product5.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product5"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Pearl link</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product6.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product6"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Gold bead</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product7.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product7"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Sway drop</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product8.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product8"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Star charm</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product9.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product9"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Glim cuff</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product10.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product10"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Jade bead</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product11.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product11"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Twist bangle</span>
                                                </a>
                                            </li>
                                            <li class="search-li ptb-5 plr-15 bst">
                                                <a href="product.html"
                                                    class="body-dominant-color d-flex flex-wrap align-items-center">
                                                    <span class="width-48"><img
                                                            src="<?= base_url() ?>u_assets/assets/image/search/search-product12.jpg"
                                                            class="w-100 img-fluid border-radius"
                                                            alt="search-product12"></span>
                                                    <span class="width-calc-48 psl-15 text-truncate">Shiny choke</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="search-more ptb-10 plr-15 bst"><a href="search-product.html"
                                                class="body-secondary-color text-decoration-underline">See all results
                                                (12)</a></div>
                                        <div class="search-fail ptb-10 plr-15">Search not found</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="search-example-text mst-15">Trending search: a, e, rings...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search-modal end -->
<!-- cart-drawer start -->
<div class="cart-drawer position-fixed top-0 bottom-0 body-bg z-index-5 invisible box-shadow" id="cart-drawer">

</div>
<!-- cart-drawer end -->
<!-- bottom-menu start -->
<div class="bottom-menu d-md-none position-sticky bottom-0 extra-bg z-1 box-shadow">
    <div class="bottom-menu-element d-flex flex-wrap align-items-center">
        <div class="col">
            <a href="<?= base_url() ?>user" class="d-flex flex-column align-items-center ptb-10 text-center">
                <span class="bottom-menu-icon heading-color icon-16"><i class="ri-home-8-line d-block lh-1"></i></span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Home</span>
            </a>
        </div>
        <div class="col">
            <?php
            if (isset($_SESSION['user_id'])) {
                $urlAccount = 'my_account';
            } else {
                $urlAccount = 'login';
            }
            ?>
            <a href="<?= base_url() ?>user/<?= $urlAccount ?>"
                class="d-flex flex-column align-items-center ptb-10 text-center">
                <span class="bottom-menu-icon heading-color icon-16">
                    <i class="ri-user-3-line d-block lh-1"></i>
                </span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Profile</span>
            </a>
        </div>

        <div class="col">
            <a href="<?= base_url() ?>user/products" class="d-flex flex-column align-items-center ptb-10 text-center">
                <span class="bottom-menu-icon heading-color icon-16"><i
                        class="ri-layout-grid-line d-block lh-1"></i></span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Shop</span>
            </a>
        </div>

        <div class="col">
            <a href="javascript:void(0)"
                class="js-cart-drawer d-flex flex-column align-items-center ptb-10 text-center">
                <span class="bottom-menu-icon-wrap position-relative per-7">
                    <span class="d-block bottom-menu-icon heading-color icon-16"><i
                            class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                    <!-- <span class="bottom-menu-counter cart-counter extra-color font-10 position-absolute end-0 dominant-bg d-flex align-items-center justify-content-center rounded-circle">4</span>
                </span> -->
                    <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Cart</span>
            </a>
        </div>

    </div>
</div>
<!-- bottom-menu end -->
<!-- bg-screen start -->
<div class="bg-screen">
    <div class="bg-back position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
    <div class="bg-shop position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
</div>
<!-- bg-screen end -->
<!-- back-to-top start -->
<a href="javascript:void(0)" id="top"
    class="icon-16 secondary-btn position-fixed width-32 height-32 d-flex align-items-center justify-content-center z-1 opacity-0 invisible border-radius"
    aria-label="Back to top"><i class="ri-arrow-up-line d-block lh-1"></i></a>

<!-- back-to-top end -->
<!-- plugin js -->
<script src="<?= base_url() ?>u_assets/assets/js/plugin.js"></script>
<script src="<?= base_url() ?>u_assets/assets/js/buynow.js"></script>
<!-- theme js -->
<script src="<?= base_url() ?>u_assets/assets/js/theme3.js"></script>
</body>

<!-- Mirrored from spacingtech.com/html/veppo/template/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jul 2025 11:38:16 GMT -->
<script>
    function openModal(pid) {
        $.ajax({
            url: '<?= base_url("user/quick_view") ?>',
            method: 'POST',
            data: {
                product_id: pid
            },
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
                    $('#product-desc').text(product.product_details);
                    // $('#buy_now_btn').attr('href', '<?= base_url("user/buy_now/") ?>' + product.prod_gold_id);
                    // Set onclick attribute for Buy Now
                    $('#buy_now_btn').attr('onclick', `openAddressModal('${product.prod_gold_id}')`);

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
                                    <input type="radio" name="selected_size" class="cust-checkbox" value="${size}" ${checked}>
                                    <span class="d-block cust-check border-full border-radius">${size}</span>
                                </label>
                            </li>
                        `);
                        });
                    } else {
                        sizesContainer.append(`
                        <input  type="hidden" name="selected_size" id="selected_size" class="cust-checkbox" value="NA" checked>
                        <li><span class="text-muted">No sizes available</span></li>
                    `);
                    }
                    // --- Ring Size Logic End ---

                    // Show modal
                    attachSizeListeners();
                    $('#quickview-modal').modal('show');
                }
            },
            error: function() {
                alert('Something went wrong while fetching product info.');
            }
        });
    }

    // function openAddressModal(pId) {
    //     // $('#quickview-modal').modal('hide');
    //     // $('#quickview-modal').on('hidden.bs.modal', function () {
    //         // Remove this event after it's triggered to prevent multiple calls
    //         $(this).off('hidden.bs.modal');
    //         let productDet = '';
    //         $('.product_id').val(pId);
    //         let productSessionId = pId;
    //         // alert('open'+productSessionId);

    //         // Step 1: Load the HTML content
    //         let selected_qty = document.getElementById('selected_qty').value;

    //         var url = '?pId=' + encodeURIComponent(pId) +
    //             '&size=' + encodeURIComponent(selected_Size_to_Buy) +
    //             '&qty=' + encodeURIComponent(selected_qty);

    //         console.log('pId -- ', pId)
    //         $('#address-modal-body').load('<?= base_url("user/load_address_form") ?>' + url, function () {
    //             // Step 2: After the form is loaded, run AJAX for data
    //             $.ajax({
    //                 url: '<?= base_url("user/getproductDetails") ?>',
    //                 type: 'POST',
    //                 data: { pId: pId },
    //                 dataType: 'json',
    //                 success: function (res) {
    //                     console.log(res);
    //                     if (res.status == 'success') {
    //                         productDet = res.product_details[0];
    //                         // var userDet = res.data[0];

    //                         console.log("selected_Size_to_Buy", selected_Size_to_Buy, 'selected_qty', selected_qty);

    //                         $('#address-modal').modal('show');
    //                     } else {
    //                         alert("Something went wrong. Please try again.");
    //                     }
    //                 },
    //                 error: function () {
    //                     alert("Error occurred. Try again.");
    //                 }
    //             });

    //         });
    //     // });
    // }
    function miniCart() {

        $("#cart-drawer").removeClass("invisible").addClass("active visible");
        $(".bg-shop").removeClass("opacity-0 invisible").addClass("opacity-50 visible");
        $("#cart-drawer").load("<?= base_url('user/load_cart_drawer') ?>");

    }

    function openAddressModal(pId) {
        const isQuickViewOpen = $('#quickview-modal').hasClass('show');

        function loadAddressModalContent() {
            $('.product_id').val(pId);
            const selected_qty = document.getElementById('selected_qty').value;

            const url = '?pId=' + encodeURIComponent(pId) +
                '&size=' + encodeURIComponent(selected_Size_to_Buy) +
                '&qty=' + encodeURIComponent(selected_qty);

            console.log('pId -- ', pId);

            $('#address-modal-body').load('<?= base_url("user/load_address_form") ?>' + url, function() {
                $.ajax({
                    url: '<?= base_url("user/getproductDetails") ?>',
                    type: 'POST',
                    data: {
                        pId: pId
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log(res);
                        if (res.status === 'success') {
                            const productDet = res.product_details[0];
                            console.log("selected_Size_to_Buy", selected_Size_to_Buy, 'selected_qty', selected_qty);
                            $('#address-modal').modal('show');
                        } else {
                            alert("Something went wrong. Please try again.");
                        }
                    },
                    error: function() {
                        alert("Error occurred. Try again.");
                    }
                });
            });
        }

        if (isQuickViewOpen) {
            $('#quickview-modal').modal('hide');
            $('#quickview-modal').one('hidden.bs.modal', function() {
                loadAddressModalContent(); // Load after modal is fully hidden
            });
        } else {
            loadAddressModalContent(); // No modal open, load directly
        }
    }
</script>

<script>
    // function miniCart() {
    //     $("#cart-drawer").removeClass("invisible").addClass("active visible");
    //     $(".bg-shop").removeClass("opacity-0 invisible").addClass("opacity-50 visible");
    // }

    function addToCart(pId, clickedElement) {
        event.preventDefault();

        // Get the clicked button element
        var $clickedBtn = $(clickedElement);

        // Check if size selection element exists
        var sizeElement = document.getElementById("gleam-band-size-" + pId);
        var selectedSize = "";

        if (sizeElement) {
            selectedSize = sizeElement.value;
            if (selectedSize === "") {
                alert("Please select a size before adding to cart.");
                return;
            }
        } else {
            // If no size selection available, use default or empty value
            selectedSize = "default";
        }

        // Show loading state immediately
        $clickedBtn.addClass("loading active disabled");
        $clickedBtn.find('.product-bag-icon').hide();
        $clickedBtn.find('.product-loader-icon').show();

        $.ajax({
            url: '<?= base_url("user/addToCart") ?>',
            type: 'POST',
            data: {
                prod_id: pId,
                size: selectedSize
            },
            dataType: 'json',
            success: function(res) {
                console.log(res);
                if (res.status == 'success') {
                    // Show success state
                    setTimeout(function() {
                        $clickedBtn.removeClass("loading").addClass("done");
                        $clickedBtn.find('.product-loader-icon').hide();
                        $clickedBtn.find('.product-check-icon').show();

                        setTimeout(function() {
                            $clickedBtn.removeClass("done active disabled");
                            $clickedBtn.find('.product-check-icon').hide();
                            $clickedBtn.find('.product-bag-icon').show();



                            // Update all add-to-cart buttons for this product
                            var allCartButtons = $('[id^="add-to-cart-btn-"][id$="-' + pId + '"]');
                            allCartButtons.each(function() {
                                $(this).addClass("in-cart");
                                $(this).find('.tooltip-text').text('Added to cart');
                                $(this).find('.product-bag-icon i')
                                    .removeClass('ri-shopping-bag-3-line')
                                    .addClass('ri-shopping-bag-fill text-success');
                            });

                            // Call miniCart function
                            miniCart();

                            // Close quickview modal if exists
                            $clickedBtn.closest(".quickview-modal").find(".quickview-modal-header button").click();

                            // Load cart drawer content via AJAX
                            $("#cart-drawer").load("<?= base_url('user/load_cart_drawer') ?>?pId=" + encodeURIComponent(pId) + "&size=" + encodeURIComponent(selectedSize));

                        }, 800);
                    }, 500);
                } else {
                    // Reset button state on failure
                    $clickedBtn.removeClass("loading active disabled");
                    $clickedBtn.find('.product-loader-icon').hide();
                    $clickedBtn.find('.product-bag-icon').show();
                    alert("Failed to add to cart. Please try again.");
                }
            },
            error: function(err) {
                console.log(err);
                // Reset button state on error
                $clickedBtn.removeClass("loading active disabled");
                $clickedBtn.find('.product-loader-icon').hide();
                $clickedBtn.find('.product-bag-icon').show();
                alert("Error occurred. Try again.");
            }
        });

        console.log("Product ID:", pId);
        console.log("Selected Size:", selectedSize);
    }
</script>
<script>
    let receivedOtp = '';
    let enteredMobile = '';
    let user_status = '';
    let errorMsg = '';
    let userDet = '';
    let productDet = '';
    $(document).on('click', '.question-form-submit-otp', function() {
        const mobile = $('#phone').val().trim();

        // Validate mobile: 10 digits and starts with 7, 8, or 9
        document.getElementById('errMsg').innerHTML = '';

        const regex = /^[789]\d{9}$/;
        if (!regex.test(mobile)) {
            document.getElementById('errMsg').innerHTML = 'Enter a valid 10-digit mobile number starting with 7, 8, or 9.';
            // alert("Enter a valid 10-digit mobile number starting with 7, 8, or 9.");
            return;
        }

        // Save entered mobile
        enteredMobile = mobile;
        let productId = document.getElementById('product_id').value;
        // Send OTP via AJAX
        $.ajax({
            url: '<?= base_url("user/buy_product_otp") ?>',
            type: 'POST',
            data: {
                mobile_number: mobile,
                pId: productId
            },
            dataType: 'json',
            success: function(res) {
                console.log(res);
                if (res.status === 'success') {
                    receivedOtp = res.otp;
                    productDet = res.product_details[0];
                    if (res.user_status == 'existing') {
                        userDet = res.data[0];
                    } else {
                        userDet = '';
                    }
                    user_status = res.user_status;
                    document.getElementById('errMsg').innerHTML = ' ';
                    $('#dummyOtp').html(receivedOtp);
                    // Show OTP field and Verify button
                    $('#otp').closest('.field-col').removeClass('d-none');
                    $('.question-form-btn').eq(0).addClass('d-none'); // Hide "Send OTP"
                    $('.question-form-btn').eq(1).removeClass('d-none'); // Show "Verify"
                } else {
                    // alert(res.msg || "Something went wrong.");
                    document.getElementById('errMsg').innerHTML = res.msg || "Something went wrong.";

                }
            },
            error: function() {
                // alert("Failed to send OTP. Try again.");
                document.getElementById('errMsg').innerHTML = 'Failed to send OTP. Try again.';

            }
        });
    });

    // Verify OTP
    $(document).on('submit', '#otpForm', function(e) {
        e.preventDefault();
        const inputOtp = $('#otp').val().trim();
        console.log(inputOtp, receivedOtp);
        var productId = document.getElementById('product_id').value;

        if (inputOtp == receivedOtp) {

            var url = '?pId=' + encodeURIComponent(productId) +
                '&size=' + encodeURIComponent(selected_Size_to_Buy) +
                '&qty=' + encodeURIComponent(selected_qty);

            $('#address-modal-body').load('<?= base_url("user/load_address_form") ?>' + url, function() {
                console.log('Modal content reloaded.');
            });

            $('#address-modal-body').load('<?= base_url("user/load_address_form") ?>' + url, function() {
                // alert('productId --- ' + productId);
                $('.user_status').val(user_status);
                $('#uname').val(userDet.name);
                $('#uemail').val(userDet.email);
                $('.customers_id').val(userDet.customers_id);
                $('#uaddress').val(userDet.address);
                $('#pincode').val(userDet.pincode);
                console.log('productDet', productDet);
            })
            // OTP matched
            openAddressModal(productDet.prod_gold_id);
        }

    });

    // function openAddressModal(pId)
    // {
    //     let productDet = '';
    //     $('.product_id').val(pId);
    //       $.ajax({
    //         url: '<?= base_url("user/getproductDetails") ?>',
    //         type: 'POST',
    //         data: { pId: pId },
    //         dataType: 'json',
    //         success: function (res) {
    //             console.log(res);
    //             if(res.status == 'success')
    //             {
    //                 productDet = res.product_details[0];

    //                 $('#final_amount_after_discount').html(productDet.formatted_discounted_price);

    //                 var userDet = res.data[0];
    //                 $('#uname').val(userDet.firstname + ' '+ userDet.lastname);
    //                 $('#uemail').val(userDet.email);
    //                 $('.user_status').val('existing');
    //                 $('#uaddress').val(userDet.address);
    //                 $('#pincode').val(userDet.pincode);
    //                 $('.customers_id').val(userDet.customers_id);
    //                 console.log('productDet - directLogin',productDet,'productDet.formatted_discounted_price',productDet.formatted_discounted_price);
    //                 $('#address-modal').modal('show');

    //            }else{
    //             alert("Something went Wrong Please Try again");
    //            }
    //         },
    //         error: function () {

    //         }
    //     });
    // }

    function updateSelectedSize() {

        const selected = document.querySelector('input[name="selected_size"]:checked');
        if (selected) {
            const size = selected.value;
            selected_Size_to_Buy = selected.value;
            console.log("Selected Size:", size);
            document.getElementById('display-size').innerText = size;
        }
    }

    window.addEventListener('DOMContentLoaded', function() {
        let selected_Size_to_Buy = '';
        updateSelectedSize();
        // Add change listener to all radios
        const radios = document.querySelectorAll('input[name="selected_size"]');
        radios.forEach(radio => {
            radio.addEventListener('change', updateSelectedSize);
        });
    });
</script>
<div class="address-modal modal fade justify-content-center" id="address-modal" data-bs-backdrop="static"
    style="height: 100vh;top:0;overflow: hidden;margin: 0;padding: 0;border-radius: 0px !important;">
    <div style="overflow-y: auto;border-radius: 0px !important;"
        class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered my-0 justify-content-center">
        <div class="modal-content body-bg border-0 br-hidden"
            style=";height: 100vh; border-radius: 16px 16px 0 0; overflow-y: auto;border-radius: 0px !important;">
            <div class="modal-body plr-15 plr-sm-30" id="address-modal-body" style="border-radius: 0px !important;">

            </div>
        </div>
    </div>
</div>


<!-- Quick View Modal -->
<div class="quickview-modal modal fade" id="quickview-modal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content body-bg border-0 br-hidden">
            <div class="modal-body ptb-30 plr-15 plr-sm-30">
                <div class="quickview-modal-header d-flex align-items-center justify-content-between meb-30">
                    <h6 class="font-18">Quickview</h6>
                    <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
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
                                                <button type="button"
                                                    class="swiper-prev swiper-prev-quickview-big secondary-btn icon-16 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle"
                                                    aria-label="Arrow previous"><i
                                                        class="ri-arrow-left-line d-block lh-1"></i></button>
                                                <button type="button"
                                                    class="swiper-next swiper-next-quickview-big secondary-btn icon-16 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle"
                                                    aria-label="Arrow next"><i
                                                        class="ri-arrow-right-line d-block lh-1"></i></button>
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
                                            <span id="formatted_discounted_price"
                                                class="new-price dominant-color heading-weight"></span>
                                            <span class="old-price heading-weight"><span class="mer-3">~</span>
                                                <span id="formatted_original_price"
                                                    class="text-decoration-line-through"></span></span>
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
                                        <span class="heading-color"><i
                                                class="ri-eye-line icon-16 mer-4 blinking"></i><span
                                                class="product-live-visitor"></span> people are viewing this product
                                            right now</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-availability">
                                        <span class="d-inline-block text-success"><span
                                                class="heading-color heading-weight mer-10">Availability:</span>In
                                            stock</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-stock">
                                        <span
                                            class="d-inline-block stock-fill text-success ptb-10 plr-15 bg-success heading-weight border-success border-radius">Hurry
                                            up! only <span class="available-stock" id="available-stock">66</span>
                                            products left in stock!</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-sold">
                                        <span class="text-danger"><i
                                                class="ri-fire-line icon-16 mer-4 blinking"></i><span
                                                class="heading-weight"><span class="product-sold-count"></span> products
                                                sold in last <span class="product-hours-count"></span>
                                                hours</span></span>
                                    </div>
                                </div>
                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-border bst"></div>
                                </div>
                                <div class="quick-info mst-15" data-animate="animate__fadeIn">
                                    <div class="product-desc">
                                        <p id="product-desc"></p>
                                    </div>
                                </div>

                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-variant">
                                        <div class="product-variant-option">
                                            <span class="d-inline-block meb-11"><span
                                                    class="heading-color heading-weight mer-10">Size:</span> <span
                                                    id="display-size"
                                                    class="d-block cust-check border-full border-radius"></span></span>
                                            <div class="product-option-block size">
                                                <ul class="ul-mt5" id="sizes">
                                                    <li>
                                                        <label class="cust-checkbox-label">
                                                            <input type="radio" name="quick-gleam-band-size"
                                                                class="cust-checkbox" value="16cm" checked>
                                                            <span
                                                                class="d-block cust-check border-full border-radius">16cm</span>
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
                                                <button type="button"
                                                    class="js-qty-adjust js-qty-adjust-minus body-color icon-16"
                                                    aria-label="Remove item"><i
                                                        class="ri-subtract-line d-block lh-1"></i></button>
                                                <input type="number" name="selected_qty" id="selected_qty"
                                                    class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                <button type="button"
                                                    class="js-qty-adjust js-qty-adjust-plus body-color icon-16"
                                                    aria-label="Add item"><i
                                                        class="ri-add-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button mst-15">
                                        <div class="row btn-row15">

                                            <div class="col-12">
                                                <a class="w-100 btn-style secondary-btn" id="buy_now_btn">Buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-border bst"></div>
                                </div>
                                <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-delivery">
                                        <span class="d-inline-block"><i
                                                class="ri-check-line heading-color icon-16 mer-4"></i>Your order will
                                            reach you within 5-7 business days</span>
                                    </div>
                                </div>
                                <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                    <div class="product-return">
                                        <span class="d-inline-block"><i
                                                class="ri-check-line heading-color icon-16 mer-4"></i>We accept returns
                                            within 30 days of purchase</span>
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

<script>
    function buyNow(pId) {
        // $('#question-pid').val(pId);
        $('.product_id').val(pId);

        // Show Bootstrap modal using jQuery


        $('#buy-now-modal').modal('show');
    }


    function updateSelectedSize() {
        const selected = document.querySelector('input[name="selected_size"]:checked');
        if (selected) {
            const size = selected.value;
            selected_Size_to_Buy = selected.value;
            document.getElementById('display-size').innerText = size;
        } else {
            selected_Size_to_Buy = 'NA';
        }
        console.log("Selected Size:", selected_Size_to_Buy);
    }

    function attachSizeListeners() {
        updateSelectedSize(); // Set default initially
        const radios = document.querySelectorAll('input[name="selected_size"]');
        radios.forEach(radio => {
            radio.addEventListener('change', updateSelectedSize);
        });
    }
</script>

<!-- buy Now Modal -->

</html>