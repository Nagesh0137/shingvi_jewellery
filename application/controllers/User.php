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

	protected function setToastMessage($message, $type)
	{
		// Map 'danger' to 'error' to match the toast display logic in footer.php
		if ($type === 'danger') {
			$type = 'error';
		}
		$this->session->set_flashdata($type, $message);
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
		$data['products'] = $this->My_model->select_where("product_gold", ['status' => 'active']);
		$data['special_days'] = $this->My_model->select_where("special_days", ['status' => 'active']);
		$this->load->view("user/nav", $data);
	}
	public function search_products()
	{
		$query = $_POST['search_query'] ?? '';
		$data['result'] = $this->db->query("SELECT * FROM product_gold,product_group WHERE product_gold.group_id = product_group.group_id AND product_gold.status='active' AND  product_group.status='active' AND (product_gold.product_name LIKE '%$query%' OR product_group.product_group_name LIKE '%$query%')")->result_array();
		echo json_encode(['result' => $data['result']]);
	}

	public function topnav()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$data['system_not'] = $this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("user/nav", $data);
	}
	public function footer()
	{
		$data['social_media'] = $this->My_model->select_where("social_media_tbl", ['status' => 'active'])[0];
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
	private function calculatePrice($product)
	{
		if ($product['cat_id'] == 5) {
			return $this->goldprice($product['prod_gold_id']);
		} elseif ($product['cat_id'] == 6) {
			return $this->silverprice($product['prod_gold_id']);
		} elseif ($product['cat_id'] == 8 && $product['entry_type'] == 'dgold') {
			return $this->golddiamondprice($product['prod_gold_id']);
		} elseif ($product['cat_id'] == 8 && $product['entry_type'] == 'dsilver') {
			return $this->silverdiamondprice($product['prod_gold_id']);
		}
		return 0;
	}

	private function calculateDiscountPrice($product)
	{
		if ($product['cat_id'] == 5) {
			return $this->discountgoldprice($product['prod_gold_id']);
		} elseif ($product['cat_id'] == 6) {
			return $this->discountsilverprice($product['prod_gold_id']);
		}
		return 0;
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
		$data['admin'] = $this;


		// Fetch basic data
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		// $all_products = $this->db->query("SELECT * FROM product_gold WHERE status='active'")->result_array();
		// $all_filters = $this->db->query("SELECT * FROM product_filter WHERE status='active'")->result_array();
		// $all_offers = $this->db->query("SELECT * FROM gold_product_offer WHERE status='active' 
		//                             UNION 
		//                             SELECT * FROM silver_product_offer WHERE status='active'")->result_array();

		// Web content
		$data['special_days_product'] = $this->db->query("SELECT * FROM special_days WHERE status='active' ORDER BY special_days_id DESC")->result_array();
		$data['slider'] = $this->db->query("SELECT * FROM web_slider WHERE status='active' ORDER BY web_slider_id ASC LIMIT 2")->result_array();
		$data['web_banner_half'] = $this->My_model->select_where("web_banner", ['banner_size' => 'half', 'status' => 'active']);
		$data['web_banner_full'] = $this->My_model->select_where("web_banner", ['banner_size' => 'full', 'status' => 'active']);
		// $data['web_banner_gold'] = $this->My_model->select_where("web_banner", ['banner_size' => 'Gold', 'status' => 'active']);
		// $data['web_banner'] = $this->My_model->select_where("web_banner", ['status' => 'active', 'banner_type' => 'exclusive_collection']);
		$data['web_banner_new'] = $this->My_model->select_where("web_banner", ['status' => 'active', 'banner_type' => "new_design"]);
		$data['web_banner_silver'] = $this->My_model->select_where("web_banner", ['banner_size' => 'Silver', 'status' => 'active']);
		$data['web_testimonial'] = $this->My_model->select_where("web_testimonial", ['status' => 'active']);
		// $data['web_blog'] = $this->My_model->select_where("web_blog", ['status' => 'active']);
		// $data['web_banner_for_exclusive_design'] = $this->db->query("SELECT * FROM web_banner WHERE status='active' AND banner_type='exclusive_collection' ORDER BY web_banner_id DESC LIMIT 2")->result_array();

		// Categorize products
		// $data['new_products'] = array_filter($all_products, fn($p) => $p['label'] === 'New');
		// // $data['trending_products'] = array_filter($all_products, fn($p) => $p['label'] === 'Trending');
		// $data['silver_special'] = array_filter($all_products, fn($p) => $p['label'] === 'Special' && $p['cat_id'] == 6);
		// $data['gold_special'] = array_filter($all_products, fn($p) => $p['label'] === 'Special' && $p['cat_id'] == 5);
		// // $data['top_selling_products'] = array_filter($all_products, fn($p) => $p['label'] === 'Top Selling');
		$data['top_selling_products'] = $this->db->query("SELECT * FROM product_gold,category,product_group WHERE product_gold.group_id = product_group.product_group_id AND product_gold.cat_id = category.category_id AND product_gold.status='active' AND product_gold.label LIKE '%Top Selling%' ORDER BY product_gold.prod_gold_id DESC LIMIT 6")->result_array();
		// $data['trending_products'] = $this->db->query("SELECT * FROM product_gold,category,product_group WHERE product_gold.group_id = product_group.product_group_id AND product_gold.cat_id = category.category_id AND product_gold.status='active' AND product_gold.label LIKE '%Trending%' ORDER BY product_gold.prod_gold_id DESC LIMIT 6")->result_array();
		$trending_products = $this->db->query("SELECT prod_gold_id FROM product_gold WHERE status='active' AND label LIKE '%Trending%' ORDER BY prod_gold_id DESC LIMIT 3")->result_array();
		$data['trending_products'] = [];
		foreach ($trending_products as $key => $value) {
			$d = getProductDetails($value['prod_gold_id']);
			$data['trending_products'][$key] = $d[0];
		}
		$top_selling_products = $this->db->query("SELECT prod_gold_id FROM product_gold WHERE status='active' AND label LIKE '%Top Selling%' ORDER BY prod_gold_id DESC LIMIT 6")->result_array();
		$data['top_selling_products'] = [];
		foreach ($top_selling_products as $key => $value) {
			$d = getProductDetails($value['prod_gold_id']);
			$data['top_selling_products'][$key] = $d[0];
		}
		$new_products = $this->db->query("SELECT prod_gold_id FROM product_gold WHERE status='active' AND label LIKE '%New%' ORDER BY prod_gold_id DESC LIMIT 8")->result_array();
		$data['new_products'] = [];
		foreach ($new_products as $key => $value) {
			$d = getProductDetails($value['prod_gold_id']);
			$data['new_products'][$key] = $d[0];
		}
		$data['products_group'] = $this->db->query("SELECT * FROM product_group WHERE status='active' ORDER BY product_group_id DESC LIMIT 10")->result_array();
		$data['blogs'] = array_reverse($this->My_model->select_where("web_blog", ['status' => 'active']));

		// echo "<pre>";
		// print_r($data['trending_products']);
		// exit;

		// $data['all_product_details'] = array_merge($data['silver_special'], $data['gold_special']);
		// $data['new_products_user'] = array_slice($data['new_products'], 0, 8);

		// Function to process each product with filters, offers, cart, price
		$process_products = function (&$products, $filters, $offers) {
			foreach ($products as &$product) {
				$product_id = $product['prod_gold_id'];
				$product['ft'] = '';
				$product['ff'] = '';
				$product['cart'] = 'No';
				$product['offer_status'] = '';

				// Apply filters
				foreach ($filters as $filter) {
					if ($filter['prod'] == $product_id) {
						$product['ft'] .= "ftitle" . $filter['filter_title'] . " ";
						$product['ff'] .= "fname" . $filter['filter_name'] . " ";
					}
				}

				// Cart check
				if (isset($_SESSION['user_id'])) {
					$cart_item = $this->My_model->select_where('user_cart', [
						'user_id' => $_SESSION['user_id'],
						'prod_id' => $product_id,
						'status' => 'pending'
					]);
					if (!empty($cart_item)) {
						$product['cart'] = 'Yes';
					}
				}

				// Offer check with isset()
				foreach ($offers as $offer) {
					if (
						(isset($offer['prod_gold_id']) && $offer['prod_gold_id'] == $product_id) ||
						(isset($offer['prod_silver_id']) && $offer['prod_silver_id'] == $product_id)
					) {
						$product['offer_status'] = 'active';
						break;
					}
				}

				// Price calculation
				$product['price'] = $this->calculatePrice($product);
				$product['discount_price'] = $this->calculateDiscountPrice($product);
				$product['rating'] = isset($product['rating']) ? (int)$product['rating'] : 0;
			}
		};

		// Process all product sets
		// $process_products($data['silver_special'], $all_filters, $all_offers);
		// $process_products($data['gold_special'], $all_filters, $all_offers);
		// $process_products($data['new_products'], $all_filters, $all_offers);
		// $process_products($data['trending_products'], $all_filters, $all_offers);
		// $process_products($data['top_selling_products'], $all_filters, $all_offers);

		// Final view load
		$this->ov("index", $data);
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

	public function my_account()
	{
		if (isset($_SESSION['user_id'])) {
			$data['customer_details'] = $this->My_model->select_where("customers", ['status' => 'active', 'customers_id' => $_SESSION['user_id']]);
			// print_r($data['customer_details']);
			// exit;
			$this->ov("my_account", $data);
		} else {
			redirect(base_url() . "user/login");
		}
	}
	// public function profile()
	// {
	// 	if (isset($_SESSION['user_id'])) {
	// 		$data['customer_details'] = $this->My_model->select_where("customers", ['status' => 'active', 'customers_id' => $_SESSION['user_id']]);
	// 		$this->ov("my_account", $data);
	// 	} else {
	// 		// redirect(base_url() . "user/login");
	// 	}

	// 	// $data['state'] = $this->My_model->select_where("state", ['status' => 'active']);
	// 	// $data['det'] = $this->My_model->select_where("user_tbl", ['user_tbl_id' => $_SESSION['user_tbl_id']])[0];
	// 	$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
	// 	$this->ov('profile', $data);
	// }
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

	public function update_user_details()
	{
		// echo "<pre>";
		// print_r($_POST);
		// exit;
		$data = $this->My_model->update("customers", ['customers_id' => $_POST['customers_id']], $_POST);
		if ($data) {
			$this->setToastMessage('Profile Updated successfully...', 'success');
			redirect(base_url() . 'user/my_account', 'refresh');
		} else {
			$this->setToastMessage('Profile Not Updated...', 'danger');
			redirect(base_url() . 'user/my_account', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('user/login')); // or homepage
	}
	public function delete_account()
	{
		if (isset($_SESSION['user_id'])) {
			$user_id = $_SESSION['user_id'];

			// Optional: delete user profile image
			$user = $this->My_model->select_where('customers', ['customers_id' => $user_id]);
			if (!empty($user['user_profile_img']) && file_exists('uploads/' . $user['user_profile_img'])) {
				unlink('uploads/' . $user['user_profile_img']);
			}

			// Delete user from database
			$this->My_model->update('customers', ['customers_id' => $user_id], ['status' => 'deleted']);

			// Destroy session and redirect
			$this->session->sess_destroy();
			redirect(base_url('user/login')); // or homepage
		} else {
			redirect(base_url('user/login'));
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
		$data["faq_info"] = $this->My_model->select_where("faq_tbl", ["status" => "active"]);
		$data['about'] = $this->My_model->select_where("web_about_details", ['status' => 'active']);
		// $data['mission_vision'] = $this->My_model->select_where("mission_vision_tbl", ["status" => "active"]);
		$this->load->view("user/about", $data);
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
		// unset($_SESSION["user_id"]);
		// print_r($_SESSION);
		// exit;
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

		$page_no = isset($_GET['page_no']) ? intval($_GET['page_no']) : 1;
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


		$data['product_group'] = $this->My_model->select_where("product_group", ['status' => 'active']);

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

			// $row['total_discount_amt'] = 2000;
			if ($row['total_discount_amt'] > 0) {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = $row['total_discount_amt'];
				$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
			} else {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = 0;
				$row['discounted_price'] = 0;
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
			}
			$row['imgs'] = explode('||', $row['product_image']);

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

		// echo "<pre>";
		// print_r($filtered_products);
		// exit;

		$data['products'] = $filtered_products;

		$this->ov("products", $data);
	}
	// public function view_product_details($id){

	// }
	public function add_in_wishlist()
	{
		$prod_id = $_POST['prod_id'];
		echo json_encode($_POST);
		exit;
		if (isset($_SESSION['user_id'])) {
			$w = $this->My_model->select_where("user_wishlist", ['user_id' => $_SESSION['user_id'], 'prod_id' => $prod_id]);
			if (isset($w[0])) {
				$this->db->query("DELETE FROM user_wishlist WHERE user_id='" . $_SESSION['user_id'] . "' AND prod_id='" . $prod_id . "' ");
				$res['status'] = 'removed';
			} else {
				$wishlist['prod_id'] = $prod_id;
				$wishlist['user_id'] = $_SESSION['user_id'];
				$wishlist['entry_time'] = time();
				$d = $this->My_model->insert("user_wishlist", $wishlist);
				if ($d) {
					$res['status'] = 'added';
				} else {
					$res['status'] = 'removed';
				}
			}
			$wt = $this->My_model->select_where("user_wishlist", ['user_id' => $_SESSION['user_id']]);
			$cnt = count($wt);
			echo json_encode(['status' => 'logged_in', 'res' => $res, 'cnt' => $cnt]);
			return;
		}


		if (!isset($_SESSION['wishlist'][$prod_id])) {
			$res['status'] = 'added';
			$_SESSION['wishlist'][$prod_id] = 1;
		} else {
			$res['status'] = 'removed';
			unset($_SESSION['wishlist'][$prod_id]);
		}

		if (isset($_SESSION['wishlist'])) {
			$cnt = count($_SESSION['wishlist']);
		} else {
			$cnt = 0;
		}

		echo json_encode(['res' => $res, 'cnt' => $cnt, 'sess' => $_SESSION]);
	}

	public function addToCart()
	{
		// if (isset($_SESSION['user_id'])) {
		// 	$ucart = $this->My_model->select_where("user_cart", ['user_id' => $_SESSION['user_id'], 'prod_id' => $_POST['prod_id'], 'status' => 'active']);

		// 	if (isset($ucart[0])) {
		// 		$rmCart = $this->db->query("DELETE FROM user_cart WHERE user_id = '" . $_SESSION['user_id'] . "' AND prod_id='" . $_POST['prod_id'] . "' ");
		// 		echo json_encode(['status' => 'success', 'msg' => 'Removed From Cart']);
		// 	} else {
		// 		$cart['prod_id'] = $_POST['prod_id'];
		// 		$cart['user_id'] = $_SESSION['user_id'];
		// 		$cart['status'] = 'active';
		// 		$cart['entry_time'] = time();
		// 		$c = $this->My_model->insert("user_cart", $cart);

		// 		if ($c) {
		// 			echo json_encode(['status' => 'success', 'msg' => 'Added To Cart']);
		// 		} else {
		// 			echo json_encode(['status' => 'failed', 'msg' => 'Failed To Add in Cart..!']);
		// 		}
		// 	}

		// 	// 👉 Print user cart from database
		// 	$printCart = $this->My_model->select_where("user_cart", ['user_id' => $_SESSION['user_id'], 'status' => 'active']);
		// 	// echo "<pre>";
		// 	// print_r($printCart);
		// 	// exit();

		// } else {
		if (isset($_SESSION['cart'][$_POST['prod_id']])) {
			unset($_SESSION['cart'][$_POST['prod_id']]);
			unset($_SESSION['Size'][$_POST['prod_id']]);
		} else {
			$_SESSION['cart'][$_POST['prod_id']] = 1;
			$_SESSION['Size'][$_POST['prod_id']] = $_POST['size'];
		}
		
		$ttl = (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0;
		echo json_encode(['status' => 'success', 'msg' => 'Added To Cart In session','ttlCart'=>$ttl]);

		// 👉 Print session cart
		// echo "<pre>";
		// print_r($_SESSION['cart']);
		// print_r($_SESSION['Size']);
		// exit();

	}


	public function load_cart_drawer()
	{
		// $data['product_details'] = isset($_GET['pId']) && $_GET['pId'] != '0' ? getProductDetails($_GET['pId']) : [];
		// $data['size'] = isset($_GET['size']) ? $_GET['size'] : '';
		$products = [];

		// if (isset($_SESSION['user_id'])) {
		// 	$data['ucart'] = $this->My_model->select_where("user_cart", ['user_id' => $_SESSION['user_id'], 'status' => 'active']);
		// 	if (isset($data['ucart'][0])) {
		// 		$msg = 'Yes';
		// 		foreach ($data['ucart'] as $key => $row) {
		// 			$products[$key] = getProductDetails($row['prod_id']);
		// 		}
		// 	} else {
		// 		$msg = 'No';
		// 	}
		// } else {
		if (isset($_SESSION['cart'])) {
			$i = 0;
			foreach ($_SESSION['cart'] as $key => $row) {
				$products[$key] = getProductDetails($key);
				$i++;
			}
			$msg = 'Yes';
		} else {
			$msg = 'No';
		}
		// }

		$data['order_charges'] = $this->My_model->select_where('order_charges', ['status' => 'active']);

		$data['cart'] = $products;
		// print_r($products);
		$this->load->view('user/add_to_cart_modal_form', $data);
	}



	public function remove_cart_item()
	{
		// 	if (isset($_SESSION['user_id'])) {
		// 	$this->db->where(['user_id' => $_SESSION['user_id'], 'prod_id' => $_POST['prod_id']]);
		// 	$this->db->delete('user_cart');
		// } else {
		unset($_SESSION['cart'][$_POST['prod_id']]);
		unset($_SESSION['Size'][$_POST['prod_id']]);
		// }
		$ttl = (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0;
		echo json_encode(['status' => 'success','id' => $_POST['prod_id'],'ttlCart'=>$ttl]);

		;
	}





	public function buy_now($id)
	{

		$this->head();
		$this->nav();
		$products = $this->db->query(
			"
        SELECT * FROM category, product_gold
        WHERE product_gold.cat_id = category.category_id
        AND product_gold.status = 'active'
        AND product_gold.prod_gold_id='" . $id . "'
        ORDER BY product_gold.prod_gold_id DESC"
		)->result_array();

		$relatedProducts = $this->db->query(
			"
        SELECT * FROM category, product_group,product_gold
        WHERE product_gold.cat_id = category.category_id
        AND product_gold.group_id = product_group.product_group_id
        AND product_gold.group_id = '" . $products[0]['group_id'] . "'
        AND product_gold.status = 'active'
        ORDER BY product_gold.prod_gold_id DESC LIMIT 10"
		)->result_array();

		// Get categories and product groups
		$data['category'] = $this->My_model->select_where("category", ['category_id' => $products[0]['category_id'], 'status' => 'active']);


		// Filtered products result
		$filtered_products = [];
		$filtered_relatedProducts = [];

		foreach ($products as $key => $row) {
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
			// $row['total_discount_amt'] = 2000;
			if ($row['total_discount_amt'] > 0) {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = $row['total_discount_amt'];
				$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
			} else {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = 0;
				$row['discounted_price'] = 0;
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
			}
			$row['imgs'] = explode('||', $row['product_image']);


			$filtered_products[] = $row;
		}
		foreach ($relatedProducts as $key => $row) {
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
			// $row['total_discount_amt'] = 2000;
			if ($row['total_discount_amt'] > 0) {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = $row['total_discount_amt'];
				$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
			} else {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = 0;
				$row['discounted_price'] = 0;
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
			}
			$row['imgs'] = explode('||', $row['product_image']);


			$filtered_relatedProducts[] = $row;
		}

		$data['products'] = $filtered_products;
		$data['relatedProducts'] = $filtered_relatedProducts;
		// echo "<pre>";
		// print_r($filtered_relatedProducts);
		// echo "</pre>";
		$this->load->view("user/product_details", $data);
		$this->footer();
	}

	public function product_details($id)
	{
		$this->head();
		$this->nav();
		$products = $this->db->query(
			"
        SELECT * FROM category, product_gold
        WHERE product_gold.cat_id = category.category_id
        AND product_gold.status = 'active'
        AND product_gold.prod_gold_id='" . $id . "'
        ORDER BY product_gold.prod_gold_id DESC"
		)->result_array();

		$relatedProducts = $this->db->query(
			"
        SELECT * FROM category, product_group,product_gold
        WHERE product_gold.cat_id = category.category_id
        AND product_gold.group_id = product_group.product_group_id
        AND product_gold.group_id = '" . $products[0]['group_id'] . "'
        AND product_gold.status = 'active'
        ORDER BY product_gold.prod_gold_id DESC LIMIT 10"
		)->result_array();

		// Get categories and product groups
		$data['category'] = $this->My_model->select_where("category", ['category_id' => $products[0]['category_id'], 'status' => 'active']);

		$data['reviews'] = $this->My_model->select_where("review_tbl", ['prod_gold_id' => $id, 'status' => 'active']);
		// Filtered products result
		$filtered_products = [];
		$filtered_relatedProducts = [];

		foreach ($products as $key => $row) {
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
			// $row['total_discount_amt'] = 2000;
			if ($row['total_discount_amt'] > 0) {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = $row['total_discount_amt'];
				$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
			} else {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = 0;
				$row['discounted_price'] = 0;
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
			}
			$row['imgs'] = explode('||', $row['product_image']);


			$filtered_products[] = $row;
		}
		foreach ($relatedProducts as $key => $row) {
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
			// $row['total_discount_amt'] = 2000;
			if ($row['total_discount_amt'] > 0) {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = $row['total_discount_amt'];
				$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
			} else {
				$row['original_price'] = $row['price'];
				$row['discount_amount'] = 0;
				$row['discounted_price'] = 0;
				$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
				$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
			}
			$row['imgs'] = explode('||', $row['product_image']);


			$filtered_relatedProducts[] = $row;
		}

		$data['products'] = $filtered_products;
		$data['relatedProducts'] = $filtered_relatedProducts;
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view("user/product_details", $data);
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
		$data['blog_comments'] = $this->db->query("SELECT * FROM blog_comments WHERE blog_id = '" . $blog_id . "' AND  status ='active' ORDER BY blog_comments_id DESC LIMIT 10")->result_array();
		$data['other_blogs'] = array_reverse($this->My_model->select_where("web_blog", ['status' => 'active', 'web_blog_id!=' => $blog_id]));

		$this->ov("view_blog", $data);
	}


	public function branch()
	{
		// $data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$data['web_branch_details'] = $this->My_model->select_where("web_branch_details", ['status' => 'active']);
		// echo "<pre>";
		// print_r($data);
		// exit;
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

		if (isset($_SESSION['user_id'])) {
			$this->ov("custome_jewellery", $data);
		} else {
			redirect(base_url() . "user/login", 'refresh');
		}
	}

	public function custom_jwellery_save()
	{
		if (isset($_POST)) {
			// Validate mobile number (Indian format)
			$phone_number = trim($_POST['phone_number']);
			if (!preg_match('/^[6-9]\d{9}$/', $phone_number)) {
				$this->setToastMessage('Please enter a valid Indian mobile number (10 digits starting with 6-9)', 'danger');
				redirect(base_url() . "user/custome_jewellery", 'refresh');
				return;
			}

			// Check if image is uploaded
			if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
				$this->setToastMessage('Please upload a valid image file', 'danger');
				redirect(base_url() . "user/custome_jewellery", 'refresh');
				return;
			}

			// Validate image type
			$allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
			$file_type = $_FILES['image']['type'];
			$file_info = finfo_open(FILEINFO_MIME_TYPE);
			$detected_type = finfo_file($file_info, $_FILES['image']['tmp_name']);
			finfo_close($file_info);

			if (!in_array($detected_type, $allowed_types) || !in_array($file_type, $allowed_types)) {
				$this->setToastMessage('Please upload only image files (JPEG, PNG, GIF, WebP)', 'danger');
				redirect(base_url() . "user/custome_jewellery", 'refresh');
				return;
			}

			// Validate file size (max 5MB)
			if ($_FILES['image']['size'] > 5 * 1024 * 1024) {
				$this->setToastMessage('Image size should not exceed 5MB', 'danger');
				redirect(base_url() . "user/custome_jewellery", 'refresh');
				return;
			}

			$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

			if (in_array(strtolower($ext), $allowed_extensions)) {
				$img_name = "custom_jwellery-" . time() . "-" . rand(00000, 99999) . "." . strtolower($ext);
				$path = "uploads/";

				if (move_uploaded_file($_FILES['image']['tmp_name'], $path . $img_name)) {
					$_POST['image'] = $img_name;

					$data = array(
						'gold_color'      => strip_tags($_POST['gold_color']),
						'budget'          => strip_tags($_POST['budget']),
						'name'            => strip_tags($_POST['name']),
						'phone_number'    => $phone_number,
						'diamond_clarity' => strip_tags($_POST['diamond_clarity']),
						'gold_purity'     => strip_tags($_POST['gold_purity']),
						'description'     => strip_tags($_POST['description']),
						'address'         => strip_tags($_POST['address']),
						'image'           => $_POST['image'],
						'email'           => strip_tags($_POST['email']),
						'status'          => 'pending',
						'date_time'       => time(),
						'user_id'       => $_SESSION['user_id'],
					);

					$bill = $this->My_model->insert("custom_jwellery", $data);

					if ($bill) {
						$this->setToastMessage('Custom Jewellery order submitted successfully! We will contact you soon.', 'success');
					} else {
						$this->setToastMessage('Failed to submit custom jewellery order. Please try again.', 'danger');
					}
					redirect(base_url() . "user/customer_jewellery_list", 'refresh');
				} else {
					$this->setToastMessage('Failed to upload image. Please try again.', 'danger');
					redirect(base_url() . "user/custome_jewellery", 'refresh');
				}
			} else {
				$this->setToastMessage('Please upload only image files (JPEG, PNG, GIF, WebP)', 'danger');
				redirect(base_url() . "user/custome_jewellery", 'refresh');
			}
		} else {
			$this->setToastMessage('Invalid request. Please try again.', 'danger');
			redirect(base_url() . 'user/custome_jewellery', 'refresh');
		}
	}
	public function customer_jewellery_list()
	{
		if (isset($_SESSION['user_id'])) {
			$data['user_det'] = $this->My_model->select_where("customers", ['customers_id' => $_SESSION['user_id']])[0];
			$data['custom_jwellery'] = $this->My_model->select_where("custom_jwellery", ['user_id' => $_SESSION['user_id']]);

			$this->ov("customer_jewellery_list", $data);
		} else {
			redirect(base_url() . "user/login", 'refresh');
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
		$data['order_charges'] = $this->My_model->select_where('order_charges', ['status' => 'active']);


		if (!isset($_SESSION['user_id'])) {
		} else {
			$data['products'] = [];
			$wishlist = $_SESSION['wishlist'];
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

			if (isset($_GET['g_id'])) {
				$gId = "AND product_group.product_group_id = '" . $_GET['g_id'] . "'";
				$pgId = "AND product_gold.group_id = '" . $_GET['g_id'] . "'";
			} else {
				$gId = " ";
				$pgId = " ";
			}

			$filtered_products = [];

			foreach ($wishlist as $pId => $row) {
				$products = $this->db->query(
					"
	        SELECT * FROM category, product_gold
	        WHERE product_gold.cat_id = category.category_id 
	        AND product_gold.prod_gold_id = '" . $pId . "'
	        AND product_gold.status = 'active'
	         $ageQ $pgId
	        ORDER BY product_gold.prod_gold_id DESC
	        "
				)->result_array();

				// Get categories and product groups
				$data['category'] = $this->My_model->select_where("category", ['category_id' => $_GET['cat_id'], 'status' => 'active']);




				// Filtered products result

				foreach ($products as $row) {
					$data['product_group'] = $this->db->query("
			        SELECT category.*, product_group.*, product_group.product_group_id 
			        FROM category, product_gold, product_group 
			        WHERE category.category_id = product_gold.cat_id 
			        AND product_gold.status = 'active' 
			        AND product_group.status = 'active' 
			        AND product_gold.prod_gold_id = '" . $pId . "'
			        AND category.category_id = '" . $_GET['cat_id'] . "'
			        AND product_gold.group_id = product_group.product_group_id 
			        " . $gId . "
			        GROUP BY product_group.product_group_id
			    ")->result_array();

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


					// $row['total_discount_amt'] = 2000;
					if ($row['total_discount_amt'] > 0) {
						$row['original_price'] = $row['price'];
						$row['discount_amount'] = $row['total_discount_amt'];
						$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
						$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
						$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
					} else {
						$row['original_price'] = $row['price'];
						$row['discount_amount'] = 0;
						$row['discounted_price'] = $row['price'];
						$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
						$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
					}
					$row['imgs'] = explode('||', $row['product_image']);

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
			}


			// Get products

		}

		$this->ov("wishlist", $data);
	}

	public function manage_wishlist()
	{
		$data['order_charges'] = $this->My_model->select_where('order_charges', ['status' => 'active']);

		if (isset($_SESSION['wishlist'][$_POST['prod_id']]) && $_POST['manageQty'] == 'add') {
			$_SESSION['wishlist'][$_POST['prod_id']] = $_SESSION['wishlist'][$_POST['prod_id']] + 1;
			$msg = 'added';
			$price = number_format1(floatval($_POST['price']) * floatval($_SESSION['wishlist'][$_POST['prod_id']]));
		} else {
			if ($_SESSION['wishlist'][$_POST['prod_id']] == 1 && $_POST['manageQty'] == 'remove') {
				$price = number_format1(floatval($_POST['price']) * floatval($_SESSION['wishlist'][$_POST['prod_id']]));

				unset($_SESSION['wishlist'][$_POST['prod_id']]);
				if (isset($_SESSION['wishlist']) && count($_SESSION['wishlist']) >= 1) {
					$msg = 'deleted';
				} else {
					$price = 0;
					$msg = 'no products';
				}
				echo json_encode(['msg' => $msg, 'price' => $price]);
				return;
			} else {
				$_SESSION['wishlist'][$_POST['prod_id']] = $_SESSION['wishlist'][$_POST['prod_id']] - 1;
				$msg = 'removed';
				$price = number_format1(floatval($_POST['price']) * floatval($_SESSION['wishlist'][$_POST['prod_id']]));
			}
		}

		echo json_encode(['post' => $_SESSION['wishlist'][$_POST['prod_id']], 'msg' => $msg, 'status' => 'success', 'session' => $_SESSION['wishlist'], 'price' => $price]);
	}
	// cart-page
	public function cart_page()
	{
		$this->ov("cart_page");
	}
	public function cart()
	{
		// unset($_SESSION['cart']);
		// unset($_SESSION['cart2']);

		// echo "<pre>";
		// print_r($_SESSION);
		// exit;
		// 		if (isset($_SESSION['user_id'])) {
		// 			$data['admin'] = $this;
		// 			$cond['user_id'] = $_SESSION['user_id'];
		// 			$cond['status'] = 'pending';
		// 			$data['order_charges'] = $this->My_model->select_where('order_charges', ['status' => 'active']);
		// 			$data['products'] = $this->My_model->select_where('user_cart', $cond);
		// 			$data['cutomer_det'] = $this->My_model->select_where("customers", ['customers_id' => $_SESSION['user_id']]);
		// 			$this->ov("cart", $data);
		// 		} 
		// 		else {
		$data['admin'] = $this;
		$cond['status'] = 'pending';
		$data['order_charges'] = $this->My_model->select_where('order_charges', ['status' => 'active']);
		$data['products'] = [];
		$i = 0;
		foreach ($_SESSION['cart2'] as $key => $row) {
			$i++;
			// echo $key."<br>";
			$p = $this->db->query("SELECT * FROM category,product_gold WHERE product_gold.cat_id = category.category_id AND product_gold.prod_gold_id='" . $key . "' AND product_gold.status='active' ")->result_array()[0];
			$data['products'][$i] = $p;
		}

		$this->ov("cart", $data);
		// 			$this->head();
		// 			$this->load->view('user/nav1');
		// 			$this->load->view("user/login1");
		// 			$this->load->view("user/footer1");

	}
	// public function scheme(){
	// 	$this->ov("scheme");
	// }
	// public function activate_scheme()
	// {
	// 	$this->ov("activate_scheme");
	// }
	// checkout
	public function checkout()
	{
		if (isset($_SESSION['cart'])) {
			$i = 0;
			foreach ($_SESSION['cart'] as $key => $row) {
				$products[$key] = getProductDetails($key);
				$i++;
			}
			$msg = 'Yes';
		} else {
			$msg = 'No';
		}
		// }

		$data['order_charges'] = $this->My_model->select_where('order_charges', ['status' => 'active']);

		$data['cart'] = $products;

		$this->ov("checkout", $data);
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


	// Buy Now Process - 16 July 2025
	public function buy_product_otp()
	{
		if (isset($_POST['mobile_number'])) {
			header('Content-Type: application/json');
			$mobile_number = $_POST['mobile_number'];

			$otp = rand(1000, 9999);
			$msg = "OTP to login " . $otp . " is your Shingavi Jewellers code and is valid for 10 minutes. Do not share the OTP with anyone. @www.shingavijewellers.com";
			// $msg = "Dear Customer, your OTP for completing your purchase is " . $otp . ". This code is valid for 10 minutes. Please do not share it with anyone. @www.shingavijewellers.com";
			$this->sendotp($mobile_number,$otp);
			// send_massage($mobile_number, $msg, '1707170030888899461');
			$existingUser = $this->My_model->select_where("customers", ['status' => 'active', 'mobile' => $_POST['mobile_number']]);
			if (isset($existingUser[0])) {
				$user_status = 'existing';
				$Id = $existingUser[0]['customers_id'];
			} else {
				$user_status = 'new';
				$user['mobile'] = $mobile_number;
				$user['status'] = 'active';
				$user['reg_time'] = time();
				$userId = $this->My_model->insert("customers", $user);
				$Id = $userId;
				$existingUser = $this->My_model->select_where("customers", ['status' => 'active', 'mobile' => $_POST['mobile_number']]);
			}
			$this->My_model->update("customers", ['customers_id' => $Id], ['status' => 'active', 'otp' => $otp]);
			$data['mobile_number'] = $mobile_number;
			$data['otp'] = $otp;
			$data['otp_entry_time'] = time();
			$data['status'] = 'active';
			$this->My_model->insert("otp_tbl", $data);
			$product_details = getProductDetails($_POST['pId']);

			echo json_encode(['status' => 'success', 'data' => $existingUser, 'user_status' => $user_status, 'product_details' => $product_details]);
		} else {
			echo json_encode(['status' => 'failed', 'msg' => 'Mobile Number Not Found']);
		}
	}
	public function sendotp($mobile, $otp)
    {
        $Phno = $mobile;
        $Msg = "Hey, Use this OTP " . $otp . " to complete your verification process. A2Z INFOTECHS.";
        $SenderID = 'AZSOFT';
        $UserID = 'a2zinfo';
        $Password = 'gvgp3117GV';
        $EntityID = '1701160371643552190';
        $TemplateID = '1707175100431339693';
        $ch = '';
        $url = 'http://nimbusit.biz/api/SmsApi/SendSingleApi?UserID=' . $UserID . '&Password=' . $Password . '&SenderID=' . $SenderID . '&Phno=' . $Phno . '&Msg=' . urlencode($Msg) . '&EntityID=' . $EntityID . '&TemplateID=' . $TemplateID;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $output = curl_exec($ch);
        curl_close($ch);
        // echo $output;
        // echo send_message($Phno,$Msg,$Password,$SenderID,$UserID);
    }
	public function login_otp()
	{
		header('Content-Type: application/json');

		// Get mobile number safely
		$mobile_number = $this->input->post('mobile_number');

		if (!empty($mobile_number)) {

			// Generate 4-digit OTP
			$otp = rand(1000, 9999);
			$this->sendotp($mobile_number,$otp);

			// Message (for sending via SMS if needed)
			$msg = "OTP to login " . $otp . " is your Shingavi Jewellers code and is valid for 10 minutes. Do not share it with anyone. @www.shingavijewellers.com";

			// Check if existing user
			$existingUser = $this->My_model->select_where("customers", [
				'status' => 'active',
				'mobile' => $mobile_number
			]);

			if (isset($existingUser[0])) {
				$user_status = 'existing';
				$user_id = $existingUser[0]['customers_id'];
			} else {
				$user_status = 'new';
				$user = [
					'mobile'   => $mobile_number,
					'status'   => 'active',
					'reg_time' => time()
				];
				$user_id = $this->My_model->insert("customers", $user);

				// fetch inserted user
				$existingUser = $this->My_model->select_where("customers", [
					'status' => 'active',
					'mobile' => $mobile_number
				]);
			}
			$this->My_model->update("customers", ['customers_id' => $user_id], ['status' => 'active', 'otp' => $otp]);

			// Store OTP in table
			$otpData = [
				'mobile_number' => $mobile_number,
				'otp'           => $otp,
				'otp_entry_time' => time(),
				'status'        => 'active'
			];
			$this->My_model->insert("otp_tbl", $otpData);

			// (Optional) set session if you want
			// $_SESSION['user_id'] = $user_id;

			echo json_encode([
				'status'      => 'success',
				'data'        => $existingUser,
				'user_status' => $user_status,
				'user_id' 	  => $user_id
			]);
		} else {
			echo json_encode([
				'status' => 'failed',
				'msg'    => 'Mobile Number Not Found'
			]);
		}
	}

	public function manageQty()
	{
		$_SESSION['cart'][$_POST['prod_id']] = $_POST['qty'];
		echo json_encode(['status' => 'success', 'sessioncart' => $_SESSION['cart']]);
	}

	// New User Registration Method
	public function register_new_user()
	{
		header('Content-Type: application/json');

		// Get POST data
		$mobile = $_POST['mobile'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pincode = $_POST['pincode'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$product_id = $_POST['product_id'];

		// Validate required fields
		if (empty($mobile) || empty($name) || empty($email) || empty($pincode) || empty($city) || empty($address)) {
			echo json_encode([
				'status' => 'error',
				'message' => 'All fields are required'
			]);
			return;
		}

		// Validate mobile number format
		if (!preg_match('/^[789]\d{9}$/', $mobile)) {
			echo json_encode([
				'status' => 'error',
				'message' => 'Invalid mobile number format'
			]);
			return;
		}

		// Validate email format
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo json_encode([
				'status' => 'error',
				'message' => 'Invalid email format'
			]);
			return;
		}

		// Validate pincode
		if (strlen($pincode) != 6 || !is_numeric($pincode)) {
			echo json_encode([
				'status' => 'error',
				'message' => 'Invalid pincode format'
			]);
			return;
		}

		try {
			// Check if user already exists
			$existingUser = $this->My_model->select_where("customers", [
				'mobile' => $mobile,
				'status' => 'active'
			]);

			$customer_id = null;

			if (empty($existingUser)) {
				// Create new customer
				$customerData = [
					'name' => $name,
					'email' => $email,
					'mobile' => $mobile,
					'status' => 'active',
					'reg_time' => time()
				];

				$customer_id = $this->My_model->insert("customers", $customerData);

				if (!$customer_id) {
					throw new Exception('Failed to create customer account');
				}
			} else {
				// Update existing customer with new details
				$customer_id = $existingUser[0]['customers_id'];
				$updateData = [
					'name' => $name,
					'email' => $email
				];

				$this->My_model->update_where("customers", $updateData, ['customers_id' => $customer_id]);
			}

			// Set user session
			$_SESSION['user_id'] = $customer_id;

			// Create or update customer address
			$existingAddress = $this->My_model->select_where("customer_address", [
				'customers_id' => $customer_id,
				'status' => 'active'
			]);

			if (empty($existingAddress)) {
				// Create new address
				$addressData = [
					'customers_id' => $customer_id,
					'address' => $address,
					'pincode' => $pincode,
					'city' => $city,
					'default_address' => 'yes',
					'status' => 'active',
					'created_at' => date('Y-m-d H:i:s')
				];

				$address_id = $this->My_model->insert("customer_address", $addressData);

				if (!$address_id) {
					throw new Exception('Failed to save address');
				}
			} else {
				// Update existing address
				$updateAddressData = [
					'address' => $address,
					'pincode' => $pincode,
					'city' => $city
				];

				$this->My_model->update_where("customer_address", $updateAddressData, [
					'customers_id' => $customer_id,
					'status' => 'active'
				]);
			}

			// Get updated user data
			$userData = $this->My_model->select_where("customers", [
				'customers_id' => $customer_id,
				'status' => 'active'
			]);

			$addressData = $this->My_model->select_where("customer_address", [
				'customers_id' => $customer_id,
				'status' => 'active'
			]);

			// Prepare user data for response
			$userResponse = [
				'customers_id' => $customer_id,
				'name' => $name,
				'email' => $email,
				'mobile' => $mobile,
				'address' => $address,
				'pincode' => $pincode,
				'city' => $city
			];

			echo json_encode([
				'status' => 'success',
				'message' => 'Registration completed successfully',
				'user_data' => $userResponse,
				'customer_id' => $customer_id
			]);
		} catch (Exception $e) {
			echo json_encode([
				'status' => 'error',
				'message' => 'Registration failed: ' . $e->getMessage()
			]);
		}
	}

	public function getUserAddress()
	{

		$data['user_address'] = $this->My_model->select_where("customer_address", ['customers_id' => $_SESSION['user_id'], 'status' => 'active']);
		echo json_encode(['status' => 'success', 'user_address' => $data['user_address']]);
	}
	public function getproductDetails()
	{
		// $existingUser = $this->My_model->select_where("customers",['status'=>'active','customers_id'=>$_SESSION['user_id']]);
		$product_details = getProductDetails($_POST['pId']);
		if (isset($product_details[0])) {
			echo json_encode(['status' => 'success', 'product_details' => $product_details]);
		} else {
			echo json_encode(['status' => 'failed']);
		}
	}
	public function setUserLogin()
	{
		$_SESSION['user_id'] = $_POST['user_id'];
		if (isset($_SESSION['user_id'])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'failed']);
		}
	}

	public function load_address_form()
	{
		$data['product_id'] = $_GET['pId'];
		$data['size'] = $_GET['size'] ?? 'NA';
		$data['qty'] = $_GET['qty'];
		// unset($_SESSION['user_id']);
		// exit;
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);

		if (isset($_SESSION['user_id'])) {
			$data['user'] = $this->My_model->select_where("customers", ['status' => 'active', 'customers_id' => $_SESSION['user_id']]);
			$data['user_address'] = $this->My_model->select_where("customer_address", ['customers_id' => $_SESSION['user_id'], 'status' => 'active', 'default_address' => 'yes']);
			$data['user_all_address'] = $this->My_model->select_where("customer_address", ['customers_id' => $_SESSION['user_id'], 'status' => 'active']);

			if ($data['user'][0]['name'] != '') {
				$data['userStatus'] = 'Old';
			} else {
				$data['userStatus'] = 'New';
			}

			if (isset($data['user_address'][0]) && $data['user_address'][0]['address'] != '') {
				$data['userAddressStatus'] = 'Old';
			} else {
				$data['userAddressStatus'] = 'New';
			}
		}
		$data['product_details'] = getProductDetails($_GET['pId']);
		$this->load->view('user/address_modal_form', $data);
	}
	public function use_this_address()
	{
		if ($_POST['customer_address_id']) {
			$this->My_model->update("customer_address", ['customers_id' => $_SESSION['user_id'], 'status' => 'active'], ['default_address' => ' ']);
			$data = $this->My_model->update("customer_address", ['customers_id' => $_SESSION['user_id'], 'status' => 'active', 'customer_address_id' => $_POST['customer_address_id']], ['default_address' => 'yes']);
			if ($data) {
				echo json_encode(['status' => 'success']);
			} else {
				echo json_encode(['status' => 'failed']);
			}
		}
	}
	public function save_new_address()
	{
		if ($_POST['user_status'] == 'Old') {
			$this->My_model->update("customer_address", ['customers_id' => $_SESSION['user_id'], 'status' => 'active'], ['default_address' => ' ']);
			unset($_POST['user_status']);
			unset($_POST['product_id']);
			$_POST['status'] = 'active';
			$_POST['entry_time'] = time();
			$_POST['entry_by'] = 'user';
			$_POST['default_address'] = 'yes';
			$data = $this->My_model->insert("customer_address", $_POST);
		} else {
			unset($_POST['user_status']);
			$data = $this->My_model->insert("customer_address", $_POST);
		}


		if ($data) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'failed']);
		}
	}
	public function save_customer_details()
	{
		$user_details = [
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'address' => $_POST['address'],
			'pincode' => $_POST['pincode'],
		];
		$data = $this->My_model->update("customers", ['customers_id' => $_SESSION['user_id'], 'status' => 'active'], $user_details);
		$default_address = [
			'customers_id' => $_SESSION['user_id'],
			'status' => 'active',
			'address' => $_POST['address'],
			'pincode' => $_POST['pincode'],
			'city' => $_POST['city'],
			'entry_time' => time(),
			'entry_by' => 'user',
			'default_address' => 'yes'
		];
		$data = $this->My_model->insert("customer_address", $default_address);
		if ($data) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'failed']);
		}
	}
	public function unset_ses()
	{
		unset($_SESSION['user_id']);
		redirect(base_url() . 'user/', 'refresh');
	}
	public function save_buy_now()
	{

		// print_r($_POST);
		// print_r($_SESSION);
		// exit;
		$order_charges = $this->My_model->select_where('order_charges', ['status' => 'active']);

		$data['user_det'] = $this->My_model->select_where("customers", ['customers_id' => $_POST['customers_id'], 'status' => 'active']);
		$data['address'] = $this->My_model->select_where("customer_address", ['customers_id' => $_POST['customers_id'], 'default_address' => 'yes', 'status' => 'active']);
		$data['product_details'] = getProductDetails($_POST['product_id']);
		$subtotal = 0;
		$order_charges_det = [];
		foreach ($data['product_details'] as $row) {
			$order_det['original_price'] = $row['original_price'];
			$order_det['discount_amount'] = $row['discount_amount'];
			$order_det['final_amount_after_discount'] = $row['final_amount_after_discount'];
			$order_det['caret'] = $row['caret'];
			$order_det['purity'] = $row['purity'];
			$order_det['product_id'] = $row['product_id'];
			$order_det['billing_type'] = $row['billing_type'];
			$order_det['gold_rate'] = $row['gold_rate'];
			$order_det['silver_rate'] = $row['silver_rate'];
			$order_det['cross_weight'] = $row['cross_weight'];
			$order_det['other_weight'] = $row['other_weight'];
			$order_det['net_weight'] = $row['net_weight'];
			$order_det['labour_char'] = $row['labour_char'];
			$order_det['wastage_per'] = $row['wastage_per'];
			$order_det['other_amt'] = $row['other_amt'];
			$order_det['gst_per'] = $row['gst_per'];
			$order_det['fixed_amount'] = $row['fixed_amount'];
			$order_det['fixed_gst_per'] = $row['fixed_gst_per'];
			$order_det['fixed_gst_amt'] = $row['fixed_gst_amt'];
			$order_det['fixed_total_amt'] = $row['fixed_total_amt'];
			$order_det['total_discount_amt'] = $row['total_discount_amt'];
			$order_det['category_name'] = $row['category_name'];
			$order_det['group_id'] = $row['group_id'];
			$order_det['fixed_total_amt'] = $row['fixed_total_amt'];
			$discounted_price = floatval($row['discounted_price'] ?? 0);
			$qty = floatval($_POST['qty'] ?? 1);
			$subtotal = $subtotal + ($discounted_price * $qty);
		}
		$sttl =  $subtotal;
		$totalOrderCharges = 0;
		$total = 0;
		foreach ($order_charges as $key => $order_charges1) {
			$order_charges_det[$key]['charges_id'] = $order_charges1['charges_id'];
			$order_charges_det[$key]['charges_label'] = $order_charges1['charges_label'];
			$order_charges_det[$key]['percent'] = $order_charges1['percent'];
			$order_charges_det[$key]['rate'] = 0;

			if ((float)$order_charges1['percent'] != 0) {
				$order_charges1['rate'] = ($sttl * (float)$order_charges1['percent']) / 100;
				$order_charges_det[$key]['rate'] = $order_charges1['rate'];
			}
			$totalOrderCharges += $order_charges1['rate'];
		}
		$total = $subtotal + $totalOrderCharges;


		$order['customers_id'] = $_POST['customers_id'];
		$order['c_mobile'] = $data['user_det'][0]['mobile'];
		$order['c_name'] = $data['user_det'][0]['name'];
		$order['c_email'] = $data['user_det'][0]['email'];
		$order['payment_type'] = $_POST['payment_type'];
		$order['cust_address'] = $data['address'][0]['address'];
		$order['cust_pincode'] = $data['address'][0]['pincode'];
		$order['cust_city'] = $data['address'][0]['city'];
		$order['order_charges'] = $totalOrderCharges;
		$order['sub_total_amount'] = round($subtotal);
		$order['total_amount'] = round($total);
		$order['order_date'] = date('Y-m-d');
		$order['order_time'] = time();
		$order['status'] = 'active';
		$order['entry_time'] = time();
		$order['order_status'] = 'pending';
		$order['pay_status'] = 'pending';
		$order['paid_amount'] = 0;
		$order_det['prod_gold_id'] = $_POST['product_id'];
		$order_det['customers_id'] = $_POST['customers_id'];
		$order_det['size'] = $_POST['size'];
		$order_det['qty'] = $_POST['qty'];
		$order_det['subtotal'] = (float)$order_det['fixed_total_amt'] * (float)$_POST['qty'];
		$order_det['status'] = 'active';
		$order_det['entry_time'] = time();


		$ord = $this->My_model->insert("order_tbl", $order);
		$cOrderId = date('Ymd') . str_pad($ord, 5, '0', STR_PAD_LEFT);
		$this->My_model->update("order_tbl", ['order_tbl_id' => $ord], ['cOrderId' => $cOrderId]);
		$order_det['order_tbl_id'] = $ord;
		$ordDet = $this->My_model->insert("ordered_product", $order_det);
    
		foreach ($order_charges_det as $row) {
			$row['order_tbl_id'] = $ord;
			$row['status'] = 'active';
			$row['entry_time'] = time();
			$this->My_model->insert("order_charges_det", $row);
		}
    

		if ($_POST['payment_type'] == 'Online') {
// 			$response1 = createCashfreeOrder('CUST_' . $ord, $data['user_det'][0]['name'], $data['user_det'][0]['email'], $data['user_det'][0]['mobile'], number_format((float)$total, 2, '.', ''), base_url());
			$response1 = createCashfreeOrder('CUST_' . $ord, $data['user_det'][0]['name'], $data['user_det'][0]['email'], $data['user_det'][0]['mobile'], number_format((float)1, 2, '.', ''), base_url());
			
			$data['response'] = json_decode($response1, true);

			$orderId = $data['response']['order_id'];
			// print_r($orderId);
			// exit;
			$this->My_model->update("order_tbl", ['order_tbl_id' => $ord], ['orderId' => $orderId]);
			$response = getCashfreeOrderDetails($orderId);
			$order_data['response'] = json_decode($response, true);
			$order_data['bill_id'] = $ord;
			$this->createOrder($ord);
			redirect('user/createOrder/' . $ord, 'refresh');
		} else {
			if ($ord) {
				$this->setToastMessage('Order Placed successfully...', 'success');
				redirect(base_url() . 'user/product_details/' . $_POST['product_id'], 'refresh');
			} else {
				$this->setToastMessage('Failed to Place Order...', 'danger');
				redirect(base_url() . 'user/product_details/' . $_POST['product_id'], 'refresh');
			}
		}
	}

	public function checkout_save()
	{


		$order['order_charges'] = $_POST['order_charges'];
		$order['sub_total_amount'] = $_POST['sub_total_amount'];
		$order['total_amount'] = $_POST['total_amount'];

		if ($_POST['user_type'] == 'old') {
			$_POST['customers_id'] = $_POST['customers_id'];
			$order['customers_id'] = $_POST['customers_id'];
			$oldUser = $this->My_model->select_where("customers", ['customers_id' => $_POST['customers_id']]);
			if (empty($oldUser[0]['name'])) {
				$this->My_model->update('customers', ['customers_id' => $_POST['customers_id']], ['name' => $_POST['c_name']]);
			}
			if (empty($oldUser[0]['email'])) {
				$this->My_model->update('customers', ['customers_id' => $_POST['customers_id']], ['email' => $_POST['c_email']]);
			}
		} else {
			$user['name'] = $_POST['c_name'];
			$user['email'] = $_POST['c_email'];
			$user['mobile'] = $_POST['c_mobile'];
			$user['reg_time'] = time();
			$user['status'] = 'active';
			$user_id = $this->My_model->insert("customers", $user);
			$_POST['customers_id'] = $user_id;
			$_SESSION['user_id'] = $user_id;
			$userAddres['customers_id'] = $_POST['customers_id'];
			$userAddres['address'] = $_POST['cust_address'];

			$userAddres['pincode'] = $_POST['cust_pincode'];
			$userAddres['city'] = $_POST['cust_city'];
			$userAddres['state'] = $_POST['cust_state'];
			$userAddres['status'] = 'active';
			$userAddres['default_address'] = 'yes';
			$userAddres['entry_time'] = time();
			$this->My_model->insert("customer_address", $userAddres);
		}


		$order['customers_id'] = $_POST['customers_id'];
		$order['c_name'] = $_POST['c_name'];
		$order['c_email'] = $_POST['c_email'];
		$order['c_mobile'] = $_POST['c_mobile'];
		$order['cust_address'] = $_POST['cust_address'];
		$order['payment_type'] = $_POST['payment_type'];
		$order['cust_pincode'] = $_POST['cust_pincode'];
		$order['cust_city'] = $_POST['cust_city'];
		$order['order_date'] = date('Y-m-d');
		$order['order_time'] = time();
		$order['status'] = 'active';
		$order['entry_time'] = time();
		$order['order_status'] = 'pending';
		$order['pay_status'] = 'pending';
		$order['paid_amount'] = 0;
		$ord = $this->My_model->insert("order_tbl", $order);
		$cOrderId = date('Ymd') . str_pad($ord, 5, '0', STR_PAD_LEFT);
		$this->My_model->update("order_tbl", ['order_tbl_id' => $ord], ['cOrderId' => $cOrderId]);

		for ($o = 0; $o < count($_POST['charges_id']); $o++) {
			$ordCharges['charges_id'] = $_POST['charges_id'][$o];
			$ordCharges['charges_label'] = $_POST['charges_label'][$o];
			$ordCharges['percent'] = $_POST['percent'][$o];
			$ordCharges['rate'] = $_POST['rate'][$o];
			$ordCharges['order_tbl_id'] = $ord;
			$this->My_model->insert("order_charges_det", $ordCharges);
		}

		for ($i = 0; $i < count($_POST['order_det']['prod_gold_id']); $i++) {
			$row['order_tbl_id'] = $ord;
			$row['prod_gold_id'] = $_POST['order_det']['prod_gold_id'][$i];
			$row['prod_gold_id'] = $_POST['order_det']['prod_gold_id'][$i];
			$row['qty'] = $_POST['order_det']['qty'][$i];
			$row['size'] = $_POST['order_det']['size'][$i];
			$row['caret'] = $_POST['order_det']['caret'][$i];
			$row['purity'] = $_POST['order_det']['purity'][$i];
			$row['original_price'] = $_POST['order_det']['original_price'][$i];
			$row['discount_amount'] = $_POST['order_det']['discount_amount'][$i];
			$row['final_amount_after_discount'] = $_POST['order_det']['final_amount_after_discount'][$i];
			$row['product_id'] = $_POST['order_det']['product_id'][$i];
			$row['billing_type'] = $_POST['order_det']['billing_type'][$i];
			$row['gold_rate'] = $_POST['order_det']['gold_rate'][$i];
			$row['silver_rate'] = $_POST['order_det']['silver_rate'][$i];
			$row['cross_weight'] = $_POST['order_det']['cross_weight'][$i];
			$row['other_weight'] = $_POST['order_det']['other_weight'][$i];
			$row['net_weight'] = $_POST['order_det']['net_weight'][$i];
			$row['labour_char'] = $_POST['order_det']['labour_char'][$i];
			$row['wastage_per'] = $_POST['order_det']['wastage_per'][$i];
			$row['other_amt'] = $_POST['order_det']['other_amt'][$i];
			$row['gst_per'] = $_POST['order_det']['gst_per'][$i];
			$row['fixed_amount'] = $_POST['order_det']['fixed_amount'][$i];
			$row['total_discount_amt'] = $_POST['order_det']['total_discount_amt'][$i];
			$row['category_name'] = $_POST['order_det']['category_name'][$i];
			$row['group_id'] = $_POST['order_det']['group_id'][$i];
			$row['subtotal'] = $_POST['order_det']['subtotal'][$i];
			$row['status'] = 'active';
			$row['entry_time'] = time();
			$ordDet = $this->My_model->insert("ordered_product", $row);
		}
		$data['user_det'] = $this->My_model->select_where("customers", ['customers_id' => $_POST['customers_id']]);
		$_SESSION['user_id'] = $data['user_det'][0]['customers_id'];
        unset($_SESSION['cart']);
        unset($_SESSION['Size']);

		if ($_POST['payment_type'] == 'Online') {
// 			$response1 = createCashfreeOrder('CUST_' . $ord, $data['user_det'][0]['name'], $data['user_det'][0]['email'], $data['user_det'][0]['mobile'], number_format((float)$order['total_amount'], 2, '.', ''), base_url());
			$response1 = createCashfreeOrder('CUST_' . $ord, $data['user_det'][0]['name'], $data['user_det'][0]['email'], $data['user_det'][0]['mobile'], number_format((float)1, 2, '.', ''), base_url());
			
			$data['response'] = json_decode($response1, true);
			// print_r($data['response']);
			$orderId = $data['response']['order_id'];

			$this->My_model->update("order_tbl", ['order_tbl_id' => $ord], ['orderId' => $orderId]);
			$response = getCashfreeOrderDetails($orderId);
			$order_data['response'] = json_decode($response, true);
			$order_data['bill_id'] = $ord;
			$this->createOrder($ord);
			redirect('user/createOrder/' . $ord, 'refresh');
		} else {
			if ($ord) {
				$this->setToastMessage('Order Placed successfully...', 'success');
				redirect(base_url() . 'user/my_account/', 'refresh');
			} else {
				$this->setToastMessage('Failed to Place Order...', 'danger');
				redirect(base_url() . 'user/index/', 'refresh');
			}
		}
	}

	public function orderDetails()
	{

		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://api.cashfree.com/pg/orders/" . $_POST['order_id'],
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-api-version: 2023-08-01",
				"x-client-id: 24376169216c7a5e7beae86f59167342",
				"x-client-secret: dd6712b4f88c7d6195586b59fe5cd0e898adb89c"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo json_encode($response);
		}
	}
	public function PaymentSuccess()
	{
		extract($_GET);
		$billDet = $this->My_model->select_where("order_tbl", ['order_tbl_id' => $bill])[0];
		$res = getCashfreeOrderDetails($billDet['orderId']);
		$data['response'] = json_decode($res, true);
		$data['bill'] = $billDet;
		$this->My_model->update("order_tbl", ['order_tbl_id' => $bill], ['order_status' => 'confirm', 'pay_status' => 'paid', 'paid_amount' => $data['response']['order_amount'], 'pay_date_time' => time()]);
		$this->ov("PaymentSuccess", $data);
	}
	public function checkOtpMatched()
	{
		$data = $this->My_model->select_where("customers", ['mobile' => $_POST['mobile_number'], 'status' => 'active']);
		if (isset($data[0])) {
			if ($_POST['otp'] == $data[0]['otp']) {
				$_SESSION['user_id'] = $data[0]['customers_id'];
				echo json_encode(['status' => 'success', 'msg' => 'OTP Matched','session'=>$_SESSION]);
			} else {
				echo json_encode(['status' => 'failed', 'msg' => 'OTP Not Matched']);
			}
		} else {
			echo json_encode(['status' => 'failed', 'msg' => 'Something Went Wrong, Please Try Again']);
		}
	}
	public function PaymentFailed()
	{
		extract($_GET);
		$billDet = $this->My_model->select_where("order_tbl", ['order_tbl_id' => $bill])[0];
		$res = getCashfreeOrderDetails($billDet['orderId']);
		$data['response'] = json_decode($res, true);
		$data['bill'] = $billDet;
		$data['bill_id'] = $bill;
		$this->My_model->update("order_tbl", ['order_tbl_id' => $bill], ['pay_failed_date_time' => time()]);
		$this->ov("PaymentFailed", $data);
	}
	public function createOrder($bill_id)
	{

		header("Content-Type: text/html; charset=UTF-8");
		$bill = $this->My_model->select_where("order_tbl", ['order_tbl_id' => $bill_id])[0];
		if (!empty($bill['orderId'])) {
			$res = getCashfreeOrderDetails($bill['orderId']);
			$data['response'] = json_decode($res, true);
			$data['bill'] = $bill_id;
			$this->load->view("user/cashfree", $data);
		} else {
$response1 = createCashfreeOrder('CUST_' . $bill_id, $bill['c_name'], $bill['c_email'], '91' . $bill['c_mobile'], number_format((float)1, 2, '.', ''), base_url());
			
// 			$response1 = createCashfreeOrder('CUST_' . $bill_id, $bill['c_name'], $bill['c_email'], '91' . $bill['c_mobile'], number_format((float)$bill['total_amount'], 2, '.', ''), base_url());
			$data['response'] = json_decode($response1, true);
			print_r($data['response']);
			exit;
			// echo round($bill['total_amount'],2);
			$orderId = $data['response']['order_id'];
			$this->My_model->update("order_tbl", ['order_tbl_id' => $bill_id], ['orderId' => $orderId]);
			$this->load->view("user/cashfree", $data);
		}
		$this->load->view("user/cashfree", $data);
	}

	public function send_otp_to_add_mobile()
	{

		$otp = rand(1111, 9999);
		$_POST['mobile_number'] = '9075461110';
		$this->send_otp($_POST['mobile_number'],$otp);
		$msg = "OTP to login '" . $otp . "' is your Shingavi Jewellers code and is valid for 10 minutes. Do not share the OTP with anyone. @www.shingavijewellers.com";
		// OTP to login {#var#} is your Shingavi Jewellers code and is valid for 10 minutes. Do not share the OTP with anyone. @www.shingavijewellers.com
		send_massage($_POST['mobile_number'], $msg, '1707170030888899461');

		$_SESSION['otp'][$_POST['mobile_number']] = $otp;
		echo json_encode(['status' => 'otp_sended']);
	}

	public function test_send_otp()
	{
		// --- STEP 1: Set mobile number, OTP and template ID ---
		$mobile2 = '919075461110'; // Test 10-digit mobile number
		$otp = rand(100000, 999999); // Generate OTP
		$msg = "OTP to login '" . $otp . "' is your Shingavi Jewellers code and is valid for 10 minutes. Do not share the OTP with anyone. @www.shingavijewellers.com"; // Message to send
		$template_id = '1707170030888899461'; // Replace with actual DLT template ID

		// --- STEP 2: Validate and format mobile number ---
		if ($mobile2 != "") {
			if (strlen($mobile2) == 10)
				$mobile = '91' . $mobile2;
			elseif (strlen($mobile2) == 12)
				$mobile = $mobile2;
			else
				$mobile = "";
		} else {
			$mobile = '';
		}

		// --- STEP 3: Send OTP if mobile is valid ---
		if ($mobile != "") {
			$encoded_msg = urlencode($msg);

			$api_url = 'http://smsindia.techmartonline.com/api/sendhttp.php?authkey=83421AhlMv82TL6114c74bP1';
			$api_url .= '&mobiles=' . $mobile;
			$api_url .= '&message=' . $encoded_msg;
			$api_url .= '&country=91&route=4&DLT_TE_ID=' . $template_id . '&response=json&sender=SHGJPL';
			echo $api_url;
			// Initialize cURL
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $api_url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET',
				CURLOPT_HTTPHEADER => array(
					'Cookie: PHPSESSID=91k324u6bdpvt9kr8jgoonbjk6'
				),
			));

			// Execute and close
			$response = curl_exec($curl);
			print_r($response);
			if (curl_errno($curl)) {
				echo 'Curl Error: ' . curl_error($curl);
			} else {
				echo "OTP Sent Successfully<br>";
				echo "Mobile: $mobile2<br>";
				echo "OTP: $otp<br>";
				echo "Response: $response";
			}
			curl_close($curl);
		} else {
			echo "Invalid mobile number format.";
		}
	}


	public function login()
	{
		if(!isset($_SESSION['user_id']))
		{
			$this->ov("login");
		}else{
			$this->my_account();
		}
	}







	// Rohan Start
	public function my_orders()
	{
		$page_no = 1;
		$show = "";
		extract($_GET);
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			$search_term = $this->db->escape_like_str($_GET['q']);
			$show .= "AND (
				order_tbl.payment_type LIKE '%{$search_term}%'
				OR order_tbl.cust_city LIKE '%{$search_term}%'
				OR order_tbl.order_charges LIKE '%{$search_term}%'
				OR order_tbl.sub_total_amount LIKE '%{$search_term}%'
				OR order_tbl.order_date LIKE '%{$search_term}%'
				OR order_tbl.pay_status LIKE '%{$search_term}%'
				OR order_tbl.c_mobile LIKE '%{$search_term}%'
				OR order_tbl.pay_date_time LIKE '%{$search_term}%'
				OR order_tbl.cust_pincode LIKE '%{$search_term}%'
			)";
		}
		$total_rows = $this->db->query("SELECT COUNT(order_tbl.order_tbl_id) AS ttl_rows FROM customers,order_tbl WHERE order_tbl.status='active' AND order_tbl.customers_id=customers.customers_id AND customers.status='active' AND customers.customers_id='" . $_SESSION['user_id'] . "' " . $show . "")->result_array()[0]['ttl_rows'];

		$per_page = 50;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;

		$data['order'] = $this->db->query("SELECT * FROM customers,order_tbl WHERE order_tbl.status='active' AND order_tbl.customers_id=customers.customers_id AND customers.status='active' AND customers.customers_id='" . $_SESSION['user_id'] . "' " . $show . " ORDER BY order_tbl.order_tbl_id DESC LIMIT " . $data['start'] . " , " . $per_page)->result_array();
		// echo $this->db->last_query();
		foreach ($data['order'] as $key => $row) {
			$data['order'][$key]['order_det'] = $this->db->query("SELECT * FROM product_gold,ordered_product WHERE ordered_product.prod_gold_id = product_gold.prod_gold_id AND ordered_product.status='active' AND ordered_product.order_tbl_id='" . $row['order_tbl_id'] . "'  ")->result_array();
			$ttlProducts = get_table_count('ordered_product', [
				'status' => 'active',
				'order_tbl_id' => $row['order_tbl_id']
			]);

			$data['order'][$key]['ttlProducts'] = $ttlProducts;
		}


		$this->ov("my_orders", $data);
	}

	public function order_info($id)
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);

		$data['order'] = $this->db->query("SELECT * FROM customers,order_tbl WHERE order_tbl.status='active' AND order_tbl.customers_id=customers.customers_id AND customers.status='active' AND order_tbl.order_tbl_id='" . $id . "' ")->result_array();
		$data['order_det'] = $this->db->query("SELECT * FROM product_gold,ordered_product WHERE ordered_product.prod_gold_id = product_gold.prod_gold_id AND ordered_product.status='active' AND ordered_product.order_tbl_id='" . $id . "'  ")->result_array();
		foreach ($data['order'] as $key => $row) {
			$ttlProducts = get_table_count('ordered_product', [
				'status' => 'active',
				'order_tbl_id' => $row['order_tbl_id']
			]);

			$data['order'][$key]['ttlProducts'] = $ttlProducts;
		}

		$this->ov("order_info", $data);
	}
	public function update_invoiceId()
	{
		$data = $this->My_model->select_where("order_tbl", ['status' => 'active']);
		foreach ($data as $row) {
			$d =  date('Ymd', $row['order_time']);
			$invoice_id = date('Ymd') . str_pad($row['order_tbl_id'], 5, '0', STR_PAD_LEFT);
			echo $invoice_id . "<br>";
			$this->My_model->update("order_tbl", ['order_tbl_id' => $row['order_tbl_id']], ['cOrderId' => $invoice_id]);
		}
		echo json_encode($data);
	}
	// order_view
	public function order_view($id)
	{
		$data['order_details'] = $this->db->query("SELECT * FROM order_tbl,product_gold,ordered_product WHERE ordered_product.order_tbl_id = order_tbl.order_tbl_id AND ordered_product.prod_gold_id = product_gold.prod_gold_id AND order_tbl.status = 'active' AND product_gold.status = 'active' AND ordered_product.status = 'active' AND ordered_product.order_tbl_id = '" . $id . "'")->result_array();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit;
		$this->ov("order_view", $data);
	}

	// public function product_details_filter(){
	// 		// Age Category Filter
	// 	// 	$ageQ = '';
	// 	// 	if (isset($_GET['age_cat']) && $_GET['age_cat'] != 'all') {
	// 	// 		$ageQ = 'AND product_gold.age_category = "' . $_GET['age_cat'] . '"';
	// 	// 	}

	// 	// 	if (isset($_GET['g_id'])) {
	// 	// 		$ageQ .= "AND product_gold.group_id = '" . $_GET['g_id'] . "'";
	// 	// 	}

	// 	// 	if (!isset($_GET['cat_id'])) {
	// 	// 		if (isset($_GET['label'])) {
	// 	// 			if ($_GET['label'] != 'Gift') {
	// 	// 				// $_GET['cat_id'] = 5;
	// 	// 			}
	// 	// 		} else {
	// 	// 			$_GET['cat_id'] = 5;
	// 	// 		}
	// 	// 	}

	// 	// 	$page_no = 1;
	// 	// 	$per_page = 20;
	// 	// 	$search = $_GET['q'] ?? '';

	// 	// 	// Search Conditions
	// 	// 	$show = " AND (
	// 	// 	product_gold.product_details LIKE '%" . $search . "%' OR
	// 	// 	category.category_name LIKE '%" . $search . "%' OR
	// 	// 	product_gold.product_name LIKE '%" . $search . "%'
	// 	// )";

	// 	// 	if (isset($_GET['g_id'])) {
	// 	// 		$gId = "AND product_group.product_group_id = '" . $_GET['g_id'] . "'";
	// 	// 		$pgId = "AND product_gold.group_id = '" . $_GET['g_id'] . "'";
	// 	// 	} else {
	// 	// 		$gId = " ";
	// 	// 		$pgId = " ";
	// 	// 	}
	// 	// 	// Count total rows
	// 	// 	$total_rows = $this->db->query("
	// 	// 	SELECT COUNT(product_gold.prod_gold_id) AS ttl_rows
	// 	// 	FROM category, product_gold
	// 	// 	WHERE product_gold.cat_id = category.category_id
	// 	// 	AND product_gold.status = 'active'
	// 	// 	$show $ageQ
	// 	// ")->result_array()[0]['ttl_rows'];

	// 	// 	// Pagination
	// 	// 	$data['start'] = $per_page * $page_no - $per_page;
	// 	// 	$data['ttl_pages'] = ceil($total_rows / $per_page);
	// 	// 	$data['page_no'] = $page_no;

	// 	// 	// Get products
	// 	// 	$products = $this->db->query(
	// 	// 		"
	// 	// 	SELECT * FROM category, product_gold
	// 	// 	WHERE product_gold.cat_id = category.category_id
	// 	// 	AND product_gold.status = 'active'
	// 	// 	$show $ageQ $pgId
	// 	// 	ORDER BY product_gold.prod_gold_id DESC
	// 	// 	LIMIT " . $data['start'] . "," . $per_page
	// 	// 	)->result_array();

	// 	// 	// Get categories and product groups
	// 	// 	$data['category'] = $this->My_model->select_where("category", ['category_id' => $_GET['cat_id'], 'status' => 'active']);


	// 	// 	$data['product_group'] = $this->db->query("
	// 	// 	SELECT category.*, product_group.*, product_group.product_group_id 
	// 	// 	FROM category, product_gold, product_group 
	// 	// 	WHERE category.category_id = product_gold.cat_id 
	// 	// 	AND product_gold.status = 'active' 
	// 	// 	AND product_group.status = 'active' 
	// 	// 	AND category.category_id = '" . $_GET['cat_id'] . "'
	// 	// 	AND product_gold.group_id = product_group.product_group_id 
	// 	// 	" . $gId . "
	// 	// 	GROUP BY product_group.product_group_id
	// 	// ")->result_array();

	// 	// 	// Filtered products result
	// 	// 	$filtered_products = [];

	// 	// 	foreach ($products as $row) {
	// 	// 		// Fetch filters
	// 	// 		$fil = $this->db->query("SELECT * FROM product_filter WHERE status='active' AND prod='" . $row['prod_gold_id'] . "'")->result_array();
	// 	// 		$ft = '';
	// 	// 		$ff = '';
	// 	// 		foreach ($fil as $frow) {
	// 	// 			if (strpos($ft, $frow['filter_title']) === false) {
	// 	// 				$ft .= "ftitle" . $frow['filter_title'] . " ";
	// 	// 			}
	// 	// 			$ff .= "fname" . $frow['filter_name'] . " ";
	// 	// 		}

	// 	// 		$row['ft'] = $ft;
	// 	// 		$row['ff'] = $ff;
	// 	// 		$row['cart'] = "No";

	// 	// 		// Calculate product price
	// 	// 		$price = 0;
	// 	// 		if ($row['cat_id'] == 5) {
	// 	// 			$price = $this->goldprice($row['prod_gold_id']);
	// 	// 		} elseif ($row['cat_id'] == 6) {
	// 	// 			$price = $this->silverprice($row['prod_gold_id']);
	// 	// 		} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dgold') {
	// 	// 			$price = $this->golddiamondprice($row['prod_gold_id']);
	// 	// 		} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dsilver') {
	// 	// 			$price = $this->silverdiamondprice($row['prod_gold_id']);
	// 	// 		}

	// 	// 		$row['price'] = $price;
	// 	// 		$row['rating'] = (int) $row['rating'];

	// 	// 		// $row['total_discount_amt'] = 2000;
	// 	// 		if ($row['total_discount_amt'] > 0) {
	// 	// 			$row['original_price'] = $row['price'];
	// 	// 			$row['discount_amount'] = $row['total_discount_amt'];
	// 	// 			$row['discounted_price'] = $row['price'] - $row['total_discount_amt'];
	// 	// 			$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
	// 	// 			$row['formatted_discounted_price'] = '₹ ' . number_format1($row['discounted_price']);
	// 	// 		} else {
	// 	// 			$row['original_price'] = $row['price'];
	// 	// 			$row['discount_amount'] = 0;
	// 	// 			$row['discounted_price'] = 0;
	// 	// 			$row['formatted_discounted_price'] = '₹ ' . number_format1($row['price']);
	// 	// 			$row['formatted_original_price'] = '₹ ' . number_format1($row['price']);
	// 	// 		}
	// 	// 		$row['imgs'] = explode('||', $row['product_image']);

	// 	// 		// Apply min and max amount filter
	// 	// 		$valid = true;
	// 	// 		if (isset($_GET['min_amt']) && $row['price'] < $_GET['min_amt']) {
	// 	// 			$valid = false;
	// 	// 		}
	// 	// 		if (isset($_GET['max_amt']) && $row['price'] > $_GET['max_amt']) {
	// 	// 			$valid = false;
	// 	// 		}

	// 	// 		if ($valid) {
	// 	// 			$filtered_products[] = $row;
	// 	// 		}
	// 	// 	}

	// 	// 	// echo "<pre>";
	// 	// 	// print_r($filtered_products);
	// 	// 	// exit;
	// 	// 	$data['categories'] = $this->My_model->select_where("category", ['status' => 'active']);

	// 	// 	$data['product_groupes'] = $this->My_model->select_where("product_group", ['status' => 'active']);
	// 	// 	$data['products'] = $filtered_products;

	// 	$ageQ = '';
	// 	if (isset($_GET['age_cat']) && $_GET['age_cat'] != 'all') {
	// 		$ageQ = 'AND product_gold.age_category = "' . $_GET['age_cat'] . '"';
	// 	}

	// 	if(isset($_GET['g_id']))
	// 	{
	// 		$ageQ .= "AND product_gold.group_id = '".$_GET['g_id']."'";
	// 	}

	// 	if (!isset($_GET['cat_id'])) {
	// 				if (isset($_GET['label'])) {
	// 					if ($_GET['label'] != 'Gift') {
	// 						// $_GET['cat_id'] = 5;
	// 					}
	// 				} else {
	// 					$_GET['cat_id'] = 5;
	// 				}
	// 			}

	// 	$page_no = 1;
	// 	$per_page = 20;
	// 	$search = $_GET['q'] ?? '';

	// 	// Search Conditions
	// 	$show = " AND (
	// 		product_gold.product_details LIKE '%" . $search . "%' OR
	// 		category.category_name LIKE '%" . $search . "%' OR
	// 		product_gold.product_name LIKE '%" . $search . "%'
	// 	)";

	// 	if(isset($_GET['g_id']))
	// 	{
	// 		$gId = "AND product_group.product_group_id = '".$_GET['g_id']."'";
	// 		$pgId = "AND product_gold.group_id = '".$_GET['g_id']."'";
	// 	}else{
	// 		$gId = " "; 
	// 		$pgId = " ";
	// 	}
	// 	// Count total rows
	// 	$total_rows = $this->db->query("
	// 		SELECT COUNT(product_gold.prod_gold_id) AS ttl_rows
	// 		FROM category, product_gold
	// 		WHERE product_gold.cat_id = category.category_id
	// 		AND product_gold.status = 'active'
	// 		$show $ageQ
	// 	")->result_array()[0]['ttl_rows'];

	// 	// Pagination
	// 	$data['start'] = $per_page * $page_no - $per_page;
	// 	$data['ttl_pages'] = ceil($total_rows / $per_page);
	// 	$data['page_no'] = $page_no;

	// 	// Get products
	// 	$products = $this->db->query("
	// 		SELECT * FROM category, product_gold
	// 		WHERE product_gold.cat_id = category.category_id
	// 		AND product_gold.status = 'active'
	// 		$show $ageQ $pgId
	// 		ORDER BY product_gold.prod_gold_id DESC
	// 		LIMIT " . $data['start'] . "," . $per_page
	// 	)->result_array();

	// 	// Get categories and product groups
	// 	$data['category'] = $this->My_model->select_where("category", ['category_id' => $_GET['cat_id'],'status' => 'active']);


	// 	$data['product_group'] = $this->My_model->select_where("product_group", ['status' => 'active']);

	// 	$filtered_products = [];

	// 	foreach ($products as $row) {
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

	// 	$data['products'] = $filtered_products;
	// 	// echo "<pre>";
	// 	// print_r($data);
	// 	// exit;
	// 	$this->ov("product_details_filter",$data);
	// }

	public function product_details_filter()
	{
		$ageQ = '';
		if (isset($_GET['age_cat']) && $_GET['age_cat'] != 'all') {
			$ageQ = 'AND product_gold.age_category = "' . $_GET['age_cat'] . '"';
		}
		// Restore group_id filter: if g_id is present, filter by group_id
		if (isset($_GET['g_id']) && $_GET['g_id'] != '') {
			$g_id = $_GET['g_id'];
			if (is_array($g_id)) {
				$g_id_str = implode(',', $g_id);
			} else {
				$g_id_str = $g_id;
			}
			$ageQ .= " AND product_gold.group_id IN ('" . str_replace(',', "','", $g_id_str) . "')";
			$_GET['g_id'] = $g_id_str; // Ensure view always gets string
		}
		// Remove default cat_id logic
		// if (!isset($_GET['cat_id'])) {
		//     if (isset($_GET['label'])) {
		//         if ($_GET['label'] != 'Gift') {
		//             // $_GET['cat_id'] = 5;
		//         }
		//     } else {
		//         $_GET['cat_id'] = 5;
		//     }
		// }
		$catQ = '';
		if (isset($_GET['cat_id']) && $_GET['cat_id'] != '') {
			$catQ = ' AND product_gold.cat_id = "' . $_GET['cat_id'] . '"';
		}
		$page_no = isset($_GET['page_no']) ? intval($_GET['page_no']) : 1;
		$per_page = 21;
		$search = $_GET['q'] ?? '';
		// Search Conditions
		$show = " AND ( product_gold.product_details LIKE '%" . $search . "%' OR category.category_name LIKE '%" . $search . "%' OR product_gold.product_name LIKE '%" . $search . "%')";
		$gId = " ";
		$pgId = " ";
		// Count total rows
		$total_rows = $this->db->query("SELECT COUNT(product_gold.prod_gold_id) AS ttl_rows FROM category, product_gold WHERE product_gold.cat_id = category.category_id AND product_gold.status = 'active' $catQ $show $ageQ")->result_array()[0]['ttl_rows'];
		// Pagination
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = ceil($total_rows / $per_page);
		$data['page_no'] = $page_no;
		// Get products
		$products = $this->db->query(
			"SELECT * FROM category, product_gold WHERE product_gold.cat_id = category.category_id AND product_gold.status = 'active' $catQ $show $ageQ $pgId ORDER BY product_gold.prod_gold_id DESC LIMIT " . $data['start'] . "," . $per_page
		)->result_array();
		// print_r($_GET);
		// exit;
		// Get categories and product groups
		$data['category'] = $this->My_model->select_where("category", ['category_id' => $_GET['cat_id'], 'status' => 'active']);
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
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit;
		$this->ov("product_details_filter", $data);
	}
	public function show_special_product()
	{

		$data['products'] = [];

		if (isset($_GET['special_days_id'])) {
			$data['products'] = $this->db->query("SELECT * FROM product_gold, special_days WHERE product_gold.special_days_id = special_days.special_days_id AND special_days.status = 'active' AND product_gold.special_days_id != '' AND product_gold.label != 'Out Of Stock' AND product_gold.special_days_id LIKE '%" . $_GET['special_days_id'] . "%'")->result_array();
			if (!empty($data['products'])) {
				foreach ($data['products'] as $key => $row) {
					// Determine price based on category
					if ($row['cat_id'] == 5) {
						$price = $this->goldprice($row['prod_gold_id']);
						$discount_price = $this->discountgoldprice($row['prod_gold_id']);
					} elseif ($row['cat_id'] == 6) {
						$price = $this->silverprice($row['prod_gold_id']);
						$discount_price = $this->discountsilverprice($row['prod_gold_id']);
					} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dgold') {
						$price = $this->golddiamondprice($row['prod_gold_id']);
					} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dsilver') {
						$price = $this->silverdiamondprice($row['prod_gold_id']);
					}

					// Assign price and discount values to products
					$data['products'][$key]['price'] = $price;
					$data['products'][$key]['discount_price'] = $discount_price;

					// Convert rating to an integer
					if (isset($data['products'][$key]['rating'])) {
						$data['products'][$key]['rating'] = (int)$data['products'][$key]['rating'];
					} else {
						$data['products'][$key]['rating'] = 0;
					}
					$data['products'][$key]['cart'] = "No";
					if (isset($_SESSION['user_id'])) {
						if (isset($this->My_model->select_where('user_cart', ['user_id' => $_SESSION['user_id'], 'prod_id' => $row['prod_gold_id'], 'status' => 'pending'])[0]))
							$data['products'][$key]['cart'] = "Yes";
					}
				}
			}
		} else {
			$data['products'] = $this->db->query("SELECT * FROM product_gold, special_days WHERE product_gold.special_days_id = special_days.special_days_id AND special_days.status = 'active' AND product_gold.special_days_id != '' AND product_gold.label != 'Out Of Stock'")->result_array();
			if (!empty($data['products'])) {
				foreach ($data['products'] as $key => $row) {
					// Determine price based on category
					if ($row['cat_id'] == 5) {
						$price = $this->goldprice($row['prod_gold_id']);
						$discount_price = $this->discountgoldprice($row['prod_gold_id']);
					} elseif ($row['cat_id'] == 6) {
						$price = $this->silverprice($row['prod_gold_id']);
						$discount_price = $this->discountsilverprice($row['prod_gold_id']);
					} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dgold') {
						$price = $this->golddiamondprice($row['prod_gold_id']);
					} elseif ($row['cat_id'] == 8 && $row['entry_type'] == 'dsilver') {
						$price = $this->silverdiamondprice($row['prod_gold_id']);
					}

					// Assign price and discount values to products
					$data['products'][$key]['price'] = $price;
					$data['products'][$key]['discount_price'] = $discount_price;

					// Convert rating to an integer
					if (isset($data['products'][$key]['rating'])) {
						$data['products'][$key]['rating'] = (int)$data['products'][$key]['rating'];
					} else {
						$data['products'][$key]['rating'] = 0;
					}
					$data['products'][$key]['cart'] = "No";
					if (isset($_SESSION['user_id'])) {
						if (isset($this->My_model->select_where('user_cart', ['user_id' => $_SESSION['user_id'], 'prod_id' => $row['prod_gold_id'], 'status' => 'pending'])[0]))
							$data['products'][$key]['cart'] = "Yes";
					}
				}
			}
		}

		$this->ov("products", $data);
	}


	public function save_review()
	{
		if (isset($_FILES['review_img']) && $_FILES['review_img']['error'] === UPLOAD_ERR_OK) {
			$imgtemp = $_FILES['review_img']['tmp_name'];
			$imgname = basename($_FILES['review_img']['name']);
			$path = "uploads/";

			$fileType = mime_content_type($imgtemp);

			if (strpos($fileType, 'image/') === 0) {
				$allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
				$ext = strtolower(pathinfo($imgname, PATHINFO_EXTENSION));

				if (in_array($ext, $allowedExt)) {
					$newFileName = uniqid("img_") . "." . $ext;

					if (move_uploaded_file($imgtemp, $path . $newFileName)) {
						$_POST['review_img'] = $newFileName;
					} else {
						echo "Failed to upload image.";
					}
				} else {
					echo "Invalid image extension.";
				}
			} else {
				echo "Only image files are allowed.";
			}
		}


		$_POST['user_id'] = $_SESSION['user_id'] ?? '';
		$_POST['status'] = 'active';
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date("Y-m-d");

		if (!empty($_SESSION['user_id'])) {

			$reviews = $this->My_model->insert("review_tbl", $_POST);
			$prod_gold_id = $_POST['prod_gold_id'];
			if ($reviews && $prod_gold_id) {
				$this->setToastMessage("Review submitted successfully", "success");
				redirect(base_url("user/product_details/" . $prod_gold_id));
			} else {
				$this->setToastMessage("Review submission failed", "error");
				redirect(base_url("user/product_details/" . $prod_gold_id));
			}
		} else {
			$this->setToastMessage("Please login to submit review", "error");
			redirect(base_url("user/login"));
		}
	}
	// my_address
	public function my_address()
	{
		// Check if user is logged in
		if (!isset($_SESSION['user_id'])) {
			redirect(base_url('user/login'));
		}

		$data['customer_details'] = $this->My_model->select_where("customers", ['status' => 'active', 'customers_id' => $_SESSION['user_id']]);
		$data['address'] = $this->My_model->select_where("customer_address", ['status' => 'active', 'customers_id' => $_SESSION['user_id']]);

		// Ensure customer_details is an array and has at least one element
		if (empty($data['customer_details'])) {
			$this->setToastMessage("Customer details not found", "error");
			redirect(base_url('user/login'));
		}

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit;

		$this->ov("my_address", $data);
	}

	// Add new address via AJAX
	public function add_new_address()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$pincode = $this->input->post('pincode');

			if (!empty($address) && !empty($city) && !empty($pincode)) {
				$data = [
					'customers_id' => $_SESSION['user_id'],
					'address' => $address,
					'city' => $city,
					'pincode' => $pincode,
					'default_address' => 'no',
					'status' => 'active',
					'entry_time' => time(),
					'entry_date' => date('Y-m-d')
				];

				$result = $this->My_model->insert('customer_address', $data);

				if ($result) {
					echo json_encode(['status' => 'success', 'message' => 'Address added successfully']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to add address']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'Please fill all fields']);
			}
		}
	}

	// Set default address via AJAX
	public function set_default_address()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$address_id = $this->input->post('address_id');
			$is_default = $this->input->post('is_default');

			// First, set all addresses to non-default
			$this->My_model->update(
				'customer_address',
				['default_address' => 'no'],
				['customers_id' => $_SESSION['user_id']]
			);

			// Then set the selected address as default if checkbox is checked
			if ($is_default == 'true' || $is_default === true) {
				$this->My_model->update(
					'customer_address',
					['default_address' => 'yes'],
					['customer_address_id' => $address_id, 'customers_id' => $_SESSION['user_id']]
				);
			}

			echo json_encode(['status' => 'success']);
		}
	}

	public function delete_address($id)
	{

		$this->db->where('customer_address_id', $id);
		$this->db->set('status', 'deleted');
		$result = $this->db->update('customer_address');
		// $this->My_model->update("admin_tbl", ["admin_tbl_id" => $admin_id], ['status' => 'deleted']);

		if ($result) {
			// $this->session->setToastMessage('success', 'Address deleted successfully');
			redirect(base_url('user/my_address'));
		} else {
			// $this->session->setToastMessage('error', 'Failed to delete address');
			redirect(base_url('user/my_address'));
		}
	}
	public function save_blog_comment()
	{
		$data = $this->My_model->select("web_contact_details");
		if (isset($_SESSION['user_id']))
			$_POST['user_id'] = $_SESSION['user_id'];

		unset($_POST['auto_approve']);
		$_POST['status'] = 'active';
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date("Y-m-d");
		$_POST['author'] = strip_tags($_POST['author']);
		$_POST['email'] = strip_tags($_POST['email']);
		$_POST['mobile'] = strip_tags($_POST['mobile']);
		$_POST['comment'] = strip_tags($_POST['comment']);
		// print_r($_POST);
		// exit;

		$data = $this->My_model->insert("blog_comments", $_POST);

		// $a_hed = "New Comment On Your Blog";
		// $a_msg = "New Comment On Blog For You<br> From : " . $_POST['author'] . " <br> Email : " . $_POST['email'] . " <br> Mobile : " . $_POST['mobile'] . "<br>Comment<br>" . $_POST['comment'] . "<br><br><br><h2>Blog Link</h2><br>" . base_url() . "/index/view_blog/" . $_POST['blog_id'];
		// $this->send_mail($data[0]['email1'], $a_hed, $a_msg);

		// $c_hed = "Shingavi Jewellers";

		// $c_msg = "<h1>Thanks For Comment Us..</h1> We Will Stay Updated For You..";

		// $this->send_mail($_POST['email'], $c_hed, $c_msg);
		$this->session->set_flashdata('msg', 'Added successfully');
		redirect(base_url() . 'user/view_blog/' . $_POST['blog_id'], 'refresh');
	}
	// public function send_mail($email, $subject, $message)
	// {
	// 	require_once("plugins/PHPMailerAutoload.php");
	// 	$mail = new PHPMailer;
	// 	$mail->SMTPOptions = array(
	// 		'ssl' => array(
	// 			'verify_peer' => false,
	// 			'verify_peer_name' => false,
	// 			'allow_self_signed' => true,
	// 		),
	// 	);
	// 	$mail->isSMTP(); // Set mailer to use SMTP
	// 	$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
	// 	$mail->SMTPAuth = true;
	// 	$mail->SMTDebug = 2;
	// 	$from_label = "Shingavi Jewellers";
	// 	$mail->Username = 'nilbor407@gmail.com'; // SMTP username
	// 	$mail->Password = '95030771'; // SMTP password
	// 	$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
	// 	$mail->Port = 465;
	// 	$mail->setFrom('nilbor407@gmail.com', 'Shingavi Jewellers');
	// 	$mail->addAddress($email);
	// 	$mail->isHTML(true);
	// 	$mail->Subject = $subject;
	// 	$mail->Body = $message;
	// 	$mail->AltBody = strip_tags($message);
	// 	if ($mail->send()) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }
}
