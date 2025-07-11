<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class School extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('My_model');
		// error_reporting(0);

		// array_multisort(array_column($members, 'member_name'), SORT_ASC, $members);
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('helper1');
		$this->load->library('encryption');
		// $this->load->helper('mail');
 		$this->load->library('form_validation');
		$this->load->library('session');
    	$config['upload_path']= './uploads/';
    	$config['allowed_types'] = 'gif|jpg|png|jpeg';
    	$this->load->library('upload', $config);
    	date_default_timezone_set('Asia/Kolkata');
    	if(!isset($_SESSION['school_tbl_id']))
    	{

    		redirect(base_url().'login','refresh');
    	}
    }
    protected function update_products_stock($product_id,$plant_id,$stock,$reason)
	{
		$plant_products = $this->My_model->select_where("plant_products",["product_id"=>$product_id,"plant_id"=>$plant_id]);
		if(isset($plant_products[0]))
		{
			$plant_products_id = $plant_products[0]['plant_products_id'];

			$new_stock = $plant_products[0]['stock'] + $stock;

			$this->My_model->update("plant_products",["plant_products_id"=>$plant_products_id],["stock"=>$new_stock]);

			$product_stock_history = [
				"plant_products_id"=>$plant_products_id,
				"product_id"=>$product_id,
				"plant_id"=>$plant_id,
				"stock"=>$stock,
				"reason"=>$reason,
				"date"=>date('Y-m-d'),
				"time"=>date('H:iA'),
				"entry_by"=>"admin"
			];

			$this->My_model->insert("product_stock_history",$product_stock_history);
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
	
	private function setToastMessage($message, $color)
	{
		$_SESSION['toast_message'] = $message;
		$_SESSION['toast_color'] = $color;
	}

	public function logout()
	{
        session_destroy();
        redirect(base_url().'login','refresh');
	}
    public function ov($page,$data="")
	{
		$this->head();
		$this->nav();
		$this->load->view("school/".$page,$data);
		$this->footer();
	}
	public function head()
	{
		$data['school_det'] = $this->My_model->select_where("school_tbl",['school_tbl_id'=>$_SESSION['school_tbl_id'],'status'=>'active']);
        $data['company_det']=$this->My_model->select_where("company_details_tbl",['status'=>'active']);
		$this->load->view("school/head",$data);
	}
	public function nav()
	{
		$data['company_det']=$this->My_model->select_where("company_details_tbl",['status'=>'active']);
		$data['admin_det']=$this->My_model->select_where("school_tbl",['school_tbl_id'=>$_SESSION['school_tbl_id']])[0];
		$data['system_not']=$this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("school/nav",$data);
	}
	public function topnav()
	{
		$data['company_det']=$this->My_model->select_where("company_details_tbl",['status'=>'active']);
		$data['admin_det']=$this->My_model->select_where("school_tbl",['school_tbl_id'=>$_SESSION['school_tbl_id']])[0];
		$data['system_not']=$this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("school/topnav",$data);
	}
	public function footer()
	{
        $data['company_det']=$this->My_model->select_where("company_details_tbl",['company_det_id'=>'1'])[0];
		$this->load->view("school/footer",$data);
	}
	public function getDistrict()
	{
		$data = $this->My_model->select_where("district",['status'=>'active','state_id'=>$_POST['state_id']]);
		echo json_encode(['data'=>$data]);
	}
	public function index()
	{
		$this->ov("index");
	}
	// List + Form View

// Save Teacher
public function save_teacher()
{
    $data = $_POST;
    $data['entry_date'] = date('Y-m-d');
    $data['entry_by'] = $_SESSION['school_tbl_id'];
    $data['status'] = 'active';

    // File upload logic
    if ($_FILES['profile_picture']['name'] != '') {
        $data['profile_picture'] = $this->upload_img($_FILES['profile_picture']['name'], $_FILES['profile_picture']['tmp_name'], "uploads/teacher/");
    }
    if ($_FILES['aadhar_card']['name'] != '') {
        $data['aadhar_card'] = $this->upload_img($_FILES['aadhar_card']['name'], $_FILES['aadhar_card']['tmp_name'], "uploads/teacher/");
    }
    if ($_FILES['pan_card']['name'] != '') {
        $data['pan_card'] = $this->upload_img($_FILES['pan_card']['name'], $_FILES['pan_card']['tmp_name'], "uploads/teacher/");
    }

    $this->My_model->insert("teacher", $data);
    $this->setToastMessage("Teacher Added Successfully", "success");
    redirect('school/teachers');
}


// Delete Teacher
public function delete_teacher($id)
{
    $this->My_model->update("teacher", ['teacher_id' => $id], ['status' => 'deleted']);
    $this->setToastMessage("Teacher Deleted", "success");
    redirect('school/teachers');
}

public function teachers()
{
    $data['list'] = $this->My_model->select_where("teacher", ['status' => 'active']);
    $data['states'] = $this->My_model->select("state");
    $data['positions'] = $this->My_model->select("job_position");

    $this->ov("teachers", $data);
}

public function edit_teacher($id)
{
    $data['det'] = $this->My_model->select_where("teacher", ['teacher_id' => $id]);
    $data['list'] = $this->My_model->select_where("teacher", ['status' => 'active']);
    $data['states'] = $this->My_model->select("state");
    $data['positions'] = $this->My_model->select("job_position");

    $this->ov("teachers", $data);
}

// AJAX calls
public function get_districts()
{
    $state_id = $this->input->post('state_id');
    $data = $this->My_model->select_where("district", ['state_id' => $state_id]);
    echo json_encode($data);
}

public function get_cities()
{
    $district_id = $this->input->post('district_id');
    $data = $this->My_model->select_where("city", ['district_id' => $district_id]);
    echo json_encode($data);
}
	
  public function phonepe_init() {
        $orderId = 'ORDER' . time();
        $amount = 10000; // INR 100.00 in paise
        $redirectUrl = base_url('payment/phonepe_callback');

        $payload = [
            'merchantId' => PHONEPE_MERCHANT_ID,
            'merchantTransactionId' => $orderId,
            'merchantUserId' => 'user001',
            'amount' => $amount,
            'redirectUrl' => $redirectUrl,
            'redirectMode' => 'POST',
            'callbackUrl' => $redirectUrl,
            'paymentInstrument' => [
                'type' => 'PAY_PAGE'
            ]
        ];

        $jsonPayload = json_encode($payload);
        $base64Payload = base64_encode($jsonPayload);

        $xVerify = hash('sha256', $base64Payload . "/pg/v1/pay" . PHONEPE_SALT_KEY) . "###" . PHONEPE_SALT_INDEX;

        $url = PHONEPE_BASE_URL . "/pg/v1/pay";

        $headers = [
            "Content-Type: application/json",
            "X-VERIFY: $xVerify"
        ];

        $postData = json_encode(['request' => $base64Payload]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result, true);

        if ($response && $response['success'] == true) {
            $redirectUrl = $response['data']['instrumentResponse']['redirectInfo']['url'];
            redirect($redirectUrl);
        } else {
            echo "Failed to initiate payment.";
            print_r($response);
        }
    }

    public function phonepe_callback() {
        $merchantTransactionId = $this->input->post('transactionId');

        if ($merchantTransactionId) {
            $this->load->helper('payment');
            $status = check_phonepe_payment_status($merchantTransactionId);

            if ($status['success'] && $status['data']['state'] == 'COMPLETED') {
                echo "<h3 style='color:green'>Payment Success</h3>";
            } else {
                echo "<h3 style='color:red'>Payment Failed or Pending</h3>";
            }
        } else {
            echo "Invalid callback.";
        }
    }


    public function createOrder()
    {
    	$merchantId = "TEST-M23RACJENPLS5_25061"; // Your actual merchantId
		$secretKey  = "YTgyMjM5N2EtNDM4NC00ODExLWI3ZjUtZWI5ZmIwNmUyYTRk"; // Your secret key

		// Step 2: Prepare payload
		$payload = [
		    "merchantId" => $merchantId,
		    "expiresOn" => time() + 600 // Token valid for 10 minutes
		];

		// Step 3: Encode token
		$jwt = JWT::encode($payload, $secretKey, 'HS256');

		// Step 4: Output token with O-Bearer
		echo "O-Bearer " . $jwt;
    }

    public function xVerify()
    {
    	$payload = json_encode([
	    "merchantOrderId" => "TX123rrty34432456",
	    "amount" => 1000,
	    "paymentFlow" => [
	        "type" => "PG_CHECKOUT",
	        "message" => "Payment message used for collect requests",
	        "merchantUrls" => [
	            "redirectUrl" => "https://www.xyz.com/PGIntegration/"
	        ]
	    ]
	]);

	$apiEndpoint = "/apis/pg-sandbox/checkout/v2/pay";
	$saltKey = "YOUR_CLIENT_SECRET"; // from PhonePe Developer portal
	$saltIndex = "1";

	$toSign = $payload . $apiEndpoint;
	$hash = hash_hmac('sha256', $toSign, $saltKey);
	$xVerify = $hash . "###" . $saltIndex;
	echo $xVerify;
    }
}