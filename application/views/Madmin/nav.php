
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Master</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/gst_manage" key="t-default">GST Manage</a></li>
                                <li><a href="<?=base_url()?>Madmin/diamond_color" key="t-saas">Diamond Color Scale</a></li>
                                <li><a href="<?=base_url()?>Madmin/diamond_clarity" key="t-crypto">Diamond Clarity Scale</a></li>
                                <li><a href="<?=base_url()?>Madmin/stone_type" key="t-blog">Stone Type</a></li>
                                <li><a href="<?=base_url()?>Madmin/stone_shape" key="t-jobs">Stone Shape</a></li>
                                <li><a href="<?=base_url()?>Madmin/special_offers" key="t-jobs">Add Special Days</a></li>
                                <li><a href="<?=base_url()?>Madmin/delivery_charges" key="t-jobs">Delivery Charges</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Madmin/job_applied_details">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Career Application</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-rupee"></i>
                                <span key="t-layouts">Rates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="<?=base_url()?>Madmin/rate_gold" key="t-vertical">Gold Rate</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>Madmin/rate_silver" key="t-vertical">Silver Rate</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>Madmin/rate_diamond" key="t-vertical">Diamond Rate</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-detail"></i>
                                <span key="t-dashboards">Web Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/slider" key="t-tui-calendar">Slider</a></li>

                                <li><a href="<?=base_url()?>Madmin/banner" key="t-full-calendar">Banner</a></li>
                                <li><a href="<?=base_url()?>Madmin/testimonial" key="t-full-calendar">Testimonial</a></li>
                                <li><a href="<?=base_url()?>Madmin/blog" key="t-full-calendar">Blog</a></li>
                                <li><a href="<?=base_url()?>Madmin/contact_details" key="t-full-calendar">Contact Details</a></li>
                                <li><a href="<?=base_url()?>Madmin/branch_details" key="t-full-calendar">Branch Details</a></li>
                                <li><a href="<?=base_url()?>Madmin/about_details" key="t-full-calendar">About Details</a></li>
                                <li><a href="<?=base_url()?>Madmin/owner_desk_details" key="t-full-calendar">Owner Desk Details</a></li>
                                <li><a href="<?=base_url()?>Madmin/history_details" key="t-full-calendar">History Details</a></li>
                                <li><a href="<?=base_url()?>Madmin/faq_section" key="t-full-calendar">FAQ Section</a></li>
                                <li><a href="<?=base_url()?>Madmin/delivery_cycle" key="t-full-calendar">Delivery Cycle</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Customer</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/customer_list" key="t-tui-calendar">Active Customers</a></li>
                                <li><a href="<?=base_url()?>Madmin/block_customer_list" key="t-full-calendar">Block Customers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-cart-alt"></i>
                                <span key="t-dashboards">Product</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/manage_category" key="t-tui-calendar">Main Category</a></li>
                                <li><a href="<?=base_url()?>Madmin/manage_product_group" key="t-full-calendar">Product Group</a></li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Filter</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="<?=base_url()?>Madmin/filter_title" key="t-list">Filter Title</a></li>
                                        <li><a href="<?=base_url()?>Madmin/filter_name" key="t-overview">Filter Name</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Add Product</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="<?=base_url()?>Madmin/add_gold_product" key="t-list">Gold Product</a></li>
                                        <li><a href="<?=base_url()?>Madmin/add_silver_product" key="t-overview">Silver Product</a></li>
                                        <li class="d-none"><a href="<?=base_url()?>Madmin/add_gold_diamond_product" key="t-overview">Gold-Diamond <br> Product</a></li>
                                        <li class="d-none"><a href="<?=base_url()?>Madmin/add_silver_diamond_product" key="t-overview">Silver-Diamond Product</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-candidate"> Product List</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="<?=base_url()?>Madmin/gold_product_list" key="t-list">Gold Product</a></li>
                                        <li><a href="<?=base_url()?>Madmin/silver_product_list" key="t-overview">Silver Product</a></li>
                                        <li class="d-none"><a href="<?=base_url()?>Madmin/gold_diamond_product_list" key="t-overview">Gold-Diamond <br> Product</a></li>
                                        <li class="d-none"><a href="<?=base_url()?>Madmin/silver_diamond_product_list" key="t-overview">Silver-Diamond Product</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Madmin/product_filter_add" class="waves-effect" data-filter-tags="Product Filter">
                                <i class="bx bx-gift"></i>
                                <span key="t-ecommerce">Product Filter</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user"></i>
                                <span key="t-ecommerce">Admin</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/add_admin" key="t-products">Add Admin</a></li>
                                <li><a href="<?=base_url()?>Madmin/admin_list" key="t-product-detail">List Admin</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-gift"></i>
                                <span key="t-ecommerce">Orders</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/order_pending" key="t-products">Pending Orders</a></li>
                                <li><a href="<?=base_url()?>Madmin/order_Confirm" key="t-product-detail">Processing Order</a></li>
                                <li><a href="<?=base_url()?>Madmin/order_dispatch" key="t-orders">Dispatch Orders</a></li>
                                <li><a href="<?=base_url()?>Madmin/order_delivered" key="t-customers">Delivered Orders</a></li>
                                <li><a href="<?=base_url()?>Madmin/order_reject" key="t-cart">Rejeted Orders</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-gift"></i>
                                <span key="t-ecommerce">Order Data</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/order_charges" key="t-products">Order Charges</a></li>
                                <li><a href="<?=base_url()?>Madmin/policies_page_name" key="t-product-detail">Policies Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fab fa-first-order-alt"></i>
                                <span key="t-ecommerce">Custom Jwellery</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/custom_jwellery" key="t-products">Order Pending</a></li>
                                <!-- <li><a href="<?=base_url()?>Madmin/custom_jwellery_progress_list" key="t-product-detail">Product Detail</a></li> -->
                                <li><a href="<?=base_url()?>Madmin/custom_jwellery_progress_list" key="t-orders">Progress Order</a></li>
                                <li><a href="<?=base_url()?>Madmin/custom_jwellery_confirm_list" key="t-customers">Confirm Order</a></li>
                                <li><a href="<?=base_url()?>Madmin/custom_jwellery_cancel_list" key="t-cart">Cancel Order</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Newslater Subscriber Customer Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/today_subscriber" key="t-tui-calendar">Today Subscriber</a></li>
                                <li><a href="<?=base_url()?>Madmin/all_subscriber" key="t-full-calendar">All Subscriber</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Website Adds</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?=base_url()?>Madmin/newslater_details" key="t-tui-calendar">Newslater Section</a></li>
                                <li><a href="<?=base_url()?>Madmin/update_featured_video" key="t-full-calendar">Home PageFeatured Video</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
               
