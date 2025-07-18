
        <main id="main">
           <!--  <?php 
                                                    print_r($products[0]);

            ?> -->
            <!-- product-detail start -->
            <section class="product-detail section-pt">
                <!-- product prev-next start -->
                <a href="product2.html" class="d-none d-xl-block position-fixed top-50 translate-middle-y z-2 np-product prev">
                    <span class="d-block body-secondary-color msl-5 heading-weight text-uppercase lh-1">Prev</span>
                </a>
                <a href="product4.html" class="d-none d-xl-block position-fixed top-50 translate-middle-y z-2 np-product next">
                    <span class="d-block body-secondary-color mer-5 heading-weight text-uppercase lh-1">Next</span>
                </a>
                <!-- product prev-next end -->
                <div class="container">
                    <div class="row row-mtm align-items-lg-start">
                        <div class="col-12 col-lg-6 p-lg-sticky top-0">
                            <!-- product-detail-slider start -->
                            <div class="product-detail-slider per-xxl-10">
                                <div class="row ul-mt15 flex-sm-row-reverse">
                                    <div class="col-12 col-sm-10" data-animate="animate__fadeIn">
                                        <!-- product-img-big start -->
                                        <div class="product-img-big slider-big-v position-relative br-hidden">
                                            <div class="swiper" id="slider-big-v">
                                                <div class="swiper-wrapper product-swiper-wrapper">
                                                    <?php 
                                                        foreach($products[0]['imgs'] as $row){
                                                    ?>
                                                    <div class="swiper-slide product-swiper-slide">
                                                        <div class="product-item-img position-relative">
                                                            <a href="<?=base_url()?>uploads/<?=$row?>" class="full-view product-thumbnail heading-color position-absolute top-0 end-0 width-40 height-40 d-flex align-items-center justify-content-center body-bg z-1 mst-15 mer-15 rounded-circle box-shadow" aria-label="Image full view"><i class="ri-fullscreen-line d-block lh-1"></i></a>
                                                            <img src="<?=base_url()?>uploads/<?=$row?>" data-zoom="assets/image/product/p-1.jpg" class="w-100 img-fluid zoom" alt="p-1">
                                                        </div>
                                                    </div>
                                                    
                                                    <?php } ?>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <button type="button" class="swiper-prev swiper-prev-big secondary-btn icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                                <button type="button" class="swiper-next swiper-next-big secondary-btn icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                        <!-- product-img-big end -->
                                    </div>
                                    <div class="col-12 col-sm-2" data-animate="animate__fadeIn">
                                        <!-- product-img-small start -->
                                        <div class="product-img-small slider-small-v">
                                            <div class="swiper" id="slider-small-v">
                                                <div class="swiper-wrapper">
                                                    <?php 
                                                        foreach($products[0]['imgs'] as $row){
                                                    ?>
                                                    <div class="swiper-slide product-swiper-slide">
                                                        <div class="product-item-img br-hidden">
                                                            <a href="javascript:void(0)" class="d-block product-thumbnail">
                                                                <img src="<?=base_url()?>uploads/<?=$row?>" class="w-100 img-fluid" alt="p-1">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-img-small end -->
                                    </div>
                                </div>
                            </div>
                            <!-- product-detail-slider end -->
                        </div>
                        <div class="col-12 col-lg-6 p-lg-sticky top-0">
                            <!-- product-detail-info start -->
                            <div class="product-detail-info psl-xxl-10">
                                <div class="product-info" data-animate="animate__fadeIn">
                                    <div class="product-sku">
                                        <span class="font-14 text-uppercase"><?=$products[0]['category_name']?></span>
                                    </div>
                                </div>
                                <div class="product-info mst-5" data-animate="animate__fadeIn">
                                    <div class="product-title">
                                        <h2 class="font-24"><?=$products[0]['product_name']?></h2>
                                    </div>
                                </div>
                                <div class="product-info mst-15" data-animate="animate__fadeIn">
                                    <?php
                                    if($products[0]['discount_amount'] > 0){
                                        $original_price = $products[0]['original_price'];
                                        $discounted_price = $products[0]['discounted_price'];
                                        $discount_percent = round((($original_price - $discounted_price) / $original_price) * 100);
                                    ?>
                                    <div class="product-price">
                                        <div class="price-box font-20">
                                            <span class="new-price dominant-color heading-weight"> <?=$products[0]['formatted_discounted_price']?></span>
                                            <span class="old-price heading-weight"><span class="mer-3">~</span><span class="text-decoration-line-through"> <?=$products[0]['formatted_original_price']?></span></span>
                                            <span class="discount-price secondary-color">-<?=$discount_percent?>% off</span>
                                        </div>
                                    </div>
                                    <?php }else{
                                        ?>
                                        <div class="product-price">
                                        <div class="price-box font-20">
                                            <span class="new-price dominant-color heading-weight"> <?=$products[0]['formatted_discounted_price']?></span>
                                           
                                        </div>
                                    </div>
                                        <?php
                                    } ?>
                                </div>
                                <div class="product-info mst-20" data-animate="animate__fadeIn">
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
                                            <div class="pro-write">
                                                <a href="#reviews" class="text-uppercase heading-weight text-decoration-underline">Write a review</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-view">
                                        <span class="heading-color"><i class="ri-eye-line icon-16 mer-4 blinking"></i><span class="product-live-visitor"></span> people are viewing this product right now</span>
                                    </div>
                                </div>
                                <div class="product-info mst-15" data-animate="animate__fadeIn">
                                    <div class="product-availability">
                                        <span class="d-inline-block text-success"><span class="heading-color heading-weight mer-10">Availability:</span><?=$products[0]['product_qty']?> stock</span>
                                    </div>
                                </div>
                                
                                <div class="product-info mst-15" data-animate="animate__fadeIn">
                                    <div class="product-sold">
                                        <span class="text-danger"><i class="ri-fire-line icon-16 mer-4 blinking"></i><span class="heading-weight"><span class="product-sold-count"></span> products sold in last <span class="product-hours-count"></span> hours</span></span>
                                    </div>
                                </div>
                                <div class="product-info mst-25" data-animate="animate__fadeIn">
                                    <div class="product-border bst"></div>
                                </div>
                                <div class="product-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-desc">
                                        <p><?=$products[0]['product_details']?></p>
                                    </div>
                                </div>
                                
                                <div class="product-info mst-25" data-animate="animate__fadeIn">
                                    <div class="product-variant">
                                        <div class="product-variant-option">
                                             <?php 
                                                        if(!empty($products[0]['ring_size']))
                                                        {
                                                            $sizes = explode(',',$products[0]['ring_size']);
                                                            ?>
                                            <span class="d-inline-block meb-11">
                                                <span class="heading-color heading-weight mer-10">Size:</span>
                                                <span id="display-size"> <?=$sizes[0]?></span>  
                                                <a href="#size-modal" data-bs-toggle="modal" class="msl-15 msl-sm-30 text-uppercase heading-weight text-decoration-underline">Size guide</a>
                                            </span>
                                            <div class="product-option-block size">
                                                <ul class="ul-mt5">
                                                    <?php 
                                                        if(!empty($products[0]['ring_size']))
                                                        {
                                                            $i=0;
                                                    foreach($sizes as $sz){ 
                                                    $i++;   
                                                    ?>
                                                    <li>
                                                        <label class="cust-checkbox-label">
                                                            <input type="radio" name="selected_size" id="selected_size" class="cust-checkbox" value="<?=$sz?>" <?=($i == 1) ? 'checked':'';?>>
                                                            <span class="d-block cust-check border-full border-radius"><?=$sz?></span>
                                                        </label>
                                                    </li>
                                                    <?php 
                                                    } }
                                                    ?>
                                                    
                                                </ul>
                                            </div>
                                        <?php }
                                        else{
                                            ?>
                                            <div class="product-option-block size">
                                                <ul class="ul-mt5">
                                                    <li>
                                                        <label class="cust-checkbox-label">
                                            <input type="radio" name="selected_size" id="selected_size" class="cust-checkbox" value="NA" checked>
                                            <span class="d-inline-block meb-11"><span class="heading-color heading-weight mer-10">Size:</span>Not Available
                                            </span>
                                        </label>
                                    </li>
                                        </ul>
                                    </div>
                                            <?php
                                        }?>
                                        </div>
                                        
                                    </div>
                                </div>
                                <script>
   
</script>



                                <div class="product-info mst-25" data-animate="animate__fadeIn">
                                    <div class="product-quantity d-flex flex-wrap align-items-center">
                                        <span class="heading-color heading-weight mer-10">Quantity:</span>
                                        <div class="js-qty-wrapper">
                                            <div class="js-qty-wrap d-flex extra-bg border-full br-hidden">
                                                <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                <input type="number" name="selected_qty" id="selected_qty" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-button mst-15">
                                        <div class="row btn-row15">
                                            <div class="col-12 col-sm-6">
                                                <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon">Add to Cart</span>
                                                        <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                        <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <?php 
                                                if(isset($_SESSION['user_id']))
                                                {
                                                ?>
                                                <a onclick="openAddressModal('<?=$products[0]['prod_gold_id']?>')" class="w-100 btn-style secondary-btn">Buy now</a>
                                                <?php }else{ ?>
                                                <a onclick="openAddressModal('<?=$products[0]['prod_gold_id']?>')" class="w-100 btn-style secondary-btn">Buy now</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product-info mst-15" data-animate="animate__fadeIn">
                                    <div class="ul-row">
                                        <div class="product-wishlist">
                                            <a href="javascript:void(0)" class="add-to-wishlist heading-color"><i class="ri-heart-line icon-16 mer-4"></i>Wishlist</a>
                                        </div>
                                        
                                        <div class="product-ask">
                                            <a href="#buy-now-modal" data-bs-toggle="modal" class="ask-question heading-color"><i class="ri-edit-box-line icon-16 mer-4"></i>Ask a question</a>
                                        </div>
                                        <div class="product-share">
                                            <a href="#share-modal" data-bs-toggle="modal" class="share heading-color"><i class="ri-share-line icon-16 mer-4"></i>Share</a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="product-info mst-20" data-animate="animate__fadeIn">
                                    <div class="product-border bst"></div>
                                </div>
                                <div class="product-info mst-25" data-animate="animate__fadeIn">
                                    <div class="product-delivery">
                                        <span class="d-inline-block"><i class="ri-check-line heading-color icon-16 mer-4"></i>Your order will reach you within 5-7 business days</span>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <!-- product-detail-info end -->
                        </div>
                    </div>
                    <!-- product-service start -->
                    <div class="product-service mst-30">
                        <div class="ptb-15 plr-15 extra-bg br-hidden">
                            <div class="ul-mt15">
                                <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated" data-animate="animate__fadeIn">
                                    <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                        <span class="mer-5"><i class="ri-box-3-line icon-24"></i></span>
                                        <span>Return & exchange</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated" data-animate="animate__fadeIn">
                                    <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                        <span class="mer-5"><i class="ri-hand-coin-line icon-24"></i></span>
                                        <span>Cash on delivery</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated" data-animate="animate__fadeIn">
                                    <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                        <span class="mer-5"><i class="ri-truck-line icon-24"></i></span>
                                        <span>Free delivery</span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 animate__fadeIn animate__animated" data-animate="animate__fadeIn">
                                    <div class="heading-color d-flex align-items-center justify-content-lg-center">
                                        <span class="mer-5"><i class="ri-secure-payment-line icon-24"></i></span>
                                        <span>Safe payment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-service end -->
                </div>
                <!-- size-modal start -->
                <div class="size-modal modal fade" id="size-modal" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content body-bg border-0 br-hidden">
                            <div class="modal-body ptb-30 plr-15 plr-sm-30">
                                <div class="size-modal-header d-flex align-items-center justify-content-between meb-30">
                                    <h6 class="font-18">Size guide</h6>
                                    <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                </div>
                                <div class="size-modal-content text-center">
                                    <div class="table-responsive">
                                        <table class="table w-100">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="heading-color heading-weight text-nowrap border-full">Size</th>
                                                    <th scope="row" class="heading-color heading-weight text-nowrap border-full">US</th>
                                                    <th scope="row" class="heading-color heading-weight text-nowrap border-full">Bust</th>
                                                    <th scope="row" class="heading-color heading-weight text-nowrap border-full">Waist</th>
                                                    <th scope="row" class="heading-color heading-weight text-nowrap border-full">Low Hip</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-nowrap border-full">XS</td>
                                                    <td class="text-nowrap border-full">2</td>
                                                    <td class="text-nowrap border-full">32</td>
                                                    <td class="text-nowrap border-full">24-25</td>
                                                    <td class="text-nowrap border-full">33-34</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap border-full">S</td>
                                                    <td class="text-nowrap border-full">4</td>
                                                    <td class="text-nowrap border-full">34-35</td>
                                                    <td class="text-nowrap border-full">26-27</td>
                                                    <td class="text-nowrap border-full">35-26</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap border-full">M</td>
                                                    <td class="text-nowrap border-full">6</td>
                                                    <td class="text-nowrap border-full">36-37</td>
                                                    <td class="text-nowrap border-full">28-29</td>
                                                    <td class="text-nowrap border-full">38-40</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap border-full">L</td>
                                                    <td class="text-nowrap border-full">8</td>
                                                    <td class="text-nowrap border-full">38-29</td>
                                                    <td class="text-nowrap border-full">30-31</td>
                                                    <td class="text-nowrap border-full">42-44</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-nowrap border-full">XL</td>
                                                    <td class="text-nowrap border-full">10</td>
                                                    <td class="text-nowrap border-full">40-41</td>
                                                    <td class="text-nowrap border-full">32-33</td>
                                                    <td class="text-nowrap border-full">45-47</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-img mx-auto">
                                        <img src="<?=base_url()?>u_assets/assets/image/product/size-guide.png" class="w-100 img-fluid" alt="size-guide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- size-modal end -->



                <!-- Address Modal -->
                <div class="address-modal modal fade justify-content-center" id="address-modal" data-bs-backdrop="static" style="height: 100vh;top:0;overflow: hidden;margin: 0;padding: 0;border-radius: 0px !important;"  >
                    <div style="overflow-y: auto;border-radius: 0px !important;" class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered my-0 justify-content-center" >
                        <div class="modal-content body-bg border-0 br-hidden" style=";height: 100vh; border-radius: 16px 16px 0 0; overflow-y: auto;border-radius: 0px !important;">
                            <div class="modal-body plr-15 plr-sm-30" id="address-modal-body" style="border-radius: 0px !important;">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- buy-now-modal start --> 
                <!-- Buy Now Modal -->

                
                <script>
                let receivedOtp = '';
                let enteredMobile = '';
                let user_status = '';
                let errorMsg = '';
                let userDet = '';
                let productDet = '';
$(document).on('click', '.question-form-submit:first', function () {
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
        data: { mobile_number: mobile,pId:productId },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            if (res.status === 'success') {
                receivedOtp = res.otp;
                productDet = res.product_details[0];
                if(res.user_status == 'existing')
                {
                    userDet = res.data[0];
                }else{
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
        error: function () {
            // alert("Failed to send OTP. Try again.");
        document.getElementById('errMsg').innerHTML = 'Failed to send OTP. Try again.';

        }
    });
});

// Verify OTP
$(document).on('submit', '#otpForm', function (e) {
    e.preventDefault();
    const inputOtp = $('#otp').val().trim();
    console.log(inputOtp,receivedOtp);
    if (inputOtp == receivedOtp) {
            $.ajax({
                url: '<?= base_url("user/setUserLogin") ?>',
                type: 'POST',
                data: { user_id: userDet.customers_id },
                dataType: 'json',
                success: function (res) {
                    console.log(res);
                    if (res.status === 'success') {
                        console.log('User Sessiom Set');
                    } else {
                        console("Failed To Set User In Session");
                    }
                },
              
            });

        document.getElementById('errMsg').innerHTML = ' ';
        $('.user_status').val(user_status);

            $('#uname').val(userDet.name);
            $('#uemail').val(userDet.email);
            $('.customers_id').val(userDet.customers_id);
            $('#uaddress').val(userDet.address);
            $('#pincode').val(userDet.pincode);
            console.log('productDet',productDet);
        // OTP matched
            openAddressModal(productDet.prod_gold_id);

    } else {
        // alert("Wrong OTP. Please try again.");
        document.getElementById('errMsg').innerHTML = 'Wrong OTP. Please try again.';

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

    window.addEventListener('DOMContentLoaded', function () {
        let selected_Size_to_Buy = '';
        updateSelectedSize();
        // Add change listener to all radios
        const radios = document.querySelectorAll('input[name="selected_size"]');
        radios.forEach(radio => {
            radio.addEventListener('change', updateSelectedSize);
        });
    });





                </script>
                <!-- buy-now-modal end -->
                <!-- share-modal start -->
                <div class="share-modal modal fade" id="share-modal" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content body-bg border-0 br-hidden">
                            <div class="modal-body ptb-30 plr-15 plr-sm-30">
                                <div class="share-modal-header d-flex align-items-center justify-content-between meb-30">
                                    <h6 class="font-18">Share</h6>
                                    <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                </div>
                                <div class="share-modal-content">
                                    <div class="product-link d-md-flex">
                                        <input type="text" id="copy-link" class="copy-url width-100 text-center text-md-start" readonly>
                                        <button type="button" class="copy-btn width-100 width-md-auto btn-style secondary-btn mst-15 mst-md-0 text-nowrap">Copy</button>
                                    </div>
                                    <div class="product-social mst-15">
                                        <ul class="social-ul ul-mt15">
                                            <li class="social-li">
                                                <a href="javascript:void(0)" class="dribbble icon-16" aria-label="Social link"><i class="ri-dribbble-fill d-block lh-1"></i></a>
                                            </li>
                                            <li class="social-li">
                                                <a href="javascript:void(0)" class="facebook icon-16" aria-label="Social link"><i class="ri-facebook-fill d-block lh-1"></i></a>
                                            </li>
                                            <li class="social-li">
                                                <a href="javascript:void(0)" class="instagram icon-16" aria-label="Social link"><i class="ri-instagram-fill d-block instagram lh-1"></i></a>
                                            </li>
                                            <li class="social-li">
                                                <a href="javascript:void(0)" class="linkedin icon-16" aria-label="Social link"><i class="ri-linkedin-fill d-block lh-1"></i></a>
                                            </li>
                                            <li class="social-li">
                                                <a href="javascript:void(0)" class="pinterest icon-16" aria-label="Social link"><i class="ri-pinterest-fill d-block lh-1"></i></a>
                                            </li>
                                            <li class="social-li">
                                                <a href="javascript:void(0)" class="twitter icon-16" aria-label="Social link"><i class="ri-twitter-fill d-block lh-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- share-modal end -->
              
                <!-- pickup-modal start -->
                <div class="pickup-modal modal fade" id="pickup-modal" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content body-bg border-0 br-hidden">
                            <div class="modal-body ptb-30 plr-15 plr-sm-30">
                                <div class="pickup-modal-header d-flex align-items-center justify-content-between meb-30">
                                    <h6 class="font-18">Choose Pickup and Save Time!</h6>
                                    <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                </div>
                                <div class="row row-mtm15 pickup-modal-content">
                                    <div class="col-12">
                                        <span class="d-block heading-color meb-19 heading-weight">👉 Why choose pickup?</span>
                                        <div class="ul-mtm-15">
                                            <span><span class="heading-color heading-weight">Speedy service:</span> Skip the wait and grab your items on the same day.</span>
                                            <span><span class="heading-color heading-weight">No shipping fees:</span> Save money by picking up your order in-store.</span>
                                            <span><span class="heading-color heading-weight">Flexible pickup times:</span> Choose a time that suits your schedule.</span>
                                            <span><span class="heading-color heading-weight">Expert assistance:</span> Our friendly staff are on hand to help with any queries.</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="d-block heading-color meb-19 heading-weight">👉 How it works:</span>
                                        <div class="ul-mtm-15">
                                            <span><span class="heading-color heading-weight">Select pickup:</span> During checkout, choose the pickup option.</span>
                                            <span><span class="heading-color heading-weight">Receive confirmation:</span> You'll receive an email confirmation once your order is ready for pickup.</span>
                                            <span><span class="heading-color heading-weight">Visit the store:</span> Head to your chosen store location at your convenience.</span>
                                            <span><span class="heading-color heading-weight">Collect your order:</span> Present your confirmation email at the pickup point, and our team will hand over your items.</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="d-block heading-color meb-19 heading-weight">👉 Frequently asked questions:</span>
                                        <ul class="ul-mt15">
                                            <li class="d-block">
                                                <div class="ul-mtm-15">
                                                    <span class="d-block heading-color heading-weight">Is pickup available for all items?</span>
                                                    <span class="d-block">Pickup is available for most items. If an item is eligible, you'll see the pickup option during checkout.</span>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div class="ul-mtm-15">
                                                    <span class="d-block heading-color heading-weight">When will my order be ready for pickup?</span>
                                                    <span class="d-block">Orders are typically ready for pickup within a few hours. You'll receive an email notification once your order is ready.</span>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div class="ul-mtm-15">
                                                    <span class="d-block heading-color heading-weight">Can someone else pick up my order for me?</span>
                                                    <span class="d-block">Yes, you can authorize someone else to pick up your order. Simply forward them the confirmation email, and they can collect the items on your behalf.</span>
                                                </div>
                                            </li>
                                            <li class="d-block">
                                                <div class="ul-mtm-15">
                                                    <span class="d-block heading-color heading-weight">Is there a cutoff time for same-day pickup?</span>
                                                    <span class="d-block">Yes, orders placed before [insert cutoff time] are usually available for same-day pickup. Orders placed after this time will be ready the following day.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pickup-modal end -->
            </section>
            <!-- product-detail end -->
            <!-- product-detail-description start -->
            <div class="product-detail-description section-pt">
                <div class="container">
                    <div class="section-capture text-center" data-animate="animate__fadeIn">
                        <div class="section-title">
                            <h2 class="section-heading">Description</h2>
                        </div>
                    </div>
                    <div class="product-tab-description" data-animate="animate__fadeIn">
                        <div class="product-description-info">
                            <h6>About this item</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>As Cicero would put it, “Um, not so fast.”</li>
                                <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</li>
                                <li>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
                                <li>Nor is there anyone who loves or pursues or desires to obtain pain of itself.</li>
                                <li>Because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-detail-description end -->
            <!-- product-detail-additiona-info start -->
            <div class="product-detail-additiona-info section-pt">
                <div class="container">
                    <div class="section-capture text-center" data-animate="animate__fadeIn">
                        <div class="section-title">
                            <h2 class="section-heading">Additional-info</h2>
                        </div>
                    </div>
                    <div class="product-tab-info" data-animate="animate__fadeIn">
                        <div class="product-tab-ai">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Vendor</th>
                                        <td class="ptb-10 plr-15 border-full"><a href="<?=base_url()?>" class="body-dominant-color text-decoration-underline">Shingavi</a></td>
                                    </tr>
                                    <tr>
                                        <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Type</th>
                                        <td class="ptb-10 plr-15 border-full"><a  class="body-dominant-color text-decoration-underline">Collection name</a></td>
                                    </tr>
                                    <tr>
                                        <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Size</th>
                                        <td class="body-color ptb-10 plr-15 border-full">16cm, 18cm, 20cm, 22cm</td>
                                    </tr>
                                    <tr>
                                        <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Color</th>
                                        <td class="body-color ptb-10 plr-15 border-full">Aliceblue, Antiquewhite, Azure</td>
                                    </tr>
                                    <tr>
                                        <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Sku</th>
                                        <td class="body-color ptb-10 plr-15 border-full">RT89GT</td>
                                    </tr>
                                    <tr>
                                        <th class="heading-color ptb-10 plr-15 heading-weight border-full" scope="row">Weight</th>
                                        <td class="body-color ptb-10 plr-15 border-full">5.52kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-detail-additiona-info end -->
            <!-- product-detail-review start -->
            <section class="product-detail-review section-pt" id="reviews">
                <div class="container">
                    <div class="section-capture text-center" data-animate="animate__fadeIn">
                        <div class="section-title">
                            <h2 class="section-heading">Customer love</h2>
                        </div>
                    </div>
                    <div class="product-review" data-animate="animate__fadeIn">
                        <form method="post" action="javascript:void(0)">
                            <div class="row row-mtm">
                                <div class="product-review-info">
                                    <div class="row row-mtm">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <h6 class="font-18 meb-18">Customer reviews</h6>
                                            <div class="product-review-rating"><span class="heading-color fs-3" data-id>0</span>/<span data-score="5">0</span></div>
                                            <div class="product-star">
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star icon-16">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-review-text mst-12">Based on <span data-base>0</span> reviews</div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="row row-mtm15">
                                                <div class="product-review-count d-flex align-items-center">
                                                    <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">5<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                    <span class="product-review-progress mlr-10">
                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                    </span>
                                                    <span class="product-review-number lh-1" data-number="1"></span>
                                                </div>
                                                <div class="product-review-count d-flex align-items-center">
                                                    <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">4<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                    <span class="product-review-progress mlr-10">
                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                    </span>
                                                    <span class="product-review-number lh-1" data-number="0"></span>
                                                </div>
                                                <div class="product-review-count d-flex align-items-center">
                                                    <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">3<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                    <span class="product-review-progress mlr-10">
                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                    </span>
                                                    <span class="product-review-number lh-1" data-number="1"></span>
                                                </div>
                                                <div class="product-review-count d-flex align-items-center">
                                                    <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">2<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                    <span class="product-review-progress mlr-10">
                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                    </span>
                                                    <span class="product-review-number lh-1" data-number="0"></span>
                                                </div>
                                                <div class="product-review-count d-flex align-items-center">
                                                    <span class="product-review-stars d-flex align-items-center justify-content-md-end lh-1">1<span class="review-color msl-5"><i class="ri-star-fill d-block lh-1"></i></span></span>
                                                    <span class="product-review-progress mlr-10">
                                                        <span class="product-review-progress-width position-absolute top-0 bottom-0 start-0 secondary-bg"></span>
                                                    </span>
                                                    <span class="product-review-number lh-1" data-number="0"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 text-md-end">
                                            <button type="button" class="d-none width-100 width-md-auto btn-style secondary-btn write-review-btn">Write a review</button>
                                            <button type="button" class="width-100 width-md-auto btn-style secondary-btn close-review-btn">Close review</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-review-form">
                                    <div class="row field-row">
                                        <div class="col-12 col-md-6 field-col">
                                            <label for="review-name" class="field-label">Name</label>
                                            <input type="text" id="review-name" name="review-name" class="w-100" placeholder="Demo name" autocomplete="name" required>
                                        </div>
                                        <div class="col-12 col-md-6 field-col">
                                            <label for="review-email" class="field-label">Email</label>
                                            <input type="email" id="review-email" name="review-email" class="w-100" placeholder="Email address" autocomplete="email" required>
                                        </div>
                                        <div class="col-12 field-col">
                                            <label class="field-label">Rating</label>
                                            <div class="product-review-ratting">
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star icon-16">
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 field-col">
                                            <label for="review-title" class="field-label">Review title</label>
                                            <input type="text" id="review-title" name="review-title" class="w-100" placeholder="Review title" autocomplete="off" required>
                                        </div>
                                        <div class="col-12 field-col">
                                            <label for="review-message" class="field-label">Review message</label>
                                            <textarea rows="10" id="review-message" name="review-message" class="w-100" placeholder="Review message" autocomplete="off" required></textarea>
                                        </div>
                                        <div class="col-12 field-col">
                                            <label class="field-label">Upload attachment</label>
                                            <div class="field-attachment ptb-30 plr-15 plr-sm-30 text-center">
                                                <div class="review-attachment-upload d-flex flex-column align-items-center">
                                                    <label for="review-img" class="review-attachment-file-upload dominant-link text-decoration-underline">Upload here</label>
                                                    <div class="review-attachment-count d-none mst-10 meb-26">0 attachments</div>
                                                    <input type="file" id="review-img" name="review-img" class="w-100 review-attachment-file" multiple hidden>
                                                    <div class="field-attached">
                                                        <ul class="ul-mt15 review-attachment-uploaded"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-review-button mst-20 mst-sm-30">
                                        <div class="row btn-row">
                                            <div class="col-12 col-sm-6 col-xl-3">
                                                <button type="submit" class="w-100 btn-style quaternary-btn review-submit">Submit review</button>
                                            </div>
                                            <div class="col-12 col-sm-6 col-xl-3">
                                                <button type="button" class="w-100 btn-style secondary-btn review-cancel">Cancel review</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-review-comment">
                                    <div class="row row-mtm">
                                        <div class="product-review-detail">
                                            <div class="product-reviewer-info d-flex flex-wrap align-items-center">
                                                <span class="width-48 height-48 secondary-color icon-16 d-flex align-items-center justify-content-center overflow-hidden rounded-circle"><i class="ri-user-line d-block lh-1"></i></span>
                                                <h6 class="product-reviewer-name width-calc-48 font-18 psl-15">Noah james</h6>
                                            </div>
                                            <div class="product-reviewer-date mst-12">Reviwed on Oct 30, 2021</div>
                                            <div class="product-review-love mst-11">
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star icon-16">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-reviewer-subject heading-color heading-weight mst-12">Very good</div>
                                            <p class="product-reviewer-review mst-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                            <div class="product-reviewer-attachment mst-8">
                                                <ul class="ul-mt5">
                                                    <li><img src="<?=base_url()?>u_assets/assets/image/product/review-product1.jpg" class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden" alt="review-product1"></li>
                                                    <li><img src="<?=base_url()?>u_assets/assets/image/product/review-product2.jpg" class="width-56 img-fluid ptb-4 plr-4 body-bg border-full br-hidden" alt="review-product2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-review-detail">
                                            <div class="product-reviewer-info d-flex flex-wrap align-items-center">
                                                <span class="width-48 height-48 secondary-color icon-16 d-flex align-items-center justify-content-center overflow-hidden rounded-circle"><i class="ri-user-line d-block lh-1"></i></span>
                                                <h6 class="product-reviewer-name width-calc-48 font-18 psl-15">Carla houston</h6>
                                            </div>
                                            <div class="product-reviewer-date mst-12">Reviwed on Oct 30, 2021</div>
                                            <div class="product-review-love mst-11">
                                                <div class="product-ratting">
                                                    <span class="review-ratting">
                                                        <span class="review-star icon-16">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-reviewer-subject heading-color heading-weight mst-12">Good</div>
                                            <p class="product-reviewer-review mst-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- product-detail-review end -->
            <!-- product-detail-video start -->
            
            <!-- product-detail-video end -->
            <!-- related-product start -->
            <section class="related-area section-ptb">
                <div class="container">
                    <div class="collection-category">
                        <div class="section-capture text-center" data-animate="animate__fadeIn">
                            <div class="section-title">
                                <h2 class="section-heading">Related product</h2>
                            </div>
                        </div>
                        <div class="collection-wrap">
                            <div class="related-slider swiper" id="related-slider">
                                <div class="swiper-wrapper">
                                    <?php 
                                        foreach($relatedProducts as $row)
                                        {
                                    ?>
                                    <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                        <div class="single-product w-100">
                                            <div class="row single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img">
                                                        
                                                        <img src="<?=base_url()?>uploads/<?=$row['imgs'][0]?>" class="w-100 img-fluid img1" alt="p-1">
                                                        <?php 
                                                            if(count($row['imgs'])>1)
                                                            {
                                                        ?>
                                                        <img src="<?=base_url()?>uploads/<?=$row['imgs'][1]?>" class="w-100 img-fluid img2" alt="p-2">
                                                        <?php }else{
                                                            ?>
                                                            <img src="<?=base_url()?>uploads/<?=$row['imgs'][0]?>" class="w-100 img-fluid img2" alt="p-1">
                                                            <?php
                                                        } ?>
                                                      
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="wishlist">
                                                            <span class="product-icon">Wishlist</span>
                                                        </a>
                                                        <a onclick="openModal('<?=$row['prod_gold_id']?>')"  class="quick-view">
                                                            <span class="product-icon">Quickview</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-content">
                                                        <div class="pro-content-action">
                                                            <div class="product-title">
                                                                <span class="d-block meb-8"><?=$row['product_group_name']?></span>
                                                                <span class="d-block heading-weight"><a class="d-block w-100 dominant-link text-truncate"><?=$row['product_name']?></a></span>
                                                            </div>
                                                            <div class="pro-price-action">
                                                                <div class="price-box heading-weight">
                                                                    <span class="new-price dominant-color"><?=$row['formatted_discounted_price']?></span>
                                                                    <span class="old-price text-decoration-line-through">
                                                                        <?php
                                                                            if($row['discount_amount'] > 0){
                                                                                echo $row['formatted_original_price'];
                                                                            }
                                                                            ?>
                                                                    </span>
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
                                                                <span class="new-price dominant-color"><?=$row['formatted_discounted_price']?></span>
                                                                <?php
                                                                            if($row['discount_amount'] > 0){
                                                                                ?>
                                                                <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through"><?=$row['formatted_original_price']?></span></span><?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="product-description">
                                                            <p><?=$row['product_details']?></p>
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
                                                            <a onclick="openModal('<?=$row['prod_gold_id']?>')"  class="quick-view">
                                                                <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                <span class="tooltip-text">quickview</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="pro-sku-variant">
                                                        <div class="product-sku-variant">
                                                            <div class="pro-sku">
                                                                <span class="heading-color text-uppercase heading-weight"><span class="dominant-color msl-4"><?=$row['category_name']?></span></span>
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
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-related" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-related" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-related"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- related-product end -->
        </main>
        <!-- main end -->
       