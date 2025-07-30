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
    background-color: rgba(var(--border-color),var(--border-opacity));
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
    border: 1px solid rgba(var(--border-color),var(--border-opacity));
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
                            <h2 class="section-heading">Track order</h2>
                        </div>
                    </div>
                    <div class="row row-mtm30">
                        <?php 
                            foreach($order as $row)
                            {
                        ?>
                        <div class="col-12 col-md-6 col-xl-4 d-md-flex" data-animate="animate__fadeIn">
                            <!-- track-record fulfilled start -->
                            <div class="track-record width-md-100 ptb-30 plr-15 plr-sm-30 extra-bg border-radius" style="height:auto">
                                <div class="justify-content-between d-flex">
                                    
                                <h6 class="font-18 meb-30 text-capitalize peb-25 beb">Order <?=$row['order_status']?></h6>
                                <a href="<?=base_url()?>user/order_info/<?=$row['order_tbl_id']?>"><h6 class="font-18 meb-30 text-capitalize peb-25 beb" style="cursor: pointer;"> <span class="text-end"><u>View</u></span> </h6></a>
                                </div>
                                <ul class="track-ul">
                                    <li class="track-li active">
                                        <div class="track-icon-text d-flex flex-wrap align-items-center">
                                            <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center rounded-circle"><i class="ri-shopping-bag-line d-block icon-24 lh-1"></i></span>
                                            <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                <span class="heading-color heading-weight">Order placed </span>
                                                <span><?=date('d',$row['order_time'])?> <?=date('M',$row['order_time'])?> <?=date('Y H:i A',$row['order_time'])?></span>
                                            </div>
                                        </div>
                                        <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                            <span class="heading-color heading-weight">An order has been placed</span>

                                            <span class="heading-color heading-weight">Seller Will proccessed With your order</span>
                                        </div>
                                    </li>
                                    <li class="track-li <?php if($row['order_status'] == 'processing' || $row['order_status'] == 'dispatch' || $row['order_status']=='delivered'){echo 'active';}else{echo 'active-next';}?>">
                                        <div class="track-icon-text d-flex flex-wrap align-items-center">
                                            <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center rounded-circle"><i class="ri-gift-line d-block icon-24 lh-1"></i></span>
                                            <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                <span class="heading-color heading-weight">Processing</span>
                                            </div>
                                                <?php 
                                                if($row['order_status'] == 'processing' || $row['order_status'] == 'dispatch' || $row['order_status'] == 'delivered')
                                                {
                                                    ?>
                                                    <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                                        <span class="heading-color heading-weight">Your Order Has Been Processed</span>
                                                        <span><?=date('d',$row['processing_time'])?> <?=date('M',$row['processing_time'])?> <?=date('Y H:i A',$row['processing_time'])?></span>

                                                    </div>
                                                    <?php
                                                }

                                                ?>
                                        </div>
                                    </li>
                                    <li class="track-li  <?php if($row['order_status'] == 'dispatch' || $row['order_status']=='delivered'){echo 'active';}else{if($row['order_status']=='processing'){ 'active-next';}}?>">
                                        <div class="track-icon-text d-flex flex-wrap align-items-center">
                                            <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center rounded-circle"><i class="ri-truck-line d-block icon-24 lh-1"></i></span>
                                            <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                <span class="heading-color heading-weight">Dispatched</span>
                                            </div>
                                              <?php 
                                                if($row['order_status'] == 'dispatch' || $row['order_status'] == 'delivered')
                                                {
                                                    ?>
                                                    <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                                        <span class="heading-color heading-weight">Your Order Has Been Dispatched</span>
                                                        <span><?=date('d',$row['dispatch_time'])?> <?=date('M',$row['dispatch_time'])?> <?=date('Y H:i A',$row['dispatch_time'])?></span>

                                                    </div>
                                                    <?php
                                                }

                                                ?>
                                        </div>
                                    </li>
                                    <li class="track-li  <?php if($row['order_status'] == 'delivered' || $row['order_status']=='delivered'){echo 'active';}?>">
                                        <div class="track-icon-text d-flex flex-wrap align-items-center">
                                            <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center rounded-circle"><i class="ri-e-bike-line d-block icon-24 lh-1"></i></span>
                                            <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                <span class="heading-color heading-weight">Delivered</span>
                                            </div>
                                              <?php 
                                                if($row['order_status'] == 'delivered')
                                                {
                                                    ?>
                                                    <div class="track-info ul-mtm-15 pst-30 psl-79 pt-0">
                                                        <span class="heading-color heading-weight">Your Order Has Been Delivered</span>
                                                        <span><?=date('d',$row['delivered_time'])?> <?=date('M',$row['delivered_time'])?> <?=date('Y H:i A',$row['delivered_time'])?></span>

                                                    </div>
                                                    <?php
                                                }

                                                ?>
                                        </div>
                                    </li>
                                    <?php if($row['order_status'] == 'rejected'){?>
                                    <li class="track-li  <?php if($row['order_status'] == 'rejected'){echo 'active';}?>">
                                        <div class="track-icon-text d-flex flex-wrap align-items-center">
                                            <span class="track-icon width-64 height-64 d-flex align-items-center justify-content-center bg-danger border-danger rounded-circle"><i class="ri-close-large-line d-block icon-24 lh-1"></i></span>
                                            <div class="track-text width-calc-64 ul-mtm-15 psl-15 pt-0 mt-0">
                                                <span class="heading-color heading-weight">Order Rejecetd</span>
                                                <span><?=date('d',$row['rejected_time'])?> <?=date('M',$row['rejected_time'])?> <?=date('Y H:i A',$row['rejected_time'])?></span>
                                                
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                            <!-- track-record fulfilled end -->
                        </div>
                    <?php } ?>
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </section>
            <!-- track-page end -->
        </main>