<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<head>
        

        <meta charset="utf-8" />
                <title><?=$company_det['company_name']?> Admin</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

       
         <!-- App css -->
         <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    .bgImg {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), 
        url(https://img.freepik.com/premium-vector/business-sketches-white-backdrop-presentations-design-projects_906149-79752.jpg);
        background-size: cover;
        background-position: center;
    }
</style>
    </head>
    
    
    <!-- Top Bar Start -->
    <body class="bgImg">
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="<?=base_url()?>uploads/<?=$company_det['company_logo']?>" height="100" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-1 mb-1 fw-semibold text-white fs-18">Let's Get Started</h4>   
                                        <p class="text-muted fw-medium mb-0">Sign in to continue to Admin.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" action="<?=base_url()?>login/login_process" method="POST">            
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="admin_email" class="form-control" id="email" name="email" placeholder="Enter email" required>                               
                                        </div>
            
                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password <span class="text-danger">*</span></label>                                            
                                            <input type="password" name="admin_password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>                            
                                        </div>
            
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <!-- <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                     -->
                                            </div>
                                        </div>
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    <!-- <a href="<?= base_url('login/login_google') ?>" class="btn btn-danger">Login with Google</a> -->

                                                </div>
                                            </div>
                                        </div>                           
                                    </form><!--end form-->
                                    <!-- <div class="text-center  mb-2">
                                        <p class="text-muted">Don't have an account ?  <a href="<?=base_url()?>login/register" class="text-primary ms-2">Free Resister</a></p>
                                    </div> -->
                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->                                        
    </div><!-- container -->
    </body>
    <!--end body-->

</html>