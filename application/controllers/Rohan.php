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
		$data['category'] = $this->My_model->select_where("category", ['status' => 'active']);
		$data['pages_name'] = $this->My_model->select_where("pages_name", ['status' => 'active']);
		$data['web_contact_details'] = $this->My_model->select("web_contact_details");
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['company_det_id' => '1']);
		$this->load->view("user/footer",$data);
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
// exchange_policy
    public function exchange_policy()
    {
        $this->ov("exchange_policy");
    }
    // buyback
    public function buyback()
    {
        $this->ov("buyback");
    }
    // gold_scheme_policy
    public function gold_scheme_policy()
    {
        $this->ov("gold_scheme_policy");
    }
    // shipping_policy
    public function shipping_policy()
    {
        $this->ov("shipping_policy");
    }
    // cancellation_policy
    public function cancellation_policy()
    {
        $this->ov("cancellation_policy");
    }
    // disclaimer_policy
    public function disclaimer_policy()
    {
        $this->ov("disclaimer_policy");
    }
    // privacy_policy
    public function privacy_policy()
    {
        $this->ov("privacy_policy");
    }
    // terms_of_use
    public function terms_of_use()
    {
        $this->ov("terms_of_use");
    }
    // insurance_policy
    public function insurance_policy()
    {
        $this->ov("insurance_policy");
    }
    // return_policy
    public function return_policy()
    {
        $this->ov("return_policy");
    }
	public function policies($id)
	{
		$data['pages_name'] = $this->My_model->select_where("pages_name", ['status' => 'active', 'pages_name_id' => $id]);
		$data['pages_details'] = $this->My_model->select_where("pages_details", ['status' => 'active', 'pages_name_id' => $id]);
		$this->ov("policies", $data);
	}
}