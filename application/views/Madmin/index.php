<!-- <style type="text/css">
.serviceBox{
    color: #999;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    padding: 10px 0 15px;
    position: relative;
}
.rot:hover{
	animation:demo;
	animation-duration:2s;
	animation-direction:alternate-reverse;
	
}
@keyframes demo{
0%{}
100%{transform: scale(1.1);}
}
.serviceBox:before,
.serviceBox:after{
    content: "";
    background:black;
    width: 150px;
    height: 10px;
    transform: translateX(-50%);
    position: absolute;
    top: 0;
    left: 50%;
    clip-path: polygon(7% 0%, 93% 0%, 100% 100%, 0% 100%);
}
.serviceBox:after{
    width: 80%;
    height: 15px;
    border-radius: 0 0 10px 10px;
    top: auto;
    bottom: 0;
    clip-path: none;
}
.serviceBox .service-content{
    background: #fff;
    border:2px solid black;
    height:230px;
    padding: 25px 20px;
    border-radius: 10px;
}
.serviceBox .service-content:before{
    content: "";
    background:#ecb235;
    width: 128px;
    height: 100px;
    transform: translateX(-50%);
    position: absolute;
    top: 0;
    left: 50%;
    clip-path: polygon(0 0, 100% 0, 50% 100%);
}
.serviceBox .service-icon{
    color: #77787a;
    background: linear-gradient(to left, #dedfe1, #f3f3f3);
    font-size: 40px;
    line-height: 100px;
    width: 100px;
    height: 100px;
    margin: 0 auto 20px;
    border-radius: 50%;
    box-shadow: 0 0 0 5px rgba(0,0,0,0.03);
    position: relative;
    z-index: 1;
}
.serviceBox .service-icon:before{
    content: "";
    background: linear-gradient(to right, #dedfe1, #f3f3f3);
    width: 88%;
    height: 88%;
    border-radius: 50%;
    box-shadow: 5px 0 5px rgba(0, 0, 0, 0.1);
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: -1;
}
.serviceBox .title{
    color: #1e5270;
    font-size:14px;
    font-weight:600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.serviceBox .description{
    font-size: 20px;
    font-weight:bold;
    color:gold;
    line-height: 24px;
    margin: 0;
}
.serviceBox.green:before{ background: #719e2a; }
.serviceBox.green:after,
.serviceBox.green .service-content:before{
    background: #85bc16;
}
.serviceBox.green .title{ color: #85bc16; }
@media only screen and (max-width:990px){
    .serviceBox{ margin: 0 0 30px; }
}
</style> -->
<!-- <div class="container-fluid" >
    <div class="row">
        <div class="col-md-3 col-sm-6 mt-2 rot">
            <div class="serviceBox">
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-globe"></i></span>
                    </div>
                    <h4 class="title">Todays Visit</h4>
                    <p class="description"><?=$dashboard['today_visits'];?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mt-2 rot">
            <div class="serviceBox">
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-rocket"></i></span>
                    </div>
                    <h4 class="title">Last 30 Days Visiter</h4>
                    <p class="description"><?=$dashboard['last_thirty_days_visits'];?></p>
                </div>
            </div>
        </div>
		
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/gold_product_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-product-hunt"></i></span>
                        </div>
                        <h4 class="title">Total Gold Product</h4>
                        <p class="description"><?=$dashboard['gold_products'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/silver_product_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-product-hunt"></i></span>
                        </div>
                        <h4 class="title">Total Silver Product</h4>
                        <p class="description"><?=$dashboard['silver_products'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/gold_diamond_product_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-product-hunt"></i></span>
                        </div>
                        <h4 class="title">Total Daimond Product</h4>
                        <p class="description"><?=$dashboard['diamond_products'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/order_pending">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-cart"></i></span>
                        </div>
                        <h4 class="title">Total Pending Order</h4>
                        <p class="description"><?=$dashboard['pending_order'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/order_Confirm">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-cart"></i></span>
                        </div>
                        <h4 class="title">Total Processing Order</h4>
                        <p class="description"><?=$dashboard['processing_order'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/order_dispatch">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-cart"></i></span>
                        </div>
                        <h4 class="title">Total Dispatch Order</h4>
                        <p class="description"><?=$dashboard['dispatch_order'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/order_delivered">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-cart"></i></span>
                        </div>
                        <h4 class="title">Total Deliverd Order</h4>
                        <p class="description"><?=$dashboard['delivered_order'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/order_reject">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-cart"></i></span>
                        </div>
                        <h4 class="title">Total Rejected Order</h4>
                        <p class="description"><?=$dashboard['rejected_order'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/custom_jwellery">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-bag"></i></span>
                        </div>
                        <h4 class="title">Total Pending CJ</h4>
                        <p class="description"><?=$dashboard['pending_cj'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/custom_jwellery_progress_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-bag"></i></span>
                        </div>
                        <h4 class="title">Total Processing CJ</h4>
                        <p class="description"><?=$dashboard['progess_cj'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/custom_jwellery_confirm_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-bag"></i></span>
                        </div>
                        <h4 class="title">Total Confirm CJ</h4>
                        <p class="description"><?=$dashboard['confirm_cj'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/custom_jwellery_cancel_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-shopping-bag"></i></span>
                        </div>
                        <h4 class="title">Total Cancel CJ</h4>
                        <p class="description"><?=$dashboard['cancel_cj'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/customer_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-users"></i></span>
                        </div>
                        <h4 class="title">Active Customer</h4>
                        <p class="description"><?=$dashboard['act_customers'];?></p>
                    </div>
                </div>
            </a>
        </div>
		<div class="col-md-3 col-sm-6 mt-2 rot">
            <a href="<?=base_url()?>madmin/customer_list">
                <div class="serviceBox">
                    <div class="service-content">
                        <div class="service-icon">
                            <span><i class="fa fa-user-times"></i></span>
                        </div>
                        <h4 class="title">Block Customer</h4>
                        <p class="description"><?=$dashboard['block_customers'];?></p>
                    </div>
                </div>
            </a>
        </div>
	</div>
</div> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title mb-1 text-success">Product Details</h4>
                        </div>
                        <div class="table-responsive mt-1">
                            <table class="table align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Pending Order</h5>
                                            <p class="text-muted mb-0">Customer Total Pending Order</p>
                                        </td>

                                        <td>
                                            <div id="radialchart-1" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">
                                                <i class="bx bx-gift h3"></i>
                                            </p>
                                            <h5 class="mb-0"><?=$dashboard['pending_order'];?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Gold Product</h5>
                                            <p class="text-muted mb-0">Available Quantity</p>
                                        </td>

                                        <td>
                                            <div id="radialchart-1" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">Qty</p>
                                            <h5 class="mb-0"><?=$dashboard['gold_products'];?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Silver Product </h5>
                                            <p class="text-muted mb-0">Available Quantity</p>
                                        </td>

                                        <td>
                                            <div id="radialchart-2" data-colors='["--bs-success"]' class="apex-charts"></div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">Qty</p>
                                            <h5 class="mb-0"><?=$dashboard['silver_products'];?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Diamond Product </h5>
                                            <p class="text-muted mb-0">Available Quantity</p>
                                        </td>

                                        <td>
                                            <div id="radialchart-3" data-colors='["--bs-danger"]' class="apex-charts"></div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">Qty</p>
                                            <h5 class="mb-0"><?=$dashboard['diamond_products'];?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Total Paid </h5>
                                            <p class="text-muted mb-0">Amount</p>
                                        </td>

                                        <td>
                                            <div id="radialchart-3" data-colors='["--bs-danger"]' class="apex-charts"></div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-1">Amt</p>
                                            <h5 class="mb-0">&#8377; <?=$paid_amount;?></h5>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-dark text-white font-size-18">
                                            <i class="bx bx-globe"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Today Visit</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4><?=$dashboard['today_visits'];?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-dark text-warning fw-bold font-size-18">
                                            <i class="bx bx-slideshow"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Last 30 Days Visiter</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4><?=$dashboard['last_thirty_days_visits'];?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?=base_url()?>Madmin/gold_product_list">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-dark text-success font-size-18">
                                                <i class="bx bx-gift"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Total Gold Product</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4><?=$dashboard['gold_products'];?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?=base_url()?>Madmin/silver_product_list">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-dark text-success fw-bold font-size-18">
                                                <i class="bx bx-gift"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Total Silver Product</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4><?=$dashboard['silver_products'];?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?=base_url()?>Madmin/gold_diamond_product_list">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-dark text-success font-size-18 fw-bold">
                                                <i class="bx bx-gift"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Total Diamond Product</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4><?=$dashboard['diamond_products'];?></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?=base_url()?>Madmin/order_pending">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-dark text-info fw-bold font-size-18">
                                                <i class="bx bx-cart-alt"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Total Pending Order</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4><?=$dashboard['pending_order'];?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/order_processing">
                    <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-dark text-info font-size-18">
                                            <i class="bx bx-cart-alt"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-14 mb-0">Total Processing Order</h5>
                                </div>
                                <div class="text-muted mt-4">
                                    <h4><?=$dashboard['processing_order'];?></h4>
                                </div>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/order_dispatch">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-info font-size-18">
                                        <i class="bx bx-cart-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Dispatch Order</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['dispatch_order'];?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/order_delivered">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-info font-size-18">
                                        <i class="bx bx-cart-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Deliverd Order</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['delivered_order'];?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/order_rejected">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-info font-size-18">
                                        <i class="bx bx-cart-alt"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Rejeted Order</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['rejected_order'];?></h4>
                                
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/custom_jwellery">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-danger font-size-18">
                                        <i class="bx bx-basket"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Pending CJ</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['pending_cj'];?></</h4>
                            
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/custom_jwellery_progress_list">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-danger font-size-18">
                                        <i class="bx bx-basket"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Processing CJ</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['progess_cj'];?></h4>
                                
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/custom_jwellery_confirm_list">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-danger font-size-18">
                                        <i class="bx bx-basket"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Confirm CJ</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['confirm_cj'];?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/custom_jwellery_cancel_list">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-danger font-size-18">
                                        <i class="bx bx-basket"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Total Cancel CJ</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['cancel_cj'];?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/customer_list">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-white font-size-18">
                                        <i class="bx bxs-user"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Active Customer</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['act_customers'];?></h4>
                            
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                <a href="<?=base_url()?>Madmin/customer_list">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title rounded-circle bg-dark text-danger font-size-18">
                                        <i class="bx bx-user-x"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-14 mb-0">Block Customer</h5>
                            </div>
                            <div class="text-muted mt-4">
                                <h4><?=$dashboard['block_customers'];?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

