
<!-- breadcrumb-area start -->
<div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Faq's</span>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- main start -->
<main id="main">
    <!-- faqs start -->
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

            <!-- faqs end -->
        </main>
        <!-- main end -->


        <style>
            /* FAQ Box Styling */
.other-tab {
  background-color: #fdfdfd;
  border-left: 4px solid #c9a96b; /* optional accent */
  transition: box-shadow 0.3s ease;
}

.other-tab:hover {
  box-shadow: 0 4px 10px rgba(0,0,0,0.06);
}

.other-tab .ri-add-line {
  font-size: 1.3rem;
}

/* Responsive fix */
@media (max-width: 576px) {
  .other-tab {
    padding: 1rem;
  }
}

  /* FAQ Box Styling */
  .other-tab {
    background-color: #fdfdfd;
    border-left: 4px solid #c9a96b; /* optional accent */
    transition: box-shadow 0.3s ease;
  }

  .other-tab:hover {
    box-shadow: 0 4px 10px rgba(0,0,0,0.06);
  }

  .other-tab .ri-add-line {
    font-size: 1.3rem;
    color: #9c1137; /* ← Set icon color here */
  }

  /* Responsive fix */
  @media (max-width: 576px) {
    .other-tab {
      padding: 1rem;
    }
  }


        </style>
