<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Shingavi Jwellers Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://www.shingavijewellers.com/image/logoblack4.png">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?=base_url()?>sj_admin_assets/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="<?=base_url()?>sj_admin_assets/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="<?=base_url()?>sj_admin_assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?=base_url()?>sj_admin_assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?=base_url()?>sj_admin_assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- App js -->
        <!-- <script src="<?=base_url()?>sj_admin_assets/js/plugin.js"></script> -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" rel="stylesheet">
    </head>

    <body class="auth-body-bg">
        
        <div>
        <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-7">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
    
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    
                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i>LogIn Of Shingavi Jwellers</h4>
                                                    
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" This system is designed by A2Z INFOTECH company on 2020. If you have any query about system/software you can contact us on
                                                                    Call / Whatsapp +919011144920
                                                                    Visit Our Website  <a href="https://a2zithub.org/" target="__blank"> A2Z Infotech</a> "  </p>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <div class="item">
                                                                <div class="py-3">
                                                                <p class="font-size-16 mb-4">" This system is designed by A2Z INFOTECH company on 2020. If you have any query about system/software you can contact us on
                                                                    Call / Whatsapp +919011144920
                                                                    Visit Our Website  <a href="https://a2zithub.org/" target="__blank"> A2Z Infotech</a> "  </p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-5">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5">
                                        <a href="<?= base_url() ?>Madmin/" class="d-block card-logo d-flex align-items-end">
                                            <img src="https://www.shingavijewellers.com/image/logoblack4.png" alt=""style="height:80px;width:80px;object-fit:contain" class="card-logo-dark"> &nbsp;
                                            <span class="h3 text-dark"> Shingavi Jwellers</span>
                                            <!-- <img src="https://www.shingavijewellers.com/image/logoblack4.png" alt="" height="18" class="card-logo-light"> -->
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue .</p>
                                        </div>
            
                                        <div class="mt-4">
                                            <form  id="js-login" validate action="<?=base_url()?>Madmin/login" method="post">
                
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="email" class="form-control" id="username" placeholder="Your Email"  required name="admin_email">
                                                </div>
                        
                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="auth-recoverpw-2.html" class="text-muted">Forgot password?</a>
                                                    </div>
                                                    <label class="form-label">Password</label>
                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input type="password" class="form-control" placeholder="Password" required name="admin_password" aria-label="Password" aria-describedby="password-addon" >
                                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    </div>
                                                </div>
                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Secure Log In</button>
                                                </div>
                    
                                                
                                              

                                            </form>
                                           
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <a href="https://a2zithub.org/" target="__blank">
                                            <p class="mb-0"><script>document.write(new Date().getFullYear())</script> © Copyright by<i class="mdi mdi-heart text-danger"></i> A2Z Infotech </p>
                                        </a>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="<?=base_url()?>sj_admin_assets/libs/jquery/jquery.min.js"></script>
        <script src="<?=base_url()?>sj_admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>sj_admin_assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?=base_url()?>sj_admin_assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?=base_url()?>sj_admin_assets/libs/node-waves/waves.min.js"></script>

        <!-- owl.carousel js -->
        <script src="<?=base_url()?>sj_admin_assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- auth-2-carousel init -->
        <script src="<?=base_url()?>sj_admin_assets/js/pages/auth-2-carousel.init.js"></script>
        
        <!-- App js -->
        <script src="<?=base_url()?>sj_admin_assets/js/app.js"></script>

    </body>
</html>
