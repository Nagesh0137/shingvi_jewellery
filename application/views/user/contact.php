<main class="main__content_wrapper">
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Contact</span>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact__section section--padding">
        <div class="container">
            <div class="section__heading text-center mb-5">
                <h2 class="section__title">GET IN TOUCH</h2>
                <p class="section__subtitle">We'd love to hear from you</p>
            </div>
            
            <div class="contact__wrapper">
                <!-- Contact Form -->
                <div class="contact__form--wrapper">
                    <h3 class="form__title">Send us a message</h3>
                    <form class="contact__form" action="<?=base_url()?>sameer/save_contact_form" method="post" onsubmit="return validateContactForm()">
                        <!-- Name -->
                        <div class="form__group">
                            <label for="name">Your Name <span class="required">*</span></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"
                            value="<?= isset($user_det['firstname']) ? $user_det['firstname'].' '.$user_det['lastname'] : '' ?>" 
                            required pattern="[A-Za-z\s]{2,50}" title="Please enter a valid name (letters and spaces only)">
                        </div>

                        <!-- Mobile & Email -->
                        <div class="form__row">
                            <div class="form__group">
                                <label for="mobile">Phone Number <span class="required">*</span></label>
                                <input type="tel" name="mobile" id="mobile" placeholder="Phone number"
                                value="<?= isset($user_det['firstname']) ? $user_det['mobile'] : '' ?>" 
                                required pattern="[0-9]{10}" maxlength="10"
                                title="Enter a valid 10-digit mobile number" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>


                            <div class="form__group">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                value="<?= isset($user_det['firstname']) ? $user_det['email'] : '' ?>" 
                                required>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form__group">
                            <label for="enquiry">Your Message <span class="required">*</span></label>
                            <textarea name="enquiry" id="enquiry" placeholder="Write your message here..." required minlength="10"
                            title="Please enter at least 10 characters"></textarea>
                        </div>

                        <button type="submit" class="submit__btn">Submit Message</button>
                    </form>

                </div>
                
                <!-- Contact Info -->
                <div class="contact__info--wrapper">
                    <div class="contact__info--item">
                        <div class="contact__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="contact__content">
                            <h4>Call Us</h4>
                            <p>
                                <a href="tel:<?=$contact[0]['mobile_no']?>"><?=$contact[0]['mobile_no']?></a><br>
                                <a href="tel:<?=$contact[0]['mobile_no2']?>"><?=$contact[0]['mobile_no2']?></a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact__info--item">
                        <div class="contact__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="contact__content">
                            <h4>Email Us</h4>
                            <p>
                                <a href="mailto:<?=$contact[0]['email1']?>"><?=$contact[0]['email1']?></a><br>
                                <a href="mailto:<?=$contact[0]['email2']?>"><?=$contact[0]['email2']?></a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact__info--item">
                        <div class="contact__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="contact__content">
                            <h4>Our Locations</h4>
                            <p>
                                3155, JUNA KAPAD BAZAR, AHMEDNAGAR,<br>
                                MAHARASHTRA, 414001.<br><br>
                                PROFESSOR CHOWK, SAVEDI, AHMEDNAGAR,<br>
                                MAHARASHTRA, 414001.
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact__info--item">
                        <div class="contact__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                <path d="M2 10h20M7 15h1m4 0h1m4 0h1"></path>
                            </svg>
                        </div>
                        <div class="contact__content">
                            <h4>Follow Us</h4>
                            <div class="social__links">
                                <a href="https://www.facebook.com/shingavijewellerspvtltd/" target="_blank" class="social__link">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="http://pinterest.com/pin/create/button/?url=<?=urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")?>" target="_blank" class="social__link">
                                    <i class="ri-pinterest-fill"></i>
                                </a>
                                <a href="https://www.instagram.com/shingavijewellers/" target="_blank" class="social__link">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                                <a href="https://wa.me/?text=<?=urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")?>" target="_blank" class="social__link">
                                    <i class="ri-whatsapp-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="map__section">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="map__wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15079.099066565494!2d74.7176940554199!3d19.117534400000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcba80e92dceb9%3A0xb4508942ab098a3!2sShingavi%20Jewellers%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1729669055869!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map__wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.2983871405077!2d74.73721577583804!3d19.094561451388383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb066ccf6dc79%3A0x1f57efbfb6863cb1!2s3155%2C%20Juna%20Kapad%20Bazaar%20Rd%2C%20Nalegaon%2C%20Ahmadnagar%2C%20Maharashtra%20414001!5e0!3m2!1sen!2sin!4v1747893669115!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Contact Section */
    .contact__section {
        padding: 80px 0;
    }
    
    .section__title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 15px;
        position: relative;
    }
    
    .section__title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #878585;
    }
    
    .section__subtitle {
        color: #666;
        font-size: 1.1rem;
    }
    
    .contact__wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-top: 50px;
    }
    
    .contact__form--wrapper {
        flex: 1;
        min-width: 300px;
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .form__title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 15px;
    }
    
    .form__title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background-color: #878585;
    }
    
    .form__group {
        margin-bottom: 20px;
    }
    
    .form__row {
        display: flex;
        gap: 20px;
    }
    
    .form__row .form__group {
        flex: 1;
    }
    
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
    }
    
    .required {
        color: #e74c3c;
    }
    
    input, textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    input:focus, textarea:focus {
        outline: none;
        border-color: #878585;
        box-shadow: 0 0 0 3px rgba(135, 133, 133, 0.1);
    }
    
    textarea {
        min-height: 120px;
        resize: vertical;
    }
    
    .submit__btn {
        background-color: #878585;
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }
    
    .submit__btn:hover {
        background-color: #6b6969;
    }
    
    /*.contact__info--wrapper {
        flex: 1;
        min-width: 300px;
        background: #818280;
        padding: 40px;
        border-radius: 10px;
        color: white;
    }*/
    .contact__info--wrapper {
        flex: 1;
        min-width: 300px;
        background: #f7f4ef; /* Light and attractive background */
        padding: 40px;
        border-radius: 10px;
        color: #333; /* Darker text for better contrast on light background */
    }

    
    .contact__info--item {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .contact__icon {
        width: 50px;
        height: 50px;
        background: #b32726; /* softer background for icon circle */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .contact__icon svg {
        width: 24px;
        height: 24px;
        color: white; /* deep jewel red for icons – you can change to gold (#c9a96b) or gray (#333) */
    }
    
    .contact__content h4 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    
    .contact__content a,
    .contact__content p {
        color: #555; /* Slightly dark text for readability */
    }
    
    .contact__content a:hover {
        color: white;
        text-decoration: underline;
    }
    
    .social__links {
        display: flex;
        gap: 15px;
    }
    
    .social__link {
        color: #b32726; /* Stylish red, consistent with brand tone */
    }
    
    .social__link:hover {
        color: #8c1f1e;
    }
    
    /* Map Section */
    .map__section {
        margin-top: 50px;
    }
    
    .map__wrapper {
        height: 400px;
        width: 100%;
    }
    
    .map__wrapper iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    
    @media (max-width: 768px) {
        .contact__wrapper {
            flex-direction: column;
        }
        
        .form__row {
            flex-direction: column;
            gap: 0;
        }
        
        .map__wrapper {
            height: 300px;
        }
        
        .section__title {
            font-size: 2rem;
        }
    }
    input.is-invalid, textarea.is-invalid {
      border-color: #e74c3c;
      background: #fff2f2;
  }

</style>

<script>
    function validateContactForm() {
        const name = document.getElementById("name");
        const mobile = document.getElementById("mobile");
        const email = document.getElementById("email");
        const enquiry = document.getElementById("enquiry");

        const mobilePattern = /^[0-9]{10}$/;
        const namePattern = /^[A-Za-z\s]{2,50}$/;

        if (!namePattern.test(name.value)) {
            alert("Please enter a valid name (only letters and spaces, 2-50 characters).");
            name.focus();
            return false;
        }

        if (!mobilePattern.test(mobile.value)) {
            alert("Please enter a valid 10-digit mobile number.");
            mobile.focus();
            return false;
        }

        if (!email.value.includes('@') || email.value.length < 5) {
            alert("Please enter a valid email address.");
            email.focus();
            return false;
        }

        if (enquiry.value.trim().length < 10) {
            alert("Message should be at least 10 characters.");
            enquiry.focus();
            return false;
        }

        return true;
    }
</script>
