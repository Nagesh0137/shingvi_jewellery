<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Sameer extends CI_Controller
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
		$this->load->view("user/nav",$data);
	}
	public function topnav()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$data['system_not'] = $this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("user/nav", $data);
	}
	public function footer()
	{
		// $data["social_media"] = $this->My_model->select_where("social_media_tbl", ['status' => 'active'])[0];
		// $data['category'] = $this->db->query("SELECT * FROM category_tbl WHERE status = 'active'")->result_array();
		// $data['company_det'] = $this->My_model->select_where("company_details_tbl", ['company_det_id' => '1'])[0];
		$this->load->view("user/footer");
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

	public function product()
	{


		$page_no = 1;
		$search = "";
		extract($_GET);
		if (!isset($_GET['q'])) {
			$show = " ";
		} else {
			$show = " AND (
                (numbers_tbl_id LIKE '%" . $_GET['q'] . "%') 
            )";
		}
		$total_rows = $this->db->query("SELECT count(numbers_tbl_id) as ttl_rows FROM numbers_tbl WHERE status= 'active' AND product_status='Available' " . $show)->result_array()[0]['ttl_rows'];

		$per_page = 20;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;

		$data['product'] = $this->db->query("SELECT * FROM numbers_tbl WHERE status= 'active' AND product_status='Available' " . $show . " ORDER BY numbers_tbl_id DESC limit " . $data['start'] . "," . $per_page)->result_array();
		// $this->ov("employee_list", $data);

		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		// $data['product'] = $this->db->query("SELECT * FROM numbers_tbl ORDER by numbers_tbl_id DESC LIMIT 12")->result_array();
		$data['category'] = $this->My_model->select("category_tbl", ['status' => 'active']);
		$data['filter'] = $this->My_model->select("filter_tbl", ['status' => 'active']);
		$this->ov("product", $data);
	}
	public function product_filter()
	{
		// print_r($_GET);
		// exit;
		$page_no = isset($_GET['page_no']) ? (int) $_GET['page_no'] : 1;

		// Basic search functionality
		$search = '';
		if (isset($_GET['search']) && $_GET['search'] != '') {
			$search_term = $this->db->escape_like_str($_GET['search']);
			$search = " AND (mobile_number LIKE '%" . $search_term . "%' OR port_region LIKE '%" . $search_term . "%' OR price LIKE '%" . $search_term . "%')";
		}

		// Advanced digit search functionality
		$digit_search = '';

		// Global Search
		if (isset($_GET['search_type']) && $_GET['search_type'] == 'global' && isset($_GET['global_digits']) && $_GET['global_digits'] != '') {
			$global_digits = $this->db->escape_str($_GET['global_digits']);
			$digit_search = " AND mobile_number LIKE '%" . $global_digits . "%'";
		}

		// Premium Search
		if (isset($_GET['search_type']) && $_GET['search_type'] == 'premium' && isset($_GET['premium_digits']) && $_GET['premium_digits'] != '') {
			$premium_digits = $this->db->escape_str($_GET['premium_digits']);
			$premium_type = isset($_GET['premium_type']) ? $_GET['premium_type'] : 'anywhere';

			switch ($premium_type) {
				case 'start_with':
					$digit_search = " AND mobile_number LIKE '" . $premium_digits . "%'";
					break;
				case 'end_with':
					$digit_search = " AND mobile_number LIKE '%" . $premium_digits . "'";
					break;
				case 'anywhere':
				default:
					$digit_search = " AND mobile_number LIKE '%" . $premium_digits . "%'";
					break;
			}
		}

		// Numerology Search
		if (isset($_GET['search_type']) && $_GET['search_type'] == 'numerology') {
			$numerology_conditions = [];

			// Start with
			if (isset($_GET['num_start_with']) && $_GET['num_start_with'] != '') {
				$start_with = $this->db->escape_str($_GET['num_start_with']);
				$numerology_conditions[] = "mobile_number LIKE '" . $start_with . "%'";
			}

			// Anywhere
			if (isset($_GET['num_anywhere']) && $_GET['num_anywhere'] != '') {
				$anywhere = $this->db->escape_str($_GET['num_anywhere']);
				$numerology_conditions[] = "mobile_number LIKE '%" . $anywhere . "%'";
			}

			// End with
			if (isset($_GET['num_end_with']) && $_GET['num_end_with'] != '') {
				$end_with = $this->db->escape_str($_GET['num_end_with']);
				$numerology_conditions[] = "mobile_number LIKE '%" . $end_with . "'";
			}

			// Must contain (comma separated)
			if (isset($_GET['num_must_contain']) && $_GET['num_must_contain'] != '') {
				$must_contain = explode(',', $_GET['num_must_contain']);
				foreach ($must_contain as $contain) {
					$contain = trim($this->db->escape_str($contain));
					if ($contain != '') {
						$numerology_conditions[] = "mobile_number LIKE '%" . $contain . "%'";
					}
				}
			}

			// Not contain (comma separated)
			if (isset($_GET['num_not_contain']) && $_GET['num_not_contain'] != '') {
				$not_contain = explode(',', $_GET['num_not_contain']);
				foreach ($not_contain as $not) {
					$not = trim($this->db->escape_str($not));
					if ($not != '') {
						$numerology_conditions[] = "mobile_number NOT LIKE '%" . $not . "%'";
					}
				}
			}

			// Total length - use existing 'total' column
			if (isset($_GET['num_total']) && $_GET['num_total'] != '') {
				$total = (int) $_GET['num_total'];
				$numerology_conditions[] = "total = " . $total;
			}

			// Sum of digits - use existing 'sum' column
			if (isset($_GET['num_sum']) && $_GET['num_sum'] != '') {
				$sum = (int) $_GET['num_sum'];
				$numerology_conditions[] = "sum = " . $sum;
			}

			if (!empty($numerology_conditions)) {
				$digit_search = " AND (" . implode(' AND ', $numerology_conditions) . ")";
			}
		}

		// Exact Digit Placement
		if (isset($_GET['search_type']) && $_GET['search_type'] == 'exact_digit') {
			$exact_conditions = [];
			for ($i = 1; $i <= 10; $i++) {
				if (isset($_GET['exact_digit_' . $i]) && $_GET['exact_digit_' . $i] != '') {
					$digit = $this->db->escape_str($_GET['exact_digit_' . $i]);
					$exact_conditions[] = "SUBSTRING(mobile_number, " . $i . ", 1) = '" . $digit . "'";
				}
			}
			if (!empty($exact_conditions)) {
				$digit_search = " AND (" . implode(' AND ', $exact_conditions) . ")";
			}
		}

		// Most Contains
		if (isset($_GET['search_type']) && $_GET['search_type'] == 'most_contains' && isset($_GET['contains_digits']) && $_GET['contains_digits'] != '') {
			$contains_digits = $this->db->escape_str($_GET['contains_digits']);
			if (strlen($contains_digits) == 1) {
				// Single digit - count occurrences
				$digit_search = " AND (LENGTH(mobile_number) - LENGTH(REPLACE(mobile_number, '" . $contains_digits . "', ''))) >= 1";
			} else if (strlen($contains_digits) == 2) {
				// Two digits - find numbers containing this pattern
				$digit_search = " AND mobile_number LIKE '%" . $contains_digits . "%'";
			}
		}

		// Price range filter
		$price_filter = '';
		if (isset($_GET['min_price']) && $_GET['min_price'] != '') {
			$min_price = (float) $_GET['min_price'];
			$price_filter .= " AND CAST(price AS DECIMAL(10,2)) >= " . $min_price;
		}
		if (isset($_GET['max_price']) && $_GET['max_price'] != '') {
			$max_price = (float) $_GET['max_price'];
			$price_filter .= " AND CAST(price AS DECIMAL(10,2)) <= " . $max_price;
		}

		// Family Pack filter
		$family_filter = '';
		if (isset($_GET['family_pack']) && $_GET['family_pack'] != '') {
			$family_pack = $this->db->escape_str($_GET['family_pack']);
			$family_filter .= " AND family_pack = '" . $family_pack . "'";
		}
		if (isset($_GET['family_count']) && $_GET['family_count'] != '') {
			$family_count = (int) $_GET['family_count'];
			$family_filter .= " AND family_count = " . $family_count;
		}

		// Category filter - handle array of category IDs
		$category_filter = '';
		if (isset($_GET['category']) && is_array($_GET['category']) && !empty($_GET['category'])) {
			$category_ids = array_map('intval', $_GET['category']); // Sanitize to integers
			$category_filter = " AND category_tbl_id IN (" . implode(',', $category_ids) . ")";
		}

		// Filter filter - handle array of filter IDs
		$filter_filter = '';
		if (isset($_GET['filter']) && is_array($_GET['filter']) && !empty($_GET['filter'])) {
			$filter_ids = array_map('intval', $_GET['filter']); // Sanitize to integers
			$filter_filter = " AND filter_tbl_id IN (" . implode(',', $filter_ids) . ")";
		}

		// Status filter - only show available products
		$status_filter = " AND product_status = 'Available'";

		// Date range filter
		$date_filter = '';
		if (isset($_GET['form']) && isset($_GET['to']) && $_GET['form'] != '' && $_GET['to'] != '') {
			$form = $this->db->escape_str($_GET['form']);
			$to = $this->db->escape_str($_GET['to']);
			$date_filter = " AND (DATE(entry_date) BETWEEN '$form' AND '$to')";
		}

		// Sort functionality
		$sort_order = 'ORDER BY numbers_tbl_id DESC'; // Default sort
		if (isset($_GET['sort']) && $_GET['sort'] != '') {
			switch ($_GET['sort']) {
				case 'price-asc':
					$sort_order = 'ORDER BY CAST(price AS DECIMAL(10,2)) ASC';
					break;
				case 'price-desc':
					$sort_order = 'ORDER BY CAST(price AS DECIMAL(10,2)) DESC';
					break;
				case 'newest':
					$sort_order = 'ORDER BY numbers_tbl_id DESC';
					break;
				case 'oldest':
					$sort_order = 'ORDER BY numbers_tbl_id ASC';
					break;
				case 'most-relevant':
					if ($digit_search != '') {
						// Sort by relevance for digit searches
						$sort_order = 'ORDER BY mobile_number ASC';
					} else {
						$sort_order = 'ORDER BY numbers_tbl_id DESC';
					}
					break;
				default:
					$sort_order = 'ORDER BY numbers_tbl_id DESC';
					break;
			}
		}

		// Build the complete WHERE clause
		$where_clause = "WHERE status = 'active'" . $search . $digit_search . $price_filter . $family_filter . $category_filter . $filter_filter . $status_filter . $date_filter;

		// Count total rows for pagination
		$total_rows = $this->db->query("SELECT count(numbers_tbl_id) as ttl_rows FROM numbers_tbl " . $where_clause)->result_array()[0]['ttl_rows'];
		$per_page = 40;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = ceil($total_rows / $per_page);
		$data['page_no'] = $page_no;
		$data['total_rows'] = $total_rows;

		// Get paginated data
		$data['product'] = $this->db->query("SELECT * FROM numbers_tbl " . $where_clause . " " . $sort_order . " LIMIT " . $data['start'] . "," . $per_page)->result_array();

		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$data['category'] = $this->My_model->select("category_tbl", ['status' => 'active']);
		$data['filter'] = $this->My_model->select("filter_tbl", ['status' => 'active']);

		// Pass current filters to view for maintaining state
		$data['current_filters'] = $_GET;

		$this->ov("product", $data);
	}
	// Test method to return filtered products as JSON
	public function product_filter_json()
	{
		$page_no = isset($_GET['page_no']) ? (int) $_GET['page_no'] : 1;

		// Search functionality
		$search = '';
		if (isset($_GET['search']) && $_GET['search'] != '') {
			$search_term = $_GET['search'];
			$search = " AND (mobile_number LIKE '%" . $search_term . "%' OR port_region LIKE '%" . $search_term . "%' OR price LIKE '%" . $search_term . "%')";
		}

		// Category filter - handle array of category IDs
		$category_filter = '';
		if (isset($_GET['category']) && is_array($_GET['category']) && !empty($_GET['category'])) {
			$category_ids = array_map('intval', $_GET['category']); // Sanitize to integers
			$category_filter = " AND category_tbl_id IN (" . implode(',', $category_ids) . ")";
		}

		// Filter filter - handle array of filter IDs
		$filter_filter = '';
		if (isset($_GET['filter']) && is_array($_GET['filter']) && !empty($_GET['filter'])) {
			$filter_ids = array_map('intval', $_GET['filter']); // Sanitize to integers
			$filter_filter = " AND filter_tbl_id IN (" . implode(',', $filter_ids) . ")";
		}

		// Status filter - only show available products
		$status_filter = " AND product_status = 'Available'";

		// Date range filter
		$date_filter = '';
		if (isset($_GET['form']) && isset($_GET['to']) && $_GET['form'] != '' && $_GET['to'] != '') {
			$form = $_GET['form'];
			$to = $_GET['to'];
			$date_filter = " AND (DATE(entry_date) BETWEEN '$form' AND '$to')";
		}

		// Sort functionality
		$sort_order = 'ORDER BY numbers_tbl_id DESC'; // Default sort
		if (isset($_GET['sort']) && $_GET['sort'] != '') {
			switch ($_GET['sort']) {
				case 'price-asc':
					$sort_order = 'ORDER BY CAST(price AS DECIMAL(10,2)) ASC';
					break;
				case 'price-desc':
					$sort_order = 'ORDER BY CAST(price AS DECIMAL(10,2)) DESC';
					break;
				case 'newest':
					$sort_order = 'ORDER BY numbers_tbl_id DESC';
					break;
				case 'oldest':
					$sort_order = 'ORDER BY numbers_tbl_id ASC';
					break;
				default:
					$sort_order = 'ORDER BY numbers_tbl_id DESC';
					break;
			}
		}

		// Build the complete WHERE clause
		$where_clause = "WHERE status = 'active'" . $search . $category_filter . $filter_filter . $status_filter . $date_filter;

		// Count total rows for pagination
		$total_rows = $this->db->query("SELECT count(numbers_tbl_id) as ttl_rows FROM numbers_tbl " . $where_clause)->result_array()[0]['ttl_rows'];
		$per_page = 20;
		$start = $per_page * $page_no - $per_page;
		$ttl_pages = ceil($total_rows / $per_page);

		// Get paginated data
		$products = $this->db->query("SELECT * FROM numbers_tbl " . $where_clause . " " . $sort_order . " LIMIT " . $start . "," . $per_page)->result_array();

		// Return JSON response
		$response = [
			'status' => 'success',
			'products' => $products,
			'pagination' => [
				'current_page' => $page_no,
				'total_pages' => $ttl_pages,
				'total_rows' => $total_rows,
				'per_page' => $per_page,
				'start' => $start
			],
			'filters_applied' => [
				'search' => isset($_GET['search']) ? $_GET['search'] : '',
				'category' => isset($_GET['category']) ? $_GET['category'] : [],
				'filter' => isset($_GET['filter']) ? $_GET['filter'] : [],
				'sort' => isset($_GET['sort']) ? $_GET['sort'] : 'newest',
				'date_range' => [
					'from' => isset($_GET['form']) ? $_GET['form'] : '',
					'to' => isset($_GET['to']) ? $_GET['to'] : ''
				]
			]
		];

		echo json_encode($response);
	}
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

	public function load_wishlist_items()
	{
		$this->load->view("user/wishlist_items");
	}
	public function products()
	{
		$this->ov("products");
	}

	public function product_details()
	{
		$this->head();
		$this->nav();
		$this->load->view("user/product_details");
		$this->footer();
	}

	// wishlist
	public function wishlist()
	{
		$this->head();
		$this->nav();
		$this->load->view("user/wishlist");
		$this->footer();
	}
