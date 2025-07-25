<div class="container-fluid">
<div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary-subtle">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="<?= base_url() ?>sj_admin_assets/images/profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img width="80px" height="80px" src="<?= base_url() ?>uploads/<?= $company_details[0]['logo'] ?>" alt="" class="rounded-circle p-1 bg-primary">
                                                </div>
                                                <h5 class="font-size-15 text-truncate">
                                                <i class="ri-user-line fw-bold lead text-primary"></i> 
                                                    <?=$_SESSION['admin_name']?></h5>
                                                <p class="text-muted mb-0 text-truncate">
                                                    <i class="ri-phone-line fw-bold lead"></i>
                                                    +91 <?=$admin_det['admin_mobile_no']?></p>
                                                <p class="text-muted mb-0 text-truncate">
                                                <i class="ri-mail-line fw-bold lead"></i> <?=$admin_det['admin_email']?></p>
                                                <p class="text-muted mb-0">
                                                    <i class="ri-map-pin-line fw-bold lead"></i>
                                                    <?=$admin_det['admin_city']?>, <?=$admin_det['admin_contry']?></p>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="<?= base_url() ?>Madmin/edit_admin_details">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted fw-medium h4">Edit Profile</p>
                                                            <h6 class="mb-0">Edit Name Mobile , Number , Email Id and City</h6>
                                                        </div>
                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                <span class="avatar-title">
                                                                    <i class="ri-edit-line font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?= base_url() ?>Madmin/edit_admin_details">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted fw-medium h4">Edit Password</p>
                                                            <h6 class="mb-0 text-capitalize mb-2">Set up new password to login</h6>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center ">
                                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                                <span class="avatar-title rounded-circle bg-primary">
                                                                    <i class="ri-lock-password-line font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?= base_url() ?>Madmin/all_system_notification">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted fw-medium">Your All Notification</p>
                                                            <h4 class="mb-0"><?=count($ttl_notification)?> Notifications</h4>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                                <span class="avatar-title rounded-circle bg-primary">
                                                                    <i class="ri-notification-3-line font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Login <b><?=count($ttl_login)?> Times</b></p>
                                                       <h6 class="text-info">Last Login <?=date("d M Y / h:ia",$ttl_login[0]['slog_time'])?></h6>
                                                    </div>
                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="ri-calendar-check-line font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                    </div>
                                </div>
                            </div>
                        </div>
</div>