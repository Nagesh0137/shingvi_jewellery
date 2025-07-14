<main class="main__content_wrapper">
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/custome_jewellery/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Custome Jewellery</span>
    </div>
</div>

    <!-- Custom Jewelry Form Section -->
    <section class="custom__section section--padding">
        <div class="container">
            <div class="section__header text-center mb-5">
                <h2 class="section__title">CREATE YOUR DREAM JEWELRY</h2>
                <p class="section__subtitle">Fill out the form below to begin your custom jewelry journey</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="custom__form--wrapper shadow-lg p-4 p-md-5">
                        <form action="<?=base_url();?>user/custom_jwellery_save" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form__group">
                                        <label for="image" class="form__label">Upload Design Image <span class="text-danger">*</span></label>
                                        <div class="file__upload--wrapper">
                                            <input type="file" name="image" id="image" class="form__control" required accept="image/*">
                                            <div class="file__upload--preview mt-2" id="imagePreview"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <div class="form__group">
                                        <label for="description" class="form__label">Design Description <span class="text-danger">*</span></label>
                                        <textarea name="description" id="description" class="form__control" placeholder="Describe your custom jewelry design..." required></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <div class="form__group">
                                        <label for="budget" class="form__label">Your Budget (₹) <span class="text-danger">*</span></label>
                                        <input type="number" name="budget" id="budget" class="form__control" placeholder="Enter your budget" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <div class="form__group">
                                        <label for="name" class="form__label">Your Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form__control" placeholder="Enter your name" required value="<?=(isset($user_det['firstname'])) ? $user_det['firstname']." ".$user_det['lastname'] : ''?>">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <div class="form__group">
                                        <label for="email" class="form__label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form__control" placeholder="Enter your email" required value="<?=(isset($user_det['email'])) ? $user_det['email'] : ''?>">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <div class="form__group">
                                        <label for="phone_number" class="form__label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" name="phone_number" id="phone_number" class="form__control" placeholder="Enter your phone number" required value="<?=(isset($user_det['mobile'])) ? $user_det['mobile'] : ''?>">
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <div class="form__group">
                                        <label for="address" class="form__label">Delivery Address <span class="text-danger">*</span></label>
                                        <textarea name="address" id="address" class="form__control" rows="3" placeholder="Enter your complete address" required></textarea>
                                    </div>
                                </div>
                                
                                <!-- Hidden fields -->
                                <input type="hidden" name="gold_color" value="">
                                <input type="hidden" name="diamond_clarity" value="">
                                <input type="hidden" name="gold_purity" value="">
                                
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn__primary">SUBMIT DESIGN REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process__section section--padding bg-light">
        <div class="container">
            <div class="section__header text-center mb-5">
                <h2 class="section__title">OUR CUSTOM JEWELRY PROCESS</h2>
                <p class="section__subtitle">How we bring your unique vision to life</p>
            </div>
            
            <div class="row process__steps">
                <div class="col-md-4 col-lg-2 mb-4">
                    <div class="process__card">
                        <div class="process__icon">
                            <img src="<?=base_url();?>u_assets/assets/image/custome_jewellery/custjew-step1.png" alt="Step 1">
                        </div>
                        <div class="process__content">
                            <h3 class="process__title">STEP 1</h3>
                            <p class="process__text">Share your jewelry design and customization ideas</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-2 mb-4">
                    <div class="process__card">
                        <div class="process__icon">
                            <img src="<?=base_url();?>u_assets/assets/image/custome_jewellery/custjew-step2.png" alt="Step 2">
                        </div>
                        <div class="process__content">
                            <h3 class="process__title">STEP 2</h3>
                            <p class="process__text">We analyze your requirements and provide estimates</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-2 mb-4">
                    <div class="process__card">
                        <div class="process__icon">
                            <img src="<?=base_url();?>u_assets/assets/image/custome_jewellery/custjew-step3.png" alt="Step 3">
                        </div>
                        <div class="process__content">
                            <h3 class="process__title">STEP 3</h3>
                            <p class="process__text">We create the perfect mold for your jewelry</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-2 mb-4">
                    <div class="process__card">
                        <div class="process__icon">
                            <img src="<?=base_url();?>u_assets/assets/image/custome_jewellery/custjew-step4.png" alt="Step 4">
                        </div>
                        <div class="process__content">
                            <h3 class="process__title">STEP 4</h3>
                            <p class="process__text">Your custom jewelry is crafted to perfection</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-2 mb-4">
                    <div class="process__card">
                        <div class="process__icon">
                            <img src="<?=base_url();?>u_assets/assets/image/custome_jewellery/custjew-step5.png" alt="Step 5">
                        </div>
                        <div class="process__content">
                            <h3 class="process__title">STEP 5</h3>
                            <p class="process__text">Ready for shipping to your destination</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-lg-2 mb-4">
                    <div class="process__card">
                        <div class="process__icon">
                            <img src="<?=base_url();?>u_assets/assets/image/custome_jewellery/custjew-step6.png" alt="Step 6">
                        </div>
                        <div class="process__content">
                            <h3 class="process__title">STEP 6</h3>
                            <p class="process__text">Secure packaging for safe delivery</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact__cta bg-danger text-white text-center py-4 mt-5">
                <h3 class="cta__title mb-2">HAVE QUESTIONS ABOUT CUSTOM JEWELRY?</h3>
                <p class="cta__text mb-3">Call us at <?=$web_contact_details[0]['mobile_no'];?></p>
                <a href="tel:<?=$web_contact_details[0]['mobile_no'];?>" class="btn__light">CALL NOW</a>
            </div>
        </div>
    </section>