// cart-page
	public function cart_page()
	{
		// Load necessary data for cart page
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		
		$this->head();
		$this->nav();
		$this->load->view("user/cart_page", $data);
		$this->footer();
	}


	

	// public function blog()
	// {
	// 	$data['blogs'] = array_reverse($this->My_model->select_where("web_blog", ['status' => 'active']));
	// 	$this->ov("blog", $data);
	// }
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
		$this->ov("branch",$data);
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
				redirect(base_url() . "sameer/", 'refresh');
			} else {
				redirect(base_url() . "sameer/", 'refresh');
			}
		} else {
			$this->session->set_flashdata('Danger1', 'Error Detected');
			redirect('sameer/custome_jewellery', 'refresh');
		}
	}

	public function checkout_save()
	{
	   
	    $user = $this->My_model->select_where("customers",['status'=>'active','mobile'=>$_POST['phone_number']]);
	    if(isset($user[0]))
	    {
	        $_SESSION['user_id'] = $user[0]['customers_id']; 
	    }else{
	        $n = explode(' ',$_POST['shipping_name']);
	        $n = array_filter($n);
	        echo "User Not Found";
	        $newUser['firstname'] = $n[0];
	        $newUser['mobile'] = $_POST['phone_number'];
	        $newUser['lastname'] = $n[count($n)-1];
	        $newUser['email'] = $_POST['email'];
	        $newUser['reg_time'] = time();
	        $newUser['status'] = 'active';
	        $newUserId = $this->My_model->insert("customers",$newUser);
	        $_SESSION['user_id'] = $newUserId; 
	        $user = $this->My_model->select_where("customers",['status'=>'active','customers_id'=>$_SESSION['user_id']]);
	    
	    }
        if (!isset($_POST['address_id']) && false) {
			$this->session->set_flashdata('Danger', 'Address Not Selected..');
			echo "Currently Unavailable";
		} else {
		    $data22 = [];
		foreach($_SESSION['cart'] as $key => $row)
        {
            $i++;
            $p = $this->db->query("SELECT * FROM category,product_gold WHERE product_gold.cat_id = category.category_id AND product_gold.prod_gold_id='".$key."' AND product_gold.status='active' ")->result_array()[0];
            $data22[$i] = $p;
        }
       
// 			$data22 = $this->My_model->select_where('user_cart', array('user_id' => $_SESSION['user_id'], 'status' => 'pending'));
			if (count($data22) > 0) {
			    
		
		
        $ucart =  $data22;
			if (count($data22) > 0) {
				$totalamount = 0;
				foreach ($data22 as $value) {
					$prod = $this->db->query("SELECT * from product_gold where prod_gold_id='" . $value['prod_gold_id'] . "'")->result_array()[0];
					$price = 0;
					
					if ($prod['cat_id'] == 5) {
						$price = $this->goldprice($prod['prod_gold_id']);
					} elseif ($prod['cat_id'] == 6) {
						$price = $this->silverprice($prod['prod_gold_id']);
					} elseif ($prod['cat_id'] == 8 && $prod['entry_type'] == 'dgold') {
						$price = $this->golddiamondprice($prod['prod_gold_id']);
					} elseif ($prod['cat_id'] == 8 && $prod['entry_type'] == 'dsilver') {
						$price = $this->silverdiamondprice($prod['prod_gold_id']);
					}
				// 	$tot = $price * $_SESSION['cart'][$value['prod_gold_id']];
				// 	$totalamount += $tot;
					
					$ttlProductPrice = 0 ;
                                 foreach($_SESSION['cart2'][$prod['prod_gold_id']] as $key => $row2){
                                     $tot = $price * $row2;
                                     $totalamount += $tot;
                                     $ttlProductPrice += $tot;
                                 }
				}
				$ttl_amt_prod = $totalamount;
				$order_charges = $this->My_model->select_where('order_charges', ['status' => 'active']);
				foreach ($order_charges as $ovalue) {
					if ((float)$ovalue['percent'] != 0) {
						$ovalue['rate'] = ($ttl_amt_prod * (float)$ovalue['percent']) / 100;
					}
					$totalamount += $ovalue['rate'];
				}
			    // exit;
				if (isset($_POST)) {
					$address = $this->My_model->select_where("user_address", ['user_address_id' => $_POST['address_id']])[0];

					$data = array(
						'name' => $_POST['shipping_name'],
						'email' => $_POST['email'],
						'phone_number' => $_POST['phone_number'],
						'addr_street' => $_POST['addr_street'],
						'addr_area' => $_POST['addr_area'],
						'addr_village_city' => $_POST['addr_village_city'],
						'addr_taluk' => $_POST['addr_taluk'],
						'addr_dist' => $_POST['addr_dist'],
						'addr_state' => $_POST['addr_state'],
						'addr_pin_code' => $_POST['addr_pin_code'],
						'alternate_mobile_no' => '',
						'status' => 'pending',
						'date_time' => time(),
						'user_id' => $_SESSION['user_id'],
						'pay_amount' => $totalamount,
						'pay_status' => 'pending',
						'pay_transaction_id' => '',
						'pay_date_time' => '',
						'order_id' => '',
						'payment_mode' => $_POST['payment_mode'],
						'paid_amount' => '0',
						'customer_gst_no' => $_POST['customer_gst_no']
					);
                   
					if ($_POST['customer_gst_no'] != "") {
						if (strlen($_POST['customer_gst_no']) == 15)
							$this->My_model->update("customers", ['customers_id' => $_SESSION['user_id']], ['gst_no' => $_POST['customer_gst_no']]);
						else {
							$this->session->set_flashdata('Danger', 'Invalid GST Number..');
								echo "<script>alert('Invalid GST Number');</script>";
							echo "<script>window.history.back();</script>";
							exit();
						}
					}

					if ($totalamount > 200000) {
						if (strlen($_POST['customer_pan_no']) == 10) {
							$data['customer_pan_no'] = $_POST['customer_pan_no'];
							$this->My_model->update("customers", ['customers_id' => $_SESSION['user_id']], ['pan_no' => $_POST['customer_pan_no']]);
						} else {
							$this->session->set_flashdata('Danger', 'Invalid PAN Number..');
							echo "<script>window.history.back();</script>";
							echo "<script>alert('BACK PAGE');</script>";
							exit();
						}
					} else {
						$data['customer_pan_no'] = "";
					}
				
                    
					if (isset($_POST['is_gift'])) {
						$data['is_gift'] = 'Yes';
					} else {
						$data['is_gift'] = '';
					}
					$bill = $this->My_model->insert("user_billing_details", $data);
					if ($bill != "") {
						$order_charges = $this->My_model->select_where('order_charges', array('status' => 'active'));
						foreach ($order_charges as $order_charges_apply) {
							if ((float)$order_charges_apply['percent'] != 0) {
								$order_charges_apply['rate'] = ($ttl_amt_prod * (float)$order_charges_apply['percent']) / 100;
							}
							$char =
								array(
									'char_name' => $order_charges_apply['charges_label'],
									'char_amt' => $order_charges_apply['rate'],
									'char_id' => $order_charges_apply['charges_id'],
									'billing_id' => $bill,
								);
							$this->My_model->insert("user_cart_other_char", $char);
						}
                        
						$order_dispatch_status = "ONTIME";
						$prods_list = [];   
						// $ucart = $this->My_model->select_where('user_cart', array('user_id' => $_SESSION['user_id'], 'status' => 'pending'));
						
						foreach ($ucart as $ucartvalue) {
							$prod1 = $this->db->query("SELECT * from product_gold where prod_gold_id='" . $ucartvalue['prod_gold_id'] . "'")->result_array()[0];
						
						
							
							$gold_rate = $this->db->query("SELECT * FROM rate_gold WHERE status='active' ORDER BY rate_gold_id DESC LIMIT 1")->result_array()[0];
							$silver_rate = $this->db->query("SELECT * FROM rate_silver WHERE status='active' ORDER BY rate_silver_id DESC LIMIT 1")->result_array()[0];
							$diamond_rate = $this->db->query("SELECT * FROM rate_diamond WHERE status='active' ORDER BY rate_diamond_id DESC LIMIT 1")->result_array()[0];
                            foreach($_SESSION['cart2'][$ucartvalue['prod_gold_id']] as $key => $prow){
                                
                            if ((int)$prod1['product_qty'] >= (int)$prow) {
								$n_qty = (int)$prod1['product_qty'] - (int)$prow;
								$this->My_model->update("product_gold", ['prod_gold_id' => $ucartvalue['prod_gold_id']], ["product_qty" => $n_qty]);
								$qty_changed = (int)$prow;
								$this->My_model->update("user_cart", ['user_cart_id' => $ucartvalue['user_cart_id']], ['qty_changed' => $qty_changed]);
							} else {
								$this->My_model->update("product_gold", ['prod_gold_id' => $ucartvalue['prod_gold_id']], ["product_qty" => '0']);
								$qty_changed = (int)$prod1['product_qty'];
								$order_dispatch_status = "DELAYED";
								$this->My_model->update("user_cart", ['user_cart_id' => $ucartvalue['user_cart_id']], ['qty_changed' => $qty_changed]);
							}
							
							
                                	$price1 = 0;
							if ($prod1['cat_id'] == 5) {
								$price1 = $this->goldprice($prod1['prod_gold_id']);
								$ptype = "gold";
							} elseif ($prod1['cat_id'] == 6) {
								$price1 = $this->silverprice($prod1['prod_gold_id']);
								$ptype = "silver";
							} elseif ($prod1['cat_id'] == 8 && $prod1['entry_type'] == 'dgold') {
								$price1 = $this->golddiamondprice($prod1['prod_gold_id']);
								$ptype = "diamondgold";
							} elseif ($prod1['cat_id'] == 8 && $prod1['entry_type'] == 'dsilver') {
								$price1 = $this->silverdiamondprice($prod1['prod_gold_id']);
								$ptype = "diamondsilver";
							}
                                $tot1 = $price1 * $prow;
                                // print_r($prow);
							$updusercart = array(
								'prod_type' => $ptype,
								'prod_id' =>  $ucartvalue['prod_gold_id'],
								'prod_qty' => $prow,
								'prod_size' => $key,
								'user_id' => $_SESSION['user_id'],
								'cart_date' => date('Y-m-d'),
								'cart_time' => time(),
								'product_name' => $prod1['product_name'],
								'product_details' => $prod1['product_details'],
								'product_image' => $prod1['product_image'],
								'net_weight' => $prod1['net_weight'],
								'order_gold_price' => $gold_rate['rateamt'],
								'order_silver_price' => $silver_rate['silver_amt'],
								'order_diamond_price' => $diamond_rate['diamond_amt'],
								'prod_rate' => $price1,
								'product_name' => $prod1['product_name'],
								'product_details' => $prod1['product_details'],
								'product_image' => $prod1['product_image'],
								'order_qnt' => $_SESSION['cart'][$ucartvalue['prod_gold_id']],
								'total_price' => $tot1,
								'status' => 'confirm',
								'billing_id' => $bill,
								'qty_changed' => $qty_changed,
							);
                                
							$prods_list[] = $prod1['product_name'];
							$upd = $this->My_model->insert("user_cart",$updusercart);
                            }
						}
						
						$this->My_model->update("user_billing_details", ['user_billing_details_id' => $bill], ['order_dispatch_status' => $order_dispatch_status]);
						
						$user_det_sms = $this->My_model->select_where("customers",['customers_id'=>$_SESSION['user_id']])[0];
						$product_name_sms = implode(", ",$prods_list);
						$delivery_date_sms = date('d-M-Y', strtotime('+3 days'));
                        unset($_SESSION['cart']);
                        unset($_SESSION['cart2']);
						 $msg = "Placed: Order for $product_name_sms is placed & will be delivered by $delivery_date_sms. Manage: @www.shingavijewellers.com .";
						send_massage($user_det_sms['mobile'], $msg, '1207162825088100085');
						
						if ($_POST['payment_mode'] == 'online') {
							$data['bill_array'] = array(
								'tid' => time(),
								'merchant_id' => "813685",
								'order_id' => $bill,
								'amount' => $data['pay_amount'],
								'currency' => "INR",
								'redirect_url' => base_url() . "index/response",
								'cancel_url' => base_url() . "index/response",
								'language' => "EN",
								'billing_name' => $data['name'],
								'billing_address' => $data['addr_street'],
								'billing_city' => $data['addr_dist'],
								'billing_state' => $data['addr_state'],
								'billing_country' => 'India',
								'billing_zip' => $data['addr_pin_code'],
								'billing_tel' => $data['phone_number'],
								'billing_email' => $data['email'],
								'merchant_param1' => "additional Info.",
								'merchant_param2' => "additional Info.",
								'merchant_param3' => "additional Info.",
								'merchant_param4' => "additional Info.",
								'merchant_param5' => "additional Info.",
								'emi_plan_id' => "",
								'emi_tenure_id' => "",
								'card_type' => "",
								'card_name' => "",
								'data_accept' => "",
								'card_number' => "",
								'expiry_month' => "",
								'expiry_year' => "",
								'cvv_number' => "",
								'issuing_bank' => "",
								'mobile_number' => "",
								'mm_id' => "",
								'otp' => "",
								'promo_code' => "",
								'user_billing_details_id' => $bill
							);
							$_SESSION['bill_id'] = $bill;
									$response1 = createCashfreeOrder('CUST_'.$bill, $user[0]['firstname'].' '.$user[0]['lastname'], $user[0]['email'], $user[0]['mobile'],number_format((float)$totalamount, 2, '.', ''), base_url());
		                            $data['response'] = json_decode($response1, true);
							        $orderId = $data['response']['order_id'];
							        $this->My_model->update("user_billing_details", ['user_billing_details_id' => $bill], ['orderId' => $orderId]);
    						        $response = getCashfreeOrderDetails($orderId);
					        		$order_data['response'] = json_decode($response, true);
					        		$order_data['bill_id'] = $bill;
					        		$this->createOrder($bill);
					        		redirect('user/createOrder/'.$bill, 'refresh');
                                    // $this->load->view("user/cashfree",$order_data);
							
				// 			$this->load->view('cca/ccavRequestHandler', $data);
						} else {
							$this->session->set_flashdata('Success', 'Thanks For Order.. Your Order Is Successfully Received To Shingvi Jewellers.');
							redirect(base_url() . 'user/user_my_order', 'refresh');
						}
					}
				} else {
					$this->session->set_flashdata('Danger', 'Recheck Your Order Details');
				// 	redirect('user/cart', 'refresh');
				}
			} 
	
	
			} else {
				$this->session->set_flashdata('Danger', 'No Product Selected');
				redirect('user/cart', 'refresh');
			}
		}
	}
	
}
