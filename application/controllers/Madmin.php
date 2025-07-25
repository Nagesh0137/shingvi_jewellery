<?php
class Madmin extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('My_model');
		// error_reporting(0);
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('menu');
		$this->load->helper('helper1');
 		$this->load->library('form_validation');
		$this->load->library('session');
    	$config['upload_path']= './uploads/';
    	$config['allowed_types'] = 'gif|jpg|png|jpeg';
    	$this->load->library('upload',$config);
    	date_default_timezone_set('Asia/Kolkata');

		if(!isset($_SESSION['admin_id'])){
			redirect(site_url().'login/');
		}
		if(isset($_SESSION['admin_id'])){
			if($_SESSION['admin_position']!="master_admin")
    		{
				$func_name=$this->uri->segment(2);
		    	$res=$this->db->query("SELECT * FROM authontication_tbl,authontication_urls WHERE authontication_tbl.authontication_tbl_id=authontication_urls.authontication_tbl_id AND authontication_tbl.status='active' AND authontication_urls.authontication_url='".$func_name."'")->result_array();
		    	$valid="no";
		    	if(count($res)>0)
		    	{
		    		foreach($res as $row)
		    		{
		    			$aa=$this->My_model->select_where("admin_authontication",['admin_id'=>$_SESSION['admin_id'],'authontication_tbl_id'=>$row['authontication_tbl_id']]);
		    			if(isset($aa[0]))
		    				$valid="yes";
		    		}
		    	}
		    	else
		    	{
		    		$valid="yes";
		    	}
		    	if($valid=="no")
		    	{
		    		$this->ci_flashdata("error","Unable To Authorised For This Page");
		    		echo "<script>window.history.back();</script>";
		    		exit();

		    	}
		    }
		}
	}
	function upload_img($imgname,$imgtemp,$path="uploads/"){
        $fname=time().rand(00000000,99999999).".".explode(".",$imgname)[count(explode(".",$imgname))-1];
        $path1=$path.$fname;
        move_uploaded_file($imgtemp,$path1);
        return $fname;
    }
	// public function watermark_image($target="uploads/about-1606974153-75741.jpg", $wtrmrk_file="image/logo3.png") 
	// {
		
	// 		// header ('Content-Type: image/png');	
	// 	$watermark = imagecreatefrompng($wtrmrk_file);
	// 	imagealphablending($watermark, false);
	// 	imagesavealpha($watermark, true);
	// 	$img = imagecreatefromjpeg($target);
	// 	$img_w = imagesx($img);
	// 	$img_h = imagesy($img);
	// 	$wtrmrk_w = imagesx($watermark);
	// 	$wtrmrk_h = imagesy($watermark);
	// 	// $dst_x = ($img_w/2) - ($wtrmrk_w/2); // For centering the watermark on any image

	// if($_POST['postion'] == "Bottom_Center")
	// {
	// 	$dst_x = ($img_w - $wtrmrk_w)/2;
	// 	$dst_y = ($img_h - $wtrmrk_h*2);
	// }
	// else if($_POST['postion'] == "Top_Center")
	// {
	// 	$dst_x = ($img_w - $wtrmrk_w)/2;
	// 	$dst_y = $wtrmrk_h;
	// }
	// else if($_POST['postion'] == "Top_Left")
	// {
	// 	$dst_x = $wtrmrk_w;
	// 	$dst_y = $wtrmrk_h;
	// }
	// else if($_POST['postion'] == "Top_Right")
	// {
	// 	$dst_x = $img_w - ($wtrmrk_w*2);
	// 	$dst_y = $wtrmrk_h;
	// }
	// else if($_POST['postion'] == "Bottom_Left")
	// {
	// 	$dst_x = $wtrmrk_w;
	// 	$dst_y = ($img_h - $wtrmrk_h*2);
	// }
	// else if($_POST['postion'] == "Bottom_Right")
	// {
	// 	$dst_x = $img_w - ($wtrmrk_w*2);
	// 	$dst_y = ($img_h - $wtrmrk_h*2);
	// }


	// 	imagefilter($watermark, IMG_FILTER_COLORIZE, 0,0,0,0);
	// 	// $dst_y = ($img_h) - ($wtrmrk_h)-10;
	// 	imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
	// 	imagejpeg($img, $target, 100);
	// 	// imagejpeg($img);
	// 	imagedestroy($img);
	// 	imagedestroy($watermark);
	// }
// 	public function watermark_image($target = null, $wtrmrk_file = "image/logo3.png")
// {
//     if ($target === null) {
//         $target = base_url() . "uploads/about-1606974153-75741.jpg";
//     }

//     // Debug output
//     echo "Resolved target path: " . $target;
//     echo "Base URL: " . base_url();
//     if (!file_exists($target)) {
//         die("Error: Target image file does not exist.");
//     }
//     if (!file_exists($wtrmrk_file)) {
//         die("Error: Watermark file does not exist.");
//     }

//     // Get image type and create image resource accordingly
//     $image_info = getimagesize($target);
//     if ($image_info === false) {
//         die("Error: Unable to get image information. The file may be corrupted or in an unsupported format.");
//     }
//     $image_mime = $image_info['mime'];

//     // Check if AVIF is supported
//     if ($image_mime === 'image/avif' && !function_exists('imagecreatefromavif')) {
//         die("Error: AVIF format is not supported on your server.");
//     }

//     switch ($image_mime) {
//         case 'image/jpeg':
//             $img = imagecreatefromjpeg($target);
//             break;
//         case 'image/jpg':
//             $img = imagecreatefromjpeg($target);
//             break;
//         case 'image/png':
//             $img = imagecreatefrompng($target);
//             break;
//         case 'image/webp':
//             $img = imagecreatefromwebp($target);
//             break;
//         case 'image/gif':
//             $img = imagecreatefromgif($target);
//             break;
//         case 'image/avif':
//             // Attempt to process AVIF only if supported
//             if (function_exists('imagecreatefromavif')) {
//                 $img = imagecreatefromavif($target);
//             } else {
//                 die("Error: Unable to process AVIF image, GD does not support this format.");
//             }
//             break;
//         default:
//             die("Error: Unsupported image format. Only JPG, PNG, WEBP, and GIF are allowed.");
//     }

//     // Handle watermark image creation safely
//     $watermark = @imagecreatefrompng($wtrmrk_file);
//     if (!$watermark) {
//         die("Error: Failed to load watermark image.");
//     }

//     imagealphablending($watermark, false);
//     imagesavealpha($watermark, true);

//     // Get dimensions
//     $img_w = imagesx($img);
//     $img_h = imagesy($img);
//     $wtrmrk_w = imagesx($watermark);
//     $wtrmrk_h = imagesy($watermark);

//     // Dynamic watermark resizing to fit any image size
//     $scale_factor = 0.2;  // Adjust this to control watermark size relative to image
//     $new_wtrmrk_w = $img_w * $scale_factor;
//     $new_wtrmrk_h = ($wtrmrk_h / $wtrmrk_w) * $new_wtrmrk_w;

//     // Resize watermark proportionally
//     $resized_watermark = imagecreatetruecolor($new_wtrmrk_w, $new_wtrmrk_h);
//     imagealphablending($resized_watermark, false);
//     imagesavealpha($resized_watermark, true);
//     imagecopyresampled($resized_watermark, $watermark, 0, 0, 0, 0, $new_wtrmrk_w, $new_wtrmrk_h, $wtrmrk_w, $wtrmrk_h);

//     // Set watermark position based on the input
//     $position = $_POST['position'] ?? 'Bottom_Center';
//     switch ($position) {
//         case "Bottom_Center":
//             $dst_x = ($img_w - $new_wtrmrk_w) / 2;
//             $dst_y = $img_h - $new_wtrmrk_h - 20;
//             break;
//         case "Top_Center":
//             $dst_x = ($img_w - $new_wtrmrk_w) / 2;
//             $dst_y = 20;
//             break;
//         case "Top_Left":
//             $dst_x = 20;
//             $dst_y = 20;
//             break;
//         case "Top_Right":
//             $dst_x = $img_w - $new_wtrmrk_w - 20;
//             $dst_y = 20;
//             break;
//         case "Bottom_Left":
//             $dst_x = 20;
//             $dst_y = $img_h - $new_wtrmrk_h - 20;
//             break;
//         case "Bottom_Right":
//             $dst_x = $img_w - $new_wtrmrk_w - 20;
//             $dst_y = $img_h - $new_wtrmrk_h - 20;
//             break;
//         default:
//             $dst_x = ($img_w - $new_wtrmrk_w) / 2;
//             $dst_y = $img_h - $new_wtrmrk_h - 20;
//             break;
//     }

//     imagecopy($img, $resized_watermark, $dst_x, $dst_y, 0, 0, $new_wtrmrk_w, $new_wtrmrk_h);

//     // Save image based on its original format
//     switch ($image_mime) {
//         case 'image/jpeg':
//             imagejpeg($img, $target);
//             break;
//         case 'image/jpg':
//             imagejpeg($img, $target, 100);
//             break;
//         case 'image/png':
//             imagepng($img, $target);
//             break;
//         case 'image/webp':
//             imagewebp($img, $target);
//             break;
//         case 'image/gif':
//             imagegif($img, $target);
//             break;
//         case 'image/avif':
//             imageavif($img, $target);
//             break;
//     }

//     // Clean up
//     imagedestroy($img);
//     imagedestroy($watermark);
//     imagedestroy($resized_watermark);
// }
public function watermark_image($target = null, $wtrmrk_file = "image/logo3.png")
{
	// phpinfo();
	// exit;
    // Set default image path if not provided
    if ($target === null) {
        $target = 'uploads/about-1606974153-75741.jpg'; // Relative to project root
    }

    // Resolve local file system paths
    $target_path = base_url() . $target;
    $watermark_path = base_url() . $wtrmrk_file;

    // Validate file existence
    if (!file_exists($target_path)) {
        die("Error: Target image file does not exist at $target_path");
    }

    if (!file_exists($watermark_path)) {
        die("Error: Watermark file does not exist at $watermark_path");
    }
echo "<br>Full image path: " . $target_path . "<br>";
    // Get image type and create image resource accordingly
    $image_info = @getimagesize($target_path);
    if ($image_info === false) {
        die("Error: Unable to get image information. The file may be corrupted or in an unsupported format.");
    }
    $image_mime = $image_info['mime'];

    // Load image
    switch ($image_mime) {
        case 'image/jpeg':
        case 'image/jpg':
            $img = imagecreatefromjpeg($target_path);
            break;
        case 'image/png':
            $img = imagecreatefrompng($target_path);
            break;
        case 'image/webp':
            $img = imagecreatefromwebp($target_path);
            break;
        case 'image/gif':
            $img = imagecreatefromgif($target_path);
            break;
        case 'image/avif':
            if (function_exists('imagecreatefromavif')) {
                $img = imagecreatefromavif($target_path);
            } else {
                die("Error: AVIF format is not supported on your server.");
            }
            break;
        default:
            die("Error: Unsupported image format. Only JPG, PNG, WEBP, and GIF are allowed.");
    }

    // Load watermark
    $watermark = @imagecreatefrompng($watermark_path);
    if (!$watermark) {
        die("Error: Failed to load watermark image.");
    }

    imagealphablending($watermark, false);
    imagesavealpha($watermark, true);

    // Get image and watermark dimensions
    $img_w = imagesx($img);
    $img_h = imagesy($img);
    $wtrmrk_w = imagesx($watermark);
    $wtrmrk_h = imagesy($watermark);

    // Resize watermark proportionally
    $scale_factor = 0.2;
    $new_wtrmrk_w = (int)($img_w * $scale_factor);
    $new_wtrmrk_h = (int)(($wtrmrk_h / $wtrmrk_w) * $new_wtrmrk_w);

    $resized_watermark = imagecreatetruecolor($new_wtrmrk_w, $new_wtrmrk_h);
    imagealphablending($resized_watermark, false);
    imagesavealpha($resized_watermark, true);
    imagecopyresampled($resized_watermark, $watermark, 0, 0, 0, 0, $new_wtrmrk_w, $new_wtrmrk_h, $wtrmrk_w, $wtrmrk_h);

    // Set watermark position
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

    // Apply watermark
    imagecopy($img, $resized_watermark, $dst_x, $dst_y, 0, 0, $new_wtrmrk_w, $new_wtrmrk_h);

    // Save final image
    switch ($image_mime) {
        case 'image/jpeg':
        case 'image/jpg':
            imagejpeg($img, $target_path, 100);
            break;
        case 'image/png':
            imagepng($img, $target_path);
            break;
        case 'image/webp':
            imagewebp($img, $target_path);
            break;
        case 'image/gif':
            imagegif($img, $target_path);
            break;
        case 'image/avif':
            if (function_exists('imageavif')) {
                imageavif($img, $target_path);
            }
            break;
    }

    // Cleanup
    imagedestroy($img);
    imagedestroy($watermark);
    imagedestroy($resized_watermark);
}

	public function head(){
		$data['company_det'] = $this->My_model->select_where("company_details_tbl", ['status' => 'active']);

		$data['system_notification']=$this->My_model->select_where("system_notification",['status'=>'active','entry_date'=>date('Y-m-d')]);
		$this->load->view("Madmin/head",$data);
	}
	
	public function nav(){
		$this->load->view("Madmin/nav");
	}
	public function footer(){
		$this->load->view("Madmin/footer");
	}
	public function ov($filename,$data=null){
		$this->head();
		$this->nav();
		$this->load->view("Madmin/".$filename,$data);
		$this->footer();
	}
// 	public function index(){
// 		$data['dashboard']['today_visits']=count($this->My_model->select_where('user_visits' ,array('entry_date'=>date('Y-m-d'))));
// 		// date('Y-m-d', strtotime("+1 day", date('Y-m-d')));
// 		$data['dashboard']['last_thirty_days_visits']=count($this->My_model->select_where('user_visits' ,array('entry_date>='=>date('Y-m-d',strtotime('-30 day')))));

// 		$data['dashboard']['gold_products']=count($this->My_model->select_where("product_gold",['cat_id'=>5,'status'=>'active']));
// 		$data['dashboard']['silver_products']=count($this->My_model->select_where("product_gold",['cat_id'=>6,'status'=>'active']));
// 		$data['dashboard']['diamond_products']=count($this->My_model->select_where("product_gold",['cat_id'=>8,'status'=>'active']));
// 		$data['dashboard']['pending_order']=count($this->My_model->select_where("user_billing_details",['status'=>'pending']));
// 		$data['dashboard']['processing_order']=count($this->My_model->select_where("user_billing_details",['status'=>'processing']));
// 		$data['dashboard']['dispatch_order']=count($this->My_model->select_where("user_billing_details",['status'=>'dispatch']));
// 		$data['dashboard']['delivered_order']=count($this->My_model->select_where("user_billing_details",['status'=>'delivered']));
// 		$data['dashboard']['rejected_order']=count($this->My_model->select_where("user_billing_details",['status'=>'rejected']));

// 		$data['dashboard']['pending_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'pending']));

// 		$data['dashboard']['progess_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'progress']));

// 		$data['dashboard']['confirm_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'confirm']));

// 		$data['dashboard']['cancel_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'cancel']));

