<style>
    .popup-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.4s ease, visibility 0.4s ease;
        opacity: 1;
        visibility: visible;
    }

    .popup-wrapper.hide {
        opacity: 0;
        visibility: hidden;
    }

    .popup-container {
        background: #fff;
        width: 90%;
        max-width: 900px;
        border-radius: 10px;
        position: relative;
        display: flex;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .popup-close {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #b80000;
        color: #fff;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        text-align: center;
        line-height: 28px;
        font-size: 18px;
        cursor: pointer;
        z-index: 10;
    }

    .popup-content {
        display: flex;
        width: 100%;
    }

    .popup-left {
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        padding: 0;
    }

    .image-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: 300px;
        /* Fixed compact row height */
        gap: 0;
        width: 100%;
        height: auto;
    }

    .image-grid img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .image-grid img:last-child {
        grid-column: span 2;
    }



    .popup-right {
        width: 50%;
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #fff;
    }

    .popup-right h2 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #000;
        line-height: 1.4;
    }

    .valid-text {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
    }

    .popup-input {
        padding: 12px;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
        width: 100%;
    }

    .popup-btn {
        padding: 12px;
        background: #b80000;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .popup-container {
            flex-direction: column;
        }

        .popup-left,
        .popup-right {
            width: 100%;
        }

        .popup-right {
            padding: 20px;
        }
    }

    .popup-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
</style>

<!-- Modal Wrapper -->
<div class="popup-wrapper d-none" id="popupModal">
    <div class="popup-container">
        <!-- Close Button -->
        <div class="popup-close" id="popupClose">✕</div>

        <!-- Content Area -->
        <form action="<?= base_url() ?>user/save_subscriber_customer_details" method="post" class="popup-form"
            id="subscriptionForm">
            <div class="popup-content">
                <!-- Left Side with Images -->
                <div class="popup-left">
                    <div class="image-grid">
                        <img src="<?= base_url() ?>u_assets/assets/image/model/image2.webp" alt="Jewellery 2" />
                        <img src="<?= base_url() ?>u_assets/assets/image/model/image3.webp" alt="Jewellery 3" />
                        <img src="<?= base_url() ?>u_assets/assets/image/model/image1.webp" alt="Jewellery 1" />
                    </div>
                </div>

                <!-- Right Side with Form -->
                <div class="popup-right">
                    <h2>Register & Get <span>500 Off</span> <br>on your first purchase</h2>
                    <p class="valid-text">Valid on shopping above ₹2000</p>

                    <!-- FORM START -->
                    <div class="form-group">
                        <input type="text" name="subcriber_details" id="subscriberInput" class="popup-input"
                            placeholder="Enter your email address or mobile number here.." required
                            title="Please enter a valid 10-digit mobile number or email address"
                            oninput="validateInput(this)" />
                        <div id="validationMessage" class="validation-message"></div>
                        <button type="submit" class="popup-btn">SUBSCRIBE</button>
                    </div>
                    <!-- FORM END -->
                </div>
            </div>
        </form>

        <!-- Success Modal -->
        <div id="successModal" class="modal-overlay" style="display: none;">
            <div class="modal-box">
                <div class="checkmark">&#10004;</div>
                <p class="modal-message">Thank you for subscribing 😊</p>
            </div>
        </div>
        <style>
            .modal-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }

            .modal-box {
                background: #f0fbf4;
                padding: 30px 40px;
                border-radius: 10px;
                text-align: center;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                animation: fadeIn 0.3s ease-in-out;
            }

            .checkmark {
                font-size: 48px;
                color: green;
                margin-bottom: 15px;
            }

            .modal-message {
                font-size: 20px;
                font-weight: 600;
                color: #333;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }

                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
        </style>
        <script>
            $('#subscriptionForm').on('submit', function (e) {
                e.preventDefault(); // stop default submission

                // OPTIONAL: Ajax submission (if you want to actually submit to backend)
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        // Show success modal
                        $('#successModal').fadeIn();

                        // Hide modal after 3 seconds
                        setTimeout(function () {
                            $('#successModal').fadeOut();
                            $('#subscriptionForm')[0].reset(); // reset the form
                        }, 3000);
                    }
                });
            });
        </script>


        <style>
            .validation-message {
                color: #ff0000;
                font-size: 12px;
                margin-top: 5px;
                min-height: 18px;
            }

            .valid-input {
                border: 1px solid #28a745 !important;
            }

            .invalid-input {
                border: 1px solid #dc3545 !important;
            }
        </style>

        <script>
            function validateInput(input) {
                const value = input.value.trim();
                const validationMessage = document.getElementById('validationMessage');
                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                const mobileRegex = /^[0-9]{10}$/;

                // Clear previous validation states
                input.classList.remove('valid-input', 'invalid-input');
                validationMessage.textContent = '';

                if (value === '') {
                    return;
                }

                // Check if input is a mobile number (exactly 10 digits)
                if (/^[0-9]+$/.test(value)) {
                    if (value.length > 10) {
                        input.value = value.slice(0, 10); // Truncate to 10 digits
                    }

                    if (mobileRegex.test(input.value)) {
                        input.classList.add('valid-input');
                    } else {
                        input.classList.add('invalid-input');
                        validationMessage.textContent = 'Mobile number must be 10 digits';
                    }
                }
                // Check if input is an email
                else if (emailRegex.test(value)) {
                    input.classList.add('valid-input');
                }
                // Invalid input
                else {
                    input.classList.add('invalid-input');
                    validationMessage.textContent = 'Please enter a valid email or 10-digit mobile number';
                }
            }

            document.getElementById('subscriptionForm').addEventListener('submit', function (e) {
                const input = document.getElementById('subscriberInput');
                const value = input.value.trim();
                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                const mobileRegex = /^[0-9]{10}$/;

                if (!emailRegex.test(value) && !mobileRegex.test(value)) {
                    e.preventDefault();
                    input.classList.add('invalid-input');
                    document.getElementById('validationMessage').textContent = 'Please enter a valid email or 10-digit mobile number';
                    input.focus();
                }
            });
        </script>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const closeBtn = document.getElementById("popupClose");
        const popupWrapper = document.getElementById("popupModal");

        closeBtn.addEventListener("click", function () {
            popupWrapper.classList.add("hide");
            setTimeout(() => {
                popupWrapper.style.display = "none";
            }, 400);
        });

        // Optional: Auto-show popup after delay
        // setTimeout(() => {
        //   popupWrapper.style.display = "flex";
        //   popupWrapper.classList.remove("hide");
        // }, 3000);
    });
</script>
















