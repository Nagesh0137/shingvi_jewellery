(function($) {
    "use strict";
    var $body = $("body"),
        $window = $(window),
        $bgBack = $(".bg-screen .bg-back"),
        $bgShop = $(".bg-screen .bg-shop"),
        $document = $(document);
    $window.on("load", function() {
        var $popup = $("#newslettermodal");
        setTimeout(function() {
            $popup.delay(500).modal("show");
        }, 500);
    });
    var ST = {
        init: function() {
            this.handleModal();
            this.loadPage();
            this.headerSticky();
            this.headerMenu();
            this.mobileMenu();
            this.searchField();
            this.quickView();
            this.cartDrawer();
            this.wishList();
            this.qtyAdjust();
            this.shopContent();
            this.productHorizontal();
            this.productVertical();
            this.productFull();
            this.productSingle();
            this.productJs();
            this.productFrequent();
            this.productReview();
            this.productRelated();
            this.productCompare();
            this.blogComment();
            this.aboutJs();
            this.cartPage();
            this.checkOut();
            this.invoiceJs();
            this.storeJs();
            this.accountSettings();
            this.accountProfile();
            this.accountWishlist();
            this.TicketSettings();
            this.countDown();
            this.dataBgImg();
            this.imgResize();
            this.videoJs();
            this.resizeScreen();
            this.checkboxBtn();
            this.footerProduct();
            this.backTop();
        },
        handleModal: function() {
            function handleModalOpen() {
                if($window.width() >= 1200 && $body.hasClass("modal-open")) {
                    $body.addClass("pe-0");
                }
            }
            $(".modal").on("shown.bs.modal", function() {
                handleModalOpen();
            });
            $(".modal").on("hidden.bs.modal", function() {
                $body.removeClass("pe-0");
            });
            $window.on("resize", function() {
                if($window.width() <= 1200) {
                    $body.removeClass("pe-0");
                }
                handleModalOpen();
            });
        },
        loadPage: function() {
            $body.addClass("is-loading");
            setTimeout(function() {
                $body.removeClass("is-loading");
                $body.addClass("is-loaded");
            }, 500);
        },
        headerSticky: function() {
            $.fn.sticyHeader = function(options) {
                var defaults = {
                    HeaderTarget: $(this),
                    showHeaderTop: ".header-top-area",
                    showHeaderFirst: ".header-top-first",
                    scrollHeader: 300,
                    customClass: "none",
                    mobileHeader: true
                };
                options = $.extend(defaults, options);
                return this.each(function() {
                    var HeaderTarget = options.HeaderTarget;
                    var showHeaderTop = options.showHeaderTop;
                    var showHeaderFirst = options.showHeaderFirst;
                    var scrollHeader = options.scrollHeader;
                    var customClass = options.customClass;
                    var mobileHeader = options.mobileHeader;
                    var isRefreshed = true;
                    var lastScroll = 0;
                    var isMobile = true;
                    var isResizing = false;
                    // Check if the device is mobile
                    if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Blackberry/i)) || (navigator.userAgent.match(/Windows Phone/i))) {
                        isMobile = true;
                    }
                    var createSticky = function() {
                        var targetHeight = HeaderTarget.outerHeight();
                        var targetShowTop = HeaderTarget.find(showHeaderTop).outerHeight();
                        var targetShowFirst = HeaderTarget.find(showHeaderFirst).outerHeight();
                        if($window.width() >= 1200) {
                            HeaderTarget.addClass("position-fixed top-0 start-0 end-0 z-2");
                        } else {
                            HeaderTarget.addClass("position-fixed top-0 start-0 end-0 z-2");
                        }
                        if(customClass !== "none") {
                            HeaderTarget.addClass(customClass);
                        }
                        function updatePaddingTop() {
                            $body.css({"padding-top": targetHeight});
                        }
                        updatePaddingTop();
                        function stickyHeader() {
                            targetHeight = HeaderTarget.outerHeight(); // Recalculate targetHeight on each scroll
                            targetShowTop = HeaderTarget.find(showHeaderTop).outerHeight();
                            targetShowFirst = HeaderTarget.find(showHeaderFirst).outerHeight();
                            if(isResizing) {
                                if(HeaderTarget.hasClass("sticky")) {
                                    HeaderTarget.css({"transition": "none"});
                                }
                                if(HeaderTarget.hasClass("header-sticky")) {
                                    HeaderTarget.find(showHeaderFirst).css({"transition": "none"});
                                }
                            } else {
                                if($window.scrollTop() >= 20) {
                                    HeaderTarget.find(showHeaderFirst).addClass("header-border");
                                } else {
                                    HeaderTarget.find(showHeaderFirst).removeClass("header-border");
                                }
                                if($window.scrollTop() >= scrollHeader) {
                                    HeaderTarget.addClass("sticky");
                                    const cssValue = {"transform": "translateY(-" + targetHeight + "px)"};
                                    if(!isRefreshed) {
                                        cssValue.transition = "transform 0.5s ease";
                                    }
                                    HeaderTarget.css(cssValue);
                                    isRefreshed = false;
                                } else {
                                    HeaderTarget.removeClass("sticky");
                                    HeaderTarget.css({"transform": "translateY(0px)","transition": "transform 0.5s ease"});
                                }
                                // Scroll direction check
                                if($window.scrollTop() > lastScroll) {
                                    $(".sticky").removeClass("header-sticky"); // Scrolling down
                                    HeaderTarget.find(showHeaderFirst).css({"transform": "translateY(0px)","transition": "transform 0.5s ease"});
                                } else if($window.scrollTop() < lastScroll) {
                                    $(".sticky").addClass("header-sticky"); // Scrolling up
                                    if(HeaderTarget.hasClass("header-sticky")) {
                                        const cssValue = {"transform": "translateY(" + targetShowFirst + "px)"};
                                        if(!isRefreshed) {
                                            cssValue.transition = "transform 0.5s ease";
                                        }
                                        HeaderTarget.find(showHeaderFirst).css(cssValue);
                                        isRefreshed = false;
                                    }
                                }
                                lastScroll = $window.scrollTop();
                                if(lastScroll <= scrollHeader) {
                                    $("header").removeClass("header-sticky");
                                    HeaderTarget.find(showHeaderFirst).css({"transform": "translateY(0px)","transition": "none"});
                                }
                            }
                        }
                        stickyHeader();
                        window.onscroll = function() {
                            if($window.scrollTop() >= scrollHeader) {
                                targetHeight = HeaderTarget.outerHeight(); // Recalculate targetHeight on scroll
                                updatePaddingTop();
                            }
                            stickyHeader();
                        };
                        // Resize event: Set `isResizing` flag during resize to disable transition
                        var resizeTimeout;
                        $window.on("resize", function() {
                            isResizing = true; // Set flag to indicate that the window is being resized
                            // Immediately set transition to none during resize
                            if(HeaderTarget.hasClass("sticky")) {
                                HeaderTarget.css({"transition": "none"});
                            }
                            if(HeaderTarget.hasClass("header-sticky")) {
                                HeaderTarget.find(showHeaderFirst).css({"transition": "none"});
                            }
                            // Recalculate targetHeight and other values during resize
                            targetHeight = HeaderTarget.outerHeight(); // Recalculate targetHeight
                            targetShowFirst = HeaderTarget.find(showHeaderFirst).outerHeight();
                            updatePaddingTop();
                            // Reset scroll position when resizing to prevent unwanted "appear" class triggers
                            lastScroll = $window.scrollTop(); // Preserve the scroll position after resizing
                            // clear the previous resize timeout if resizing is still ongoing
                            clearTimeout(resizeTimeout);
                            // Apply the transform value during resize
                            if(HeaderTarget.hasClass("sticky")) {
                                HeaderTarget.css({"transform": "translateY(-" + targetHeight + "px)"});
                            } else {
                                HeaderTarget.css({"transform": "translateY(0px)"}); 
                            }
                            if(HeaderTarget.hasClass("header-sticky")) {
                                HeaderTarget.find(showHeaderFirst).css({"transform": "translateY(" + targetShowFirst + "px)"});
                            } else {
                                HeaderTarget.find(showHeaderFirst).css({"transform": "translateY(0px)"});
                            }
                            // Reset transition after resizing completes
                            resizeTimeout = setTimeout(function() {
                                isResizing = false; // Reset the resize flag
                                // Restore transition back to normal after resizing is done
                                if(HeaderTarget.hasClass("sticky")) {
                                    HeaderTarget.css({"transition": "transform 0.5s ease"});
                                }
                                if(HeaderTarget.hasClass("header-sticky")) {
                                    HeaderTarget.find(showHeaderFirst).css({"transition": "transform 0.5s ease"});
                                }
                            }, 200); // Set timeout to allow resizing to settle
                        });
                    };
                    if(isMobile === true) {
                        if(mobileHeader === true) {
                            createSticky();
                        }
                    } else {
                        createSticky();
                    }
                });
            };
            var $header = $("#header");
            $header.sticyHeader({
                showHeaderTop: ".header-top-area",
                showHeaderFirst: ".header-top-first",
                scrollHeader: 300,
                mobileHeader: true
            });
        },
        headerMenu: function() {
            function checkDropdownPosition($dropdown) {
                return $dropdown.offset().left + $dropdown.outerWidth() > $window.width();
            }
            function checkDropdownBottomPosition($dropdown) {
                if(!$dropdown.length) return false;                
                var $dropdownTop = $dropdown.offset().top,
                    $dropdownHeight = $dropdown.outerHeight(),
                    $windowHeight = $window.height(),
                    $scrollTop = $window.scrollTop();
                return($dropdownTop + $dropdownHeight - $scrollTop > $windowHeight);
            }
            // hover state tracking
            var $isHoveringMenuLi = false,
                $isHoveringMenudropLi = false;
            $(".mainmenu-content").each(function() {
                var $menuLi = $(this).find(".menu-li"),
                    $menudropLi = $(this).find(".menudrop-li");
                // first-level menu hover
                $menuLi.on("mouseenter", function() {
                    $isHoveringMenuLi = true;
                    var $dropdown = $(this).find(".menu-sub");
                    if($dropdown.length && checkDropdownPosition($dropdown)) {
                        $(this).addClass("menu-right");
                    }
                }).on("mouseleave", function() {
                    $isHoveringMenuLi = false;
                    if(!$isHoveringMenudropLi) {
                        $(this).removeClass("menu-right");
                    }
                });
                // second-level (submenu) hover
                $menudropLi.on("mouseenter", function() {
                    $isHoveringMenudropLi = true;
                    var $this = $(this),
                        $parentMenuLi = $this.closest(".menu-li"),
                        $subDropdown = $this.find(".menusub-dropdown"),
                        $parentDropdown = $parentMenuLi.find(".menu-sub");
                    // check right edge collisions
                    if($subDropdown.length && checkDropdownPosition($subDropdown)) {
                        if(!checkDropdownPosition($parentDropdown)) {
                            $this.addClass("menu-right");
                        }
                    }
                    // if both dropdowns touch the right edge
                    if(checkDropdownPosition($parentDropdown) && checkDropdownPosition($subDropdown)) {
                        $parentMenuLi.addClass("menu-right");
                        $this.addClass("menu-right");
                    }
                    // check bottom overflow
                    if(checkDropdownBottomPosition($subDropdown)) {
                        $this.addClass("menu-bottom");
                    }
                }).on("mouseleave", function() {
                    $isHoveringMenudropLi = false;
                    var $parentMenuLi = $(this).closest(".menu-li");
                    $(this).removeClass("menu-right menu-bottom");
                    if(!$isHoveringMenuLi) {
                        $parentMenuLi.removeClass("menu-right");
                    }
                });
            });
        },
        mobileMenu: function() {
            var $mobile_menu = $("#mobile-menu"),
                $bgBack = $(".bg-screen .bg-back");
            // opening the mobile menu
            $document.on("click", "a.toggler-btn", function() {
                $mobile_menu.removeClass("invisible").addClass("active visible");
                $bgBack.removeClass("opacity-0 invisible").addClass("opacity-50 visible");
            });
            // closing the mobile menu
            $document.on("click", ".menu-close button.menu-close-btn, .bg-screen .bg-back", function() {
                $mobile_menu.addClass("invisible").removeClass("active visible");
                $bgBack.addClass("opacity-0 invisible").removeClass("opacity-50 visible");
            });
        },
        searchField: function() {
            // dynamically handle all search input fields
            $(".search-form").on("keyup", ".search-input", function() {
                var $searchObject = $(this).val().toLowerCase(),
                    $searchBtn = $(this).siblings("button"),
                    $searchResult = $(this).parent().siblings(".search-results"),
                    $searchText = $searchResult.find(".search-for .search-text"),
                    $searchTextTitle = $(this).closest(".search-bar").siblings().find(".search-text"),
                    $searchUl = $searchResult.find("ul.search-ul"),
                    $searchLi = $searchUl.find("li.search-li"),
                    $searchMore = $searchResult.find(".search-more"),
                    $searchFail = $searchResult.find(".search-fail");
                // enable/disable button and toggle search results visibility
                if($searchObject.length > 0) {
                    $searchBtn.prop("disabled", false);
                    $searchResult.removeClass("d-none");
                } else {
                    $searchBtn.prop("disabled", true);
                    $searchResult.addClass("d-none");
                }
                // update search text
                $searchText.text($searchObject);
                $searchTextTitle.text($searchObject);
                // filter results based on search input
                $searchLi.each(function() {
                    var isVisible = $(this).text().toLowerCase().indexOf($searchObject) > -1;
                    $(this).toggle(isVisible);
                });
                // check if there are no visible results
                var $noResult = $searchUl.children("li.search-li:visible").length === 0;
                if($noResult) {
                    $searchMore.hide();
                    $searchFail.show();
                } else {
                    $searchMore.show();
                    $searchFail.hide();
                }
            });
            // hide search results when the input is clicked
            $(".search-form").on("click", ".search-input", function() {
                $(this).siblings("button").prop("disabled", true);
                $(this).parent().siblings(".search-results").addClass("d-none");
            });
        },
        quickView: function() {
            var quickviewSwiperSmall = new Swiper(".swiper#quickview-slider-small", {
                loop: false,
                slidesPerView: 4,
                spaceBetween: 15,
                freeMode: true,
                watchSlidesProgress: true
            });
            var quickviewSwiperBig = new Swiper(".swiper#quickview-slider-big", {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: {
                    prevEl: ".swiper-prev-quickview-big",
                    nextEl: ".swiper-next-quickview-big"
                },
                thumbs: {
                    swiper: quickviewSwiperSmall
                }
            });
        },
        cartDrawer: function() {
            // open cart drawer
            $document.on("click", "a.js-cart-drawer, a.bottom-menu-cart", function() {
                miniCart();
            });
            // close cart drawer
            $document.on("click", ".drawer-close button.drawer-close-btn, .bg-screen .bg-shop", function() {
                $("#cart-drawer").addClass("invisible").removeClass("active visible");
                $(".bg-shop").addClass("opacity-0 invisible").removeClass("opacity-50 visible");
            });
           
            // function to show the mini cart
            function miniCart() {
                $("#cart-drawer").removeClass("invisible").addClass("active visible");
                $(".bg-shop").removeClass("opacity-0 invisible").addClass("opacity-50 visible");
            }
            // drawer-recommended-product js
            var swiper = new Swiper(".swiper#drawer-recommended-product-slider", {
                loop: true,
                rewind: true,
                slidesPerView: 3,
                spaceBetween: 15,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: ".swiper-prev-drawer-recommended-product",
                    nextEl: ".swiper-next-drawer-recommended-product"
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                }
            });
        },
        wishList: function() {
            $document.on("click", ".add-to-wishlist", function() {
                var $this = $(this);
                var $icon = $this.find("i");

                $this.addClass("active disabled");

                setTimeout(function() {
                    if ($icon.hasClass("ri-heart-fill")) {
                        // If already added, remove it (toggle off)
                        $icon.removeClass("ri-heart-fill").addClass("ri-heart-line");
                    } else {
                        // If not added, add to wishlist (toggle on)
                        $icon.removeClass("ri-heart-line").addClass("ri-heart-fill");
                    }

                    $this.removeClass("active disabled");
                }, 500);
            });
        },
        qtyAdjust: function() {
            $document.on("click", "button.js-qty-adjust-minus", function() {
                var $input = $(this).parent().find("input.js-qty-num"),
                    $count = parseInt($input.val(), 10) - 1;
                $count = $count < 1 ? 1 : $count;
                $input.val($count);
                $input.change();
                return false;
            });
            $document.on("click", "button.js-qty-adjust-plus", function() {
                var $input = $(this).parent().find("input.js-qty-num");
                $input.val(parseInt($input.val(), 10) + 1);
                $input.change();
                return false;
            });
        },
        shopContent: function() {
            // shop-cat-slider
            function adjustArrowPosition() {
                var $sliderHeight = $(".shop-cat-wrap .swiper-slide .shop-cat-img").height(),
                    $buttonHeight = $(".shop-cat-wrap .swiper-buttons button").outerHeight(),
                    $arrowTop = ($sliderHeight / 2) - ($buttonHeight / 2);
                $(".shop-cat-wrap .swiper-buttons button").each(function() {
                    $(this).css("top", $arrowTop + "px");
                });
            }
            var swiper = new Swiper('.swiper#shop-cat-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 6,
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-shop-cat',
                    nextEl: '.swiper-next-shop-cat'
                },
                pagination: {
                    el: ".swiper-pagination-shop-cat",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 6,
                        spaceBetween: 30
                    }
                },
                on: {
                    init: function() {
                        adjustArrowPosition();
                    },
                    slideChange: function() {
                        adjustArrowPosition();
                    },
                    resize: function() {
                        adjustArrowPosition();
                    }
                }
            });
            $window.resize(function() {
                adjustArrowPosition();
            });
            // filterDrawer
            $document.on("click", "button.shop-filter-btn", function() {
                $(".shop-filter-sidebar").addClass("active");
                $(".bg-screen .bg-back").removeClass("opacity-0 invisible").addClass("opacity-50 visible");
            });
            $document.on("click", "button.shop-sidebar-close, .bg-screen .bg-back", function() {
                $(".shop-filter-sidebar").removeClass("active");
                $(".bg-screen .bg-back").addClass("opacity-0 invisible").removeClass("opacity-50 visible");
            });
            // pricerange
            var $priceGap = 10;
            $document.on("input", ".price-input input", function(e) {
                var $priceInputFirst = $(".price-input input:first"),
                    $priceInputLast = $(".price-input input:last"),
                    $rangeValue = $(".price-container .price-slider"),
                    $rangeInputValue = $(".range-input input"),
                    $minP = parseInt($priceInputFirst.val(), 10),
                    $maxP = parseInt($priceInputLast.val(), 10),
                    $diff = $maxP - $minP;
                if($minP < 0) {
                    alert("minimum price cannot be less than 0");
                    $priceInputFirst.val(0);
                    $minP = 0;
                }
                if($maxP > 89) {
                    alert("maximum price cannot be greater than 89");
                    $priceInputLast.val(89);
                    $maxP = 89;
                }
                if($minP > $maxP - $priceGap) {
                    $priceInputFirst.val($maxP - $priceGap);
                    $minP = $maxP - $priceGap;
                    if($minP < 0) {
                        $priceInputFirst.val(0);
                        $minP = 0;
                    }
                }
                if($diff >= $priceGap && $maxP <= parseInt($rangeInputValue.last().prop("max"), 10)) {
                    if($(e.target).hasClass("min-input")) {
                        $rangeInputValue.first().val($minP);
                        var value1 = parseInt($rangeInputValue.first().prop("max"), 10);
                        $rangeValue.css("left", `${($minP / value1) * 100}%`);
                    } else {
                        $rangeInputValue.last().val($maxP);
                        var value2 = parseInt($rangeInputValue.last().prop("max"), 10);
                        $rangeValue.css("right", `${100 - ($maxP / value2) * 100}%`);
                    }
                }
            });
            $document.on("input", ".range-input input", function(e) {
                var $rangeInputValue = $(".range-input input"),
                    $priceInputFirst = $(".price-input input:first"),
                    $priceInputLast = $(".price-input input:last"),
                    $rangeValue = $(".price-container .price-slider"),
                    $minVal = parseInt($rangeInputValue.first().val(), 10),
                    $maxVal = parseInt($rangeInputValue.last().val(), 10),
                    $diff = $maxVal - $minVal;
                if($diff < $priceGap) {
                    if($(e.target).hasClass("min-range")) {
                        $rangeInputValue.first().val($maxVal - $priceGap);
                    } else {
                        $rangeInputValue.last().val($minVal + $priceGap);
                    }
                } else {
                    $priceInputFirst.val($minVal);
                    $priceInputLast.val($maxVal);
                    $rangeValue.css("left", `${($minVal / $rangeInputValue.first().prop("max")) * 100}%`);
                    $rangeValue.css("right", `${100 - ($maxVal / $rangeInputValue.last().prop("max")) * 100}%`);
                }
            });
            // special-product-slider
            var swiper = new Swiper('.swiper#special-product-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 1,
                grid: {
                    rows: 3,
                    fill: 'row' | 'column'
                },
                spaceBetween: 15,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-special-product',
                    nextEl: '.swiper-next-special-product'
                },
                pagination: {
                    el: ".swiper-pagination-special-product",
                    clickable: true
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                }
            });
            // sortby
            var $sortBy = $(".shop-short #sortby"),
                $selectWrap = $(".shop-short ul#select-wrap"),
                $selectWrapper = $(".shop-short ul#select-wrap li a"),
                $sortTitle = $(".shop-short a.short-title .sort-title");
            $sortBy.on("change", function() {
                var $selectedOption = $(this).val();
                $selectWrap.find("li").removeClass("selected");
                $selectWrapper.removeClass("secondary-color extra-bg").addClass("body-dominant-color");
                $selectWrap.find("li:has([data-value='" + $selectedOption + "'])").addClass("selected");
                $selectWrap.find("li:has([data-value='" + $selectedOption + "']) a").addClass("secondary-color extra-bg").removeClass("body-dominant-color");
                $sortTitle.text($selectWrap.find("li.selected a").text());
            });
            $selectWrap.on("click", "li", function() {
                var selectedValue = $(this).find("a").data("value");
                $sortBy.val(selectedValue).trigger("change");
            });
            // shop-grid-list
            $document.on("click", "button.shop-view-btn", function() {
                var $shopViewBtn = $("button.shop-view-btn");
                $shopViewBtn.removeClass("dominant-color disabled").addClass("body-color");
                $(this).addClass("dominant-color disabled").removeClass("body-color");                
                var $shopProductWrap = $(".shop-product-wrap"),
                    $dataView = $(this).attr("data-view");
                if($shopProductWrap.hasClass("data-grid") || $shopProductWrap.hasClass("data-list")) {
                    $shopProductWrap.removeClass("data-grid data-list");
                }
                $shopProductWrap.addClass("data-" + $dataView);
                var $shopCol = $(".shop-col"),
                    $shopColWithout = $(".without-shop-sidebar .shop-col");
                if($shopCol.hasClass("col-6 col-md-4") || $shopColWithout.hasClass("col-6 col-md-4 col-xl-3")) {
                    $shopCol.removeClass("col-6 col-md-4").addClass("col-12");
                    $shopColWithout.removeClass("col-6 col-md-4 col-xl-3").addClass("col-12");
                } else {
                    $shopCol.addClass("col-6 col-md-4").removeClass("col-12");
                    $shopColWithout.addClass("col-6 col-md-4 col-xl-3").removeClass("col-12");
                }
            });
        },
        productHorizontal: function() {
            var swiperSmall = new Swiper(".swiper#slider-small-h", {
                loop: false,
                slidesPerView: 4,
                spaceBetween: 15,
                freeMode: true,
                watchSlidesProgress: true
            });
            var swiperBig = new Swiper(".swiper#slider-big-h", {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: {
                    prevEl: ".swiper-prev-big",
                    nextEl: ".swiper-next-big"
                },
                thumbs: {
                    swiper: swiperSmall
                }
            });
        },
        productVertical: function() {
            if($(".swiper#slider-big-v").length && $(".swiper#slider-small-v").length) {
                function setMaxHeight() {
                    if(window.matchMedia("(min-width: 576px)").matches) {
                        var $bigSliderHeight = $(".swiper#slider-big-v").height();
                        $(".swiper#slider-small-v").css("max-height", $bigSliderHeight + "px");
                    } else {
                        $(".swiper#slider-small-v").css("max-height", "");
                    }
                }
                setMaxHeight();
                var swiperSmall = new Swiper(".swiper#slider-small-v", {
                    loop: false,
                    direction: "vertical",
                    slidesPerView: "auto",
                    spaceBetween: 15,
                    mousewheel: true,
                    slideToClickedSlide: true,
                    loopedSlides: 50,
                    freeMode: true,
                    watchSlidesProgress: true,
                    breakpoints: {
                        0: {
                            direction: "horizontal",
                            slidesPerView: 4
                        },
                        320: {
                            direction: "horizontal",
                            slidesPerView: 4
                        },
                        576: {
                            direction: "vertical",
                            slidesPerView: "auto"
                        }
                    },
                    on: {
                        init: function() {
                            setMaxHeight();
                        },
                        slideChange: function() {
                            setMaxHeight();
                        },
                        resize: function() {
                            setMaxHeight();
                        }
                    }
                });
                var swiperBig = new Swiper(".swiper#slider-big-v", {
                    loop: false,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    navigation: {
                        prevEl: ".swiper-prev-big",
                        nextEl: ".swiper-next-big"
                    },
                    thumbs: {
                        swiper: swiperSmall
                    }
                });
                $window.on("appear resize", function() {
                    setMaxHeight();
                    swiperBig.update();
                    swiperSmall.update();
                });
            }
        },
        productFull: function() {
            var swiperBigFull = new Swiper(".swiper#slider-big-f", {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: {
                    prevEl: ".swiper-prev-big",
                    nextEl: ".swiper-next-big"
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                }
            });
        },
        productSingle: function() {
            var swiperBig = new Swiper(".swiper#slider-big-s", {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: {
                    prevEl: ".swiper-prev-big",
                    nextEl: ".swiper-next-big"
                },
                pagination: {
                    el: ".swiper-pagination-big",
                    clickable: true
                }
            });
        },
        productJs: function() {
            // product-img magnificpopup js
            $document.on("click", "a.full-view", function(e) {
                e.preventDefault();
                var $magnificProduct = $(this).closest(".product-img-big").find(".product-swiper-wrapper");
                $magnificProduct.magnificPopup({
                    delegate: 'a.product-thumbnail', // important: only target thumbnail links
                    type: 'image',
                    showCloseBtn: true,
                    closeBtnInside: false,
                    midClick: true,
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1]
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                    }
                });
                // Open clicked image, not first
                $(this).trigger("click");
            });
            // product visitors and sales over time js
            var $maxVisitors = 200,
                $minVisitors = 6,
                $maxSold = 30,
                $minSold = 10,
                $maxHours = 24,
                $minHours = 1,
                $delay = 3000;
            function updateVisitorCounts() {
                $(".product-live-visitor").each(function() {
                    var $countVisitors = Math.floor(Math.random() * ($maxVisitors - $minVisitors + 1) + $minVisitors);
                    $(this).html($countVisitors);
                });
            }
            function updateSoldCounts() {
                $(".product-sold-count").each(function(index) {
                    var $countSold = Math.floor(Math.random() * ($maxSold - $minSold + 1) + $minSold);
                    $(".product-sold-count").eq(index).html($countSold);
                    var $countHour = Math.floor(Math.random() * ($maxHours - $minHours + 1) + $minHours);
                    $(".product-hours-count").eq(index).html($countHour);
                });
            }
            updateVisitorCounts();
            updateSoldCounts();
            setInterval(() => {
                updateVisitorCounts();
                updateSoldCounts();
            }, $delay);
            // productzoom js
            var $proZoom = $("img.zoom");
            function initZoom() {
                if(window.matchMedia("(min-width: 1200px)").matches) {
                    $proZoom.each(function() {
                        $(this).wrap('<span class="pro-zoom" style="display:block"></span>').css("display", "block").parent().zoom({
                            url: $(this).attr("data-zoom")
                        });
                    });
                } else {
                    $proZoom.each(function() {
                        var $parent = $(this).parent(".pro-zoom");
                        if($parent.length) {
                            $parent.find('.zoomImg').unwrap().remove();
                            $parent.remove();
                        }
                    });
                }
            }
            function initZoomOnResize() {
                $window.resize(initZoom);
            }
            initZoom();
            initZoomOnResize();
            // productshare js
            var $currentURL = window.location.href,
                $CopyURL = $("input.copy-url"),
                $CopyBtn = $("button.copy-btn");
            $CopyURL.val($currentURL);
            $CopyBtn.on("click", function() {
                var $copyLink = $("input#copy-link");
                $copyLink.select();
                if(navigator.clipboard) {
                    navigator.clipboard.writeText($copyLink.val()).then(function() {
                        console.log("URL copied to clipboard!");
                    }).catch(function(err) {
                        console.error("Failed to copy text: ", err);
                    });
                } else {
                    document.execCommand("copy");
                }
            });
        },
        productFrequent: function() {
            function updateDefaultValues() {
                var $newTotal = 0,
                    $oldTotal = 0,
                    $priceSave = 0,
                    $discountPrice = 0;
                // update freq-new-price and freq-old-price for each frequent-content
                $(".frequent-content").each(function() {
                    var $freqNewPrice = $(this).find(".freq-new-price"),
                        $freqOldPrice = $(this).find(".freq-old-price"),
                        $newPrice = parseFloat($freqNewPrice.data("new-price").replace(/[^0-9.-]+/g,"")),
                        $oldPrice = parseFloat($freqOldPrice.data("old-price").replace(/[^0-9.-]+/g,""));

                    $freqNewPrice.text("$" + $newPrice.toFixed(2));
                    $freqOldPrice.text("$" + $oldPrice.toFixed(2));
                });
                // calculate totals, price save, discount, and manage active classes
                $(".frequent-content input[type='checkbox']").each(function() {
                    var $frequentContent = $(this).closest(".frequent-content"),
                        $freqNewPrice = parseFloat($frequentContent.find(".freq-new-price").text().replace(/[^0-9.-]+/g,"")),
                        $freqOldPrice = parseFloat($frequentContent.find(".freq-old-price").text().replace(/[^0-9.-]+/g,"")),
                        $imgId = $(this).data("img-id");
                    if($(this).prop("checked")) {
                        $newTotal += $freqNewPrice;
                        $oldTotal += $freqOldPrice;
                        $(".freq-img img[data-img-id='" + $imgId + "']").parent().addClass("active");
                    } else {
                        $(".freq-img img[data-img-id='" + $imgId + "']").parent().removeClass("active");
                    }
                });
                // calculate price save and discount
                $priceSave = $oldTotal - $newTotal;
                $discountPrice = ($priceSave / $oldTotal * 100).toFixed(0) + "%";
                // update the DOM with the calculated values
                $(".freq-new-total").text("$" + $newTotal.toFixed(2)).attr("data-new-total", "$" + $newTotal.toFixed(2));
                $(".freq-old-total").text("$" + $oldTotal.toFixed(2)).attr("data-old-total", "$" + $oldTotal.toFixed(2));
                $(".freq-price-save").text("$" + $priceSave.toFixed(2)).attr("data-price-save", "$" + $priceSave.toFixed(2));
                $(".freq-discount-price").text($discountPrice).attr("data-discount-price", $discountPrice);
                // show/hide select/deselect buttons
                var $freqAllChecked = $(".frequent-content input[type='checkbox']").not(":disabled").length === $(".frequent-content input[type='checkbox']:checked").not(":disabled").length;
                $(".freq-select-btn").toggleClass("d-none", $freqAllChecked);
                $(".freq-deselect-btn").toggleClass("d-none", !$freqAllChecked);
            }
            // initialize values on page load
            updateDefaultValues();
            // update values whenever a checkbox is changed
            $(".frequent-form input[type='checkbox']").on("change", function() {
                updateDefaultValues();
            });
            // handle the Select All button click
            $(".freq-select-btn").on("click", function() {
                $(".frequent-content input[type='checkbox']").not(":disabled").prop("checked", true).each(function() {
                    var $imgId = $(this).data("img-id");
                    $(".freq-img img[data-img-id='" + $imgId + "']").parent().addClass("active");
                });
                updateDefaultValues();
            });
            // handle the Deselect All button click
            $(".freq-deselect-btn").on("click", function() {
                $(".frequent-content input[type='checkbox']").not(":disabled").prop("checked", false).each(function() {
                    var $imgId = $(this).data("img-id");
                    $(".freq-img img[data-img-id='" + $imgId + "']").parent().removeClass("active");
                });
                updateDefaultValues();
            });
        },
        productReview: function() {
            $(".product-review").each(function() {
                var $productReview = $(this);
                $document.on("click", "button.write-review-btn", function() {
                    $productReview.find("button.write-review-btn").addClass("d-none");
                    $productReview.find("button.close-review-btn").removeClass("d-none");
                    $productReview.find(".product-review-form").removeClass("d-none");
                });
                $document.on("click", "button.close-review-btn", function() {
                    $productReview.find("button.close-review-btn").addClass("d-none");
                    $productReview.find("button.write-review-btn").removeClass("d-none");
                    $productReview.find(".product-review-form").addClass("d-none");
                });
                function update() {
                    var $totalReviews = 0,
                        $totalScore = 0;
                    $productReview.find(".product-review-count").each(function() {
                        var $numberOfReviews = parseInt($(this).find(".product-review-number").data("number"), 10),
                            $ratingValue = parseInt($(this).find(".product-review-stars").text(), 10);
                        $totalReviews += $numberOfReviews;
                        $totalScore += $numberOfReviews * $ratingValue;
                    });
                    // average review
                    var $avgReview = $totalScore / $totalReviews;
                    $productReview.find(".product-review-rating").find("span[data-id]").text($avgReview.toFixed(2));
                    // existing score
                    var $existingScore = $productReview.find(".product-review-rating").find("span[data-score]").data("score");
                    $productReview.find(".product-review-rating").find("span[data-score]").text($existingScore);
                    // total review
                    $productReview.find(".product-review-text").find("span[data-base]").text($totalReviews);
                    $productReview.find(".product-review-count").each(function() {
                        var $numberOfReviews = parseInt($(this).find(".product-review-number").data("number")),
                            $progressBarWidth = ($numberOfReviews / $totalReviews) * 100,
                            $formattedWidth = parseFloat($progressBarWidth.toFixed(2));
                        $(this).find('.product-review-number').text($formattedWidth + '%');
                        $(this).find('.product-review-progress-width').css('width', $formattedWidth + '%');
                    });
                    var $fullStars = Math.floor($avgReview),
                        $halfStar = Math.ceil($avgReview) - $fullStars,
                        $emptyStars = 5 - $fullStars - $halfStar;
                    // clear existing stars
                    $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i").removeClass("ri-star-fill ri-star-line ri-star-half-line");
                    // fill full stars
                    for(var i = 0; i < $fullStars; i++) {
                        $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i:eq(" + i + ")").addClass("ri-star-fill");
                    }
                    // fill half star if necessary
                    if($halfStar > 0) {
                        $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i:eq(" + $fullStars + ")").addClass("ri-star-half-line");
                    }
                    // fill empty stars
                    for(var j = $fullStars + (($halfStar > 0) ? 1 : 0); j < 5; j++) {
                        $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i:eq(" + j + ")").addClass("ri-star-line");
                    }                    
                }
                update();
                // rating functionality
                $document.on("click", ".product-review-ratting .product-ratting span.review-ratting span.review-star i", function() {
                    var clickedIndex = $(this).index();
                    $(this).prevAll("i").addBack().removeClass("ri-star-line");
                    $(this).prevAll("i").addBack().addClass("ri-star-fill");
                    $(this).nextAll("i").removeClass("ri-star-fill");
                    $(this).nextAll("i").addClass("ri-star-line");
                });
                // function to update attachment count
                function updateAttachmentCount() {
                    var attachmentCount = $(".review-attachment-uploaded li").length;
                    var attachmentCountElement = $(".review-attachment-count");
                    if(attachmentCount > 0) {
                        attachmentCountElement.removeClass("d-none");
                        attachmentCountElement.text(attachmentCount + " attachment" + (attachmentCount > 1 ? "s" : ""));
                    } else {
                        attachmentCountElement.addClass("d-none").text(attachmentCount + " attachment" + (attachmentCount > 1 ? "s" : "")); // clear text when attachment count is 0
                    }
                }
                // function to update uploaded images
                function updateUploadedImages(input) {
                    var attachmentUploaded = $(".review-attachment-uploaded");
                    var uploadedImages = input.files;
                    var attachmentCount = uploadedImages.length;
                    var attachmentCountElement = $(".review-attachment-count");
                    if(attachmentCount > 0) {
                        attachmentUploaded.closest(".field-attached").removeClass("d-none"); // show attached files section
                        Array.from(uploadedImages).forEach(file => {
                            // append uploaded image HTML to review-attachment-uploaded section
                            var uploadedImageHTML = `
                                <li class="review-attachment-item">
                                    <div class="position-relative">
                                        <button type="button" class="attachmentremove-btn extra-color position-absolute secondary-bg rounded-circle" aria-label="Remove"><i class="ri-close-line d-block lh-1"></i></button>
                                        <a href="javascript:void(0)" class="d-block ptb-4 plr-4 body-bg border-full br-hidden">
                                            <img src="${URL.createObjectURL(file)}" class="img-fluid" alt="${file.name}">
                                        </a>
                                    </div>
                                </li>`;
                            attachmentUploaded.append(uploadedImageHTML);
                        });
                    }
                    updateAttachmentCount(); // update attachment count after uploading images
                }
                // event listener for removing attachments
                $document.on("click", ".attachmentremove-btn", function() {
                    $(this).closest(".review-attachment-item").remove();
                    updateAttachmentCount(); // update attachment count after removing an attachment
                });
                // event listener for file input change
                $document.on("change", "#review-img", function() {
                    updateUploadedImages(this);
                });
                // function to reset form fields
                function resetFormFields() {
                    $(".product-review-form input[type=text], .product-review-form input[type=email], .product-review-form textarea").val('');
                    $(".product-review-form .product-review-ratting .product-ratting span.review-ratting span.review-star i").removeClass("ri-star-fill").addClass("ri-star-line");
                }
                // function to reset uploaded images
                function resetUploadedImages() {
                    $("#review-img").val(''); // clear the file input value
                    $(".review-attachment-uploaded").empty(); // remove uploaded image previews
                    $(".review-attachment-count").addClass("d-none").text("0 attachments"); // hide attachment count
                }
                // submit review functionality
                $document.on("click", ".review-submit", function() {
                    var reviewStars = $(".product-review-form .ri-star-fill").length; // count filled stars from the form
                    var reviewName = $("#review-name").val();
                    var reviewEmail = $("#review-email").val();
                    var reviewTitle = $("#review-title").val();
                    var reviewMessage = $("#review-message").val();
                    var uploadedImages = $("#review-img")[0].files; // get the uploaded files
                    if(reviewName === "") {
                        alert("Please enter your name.");
                        return;
                    } else if(reviewEmail === "") {
                        alert("Please enter your email.");
                        return;
                    } else if(reviewStars === "") {
                        alert("Please select a rating.");
                        return;
                    } else if(reviewTitle === "") {
                        alert("Please enter a review title.");
                        return;
                    } else if(reviewMessage === "") {
                        alert("Please enter your review message.");
                        return;
                    }
                    // get current date
                    var currentDate = new Date().toLocaleDateString("en-US", { year: 'numeric', month: 'long', day: 'numeric' });
                    // generate review star HTML
                    var reviewStarHTML = '';
                    for(var i = 0; i < reviewStars; i++) {
                        reviewStarHTML += '<i class="ri-star-fill"></i>';
                    }
                    for(var j = reviewStars; j < 5; j++) {
                        reviewStarHTML += '<i class="ri-star-line"></i>';
                    }
                    // create new product-review-detail structure and prepend
                    var newReviewDetail = `
                        <div class="product-review-detail">
                            <div class="product-reviewer-info d-flex flex-wrap align-items-center">
                                <span class="width-48 height-48 secondary-color icon-16 d-flex align-items-center justify-content-center overflow-hidden rounded-circle"><i class="ri-user-line d-block lh-1"></i></span>
                                <h6 class="product-reviewer-name width-calc-48 font-16 psl-15">${reviewName}</h6>
                            </div>
                            <div class="product-reviewer-date mst-12">Reviwed on ${currentDate}</div>
                            <div class="product-review-love mst-11">
                                <div class="product-ratting">
                                    <span class="review-ratting">
                                        <span class="review-star icon-16">
                                            ${reviewStarHTML}
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="product-reviewer-subject heading-color heading-weight mst-12">${reviewTitle}</div>
                            <p class="product-reviewer-review mst-5">${reviewMessage}</p>
                            <div class="product-reviewer-attachment mst-8">
                                <ul class="ul-mt5">
                                    ${Array.from(uploadedImages).map(file => `<li><img src="${URL.createObjectURL(file)}" class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden" alt="${file.name}"></li>`).join('')}
                                </ul>
                            </div>
                        </div>`;
                    $(".product-review-comment .row").prepend(newReviewDetail);
                    // log review email value
                    console.log("Review Email:", reviewEmail);
                    // update total reviews count
                    var $totalReviews = parseInt($productReview.find(".product-review-text span[data-base]").text(), 10);
                    $totalReviews++; // Increment the count
                    $productReview.find(".product-review-text span[data-base]").text($totalReviews);
                    var ratingValue = $(".product-review-form .ri-star-fill").length;
                    // update the data-number attribute of the corresponding rating count with the new count
                    var ratingCountIndex = 5 - ratingValue; // calculate the index of the rating count
                    var $ratingCount = $productReview.find(".product-review-count").eq(ratingCountIndex).find(".product-review-number");
                    var newRatingCount = parseInt($ratingCount.attr("data-number")) + 1;
                    $ratingCount.attr("data-number", newRatingCount);
                    // calculate average review score
                    var $totalScore = 0;
                    $productReview.find(".product-review-count").each(function() {
                        var $numberOfReviews = parseInt($(this).find(".product-review-number").attr("data-number"));
                        var $ratingValue = parseInt($(this).find(".product-review-stars").text());
                        $totalScore += $numberOfReviews * $ratingValue;
                    });
                    var $avgReview = $totalScore / $totalReviews;
                    $productReview.find(".product-review-rating").find("span[data-id]").text($avgReview.toFixed(2));
                    // calculate the number of full stars, half star, and empty stars
                    var $fullStars = Math.floor($avgReview);
                    var $halfStar = Math.ceil($avgReview) - $fullStars;
                    var $emptyStars = 5 - $fullStars - $halfStar;
                    // clear existing stars
                    $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i").removeClass("ri-star-fill ri-star-line ri-star-half-line");
                    // fill full stars
                    for(var i = 0; i < $fullStars; i++) {
                        $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i:eq(" + i + ")").addClass("ri-star-fill");
                    }
                    // fill half star if necessary
                    if($halfStar > 0) {
                        $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i:eq(" + $fullStars + ")").addClass("ri-star-half-line");
                    }
                    // fill empty stars
                    for(var j = $fullStars + (($halfStar > 0) ? 1 : 0); j < 5; j++) {
                        $productReview.find(".product-star .product-ratting span.review-ratting span.review-star i:eq(" + j + ")").addClass("ri-star-line");
                    }
                    // update the width of product-review-progress-width based on each review count
                    $productReview.find(".product-review-count").each(function() {
                        var $numberOfReviews = parseInt($(this).find(".product-review-number").attr("data-number"), 10);
                        var $progressBarWidth = ($numberOfReviews / $totalReviews) * 100;
                        var $formattedWidth = parseFloat($progressBarWidth.toFixed(2));
                        $(this).find('.product-review-number').text($formattedWidth + '%');
                        $(this).find('.product-review-progress-width').css('width', $formattedWidth + '%');
                    });
                    // reset form fields and uploaded images
                    resetFormFields();
                    resetUploadedImages();
                });
                // cancel review functionality
                $document.on("click", ".review-cancel", function() {
                    // Reset form fields and uploaded images
                    resetFormFields();
                    resetUploadedImages();
                    $productReview.find("button.close-review-btn").addClass("d-none");
                    $productReview.find("button.write-review-btn").removeClass("d-none");
                    $productReview.find(".product-review-form").addClass("d-none");
                });
            });
        },
        productRelated: function() {
            // related-slider default id
            var $relatedSlider = ".swiper#related-slider",
                $breakPoints = {
                0: {
                    slidesPerView: 2,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 15
                },
                320: {
                    slidesPerView: 2,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 15
                },
                360: {
                    slidesPerView: 2,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 15
                },
                576: {
                    slidesPerView: 2,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 30
                },
                768: {
                    slidesPerView: 3,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 3,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 4,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 30
                }
            };
            // check #related-slider-full exists
            if($(".swiper#related-slider-full").length) {
                $relatedSlider = "#related-slider-full";
                $breakPoints[1400] = {
                    slidesPerView: 5,
                    grid: {
                        rows: 1,
                        fill: 'row' | 'column',
                    },
                    spaceBetween: 30
                };
            }
            // related-slider js
            function adjustArrowPosition() {
                var $sliderHeight = $(".collection-wrap .swiper-slide").height(),
                    $buttonHeight = $(".collection-wrap .swiper-buttons button").outerHeight(),
                    $arrowTop = ($sliderHeight / 2) - ($buttonHeight / 2);
                $(".collection-wrap .swiper-buttons button").each(function() {
                    $(this).css("top", $arrowTop + "px");
                });
            }
            var swiper = new Swiper($relatedSlider, {
                loop: false,
                rewind: true,
                grid: {
                    rows: 1,
                    fill: 'row' | 'column'
                },
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-related',
                    nextEl: '.swiper-next-related'
                },
                pagination: {
                    el: ".swiper-pagination-related",
                    clickable: true
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: $breakPoints,
                on: {
                    init: function() {
                        adjustArrowPosition();
                    },
                    slideChange: function() {
                        adjustArrowPosition();
                    },
                    resize: function() {
                        adjustArrowPosition();
                    }
                }
            });
            $window.resize(function() {
                adjustArrowPosition();
            });
        },
        productCompare: function() {
            $document.on("keyup", ".compare-search .compare-search-input", function() {
                var $compareSearch = $(this).closest(".compare-search"),
                    $compareSearchQuery = $(this).val().toLowerCase(),
                    $compareSearchFound = false;
                $compareSearch.find("ul li").each(function() {
                    var $compareProductName = $(this).data("name").toLowerCase();
                    if($compareProductName.includes($compareSearchQuery)) {
                        $(this).show();
                        $compareSearchFound = true;
                    } else {
                        $(this).hide();
                    }
                });
                if(!$compareSearchFound) {
                    $compareSearch.find(".compare-product-results-fail").removeClass("d-none");
                } else {
                    $compareSearch.find(".compare-product-results-fail").addClass("d-none");
                }
            });
            $document.on("input", ".compare-search .compare-search-input", function() {
                if($(this).val() === "") {
                    var $compareSearch = $(this).closest(".compare-search");
                    $compareSearch.find("ul li").show();
                    $compareSearch.find(".compare-product-results-fail").addClass("d-none");
                }
            });
        },
        blogComment: function() {
            $document.on("click", ".article-cmt-edit", function() {
                var $articleCmtEdit = $(this);
                if($articleCmtEdit.parents(".article-cmt-red").siblings(".article-cmt-text").hasClass("d-none")) {
                    $(this).parent().parent().addClass("d-none");
                    $(this).parents(".article-cmt-red").siblings(".article-cmt-text").removeClass("d-none");
                    $(this).parents(".article-cmt-red").siblings(".article-cmt-desc").addClass("d-none");
                }
            });
            $document.on("click", ".article-edit-post, .article-edit-cancel", function() {
                var $articleEditPost = $(this);
                if($articleEditPost.parents(".article-cmt-text").siblings(".article-cmt-desc").hasClass("d-none")) {
                    $(this).parents(".article-cmt-text").addClass("d-none");
                    $(this).parents(".article-cmt-text").siblings(".article-cmt-desc").removeClass("d-none");
                    $(this).parents(".article-cmt-text").siblings(".article-cmt-red").find(".article-edit-reply").parent().removeClass("d-none");
                }
            });
            $document.on("click", ".article-reply-btn", function() {
                var $articleReplyBtn = $(this);
                if($articleReplyBtn.parents(".article-cmt-red").siblings(".article-reply-form").hasClass("d-none")) {
                    $(this).parent().addClass("d-none");
                    $(this).parents(".article-cmt-red").siblings(".article-reply-form").removeClass("d-none");
                }
            });
            $document.on("click", ".article-reply-post, .article-cancel-post", function() {
                var $articleReplyPost = $(this);
                if($articleReplyPost.parents(".article-reply-form").siblings(".article-cmt-red").find(".article-reply-btn").parent().hasClass("d-none")) {
                    $(this).parents(".article-reply-form").addClass("d-none");
                    $(this).parents(".article-reply-form").siblings(".article-cmt-red").find(".article-reply-btn").parent().removeClass("d-none");
                }
            });
        },
        aboutJs: function() {
            // abt-counter js
            $window.scroll(function() {
                var $count_number = $(".count-number");
                $count_number.each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({countNum: $this.text()}).animate({
                        countNum: countTo
                    },
                    {
                        duration: 3000,
                        easing: 'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
            });
        },
        cartPage: function() {
            // cart-edit-close-cancel
            $document.on("click", "form button.cart-code-edit", function() {
                var $cartCodeEditBtn = $(this);
                $cartCodeEditBtn.addClass("d-none");
                $cartCodeEditBtn.siblings(".cart-code-close").removeClass("d-none");
                $cartCodeEditBtn.parent().siblings().find(".cart-detail-info").addClass("d-none");
                $cartCodeEditBtn.parent().siblings().find(".cart-detail-form").removeClass("d-none");
            });
            $document.on("click", "form button.cart-code-close", function() {
                var $cartCodeCloseBtn = $(this);
                $cartCodeCloseBtn.addClass("d-none");
                $cartCodeCloseBtn.siblings(".cart-code-edit").removeClass("d-none");
                $cartCodeCloseBtn.parent().siblings().find(".cart-detail-info").removeClass("d-none");
                $cartCodeCloseBtn.parent().siblings().find(".cart-detail-form").addClass("d-none");
            });
            // cart-slider
            function adjustArrowPosition() {
                var $sliderHeight = $(".collection-wrap .swiper-slide").height(),
                    $buttonHeight = $(".collection-wrap .swiper-buttons button").outerHeight(),
                    $arrowTop = ($sliderHeight / 2) - ($buttonHeight / 2);
                $(".collection-wrap .swiper-buttons button").each(function() {
                    $(this).css("top", $arrowTop + "px");
                });
            }
            var swiper = new Swiper(".swiper#cart-slider", {
                loop: false,
                rewind: true,
                slidesPerView: 4,
                grid: {
                    rows: 1,
                    fill: 'row' | 'column',
                },
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-cart',
                    nextEl: '.swiper-next-cart'
                },
                pagination: {
                    el: ".swiper-pagination-cart",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        grid: {
                            rows: 1,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 2,
                        grid: {
                            rows: 1,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 2,
                        grid: {
                            rows: 1,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 2,
                        grid: {
                            rows: 1,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 3,
                        grid: {
                            rows: 1,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 3,
                        grid: {
                            rows: 1,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 4,
                        grid: {
                            rows: 1,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    }
                },
                on: {
                    init: function() {
                        adjustArrowPosition();
                    },
                    slideChange: function() {
                        adjustArrowPosition();
                    },
                    resize: function() {
                        adjustArrowPosition();
                    }
                }
            });
            $window.resize(function() {
                adjustArrowPosition();
            });
        },
        checkOut: function() {
            // checkoutTab
            $document.on("click", ".checktab-next", function() {
                var $checktabContent = $(this).closest(".checktab-content"),
                    $checktabProgress = $(this).closest(".checktab-overview").find(".checktab-progress"),
                    $checktabLi = $(this).closest(".checktab-overview").find(".checkout-tab ul.checktab-ul li.checktab-li");
                var $checktabData = $checktabContent.find(".checktab-data"),
                    $checktabDataCurrent = $checktabData.filter(":visible"),
                    $checktabDataNext = $checktabDataCurrent.next(".checktab-data"),
                    $checktabDataCurrentLi = $checktabData.index($checktabDataCurrent) + 1,
                    $checktabDataNextLi = $checktabDataCurrentLi + 1;
                if($checktabDataNext.length > 0) {
                    $checktabDataCurrent.addClass("d-none");
                    $checktabDataNext.removeClass("d-none");
                    $checktabLi.removeClass("active");
                    $checktabLi.eq($checktabDataNextLi - 1).addClass("active");
                    $checktabLi.eq($checktabDataCurrentLi - 1).addClass("done");
                    checktabUpdate();
                }
                function checktabUpdate() {
                    var $checktabActive = $checktabDataNextLi;
                    $checktabProgress.css("width", (($checktabActive - 1) / ($checktabData.length - 1)) * 100 + "%");
                }
            });
            $document.on("click", ".checktab-back", function() {
                var $checktabContent = $(this).closest(".checktab-content"),
                    $checktabProgress = $(this).closest(".checktab-overview").find(".checktab-progress"),
                    $checktabLi = $(this).closest(".checktab-overview").find(".checkout-tab ul.checktab-ul li.checktab-li");
                var $checktabData = $checktabContent.find(".checktab-data"),
                    $checktabDataCurrent = $checktabData.filter(":visible"),
                    $checktabDataPrev = $checktabDataCurrent.prev(".checktab-data"),
                    $checktabDataCurrentLi = $checktabData.index($checktabDataCurrent) + 1,
                    $checktabDataPrevLi = $checktabDataCurrentLi - 1;
                if($checktabDataPrev.length > 0) {
                    $checktabDataCurrent.addClass("d-none");
                    $checktabDataPrev.removeClass("d-none");
                    $checktabLi.eq($checktabDataPrevLi - 1).removeClass("done");
                    $checktabLi.removeClass("active");
                    $checktabLi.eq($checktabDataPrevLi - 1).addClass("active");
                    checktabUpdate();
                }
                function checktabUpdate() {
                    var $checktabActive = $checktabDataPrevLi;
                    $checktabProgress.css("width", (($checktabActive - 1) / ($checktabData.length - 1)) * 100 + "%");
                }
            });
            // method-radio
            $document.on("click", ".check-method-radio label.cust-radio-label input[name]", function() {
                var $checkMethod = $(this).closest(".check-method");
                $checkMethod.find(".check-method-info").addClass("d-none");
                $(this).closest(".check-method-option").find(".check-method-info").removeClass("d-none");
                $checkMethod.find(".check-method-radio label.cust-radio-label input[name]").not(this).prop("checked", false);
            });
            // card-payment
            var $checkout_form = $(".check-method-card");
            $checkout_form.card({
                container: '.card-wrapper',
                formatting: true,
                formSelectors: {
                    numberInput: 'input[name="cardnumber"]',
                    expiryInput: 'input[name="exp-date"]',
                    cvcInput: 'input[name="cvc"]',
                    nameInput: 'input[name="ccname"]'
                },
                cardSelectors: {
                    cardContainer: '.jp-card-container',
                    card: '.jp-card',
                    numberDisplay: '.jp-card-number',
                    expiryDisplay: '.jp-card-expiry',
                    cvcDisplay: '.jp-card-cvc',
                    nameDisplay: '.jp-card-name'
                },
                messages: {
                    validDate: 'valid\nthru',
                    monthYear: 'mm / yy'
                },
                placeholders: {
                    number: '&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;',
                    cvc: '&bull;&bull;&bull;',
                    expiry: '&bull;&bull;/&bull;&bull;',
                    name: 'Full name'
                },
                masks: {
                    cardNumber: false
                },
                classes: {
                    valid: 'jp-card-valid',
                    invalid: 'jp-card-invalid'
                },
                debug: false
            });
        },
        invoiceJs: function() {
            function loadImages($invoiceContent, $callBack) {
                var $invoiceImage = $invoiceContent.find("img"),
                    $imageLoaded = 0,
                    $totalImages = $invoiceImage.length;
                if($totalImages === 0) {
                    $callBack();
                    return;
                }
                $invoiceImage.each(function() {
                    var $invoiceImg = new Image();
                    $invoiceImg.src = $(this).attr("src");
                    $invoiceImg.onload = $invoiceImg.onerror = function() {
                        $imageLoaded++;
                        if($imageLoaded === $totalImages) {
                            $callBack();
                        }
                    };
                });
            }
            $document.on("click", ".invoice-download", function() {
                var $invoiceContent = $(this).closest(".invoice").find(".invoice-content");
                if(!$invoiceContent.length) {
                    console.error("No invoice content found.");
                    return;
                }
                loadImages($invoiceContent, function() {
                    var { jsPDF } = window.jspdf,
                        $clone = $invoiceContent.clone();
                    $clone.css({
                        position: "absolute",
                        left: "auto",
                        top: "auto",
                        width: "210mm",
                        height: "auto", // '297mm' if fix A4 hieght
                        boxShadow: "none",
                        overflow: "visible",
                        margin: "0",
                        padding: "30px",
                        zIndex: "-1"
                    });
                    $body.append($clone);
                    html2canvas($clone[0], {
                        scale: 2,
                        useCORS: true,
                        logging: true,
                        backgroundColor: "#FFFFFF"
                    }).then(function($canvas) {
                        $clone.remove();
                        if($canvas.width === 0 || $canvas.height === 0) {
                            console.error("Canvas is empty or not rendered correctly.");
                            return;
                        }
                        var $invoiceImgData = $canvas.toDataURL("image/png", 1.0);
                        var $invoicePdf = new jsPDF({ orientation: "p", unit: "mm", format: "a4" });
                        var $invoiceImgWidth = 210;
                        var $invoicePageHeight = 295;
                        var $invoiceImgHeight = $canvas.height * $invoiceImgWidth / $canvas.width;
                        var $invoiceHeightLeft = $invoiceImgHeight;
                        var $invoicePosition = 0;
                        $invoicePdf.addImage($invoiceImgData, "PNG", 0, $invoicePosition, $invoiceImgWidth, $invoiceImgHeight);
                        $invoiceHeightLeft -= $invoicePageHeight;
                        while($invoiceHeightLeft >= 0) {
                            $invoicePosition = $invoiceHeightLeft - $invoiceImgHeight;
                            $invoicePdf.addPage();
                            $invoicePdf.addImage($invoiceImgData, "PNG", 0, $invoicePosition, $invoiceImgWidth, $invoiceImgHeight);
                            $invoiceHeightLeft -= $invoicePageHeight;
                        }
                        $invoicePdf.save("invoice.pdf");
                    }).catch(function($err) {
                        console.error("Error generating PDF:", $err);
                    });
                });
            });
        },
        storeJs: function() {
            $(".store-state option").hide();
            $document.on("change", ".store-country", function() {
                var $storeForm = $(this).closest(".store-form"),
                    $selectedCountry = $(this).val();
                $storeForm.find(".store-state option").each(function() {
                    var $country = $(this).data("country");
                    if($country === $selectedCountry) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                $storeForm.find(".store-country option:first").hide();
                $storeForm.find(".store-state").val("");
                $storeForm.find(".store-state").prop("selectedIndex", 0);
            });
            $document.on("click", ".store-find-btn", function() {
                var $storeForm = $(this).closest(".store-form"),
                    $storeCountry = $storeForm.find(".store-country").val(),
                    $storeState = $storeForm.find(".store-state").val();
                if(!$storeCountry || !$storeState) {
                    $storeForm.find(".store-alert-msg").addClass("active").text("Please select both field.");
                    $storeForm.find(".store-data").removeClass("active");
                    return;
                }
                $storeForm.find(".store-alert-msg").removeClass("active").text("");
                $storeForm.find(".store-data").addClass("active");
                $storeForm.find(".countryselect").text($storeCountry.charAt(0).toUpperCase() + $storeCountry.slice(1));
                $storeForm.find(".stateselect").text($storeState.charAt(0).toUpperCase() + $storeState.slice(1));
                $storeForm.find(".store-data .row.store-data-row>*").each(function() {
                    var $state = $(this).data("state"),
                        $country = $(this).data("country");
                    if($state === $storeState && $country === $storeCountry) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
            $document.on("click", ".store-reset-btn", function() {
                var $storeForm = $(this).closest(".store-form");
                $storeForm.find(".store-country").val("");
                $storeForm.find(".store-country option:first").show();
                $storeForm.find(".store-country").prop("selectedIndex", 0);
                $storeForm.find(".store-state").val("");
                $storeForm.find(".store-state option").hide();
                $storeForm.find(".store-state").prop("selectedIndex", 0);
                $storeForm.find(".store-data").removeClass("active");
                $storeForm.find(".store-alert-msg").text("");
                $storeForm.find(".countryselect").text("");
                $storeForm.find(".stateselect").text("");
            });
        },
        accountSettings: function() {
            // account-edit-close-cancel
            $document.on("click", "form button.acc-edit", function() {
                var $accInfo = $(this).closest(".acc-info");
                $accInfo.find(".acc-edit").addClass("d-none");
                $accInfo.find(".acc-detail-info").addClass("d-none");
                $accInfo.find(".acc-detail-form").removeClass("d-none");
            });            
            $document.on("click", "form button.acc-save, form button.acc-cancel", function() {
                var $accDetailForm = $(this).closest(".acc-detail-form");
                $accDetailForm.addClass("d-none");
                $accDetailForm.siblings(".acc-detail-info").removeClass("d-none");
                $accDetailForm.closest(".acc-detail").siblings().find(".acc-edit").removeClass("d-none");
            });
            // account fields handling
            $document.on("click", ".acc-add-field", function() {
                var $accDetailForm = $(this).closest(".acc-detail-form"),
                    $accDetailField = $accDetailForm.find(".acc-detail-field"),
                    $maxInputField = 5,
                    $i = $accDetailField.find(".acc-field-box").length;
                if($i < $maxInputField) {
                    $i++;
                    // add email address
                    if($(this).hasClass("acc-email-field")) {
                        var $dup_email_html = '<div class="acc-field-box"><h6 class="font-18 meb-22">Add a new email</h6><label class="cust-checkbox-label meb-23"><input type="checkbox" id="default-email-' + $i + '" name="default-email-' + $i + '" class="cust-checkbox"><span class="d-block cust-check"></span><span class="cust-text">Set as default mail</span></label><div class="acc-detail-hide"><div class="row field-row"><div class="col-12 col-md-6 field-col"><label for="email-' + $i + '" class="field-label">Email</label><input type="email" id="email-' + $i + '" name="email" class="w-100" placeholder="Email address" autocomplete="email"></div></div></div><button type="button" class="st-field-btn acc-remove-field body-color d-flex align-items-center mst-20 mst-sm-30 meb-10 meb-sm-0"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center extra-bg mer-5 border-full border-radius"><i class="ri-subtract-line d-block lh-1"></i></span>Remove email</button></div>';
                        $(this).siblings().append($dup_email_html);
                    }
                    // add shipping address
                    if($(this).hasClass("acc-ship-field")) {
                        var $dup_ship_html = '<div class="acc-field-box"><h6 class="font-18 meb-22">Add a new address</h6><label class="cust-checkbox-label meb-23"><input type="checkbox" id="default-address-' + $i + '" name="default-address-' + $i + '" class="cust-checkbox"><span class="d-block cust-check"></span><span class="cust-text">Set as default address</span></label><div class="acc-detail-hide"><div class="row field-row"><div class="col-12 field-col"><label for="organization-' + $i + '" class="field-label">Company (optional)</label><input type="text" id="organization-' + $i + '" name="organization-' + $i + '" class="w-100" placeholder="Company name" autocomplete="organization"></div><div class="col-12 col-md-6 field-col"><label for="address-' + $i + '" class="field-label">Address</label><input type="text" id="address-' + $i + '" name="address" class="w-100" placeholder="Address line1" autocomplete="address-line1"></div><div class="col-12 col-md-6 field-col"><label for="address2-' + $i + '" class="field-label">Address2</label><input type="text" id="address2-' + $i + '" name="address2" class="w-100" placeholder="Address line2" autocomplete="address-line2"></div><div class="col-12 field-col"><label for="house-no-' + $i + '" class="field-label">Apartment, suite, etc</label><input type="text" id="house-no-' + $i + '" name="address3" class="w-100" placeholder="Apartment, suite, etc." autocomplete="address-line3"></div><div class="col-12 col-md-6 field-col"><label for="country-' + $i + '" class="field-label">Country</label><select id="country-' + $i + '" name="country" class="w-100" autocomplete="country"><option selected disabled>--Select your country--</option><option>India</option><option>Uk</option><option>Usa</option><option>Uae</option><option>Bangladesh</option></select></div><div class="col-12 col-md-6 field-col"><label for="province-' + $i + '" class="field-label">State</label><input type="text" id="province-' + $i + '" name="province" class="w-100" placeholder="State" autocomplete="address-level1"></div><div class="col-12 col-md-6 field-col"><label for="city-' + $i + '" class="field-label">City</label><input type="text" id="city-' + $i + '" name="city" class="w-100" placeholder="City" autocomplete="address-level2"></div><div class="col-12 col-md-6 field-col"><label for="pincode-' + $i + '" class="field-label">Pincode</label><input type="text" id="pincode-' + $i + '" name="pincode" class="w-100" placeholder="Pincode" autocomplete="postal-code"></div></div><div class="acc-radio-field mst-20 mst-sm-30"><ul class="acc-radio-ul ul-row"><li class="acc-radio-li"><label class="cust-radio-label"><input type="radio" id="ship-home-' + $i + '" name="ship-' + $i + '" class="cust-checkbox" checked="checked"><span class="d-block cust-check"></span><span class="cust-text">Home<span class="cust-other-text">(All day delivery)</span></span></label></li><li class="acc-radio-li"><label class="cust-radio-label"><input type="radio" id="ship-work-' + $i + '" name="ship-' + $i + '" class="cust-checkbox"><span class="d-block cust-check"></span><span class="cust-text">Work<span class="cust-other-text">(Delivery 10:00 AM - 05:00 PM)</span></span></label></li></ul></div></div><button type="button" class="st-field-btn acc-remove-field body-color d-flex align-items-center mst-20 mst-sm-30 meb-10 meb-sm-0"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center extra-bg mer-5 border-full border-radius"><i class="ri-subtract-line d-block lh-1"></i></span>Remove address</button></div>';
                        $(this).siblings().append($dup_ship_html);
                    }
                    // add billing address
                    if($(this).hasClass("acc-bill-field")) {
                        var $dup_bill_html = '<div class="acc-field-box"><h6 class="font-18 meb-22">Add a new address</h6><label class="cust-checkbox-label meb-23"><input type="checkbox" id="ship-address-' + $i + '" name="ship-address-' + $i + '" class="cust-checkbox"><span class="d-block cust-check"></span><span class="cust-text">Same as shipping address</span></label><div class="acc-detail-hide"><div class="row field-row"><div class="col-12 field-col"><label for="bill-organization-' + $i + '" class="field-label">Company (optional)</label><input type="text" id="bill-organization-' + $i + '" name="bill-organization-' + $i + '" class="w-100" placeholder="Company name" autocomplete="organization"></div><div class="col-12 col-md-6 field-col"><label for="bill-address-' + $i + '" class="field-label">Address</label><input type="text" id="bill-address-' + $i + '" name="bill-address" class="w-100" placeholder="Address line1" autocomplete="address-line1"></div><div class="col-12 col-md-6 field-col"><label for="bill-address2-' + $i + '" class="field-label">Address2</label><input type="text" id="bill-address2-' + $i + '" name="bill-address2" class="w-100" placeholder="Address line2" autocomplete="address-line2"></div><div class="col-12 field-col"><label for="bill-house-no-' + $i + '" class="field-label">Apartment, suite, etc</label><input type="text" id="bill-house-no-' + $i + '" name="bill-address3" class="w-100" placeholder="Apartment, suite, etc." autocomplete="address-line3"></div><div class="col-12 col-md-6 field-col"><label for="bill-country-' + $i + '" class="field-label">Country</label><select id="bill-country-' + $i + '" name="bill-country" class="w-100" autocomplete="country"><option selected disabled>--Select your country--</option><option>India</option><option>Uk</option><option>Usa</option><option>Uae</option><option>Bangladesh</option></select></div><div class="col-12 col-md-6 field-col"><label for="bill-province-' + $i + '" class="field-label">State</label><input type="text" id="bill-province-' + $i + '" name="bill-province" class="w-100" placeholder="State" autocomplete="address-level1"></div><div class="col-12 col-md-6 field-col"><label for="bill-city-' + $i + '" class="field-label">City</label><input type="text" id="bill-city-' + $i + '" name="bill-city" class="w-100" placeholder="City" autocomplete="address-level2"></div><div class="col-12 col-md-6 field-col"><label for="bill-pincode-' + $i + '" class="field-label">Pincode</label><input type="text" id="bill-pincode-' + $i + '" name="bill-pincode" class="w-100" placeholder="Pincode" autocomplete="postal-code"></div></div><div class="acc-radio-field mst-20 mst-sm-30"><ul class="acc-radio-ul ul-row"><li class="acc-radio-li"><label class="cust-radio-label"><input type="radio" id="bill-home-' + $i + '" name="bill-' + $i + '" class="cust-checkbox" checked="checked"><span class="d-block cust-check"></span><span class="cust-text">Home<span class="cust-other-text">(All day delivery)</span></span></label></li><li class="acc-radio-li"><label class="cust-radio-label"><input type="radio" id="bill-work-' + $i + '" name="bill-' + $i + '" class="cust-checkbox"><span class="d-block cust-check"></span><span class="cust-text">Work<span class="cust-other-text">(Delivery 10:00 AM - 05:00 PM)</span></span></label></li></ul></div></div><button type="button" class="st-field-btn acc-remove-field body-color d-flex align-items-center mst-20 mst-sm-30 meb-10 meb-sm-0"><span class="st-field-icon float-start icon-16 d-flex align-items-center justify-content-center extra-bg mer-5 border-full border-radius"><i class="ri-subtract-line d-block lh-1"></i></span>Remove address</button></div>';
                        $(this).siblings().append($dup_bill_html);
                    }
                } else {
                    alert("You have reached a limit for adding fields. No more than " + $maxInputField + " fields can be added.");
                }
            });
            // account-field-remove
            $document.on("click", ".acc-remove-field", function(e) {
                e.preventDefault();
                var $accFieldBox = $(this).closest(".acc-field-box"),
                    $fieldDeletemodal = $("#field-deletemodal");
                $fieldDeletemodal.modal("show");
                $fieldDeletemodal.on("click", "#fieldremove", function() {
                    $accFieldBox.remove();
                    $fieldDeletemodal.modal("hide");
                });
            });
            // account-field-checkbox
            $document.on("click", ".acc-field-box label.cust-checkbox-label input[name]", function() {
                var $accDetailForm = $(this).closest(".acc-detail-form"),
                    $accFieldInput = $accDetailForm.find(".acc-field-box label.cust-checkbox-label input[name]"),
                    $accDetailHide = $(this).parent().siblings(".acc-detail-hide");
                $accFieldInput.not(this).prop("checked", false);
                if($accFieldInput.not(this).prop("checked", false)) {
                    $accDetailForm.find(".acc-detail-hide").removeClass("d-none");
                    $accDetailHide.addClass("d-none");
                }
                if($(this).prop("checked") === true) {
                    $accDetailHide.addClass("d-none");
                }
                if($(this).prop("checked") === false) {
                    $accDetailHide.removeClass("d-none");
                }
            });
        },
        accountProfile: function() {
            // account-profile-img
            $document.on("change", ".img-upload .img-file", function() {
                var $file = this.files[0];
                if($file) {
                    var $reader = new FileReader();
                    var $imgUpload = $(this).closest(".img-upload");
                    var $imgPreview = $imgUpload.find(".img-preview");
                    $reader.onload = function(event) {
                        $imgPreview.attr("src", event.target.result);
                    };
                    $reader.readAsDataURL($file);
                }
            });
            // change password
            $document.on("click", "button.field-pwd-btn", function() {
                var $fieldPwdChild = $(this).children();
                if($fieldPwdChild.toggleClass("ri-eye-line")) {
                    $fieldPwdChild.toggleClass("ri-eye-off-line");
                } else {
                    $fieldPwdChild.toggleClass("ri-eye-line");
                }
                var $fieldPwdParent = $(this).prev();
                $fieldPwdParent.attr("type", $fieldPwdParent.attr("type") === "password" ? "text" : "password");
            });
        },
        accountWishlist: function() {
            // add note button
            $document.on("click", "form button.wish-add-note", function() {
                $(this).parent().addClass("d-none");
                $(this).parent().siblings(".wish-textarea").removeClass("d-none");
            });
            // focus on textarea
            $document.on("click", "form .wish-textarea textarea[name]", function() {
                $(this).addClass("focus");
                $(this).closest(".wish-textarea").siblings(".wish-btn").removeClass("d-none");
            });
            // save or cancel button
            $document.on("click", "form button.wish-save, form button.wish-cancel", function() {
                var $noteSection = $(this).closest(".wish-btn").siblings(".wish-textarea");
                $noteSection.find("textarea[name]").removeClass("focus");
                $(this).closest(".wish-btn").addClass("d-none");
            });
        },
        TicketSettings: function() {
            // ticket-select js
            var $ids = {
                'status': $(`#status`).val(),
                'priority': $(`#priority`).val()
            };
            var $currentChangingField = null;
            for(var $id of Object.keys($ids)) {
                $(`#${$id}`).on("change", function() {
                    var $defaultValue = $ids[$id];
                    var $selectValue = $(`#${$id}`).val(); // actual value
                    $currentChangingField = $id;
                    if($selectValue) {
                        $("#ticket-edit-adminmodal").modal("show");
                        // remove previous handlers to avoid stacking
                        $("#ticket-edit-adminmodal").off("hidden.bs.modal");
                        $("#ticket-edit-adminmodal2").off("hidden.bs.modal");
                        $("#ticket-edit-adminmodal button").off("click").on("click", function() {
                            var $hasTarget = $(this).attr("data-bs-target");
                            $("#ticket-edit-adminmodal").on("hidden.bs.modal", function() {
                                if($currentChangingField !== $id) return;
                                if($hasTarget) {
                                    $(`#${$id}`).val($selectValue);
                                } else {
                                    $(`#${$id}`).val($defaultValue);
                                }
                            });
                            $("#ticket-edit-adminmodal2").on("hidden.bs.modal", function() {
                                if($currentChangingField !== $id) return;
                                $(`#${$id}`).val($defaultValue);
                            });
                        });
                    }
                });
            }
            // ticket-magnificpopup js
            var $magnificTicket = $("a.ti-img");
            $magnificTicket.magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1]
                },
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 500
                }
            });
            // ticket-reply js
            $document.on("click", "form button.ti-post-btn", function() {
                $(this).addClass("d-none");
                $(this).parent().siblings().removeClass("d-none");
            });
            $document.on("click", "form button.ti-reply-btn, form button.ti-cancel-btn", function() {
                $(this).closest("#ti-reply-form").addClass("d-none").siblings().find("button.ti-post-btn").removeClass("d-none");
            });
            $document.on("click", "form button.ti-reply-edit:not([data-bs-target='#ticket-error-editmodal'])", function() {
                $(this).addClass("d-none");
                $(this).closest(".ti-user-chat").siblings(".ti-content-info").find(".ti-content").addClass("d-none").siblings(".ti-edit-content").removeClass("d-none");
            });
            $document.on("click", "form button.ti-edit-btn, form button.ti-delete-btn", function() {
                $(this).closest(".ti-edit-content").addClass("d-none").siblings(".ti-content").removeClass("d-none");
                $(this).closest(".ti-content-info").siblings(".ti-user-chat").find(".ti-reply-edit").removeClass("d-none");
            });
            // ticket-editor js
            var $editorCreator = $(".editor-creator");
            $editorCreator.each(function() {
                var $editor = $(this).find(".editor");
                if($editor.length) {
                    ClassicEditor.create($editor[0])
                    .then(editor => {})
                    .catch(error => {});
                }
            });
            // file-attachment js
            $(".attachment-upload").each(function() {
                updateAttachmentImage($(this));
            });
            $document.on("click", ".attachment-file-upload", function() {
                var $attachmentUpload = $(this).closest(".attachment-upload"),
                    $attachmentFile = $attachmentUpload.find(".attachment-file");
            });
            $document.on("change", ".attachment-file", function(e) {
                var $attachmentUpload = $(this).closest(".attachment-upload");
                updateAttachmentImage($attachmentUpload);
            });
            function updateAttachmentImage($attachmentUpload) {
                var $attachmentFile = $attachmentUpload.find(".attachment-file"),
                    $attachmentUploaded = $attachmentUpload.find(".attachment-uploaded"),
                    $files = $attachmentFile.get(0).files;
                if($files.length > 0) {
                    $.each($files, function(index, $file) {
                        var $reader = new FileReader();
                        $reader.onload = function(e) {
                            var $html = '<li class="attachment-item">';
                            $html += '<div class="position-relative">';
                            $html += '<button type="button" class="attachmentremove-btn extra-color position-absolute secondary-bg rounded-circle" aria-label="Remove"><i class="ri-close-line d-block lh-1"></i></button>';
                            $html += '<a href="javascript:void(0)" class="d-block ptb-4 plr-4 body-bg border-full br-hidden">';
                            $html += '<img src="' + e.target.result + '" class="img-fluid">';
                            $html += '</a>';
                            $html += '</div>';
                            $html += '</li>';
                            $attachmentUploaded.append($html);
                            updateAttachmentCount($attachmentUpload);
                        }
                        $reader.readAsDataURL($file);
                    });
                }
            }
            function updateAttachmentCount($attachmentUpload) {
                var $fileCount = $attachmentUpload.find(".attachment-item").length,
                    $attachmentCount = $attachmentUpload.find(".attachment-count");
                $attachmentCount.text($fileCount + " attachments");
                if($fileCount === 0) {
                    $attachmentCount.addClass("d-none");
                } else {                    
                    $attachmentCount.removeClass("d-none");
                }
            }
            $document.on("click", ".attachmentremove-btn", function() {
                var $attachmentDeletemodal = $("#attachment-deletemodal"),
                    $attachmentRemove = $("#attachmentremove");
                $attachmentDeletemodal.modal("show");
                var $currentAttachment = $(this).closest(".attachment-item");
                var $attachmentUpload = $currentAttachment.closest(".attachment-upload");
                $attachmentRemove.off().on("click", function() {
                    $currentAttachment.remove();
                    $attachmentDeletemodal.modal("hide");
                    updateAttachmentCount($attachmentUpload);
                });
            });
        },
        countDown: function() {
            function initializeCountdown($countdown) {
                var $timer = $countdown.attr("data-time"),
                    $countDownDate = new Date($timer).getTime();
                var $interval = setInterval(function() {
                    var now = new Date().getTime(),
                        distance = $countDownDate - now,
                        days = Math.floor(distance / (1000 * 60 * 60 * 24)),
                        hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                        minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                        seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    $countdown.find('.day').html(days);
                    $countdown.find('.hrs').html(hours);
                    $countdown.find('.min').html(minutes);
                    $countdown.find('.sec').html(seconds);
                    if(distance < 0) {
                        clearInterval($interval);
                        $countdown.find('.day, .hrs, .min, .sec').html('0');
                    }
                }, 1000);
            }
            $(".countdown").each(function() {
                initializeCountdown($(this));
            });
        },
        dataBgImg: function() {
            $("[data-bgimg]").each(function() {
                $(this).css("background-image", "url(" + $(this).data("bgimg") + ")");
            });
        },
        imgResize: function() {
            $window.on("load resize", function() {
                $("img").each(function() {
                    var $width = $(this).width(),
                        $height = $(this).height();
                    $(this).attr("width", $width);
                    $(this).attr("height", $height);
                });
            });
        },
        videoJs: function() {
            $document.on("click", ".video-btn", function() {
                var $this = $(this),
                    $videoId = $this.data("video-id"),
                    $videoContainer = $this.closest(".video"),
                    $video = $videoContainer.find("video"),
                    $videoElement = $video.get(0);
                // case 1: if videoId exists, assume it's a YouTube embed
                if($videoId) {
                    var $iframe = '<iframe src="https://www.youtube.com/embed/' + $videoId + '?autoplay=1" class="d-block" width="100%" height="100%" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    $this.hide();
                    $videoContainer.find(".video-loader").fadeIn();
                    setTimeout(function() {
                        setTimeout(function() {
                            $videoContainer.find(".video-loader").fadeOut();
                        }, 1000);
                        $videoContainer.find(".video-frame").html($iframe).fadeIn();
                    }, 1000);
                }
                // case 2: if there's a <video> tag, toggle play/pause
                if($video.length) {
                    if($videoElement.paused) {
                        $videoElement.play();
                        $this.removeClass("paused").addClass("playing");
                        $videoContainer.find("i").removeClass("ri-play-large-fill").addClass("ri-pause-fill");
                        $video.show();
                    } else {
                        $videoElement.pause();
                        $this.removeClass("playing").addClass("paused");
                        $videoContainer.find("i").removeClass("ri-pause-fill").addClass("ri-play-large-fill");
                    }
                    // restart video on end
                    $videoElement.onended = function() {
                        $videoElement.currentTime = 0;
                        $videoElement.play();
                    };
                }
            });
        },
        resizeScreen: function() {
            function resizeFullscreenElements() {
                var $minHeight = $window.height();
                // always resize fullscreen
                $(".fullscreen").css("min-height", $minHeight);
                // conditionally resize fullscreen2 for large screens
                if(window.matchMedia("(min-width: 992px)").matches) {
                    $(".fullscreen2").css("min-height", $minHeight);
                } else {
                    $(".fullscreen2").css("min-height", ""); // reset on small screens
                }
            }
            // initial call
            resizeFullscreenElements();
            // single resize event
            $window.on("resize", function() {
                resizeFullscreenElements();
            });
        },
        checkboxBtn: function() {
            $(".checkboxbtn").on("change", function() {
                var $checkboxBtn = $(this),
                    $hideBtn = $checkboxBtn.closest("label.checkbox-agree").parent().siblings().find(".hide-btn");
                if($checkboxBtn.is(":checked")) {
                    $hideBtn.removeClass("opacity-50 disabled pe-none");
                } else {
                    $hideBtn.addClass("opacity-50 disabled pe-none");
                }
            });
        },
        footerProduct: function() {
            var swiper = new Swiper('.swiper#footer-product-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 1,
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-footer-product',
                    nextEl: '.swiper-next-footer-product'
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },                
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    }
                }
            });
        },
        backTop: function() {
            var $htmlBody = $("html, body");
            $window.scroll(function() {
                if($(this).scrollTop() > 600) {
                    $("#top").removeClass("opacity-0 invisible").addClass("opacity-100 visible");
                } else {
                    $("#top").addClass("opacity-0 invisible").removeClass("opacity-100 visible");
                }
            });
            $document.on("click", "#top", function() {
                $htmlBody.animate({ scrollTop: 0 }, 100);
                return false;
            });
        }
    };
    ST.animateTemplate = {
        aDelay: 50,
        aQueue: [],
        aTimer: null,
        aBody: null,
        init: function() {
            var $at = this;
                $at.aBody = $body;
                $at.aQueue = [];
                $at.aTimer = null;
            if(typeof aDelay !== 'undefined') {
                $at.aDelay = aDelay;
            }
            $at.aQueue["animate__animated_0"] = [];
            $body.find("#main").find(">div, >section").each(function(index) {
                $(this).attr("data-animated-id", (index + 1));
                $at.aQueue["animate__animated_" + (index + 1)] = [];
            });
            setTimeout(function() {
                $at.registerAnimation();
            }, 100);
        },
        registerAnimation: function() {
            var $at = this;
            $("[data-animate]:not(.animate__animated)", $at.aBody).waypoint(function() {
                var $at_el = this.element ? this.element : this,
                    $this = $($at_el);
                if($this.is(":visible")) {
                    var $at_animated_wrap = $this.closest("[data-animated-id]"),
                        $at_animated_id = '0';
                    if($at_animated_wrap.length) {
                        $at_animated_id = $at_animated_wrap.data("animated-id");
                    }
                    $at.aQueue["animate__animated_" + $at_animated_id].push($at_el);
                    $at.processItemQueue();
                } else {
                    $this.addClass($this.data("animate")).addClass("animate__animated");
                }
            }, {
                offset: "90%",
                triggerOnce: true
            });
        },
        processItemQueue: function() {
            var $at = this;
            if($at.aTimer) {
                return;
            }
            $at.aTimer = window.setInterval(function() {
                var $at_queue = false;
                for(var $at_animated_id in $at.aQueue) {
                    if($at.aQueue[$at_animated_id].length) {
                        $at_queue = true;
                        break;
                    }
                }
                if($at_queue) {
                    for(var $at_animated_id in $at.aQueue) {
                        var $at_item = $($at.aQueue[$at_animated_id].shift());
                        $at_item.addClass($at_item.data("animate")).addClass("animate__animated");
                    }
                    $at.processItemQueue();
                } else {
                    window.clearInterval($at.aTimer);
                    $at.aTimer = null
                }
            }, $at.aDelay);
        }
    };
    ST.mainSlider = {
        init: function() {
            var swiper = new Swiper('.swiper#home-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 1,
                spaceBetween: 0,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-homeslider',
                    nextEl: '.swiper-next-homeslider'
                },
                pagination: {
                    el: ".swiper-pagination-homeslider",
                    clickable: true
                }
            });
        }
    };
    ST.categorySlider = {
        init: function() {
            function adjustArrowPosition() {
                var $sliderHeight = $(".cat-wrap .cat-content-img").outerHeight() / 2,
                    $buttonHeight = $(".cat-wrap .swiper-buttons button").outerHeight() / 2,
                    $arrowTop = $sliderHeight - $buttonHeight;
                $(".cat-wrap .swiper-buttons button").each(function() {
                    $(this).css("top", $arrowTop + "px");
                });
            }
            function sectionBeforeHeight() {
                $(".cat-block").each(function() {
                    var $sectionBlock = $(this),
                        $sectionImg = $sectionBlock.find(".cat-img"),
                        $sectionDot = $sectionBlock.find(".cat-dot");
                    if($sectionImg.length > 0 && $sectionDot.length > 0) {
                        var $sectionImgTop = $sectionImg.offset().top; // Image's top position relative to the document
                        var $sectionImgHalfHeight = $sectionImg.height() / 2; // Half of the image height
                        var $sectionDotHalfHeight = $sectionDot.outerHeight() / 2; // Half of the dot height
                        var $sectionDotWidth = $sectionDot.width(); // Half of the dot height
                        var $sectionBeforeTop = $sectionImgTop + $sectionImgHalfHeight - $sectionBlock.offset().top; // calculate the position inside the section
                        var $sectionDotTop = $sectionBeforeTop - $sectionDotHalfHeight; // calculate the position inside the section
                        // Apply CSS variable
                        $sectionBlock.css("--before-height", `${$sectionBeforeTop}px`);
                        $sectionBlock.css("--before-width", `${$sectionDotWidth}px`);
                        // Apply CSS variable
                        $sectionDot.css("top", `${$sectionDotTop}px`);
                    }
                });
            }
            var swiper = new Swiper('.swiper#cat-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 5,
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-cat',
                    nextEl: '.swiper-next-cat'
                },
                pagination: {
                    el: ".swiper-pagination-cat",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1400: {
                        slidesPerView: 5,
                        spaceBetween: 30
                    }
                },
                on: {
                    init: function() {
                        adjustArrowPosition();
                        sectionBeforeHeight();
                    },
                    slideChange: function() {
                        adjustArrowPosition();
                        sectionBeforeHeight();
                    },
                    resize: function() {
                        adjustArrowPosition();
                        sectionBeforeHeight();
                    }
                }
            });
            $window.resize(function() {
                adjustArrowPosition();
                sectionBeforeHeight();
            });
        }
    };
    ST.trendProduct = {
        init: function() {
            function adjustArrowPosition() {
                var $sliderHeight = $(".collection-wrap .collection-slider").height(),
                    $buttonHeight = $(".collection-wrap .swiper-buttons button").outerHeight(),
                    $arrowTop = ($sliderHeight / 2) - ($buttonHeight / 2);
                $(".collection-wrap .swiper-buttons button").each(function() {
                    $(this).css("top", $arrowTop + "px");
                });
            }
            var swiper = new Swiper('.swiper#trend-product-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 5,
                grid: {
                    rows: 2,
                    fill: 'row' | 'column',
                },
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-trend-product',
                    nextEl: '.swiper-next-trend-product'
                },
                pagination: {
                    el: ".swiper-pagination-trend-product",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 2,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 2,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 2,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 3,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 3,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 4,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    },
                    1400: {
                        slidesPerView: 5,
                        grid: {
                            rows: 2,
                            fill: 'row' | 'column',
                        },
                        spaceBetween: 30
                    }
                },
                on: {
                    init: function() {
                        adjustArrowPosition();
                    },
                    slideChange: function() {
                        adjustArrowPosition();
                    },
                    resize: function() {
                        adjustArrowPosition();
                    }
                }
            });
            $window.resize(function() {
                adjustArrowPosition();
            });
        }
    };
    ST.brandSlider = {
        init: function() {
            var swiper = new Swiper('.swiper#brand-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 5,
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 5,
                        spaceBetween: 30
                    }
                }
            });
        }
    };
    ST.testimonialSlider = {
        init: function() {
            function adjustArrowPosition() {
                var $sliderHeight = $(".testi-wrap .swiper-slide").height(),
                    $buttonHeight = $(".testi-wrap .swiper-buttons button").outerHeight(),
                    $arrowTop = ($sliderHeight / 2) - ($buttonHeight / 2);
                $(".testi-wrap .swiper-buttons button").each(function() {
                    $(this).css("top", $arrowTop + "px");
                });
            }
            var swiper = new Swiper('.swiper#testi-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 2,
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-testi',
                    nextEl: '.swiper-next-testi'
                },
                pagination: {
                    el: ".swiper-pagination-testi",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1400: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    }
                },
                on: {
                    init: function() {
                        adjustArrowPosition();
                    },
                    slideChange: function() {
                        adjustArrowPosition();
                    },
                    resize: function() {
                        adjustArrowPosition();
                    }
                }
            });
            $window.resize(function() {
                adjustArrowPosition();
            });
        }
    };
    ST.blogSlider = {
        init: function() {
            function adjustArrowPosition() {
                var $sliderHeight = $(".blog-wrap .swiper-slide .blog-main-img").height(),
                    $buttonHeight = $(".blog-wrap .swiper-buttons button").outerHeight(),
                    $arrowTop = ($sliderHeight / 2) - ($buttonHeight / 2);
                $(".blog-wrap .swiper-buttons button").each(function() {
                    $(this).css("top", $arrowTop + "px");
                });
            }
            var swiper = new Swiper('.swiper#blog-slider', {
                loop: false,
                rewind: true,
                slidesPerView: 3,
                spaceBetween: 30,
                observer: true,
                observeParents: true,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: '.swiper-prev-blog',
                    nextEl: '.swiper-next-blog'
                },
                pagination: {
                    el: ".swiper-pagination-blog",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    360: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                },
                on: {
                    init: function() {
                        adjustArrowPosition();
                    },
                    slideChange: function() {
                        adjustArrowPosition();
                    },
                    resize: function() {
                        adjustArrowPosition();
                    }
                }
            });
            $window.resize(function() {
                adjustArrowPosition();
            });
        }
    };
    $document.ready(function() {
        ST.init();
        ST.animateTemplate.init();
        ST.mainSlider.init();
        ST.categorySlider.init();
        ST.trendProduct.init();
        ST.brandSlider.init();
        ST.testimonialSlider.init();
        ST.blogSlider.init();
    });
})(jQuery);