// 		$data['dashboard']['act_customers']=count($this->My_model->select_where("customers",['status'=>'active']));
// 		$data['dashboard']['block_customers']=count($this->My_model->select_where("customers",['status'=>'block']));
// 		$this->ov("index",$data);
// 	}
    public function index(){
		$data['dashboard']['today_visits']=count($this->My_model->select_where('user_visits' ,array('entry_date'=>date('Y-m-d'))));
		// date('Y-m-d', strtotime("+1 day", date('Y-m-d')));
		$data['dashboard']['last_thirty_days_visits']=count($this->My_model->select_where('user_visits' ,array('entry_date>='=>date('Y-m-d',strtotime('-30 day')))));

		$data['dashboard']['gold_products']=count($this->My_model->select_where("product_gold",['cat_id'=>5,'status'=>'active']));
		$data['dashboard']['silver_products']=count($this->My_model->select_where("product_gold",['cat_id'=>6,'status'=>'active']));
		$data['dashboard']['diamond_products']=count($this->My_model->select_where("product_gold",['cat_id'=>8,'status'=>'active']));
		$data['dashboard']['pending_order']=count($this->My_model->select_where("user_billing_details",['status'=>'pending']));
		$data['dashboard']['confirm_order']=count($this->My_model->select_where("user_billing_details",['status'=>'confirm']));
		$data['dashboard']['processing_order']=count($this->My_model->select_where("user_billing_details",['status'=>'processing']));
		$data['dashboard']['dispatch_order']=count($this->My_model->select_where("user_billing_details",['status'=>'dispatch']));
		$data['dashboard']['delivered_order']=count($this->My_model->select_where("user_billing_details",['status'=>'delivered']));
		$data['dashboard']['rejected_order']=count($this->My_model->select_where("user_billing_details",['status'=>'rejected']));

		$data['dashboard']['pending_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'pending']));

		$data['dashboard']['progess_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'progress']));

		$data['dashboard']['confirm_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'confirm']));

		$data['dashboard']['cancel_cj']=count($this->My_model->select_where("custom_jwellery",['status'=>'cancel']));
		$data['gold_rate'] = $this->db->query("SELECT * FROM rate_gold WHERE status='active' ORDER BY rate_gold_id DESC LIMIT 1")->result_array();
		$data['silver_rate'] = $this->db->query("SELECT * FROM rate_silver WHERE status='active' ORDER BY rate_silver_id DESC LIMIT 1")->result_array();
		$data['diamond_rate'] = $this->db->query("SELECT * FROM rate_diamond WHERE status='active' ORDER BY rate_diamond_id DESC LIMIT 1")->result_array();
		$data['dashboard']['act_customers']=count($this->My_model->select_where("customers",['status'=>'active']));
		$data['dashboard']['block_customers']=count($this->My_model->select_where("customers",['status'=>'block']));
		$this->ov("index",$data);
	}
	public function ci_flashdata($type,$msg,$set="yes")
	{
        $this->My_model->insert("system_notification",['admin_id'=>$_SESSION['admin_id'],'type'=>$type,'msg'=>$msg,'sn_time'=>time(),'entry_date'=>date('Y-m-d'),'entry_time'=>time(),'status'=>'active']);
        if($set=="yes")
			$this->session->set_flashdata($type, $msg);
	}
	public function admin_profile()
	{
		$data['company_details']=$this->My_model->select("web_contact_details");
		$data['admin_det']=$this->My_model->select_where("admin_tbl",['admin_tbl_id'=>$_SESSION['admin_id']])[0];
				$data['ttl_login']=array_reverse($this->My_model->select_where("system_log",['slog_admin_id'=>$_SESSION['admin_id'],'slog_title'=>'LogIn']));
		$data['ttl_notification']=array_reverse($this->My_model->select_where("system_notification",['admin_id'=>$_SESSION['admin_id']]));
		$this->ov('admin_profile',$data);
	}
	public function edit_admin_details(){
		$data['admin_det']=$this->My_model->select_where("admin_tbl",['admin_tbl_id'=>$_SESSION['admin_id']])[0];
		$this->ov('edit_admin_details',$data);
	}
	public function save_admin_edit_details(){
		if($_POST['new_password']!="" && $_POST['confirm_password']){
			$sel=$this->My_model->select_where('admin_tbl',array('admin_tbl_id'=>$_POST['admin_tbl_id'],'admin_password'=>$_POST['old_password']));
			if(isset($sel[0])){
				$da=array(
					'admin_email'=>$_POST['admin_email'],
					'admin_mobile_no'=>$_POST['admin_mobile_no'],
					'admin_city'=>$_POST['admin_city'],
					'admin_contry'=>$_POST['admin_contry'],
					'admin_password'=>$_POST['new_password'],
				);
			  $upd=$this->My_model->update("admin_tbl",['admin_tbl_id'=>$_POST['admin_tbl_id']],$da);
			   $this->session->set_flashdata('success','Admin Data & Password Updated Successfully...',"yes");
				redirect('Madmin/edit_admin_details','refresh');
			}
			else{
			   $this->session->set_flashdata('error','Enter Correct Old Password...',"yes");
				redirect('Jadmin/edit_admin_details','refresh');	
			}	
		}
		else{
			$da=array(
					'admin_email'=>$_POST['admin_email'],
					'admin_mobile_no'=>$_POST['admin_mobile_no'],
					'admin_city'=>$_POST['admin_city'],
					'admin_contry'=>$_POST['admin_contry'],
				);
			  $upd=$this->My_model->update("admin_tbl",['admin_tbl_id'=>$_POST['admin_tbl_id']],$da);
			  $this->session->set_flashdata('success','Admin Data Updated Successfully...',"yes");
			  redirect('Madmin/edit_admin_details','refresh');
		}	
	}
	public function all_system_notification(){
		
		$data['all_notification']=$this->db->query("SELECT * FROM system_notification WHERE status='active' AND entry_date LIKE '%".date('Y-m')."%'")->result_array();
		
		$this->ov("all_system_notification",$data);
	}
	public function authontication()
	{
		if($_SESSION['admin_position']=='master_admin')
		{
			$data['auths']=$this->My_model->select_where('authontication_tbl',['status'=>'active']);
			$this->ov('authontication',$data);
		}
		else
		{
			redirect(base_url()."Madmin",'refresh');	
		}
	}
	public function save_authontication()
	{
		if($_SESSION['admin_position']=='master_admin')
		{
			$data['authontication_name']=$_POST['authontication_name'];
			$data['initial_url']=$_POST['initial_url'];
			$data['status']='active';
			$data['entry_time']=time();
			$data['admin_id']=$_SESSION['admin_id'];
			$auth_id=$this->My_model->insert("authontication_tbl",$data);
			for($i=0;$i<count($_POST['authontication_urls']);$i++)
			{
				$url['authontication_tbl_id']=$auth_id;
				$url['authontication_url']=$_POST['authontication_urls'][$i];
				$this->My_model->insert("authontication_urls",$url);
			}
			$this->session->set_flashdata("success","New Authontication Added Successfully");
			redirect(base_url()."Madmin/authontication",'refresh');
		}
		else
			redirect(base_url()."Madmin",'refresh');	
	}
	public function edit_authontication($id)
	{
		if($_SESSION['admin_position']=='master_admin')
		{
			$data['auth_det']=$this->My_model->select_where('authontication_tbl',['authontication_tbl_id'=>$id])[0];
			$data['urls']=$this->My_model->select_where("authontication_urls",['authontication_tbl_id'=>$id]);
			$this->ov('authontication',$data);
		}
		else
			redirect(base_url()."Madmin",'refresh');	

	}
	public function update_authontication()
	{
		if($_SESSION['admin_position']=='master_admin')
		{
			$data['authontication_name']=$_POST['authontication_name'];
			$data['initial_url']=$_POST['initial_url'];
			$data['status']='active';
			$data['entry_time']=time();
			$data['admin_id']=$_SESSION['admin_id'];
			$this->My_model->update("authontication_tbl",['authontication_tbl_id'=>$_POST['authontication_tbl_id']],$data);
			$auth_id=$_POST['authontication_tbl_id'];
			$this->My_model->delthis("authontication_urls",['authontication_tbl_id'=>$auth_id]);
			for($i=0;$i<count($_POST['authontication_urls']);$i++)
			{
				$url['authontication_tbl_id']=$auth_id;
				$url['authontication_url']=$_POST['authontication_urls'][$i];
				$this->My_model->insert("authontication_urls",$url);
			}
			$this->session->set_flashdata("success","Authontication Updated Successfully");
			redirect(base_url()."Madmin/authontication",'refresh');
		}
		else
		{
			redirect(base_url()."Madmin",'refresh');
		}
	}
	public function delete_authontication($id)
	{
		if($_SESSION['admin_position']=='master_admin')
		{
			$this->My_model->update("authontication_tbl",['authontication_tbl_id'=>$id],['status'=>'deleted']);
			$this->session->set_flashdata("error","Authontication Deleted Successfully");
			redirect(base_url()."Madmin/authontication",'refresh');
		}
		else
			redirect(base_url()."Madmin",'refresh');

	}
	public function logout()
	{
		$this->insert_system_log("LogOut",$_SESSION['admin_name']." LogOut Success");
		$this->session->set_flashdata('success', 'LogOut Success');
		session_destroy();
		redirect(site_url().'login/');
	}
	public function insert_system_log($title,$slog_desc)
	{
		$data['slog_title']=urldecode($title);
		$data['slog_desc']=urldecode($slog_desc);
		$data['slog_admin_id']=(isset($_SESSION['admin_id']) ? $_SESSION['admin_id']:'no-admin');
		$data['slog_date']=date("Y-m-d");
		$data['slog_time']=time();
		$this->My_model->insert("system_log",$data);
	}
	//GST Manage  start
	public function gst_manage(){
		$page_no=1;
		$search="";
		extract($_GET);
		if(!isset($_GET['q']))
		{
			$show=" ";
		}
		else
		{
			$show=" AND (
				 (gst.gst_label LIKE '%".$_GET['q']."%') 
				 OR (gst.cgst LIKE '%".$_GET['q']."%') 
				 OR (gst.sgst LIKE '%".$_GET['q']."%') 
				 OR (gst.igst LIKE '%".$_GET['q']."%') 
				 )
			 ";
		}
		$data['madmin']=$this;
		$total_rows = $this->db->query("SELECT count(gst.gst_id) as ttl_rows FROM gst WHERE status='active' ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['gst']=$this->db->query("SELECT * FROM gst where status='active' ". $show ." ORDER BY gst.gst_id DESC LIMIT ".$data['start'].",".$per_page)->result_array();
		$this->ov("gst_manage",$data);
	}
	
	public function gst_add(){
		$gst=$this->My_model->select_where("gst",['status'=>'active','gst_label'=>$_POST['gst_label']]);
		if(isset($gst[0])) {
		$this->ci_flashdata('error','This GST Allready Exists...',"yes");
		redirect('Madmin/gst_manage','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("gst",$_POST);
		$this->ci_flashdata('success','GST Add Successfully...',"yes");
		redirect('Madmin/gst_manage','refresh');
	    }
	}
		public function gst_delete($id){
		$upd=$this->My_model->update("gst",['gst_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('error','GST Deleted Successfully...',"yes");
		redirect('Madmin/gst_manage','refresh');
	}
	public function edit_gst_manage($gst_id){
		$data['gst_data']=$this->My_model->select_where("gst",['status'=>'active',"gst_id"=>$gst_id]);
		
		$this->ov("edit_gst_manage",$data);
	}
	public function gst_update(){
	   $upd=$this->My_model->update("gst",['gst_id'=>$_POST['gst_id']],['gst_label'=>$_POST['gst_label'],'cgst'=>$_POST['cgst'],'sgst'=>$_POST['sgst'],'igst'=>$_POST['igst']]);
		$this->ci_flashdata('success','GST Updated Successfully...',"yes");
		redirect('Madmin/gst_manage','refresh');
	}
	// GST Manage end
	// diamond_color
	public function diamond_color(){
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show .= " AND (
			(diamond_color.diamond_color LIKE '%".$_GET['q']."%')
			)";
		}else{
			$show="";
		}
		$total_rows=$this->db->query("SELECT COUNT(diamond_color.diamond_color_id) as ttl_rows FROM diamond_color WHERE status='active' ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['diamond_color']=$this->db->query("SELECT * FROM diamond_color WHERE status='active' ".$show." ORDER BY diamond_color.diamond_color_id DESC LIMIT ".$data['start'].",".$per_page)->result_array();
		// $data['diamond_color']=$this->My_model->select_where("diamond_color",['status'=>'active']);
		$this->ov("diamond_colors",$data);
	}
	public function diamond_color_add(){
		$diamond_color=$this->My_model->select_where("diamond_color",['status'=>'active','diamond_color'=>$_POST['diamond_color']]);
		if(isset($diamond_color[0])) {
		$this->ci_flashdata('error','This GST Allready Exists...',"yes");
		redirect('Madmin/diamond_colors','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("diamond_color",$_POST);
		$this->ci_flashdata('success','Diamond Color Add Successfully...',"yes");
		redirect('Madmin/diamond_color','refresh');
	    }
	}
		public function diamond_color_delete($id){
		$upd=$this->My_model->update("diamond_color",['diamond_color_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('error','Diamond Color Deleted Successfully...',"yes");
		redirect('Madmin/diamond_color','refresh');
	}
	public function diamond_color_update(){
	   $upd=$this->My_model->update("diamond_color",['diamond_color_id'=>$_POST['diamond_color_id']],['diamond_color'=>$_POST['diamond_color'],'dec_amt'=>$_POST['dec_amt']]);
		$this->ci_flashdata('success','Diamond Color Updated Successfully...',"yes");
		redirect('Madmin/diamond_color','refresh');
	}
	// end diamond_color
	// diamond_clarity
	public function diamond_clarity(){
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($q)){
			$show .= " AND (
			(diamond_clarity LIKE '%". $_GET['q'] ."%')
			)";
		}
		else{
			$show="";
		}
		$total_rows=$this->db->query("SELECT COUNT(diamond_clarity.diamond_clarity) AS ttl_rows FROM diamond_clarity WHERE status='active' ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['diamond_clarity']=$this->db->query("SELECT * FROM diamond_clarity WHERE status='active' ". $show ." ORDER BY diamond_clarity DESC LIMIT ".$data['start'].",".$per_page)->result_array();
		$this->ov("diamond_clarity",$data);
	}
	public function diamond_clarity_add(){
		$diamond_clarity=$this->My_model->select_where("diamond_clarity",['status'=>'active','diamond_clarity'=>$_POST['diamond_clarity']]);
		if(isset($diamond_clarity[0])) {
		$this->ci_flashdata('error','This Diamond Clarity Allready Exists...',"yes");
		redirect('Madmin/diamond_clarity','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("diamond_clarity",$_POST);
		$this->ci_flashdata('success','Diamond Clarity Add Successfully...',"yes");
		redirect('Madmin/diamond_clarity','refresh');
	    }
	}
		public function diamond_clarity_delete($id){
		$upd=$this->My_model->update("diamond_clarity",['diamond_clarity_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('success','Diamond Clarity Deleted Successfully...',"yes");
		redirect('Madmin/diamond_clarity','refresh');
	}
	public function edit_diamond_calrity($diamond_clarity_id){
		$data['diamond_calrity_data']=$this->My_model->select_where("diamond_clarity",['status'=>'active','diamond_clarity_id'=>$diamond_clarity_id]);
		$this->ov("edit_diamond_calrity",$data);
	}
	public function diamond_clarity_update(){
	   $upd=$this->My_model->update("diamond_clarity",['diamond_clarity_id'=>$_POST['diamond_clarity_id']],['diamond_clarity'=>$_POST['diamond_clarity'],'dec_amt'=>$_POST['dec_amt']]);
		$this->ci_flashdata('success','Diamond Clarity Updated Successfully...',"yes");
		redirect('Madmin/diamond_clarity','refresh');
	}
	// end diamond_clarity
	// stone_type
	public function stone_type(){
		$data['stone_type']=$this->My_model->select_where("stone_type",['status'=>'active']);
		$this->ov("stone_type",$data);
		
	}
	public function stone_type_add(){
		$stone_type=$this->My_model->select_where("stone_type",['status'=>'active','stone_type_name'=>$_POST['stone_type_name']]);
		if(isset($stone_type[0])) {
		$this->ci_flashdata('error','This Stone Type Allready Exists...',"yes");
		redirect('Madmin/stone_type','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("stone_type",$_POST);
		$this->ci_flashdata('success','Stone Type Add Successfully...',"yes");
		redirect('Madmin/stone_type','refresh');
	    }
	}
		public function stone_type_delete($id){
		$upd=$this->My_model->update("stone_type",['stone_type_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('error','Stone Type Deleted Successfully...',"yes");
		redirect('Madmin/stone_type','refresh');
	}
	public function edit_stone_type_name($stone_type_id){
		$data['stone_type']=$this->My_model->select_where("stone_type",['status'=>'active']);
		$data['stone_data']=$this->My_model->select_where("stone_type",['status'=>'active','stone_type_id'=>$stone_type_id]);
		$this->ov("stone_type",$data);
	}
	public function stone_type_update(){
	   $upd=$this->My_model->update("stone_type",['stone_type_id'=>$_POST['stone_type_id']],['stone_type_name'=>$_POST['stone_type_name']]);
		$this->ci_flashdata('success','Stone Type Updated Successfully...',"yes");
		redirect('Madmin/stone_type','refresh');
	}
	// end stone_type
	// stone_shape
	public function stone_shape(){
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show .= "	AND (
				(stone_shape.stone_shape_name LIKE '%". $_GET['q'] ."%')
			)";
		}else{
			$show .= "";
		}
		$total_rows=$this->db->query("SELECT COUNT(stone_shape.stone_shape_id) AS ttl_rows FROM stone_shape WHERE status='active' ".$show."")->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['stone_shape']=$this->db->query("SELECT * FROM stone_shape WHERE status='active' ". $show ." ORDER BY stone_shape.stone_shape_id DESC LIMIT ". $data['start'] ." , ". $per_page)->result_array();
		$this->ov("stone_shape",$data);
		
	}
	public function stone_shape_add(){
		$stone_shape=$this->My_model->select_where("stone_shape",['status'=>'active','stone_shape_name'=>$_POST['stone_shape_name']]);
		if(isset($stone_shape[0])) {
		$this->ci_flashdata('info','This Stone Shape Allready Exists...',"yes");
		redirect('Madmin/stone_shape','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("stone_shape",$_POST);
		$this->ci_flashdata('success','Stone Shape Add Successfully...',"yes");
		redirect('Madmin/stone_shape','refresh');
		}
	}
		public function stone_shape_delete($id){
		$upd=$this->My_model->update("stone_shape",['stone_shape_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('success','Stone Shape Deleted Successfully...',"yes");
		redirect('Madmin/stone_shape','refresh');
	}
	public function stone_shape_update(){
		$upd=$this->My_model->update("stone_shape",['stone_shape_id'=>$_POST['stone_shape_id']],['stone_shape_name'=>$_POST['stone_shape_name']]);
		$this->ci_flashdata('success','Stone Shape Updated Successfully...',"yes");
		redirect('Madmin/stone_shape','refresh');
	}
	// end stone_shape
	// rate_gold   
	public function rate_gold(){
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show .= " AND (
				(rateamt LIKE '%". $_GET['q'] ."%')
			)";
		}else{
			$show="";
		}
		$total_rows=$this->db->query("SELECT COUNT(rate_gold.rate_gold_id) AS ttl_rows FROM rate_gold WHERE status='active' AND ratedate='".date('Y-m-d')."' $show")->result_array()[0]['ttl_rows'];
		
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['rate']=$this->db->query("SELECT * FROM rate_gold WHERE status='active' ". $show ." AND ratedate='". date('Y-m-d') ."' ORDER BY rate_gold.rate_gold_id DESC LIMIT ". $data['start'] ." , " .$page_no)->result_array();
	
		$this->ov("rate_gold",$data);
	}
	public function gold_rate_add(){
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("rate_gold",$_POST);
		$this->ci_flashdata('success','Todays Gold Rate Added Successfully..',"yes");
		redirect('Madmin/rate_gold','refresh');
	}
	public function gold_rate_search(){
		
		$data['search']=$_GET;
		$data['rate']=$this->My_model->select_where("rate_gold",['status'=>'active','ratedate>='=>$_GET['from_date'],'ratedate<='=>$_GET['to_date']]);
		$this->ov("rate_gold",$data);
	}
	public function gold_rate_delete($id,$from="",$to=""){
		$upd=$this->My_model->update("rate_gold",['rate_gold_id'=>$id],['status'=>'deleted']);
		if ($from!="" && $to!=""){
		$this->ci_flashdata('error','Todays Gold Rate Deleted Successfully..',"yes");
		redirect('Madmin/gold_rate_search?from_date='.$from.'&to_date='.$to.'');
		}
		else{
		$this->ci_flashdata('success','Todays Gold Rate Deleted Successfully..',"yes");
			redirect('Madmin/rate_gold');
		}
	}
	public function gold_rate_update(){
	   $upd=$this->My_model->update("rate_gold",['rate_gold_id'=>$_POST['rate_gold_id']],['rateamt'=>$_POST['rateamt'],'ratedate'=>$_POST['ratedate'],'ratetime'=>$_POST['ratetime'],'ct24'=>$_POST['ct24'],'ct22'=>$_POST['ct22'],'ct18'=>$_POST['ct18'],'ctpure'=>$_POST['ctpure']]);
		if ($_POST['from_date']!="" && $_POST['to_date']!=""){
		$this->ci_flashdata('success','Todays Gold Rate Updated Successfully..',"yes");
		redirect('Madmin/gold_rate_search?from_date='.$_POST['from_date'].'&to_date='.$_POST['to_date'].'');
		}
		else{
		$this->ci_flashdata('success','Todays Gold Rate Updated Successfully..',"yes");
		redirect('Madmin/rate_gold');
		}	
	}

	//rate_gold_end
	// rate_silver
	public function rate_silver(){
		$page_no = 1;
		$show = "";
		extract($_GET);
		
		if (isset($_GET['q'])) {
			$show .= " AND (
				(rate_silver.silver_amt LIKE '%" . $_GET['q'] . "%')
				OR (rate_silver.ratedate LIKE '%" . $_GET['q'] . "%')
			)";
		}
		$total_rows = $this->db->query("SELECT COUNT(rate_silver.rate_silver_id) AS ttl_rows FROM rate_silver WHERE status='active' ". $show ." AND ratedate='". date('Y-m-d') ."'")->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;
		$data['rate'] = $this->db->query("SELECT * FROM rate_silver WHERE status='active' ". $show ." AND ratedate='". date('Y-m-d') ."' ORDER BY rate_silver.rate_silver_id DESC LIMIT ". $data['start'] ."," . $per_page)->result_array();
	
		$this->ov("rate_silver", $data);
	}
	
	public function silver_rate_search(){
		$page_no = 1;
		$show = "";
		extract($_GET);
		$data['search'] = $_GET;
		if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
			$show .= " AND ratedate >= '" . $_GET['from_date'] . "' AND ratedate <= '" . $_GET['to_date'] . "'";
		}
	
		$total_rows = $this->db->query("SELECT COUNT(rate_silver.rate_silver_id) AS ttl_rows FROM rate_silver WHERE status='active' AND ratedate='". date('Y-m-d') ."'")->result_array()[0]['ttl_rows'];
	
		$per_page = 10;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;
		if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
			$data['rate'] = $this->db->query("SELECT * FROM rate_silver WHERE status='active' ". $show ." AND ratedate >= '". $_GET['from_date'] ."' AND ratedate <= '". $_GET['to_date'] ."' ORDER BY rate_silver.rate_silver_id DESC LIMIT ". $data['start'] ."," . $per_page)->result_array();
		} else {
			$data['rate'] = $this->db->query("SELECT * FROM rate_silver WHERE status='active' AND ratedate='". date('Y-m-d') ."'". $show . " ORDER BY rate_silver.rate_silver_id DESC LIMIT ". $data['start'] ."," . $per_page)->result_array();
		}
		$this->ov("rate_silver", $data);
	}
	
	public function silver_rate_add(){
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("rate_silver",$_POST);
		$this->ci_flashdata('success','Todays Silver Rate Added Successfully..',"yes");
		redirect('Madmin/rate_silver','refresh');
	}
	
	public function silver_rate_delete($id,$from="",$to=""){
		$upd=$this->My_model->update("rate_silver",['rate_silver_id'=>$id],['status'=>'deleted']);
		if ($from!="" && $to!=""){
		$this->ci_flashdata('error','Todays Silver Rate Deleted Successfully..',"yes");
		redirect('Madmin/silver_rate_search?from_date='.$from.'&to_date='.$to.'');
		}
		else{
		$this->ci_flashdata('error','Todays Silver Rate Deleted Successfully..',"yes");
			redirect('Madmin/rate_silver');
		}
	}
	public function edit_silver_rate($rate_silver_id){
		$data['silver_data']=$this->My_model->select_where("rate_silver",['status'=>'active',"rate_silver_id"=>$rate_silver_id]);
		$this->ov("edit_silver_rate",$data);
	}
	public function silver_rate_update(){
	   $upd=$this->My_model->update("rate_silver",['rate_silver_id'=>$_POST['rate_silver_id']],['silver_amt'=>$_POST['silver_amt'],'ratedate'=>$_POST['ratedate'],'ratetime'=>$_POST['ratetime']]);

		if ($_POST['from_date']!="" && $_POST['to_date']!=""){
			$this->ci_flashdata('success','Todays Silver Rate Updated Successfully..',"yes");
			redirect('Madmin/silver_rate_search?from_date='.$_POST['from_date'].'&to_date='.$_POST['to_date'].'');
		}
		else{
			$this->ci_flashdata('success','Todays Silver Rate Updated Successfully..',"yes");
			redirect('Madmin/rate_silver');
		}	
	}
	// rate_silver_end
	// rate diamond
	public function rate_diamond(){
		$data['rate']=$this->My_model->select_where("rate_diamond",['status'=>'active','ratedate'=>date('Y-m-d')]);
		$this->ov("rate_diamond",$data);
	}
	public function diamond_rate_add(){
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("rate_diamond",$_POST);
		$this->ci_flashdata('success','Todays diamond Rate Added Successfully..',"yes");
		redirect('Madmin/rate_diamond','refresh');
	}
	public function diamond_rate_search(){
		
		$data['search']=$_GET;
		$data['rate']=$this->My_model->select_where("rate_diamond",['status'=>'active','ratedate>='=>$_GET['from_date'],'ratedate<='=>$_GET['to_date']]);
		$this->ov("rate_diamond",$data);
		
	}
	public function diamond_rate_delete($id,$from="",$to=""){
		$upd=$this->My_model->update("rate_diamond",['rate_diamond_id'=>$id],['status'=>'deleted']);
		if ($from!="" && $to!=""){
		$this->ci_flashdata('error','Todays diamond Rate Deleted Successfully..',"yes");
		redirect('Madmin/diamond_rate_search?from_date='.$from.'&to_date='.$to.'');
		}
		else{
		$this->ci_flashdata('error','Todays diamond Rate Deleted Successfully..',"yes");
			redirect('Madmin/rate_diamond');
		}
	}
	public function edit_diamond_rate($rate_diamond_id){
		$data['diamond_rate']=$this->My_model->select_where("rate_diamond",['status'=>'active','rate_diamond_id'=>$rate_diamond_id]);
		$this->ov("edit_diamond_rate",$data);
	}
	public function diamond_rate_update(){
	$upd=$this->My_model->update("rate_diamond",['rate_diamond_id'=>$_POST['rate_diamond_id']],['diamond_amt'=>$_POST['diamond_amt'],'ratedate'=>$_POST['ratedate'],'ratetime'=>$_POST['ratetime']]);
		if ($_POST['from_date']!="" && $_POST['to_date']!=""){
		$this->ci_flashdata('success','Todays diamond Rate Updated Successfully..',"yes");
		redirect('Madmin/diamond_rate_search?from_date='.$_POST['from_date'].'&to_date='.$_POST['to_date'].'');
		}
		else{
		$this->ci_flashdata('success','Todays diamond Rate Updated Successfully..',"yes");
		redirect('Madmin/rate_diamond');
		}	
	}
	//rate_diamond end
	public function slider()
	{
		$data['slider']=$this->My_model->select_where("web_slider",['status'=>'active']);
		$this->ov("slider",$data);
		
	}
	public function add_slider()
	{
		$ext=explode(".",$_FILES['web_slider_image']['name'])[count(explode(".",$_FILES['web_slider_image']['name']))-1];
		$img_name="slider-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		move_uploaded_file($_FILES['web_slider_image']['tmp_name'], $path.$img_name);
		$_POST['web_slider_image']=$img_name;
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		unset($_POST['web_slider_url']);
		$_POST['web_slider_url']=base_url()."uploads/".$img_name;
		$this->My_model->insert('web_slider',$_POST);
		$this->ci_flashdata('success','Slider Images Added Successfully..',"yes");
		redirect('Madmin/slider','refresh');
	}
	public function delete_slider($ws_id)
	{
		$this->My_model->update("web_slider",['web_slider_id'=>$ws_id],['status'=>'deleted']);
		$this->ci_flashdata('error','Slider Image Deleted Successfully..',"yes");
		redirect('Madmin/slider','refresh');
	}

	public function edit_slider($ws_id)
	{
		$data['slider_det']=$this->My_model->select_where("web_slider",['web_slider_id'=>$ws_id]);
		
		$this->ov("slider",$data);
	}
	public function update_slider()
	{
		if(!empty($_FILES['web_slider_image']['name']))
		{
			$ext=explode(".",$_FILES['web_slider_image']['name'])[count(explode(".",$_FILES['web_slider_image']['name']))-1];
			$img_name="slider-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['web_slider_image']['tmp_name'], $path.$img_name);
			$_POST['web_slider_image']=$img_name;
			unset($_POST['web_slider_url']);
		    $_POST['web_slider_url']=base_url()."uploads/".$img_name;
		}
		$this->My_model->update("web_slider",['web_slider_id'=>$_POST['web_slider_id']],$_POST);
		$this->ci_flashdata('success','Slider Images Updated Successfully..',"yes");
		redirect('Madmin/slider','refresh');	
	}
	// Main-category
	public function manage_category()
	{
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show .= " AND (
			(category.category_name LIKE '%".$_GET['q']."%')
			OR (category.category_details LIKE '%".$_GET['q']."%')
			)";
		}else{
			$show .= "";
		}
		$total_rows=$this->db->query("SELECT COUNT(category.category_id) AS ttl_rows FROM category WHERE category.status='active' $show")->result_array()[0]['ttl_rows'];

		$per_page = 2;
		$data['start'] = $per_page * $page_no - $per_page;
		$data['ttl_pages'] = $total_rows / $per_page;
		$data['page_no'] = $page_no;

		$data['category']=$this->db->query("SELECT * FROM category WHERE category.status='active' ". $show ." ORDER BY category.category_id DESC LIMIT ".$data['start'].",".$per_page)->result_array();
		$this->ov("manage_category",$data);
	}
	
	public function add_new_category()
	{
	  $cat=$this->My_model->select_where('category',array('status'=>'active','category_name'=>$_POST['category_name']));
		if (isset($cat[0])) {
		$this->ci_flashdata('info','This category Allready Exit..',"yes");
		redirect('Madmin/manage_category','refresh');
		}
		else{
		if(!empty($_FILES['category_image']['name']))
		{
			$ext=explode(".",$_FILES['category_image']['name'])[count(explode(".",$_FILES['category_image']['name']))-1];
			$img_name="category-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['category_image']['tmp_name'], $path.$img_name);
			$_POST['category_image']=$img_name;
		}
		$_POST['category_details']=$this->db->escape($_POST['category_details']);
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("category",$_POST);
		$this->ci_flashdata('success','New category Added Successfully..',"yes");
		redirect('Madmin/manage_category','refresh');
	  }
	}
	public function delete_category($cat_id)
	{
		$this->My_model->update("category",['category_id'=>$cat_id],['status'=>'deleted']);
		$this->ci_flashdata('error','category Deleted Successfully..',"yes");
		redirect('Madmin/manage_category','refresh');
	}
	public function edit_category($cat_id)
	{
		$this->head();
		$this->nav();
		$data['cat_det']=$this->My_model->select_where("category",['category_id'=>$cat_id]);
		$this->load->view("admin/manage_category",$data);
		$this->footer();
	}
	public function update_new_category()
	{
		
		if(!empty($_FILES['category_image']['name']))
		{
			$ext=explode(".",$_FILES['category_image']['name'])[count(explode(".",$_FILES['category_image']['name']))-1];
			$img_name="category-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			$path1="uploads/".$_POST['category_image1'];
			if (file_exists($path1)) {
				unlink($path1);
			}
			move_uploaded_file($_FILES['category_image']['tmp_name'],"uploads/$img_name");
			$_POST['category_image']=$img_name;
		}
		unset($_POST['category_image1']);
		
		$_POST['category_details']=$this->db->escape($_POST['category_details']);
		$this->My_model->update("category",['category_id'=>$_POST['category_id']],$_POST);
		$this->ci_flashdata('success','category Updated Successfully..',"yes");
		redirect('Madmin/manage_category','refresh');
	}
	// End-main-category

	// website banner details start
	public function banner()
	{
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show .= " AND (
			(web_banner.banner_size LIKE '%".$_GET['q']."%')
			OR (web_banner.banner_link LIKE '%".$_GET['q']."%')
			OR (web_banner.banner_type LIKE '%".$_GET['q']."%')
			OR (web_banner.entry_date LIKE '%".$_GET['q']."%')
			)";
		}else{
			$show="";
		}
		$total_rows=$this->db->query("SELECT COUNT(web_banner.web_banner_id) as ttl_rows FROM web_banner WHERE status='active' ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 5;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['web_banner']=$this->db->query("SELECT * FROM web_banner WHERE status='active' ".$show ." ORDER BY web_banner.web_banner_id DESC LIMIT ". $data['start'] .",".$per_page)->result_array();
		$this->ov("banner",$data);	
	}
	public function add_banner()
	{
		$ext=explode(".",$_FILES['banner_img']['name'])[count(explode(".",$_FILES['banner_img']['name']))-1];
		$img_name="banner-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		move_uploaded_file($_FILES['banner_img']['tmp_name'], $path.$img_name);
		$_POST['banner_img']=$img_name;
		$_POST['status']='active';
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_date']=date('Y-m-d');

		$this->My_model->insert("web_banner",$_POST);
		$this->ci_flashdata('success','Banner Added Success',"yes");
		redirect(base_url().'Madmin/banner','refresh');
	}
	public function edit_banner($id)
	{
		$data['banner_det']=$this->My_model->select_where("web_banner",['web_banner_id'=>$id]);
		$this->ov("banner",$data);
		$this->footer();
	}
	public function update_banner()
	{
		if($_FILES['banner_img']['name']!="")
		{
			$ext=explode(".",$_FILES['banner_img']['name'])[count(explode(".",$_FILES['banner_img']['name']))-1];
			$img_name="banner-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['banner_img']['tmp_name'], $path.$img_name);
			$_POST['banner_img']=$img_name;
		}
		$this->My_model->update("web_banner",['web_banner_id'=>$_POST['web_banner_id']],$_POST);
		$this->ci_flashdata('success','Banner Updated Success',"yes");
		redirect(base_url().'Madmin/banner','refresh');
	}
	public function delete_banner($id)
	{
		$this->My_model->delthis("web_banner",['web_banner_id'=>$id]);
		$this->ci_flashdata('success','Banner Deleted Success',"yes");
		redirect(base_url().'Madmin/banner','refresh');
	} 
	// website banner details end 
	// testimonial details start 
	public function testimonial()
	{
		$data['web_testimonial']=$this->My_model->select_where("web_testimonial",['status'=>'active']);
		$this->ov("testimonial",$data);
	}
	public function add_testimonial()
	{
		if($_FILES['testimonial_img']['name']!="")
		{
			$ext=explode(".",$_FILES['testimonial_img']['name'])[count(explode(".",$_FILES['testimonial_img']['name']))-1];
			$img_name="banner-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['testimonial_img']['tmp_name'], $path.$img_name);
			$_POST['testimonial_img']=$img_name;
		}
		$_POST['status']='active';
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_date']=date('Y-m-d');

		$this->My_model->insert("web_testimonial",$_POST);
		$this->ci_flashdata('success','Testimonial Added Success',"yes");
		redirect(base_url().'Madmin/testimonial','refresh');
	}
	public function edit_testimonial($id)
	{
		$data['testimonial_det']=$this->My_model->select_where("web_testimonial",['web_testimonial_id'=>$id]);
		$this->ov("testimonial",$data);
	}
	public function update_testimonial()
	{
		if($_FILES['testimonial_img']['name']!="")
		{
			$ext=explode(".",$_FILES['testimonial_img']['name'])[count(explode(".",$_FILES['testimonial_img']['name']))-1];
			$img_name="testimonial-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['testimonial_img']['tmp_name'], $path.$img_name);
			$_POST['testimonial_img']=$img_name;
		}
		$this->My_model->update("web_testimonial",['web_testimonial_id'=>$_POST['web_testimonial_id']],$_POST);
		$this->ci_flashdata('success','testimonial Updated Success',"yes");
		redirect(base_url().'Madmin/testimonial','refresh');
	}
	public function delete_testimonial($id)
	{
		$this->My_model->delthis("web_testimonial",['web_testimonial_id'=>$id]);
		$this->ci_flashdata('error','testimonial Deleted Success',"yes");
		redirect(base_url().'Madmin/testimonial','refresh');
	}
	// testimonial details end 
	public function blog()
	{
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show .= "
			AND (web_blog.blog_by LIKE '%".$_GET['q']."%')
			OR (web_blog.blog_label LIKE '%".$_GET['q']."%')
			OR (web_blog.blog_type LIKE '%".$_GET['q']."%')
			OR (web_blog.blog_details LIKE '%".$_GET['q']."%')
			";
		}
		$total_rows=$this->db->query("SELECT COUNT(web_blog.web_blog_id) AS ttl_rows FROM web_blog WHERE status='active' ". $show ."")->result_array()[0]['ttl_rows'];
		$per_page = 2;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['web_blog']=$this->db->query("SELECT * FROM web_blog WHERE web_blog.status='active' ". $show ." ORDER BY web_blog.web_blog_id DESC LIMIT ". $data['start'] .",".$per_page)->result_array();

		$this->ov("blog",$data);	
		
	}
	public function add_blog()
	{
		if($_FILES['blog_image']['name']!="")
		{
			$ext=explode(".",$_FILES['blog_image']['name'])[count(explode(".",$_FILES['blog_image']['name']))-1];
			$img_name="blog-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['blog_image']['tmp_name'], $path.$img_name);
			$_POST['blog_image']=$img_name;
		}
		$_POST['status']='active';
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_date']=date('Y-m-d');

		$this->My_model->insert("web_blog",$_POST);		
		$this->ci_flashdata('success','Blog Added Success',"yes");
		redirect(base_url().'Madmin/blog','refresh');
	}

	public function edit_blog($id)
	{
		$data['blog_det']=$this->My_model->select_where("web_blog",['web_blog_id'=>$id]);
		$this->ov("blog",$data);
	}
	public function update_blog()
	{
		if($_FILES['blog_image']['name']!="")
		{
			$ext=explode(".",$_FILES['blog_image']['name'])[count(explode(".",$_FILES['blog_image']['name']))-1];
			$img_name="blog-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['blog_image']['tmp_name'], $path.$img_name);
			$_POST['blog_image']=$img_name;
		}
		$this->My_model->update("web_blog",['web_blog_id'=>$_POST['web_blog_id']],$_POST);
		$this->ci_flashdata('success','Blog Updated Successfully',"yes");
		redirect(base_url().'Madmin/blog','refresh');
	}
	public function delete_blog($id)
	{
		$this->My_model->delthis("web_blog",['web_blog_id'=>$id]);
		$this->ci_flashdata('error','Blog Deleted Successfully..',"yes");
		redirect(base_url().'Madmin/blog','refresh');
	}
	// contact_details
	public function contact_details(){
	   
		$data['web_contact_details']=$this->My_model->select("web_contact_details")[0];
		$this->ov("contact_details",$data);
			
	}
	public function contact_details_save(){
		if($_FILES['logo']['name']!=""){
		$ext=explode(".",$_FILES['logo']['name'])[count(explode(".",$_FILES['logo']['name']))-1];
		$img_name="slider-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		$path1="uploads/".$_POST['logo1'];
		if (file_exists($path1)) {
			unlink($path1);
		}
		move_uploaded_file($_FILES['logo']['tmp_name'], $path.$img_name);
		$logo=$img_name;
		$dat=array(
	    'email1'=>$_POST['email1'],
	    'email2'=>$_POST['email2'],
	    'mobile_no'=>$_POST['mobile_no'],
	    'mobile_no2'=>$_POST['mobile_no2'],
	    'logo'=>$logo,
	    );
	    }
	    else{
	    $dat=array(
	    'email1'=>$_POST['email1'],
	    'email2'=>$_POST['email2'],
	    'mobile_no'=>$_POST['mobile_no'],
	    'mobile_no2'=>$_POST['mobile_no2'],
	    );
	    }
		$this->My_model->update('web_contact_details',array('cont_id'=>$_POST['cont_id']),$dat);
		$this->ci_flashdata("success","Successfully Save Contact Information","yes");
		redirect('Madmin/contact_details','refresh');
	}
	// web_branch_details
	public function branch_details(){
		$data['web_branch_details']=$this->My_model->select_where("web_branch_details",['status'=>'active']);
		$this->ov("web_branch_details",$data);
	}
	public function branch_details_save(){
		if($_FILES['branch_image']['name']!=""){
		$ext=explode(".",$_FILES['branch_image']['name'])[count(explode(".",$_FILES['branch_image']['name']))-1];
		$img_name="branch-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		move_uploaded_file($_FILES['branch_image']['tmp_name'], $path.$img_name);
		$_POST['branch_image']=$img_name;
	    }
		$gst=$this->My_model->select_where("web_branch_details",['status'=>'active','branch_name'=>$_POST['branch_name']]);
		if(isset($gst[0])) {
		$this->ci_flashdata('info','This Branch Details Allready Exists...',"yes");
		redirect('Madmin/branch_details','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("web_branch_details",$_POST);
		$this->ci_flashdata('success','Branch Details Add Successfully...',"yes");
		redirect('Madmin/branch_details','refresh');
	    }
	}
	public function branch_details_delete($id){
		$upd=$this->My_model->update("web_branch_details",['branch_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('error','Branch Details Deleted Successfully...',"yes");
		redirect('Madmin/branch_details','refresh');
	}
	public function branch_details_update(){
		if($_FILES['branch_image']['name']!=""){
		$ext=explode(".",$_FILES['branch_image']['name'])[count(explode(".",$_FILES['branch_image']['name']))-1];
		$img_name="branch-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		$path1="uploads/".$_POST['branch_image1'];
		if (file_exists($path1)) {
			unlink($path1);
		}
		move_uploaded_file($_FILES['branch_image']['tmp_name'], $path.$img_name);
		$branch_image=$img_name;
		$dat=array(
	    'branch_name'=>$_POST['branch_name'],
	    'branch_mobile_no'=>$_POST['branch_mobile_no'],
	    'branch_phone_no'=>$_POST['branch_phone_no'],
	    'branch_email'=>$_POST['branch_email'],
	    'branch_address'=>$_POST['branch_address'],
	    'branch_location'=>$_POST['branch_location'],
	    'branch_image'=>$branch_image,
	    );
	    }
	    else{
	    $dat=array(
	    'branch_name'=>$_POST['branch_name'],
	    'branch_mobile_no'=>$_POST['branch_mobile_no'],
	    'branch_phone_no'=>$_POST['branch_phone_no'],
	    'branch_email'=>$_POST['branch_email'],
	    'branch_address'=>$_POST['branch_address'],
	    'branch_location'=>$_POST['branch_location'],
	    );
	    }
		$this->My_model->update('web_branch_details',array('branch_id'=>$_POST['branch_id']),$dat);
		$this->ci_flashdata('success','Branch Details Updated Successfully...',"yes");
		redirect('Madmin/branch_details','refresh');
	}
	// about_details
	public function about_details(){
		$data['web_about_details']=$this->My_model->select_where("web_about_details",['status'=>'active']);
		$this->ov("web_about_details",$data);
	}
	public function about_details_save(){
		if($_FILES['about_image']['name']!=""){
		$ext=explode(".",$_FILES['about_image']['name'])[count(explode(".",$_FILES['about_image']['name']))-1];
		$img_name="about-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		move_uploaded_file($_FILES['about_image']['tmp_name'], $path.$img_name);
		$_POST['about_image']=$img_name;
	    }
	    $_POST['about_desc']=nl2br($_POST['about_desc']);
		$gst=$this->My_model->select_where("web_about_details",['status'=>'active','about_title'=>$_POST['about_title']]);
		if(isset($gst[0])) {
		$this->ci_flashdata('info','This About Details Allready Exists...',"yes");
		redirect('Madmin/about_details','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("web_about_details",$_POST);
		$this->ci_flashdata('success','About Details Add Successfully...',"yes");
		redirect('Madmin/about_details','refresh');
	    }
	}
	public function about_details_delete($id){
		$upd=$this->My_model->update("web_about_details",['about_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('error','About Details Deleted Successfully...',"yes");
		redirect('Madmin/about_details','refresh');
	}
	public function about_details_update(){
		if($_FILES['about_image']['name']!=""){
		$ext=explode(".",$_FILES['about_image']['name'])[count(explode(".",$_FILES['about_image']['name']))-1];
		$img_name="about-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		$path1="uploads/".$_POST['about_image1'];
		if (file_exists($path1)) {
			unlink($path1);
		}
		move_uploaded_file($_FILES['about_image']['tmp_name'], $path.$img_name);
		$about_image=$img_name;
		$dat=array(
	    'about_title'=>$_POST['about_title'],
	    'about_desc'=>nl2br($_POST['about_desc']),
	    'about_image'=>$about_image,
	    );
	    }
	    else{
	    $dat=array(
	     'about_title'=>$_POST['about_title'],
	     'about_desc'=>nl2br($_POST['about_desc']),
	    );
	    }
		$this->My_model->update('web_about_details',array('about_id'=>$_POST['about_id']),$dat);
		$this->ci_flashdata('success','About Details Updated Successfully...',"yes");
		redirect('Madmin/about_details','refresh');
	}
	public function edit_about_details($about_id){
		$data['about_data']=$this->My_model->select_where("web_about_details",['status'=>'active','about_id'=>$about_id]);
		$data['web_about_details']=$this->My_model->select_where("web_about_details",['status'=>'active']);
		$this->ov("web_about_details",$data);
	}
	public function update_about_details(){
		if($_FILES['about_image']['name']!=""){
			$about_image=time().rand(1111,9999).$_FILES['about_image']['name'];
			move_uploaded_file($_FILES['about_image']['tmp_name'],"uploads/$about_image");
			$_POST['about_image']=$about_image;
		}
		$this->My_model->update("web_about_details",['status'=>'active','about_id'=>$_POST['about_id']],$_POST);
		$this->ci_flashdata('success','About Details Updated Successfully...',"yes");
		redirect('Madmin/about_details','refresh');
	}
	// owner_desk_details
	public function owner_desk_details(){
		$data['web_owner_desk_details']=$this->My_model->select_where("web_owner_desk_details",['status'=>'active']);
		$this->ov("web_owner_desk_details",$data);
	}
	public function owner_desk_details_save(){
		if($_FILES['owner_desk_image']['name']!=""){
		$ext=explode(".",$_FILES['owner_desk_image']['name'])[count(explode(".",$_FILES['owner_desk_image']['name']))-1];
		$img_name="owner-desk-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		move_uploaded_file($_FILES['owner_desk_image']['tmp_name'], $path.$img_name);
		$_POST['owner_desk_image']=$img_name;
		}
		$clean_string = str_replace('"', '``', str_replace("'", "`",$_POST['owner_desk_desc']));
		$_POST['owner_desk_desc']=nl2br($clean_string);
		$gst=$this->My_model->select_where("web_owner_desk_details",['status'=>'active','owner_desk_title'=>$_POST['owner_desk_title']]);
		if(isset($gst[0])) {
		$this->ci_flashdata('info','This Owner Desk Details Allready Exists...',"yes");
		redirect('Madmin/owner_desk_details','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("web_owner_desk_details",$_POST);
		$this->ci_flashdata('success','Owner Desk Details Add Successfully...',"yes");
		redirect('Madmin/owner_desk_details','refresh');
		}
	}
	public function owner_desk_details_delete($id){
		$upd=$this->My_model->update("web_owner_desk_details",['owner_desk_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('error','Owner Desk Details Deleted Successfully...',"yes");
		redirect('Madmin/owner_desk_details','refresh');
	}
	public function update_owner_desk($owner_desk_id){
		$data['owner_desk_data']=$this->My_model->select_where("web_owner_desk_details",['status'=>'active','owner_desk_id'=>$owner_desk_id]);
		$this->ov("update_owner_desk",$data);
	}
	public function owner_desk_details_update(){
		if($_FILES['owner_desk_image']['name']!=""){
		$ext=explode(".",$_FILES['owner_desk_image']['name'])[count(explode(".",$_FILES['owner_desk_image']['name']))-1];
		$img_name="owner-desk-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		$path1="uploads/".$_POST['owner_desk_image1'];
		if (file_exists($path1)) {
			unlink($path1);
		}
		move_uploaded_file($_FILES['owner_desk_image']['tmp_name'], $path.$img_name);
		$owner_desk_image=$img_name;
		$clean_string = str_replace('"', '``', str_replace("'", "`",$_POST['owner_desk_desc']));
		$dat=array(
		'owner_desk_title'=>$_POST['owner_desk_title'],
		'owner_desk_desc'=>nl2br($clean_string),
		'owner_desk_image'=>$owner_desk_image,
		);
		}
		else{
		$clean_string = str_replace('"', '``', str_replace("'", "`",$_POST['owner_desk_desc']));
		$dat=array(
		'owner_desk_title'=>$_POST['owner_desk_title'],
		'owner_desk_desc'=>nl2br($clean_string),
		);
		}
		$this->My_model->update('web_owner_desk_details',array('owner_desk_id'=>$_POST['owner_desk_id']),$dat);
		$this->ci_flashdata('success','Owner Desk Details Updated Successfully...',"yes");
		redirect('Madmin/owner_desk_details','refresh');
	}

	// owner_desk_details
	public function history_details(){
		$data['web_history_details']=$this->My_model->select_where("web_history_details",['status'=>'active']);
		$this->ov("web_history_details",$data);
	}
	public function history_details_save(){
		if($_FILES['history_image']['name']!=""){
		$ext=explode(".",$_FILES['history_image']['name'])[count(explode(".",$_FILES['history_image']['name']))-1];
		$img_name="history-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		move_uploaded_file($_FILES['history_image']['tmp_name'], $path.$img_name);
		$_POST['history_image']=$img_name;
	    }
	    $clean_string = str_replace('"', '``', str_replace("'", "`",$_POST['history_desc']));
	    $_POST['history_desc']=nl2br($clean_string);
		$gst=$this->My_model->select_where("web_history_details",['status'=>'active','history_title'=>$_POST['history_title']]);
		if(isset($gst[0])) {
		$this->ci_flashdata('info','This History Details Allready Exists...',"yes");
		redirect('Madmin/history_details','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("web_history_details",$_POST);
		$this->ci_flashdata('success','History Details Add Successfully...',"yes");
		redirect('Madmin/history_details','refresh');
	    }
	}
	public function history_details_delete($id){
		$upd=$this->My_model->update("web_history_details",['history_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('error','History Details Deleted Successfully...',"yes");
		redirect('Madmin/history_details','refresh');
	}
	public function edit_history_details($history_id){
		$data['history_data']=$this->My_model->select_where("web_history_details",['status'=>'active','history_id'=>$history_id]);
		$this->ov("edit_history_details",$data);
	}
	public function history_details_update(){
		if($_FILES['history_image']['name']!=""){
		$ext=explode(".",$_FILES['history_image']['name'])[count(explode(".",$_FILES['history_image']['name']))-1];
		$img_name="history-".time()."-".rand(00000,99999).".".$ext;
		$path="uploads/";
		$path1="uploads/".$_POST['history_image1'];
		if (file_exists($path1)) {
			unlink($path1);
		}
		move_uploaded_file($_FILES['history_image']['tmp_name'], $path.$img_name);
		$history_image=$img_name;
	    $clean_string = str_replace('"', '``', str_replace("'", "`",$_POST['history_desc']));
		$dat=array(
	    'history_title'=>$_POST['history_title'],
	    'history_desc'=>nl2br($clean_string),
	    'history_image'=>$history_image,
	    );
	    }
	    else{
	    $clean_string = str_replace('"', '``', str_replace("'", "`",$_POST['history_desc']));
	    $dat=array(
	     'history_title'=>$_POST['history_title'],
	     'history_desc'=>nl2br($clean_string),
	    );
	    }
		$this->My_model->update('web_history_details',array('history_id'=>$_POST['history_id']),$dat);
		$this->ci_flashdata('success','History Details Updated Successfully...',"yes");
		redirect('Madmin/history_details','refresh');
	}
	public function customer_list()
	{
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show.="AND (
				(customers.firstname LIKE '%". $_GET['q'] ."%')
				OR (customers.lastname LIKE '%". $_GET['q'] ."%')
				OR (customers.mobile LIKE '%". $_GET['q'] ."%')
			)
			
			";
		}
		$total_rows=$this->db->query("SELECT COUNT(customers.customers_id) AS ttl_rows FROM customers WHERE status='active' $show")->result_array()[0]['ttl_rows'];
		$per_page = 50;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['cust']=$this->db->query("SELECT * FROM customers WHERE status='active' ". $show ." ORDER BY customers.customers_id DESC LIMIT ". $data['start'] ." , ".$per_page)->result_array();

		$this->ov("customer_list",$data);
	}
	public function block_customer_list()
	{
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$show.="AND (
				(customers.firstname LIKE '%". $_GET['q'] ."%')
				OR (customers.lastname LIKE '%". $_GET['q'] ."%')
				OR (customers.mobile LIKE '%". $_GET['q'] ."%')
			)
			
			";
		}
		$total_rows=$this->db->query("SELECT COUNT(customers.customers_id) AS ttl_rows FROM customers WHERE status='block' $show")->result_array()[0]['ttl_rows'];
		$per_page = 50;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['cust']=$this->db->query("SELECT * FROM customers WHERE status='block' ". $show ." ORDER BY customers.customers_id DESC LIMIT ". $data['start'] ." , ".$per_page)->result_array();

		// $data['cust']=$this->db->query("SELECT * FROM customers WHERE  status='block' ORDER BY reg_time DESC")->result_array();
		$this->ov("block_customer_list",$data);
	}
	public function customer_details($cust_id)
	{
		$data['cust_det']=$this->My_model->select_where("customers",['customers_id'=>$cust_id])[0];
		$this->ov("customer_details",$data);
	}
	public function remove_customer($cust_id)
	{
		$this->head();
		$this->My_model->update("customers",['customers_id'=>$cust_id],['status'=>'block']);
		$this->ci_flashdata("error","Customer Blocked");
		redirect(base_url().'Madmin/customer_list','refresh');
	}
	function remove_from_block_customer($cust_id)
	{

		$this->head();
		$this->My_model->update("customers",['customers_id'=>$cust_id],['status'=>'active']);
		$this->ci_flashdata("success","Customer Blocked");
		redirect(base_url().'Madmin/block_customer_list','refresh');
	}
	// manage product start 
	public function manage_product_group($cat = null) {
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
		$this->My_model->update("product_group",['product_group_id'=>$cat_id],['status'=>'deactivated']);
		$this->ci_flashdata('success','Product Group Deactivated Successfully..',"yes");
		redirect('Madmin/manage_product_group','refresh');
	}
	public function activate_product_group($cat_id)
	{
		$this->My_model->update("product_group",['product_group_id'=>$cat_id],['status'=>'active']);
		$this->ci_flashdata('success','Product Group Deactivated Successfully..',"yes");
		redirect('Madmin/manage_product_group','refresh');
	}
	public function add_new_product_group()
	{
		$product_group_name=$this->My_model->select_where('product_group',array('status'=>'active','product_group_name'=>$_POST['product_group_name'],'group_category'=>$_POST['group_category']));
		if (isset($product_group_name[0])){
		$this->ci_flashdata('info','New Product Group Allready Exit..',"yes");
		redirect('Madmin/manage_product_group','refresh');
		}
		else{
		if($_FILES['product_group_image']['name']!="")
		{
			$ext=explode(".",$_FILES['product_group_image']['name'])[count(explode(".",$_FILES['product_group_image']['name']))-1];
			$img_name="product_group-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['product_group_image']['tmp_name'], $path.$img_name);
			// Apply watermark after uploading
			$this->watermark_image("uploads/" . $img_name, "image/logo3.png");
			
			$_POST['product_group_image']=$img_name;
		}
		$_POST['product_group_details']=$this->db->escape($_POST['product_group_details']);
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("product_group",$_POST);
		$this->ci_flashdata('success','New Product Group Added Successfully..',"yes");
		redirect('Madmin/manage_product_group','refresh');
	   }
	}
	public function delete_product_group($cat_id)
	{
		$this->My_model->update("product_group",['product_group_id'=>$cat_id],['status'=>'deleted']);
		$this->ci_flashdata('error','Product Group Deleted Successfully..',"yes");
		redirect('Madmin/manage_product_group','refresh');
	}
	public function edit_product_group($cat_id)
	{
		
		$data['group_category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['product_group1']=$this->My_model->select_where("product_group",['product_group_id'=>$cat_id]);
		$this->ov("manage_product_group",$data);
		
	}
	public function update_new_product_group()
	{
		if($_FILES['product_group_image']['name']!="")
		{
			$ext=explode(".",$_FILES['product_group_image']['name'])[count(explode(".",$_FILES['product_group_image']['name']))-1];
			$img_name="product_group-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			$path1=FCPATH . "uploads/".$_POST['product_group_image1'];
			if (file_exists($path1)) {
				unlink($path1);
			}
			
			move_uploaded_file($_FILES['product_group_image']['tmp_name'], $path.$img_name);
			// Apply watermark after uploading
			$this->watermark_image("uploads/" . $img_name, "image/logo3.png");
			$_POST['product_group_image']=$img_name;
		}
		unset($_POST['product_group_image1']);
		$_POST['product_group_details']=$this->db->escape($_POST['product_group_details']);

		$this->My_model->update("product_group",['product_group_id'=>$_POST['product_group_id']],$_POST);
		$this->ci_flashdata('success','Product Group Updated Successfully..',"yes");
		redirect('Madmin/manage_product_group','refresh');
	}
// End-product-group
	// filter_title
	// public function filter_title()
	// {

	// 	$data['group_category']=$this->My_model->select_where("category",['status'=>'active']);
	// 	$data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active']);
	// 	$this->ov("filter_title",$data);
	// }
	public function filter_title()
	{
    $page_no = isset($_GET['page_no']) && is_numeric($_GET['page_no']) && $_GET['page_no'] > 0 ? $_GET['page_no'] : 1;
    $show = "";
    extract($_GET);

    if (isset($_GET['q'])) {
        $show .= "
        AND (filter_title.filter_title LIKE '%" . $this->db->escape_like_str($_GET['q']) . "%')
        OR (product_group.product_group_name LIKE '%" . $this->db->escape_like_str($_GET['q']) . "%')
        OR (category.category_name LIKE '%" . $this->db->escape_like_str($_GET['q']) . "%')
        OR (product_group.product_group_details LIKE '%" . $this->db->escape_like_str($_GET['q']) . "%')
        ";
    }

    $data['group_category'] = $this->My_model->select_where("category", ['status' => 'active']);
    $per_page = 20;
    $data['start'] = $per_page * ($page_no - 1);

    if (isset($_GET['cat_id']) && $_GET['cat_id'] != null) {
        $total_rows = $this->db->query("SELECT COUNT(filter_title.filter_title_id) AS total_rows FROM filter_title, product_group, category WHERE filter_title.status='active' AND filter_title.group_id=product_group.product_group_id AND filter_title.cat_id=category.category_id AND category.status='active' AND product_group.status='active' " . $show . " AND filter_title.cat_id='" . $this->db->escape_str($_GET['cat_id']) . "'")->row()->total_rows;

        $data['filter_title'] = $this->db->query("SELECT * FROM filter_title, product_group, category WHERE filter_title.status='active' AND filter_title.group_id=product_group.product_group_id AND filter_title.cat_id=category.category_id AND category.status='active' AND product_group.status='active' " . $show . " AND filter_title.cat_id='" . $this->db->escape_str($_GET['cat_id']) . "' ORDER BY filter_title.filter_title_id DESC LIMIT " . $data['start'] . ", " . $per_page)->result_array();
    } else {
        $total_rows = $this->db->query("SELECT COUNT(filter_title.filter_title_id) AS total_rows FROM filter_title, product_group, category WHERE filter_title.status='active' AND filter_title.group_id=product_group.product_group_id AND filter_title.cat_id=category.category_id AND category.status='active' AND product_group.status='active' " . $show . "")->row()->total_rows;

        $data['filter_title'] = $this->db->query("SELECT * FROM filter_title, product_group, category WHERE filter_title.status='active' AND filter_title.group_id=product_group.product_group_id AND filter_title.cat_id=category.category_id " . $show . " AND category.status='active' AND product_group.status='active' ORDER BY filter_title.filter_title_id DESC LIMIT " . $data['start'] . ", " . $per_page)->result_array();
    }

    $data['ttl_pages'] = ceil($total_rows / $per_page); // Corrected to use ceil for total pages
    $data['page_no'] = $page_no;

    $this->ov("filter_title", $data);
	}

	public function group_name_fetch()
	{
		echo json_encode($this->My_model->select_where("product_group",['group_category'=>$_POST['cat_id'],'status'=>'active']));	
	}
	public function search_filter_title(){
		$data['group_category']=$this->My_model->select_where("category",['status'=>'active']);
		if($_GET['group_id']!="all"){
		$data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active','cat_id'=>$_GET['cat_id'],'group_id'=>$_GET['group_id']]);
		}
		elseif($_GET['group_id']=="all"){
		$data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active','cat_id'=>$_GET['cat_id']]);
		}
		else{
		$data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active']);
		}
		$this->ov("filter_title",$data);
	}
	public function add_new_filter_title()
	{
		$sel=$this->My_model->select_where('filter_title',array('cat_id'=>$_POST['cat_id'],'group_id'=>$_POST['group_id'],'filter_title'=>$_POST['filter_title'],'status'=>'active'));
		if(isset($sel[0])){
		$this->ci_flashdata('Danger','This Filter Allready Exit..',"yes");
		redirect('Madmin/filter_title','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("filter_title",$_POST);
		$this->ci_flashdata('success','New Filter Title Added Successfully..',"yes");
		redirect('Madmin/filter_title','refresh');
	}
	}
	public function delete_filter_title($cat_id)
	{
		$this->My_model->update("filter_title",['filter_title_id'=>$cat_id],['status'=>'deleted']);
		$this->ci_flashdata('error','Filter Title Deleted Successfully..',"yes");
		redirect('Madmin/filter_title','refresh');
	}
	public function edit_filter_title($cat_id)
	{
		$data['group_category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['filter_title1']=$this->My_model->select_where("filter_title",['filter_title_id'=>$cat_id]);
		$this->ov("filter_title",$data);
		
	}
	public function update_new_filter_title()
	{
		$this->My_model->update("filter_title",['filter_title_id'=>$_POST['filter_title_id']],$_POST);
		$this->ci_flashdata('success','Filter Title Updated Successfully..',"yes");
		redirect('Madmin/filter_title','refresh');
	}
	// end_filter_title
	// filter_name
	public function filter_name()
	{
		$page_no = isset($_GET['page_no']) && is_numeric($_GET['page_no']) && $_GET['page_no'] > 0 ? $_GET['page_no'] : 1;
		extract($_GET);

		$data['group_category']=$this->My_model->select_where("category",['status'=>'active']);
		$per_page = 20;
		$data['start'] = $per_page * ($page_no - 1);
	

		if(isset($_GET['cat_id']) && $_GET['cat_id'] != null){
			$total_rows=$this->db->query("SELECT COUNT(filter_name.filter_name_id) AS ttl_rows FROM filter_name,category,product_group,filter_title WHERE filter_name.cat_id=category.category_id AND filter_name.group_id=product_group.product_group_id AND filter_name.filter_tit_id=filter_title.filter_title_id AND filter_name.cat_id='". $_GET['cat_id'] ."' AND filter_name.status='active' AND category.status='active' AND product_group.status='active' AND filter_title.status='active'")->result_array()[0]['ttl_rows'];



			$data['filter_name']=$this->db->query("SELECT * FROM filter_name,category,product_group,filter_title WHERE filter_name.cat_id=category.category_id AND filter_name.group_id=product_group.product_group_id AND filter_name.filter_tit_id=filter_title.filter_title_id AND filter_name.cat_id='". $_GET['cat_id'] ."' AND filter_name.status='active' AND category.status='active' AND product_group.status='active' AND filter_title.status='active' ORDER BY filter_name.filter_name_id DESC LIMIT ". $data['start'] ." , ".$per_page)->result_array();
		}else{
			$total_rows=$this->db->query("SELECT COUNT(filter_name.filter_name_id) AS ttl_rows FROM filter_name,category,product_group,filter_title WHERE filter_name.cat_id=category.category_id AND filter_name.group_id=product_group.product_group_id AND filter_name.filter_tit_id=filter_title.filter_title_id AND filter_name.status='active' AND category.status='active' AND product_group.status='active' AND filter_title.status='active'")->result_array()[0]['ttl_rows'];

			$data['filter_name']=$this->db->query("SELECT * FROM filter_name,category,product_group,filter_title WHERE filter_name.cat_id=category.category_id AND filter_name.group_id=product_group.product_group_id AND filter_name.filter_tit_id=filter_title.filter_title_id AND filter_name.status='active' AND category.status='active' AND product_group.status='active' AND filter_title.status='active' ORDER BY filter_name.filter_name_id DESC LIMIT ". $data['start'] .",".$per_page)->result_array();
		}

		$data['ttl_pages'] = ceil($total_rows / $per_page); // Corrected to use ceil for total pages
		$data['page_no'] = $page_no;
		// $data['filter_name']=$this->My_model->select_where("filter_name",['status'=>'active']);
		$this->ov("filter_name",$data);
	}
	public function filte_title_fetch()
	{
		echo json_encode($this->My_model->select_where("filter_title",['cat_id'=>$_POST['cat_id'],'group_id'=>$_POST['group_id'],'status'=>'active']));	
	}
	public function search_filter_name(){
		$data['group_category']=$this->My_model->select_where("category",['status'=>'active']);
		if($_GET['group_id']!="all" && $_GET['filter_tit_id']!="all"){
		$data['filter_name']=$this->My_model->select_where("filter_name",['status'=>'active','cat_id'=>$_GET['cat_id'],'group_id'=>$_GET['group_id'],'filter_tit_id'=>$_GET['filter_tit_id']]);
		}
		elseif($_GET['group_id']=="all" && $_GET['filter_tit_id']=="all"){
		$data['filter_name']=$this->My_model->select_where("filter_name",['status'=>'active','cat_id'=>$_GET['cat_id']]);
		}
		elseif($_GET['group_id']!="all" && $_GET['filter_tit_id']=="all"){
		$data['filter_name']=$this->My_model->select_where("filter_name",['status'=>'active','cat_id'=>$_GET['cat_id'],'group_id'=>$_GET['group_id'],]);
		}
		elseif($_GET['group_id']=="all" && $_GET['filter_tit_id']!="all"){
		$data['filter_name']=$this->My_model->select_where("filter_name",['status'=>'active','cat_id'=>$_GET['cat_id'],'filter_tit_id'=>$_GET['filter_tit_id']]);
		}
		else{
		$data['filter_name']=$this->My_model->select_where("filter_name",['status'=>'active']);
		}
		$this->ov("filter_name",$data);
	}
	public function add_new_filter_name()
	{
		$sel=$this->My_model->select_where('filter_name',array('cat_id'=>$_POST['cat_id'],'group_id'=>$_POST['group_id'],'filter_name'=>$_POST['filter_name'],'filter_tit_id'=>$_POST['filter_tit_id'],'status'=>'active'));
		if (isset($sel[0])) {
		$this->ci_flashdata('Danger','Filter name Allready Exists..',"yes");
		redirect('Madmin/filter_name','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("filter_name",$_POST);
		$this->ci_flashdata('success','Filter name Added Successfully..',"yes");
		redirect('Madmin/filter_name','refresh');
		}
	}
	public function delete_filter_name($cat_id)
	{
		$this->My_model->update("filter_name",['filter_name_id'=>$cat_id],['status'=>'deleted']);
		$this->ci_flashdata('error','Filter name Deleted Successfully..',"yes");
		redirect('Madmin/filter_name','refresh');
	}
	public function edit_filter_name($cat_id)
	{
		$data['group_category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['filter_name1']=$this->My_model->select_where("filter_name",['filter_name_id'=>$cat_id]);
		$this->ov("edit_filter_name",$data);
	}
	public function update_new_filter_name()
	{
		$this->My_model->update("filter_name",['filter_name_id'=>$_POST['filter_name_id']],$_POST);
		$this->ci_flashdata('success','Filter name Updated Successfully..',"yes");
		redirect('Madmin/filter_name','refresh');
	}
	// end_filter_name
	// add_gold_product
	public function add_gold_product()
	{
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['gender_category']=$this->My_model->select_where("gender_category",['status'=>'active']);
		$data['gst']=$this->My_model->select_where("gst",['status'=>'active']);
		$this->ov("add_gold_product",$data);
	}

	public function caretratefecth(){	
		$data=$this->db->query("SELECT * from rate_gold WHERE status='active' ORDER BY rate_gold_id DESC")->result_array()[0];
		echo json_encode($data);
	}

	public function filter_title_fetch()
	{
		$data=$this->db->query("SELECT * from filter_title WHERE status='active' AND cat_id='".$_POST['cat_id']."' AND group_id='".$_POST['group_id']."'")->result_array();
		echo json_encode($data);
	}

	public function filter_name_fetch()
	{
		$data=$this->db->query("SELECT * from filter_name WHERE status='active' AND cat_id='".$_POST['cat_id']."' AND group_id='".$_POST['group_id']."' AND filter_tit_id='".$_POST['filter_tit_id']."'")->result_array();
		echo json_encode($data);	
	}
	// public function add_new_gold_product()
	// {
	// 	$data['cat_id']=$_POST['cat_id'];
	// 	$data['group_id']=$_POST['group_id'];
	// 	$data['caret']=$_POST['caret'];
	// 	$data['product_name']=$_POST['product_name'];
	// 	$data['product_details']=$_POST['product_details'];
	// 	$data['product_qty']=$_POST['product_qty'];
	// 	if ($_POST['gold_rate1']!="") {
	// 	$data['gold_rate']=$_POST['gold_rate1'];
	// 	}
	// 	else{
	// 	$data['gold_rate']=$_POST['gold_rate'];
	//      }
	// 	$data['product_id']=$_POST['product_id'];
	// 	$data['billing_type']=$_POST['billing_type'];
	// 	$data['filter_title']=$_POST['filter_title'];
	// 	$data['filter_name']=$_POST['filter_name'];
	// 	$data['cross_weight']=$_POST['cross_weight'];
	// 	$data['other_weight']=$_POST['other_weight'];
	// 	$data['net_weight']=$_POST['net_weight'];
	// 	$data['labour_char']=$_POST['labour_char'];
	// 	$data['wastage_per']=$_POST['wastage_per'];
	// 	$data['other_amt']=$_POST['other_amt'];
	// 	$data['gst_per']=$_POST['gst_per'];
	// 	$data['product_image']="";
	// 	$data['fixed_amount']=$_POST['fixed_amount'];
	// 	$data['fixed_gst_per']=$_POST['fixed_gst_per'];
	// 	$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
	// 	$data['fixed_total_amt']=$_POST['fixed_total_amt'];
	// 	$n=count($_FILES['product_images']['name']);
	// 	for($i=0;$i<$n;$i++)
	// 	{
	// 		$ext=explode(".",$_FILES['product_images']['name'][$i])[count(explode(".",$_FILES['product_images']['name'][$i]))-1];
	// 		$img_name="product-".time()."-".rand(00000,99999).".".$ext;
	// 		$path="uploads/";
	// 		move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path.$img_name);

	// 		if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
	// 			// $this->watermark_image($path.$img_name);
	// 		// echo $path.$img_name;
	// 	// exit;

	// 		if($i!=0)
	// 			$data['product_image'].="||";
				
	// 		$data['product_image'].=$img_name;
	// 	}
	// 	$data['status']="active";
	// 	$data['entry_by']=$_SESSION['admin_id'];
	// 	$data['entry_time']=time();
	// 	$id=$this->My_model->insert("product_gold",$data);
	// 	if($id)
	// 	{
	// 		$n=count($_POST['other_desc_det']);
	// 		for($p=0;$p<$n;$p++)
	// 		{
	// 			$res['product_gold_id']=$id;
	// 			$res['other_desc_det']=$_POST['other_desc_det'][$p];
	// 			$res['other_amt_det']=$_POST['other_amt_det'][$p];
	// 			$this->My_model->insert("product_gold_other_price_det",$res);
	// 		}
	// 		// for()
	// 	}
	// 	$this->session->set_flashdata("Success","New Gold product Add Successfully...");
	//   redirect('Madmin/add_new_gold_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
	// }
	public function add_new_gold_product()
	{
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
		$details=$this->My_model->select_where("product_gold",['status'=>'active','product_id'=>$_POST['product_id'],'cat_id'=>$_POST['cat_id']]);

		if(!empty($details) && count($details)>0){
			$this->ci_flashdata("error", "Gold product Already Exist...");
			redirect('Madmin/add_gold_product','refresh');
		}else{
			$data['cat_id']=$_POST['cat_id'];
			$data['group_id']=$_POST['group_id'];
			$data['caret']=$_POST['caret'];
			$data['product_name']=$_POST['product_name'];
			$data['product_details']=$_POST['product_details'];
			$data['product_qty']=$_POST['product_qty'];
			if ($_POST['gold_rate1']!="") {
			$data['gold_rate']=$_POST['gold_rate1'];
			}
			else{
			$data['gold_rate']=$_POST['gold_rate'];
			}
			$data['product_id']=$_POST['product_id'];
			$data['billing_type']=$_POST['billing_type'];
			$data['filter_title']=$_POST['filter_title'];
			$data['filter_name']=$_POST['filter_name'];
			$data['cross_weight']=$_POST['cross_weight'];
			$data['other_weight']=$_POST['other_weight'];
			$data['net_weight']=$_POST['net_weight'];
			$data['labour_char']=$_POST['labour_char'];
			$data['wastage_per']=$_POST['wastage_per'];
			$data['other_amt']=$_POST['other_amt'];
			$data['gst_per']=$_POST['gst_per'];
			$data['product_image']="";
			$data['fixed_amount']=$_POST['fixed_amount'];
			$data['fixed_gst_per']=$_POST['fixed_gst_per'];
			$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
			$data['age_category']=$_POST['age_category'];
			$data['ring_size']=$_POST['ring_size'];
			
			
			if($_POST['billing_type'] == 'manual'){
				$data['total_discount_amt']=$_POST['manual_total_discount_amt'];
				$data['final_amount_after_discount']=$_POST['manual_final_amount_after_discount'];
				$data['fixed_total_amt']=$_POST['manual_total_amt'];
			}else{
				$data['total_discount_amt']=$_POST['total_discount_amt'];
				$data['final_amount_after_discount']=$_POST['final_amount_after_discount'];
				$data['fixed_total_amt']=$_POST['fixed_total_amt'];
			}
			
			if (!empty($_FILES['product_image']['name'][0])) {
				if (is_array($_FILES['product_image']['name'])) {
					$product_image_images = [];
					for ($i = 0; $i < count($_FILES['product_image']['name']); $i++) {
						$temp_name = $_FILES['product_image']['tmp_name'][$i];
						$file_name = time().rand(1111,9999)."_".$_FILES['product_image']['name'][$i];
						$uploaded_image = $this->upload_img($file_name, $temp_name, "uploads/");
			
						// Apply watermark after uploading
						$this->watermark_image("uploads/" . $uploaded_image, "image/logo3.png");
			
						$product_image_images[] = $uploaded_image;
					}
					$data['product_image'] = implode('||', $product_image_images);
				} else {
					$file_name = time().rand(1111,9999)."_".$_FILES['product_image']['name'];
					$temp_name = $_FILES['product_image']['tmp_name'];
					$uploaded_image = $this->upload_img($file_name, $temp_name, "uploads/");
			
					// Apply watermark after uploading
					$this->watermark_image("uploads/" . $uploaded_image, "image/logo3.png");
			
					$data['product_image'] = $uploaded_image;
				}
			}
			
				if($_FILES['sizeChart']['name']!="")
		{
			$ext=explode(".",$_FILES['sizeChart']['name'])[count(explode(".",$_FILES['sizeChart']['name']))-1];
			$img_name="product-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['sizeChart']['tmp_name'], $path.$img_name);
			$_POST['sizeChart']=$img_name;
			$data['sizeChart']=$_POST['sizeChart'];
		}
		
			
			
			$data['status']="active";
			$data['entry_by']=$_SESSION['admin_id'];
			$data['entry_time']=time();
			$id=$this->My_model->insert("product_gold",$data);
			if($id)
			{
				$n=count($_POST['other_desc_det']);
				for($p=0;$p<$n;$p++)
				{
					$res['product_gold_id']=$id;
					$res['other_desc_det']=$_POST['other_desc_det'][$p];
					$res['other_amt_det']=$_POST['other_amt_det'][$p];
					$this->My_model->insert("product_gold_other_price_det",$res);
				}
				
			}
			$this->ci_flashdata("success", "New Gold product Add Successfully...");
			
			redirect('Madmin/add_new_gold_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
		}

		}
		public function add_new_gold_product_filter($prod="",$cat="",$group=""){
			$data['cat']=$cat;
			$data['group']=$group;
			$data['prod']=$prod;
			$data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active','cat_id'=>$cat,'group_id'=>$group]);
			$this->ov('add_new_gold_product_filter',$data);
		}
		public function save_new_gold_product_filter(){
			$cc=count($_POST['filter_title']);
			for($i=0; $i <$cc ; $i++){		
			$c1=count($_POST['filter_name'][$i]);
			for($ii=0; $ii <$c1 ; $ii++){
			if($_POST['filter_name'][$i][$ii]!="-"){
			$data=array(
				'prod'=>$_POST['prod'],
				'cat'=>$_POST['cat'],
				'group_id'=>$_POST['group'],
				'filter_title'=>$_POST['filter_title'][$i],
				'filter_name'=>$_POST['filter_name'][$i][$ii],
				'status'=>"active",
				'entry_by'=>$_SESSION['admin_id'],
				'entry_time'=>time(),
			);
			$this->My_model->insert('product_filter',$data);
			}
		} 
		}
		$this->ci_flashdata("success","Gold product Filter Add Successfully...");
		redirect('Madmin/add_gold_product','refresh');
		}
		// add_gold_product_end
		//add_silver_product
		public function add_silver_product()
		{
			$data['category']=$this->My_model->select_where("category",['status'=>'active']);
			$data['gst']=$this->My_model->select_where("gst",['status'=>'active']);
			$this->ov("add_silver_product",$data);
		}
		public function silverratefecth(){	
		$data=$this->db->query("SELECT silver_amt from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0];
		echo json_encode($data);
		}
		public function s_filter_title_fetch()
		{
		$data=$this->db->query("SELECT * from filter_title WHERE status='active' AND cat_id='".$_POST['cat_id']."' AND group_id='".$_POST['group_id']."'")->result_array();
		echo json_encode($data);
		}
		public function s_filter_name_fetch()
		{
		$data=$this->db->query("SELECT * from filter_name WHERE status='active' AND cat_id='".$_POST['cat_id']."' AND group_id='".$_POST['group_id']."' AND filter_tit_id='".$_POST['filter_tit_id']."'")->result_array();
		echo json_encode($data);	
		}
		public function s_filter_fetch()
		{
		$data=$this->db->query("SELECT * from filter_title WHERE status='active' AND cat_id='".$_POST['cat_id']."' AND group_id='".$_POST['group_id']."'")->result_array();
		echo json_encode($data);
		}
		// public function add_new_silver_product()
		// {
		// 	$data['cat_id']=$_POST['cat_id'];
		// 	$data['group_id']=$_POST['group_id'];
		// 	$data['purity']=$_POST['purity'];
		// 	$data['product_name']=$_POST['product_name'];
		// 	$data['product_details']=$_POST['product_details'];
		// 	$data['product_qty']=$_POST['product_qty'];
		// 	if ($_POST['silver_rate1']!="") {
		// 	$data['silver_rate']=$_POST['silver_rate1'];
		// 	}
		// 	else{
		// 	$data['silver_rate']=$_POST['silver_rate'];
		//     }
		// 	$data['product_id']=$_POST['product_id'];
		// 	$data['billing_type']=$_POST['billing_type'];
		// 	$data['filter_title']=$_POST['filter_title'];
		// 	$data['filter_name']=$_POST['filter_name'];
		// 	$data['cross_weight']=$_POST['cross_weight'];
		// 	$data['other_weight']=$_POST['other_weight'];
		// 	$data['net_weight']=$_POST['net_weight'];
		// 	$data['labour_char']=$_POST['labour_char'];
		// 	$data['wastage_per']=$_POST['wastage_per'];
		// 	$data['other_amt']=$_POST['other_amt'];
		// 	$data['gst_per']=$_POST['gst_per'];
		// 	$data['fixed_amount']=$_POST['fixed_amount'];
		// 	$data['fixed_gst_per']=$_POST['fixed_gst_per'];
		// 	$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
		// 	$data['fixed_total_amt']=$_POST['fixed_total_amt'];
		// 	$data['product_image']="";
		// 	$n=count($_FILES['product_images']['name']);
		// 	for($i=0;$i<$n;$i++)
		// 	{
		// 		$ext=explode(".",$_FILES['product_images']['name'][$i])[count(explode(".",$_FILES['product_images']['name'][$i]))-1];
		// 		$img_name="product-".time()."-".rand(00000,99999).".".$ext;
		// 		$path="uploads/";
		// 		move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path.$img_name);

		// 		if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
		// 			// $this->watermark_image($path.$img_name);
				

		// 		if($i!=0)
		// 			$data['product_image'].="||";
					
		// 		$data['product_image'].=$img_name;
		// 	}
		// 	$data['status']="active";
		// 	$data['entry_by']=$_SESSION['admin_id'];
		// 	$data['entry_time']=time();
		// 	$id=$this->My_model->insert("product_gold",$data);
		// 	if($id)
		// 	{
		// 		$n=count($_POST['other_desc_det']);
		// 		for($p=0;$p<$n;$p++)
		// 		{
		// 			$res['product_gold_id']=$id;
		// 			$res['other_desc_det']=$_POST['other_desc_det'][$p];
		// 			$res['other_amt_det']=$_POST['other_amt_det'][$p];
		// 			$this->My_model->insert("product_gold_other_price_det",$res);
		// 		}
		// 	}
		// 	$this->session->set_flashdata("Success","New Silver product Add Successfully...");
		// 	redirect('Madmin/add_new_silver_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
		// }
		public function add_new_silver_product()
		{
		  //  exit();
		     $_POST['ring_size'] = implode(',', $_POST['ring_size']);
			$details=$this->My_model->select_where("product_gold",['status'=>'active','cat_id'=>$_POST['cat_id'],'product_id'=>$_POST['product_id']]);

			if(!empty($details)){
				$this->ci_flashdata("error","Sliver Product Already Exist...");
				redirect(base_url()."Madmin/add_silver_product");
			}else{
				$data['cat_id']=$_POST['cat_id'];
				$data['group_id']=$_POST['group_id'];
				$data['purity']=$_POST['purity'];
				$data['product_name']=$_POST['product_name'];
				$data['product_details']=$_POST['product_details'];
				$data['product_qty']=$_POST['product_qty'];
				if ($_POST['silver_rate1']!="") {
				$data['silver_rate']=$_POST['silver_rate1'];
				}
				else{
				$data['silver_rate']=$_POST['silver_rate'];
				}
				$data['product_id']=$_POST['product_id'];
				$data['billing_type']=$_POST['billing_type'];
				$data['filter_title']=$_POST['filter_title'];
				$data['filter_name']=$_POST['filter_name'];
				$data['cross_weight']=$_POST['cross_weight'];
				$data['other_weight']=$_POST['other_weight'];
				$data['net_weight']=$_POST['net_weight'];
				$data['labour_char']=$_POST['labour_char'];
				$data['wastage_per']=$_POST['wastage_per'];
				$data['other_amt']=$_POST['other_amt'];
				$data['gst_per']=$_POST['gst_per'];
				$data['fixed_amount']=$_POST['fixed_amount'];
				$data['fixed_gst_per']=$_POST['fixed_gst_per'];
				$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
				$data['age_category']=$_POST['age_category'];
				$data['ring_size']=$_POST['ring_size'];
			
				// $data['fixed_total_amt']=$_POST['fixed_total_amt'];
				if($_POST['billing_type'] == 'manual'){
					$data['total_discount_amt']=$_POST['manual_total_discount_amt'];
					$data['final_amount_after_discount']=$_POST['manual_final_amount_after_discount'];
					$data['fixed_total_amt']=$_POST['manual_total_amt'];
				}else{
					$data['total_discount_amt']=$_POST['total_discount_amt'];
					$data['final_amount_after_discount']=$_POST['final_amount_after_discount'];
					$data['fixed_total_amt']=$_POST['fixed_total_amt'];
				}
				// $data['product_image']="";
				// $n=count($_FILES['product_images']['name']);
				// for($i=0;$i<$n;$i++)
				// {
				// 	$ext=explode(".",$_FILES['product_images']['name'][$i])[count(explode(".",$_FILES['product_images']['name'][$i]))-1];
				// 	$img_name="product-".time()."-".rand(00000,99999).".".$ext;
				// 	$path="uploads/";
				// 	move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path.$img_name);

				// 	if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
				// 		// $this->watermark_image($path.$img_name);
					

				// 	if($i!=0)
				// 		$data['product_image'].="||";
						
				// 	$data['product_image'].=$img_name;
				// }
				if (!empty($_FILES['product_image']['name'][0])) {
					if (is_array($_FILES['product_image']['name'])) {
						$product_image_images = [];
						for ($i = 0; $i < count($_FILES['product_image']['name']); $i++) {
							$temp_name = $_FILES['product_image']['tmp_name'][$i];
							$file_name = time().rand(1111,9999)."_".$_FILES['product_image']['name'][$i];
							$uploaded_image = $this->upload_img($file_name, $temp_name, "uploads/");
				
							// Apply watermark after uploading
							$this->watermark_image("uploads/" . $uploaded_image, "image/logo3.png");
				
							$product_image_images[] = $uploaded_image;
						}
						$data['product_image'] = implode('||', $product_image_images);
					} else {
						$file_name = time().rand(1111,9999)."_".$_FILES['product_image']['name'];
						$temp_name = $_FILES['product_image']['tmp_name'];
						$uploaded_image = $this->upload_img($file_name, $temp_name, "uploads/");
				
						// Apply watermark after uploading
						$this->watermark_image("uploads/" . $uploaded_image, "image/logo3.png");
				
						$data['product_image'] = $uploaded_image;
					}
				}
				
				if($_FILES['sizeChart']['name']!="")
            		{
            			$ext=explode(".",$_FILES['sizeChart']['name'])[count(explode(".",$_FILES['sizeChart']['name']))-1];
            			$img_name="product-".time()."-".rand(00000,99999).".".$ext;
            			$path="uploads/";
            			move_uploaded_file($_FILES['sizeChart']['tmp_name'], $path.$img_name);
            			$_POST['sizeChart']=$img_name;
            		}
            			$data['sizeChart']=$_POST['sizeChart'];
				$data['status']="active";
				$data['entry_by']=$_SESSION['admin_id'];
				$data['entry_time']=time();
				$id=$this->My_model->insert("product_gold",$data);
				if($id)
				{
					$n=count($_POST['other_desc_det']);
					for($p=0;$p<$n;$p++)
					{
						$res['product_gold_id']=$id;
						$res['other_desc_det']=$_POST['other_desc_det'][$p];
						$res['other_amt_det']=$_POST['other_amt_det'][$p];
						$this->My_model->insert("product_gold_other_price_det",$res);
					}
				}
				
				$this->ci_flashdata("success","New Silver product Add Successfully...");
				redirect('Madmin/add_new_silver_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
			}
			
		}
		public function add_new_silver_product_filter($prod="",$cat="",$group=""){
		$data['cat']=$cat;
		$data['group']=$group;
		$data['prod']=$prod;
		$data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active','cat_id'=>$cat,'group_id'=>$group]);
		$this->ov('add_new_silver_product_filter',$data);
		}
		public function save_new_silver_product_filter(){
		$cc=count($_POST['filter_title']);
		for($i=0; $i <$cc ; $i++){		
		$c1=count($_POST['filter_name'][$i]);
		for($ii=0; $ii <$c1 ; $ii++){
		if($_POST['filter_name'][$i][$ii]!="-"){
		$data=array(
			'prod'=>$_POST['prod'],
			'cat'=>$_POST['cat'],
			'group_id'=>$_POST['group'],
			'filter_title'=>$_POST['filter_title'][$i],
			'filter_name'=>$_POST['filter_name'][$i][$ii],
			'status'=>"active",
			'entry_by'=>$_SESSION['admin_id'],
			'entry_time'=>time(),
		);
		$this->My_model->insert('product_filter',$data);
		}
		} 
		}
		$this->ci_flashdata("success","Silver product Filter Add Successfully...");
		redirect('Madmin/add_silver_product','refresh');
		}
		// end add_silver_product 
// add_gold_diamond_product
	public function add_gold_diamond_product(){
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['gst']=$this->My_model->select_where("gst",['status'=>'active']);
		$data['diamond_color']=$this->My_model->select_where("diamond_color",['status'=>'active']);
		$data['diamond_clarity']=$this->My_model->select_where("diamond_clarity",['status'=>'active']);
		$data['stone_shape']=$this->My_model->select_where("stone_shape",['status'=>'active']);
		$data['stone_type']=$this->My_model->select_where("stone_type",['status'=>'active']);
		$data['rate_diamond']=$this->db->query("SELECT * from rate_diamond WHERE status='active' ORDER By rate_diamond_id DESC")->result_array()[0];
		$this->ov("add_gold_diamond_product",$data);
	}
	public function stone_data_fetch(){
		$stone_type=$_POST['stone_type'];
		$stone_shape=$_POST['stone_shape'];
		$stone_color=$_POST['stone_color'];
		$stone_clarity=$_POST['stone_clarity'];
		$data['clarity']=$this->db->query("SELECT * from diamond_clarity WHERE diamond_clarity_id='".$stone_clarity."'")->result_array()[0];
		$data['color']=$this->db->query("SELECT * from diamond_color WHERE diamond_color_id='".$stone_color."'")->result_array()[0];
		$data['stone_type']=$this->db->query("SELECT * from stone_type WHERE stone_type_id='".$stone_type."'")->result_array()[0];
		$data['stone_shape']=$this->db->query("SELECT * from stone_shape WHERE stone_shape_id='".$stone_shape."'")->result_array()[0];
		echo json_encode($data);
	}
	public function stone_rate_fetch(){
		$stone_color=$_POST['stone_color'];
		$stone_clarity=$_POST['stone_clarity'];
		$data['clarity']=$this->db->query("SELECT * from diamond_clarity WHERE diamond_clarity_id='".$stone_clarity."'")->result_array()[0];
		$data['color']=$this->db->query("SELECT * from diamond_color WHERE diamond_color_id='".$stone_color."'")->result_array()[0];
		echo json_encode($data);
	}
	// public function add_gold_diamond_product_save(){
	// 	$data['cat_id']=$_POST['cat_id'];
	// 	$data['group_id']=$_POST['group_id'];
	// 	$data['caret']=$_POST['caret'];
	// 	$data['product_name']=$_POST['product_name'];
	// 	$data['product_details']=$_POST['product_details'];
	// 	$data['product_qty']=$_POST['product_qty'];
	// 	if($_POST['gold_rate1']!="") {
	// 	$data['gold_rate']=$_POST['gold_rate1'];
	// 	}
	// 	else{
	// 	$data['gold_rate']=$_POST['gold_rate'];
	// 	}
	// 	$data['product_id']=$_POST['product_id'];
	// 	$data['billing_type']=$_POST['billing_type'];
	// 	$data['filter_title']=$_POST['filter_title'];
	// 	$data['filter_name']=$_POST['filter_name'];
	// 	$data['cross_weight']=$_POST['cross_weight'];
	// 	$data['other_weight']=$_POST['other_weight'];
	// 	$data['net_weight']=$_POST['net_weight'];
	// 	$data['labour_char']=$_POST['labour_char'];
	// 	$data['wastage_per']=$_POST['wastage_per'];
	// 	$data['other_amt']=$_POST['other_amt'];
	// 	$data['gst_per']=$_POST['gst_per'];
	// 	$data['product_image']="";
	// 	$data['fixed_amount']=$_POST['fixed_amount'];
	// 	$data['fixed_gst_per']=$_POST['fixed_gst_per'];
	// 	$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
	// 	$data['fixed_total_amt']=$_POST['fixed_total_amt'];
	// 	$data['entry_type']='dgold';
	// 	$n=count($_FILES['product_images']['name']);
	// 	for($i=0;$i<$n;$i++)
	// 	{
	// 		$ext=explode(".",$_FILES['product_images']['name'][$i])[count(explode(".",$_FILES['product_images']['name'][$i]))-1];
	// 		$img_name="dgold-".time()."-".rand(00000,99999).".".$ext;
	// 		$path="uploads/";
	// 		move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path.$img_name);
	
	// 		if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
	// 			// $this->watermark_image($path.$img_name);
			
	// 		if($i!=0)
	// 			$data['product_image'].="||";
				
	// 		$data['product_image'].=$img_name;
	// 	}
	// 	$data['status']="active";
	// 	$data['entry_by']=$_SESSION['admin_id'];
	// 	$data['entry_time']=time();
	// 	$id=$this->My_model->insert("product_gold",$data);
	// 	if($id)
	// 	{
	// 		$n=count($_POST['other_desc_det']);
	// 		for($p=0;$p<$n;$p++)
	// 		{
	// 			$res['product_gold_id']=$id;
	// 			$res['other_desc_det']=$_POST['other_desc_det'][$p];
	// 			$res['other_amt_det']=$_POST['other_amt_det'][$p];
	// 			$this->My_model->insert("product_gold_other_price_det",$res);
	// 		}
	
	// 		$product_diamond_details=array(
	// 			'product_ref'=>$_POST['product_ref'],
	// 			'certificate_no'=>$_POST['certificate_no'],
	// 			'style_no'=>$_POST['style_no'],
	// 			'vendor_size'=>$_POST['vendor_size'],
	// 			'design'=>$_POST['design'],
	// 			'stone_rate'=>$_POST['stone_rate'],
	// 			'prod_id'=>$id,
	// 			'status'=>'active',
	// 		);
	// 		$this->My_model->insert("product_diamond_details",$product_diamond_details);
		
			
	// 		$nn=count($_POST['stone_type_id']);
	// 		for($pp=0;$pp<$nn;$pp++)
	// 		{
	// 			$res1['product_id']=$id;
	// 			$res1['stone_type_id']=$_POST['stone_type_id'][$pp];
	// 			$res1['stone_type_name']=$_POST['stone_type_name'][$pp];
	// 			$res1['stone_shape_id']=$_POST['stone_shape_id'][$pp];
	// 			$res1['stone_shape_name']=$_POST['stone_shape_name'][$pp];
	// 			$res1['stone_color_id']=$_POST['stone_color_id'][$pp];
	// 			$res1['stone_color_name']=$_POST['stone_color_name'][$pp];
	// 			$res1['stone_quality_id']=$_POST['stone_quality_id'][$pp];
	// 			$res1['stone_quality_name']=$_POST['stone_quality_name'][$pp];
	// 			$res1['stone_pcs']=$_POST['stone_pcs'][$pp];
	// 			$res1['stone_caret']=$_POST['stone_caret'][$pp];
	// 			$res1['stone_wt']=$_POST['stone_wt'][$pp];
	// 			$res1['stone_amt']=$_POST['stone_amt'][$pp];
	// 			$res1['status']='active';
	// 			$this->My_model->insert("product_diamond_data",$res1);
	// 		}
	// 		}
	// 	  $this->session->set_flashdata("Success","New Gold Diamond product Add Successfully...");
	// 	  redirect('Madmin/add_new_diamond_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
	// 	}
	public function add_gold_diamond_product_save(){
		$details=$this->db->select_where("product_gold",['status'=>'active','cat_id'=>$_POST['cat_id'],'product_id'=>$_POST['product_id']]);
		if(!empty($details)){
			$this->session->set_flashdata("error","Gold Diamond product Alerady Exist...");
			redirect('Madmin/add_gold_diamond_product'.$_POST['group_id'],'refresh');
		}else{
			$data['cat_id']=$_POST['cat_id'];
			$data['group_id']=$_POST['group_id'];
			$data['caret']=$_POST['caret'];
			$data['product_name']=$_POST['product_name'];
			$data['product_details']=$_POST['product_details'];
			$data['product_qty']=$_POST['product_qty'];
			if($_POST['gold_rate1']!="") {
			$data['gold_rate']=$_POST['gold_rate1'];
			}
			else{
			$data['gold_rate']=$_POST['gold_rate'];
			}
			$data['product_id']=$_POST['product_id'];
			$data['billing_type']=$_POST['billing_type'];
			$data['filter_title']=$_POST['filter_title'];
			$data['filter_name']=$_POST['filter_name'];
			$data['cross_weight']=$_POST['cross_weight'];
			$data['other_weight']=$_POST['other_weight'];
			$data['net_weight']=$_POST['net_weight'];
			$data['labour_char']=$_POST['labour_char'];
			$data['wastage_per']=$_POST['wastage_per'];
			$data['other_amt']=$_POST['other_amt'];
			$data['gst_per']=$_POST['gst_per'];
			$data['product_image']="";
			$data['fixed_amount']=$_POST['fixed_amount'];
			$data['fixed_gst_per']=$_POST['fixed_gst_per'];
			$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
			$data['fixed_total_amt']=$_POST['fixed_total_amt'];
			$data['entry_type']='dgold';
			$n=count($_FILES['product_images']['name']);
			for($i=0;$i<$n;$i++)
			{
				$ext=explode(".",$_FILES['product_images']['name'][$i])[count(explode(".",$_FILES['product_images']['name'][$i]))-1];
				$img_name="dgold-".time()."-".rand(00000,99999).".".$ext;
				$path="uploads/";
				move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path.$img_name);
	
				if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
					$this->watermark_image($path.$img_name);
				
				if($i!=0)
					$data['product_image'].="||";
					
				$data['product_image'].=$img_name;
			}
			$data['status']="active";
			$data['entry_by']=$_SESSION['admin_id'];
			$data['entry_time']=time();
			$id=$this->My_model->insert("product_gold",$data);
			if($id)
			{
				$n=count($_POST['other_desc_det']);
				for($p=0;$p<$n;$p++)
				{
					$res['product_gold_id']=$id;
					$res['other_desc_det']=$_POST['other_desc_det'][$p];
					$res['other_amt_det']=$_POST['other_amt_det'][$p];
					$this->My_model->insert("product_gold_other_price_det",$res);
				}
	
				$product_diamond_details=array(
					'product_ref'=>$_POST['product_ref'],
					'certificate_no'=>$_POST['certificate_no'],
					'style_no'=>$_POST['style_no'],
					'vendor_size'=>$_POST['vendor_size'],
					'design'=>$_POST['design'],
					'stone_rate'=>$_POST['stone_rate'],
					'prod_id'=>$id,
					'status'=>'active',
				);
				$this->My_model->insert("product_diamond_details",$product_diamond_details);
	
				$nn=count($_POST['stone_type_id']);
				for($pp=0;$pp<$nn;$pp++)
				{
					$res1['product_id']=$id;
					$res1['stone_type_id']=$_POST['stone_type_id'][$pp];
					$res1['stone_type_name']=$_POST['stone_type_name'][$pp];
					$res1['stone_shape_id']=$_POST['stone_shape_id'][$pp];
					$res1['stone_shape_name']=$_POST['stone_shape_name'][$pp];
					$res1['stone_color_id']=$_POST['stone_color_id'][$pp];
					$res1['stone_color_name']=$_POST['stone_color_name'][$pp];
					$res1['stone_quality_id']=$_POST['stone_quality_id'][$pp];
					$res1['stone_quality_name']=$_POST['stone_quality_name'][$pp];
					$res1['stone_pcs']=$_POST['stone_pcs'][$pp];
					$res1['stone_caret']=$_POST['stone_caret'][$pp];
					$res1['stone_wt']=$_POST['stone_wt'][$pp];
					$res1['stone_amt']=$_POST['stone_amt'][$pp];
					$res1['status']='active';
					$this->My_model->insert("product_diamond_data",$res1);
				}
			}
			$this->ci_flashdata("success","New Gold Diamond product Add Successfully...");
			redirect('Madmin/add_new_diamond_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
		}
	
		}
	
		public function add_new_diamond_product_filter($prod="",$cat="",$group=""){
		   $data['cat']=$cat;
		   $data['group']=$group;
		   $data['prod']=$prod;
		   $data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active','cat_id'=>$cat,'group_id'=>$group]);
		   $this->ov('add_new_diamond_product_filter',$data);
		}
		public function save_new_diamond_product_filter(){
		$cc=count($_POST['filter_title']);
		for($i=0;$i<$cc;$i++){		
		$c1=count($_POST['filter_name'][$i]);
		for($ii=0; $ii <$c1 ; $ii++){
		if($_POST['filter_name'][$i][$ii]!="-"){
		  $data=array(
			'prod'=>$_POST['prod'],
			'cat'=>$_POST['cat'],
			'group_id'=>$_POST['group'],
			'filter_title'=>$_POST['filter_title'][$i],
			'filter_name'=>$_POST['filter_name'][$i][$ii],
			'status'=>"active",
			'entry_by'=>$_SESSION['admin_id'],
			'entry_time'=>time(),
			);
		 $this->My_model->insert('product_filter',$data);
		}
		} 
		}
		$this->ci_flashdata("success","Gold Diamond product Filter Add Successfully...");
		redirect('Madmin/add_gold_diamond_product','refresh');
		}
	//end_gold_diamond_product
	
	// add_silver_diamond_product
	public function add_silver_diamond_product(){
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['gst']=$this->My_model->select_where("gst",['status'=>'active']);
		$data['diamond_color']=$this->My_model->select_where("diamond_color",['status'=>'active']);
		$data['diamond_clarity']=$this->My_model->select_where("diamond_clarity",['status'=>'active']);
		$data['stone_shape']=$this->My_model->select_where("stone_shape",['status'=>'active']);
		$data['stone_type']=$this->My_model->select_where("stone_type",['status'=>'active']);
		$data['rate_diamond']=$this->db->query("SELECT * from rate_diamond WHERE status='active' ORDER By rate_diamond_id DESC")->result_array()[0];
		$this->ov("add_silver_diamond_product",$data);
	}
		// public function add_silver_diamond_product_save(){
		// 	$data['cat_id']=$_POST['cat_id'];
		// 	$data['group_id']=$_POST['group_id'];
		// 	$data['purity']=$_POST['purity'];
		// 	$data['product_name']=$_POST['product_name'];
		// 	$data['product_details']=$_POST['product_details'];
		// 	$data['product_qty']=$_POST['product_qty'];
		// 	if($_POST['silver_rate1']!="") {
		// 	$data['silver_rate']=$_POST['silver_rate1'];
		// 	}
		// 	else{
		// 	$data['silver_rate']=$_POST['silver_rate'];
		// 	}
		// 	$data['product_id']=$_POST['product_id'];
		// 	$data['billing_type']=$_POST['billing_type'];
		// 	$data['filter_title']=$_POST['filter_title'];
		// 	$data['filter_name']=$_POST['filter_name'];
		// 	$data['cross_weight']=$_POST['cross_weight'];
		// 	$data['other_weight']=$_POST['other_weight'];
		// 	$data['net_weight']=$_POST['net_weight'];
		// 	$data['labour_char']=$_POST['labour_char'];
		// 	$data['wastage_per']=$_POST['wastage_per'];
		// 	$data['other_amt']=$_POST['other_amt'];
		// 	$data['gst_per']=$_POST['gst_per'];
		// 	$data['product_image']="";
		// 	$data['fixed_amount']=$_POST['fixed_amount'];
		// 	$data['fixed_gst_per']=$_POST['fixed_gst_per'];
		// 	$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
		// 	$data['fixed_total_amt']=$_POST['fixed_total_amt'];
		// 	$data['entry_type']='dsilver';
		// 	$n=count($_FILES['product_images']['name']);
		// 	for($i=0;$i<$n;$i++)
		// 	{
		// 		$ext=explode(".",$_FILES['product_images']['name'][$i])[count(explode(".",$_FILES['product_images']['name'][$i]))-1];
		// 		$img_name="dsilver-".time()."-".rand(00000,99999).".".$ext;
		// 		$path="uploads/";
		// 		move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path.$img_name);
				
		// 		if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
		// 			// $this->watermark_image($path.$img_name);
				
		// 		if($i!=0)
		// 			$data['product_image'].="||";				
		// 			$data['product_image'].=$img_name;
		// 	}
		// 	$data['status']="active";
		// 	$data['entry_by']=$_SESSION['admin_id'];
		// 	$data['entry_time']=time();
		// 	$id=$this->My_model->insert("product_gold",$data);
		// 	if($id)
		// 	{
		// 		$n=count($_POST['other_desc_det']);
		// 		for($p=0;$p<$n;$p++)
		// 		{
		// 			$res['product_gold_id']=$id;
		// 			$res['other_desc_det']=$_POST['other_desc_det'][$p];
		// 			$res['other_amt_det']=$_POST['other_amt_det'][$p];
		// 			$this->My_model->insert("product_gold_other_price_det",$res);
		// 		}
		
		// 		$product_diamond_details=array(
		// 			'product_ref'=>$_POST['product_ref'],
		// 			'certificate_no'=>$_POST['certificate_no'],
		// 			'style_no'=>$_POST['style_no'],
		// 			'vendor_size'=>$_POST['vendor_size'],
		// 			'design'=>$_POST['design'],
		// 			'stone_rate'=>$_POST['stone_rate'],
		// 			'prod_id'=>$id,
		// 			'status'=>'active',
		// 		);
		// 		$this->My_model->insert("product_diamond_details",$product_diamond_details);
		
		// 		$nn=count($_POST['stone_type_id']);
		// 		for($pp=0;$pp<$nn;$pp++)
		// 		{
		// 			$res1['product_id']=$id;
		// 			$res1['stone_type_id']=$_POST['stone_type_id'][$pp];
		// 			$res1['stone_type_name']=$_POST['stone_type_name'][$pp];
		// 			$res1['stone_shape_id']=$_POST['stone_shape_id'][$pp];
		// 			$res1['stone_shape_name']=$_POST['stone_shape_name'][$pp];
		// 			$res1['stone_color_id']=$_POST['stone_color_id'][$pp];
		// 			$res1['stone_color_name']=$_POST['stone_color_name'][$pp];
		// 			$res1['stone_quality_id']=$_POST['stone_quality_id'][$pp];
		// 			$res1['stone_quality_name']=$_POST['stone_quality_name'][$pp];
		// 			$res1['stone_pcs']=$_POST['stone_pcs'][$pp];
		// 			$res1['stone_caret']=$_POST['stone_caret'][$pp];
		// 			$res1['stone_wt']=$_POST['stone_wt'][$pp];
		// 			$res1['stone_amt']=$_POST['stone_amt'][$pp];
		// 			$res1['status']='active';
		// 			$this->My_model->insert("product_diamond_data",$res1);
		// 		}
		// 	}
		// 	$this->ci_flashdata("Success","New Silver Diamond Product Add Successfully...");
		// 	redirect('Madmin/add_silver_diamond_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
		// }
	// public function add_silver_diamond_product_save(){
		
	// 	$details=$this->My_model->select_where("product_gold",['status'=>'active','cat_id'=>$_POST['cat_id'],'product_id'=>$_POST['product_id']]);

	// 	if(!empty($details)){
	// 		$this->ci_flashdata("error","New Silver Diamond Product Alerady Exist...");
	// 		redirect('Madmin/add_silver_diamond_product','refresh');
	// 	}else{
	// 		$data['cat_id']=$_POST['cat_id'];
	// 		$data['group_id']=$_POST['group_id'];
	// 		$data['purity']=$_POST['purity'];
	// 		$data['product_name']=$_POST['product_name'];
	// 		$data['product_details']=$_POST['product_details'];
	// 		$data['product_qty']=$_POST['product_qty'];
	// 		if($_POST['silver_rate1']!="") {
	// 		$data['silver_rate']=$_POST['silver_rate1'];
	// 		}
	// 		else{
	// 		$data['silver_rate']=$_POST['silver_rate'];
	// 		}
	// 		$data['product_id']=$_POST['product_id'];
	// 		$data['billing_type']=$_POST['billing_type'];
	// 		$data['filter_title']=$_POST['filter_title'];
	// 		$data['filter_name']=$_POST['filter_name'];
	// 		$data['cross_weight']=$_POST['cross_weight'];
	// 		$data['other_weight']=$_POST['other_weight'];
	// 		$data['net_weight']=$_POST['net_weight'];
	// 		$data['labour_char']=$_POST['labour_char'];
	// 		$data['wastage_per']=$_POST['wastage_per'];
	// 		$data['other_amt']=$_POST['other_amt'];
	// 		$data['gst_per']=$_POST['gst_per'];
	// 		$data['product_image']="";
	// 		$data['fixed_amount']=$_POST['fixed_amount'];
	// 		$data['fixed_gst_per']=$_POST['fixed_gst_per'];
	// 		$data['fixed_gst_amt']=$_POST['fixed_gst_amt'];
	// 		$data['fixed_total_amt']=$_POST['fixed_total_amt'];
	// 		$data['entry_type']='dsilver';
	// 		$n=count($_FILES['product_images']['name']);
	// 		for($i=0;$i<$n;$i++)
	// 		{
	// 			$ext=explode(".",$_FILES['product_images']['name'][$i])[count(explode(".",$_FILES['product_images']['name'][$i]))-1];
	// 			$img_name="dsilver-".time()."-".rand(00000,99999).".".$ext;
	// 			$path="uploads/";
	// 			move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path.$img_name);
				
	// 			if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
	// 				// $this->watermark_image($path.$img_name);
				
	// 			if($i!=0)
	// 				$data['product_image'].="||";				
	// 				$data['product_image'].=$img_name;
	// 		}
	// 		$data['status']="active";
	// 		$data['entry_by']=$_SESSION['admin_id'];
	// 		$data['entry_time']=time();
	// 		$id=$this->My_model->insert("product_gold",$data);
	// 		if($id)
	// 		{
	// 			$n=count($_POST['other_desc_det']);
	// 			for($p=0;$p<$n;$p++)
	// 			{
	// 				$res['product_gold_id']=$id;
	// 				$res['other_desc_det']=$_POST['other_desc_det'][$p];
	// 				$res['other_amt_det']=$_POST['other_amt_det'][$p];
	// 				$this->My_model->insert("product_gold_other_price_det",$res);
	// 			}
	
	// 			$product_diamond_details=array(
	// 				'product_ref'=>$_POST['product_ref'],
	// 				'certificate_no'=>$_POST['certificate_no'],
	// 				'style_no'=>$_POST['style_no'],
	// 				'vendor_size'=>$_POST['vendor_size'],
	// 				'design'=>$_POST['design'],
	// 				'stone_rate'=>$_POST['stone_rate'],
	// 				'prod_id'=>$id,
	// 				'status'=>'active',
	// 			);
	// 			$this->My_model->insert("product_diamond_details",$product_diamond_details);
	
	// 			$nn=count($_POST['stone_type_id']);
	// 			for($pp=0;$pp<$nn;$pp++)
	// 			{
	// 				$res1['product_id']=$id;
	// 				$res1['stone_type_id']=$_POST['stone_type_id'][$pp];
	// 				$res1['stone_type_name']=$_POST['stone_type_name'][$pp];
	// 				$res1['stone_shape_id']=$_POST['stone_shape_id'][$pp];
	// 				$res1['stone_shape_name']=$_POST['stone_shape_name'][$pp];
	// 				$res1['stone_color_id']=$_POST['stone_color_id'][$pp];
	// 				$res1['stone_color_name']=$_POST['stone_color_name'][$pp];
	// 				$res1['stone_quality_id']=$_POST['stone_quality_id'][$pp];
	// 				$res1['stone_quality_name']=$_POST['stone_quality_name'][$pp];
	// 				$res1['stone_pcs']=$_POST['stone_pcs'][$pp];
	// 				$res1['stone_caret']=$_POST['stone_caret'][$pp];
	// 				$res1['stone_wt']=$_POST['stone_wt'][$pp];
	// 				$res1['stone_amt']=$_POST['stone_amt'][$pp];
	// 				$res1['status']='active';
	// 				$this->My_model->insert("product_diamond_data",$res1);
	// 			}
	// 		}
	// 	  $this->ci_flashdata("success","New Silver Diamond Product Add Successfully...");
	// 	  redirect('Madmin/add_silver_diamond_product_filter/'.$id.'/'.$_POST['cat_id'].'/'.$_POST['group_id'],'refresh');
	// 	}
		
	// }
	public function add_silver_diamond_product_save(){
		// echo "<pre>";
		// 		print_r($_POST);
		// 		exit;
		// Check if a similar product already exists
		$details = $this->My_model->select_where("product_gold", [
			'status' => 'active',
			'cat_id' => $_POST['cat_id'],
			'product_id' => $_POST['product_id']
		]);
	
		if(!empty($details)){
			// If product already exists, show an error message
			$this->ci_flashdata("error", "New Silver Diamond Product Already Exists...");
			redirect('Madmin/add_silver_diamond_product', 'refresh');
		} else {
			// Collect the data for the new product
			$data = [
				'cat_id' => $_POST['cat_id'],
				'group_id' => $_POST['group_id'],
				'purity' => $_POST['purity'],
				'product_name' => $_POST['product_name'],
				'product_details' => $_POST['product_details'],
				'product_qty' => $_POST['product_qty'],
				'product_id' => $_POST['product_id'],
				'billing_type' => $_POST['billing_type'],
				'filter_title' => $_POST['filter_title'],
				'filter_name' => $_POST['filter_name'],
				'cross_weight' => $_POST['cross_weight'],
				'other_weight' => $_POST['other_weight'],
				'net_weight' => $_POST['net_weight'],
				'labour_char' => $_POST['labour_char'],
				'wastage_per' => $_POST['wastage_per'],
				'other_amt' => $_POST['other_amt'],
				'gst_per' => $_POST['gst_per'],
				'fixed_amount' => $_POST['fixed_amount'],
				'fixed_gst_per' => $_POST['fixed_gst_per'],
				'fixed_gst_amt' => $_POST['fixed_gst_amt'],
				'fixed_total_amt' => $_POST['fixed_total_amt'],
				'entry_type' => 'dsilver',
				'status' => 'active',
				'entry_by' => $_SESSION['admin_id'],
				'entry_time' => time()
			];
	
			// Handle the image upload
			$n = is_array($_FILES['product_images']['name']) ? count($_FILES['product_images']['name']) : 0;
			$uploaded_images = [];
			
			for ($i = 0; $i < $n; $i++) {
				$ext = pathinfo($_FILES['product_images']['name'][$i], PATHINFO_EXTENSION);
				$img_name = "dsilver-" . time() . "-" . rand(00000, 99999) . "." . $ext;
				$path = "uploads/";
	
				// Move the file to the server
				if (move_uploaded_file($_FILES['product_images']['tmp_name'][$i], $path . $img_name)) {
					$uploaded_images[] = $img_name; // Store uploaded image names
				}
			}
	
			// If there are uploaded images, store them
			if (!empty($uploaded_images)) {
				$data['product_image'] = implode("||", $uploaded_images); // Concatenate image names with '||'
			}
	
			// Insert the new product into the 'product_gold' table
			$id = $this->My_model->insert("product_gold", $data);
	
			if ($id) {
				// Handle other details (other descriptions and amounts)
				$n = count($_POST['other_desc_det']);
				for ($p = 0; $p < $n; $p++) {
					$res = [
						'product_gold_id' => $id,
						'other_desc_det' => $_POST['other_desc_det'][$p],
						'other_amt_det' => $_POST['other_amt_det'][$p]
					];
					$this->My_model->insert("product_gold_other_price_det", $res);
				}
	
				// Insert Diamond details
				$product_diamond_details = [
					'product_ref' => $_POST['product_ref'],
					'certificate_no' => $_POST['certificate_no'],
					'style_no' => $_POST['style_no'],
					'vendor_size' => $_POST['vendor_size'],
					'design' => $_POST['design'],
					'stone_rate' => $_POST['stone_rate'],
					'prod_id' => $id,
					'status' => 'active',
				];
				
				$this->My_model->insert("product_diamond_details", $product_diamond_details);
	
				// Handle stone data
				if(isset($_POST['stone_type_id'])){
					$nn = count($_POST['stone_type_id']);
					for ($pp = 0; $pp < $nn; $pp++) {
						$res1 = [
							'product_id' => $id,
							'stone_type_id' => $_POST['stone_type_id'][$pp],
							'stone_type_name' => $_POST['stone_type_name'][$pp],
							'stone_shape_id' => $_POST['stone_shape_id'][$pp],
							'stone_shape_name' => $_POST['stone_shape_name'][$pp],
							'stone_color_id' => $_POST['stone_color_id'][$pp],
							'stone_color_name' => $_POST['stone_color_name'][$pp],
							'stone_quality_id' => $_POST['stone_quality_id'][$pp],
							'stone_quality_name' => $_POST['stone_quality_name'][$pp],
							'stone_pcs' => $_POST['stone_pcs'][$pp],
							'stone_caret' => $_POST['stone_caret'][$pp],
							'stone_wt' => $_POST['stone_wt'][$pp],
							'stone_amt' => $_POST['stone_amt'][$pp],
							'status' => 'active'
						];
						$this->My_model->insert("product_diamond_data", $res1);
					}
				}
				// Success message and redirect
				$this->ci_flashdata("success", "New Silver Diamond Product Added Successfully...");
				redirect('Madmin/add_silver_diamond_product_filter/' . $id . '/' . $_POST['cat_id'] . '/' . $_POST['group_id'], 'refresh');
			}
		}
	}
	
		public function add_silver_diamond_product_filter($prod="",$cat="",$group=""){
		   $data['cat']=$cat;
		   $data['group']=$group;
		   $data['prod']=$prod;
		   $data['filter_title']=$this->My_model->select_where("filter_title",['status'=>'active','cat_id'=>$cat,'group_id'=>$group]);
		 
		   $this->ov('add_silver_diamond_product_filter',$data);
		}
		public function save_silver_diamond_product_filter(){
		$cc=count($_POST['filter_title']);
		for($i=0;$i<$cc;$i++){		
		$c1=count($_POST['filter_name'][$i]);
		for($ii=0; $ii <$c1 ; $ii++){
		if($_POST['filter_name'][$i][$ii]!="-"){
		  $data=array(
			'prod'=>$_POST['prod'],
			'cat'=>$_POST['cat'],
			'group_id'=>$_POST['group'],
			'filter_title'=>$_POST['filter_title'][$i],
			'filter_name'=>$_POST['filter_name'][$i][$ii],
			'status'=>"active",
			'entry_by'=>$_SESSION['admin_id'],
			'entry_time'=>time(),
			);
		 $this->My_model->insert('product_filter',$data);
		}
		} 
		}
		$this->ci_flashdata("success","silver Diamond product Filter Add Successfully...");
		redirect('Madmin/add_silver_diamond_product','refresh');
		}
	//end_silver_diamond_product 
	// gold_product_list
	public function gold_product_list()
	{
		$page_no=1;
		$search="";
		extract($_GET);
		if(!isset($_GET['q']))
		{
			$show=" ";
		}
		else
		{
			$show=" AND (
				 (product_name LIKE '%".$_GET['q']."%') 
				 OR (product_id LIKE '%".$_GET['q']."%') 
				 )
			 ";
		}
		$data['madmin']=$this;
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$total_rows = $this->db->query("SELECT count(pg.prod_gold_id) as ttl_rows FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'gold' ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['products']=$this->db->query("SELECT * FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'gold' ".$show."ORDER BY prod_gold_id ASC limit ".$data['start'].",".$per_page)->result_array();
		foreach($data['products'] as $key => $row){
			$check = $this->My_model->select_where("gold_product_offer",['prod_gold_id' => $row['prod_gold_id'],'status' => 'active']);
			if(!empty($check)){

				foreach($check as $value){
					// $data['products'][$key]['offer_tbl'] = implode(",",$value['offer_tbl_id']);

					if(!isset($data['products'][$key]['offer_tbl']))
					{
						$data['products'][$key]['offer_tbl'] = $value['offer_tbl_id'];
					}
					else
					{
						$data['products'][$key]['offer_tbl'] = $data['products'][$key]['offer_tbl'].",".$value['offer_tbl_id'];
					}
				}
			}    
		} 
		$data['special_days']=$this->My_model->select_where("special_days",['status'=>'active']);
		$data['offer_list'] = $this->My_model->select_where("offer_tbl",['status' => 'active']);

		$this->ov('gold_product_list',$data);
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
            (product_name LIKE '%".$_GET['q']."%') 
            OR (product_id LIKE '%".$_GET['q']."%')
        )";
    }

    // Apply category filter if it exists
    if (isset($_GET['cat_id']) && !empty($_GET['cat_id'])) {
        $show .= " AND pg.cat_id = '".intval($_GET['cat_id'])."' ";
    }

    // Apply group filter if it exists
    if (isset($_GET['group_id']) && $_GET['group_id'] != 'all') {
        $show .= " AND pg.group_id = '".intval($_GET['group_id'])."' ";
    }

    // Fetch the products that match the filters
    $products = $this->db->query(
        "SELECT * 
         FROM product_gold as pg
         INNER JOIN category as c ON pg.cat_id = c.category_id
         WHERE pg.status = 'active'
         AND c.category_name = 'gold'
         ".$show."
         ORDER BY prod_gold_id ASC"
    )->result_array();

    // Set headers for the CSV file
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=gold_products_'.date('d-m-Y').'.csv');
    header('Pragma: no-cache');
    header('Expires: 0');

    // Open output stream
    $output = fopen('php://output', 'w');

    // Add UTF-8 BOM to fix UTF-8 issues in Excel
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

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
					echo json_encode(['status'=>'success','message' => 'Special day added successfully', 'special_days_id' => $updated_ids]);
				} else {
					echo json_encode(['status'=>'fail','message' => 'Failed to add special day']);
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


	public function search_gold_product_list()
	{
		$page_no = isset($_GET['page_no']) && is_numeric($_GET['page_no']) ? $_GET['page_no'] : 1;
		$per_page = 10;
		$search = isset($_GET['q']) ? $_GET['q'] : '';
		$group_id = isset($_GET['group_id']) ? $_GET['group_id'] : 'all';
		$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : null;
		$data['madmin']=$this;
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
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
		$data['ttl_pages']=$total_pages;
		$data['page_no']=$page_no;
		$data['start']=$start;
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

    public function gold_product_list_delete($id)
	{
		$this->My_model->update("product_gold",['prod_gold_id'=>$id],['status'=>'deleted']);
		redirect('Madmin/gold_product_list','refresh');
	}
	public function gold_product_list_update($id){
    $data['product']=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id,'status'=>'active'));
    $data['filter']=$this->My_model->select_where('product_filter',array('prod'=>$id,'status'=>'active'));
    $data['product_gold_other_price_det']=$this->My_model->select_where('product_gold_other_price_det',array('product_gold_id'=>$id));
	$data['data']=$this;
	$this->ov('gold_product_list_update',$data);
	}
	public function gold_product_list_update_del_other(){
		$other_id=$_POST['other_id'];
		$prod_id=$_POST['prod_id'];
		$query=$this->db->query("DELETE From product_gold_other_price_det WHERE product_gold_other_price_det_id='".$other_id."' AND product_gold_id='".$prod_id."'");
		if($query){
			echo json_encode(['success']);
		}
	}
	public function gold_product_list_update_information()
	{
		$data=array(
			'cat_id'=>$_POST['cat_id'],
			'group_id'=>$_POST['group_id'],
			'billing_type'=>$_POST['billing_type'],
			'caret'=>$_POST['caret'],
			'product_id'=>$_POST['product_id'],
			'product_name'=>$_POST['product_name'],
			'product_details'=>$_POST['product_details'],
			'product_qty'=>$_POST['product_qty']
		);
		$dataup=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),$data);
		if($dataup){
			$this->ci_flashdata('success', 'Successfully Update Information');
			redirect('Madmin/gold_product_list_update/'.$_POST['prod_gold_id']);
		}
	}
	public function gold_product_list_update_images(){
	$aa=count($_FILES['upimg']['name']);
	$iname="";
	for ($i=0; $i<$aa ; $i++){ 
		$imcheck=$_FILES['upimg']['name'][$i];
		if($imcheck!=""){
		  $ext=explode(".",$_FILES['upimg']['name'][$i])[count(explode(".",$_FILES['upimg']['name'][$i]))-1];
			$img_name="product-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			$path1="uploads/".$_POST['upimage'][$i];
			if (file_exists($path1)) {
				unlink($path1);
			}
			move_uploaded_file($_FILES['upimg']['tmp_name'][$i], $path.$img_name);
			
			if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
				$this->watermark_image($path.$img_name);
			

			if($i!=0){
				$iname.="||";				
			    $iname.=$img_name;
			  }
			  else{
			  	$iname.=$img_name;
			  }
		    }

		else{
			if($i!=0){
				$iname.="||";				
			    $iname.=$_POST['upimage'][$i];
			  }
			  else{
			  	$iname.=$_POST['upimage'][$i];
			  }
		}
		
	}	 
	$dataup=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),array('product_image'=>$iname));
		if($dataup){
			$this->ci_flashdata('success', 'Successfully Update Images');
			redirect('Madmin/gold_product_list_update/'.$_POST['prod_gold_id']);
		}
	}

	public function gold_product_list_update_new_images(){
        $product=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id'],'status'=>'active'));
        $pname=$product[0]['product_image'];
		$n=count($_FILES['newupimg']['name']);
		for($i=0;$i<$n;$i++)
		{
			$ext=explode(".",$_FILES['newupimg']['name'][$i])[count(explode(".",$_FILES['newupimg']['name'][$i]))-1];
			$img_name="product-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['newupimg']['tmp_name'][$i], $path.$img_name);

			if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
				$this->watermark_image($path.$img_name);
			

		   if($product[0]['product_image']==""){
		   	if($i!=0){
				$pname.="||";				
		      	$pname.=$img_name;
			  }
			  else{
		   	    $pname.=$img_name;
			  }
		   }
		   else{
		   	$pname.="||";				
			$pname.=$img_name;
		   }
			
		}
	    $dataup=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),array('product_image'=>$pname));
	    if ($dataup) {
	    	$this->ci_flashdata('success', 'Successfully Add New Images');
			redirect('Madmin/gold_product_list_update/'.$_POST['prod_gold_id']);
	    }
	}
	public function remove_product_image()
	{
		if (!isset($_POST['pr_id']) || !isset($_POST['img_name'])) {
			echo json_encode(['error' => 'Missing required parameters.']);
			return;
		}
		$pr_id = $_POST['pr_id'];
		$img_name = $_POST['img_name'];
		$p_det = $this->My_model->select_where('product_gold', ['prod_gold_id' => $pr_id, 'status' => 'active']);
		if (empty($p_det)) {
			echo json_encode(['error' => 'Product not found.']);
			return;
		}
		$p_det = $p_det[0];
		$product_image = explode("||", $p_det['product_image']);
		foreach ($product_image as $key => $image) {
			if ($image === $img_name) {
				unset($product_image[$key]);
			}
		}
		$product_image = array_values($product_image);
		$product_image_str = implode('||', $product_image);
		$this->My_model->update(
			"product_gold",
			['prod_gold_id' => $pr_id, 'status' => 'active'],
			['product_image' => $product_image_str]
		);

		echo json_encode("success");
	}
	public function gold_product_list_update_billing(){
		$data=array(
			'gold_rate'=>$_POST['gold_rate'],
			'cross_weight'=>$_POST['cross_weight'],
			'other_weight'=>$_POST['other_weight'],
			'net_weight'=>$_POST['net_weight'],
			'labour_char'=>$_POST['labour_char'],
			'wastage_per'=>$_POST['wastage_per'],
			'other_amt'=>$_POST['other_amt'],
			'gst_per'=>$_POST['gst_per'],
		);
		$up1=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),$data);
		$aa=count($_POST['other_desc_det1']);
		for($i=0; $i <$aa ; $i++) { 
			$data1=array(
				'other_desc_det'=>$_POST['other_desc_det1'][$i],
				'other_amt_det'=>$_POST['other_amt_det1'][$i],
			);
		  $this->My_model->update('product_gold_other_price_det',array('product_gold_other_price_det_id'=>$_POST['product_gold_other_price_det_id']),$data1);
		}
		if(isset($_POST['other_desc_det'])){
		$aa1=count($_POST['other_desc_det']);
		for($i=0; $i <$aa1 ; $i++){ 
			$data2=array(
				'product_gold_id'=>$_POST['prod_gold_id'],
				'other_desc_det'=>$_POST['other_desc_det'][$i],
				'other_amt_det'=>$_POST['other_amt_det'][$i],
			);
		  $this->My_model->insert('product_gold_other_price_det',$data2);
		}
	  }
	  $this->ci_flashdata('success',"Successfully Update Billing Details...");
	  redirect('Madmin/gold_product_list_update/'.$_POST['prod_gold_id']);
	}
	public function gold_product_list_View($id){
	$data['madmin']=$this;
    $data['product']=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id,'status'=>'active'));
    $data['filter']=$this->My_model->select_where('product_filter',array('prod'=>$id,'status'=>'active'));
    $data['product_gold_other_price_det']=$this->My_model->select_where('product_gold_other_price_det',array('product_gold_id'=>$id));
	$this->ov('gold_product_list_view',$data);
	}
	function goldprice($id=""){
		$data=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id))[0];
		$purity=$data['purity'];
		$cross_weight=$data['cross_weight'];
		$other_weight=$data['other_weight'];
		$net_weight=$data['net_weight'];
		// $labour_char=$data['labour_char'];
		$wastage_per=$data['wastage_per'];
		$other_amt=$data['other_amt'];
		$gst_per=$data['gst_per'];
		$caret=$data['caret'];
	
		$check  = $this->db->query("SELECT * FROM gold_product_offer WHERE prod_gold_id ='".$id."' AND status = 'active'")->result_array();
						if(!empty($check)){
							foreach($check as $key => $value){
								$offer[$key] = $this->My_model->select_where("offer_tbl",['offer_tbl_id' => $value['offer_tbl_id']])[0]['percentage'];  
							}
							$discount = max($offer);
	
							$discount_price = ($discount / 100) * $data['labour_char'] ;	
	
							$labour_char=$data['labour_char'] - $discount_price;
	
						}else{
							$labour_char=$data['labour_char'];
						}
						
		if ($data['billing_type']=="fixed"){
		return $amount=$data['fixed_total_amt'];
		}
		else{
		$price=$this->db->query("SELECT ".$caret." from rate_gold WHERE status='active' ORDER BY rate_gold_id DESC")->result_array()[0];
		 $todaysprice=$price[$caret];
		 $metal_amt=($todaysprice/10)*$net_weight;
		 $labamt=$labour_char*$net_weight;
		 $wastamt=$metal_amt*$wastage_per/100;
		 $net_amt=(float)$metal_amt+(float)$labamt+(float)$wastamt+(float)$other_amt;
		 $gstamt1=$net_amt*$gst_per/100;
		 $tot=$net_amt+$gstamt1;
		 $a=explode('.',$tot);
		 if(isset($a[1])) {
		 $b=$a[1];
		 }
		 else{
		  $b=0;
		 }
		 if($b>01){
		 $c=$a[0]+1;
		 }
		 else{
		 $c=$a[0];
		 }
		 return $c;
		}
		}
	
		function golddiamondprice($id){
		$data=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id))[0];
		$purity=$data['purity'];
		$cross_weight=$data['cross_weight'];
		$other_weight=$data['other_weight'];
		$net_weight=$data['net_weight'];
		$labour_char=$data['labour_char'];
		$wastage_per=$data['wastage_per'];
		$other_amt=$data['other_amt'];
		$gst_per=$data['gst_per'];
		$caret=$data['caret'];
		if($data['billing_type']=="fixed"){
		return $amount=$data['fixed_total_amt'];
		}
		else{
		 $price=$this->db->query("SELECT ".$caret." from rate_gold WHERE status='active' ORDER BY rate_gold_id DESC")->result_array()[0];
		 $dqnt=$this->db->query("SELECT * from product_diamond_data WHERE product_id='".$id."' AND status='active' ")->result_array();
		 $todaysprice=$price[$caret];
		 $metal_amt=($todaysprice/10)*$net_weight;
		 $metal_amt1=$this->float_rate_check(number_format($metal_amt,3,'.',''));
		 $labamt=$labour_char*$net_weight;
		 $labamt1=$this->float_rate_check(number_format($labamt,3,'.',''));	
		 $wastamt=$metal_amt*$wastage_per/100;
		 $wastamt1=$this->float_rate_check(number_format($wastamt,3,'.',''));	
		 $other_amt1=$this->float_rate_check(number_format($other_amt,3,'.',''));
		 $diamond_rate=0;
		 foreach($dqnt as $value){
		 $diamond_charges=$this->db->query("SELECT * from rate_diamond WHERE status='active' ORDER BY rate_diamond_id DESC")->result_array()[0];
		 $diamond_color=$this->db->query("SELECT * from diamond_color WHERE diamond_color_id='".$value['stone_color_id']."'")->result_array()[0];
		 $diamond_clarity=$this->db->query("SELECT * from diamond_clarity WHERE diamond_clarity_id='".$value['stone_quality_id']."'")->result_array()[0];
		 $srate=($diamond_charges['diamond_amt']/1)*$value['stone_caret'];
		 $colrate=$srate*$diamond_color['dec_amt']/100;
		 $clarate=$srate*$diamond_clarity['dec_amt']/100;
		 $stotal=$srate-$clarate-$colrate;
		 $diamond_rate+=$stotal;
		 }
		 $diamond_rate1=$this->float_rate_check(number_format($diamond_rate,3,'.',''));
		 $net_amt=$metal_amt1+$labamt1+$wastamt1+$other_amt1+$diamond_rate1;
		 $gstamt1=$net_amt*$data['gst_per']/100;
		 $gstamt2=$this->float_rate_check(number_format($gstamt1,3,'.',''));
		 $tot=$net_amt+$gstamt2;
		 $a=explode('.',$tot);
		 if (isset($a[1])) {
		 $b=$a[1];
		 }
		 else{
		 $b=0;
		 }
		 if($b>01){
		 $c=$a[0]+1;
		 }
		 else{
		 $c=$a[0];
		 }
		 return $c;
		}
		}
	
		function silverdiamondprice($id){
		$data=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id))[0];
		$purity=$data['purity'];
		$cross_weight=$data['cross_weight'];
		$other_weight=$data['other_weight'];
		$net_weight=$data['net_weight'];
		$labour_char=$data['labour_char'];
		$wastage_per=$data['wastage_per'];
		$other_amt=$data['other_amt'];
		$gst_per=$data['gst_per'];
		$caret=$data['caret'];
		if($data['billing_type']=="fixed"){
		return $amount=$data['fixed_total_amt'];
		}
		else{
		 $price=$this->db->query("SELECT * from  rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0];
		 $dqnt=$this->db->query("SELECT * from product_diamond_data WHERE product_id='".$id."' AND status='active' ")->result_array();
		 $todaysprice=$price['silver_amt'];
		 $metal_amt=($todaysprice/10)*$net_weight;
		 $metal_amt1=$this->float_rate_check(number_format($metal_amt,3,'.',''));
		 $labamt=$labour_char*$net_weight;
		 $labamt1=$this->float_rate_check(number_format($labamt,3,'.',''));	
		 $wastamt=$metal_amt*$wastage_per/100;
		 $wastamt1=$this->float_rate_check(number_format($wastamt,3,'.',''));	
		 $other_amt1=$this->float_rate_check(number_format($other_amt,3,'.',''));
		 $diamond_rate=0;
		 foreach($dqnt as $value){
		 $diamond_charges=$this->db->query("SELECT * from rate_diamond WHERE status='active' ORDER BY rate_diamond_id DESC")->result_array()[0];
		 $diamond_color=$this->db->query("SELECT * from diamond_color WHERE diamond_color_id='".$value['stone_color_id']."'")->result_array()[0];
		 $diamond_clarity=$this->db->query("SELECT * from diamond_clarity WHERE diamond_clarity_id='".$value['stone_quality_id']."'")->result_array()[0];
		 $srate=($diamond_charges['diamond_amt']/1)*$value['stone_caret'];
		 $colrate=$srate*$diamond_color['dec_amt']/100;
		 $clarate=$srate*$diamond_clarity['dec_amt']/100;
		 $stotal=$srate-$clarate-$colrate;
		 $diamond_rate+=$stotal;
		 }
		 $diamond_rate1=$this->float_rate_check(number_format($diamond_rate,3,'.',''));
		 $net_amt=$metal_amt1+$labamt1+$wastamt1+$other_amt1+$diamond_rate1;
		 $gstamt1=$net_amt*$data['gst_per']/100;
		 $gstamt2=$this->float_rate_check(number_format($gstamt1,3,'.',''));
		 $tot=$net_amt+$gstamt2;
		 $a=explode('.',$tot);
		 if (isset($a[1])) {
		 $b=$a[1];
		 }
		 else{
		 $b=0;
		 }
		 if($b>01){
		 $c=$a[0]+1;
		 }
		 else{
		 $c=$a[0];
		 }
		 return $c;
		}
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
			
	// gold_product_list
	// silver_product_list
	public function silver_product_list()
	{
		$page_no=1;
		$search="";
		extract($_GET);
		if(!isset($_GET['q']))
		{
			$show=" ";
		}
		else
		{
			$show=" AND (
				(product_name LIKE '%".$_GET['q']."%') 
				OR (product_id LIKE '%".$_GET['q']."%') 
				)
			";
		}
		$data['madmin']=$this;
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$total_rows = $this->db->query("SELECT count(pg.prod_gold_id) as ttl_rows FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'Silver' ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 70;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['total_pages']=$data['ttl_pages'];
		$data['page_no']=$page_no;
		$data['products']=$this->db->query("SELECT * FROM product_gold as pg, category as c  WHERE  pg.cat_id = c.category_id and pg.status='active' and c.category_name = 'Silver' ".$show."ORDER BY prod_gold_id ASC limit ".$data['start'].",".$per_page)->result_array();
		
		foreach($data['products'] as $key => $row){
			$check = $this->My_model->select_where("silver_product_offer",['prod_silver_id' => $row['prod_gold_id'],'status' => 'active']);
			if(!empty($check)){

				foreach($check as $value){
					// $data['products'][$key]['offer_tbl'] = implode(",",$value['offer_tbl_id']);

					if(!isset($data['products'][$key]['offer_tbl']))
					{
						$data['products'][$key]['offer_tbl'] = $value['offer_tbl_id'];
					}
					else
					{
						$data['products'][$key]['offer_tbl'] = $data['products'][$key]['offer_tbl'].",".$value['offer_tbl_id'];
					}
				}
			}    
		} 

		$data['offer_list'] = $this->My_model->select_where("offer_tbl",['status' => 'active']);
		$data['special_days']=$this->My_model->select_where("special_days",['status'=>'active']);
		$this->ov('silver_product_list',$data);
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
            (product_name LIKE '%".$_GET['q']."%') 
            OR (product_id LIKE '%".$_GET['q']."%')
        )";
    }

    if (isset($_GET['cat_id']) && !empty($_GET['cat_id'])) {
        $show .= " AND pg.cat_id = ".(int)$_GET['cat_id'];
    }

    if (isset($_GET['group_id']) && $_GET['group_id'] != 'all') {
        $show .= " AND pg.group_id = ".(int)$_GET['group_id'];
    }

    // Fetch the total number of rows for the CSV (use the same condition)
    $total_rows = $this->db->query(
        "SELECT count(pg.prod_gold_id) as ttl_rows 
         FROM product_gold as pg
         INNER JOIN category as c ON pg.cat_id = c.category_id
         WHERE pg.status = 'active'
         AND c.category_name = 'Silver'
         ".$show
    )->result_array()[0]['ttl_rows'];

    // Fetch all the products using the same filter (no pagination in this query)
    $products = $this->db->query(
        "SELECT * 
         FROM product_gold as pg
         INNER JOIN category as c ON pg.cat_id = c.category_id
         WHERE pg.status = 'active'
         AND c.category_name = 'Silver'
         ".$show
    )->result_array();

    // Set headers for CSV
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=silver_products_'.date('d-m-Y').'.csv');
    header('Pragma: no-cache');
    header('Expires: 0');

    // Open output stream
    $output = fopen('php://output', 'w');

    // Add UTF-8 BOM for proper encoding in Excel
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

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
         ".$show."
         ORDER BY prod_gold_id ASC"
    )->result_array();

    // Set headers for CSV
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=silver_products_'.date('d-m-Y').'.csv');
    header('Pragma: no-cache');
    header('Expires: 0');

    // Open output stream
    $output = fopen('php://output', 'w');

    // Add UTF-8 BOM for proper encoding in Excel
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

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
    $page_no = isset($_GET['page_no']) ? (int)$_GET['page_no'] : 1; // Default to page 1 if not provided
    $per_page = 10; // Records per page
    $start = ($page_no - 1) * $per_page; // Starting point for the query

    $data['madmin'] = $this;
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
		$this->My_model->update("product_gold",['prod_gold_id'=>$id],['status'=>'deleted']);
		redirect('Madmin/silver_product_list','refresh');
	}

	public function silver_product_list_update($id){
	$data['gst']=$this->My_model->select_where("gst",['status'=>'active']);
	$data['product']=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id,'status'=>'active'));
	$data['product'][0]['ring_size']=explode(",",$data['product'][0]['ring_size']);
	$data['filter']=$this->My_model->select_where('product_filter',array('prod'=>$id,'status'=>'active'));
	$data['product_gold_other_price_det']=$this->My_model->select_where('product_gold_other_price_det',array('product_gold_id'=>$id));
	$data['data']=$this;
// 	echo "<pre>";
// 	print_r($data['product']);
// 	exit;
	$this->ov('silver_product_list_update',$data);
	}
	public function silver_product_list_update_del_other(){
		$other_id=$_POST['other_id'];
		$prod_id=$_POST['prod_id'];
		$query=$this->db->query("DELETE From product_gold_other_price_det WHERE product_gold_other_price_det_id='".$other_id."' AND product_gold_id='".$prod_id."'");
		if($query){
			echo json_encode(['success']);
		}
	}
	public function silver_product_list_update_information(){
	      $_POST['ring_size'] = implode(',', $_POST['ring_size']);
		$data=array(
			'cat_id'=>$_POST['cat_id'],
			'group_id'=>$_POST['group_id'],
			'billing_type'=>$_POST['billing_type'],
			'purity'=>$_POST['purity'],
			'product_id'=>$_POST['product_id'],
			'product_name'=>$_POST['product_name'],
			'product_details'=>$_POST['product_details'],
			'product_qty'=>$_POST['product_qty'],
			'age_category'=>$_POST['age_category'],
			'ring_size'=>$_POST['ring_size'],
			
		);
		if($_FILES['sizeChart']['name']!="")
		{
			$ext=explode(".",$_FILES['sizeChart']['name'])[count(explode(".",$_FILES['sizeChart']['name']))-1];
			$img_name="product-".time()."-".rand(00000,99999).".".$ext;
			$path="uploads/";
			move_uploaded_file($_FILES['sizeChart']['tmp_name'], $path.$img_name);
			$_POST['sizeChart']=$img_name;
			$data['sizeChart']=$_POST['sizeChart'];
		}
		$dataup=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),$data);
		if($dataup){
			$this->ci_flashdata('success', 'Successfully Update Information');
			redirect('Madmin/silver_product_list_update/'.$_POST['prod_gold_id']);
		}
	}
	// public function silver_product_list_update_images(){
	// // $aa=count($_FILES['upimg']['name']);
	// // $iname="";
	// // for ($i=0; $i<$aa ; $i++){ 
	// // 	$imcheck=$_FILES['upimg']['name'][$i];
	// // 	if($imcheck!=""){
	// // 	$ext=explode(".",$_FILES['upimg']['name'][$i])[count(explode(".",$_FILES['upimg']['name'][$i]))-1];
	// // 		$img_name="product-".time()."-".rand(00000,99999).".".$ext;
	// // 		$path="uploads/";
	// // 		$path1="uploads/".$_POST['upimage'][$i];
	// // 		if (file_exists($path1)) {
	// // 			unlink($path1);
	// // 		}
	// // 		move_uploaded_file($_FILES['upimg']['tmp_name'][$i], $path.$img_name);
			
	// // 		if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG" || $ext=="JPEG")
	// // 			// $this->watermark_image($path.$img_name);
			

	// // 		if($i!=0){
	// // 			$iname.="||";				
	// // 			$iname.=$img_name;
	// // 		}
	// // 		else{
	// // 			$iname.=$img_name;
	// // 		}
	// // 		}

	// // 	else{
	// // 		if($i!=0){
	// // 			$iname.="||";				
	// // 			$iname.=$_POST['upimage'][$i];
	// // 		}
	// // 		else{
	// // 			$iname.=$_POST['upimage'][$i];
	// // 		}
	// // 	}
		
	// // }	 
	// // $dataup=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),array('product_image'=>$iname));
	// // 	if($dataup){
	// // 		$this->ci_flashdata('success', 'Successfully Update Images');
	// // 		redirect('Madmin/silver_product_list_update/'.$_POST['prod_gold_id']);
	// // 	}
	// echo "<pre>";
	// print_r($_POST);
	// print_r($_FILES);
	// }
	public function silver_product_list_update_images() {
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
					if (strtolower($ext) == "jpg" || strtolower($ext) == "jpeg" || strtolower($ext) == 'avif' || strtolower($ext)=='png' || strtolower($ext) == 'webp') {
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
			redirect('Madmin/silver_product_list_update/' . $prod_gold_id);
		} else {
			$this->ci_flashdata('error', 'Failed to update images');
		}
	}
	
	public function silver_product_list_update_new_images(){
		$product=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id'],'status'=>'active'));
		$pname=$product[0]['product_image'];
		$n=count($_FILES['newupimg']['name']);
		$path = "uploads/";
		for($i=0;$i<$n;$i++)
		{
			$ext=explode(".",$_FILES['newupimg']['name'][$i])[count(explode(".",$_FILES['newupimg']['name'][$i]))-1];
			$img_name = "product-" . time() . "-" . rand(10000, 99999) . "." . $ext;
			$file_path = $path . $img_name;
			// move_uploaded_file($_FILES['newupimg']['tmp_name'][$i], $path.$img_name);
			// Move the uploaded file
			if (move_uploaded_file($_FILES['newupimg']['tmp_name'][$i], $file_path)) {
				// Apply watermark for jpg/jpeg images
				if (strtolower($ext) == "jpg" || strtolower($ext) == "jpeg" || strtolower($ext) == 'avif' || strtolower($ext)=='png' || strtolower($ext) == 'webp') {
					$this->watermark_image($file_path);
				}
			}

		if($product[0]['product_image']==""){
			if($i!=0){
				$pname.="||";				
				$pname.=$img_name;
			}
			else{
				$pname.=$img_name;
			}
		}
		else{
			$pname.="||";				
			$pname.=$img_name;
		}
		}
		$dataup=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),array('product_image'=>$pname));
		
		if ($dataup) {
			$this->ci_flashdata('success', 'Successfully Add New Images');
			redirect('Madmin/silver_product_list_update/'.$_POST['prod_gold_id']);
		}
	}

	public function silver_product_list_update_billing(){
		$data=array(
			'silver_rate'=>$_POST['silver_rate'],
			'cross_weight'=>$_POST['cross_weight'],
			'other_weight'=>$_POST['other_weight'],
			'net_weight'=>$_POST['net_weight'],
			'labour_char'=>$_POST['labour_char'],
			'wastage_per'=>$_POST['wastage_per'],
			'other_amt'=>$_POST['other_amt'],
			'gst_per'=>$_POST['gst_per'],
		);
		$up1=$this->My_model->update('product_gold',array('prod_gold_id'=>$_POST['prod_gold_id']),$data);
		$aa=count($_POST['other_desc_det1']);
		for($i=0; $i <$aa ; $i++) { 
			$data1=array(
				'other_desc_det'=>$_POST['other_desc_det1'][$i],
				'other_amt_det'=>$_POST['other_amt_det1'][$i],
			);
		$this->My_model->update('product_gold_other_price_det',array('product_gold_other_price_det_id'=>$_POST['product_gold_other_price_det_id']),$data1);
		}
		if(isset($_POST['other_desc_det'])){
		$aa1=count($_POST['other_desc_det']);
		for($i=0; $i <$aa1 ; $i++){ 
			$data2=array(
				'product_gold_id'=>$_POST['prod_gold_id'],
				'other_desc_det'=>$_POST['other_desc_det'][$i],
				'other_amt_det'=>$_POST['other_amt_det'][$i],
			);
		$this->My_model->insert('product_gold_other_price_det',$data2);
		}
	}
	$this->ci_flashdata('success',"Successfully Update Billing Details...");
	redirect('Madmin/silver_product_list_update/'.$_POST['prod_gold_id']);
	}
	public function silver_product_list_update_fixed_billing(){
	extract($_POST);
	$data=[
		"fixed_amount"=>$fixed_amount,
		"fixed_gst_per"=>$fixed_gst_per,
		"fixed_gst_amt"=>$fixed_gst_amt,
		"net_weight"=>$net_weight,
		"fixed_total_amt"=>$fixed_total_amt,
		"total_discount_amt"=>$total_discount_amt,
		"final_amount_after_discount"=>$final_amount_after_discount,
	];
	$id=$this->My_model->update("product_gold",['status'=>'active','prod_gold_id'=>$prod_gold_id],$data);
	if($id){
		$this->ci_flashdata('success',"Successfully Update Billing Details...");
	}else{
		$this->ci_flashdata('error',"Failed to Update Billing Details...");
	}
	redirect("Madmin/silver_product_list_update/".$prod_gold_id);

	}
	public function silver_product_list_View($id){
		$data['product']=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id,'status'=>'active'));
		$data['filter']=$this->My_model->select_where('product_filter',array('prod'=>$id,'status'=>'active'));
		$data['product_gold_other_price_det']=$this->My_model->select_where('product_gold_other_price_det',array('product_gold_id'=>$id));
		$this->ov('silver_product_list_view',$data);
	}
	function silverprice($id="261"){
		$data=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id))[0];
		$purity=$data['purity'];
		$cross_weight=$data['cross_weight'];
		$other_weight=$data['other_weight'];
		$net_weight=$data['net_weight'];
		$labour_char=$data['labour_char'];
		$wastage_per=$data['wastage_per'];
		$other_amt=$data['other_amt'];
		$gst_per=$data['gst_per'];
		if ($data['billing_type']=="fixed"){
		return $amount=$data['fixed_total_amt'];
		}
		else{
		$price=$this->db->query("SELECT silver_amt from rate_silver WHERE status='active' ORDER BY rate_silver_id DESC")->result_array()[0];
		 $todaysprice=$price['silver_amt'];
		 $metal_amt=($todaysprice/10)*$net_weight;
		 $labamt=(float)$labour_char*(float)$net_weight;
		 $wastamt= (float)$metal_amt * (float)$wastage_per/100;
		  $net_amt=$metal_amt+$labamt+$wastamt+$other_amt;
		 $gstamt1=$net_amt*$gst_per/100;
		 $tot=$net_amt+$gstamt1;
		 $a=explode('.',$tot);
		 if(!isset($a[1]))
		 {
		 $a[1]=00;
		 }
		 $b=$a[1];
		 if($b>01){
		 $c=$a[0]+1;
		 }
		 else{
		 $c=$a[0];
		 }
		 return $c;
		}
		}
	// end_silver_product_list
	// gold_diamond_product_list
	public function gold_diamond_product_list()
	{
		$data['madmin']=$this;
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['products']=$this->My_model->select_where("product_gold",['status'=>'active','entry_type'=>'dgold']);
		$this->ov('gold_diamond_product_list',$data);
	}
	public function search_gold_diamond_product_list(){
		$data['madmin']=$this;
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		if($_GET['group_id']!="all") {
		$data['products']=$this->My_model->select_where("product_gold",['status'=>'active','entry_type'=>'dgold','cat_id'=>$_GET['cat_id'],'group_id'=>$_GET['group_id']]);
		}
		else{
		$data['products']=$this->My_model->select_where("product_gold",['status'=>'active','entry_type'=>'dgold','cat_id'=>$_GET['cat_id']]);
		}
		$this->ov('gold_diamond_product_list',$data);
	}
	public function gold_diamond_product_list_delete($id)
	{
		$this->My_model->update("product_gold",['prod_gold_id'=>$id],['status'=>'deleted']);
		redirect('Madmin/gold_diamond_product_list','refresh');
	}
	public function gold_diamond_product_list_update($id){
	echo $id;
	}
	public function gold_diamond_product_list_View($id){
		$data['product']=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id,'status'=>'active'));
		$data['filter']=$this->My_model->select_where('product_filter',array('prod'=>$id,'status'=>'active'));
		$data['product_diamond_details']=$this->My_model->select_where('product_diamond_details',array('prod_id'=>$id));
		$data['product_diamond_data']=$this->My_model->select_where('product_diamond_data',array('product_id'=>$id));
		$data['product_gold_other_price_det']=$this->My_model->select_where('product_gold_other_price_det',array('product_gold_id'=>$id));
		$this->ov('gold_diamond_product_list_view',$data);
	}
	
		
	// gold_diamond_product_list_end
	// gold_diamond_product_list
	public function silver_diamond_product_list()
	{
		$data['madmin']=$this;
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['products']=$this->db->query("SELECT * FROM product_gold WHERE status='active' AND entry_type='dsilver' ORDER BY product_gold.prod_gold_id DESC")->result_array();

		// $data['products']=$this->My_model->select_where("product_gold",['status'=>'active','entry_type'=>'dsilver']);
		$this->ov('silver_diamond_product_list',$data);
	}
	public function search_silver_diamond_product_list(){
		$data['madmin']=$this;
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		if($_GET['group_id']!="all") {
		$data['products']=$this->My_model->select_where("product_gold",['status'=>'active','entry_type'=>'dsilver','cat_id'=>$_GET['cat_id'],'group_id'=>$_GET['group_id']]);
		}
		else{
		$data['products']=$this->My_model->select_where("product_gold",['status'=>'active','entry_type'=>'dsilver','cat_id'=>$_GET['cat_id']]);
		}
		$this->ov('silver_diamond_product_list',$data);
	}
	public function silver_diamond_product_list_delete($id)
	{
		$this->My_model->update("product_gold",['prod_gold_id'=>$id],['status'=>'deleted']);
		redirect('Madmin/silver_diamond_product_list','refresh');
	}
	public function silver_diamond_product_list_update($id){
		$data['category']=$this->My_model->select_where("category",['status'=>'active']);
		$data['gst']=$this->My_model->select_where("gst",['status'=>'active']);
		$data['diamond_color']=$this->My_model->select_where("diamond_color",['status'=>'active']);
		$data['diamond_clarity']=$this->My_model->select_where("diamond_clarity",['status'=>'active']);
		$data['stone_shape']=$this->My_model->select_where("stone_shape",['status'=>'active']);
		$data['stone_type']=$this->My_model->select_where("stone_type",['status'=>'active']);
		$data['rate_diamond']=$this->db->query("SELECT * from rate_diamond WHERE status='active' ORDER By rate_diamond_id DESC")->result_array()[0];
		// $data['product_group']=$this->My_model->select_where('product_group',['status'=>'active',''])
		$data['silver_product_details']=$this->db->query("SELECT * FROM product_gold,category,product_group,product_diamond_details WHERE product_gold.cat_id=category.category_id AND product_gold.group_id=product_group.product_group_id AND product_gold.status='active' AND category.status='active' AND product_group.status='active' AND product_diamond_details.status='active' AND product_diamond_details.prod_id='$id'  AND product_gold.prod_gold_id='$id'")->result_array();
		$this->ov("silver_diamond_product_list_update",$data);

	}
	public function silver_diamond_product_list_View($id){
		$data['madmin']=$this;
		$data['product']=$this->My_model->select_where('product_gold',array('prod_gold_id'=>$id,'status'=>'active'));
		$data['filter']=$this->My_model->select_where('product_filter',array('prod'=>$id,'status'=>'active'));
		$data['product_gold_other_price_det']=$this->My_model->select_where('product_gold_other_price_det',array('product_gold_id'=>$id));
		$data['product_diamond_details']=$this->My_model->select_where('product_diamond_details',array('prod_id'=>$id));
		$data['product_diamond_data']=$this->My_model->select_where('product_diamond_data',array('product_id'=>$id));
		$this->ov('silver_diamond_product_list_view',$data);
	}
	// silver_diamond_product_list_end
	// product_filter_add
	public function product_filter_add(){
		$data['category']=$this->My_model->select_where('category',array('status'=>'active'));
		$this->ov('product_filter_add',$data);
	}
	public function prod_filter_name_fetch(){
		echo json_encode($this->My_model->select_where("filter_name",['cat_id'=>$_POST['cat_id'],'group_id'=>$_POST['group_id'],'filter_tit_id'=>$_POST['tit_id'],'status'=>'active']));	
	}
	public function product_filter_add_search(){
	$data['cat_id']=$_GET['cat_id'];
	$data['group_id']=$_GET['group_id'];
	$data['filter_tit_id']=$_GET['filter_tit_id'];
	$data['filter_name_id']=$_GET['filter_name_id'];
	$data['category_name']=$this->db->query("SELECT * from category WHERE category_id='".$_GET['cat_id']."'")->result_array()[0];
	$data['group_name']=$this->db->query("SELECT * from product_group WHERE product_group_id='".$_GET['group_id']."'")->result_array()[0];
	$data['filter_title']=$this->db->query("SELECT * from filter_title WHERE filter_title_id='".$_GET['filter_tit_id']."'")->result_array()[0];
	$data['filter_name']=$this->db->query("SELECT * from filter_name WHERE filter_name_id='".$_GET['filter_name_id']."'")->result_array()[0];
	$data['prod']=$this->db->query("SELECT * from product_gold WHERE product_gold.cat_id='".$_GET['cat_id']."'AND product_gold.group_id='".$_GET['group_id']."' AND product_gold.status='active'")->result_array();
	$data['category']=$this->My_model->select_where('category',array('status'=>'active'));
	$this->ov('product_filter_add',$data);
	}
    public function apply_filter_on_product()
	{
		$ff=$this->My_model->select_where("product_filter",$_POST);
		if(isset($ff[0]))
		{
			$this->My_model->delthis("product_filter",$_POST);
			$data['status']="removed";
		}
		else
		{
			$_POST['status']='active';
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert('product_filter',$_POST);
			$data['status']="added";
		}
		echo json_encode($data);
	 }
	// product_filter_add_end
	// admin
	public function add_admin(){
		$this->ov('add_admin');
	}
	public function save_admin_details()
	{
		$_POST['entry_date']=date('Y-m-d');
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['status']='active';
		$_POST['hidden_feature']='ON';
		$_POST['admin_position']='admin';
		$this->My_model->insert("admin_tbl",$_POST);
		$this->ci_flashdata('success','Admin Added Successfully...',"yes");
		redirect('Madmin/admin_list','refresh');

	}	
	public function admin_list()
	{
		$data['admin_list']=$this->My_model->select_where("admin_tbl",['status'=>'active']);
		$this->ov("admin_list",$data);
	}

	public function edit_admin($admin_id)
	{
		$data['admin_det']=$this->My_model->select_where("admin_tbl",['admin_tbl_id'=>$admin_id]);
		$this->ov("edit_admin",$data);
	}
	public function update_admin()
	{
		$this->My_model->update('admin_tbl',['admin_tbl_id'=>$_POST['admin_tbl_id']],$_POST);
		$this->ci_flashdata('success','Admin Updated Successfully..');
		redirect(base_url().'Madmin/admin_list','refresh');
	}
	public function delete_admin($a_id)
	{
		$this->My_model->update('admin_tbl',['admin_tbl_id'=>$a_id],['status'=>'deleted']);
		$this->ci_flashdata('error','Admin Deleted Successfully..');
		redirect(base_url().'Madmin/admin_list','refresh');	
	}
	public function admin_authontication($admin_id)
	{
		if($_SESSION['admin_position']=='master_admin')
		{
			$data['admin_det']=$this->My_model->select_where("admin_tbl",['admin_tbl_id'=>$admin_id])[0];
			$data['auths']=$this->My_model->select_where('authontication_tbl',['status'=>'active']);
			$this->ov("admin_authontication",$data);
		}
		else
		{
			redirect(base_url()."Madmin",'refresh');
		}
	}
	public function save_admin_authontication()
	{
		if ($_SESSION['admin_position'] != 'master_admin') {
			// Mark all existing records as 'deleted' for the given admin
			$this->My_model->update(
				"admin_authontication",
				['admin_id' => $_POST['admin_id']],
				['status' => 'deleted']
			);

			// Check if any checkboxes were selected
			if (!empty($_POST['authontication_tbl_id'])) {
				foreach ($_POST['authontication_tbl_id'] as $auth_id) {
					$data = [
						'admin_id' => $_POST['admin_id'],
						'authontication_tbl_id' => $auth_id,
						'status' => 'active',
						'entry_by' => $_SESSION['admin_id'],
						'entry_time' => time()
					];
					$this->My_model->insert("admin_authontication", $data);
				}
			}

			$this->ci_flashdata("success", "Authontication Added To Admin");
			redirect(base_url() . "Madmin/admin_list", 'refresh');
		} else {
			redirect(base_url() . "Madmin/admin_list", 'refresh');
		}
	}

	// order Data
	public function order_pending(){
		$page_no=1;
		$show="";
		extract($_GET);
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			$search_term = $this->db->escape_like_str($_GET['q']); 
			$show .= "AND (
				user_billing_details.name LIKE '%{$search_term}%'
				OR user_billing_details.email LIKE '%{$search_term}%'
				OR user_billing_details.phone_number LIKE '%{$search_term}%'
				OR user_billing_details.addr_village_city LIKE '%{$search_term}%'
				OR user_billing_details.addr_taluk LIKE '%{$search_term}%'
				OR user_billing_details.addr_dist LIKE '%{$search_term}%'
				OR user_billing_details.pay_amount LIKE '%{$search_term}%'
				OR user_billing_details.paid_amount LIKE '%{$search_term}%'
				OR user_billing_details.payment_mode LIKE '%{$search_term}%'
			)";
		}
		$total_rows=$this->db->query("SELECT COUNT(user_billing_details.user_billing_details_id) AS ttl_rows FROM user_billing_details WHERE user_billing_details.status='pending' ". $show ."")->result_array()[0]['ttl_rows'];

		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['order']=$this->db->query("SELECT * FROM user_billing_details WHERE user_billing_details.status='pending' ". $show ." ORDER BY user_billing_details.user_billing_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		
		// $data['order']=$this->My_model->select_where("user_billing_details",['status'=>'pending']);
		// echo "<pre>";
		// print_r($data);
		// exit;
		$this->ov("order_pending",$data);
	}
	public function order_pending_view(){
	if (isset($_GET)){
		$id=$_GET['id'];
		$data['admin']=$this;
		$data['order']=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id]);
		$data['order_details']=$this->My_model->select_where("user_cart",['billing_id'=>$id]);
		$data['other_charges']=$this->My_model->select_where("user_cart_other_char",['billing_id'=>$id]);
		$this->ov("order_pending_view",$data);
	}
	else{
		redirect('Madmin/order_pending');
	}
	}

	public function order_shift_in_processing(){
		if(isset($_POST['billing_id']))
		{
			$id=$_POST['billing_id'];
			$this->My_model->update("user_billing_details",['user_billing_details_id'=>$id],array('status' =>'processing','process_date'=>time(),'system_bill_number'=>$_POST['system_bill_number']));

			$res=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id])[0];

			$date = strtotime("+7 day");
			$msg="Placed: Order for Jewellery is placed & will be delivered by ".date('d M Y', $date).". Manage: @www.shingavijewellers.com .";

			send_massage($res['phone_number'],$msg,'1707170123743800768');

			$this->ci_flashdata('success','Order Successfully Shifted In Processing...');
			redirect(base_url().'Madmin/order_pending','refresh');
		}
	}
	public function order_shift_in_dispatch()
	{
		if(isset($_POST['tracking_id']))
		{
		$id=$_POST['billing_id'];

		$this->My_model->update("user_billing_details",['user_billing_details_id'=>$id],array('status' =>'dispatch','dispatch_date'=>time(),'courier_company'=>$_POST['courier_company'],'tracking_id'=>$_POST['tracking_id']));

		$res=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id])[0];

		$date = strtotime("+6 day");
		$msg="Shipped: Your Order has been shipped. It will be delivered by ".date('d M Y', $date)." . Manage @www.shingavijewellers.com .";
		send_massage($res['phone_number'],$msg,'1707170123758371641');


		$this->ci_flashdata('success','Order Successfully Shifted In Dispatched...');
		redirect(base_url().'Madmin/order_confirm','refresh');
	}	
	}
	public function order_shift_in_delivered()
	{
		if(isset($_GET)){
		$id=$_GET['id'];

		$this->My_model->update("user_billing_details",['user_billing_details_id'=>$id],array('status' =>'delivered','delivered_date'=>time()));


		$res=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id])[0];
		$msg="Delivered: Your  Ordered ID SHINGAVI".$res['user_billing_details_id']." was delivered   ".date('d M Y')." . Click to give feedback: @www.shingavijewellers.com .";
		send_massage($res['phone_number'],$msg,'1707170123773140543');

		$this->ci_flashdata('success','Order Successfully Shifted In Delivered...');
		redirect(base_url().'Madmin/order_dispatch','refresh');
		}
		}
	public function order_reject_save(){
		if(isset($_GET)) {
		$id=$_GET['id'];
		$this->My_model->update("user_billing_details",['user_billing_details_id'=>$id],array('status' =>'rejected','cancel_date'=>time()));
		$this->ci_flashdata('success','Order Successfully Rejected...');
		redirect(base_url().'Madmin/order_pending','refresh');
		}
	}

	public function order_cancel_save($page="order_pending")
	{
		if(isset($_GET)) {
		$id=$_GET['id'];
		$this->My_model->update("user_billing_details",['user_billing_details_id'=>$id],array('status' =>'rejected','cancel_date'=>time()));
		$this->ci_flashdata('success','Order Successfully Rejected...');
		redirect(base_url().'Madmin/'.$page,'refresh');
		// echo "<script>history.back(2);</script>";
		}
	}
	
		public function order_confirm_paid(){
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$search_term=$this->db->escape_like_str($_GET['q']); 
			$show .= "AND (
				user_billing_details.name LIKE '%{$search_term}%'
				OR user_billing_details.email LIKE '%{$search_term}%'
				OR user_billing_details.phone_number LIKE '%{$search_term}%'
				OR user_billing_details.addr_village_city LIKE '%{$search_term}%'
				OR user_billing_details.addr_taluk LIKE '%{$search_term}%'
				OR user_billing_details.addr_dist LIKE '%{$search_term}%'
				OR user_billing_details.pay_amount LIKE '%{$search_term}%'
				OR user_billing_details.paid_amount LIKE '%{$search_term}%'
				OR user_billing_details.payment_mode LIKE '%{$search_term}%'
			)";
		}
		$total_rows=$this->db->query("SELECT COUNT(user_billing_details.user_billing_details_id) AS ttl_rows FROM user_billing_details WHERE (user_billing_details.status='confirm' OR user_billing_details.status='confirm') ". $show ."")->result_array()[0]['ttl_rows'];

		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['order']=$this->db->query("SELECT * FROM user_billing_details WHERE (user_billing_details.status='confirm' OR user_billing_details.status='confirm') ". $show ." ORDER BY user_billing_details.user_billing_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		$this->ov("order_confirm_paid",$data);
	}
	
	
	// confirm
	public function order_confirm(){
		$page_no=1;
		$show="";
		extract($_GET);
		if(isset($_GET['q'])){
			$search_term=$this->db->escape_like_str($_GET['q']); 
			$show .= "AND (
				user_billing_details.name LIKE '%{$search_term}%'
				OR user_billing_details.email LIKE '%{$search_term}%'
				OR user_billing_details.phone_number LIKE '%{$search_term}%'
				OR user_billing_details.addr_village_city LIKE '%{$search_term}%'
				OR user_billing_details.addr_taluk LIKE '%{$search_term}%'
				OR user_billing_details.addr_dist LIKE '%{$search_term}%'
				OR user_billing_details.pay_amount LIKE '%{$search_term}%'
				OR user_billing_details.paid_amount LIKE '%{$search_term}%'
				OR user_billing_details.payment_mode LIKE '%{$search_term}%'
			)";
		}
		$total_rows=$this->db->query("SELECT COUNT(user_billing_details.user_billing_details_id) AS ttl_rows FROM user_billing_details WHERE user_billing_details.status='processing' ". $show ."")->result_array()[0]['ttl_rows'];

		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['order']=$this->db->query("SELECT * FROM user_billing_details WHERE user_billing_details.status='processing' ". $show ." ORDER BY user_billing_details.user_billing_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		$this->ov("order_confirm",$data);
	}
	public function order_confirm_view(){
	if (isset($_GET)){
		$id=$_GET['id'];
		$data['admin']=$this;
		$data['order']=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id]);
		$data['order_details']=$this->My_model->select_where("user_cart",['billing_id'=>$id]);
		$data['other_charges']=$this->My_model->select_where("user_cart_other_char",['billing_id'=>$id]);
		$this->ov("order_confirm_view",$data);
	}
	else{
		redirect('Madmin/order_confirm');
	}
	}
	public function order_dispatch()
	{
		$page_no=1;
		$show="";
		extract($_GET);
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			$search_term = $this->db->escape_like_str($_GET['q']); 
			$show .= "AND (
				user_billing_details.name LIKE '%{$search_term}%'
				OR user_billing_details.email LIKE '%{$search_term}%'
				OR user_billing_details.phone_number LIKE '%{$search_term}%'
				OR user_billing_details.addr_village_city LIKE '%{$search_term}%'
				OR user_billing_details.addr_taluk LIKE '%{$search_term}%'
				OR user_billing_details.addr_dist LIKE '%{$search_term}%'
				OR user_billing_details.pay_amount LIKE '%{$search_term}%'
				OR user_billing_details.paid_amount LIKE '%{$search_term}%'
				OR user_billing_details.payment_mode LIKE '%{$search_term}%'
			)";
		}
		$total_rows=$this->db->query("SELECT COUNT(user_billing_details.user_billing_details_id) AS ttl_rows FROM user_billing_details WHERE user_billing_details.status='dispatch' ". $show ."")->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['order']=$this->db->query("SELECT * FROM user_billing_details WHERE user_billing_details.status='dispatch' ". $show ." ORDER BY user_billing_details.user_billing_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		
		// $data['order']=$this->My_model->select_where("user_billing_details",['status'=>'dispatch']);
		$this->ov("order_dispatch",$data);
	}
	
	public function order_dispatch_view(){
	if (isset($_GET)){
		$id=$_GET['id'];
		$data['admin']=$this;
		$data['order']=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id]);
		$data['order_details']=$this->My_model->select_where("user_cart",['billing_id'=>$id]);
		$data['other_charges']=$this->My_model->select_where("user_cart_other_char",['billing_id'=>$id]);
		$this->ov("order_dispatch_view",$data);
	}
	else{
		redirect('Madmin/order_confirm');
	}
	}

	public function order_delivered()
	{
		$page_no=1;
		$show="";
		extract($_GET);
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			$search_term = $this->db->escape_like_str($_GET['q']); 
			$show .= "AND (
				user_billing_details.name LIKE '%{$search_term}%'
				OR user_billing_details.email LIKE '%{$search_term}%'
				OR user_billing_details.phone_number LIKE '%{$search_term}%'
				OR user_billing_details.addr_village_city LIKE '%{$search_term}%'
				OR user_billing_details.addr_taluk LIKE '%{$search_term}%'
				OR user_billing_details.addr_dist LIKE '%{$search_term}%'
				OR user_billing_details.pay_amount LIKE '%{$search_term}%'
				OR user_billing_details.paid_amount LIKE '%{$search_term}%'
				OR user_billing_details.payment_mode LIKE '%{$search_term}%'
			)";
		}
		$total_rows=$this->db->query("SELECT COUNT(user_billing_details.user_billing_details_id) AS ttl_rows FROM user_billing_details WHERE user_billing_details.status='delivered' ". $show ."")->result_array()[0]['ttl_rows'];

		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['order']=$this->db->query("SELECT * FROM user_billing_details WHERE user_billing_details.status='delivered' ". $show ." ORDER BY user_billing_details.user_billing_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		
		// $data['order']=$this->My_model->select_where("user_billing_details",['status'=>'delivered']);
		$this->ov("order_delivered",$data);
	}
	
	public function order_delivered_view(){
	if (isset($_GET)){
		$id=$_GET['id'];
		$data['admin']=$this;
		$data['order']=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id]);
		$data['order_details']=$this->My_model->select_where("user_cart",['billing_id'=>$id]);
		$data['other_charges']=$this->My_model->select_where("user_cart_other_char",['billing_id'=>$id]);
		$this->ov("order_delivered_view",$data);
	}
	else{
		redirect('Madmin/order_confirm');
	}
	}

	// cancel order
	public function order_reject(){
		$page_no=1;
		$show="";
		extract($_GET);
		if (isset($_GET['q']) && !empty($_GET['q'])) {
			$search_term = $this->db->escape_like_str($_GET['q']); 
			$show .= "AND (
				user_billing_details.name LIKE '%{$search_term}%'
				OR user_billing_details.email LIKE '%{$search_term}%'
				OR user_billing_details.phone_number LIKE '%{$search_term}%'
				OR user_billing_details.addr_village_city LIKE '%{$search_term}%'
				OR user_billing_details.addr_taluk LIKE '%{$search_term}%'
				OR user_billing_details.addr_dist LIKE '%{$search_term}%'
				OR user_billing_details.pay_amount LIKE '%{$search_term}%'
				OR user_billing_details.paid_amount LIKE '%{$search_term}%'
				OR user_billing_details.payment_mode LIKE '%{$search_term}%'
			)";
		}
		$total_rows=$this->db->query("SELECT COUNT(user_billing_details.user_billing_details_id) AS ttl_rows FROM user_billing_details WHERE user_billing_details.status='rejected' ". $show ."")->result_array()[0]['ttl_rows'];

		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		$data['order']=$this->db->query("SELECT * FROM user_billing_details WHERE user_billing_details.status='rejected' ". $show ." ORDER BY user_billing_details.user_billing_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		
		// $data['order']=$this->My_model->select_where("user_billing_details",['status'=>'rejected']);
		$this->ov("order_reject",$data);
	}
	public function order_reject_view(){
		if (isset($_GET)){
			$id=$_GET['id'];
			$data['admin']=$this;
			$data['order']=$this->My_model->select_where("user_billing_details",['user_billing_details_id'=>$id]);
			$data['order_details']=$this->My_model->select_where("user_cart",['billing_id'=>$id]);
			$data['other_charges']=$this->My_model->select_where("user_cart_other_char",['billing_id'=>$id]);
			$this->ov("order_reject_view",$data);
			
		}
		else{
			redirect('Madmin/order_confirm');
		}
	}
	// order_charges
	public function order_charges(){
		$data['order_charges']=$this->My_model->select_where("order_charges",['status'=>'active']);
		$this->ov("order_charges",$data);
	}
	public function order_charges_save(){
		$order_charges=$this->My_model->select_where("order_charges",['status'=>'active','charges_label'=>$_POST['charges_label']]);
		if(isset($order_charges[0])) {
		$this->ci_flashdata('error','This Order Charges Allready Exists...',"yes");
		redirect('Madmin/order_charges','refresh');
		}
		else{
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("order_charges",$_POST);
		$this->ci_flashdata('success','Order Charges Add Successfully...',"yes");
		redirect('Madmin/order_charges','refresh');
	    }
	}
	public function order_charges_delete($id){
		$upd=$this->My_model->update("order_charges",['charges_id'=>$id],['status'=>'deleted']);
		$this->ci_flashdata('success','Order Charges Deleted Successfully...',"yes");
		redirect('Madmin/order_charges','refresh');
	}
	public function order_charges_update(){
	   $upd=$this->My_model->update("order_charges",['charges_id'=>$_POST['charges_id']],['charges_label'=>$_POST['charges_label'],'rate'=>$_POST['rate'],'percent'=>$_POST['percent']]);
		$this->ci_flashdata('success','Order Charges Updated Successfully...',"yes");
		redirect('Madmin/order_charges','refresh');
	}

	// custom order manage
	public function policies_page_name(){
		$data['pages_name']=$this->My_model->select_where("pages_name",['status'=>'active']);
		$this->ov("policies_page_name",$data);
	}

	public function pages_name_save(){
	if(isset($_POST)) {
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("pages_name",$_POST);
		$this->ci_flashdata('success','Successfully Added Policies Page...',"yes");
		redirect('Madmin/policies_page_name','refresh');
	   }
	}
	public function pages_name_update($id=""){
	
		$upd=$this->My_model->update("pages_name",['pages_name_id'=>$_POST['pages_name_id']],['pages_name'=>$_POST['pages_name']]);
		$this->ci_flashdata('success','Successfully Update Page Name ...',"yes");
		redirect('Madmin/policies_page_name','refresh');
	}
	public function pages_name_delete($id=""){
       	$upd=$this->My_model->update("pages_name",['pages_name_id'=>$id],['status'=>'delete']);
		$this->ci_flashdata('error','Successfully Deleted Page Name ...',"yes");
		redirect('Madmin/policies_page_name','refresh');
	}
	// public function pages_name_view($id=""){
	// 	$data['pages_name']=$this->My_model->select_where("pages_name",['pages_name_id'=>$id,'status'=>'active']);
	// 	$data['pages_details']=$this->My_model->select_where("pages_details",['pages_name_id'=>$id,'status'=>'active']);
	// 	$this->ov("pages_details",$data);
	// }
	public function pages_name_view($id = "")
	{
		$data['pages_name'] = $this->My_model->select_where("pages_name", ['pages_name_id' => $id, 'status' => 'active']);
		$data['pages_details'] = $this->My_model->select_where("pages_details", ['pages_name_id' => $id, 'status' => 'active']);
		
		if (empty($data['pages_name'])) {
			$this->ci_flashdata('error', 'Page name not found.');
			redirect('Madmin/policies_page_name', 'refresh');
			return;
		}
		
		$this->ov("pages_details", $data);
	}

	public function pages_details_save(){
	if(isset($_POST)) {
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("pages_details",$_POST);
		$this->ci_flashdata('success','Successfully Added Policies Details...',"yes");
		redirect('Madmin/pages_name_view/'.$_POST['pages_name_id'],'refresh');
	   }
	}
	public function pages_details_update($id=""){
		$upd=$this->My_model->update("pages_details",['page_details_id'=>$_POST['page_details_id']],['page_title'=>$_POST['page_title'],'page_title_description'=>$_POST['page_title_description']]);
		$this->ci_flashdata('success','Successfully Update Page Name ...',"yes");
		redirect('Madmin/pages_name_view/'.$_POST['pages_name_id'],'refresh');
		
	}
	
	public function pages_details_delete($id = "")
	{
		$page_detail = $this->My_model->select_where("pages_details", ['page_details_id' => $id]);

		if (!empty($page_detail)) {
			$pages_name_id = $page_detail[0]['pages_name_id'];
			$this->My_model->update("pages_details", ['page_details_id' => $id], ['status' => 'delete']);
			$this->ci_flashdata('success', 'Successfully Deleted Page Detail...', "yes");
			redirect('Madmin/pages_name_view/' . $pages_name_id, 'refresh');
		} else {
			$this->ci_flashdata('error', 'Page Detail not found.', "yes");
			redirect('Madmin/policies_page_name', 'refresh');
		}
	}
	// custom order manage
	public function custom_jwellery(){
		$data['custom_jwellery']=$this->My_model->select_where("custom_jwellery",['status'=>'pending']);
		$this->ov("custom_jwellery",$data);
	}
	public function custom_jwellery_view($id=""){
	if(($id!="")) {
		$data['custom_jwellery']=$this->My_model->select_where("custom_jwellery",['custom_jwellery_id'=>$id]);
		$this->ov("custom_jwellery_view",$data);
	}
	}
	public function custom_jwellery_progress($id){
		$upd=$this->My_model->update("custom_jwellery",['custom_jwellery_id'=>$id],['status'=>'progress']);
		$this->ci_flashdata('success','Successfully In Progress Order ...',"yes");
		redirect('Madmin/custom_jwellery','refresh');
	}
	public function custom_jwellery_cancel($id){
		$upd=$this->My_model->update("custom_jwellery",['custom_jwellery_id'=>$id],['status'=>'cancel']);
		$this->ci_flashdata('success','Successfully Cancel Custom Jwellery ...',"yes");
		redirect('Madmin/custom_jwellery','refresh');
	}
	public function custom_jwellery_progress_list(){
		$data['custom_jwellery']=$this->My_model->select_where("custom_jwellery",['status'=>'progress']);
		$this->ov("custom_jwellery_progress",$data);
		$this->footer();	
	}
	public function custom_jwellery_progress_confirm($id){
		$upd=$this->My_model->update("custom_jwellery",['custom_jwellery_id'=>$id],['status'=>'confirm']);
		$this->ci_flashdata('success','Successfully In Confirm Order ...',"yes");
		redirect('Madmin/custom_jwellery_progress_list','refresh');
	}
	public function custom_jwellery_progress_cancel($id){
		$upd=$this->My_model->update("custom_jwellery",['custom_jwellery_id'=>$id],['status'=>'cancel']);
		$this->ci_flashdata('success','Successfully Cancel Custom Jwellery ...',"yes");
		redirect('Madmin/custom_jwellery_progress_list','refresh');
	}
	public function custom_jwellery_confirm_list(){
		$data['custom_jwellery']=$this->My_model->select_where("custom_jwellery",['status'=>'confirm']);
		$this->ov("custom_jwellery_confirm",$data);
	}
	public function custom_jwellery_cancel_list(){
		$data['custom_jwellery']=$this->My_model->select_where("custom_jwellery",['status'=>'cancel']);
		$this->ov("custom_jwellery_cancel",$data);
	}
	public function newslater_details(){
		$data['newslater_details']=$this->My_model->select_where("newslater_tbl",['status'=>'active']);
		$this->ov("newslater_details",$data);
	}
	public function update_newslater_details(){
		$newslater_details=$this->My_model->select_where("newslater_tbl",['status'=>'active']);

		if(!empty($_FILES['newslater_first_image']['name'])){
			$imagepath=FCPATH."uploads/".$newslater_details[0]['newslater_first_image'];
			if(!empty($imagepath) && file_exists($imagepath)){
				unlink($imagepath);
			}
			$newslater_first_image=time().rand(1111,9999).$_FILES['newslater_first_image']['name'];
			move_uploaded_file($_FILES['newslater_first_image']['tmp_name'],"uploads/$newslater_first_image");
			$_POST['newslater_first_image']=$newslater_first_image;
		}
		if(!empty($_FILES['newslater_second_image']['name'])){
			$imagepath=FCPATH."uploads/".$newslater_details[0]['newslater_second_image'];
			if(!empty($imagepath) && file_exists($imagepath)){
				unlink($imagepath);
			}
			$newslater_second_image=time().rand(1111,9999).$_FILES['newslater_second_image']['name'];
			move_uploaded_file($_FILES['newslater_second_image']['tmp_name'],"uploads/$newslater_second_image");
			$_POST['newslater_second_image']=$newslater_second_image;
		}
		if(!empty($_FILES['newslater_thired_image']['name'])){
			$imagepath=FCPATH."uploads/".$newslater_details[0]['newslater_thired_image'];
			if(!empty($imagepath) && file_exists($imagepath)){
				unlink($imagepath);
			}
			$newslater_thired_image=time().rand(1111,9999).$_FILES['newslater_thired_image']['name'];
			move_uploaded_file($_FILES['newslater_thired_image']['tmp_name'],"uploads/$newslater_thired_image");
			$_POST['newslater_thired_image']=$newslater_thired_image;
		}
		$_POST['entry_time']=time();
		$_POST['entry_date']=date('Y-m-d');
		$_POST['status']='active';
		$_POST['entry_by']=$_SESSION['admin_id'];
		$this->My_model->update("newslater_tbl",['status'=>'active','newslater_tbl_id'=>$_POST['newslater_tbl_id']],$_POST);
		redirect("Madmin/newslater_details");
	}
	public function today_subscriber(){
		$page_no=isset($_GET['page_no'])?$_GET['page_no']:1;
		$show="";
		if(isset($_GET['q'])){
			$show .= " AND (
			subscriber_customer_details.subcriber_details LIKE '". $_GET['q'] ."'
			)";
		}else{
			$show .= "";
		}
		$total_rows=$this->db->query("SELECT COUNT(subscriber_customer_details.subscriber_customer_details_id) AS ttl_rows FROM subscriber_customer_details WHERE status='active' AND entry_date='".date('Y-m-d')."' $show")->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['total_today_customer']=$this->db->query("SELECT * FROM subscriber_customer_details WHERE status='active' AND entry_date='".date('Y-m-d')."'". $show ." ORDER BY subscriber_customer_details.subscriber_customer_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		$this->ov("today_subscriber",$data);
	}
	public function all_subscriber(){
		$page_no=isset($_GET['page_no'])?$_GET['page_no']:1;
		$show="";
		if(isset($_GET['q'])){
			$show .= " AND (
			subscriber_customer_details.subcriber_details LIKE '". $_GET['q'] ."'
			)";
		}else{
			$show .= "";
		}
		$total_rows=$this->db->query("SELECT COUNT(subscriber_customer_details.subscriber_customer_details_id) AS ttl_rows FROM subscriber_customer_details WHERE status='active' ". $show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['total_today_customer']=$this->db->query("SELECT * FROM subscriber_customer_details WHERE status='active' ". $show ." ORDER BY subscriber_customer_details.subscriber_customer_details_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		$this->ov("all_subscriber",$data);
	}
	public function special_offers(){
		
		$page_no=isset($_GET['page_no'])?$_GET['page_no']:1;
		$show="";
		if(isset($_GET['q'])){
			$show .= " AND (
			special_days.special_day LIKE '". $_GET['q'] ."'
			)";
		}else{
			$show .= "";
		}
		$total_rows=$this->db->query("SELECT COUNT(special_days.special_days_id) AS ttl_rows FROM special_days WHERE status='active' ". $show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['special_days']=$this->db->query("SELECT * FROM special_days WHERE status='active' ". $show ." ORDER BY special_days.special_days_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();
		$this->ov("special_offers",$data);
	}
	public function save_special_offers(){
		$data=$this->My_model->select_where("special_days",['status'=>'active','special_day'=>trim($_POST['special_day'])]);
		if(!empty($data)){
			$this->ci_flashdata('info','Spcial Days Alerady Exist ...',"yes");
			redirect("Madmin/special_offers");
		}else{
			if(!empty($_FILES['special_banner_image']['name'])){
				$special_banner_image=time().rand(1111,9999).$_FILES['special_banner_image']['name'];
				move_uploaded_file($_FILES['special_banner_image']['tmp_name'],"uploads/$special_banner_image");
				$_POST['special_banner_image']=$special_banner_image;
			}
		$_POST['entry_time']=time();
		$_POST['entry_date']=date('Y-m-d');
		$_POST['status']='active';
		$_POST['entry_by']=$_SESSION['admin_id'];
		$this->My_model->insert("special_days",$_POST);
		$this->ci_flashdata('success','Spcial Days Save Successfully ...',"yes");
		redirect("Madmin/special_offers");
		}

	}
	public function delete_spcial_offer($special_days_id){

		$id=$this->My_model->delthis("special_days",['status'=>'active','special_days_id'=>$special_days_id]);
		if($id){
			$this->ci_flashdata('success','Spcial Days Deleted Successfully ...',"yes");
			redirect("Madmin/special_offers");
		}else{
			$this->ci_flashdata('error','Something Went Wrong ...',"yes");
			redirect("Madmin/special_offers");
		}
	}
	public function edit_special_offer($special_days_id){
		$page_no=isset($_GET['page_no'])?$_GET['page_no']:1;
		$show="";
		if(isset($_GET['q'])){
			$show .= " AND (
			special_days.special_day LIKE '". $_GET['q'] ."'
			)";
		}else{
			$show .= "";
		}
		$total_rows=$this->db->query("SELECT COUNT(special_days.special_days_id) AS ttl_rows FROM special_days WHERE status='active' ". $show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['special_days']=$this->db->query("SELECT * FROM special_days WHERE status='active' ". $show ." ORDER BY special_days.special_days_id DESC LIMIT ". $data['start'] ." , " . $per_page)->result_array();

		$data['special_details']=$this->My_model->select_where("special_days",['status'=>'active','special_days_id'=>$special_days_id]);

		$this->ov("special_offers",$data);
	}
	public function update_special_offers(){
		if(!empty($_FILES['special_banner_image']['name'])){
			$special_banner_image=time().rand(1111,9999).$_FILES['special_banner_image']['name'];
			move_uploaded_file($_FILES['special_banner_image']['tmp_name'],"uploads/$special_banner_image");
			$_POST['special_banner_image']=$special_banner_image;
		}
		$id=$this->My_model->update("special_days",['status'=>'active','special_days_id'=>$_POST['special_days_id']],$_POST);
		if($id){
			$this->ci_flashdata('success','Spcial Days Updated Successfully ...',"yes");
			redirect("Madmin/special_offers");
		}else{
			$this->ci_flashdata('error','Something Went Wrong ...',"yes");
			redirect("Madmin/special_offers");
		}

	}
	
	public function job_applied_details(){
		$page_no=1;
		$search="";
		extract($_GET);
		if(!isset($_GET['q']))
		{
			$show=" ";
		}
		else
		{
			$show=" AND (
				 (job_applied_tbl.name LIKE '%".$_GET['q']."%') 
				 OR (job_applied_tbl.email LIKE '%".$_GET['q']."%') 
				 OR (job_applied_tbl.mobile LIKE '%".$_GET['q']."%') 
				 )
			 ";
		}
		$total_rows = $this->db->query("SELECT count(job_applied_tbl.job_applied_tbl_id) as ttl_rows FROM job_applied_tbl WHERE status='active' ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 10;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;
		$data['application_details']=$this->db->query("SELECT * FROM job_applied_tbl WHERE status='active' ". $show ." ORDER BY job_applied_tbl.job_applied_tbl_id DESC LIMIT ". $data['start'] .",".$per_page)->result_array();
		$this->ov("job_applied_details",$data);
	}

	// api 
	public function add_product_label()
	{
		// start 
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
					echo json_encode(['status'=>'success','message' => 'Label added successfully', 'label' => $update_label]);
				} else {
					echo json_encode(['status'=>'fail','message' => 'Failed to add label']);
				}
			} else {
				// Special day is already associated
				echo json_encode(['status'=>'info','message' => 'Label already added']);
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
	
	// end api 
	public function delivery_charges(){
		$data['delivery_charges']=$this->My_model->select_where("delivery_charges_per_tbl",['status'=>'active']);
		$this->ov("delivery_charges",$data);
	}
	public function save_delivery_charges(){
		$details=$this->My_model->select_where("delivery_charges_per_tbl",['status'=>'active','minamt_purchase_product'=>$_POST['minamt_purchase_product'],'purchase_percentage'=>$_POST['purchase_percentage']]);
		if(!empty($details)){
			$this->ci_flashdata('info','Delivery Charges Alerady Exist ...',"yes");
			redirect("Madmin/delivery_charges");

		}else{
			$_POST['entry_time']=time();
			$_POST['entry_date']=date('Y-m-d');
			$_POST['status']='active';
			$_POST['entry_by']=$_SESSION['admin_id'];
			$this->My_model->insert("delivery_charges_per_tbl",$_POST);
			$this->ci_flashdata('success','Delivery Charges Added Successfully ...',"yes");
			redirect("Madmin/delivery_charges");
		}
		
	}
	public function edit_delivery_charges($delivery_charges_per_tbl_id){
		$data['del_charge']=$this->My_model->select_where("delivery_charges_per_tbl",['status'=>'active','delivery_charges_per_tbl_id'=>$delivery_charges_per_tbl_id]);
		$data['delivery_charges']=$this->My_model->select_where("delivery_charges_per_tbl",['status'=>'active']);
		$this->ov("delivery_charges",$data);
	}
	public function update_delivery_charges(){
		$this->My_model->update("delivery_charges_per_tbl",['status'=>'active','delivery_charges_per_tbl_id'=>$_POST['delivery_charges_per_tbl_id']],$_POST);
		$this->ci_flashdata('success','Delivery Charges Updated Successfully ...',"yes");
			redirect("Madmin/delivery_charges");

	}
	public function delete_delivery_charges($delivery_charges_per_tbl_id){
		$this->My_model->delthis("delivery_charges_per_tbl",['status'=>'active','delivery_charges_per_tbl_id'=>$delivery_charges_per_tbl_id]);
		$this->ci_flashdata('error','Delivery Charges Deleted Successfully ...',"yes");
		redirect("Madmin/delivery_charges");
	}
	public function silver_product_list_delete_all($selected_product) {
		$selected_product = urldecode($selected_product);
		$product_ids = explode(',', $selected_product);
		echo "<pre>";
		print_r($product_ids);
		if(!empty($product_ids) && count($product_ids)){
			foreach($product_ids as $key=>$row){
				$id=$this->My_model->update("product_gold",['status'=>'active','prod_gold_id'=>$row],['status'=>'deleted']);
			}
		}
		redirect("Madmin/silver_product_list");
		// echo "product deleted successfully";

	}
	public function gold_product_list_delete_all($selected_product) {
		$selected_product = urldecode($selected_product);
		$product_ids = explode(',', $selected_product);
		echo "<pre>";
		print_r($product_ids);
		if(!empty($product_ids) && count($product_ids)){
			foreach($product_ids as $key=>$row){
				$id=$this->My_model->update("product_gold",['status'=>'active','prod_gold_id'=>$row],['status'=>'deleted']);
			}
		}
		redirect("Madmin/gold_product_list");
		// echo "product deleted successfully";

	}
	public function update_featured_video(){
		$data['details']=$this->My_model->select_where("thumbnail_tbl",['status'=>'active']);
		$this->ov("update_featured_video",$data);
	}
	public function update_home_featured_video()
	{
		if(!empty($_FILES['thumbnail_image']['name'])){
			$thumbnail_image=time().rand(1111,9999).$_FILES['thumbnail_image']['name'];
			move_uploaded_file($_FILES['thumbnail_image']['tmp_name'],"uploads/$thumbnail_image");
			$data['thumbnail_image']=$thumbnail_image;
		}
		if(!empty($_FILES['thumbnail_video']['name'])){
			$thumbnail_video=time().rand(1111,9999).$_FILES['thumbnail_video']['name'];
			move_uploaded_file($_FILES['thumbnail_video']['tmp_name'],"uploads/$thumbnail_video");
			$data['thumbnail_video']=$thumbnail_video;
		}
		$data['entry_time']=time();
		$data['entry_date']=date('Y-m-d');
		$data['status']='active';
		$this->My_model->update("thumbnail_tbl",['status'=>'active','thumbnail_tbl_id'=>1],$data);
		$this->ci_flashdata('success','Thumbnail Image Updated Successfully ...',"yes");
		redirect("Madmin/update_featured_video");
	}

	public function faq_section(){
		$data['faq_details']=$this->db->query("SELECT * FROM faq_tbl WHERE status='active' ORDER BY faq_tbl.faq_tbl_id DESC")->result_array();
		$this->ov("faq_section",$data);
	}
	public function add_faq_section(){
		
		$_POST['entry_time']=time();
		$_POST['entry_date']=date('Y-m-d');
		$_POST['status']='active';
		$this->My_model->insert("faq_tbl",$_POST);
		redirect("Madmin/faq_section");
		
	}
	public function edit_faq_details($faq_tbl_id){
		$data['faq_data']=$this->My_model->select_where("faq_tbl",['status'=>'active','faq_tbl_id'=>$faq_tbl_id]);
		$data['faq_details']=$this->db->query("SELECT * FROM faq_tbl WHERE status='active' ORDER BY faq_tbl.faq_tbl_id DESC")->result_array();
		$this->ov("faq_section",$data);
	}
	public function update_faq_section(){
		$this->My_model->update("faq_tbl",['status'=>'active','faq_tbl_id'=>$_POST['faq_tbl_id']],$_POST);
		redirect("Madmin/faq_section");
	}
	public function delete_faq_details($faq_tbl_id){
		$this->My_model->delthis("faq_tbl",['status'=>"active",'faq_tbl_id'=>$faq_tbl_id]);
		redirect("Madmin/faq_section");
	}

	public function delivery_cycle(){
		$data['details']=$this->My_model->select_where("delivery_cycle_tbl",['status'=>'active']);
		$this->ov("delivery_cycle",$data);
	}
	public function save_delivery_cycle_details(){
		print_r($_POST);
		$_POST['entry_time']=time();
		$_POST['entry_date']=date('Y-m-d');
		$_POST['status']='active';
		$_POST['entry_by']=$_SESSION['admin_id'];
		$this->My_model->insert("delivery_cycle_tbl",$_POST);
		redirect(base_url()."Madmin/delivery_cycle");
	}
	public function edit_delivery_cycle($delivery_cycle_tbl_id){
		$data['delivery_data']=$this->My_model->select_where("delivery_cycle_tbl",['status'=>'active','delivery_cycle_tbl_id'=>$delivery_cycle_tbl_id]);
		$data['details']=$this->My_model->select_where("delivery_cycle_tbl",['status'=>'active']);
		$this->ov("delivery_cycle",$data);
	}
	public function update_delivery_cycle_details(){
		$this->My_model->update("delivery_cycle_tbl",['status'=>'active','delivery_cycle_tbl_id'=>$_POST['delivery_cycle_tbl_id']],$_POST);
		redirect("Madmin/delivery_cycle");
	}
	public function delete_delivery_cycle($delivery_cycle_tbl_id){
		$this->My_model->update("delivery_cycle_tbl",['status'=>'active','delivery_cycle_tbl_id'=>$delivery_cycle_tbl_id],['status'=>'deleted']);
		redirect("Madmin/delivery_cycle");
	}
	public function gender_category()
    {
        $data['det'] = [];
        if ($this->input->get('edit_id')) {
            $data['det'] = $this->My_model->select_where('gender_category', ['gender_category_id' => $this->input->get('edit_id')]);
        }
    
        $data['list'] = $this->My_model->select_where('gender_category',['status'=>'active']);
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
            $this->My_model->update('gender_category',['gender_category_id' => $this->input->post('gender_category_id')],$_POST);
            $this->session->set_flashdata('msg', 'Updated successfully');
        } else {
            $this->My_model->insert('gender_category', $data);
            $this->session->set_flashdata('msg', 'Saved successfully');
        }
    
        redirect('Madmin/gender_category');
    }
    
    public function delete_gender_category($id)
    {
        $this->My_model->update('gender_category', ['gender_category_id' => $id,'status'=>'active'],['status'=>'deleted']);
        $this->session->set_flashdata('msg', 'Deleted successfully');
        redirect('Madmin/gender_category');
    }

}
?>