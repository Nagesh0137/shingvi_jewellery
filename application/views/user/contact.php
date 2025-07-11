<!-- Page content -->
<main class="content-wrapper">
    <div class="container py-5 mb-2 mb-sm-3 mb-md-4 mb-lg-5 mt-lg-3 mt-xl-4">

        <!-- Page title -->
        <div class="text-center mb-5">
            <h1 class="text-center">Contact Us</h1>
            <em class="text-center pb-2 pb-sm-3">Get in touch for VIP mobile numbers, premium digits, and special number
                services</em>
        </div>


        <!-- Form + Image -->
        <section class="row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5">

            <!-- Contact form -->
            <div class="col bg-body-tertiary py-5 px-4 ">
                <form class="needs-validation py-md-2 px-md-1 px-lg-3 mx-lg-3" method="Post"
                    action="<?= base_url() ?>user/save_contact_form" novalidate="">
                    <div class="position-relative mb-4">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg rounded-pill"
                            placeholder="Enter Full Name" name="name" id="name" required="">
                        <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your name!</div>
                    </div>
                    <div class="position-relative mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg rounded-pill" name="email"
                            placeholder="Enter Email" id="email">
                        <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your email address!</div>
                    </div>
                    <div class="position-relative mb-4">
                        <label for="phone" class="form-label">Your Phone Number <span
                                class="text-danger">*</span></label>
                        <input type="tel" class="form-control form-control-lg rounded-pill" required name="mobile_no"
                            id="phone" placeholder="XX XX XX XX XX" minlength="10"
                            title="Enter a valid Indian mobile number 10 digigit number">
                    </div>
                    <!-- <div class="position-relative mb-4">
                        <label class="form-label">Subject *</label>
                        <select class="form-select form-select-lg rounded-pill" data-select="{
                  &quot;classNames&quot;: {
                    &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-select-lg&quot;, &quot;rounded-pill&quot;]
                  }}" required="">
                            <option value="">Select subject</option>
                            <option value="VIP Number Inquiry">VIP Number Inquiry</option>
                            <option value="Premium Digits">Premium Digits</option>
                            <option value="Number Availability">Number Availability</option>
                            <option value="Pricing Information">Pricing Information</option>
                            <option value="Custom Number Request">Custom Number Request</option>
                            <option value="Golden Numbers">Golden Numbers</option>
                            <option value="Platinum Numbers">Platinum Numbers</option>
                            <option value="Technical Support">Technical Support</option>
                            <option value="Order Status">Order Status</option>
                            <option value="General Query">General Query</option>
                        </select>
                        <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Select the subject of your message!
                        </div>
                    </div> -->
                    <div class="position-relative mb-4">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control form-control-lg rounded-6" name="message" id="message" rows="3"
                            placeholder="Tell us about your VIP number requirements, preferred digits, or any specific patterns you're looking for..."></textarea>
                        <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Write your message!</div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="btn btn-lg btn-dark rounded-pill">Send Inquiry</button>
                        <div class="form-text mt-2">
                            <small class="text-muted">
                                <i class="ci-shield-check me-1"></i>
                                Your information is secure and will only be used to assist with your VIP number inquiry.
                            </small>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Image -->
            <div class="col position-relative">
                <img src="<?= base_url() ?>uassets/img/contactus.jpg" class=" h-100 center object-fit-cover"
                    alt="Image">
            </div>
        </section>


        <!-- Contacts -->
        <section
            class="row row-cols-1 d-flex justify-content-center row-cols-sm-2 row-cols-lg-4 g-4 pt-5 pb-3 pb-md-4 pb-lg-3 mt-lg-0 mt-xxl-4">
            <div class="col text-center pt-1 pt-sm-2 pt-md-3">
                <div
                    class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
                    <i class="ci-phone-outgoing position-absolute top-50 start-50 translate-middle"></i>
                </div>
                <h3 class="h6">Call us directly</h3>
                <ul class="list-unstyled m-0">

                    <li class="nav animate-underline justify-content-center">
                        Premium Support:
                        <a class="nav-link animate-target fs-base ms-1 p-0"
                            href="tel:<?= $social_media['contact_no'] ?? '' ?>">
                            <?= $social_media['contact_no'] ?? '' ?></a>
                    </li>
                </ul>
            </div>
            <div class="col text-center pt-1 pt-sm-2 pt-md-3">
                <div
                    class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
                    <i class="ci-mail position-absolute top-50 start-50 translate-middle"></i>
                </div>
                <h3 class="h6">Send a message</h3>
                <ul class="list-unstyled m-0">
                    <li class="nav animate-underline justify-content-center">
                        Email us:
                        <a class="nav-link animate-target fs-base ms-1 p-0"
                            href="mailto:<?= $social_media['email'] ?? '' ?>"><?= $social_media['email'] ?? '' ?></a>
                    </li>
                    <!-- <li class="nav animate-underline justify-content-center">
                        Support:
                        <a class="nav-link animate-target fs-base ms-1 p-0"
                            href="mailto:support@mobilenumbers.com">support@mobilenumbers.com</a>
                    </li> -->
                </ul>
            </div>
            <div class="col text-center pt-1 pt-sm-2 pt-md-3">
                <div
                    class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
                    <i class="ci-map-pin position-absolute top-50 start-50 translate-middle"></i>
                </div>
                <h3 class="h6">Shop location</h3>
                <ul class="list-unstyled m-0">
                    <li>
                        <?= $social_media['address'] ?? '' ?>
                    </li>
                </ul>
            </div>

        </section>

        <hr class="my-lg-5">


        <!-- Help center CTA -->
        <section class="text-center pb-xxl-3 pt-4 pt-lg-3">
            <h2 class="pt-md-2 pt-lg-0">Need help finding your VIP number?</h2>
            <p class="pb-2 pb-sm-3">Browse our collection of premium mobile numbers or check our FAQ section for common
                questions about VIP numbers and pricing.</p>
            <a class="btn btn-lg btn-outline-dark rounded-pill" href="<?= base_url() ?>user/product">Browse VIP
                Numbers</a>
        </section>
    </div>
</main>