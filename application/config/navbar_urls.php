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
    array(
        'title' => 'Add Numbers',
        'icon' => 'iconoir-numbered-list-left',
        'href' => 'admin/add_numbers',
        'method' => 'add_numbers',
    ),

    // 2. Master Management
    array(
        'title' => 'Master',
        'icon' => 'iconoir-database-tag',
        'href' => '#',
        'submenu' => array(
            array('title' => 'Main Category', 'url' => 'admin/main_category', 'method' => 'main_category'),
            array('title' => 'Product', 'url' => 'admin/main_category', 'method' => 'main_category'),

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
