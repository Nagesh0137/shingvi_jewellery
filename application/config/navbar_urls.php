<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['navbar'] = array(

    // 1. Dashboard
    array(
        'title' => 'Dashboard',
        'icon' => 'iconoir-home',
        'href' => 'admin/index',
        'method' => 'index',
    ),
    // array(
    //     'title' => 'Add Gold Products',
    //     'icon' => 'iconoir-numbered-list-left',
    //     'href' => 'admin/add_gold_product',
    //     'method' => 'add_gold_product',
    // ),
    array(
        'title' => 'Products',
        'icon' => 'iconoir-database-tag',
        'href' => '#',
        'submenu' => array(
            array('title' => 'Add Gold Product', 'url' => 'admin/add_gold_product', 'method' => 'add_gold_product'),
            array('title' => 'Gold Products List', 'url' => 'admin/gold_product_list', 'method' => 'gold_product_list'),
            array('title' => 'Add Silver Product', 'url' => 'admin/add_silver_product', 'method' => 'add_silver_product'),
            array('title' => 'Silver Products List', 'url' => 'admin/silver_product_list', 'method' => 'silver_product_list'),

        )
    ),
    array(
        'title' => 'Products filter',
        'icon' => 'iconoir-database-tag',
        'href' => 'admin/product_filter_add',
        'method' => 'product_filter_add',

    ),
    array(
        'title' => 'Rates',
        'icon' => 'iconoir-database-tag',
        'href' => '#',
        'submenu' => array(
            array('title' => 'Gold Rate', 'url' => 'admin/rate_gold', 'method' => 'rate_gold'),
            array('title' => 'Silver Rate', 'url' => 'admin/rate_silver', 'method' => 'rate_silver'),
            array('title' => 'Diamond Rate', 'url' => 'admin/rate_diamond', 'method' => 'rate_diamond'),

        )
    ),
    array(
        'title' => 'Custom Jewellery',
        'icon' => 'iconoir-database-tag',
        'href' => '#',
        'submenu' => array(
            array('title' => 'Order Pending', 'url' => 'admin/custom_jwellery', 'method' => 'custom_jwellery'),
            array('title' => 'Order Progress', 'url' => 'admin/custom_jwellery_progress_list', 'method' => 'custom_jwellery_progress_list'),
            array('title' => 'Order Confirm', 'url' => 'admin/custom_jwellery_confirm_list', 'method' => 'custom_jwellery_confirm_list'),
            array('title' => 'Order Cancel', 'url' => 'admin/custom_jwellery_cancel_list', 'method' => 'custom_jwellery_cancel_list'),
        )
    ),
    array(
        'title' => 'Web Details',
        'icon' => 'iconoir-database-tag',
        'href' => '#',
        'submenu' => array(
            array('title' => 'Slider', 'url' => 'admin/slider', 'method' => 'slider'),
            array('title' => 'banner', 'url' => 'admin/banner', 'method' => 'banner'),
            array('title' => 'testimonial', 'url' => 'admin/testimonial', 'method' => 'testimonial'),
            array('title' => 'blog', 'url' => 'admin/blog', 'method' => 'blog'),
            array('title' => 'Contact Details', 'url' => 'admin/contact_details', 'method' => 'contact_details'),
            array('title' => 'Branch Details', 'url' => 'admin/branch_details', 'method' => 'branch_details'),
            array('title' => 'About Details', 'url' => 'admin/about_details', 'method' => 'about_details'),
            array('title' => 'Owner Desk Details', 'url' => 'admin/owner_desk_details', 'method' => 'owner_desk_details'),
            array('title' => 'History Details', 'url' => 'admin/history_details', 'method' => 'history_details'),
            array('title' => 'FAQ', 'url' => 'admin/faq_section', 'method' => 'faq_section'),
            array('title' => 'Delivery Cycle', 'url' => 'admin/delivery_cycle', 'method' => 'delivery_cycle'),
        )
    ),

    // 2. Master Management
    array(
        'title' => 'Master',
        'icon' => 'iconoir-database-tag',
        'href' => '#',
        'submenu' => array(
            array('title' => 'Main Category', 'url' => 'admin/manage_category', 'method' => 'manage_category'),
            array('title' => 'GST Manage', 'url' => 'admin/gst_manage', 'method' => 'gst_manage'),
            array(
                'title' => 'Gender Category',
                'url' => 'admin/gender_category',
                'method' => 'gender_category'
            ),
            // array(
            //     'title' => 'Exchange Policy',
            //     'url' => 'admin/exchange_policy',
            //     'method' => 'exchange_policy'
            // ),
            // buyback
            // array(
            //     'title' => 'Buyback Policy',
            //     'url' => 'admin/buyback',
            //     'method' => 'buyback'
            // ),
            // gold_scheme_policy
            // array(
            //     'title' => 'Gold Scheme Policy',
            //     'url' => 'admin/gold_scheme_policy',
            //     'method' => 'gold_scheme_policy'
            // ),
            // shipping_policy
            // array(
            //     'title' => 'Shipping Policy',
            //     'url' => 'admin/shipping_policy',
            //     'method' => 'shipping_policy'
            // ),
            // cancellation_policy
            // array(
            //     'title' => 'Cancellation Policy',
            //     'url' => 'admin/cancellation_policy',
            //     'method' => 'cancellation_policy'
            // ),
            // disclaimer_policy
            // array(
            //     'title' => 'Disclaimer Policy',
            //     'url' => 'admin/disclaimer_policy',
            //     'method' => 'disclaimer_policy'
            // ),
            // privacy_policy
            // array(
            //     'title' => 'Privacy Policy',
            //     'url' => 'admin/privacy_policy',
            //     'method' => 'privacy_policy'
            // ),
            // terms_of_use
            // array(
            //     'title' => 'Terms of Use',
            //     'url' => 'admin/terms_of_use',
            //     'method' => 'terms_of_use'
            // ),
            // insurance_policy
            // array(
            //     'title' => 'Insurance Policy',
            //     'url' => 'admin/insurance_policy',
            //     'method' => 'insurance_policy'
            // ),
            // policies_page_name
            array(
                'title' => 'Policies Page',
                'url' => 'admin/policies_page_name',
                'method' => 'policies_page_name'
            ),

            array(
                'title' => 'Product Group',
                'url' => 'admin/manage_product_group',
                'method' => 'manage_product_group'
            ),
            array(
                'title' => 'Social Media',
                'url' => 'admin/social_media',
                'method' => 'social_media'
            ),

        )
    ),

    // 4. Admin Management
    array(
        'title' => 'Admin Management',
        'icon' => 'iconoir-user-badge-check',
        'href' => '#',
        'submenu' => array(
            array('title' => 'Admin Position', 'url' => 'admin/admin_position', 'method' => 'admin_position'),
            array('title' => 'Add Admin', 'url' => 'admin/add_admin', 'method' => 'add_admin'),
            array('title' => 'Add permission Method', 'url' => 'admin/admin_permission_url', 'method' => 'admin_permission_url'),
            array('title' => 'Permission Setup', 'url' => 'admin/permission_setup', 'method' => 'permission_setup'),
        )
    ),

);
