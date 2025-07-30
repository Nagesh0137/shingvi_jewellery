 <style>
     ul.track-ul li.track-li {
         padding: 0px 0px 30px;
         position: relative;
         z-index: 1;
     }

     ul.track-ul li.track-li:last-child {
         padding: 0px;
     }

     ul.track-ul li.track-li::after {
         content: "";
         position: absolute;
         top: 64px;
         left: 30px;
         width: 1px;
         height: calc(100% - 64px);
         background-color: rgba(var(--border-color), var(--border-opacity));
         z-index: -1;
     }

     ul.track-ul li.track-li:last-child::after {
         display: none;
     }

     ul.track-ul li.track-li.active::after {
         background-color: var(--dominant-font-color);
     }

     ul.track-ul li.track-li .track-icon-text span.track-icon {
         color: var(--secondary-font-color);
         background-color: var(--extra-bgcolor);
         border: 1px solid rgba(var(--border-color), var(--border-opacity));
     }

     ul.track-ul li.track-li.active .track-icon-text span.track-icon {
         color: var(--extra-font-color);
         background-color: var(--dominant-font-color);
         border-color: var(--dominant-font-color);
     }

     ul.track-ul li.track-li.active-next .track-icon-text span.track-icon {
         color: var(--dominant-font-color);
         border-color: var(--dominant-font-color);
     }
 </style>
 <main id="main">
     <!-- track-page start -->
     <section class="track-page section-ptb">
         <div class="container">
             <div class="section-capture text-center" data-animate="animate__fadeIn">
                 <div class="section-title">
                     <h2 class="section-heading">Custom Jewellery Orders</h2>
                 </div>
             </div>
             <div class="row row-mtm30">
                 <?php
                    if (!empty($custom_jwellery)) {
                        foreach ($custom_jwellery as $row) {
                    ?>
                         <div class="col-12 col-md-6 col-xl-4 d-md-flex" data-animate="animate__fadeIn">
                             <!-- track-record fulfilled start -->
                             <div class="track-record width-md-100 ptb-30 plr-15 plr-sm-30 extra-bg border-radius" style="height:auto">
                                 <div class="justify-content-between d-flex">

                                     <h6 class="font-18 meb-30 text-capitalize peb-25 beb">Custom Order <?= ucfirst($row['status']) ?></h6>
                                     <h6 class="font-18 meb-30 text-capitalize peb-25 beb" style="cursor: pointer;">
                                         <span class="text-end">ID: #<?= $row['custom_jwellery_id'] ?></span>
                                     </h6>
                                 </div>
                                 <ul class="track-ul">
                                     <li class="track-li active">
                                         <div class="track-icon-text d-flex flex-wrap align-items-center">
                                             <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center rounded-circle"><i class="ri-shopping-bag-line d-block icon-24 lh-1"></i></span>
                                             <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                 <span class="heading-color heading-weight">Order Placed</span>
                                                 <span><?= date('d M Y H:i A', $row['date_time']) ?></span>
                                             </div>
                                         </div>
                                         <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                             <span class="heading-color heading-weight">Custom jewellery request submitted</span>
                                             <span class="heading-color heading-weight">Budget: ₹<?= number_format($row['budget']) ?></span>
                                             <span class="heading-color heading-weight">Customer: <?= $row['name'] ?></span>
                                             <span class="heading-color heading-weight">Phone: <?= $row['phone_number'] ?></span>
                                         </div>
                                     </li>
                                     <li class="track-li <?php if ($row['status'] == 'progress' || $row['status'] == 'confirm') {
                                                                echo 'active';
                                                            } else {
                                                                echo 'active-next';
                                                            } ?>">
                                         <div class="track-icon-text d-flex flex-wrap align-items-center">
                                             <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center rounded-circle"><i class="ri-gift-line d-block icon-24 lh-1"></i></span>
                                             <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                 <span class="heading-color heading-weight">In Progress</span>
                                             </div>
                                             <?php if ($row['status'] == 'progress' || $row['status'] == 'confirm') { ?>
                                                 <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                                     <span class="heading-color heading-weight">Your custom jewellery is being designed</span>
                                                 </div>
                                             <?php } ?>
                                         </div>
                                     </li>
                                     <li class="track-li <?php if ($row['status'] == 'confirm') {
                                                                echo 'active';
                                                            } else {
                                                                echo 'active-next';
                                                            } ?>">
                                         <div class="track-icon-text d-flex flex-wrap align-items-center">
                                             <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center rounded-circle"><i class="ri-check-line d-block icon-24 lh-1"></i></span>
                                             <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                 <span class="heading-color heading-weight">Confirmed</span>
                                             </div>
                                             <?php if ($row['status'] == 'confirm') { ?>
                                                 <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                                     <span class="heading-color heading-weight">Your custom jewellery order has been confirmed</span>
                                                     <span class="heading-color heading-weight">We will contact you for further details</span>
                                                 </div>
                                             <?php } ?>
                                         </div>
                                     </li>
                                     <?php if ($row['status'] == 'cancel') { ?>
                                         <li class="track-li active">
                                             <div class="track-icon-text d-flex flex-wrap align-items-center">
                                                 <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center bg-danger border-danger rounded-circle"><i class="ri-close-large-line d-block icon-24 lh-1"></i></span>
                                                 <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                     <span class="heading-color heading-weight">Cancelled</span>
                                                 </div>
                                                 <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                                     <span class="heading-color heading-weight">Custom jewellery order has been cancelled</span>
                                                 </div>
                                             </div>
                                         </li>
                                     <?php } ?>
                                 </ul>

                                 <!-- Order Details Section -->
                                 <div class="mt-3 pt-3 border-top">
                                     <h6 class="heading-color heading-weight mb-2">Order Details:</h6>
                                     <?php if (!empty($row['description'])) { ?>
                                         <p class="mb-1"><strong>Description:</strong> <?= htmlspecialchars($row['description']) ?></p>
                                     <?php } ?>
                                     <?php if (!empty($row['gold_color'])) { ?>
                                         <p class="mb-1"><strong>Gold Color:</strong> <?= htmlspecialchars($row['gold_color']) ?></p>
                                     <?php } ?>
                                     <?php if (!empty($row['gold_purity'])) { ?>
                                         <p class="mb-1"><strong>Gold Purity:</strong> <?= htmlspecialchars($row['gold_purity']) ?></p>
                                     <?php } ?>
                                     <?php if (!empty($row['diamond_clarity'])) { ?>
                                         <p class="mb-1"><strong>Diamond Clarity:</strong> <?= htmlspecialchars($row['diamond_clarity']) ?></p>
                                     <?php } ?>
                                     <?php if (!empty($row['image'])) { ?>
                                         <div class="mt-2">
                                             <strong>Reference Image:</strong><br>
                                             <a href="<?= base_url() ?>uploads/<?= $row['image'] ?>" target="_blank" style="color: #9c1137;" class="btn btn-sm btn-outline-dark mt-1">
                                                 View Image
                                             </a>
                                         </div>
                                     <?php } ?>
                                 </div>
                             </div>
                         </div>
                     <?php }
                    } else {
                        ?>
                     <div class="col-12" data-animate="animate__fadeIn">
                         <div class="track-record width-100 ptb-30 plr-15 plr-sm-30 extra-bg border-radius text-center">
                             <h5 class="heading-color heading-weight mb-3">No Custom Jewellery Orders Found</h5>
                             <p class="mb-3">You haven't placed any custom jewellery orders yet.</p>
                             <a href="<?= base_url() ?>user/custome_jewellery" class="btn btn-primary">Create Custom Order</a>
                         </div>
                     </div>
                 <?php } ?>
             </div>
         </div>
     </section>
     <!-- track-page end -->
 </main>