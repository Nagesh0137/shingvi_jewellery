
<div class="breadcrumb-area ptb-15" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / About us</span>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- main start -->
<main id="main">
    <!-- about-us start -->
    <style>
    .about-area .d-flex {
        min-height: 320px;
    }

    img.img-fluid {
        max-width: 100%;
        max-height: 300px;
        object-fit: contain;
    }

    .second-img {
        height: 1000px;       /* increased height */
        margin-top: 60px;
        object-fit: contain;
    }

    .about-content {
        padding: 20px 30px;
    }

    @media (max-width: 767.98px) {
        .about-content {
            padding: 10px 15px;
        }

        .second-img {
            margin-top: 30px;
            max-height: 300px;
            height: auto; /* reset on mobile */
        }
    }
</style>


<section class="about-us section-pt">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center mb-5" data-animate="animate__fadeIn">
            <div class="section-title">
                <h2 class="section-heading">About us</h2>
            </div>
        </div>

        <div class="row about-area">
            <div class="col-12">
                <?php if (!empty($about)): ?>
                    <?php foreach ($about as $key => $row): ?>
                        <div class="d-flex flex-wrap align-items-center mb-5" data-animate="animate__fadeIn">
                            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center <?= ($key % 2 == 0) ? '' : 'order-lg-2' ?>">
                                <img src="<?= base_url('uploads/' . $row['about_image']) ?>"
                                     alt="about-<?= $key + 1 ?>"
                                     class="img-fluid mb-3 <?= ($key == 1) ? 'second-img' : '' ?>">
                            </div>

                            <div class="col-12 col-lg-6 about-content <?= ($key % 2 == 0) ? '' : 'order-lg-1' ?>">
                                <h1 class="font-30"><?= $row['about_title'] ?></h1>
                                <p class="mst-19"><?= $row['about_desc'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- about-us end -->


<!-- FAQ Start -->
<section class="faqs section-ptb">
  <div class="container">
    <div class="section-capture text-center" data-animate="animate__fadeIn">
      <div class="section-title">
        <h2 class="section-heading">Frequently Asked Questions</h2>
      </div>
    </div>

    <div class="row row-mtm50 mt-4">
      <div class="col-12">
        <h6 class="faqs-tab-title font-18 meb-30" data-animate="animate__fadeIn"><span>Shop Guide</span></h6>
        <div class="row">
          <div class="other-tabs" id="faqs1-collapse">
            <?php $i = 1; foreach ($faq_info as $faq): ?>
              <div class="other-tab mb-3 p-3 border rounded shadow-sm bg-white" data-animate="animate__fadeIn">
                <!-- Question Toggle -->
                <a href="#faq<?= $i ?>" class="dominant-link d-flex justify-content-between align-items-center text-decoration-none" data-bs-toggle="collapse" aria-expanded="<?= $i == 1 ? 'true' : 'false' ?>">
                  <span class="font-18 fw-semibold text-dark"><?= $faq['faq_question'] ?></span>
                  <span class="icon-16" style="color: #bb4749;"><i class="ri-add-line"></i></span>

                </a>

                <!-- Answer Collapse -->
                <div class="collapse <?= $i == 1 ? 'show' : '' ?> mt-2" id="faq<?= $i ?>" data-bs-parent="#faqs1-collapse">
                  <p class="text-muted mb-0"><?= nl2br($faq['faq_answer']) ?></p>
                </div>
              </div>
            <?php $i++; endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ ENDS -->





<!-- about-counter start -->
<!-- <section class="about-counter section-pt">
    <div class="container">
        <div class="about-counter-content d-flex flex-wrap border-full br-hidden">
            <div class="col-6 col-lg-3 d-flex flex-column align-items-center ptb-30 plr-15 plr-sm-30 extra-bg text-center about-counter-info" data-animate="animate__fadeIn">
                <h2 class="dominant-color font-32 meb-12"><span class="count-number" data-count="10"></span>+</h2>
                <span class="about-counter-icon secondary-color icon-24 width-72 height-72 d-flex align-items-center justify-content-center rounded-circle box-shadow"><i class="ri-line-chart-line d-block lh-1"></i></span>
                <h6 class="dominant-color font-18 mst-16">Years</h6>
            </div>
            <div class="col-6 col-lg-3 d-flex flex-column align-items-center ptb-30 plr-15 plr-sm-30 extra-bg text-center about-counter-info" data-animate="animate__fadeIn">
                <h2 class="dominant-color font-32 meb-12"><span class="count-number" data-count="100"></span>+</h2>
                <span class="about-counter-icon secondary-color icon-24 width-72 height-72 d-flex align-items-center justify-content-center rounded-circle box-shadow"><i class="ri-user-3-line d-block lh-1"></i></span>
                <h6 class="dominant-color font-18 mst-16">Clients</h6>
            </div>
            <div class="col-6 col-lg-3 d-flex flex-column align-items-center ptb-30 plr-15 plr-sm-30 extra-bg text-center about-counter-info" data-animate="animate__fadeIn">
                <h2 class="dominant-color font-32 meb-12"><span class="count-number" data-count="50"></span>+</h2>
                <span class="about-counter-icon secondary-color icon-24 width-72 height-72 d-flex align-items-center justify-content-center rounded-circle box-shadow"><i class="ri-store-2-line d-block lh-1"></i></span>
                <h6 class="dominant-color font-18 mst-16">Shops</h6>
            </div>
            <div class="col-6 col-lg-3 d-flex flex-column align-items-center ptb-30 plr-15 plr-sm-30 extra-bg text-center about-counter-info" data-animate="animate__fadeIn">
                <h2 class="dominant-color font-32 meb-12"><span class="count-number" data-count="17"></span>+</h2>
                <span class="about-counter-icon secondary-color icon-24 width-72 height-72 d-flex align-items-center justify-content-center rounded-circle box-shadow"><i class="ri-shopping-bag-2-line d-block lh-1"></i></span>
                <h6 class="dominant-color font-18 mst-16">Sales</h6>
            </div>
        </div>
    </div>
</section> -->
<!-- about-counter end -->







<!-- about-team start -->
<!-- <section class="about-team section-ptb">
    <div class="container">
        <div class="section-capture text-center" data-animate="animate__fadeIn">
            <div class="section-title">
                <h2 class="section-heading">Our team</h2>
            </div>
        </div>
        <div class="row row-mtm">
            <div class="col-6" data-animate="animate__fadeIn">
                <div class="about-team-content d-flex flex-wrap align-items-lg-center banner-hover">
                    <div class="col-12 col-lg-6">
                        <span class="d-block banner-img br-hidden">
                            <img src="<?=base_url()?>u_assets/assets/image/other/about-team1.jpg" class="w-100 img-fluid" alt="about-team1">
                        </span>
                    </div>
                    <div class="col-12 col-lg-6 pst-16 pst-lg-0 psl-lg-30">
                        <h6 class="font-18">Johnny walker</h6>
                        <span class="d-block mst-7">Web designer</span>
                        <p class="mst-16 pst-14 bst">Craft stylish, user-friendly sites with creative, responsive design</p>
                    </div>
                </div>
            </div>
            <div class="col-6" data-animate="animate__fadeIn">
                <div class="about-team-content d-flex flex-wrap align-items-lg-center banner-hover">
                    <div class="col-12 col-lg-6">
                        <span class="d-block banner-img br-hidden">
                            <img src="<?=base_url()?>u_assets/assets/image/other/about-team2.jpg" class="w-100 img-fluid" alt="about-team2">
                        </span>
                    </div>
                    <div class="col-12 col-lg-6 pst-16 pst-lg-0 psl-lg-30">
                        <h6 class="font-18">Rebecca flex</h6>
                        <span class="d-block mst-7">Support staff</span>
                        <p class="mst-16 pst-14 bst">Provide essential assistance and resolve issues to ensure smooth operations</p>
                    </div>
                </div>
            </div>
            <div class="col-6" data-animate="animate__fadeIn">
                <div class="about-team-content d-flex flex-wrap align-items-lg-center banner-hover">
                    <div class="col-12 col-lg-6">
                        <span class="d-block banner-img br-hidden">
                            <img src="<?=base_url()?>u_assets/assets/image/other/about-team3.jpg" class="w-100 img-fluid" alt="about-team3">
                        </span>
                    </div>
                    <div class="col-12 col-lg-6 pst-16 pst-lg-0 psl-lg-30">
                        <h6 class="font-18">Jan ringo</h6>
                        <span class="d-block mst-7">Deputy sale</span>
                        <p class="mst-16 pst-14 bst">Assist with sales strategies and team support to drive revenue growth</p>
                    </div>
                </div>
            </div>
            <div class="col-6" data-animate="animate__fadeIn">
                <div class="about-team-content d-flex flex-wrap align-items-lg-center banner-hover">
                    <div class="col-12 col-lg-6">
                        <span class="d-block banner-img br-hidden">
                            <img src="<?=base_url()?>u_assets/assets/image/other/about-team4.jpg" class="w-100 img-fluid" alt="about-team4">
                        </span>
                    </div>
                    <div class="col-12 col-lg-6 pst-16 pst-lg-0 psl-lg-30">
                        <h6 class="font-18">Ringo kai</h6>
                        <span class="d-block mst-7">Policy member</span>
                        <p class="mst-16 pst-14 bst">Develop and implement policies to ensure effective organizational governance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- about-team end -->
</main>
