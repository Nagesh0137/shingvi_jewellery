<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-body">
            <div class="col-xl-12">
                               
                <h4 class="card-title mb-4">Notifications</h4>

                <div data-simplebar="init" class="simplebar-scrollable-y">
                    <div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                    <ul class="verti-timeline list-unstyled">
                        <?php
                            if(isset($all_notification) && count($all_notification)>0){
                                foreach($all_notification as $key=>$row){
                                    ?>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <h5 class="font-size-14"><?= date('d M',strtotime($row['entry_date'])) ?> <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div>
                                                    <?= $row['msg'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }else{
                                ?>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        No Notification Found
                                    </div>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 287px; height: 748px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 128px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                    
            </div>
            </div>
        </div>
    </div>
</div>