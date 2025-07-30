<main class="main__content_wrapper">
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-area ptb-15" data-bgimg="<?=base_url()?>u_assets/assets/image/other/breadcrumb-bgimg.jpg">
    <div class="container">
        <span class="d-block extra-color"><a href="<?=base_url()?>" class="extra-color">Home</a> / Branch</span>
    </div>
</div>

    <!-- Branches Section -->
    <section class="branches__section section--padding bg-light">
        <div class="container">
            <div class="row">
                <!-- Branches List -->
                <div class="col-lg-12 mt-5 mb-5">
                    <div class="row">
                        <?php if (count($web_branch_details) > 0): ?>
                            <?php foreach ($web_branch_details as $row): ?>
                                <div class="col-md-4 mb-4">
                                    <div class="branch__card bg-white p-4 h-100">
                                        <div class="branch__thumb mb-3">
                                            <img style="width:100%;height:250px;object-fill:cover;" src="<?= base_url() ?>uploads/<?= $row['branch_image'] ?>" 
                                                 alt="<?= $row['branch_name'] ?>" 
                                                 class="img-fluid rounded">
                                        </div>
                                        <div class="branch__content">
                                            <h4 class="branch__title mb-3 pb-2 border-bottom"><?= $row['branch_name'] ?></h4>
                                            <ul class="branch__info list-unstyled">
                                                <li class="mb-2"><i class="ri-phone-fill text-gold me-2"></i><?= $row['branch_mobile_no'] ?></li>
                                                <?php if($row['branch_phone_no']): ?>
                                                <li class="mb-2"><i class="ri-phone-fill text-gold me-2"></i><?= $row['branch_phone_no'] ?></li>
                                                <?php endif; ?>
                                                <li class="mb-2"><i class="ri-mail-fill text-gold me-2"></i><?= $row['branch_email'] ?></li>
                                                <li class="mb-3"><i class="ri-map-pin-fill text-gold me-2"></i><?= $row['branch_address'] ?></li>
                                            </ul>
                                            <div class="branch__actions">
                                                <!--<a href="<?= $row['branch_location'] ?>" target="_blank" class="btn btn-sm btn-outline-dark me-2">-->
                                                <!--    <i class="ri-map-pin-line"></i> Map-->
                                                <!--</a>-->
                                                <a href="tel:<?= $row['branch_mobile_no'] ?>" class="btn btn-sm btn-dark">
                                                    <i class="ri-phone-line"></i> Call
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
</main>

<style>
    .text-gold {
        color: #d4a762;
    }
    
    .branch__card {
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid #eee;
    }
    
    .branch__card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .branch__thumb img {
        transition: transform 0.3s ease;
    }
    
    .branch__card:hover .branch__thumb img {
        transform: scale(1.03);
    }
    
    .category__link {
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .category__link:hover {
        background-color: #f8f9fa;
        transform: translateX(3px);
    }
    
    .branch__info li {
        display: flex;
        align-items: center;
    }
</style>