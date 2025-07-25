<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Rohan extends CI_Controller
{

	public function __construct()
	{
        parent::__construct();
		$this->load->model('My_model');
		// error_reporting(0);

		// array_multisort(array_column($members, 'member_name'), SORT_ASC, $members);
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('menu');
		$this->load->helper('helper1');
		$this->load->helper('helper');
		$this->load->library('encryption');
		// $this->load->helper('mail');
		$this->load->library('form_validation');
		$this->load->library('session');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		date_default_timezone_set('Asia/Kolkata');
		// 	$this->client = new Google_Client();
		// $this->client->setClientId('143872437300-lueb4tlfjhqj34p7ej2s2drocdvn265s.apps.googleusercontent.com');
		// $this->client->setClientSecret('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');
		// $this->client->setRedirectUri('https://jewelnagar.com/new_web/user/login_with_google');
		// $this->client->addScope("profile");
		// if(!isset($_SESSION['user_tbl_id']))
		// {
		// 	redirect(base_url().'login','refresh');
		// }
	}
    function upload_img($imgname, $imgtemp, $path = "uploads/")
	{
		// Generate a unique filename
		$fname = time() . rand(00000000, 99999999) . "." . pathinfo($imgname, PATHINFO_EXTENSION);
		$path1 = $path . $fname;

		// Move the uploaded file
		move_uploaded_file($imgtemp, $path1);

		// Resize the image after uploading
		$this->resize_image($path1, 500, 500); // Resize to 500x500px, adjust dimensions as needed

		return $fname;
	}

	protected function setToastMessage($message, $color)
	{
		$_SESSION['toast_message'] = $message;
		$_SESSION['toast_color'] = $color;
	}
    function resize_image($path, $width, $height)
	{
		// Load the image library and configure it
		$config['image_library'] = 'gd2'; // or 'imagemagick', 'netpbm'
		$config['source_image'] = $path;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $width;
		$config['height'] = $height;
		$config['quality'] = '75%'; // Set the quality to 75%, adjust as needed

		// Load the library and perform the resize operation
		$this->load->library('image_lib', $config);

		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors(); // Display any errors encountered during resizing
		}

		// Clear the library settings to prepare for the next operation
		$this->image_lib->clear();
	}
	public function ov($page, $data = "")
	{
		$this->head();
		$this->nav();
		$this->load->view("user/" . $page, $data);
		$this->footer();
	}
	public function head()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$this->load->view("user/head", $data);
	}
	public function nav()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		// $data['system_not'] = $this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
        $data['social_media'] = $this->My_model->select_where("social_media_tbl", ['status' => 'active'])[0];
		$this->load->view("user/nav", $data);
	}
	public function topnav()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$data['system_not'] = $this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("user/nav", $data);
	}
	public function footer()
	{
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$data['pages_name'] = $this->My_model->select_where("pages_name", ['status' => 'active']);
		$data['web_contact_details'] = $this->My_model->select("web_contact_details");
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['company_det_id' => '1']);
		$this->load->view("user/footer", $data);
	}

    function goldprice($id = "")
	{
		$data = $this->My_model->select_where('product_gold', array('prod_gold_id' => $id))[0];
		$purity = $data['purity'];
		$cross_weight = $data['cross_weight'];
		$other_weight = $data['other_weight'];
		$net_weight = $data['net_weight'];
		$labour_char = $data['labour_char'];
		$wastage_per = $data['wastage_per'];
		$other_amt = $data['other_amt'];
		$gst_per = $data['gst_per'];
		$caret = $data['caret'];

		if ($data['billing_type'] == "fixed") {
			return $amount = $data['fixed_total_amt'];
		} else {
			if (!$caret)
				return 0;

			$price = $this->db->query("SELECT " . $caret . " from rate_gold WHERE status='active' ORDER BY rate_gold_id DESC")->result_array()[0];
			$todaysprice = $price[$caret];
			$metal_amt = ($todaysprice / 10) * $net_weight;
			$labamt = $labour_char * $net_weight;
			$wastamt = $metal_amt * $wastage_per / 100;
			$net_amt = (float)$metal_amt + (float)$labamt + (float)$wastamt + (float)$other_amt;
			$gstamt1 = $net_amt * $gst_per / 100;
			$tot = $net_amt + $gstamt1;
			$a = explode('.', $tot);
			if (!isset($a[1]))
				$a[1] = "00";
			$b = $a[1];
			if ($b > 01) {
				$c = $a[0] + 1;
			} else {
				$c = $a[0];
			}
			return $c;
		}
	}

    function silverprice($id = "")
	{
		$data = $this->My_model->select_where('product_gold', array('prod_gold_id' => $id))[0];
		$purity = $data['purity'];
		$cross_weight = $data['cross_weight'];
		$other_weight = $data['other_weight'];
		$net_weight = $data['net_weight'];
		$labour_char = $data['labour_char'];
		$wastage_per = $data['wastage_per'];
		$other_amt = $data['other_amt'];
		$gst_per = $data['gst_per'];

		// $check  = $this->db->query("SELECT * FROM silver_product_offer WHERE prod_silver_id ='".$id."' AND status = 'active'")->result_array();

		// if(!empty($check)){
		// 	foreach($check as $key => $value){

		// 		$offer[$key] = $this->My_model->select_where("offer_tbl",['offer_tbl_id' => $value['offer_tbl_id']])[0]['percentage'];  
		// 	}

		// 	$discount = max($offer);

		// 	if($data['labour_char'] > 0){

		// 		$discount_price = ((float)$discount / 100) * (float)$data['labour_char'] ;	            			
		// 		$labour_char=$data['labour_char'] - $discount_price;

		// 	}else{

		// 		$discount_price = ((float)$discount / 100) * (float)$data['wastage_per'] ;	
		// 		$wastage_per = $data['wastage_per'] -$discount_price;
		// 	}

		// }else{
		// 	if($data['labour_char'] > 0){
		// 		$labour_char=$data['labour_char'];
		// 	}else{
		// 		$$wastage_per=$data['$wastage_per'];
		// 	}
		// }

		if ($data['billing_type'] == "fixed") {
			return $amount = $data['fixed_total_amt'];
		} else {
			$price = $this->db->query("SELECT silver_amt from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0];
			$todaysprice = $price['silver_amt'];
			$metal_amt = ($todaysprice / 10) * (float)$net_weight;
			$labamt = (float)$net_weight * (float)$labour_char;
			$wastamt = (float)$metal_amt * (float)$wastage_per / 100;
			$net_amt = (float)$metal_amt + (float)$labamt + (float)$wastamt + (float)$other_amt;
			$gstamt1 = (float)$net_amt * (float)$gst_per / 100;
			$tot = (float)$net_amt + (float)$gstamt1;
			$a = explode('.', $tot);
			if (isset($a[1])) {
				$b = $a[1];
			} else {
				$b = 0;
			}
			if ($b > 01) {
				$c = $a[0] + 1;
			} else {
				$c = $a[0];
			}
			return $c;
		}
	}

    public function product_details_filter(){
        // Age Category Filter
    // 	$ageQ = '';
    // 	if (isset($_GET['age_cat']) && $_GET['age_cat'] != 'all') {
    // 		$ageQ = 'AND product_gold.age_category = "' . $_GET['age_cat'] . '"';
    // 	}

    // 	if (isset($_GET['g_id'])) {
    // 		$ageQ .= "AND product_gold.group_id = '" . $_GET['g_id'] . "'";
    // 	}

    // 	if (!isset($_GET['cat_id'])) {
    // 		if (isset($_GET['label'])) {
    // 			if ($_GET['label'] != 'Gift') {
    // 				// $_GET['cat_id'] = 5;
    // 			}
    // 		} else {
    // 			$_GET['cat_id'] = 5;
    // 		}
    // 	}

    // 	$page_no = 1;
    // 	$per_page = 20;
    // 	$search = $_GET['q'] ?? '';

    // 	// Search Conditions
    // 	$show = " AND (
    // 	product_gold.product_details LIKE '%" . $search . "%' OR
    // 	category.category_name LIKE '%" . $search . "%' OR
    // 	product_gold.product_name LIKE '%" . $search . "%'
    // )";

    // 	if (isset($_GET['g_id'])) {
    // 		$gId = "AND product_group.product_group_id = '" . $_GET['g_id'] . "'";
    // 		$pgId = "AND product_gold.group_id = '" . $_GET['g_id'] . "'";
    // 	} else {
    // 		$gId = " ";
    // 		$pgId = " ";
    // 	}
    // 	// Count total rows
    // 	$total_rows = $this->db->query("
    // 	SELECT COUNT(product_gold.prod_gold_id) AS ttl_rows
    // 	FROM category, product_gold
    // 	WHERE product_gold.cat_id = category.category_id
    // 	AND product_gold.status = 'active'
    // 	$show $ageQ
    // ")->result_array()[0]['ttl_rows'];

    // 	// Pagination
    // 	$data['start'] = $per_page * $page_no - $per_page;
    // 	$data['ttl_pages'] = ceil($total_rows / $per_page);
    // 	$data['page_no'] = $page_no;

    // 	// Get products
    // 	$products = $this->db->query(
    // 		"
    // 	SELECT * FROM category, product_gold
    // 	WHERE product_gold.cat_id = category.category_id
    // 	AND product_gold.status = 'active'
    // 	$show $ageQ $pgId
    // 	ORDER BY product_gold.prod_gold_id DESC
    // 	LIMIT " . $data['start'] . "," . $per_page
    // 	)->result_array();

    // 	// Get categories and product groups
    // 	$data['category'] = $this->My_model->select_where("category", ['category_id' => $_GET['cat_id'], 'status' => 'active']);


    // 	$data['product_group'] = $this->db->query("
    // 	SELECT category.*, product_group.*, product_group.product_group_id 
    // 	FROM category, product_gold, product_group 
    // 	WHERE category.category_id = product_gold.cat_id 
    // 	AND product_gold.status = 'active' 
    // 	AND product_group.status = 'active' 
    // 	AND category.category_id = '" . $_GET['cat_id'] . "'
    // 	AND product_gold.group_id = product_group.product_group_id 
    // 	" . $gId . "
    // 	GROUP BY product_group.product_group_id
    // ")->result_array();

    // 	// Filtered products result
    // 	$filtered_products = [];

    // 	foreach ($products as $row) {
    // 		// Fetch filters
    // 		$fil = $this->db->query("SELECT * FROM product_filter WHERE status='active' AND prod='" . $row['prod_gold_id'] . "'")->result_array();
    // 		$ft = '';
    // 		$ff = '';
    // 		foreach ($fil as $frow) {
    // 			if (strpos($ft, $frow['filter_title']) === false) {
    // 				$ft .= "ftitle" . $frow['filter_title'] . " ";
    // 			}
    // 			$ff .= "fname" . $frow['filter_name'] . " ";
    // 		}

    // 		$row['ft'] = $ft;
    // 		$row['ff'] = $ff;
    // 		$row['cart'] = "No";

    // 		// Calculate product price
    // 		$price = 0;
    // 		if ($row['cat_id'] == 5) {
    // 			$price = $this->goldprice($row['prod_gold_id']);
    // 		} elseif ($row['cat_id'] == 6) {
    // 			$price = $this->silverprice($row['prod_gold_id']);
    // 		} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dgold') {
    // 			$price = $this->golddiamondprice($row['prod_gold_id']);
    // 		} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dsilver') {
    // 			$price = $this->silverdiamondprice($row['prod_gold_id']);
    // 		}

    // 		$row['price'] = $price;
    // 		$row['rating'] = (int) $row['rating'];

    // 		// $row['total_discount_amt'] = 2000;
    // 		if ($row['total_discount_amt'] > 0) {
    // 			$row['original_price'] = $row['price'];
    // 			$row['discount_amount'] = $row['total_discount_amt'];
    // 			$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
    // 			$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
    // 			$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
    // 		} else {
    // 			$row['original_price'] = $row['price'];
    // 			$row['discount_amount'] = 0;
    // 			$row['discounted_price'] = 0;
    // 			$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
    // 			$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
    // 		}
    // 		$row['imgs'] = explode('||', $row['product_image']);

    // 		// Apply min and max amount filter
    // 		$valid = true;
    // 		if (isset($_GET['min_amt']) && $row['price'] < $_GET['min_amt']) {
    // 			$valid = false;
    // 		}
    // 		if (isset($_GET['max_amt']) && $row['price'] > $_GET['max_amt']) {
    // 			$valid = false;
    // 		}

    // 		if ($valid) {
    // 			$filtered_products[] = $row;
    // 		}
    // 	}

    // 	// echo "<pre>";
    // 	// print_r($filtered_products);
    // 	// exit;
    // 	$data['categories'] = $this->My_model->select_where("category", ['status' => 'active']);
    
    // 	$data['product_groupes'] = $this->My_model->select_where("product_group", ['status' => 'active']);
    // 	$data['products'] = $filtered_products;

    $ageQ = '';
    if (isset($_GET['age_cat']) && $_GET['age_cat'] != 'all') {
        $ageQ = 'AND product_gold.age_category = "' . $_GET['age_cat'] . '"';
    }
    // REMOVE group_id filter: do not add any filtering by g_id
    // if(isset($_GET['g_id']))
    // {
    //     $ageQ .= "AND product_gold.group_id = '".$_GET['g_id']."'";
    // }
    if (!isset($_GET['cat_id'])) {
        if (isset($_GET['label'])) {
            if ($_GET['label'] != 'Gift') {
                // $_GET['cat_id'] = 5;
            }
        } else {
            $_GET['cat_id'] = 5;
        }
    }
    $page_no = 1;
    $per_page = 20;
    $search = $_GET['q'] ?? '';
    // Search Conditions
    $show = " AND (
        product_gold.product_details LIKE '%" . $search . "%' OR
        category.category_name LIKE '%" . $search . "%' OR
        product_gold.product_name LIKE '%" . $search . "%'
    )";
    // REMOVE group_id filter: do not add any filtering by g_id
    // if(isset($_GET['g_id']))
    // {
    //     $gId = "AND product_group.product_group_id = '".$_GET['g_id']."'";
    //     $pgId = "AND product_gold.group_id = '".$_GET['g_id']."'";
    // }else{
    //     $gId = " "; 
    //     $pgId = " ";
    // }
    $gId = " ";
    $pgId = " ";
    // Count total rows
    $total_rows = $this->db->query("
        SELECT COUNT(product_gold.prod_gold_id) AS ttl_rows
        FROM category, product_gold
        WHERE product_gold.cat_id = category.category_id
        AND product_gold.status = 'active'
        $show $ageQ
    ")->result_array()[0]['ttl_rows'];
    // Pagination
    $data['start'] = $per_page * $page_no - $per_page;
    $data['ttl_pages'] = ceil($total_rows / $per_page);
    $data['page_no'] = $page_no;
    // Get products
    // Custom group filter logic: show products for first group with products
    $products = [];
    if (isset($_GET['g_id']) && $_GET['g_id'] !== '') {
        $groupIds = explode(',', $_GET['g_id']);
        foreach ($groupIds as $gid) {
            $groupProducts = $this->db->query("
                SELECT * FROM category, product_gold
                WHERE product_gold.cat_id = category.category_id
                AND product_gold.status = 'active'
                AND product_gold.group_id = ?
                $show $ageQ
                ORDER BY product_gold.prod_gold_id DESC
                LIMIT " . $data['start'] . "," . $per_page,
                [$gid]
            )->result_array();
            if (!empty($groupProducts)) {
                $products = $groupProducts;
                break;
            }
        }
        // If no group has products, fallback to all products for category
        if (empty($products)) {
            $products = $this->db->query("
                SELECT * FROM category, product_gold
                WHERE product_gold.cat_id = category.category_id
                AND product_gold.status = 'active'
                $show $ageQ
                ORDER BY product_gold.prod_gold_id DESC
                LIMIT " . $data['start'] . "," . $per_page
            )->result_array();
        }
    } else {
        $products = $this->db->query("
            SELECT * FROM category, product_gold
            WHERE product_gold.cat_id = category.category_id
            AND product_gold.status = 'active'
            $show $ageQ
            ORDER BY product_gold.prod_gold_id DESC
            LIMIT " . $data['start'] . "," . $per_page
        )->result_array();
    }
    // Get categories and product groups
    $data['category'] = $this->My_model->select_where("category", ['category_id' => $_GET['cat_id'],'status' => 'active']);
    // Only fetch product groups for the selected category
    $data['product_group'] = $this->My_model->select_where("product_group", [
        'status' => 'active',
        'group_category' => $_GET['cat_id']
    ]);
    $filtered_products = [];
    foreach ($products as $row) {
        $fil = $this->db->query("SELECT * FROM product_filter WHERE status='active' AND prod='" . $row['prod_gold_id'] . "'")->result_array();
        $ft = '';
        $ff = '';
        foreach ($fil as $frow) {
            if (strpos($ft, $frow['filter_title']) === false) {
                $ft .= "ftitle" . $frow['filter_title'] . " ";
            }
            $ff .= "fname" . $frow['filter_name'] . " ";
        }
        $row['ft'] = $ft;
        $row['ff'] = $ff;
        $row['cart'] = "No";
        // Calculate product price
        $price = 0;
        if ($row['cat_id'] == 5) {
            $price = $this->goldprice($row['prod_gold_id']);
        } elseif ($row['cat_id'] == 6) {
            $price = $this->silverprice($row['prod_gold_id']);
        } elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dgold') {
            $price = $this->golddiamondprice($row['prod_gold_id']);
        } elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dsilver') {
            $price = $this->silverdiamondprice($row['prod_gold_id']);
        }
        $row['price'] = $price;
        $row['rating'] = (int) $row['rating'];
        // Apply min and max amount filter
        $valid = true;
        if (isset($_GET['min_amt']) && $row['price'] < $_GET['min_amt']) {
            $valid = false;
        }
        if (isset($_GET['max_amt']) && $row['price'] > $_GET['max_amt']) {
            $valid = false;
        }
        if ($valid) {
            $filtered_products[] = $row;
        }
    }
    $data['products'] = $filtered_products;
    // Calculate min and max price for slider
    $all_prices = array_column($filtered_products, 'price');
    $data['min_amt'] = !empty($all_prices) ? min($all_prices) : 0;
    $data['max_amt'] = !empty($all_prices) ? max($all_prices) : 2000;
    $this->ov("product_details_filter",$data);
}
}