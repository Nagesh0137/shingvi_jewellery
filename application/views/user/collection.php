        <main id="main">
            <!-- shop-content start -->
            <section class="shop-content section-ptb">
                <div class="container">
                    <div class="row align-items-xl-start">
                        <!-- shop-sidebar start -->
                        <div class="col-12 col-xl-3 p-xl-sticky top-0">
                            <div class="shop-sidebar-wrap shop-filter-sidebar" data-animate="animate__fadeIn">
                                <button type="button" class="shop-sidebar-close body-secondary-color icon-16 position-absolute" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                <form class="shop-form" action="javascript:void(0)" id="shopForm">
                                    <!-- shop-categories start -->
                                    <div class="shop-sidebar shop-categories">
                                        <h6 class="font-18">Categories</h6>
                                        <div class="shop-cat-post mst-22">
                                            <div class="shop-cat ul-mtm-15">
                                                <a href="collection-category.html" class="body-dominant-color d-flex align-items-center justify-content-between">
                                                    <span>Collection category</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-without.html" class="body-dominant-color d-flex align-items-center justify-content-between">
                                                    <span>Collection without</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection.html" class="dominant-color d-flex align-items-center justify-content-between">
                                                    <span>Collection left</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-right.html" class="body-dominant-color d-flex align-items-center justify-content-between">
                                                    <span>Collection right</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-list-without.html" class="body-dominant-color d-flex align-items-center justify-content-between">
                                                    <span>Collection list without</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-list.html" class="body-dominant-color d-flex align-items-center justify-content-between">
                                                    <span>Collection list left</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-list-right.html" class="body-dominant-color d-flex align-items-center justify-content-between">
                                                    <span>Collection list right</span>
                                                    <span>12</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- shop-categories end -->
                                    <!-- shop-availability start -->
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
                            <!-- collection-product-list start -->
                            <div class="collection-product-list d-none d-xl-block pst-30 mst-30 bst">
                                <div class="side-collection-category">
                                    <h6 class="font-18" data-animate="animate__fadeIn">Special products</h6>
                                    <div class="side-collection-wrap mst-25">
                                        <div class="collection-slider swiper" id="special-product-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                                    <div class="single-product-list w-100">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-1.jpg" class="w-100 img-fluid" alt="p-1"></a>
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
                                                                <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-3.jpg" class="w-100 img-fluid" alt="p-3"></a>
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
                                                                <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-5.jpg" class="w-100 img-fluid" alt="p-5"></a>
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
                                                                <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-7.jpg" class="w-100 img-fluid" alt="p-7"></a>
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
                                                                <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-9.jpg" class="w-100 img-fluid img1" alt="p-9"></a>
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
                                                                <a href="product.html" class="pro-img"><img src="<?=base_url()?>u_assets/assets/image/index/product/p-11.jpg" class="w-100 img-fluid img1" alt="p-11"></a>
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
                            </div>
                            <!-- collection-product-list end -->
                            <!-- shop-sidebar banner start -->
                            <div class="sidebar-banner d-none d-xl-block banner-hover mst-30" data-animate="animate__fadeIn">
                                <a href="collection.html" class="d-block banner-img position-relative br-hidden">
                                    <span class="banner-icon secondary-color font-20 position-absolute top-50 start-50 width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1 rounded-circle"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                    <img src="<?=base_url()?>u_assets/assets/image/collection/side-image.jpg" class="w-100 img-fluid" alt="side-image">
                                </a>
                            </div>
                            <!-- shop-sidebar banner end -->
                        </div>
                        <!-- shop-sidebar end -->
                        <div class="col-12 col-xl-9 p-xl-sticky top-0">
                            <!-- collection-info start -->
                            <div class="row row-mtm" data-animate="animate__fadeIn">
                                <!-- collection-img start -->
                                <div class="collection-img">
                                    <h6 class="font-18 meb-25">Collection left (12)</h6>
                                    <img src="<?=base_url()?>u_assets/assets/image/collection/collection-banner.jpg" class="w-100 img-fluid border-radius" alt="collection-banner">
                                </div>
                                <!-- collection-img end -->
                                <!-- shop-top-bar start -->
                                <div class="shop-top-bar">
                                    <div class="row row-mtm15 align-items-md-center">
                                        <div class="col-12 col-sm-6 col-md-7 col-lg-8">
                                            <div class="shop-filter-view ul-mt15 align-items-center">
                                                <!-- shop-filter start -->
                                                <div class="shop-filter">
                                                    <button type="button" class="shop-filter-btn secondary-color d-flex align-items-center"><i class="ri-filter-line icon-16 mer-5"></i>Filter</button>
                                                </div>
                                                <!-- shop-filter end -->
                                                <!-- shop-view-mode start -->
                                                <div class="shop-view-mode">
                                                    <div class="ul-mt10">
                                                        <button type="button" class="shop-view-btn dominant-color icon-16 opacity-100 disabled" data-view="grid" aria-label="Grid view"><i class="ri-layout-grid-line"></i></button>
                                                        <button type="button" class="shop-view-btn body-color icon-16 opacity-100" data-view="list" aria-label="List view"><i class="ri-list-unordered"></i></button>
                                                    </div>
                                                </div>
                                                <!-- shop-view-mode end -->
                                                <!-- shop-show-product start -->
                                                <div class="shop-show-product">Showing 12 of 12 products</div>
                                                <!-- shop-show-product end -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                                            <!-- shop-short start -->
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
                                            <!-- shop-short end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- shop-top-bar end -->
                                <!-- shop-filter-list start -->
                                <div class="shop-filter-list d-flex align-items-start justify-content-between">
                                    <ul class="shop-filter-ul ul-mt5 align-items-center">
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Out of stock<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">In stock<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Aliceblue<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">16cm<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius">Rings<i class="ri-close-large-line d-block lh-1"></i></a></li>
                                        <li class="shop-filter-li"><button type="submit" class="shop-filter-active text-decoration-underline">Clear all</button></li>
                                    </ul>
                                    <div class="shop-filter-loader"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="3" cx="33" cy="33" r="30"></circle></svg></div>
                                </div>
                                <!-- shop-filter-list end -->
                                <div class="shop-product-wrap data-grid">
                                    <!-- shop-grid start -->
                                    <div class="row row-mtm30">
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-1.jpg" class="w-100 img-fluid img1" alt="p-1">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-2.jpg" class="w-100 img-fluid img2" alt="p-2">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Ring / Shine</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gleam band</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$79.00</span>
                                                                        <span class="old-price text-decoration-line-through">$89.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-3.jpg" class="w-100 img-fluid img1" alt="p-3">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-4.jpg" class="w-100 img-fluid img2" alt="p-4">
                                                            <span class="product-label product-label-new product-label-left">New</span>
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Ring / Chic</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Luxe loop</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$49.00</span>
                                                                        <span class="old-price text-decoration-line-through">$59.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$49.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$59.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="luxe-loop-size" name="luxe-loop-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-5.jpg" class="w-100 img-fluid img1" alt="p-5">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-6.jpg" class="w-100 img-fluid img2" alt="p-6">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Ears / Glow</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Opal stud</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$69.00</span>
                                                                        <span class="old-price text-decoration-line-through">$79.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$69.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$79.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="opal-stud-size" name="opal-stud-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-7.jpg" class="w-100 img-fluid img1" alt="p-7">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-8.jpg" class="w-100 img-fluid img2" alt="p-8">
                                                            <span class="product-label product-label-discount product-label-left">-5% off</span>
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Ears / Bold</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Ruby hoop</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$49.00</span>
                                                                        <span class="old-price text-decoration-line-through">$54.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$49.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$54.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="ruby-hoop-size" name="ruby-hoop-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-9.jpg" class="w-100 img-fluid img1" alt="p-9">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-10.jpg" class="w-100 img-fluid img2" alt="p-10">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Neck / Soft</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Pearl link</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$89.00</span>
                                                                        <span class="old-price text-decoration-line-through">$99.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$89.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$99.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="pearl-link-size" name="pearl-link-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-11.jpg" class="w-100 img-fluid img1" alt="p-11">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-12.jpg" class="w-100 img-fluid img2" alt="p-12">
                                                            <span class="product-label product-label-sale product-label-left">Sale</span>
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Wrist / Rich</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Gold bead</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$79.00</span>
                                                                        <span class="old-price text-decoration-line-through">$84.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$84.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="gold-bead-size" name="gold-bead-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-13.jpg" class="w-100 img-fluid img1" alt="p-13">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-14.jpg" class="w-100 img-fluid img2" alt="p-14">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Ears / Flow</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Sway drop</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$29.00</span>
                                                                        <span class="old-price text-decoration-line-through">$39.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$29.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$39.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="sway-drop-size" name="sway-drop-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-15.jpg" class="w-100 img-fluid img1" alt="p-15">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-16.jpg" class="w-100 img-fluid img2" alt="p-16">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Neck / Glow</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Star charm</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$14.00</span>
                                                                        <span class="old-price text-decoration-line-through">$19.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$14.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$19.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="star-charm-size" name="star-charm-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-17.jpg" class="w-100 img-fluid img1" alt="p-17">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-18.jpg" class="w-100 img-fluid img2" alt="p-18">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Wrist / Dazz</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Glim cuff</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$64.00</span>
                                                                        <span class="old-price text-decoration-line-through">$74.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$64.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$74.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="glim-cuff-size" name="glim-cuff-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-19.jpg" class="w-100 img-fluid img1" alt="p-19">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-20.jpg" class="w-100 img-fluid img2" alt="p-20">
                                                            <span class="product-label product-label-sold product-label-left">Sold</span>
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Neck / Pure</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Jade bead</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$34.00</span>
                                                                        <span class="old-price text-decoration-line-through">$44.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart disabled">
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
                                                                    <span class="new-price dominant-color">$34.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$44.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart disabled">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="jade-bead-size" name="jade-bead-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-21.jpg" class="w-100 img-fluid img1" alt="p-21">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-22.jpg" class="w-100 img-fluid img2" alt="p-22">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Wrist / Flex</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Twist bangle</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$4.00</span>
                                                                        <span class="old-price text-decoration-line-through">$9.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$4.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$9.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="twist-bangle-size" name="twist-bangle-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                        <div class="col-6 col-md-4 d-flex shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product w-100">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product.html" class="pro-img">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-23.jpg" class="w-100 img-fluid img1" alt="p-23">
                                                            <img src="<?=base_url()?>u_assets/assets/image/index/product/p-24.jpg" class="w-100 img-fluid img2" alt="p-24">
                                                        </a>
                                                        <div class="product-action">
                                                            <a href="wishlist.html" class="wishlist">
                                                                <span class="product-icon">Wishlist</span>
                                                            </a>
                                                            <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                <span class="product-icon">Quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="pro-content-action">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-8">Neck / Luxe</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="d-block w-100 dominant-link text-truncate">Shiny choke</a></span>
                                                                </div>
                                                                <div class="pro-price-action">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price dominant-color">$9.00</span>
                                                                        <span class="old-price text-decoration-line-through">$14.00</span>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-cart">
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
                                                                    <span class="new-price dominant-color">$9.00</span>
                                                                    <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$14.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="javascript:void(0)" class="add-to-cart">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                    </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-wishlist">
                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <select id="shiny-choke-size" name="shiny-choke-size" class="h-auto dominant-color bg-transparent text-uppercase heading-weight border-0">
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
                                    </div>
                                    <!-- shop-grid end -->
                                    <!-- paginatoin start -->
                                    <div class="paginatoin-area section-pt" data-animate="animate__fadeIn">
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
                                    </div>
                                    <!-- paginatoin end -->
                                </div>
                            </div>
                            <!-- collection-info end -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-content start -->
        </main>