</main>

<style>
    .custom__section {
        padding: 80px 0;
    }
    
    .section__header {
        margin-bottom: 50px;
    }
    
    .section__title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }
    
    .section__title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background-color: #B32726;
    }
    
    .section__subtitle {
        color: #666;
        font-size: 1.1rem;
    }
    
    .custom__form--wrapper {
        background: white;
        border-radius: 10px;
    }
    
    .form__group {
        margin-bottom: 20px;
    }
    
    .form__label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }
    
    .form__control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .form__control:focus {
        outline: none;
        border-color: #B32726;
        box-shadow: 0 0 0 3px rgba(179, 39, 38, 0.1);
    }
    
    textarea.form__control {
        min-height: 120px;
        resize: vertical;
    }
    
    .file__upload--wrapper {
        position: relative;
    }
    
    .file__upload--preview {
        width: 150px;
        height: 150px;
        border: 2px dashed #ddd;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    
    .file__upload--preview img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    
    .btn__primary {
        background-color: #B32726;
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .btn__primary:hover {
        background-color: #9a1f1e;
        transform: translateY(-2px);
    }
    
    .process__section {
        padding: 80px 0;
    }
    
    .process__steps {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .process__card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        height: 100%;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .process__card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .process__icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 15px;
    }
    
    .process__icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    
    .process__title {
        font-size: 1.2rem;
        color: #B32726;
        margin-bottom: 10px;
    }
    
    .process__text {
        font-size: 0.9rem;
        color: #666;
    }
    
    .contact__cta {
        border-radius: 10px;
        padding: 30px;
    }
    
    .cta__title {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }
    
    .cta__text {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
    
    .btn__light {
        background: white;
        color: #B32726;
        padding: 10px 25px;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .btn__light:hover {
        background: #f8f9fa;
        color: #9a1f1e;
    }
    
    @media (max-width: 768px) {
        .section__title {
            font-size: 2rem;
        }
        
        .process__card {
            margin-bottom: 30px;
        }
        
        .contact__cta {
            padding: 20px;
        }
        
        .cta__title {
            font-size: 1.3rem;
        }
        
        .cta__text {
            font-size: 1rem;
        }
    }
</style>

<script>
    // Image preview functionality
    document.getElementById('image').addEventListener('change', function(e) {
        const preview = document.getElementById('imagePreview');
        const file = e.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.innerHTML = '<img src="' + e.target.result + '" class="img-fluid">';
            }
            
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = '';
        }
    });
</script>