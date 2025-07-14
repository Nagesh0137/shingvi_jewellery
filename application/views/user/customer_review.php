<section class="testimonial section-ptb">
    <div class="container">
        <div class="testi-category">
            <div class="section-capture text-center">
                <div class="section-title">
                    <h2 class="section-heading">Customer Experience</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-10 mx-lg-auto">
                    <div class="testi-wrap">
                        <div class="testi-slider swiper" id="testi-slider">
                            <div class="swiper-wrapper">
                                <?php foreach($web_testimonial as $row): ?>
                                    <div class="swiper-slide h-auto d-flex">
                                        <div class="testi-content w-100 extra-bg br-hidden p-4 rounded shadow-sm">
                                            <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start gap-4">
                                                <div class="flex-shrink-0 mx-auto mx-md-0">
                                                    <img src="<?= $row['testimonial_img'] ? base_url().'uploads/'.$row['testimonial_img'] : base_url().'uploads/profile_picture.jpeg' ?>"
                                                         class="img-fluid rounded-circle"
                                                         style="width: 100px; height: 100px; object-fit: cover;"
                                                         alt="<?= $row['testimonial_person'] ?>">
                                                </div>
                                                <div class="testi-info flex-grow-1">
                                                    <div class="testi-review mb-2 testi-star-wrap">
    <span class="testi-star dominant-color icon-16 ul-mt5 lh-1">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <i class="ri-star<?= $i < $row['rating'] ? '-fill' : '-line' ?>"></i>
        <?php endfor; ?>
    </span>
</div>

                                                    <p class="mb-2"><?= $row['testimonial_details'] ?></p>
                                                    <div class="mst-19">
                                                        <span class="dominant-color"><?= $row['testimonial_person'] ?></span> ~ Happy Customer
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Pagination Dots -->
                        <div class="swiper-dots mt-3 text-center">
                            <div class="swiper-pagination swiper-pagination-testi d-inline-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Swiper Init Script -->
<script>
const testiSwiper = new Swiper('#testi-slider', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
    slidesPerView: 1,
    speed: 1600,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination-testi',
        clickable: true,
    },
});
</script>

<!-- Responsive Styling -->
<style>
    .testi-star i {
        font-size: 20px;
        margin-right: 2px;
    }
    .testi-content {
        background-color: #fff;
    }

    @media (max-width: 767.98px) {
        .testi-content {
            padding: 20px !important;
        }
        .testi-info {
            text-align: center !important;
        }
        .testi-content .d-flex {
            flex-direction: column !important;
            align-items: center !important;
        }
        .testi-info p {
            font-size: 15px;
        }
        .testi-review {
            width: 100%;
            text-align: center !important;
        }
    }
    @media (max-width: 767.98px) {
    .testi-star-wrap {
        display: flex;
        justify-content: center;
        width: 100%;
    }
}

</style>
