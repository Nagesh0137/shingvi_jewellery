<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('My_model');
		// error_reporting(0);

		// array_multisort(array_column($members, 'member_name'), SORT_ASC, $members);
		$this->load->helper('form');
		$this->load->helper('url');
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
		// if(!isset($_SESSION['user_tbl_id']))
		// {
		// 	redirect(base_url().'login','refresh');
		// }
	}
	protected function update_products_stock($product_id, $plant_id, $stock, $reason)
	{
		$plant_products = $this->My_model->select_where("plant_products", ["product_id" => $product_id, "plant_id" => $plant_id]);
		if (isset($plant_products[0])) {
			$plant_products_id = $plant_products[0]['plant_products_id'];

			$new_stock = $plant_products[0]['stock'] + $stock;

			$this->My_model->update("plant_products", ["plant_products_id" => $plant_products_id], ["stock" => $new_stock]);

			$product_stock_history = [
				"plant_products_id" => $plant_products_id,
				"product_id" => $product_id,
				"plant_id" => $plant_id,
				"stock" => $stock,
				"reason" => $reason,
				"date" => date('Y-m-d'),
				"time" => date('H:iA'),
				"entry_by" => "admin"
			];

			$this->My_model->insert("product_stock_history", $product_stock_history);
		}
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
	public function getDistrict()
	{
		$data = $this->My_model->select_where("district", ['status' => 'active', 'state_id' => $_POST['state_id']]);
		echo json_encode(['data' => $data]);
	}

	public function generate_encrypted_url()
	{
		// Get the current URL
		$current_url = current_url();

		// Get the base URL from config
		$base_url = base_url();

		// Get the URL part after the base URL
		$url_part = str_replace($base_url, '', $current_url);

		// Encrypt the URL part
		$encrypted_url_part = encrypt_url($url_part);

		// Return the encrypted full URL
		return $base_url . $encrypted_url_part;
	}

	public function index()
	{


		$this->ov("index");
	}
	public function add_to_wishlist()
	{
		$id = $this->input->post('id');
		// Initialize wishlist if not exists
		if (!$this->session->userdata('wishlist')) {
			$this->session->set_userdata('wishlist', []);
		}

		$wishlist = $this->session->userdata('wishlist');

		// Toggle: Remove if exists, add if not
		if (($key = array_search($id, $wishlist)) !== false) {
			unset($wishlist[$key]); // Remove
			$action = 'removed';
		} else {
			$wishlist[] = $id; // Add
			$action = 'added';
		}

		// Update session
		$this->session->set_userdata('wishlist', array_values($wishlist)); // Reindex array

		// Return meaningful JSON response
		echo json_encode([
			'status' => 'success',
			'action' => $action,
			'wishlist' => $this->session->userdata('wishlist') // Optional: Return updated wishlist
		]);
	}
	public function remove_wishlist()
	{
		if (isset($_POST['id'])) {
			$id = $_POST['id'];

			// If session exists and is an array
			if (isset($_SESSION['wishlist']) && is_array($_SESSION['wishlist'])) {
				// Search and remove
				if (($key = array_search($id, $_SESSION['wishlist'])) !== false) {
					unset($_SESSION['wishlist'][$key]);
					$ttlAmt = 0;
					foreach ($_SESSION['wishlist'] as $id) {
						$row = $this->My_model->select_where('numbers_tbl', ['numbers_tbl_id' => $id]);
						if ($row) {
							$ttlAmt += (int) $row[0]['price'];
						}
					}
					$_SESSION['wishlist'] = array_values($_SESSION['wishlist']); // Reindex
					echo json_encode(['status' => 'success', 'totalWishlist' => count($_SESSION['wishlist']), 'ttlAmt' => $ttlAmt]);
				} else {
					echo json_encode(['status' => 'failed', 'totalWishlist' => count($_SESSION['wishlist'])]);
				}
			} else {
				echo json_encode(['status' => 'empty', 'totalWishlist' => count($_SESSION['wishlist'])]);
			}
		} else {
			echo json_encode(['status' => 'invalid', 'totalWishlist' => count($_SESSION['wishlist'])]);
		}
	}
	public function save_order()
	{
		$_POST['product_number'] = $this->My_model->select_where("numbers_tbl", ['numbers_tbl_id' => $_POST['numbers_tbl_id'], 'status' => 'active'])[0]['duplicate_number'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = 'active';
		$_POST['payment_status'] = 'pending';
		$_POST['orderId'] = 'ORD' . date('YmdH') . mt_rand(1000, 9999);

		$sold_date = date('Y-m-d');
		$sold_time = time();
		$this->My_model->update("numbers_tbl", ['numbers_tbl_id' => $_POST['numbers_tbl_id'], 'status' => 'active'], ['sold_date' => $sold_date, 'sold_time' => $sold_time, 'product_status' => 'Sold']);
		$data = $this->My_model->insert("order_tbl", $_POST);
		if ($data) {
			$this->setToastMessage('Order Placed successfully...', 'success');
			redirect(base_url() . 'user/index', 'refresh');
		} else {
			$this->setToastMessage('Order Not Placed...', 'danger');
			redirect(base_url() . 'user/index', 'refresh');
		}
	}
	public function save_morder()
	{
		$_POST['orderId'] = 'ORD' . date('YmdH') . mt_rand(1000, 9999);
		foreach ($_SESSION['wishlist'] as $id) {
			$_POST['product_number'] = $this->My_model->select_where("numbers_tbl", ['numbers_tbl_id' => $id, 'status' => 'active'])[0]['duplicate_number'];
			$_POST['numbers_tbl_id'] = $this->My_model->select_where("numbers_tbl", ['numbers_tbl_id' => $id, 'status' => 'active'])[0]['numbers_tbl_id'];
			$_POST['entry_time'] = time();
			$_POST['entry_date'] = date('Y-m-d');
			$_POST['status'] = 'active';
			$_POST['payment_status'] = 'pending';
			$sold_date = date('Y-m-d');
			$sold_time = time();
			$this->My_model->update("numbers_tbl", ['numbers_tbl_id' => $id, 'status' => 'active'], ['sold_date' => $sold_date, 'sold_time' => $sold_time, 'product_status' => 'Sold']);
			$data = $this->My_model->insert("order_tbl", $_POST);
		}
		if ($data) {
			$_SESSION['wishlist'] = [];
			$this->setToastMessage('Order Placed successfully...', 'success');
			redirect(base_url() . 'user/index', 'refresh');
		} else {
			$this->setToastMessage('Order Not Placed...', 'danger');
			redirect(base_url() . 'user/index', 'refresh');
		}
	}
	public function add_to_buy()
	{
		$id = $this->input->post('id');

		if (!$this->session->userdata('buy_now')) {
			$this->session->set_userdata('buy_now', []);
		}

		$buy_now = $this->session->userdata('buy_now');
		if (!in_array($id, $buy_now)) {
			$buy_now[] = $id;
			$this->session->set_userdata('buy_now', $buy_now);
		}
		echo json_encode($_SESSION);
	}
	public function profile()
	{

		$data['state'] = $this->My_model->select_where("state", ['status' => 'active']);
		$data['det'] = $this->My_model->select_where("user_tbl", ['user_tbl_id' => $_SESSION['user_tbl_id']])[0];
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$this->ov('profile', $data);
	}
	public function update_profile()
	{
		// exit();
		if (isset($_FILES['user_profile_img'])) {
			if ($_FILES['user_profile_img']['name'] != "") {
				$imgname = $_FILES['user_profile_img']['name'];
				$imgtemp = $_FILES['user_profile_img']['tmp_name'];
				$path = "uploads/";

				// Upload and resize the image
				$_POST['user_profile_img'] = $this->upload_img($imgname, $imgtemp, $path);

				$path1 = "uploads/" . $_POST['user_profile_img1'];
				if (!empty($_POST['user_profile_img1'])) {
					unlink($path1);
				}
			} else {
				$_POST['user_profile_img'] = $_POST['user_profile_img1'];
			}
		}
		unset($_POST['user_profile_img1']);
		$data = $this->My_model->update("user_tbl", ['user_tbl_id' => $_POST['user_tbl_id']], $_POST);
		if ($data) {
			$this->setToastMessage('Profile Updated successfully...', 'success');
			redirect(base_url() . 'user/profile', 'refresh');
		} else {
			$this->setToastMessage('Profile Not Updated...', 'danger');
			redirect(base_url() . 'user/profile', 'refresh');
		}
	}



	public function transport_deal()
	{
		$this->ov("transport_deal");
	}
	public function deliveries()
	{
		$this->ov("deliveries");
	}
	public function vehicle()
	{
		$this->ov("vehicle");
	}
	public function settlements()
	{
		$this->ov("settlements");
	}
	public function deal()
	{
		$this->ov("deal");
	}
	public function network()
	{
		$this->ov("network");
	}

	public function send_otp()
	{
		if (isset($_POST['mobile'])) {
			$check = $this->My_model->select_where("user_tbl", ['mobile' => $_POST['mobile']]);
			// if(empty($check)){
			$data['mobile'] = $_POST['mobile'];
			$data['otp'] = rand(111111, 999999);
			$data['entry_time'] = time();
			$this->My_model->insert('forget_pass', $data);
			// $this->sendotpsms($data['mobile'],$data['otp']);
			$data['status'] = "success";
			echo json_encode($data);
			// $message['otp'] = $data['otp'];
			// }else{
			// $message['message'] = "User Already have a Account";
			// $message['status'] = "have_account";
			// echo json_encode($message);
			// }
		} else {
			$message['message'] = "Please valid Mobile No";
			$message['status'] = "error";
			echo json_encode($message);
		}
	}

	public function sendotpsms($mobile, $otp, $echo = "")
	{
		$Phno = $mobile;
		$Msg = "Use this OTP " . $otp . " To complete your internship registration process. A2Z INFOTECH";
		$SenderID = 'AZSOFT';
		$UserID = 'a2zinfo';
		$Password = 'gvgp3117GV';
		$EntityID = '1701160371643552190';
		$TemplateID = '1707164043147121949';
		$ch = '';
		$url = 'http://nimbusit.biz/api/SmsApi/SendSingleApi?UserID=' . $UserID . '&Password=' . $Password . '&SenderID=' . $SenderID . '&Phno=' . $Phno . '&Msg=' . urlencode($Msg) . '&EntityID=' . $EntityID . '&TemplateID=' . $TemplateID;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$output = curl_exec($ch);
		curl_close($ch);

		// echo $output['status'];
		$message = ['status' => 'success', 'message' => 'OTP send Successfully', 'otp' => $otp];
		if ($echo == "")
			echo json_encode($message);

		// echo send_message($Phno,$Msg,$Password,$SenderID,$UserID);
	}


	public function about()
	{
		$this->head();
		$this->nav();
		// $data['about'] = $this->My_model->select_where("about_tbl", ["status" => "active"]);
		// $data['mission_vision'] = $this->My_model->select_where("mission_vision_tbl", ["status" => "active"]);
		$this->load->view("User/about");
		$this->footer();
	}
	// public function contact()
	// {
	// 	$this->head();
	// 	$this->nav();
	// 	// $data['about'] = $this->My_model->select_where("about_tbl", ["status" => "active"]);
	// 	// $data["social_media"] = $this->My_model->select_where("social_media_tbl", ["status" => "active"])[0];
	// 	// $data['mission_vision'] = $this->My_model->select_where("mission_vision_tbl", ["status" => "active"]);
	// 	$this->load->view("User/contact");
	// 	$this->footer();
	// }
	// public function faq()
	// {
	// 	$this->head();
	// 	$this->nav();
	// 	$data["faq"] = $this->My_model->select_where("faq_tbl", ["status" => "active"]);
	// 	$data["social_media"] = $this->My_model->select_where("social_media_tbl", ["status" => "active"])[0];
	// 	$this->load->view("User/faq", $data);
	// 	$this->footer();
	// }


	// public function save_contact_form()
	// {
	// 	$_POST['entry_time'] = time();
	// 	$_POST['entry_date'] = date('Y-m-d');
	// 	$_POST['status'] = 'pending';
	// 	$data = $this->My_model->insert("contact_us_tbl", $_POST);
	// 	if ($data) {
	// 		$this->setToastMessage('Contact Form Submitted successfully...', 'success');
	// 		redirect(base_url() . 'user/contact', 'refresh');
	// 	} else {
	// 		$this->setToastMessage('Contact Form Not Submitted...', 'danger');
	// 		redirect(base_url() . 'user/contact', 'refresh');
	// 	}
	// }

	public function products()
	{
		// Age Category Filter
		$ageQ = '';
		if (isset($_GET['age_cat']) && $_GET['age_cat'] != 'all') {
			$ageQ = 'AND product_gold.age_category = "' . $_GET['age_cat'] . '"';
		}

		if (isset($_GET['g_id'])) {
			$ageQ .= "AND product_gold.group_id = '" . $_GET['g_id'] . "'";
		}

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

		if (isset($_GET['g_id'])) {
			$gId = "AND product_group.product_group_id = '" . $_GET['g_id'] . "'";
			$pgId = "AND product_gold.group_id = '" . $_GET['g_id'] . "'";
		} else {
			$gId = " ";
			$pgId = " ";
		}
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
		$products = $this->db->query(
			"
        SELECT * FROM category, product_gold
        WHERE product_gold.cat_id = category.category_id
        AND product_gold.status = 'active'
        $show $ageQ $pgId
        ORDER BY product_gold.prod_gold_id DESC
        LIMIT " . $data['start'] . "," . $per_page
		)->result_array();

		// Get categories and product groups
		$data['category'] = $this->My_model->select_where("category", ['category_id' => $_GET['cat_id'], 'status' => 'active']);


		$data['product_group'] = $this->db->query("
        SELECT category.*, product_group.*, product_group.product_group_id 
        FROM category, product_gold, product_group 
        WHERE category.category_id = product_gold.cat_id 
        AND product_gold.status = 'active' 
        AND product_group.status = 'active' 
        AND category.category_id = '" . $_GET['cat_id'] . "'
        AND product_gold.group_id = product_group.product_group_id 
        " . $gId . "
        GROUP BY product_group.product_group_id
    ")->result_array();

		// Filtered products result
		$filtered_products = [];

		foreach ($products as $row) {
			// Fetch filters
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
		$this->ov("products", $data);
	}

	public function product_details()
	{
		$this->head();
		$this->nav();
		$this->load->view("user/product_details");
		$this->footer();
	}
	public function quick_view()
	{
		$data['products'] = $this->db->query("SELECT * FROM product_gold WHERE product_gold.prod_gold_id = '" . $_POST['product_id'] . "' AND product_gold.status='active' ")->result_array();

		foreach ($data['products'] as $key => $row) {
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
			if ($row['total_discount_amt'] > 0) {
				$data['products'][$key]['original_price'] = $row['price'];
				$data['products'][$key]['discount_amount'] = $row['total_discount_amt'];
				$data['products'][$key]['discounted_price'] = $row['price'] - $row['total_discount_amt'];
				$data['products'][$key]['formatted_original_price'] = '₹ ' . number_format1($row['price']);
				$data['products'][$key]['formatted_discounted_price'] = '₹ ' . number_format1($data['products'][$key]['discounted_price']);
			} else {
				$data['products'][$key]['original_price'] = $row['price'];
				$data['products'][$key]['discount_amount'] = 0;
				$data['products'][$key]['discounted_price'] = 0;
				$data['products'][$key]['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
				$data['products'][$key]['formatted_original_price'] = '₹ ' . number_format1($row['price']);
			}
			$data['products'][$key]['imgs'] = explode('||', $row['product_image']);
		}
		echo json_encode($data['products']);
	}
	// wishlist
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
	function discountgoldprice($id = "")
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
			$check  = $this->db->query("SELECT * FROM gold_product_offer WHERE prod_gold_id ='" . $id . "' AND status = 'active'")->result_array();
			if (!empty($check)) {
				foreach ($check as $key => $value) {
					$offer[$key] = $this->My_model->select_where("offer_tbl", ['offer_tbl_id' => $value['offer_tbl_id']])[0]['percentage'];
				}
				$discount = max($offer);

				if ($data['labour_char'] > 0) {

					$discount_price = ((float)$discount / 100) * (float)$data['labour_char'];
					$labour_char = $data['labour_char'] - $discount_price;
				} else {

					$discount_price = ((float)$discount / 100) * (float)$data['wastage_per'];
					$wastage_per = $data['wastage_per'] - $discount_price;
				}
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
			// else{

			// 	if($data['labour_char'] > 0){
			// 		$labour_char=$data['labour_char'];
			// 	}else{
			// 		$wastage_per = $data['wastage_per'];
			// 	}
			// }
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

	function discountsilverprice($id = "")
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
		if ($data['billing_type'] == "fixed") {
			return $amount = $data['fixed_total_amt'];
		} else {
			$check  = $this->db->query("SELECT * FROM silver_product_offer WHERE prod_silver_id ='" . $id . "' AND status = 'active'")->result_array();

			if (!empty($check)) {
				foreach ($check as $key => $value) {

					$offer[$key] = $this->My_model->select_where("offer_tbl", ['offer_tbl_id' => $value['offer_tbl_id']])[0]['percentage'];
				}

				$discount = max($offer);

				if ($data['labour_char'] > 0) {

					$discount_price = ((float)$discount / 100) * (float)$data['labour_char'];
					$labour_char = $data['labour_char'] - $discount_price;
				} else {

					$discount_price = ((float)$discount / 100) * (float)$data['wastage_per'];
					$wastage_per = $data['wastage_per'] - $discount_price;
				}
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
			// else{
			// 	if($data['labour_char'] > 0){
			// 		$labour_char=$data['labour_char'];
			// 	}else{
			// 		$$wastage_per=$data['$wastage_per'];
			// 	}
			// }

		}
	}
	function golddiamondprice($id)
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
			$price = $this->db->query("SELECT " . $caret . " from rate_gold WHERE status='active' ORDER BY rate_gold_id DESC")->result_array()[0];
			$dqnt = $this->db->query("SELECT * from product_diamond_data WHERE product_id='" . $id . "' AND status='active' ")->result_array();
			$todaysprice = $price[$caret];
			$metal_amt = ($todaysprice / 10) * $net_weight;
			$metal_amt1 = $this->float_rate_check(number_format($metal_amt, 3, '.', ''));
			$labamt = $labour_char * $net_weight;
			$labamt1 = $this->float_rate_check(number_format($labamt, 3, '.', ''));
			$wastamt = $metal_amt * $wastage_per / 100;
			$wastamt1 = $this->float_rate_check(number_format($wastamt, 3, '.', ''));
			$other_amt1 = $this->float_rate_check(number_format($other_amt, 3, '.', ''));
			$diamond_rate = 0;
			foreach ($dqnt as $value) {
				$diamond_charges = $this->db->query("SELECT * from rate_diamond WHERE status='active' ORDER BY rate_diamond_id DESC")->result_array()[0];
				$diamond_color = $this->db->query("SELECT * from diamond_color WHERE diamond_color_id='" . $value['stone_color_id'] . "'")->result_array()[0];
				$diamond_clarity = $this->db->query("SELECT * from diamond_clarity WHERE diamond_clarity_id='" . $value['stone_quality_id'] . "'")->result_array()[0];
				$srate = ($diamond_charges['diamond_amt'] / 1) * $value['stone_caret'];
				$colrate = $srate * $diamond_color['dec_amt'] / 100;
				$clarate = $srate * $diamond_clarity['dec_amt'] / 100;
				$stotal = $srate - $clarate - $colrate;
				$diamond_rate += $stotal;
			}
			$diamond_rate1 = $this->float_rate_check(number_format($diamond_rate, 3, '.', ''));
			$net_amt = $metal_amt1 + $labamt1 + $wastamt1 + $other_amt1 + $diamond_rate1;
			$gstamt1 = $net_amt * $data['gst_per'] / 100;
			$gstamt2 = $this->float_rate_check(number_format($gstamt1, 3, '.', ''));
			$tot = $net_amt + $gstamt2;
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

	function silverdiamondprice($id)
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
			$price = $this->db->query("SELECT * from  rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0];
			$dqnt = $this->db->query("SELECT * from product_diamond_data WHERE product_id='" . $id . "' AND status='active' ")->result_array();
			$todaysprice = $price['silver_amt'];
			$metal_amt = ($todaysprice / 10) * $net_weight;
			$metal_amt1 = $this->float_rate_check(number_format($metal_amt, 3, '.', ''));
			$labamt = $labour_char * $net_weight;
			$labamt1 = $this->float_rate_check(number_format($labamt, 3, '.', ''));
			$wastamt = $metal_amt * $wastage_per / 100;
			$wastamt1 = $this->float_rate_check(number_format($wastamt, 3, '.', ''));
			$other_amt1 = $this->float_rate_check(number_format($other_amt, 3, '.', ''));
			$diamond_rate = 0;
			foreach ($dqnt as $value) {
				$diamond_charges = $this->db->query("SELECT * from rate_diamond WHERE status='active' ORDER BY rate_diamond_id DESC")->result_array()[0];
				$diamond_color = $this->db->query("SELECT * from diamond_color WHERE diamond_color_id='" . $value['stone_color_id'] . "'")->result_array()[0];
				$diamond_clarity = $this->db->query("SELECT * from diamond_clarity WHERE diamond_clarity_id='" . $value['stone_quality_id'] . "'")->result_array()[0];
				$srate = ($diamond_charges['diamond_amt'] / 1) * $value['stone_caret'];
				$colrate = $srate * $diamond_color['dec_amt'] / 100;
				$clarate = $srate * $diamond_clarity['dec_amt'] / 100;
				$stotal = $srate - $clarate - $colrate;
				$diamond_rate += $stotal;
			}
			$diamond_rate1 = $this->float_rate_check(number_format($diamond_rate, 3, '.', ''));
			$net_amt = $metal_amt1 + $labamt1 + $wastamt1 + $other_amt1 + $diamond_rate1;
			$gstamt1 = $net_amt * $data['gst_per'] / 100;
			$gstamt2 = $this->float_rate_check(number_format($gstamt1, 3, '.', ''));
			$tot = $net_amt + $gstamt2;
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
	function float_rate_check($val)
	{
		$a = explode('.', $val);
		if (isset($a[1])) {
			if ($a[1] > 100) {
				return  $c = $a[0] + 1;
			} else {
				return  $c = $a[0];
			}
		} else {
			return  $c = $a[0];
		}
	}


	public function blog()
	{
		$this->load->helper('text'); // load word_limiter helper
		$data['blogs'] = array_reverse($this->My_model->select_where("web_blog", ['status' => 'active']));
		$this->ov("blog", $data);
	}

	public function view_blog($blog_id)
	{
		$this->load->helper('text'); // Load helper for character_limiter

		$data['blog_det'] = $this->My_model->select_where("web_blog", ['web_blog_id' => $blog_id]);
		$data['blog_comments'] = $this->My_model->select_where("blog_comments", ['blog_id' => $blog_id, 'status' => 'active']);
		$data['other_blogs'] = array_reverse($this->My_model->select_where("web_blog", ['status' => 'active', 'web_blog_id!=' => $blog_id]));

		$this->ov("view_blog", $data);
	}


	public function branch()
	{
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$data['web_branch_details'] = $this->My_model->select_where("web_branch_details", ['status' => 'active']);
		$this->ov("branch", $data);
	}
	public function event()
	{
		$data['event_det'] = $this->My_model->select_where("event_tbl", ['status' => 'active']);
		$this->ov("event", $data);
	}
	public function history()
	{
		$data['web_history_details'] = $this->My_model->select_where("web_history_details", ['status' => 'active']);
		$this->ov("history", $data);
	}
	public function customer_review()
	{
		$data['web_testimonial'] = $this->My_model->select_where("web_testimonial", ['status' => 'active']);

		$this->ov("customer_review", $data);
	}
	public function custome_jewellery()
	{
		if (isset($_SESSION['user_id'])) {
			$data['user_det'] = $this->My_model->select_where("customers", ['customers_id' => $_SESSION['user_id']])[0];
		} else {
			$data['user_det'] = array();
		}
		$data['web_contact_details'] = $this->My_model->select("web_contact_details");
		$data['blogs'] = array_reverse($this->My_model->select_where("web_blog", ['status' => 'active']));

		$this->ov("custome_jewellery", $data);
	}

	public function custom_jwellery_save()
	{
		if (isset($_POST)) {
			$ext = explode(".", $_FILES['image']['name'])[count(explode(".", $_FILES['image']['name'])) - 1];
			if (strtolower($ext) != "php" && strtolower($ext) != "xml" && strtolower($ext) != "txt" && strtolower($ext) != "") {
				$img_name = "custom_jwellery-" . time() . "-" . rand(00000, 99999) . "." . $ext;
				$path = "uploads/";
				move_uploaded_file($_FILES['image']['tmp_name'], $path . $img_name);
				$_POST['image'] = $img_name;
				$data = array(
					'gold_color'      => strip_tags($_POST['gold_color']),
					'budget'          => strip_tags($_POST['budget']),
					'name'            => strip_tags($_POST['name']),
					'phone_number'    => strip_tags($_POST['phone_number']),
					'diamond_clarity' => strip_tags($_POST['diamond_clarity']),
					'gold_purity'     => strip_tags($_POST['gold_purity']),
					'description'     => strip_tags($_POST['description']),
					'address'         => strip_tags($_POST['address']),
					'image'           => $_POST['image'],
					'email'           => strip_tags($_POST['email']),
					'status'          => 'pending',
					'date_time'       => time(),
				);
				$bill = $this->My_model->insert("custom_jwellery", $data);
				$this->session->set_flashdata('Success', 'Successfully Ordered Custom Jewellery');
				redirect(base_url() . "user/", 'refresh');
			} else {
				redirect(base_url() . "user/", 'refresh');
			}
		} else {
			$this->session->set_flashdata('Danger1', 'Error Detected');
			redirect('user/custome_jewellery', 'refresh');
		}
	}
	public function contact()
	{
		$data['web_branch_details'] = $this->My_model->select_where("web_branch_details", ['status' => 'active']);
		$data['contact'] = $this->My_model->select("web_contact_details");
		if (isset($_SESSION['user_id'])) {
			$data['user_det'] = $this->My_model->select_where("customers", ['customers_id' => $_SESSION['user_id']])[0];
		}
		$this->ov("contact", $data);
	}

	public function save_contact_form()
	{
		$data = $this->My_model->select("web_contact_details");
		if (isset($_SESSION['user_id']))
			$_POST['user_id'] = $_SESSION['user_id'];
		$_SESSION['visit'] = "visited user";
		$_POST['status'] = 'active';
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date("Y-m-d");
		$_POST['enquiry'] = strip_tags($_POST['enquiry']);
		$this->My_model->insert("contact_form", $_POST);
		// $a_hed = "Contact From Website ";
		// $a_msg = "New Contact Inquiry For You<br> From : " . $_POST['name'] . " <br> Email : " . $_POST['email'] . " <br> Mobile : " . $_POST['mobile'] . "<br>Message<br>" . $_POST['enquiry'];
		// $this->send_mail($data[0]['email1'], $a_hed, $a_msg);
		// $c_hed = "Shingavi Jewellers";
		// $c_msg = "<h1>Thanks For Contacting Us..</h1> We Will <b>Contact</b> You As Soon As Posible..";
		// $this->send_mail($_POST['email'], $c_hed, $c_msg);
		$this->session->set_flashdata('Success', 'Thanks For Contact Us..');
		redirect(base_url() . '', 'refresh');
	}
	public function faq()
	{
		// $this->head();
		// $this->nav();
		$data["faq_info"] = $this->My_model->select_where("faq_tbl", ["status" => "active"]);
		// $data["social_media"] = $this->My_model->select_where("social_media_tbl", ["status" => "active"])[0];
		$this->ov("faq", $data);
		// $this->footer();
	}








	public function wishlist()
	{
		$this->ov("wishlist");
	}
	// cart-page
	public function cart_page()
	{
		$this->ov("cart_page");
	}
	// checkout
	public function checkout()
	{
		$this->ov("checkout");
	}
	// collection
	public function collection()
	{
		$this->ov("collection");
	}
		public function policies($id)
	{
		$data['pages_name'] = $this->My_model->select_where("pages_name", ['status' => 'active', 'pages_name_id' => $id]);
		$data['pages_details'] = $this->My_model->select_where("pages_details", ['status' => 'active', 'pages_name_id' => $id]);
		$this->ov("policies", $data);
	}
}