<!-- header end -->
<!-- main start -->
<main id="main">
    <!-- main-slider start -->
    <section class="slider-content position-relative">
        <div class="home-slider swiper" id="home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex h-auto">
                    <div class="w-100 h-100">
                        <div class="slider-info position-relative h-100">
                            <img src="<?= base_url() ?>u_assets/assets/image/index3/slider-1.jpg"
                                class="w-100 h-100 img-fluid" alt="slider-1">
                            <div
                                class="slider-info-content d-none d-xl-block position-absolute bottom-0 start-0 end-0 z-1 section-pb plr-15 plr-sm-30 plr-xxl-50 text-center">
                                <h2
                                    class="extra-color font-32 font-sm-40 font-xl-48 font-xxl-64 section-heading-family section-heading-text section-heading-weight section-heading-lh">
                                    Majestic necklace</h2>
                                <div class="slider-btn mst-22 mst-sm-31 mst-xl-35"><a href="<?= base_url() ?>"
                                        class="btn-style dominant-btn">Shop now</a></div>
                            </div>
                            <div
                                class="d-xl-none position-absolute bottom-0 start-0 end-0 z-1 section-pb plr-15 plr-sm-30 plr-xxl-50 text-center">
                                <h2
                                    class="extra-color font-32 font-sm-40 font-xl-48 font-xxl-64 section-heading-family section-heading-text section-heading-weight section-heading-lh">
                                    Majestic necklace</h2>
                                <div class="slider-btn mst-22 mst-sm-31 mst-xl-35"><a href="<?= base_url() ?>"
                                        class="btn-style dominant-btn">Shop now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex h-auto">
                    <div class="w-100 h-100 bg-img" data-bgimg="assets/image/index3/slider-bgimg.png">
                        <div class="slider-inner-category section-ptb plr-15 plr-sm-30 plr-xxl-50">
                            <div class="section-capture text-center" data-animate="animate__fadeIn">
                                <div class="section-title">
                                    <h2 class="section-heading"># Trending item</h2>
                                </div>
                            </div>
                            <div
                                class="col-9 col-sm-12 col-md-9 col-lg-12 col-xl-10 col-xxl-10 mx-auto slider-inner-info">
                                <div class="slider-inner-wrap position-relative">
                                    <div class="home-inner-slider swiper" id="home-inner-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                <div class="single-product w-100">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?= base_url() ?>user/products" class="pro-img">
                                                                <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-1.jpg"
                                                                    class="w-100 img-fluid img1" alt="p-1">
                                                                <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-2.jpg"
                                                                    class="w-100 img-fluid img2" alt="p-2">
                                                            </a>
                                                            <div class="product-action">

                                                                <a href="javascript:void(0)" x class="quick-view">
                                                                    <span class="product-icon"><i
                                                                            class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">quickview</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="pro-content-action">
                                                                    <div class="pro-content-info">
                                                                        <div class="product-title">
                                                                            <span class="d-block meb-7">Ring /
                                                                                Shine</span>
                                                                            <span class="d-block heading-weight"><a
                                                                                    href="<?= base_url() ?>user/products"
                                                                                    class="d-block w-100 dominant-link text-truncate">Gleam
                                                                                    band</a></span>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-box heading-weight">
                                                                                <span
                                                                                    class="new-price dominant-color">&#8377;
                                                                                    79,856.00</span>
                                                                                <span class="old-price"><span
                                                                                        class="mer-3">~</span><span
                                                                                        class="text-decoration-line-through">&#8377;
                                                                                        89,856.00</span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)"
                                                                            class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span
                                                                                    class="product-bag-icon icon-16"><i
                                                                                        class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-loader-icon icon-16"><i
                                                                                        class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-check-icon icon-16"><i
                                                                                        class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to
                                                                                cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing
                                                                        and typesetting industry It is a long
                                                                        established fact that a will be distracted by
                                                                        the readable of at</p>
                                                                </div>
                                                                <div class="product-action">
                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                        <span class="product-icon">
                                                                            <span class="product-bag-icon icon-16"><i
                                                                                    class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                            <span class="product-loader-icon icon-16"><i
                                                                                    class="ri-loader-4-line d-block lh-1"></i></span>
                                                                            <span class="product-check-icon icon-16"><i
                                                                                    class="ri-check-line d-block lh-1"></i></span>
                                                                        </span>
                                                                        <span class="tooltip-text">add to cart</span>
                                                                    </a>

                                                                    <a href="#quickview-modal" data-bs-toggle="modal"
                                                                        class="quick-view">
                                                                        <span class="product-icon"><i
                                                                                class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                        <span class="tooltip-text">quickview</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                <div class="single-product w-100">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?= base_url() ?>user/products" class="pro-img">
                                                                <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-3.jpg"
                                                                    class="w-100 img-fluid img1" alt="p-3">
                                                                <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-4.jpg"
                                                                    class="w-100 img-fluid img2" alt="p-4">
                                                                <span
                                                                    class="product-label product-label-new product-label-left">New</span>
                                                            </a>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i
                                                                            class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal"
                                                                    class="quick-view">
                                                                    <span class="product-icon"><i
                                                                            class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">quickview</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="pro-content-action">
                                                                    <div class="pro-content-info">
                                                                        <div class="product-title">
                                                                            <span class="d-block meb-7">Ring /
                                                                                Chic</span>
                                                                            <span class="d-block heading-weight"><a
                                                                                    href="<?= base_url() ?>user/products"
                                                                                    class="d-block w-100 dominant-link text-truncate">Luxe
                                                                                    loop</a></span>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-box heading-weight">
                                                                                <span
                                                                                    class="new-price dominant-color">&#8377;
                                                                                    49,856.00</span>
                                                                                <span class="old-price"><span
                                                                                        class="mer-3">~</span><span
                                                                                        class="text-decoration-line-through">&#8377;
                                                                                        59,856.00</span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)"
                                                                            class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span
                                                                                    class="product-bag-icon icon-16"><i
                                                                                        class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-loader-icon icon-16"><i
                                                                                        class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-check-icon icon-16"><i
                                                                                        class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to
                                                                                cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing
                                                                        and typesetting industry It is a long
                                                                        established fact that a will be distracted by
                                                                        the readable of at</p>
                                                                </div>
                                                                <div class="product-action">
                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                        <span class="product-icon">
                                                                            <span class="product-bag-icon icon-16"><i
                                                                                    class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                            <span class="product-loader-icon icon-16"><i
                                                                                    class="ri-loader-4-line d-block lh-1"></i></span>
                                                                            <span class="product-check-icon icon-16"><i
                                                                                    class="ri-check-line d-block lh-1"></i></span>
                                                                        </span>
                                                                        <span class="tooltip-text">add to cart</span>
                                                                    </a>

                                                                    <a href="#quickview-modal" data-bs-toggle="modal"
                                                                        class="quick-view">
                                                                        <span class="product-icon"><i
                                                                                class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                        <span class="tooltip-text">quickview</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                <div class="single-product w-100">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?= base_url() ?>user/products" class="pro-img">
                                                                <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-5.jpg"
                                                                    class="w-100 img-fluid img1" alt="p-5">
                                                                <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-6.jpg"
                                                                    class="w-100 img-fluid img2" alt="p-6">
                                                            </a>
                                                            <div class="product-action">

                                                                <a href="#quickview-modal" data-bs-toggle="modal"
                                                                    class="quick-view">
                                                                    <span class="product-icon"><i
                                                                            class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">quickview</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="pro-content-action">
                                                                    <div class="pro-content-info">
                                                                        <div class="product-title">
                                                                            <span class="d-block meb-7">Ears /
                                                                                Glow</span>
                                                                            <span class="d-block heading-weight"><a
                                                                                    href="<?= base_url() ?>user/products"
                                                                                    class="d-block w-100 dominant-link text-truncate">Opal
                                                                                    stud</a></span>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-box heading-weight">
                                                                                <span
                                                                                    class="new-price dominant-color">&#8377;
                                                                                    69,856.00</span>
                                                                                <span class="old-price"><span
                                                                                        class="mer-3">~</span><span
                                                                                        class="text-decoration-line-through">&#8377;
                                                                                        79,856.00</span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)"
                                                                            class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span
                                                                                    class="product-bag-icon icon-16"><i
                                                                                        class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-loader-icon icon-16"><i
                                                                                        class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-check-icon icon-16"><i
                                                                                        class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to
                                                                                cart</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing
                                                                        and typesetting industry It is a long
                                                                        established fact that a will be distracted by
                                                                        the readable of at</p>
                                                                </div>
                                                                <div class="product-action">
                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                        <span class="product-icon">
                                                                            <span class="product-bag-icon icon-16"><i
                                                                                    class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                            <span class="product-loader-icon icon-16"><i
                                                                                    class="ri-loader-4-line d-block lh-1"></i></span>
                                                                            <span class="product-check-icon icon-16"><i
                                                                                    class="ri-check-line d-block lh-1"></i></span>
                                                                        </span>
                                                                        <span class="tooltip-text">add to cart</span>
                                                                    </a>

                                                                    <a href="#quickview-modal" data-bs-toggle="modal"
                                                                        class="quick-view">
                                                                        <span class="product-icon"><i
                                                                                class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                        <span class="tooltip-text">quickview</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-dots swiper-dots-homeinner mst-30 lh-0"
                                            data-animate="animate__fadeIn">
                                            <div class="swiper-pagination swiper-pagination-home-inner"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons swiper-buttons-homeinner d-none">
                                        <div class="swiper-buttons-wrap">
                                            <button type="button"
                                                class="swiper-prev swiper-prev-home-inner font-20 position-absolute top-50 start-0 z-1 rounded-circle"
                                                aria-label="Arrow previous"><i
                                                    class="ri-arrow-left-line d-block lh-1"></i></button>
                                            <button type="button"
                                                class="swiper-next swiper-next-home-inner font-20 position-absolute top-50 end-0 z-1 rounded-circle"
                                                aria-label="Arrow next"><i
                                                    class="ri-arrow-right-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex h-auto">
                    <div class="w-100 h-100">
                        <div class="slider-info position-relative h-100">
                            <img src="<?= base_url() ?>u_assets/assets/image/index3/slider-2.jpg"
                                class="w-100 h-100 img-fluid" alt="slider-2">
                            <div
                                class="slider-info-content d-none d-xl-block position-absolute bottom-0 start-0 end-0 z-1 section-pb plr-15 plr-sm-30 plr-xxl-50 text-center">
                                <h2
                                    class="extra-color font-32 font-sm-40 font-xl-48 font-xxl-64 section-heading-family section-heading-text section-heading-weight section-heading-lh">
                                    Diamond jewelry</h2>
                                <div class="slider-btn mst-22 mst-sm-31 mst-xl-35"><a href="<?= base_url() ?>"
                                        class="btn-style dominant-btn">Shop now</a></div>
                            </div>
                            <div
                                class="d-xl-none position-absolute bottom-0 start-0 end-0 z-1 section-pb plr-15 plr-sm-30 plr-xxl-50 text-center">
                                <h2
                                    class="extra-color font-32 font-sm-40 font-xl-48 font-xxl-64 section-heading-family section-heading-text section-heading-weight section-heading-lh">
                                    Diamond jewelry</h2>
                                <div class="slider-btn mst-22 mst-sm-31 mst-xl-35"><a href="<?= base_url() ?>"
                                        class="btn-style dominant-btn">Shop now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-buttons swiper-buttons-homeslider">
            <div class="swiper-buttons-wrap">
                <button type="button"
                    class="swiper-prev swiper-prev-homeslider font-20 position-absolute start-0 top-50 translate-middle-y z-1 msl-5 msl-sm-15 rounded-circle"
                    aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                <button type="button"
                    class="swiper-next swiper-next-homeslider font-20 position-absolute end-0 top-50 translate-middle-y z-1 mer-5 mer-sm-15 rounded-circle"
                    aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
            </div>
        </div>
        <div
            class="swiper-dots swiper-dots-homeslider d-none position-absolute bottom-0 start-50 translate-middle-x z-1 meb-15 meb-sm-30 lh-0">
            <div class="swiper-pagination swiper-pagination-homeslider d-flex flex-wrap"></div>
        </div>
    </section>
    <!-- main-slider end -->
    <!-- service-area start -->
    <section class="service-area ptb-30 extra-bg beb">
        <div class="container-fluid">
            <div class="row row-mtm">
                <div class="col-12 col-sm-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex align-items-start justify-content-lg-center">
                        <span class="service-icon width-40 dominant-color icon-40"><i
                                class="ri-box-3-line d-block lh-1"></i></span>
                        <div class="service-text psl-15">
                            <h6 class="font-18">100% Hallmark</h6>
                            <span class="d-block mst-11">Every piece you get fully check</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex align-items-start justify-content-lg-center">
                        <span class="service-icon width-40 dominant-color icon-40"><i
                                class="ri-truck-line d-block lh-1"></i></span>
                        <div class="service-text psl-15">
                            <h6 class="font-18">Free shipping</h6>
                            <span class="d-block mst-11">We ship for free a 100% safe</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex align-items-start justify-content-lg-center">
                        <span class="service-icon width-40 dominant-color icon-40"><i
                                class="ri-reset-right-line d-block lh-1"></i></span>
                        <div class="service-text psl-15">
                            <h6 class="font-18">30 Days return</h6>
                            <span class="d-block mst-11">If ever feel like exchange</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-animate="animate__fadeIn">
                    <div class="service-content d-flex align-items-start justify-content-lg-center">
                        <span class="service-icon width-40 dominant-color icon-40"><i
                                class="ri-store-2-line d-block lh-1"></i></span>
                        <div class="service-text psl-15">
                            <h6 class="font-18">24x7 live support</h6>
                            <span class="d-block mst-11">Every time customer support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-area end -->
    <!-- category-slider start -->
    <?php
    $category = $this->db->query("SELECT * FROM category WHERE status='active'")->result_array();

    // Filter categories having at least one product
    if (!empty($category)) {
        foreach ($category as $key => $row) {
            // Count active products in each category
            $product_count = $this->db->query("SELECT COUNT(*) as total FROM product_gold WHERE cat_id = " . $row['category_id'] . " AND status='active' AND label != 'Out Of Stock'")->row_array();

            // Only show categories with products
            if ($product_count['total'] > 0) {
                $category[$key]['product_count'] = $product_count['total'];
            } else {
                unset($category[$key]); // Remove if no products
            }
        }
    }
    ?>

    <!-- 🌟 CATEGORY SLIDER -->
    <section class="category-slider section-pt extra-bg bst">
        <div class="container">
            <div class="cat-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">Shop by category</h2>
                    </div>
                </div>
                <div class="cat-wrap">
                    <div class="cat-slider swiper" id="cat-slider">
                        <div class="swiper-wrapper">

                            <?php if (!empty($category)) { ?>
                                <?php foreach ($category as $cat) { ?>
                                    <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                        <div class="cat-block w-100 peb-30 plr-15 plr-sm-30 text-center">
                                            <span class="d-inline-block cat-img-circle mb-3">
                                                <img src="<?= base_url('uploads/' . $cat['category_image']) ?>"
                                                    class="img-fluid" alt="<?= $cat['category_name'] ?>">
                                            </span>
                                            <div class="cat-content">
                                                <span class="d-block dominant-color meb-6"><?= $cat['product_count'] ?>+
                                                    Item</span>
                                                <h6 class="font-18"><?= $cat['category_name'] ?></h6>
                                                <a href="<?= base_url('user/product_details_filter/' . $cat['category_id']) ?>"
                                                            class="btn-style secondary-btn mst-15">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php } ?>
                            <?php } ?>

                        </div>
                    </div>

                    <!-- Swiper Controls -->
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button type="button" class="swiper-prev swiper-prev-cat" aria-label="Arrow previous">
                                <i class="ri-arrow-left-line d-block lh-1"></i>
                            </button>
                            <button type="button" class="swiper-next swiper-next-cat" aria-label="Arrow next">
                                <i class="ri-arrow-right-line d-block lh-1"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Pagination Dots -->
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-cat"></div>
                    </div>

                    <!-- See More -->
                    <div class="view-button d-none" data-animate="animate__fadeIn">
                        <a href="<?= base_url('user/collection') ?>" class="btn-style secondary-btn">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ✨ Custom Circle Image CSS -->
    <style>
        .cat-img-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #d4af37;
            /* Optional: Golden border */
            display: inline-block;
        }

        .cat-img-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .cat-img-circle:hover img {
            transform: scale(1.05);
        }

        .cat-content h6 {
            margin-top: 10px;
            font-weight: 600;
        }
    </style>


    <!-- category-slider end -->
    <!-- banner-area start -->
    <style>
        body {
            overflow-x: hidden;
        }

        .banner-area {
            overflow-x: hidden;
        }

        .banner-block {
            width: 100%;
        }

        @media (max-width: 768px) {
            .banner-content {
                padding: 20px !important;
            }
        }
    </style>

    <section class="banner-area section-ptb extra-bg" style="padding-top: 0; padding-bottom: 0;">
        <div class="container-fluid p-0">
            <div class="row g-0 m-0">
                <div class="col-12 mt-5 p-0">
                    <div class="banner-block d-flex align-items-center position-relative" style="background: url('<?= compress_image() ?>uploads/<?= $web_banner_full[0]['banner_img'] ?>') no-repeat center center;
                            background-size: cover; height: 500px;">

                        <div class="banner-content text-start text-white ps-4 ps-md-5"
                            style="max-width: 600px; padding: 30px; border-radius: 10px;">

                            <div class="banner-subtitle text-uppercase mb-2" style="font-size: 18px;">
                                Hurry up and Get <span class="text-warning">25% Discount</span>
                            </div>

                            <h2 class="fw-bold mb-2" style="font-size: 30px; color: #fff;">
                                BUILD YOUR OWN CUSTOM MADE JEWELLERY
                            </h2>

                            <p style="font-size: 16px; margin-bottom: 20px; color: #ddd;">
                                You Can Dream It. We Can Create It.
                            </p>

                            <a href="<?= base_url() ?>user/custome_jewellery"
                                class="btn btn-danger text-uppercase fw-bold px-4 py-2">
                                Build Now
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area end -->
    <!-- category-product start -->
    <section class="category-product section-ptb">
        <div class="container">
            <div class="collection-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">New Launch Products</h2>
                    </div>
                </div>
                <div class="collection-wrap">
                    <div class="collection-slider swiper" id="feature-product-slider">
                        <div class="swiper-wrapper">
                            <?php if (!empty($new_products) && count($new_products) > 0): ?>
                                    <?php foreach ($new_products as $row): ?>
                                            <?php
                                            $images = explode("||", $row['product_image']);
                                            $main_image = !empty($images[0]) ? $images[0] : 'default.png';
                                            $second_image = !empty($images[1]) ? $images[1] : $main_image;
                                            $product_link = base_url("user/view_product_details?product_id={$row['prod_gold_id']}&prod_name={$row['product_name']}");
                                            $group_name = !empty($row['group_id']) ? getgroupname($row['group_id']) : '';

                                            // Calculate product price based on category and type
                                            $price = '---';
                                            $formatted_price = '---';
                                            $formatted_discounted_price = '---';

                                            if ($row['cat_id'] == 5) {
                                                $price = $admin->goldprice($row['prod_gold_id']);
                                                $formatted_price = number_format1($price);
                                            } elseif ($row['cat_id'] == 6) {
                                                $price = $admin->silverprice($row['prod_gold_id']);
                                                $formatted_price = number_format1($price);
                                            } elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dgold') {
                                                $price = $admin->golddiamondprice($row['prod_gold_id']);
                                                $formatted_price = number_format1($price);
                                            } elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dsilver') {
                                                $price = $admin->silverdiamondprice($row['prod_gold_id']);
                                                $formatted_price = number_format1($price);
                                            }

                                            // Calculate discount if applicable
                                            $discount_percentage = 0;
                                            $show_discount = false;

                                            if ($price != '---' && isset($row['total_discount_amt']) && $row['total_discount_amt'] > 0) {
                                                $discounted_price = $price - $row['total_discount_amt'];
                                                $formatted_discounted_price = number_format1($discounted_price);
                                                $discount_percentage = round(($row['total_discount_amt'] / $price) * 100);
                                                $show_discount = true;
                                            }
                                            ?>
                                            <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                <div class="single-product w-100">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?= base_url() ?>user/product_details/<?= $row['prod_gold_id'] ?>"
                                                                class="pro-img">
                                                                <img src="<?= compress_image() ?>uploads/<?= $main_image ?>"
                                                                    class="w-100 img-fluid img1"
                                                                    alt="<?= htmlspecialchars($row['product_name']) ?>">
                                                                <img src="<?= compress_image() ?>uploads/<?= $second_image ?>"
                                                                    class="w-100 img-fluid img2"
                                                                    alt="<?= htmlspecialchars($row['product_name']) ?>">
                                                                <?php if ($show_discount && $discount_percentage > 0): ?>
                                                                        <span
                                                                            class="product-label product-label-discount product-label-right">-<?= $discount_percentage ?>%
                                                                            off</span>
                                                                <?php endif; ?>
                                                            </a>
                                                            <div class="product-action">
                                                                <!-- <a href="javascript:void(0)" class="add-to-wishlist">
                                                            <span class="product-icon"><i
                                                                    class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                            <span class="tooltip-text">wishlist</span>
                                                        </a> -->
                                                                <a href="javascript:void(0)"
                                                                    onclick="openModal('<?= $row['prod_gold_id'] ?>')"
                                                                    class="quick-view">
                                                                    <span class="product-icon quick-view"><i
                                                                            class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">quickview</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="pro-content-action">
                                                                    <div class="pro-content-info">
                                                                        <div class="product-title">
                                                                            <span class="d-block meb-7"><?= $group_name ?></span>
                                                                            <span class="d-block heading-weight">
                                                                                <a href="<?= $product_link ?>"
                                                                                    class="d-block w-100 dominant-link text-truncate">
                                                                                    <?= htmlspecialchars($row['product_name']) ?>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-box heading-weight">
                                                                                <?php if ($show_discount): ?>
                                                                                        <span
                                                                                            class="new-price dominant-color">&#8377;<?= $formatted_discounted_price ?></span>
                                                                                        <span class="old-price">
                                                                                            <span class="mer-3">~</span>
                                                                                            <span
                                                                                                class="text-decoration-line-through">&#8377;<?= $formatted_price ?></span>
                                                                                        </span>
                                                                                <?php else: ?>
                                                                                        <span
                                                                                            class="new-price dominant-color">&#8377;<?= $formatted_price ?></span>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="product-action">
                                                                        <?php if (isset($_SESSION['cart'][$row['prod_gold_id']])): ?>
                                                                                <a href="javascript:void(0)" class="add-to-cart added">
                                                                                    <span class="product-icon">
                                                                                        <span class="product-check-icon icon-16"><i
                                                                                                class="ri-check-line d-block lh-1"></i></span>
                                                                                    </span>
                                                                                    <span class="tooltip-text">added to cart</span>
                                                                                </a>
                                                                        <?php else: ?>
                                                                                <a href="javascript:void(0)" class="add-to-cart"
                                                                                    onclick="add_in_cart2('<?= $row['prod_gold_id'] ?>',this)">
                                                                                    <span class="product-icon">
                                                                                        <span class="product-bag-icon icon-16"><i
                                                                                                class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                        <span class="product-loader-icon icon-16"><i
                                                                                                class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                        <span class="product-check-icon icon-16"><i
                                                                                                class="ri-check-line d-block lh-1"></i></span>
                                                                                    </span>
                                                                                    <span class="tooltip-text">add to cart</span>
                                                                                </a>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p><?= !empty($row['short_description']) ? htmlspecialchars($row['short_description']) : 'Premium quality jewelry with exquisite craftsmanship' ?>
                                                                    </p>
                                                                </div>
                                                                <div class="product-action">
                                                                    <?php if (isset($_SESSION['cart'][$row['prod_gold_id']])): ?>
                                                                            <a href="javascript:void(0)" class="add-to-cart added">
                                                                                <span class="product-icon">
                                                                                    <span class="product-check-icon icon-16"><i
                                                                                            class="ri-check-line d-block lh-1"></i></span>
                                                                                </span>
                                                                                <span class="tooltip-text">added to cart</span>
                                                                            </a>
                                                                    <?php else: ?>
                                                                            <a href="javascript:void(0)" class="add-to-cart"
                                                                                onclick="add_in_cart2('<?= $row['prod_gold_id'] ?>',this)">
                                                                                <span class="product-icon">
                                                                                    <span class="product-bag-icon icon-16"><i
                                                                                            class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                    <span class="product-loader-icon icon-16"><i
                                                                                            class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                    <span class="product-check-icon icon-16"><i
                                                                                            class="ri-check-line d-block lh-1"></i></span>
                                                                                </span>
                                                                                <span class="tooltip-text">add to cart</span>
                                                                            </a>
                                                                    <?php endif; ?>

                                                                    <a href="<?= $product_link ?>" class="quick-view">
                                                                        <span class="product-icon"><i
                                                                                class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                        <span class="tooltip-text">quickview</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endforeach; ?>
                            <?php else: ?>
                                    <div class="swiper-slide h-auto d-flex">
                                        <div class="alert alert-info text-center w-100">
                                            No new products found.
                                        </div>
                                    </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button type="button" class="swiper-prev swiper-prev-feature-product"
                                aria-label="Arrow previous">
                                <i class="ri-arrow-left-line d-block lh-1"></i>
                            </button>
                            <button type="button" class="swiper-next swiper-next-feature-product"
                                aria-label="Arrow next">
                                <i class="ri-arrow-right-line d-block lh-1"></i>
                            </button>
                        </div>
                    </div>
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-feature-product"></div>
                    </div>
                    <div class="view-button" data-animate="animate__fadeIn">
                        <a href="<?= base_url('user/collection') ?>" class="btn-style secondary-btn">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-product end -->
    <!-- home-about start -->
    <section class="home-about section-pt extra-bg">
        <div class="container">
            <div class="row row-mtm align-items-xl-center">
                <div class="col-12 col-lg-3 col-xl-3 text-center">
                    <span class="d-inline-block"><img
                            src="<?= base_url() ?>u_assets/assets/image/index3/home-abount-img.png"
                            class="w-100 img-fluid" alt="home-abount-img"></span>
                </div>
                <div class="col-12 col-lg-9 col-xl-9 text-center text-lg-start">
                    <div class="row justify-content-xl-between">
                        <div class="col-12 col-lg-6 col-xl-7 col-xxl-6">
                            <h2 class="section-heading" data-animate="animate__fadeIn">We have the jewellery for you all
                                most brnad.</h2>
                            <div class="mst-25 mst-xl-38">
                                <ul class="ul-mt30 justify-content-center justify-content-lg-start text-start">
                                    <li data-animate="animate__fadeIn">
                                        <div class="d-flex align-items-start">
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/home-abount-img1.png"
                                                class="width-40 img-fluid" alt="home-abount-img1">
                                            <div class="psl-15">
                                                <h6 class="font-18">Round diamond</h6>
                                                <span class="d-block mst-6">It is a long estab</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-animate="animate__fadeIn">
                                        <div class="d-flex align-items-start">
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/home-abount-img2.png"
                                                class="width-40 img-fluid" alt="home-abount-img2">
                                            <div class="psl-15">
                                                <h6 class="font-18">Emerald diamond</h6>
                                                <span class="d-block mst-6">It is a long estab</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-lg-none mst-23">
                                <p data-animate="animate__fadeIn">It was popularised in the 1960s with the release of
                                    letraset sheets containing lorem ipsum passages, and more recently with desktop
                                    publishing</p>
                                <div class="mst-23" data-animate="animate__fadeIn">
                                    <a href="<?= base_url() ?>user/about" class="btn-style secondary-btn">About
                                        story</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-12 col-lg-6 col-xl-5 d-none d-lg-flex flex-lg-column justify-content-lg-between">
                            <p data-animate="animate__fadeIn">It was popularised in the 1960s with the release of
                                letraset sheets containing lorem ipsum passages, and more recently with desktop
                                publishing</p>
                            <div class="mst-23" data-animate="animate__fadeIn">
                                <a href="<?= base_url() ?>user/about" class="btn-style secondary-btn">About story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-about end -->
    <!-- deal-area-banner start -->
    <section class="deal-area-banner section-ptb extra-bg">
        <div class="container">
            <div class="d-flex flex-wrap body-bg br-hidden">
                <div class="col-12 col-lg-6 col-xl-5 ptb-50 plr-15 plr-sm-30 plr-xxl-50">
                    <!-- deal-area start -->
                    <div class="deal-area">
                        <div class="collection-category">
                            <div class="section-capture text-center" data-animate="animate__fadeIn">
                                <div class="section-title">
                                    <h2 class="section-heading">Deal of the day</h2>
                                </div>
                            </div>
                            <div class="collection-wrap">
                                <div class="deal-slider swiper" id="deal-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                            <div class="single-product-list w-100">
                                                <div class="single-product-wrap d-flex flex-wrap">
                                                    <div class="width-120 width-sm-160 product-image">
                                                        <a href="<?= base_url() ?>user/products" class="pro-img">
                                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-7.jpg"
                                                                class="w-100 img-fluid" alt="p-7">
                                                            <span
                                                                class="product-label product-label-discount product-label-right">-5%
                                                                off</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-calc-120 width-sm-calc-160 product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block meb-7">Ears / Bold</span>
                                                                <span class="d-block heading-weight"><a
                                                                        href="<?= base_url() ?>user/products"
                                                                        class="d-block w-100 dominant-link text-truncate">Ruby
                                                                        hoop</a></span>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box heading-weight">
                                                                    <span
                                                                        class="new-price dominant-color">&#8377;49,565.00</span>
                                                                    <span class="old-price"><span
                                                                            class="mer-3">~</span><span
                                                                            class="text-decoration-line-through">&#8377;54,565.00</span></span>
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
                                                    <div class="width-120 width-sm-160 product-image">
                                                        <a href="<?= base_url() ?>user/products" class="pro-img">
                                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-9.jpg"
                                                                class="w-100 img-fluid" alt="p-9">
                                                        </a>
                                                    </div>
                                                    <div class="width-calc-120 width-sm-calc-160 product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block meb-7">Neck / Soft</span>
                                                                <span class="d-block heading-weight"><a
                                                                        href="<?= base_url() ?>user/products"
                                                                        class="d-block w-100 dominant-link text-truncate">Pearl
                                                                        link</a></span>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box heading-weight">
                                                                    <span
                                                                        class="new-price dominant-color">&#8377;89,565.00</span>
                                                                    <span class="old-price"><span
                                                                            class="mer-3">~</span><span
                                                                            class="text-decoration-line-through">&#8377;99,565.00</span></span>
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
                                                    <div class="width-120 width-sm-160 product-image">
                                                        <a href="<?= base_url() ?>user/products" class="pro-img">
                                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-11.jpg"
                                                                class="w-100 img-fluid" alt="p-11">
                                                            <span
                                                                class="product-label product-label-sale product-label-left">Sale</span>
                                                        </a>
                                                    </div>
                                                    <div class="width-calc-120 width-sm-calc-160 product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block meb-7">Wrist / Rich</span>
                                                                <span class="d-block heading-weight"><a
                                                                        href="<?= base_url() ?>user/products"
                                                                        class="d-block w-100 dominant-link text-truncate">Gold
                                                                        bead</a></span>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box heading-weight">
                                                                    <span
                                                                        class="new-price dominant-color">&#8377;79,565.00</span>
                                                                    <span class="old-price"><span
                                                                            class="mer-3">~</span><span
                                                                            class="text-decoration-line-through">&#8377;84,565.00</span></span>
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
                                                    <div class="width-120 width-sm-160 product-image">
                                                        <a href="<?= base_url() ?>user/products" class="pro-img">
                                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-13.jpg"
                                                                class="w-100 img-fluid" alt="p-13">
                                                        </a>
                                                    </div>
                                                    <div class="width-calc-120 width-sm-calc-160 product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block meb-7">Ears / Flow</span>
                                                                <span class="d-block heading-weight"><a
                                                                        href="<?= base_url() ?>user/products"
                                                                        class="d-block w-100 dominant-link text-truncate">Sway
                                                                        drop</a></span>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box heading-weight">
                                                                    <span
                                                                        class="new-price dominant-color">&#8377;29,565.00</span>
                                                                    <span class="old-price"><span
                                                                            class="mer-3">~</span><span
                                                                            class="text-decoration-line-through">&#8377;39,565.00</span></span>
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
                                                    <div class="width-120 width-sm-160 product-image">
                                                        <a href="<?= base_url() ?>user/products" class="pro-img">
                                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-15.jpg"
                                                                class="w-100 img-fluid" alt="p-15">
                                                        </a>
                                                    </div>
                                                    <div class="width-calc-120 width-sm-calc-160 product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block meb-7">Neck / Glow</span>
                                                                <span class="d-block heading-weight"><a
                                                                        href="<?= base_url() ?>user/products"
                                                                        class="d-block w-100 dominant-link text-truncate">Star
                                                                        charm</a></span>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box heading-weight">
                                                                    <span
                                                                        class="new-price dominant-color">&#8377;14,565.00</span>
                                                                    <span class="old-price"><span
                                                                            class="mer-3">~</span><span
                                                                            class="text-decoration-line-through">&#8377;19,565.00</span></span>
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
                                                    <div class="width-120 width-sm-160 product-image">
                                                        <a href="<?= base_url() ?>user/products" class="pro-img">
                                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/product/p-17.jpg"
                                                                class="w-100 img-fluid" alt="p-17">
                                                        </a>
                                                    </div>
                                                    <div class="width-calc-120 width-sm-calc-160 product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <span class="d-block meb-7">Wrist / Dazz</span>
                                                                <span class="d-block heading-weight"><a
                                                                        href="<?= base_url() ?>user/products"
                                                                        class="d-block w-100 dominant-link text-truncate">Glim
                                                                        cuff</a></span>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box heading-weight">
                                                                    <span
                                                                        class="new-price dominant-color">&#8377;64,565.00</span>
                                                                    <span class="old-price"><span
                                                                            class="mer-3">~</span><span
                                                                            class="text-decoration-line-through">&#8377;74,565.00</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="swiper-buttons-wrap">
                                        <button type="button" class="swiper-prev swiper-prev-deal"
                                            aria-label="Arrow previous"><i
                                                class="ri-arrow-left-line d-block lh-1"></i></button>
                                        <button type="button" class="swiper-next swiper-next-deal"
                                            aria-label="Arrow next"><i
                                                class="ri-arrow-right-line d-block lh-1"></i></button>
                                    </div>
                                </div>
                                <div class="swiper-dots" data-animate="animate__fadeIn">
                                    <div class="swiper-pagination swiper-pagination-deal"></div>
                                </div>
                                <div class="view-button d-none" data-animate="animate__fadeIn">
                                    <a href="<?= base_url() ?>" class="btn-style secondary-btn">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- deal-area end -->
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <!-- deal-banner start -->
                    <div class="deal-banner banner-hover position-relative height-lg-100 overflow-hidden">
                        <img src="<?= base_url() ?>u_assets/assets/image/index3/deal-banner.jpg"
                            class="w-100 height-lg-100 img-fluid" alt="deal-banner">
                        <div class="col-12 col-md-10 col-xl-9 col-xxl-8 mx-sm-auto position-absolute bottom-0 start-0 end-0 meb-15 meb-sm-30 meb-xl-50 plr-15 plr-sm-30 plr-xxl-50 timer-section countdown"
                            data-time="2027/12/31 00:00:00">
                            <div class="row row-mtm15">
                                <div class="col-3">
                                    <div class="timer-content position-relative pbp-100 text-center">
                                        <div
                                            class="timer-info position-absolute top-0 end-0 bottom-0 start-0 ptb-5 plr-3 d-flex flex-column align-items-center justify-content-center extra-bg lh-1 border-radius">
                                            <span class="day secondary-color font-18 heading-weight"></span>
                                            <span
                                                class="dominant-color font-14 mst-10 text-uppercase heading-weight">Day</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="timer-content position-relative pbp-100 text-center">
                                        <div
                                            class="timer-info position-absolute top-0 end-0 bottom-0 start-0 ptb-5 plr-3 d-flex flex-column align-items-center justify-content-center extra-bg lh-1 border-radius">
                                            <span class="hrs secondary-color font-18 heading-weight"></span>
                                            <span
                                                class="dominant-color font-14 mst-10 text-uppercase heading-weight">Hrs</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="timer-content position-relative pbp-100 text-center">
                                        <div
                                            class="timer-info position-absolute top-0 end-0 bottom-0 start-0 ptb-5 plr-3 d-flex flex-column align-items-center justify-content-center extra-bg lh-1 border-radius">
                                            <span class="min secondary-color font-18 heading-weight"></span>
                                            <span
                                                class="dominant-color font-14 mst-10 text-uppercase heading-weight">Min</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="timer-content position-relative pbp-100 text-center">
                                        <div
                                            class="timer-info position-absolute top-0 end-0 bottom-0 start-0 ptb-5 plr-3 d-flex flex-column align-items-center justify-content-center extra-bg lh-1 border-radius">
                                            <span class="sec secondary-color font-18 heading-weight"></span>
                                            <span
                                                class="dominant-color font-14 mst-10 text-uppercase heading-weight">Sec</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- deal-banner end -->
                </div>
            </div>
        </div>
    </section>
    <!-- deal-area-banner end -->
    <!-- testimonial start -->
    <!-- Include Swiper CSS (Required) -->
    <section class="testimonial section-ptb">
        <div class="container">
            <div class="section-capture text-center">
                <div class="section-title">
                    <h2 class="section-heading">Our Clients Say</h2>
                </div>
            </div>

            <div class="swiper testimonial-slider mt-4">
                <div class="swiper-wrapper">
                    <?php if (!empty($web_testimonial) && count($web_testimonial) > 0) {
                        foreach ($web_testimonial as $row) { ?>
                                    <div class="swiper-slide">
                                        <div class="testimonial-box text-center p-4 shadow rounded">
                                            <div class="d-flex justify-content-center">
                                                <img src="<?= compress_image() ?>uploads/<?= $row['testimonial_img'] ?>"
                                                    class="rounded-circle mb-3" alt="testimonial"
                                                    style="width:100px;height:100px;object-fit:cover;">
                                            </div>
                                            <h5 class="fw-bold"><?= $row['testimonial_person'] ?></h5>
                                            <p class="text-muted"><?= $row['testimonial_details'] ?></p>
                                            <div class="stars text-warning mb-2">
                                                <?php
                                                $rating = (int) $row['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    echo $i <= $rating ? '<i class="ri-star-fill"></i>' : '<i class="ri-star-line"></i>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                    } ?>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination testimonial-pagination mt-4"></div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.testimonial-slider', {
            loop: true,
            spaceBetween: 30,
            grabCursor: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonial-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });
    </script>

    <style>
        .section-title {
            margin-bottom: 20px;
        }

        .section-heading {
            font-size: 32px;
            font-weight: bold;
        }

        .swiper-slide {
            display: flex;
            height: 100%;
        }

        .testimonial-box {
            border-radius: 12px;
            transition: 0.3s;
            background: white !important;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            min-height: 340px;
            border: 1px solid #eee;
        }

        .testimonial-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stars i {
            font-size: 18px;
        }

        /* Pagination dots styling - Always visible */
        .testimonial-pagination.swiper-pagination {
            position: relative;
            text-align: center;
            margin-top: 30px;
            display: block !important;
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #ccc;
            opacity: 1;
            border-radius: 50%;
            margin: 0 6px;
            transition: 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background-color: #f65a8a;
            transform: scale(1.2);
        }

        /* Make sure pagination is visible on all screens */
        @media (min-width: 768px) {
            .testimonial-pagination.swiper-pagination {
                display: block !important;
            }
        }
    </style>




    <!-- testimonial end -->
    <!-- brand-logo start -->
    <div class="brand-logo section-ptb bst">
        <div class="container">
            <div class="brand-wrap">
                <div class="brand-slider swiper" id="brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-content text-center">
                                <a href="<?= base_url() ?>" class="d-block">
                                    <span class="d-inline-block width-120 mx-auto"><img
                                            src="<?= base_url() ?>u_assets/assets/image/index3/brand-logo1.png"
                                            class="w-100 img-fluid" alt="brand-logo1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-content text-center">
                                <a href="<?= base_url() ?>" class="d-block">
                                    <span class="d-inline-block width-120 mx-auto"><img
                                            src="<?= base_url() ?>u_assets/assets/image/index3/brand-logo2.png"
                                            class="w-100 img-fluid" alt="brand-logo2"></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-content text-center">
                                <a href="<?= base_url() ?>" class="d-block">
                                    <span class="d-inline-block width-120 mx-auto"><img
                                            src="<?= base_url() ?>u_assets/assets/image/index3/brand-logo3.png"
                                            class="w-100 img-fluid" alt="brand-logo3"></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-content text-center">
                                <a href="<?= base_url() ?>" class="d-block">
                                    <span class="d-inline-block width-120 mx-auto"><img
                                            src="<?= base_url() ?>u_assets/assets/image/index3/brand-logo4.png"
                                            class="w-100 img-fluid" alt="brand-logo4"></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="brand-content text-center">
                                <a href="<?= base_url() ?>" class="d-block">
                                    <span class="d-inline-block width-120 mx-auto"><img
                                            src="<?= base_url() ?>u_assets/assets/image/index3/brand-logo5.png"
                                            class="w-100 img-fluid" alt="brand-logo5"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-logo end -->
    <!-- blog-area start -->
    <section class="blog-area section-ptb extra-bg">
        <div class="container">
            <div class="blog-category">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
                    <div class="section-title">
                        <h2 class="section-heading">Our recently story</h2>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="blog-slider swiper" id="blog-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="<?= base_url() ?>"
                                            class="d-block banner-img position-relative br-hidden">
                                            <span
                                                class="banner-icon icon-16 position-absolute top-50 start-50 translate-middle width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1"><i
                                                    class="ri-links-line d-block lh-1"></i></span>
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/article/a-1.jpg"
                                                class="w-100 img-fluid" alt="a-1">
                                        </a>
                                    </div>
                                    <div
                                        class="blog-post-content position-relative z-1 body-bg pst-41 plr-15 plr-sm-30 peb-23 mlr-15 mlr-sm-30 text-center border-radius">
                                        <div class="blog-date position-absolute top-0 start-0 end-0 z-1"><span
                                                class="extra-color font-12 height-32 dominant-bg d-inline-flex align-items-center justify-content-center ptb-5 plr-15 text-center lh-1">25
                                                Nov</span></div>
                                        <h6 class="font-18"><a href="<?= base_url() ?>"
                                                class="d-inline-block dominant-link">Gold ring best for you</a></h6>
                                        <p class="mst-19">The generators on the internet tend repeat preded chunks
                                            necess</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="<?= base_url() ?>"
                                            class="d-block banner-img position-relative br-hidden">
                                            <span
                                                class="banner-icon icon-16 position-absolute top-50 start-50 translate-middle width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1"><i
                                                    class="ri-links-line d-block lh-1"></i></span>
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/article/a-2.jpg"
                                                class="w-100 img-fluid" alt="a-2">
                                        </a>
                                    </div>
                                    <div
                                        class="blog-post-content position-relative z-1 body-bg pst-41 plr-15 plr-sm-30 peb-23 mlr-15 mlr-sm-30 text-center border-radius">
                                        <div class="blog-date position-absolute top-0 start-0 end-0 z-1"><span
                                                class="extra-color font-12 height-32 dominant-bg d-inline-flex align-items-center justify-content-center ptb-5 plr-15 text-center lh-1">25
                                                Nov</span></div>
                                        <h6 class="font-18"><a href="<?= base_url() ?>"
                                                class="d-inline-block dominant-link">Shiny gems look so new</a></h6>
                                        <p class="mst-19">The generators on the internet tend repeat preded chunks
                                            necess</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="<?= base_url() ?>"
                                            class="d-block banner-img position-relative br-hidden">
                                            <span
                                                class="banner-icon icon-16 position-absolute top-50 start-50 translate-middle width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1"><i
                                                    class="ri-links-line d-block lh-1"></i></span>
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/article/a-3.jpg"
                                                class="w-100 img-fluid" alt="a-3">
                                        </a>
                                    </div>
                                    <div
                                        class="blog-post-content position-relative z-1 body-bg pst-41 plr-15 plr-sm-30 peb-23 mlr-15 mlr-sm-30 text-center border-radius">
                                        <div class="blog-date position-absolute top-0 start-0 end-0 z-1"><span
                                                class="extra-color font-12 height-32 dominant-bg d-inline-flex align-items-center justify-content-center ptb-5 plr-15 text-center lh-1">25
                                                Nov</span></div>
                                        <h6 class="font-18"><a href="<?= base_url() ?>"
                                                class="d-inline-block dominant-link">Fine hoop drop nice set</a></h6>
                                        <p class="mst-19">The generators on the internet tend repeat preded chunks
                                            necess</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="<?= base_url() ?>"
                                            class="d-block banner-img position-relative br-hidden">
                                            <span
                                                class="banner-icon icon-16 position-absolute top-50 start-50 translate-middle width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1"><i
                                                    class="ri-links-line d-block lh-1"></i></span>
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/article/a-4.jpg"
                                                class="w-100 img-fluid" alt="a-4">
                                        </a>
                                    </div>
                                    <div
                                        class="blog-post-content position-relative z-1 body-bg pst-41 plr-15 plr-sm-30 peb-23 mlr-15 mlr-sm-30 text-center border-radius">
                                        <div class="blog-date position-absolute top-0 start-0 end-0 z-1"><span
                                                class="extra-color font-12 height-32 dominant-bg d-inline-flex align-items-center justify-content-center ptb-5 plr-15 text-center lh-1">25
                                                Nov</span></div>
                                        <h6 class="font-18"><a href="<?= base_url() ?>"
                                                class="d-inline-block dominant-link">Pure glow band top pick</a></h6>
                                        <p class="mst-19">The generators on the internet tend repeat preded chunks
                                            necess</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="<?= base_url() ?>"
                                            class="d-block banner-img position-relative br-hidden">
                                            <span
                                                class="banner-icon icon-16 position-absolute top-50 start-50 translate-middle width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1"><i
                                                    class="ri-links-line d-block lh-1"></i></span>
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/article/a-5.jpg"
                                                class="w-100 img-fluid" alt="a-5">
                                        </a>
                                    </div>
                                    <div
                                        class="blog-post-content position-relative z-1 body-bg pst-41 plr-15 plr-sm-30 peb-23 mlr-15 mlr-sm-30 text-center border-radius">
                                        <div class="blog-date position-absolute top-0 start-0 end-0 z-1"><span
                                                class="extra-color font-12 height-32 dominant-bg d-inline-flex align-items-center justify-content-center ptb-5 plr-15 text-center lh-1">25
                                                Nov</span></div>
                                        <h6 class="font-18"><a href="<?= base_url() ?>"
                                                class="d-inline-block dominant-link">Necklace gift for her now</a></h6>
                                        <p class="mst-19">The generators on the internet tend repeat preded chunks
                                            necess</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                <div class="blog-post banner-hover">
                                    <div class="blog-main-img">
                                        <a href="<?= base_url() ?>"
                                            class="d-block banner-img position-relative br-hidden">
                                            <span
                                                class="banner-icon icon-16 position-absolute top-50 start-50 translate-middle width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1"><i
                                                    class="ri-links-line d-block lh-1"></i></span>
                                            <img src="<?= base_url() ?>u_assets/assets/image/index3/article/a-6.jpg"
                                                class="w-100 img-fluid" alt="a-6">
                                        </a>
                                    </div>
                                    <div
                                        class="blog-post-content position-relative z-1 body-bg pst-41 plr-15 plr-sm-30 peb-23 mlr-15 mlr-sm-30 text-center border-radius">
                                        <div class="blog-date position-absolute top-0 start-0 end-0 z-1"><span
                                                class="extra-color font-12 height-32 dominant-bg d-inline-flex align-items-center justify-content-center ptb-5 plr-15 text-center lh-1">25
                                                Nov</span></div>
                                        <h6 class="font-18"><a href="<?= base_url() ?>"
                                                class="d-inline-block dominant-link">Charm studs love this buy</a></h6>
                                        <p class="mst-19">The generators on the internet tend repeat preded chunks
                                            necess</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button type="button" class="swiper-prev swiper-prev-blog" aria-label="Arrow previous"><i
                                    class="ri-arrow-left-line d-block lh-1"></i></button>
                            <button type="button" class="swiper-next swiper-next-blog" aria-label="Arrow next"><i
                                    class="ri-arrow-right-line d-block lh-1"></i></button>
                        </div>
                    </div>
                    <div class="swiper-dots" data-animate="animate__fadeIn">
                        <div class="swiper-pagination swiper-pagination-blog"></div>
                    </div>
                    <div class="view-button" data-animate="animate__fadeIn">
                        <a href="<?= base_url() ?>user/blog" class="btn-style secondary-btn">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->
</main>
<!-- main end -->