<?php
if(!isset($_SESSION['admin_id']))
{
    redirect(base_url()."adminlogin/",'refresh');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Shingavi Jwellers Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="https://www.shingavijewellers.com/image/logoblack4.png">
    <link href="<?=base_url()?>sj_admin_assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>sj_admin_assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>sj_admin_assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    </head>
    <style type="text/css">
        .heading
    {
        background: linear-gradient(45deg,#1a1f2d 0%,#4c5263 62%,#4c5263 62%,#4c5263 63%,white 63%,white 64%,#4c5263 64%,#4c5263 65%,#a4a6ad 65%,white 80%);
        border-left: 5px solid #96f2a2;
        color: white;
        font-weight: bold;
        padding: 6px 10px 3px 10px;
    }
    </style>
    <body data-sidebar="dark">
        <div id="layout-wrapper">
        <?php 
            $m_name=strtolower(trim($this->router->fetch_method()));
        ?>
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="<?= base_url() ?>Madmin" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>" alt="" style="height:40px;width:40px;object-fit:contain">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>" alt="" style="height:40px;width:40px;object-fit:contain">
                            </span>
                        </a>

                        <a href="<?= base_url() ?>Madmin" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>" alt="" style="height:40px;width:40px;object-fit:contain">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>" style="height:40px;width:40px;object-fit:contain" alt="" >
                            </span>

                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <div class="dropdown dropdown-mega d-none d-lg-block ms-2 d-flex justify-content-center">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                <span key="t-megamenu">Menu</span>
                                <i class="mdi mdi-chevron-down"></i> 
                            </button>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-12">
    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-unstyled megamenu-list d-flex justify-content-around">
                                                    <li>
                                                        <a href="<?= base_url() ?>Madmin" key="t-lightbox" class="h5">
                                                        <i class="fas fa-home"></i>    
                                                        Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-range-slider" class="h5">
                                                            <i class="fas fa-user"></i>
                                                            Profile
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-sweet-alert" class="h5">
                                                            <i class="bx bx-log-out-circle h5 text-dark" style="font-size:18px;font-weight:bold"></i>
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                            
                                </div>

                            </div>
                        </div>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
    
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge bg-danger rounded-pill"><?= isset($system_notification)? count($system_notification) : 0 ?></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                    </div>
                                   
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <?php
                                if(isset($system_notification) && count($system_notification)>0){
                                    foreach($system_notification as $key=>$row){
                                        ?>
                                            <a href="javascript: void(0);" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3">
                                                            <?php
                                                            if($row['type'] == 'error'){
                                                                ?>
                                                            <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                                <i class="ri-error-warning-fill"></i>
                                                            </span>
                                                                <?php
                                                            }else if($row['type'] == 'success'){
                                                                ?>
                                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                                    <i class="ri-checkbox-circle-fill"></i>
                                                                </span>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <span class="avatar-title bg-info rounded-circle font-size-16">
                                                                    <i class="ri-error-warning-fill"></i> 
                                                                </span>
                                                                <?php
                                                            }
                                                            ?>
                                                        
                                                    </div>
                                                    <div class="flex-grow-1">
                                                    
                                                        <div class="font-size-12 text-muted">
                                                            <p class="mb-1" key="t-grammer"><?= $row['msg'] ?></p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 

                                                            <span key="t-min-ago">
                                                                <?php
                                                                $current_time = time();
                                                                $sn_time = $row['sn_time'];
                                                                $time_diff = $current_time - $sn_time;  
                                                                if ($time_diff < 60) {
                                                                    $time_ago = "$time_diff seconds ago";
                                                                } elseif ($time_diff < 3600) {
                                                                    $minutes = floor($time_diff / 60);
                                                                    $time_ago = "$minutes minutes ago";
                                                                } elseif ($time_diff < 86400) {
                                                                    $hours = floor($time_diff / 3600);
                                                                    $time_ago = "$hours hours ago";
                                                                } else {
                                                                    $days = floor($time_diff / 86400);
                                                                    $time_ago = "$days days ago";
                                                                }
                                                                ?>
                                                                <?= $time_ago ?>
                                                            </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php
                                    }
                                }else{
                                    ?>
                                <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="flex-grow-1">
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1" key="t-grammer">Today No Notification Found</p>
                                        </div>
                                    </div>
                                </a>
                                    <?php
                                }
                                ?>
                                
                            </div>
                           
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?= base_url() ?>uploads/<?= $company_det[0]['company_logo'] ?>" style="height:30px;width:30px;object-fit:contain" alt="Shingavi Jwellers Logo" title="shingavi Jwellers Logo">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Shingavi Jwellers</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="<?=base_url() ?>Madmin/admin_profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile & Security</span></a>
                            <a class="dropdown-item" href="<?= base_url() ?>Madmin/authontication">
                                <i class="bx bx-check-shield font-size-16 align-middle me-1"></i> 
                                <span key="t-my-wallet">Authentication</span>
                            </a>
                            <a class="dropdown-item d-block" href="#">
                                <i class="bx bx-wrench font-size-16 align-middle me-1"></i> 
                                <span key="t-settings">Settings</span></a>
                           
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?= base_url() ?>Madmin/logout" onclick="return confirm('Are You Sure To Logout ?...')"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>