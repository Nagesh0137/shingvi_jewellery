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


	// 28 th March
	public function employee()
	{
		$data['job_list'] = $this->My_model->select_where("job_position_tbl", ['status' => 'active']);
		$data['plant_list'] = $this->My_model->select_where("plant_tbl", ['status' => 'active']);

		$this->ov('employee', $data);
	}



	private function setToastMessage($message, $color)
	{
		$_SESSION['toast_message'] = $message;
		$_SESSION['toast_color'] = $color;
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




}
