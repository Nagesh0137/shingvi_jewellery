<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Admin extends CI_Controller
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
		$this->load->helper('helper_helper');
		$this->load->helper('menu');
		// $this->load->helper('mail');
		$this->load->library('form_validation');
		$this->load->library('session');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		$this->load->config('navbar_urls');
		$this->navbar = $this->config->item('navbar');

		$this->check_permissions();
		date_default_timezone_set('Asia/Kolkata');
		if (!isset($_SESSION['admin_id'])) {
			redirect(base_url() . 'login', 'refresh');
		}
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
	private function check_permissions()
	{
		// admin_navbar
		$current_method = $this->router->fetch_method();
		$permission = false;
		$url_match = false;

		$all_urls = $this->My_model->select_where("admin_permission_urls", ["status" => "active"]);
		$all_urls = array_column($all_urls, "admin_permission_url");
		$_SESSION['admin_position_id'] = isset($_SESSION['admin_position_id']) ? $_SESSION['admin_position_id'] : 0;
		if (isset($_SESSION['admin_position_id'])) {
			if (in_array($current_method, $all_urls)) {
				$url_match = true;
				$permission = $this->db->query("SELECT * FROM admin_permission_urls,admin_permission,admin_position WHERE admin_permission_urls.admin_permission_urls_id = admin_permission.admin_permission_urls_id AND admin_position.admin_position_id = admin_permission.admin_position_id AND admin_permission_urls.admin_permission_url = '$current_method' AND admin_permission_urls.status = 'active' AND admin_position.status = 'active' AND admin_position.admin_position_id = '" . $_SESSION['admin_position_id'] . "'")->result_array();
				if (isset($permission[0])) {
					$permission = true;
				}
			}

			if (!$permission && $url_match) {
				redirect(base_url() . 'login/logout');

				// show_error('You do not have permission to access this page <a href="' . base_url() . 'login/logout">Login Again</a>', 403, 'Forbidden');
			}
		} else {
			redirect(base_url() . 'login/logout');
		}
	}
	public function admin()
	{
		$data['positions'] = $this->My_model->select_where("admin_position", ['status' => 'active']);
		$data['admin_data'] = $this->My_model->select_where("admin_tbl", ['status' => 'active']);
		$this->ov("admin", $data);
	}
	public function add_admin()
	{
		$mobile = $this->input->post('admin_mobile_no');
		$password = $this->input->post('admin_password');
		$existingAdmin = $this->My_model->select_where("admin_tbl", ['admin_mobile_no' => $mobile]);
		$existingpassword = $this->My_model->select_where("admin_tbl", ['admin_password' => $password]);
		if (!empty($existingAdmin)) {
			redirect('admin/admin');
			return;
		}

		if ($_FILES['admin_profile_logo']['name'] != "") {
			$imgname = $_FILES['admin_profile_logo']['name'];
			$imgtemp = $_FILES['admin_profile_logo']['tmp_name'];
			$path = "uploads/";
			$_POST['admin_profile_logo'] = $this->upload_img($imgname, $imgtemp, $path);
		}
		// Proceed to save the new admin
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['last_modified_date'] = date('Y-m-d');
		$_POST['status'] = 'active';
		// print_r($_POST);
		// exit;
		$this->My_model->insert("admin_tbl", $_POST);
		redirect('admin/admin');
	}

	public function admin_list()
	{
		$this->head();
		$this->nav();
		$data['admin_data'] = $this->My_model->select_where("admin_tbl", ['status' => 'active']);
		$this->load->view("admin/admin_list", $data);
		$this->footer();
	}
	public function edit_admin($admin_id)
	{

		$data['positions'] = $this->My_model->select_where("admin_position", ['status' => 'active']);
		$data['admin_det'] = $this->My_model->select_where("admin_tbl", ['admin_tbl_id' => $admin_id, 'status' => 'active'])[0];
		$this->ov("edit_admin", $data);
	}
	public function update_admin()
	{
		if ($_FILES['admin_profile_logo']['name'] != "") {
			$imgname = $_FILES['admin_profile_logo']['name'];
			$imgtemp = $_FILES['admin_profile_logo']['tmp_name'];
			$path = "uploads/";
			$_POST['admin_profile_logo'] = $this->upload_img($imgname, $imgtemp, $path);
		} else {

			$_POST['admin_profile_logo'] = $_POST['admin_profile_logo1'];
		}
		unset($_POST['admin_profile_logo1']);

		$this->My_model->update("admin_tbl", ['admin_tbl_id' => $_POST['admin_tbl_id']], $_POST);

		redirect('admin/admin');
	}
	public function delete_admin($admin_id)
	{
		$this->My_model->update("admin_tbl", ["admin_tbl_id" => $admin_id], ['status' => 'deleted']);

		redirect('admin/admin');
	}

	public function admin_position()
	{
		$data["positions"] = $this->My_model->select_where("admin_position", ["status" => "active"]);
		$this->ov("admin_position", $data);
	}
	public function save_admin_position()
	{
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['status'] = 'active';
		$this->My_model->insert("admin_position", $_POST);
		redirect(base_url() . "admin/admin_position");
	}
	public function delete_position($admin_position_id)
	{
		$this->My_model->update("admin_position", ["admin_position_id" => $admin_position_id], ["status" => "deleted"]);
		redirect(base_url() . "admin/admin_position");
	}

	public function edit_position($id)
	{
		$data['position_det'] = $this->My_model->select_where("admin_position", ["admin_position_id" => $id]);
		redirect(base_url() . "admin/admin_position");
	}


	// admin_permission_url
	public function admin_permission_url()
	{
		$page_no = 1;
		$search = " ";
		extract($_GET);
		if (!isset($_GET['q'])) {
			$show = "";
		} else {
			$show = " AND (
            (customer_name LIKE '%" . $_GET['q'] . "%') 
        )";
		}

		$total_rows = $this->db->query("SELECT count(admin_permission_urls_id) as ttl_rows FROM admin_permission_urls WHERE status='active' " . $show)->result_array()[0]['ttl_rows'];
		$per_page = 20;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;
		$data['permission_urls'] = $this->db->query("SELECT * FROM admin_permission_urls WHERE status='active' " . $show . " ORDER BY admin_permission_urls_id DESC limit " . $data['start'] . "," . $per_page)->result_array();

		$this->ov('admin_permission_url', $data);
	}
	public function save_admin_permission_url()
	{

		if (!isset($this->My_model->select_where("admin_permission_urls", $_POST)[0])) {
			$_POST['entry_time'] = time();
			$_POST['entry_date'] = date('Y-m-d');
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$_POST['status'] = 'active';
			$this->My_model->insert("admin_permission_urls", $_POST);
		}
		redirect(base_url() . "admin/admin_permission_url");
	}
	public function delete_permission_url($admin_permission_url_id)
	{
		$this->My_model->update("admin_permission_urls", ["admin_permission_urls_id" => $admin_permission_url_id], ["status" => "deleted"]);
		redirect(base_url() . "admin/admin_permission_url");
	}
	public function permission_setup()
	{
		$data["permission_urls"] = $this->My_model->select_where_order("admin_permission_urls", ["status" => "active"], 'admin_permission_urls_id', 'DESC');
		$data["positions"] = $this->My_model->select_where("admin_position", ["status" => "active"]);
		$this->ov("permission_setup", $data);
	}
	public function set_admin_permission()
	{
		if (!isset($this->My_model->select_where("admin_permission", $_POST)[0])) {
			$_POST['entry_time'] = time();
			$_POST['entry_date'] = date('Y-m-d');
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$this->My_model->insert("admin_permission", $_POST);
		}
	}
	public function remove_admin_permission()
	{
		$this->My_model->delthis("admin_permission", $_POST);
	}


	function upload_img($imgname, $imgtemp, $path = "uploads/")
	{
		$fname = time() . rand(00000000, 99999999) . "." . explode(".", $imgname)[count(explode(".", $imgname)) - 1];
		$path1 = $path . $fname;
		move_uploaded_file($imgtemp, $path1);
		return $fname;
	}
	public function ov($page, $data = "")
	{
		$this->head();
		$this->nav();
		$this->load->view("admin/" . $page, $data);
		$this->footer();
	}
	public function head()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$data['admin_det'] = $this->My_model->select_where("admin_tbl", ['admin_tbl_id' => $_SESSION['admin_id']]);

		$this->load->view("admin/head", $data);
	}
	public function nav()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);

		$data['admin_det'] = $this->My_model->select_where("admin_tbl", ['admin_tbl_id' => $_SESSION['admin_id']]);
		$data['system_not'] = $this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("admin/nav", $data);
	}
	public function topnav()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$data['admin_det'] = $this->My_model->select_where("admin_tbl", ['admin_tbl_id' => $_SESSION['admin_id']])[0];
		$data['system_not'] = $this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("admin/topnav", $data);
	}
	public function footer()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['company_det_id' => '1'])[0];
		$this->load->view("admin/footer", $data);
	}
	public function index()
	{
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['company_det_id' => '1'])[0];
		$this->ov("index", $data);
	}
	public function profile()
	{
		// $data['det'] = $this->My_model->select_where("school_det", ['status' => 'active']);
		// $data['principal'] = $this->My_model->select_where("principal", ['principal_status' => 'current', 'status' => 'active']);
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$this->ov('profile', $data);
	}
	public function admin_profile()
	{
		$data['admin_det'] = $this->My_model->select_where("admin_tbl", ['admin_tbl_id' => $_SESSION['admin_id']]);
		// $data['det'] = $this->My_model->select_where("school_det", ['status' => 'active']);

		// $data['principal'] = $this->My_model->select_where("principal", ['principal_status' => 'current', 'status' => 'active']);

		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);
		$this->ov('admin_profile', $data);
	}
	public function company_details_update()
	{
		if ($_FILES['company_logo']['name'] != "") {
			$imgname = $_FILES['company_logo']['name'];
			$imgtemp = $_FILES['company_logo']['tmp_name'];
			$path = "uploads/";
			$_POST['company_logo'] = $this->upload_img($imgname, $imgtemp, $path);
			$path2 = "uploads/" . $_POST['company_logo1'];
			unlink($path2);
		} else {
			$_POST['company_logo'] = $_POST['company_logo1'];
		}
		unset($_POST['company_logo1']);
		$title = "Login Failed";
		$description = "Wrong Username or Password. Please try again.";
		$this->session->set_flashdata('success', 'Profile Updated successfully');

		$this->My_model->update("company_details_tbl", ['company_det_id' => $_POST['company_det_id']], $_POST);
		redirect('admin/profile', 'refresh');
	}
	public function update_admin_profile()
	{
		if ($_FILES['admin_profile_logo']['name'] != "") {
			$imgname = $_FILES['admin_profile_logo']['name'];
			$imgtemp = $_FILES['admin_profile_logo']['tmp_name'];
			$path = "uploads/";
			$_POST['admin_profile_logo'] = $this->upload_img($imgname, $imgtemp, $path);
			$path2 = "uploads/" . $_POST['admin_profile_logo1'];
			unlink($path2);
		} else {
			$_POST['admin_profile_logo'] = $_POST['admin_profile_logo1'];
		}
		unset($_POST['admin_profile_logo1']);
		$title = "Login Failed";
		$description = "Wrong Username or Password. Please try again.";
		$this->session->set_flashdata('success', 'Profile Updated successfully');

		$this->My_model->update("admin_tbl", ['admin_tbl_id' => $_POST['admin_tbl_id']], $_POST);
		redirect('admin/admin_profile', 'refresh');
	}





	private function setToastMessage($message, $color)
	{
		$_SESSION['toast_message'] = $message;
		$_SESSION['toast_color'] = $color;
	}
	public function ci_flashdata($type, $msg, $set = "yes")
	{
		$this->My_model->insert("system_notification", ['admin_id' => $_SESSION['admin_id'], 'type' => $type, 'msg' => $msg, 'sn_time' => time(), 'entry_date' => date('Y-m-d'), 'entry_time' => time(), 'status' => 'active']);
		if ($set == "yes")
			$this->session->set_flashdata($type, $msg);
	}



	public function array_to_csv_download($array, $filename = "export.csv", $delimiter = ";")
	{
		header('Content-Type: application/csv');
		header('Content-Disposition: attachment; filename="' . $filename . '";');

		$file = fopen("php://output", "w");
		$i = 0;
		foreach ($array as $key => $line) {
			if ($i == 0) {
				$arr = [];
				foreach ($line as $key2 => $value) {
					if ($key2 == "entry_time")
						$key2 = "Reg. Date";

					$arr[] = strtoupper(str_replace("_", " ", $key2));
				}
				fputcsv($file, $arr);
			}
			if (isset($line['entry_time'])) {
				$line['entry_time'] = date('d-m-Y', $line['entry_time']);
			}
			fputcsv($file, $line);
			$i++;
		}
		fclose($file);

		return true;
	}


	public function array_to_excel_download($array, $filename = "export.xlsx", $headline = "", $mergeColumns = ['start' => 'A', 'end' => 'M'])
	{
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		// Add headline row
		$sheet->setCellValue($mergeColumns['start'] . '1', $headline);
		$sheet->mergeCells($mergeColumns['start'] . '1:' . $mergeColumns['end'] . '1'); // Merge cells for the headline
		$sheet->getStyle($mergeColumns['start'] . '1')->getFont()->setSize(25); // Set font size
		$sheet->getStyle($mergeColumns['start'] . '1')->getFont()->setBold(true); // Set font bold
		$sheet->getStyle($mergeColumns['start'] . '1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER); // Center align
		// Set headline color
		$sheet->getStyle($mergeColumns['start'] . '1:' . $mergeColumns['end'] . '1')->applyFromArray([
			'font' => [
				'color' => ['argb' => 'FFFF0000'] // Red text color
			],
			'fill' => [
				'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
			]
		]);

		// Start from the second row for the actual data
		$rowNum = 2;

		$i = 0;
		foreach ($array as $key => $line) {
			if ($i == 0) {
				$col = 'A';
				foreach ($line as $key2 => $value) {
					if ($key2 == "entry_time")
						$key2 = "Reg. Date";

					$sheet->setCellValue($col . $rowNum, strtoupper(str_replace("_", " ", $key2)));
					$col++;
				}
				$sheet->getStyle('A2:' . $mergeColumns['end'] . '2')->getFont()->setBold(true);
				$sheet->getStyle('A2:' . $mergeColumns['end'] . '2')->getFont()->setSize(12);
				// Set background color for the second row
				$sheet->getStyle('A2:' . $mergeColumns['end'] . '2')->applyFromArray([
					'fill' => [
						'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
						'color' => ['argb' => 'FFF2CD'] // Red color
					]
				]);
				$rowNum++;
			}
			if (isset($line['entry_time'])) {
				$line['entry_time'] = date('d-m-Y', $line['entry_time']);
			}
			$col = 'A';
			foreach ($line as $value) {
				$sheet->setCellValue($col . $rowNum, $value);
				$col++;
			}
			$rowNum++;
			$i++;
		}

		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="' . $filename . '"');
		$writer->save("php://output");

		return true;
	}

	public function logout()
	{
		session_destroy();
		redirect('login', 'refresh');
	}




	/////////////////////////////////////////// shingvi_jewellery project start///////////////////////////////////////////////////////////////////////////

	public function watermark_image($target = "uploads/about-1606974153-75741.jpg", $wtrmrk_file = "image/logo3.png")
	{
		// Check if GD extension is loaded
		if (!extension_loaded('gd')) {
			die("Error: GD extension is not loaded. Please enable GD extension in php.ini");
		}

		// Check if required GD functions are available
		if (!function_exists('imagecreatefromjpeg')) {
			die("Error: GD image functions are not available. Please ensure GD extension is properly configured.");
		}

		// Validate file existence
		if (!file_exists($target)) {
			die("Error: Target image file does not exist.");
		}

		// Check if watermark file exists, if not try alternative paths
		if (!file_exists($wtrmrk_file)) {
			// Try alternative watermark paths
			$alternative_paths = [
				"assets/logo.png",
				"assets/logo1.png",
				"assest/small_logo.png",
				"sj_admin_assets/images/logo-light.png"
			];

			$watermark_found = false;
			foreach ($alternative_paths as $alt_path) {
				if (file_exists($alt_path)) {
					$wtrmrk_file = $alt_path;
					$watermark_found = true;
					break;
				}
			}

			if (!$watermark_found) {
				die("Error: Watermark file does not exist. Please ensure a watermark image is available.");
			}
		}

		// Get image type and create image resource accordingly
		$image_info = getimagesize($target);
		if ($image_info === false) {
			die("Error: Unable to get image information. The file may be corrupted or in an unsupported format.");
		}
		$image_mime = $image_info['mime'];

		// Check if AVIF is supported
		if ($image_mime === 'image/avif' && !function_exists('imagecreatefromavif')) {
			die("Error: AVIF format is not supported on your server.");
		}

		switch ($image_mime) {
			case 'image/jpeg':
				$img = imagecreatefromjpeg($target);
				break;
			case 'image/jpg':
				$img = imagecreatefromjpeg($target);
				break;
			case 'image/png':
				$img = imagecreatefrompng($target);
				break;
			case 'image/webp':
				$img = imagecreatefromwebp($target);
				break;
			case 'image/gif':
				$img = imagecreatefromgif($target);
				break;
			case 'image/avif':
				// Attempt to process AVIF only if supported
				if (function_exists('imagecreatefromavif')) {
					$img = imagecreatefromavif($target);
				} else {
					die("Error: Unable to process AVIF image, GD does not support this format.");
				}
				break;
			default:
				die("Error: Unsupported image format. Only JPG, PNG, WEBP, and GIF are allowed.");
		}

		// Handle watermark image creation safely
		$watermark = @imagecreatefrompng($wtrmrk_file);
		if (!$watermark) {
			die("Error: Failed to load watermark image.");
		}

		imagealphablending($watermark, false);
		imagesavealpha($watermark, true);

		// Get dimensions
		$img_w = imagesx($img);
		$img_h = imagesy($img);
		$wtrmrk_w = imagesx($watermark);
		$wtrmrk_h = imagesy($watermark);

		// Dynamic watermark resizing to fit any image size
		$scale_factor = 0.2;  // Adjust this to control watermark size relative to image
		$new_wtrmrk_w = $img_w * $scale_factor;
		$new_wtrmrk_h = ($wtrmrk_h / $wtrmrk_w) * $new_wtrmrk_w;

		// Resize watermark proportionally
		$resized_watermark = imagecreatetruecolor($new_wtrmrk_w, $new_wtrmrk_h);
		imagealphablending($resized_watermark, false);
		imagesavealpha($resized_watermark, true);
		imagecopyresampled($resized_watermark, $watermark, 0, 0, 0, 0, $new_wtrmrk_w, $new_wtrmrk_h, $wtrmrk_w, $wtrmrk_h);

		// Set watermark position based on the input
		$position = $_POST['position'] ?? 'Bottom_Center';
		switch ($position) {
			case "Bottom_Center":
				$dst_x = ($img_w - $new_wtrmrk_w) / 2;
				$dst_y = $img_h - $new_wtrmrk_h - 20;
				break;
			case "Top_Center":
				$dst_x = ($img_w - $new_wtrmrk_w) / 2;
				$dst_y = 20;
				break;
			case "Top_Left":
				$dst_x = 20;
				$dst_y = 20;
				break;
			case "Top_Right":
				$dst_x = $img_w - $new_wtrmrk_w - 20;
				$dst_y = 20;
				break;
			case "Bottom_Left":
				$dst_x = 20;
				$dst_y = $img_h - $new_wtrmrk_h - 20;
				break;
			case "Bottom_Right":
				$dst_x = $img_w - $new_wtrmrk_w - 20;
				$dst_y = $img_h - $new_wtrmrk_h - 20;
				break;
			default:
				$dst_x = ($img_w - $new_wtrmrk_w) / 2;
				$dst_y = $img_h - $new_wtrmrk_h - 20;
				break;
		}

		imagecopy($img, $resized_watermark, $dst_x, $dst_y, 0, 0, $new_wtrmrk_w, $new_wtrmrk_h);

		// Save image based on its original format
		switch ($image_mime) {
			case 'image/jpeg':
				imagejpeg($img, $target);
				break;
			case 'image/jpg':
				imagejpeg($img, $target, 100);
				break;
			case 'image/png':
				imagepng($img, $target);
				break;
			case 'image/webp':
				imagewebp($img, $target);
				break;
			case 'image/gif':
				imagegif($img, $target);
				break;
			case 'image/avif':
				imageavif($img, $target);
				break;
		}

		// Clean up
		imagedestroy($img);
		imagedestroy($watermark);
		imagedestroy($resized_watermark);
	}
	// ajax
	public function group_name_fetch()
	{
		echo json_encode($this->My_model->select_where("product_group", ['group_category' => $_POST['cat_id'], 'status' => 'active']));
	}
	public function caretratefecth()
	{
		$data = $this->db->query("SELECT * from rate_gold WHERE status='active' ORDER BY rate_gold_id DESC")->result_array()[0];
		echo json_encode($data);
	}

	public function filter_title_fetch()
	{
		$data = $this->db->query("SELECT * from filter_title WHERE status='active' AND cat_id='" . $_POST['cat_id'] . "' AND group_id='" . $_POST['group_id'] . "'")->result_array();
		echo json_encode($data);
	}

	public function filter_name_fetch()
	{
		$data = $this->db->query("SELECT * from filter_name WHERE status='active' AND cat_id='" . $_POST['cat_id'] . "' AND group_id='" . $_POST['group_id'] . "' AND filter_tit_id='" . $_POST['filter_tit_id'] . "'")->result_array();
		echo json_encode($data);
	}
	// add gold product
	public function add_gold_product()
	{
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$data['gender_category'] = $this->My_model->select_where("gender_category", ['status' => 'active']);
		$data['gst'] = $this->My_model->select_where("gst", ['status' => 'active']);
		$this->ov("add_gold_product", $data);
	}
	public function add_new_gold_product()
	{
		// print_r($_POST);
		// exit;

		if (isset($_FILES['size_guide'])) {
			if (!empty($_FILES['size_guide']['name'])) {
				$img_name = $_FILES['size_guide']['name'];
				$img_temp = $_FILES['size_guide']['tmp_name'];
				$path = "uploads/";
				$_POST['size_guide'] = $this->upload_img($img_name, $img_temp, $path);
			} else {
				$_POST['size_guide'] = '';
			}
		}

		$details = $this->My_model->select_where("product_gold", ['status' => 'active', 'product_id' => $_POST['product_id'], 'cat_id' => $_POST['cat_id']]);

		if (!empty($details) && count($details) > 0) {
			$this->ci_flashdata("error", "Gold product Already Exist...");
			redirect('admin/add_gold_product', 'refresh');
		} else {
			$data['cat_id'] = $_POST['cat_id'];
			$data['group_id'] = $_POST['group_id'];
			$data['caret'] = $_POST['caret'];
			$data['product_name'] = $_POST['product_name'];
			$data['product_details'] = $_POST['product_details'];
			$data['product_qty'] = $_POST['product_qty'];
			if ($_POST['gold_rate1'] != "") {
				$data['gold_rate'] = $_POST['gold_rate1'];
			} else {
				$data['gold_rate'] = $_POST['gold_rate'];
			}
			$data['product_id'] = $_POST['product_id'];
			$data['billing_type'] = $_POST['billing_type'];
			$data['filter_title'] = $_POST['filter_title'];
			$data['filter_name'] = $_POST['filter_name'];
			$data['cross_weight'] = $_POST['cross_weight'];
			$data['other_weight'] = $_POST['other_weight'];
			$data['net_weight'] = $_POST['net_weight'];
			$data['labour_char'] = $_POST['labour_char'];
			$data['wastage_per'] = $_POST['wastage_per'];
			$data['other_amt'] = $_POST['other_amt'];
			$data['gst_per'] = $_POST['gst_per'];
			$data['product_image'] = "";
			$data['fixed_amount'] = $_POST['fixed_amount'];
			$data['fixed_gst_per'] = $_POST['fixed_gst_per'];
			$data['fixed_gst_amt'] = $_POST['fixed_gst_amt'];
			$data['age_category'] = $_POST['age_category'];
			$data['ring_size'] = $_POST['ring_size'];
			$data['size_guide'] = $_POST['size_guide'];

			if ($_POST['billing_type'] == 'manual') {
				$data['total_discount_amt'] = $_POST['manual_total_discount_amt'];
				$data['final_amount_after_discount'] = $_POST['manual_final_amount_after_discount'];
				$data['fixed_total_amt'] = $_POST['manual_total_amt'];
			} else {
				$data['total_discount_amt'] = $_POST['total_discount_amt'];
				$data['final_amount_after_discount'] = $_POST['final_amount_after_discount'];
				$data['fixed_total_amt'] = $_POST['fixed_total_amt'];
			}

			if (!empty($_FILES['product_image']['name'][0])) {
				if (is_array($_FILES['product_image']['name'])) {
					$product_image_images = [];
					for ($i = 0; $i < count($_FILES['product_image']['name']); $i++) {
						$temp_name = $_FILES['product_image']['tmp_name'][$i];
						$file_name = time() . rand(1111, 9999) . "_" . $_FILES['product_image']['name'][$i];
						$uploaded_image = $this->upload_img($file_name, $temp_name, "uploads/");

						// Apply watermark after uploading
						$this->watermark_image("uploads/" . $uploaded_image, "image/logo3.png");

						$product_image_images[] = $uploaded_image;
					}
					$data['product_image'] = implode('||', $product_image_images);
				} else {
					$file_name = time() . rand(1111, 9999) . "_" . $_FILES['product_image']['name'];
					$temp_name = $_FILES['product_image']['tmp_name'];
					$uploaded_image = $this->upload_img($file_name, $temp_name, "uploads/");

					// Apply watermark after uploading
					$this->watermark_image("uploads/" . $uploaded_image, "image/logo3.png");

					$data['product_image'] = $uploaded_image;
				}
			}

			if ($_FILES['sizeChart']['name'] != "") {
				$ext = explode(".", $_FILES['sizeChart']['name'])[count(explode(".", $_FILES['sizeChart']['name'])) - 1];
				$img_name = "product-" . time() . "-" . rand(00000, 99999) . "." . $ext;
				$path = "uploads/";
				move_uploaded_file($_FILES['sizeChart']['tmp_name'], $path . $img_name);
				$_POST['sizeChart'] = $img_name;
				$data['sizeChart'] = $_POST['sizeChart'];
			}



			$data['status'] = "active";
			$data['entry_by'] = $_SESSION['admin_id'];
			$data['entry_time'] = time();
			$id = $this->My_model->insert("product_gold", $data);
			if ($id) {
				$n = count($_POST['other_desc_det']);
				for ($p = 0; $p < $n; $p++) {
					$res['product_gold_id'] = $id;
					$res['other_desc_det'] = $_POST['other_desc_det'][$p];
					$res['other_amt_det'] = $_POST['other_amt_det'][$p];
					$this->My_model->insert("product_gold_other_price_det", $res);
				}
			}
			$this->ci_flashdata("success", "New Gold product Add Successfully...");

			redirect('admin/add_new_gold_product_filter/' . $id . '/' . $_POST['cat_id'] . '/' . $_POST['group_id'], 'refresh');
		}
	}
	public function add_new_gold_product_filter($prod = "", $cat = "", $group = "")
	{
		$data['cat'] = $cat;
		$data['group'] = $group;
		$data['prod'] = $prod;
		$data['filter_title'] = $this->My_model->select_where("filter_title", ['status' => 'active', 'cat_id' => $cat, 'group_id' => $group]);
		$this->ov('add_new_gold_product_filter', $data);
	}
	public function save_new_gold_product_filter()
	{
		$cc = count($_POST['filter_title']);
		for ($i = 0; $i < $cc; $i++) {
			$c1 = count($_POST['filter_name'][$i]);
			for ($ii = 0; $ii < $c1; $ii++) {
				if ($_POST['filter_name'][$i][$ii] != "-") {
					$data = array(
						'prod' => $_POST['prod'],
						'cat' => $_POST['cat'],
						'group_id' => $_POST['group'],
						'filter_title' => $_POST['filter_title'][$i],
						'filter_name' => $_POST['filter_name'][$i][$ii],
						'status' => "active",
						'entry_by' => $_SESSION['admin_id'],
						'entry_time' => time(),
					);
					$this->My_model->insert('product_filter', $data);
				}
			}
		}
		$this->ci_flashdata("success", "Gold product Filter Add Successfully...");
		redirect('admin/add_gold_product', 'refresh');
	}

	public function search_gold_product_list()
	{
		$page_no = isset($_GET['page_no']) && is_numeric($_GET['page_no']) ? $_GET['page_no'] : 1;
		$per_page = 10;
		$search = isset($_GET['q']) ? $_GET['q'] : '';
		$group_id = isset($_GET['group_id']) ? $_GET['group_id'] : 'all';
		$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : null;
		$data['jadmin'] = $this;
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$show = "";
		if (!empty($search)) {
			$show = " AND (
				product_name LIKE '%" . $this->db->escape_like_str($search) . "%' 
				OR product_id LIKE '%" . $this->db->escape_like_str($search) . "%'
			)";
		}
		$sub_query = "";
		if ($group_id != 'all') {
			$sub_query .= " AND pg.cat_id='" . $this->db->escape_str($cat_id) . "' 
							AND pg.group_id='" . $this->db->escape_str($group_id) . "'";
		}
		$total_rows_query = "SELECT COUNT(pg.prod_gold_id) as ttl_rows FROM product_gold as pg JOIN category as c ON pg.cat_id = c.category_id 
							WHERE pg.status='active' AND c.category_name = 'gold' $sub_query $show";
		$total_rows = $this->db->query($total_rows_query)->row()->ttl_rows;
		$start = ($page_no - 1) * $per_page;
		$total_pages = ceil($total_rows / $per_page);
		$data['ttl_pages'] = $total_pages;
		$data['page_no'] = $page_no;
		$data['start'] = $start;
		$query = "SELECT * FROM product_gold as pg JOIN category as c ON pg.cat_id = c.category_id WHERE pg.status='active' AND c.category_name = 'gold' $sub_query $show ORDER BY pg.prod_gold_id DESC LIMIT $start, $per_page";
		$data['products'] = $this->db->query($query)->result_array();
		foreach ($data['products'] as $key => $row) {
			$check = $this->My_model->select_where("gold_product_offer", ['prod_gold_id' => $row['prod_gold_id'], 'status' => 'active']);
			if (!empty($check)) {
				foreach ($check as $value) {
					if (!isset($data['products'][$key]['offer_tbl'])) {
						$data['products'][$key]['offer_tbl'] = $value['offer_tbl_id'];
					} else {
						$data['products'][$key]['offer_tbl'] .= "," . $value['offer_tbl_id'];
					}
				}
			}
		}
		$data['offer_list'] = $this->My_model->select_where("offer_tbl", ['status' => 'active']);
		$data['total_pages'] = $total_pages;
		$data['current_page'] = $page_no;
		$data['per_page'] = $per_page;
		$data['total_rows'] = $total_rows;
		$this->ov('gold_product_list', $data);
	}

	// gold_product_list
	public function gold_product_list()
	{
		$page_no = 1;
		$search = "";
		extract($_GET);
		if (!isset($_GET['q'])) {
			$show = " ";
		} else {
			$show = " AND (
				 (product_name LIKE '%" . $_GET['q'] . "%') 
				 OR (product_id LIKE '%" . $_GET['q'] . "%') 
				 )
			 ";
		}
		$data['jadmin'] = $this;
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$total_rows = $this->db->query("SELECT count(pg.prod_gold_id) as ttl_rows FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'gold' " . $show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;
		$data['products'] = $this->db->query("SELECT * FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'gold' " . $show . "ORDER BY prod_gold_id ASC limit " . $data['start'] . "," . $per_page)->result_array();
		foreach ($data['products'] as $key => $row) {
			$check = $this->My_model->select_where("gold_product_offer", ['prod_gold_id' => $row['prod_gold_id'], 'status' => 'active']);
			if (!empty($check)) {

				foreach ($check as $value) {
					// $data['products'][$key]['offer_tbl'] = implode(",",$value['offer_tbl_id']);

					if (!isset($data['products'][$key]['offer_tbl'])) {
						$data['products'][$key]['offer_tbl'] = $value['offer_tbl_id'];
					} else {
						$data['products'][$key]['offer_tbl'] = $data['products'][$key]['offer_tbl'] . "," . $value['offer_tbl_id'];
					}
				}
			}
		}
		$data['special_days'] = $this->My_model->select_where("special_days", ['status' => 'active']);
		$data['offer_list'] = $this->My_model->select_where("offer_tbl", ['status' => 'active']);

		$this->ov('gold_product_list', $data);
	}

	public function download_gold_csv()
	{
		// Disable output buffering and clean any previous output
		if (ob_get_level()) {
			ob_end_clean();
		}

		// Turn off error reporting (to prevent hidden warnings in output)
		error_reporting(0);

		$search = "";
		extract($_GET); // Get any parameters passed in the query string

		// Default condition for filtering
		$show = " ";

		// Apply search filter if it exists
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			$show .= " AND (
            (product_name LIKE '%" . $_GET['q'] . "%') 
            OR (product_id LIKE '%" . $_GET['q'] . "%')
        )";
		}

		// Apply category filter if it exists
		if (isset($_GET['cat_id']) && !empty($_GET['cat_id'])) {
			$show .= " AND pg.cat_id = '" . intval($_GET['cat_id']) . "' ";
		}

		// Apply group filter if it exists
		if (isset($_GET['group_id']) && $_GET['group_id'] != 'all') {
			$show .= " AND pg.group_id = '" . intval($_GET['group_id']) . "' ";
		}

		// Fetch the products that match the filters
		$products = $this->db->query(
			"SELECT * 
         FROM product_gold as pg
         INNER JOIN category as c ON pg.cat_id = c.category_id
         WHERE pg.status = 'active'
         AND c.category_name = 'gold'
         " . $show . "
         ORDER BY prod_gold_id ASC"
		)->result_array();

		// Set headers for the CSV file
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=gold_products_' . date('d-m-Y') . '.csv');
		header('Pragma: no-cache');
		header('Expires: 0');

		// Open output stream
		$output = fopen('php://output', 'w');

		// Add UTF-8 BOM to fix UTF-8 issues in Excel
		fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

		// Output the CSV header row
		fputcsv($output, ['SRNO', 'Special Day', 'Group', 'Product', 'Product Id', 'Current Price', 'Quantity']);

		// Initialize serial number for CSV
		$serial_no = 1;

		// Loop through the fetched products and output them to CSV
		foreach ($products as $row) {
			$group = "";
			$group_info = $this->My_model->select_where("product_group", ['product_group_id' => $row['group_id']]);
			if (!empty($group_info)) {
				$group = $group_info[0]['product_group_name'];
			}

			// Get the price using the method `silverprice`
			$price = $this->silverprice($row['prod_gold_id']);
			$qty = $row['product_qty']; // Corrected the variable name

			// Handle special days
			if (!empty($row['special_days_id'])) {
				$special_ids = explode("||", $row['special_days_id']);
				$special_names = [];
				foreach ($special_ids as $sid) {
					$special_names[] = getspecialdays($sid);
				}
				$special_days = implode(", ", $special_names);
			} else {
				$special_days = "N/A";
			}

			// Output the product row data into the CSV
			fputcsv($output, [
				$serial_no,  // Serial number
				$special_days,
				$group,
				$row['product_name'],
				$row['product_id'],
				$price . " ₹",
				$qty . " QTY"
			]);

			// Increment serial number
			$serial_no++;
		}

		fclose($output);
		exit();
	}



	// add_silver_product
	public function add_silver_product()
	{
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$data['gst'] = $this->My_model->select_where("gst", ['status' => 'active']);
		$this->ov("add_silver_product", $data);
	}
	public function silverratefecth()
	{
		$data = $this->db->query("SELECT silver_amt from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0];
		echo json_encode($data);
	}
	public function s_filter_title_fetch()
	{
		$data = $this->db->query("SELECT * from filter_title WHERE status='active' AND cat_id='" . $_POST['cat_id'] . "' AND group_id='" . $_POST['group_id'] . "'")->result_array();
		echo json_encode($data);
	}
	public function s_filter_name_fetch()
	{
		$data = $this->db->query("SELECT * from filter_name WHERE status='active' AND cat_id='" . $_POST['cat_id'] . "' AND group_id='" . $_POST['group_id'] . "' AND filter_tit_id='" . $_POST['filter_tit_id'] . "'")->result_array();
		echo json_encode($data);
	}
	public function s_filter_fetch()
	{
		$data = $this->db->query("SELECT * from filter_title WHERE status='active' AND cat_id='" . $_POST['cat_id'] . "' AND group_id='" . $_POST['group_id'] . "'")->result_array();
		echo json_encode($data);
	}

	// ajax silver
	public function add_new_silver_product()
	{
		$details = $this->My_model->select_where("product_gold", ['status' => 'active', 'cat_id' => $_POST['cat_id'], 'product_id' => $_POST['product_id']]);

		if (!empty($details)) {
			$this->session->set_flashdata("Danger", "Sliver Product Already Exist...");
			redirect(base_url() . "jadmin/add_silver_product");
		} else {
			$data['cat_id'] = $_POST['cat_id'];
			$data['group_id'] = $_POST['group_id'];
			$data['purity'] = $_POST['purity'];
			$data['product_name'] = $_POST['product_name'];
			$data['product_details'] = $_POST['product_details'];
			$data['product_qty'] = $_POST['product_qty'];
			if ($_POST['silver_rate1'] != "") {
				$data['silver_rate'] = $_POST['silver_rate1'];
			} else {
				$data['silver_rate'] = $_POST['silver_rate'];
			}
			$data['product_id'] = $_POST['product_id'];
			$data['billing_type'] = $_POST['billing_type'];
			$data['filter_title'] = $_POST['filter_title'];
			$data['filter_name'] = $_POST['filter_name'];
			$data['cross_weight'] = $_POST['cross_weight'];
			$data['other_weight'] = $_POST['other_weight'];
			$data['net_weight'] = $_POST['net_weight'];
			$data['labour_char'] = $_POST['labour_char'];
			$data['wastage_per'] = $_POST['wastage_per'];
			$data['other_amt'] = $_POST['other_amt'];
			$data['gst_per'] = $_POST['gst_per'];
			$data['fixed_amount'] = $_POST['fixed_amount'];
			$data['fixed_gst_per'] = $_POST['fixed_gst_per'];
			$data['fixed_gst_amt'] = $_POST['fixed_gst_amt'];
			$data['fixed_total_amt'] = $_POST['fixed_total_amt'];
			$data['product_image'] = "";
			$n = count($_FILES['product_images']['name']);
			for ($i = 0; $i < $n; $i++) {
				$ext = explode(".", $_FILES['product_images']['name'][$i])[count(explode(".", $_FILES['product_images']['name'][$i])) - 1];
				$img_name = "product-" . time() . "-" . rand(00000, 99999) . "." . $ext;
				$path = "uploads/";
				move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path . $img_name);

				// if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
				// $this->watermark_image($path.$img_name);


				if ($i != 0)
					$data['product_image'] .= "||";

				$data['product_image'] .= $img_name;
			}
			$data['status'] = "active";
			$data['entry_by'] = $_SESSION['admin_id'];
			$data['entry_time'] = time();
			$id = $this->My_model->insert("product_gold", $data);
			if ($id) {
				$n = count($_POST['other_desc_det']);
				for ($p = 0; $p < $n; $p++) {
					$res['product_gold_id'] = $id;
					$res['other_desc_det'] = $_POST['other_desc_det'][$p];
					$res['other_amt_det'] = $_POST['other_amt_det'][$p];
					$this->My_model->insert("product_gold_other_price_det", $res);
				}
			}

			$this->session->set_flashdata("Success", "New Silver product Add Successfully...");
			redirect('jadmin/add_new_silver_product_filter/' . $id . '/' . $_POST['cat_id'] . '/' . $_POST['group_id'], 'refresh');
		}
	}
	public function add_new_silver_product_filter($prod = "", $cat = "", $group = "")
	{
		$this->head();
		$this->nav();
		$data['cat'] = $cat;
		$data['group'] = $group;
		$data['prod'] = $prod;
		$data['filter_title'] = $this->My_model->select_where("filter_title", ['status' => 'active', 'cat_id' => $cat, 'group_id' => $group]);
		$this->load->view('admin/add_new_silver_product_filter', $data);
		$this->footer();
	}
	public function save_new_silver_product_filter()
	{
		$cc = count($_POST['filter_title']);
		for ($i = 0; $i < $cc; $i++) {
			$c1 = count($_POST['filter_name'][$i]);
			for ($ii = 0; $ii < $c1; $ii++) {
				if ($_POST['filter_name'][$i][$ii] != "-") {
					$data = array(
						'prod' => $_POST['prod'],
						'cat' => $_POST['cat'],
						'group_id' => $_POST['group'],
						'filter_title' => $_POST['filter_title'][$i],
						'filter_name' => $_POST['filter_name'][$i][$ii],
						'status' => "active",
						'entry_by' => $_SESSION['admin_id'],
						'entry_time' => time(),
					);
					$this->My_model->insert('product_filter', $data);
				}
			}
		}
		$this->session->set_flashdata("Success", "Silver product Filter Add Successfully...");
		redirect('jadmin/add_silver_product', 'refresh');
	}

	// silver_product_list
	public function silver_product_list()
	{
		$page_no = 1;
		$search = "";
		extract($_GET);
		if (!isset($_GET['q'])) {
			$show = " ";
		} else {
			$show = " AND (
				(product_name LIKE '%" . $_GET['q'] . "%') 
				OR (product_id LIKE '%" . $_GET['q'] . "%') 
				)
			";
		}
		$data['jadmin'] = $this;
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$total_rows = $this->db->query("SELECT count(pg.prod_gold_id) as ttl_rows FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'Silver' " . $show)->result_array()[0]['ttl_rows'];
		$per_page = 70;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['total_pages'] = $data['ttl_pages'];
		$data['page_no'] = $page_no;
		$data['products'] = $this->db->query("SELECT * FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'Silver' " . $show . "ORDER BY prod_gold_id ASC limit " . $data['start'] . "," . $per_page)->result_array();

		foreach ($data['products'] as $key => $row) {
			$check = $this->My_model->select_where("silver_product_offer", ['prod_silver_id' => $row['prod_gold_id'], 'status' => 'active']);
			if (!empty($check)) {

				foreach ($check as $value) {
					// $data['products'][$key]['offer_tbl'] = implode(",",$value['offer_tbl_id']);

					if (!isset($data['products'][$key]['offer_tbl'])) {
						$data['products'][$key]['offer_tbl'] = $value['offer_tbl_id'];
					} else {
						$data['products'][$key]['offer_tbl'] = $data['products'][$key]['offer_tbl'] . "," . $value['offer_tbl_id'];
					}
				}
			}
		}

		$data['offer_list'] = $this->My_model->select_where("offer_tbl", ['status' => 'active']);
		$data['special_days'] = $this->My_model->select_where("special_days", ['status' => 'active']);
		$this->ov('silver_product_list', $data);
	}

	public function download_silver_csv()
	{
		// Disable output buffering and clean any previous output
		if (ob_get_level()) {
			ob_end_clean();
		}

		// Turn off error reporting (to prevent hidden warnings in output)
		error_reporting(0);

		// Initialize base condition for all "Silver" products
		$show = " AND pg.status = 'active' AND c.category_name = 'Silver' ";

		// Check for filters (search query, category ID, and group ID)
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			$show .= " AND (
            (product_name LIKE '%" . $_GET['q'] . "%') 
            OR (product_id LIKE '%" . $_GET['q'] . "%')
        )";
		}

		if (isset($_GET['cat_id']) && !empty($_GET['cat_id'])) {
			$show .= " AND pg.cat_id = " . (int) $_GET['cat_id'];
		}

		if (isset($_GET['group_id']) && $_GET['group_id'] != 'all') {
			$show .= " AND pg.group_id = " . (int) $_GET['group_id'];
		}

		// Fetch the total number of rows for the CSV (use the same condition)
		$total_rows = $this->db->query(
			"SELECT count(pg.prod_gold_id) as ttl_rows 
         FROM product_gold as pg
         INNER JOIN category as c ON pg.cat_id = c.category_id
         WHERE pg.status = 'active'
         AND c.category_name = 'Silver'
         " . $show
		)->result_array()[0]['ttl_rows'];

		// Fetch all the products using the same filter (no pagination in this query)
		$products = $this->db->query(
			"SELECT * 
         FROM product_gold as pg
         INNER JOIN category as c ON pg.cat_id = c.category_id
         WHERE pg.status = 'active'
         AND c.category_name = 'Silver'
         " . $show
		)->result_array();

		// Set headers for CSV
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=silver_products_' . date('d-m-Y') . '.csv');
		header('Pragma: no-cache');
		header('Expires: 0');

		// Open output stream
		$output = fopen('php://output', 'w');

		// Add UTF-8 BOM for proper encoding in Excel
		fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

		// Output the header row for CSV
		fputcsv($output, ['Serial No', 'Special Day', 'Label', 'Group', 'Product', 'Product Id', 'Current Price', 'Quantity']);

		// Initialize serial number for the CSV rows
		$serial_no = 1;

		// Loop through the products and output them into the CSV
		foreach ($products as $row) {
			// Get group name
			$group = "";
			$group_info = $this->My_model->select_where("product_group", ['product_group_id' => $row['group_id']]);
			if (!empty($group_info)) {
				$group = $group_info[0]['product_group_name'];
			}

			// Get price (assuming you have a method for getting the price)
			$price = $this->silverprice($row['prod_gold_id']);
			$qty = $row['product_qty'];

			// Handle special days
			if (!empty($row['special_days_id'])) {
				$special_ids = explode("||", $row['special_days_id']);
				$special_names = [];
				foreach ($special_ids as $sid) {
					$special_names[] = getspecialdays($sid);
				}
				$special_days = implode(", ", $special_names);
			} else {
				$special_days = "N/A";
			}

			// Get the label (if any)
			$label = !empty($row['label']) ? $row['label'] : "N/A";  // Default if no label is present

			// Output the product data along with serial number and label
			fputcsv($output, [
				$serial_no,  // Add serial number
				$special_days,
				$label, // Add the label
				$group,
				$row['product_name'],
				$row['product_id'],
				$price . " ₹",
				$qty . " QTY"
			]);

			// Increment serial number for the next row
			$serial_no++;
		}

		fclose($output);
		exit();
	}


	public function download_silver_csv2()
	{
		// Disable output buffering and clean any previous output
		if (ob_get_level()) {
			ob_end_clean();
		}

		// Turn off error reporting (to prevent hidden warnings in output)
		error_reporting(0);

		// Initialize base condition for all "Silver" products (we will use product_gold table)
		$show = " AND pg.status = 'active' AND c.category_name = 'Silver' ";

		// If search query is provided
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			// Properly escape the search term to avoid SQL injection
			$search_term = $this->db->escape_like_str($_GET['q']);
			$show .= " AND (
            (product_name LIKE '%" . $search_term . "%') 
            OR (product_id LIKE '%" . $search_term . "%')
        )";
		}

		// Fetch the products with the filters applied (or no filters, i.e., all products in Silver category)
		$products = $this->db->query(
			"SELECT * 
         FROM product_gold as pg
         INNER JOIN category as c ON pg.cat_id = c.category_id
         WHERE pg.status = 'active'
         AND c.category_name = 'Silver'
         " . $show . "
         ORDER BY prod_gold_id ASC"
		)->result_array();

		// Set headers for CSV
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename=silver_products_' . date('d-m-Y') . '.csv');
		header('Pragma: no-cache');
		header('Expires: 0');

		// Open output stream
		$output = fopen('php://output', 'w');

		// Add UTF-8 BOM for proper encoding in Excel
		fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

		// Output the header row for CSV
		fputcsv($output, ['Serial No', 'Special Day', 'Label', 'Group', 'Product', 'Product Id', 'Current Price', 'Quantity']);

		// Initialize serial number for the CSV rows
		$serial_no = 1;

		// Loop through the products and output them into the CSV
		foreach ($products as $row) {
			// Fetch the category name to check if it's "Silver"
			$group_cat = $this->My_model->select_where("category", ['category_id' => $row['cat_id']]);

			// Ensure the product belongs to the "Silver" category
			if ($group_cat[0]['category_name'] == "Silver") {

				// Get group name
				$group = "";
				$group_info = $this->My_model->select_where("product_group", ['product_group_id' => $row['group_id']]);
				if (!empty($group_info)) {
					$group = $group_info[0]['product_group_name'];
				}

				// Get price (assuming you have a method for getting the price)
				$price = $this->silverprice($row['prod_gold_id']);
				$qty = $row['product_qty'];

				// Handle special days
				if (!empty($row['special_days_id'])) {
					$special_ids = explode("||", $row['special_days_id']);
					$special_names = [];
					foreach ($special_ids as $sid) {
						$special_names[] = getspecialdays($sid);
					}
					$special_days = implode(", ", $special_names);
				} else {
					$special_days = "N/A";
				}

				// Get the label (if any)
				$label = !empty($row['label']) ? $row['label'] : "N/A";  // Default if no label is present

				// Output the product data along with serial number and label
				fputcsv($output, [
					$serial_no,  // Add serial number
					$special_days,
					$label, // Add the label
					$group,
					$row['product_name'],
					$row['product_id'],
					$price . " ₹",
					$qty . " QTY"
				]);

				// Increment serial number for the next row
				$serial_no++;
			}
		}

		fclose($output);
		exit();
	}




	public function search_silver_product_list()
	{
		$page_no = isset($_GET['page_no']) ? (int) $_GET['page_no'] : 1; // Default to page 1 if not provided
		$per_page = 10; // Records per page
		$start = ($page_no - 1) * $per_page; // Starting point for the query

		$data['jadmin'] = $this;
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);

		// Build the base WHERE clause
		$where = ['status' => 'active', 'cat_id' => $_GET['cat_id']];
		if ($_GET['group_id'] != "all") {
			$where['group_id'] = $_GET['group_id'];
		}

		// Calculate total rows for pagination
		$total_rows = $this->db->where($where)->count_all_results('product_gold');

		// Calculate total pages
		$total_pages = ceil($total_rows / $per_page);

		// Fetch paginated results
		$this->db->where($where);
		$this->db->order_by('prod_gold_id', 'DESC');
		$this->db->limit($per_page, $start); // Add LIMIT and OFFSET
		$data['products'] = $this->db->get('product_gold')->result_array();

		// Add pagination details
		$data['page_no'] = $page_no;
		$data['total_pages'] = $total_pages;
		$data['per_page'] = $per_page;
		$data['total_rows'] = $total_rows;

		// Pass the data to the view
		$this->ov('silver_product_list', $data);
	}

	public function silver_product_list_delete($id)
	{
		$this->My_model->update("product_gold", ['prod_gold_id' => $id], ['status' => 'deleted']);
		redirect('admin/silver_product_list', 'refresh');
	}

	public function silver_product_list_update($id)
	{
		$data['gst'] = $this->My_model->select_where("gst", ['status' => 'active']);
		$data['product'] = $this->My_model->select_where('product_gold', array('prod_gold_id' => $id, 'status' => 'active'));
		$data['product'][0]['ring_size'] = explode(",", $data['product'][0]['ring_size']);
		$data['filter'] = $this->My_model->select_where('product_filter', array('prod' => $id, 'status' => 'active'));
		$data['product_gold_other_price_det'] = $this->My_model->select_where('product_gold_other_price_det', array('product_gold_id' => $id));
		$data['data'] = $this;
		// 	echo "<pre>";
		// 	print_r($data['product']);
		// 	exit;
		$this->ov('silver_product_list_update', $data);
	}
	function float_rate_check($val){
			$a=explode('.', $val);
			if(isset($a[1])) {
				if ($a[1]>100) {
				return  $c=$a[0]+1;
				}
				else{
				return  $c=$a[0];
				}
			}
			else{
				return  $c=$a[0];
			}
			}
	public function silver_product_list_update_del_other()
	{
		$other_id = $_POST['other_id'];
		$prod_id = $_POST['prod_id'];
		$query = $this->db->query("DELETE From product_gold_other_price_det WHERE product_gold_other_price_det_id='" . $other_id . "' AND product_gold_id='" . $prod_id . "'");
		if ($query) {
			echo json_encode(['success']);
		}
	}
	public function silver_product_list_update_information()
	{
		$_POST['ring_size'] = implode(',', $_POST['ring_size']);
		$data = array(
			'cat_id' => $_POST['cat_id'],
			'group_id' => $_POST['group_id'],
			'billing_type' => $_POST['billing_type'],
			'purity' => $_POST['purity'],
			'product_id' => $_POST['product_id'],
			'product_name' => $_POST['product_name'],
			'product_details' => $_POST['product_details'],
			'product_qty' => $_POST['product_qty'],
			'age_category' => $_POST['age_category'],
			'ring_size' => $_POST['ring_size'],

		);
		if ($_FILES['sizeChart']['name'] != "") {
			$ext = explode(".", $_FILES['sizeChart']['name'])[count(explode(".", $_FILES['sizeChart']['name'])) - 1];
			$img_name = "product-" . time() . "-" . rand(00000, 99999) . "." . $ext;
			$path = "uploads/";
			move_uploaded_file($_FILES['sizeChart']['tmp_name'], $path . $img_name);
			$_POST['sizeChart'] = $img_name;
			$data['sizeChart'] = $_POST['sizeChart'];
		}
		$dataup = $this->My_model->update('product_gold', array('prod_gold_id' => $_POST['prod_gold_id']), $data);
		if ($dataup) {
			$this->ci_flashdata('success', 'Successfully Update Information');
			redirect('admin/silver_product_list_update/' . $_POST['prod_gold_id']);
		}
	}

	public function silver_product_list_update_images()
	{
		$uploadedImages = $_FILES['upimg']['name'];
		$existingImages = $_POST['upimage'];
		$prod_gold_id = $_POST['prod_gold_id'];
		$path = "uploads/";
		$iname = "";

		for ($i = 0; $i < count($existingImages); $i++) {
			if (!empty($uploadedImages[$i])) {
				$ext = pathinfo($uploadedImages[$i], PATHINFO_EXTENSION);
				$img_name = "product-" . time() . "-" . rand(10000, 99999) . "." . $ext;
				$file_path = $path . $img_name;
				$old_file_path = $path . $existingImages[$i];

				// Delete the old image if it exists
				if (file_exists($old_file_path)) {
					unlink($old_file_path);
				}

				// Move the uploaded file
				if (move_uploaded_file($_FILES['upimg']['tmp_name'][$i], $file_path)) {
					// Apply watermark for jpg/jpeg images
					if (strtolower($ext) == "jpg" || strtolower($ext) == "jpeg" || strtolower($ext) == 'avif' || strtolower($ext) == 'png' || strtolower($ext) == 'webp') {
						$this->watermark_image($file_path);
					}
					$existingImages[$i] = $img_name;  // Replace old image with new one
				}
			}
		}

		// Convert array to the required format with '||' delimiter
		$iname = implode('||', $existingImages);

		// Update database with new image string
		$dataup = $this->My_model->update('product_gold', ['prod_gold_id' => $prod_gold_id], ['product_image' => $iname]);

		if ($dataup) {
			$this->ci_flashdata('success', 'Successfully Updated Images');
			redirect('admin/silver_product_list_update/' . $prod_gold_id);
		} else {
			$this->ci_flashdata('error', 'Failed to update images');
		}
	}
	public function silver_product_list_update_new_images()
	{
		$product = $this->My_model->select_where('product_gold', array('prod_gold_id' => $_POST['prod_gold_id'], 'status' => 'active'));
		$pname = $product[0]['product_image'];
		$n = count($_FILES['newupimg']['name']);
		$path = "uploads/";
		for ($i = 0; $i < $n; $i++) {
			$ext = explode(".", $_FILES['newupimg']['name'][$i])[count(explode(".", $_FILES['newupimg']['name'][$i])) - 1];
			$img_name = "product-" . time() . "-" . rand(10000, 99999) . "." . $ext;
			$file_path = $path . $img_name;
			// move_uploaded_file($_FILES['newupimg']['tmp_name'][$i], $path.$img_name);
			// Move the uploaded file
			if (move_uploaded_file($_FILES['newupimg']['tmp_name'][$i], $file_path)) {
				// Apply watermark for jpg/jpeg images
				if (strtolower($ext) == "jpg" || strtolower($ext) == "jpeg" || strtolower($ext) == 'avif' || strtolower($ext) == 'png' || strtolower($ext) == 'webp') {
					$this->watermark_image($file_path);
				}
			}

			if ($product[0]['product_image'] == "") {
				if ($i != 0) {
					$pname .= "||";
					$pname .= $img_name;
				} else {
					$pname .= $img_name;
				}
			} else {
				$pname .= "||";
				$pname .= $img_name;
			}
		}
		$dataup = $this->My_model->update('product_gold', array('prod_gold_id' => $_POST['prod_gold_id']), array('product_image' => $pname));

		if ($dataup) {
			$this->ci_flashdata('success', 'Successfully Add New Images');
			redirect('admin/silver_product_list_update/' . $_POST['prod_gold_id']);
		}
	}

	public function silver_product_list_update_billing()
	{
		$data = array(
			'silver_rate' => $_POST['silver_rate'],
			'cross_weight' => $_POST['cross_weight'],
			'other_weight' => $_POST['other_weight'],
			'net_weight' => $_POST['net_weight'],
			'labour_char' => $_POST['labour_char'],
			'wastage_per' => $_POST['wastage_per'],
			'other_amt' => $_POST['other_amt'],
			'gst_per' => $_POST['gst_per'],
		);
		$up1 = $this->My_model->update('product_gold', array('prod_gold_id' => $_POST['prod_gold_id']), $data);
		$aa = count($_POST['other_desc_det1']);
		for ($i = 0; $i < $aa; $i++) {
			$data1 = array(
				'other_desc_det' => $_POST['other_desc_det1'][$i],
				'other_amt_det' => $_POST['other_amt_det1'][$i],
			);
			$this->My_model->update('product_gold_other_price_det', array('product_gold_other_price_det_id' => $_POST['product_gold_other_price_det_id']), $data1);
		}
		if (isset($_POST['other_desc_det'])) {
			$aa1 = count($_POST['other_desc_det']);
			for ($i = 0; $i < $aa1; $i++) {
				$data2 = array(
					'product_gold_id' => $_POST['prod_gold_id'],
					'other_desc_det' => $_POST['other_desc_det'][$i],
					'other_amt_det' => $_POST['other_amt_det'][$i],
				);
				$this->My_model->insert('product_gold_other_price_det', $data2);
			}
		}
		$this->ci_flashdata('success', "Successfully Update Billing Details...");
		redirect('admin/silver_product_list_update/' . $_POST['prod_gold_id']);
	}
	public function remove_product_image()
	{
		$p_det = $this->My_model->select_where('product_gold', array('prod_gold_id' => $_POST['pr_id'], 'status' => 'active'))[0];
		$arr = explode("||", $p_det['product_image']);
		for ($i = 0; $i < count($arr); $i++) {
			if ($arr[$i] == $_POST['img_name'])
				unset($arr[$i]);
		}
		$n = implode("||", $arr);
		$pr_id = $_POST['pr_id'];
		$this->db->query("UPDATE product_gold SET product_image='" . $n . "' WHERE prod_gold_id='" . $pr_id . "'");
		echo json_encode("success");
	}
	public function silver_product_list_update_fixed_billing()
	{
		extract($_POST);
		$data = [
			"fixed_amount" => $fixed_amount,
			"fixed_gst_per" => $fixed_gst_per,
			"fixed_gst_amt" => $fixed_gst_amt,
			"net_weight" => $net_weight,
			"fixed_total_amt" => $fixed_total_amt,
			"total_discount_amt" => $total_discount_amt,
			"final_amount_after_discount" => $final_amount_after_discount,
		];
		$id = $this->My_model->update("product_gold", ['status' => 'active', 'prod_gold_id' => $prod_gold_id], $data);
		if ($id) {
			$this->ci_flashdata('success', "Successfully Update Billing Details...");
		} else {
			$this->ci_flashdata('error', "Failed to Update Billing Details...");
		}
		redirect("admin/silver_product_list_update/" . $prod_gold_id);
	}
	public function silver_product_list_View($id)
	{
		$data['product'] = $this->My_model->select_where('product_gold', array('prod_gold_id' => $id, 'status' => 'active'));
		$data['filter'] = $this->My_model->select_where('product_filter', array('prod' => $id, 'status' => 'active'));
		$data['product_gold_other_price_det'] = $this->My_model->select_where('product_gold_other_price_det', array('product_gold_id' => $id));
		$this->ov('silver_product_list_view', $data);
	}
	function silverprice($id = "261")
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
			$price = $this->db->query("SELECT silver_amt from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0];
			$todaysprice = $price['silver_amt'];
			$metal_amt = ($todaysprice / 10) * $net_weight;
			$labamt = (float) $labour_char * (float) $net_weight;
			$wastamt = (float) $metal_amt * (float) $wastage_per / 100;
			$net_amt = $metal_amt + $labamt + $wastamt + $other_amt;
			$gstamt1 = $net_amt * $gst_per / 100;
			$tot = $net_amt + $gstamt1;
			$a = explode('.', $tot);
			if (!isset($a[1])) {
				$a[1] = 00;
			}
			$b = $a[1];
			if ($b > 01) {
				$c = $a[0] + 1;
			} else {
				$c = $a[0];
			}
			return $c;
		}
	}

	// ajax silver product list 
	public function add_product_label()
	{
		// Retrieve the existing product data
		$details = $this->My_model->select_where('product_gold', [
			'status' => 'active',
			'prod_gold_id' => $_POST['prod_gold_id']
		]);

		if (!empty($details)) {
			// Check if `special_days_id` already contains the current special day
			$existing_label = $details[0]['label'];
			$label = $_POST['label'];

			if (strpos($existing_label, $label) === false) {
				// Append the new special_days_id if not already present
				$update_label = $existing_label ? $existing_label . '||' . $label : $label;
				$id = $this->My_model->update(
					"product_gold",
					['prod_gold_id' => $_POST['prod_gold_id']],
					['label' => $update_label]
				);

				if ($id) {
					echo json_encode(['status' => 'success', 'message' => 'Label added successfully', 'label' => $update_label]);
				} else {
					echo json_encode(['status' => 'fail', 'message' => 'Failed to add label']);
				}
			} else {
				// Special day is already associated
				echo json_encode(['status' => 'info', 'message' => 'Label already added']);
			}
		} else {
			// Insert new special_days_id for the product
			$id = $this->My_model->update(
				"product_gold",
				['prod_gold_id' => $_POST['prod_gold_id']],
				['label' => $_POST['label']]
			);

			if ($id) {
				echo json_encode(['message' => 'Label added successfully']);
			} else {
				echo json_encode(['message' => 'Failed to add Label']);
			}
		}
	}
	public function remove_product_labels()
	{
		$details = $this->My_model->select_where('product_gold', ['status' => 'active', 'prod_gold_id' => $_POST['prod_gold_id']]);

		if (!empty($details)) {
			$label = explode('||', $details[0]['label']);
			if (!empty($label)) {
				$label = array_filter($label, function ($label) {
					return $label != $_POST['label'];
				});
				$updated_label = implode('||', $label);
				$update_status = $this->My_model->update(
					'product_gold',
					['prod_gold_id' => $_POST['prod_gold_id']],
					['label' => $updated_label]
				);

				if ($update_status) {
					echo json_encode(['status' => 'success', 'data' => $updated_label]);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to update record']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'No special days found']);
			}
		} else {
			echo json_encode(['status' => 'error', 'message' => 'No data found for the provided product']);
		}
	}
	public function remove_special_product()
	{
		$details = $this->My_model->select_where('product_gold', ['status' => 'active', 'prod_gold_id' => $_POST['prod_gold_id']]);

		if (!empty($details)) {
			$special_days_id = explode('||', $details[0]['special_days_id']);
			if (!empty($special_days_id)) {
				$special_days_id = array_filter($special_days_id, function ($day_id) {
					return $day_id != $_POST['special_days_id'];
				});
				$updated_special_days_id = implode('||', $special_days_id);
				$update_status = $this->My_model->update(
					'product_gold',
					['prod_gold_id' => $_POST['prod_gold_id']],
					['special_days_id' => $updated_special_days_id]
				);

				if ($update_status) {
					echo json_encode(['status' => 'success', 'data' => $updated_special_days_id]);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to update record']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'No special days found']);
			}
		} else {
			echo json_encode(['status' => 'error', 'message' => 'No data found for the provided product']);
		}
	}
	public function add_special_day_offer()
	{
		// Retrieve the existing product data
		$details = $this->My_model->select_where('product_gold', [
			'status' => 'active',
			'prod_gold_id' => $_POST['prod_gold_id']
		]);

		if (!empty($details)) {
			// Check if `special_days_id` already contains the current special day
			$existing_ids = $details[0]['special_days_id'];
			$special_day_id = $_POST['special_days_id'];

			if (strpos($existing_ids, $special_day_id) === false) {
				// Append the new special_days_id if not already present
				$updated_ids = $existing_ids ? $existing_ids . '||' . $special_day_id : $special_day_id;
				$id = $this->My_model->update(
					"product_gold",
					['prod_gold_id' => $_POST['prod_gold_id']],
					['special_days_id' => $updated_ids]
				);

				if ($id) {
					echo json_encode(['status' => 'success', 'message' => 'Special day added successfully', 'special_days_id' => $updated_ids]);
				} else {
					echo json_encode(['status' => 'fail', 'message' => 'Failed to add special day']);
				}
			} else {
				// Special day is already associated
				echo json_encode(['message' => 'Special day already added']);
			}
		} else {
			// Insert new special_days_id for the product
			$id = $this->My_model->update(
				"product_gold",
				['prod_gold_id' => $_POST['prod_gold_id']],
				['special_days_id' => $_POST['special_days_id']]
			);

			if ($id) {
				echo json_encode(['message' => 'Special day added successfully']);
			} else {
				echo json_encode(['message' => 'Failed to add special day']);
			}
		}
	}


	// Master Management
	public function gst_manage()
	{
		$page_no = 1;
		$search = "";
		extract($_GET);
		if (!isset($_GET['q'])) {
			$show = " ";
		} else {
			$show = " AND (
				 (gst.gst_label LIKE '%" . $_GET['q'] . "%') 
				 OR (gst.cgst LIKE '%" . $_GET['q'] . "%') 
				 OR (gst.sgst LIKE '%" . $_GET['q'] . "%') 
				 OR (gst.igst LIKE '%" . $_GET['q'] . "%') 
				 )
			 ";
		}
		$data['jadmin'] = $this;
		$total_rows = $this->db->query("SELECT count(gst.gst_id) as ttl_rows FROM gst WHERE status='active' " . $show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;
		$data['gst'] = $this->db->query("SELECT * FROM gst where status='active' " . $show . " ORDER BY gst.gst_id DESC LIMIT " . $data['start'] . "," . $per_page)->result_array();
		$this->ov("gst_manage", $data);
	}
	public function gst_add()
	{
		$gst = $this->My_model->select_where("gst", ['status' => 'active', 'gst_label' => $_POST['gst_label']]);
		if (isset($gst[0])) {
			$this->ci_flashdata('error', 'This GST Allready Exists...', "yes");
			redirect('admin/gst_manage', 'refresh');
		} else {
			$_POST['status'] = "active";
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$_POST['entry_time'] = time();
			$this->My_model->insert("gst", $_POST);
			$this->ci_flashdata('success', 'GST Add Successfully...', "yes");
			redirect('admin/gst_manage', 'refresh');
		}
	}
	public function gst_delete($id)
	{
		$upd = $this->My_model->update("gst", ['gst_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'GST Deleted Successfully...', "yes");
		redirect('admin/gst_manage', 'refresh');
	}
	public function edit_gst_manage($gst_id)
	{
		$data['gst_data'] = $this->My_model->select_where("gst", ['status' => 'active', "gst_id" => $gst_id]);

		$this->ov("edit_gst_manage", $data);
	}
	public function gst_update()
	{
		$upd = $this->My_model->update("gst", ['gst_id' => $_POST['gst_id']], ['gst_label' => $_POST['gst_label'], 'cgst' => $_POST['cgst'], 'sgst' => $_POST['sgst'], 'igst' => $_POST['igst']]);
		$this->ci_flashdata('success', 'GST Updated Successfully...', "yes");
		redirect('admin/gst_manage', 'refresh');
	}

	public function gender_category()
	{
		$data['det'] = [];
		if ($this->input->get('edit_id')) {
			$data['det'] = $this->My_model->select_where('gender_category', ['gender_category_id' => $this->input->get('edit_id')]);
		}

		$data['list'] = $this->My_model->select_where('gender_category', ['status' => 'active']);
		$this->ov('gender_category', $data);
	}

	public function save_gender_category()
	{
		$data = [
			'gender_category_name' => $this->input->post('gender_category_name'),
			'status' => 'active',
			'entry_time' => time(),
			'entry_date' => date('Y-m-d')
		];

		if (isset($_POST['gender_category_id'])) {
			$this->My_model->update('gender_category', ['gender_category_id' => $this->input->post('gender_category_id')], $_POST);
			$this->session->set_flashdata('msg', 'Updated successfully');
		} else {
			$this->My_model->insert('gender_category', $data);
			$this->session->set_flashdata('msg', 'Saved successfully');
		}

		redirect('admin/gender_category');
	}

	public function delete_gender_category($id)
	{
		$this->My_model->update('gender_category', ['gender_category_id' => $id, 'status' => 'active'], ['status' => 'deleted']);
		$this->session->set_flashdata('msg', 'Deleted successfully');
		redirect('admin/gender_category');
	}

	public function manage_category()
	{
		$page_no = 1;
		$show = "";
		extract($_GET);
		if (isset($_GET['q'])) {
			$show .= " AND (
			(category.category_name LIKE '%" . $_GET['q'] . "%')
			OR (category.category_details LIKE '%" . $_GET['q'] . "%')
			)";
		} else {
			$show .= "";
		}
		$total_rows = $this->db->query("SELECT COUNT(category.category_id) AS ttl_rows FROM category WHERE category.status='active' $show")->result_array()[0]['ttl_rows'];

		$per_page = 2;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;

		$data['category'] = $this->db->query("SELECT * FROM category WHERE category.status='active' " . $show . " ORDER BY category.category_id DESC LIMIT " . $data['start'] . "," . $per_page)->result_array();
		$this->ov("manage_category", $data);
	}

	public function add_new_category()
	{
		$cat = $this->My_model->select_where('category', array('status' => 'active', 'category_name' => $_POST['category_name']));
		if (isset($cat[0])) {
			$this->ci_flashdata('info', 'This category Allready Exit..', "yes");
			redirect('admin/manage_category', 'refresh');
		} else {
			if (!empty($_FILES['category_image']['name'])) {
				$ext = explode(".", $_FILES['category_image']['name'])[count(explode(".", $_FILES['category_image']['name'])) - 1];
				$img_name = "category-" . time() . "-" . rand(00000, 99999) . "." . $ext;
				$path = "uploads/";
				move_uploaded_file($_FILES['category_image']['tmp_name'], $path . $img_name);
				$_POST['category_image'] = $img_name;
			}
			$_POST['category_details'] = $this->db->escape($_POST['category_details']);
			$_POST['status'] = "active";
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$_POST['entry_time'] = time();
			$this->My_model->insert("category", $_POST);
			$this->ci_flashdata('success', 'New category Added Successfully..', "yes");
			redirect('admin/manage_category', 'refresh');
		}
	}
	public function delete_category($cat_id)
	{
		$this->My_model->update("category", ['category_id' => $cat_id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'category Deleted Successfully..', "yes");
		redirect('admin/manage_category', 'refresh');
	}
	public function edit_category($cat_id)
	{
		$this->head();
		$this->nav();
		$data['cat_det'] = $this->My_model->select_where("category", ['category_id' => $cat_id]);
		$this->load->view("admin/manage_category", $data);
		$this->footer();
	}
	public function update_new_category()
	{

		if (!empty($_FILES['category_image']['name'])) {
			$ext = explode(".", $_FILES['category_image']['name'])[count(explode(".", $_FILES['category_image']['name'])) - 1];
			$img_name = "category-" . time() . "-" . rand(00000, 99999) . "." . $ext;
			$path = "uploads/";
			$path1 = "uploads/" . $_POST['category_image1'];
			if (file_exists($path1)) {
				unlink($path1);
			}
			move_uploaded_file($_FILES['category_image']['tmp_name'], "uploads/$img_name");
			$_POST['category_image'] = $img_name;
		}
		unset($_POST['category_image1']);

		$_POST['category_details'] = $this->db->escape($_POST['category_details']);
		$this->My_model->update("category", ['category_id' => $_POST['category_id']], $_POST);
		$this->ci_flashdata('success', 'category Updated Successfully..', "yes");
		redirect('admin/manage_category', 'refresh');
	}
	// end manage category
	// product group start
	public function manage_product_group($cat = null)
	{
		$page_no = 1;
		$per_page = 15;
		$show = "";
		$total_rows = 0;

		// Extract `page_no` and `q` from `$_GET`
		extract($_GET);

		// If there's a search query, add it to the filter
		if (isset($_GET['q'])) {
			$show .= "
			AND (product_group.product_group_name LIKE '%" . $cat . "%')
			OR (product_group.product_group_details LIKE '%" . $cat . "%')
			";
		}

		// Calculate total rows based on the presence of `cat`
		if ($cat != "") {
			$total_rows = $this->db->query("SELECT COUNT(product_group.product_group_id) AS ttl_rows FROM product_group WHERE status='active' $show AND product_group.group_category='" . $cat . "'")->result_array()[0]['ttl_rows'];
		} else {
			$total_rows = $this->db->query("SELECT COUNT(product_group.product_group_id) AS ttl_rows FROM product_group WHERE status='active' $show")->result_array()[0]['ttl_rows'];
		}

		// Calculate pagination variables
		$start = ($page_no - 1) * $per_page;
		$ttl_pages = ceil($total_rows / $per_page);

		// Assign pagination data
		$data['start'] = $start;
		$data['ttl_pages'] = $ttl_pages;
		$data['page_no'] = $page_no;

		// Fetch active categories
		$data['group_category'] = $this->My_model->select_where("category", ['status' => 'active']);

		// Fetch product groups and deactivated groups based on the presence of `cat`
		if ($cat != "") {
			$data['product_group'] = $this->db->query("SELECT * FROM product_group WHERE status='active' " . $show . " AND product_group.group_category='" . $cat . "' ORDER BY product_group.product_group_id DESC LIMIT " . $start . ", " . $per_page)->result_array();
			$data['deactivate_product_group'] = $this->My_model->select_where("product_group", ['status' => 'deactivated', 'group_category' => $cat]);
		} else {
			$data['product_group'] = $this->db->query("SELECT * FROM product_group WHERE status='active' " . $show . " ORDER BY product_group.product_group_id DESC LIMIT " . $start . ", " . $per_page)->result_array();
			$data['deactivate_product_group'] = $this->My_model->select_where("product_group", ['status' => 'deactivated']);
		}
		$this->ov("manage_product_group", $data);
	}
	public function deactivate_product_group($cat_id)
	{
		$this->My_model->update("product_group", ['product_group_id' => $cat_id], ['status' => 'deactivated']);
		$this->ci_flashdata('success', 'Product Group Deactivated Successfully..', "yes");
		redirect('admin/manage_product_group', 'refresh');
	}
	public function activate_product_group($cat_id)
	{
		$this->My_model->update("product_group", ['product_group_id' => $cat_id], ['status' => 'active']);
		$this->ci_flashdata('success', 'Product Group Deactivated Successfully..', "yes");
		redirect('admin/manage_product_group', 'refresh');
	}
	public function add_new_product_group()
	{
		$product_group_name = $this->My_model->select_where('product_group', array('status' => 'active', 'product_group_name' => $_POST['product_group_name'], 'group_category' => $_POST['group_category']));
		if (isset($product_group_name[0])) {
			$this->ci_flashdata('info', 'New Product Group Allready Exit..', "yes");
			redirect('admin/manage_product_group', 'refresh');
		} else {
			if ($_FILES['product_group_image']['name'] != "") {
				$ext = explode(".", $_FILES['product_group_image']['name'])[count(explode(".", $_FILES['product_group_image']['name'])) - 1];
				$img_name = "product_group-" . time() . "-" . rand(00000, 99999) . "." . $ext;
				$path = "uploads/";
				move_uploaded_file($_FILES['product_group_image']['tmp_name'], $path . $img_name);
				// Apply watermark after uploading
				$this->watermark_image("uploads/" . $img_name, "image/logo3.png");

				$_POST['product_group_image'] = $img_name;
			}
			$_POST['product_group_details'] = $this->db->escape($_POST['product_group_details']);
			$_POST['status'] = "active";
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$_POST['entry_time'] = time();
			$this->My_model->insert("product_group", $_POST);
			$this->ci_flashdata('success', 'New Product Group Added Successfully..', "yes");
			redirect('admin/manage_product_group', 'refresh');
		}
	}
	public function delete_product_group($cat_id)
	{
		$this->My_model->update("product_group", ['product_group_id' => $cat_id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Product Group Deleted Successfully..', "yes");
		redirect('admin/manage_product_group', 'refresh');
	}
	public function edit_product_group($cat_id)
	{

		$data['group_category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$data['product_group1'] = $this->My_model->select_where("product_group", ['product_group_id' => $cat_id]);
		$this->ov("manage_product_group", $data);
	}
	public function update_new_product_group()
	{
		if ($_FILES['product_group_image']['name'] != "") {
			$ext = explode(".", $_FILES['product_group_image']['name'])[count(explode(".", $_FILES['product_group_image']['name'])) - 1];
			$img_name = "product_group-" . time() . "-" . rand(00000, 99999) . "." . $ext;
			$path = "uploads/";
			$path1 = FCPATH . "uploads/" . $_POST['product_group_image1'];
			if (file_exists($path1)) {
				unlink($path1);
			}

			move_uploaded_file($_FILES['product_group_image']['tmp_name'], $path . $img_name);
			// Apply watermark after uploading
			$this->watermark_image("uploads/" . $img_name, "image/logo3.png");
			$_POST['product_group_image'] = $img_name;
		}
		unset($_POST['product_group_image1']);
		$_POST['product_group_details'] = $this->db->escape($_POST['product_group_details']);

		$this->My_model->update("product_group", ['product_group_id' => $_POST['product_group_id']], $_POST);
		$this->ci_flashdata('success', 'Product Group Updated Successfully..', "yes");
		redirect('admin/manage_product_group', 'refresh');
	}



	// exchange_policy
	public function exchange_policy()
	{
		$data['exchange_policy'] = $this->My_model->select_where("exchange_policy_tbl", ['status' => 'active']);
		$this->ov('exchange_policy', $data);
	}

	// save_exchange_policy
	public function save_exchange_policy()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("exchange_policy_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Exchange Policy Added Successfully..', "yes");
			redirect('admin/exchange_policy', 'refresh');
		}
	}
	// edit_exchange_policy
	public function edit_exchange_policy($id)
	{
		$data['exchange_det'] = $this->My_model->select_where("exchange_policy_tbl", ['status' => 'active', 'exchange_policy_tbl_id' => $id]);
		$this->ov('exchange_policy', $data);
	}
	// update_exchange_policy
	public function update_exchange_policy()
	{
		$this->My_model->update("exchange_policy_tbl", ['exchange_policy_tbl_id' => $_POST['exchange_policy_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Exchange Policy Updated Successfully..', "yes");
		redirect('admin/exchange_policy', 'refresh');
	}
	// delete_exchange_policy
	public function delete_exchange_policy($id)
	{
		$this->My_model->update("exchange_policy_tbl", ['exchange_policy_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Exchange Policy Deleted Successfully..', "yes");
		redirect('admin/exchange_policy', 'refresh');
	}
	// buyback
	public function buyback()
	{
		$data['buyback'] = $this->My_model->select_where("buyback_tbl", ['status' => 'active']);
		$this->ov('buyback', $data);
	}
	// save_buyback
	public function save_buyback()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("buyback_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Buyback Added Successfully..', "yes");
			redirect('admin/buyback', 'refresh');
		}
	}
	// edit_buyback
	public function edit_buyback($id)
	{
		$data['buyback_det'] = $this->My_model->select_where("buyback_tbl", ['status' => 'active', 'buyback_tbl_id' => $id]);
		$this->ov('buyback', $data);
	}
	// update_buyback
	public function update_buyback()
	{
		$this->My_model->update("buyback_tbl", ['buyback_tbl_id' => $_POST['buyback_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Buyback Updated Successfully..', "yes");
		redirect('admin/buyback', 'refresh');
	}
	// delete_buyback	
	public function delete_buyback($id)
	{
		$this->My_model->update("buyback_tbl", ['buyback_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Buyback Deleted Successfully..', "yes");
		redirect('admin/buyback', 'refresh');
	}
	// gold_scheme_policy
	public function gold_scheme_policy()
	{
		$data['gold_scheme_policy'] = $this->My_model->select_where("gold_scheme_policy_tbl", ['status' => 'active']);
		$this->ov('gold_scheme_policy', $data);
	}
	// save_gold_scheme_policy
	public function save_gold_scheme_policy()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("gold_scheme_policy_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Gold Scheme Policy Added Successfully..', "yes");
			redirect('admin/gold_scheme_policy', 'refresh');
		}
	}
	// edit_gold_scheme
	public function edit_gold_scheme($id)
	{
		$data['gold_scheme_policy_det'] = $this->My_model->select_where("gold_scheme_policy_tbl", ['status' => 'active', 'gold_scheme_policy_tbl_id' => $id]);
		$this->ov('gold_scheme_policy', $data);
	}
	// update_gold_scheme_policy
	public function update_gold_scheme_policy()
	{
		$this->My_model->update("gold_scheme_policy_tbl", ['gold_scheme_policy_tbl_id' => $_POST['gold_scheme_policy_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Gold Scheme Policy Updated Successfully..', "yes");
		redirect('admin/gold_scheme_policy', 'refresh');
	}
	// delete_gold_scheme
	public function delete_gold_scheme($id)
	{
		$this->My_model->update("gold_scheme_policy_tbl", ['gold_scheme_policy_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Gold Scheme Policy Deleted Successfully..', "yes");
		redirect('admin/gold_scheme_policy', 'refresh');
	}
	// shipping_policy
	public function shipping_policy()
	{
		$data['shipping_policy'] = $this->My_model->select_where("shipping_policy_tbl", ['status' => 'active']);
		$this->ov('shipping_policy', $data);
	}
	// save_shipping_policy
	public function save_shipping_policy()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("shipping_policy_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Shipping Policy Added Successfully..', "yes");
			redirect('admin/shipping_policy', 'refresh');
		}
	}
	// edit_shipping_policy
	public function edit_shipping_policy($id)
	{
		$data['shipping_policy_det'] = $this->My_model->select_where("shipping_policy_tbl", ['status' => 'active', 'shipping_policy_tbl_id' => $id]);
		$this->ov('shipping_policy', $data);
	}
	// update_shipping_policy
	public function update_shipping_policy()
	{
		$this->My_model->update("shipping_policy_tbl", ['shipping_policy_tbl_id' => $_POST['shipping_policy_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Shipping Policy Updated Successfully..', "yes");
		redirect('admin/shipping_policy', 'refresh');
	}
	// delete_shipping_policy
	public function delete_shipping_policy($id)
	{
		$this->My_model->update("shipping_policy_tbl", ['shipping_policy_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Shipping Policy Deleted Successfully..', "yes");
		redirect('admin/shipping_policy', 'refresh');
	}
	// cancellation_policy
	public function cancellation_policy()
	{
		$data['cancellation_policy'] = $this->My_model->select_where("cancellation_policy_tbl", ['status' => 'active']);
		$this->ov('cancellation_policy', $data);
	}
	// save_cancellation
	public function save_cancellation()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("cancellation_policy_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Cancellation Policy Added Successfully..', "yes");
			redirect('admin/cancellation_policy', 'refresh');
		}
	}
	// edit_cancellation_policy
	public function edit_cancellation_policy($id)
	{
		$data['cancellation_policy_det'] = $this->My_model->select_where("cancellation_policy_tbl", ['status' => 'active', 'cancellation_policy_tbl_id' => $id]);
		$this->ov('cancellation_policy', $data);
	}
	// update_cancellation_policy
	public function update_cancellation_policy()
	{
		$this->My_model->update("cancellation_policy_tbl", ['cancellation_policy_tbl_id' => $_POST['cancellation_policy_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Cancellation Policy Updated Successfully..', "yes");
		redirect('admin/cancellation_policy', 'refresh');
	}
	// delete_cancellation_policy
	public function delete_cancellation_policy($id)
	{
		$this->My_model->update("cancellation_policy_tbl", ['cancellation_policy_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Cancellation Policy Deleted Successfully..', "yes");
		redirect('admin/cancellation_policy', 'refresh');
	}

	// disclaimer_policy
	public function disclaimer_policy()
	{
		$data['disclaimer_policy'] = $this->My_model->select_where("disclaimer_policy_tbl", ['status' => 'active']);
		$this->ov('disclaimer_policy', $data);
	}
	// save_disclaimer
	public function save_disclaimer()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("disclaimer_policy_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Disclaimer Policy Added Successfully..', "yes");
			redirect('admin/disclaimer_policy', 'refresh');
		}
	}

	// edit_disclaimer_policy
	public function edit_disclaimer_policy($id)
	{
		$data['disclaimer_policy_det'] = $this->My_model->select_where("disclaimer_policy_tbl", ['status' => 'active', 'disclaimer_policy_tbl_id' => $id]);
		$this->ov('disclaimer_policy', $data);
	}
	// update_disclaimer_policy
	public function update_disclaimer_policy()
	{
		$this->My_model->update("disclaimer_policy_tbl", ['disclaimer_policy_tbl_id' => $_POST['disclaimer_policy_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Disclaimer Policy Updated Successfully..', "yes");
		redirect('admin/disclaimer_policy', 'refresh');
	}
	// delete_disclaimer_policy
	public function delete_disclaimer_policy($id)
	{
		$this->My_model->update("disclaimer_policy_tbl", ['disclaimer_policy_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Disclaimer Policy Deleted Successfully..', "yes");
		redirect('admin/disclaimer_policy', 'refresh');
	}

	// privacy_policy
	public function privacy_policy()
	{
		$data['privacy_policy'] = $this->My_model->select_where("privacy_policy_tbl", ['status' => 'active']);
		$this->ov('privacy_policy', $data);
	}
	// save_privacy_policy
	public function save_privacy_policy()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("privacy_policy_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Privacy Policy Added Successfully..', "yes");
			redirect('admin/privacy_policy', 'refresh');
		}
	}
	// edit_privacy_policy
	public function edit_privacy_policy($id)
	{
		$data['privacy_policy_det'] = $this->My_model->select_where("privacy_policy_tbl", ['status' => 'active', 'privacy_policy_tbl_id' => $id]);
		$this->ov('privacy_policy', $data);
	}

	// update_privacy_policy
	public function update_privacy_policy()
	{
		$this->My_model->update("privacy_policy_tbl", ['privacy_policy_tbl_id' => $_POST['privacy_policy_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Privacy Policy Updated Successfully..', "yes");
		redirect('admin/privacy_policy', 'refresh');
	}

	// delete_privacy_policy
	public function delete_privacy_policy($id)
	{
		$this->My_model->update("privacy_policy_tbl", ['privacy_policy_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Privacy Policy Deleted Successfully..', "yes");
		redirect('admin/privacy_policy', 'refresh');
	}
	// terms_of_use
	public function terms_of_use()
	{
		$data['terms_of_use'] = $this->My_model->select_where("terms_of_use_tbl", ['status' => 'active']);
		$this->ov('terms_of_use', $data);
	}

	// save_terms_of_use
	public function save_terms_of_use()
	{
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$_POST['entry_date'] = date('Y-m-d');
		$_POST['status'] = "active";
		$data = $this->My_model->insert("terms_of_use_tbl", $_POST);
		if ($data) {
			$this->ci_flashdata('success', 'Terms of Use Added Successfully..', "yes");
			redirect('admin/terms_of_use', 'refresh');
		} else {
			$this->ci_flashdata('error', 'Failed to Add Terms of Use..', "yes");
			redirect('admin/terms_of_use', 'refresh');
		}
	}
	// edit_terms_of_use
	public function edit_terms_of_use($id)
	{
		$data['terms_of_use_det'] = $this->My_model->select_where("terms_of_use_tbl", ['status' => 'active', 'terms_of_use_tbl_id' => $id]);
		$this->ov('terms_of_use', $data);
	}
	// update_terms_of_use
	public function update_terms_of_use()
	{
		$this->My_model->update("terms_of_use_tbl", ['terms_of_use_tbl_id' => $_POST['terms_of_use_tbl_id']], $_POST);
		$this->ci_flashdata('success', 'Terms of Use Updated Successfully..', "yes");
		redirect('admin/terms_of_use', 'refresh');
	}

	// delete_terms_of_use
	public function delete_terms_of_use($id)
	{
		$this->My_model->update("terms_of_use_tbl", ['terms_of_use_tbl_id' => $id], ['status' => 'deleted']);
		$this->ci_flashdata('error', 'Terms of Use Deleted Successfully..', "yes");
		redirect('admin/terms_of_use', 'refresh');
	}
	// insurance_policy
	public function insurance_policy()
	{
		// $data['insurance_policy'] = $this->My_model->select_where("insurance_policy_tbl", ['status' => 'active']);
		$this->ov('insurance_policy');
	}

	public function policies_page_name()
	{
		$data['pages_name'] = $this->My_model->select_where("pages_name", ['status' => 'active']);
		$this->ov("policies_page_name", $data);
	}

	public function pages_name_save()
	{
		if (isset($_POST)) {
			$_POST['status'] = "active";
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$_POST['entry_time'] = time();
			$this->My_model->insert("pages_name", $_POST);
			$this->ci_flashdata('success', 'Successfully Added Policies Page...', "yes");
			redirect('admin/policies_page_name', 'refresh');
		}
	}
	public function pages_name_update($id = "")
	{

		$upd = $this->My_model->update("pages_name", ['pages_name_id' => $_POST['pages_name_id']], ['pages_name' => $_POST['pages_name']]);
		$this->ci_flashdata('success', 'Successfully Update Page Name ...', "yes");
		redirect('admin/policies_page_name', 'refresh');
	}
	public function pages_name_delete($id = "")
	{
		$upd = $this->My_model->update("pages_name", ['pages_name_id' => $id], ['status' => 'delete']);
		$this->ci_flashdata('error', 'Successfully Deleted Page Name ...', "yes");
		redirect('admin/policies_page_name', 'refresh');
	}
	public function pages_name_view($id = "")
	{
		$data['pages_name'] = $this->My_model->select_where("pages_name", ['pages_name_id' => $id, 'status' => 'active']);
		$data['pages_details'] = $this->My_model->select_where("pages_details", ['pages_name_id' => $id, 'status' => 'active']);

		if (empty($data['pages_name'])) {
			$this->ci_flashdata('error', 'Page name not found.');
			redirect('admin/policies_page_name', 'refresh');
			return;
		}

		$this->ov("pages_details", $data);
	}

	public function pages_details_save()
	{
		if (isset($_POST)) {
			$_POST['status'] = "active";
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$_POST['entry_time'] = time();
			$this->My_model->insert("pages_details", $_POST);
			$this->ci_flashdata('success', 'Successfully Added Policies Details...', "yes");
			redirect('admin/pages_name_view/' . $_POST['pages_name_id'], 'refresh');
		}
	}
	public function pages_details_update($id = "")
	{
		$upd = $this->My_model->update("pages_details", ['page_details_id' => $_POST['page_details_id']], ['page_title' => $_POST['page_title'], 'page_title_description' => $_POST['page_title_description']]);
		$this->ci_flashdata('success', 'Successfully Update Page Name ...', "yes");
		redirect('admin/pages_name_view/' . $_POST['pages_name_id'], 'refresh');

	}

	public function pages_details_delete($id = "")
	{
		$page_detail = $this->My_model->select_where("pages_details", ['page_details_id' => $id]);

		if (!empty($page_detail)) {
			$pages_name_id = $page_detail[0]['pages_name_id'];
			$this->My_model->update("pages_details", ['page_details_id' => $id], ['status' => 'delete']);
			$this->ci_flashdata('success', 'Successfully Deleted Page Detail...', "yes");
			redirect('admin/pages_name_view/' . $pages_name_id, 'refresh');
		} else {
			$this->ci_flashdata('error', 'Page Detail not found.', "yes");
			redirect('admin/policies_page_name', 'refresh');
		}
	}

	// rate_gold   
	public function rate_gold()
	{
		$page_no = 1;
		$show = "";
		extract($_GET);
		if (isset($_GET['q'])) {
			$show .= " AND (
				(rateamt LIKE '%" . $_GET['q'] . "%')
			)";
		} else {
			$show = "";
		}
		$total_rows = $this->db->query("SELECT COUNT(rate_gold.rate_gold_id) AS ttl_rows FROM rate_gold WHERE status='active' AND ratedate='" . date('Y-m-d') . "' $show")->result_array()[0]['ttl_rows'];

		$per_page = 10;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;

		$data['rate'] = $this->db->query("SELECT * FROM rate_gold WHERE status='active' " . $show . " AND ratedate='" . date('Y-m-d') . "' ORDER BY rate_gold.rate_gold_id DESC LIMIT " . $data['start'] . " , " . $page_no)->result_array();

		$this->ov("rate_gold", $data);
	}
	public function gold_rate_add()
	{
		$_POST['status'] = "active";
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$this->My_model->insert("rate_gold", $_POST);
		$this->ci_flashdata('success', 'Todays Gold Rate Added Successfully..', "yes");
		redirect('admin/rate_gold', 'refresh');
	}
	public function gold_rate_search()
	{

		$data['search'] = $_GET;
		$data['rate'] = $this->My_model->select_where("rate_gold", ['status' => 'active', 'ratedate>=' => $_GET['from_date'], 'ratedate<=' => $_GET['to_date']]);
		$this->ov("rate_gold", $data);
	}
	public function gold_rate_delete($id, $from = "", $to = "")
	{
		$upd = $this->My_model->update("rate_gold", ['rate_gold_id' => $id], ['status' => 'deleted']);
		if ($from != "" && $to != "") {
			$this->ci_flashdata('error', 'Todays Gold Rate Deleted Successfully..', "yes");
			redirect('admin/gold_rate_search?from_date=' . $from . '&to_date=' . $to . '');
		} else {
			$this->ci_flashdata('success', 'Todays Gold Rate Deleted Successfully..', "yes");
			redirect('admin/rate_gold');
		}
	}
	public function gold_rate_update()
	{
		$upd = $this->My_model->update("rate_gold", ['rate_gold_id' => $_POST['rate_gold_id']], ['rateamt' => $_POST['rateamt'], 'ratedate' => $_POST['ratedate'], 'ratetime' => $_POST['ratetime'], 'ct24' => $_POST['ct24'], 'ct22' => $_POST['ct22'], 'ct18' => $_POST['ct18'], 'ctpure' => $_POST['ctpure']]);
		if ($_POST['from_date'] != "" && $_POST['to_date'] != "") {
			$this->ci_flashdata('success', 'Todays Gold Rate Updated Successfully..', "yes");
			redirect('admin/gold_rate_search?from_date=' . $_POST['from_date'] . '&to_date=' . $_POST['to_date'] . '');
		} else {
			$this->ci_flashdata('success', 'Todays Gold Rate Updated Successfully..', "yes");
			redirect('admin/rate_gold');
		}
	}

	//rate_gold_end
	// rate_silver
	public function rate_silver()
	{
		$page_no = 1;
		$show = "";
		extract($_GET);

		if (isset($_GET['q'])) {
			$show .= " AND (
				(rate_silver.silver_amt LIKE '%" . $_GET['q'] . "%')
				OR (rate_silver.ratedate LIKE '%" . $_GET['q'] . "%')
			)";
		}
		$total_rows = $this->db->query("SELECT COUNT(rate_silver.rate_silver_id) AS ttl_rows FROM rate_silver WHERE status='active' " . $show . " AND ratedate='" . date('Y-m-d') . "'")->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;
		$data['rate'] = $this->db->query("SELECT * FROM rate_silver WHERE status='active' " . $show . " AND ratedate='" . date('Y-m-d') . "' ORDER BY rate_silver.rate_silver_id DESC LIMIT " . $data['start'] . "," . $per_page)->result_array();

		$this->ov("rate_silver", $data);
	}

	public function silver_rate_search()
	{
		$page_no = 1;
		$show = "";
		extract($_GET);
		$data['search'] = $_GET;
		if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
			$show .= " AND ratedate >= '" . $_GET['from_date'] . "' AND ratedate <= '" . $_GET['to_date'] . "'";
		}

		$total_rows = $this->db->query("SELECT COUNT(rate_silver.rate_silver_id) AS ttl_rows FROM rate_silver WHERE status='active' AND ratedate='" . date('Y-m-d') . "'")->result_array()[0]['ttl_rows'];

		$per_page = 10;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;
		if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
			$data['rate'] = $this->db->query("SELECT * FROM rate_silver WHERE status='active' " . $show . " AND ratedate >= '" . $_GET['from_date'] . "' AND ratedate <= '" . $_GET['to_date'] . "' ORDER BY rate_silver.rate_silver_id DESC LIMIT " . $data['start'] . "," . $per_page)->result_array();
		} else {
			$data['rate'] = $this->db->query("SELECT * FROM rate_silver WHERE status='active' AND ratedate='" . date('Y-m-d') . "'" . $show . " ORDER BY rate_silver.rate_silver_id DESC LIMIT " . $data['start'] . "," . $per_page)->result_array();
		}
		$this->ov("rate_silver", $data);
	}

	public function silver_rate_add()
	{
		$_POST['status'] = "active";
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$this->My_model->insert("rate_silver", $_POST);
		$this->ci_flashdata('success', 'Todays Silver Rate Added Successfully..', "yes");
		redirect('admin/rate_silver', 'refresh');
	}

	public function silver_rate_delete($id, $from = "", $to = "")
	{
		$upd = $this->My_model->update("rate_silver", ['rate_silver_id' => $id], ['status' => 'deleted']);
		if ($from != "" && $to != "") {
			$this->ci_flashdata('error', 'Todays Silver Rate Deleted Successfully..', "yes");
			redirect('admin/silver_rate_search?from_date=' . $from . '&to_date=' . $to . '');
		} else {
			$this->ci_flashdata('error', 'Todays Silver Rate Deleted Successfully..', "yes");
			redirect('admin/rate_silver');
		}
	}
	public function edit_silver_rate($rate_silver_id)
	{
		$data['silver_data'] = $this->My_model->select_where("rate_silver", ['status' => 'active', "rate_silver_id" => $rate_silver_id]);
		$this->ov("edit_silver_rate", $data);
	}
	public function silver_rate_update()
	{
		$upd = $this->My_model->update("rate_silver", ['rate_silver_id' => $_POST['rate_silver_id']], ['silver_amt' => $_POST['silver_amt'], 'ratedate' => $_POST['ratedate'], 'ratetime' => $_POST['ratetime']]);

		if ($_POST['from_date'] != "" && $_POST['to_date'] != "") {
			$this->ci_flashdata('success', 'Todays Silver Rate Updated Successfully..', "yes");
			redirect('admin/silver_rate_search?from_date=' . $_POST['from_date'] . '&to_date=' . $_POST['to_date'] . '');
		} else {
			$this->ci_flashdata('success', 'Todays Silver Rate Updated Successfully..', "yes");
			redirect('admin/rate_silver');
		}
	}
	// rate_silver_end
	// rate diamond
	public function rate_diamond()
	{
		$data['rate'] = $this->My_model->select_where("rate_diamond", ['status' => 'active', 'ratedate' => date('Y-m-d')]);
		$this->ov("rate_diamond", $data);
	}
	public function diamond_rate_add()
	{
		$_POST['status'] = "active";
		$_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['entry_time'] = time();
		$this->My_model->insert("rate_diamond", $_POST);
		$this->ci_flashdata('success', 'Todays diamond Rate Added Successfully..', "yes");
		redirect('admin/rate_diamond', 'refresh');
	}
	public function diamond_rate_search()
	{

		$data['search'] = $_GET;
		$data['rate'] = $this->My_model->select_where("rate_diamond", ['status' => 'active', 'ratedate>=' => $_GET['from_date'], 'ratedate<=' => $_GET['to_date']]);
		$this->ov("rate_diamond", $data);

	}
	public function diamond_rate_delete($id, $from = "", $to = "")
	{
		$upd = $this->My_model->update("rate_diamond", ['rate_diamond_id' => $id], ['status' => 'deleted']);
		if ($from != "" && $to != "") {
			$this->ci_flashdata('error', 'Todays diamond Rate Deleted Successfully..', "yes");
			redirect('admin/diamond_rate_search?from_date=' . $from . '&to_date=' . $to . '');
		} else {
			$this->ci_flashdata('error', 'Todays diamond Rate Deleted Successfully..', "yes");
			redirect('admin/rate_diamond');
		}
	}
	public function edit_diamond_rate($rate_diamond_id)
	{
		$data['diamond_rate'] = $this->My_model->select_where("rate_diamond", ['status' => 'active', 'rate_diamond_id' => $rate_diamond_id]);
		$this->ov("edit_diamond_rate", $data);
	}
	public function diamond_rate_update()
	{
		$upd = $this->My_model->update("rate_diamond", ['rate_diamond_id' => $_POST['rate_diamond_id']], ['diamond_amt' => $_POST['diamond_amt'], 'ratedate' => $_POST['ratedate'], 'ratetime' => $_POST['ratetime']]);
		if ($_POST['from_date'] != "" && $_POST['to_date'] != "") {
			$this->ci_flashdata('success', 'Todays diamond Rate Updated Successfully..', "yes");
			redirect('admin/diamond_rate_search?from_date=' . $_POST['from_date'] . '&to_date=' . $_POST['to_date'] . '');
		} else {
			$this->ci_flashdata('success', 'Todays diamond Rate Updated Successfully..', "yes");
			redirect('admin/rate_diamond');
		}
	}
	//rate_diamond end


	// product_filter_add
	public function product_filter_add()
	{
		$data['category'] = $this->My_model->select_where('category', array('status' => 'active'));
		$this->ov('product_filter_add', $data);
	}
	public function prod_filter_name_fetch()
	{
		echo json_encode($this->My_model->select_where("filter_name", ['cat_id' => $_POST['cat_id'], 'group_id' => $_POST['group_id'], 'filter_tit_id' => $_POST['tit_id'], 'status' => 'active']));
	}
	public function product_filter_add_search()
	{
		$data['cat_id'] = $_GET['cat_id'];
		$data['group_id'] = $_GET['group_id'];
		$data['filter_tit_id'] = $_GET['filter_tit_id'];
		$data['filter_name_id'] = $_GET['filter_name_id'];
		$data['category_name'] = $this->db->query("SELECT * from category WHERE category_id='" . $_GET['cat_id'] . "'")->result_array()[0];
		$data['group_name'] = $this->db->query("SELECT * from product_group WHERE product_group_id='" . $_GET['group_id'] . "'")->result_array()[0];
		$data['filter_title'] = $this->db->query("SELECT * from filter_title WHERE filter_title_id='" . $_GET['filter_tit_id'] . "'")->result_array()[0];
		$data['filter_name'] = $this->db->query("SELECT * from filter_name WHERE filter_name_id='" . $_GET['filter_name_id'] . "'")->result_array()[0];
		$data['prod'] = $this->db->query("SELECT * from product_gold WHERE product_gold.cat_id='" . $_GET['cat_id'] . "'AND product_gold.group_id='" . $_GET['group_id'] . "' AND product_gold.status='active'")->result_array();
		$data['category'] = $this->My_model->select_where('category', array('status' => 'active'));
		$this->ov('product_filter_add', $data);
	}
	public function apply_filter_on_product()
	{
		$ff = $this->My_model->select_where("product_filter", $_POST);
		if (isset($ff[0])) {
			$this->My_model->delthis("product_filter", $_POST);
			$data['status'] = "removed";
		} else {
			$_POST['status'] = 'active';
			$_POST['entry_by'] = $_SESSION['admin_id'];
			$_POST['entry_time'] = time();
			$this->My_model->insert('product_filter', $_POST);
			$data['status'] = "added";
		}
		echo json_encode($data);

	}
	// ajax
	public function filte_title_fetch()
	{
		echo json_encode($this->My_model->select_where("filter_title", ['cat_id' => $_POST['cat_id'], 'group_id' => $_POST['group_id'], 'status' => 'active']));
	}
	// product_filter_add_end

	// custom_jwellery
	public function custom_jwellery()
	{
		$data['custom_jwellery'] = $this->My_model->select_where("custom_jwellery", ['status' => 'pending']);
		$this->ov("custom_jwellery", $data);
	}
	public function custom_jwellery_view($id = "")
	{
		if (($id != "")) {
			$data['custom_jwellery'] = $this->My_model->select_where("custom_jwellery", ['custom_jwellery_id' => $id]);
			$this->ov("custom_jwellery_view", $data);
		}
	}
	public function custom_jwellery_progress($id)
	{
		$upd = $this->My_model->update("custom_jwellery", ['custom_jwellery_id' => $id], ['status' => 'progress']);
		$this->ci_flashdata('success', 'Successfully In Progress Order ...', "yes");
		redirect('admin/custom_jwellery', 'refresh');
	}
	public function custom_jwellery_cancel($id)
	{
		$upd = $this->My_model->update("custom_jwellery", ['custom_jwellery_id' => $id], ['status' => 'cancel']);
		$this->ci_flashdata('success', 'Successfully Cancel Custom Jwellery ...', "yes");
		redirect('admin/custom_jwellery', 'refresh');
	}
	public function custom_jwellery_progress_list()
	{
		$data['custom_jwellery'] = $this->My_model->select_where("custom_jwellery", ['status' => 'progress']);
		$this->ov("custom_jwellery_progress", $data);
		$this->footer();
	}
	public function custom_jwellery_progress_confirm($id)
	{
		$upd = $this->My_model->update("custom_jwellery", ['custom_jwellery_id' => $id], ['status' => 'confirm']);
		$this->ci_flashdata('success', 'Successfully In Confirm Order ...', "yes");
		redirect('admin/custom_jwellery_progress_list', 'refresh');
	}
	public function custom_jwellery_progress_cancel($id)
	{
		$upd = $this->My_model->update("custom_jwellery", ['custom_jwellery_id' => $id], ['status' => 'cancel']);
		$this->ci_flashdata('success', 'Successfully Cancel Custom Jwellery ...', "yes");
		redirect('admin/custom_jwellery_progress_list', 'refresh');
	}
	public function custom_jwellery_confirm_list()
	{
		$data['custom_jwellery'] = $this->My_model->select_where("custom_jwellery", ['status' => 'confirm']);
		$this->ov("custom_jwellery_confirm", $data);
	}
	public function custom_jwellery_cancel_list()
	{
		$data['custom_jwellery'] = $this->My_model->select_where("custom_jwellery", ['status' => 'cancel']);
		$this->ov("custom_jwellery_cancel", $data);
	}
}
