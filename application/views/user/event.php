<main class="main__content_wrapper">
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Events</span>
        </div>
    </div>

    <!-- Events Section -->
    <section class="events__section section--padding my-5">
        <div class="container">
            <?php if (count($event_det) > 0): ?>
                <?php foreach ($event_det as $row): ?>
                    <div class="event__card mb-5 p-4 bg-white rounded shadow-sm">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="event__title mb-4 pb-2 border-bottom"><?= $row['event_name'] ?></h2>
                                <div class="event__description mb-4">
                                    <?= $row['event_desc'] ?>
                                </div>
                            </div>
                        </div>

                        <!-- Media Gallery -->
                        <div class="row gallery__grid">
                            <?php
                            $mediaFiles = explode("||", $row['event_img']);
                            foreach ($mediaFiles as $file):
                                $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                            ?>
                                <?php if (in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'gif'])): ?>
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3">
                                        <div class="gallery__item">
                                            <img src="<?= base_url() ?>uploads/<?= $file ?>" 
                                                 alt="Event Image" 
                                                 class="img-fluid rounded shadow-sm"
                                                 >
                                        </div>
                                    </div>
                                <?php elseif (strtolower($fileExtension) == 'mp4'): ?>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="video__wrapper rounded shadow-sm">
                                            <video controls class="w-100">
                                                <source src="<?= base_url() ?>uploads/<?= $file ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center py-5">
                    <h3>No events found</h3>
                    <p>Please check back later for upcoming events</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

   
</main>

<!-- Styles -->
<style>
    .event__card {
        transition: transform 0.3s ease;
        border: 1px solid #eee;
    }

    .event__card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .event__title {
        color: #333;
        font-weight: 600;
    }

    .gallery__item img {
        cursor: pointer;
        transition: transform 0.3s ease;
        height: 200px;
        width: 100%;
        object-fit: cover;
    }

    .gallery__item img:hover {
        transform: scale(1.03);
    }

    .video__wrapper {
        background: #000;
        overflow: hidden;
    }

    .video__wrapper video {
        height: 300px;
        width: 100%;
        object-fit: contain;
    }

    @media (max-width: 768px) {
        .gallery__item img {
            height: 160px;
        }

        .video__wrapper video {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .event__title {
            font-size: 1.25rem;
        }

        .gallery__item img {
            height: 140px;
        }
    }
</style>


