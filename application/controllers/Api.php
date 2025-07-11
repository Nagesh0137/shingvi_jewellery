<?php

$received_by_input_data = json_decode(file_get_contents("php://input"),true);
if(!empty($received_by_input_data))
	$_POST=$received_by_input_data;


defined('BASEPATH') OR exit('No direct script access allowed');
class api extends CI_Controller
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
		$this->load->library('form_validation');
		$this->load->library('session');
		$config['upload_path']= './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		date_default_timezone_set('Asia/Kolkata');
    	// required headers
		header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");
		header("Access-Control-Allow-Methods: POST");
		header("Access-Control-Allow-Methods", "DELETE, POST, GET, OPTIONS");
		header("Access-Control-Max-Age: 3600");
		header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	}
	function upload_img($imgname,$imgtemp,$path="uploads/")
	{
		if($imgname!="")
		{
			$fname=time().rand(00000000,99999999).".".explode(".",$imgname)[count(explode(".",$imgname))-1];
			$path1=$path.$fname;
			move_uploaded_file($imgtemp,$path1);
			return $fname;
		}
		else
			return $imgname;

	}
	public function login_emp()
	{
		if(isset($_POST)){
			$data = $this->My_model->select_where("emp_tbl",['emp_mobile_no'=>$_POST['emp_mobile_no'],'emp_password'=>$_POST['password']]);
			$supp_data = $this->My_model->select_where("supplier_tbl",['supplier_mobile_no'=>$_POST['emp_mobile_no'],'supplier_password'=>$_POST['password'],'status'=>'active']);

			if(isset($data[0]))
			{
					$planthead=$this->My_model->select_where("plant_tbl",['emp_id'=>$data[0]['emp_tbl_id'],'status'=>'active']);
					$q=$this->db->last_query();
					if(isset($planthead[0]['status']))
					{
						$plant_head='yes';
						$plant_id=$planthead[0]['plant_tbl_id'];
					}
					else{
						$plant_head='no';
						$plant_id='-';
					}

					$token = time().$_POST['emp_mobile_no'].date('M').$_POST['emp_mobile_no'].date('y');
					$_POST['token'] = md5($token);
					if(!empty($data[0]['token']) && $data[0]['token']=='')
					{
						$token=$data[0]['token'];
					}
					else{
						$this->My_model->update("emp_tbl",['emp_tbl_id'=>$data[0]['emp_tbl_id']],['token'=>$_POST['token']]);
						$job_data=$this->My_model->select_where("job_position_tbl",['status'=>'active','job_position_tbl_id'=>$data[0]['job_position_id']]);
						$token=$this->My_model->select_where("emp_tbl",['emp_tbl_id'=>$data[0]['emp_tbl_id']])[0]['token'];
					}
				echo json_encode(['post Data'=>$_POST,'status'=>'success','token'=>$token,'data'=>$data,'login'=>'employee','job_position'=>$job_data[0]['position_name'],'planthead'=>$plant_head,'Query'=>$q,'plant_id'=>$plant_id]);
			}
			else if(isset($supp_data[0]))
			{
					$token = time().$_POST['emp_mobile_no'].date('M').$_POST['emp_mobile_no'].date('y');
					$_POST['token'] = md5($token);
					if(!empty($supp_data[0]['token']) && $supp_data[0]['token']='')
					{
						$token=$supp_data[0]['token'];
					}
					else{
						$this->My_model->update("supplier_tbl",['supplier_tbl_id'=>$supp_data[0]['supplier_tbl_id']],['token'=>$_POST['token']]);
						$token = $this->My_model->select_where("supplier_tbl",['supplier_tbl_id'=>$supp_data[0]['supplier_tbl_id']])[0]['token'];
					}
				echo json_encode(['post Data'=>$_POST,'status'=>'success','token'=>$token,'data'=>$supp_data,'login'=>'supplier']);		
			}
			else{
				echo json_encode(['post Data'=>$_POST,'status'=>'Failed']);
			}
		}
	} 
	public function emp_det()
	{
		if(isset($_POST))
		{
			$emp_id=getIdByToken($_POST['token']);
			$data['det']=$this->db->query("SELECT * FROM emp_tbl,plant_tbl,job_position_tbl WHERE emp_tbl.plant_id=plant_tbl.plant_tbl_id AND emp_tbl.job_position_id=job_position_tbl.job_position_tbl_id AND emp_tbl.status='active' AND emp_tbl.emp_tbl_id='".$emp_id."' ")->result_array();
			echo json_encode(['res'=>'success','data'=>$data]);
		}
	}
   public function check_mobile_no()
   {
   	if(isset($_POST['emp_mobile_no']))
   	{
	   	$mobile_no = $this->My_model->select_where("emp_tbl",['emp_mobile_no'=>$_POST['emp_mobile_no'],'status'=>'active']);
	   	$smobile_no = $this->My_model->select_where("supplier_tbl",['supplier_mobile_no'=>$_POST['emp_mobile_no'],'status'=>'active']);
	   	if(isset($mobile_no[0]))
	   	{
	   		$otp = rand ( 1000 , 9999 );
	   		$this->My_model->update("emp_tbl",['emp_tbl_id'=>$mobile_no[0]['emp_tbl_id']],['otp'=>$otp]);
	   		echo json_encode(['otp_for'=>'emp','post Data'=>$_POST,'data'=>$mobile_no[0],'status'=>'success','otp'=>$otp]);
	   	}
	   	else if(isset($smobile_no[0]))
	   	{
	   		$otp = rand ( 1000 , 9999 );
	   		$this->My_model->update("supplier_tbl",['supplier_tbl_id'=>$smobile_no[0]['supplier_tbl_id']],['otp'=>$otp]);
	   		echo json_encode(['otp_for'=>'supplier','post Data'=>$_POST,'data'=>$smobile_no[0],'status'=>'success','otp'=>$otp]);
	   	}
	   	else
	   	{
		   	echo json_encode(['post Data'=>$_POST,'status'=>'failed']);
		}
	}
	else
	{
		echo json_encode(['status'=>'failed','res'=>'NO RESPONSE']);
	}
}

	public function change_password()
	{
		if(isset($_POST))
		{
			if($_POST['otp_for']=='emp'){
				$data = $this->My_model->update("emp_tbl",['emp_tbl_id'=>$_POST['emp_id']],['emp_password'=>$_POST['form_data']['confirm_password']]);
				if($data)
				{
					echo json_encode(['status'=>'success']);
				}
				else{
					echo json_encode(['status'=>'failed']);
				}
		}
			else{
				$data = $this->My_model->update("supplier_tbl",['supplier_tbl_id'=>$_POST['emp_id']],['supplier_password'=>$_POST['form_data']['confirm_password']]);
				if($data)
				{
					echo json_encode(['status'=>'success']);
				}
				else{
					echo json_encode(['status'=>'failed']);
				}

			}
		}
	}
	public function edit_profile()
	{
		if(isset($_POST))
		{
			$mydata['emp_address']=$_POST['form_data']['emp_address'];
			$mydata['emp_email']=$_POST['form_data']['emp_email'];
			$mydata['emp_gender']=$_POST['form_data']['emp_gender'];
			$mydata['emp_mobile_no']=$_POST['form_data']['emp_mobile_no'];
			$mydata['emp_name']=$_POST['form_data']['emp_name'];
			$mydata['emp_password']=$_POST['form_data']['emp_password'];
			$emp_id=getIdByToken($_POST['token']);
			$data = $this->My_model->update('emp_tbl',['emp_tbl_id'=>$emp_id],$mydata);
			if($data)
			{
				echo json_encode(['status'=>'success']);
			}
			else{
				echo json_encode(['status'=>'failed']);
			}
		}
		else{
			echo json_encode(['post'=>$_POST]);
		}
	}
	public function job_det()
	{
		if(isset($_POST))
		{
			$emp_id=getIdByToken($_POST['token']);
			$data= $this->db->query("SELECT *  FROM plant_tbl,job_position_tbl,emp_tbl WHERE emp_tbl.plant_id=plant_tbl.plant_tbl_id AND job_position_tbl.job_position_tbl_id=emp_tbl.job_position_id AND emp_tbl.status='active' AND emp_tbl.emp_tbl_id='".$emp_id."' ")->result_array();
			echo json_encode(['data'=>$data]);
		}
	}

	// 20April
	public function supp_det()
	{
		if(isset($_POST))
		{
			$sid=getSIdByToken($_POST['token']);
			
			$data = $this->db->query("SELECT * FROM supplier_tbl,vehicle_tbl WHERE supplier_tbl.vehicle_id=vehicle_tbl.vehicle_tbl_id AND supplier_tbl.status='active' AND supplier_tbl.supplier_tbl_id='".$sid."' ")->result_array();
			echo json_encode(['status'=>'success','data'=>$data]);
		}
	}
	public function edit_suppprofile()
	{
		if(isset($_POST))
		{
			
			$sid=getSIdByToken($_POST['token']);
			extract($_POST);
			unset($_POST['token']);
			$data = $this->db->query("UPDATE supplier_tbl SET owner_name='".$owner_name."',supplier_address='".$supplier_address."',supplier_mobile_no='".$supplier_mobile_no."',supplier_name='".$supplier_name."',supplier_password='".$supplier_password."' WHERE supplier_tbl_id='".$sid."' ");
			if($data)
			{
				echo json_encode(['status'=>'success','data'=>$data]);
			}
			else{
				echo json_encode(['status'=>'failed','POst data'=>$_POST]);
			}
		}
	}
	public function farmer_list(){

		if(isset($_POST))
		{
			$sid=getSIdByToken($_POST['token']);
			$data = $this->My_model->select_where("farmer_tbl",['supplier_id'=>$sid,'status'=>'active']);
			if($data)
			{
				echo json_encode(['status'=>'success','data'=>$data]);
			}
			else{
				echo json_encode(['status'=>'active','POst data'=>$_POST]);
			}
		}
	}
	public function add_farmer()
	{
		if(isset($_POST))
		{
		$isdata=$this->My_model->select_where("farmer_tbl",['farmer_mobile_no'=>$_POST['form_data']['farmer_mobile_no'],'status'=>'active']);

		if(isset($isdata[0]['status']))
			{
				echo json_encode(['status'=>'failed','post Data'=>$_POST,'msg'=>'Mobile no. Already Registered...']);
			}
			else{
				$sid=getSIdByToken($_POST['token']);
				$_POST['form_data']['supplier_id']=$sid;
				$_POST['form_data']['status']='active';
				$_POST['form_data']['entry_time']=time();
				$_POST['form_data']['entry_date']=date('Y-m-d');
				$data = $this->My_model->insert("farmer_tbl",$_POST['form_data']);
				if($data)
				{
					echo json_encode(['status'=>'success','post Data'=>$_POST,'data'=>$data,'msg'=>'Farmer Added Successfully...']);
				}
				else{
					echo json_encode(['status'=>'failed','post Data'=>$_POST,'msg'=>'Something Went Wrong...']);
				}
			}
		}
		else{
			echo json_encode(['status'=>'failed','post Data'=>$_POST,'msg'=>'Something Went Wrong...']);
		}
	}
	public function edit_farmer()
	{
		if(isset($_POST))
		{
			$data=$this->My_model->select_where("farmer_tbl",['farmer_tbl_id'=>$_POST['farmer_id'],'status'=>'active']);
			if($data)
			{
				echo json_encode(['status'=>'success','data'=>$data]);
			}
			else{
				echo json_encode(['status'=>'failed','Post data'=>$_POST]);
			}
		}
	}
	public function update_farmer()
	{
		if(isset($_POST))
		{
			extract($_POST);
			$data = $this->db->query("UPDATE farmer_tbl SET farmer_address='".$farmer_address."',farmer_city='".$farmer_city."',farmer_email='".$farmer_email."',farmer_mobile_no='".$farmer_mobile_no."',farmer_name='".$farmer_name."' WHERE farmer_tbl_id='".$farmer_tbl_id."' ");
			if($data)
			{
				echo json_encode(['status'=>'success','data'=>$data,'msg'=>'Farmer Details Updated Successfully']);
			}
			else{
				echo json_encode(['status'=>'failed','POST data'=>$_POST,'msg'=>'Something Went Wrong...']);
			}
		}
		else{
			echo json_encode(['status'=>'failed','POST data'=>$_POST,'msg'=>'Something Went Wrong...']);
		}
	}

	public function deleteFarmer()
	{
		if(isset($_POST))
		{
			$data = $this->My_model->update("farmer_tbl",['farmer_tbl_id'=>$_POST['farmer_id']],['status'=>'deleted']);
			if($data)
			{
				echo json_encode(['status'=>'success','msg'=>'Farmer Deleted Successfully...']);
			}
			else{
				echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong...']);
			}
		}
		else{
			echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong...']);
		}
	}
		public function purchase_list()
	{
		// $data['list']=$this->db->query("SELECT * FROM purchase,plant_tbl,raw_materials,unit_tbl WHERE purchase.unit_id=unit_tbl.unit_tbl_id AND purchase.raw_materials_id=raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.status='active' ORDER BY purchase_id DESC ")->result_array();
		
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
                (plant_tbl.plant_name LIKE '%".$_GET['q']."%') 
                OR (plant_tbl.plant_email LIKE '%".$_GET['q']."%') 
                OR (plant_tbl.plant_mobile_no LIKE '%".$_GET['q']."%') 
                OR (plant_tbl.plant_address LIKE '%".$_GET['q']."%') 
                OR (purchase.purchase_date LIKE '%".$_GET['q']."%') 
                OR (purchase.driver_name LIKE '%".$_GET['q']."%') 
                OR (emp_tbl.emp_name LIKE '%".$_GET['q']."%') 
                OR (purchase.vehicle_no LIKE '%".$_GET['q']."%') 
                OR (raw_materials.raw_materials_name LIKE '%".$_GET['q']."%') 
            )";
        }
         $total_rows = $this->db->query("SELECT count(purchase.purchase_id) as  ttl_rows FROM purchase,plant_tbl,raw_materials,unit_tbl,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND purchase.unit_id=unit_tbl.unit_tbl_id AND purchase.raw_materials_id=raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.status='active'  ".$show)->result_array()[0]['ttl_rows'];

        $per_page = 20;
        $data['start']=$per_page*$page_no-$per_page;
        $data['ttl_pages']=$total_rows/$per_page;
        $data['page_no']=$page_no;

        $data['list'] = $this->db->query("SELECT * FROM purchase,plant_tbl,raw_materials,unit_tbl,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND purchase.unit_id=unit_tbl.unit_tbl_id AND purchase.raw_materials_id=raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.status='active'  ".$show." ORDER BY purchase.purchase_id DESC LIMIT ".$data['start'].",".$per_page)->result_array();

		foreach($data['list'] as $key=>$row)
		{
			if($row['transport_by'] == 'own')
			{
				$driver = $this->My_model->select_where('driver_tbl',['driver_tbl_id'=>$row['driver_id'],'status'=>'active']);
				$vehicle = $this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id'],'status'=>'active']);
				if(!isset($driver[0]))
				{
						$driver_name= '-';
				}
				else{
						$driver_name = $driver[0]['driver_name'];
				}

				if(!isset($vehicle[0]))
				{
						$vehicle_no= '-';
				}
				else{
					$vehicle_no = $vehicle[0]['vehicle_no'];
				}

				$data['list'][$key]['driver_name']= $driver_name ;
				$data['list'][$key]['vehicle_no']= $vehicle_no ;
			}
		}
		
		$this->ov("purchase_list",$data);
	}
	
	public function s_purchase_list()
	{
		$sid=getSIdByToken($_POST['token']);
		$data=$this->db->query("SELECT * FROM purchase,raw_materials,plant_tbl,farmer_tbl,unit_tbl WHERE purchase.raw_materials_id = raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.farmer_id=farmer_tbl.farmer_tbl_id AND purchase.unit_id = unit_tbl.unit_tbl_id AND purchase.supplier_id='".$sid."' ORDER BY purchase.purchase_id DESC  ")->result_array();
		foreach ($data as $key => $row) {
			if($row['transport_by']=='own')
			{
				$data[$key]['vehicle_no']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['vehicle_no'];
				$data[$key]['driver_name']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_name'];
				$data[$key]['driver_mobile_no']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_mobile_no'];
				$data[$key]['owner_name']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['owner_name'];
			}
			else{
				$data[$key]['driver_mobile_no']='-';

			}
		}
		echo json_encode(['data'=>$data,'status'=>'success']);
	}
		public function s_purchase_det()
	{
		if(isset($_POST))
		{
			$sid=getSIdByToken($_POST['token']);
			$data=$this->db->query("SELECT * FROM purchase,raw_materials,plant_tbl,farmer_tbl,unit_tbl WHERE purchase.raw_materials_id = raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.farmer_id=farmer_tbl.farmer_tbl_id AND purchase.unit_id = unit_tbl.unit_tbl_id AND purchase.supplier_id='".$sid."' AND purchase_id='".$_POST['purchase_id']."' ORDER BY purchase.purchase_id DESC  ")->result_array();
			foreach ($data as $key => $row) {
				if($row['transport_by']=='own')
				{
					$data[$key]['vehicle_no']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['vehicle_no'];
					$data[$key]['driver_name']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_name'];
					$data[$key]['driver_mobile_no']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_mobile_no'];
					$data[$key]['owner_name']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['owner_name'];
				}
				else{
					$data[$key]['driver_mobile_no']='-';

				}
			}
			echo json_encode(['data'=>$data,'status'=>'success']);
		}
		else{
			echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong...']);
		}
	}
	public function supplier_raw_materials()
	{
		if(isset($_POST))
		{
			$sid=getSIdByToken($_POST['token']);
			$data = $this->db->query("SELECT * FROM supplier_raw_materials,raw_materials,supplier_tbl,unit_tbl WHERE raw_materials.unit_id = unit_tbl.unit_tbl_id AND supplier_raw_materials.supplier_id=supplier_tbl.supplier_tbl_id AND supplier_raw_materials.raw_materials_id=raw_materials.raw_materials_id AND supplier_tbl.supplier_tbl_id='".$sid."' ")->result_array();
			echo json_encode(['data'=>$data,'status'=>'success']);
		}
		else{
			echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong...']);
		}
	}
	public function plant_list(){
		$data=$this->My_model->select_where("plant_tbl",['status'=>'active']);
		foreach($data as $key=>$row)
		{
			$data[$key]['raw_list']=$this->db->query("SELECT * FROM plant_raw_materials,raw_materials WHERE plant_raw_materials.raw_materials_id=raw_materials.raw_materials_id AND plant_raw_materials.plant_id='".$row['plant_tbl_id']."' ")->result_array();
			$data[$key]['prod_list']=$this->db->query("SELECT * FROM plant_products,product WHERE plant_products.product_id=product.product_id AND plant_products.plant_id='".$row['plant_tbl_id']."' ")->result_array();
		}
		echo json_encode(['data'=>$data]);
	}
	public function plant_det(){
		$data=$this->My_model->select_where("plant_tbl",['status'=>'active','plant_tbl_id'=>$_POST['plant_id']]);
		foreach($data as $key=>$row)
		{
			$data[$key]['raw_list']=$this->db->query("SELECT * FROM plant_raw_materials,raw_materials WHERE plant_raw_materials.raw_materials_id=raw_materials.raw_materials_id AND plant_raw_materials.plant_id='".$row['plant_tbl_id']."' ")->result_array();
			$data[$key]['prod_list']=$this->db->query("SELECT * FROM plant_products,product,unit_tbl WHERE product.unit_id=unit_tbl.unit_tbl_id AND  plant_products.product_id=product.product_id AND plant_products.plant_id='".$row['plant_tbl_id']."' ")->result_array();
		}
		echo json_encode(['data'=>$data]);
	}

		public function print_purchase()
	{
		extract($_POST);
		$data['list'] = $this->db->query("SELECT * FROM purchase,plant_tbl,raw_materials,unit_tbl,supplier_tbl,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND purchase.supplier_id=supplier_tbl.supplier_tbl_id AND purchase.unit_id=unit_tbl.unit_tbl_id AND purchase.raw_materials_id=raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.status='active' AND plant_tbl.plant_tbl_id='".$plant_id."' AND purchase.purchase_id='".$purchase_id."' ")->result_array();

		foreach($data['list'] as $key=>$row)
		{
			if($row['transport_by'] == 'own')
			{
				$driver = $this->My_model->select_where('driver_tbl',['driver_tbl_id'=>$row['driver_id'],'status'=>'active']);
				$vehicle = $this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id'],'status'=>'active']);
				if(!isset($driver[0]))
				{
						$driver_name= '-';
				}
				else{
						$driver_name = $driver[0]['driver_name'];
				}

				if(!isset($vehicle[0]))
				{
						$vehicle_no= '-';
				}
				else{
					$vehicle_no = $vehicle[0]['vehicle_no'];
				}

				$data['list'][$key]['driver_name']= $driver_name ;
				$data['list'][$key]['vehicle_no']= $vehicle_no ;
			}
		}
		$this->load->view('admin/purchase_receipt',$data);
	}
	public function getAllProduct()
	{
		$data['product_list']=$this->My_model->select_where('product',['status'=>'active']);
		echo json_encode(['data'=>$data]);
	}
	public function add_leads()
	{

		if(isset($_POST['token']))
		{
		extract($_POST);
		
		$pid=$form_data['product_id'];
		$slid=getIdByToken($_POST['token']);
		$form_data['emp_id'] = $slid;
		$form_data['lead_status']='active';
		$form_data['status']='active';
		$form_data['entry_date']=date('Y-m-d');
		$form_data['entry_time']=time();
		unset($form_data['product_id']);
		$form_data['entry_by']='sales';

		$data=$this->My_model->insert('leads_tbl',$form_data);
		for($i=0;$i<count($pid);$i++)
		{
			$lead['leads_id']=$data;
			$lead['product_id']=$pid[$i];
			$lead['status']='active';
			$lead['status']='active';
			$lead['entry_date']=date('Y-m-d');
			$lead['entry_time']=time();
			$this->My_model->insert('lead_products',$lead);
		}
		if($data)
		{
			echo json_encode(['status'=>'success','post Data'=>$_POST,'prod_id'=>$lead,'msg'=>'Leads Added Successfully']);
		}
		else{
			echo json_encode(['status'=>'failed','post Data'=>$_POST,'prod_id'=>$lead,'msg'=>'Leads Failed To Add..']);
		}
	}
	}

	public function my_leads_list()
	{
		if(isset($_POST['token']))
		{
			if(isset($_POST['lead_status']))
			{
				if($_POST['lead_status']=='hold')
				{
					$lead_status='hold';
				}
				else if($_POST['lead_status']=='cancel')
				{
					$lead_status='cancel';
				}
				else if($_POST['lead_status']=='finalize')
				{
					$lead_status='finalize';
				}
				else{
				$lead_status='active';
				}
			}
			else{
				$lead_status='active';
			}
			extract($_POST);
			$slid=getIdByToken($_POST['token']);
			if(!isset($page_no))
			{
				$page_no=1;
			}
			else{
				$page_no=$_POST['page_no'];
			}
	        $search="";
	        
	        if(!isset($_POST['q']))
	        {
	            $show=" ";
	        }
	        else if($_POST['q']=='no')
	        {
	            $show=" ";
	        }
	        else
	        {
	            $show=" AND (
	                (lead_status LIKE '%".$_POST['q']."%') 
	                OR (customer_name LIKE '%".$_POST['q']."%') 
	                OR (customer_email LIKE '%".$_POST['q']."%') 
	                OR (customer_mobile_no LIKE '%".$_POST['q']."%') 
	                OR (company_name LIKE '%".$_POST['q']."%') 
	                OR (company_address LIKE '%".$_POST['q']."%') 
	                OR (feedback_note LIKE '%".$_POST['q']."%') 
	                OR (feedback_date LIKE '%".$_POST['q']."%') 
	                OR (entry_date LIKE '%".$_POST['q']."%') 
	            )";
	        }
	         $total_rows = $this->db->query("SELECT count(leads_tbl_id) as ttl_rows FROM leads_tbl WHERE status='active' AND lead_status='".$lead_status."' AND emp_id='".$slid."' ".$show)->result_array()[0]['ttl_rows'];

	        $per_page = 2;
	        $data['start']=$per_page*$page_no-$per_page;
	        $data['ttl_pages']=$total_rows/$per_page;
	        $data['page_no']=$page_no;


			// $data['list']=$this->My_model->select_where("leads_tbl",['status'=>'active','lead_status'=>$lead_status,'emp_id'=>$slid]);
			$data['list'] = $this->db->query("SELECT * FROM leads_tbl WHERE status='active' AND lead_status='".$lead_status."' AND emp_id='".$slid."' ".$show." ORDER BY leads_tbl_id DESC limit ".$data['start'].",".$per_page)->result_array();
			foreach($data['list'] as $key=>$row)
			{
				$data['list'][$key]['product_name'] = $this->db->query("SELECT * FROM lead_products,product WHERE lead_products.product_id=product.product_id AND lead_products.status='active' AND lead_products.leads_id='".$row['leads_tbl_id']."' ")->result_array();
			}
			echo json_encode(['data'=>$data,'status'=>'success','post'=>$_POST,'query'=>$this->db->last_query()]);
		}
		else{
			echo json_encode(['status'=>'failed']);
		}
	}
	public function my_leads_det()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$slid=getIdByToken($_POST['token']);
			$data['list']=$this->My_model->select_where("leads_tbl",['status'=>'active','emp_id'=>$slid,'leads_tbl_id'=>$_POST['id']]);
			$data['product_list']=$this->My_model->select_where('product',['status'=>'active']);
			foreach($data['list'] as $key=>$row)
			{
				$lead_prod = $this->db->query("SELECT * FROM lead_products,product WHERE lead_products.product_id=product.product_id AND lead_products.status='active' AND lead_products.leads_id='".$row['leads_tbl_id']."' ")->result_array();
				$data['product_name']=$lead_prod;
				$data['list'][$key]['product_name'] = array_column($lead_prod, 'product_id');
			}
		foreach($data['product_list'] as $key=>$prod_row)
			{
			foreach($lead_prod as $myprod)
				{
					if($prod_row['product_id']==$myprod['product_id'])
					{
						$data['product_list'][$key]['selected_prod']='yes';
					}
					else{
						$data['product_list'][$key]['selected_prod']='no';
					}
				}
			}

			echo json_encode(['data'=>$data,'status'=>'success']);
		}
		else{
			echo json_encode(['status'=>'failed']);
		}
	}

	public function edit_leads()
	{
		if(isset($_POST['token'])){
			extract($_POST['form_data']);
			$slid=getIdByToken($_POST['token']);
			$pid=$_POST['form_data']['product_id'];
			$data=$this->db->query("UPDATE leads_tbl SET company_address='".$company_address."' ,company_name='".$company_name."',customer_email='".$customer_email."',customer_mobile_no='".$customer_mobile_no."',customer_name='".$customer_name."',feedback_date='".$feedback_date."',feedback_note='".$feedback_note."' WHERE leads_tbl_id='".$leads_tbl_id."' ");
			$this->db->query("DELETE FROM lead_products WHERE leads_id='".$leads_tbl_id."' ");
			for($i=0;$i<count($pid);$i++)
			{
				$lead['leads_id']=$leads_tbl_id;
				$lead['product_id']=$pid[$i];
				$lead['status']='active';
				$lead['entry_date']=date('Y-m-d');
				$lead['entry_time']=time();
				$this->My_model->insert('lead_products',$lead);
			}
				if($data)
				{
					echo json_encode(['status'=>'success','post Data'=>$_POST,'msg'=>'Lead Updated Successfully..']);
				}
				else{
					echo json_encode(['status'=>'failed','post Data'=>$_POST,'msg'=>'Something Went Wrong..']);
				}
			}
	}
	public function delete_lead()
	{
		if(isset($_POST))
		{
			$data = $this->My_model->update('leads_tbl',['leads_tbl_id'=>$_POST['id']],['status'=>'deleted']);
			if($data)
			{
				echo json_encode(['status'=>'success','msg'=>'Leads Deleted..']);
			}
			else{
				echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong..']);
			}
		}
	}

	public function finalize_lead()
	{
		if(isset($_POST))
		{
			$data = $this->My_model->update("leads_tbl",['leads_tbl_id'=>$_POST['lead']],['finalize_lead_date'=>date('Y-m-d H:i'),'lead_status'=>'finalize']);
			if($data)
			{
				echo json_encode(['status'=>'success','msg'=>'Lead Finalized..']);
			}
			else{
				echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong..']);
			}
		}
	}

	public function cancel_lead()
	{

		if(isset($_POST['token']))
		{
			extract($_POST['form_data']);
			$lead_reason['leads_id']=$leads_tbl_id;
			$lead_reason['reason']=$reason;
			$lead_reason['date']=$cancel_lead_date;
			$lead_reason['lead_status']='cancel';
			$lead_reason['status']='active';
			$lead_reason['entry_date']=date('Y-m-d');
			$lead_reason['entry_time']=time();
			$this->My_model->insert('lead_reason',$lead_reason);
			$data = $this->My_model->update("leads_tbl",['leads_tbl_id'=>$leads_tbl_id],['cancel_lead_date'=>$cancel_lead_date,'lead_status'=>'cancel']);
			if($data)
			{
				echo json_encode(['status'=>'success','msg'=>'Lead Cancelled..']);
			}
			else{
				echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong..']);
			}
		}
	}

		public function hold_lead()
	{

		if(isset($_POST['token']))
		{
			extract($_POST['form_data']);
			$lead_reason['leads_id']=$leads_tbl_id;
			$lead_reason['date']=$hold_lead_date;
			$lead_reason['reason']=$reason;
			$lead_reason['lead_status']='hold';
			$lead_reason['status']='active';
			$lead_reason['entry_date']=date('Y-m-d');
			$lead_reason['entry_time']=time();
			$this->My_model->insert('lead_reason',$lead_reason);

			$data = $this->My_model->update("leads_tbl",['leads_tbl_id'=>$leads_tbl_id],['hold_lead_date'=>$hold_lead_date,'lead_status'=>'hold']);
			if($data)
			{
				echo json_encode(['status'=>'success','msg'=>'Lead Set On Hold..']);
			}
			else{
				echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong..']);
			}
		}
	}
	public function add_campion()
	{
		if(isset($_POST['token']))
		{
			$_POST['form_data']['emp_id']=getIdByToken($_POST['token']);
			$_POST['form_data']['status']='active';
			$_POST['form_data']['entry_date']=date('Y-m-d');
			$_POST['form_data']['entry_time']=time();
			$_POST['form_data']['added_by']='sales';
			$data=$this->My_model->insert("campion_tbl",$_POST['form_data']);
			$campion_link=base_url().'website/enquire/'.$data;
			$this->My_model->update("campion_tbl",['campion_tbl_id'=>$data],['campion_link'=>$campion_link]);
			if($data)
			{
				echo json_encode(['status'=>'success','msg'=>'Campion Added Successfully..']);
			}
			else{
				echo json_encode(['status'=>'failed','msg'=>'Something Went Wrong..']);
			}
		}
	}
	public function campion_list()
	{
		if(isset($_POST['token']))
		{
			$id=getIdByToken($_POST['token']);
			$data['list']=$this->My_model->select_where("campion_tbl",['emp_id'=>$id,'status'=>'active']);
			echo json_encode(['data'=>$data]);
		}
	}
	public function edit_campion()
	{
		if(isset($_POST['token']))
		{
			$id=getIdByToken($_POST['token']);
			$data['list']=$this->My_model->select_where("campion_tbl",['campion_tbl_id'=>$_POST['campion_id'],'status'=>'active']);
			echo json_encode(['data'=>$data]);
		}
	}
	public function save_update_campion()
	{
		if(isset($_POST['token']))
		{
			extract($_POST['form_data']);
			$data=$this->My_model->update('campion_tbl',['campion_tbl_id'=>$campion_tbl_id],['campion_name'=>$campion_name]);
			if($data)
			{				
				echo json_encode(['post'=>$_POST,'status'=>'success','msg'=>'Campion Updated Successfully']);
			}
			else{
				echo json_encode(['post'=>$_POST,'status'=>'failed']);
			}
		}
	}
	public function delete_campion()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$data=$this->My_model->update('campion_tbl',['campion_tbl_id'=>$id],['status'=>'deleted']);
			if($data)
			{				
				echo json_encode(['post'=>$_POST,'status'=>'success','msg'=>'Campion Deleted Successfully']);
			}
			else{
				echo json_encode(['post'=>$_POST,'status'=>'failed']);
			}
		}
	}
	public function enquiry_list()
	{
		if(isset($_POST['token']))
		{
			if(isset($_POST['lead_status']))
			{
				if($_POST['lead_status']=='hold')
				{
					$lead_status='hold';
				}
				else if($_POST['lead_status']=='cancel')
				{
					$lead_status='cancel';
				}
				else if($_POST['lead_status']=='finalize')
				{
					$lead_status='finalize';
				}
				else{
				$lead_status='active';
				}
			}
			else{
				$lead_status='active';
			}
			extract($_POST);
			$slid=getIdByToken($_POST['token']);
			
			$data['list']=$this->db->query("SELECT * FROM campion_tbl,leads_tbl WHERE leads_tbl.campion_id=campion_tbl.campion_tbl_id AND leads_tbl.status='active' AND leads_tbl.entry_by='campion' AND leads_tbl.lead_status='".$lead_status."' AND leads_tbl.emp_id='".$slid."' ")->result_array();
			foreach($data['list'] as $key=>$row)
			{
				$data['list'][$key]['product_name'] = $this->db->query("SELECT * FROM lead_products,product WHERE lead_products.product_id=product.product_id AND lead_products.status='active' AND lead_products.leads_id='".$row['leads_tbl_id']."' ")->result_array();
			}
			echo json_encode(['data'=>$data,'status'=>'success']);
		}
		else{
			echo json_encode(['status'=>'failed']);
		}
	}

	public function  enquiry_det()
	{
		if(isset($_POST['token']))
		{
			if(isset($_POST['lead_status']))
			{
				if($_POST['lead_status']=='hold')
				{
					$lead_status='hold';
				}
				else if($_POST['lead_status']=='cancel')
				{
					$lead_status='cancel';
				}
				else if($_POST['lead_status']=='finalize')
				{
					$lead_status='finalize';
				}
				else{
				$lead_status='active';
				}
			}
			else{
				$lead_status='active';
			}
			extract($_POST);
			$slid=getIdByToken($_POST['token']);
			
			$data['list']=$this->db->query("SELECT * FROM campion_tbl,leads_tbl WHERE leads_tbl.campion_id=campion_tbl.campion_tbl_id AND leads_tbl.status='active' AND leads_tbl.entry_by='campion' AND leads_tbl.lead_status='".$lead_status."' AND leads_tbl.leads_tbl_id='".$id."' AND leads_tbl.emp_id='".$slid."' ")->result_array();
		$data['product_list']=$this->My_model->select_where('product',['status'=>'active']);
		foreach($data['list'] as $key=>$row)
			{
				$lead_prod = $this->db->query("SELECT * FROM lead_products,product WHERE lead_products.product_id=product.product_id AND lead_products.status='active' AND lead_products.leads_id='".$row['leads_tbl_id']."' ")->result_array();
				$data['product_name']=$lead_prod;
				$data['list'][$key]['product_name'] = array_column($lead_prod, 'product_id');
			}
		foreach($data['product_list'] as $key=>$prod_row)
			{
			foreach($lead_prod as $myprod)
				{
					if($prod_row['product_id']==$myprod['product_id'])
					{
						$data['product_list'][$key]['selected_prod']='yes';
					}
					else{
						$data['product_list'][$key]['selected_prod']='no';
					}
				}
			}
			foreach($data['list'] as $key=>$row)
			{
				$data['list'][$key]['product_name'] = $this->db->query("SELECT * FROM lead_products,product WHERE lead_products.product_id=product.product_id AND lead_products.status='active' AND lead_products.leads_id='".$row['leads_tbl_id']."' ")->result_array();
			}
			echo json_encode(['data'=>$data,'status'=>'success']);
		}
		else{
			echo json_encode(['status'=>'failed']);
		}
	}

	public function supplier_payment_history()
	{
		if(isset($_POST['token']))
		{
			$sid=getSIdByToken($_POST['token']);
			$data['list'] = $this->My_model->select_where("supplier_payment_history",["supplier_id"=>$sid]);
			$data['total_pay'] = $this->My_model->select_where("supplier_tbl",['supplier_tbl_id'=>$sid]);
			foreach($data['list'] as $key=>$row)
			{
				if($row['amount'] >= 0)
				{
					$data['list'][$key]['bg_clr']='in-success';
					$data['list'][$key]['amount']= $row['amount']*(-1);

				}
				else{
					$data['list'][$key]['amount']= $row['amount']*(-1);
					$data['list'][$key]['bg_clr']='in-danger';
				}
					$data['list'][$key]['paid_datetime']=date('Y-m-d H:i a',$row['entry_time']);

			}
        	// $data['list'] = $this->db->query("SELECT * FROM supplier_tbl,supplier_payment_history WHERE  supplier_payment_history.supplier_id=supplier_tbl.supplier_tbl_id AND supplier_tbl.status='active' AND supplier_tbl.supplier_tbl_id='".$sid."' ORDER BY supplier_payment_history.supplier_payment_history_id DESC ")->result_array();
        	// foreach($data['list'] as $key=>$row)
        	// {
        	// 	if(!empty($row['supplier_paid_payment_id']))
        	// 	{
			// 		$data['list'][$key]['pay_for']='paid';
			// 		$pay_data=$this->db->query("SELECT * FROM payment_type,supplier_paid_payment WHERE supplier_paid_payment.payment_type_id=payment_type.payment_type_id AND supplier_paid_payment.supplier_paid_payment_id='".$row['supplier_paid_payment_id']."' ")->result_array();
			// 		$data['list'][$key]['payment_type_name']=$pay_data[0]['payment_type_name'];
			// 		$data['list'][$key]['payment_note']=$pay_data[0]['payment_note'];
        	// 	}
        	// 	else{
			// 		$data['list'][$key]['pay_for']='purchase';
			// 		$puchase_data=$this->db->query("SELECT * FROM unit_tbl,raw_materials,purchase WHERE purchase.raw_materials_id=raw_materials.raw_materials_id AND purchase.unit_id=unit_tbl.unit_tbl_id AND purchase.purchase_id='".$row['purchase_id']."' ")->result_array();
			// 		$data['list'][$key]['raw_materials_name']=$puchase_data[0]['raw_materials_name'];
			// 		$data['list'][$key]['net_weight']=$puchase_data[0]['net_weight'];
			// 		$data['list'][$key]['unit_name']=$puchase_data[0]['unit_name'];
			// 		$data['list'][$key]['rate']=$puchase_data[0]['rate'];

        	// 	}
        	// }
        	echo json_encode(['data'=>$data]);
        }
	}


	// PLANT HEAD 16 May 2024
	public function plant_products()
	{
		if(isset($_POST['token']))
		{
			$emp_id=getIdByToken($_POST['token']);
			extract($_POST);
			$data['plant']=$this->My_model->select_where("plant_tbl",['plant_tbl_id'=>$plant_id,'status'=>'active']);
			$data['product']=$this->db->query("SELECT * FROM product,plant_products WHERE plant_products.product_id=product.product_id AND plant_products.plant_id='".$plant_id."' AND plant_products.status='active' AND product.status='active' ")->result_array();
			$data['raw_materials']=$this->db->query("SELECT * FROM plant_raw_materials,raw_materials WHERE plant_raw_materials.raw_materials_id=raw_materials.raw_materials_id AND plant_raw_materials.plant_id='".$plant_id."' ")->result_array();
			foreach($data['product'] as $key=>$row)
			{
				$data['product'][$key]['raw_materials']=$this->db->query("SELECT * FROM product_raw_materials,raw_materials WHERE product_raw_materials.raw_materials_id=raw_materials.raw_materials_id AND product_id='".$row['product_id']."' AND product_raw_materials.status='active' ")->result_array();
			}

			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}

	public function vehicle_list()
	{
		if(isset($_POST['token']))
		{
			$emp_id=getIdByToken($_POST['token']);
			extract($_POST);
			$data['vehicle']=$this->My_model->select_where("vehicle_tbl",['plant_id'=>$plant_id,'status'=>'active']);
			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}

	public function driver_list()
	{
		if(isset($_POST['token']))
		{
			$emp_id=getIdByToken($_POST['token']);
			extract($_POST);
			$data['driver']=$this->My_model->select_where("driver_tbl",['plant_id'=>$plant_id,'status'=>'active']);
			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}
	
	public function ph_purchase_list()
	{
	if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data['list']=$this->db->query("SELECT * FROM purchase,raw_materials,plant_tbl,farmer_tbl,unit_tbl WHERE purchase.raw_materials_id = raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.farmer_id=farmer_tbl.farmer_tbl_id AND purchase.unit_id = unit_tbl.unit_tbl_id AND plant_tbl.plant_tbl_id='".$plant_id."' ORDER BY purchase.purchase_id DESC  ")->result_array();
				foreach ($data['list'] as $key => $row) {
					if($row['transport_by']=='own')
					{
						$data['list'][$key]['vehicle_no']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['vehicle_no'];
						$data['list'][$key]['driver_name']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_name'];
						$data['list'][$key]['driver_mobile_no']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_mobile_no'];
						$data['list'][$key]['owner_name']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['owner_name'];
					}
					else{
						$data['list'][$key]['driver_mobile_no']='-';

					}
				}
		$data['prod_cat_list'] = $this->db->query("SELECT * FROM plant_tbl,plant_raw_materials,raw_materials,unit_tbl WHERE raw_materials.unit_id=unit_tbl.unit_tbl_id AND plant_raw_materials.plant_id=plant_tbl.plant_tbl_id AND plant_raw_materials.status='active' AND plant_tbl.status='active' AND plant_tbl.plant_tbl_id='".$plant_id."' AND raw_materials.raw_materials_id = plant_raw_materials.raw_materials_id")->result_array();
		$data['driver_list']=$this->My_model->select_where("driver_tbl",['status'=>'active']);
		$data['plant_list']=$this->My_model->select_where("plant_tbl",['status'=>'active','plant_tbl_id'=>$plant_id]);
		$data['vehicle']=$this->My_model->select_where("vehicle_tbl",['status'=>'active','plant_id'=>$plant_id]);
		$data['units']=$this->My_model->select_where("unit_tbl",['status'=>'active']);
		$data['farmer_list']=$this->db->query("SELECT * FROM farmer_tbl,emp_tbl WHERE farmer_tbl.supplier_id=emp_tbl.emp_tbl_id AND farmer_tbl.status='active'   ")->result_array();
		$data['supplier']=$this->My_model->select_where("supplier_tbl",['status'=>'active']);

			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}

	public function edit_purchase()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data['prod_cat_list'] = $this->db->query("SELECT * FROM plant_tbl,plant_raw_materials,raw_materials,unit_tbl WHERE raw_materials.unit_id=unit_tbl.unit_tbl_id AND plant_raw_materials.plant_id=plant_tbl.plant_tbl_id AND plant_raw_materials.status='active' AND plant_tbl.status='active' AND plant_tbl.plant_tbl_id='".$plant_id."' AND raw_materials.raw_materials_id = plant_raw_materials.raw_materials_id")->result_array();
			$data['driver_list']=$this->My_model->select_where("driver_tbl",['status'=>'active']);
			$data['plant_list']=$this->My_model->select_where("plant_tbl",['status'=>'active','plant_tbl_id'=>$plant_id]);
			$data['vehicle']=$this->My_model->select_where("vehicle_tbl",['status'=>'active','plant_id'=>$plant_id]);
			$data['units']=$this->My_model->select_where("unit_tbl",['status'=>'active']);
			$data['farmer_list']=$this->db->query("SELECT * FROM farmer_tbl,emp_tbl WHERE farmer_tbl.supplier_id=emp_tbl.emp_tbl_id AND farmer_tbl.status='active'   ")->result_array();
			$data['supplier']=$this->My_model->select_where("supplier_tbl",['status'=>'active']);
			echo json_encode(['data'=>$data]);
		}
	}

	public function ph_purchase_det()
	{
	if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data=$this->db->query("SELECT * FROM purchase,raw_materials,plant_tbl,farmer_tbl,unit_tbl WHERE purchase.raw_materials_id = raw_materials.raw_materials_id AND purchase.plant_id=plant_tbl.plant_tbl_id AND purchase.farmer_id=farmer_tbl.farmer_tbl_id AND purchase.unit_id = unit_tbl.unit_tbl_id AND plant_tbl.plant_tbl_id='".$plant_id."' AND purchase.purchase_id='".$purchase_id."' ORDER BY purchase.purchase_id DESC  ")->result_array();
				foreach ($data as $key => $row) {
					if($row['transport_by']=='own')
					{
						$data[$key]['vehicle_no']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['vehicle_no'];
						$data[$key]['driver_name']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_name'];
						$data[$key]['driver_mobile_no']=$this->My_model->select_where("driver_tbl",['driver_tbl_id'=>$row['driver_id']])[0]['driver_mobile_no'];
						$data[$key]['owner_name']=$this->My_model->select_where("vehicle_tbl",['vehicle_tbl_id'=>$row['vehicle_id']])[0]['owner_name'];
					}
					else{
						$data[$key]['driver_mobile_no']='-';

					}
				}
			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}

	public function getFarmer()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data['farmer']=$this->My_model->select_where("farmer_tbl",['supplier_id'=>$supplier_id,'status'=>'active']);
			echo json_encode(['data'=>$data]);
		}	
	}

	public function add_purchase()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$_POST['form_data']['entry_by']=$emp_id;
			$_POST['form_data']['status']='active';
			$_POST['form_data']['entry_date']=date('Y-m-d');
			$_POST['form_data']['entry_time']=time();
			$_POST['form_data']['payment_status'] = 'pending';
			$_POST['form_data']['plant_id'] = $_POST['plant_id'];
			$_POST['form_data']['unit_id']=$this->My_model->select_where("raw_materials",['raw_materials_id'=>$_POST['form_data']['raw_materials_id']])[0]['unit_id'];
			// echo json_encode($_POST);
			
			$data = $this->My_model->insert('purchase',$_POST['form_data']);

			$this->update_spplier_payment($_POST['form_data']['supplier_id'],$_POST['form_data']['ttl_amount'],"Material Purchased Of &#8377; ".$_POST['form_data']['ttl_amount']." <a href='".base_url()."admin/print_purchase/".$_POST['form_data']['plant_id']."/".$data."' class='btn btn-sm btn-primary p-0 ps-1 pe-1'> <i class='fa fa-print'></i></a>",$_POST['form_data']['plant_id'],$data);

			$this->update_raw_material_stock($_POST['form_data']['raw_materials_id'],$_POST['form_data']['plant_id'],$_POST['form_data']['net_weight'],"Purchased raw material of &#8377;".number_format1($_POST['form_data']['ttl_amount'])." from supplier ".getSupplierName($_POST['form_data']['supplier_id']));
			if($data)
			{
				echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Purchase Order Added Successfully...']);
			}
			else{
				echo json_encode(['status'=>'failed','POst data'=>$_POST,'msg'=>'Purchase Order Failed...']);
			}
		}
	}

	public function update_spplier_payment($supplier_id,$amount,$message,$plant_id='',$purchase_id='',$supplier_paid_payment_id='')
	{
		$supplier = $this->My_model->select_where("supplier_tbl",["supplier_tbl_id"=>$supplier_id]);
		if(isset($supplier[0]))
		{
			$new_amount = $supplier[0]['to_pay_amount'] + (float)$amount;
			$this->My_model->update("supplier_tbl",["supplier_tbl_id"=>$supplier_id],["to_pay_amount"=>$new_amount]);
			$data["supplier_id"] = $supplier_id;
			$data["amount"] = $amount;
			$data["message"] = $message;
			$data["entry_date"] = date('Y-m-d');
			$data["entry_time"] = time();
			$data['plant_id']=$plant_id;
			$data['purchase_id']=$purchase_id;
			$data['supplier_paid_payment_id']=$supplier_paid_payment_id;
			$this->My_model->insert("supplier_payment_history",$data);
		}
	}

	protected function update_raw_material_stock($raw_materials_id,$plant_id,$stock,$reason)
	{
		$plant_raw_materials = $this->My_model->select_where("plant_raw_materials",["raw_materials_id"=>$raw_materials_id,"plant_id"=>$plant_id]);
		if(isset($plant_raw_materials[0]))
		{
			$plant_raw_materials_id = $plant_raw_materials[0]['plant_raw_materials_id'];

			$new_stock = $plant_raw_materials[0]['stock'] + $stock;

			$this->My_model->update("plant_raw_materials",["plant_raw_materials_id"=>$plant_raw_materials_id],["stock"=>$new_stock]);

			$raw_material_stock_history = [
				"plant_raw_materials_id"=>$plant_raw_materials_id,
				"raw_materials_id"=>$raw_materials_id,
				"plant_id"=>$plant_id,
				"stock"=>$stock,
				"reason"=>$reason,
				"date"=>date('Y-m-d'),
				"time"=>date('H:iA'),
				"entry_by"=>"admin"
			];

			$this->My_model->insert("raw_material_stock_history",$raw_material_stock_history);
		}
	}

	public function edit_save_purchase()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
		$mydata=$this->My_model->select_where("purchase",['purchase_id'=>$_POST['form_data']['purchase_id']]);	
		$_POST['form_data']['entry_by']=$emp_id;
		$_POST['form_data']['status']='active';
		$_POST['form_data']['entry_date']=date('Y-m-d');
		$_POST['form_data']['entry_time']=time();
		$_POST['form_data']['payment_status'] = 'pending';
		$_POST['form_data']['plant_id'] = $_POST['plant_id'];
		$this->update_raw_material_stock($_POST['form_data']['raw_materials_id'],$_POST['form_data']['plant_id'],$mydata[0]['net_weight']*-1,"Old Removed : Edited Purchased of supplier ".getSupplierName($_POST['form_data']['supplier_id']));

		$this->update_raw_material_stock($_POST['form_data']['raw_materials_id'],$_POST['form_data']['plant_id'],$_POST['form_data']['net_weight'],"New Added : Edited Purchased of supplier ".getSupplierName($_POST['form_data']['supplier_id']));

		$data = $this->My_model->update("purchase",['purchase_id'=>$_POST['form_data']['purchase_id']],$_POST['form_data']);
			if($data)
			{
				echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Purchase Order Updated Successfully...']);
			}
			else{
				echo json_encode(['status'=>'failed','POst data'=>$_POST,'msg'=>'Purchase Order Failed To Update...']);
			}
		}
	}
	
	public function delete_purchase()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
		$mydata=$this->My_model->select_where("purchase",['purchase_id'=>$_POST['purchase_id']]);
		$this->update_raw_material_stock($mydata[0]['raw_materials_id'],$mydata[0]['plant_id'],$mydata[0]['net_weight']*-1,"Removed Purchased of supplier ".getSupplierName($mydata[0]['supplier_id']));
		
		$data = $this->My_model->update("purchase",['purchase_id'=>$_POST['purchase_id']],['status'=>'deleted']);
			if($data)
			{
				echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Purchase Order Deleted Successfully...']);
			}
			else{
				echo json_encode(['status'=>'failed','POst data'=>$_POST,'msg'=>'Purchase Order Failed To Delete...']);
			}
		}
	}

	public function production_list()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data['list'] = $this->db->query("SELECT * FROM production,plant_tbl,product,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND production.product_id=product.product_id AND production.plant_id=plant_tbl.plant_tbl_id AND  production.status='active' AND production.production_status = 'in_production' AND plant_tbl.plant_tbl_id='".$plant_id."'   ORDER BY production.production_id DESC ")->result_array();
			foreach($data['list'] as $key=>$row)
			{
				$data['list'][$key]['raw']=$this->db->query("SELECT * FROM production_material,raw_materials WHERE production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array();
				$data['list'][$key]['ttl_raw']=$this->db->query("SELECT COUNT(production_material.raw_materials_id) as ttl_raw FROM production_material,raw_materials WHERE production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array()[0]['ttl_raw'];
			}
			echo json_encode(['data'=>$data]);
		}
	}
	public function production()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
					$data['plant_list']=$this->My_model->select_where("plant_tbl",['status'=>'active','plant_tbl_id'=>$plant_id]);
			$data["prod_list"] = $this->db->query("SELECT * FROM product,plant_products WHERE plant_products.status='active' AND product.status='active' AND plant_products.product_id=product.product_id AND plant_products.plant_id = '".$plant_id."'")->result_array();
			echo json_encode(['data'=>$data]);
			}
	}

	public function getProductRaw()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
		$data['product_list']=$this->db->query("SELECT * FROM product_raw_materials,raw_materials,product,unit_tbl WHERE raw_materials.unit_id=unit_tbl.unit_tbl_id AND product_raw_materials.product_id=product.product_id AND product_raw_materials.raw_materials_id=raw_materials.raw_materials_id AND product.status='active' AND product_raw_materials.status='active' AND raw_materials.status='active' AND product.product_id='".$_POST['product_id']."' ")->result_array();
			foreach($data['product_list'] as $key => $row)
			{
				$stock=$this->My_model->select_where("plant_raw_materials",['raw_materials_id'=>$row['raw_materials_id'],'plant_id'=>$_POST['plant_id'],'status'=>'active']);
				
				if(isset($stock[0]))
				{
					$data['product_list'][$key]['aval_stock']=$stock[0]['stock'];
					$data['product_list'][$key]['plant_raw_materials_id']=$stock[0]['plant_raw_materials_id'];
					if($stock[0]['stock']>0)
					{
						$data['product_list'][$key]['p_aval']='yes';
					}
					else{
						$data['product_list'][$key]['p_aval']='no';
					}
				}
				else{
					$data['product_list'][$key]['aval_stock']=0;
					$data['product_list'][$key]['plant_raw_materials_id']=0;
					$data['product_list'][$key]['p_aval']='no';
				}
			}

					echo json_encode(['status'=>'success','list'=>$data['product_list']]);
			}
		}

		public function add_in_production()
		{
			if(isset($_POST['token']))
			    {
				 extract($_POST);
				 $emp_id=getIdByToken($_POST['token']);
					
				$production['plant_id']=$_POST['form_data']['plant_id'];
				$production['product_id']=$_POST['form_data']['product_id'];
			
				$production['production_start_date']=$_POST['form_data']['production_start_date'];
				$production['production_status']='in_production';
				$production['production_complete_date']='';
				$production['status']='active';
				$production['entry_time']=time();
				$production['entry_date']=date('Y-m-d');
				$production['entry_by'] = 'plant_head';
				$production['entry_by_id'] = $emp_id;

				$production_id = $this->My_model->insert('production',$production);

				if(isset($_POST['form_data']['aval_stock']))
				{
					for($i=0;$i<count($_POST['form_data']['aval_stock']);$i++)
					{
						$prod_data['aval_stock']=$_POST['form_data']['aval_stock'][$i];
						$prod_data['raw_materials_id']=$_POST['form_data']['raw_materials_id'][$i];
						$prod_data['percentage']=$_POST['form_data']['percentage'][$i];
						$prod_data['unit_id']=$_POST['form_data']['unit_id'][$i];
						$prod_data['plant_raw_materials_id']=$_POST['form_data']['plant_raw_materials_id'][$i];
						$prod_data['production_id']=$production_id;
						$prod_data['status']='active';
						$prod_data['entry_time']=time();
						$prod_data['entry_date']=date('Y-m-d');
						$this->My_model->insert('production_material',$prod_data);
						// $this->update_raw_material_stock($_POST['raw_materials_id'][$i],$_POST['plant_id'],$_POST['issued_stock'][$i]*-1,"Transfered Into Production");
					}
				}
				if($production_id)
				{
					echo json_encode(['status'=>'success','data'=>$production,'post'=>$_POST,'msg'=>'Production Order Added Successfully...']);
				}
				else
				{
					echo json_encode(['status'=>'success','data'=>$production,'post'=>$_POST,'msg'=>'Production Order Not Added...']);
				}
			}
		}


	public function edit_production()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data['list'] = $this->db->query("SELECT * FROM production,plant_tbl,product,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND production.product_id=product.product_id AND production.plant_id=plant_tbl.plant_tbl_id AND  production.status='active' AND production.production_status = 'in_production' AND plant_tbl.plant_tbl_id='".$plant_id."' AND production.production_id='".$_POST['production_id']."'   ORDER BY production.production_id DESC ")->result_array();
			foreach($data['list'] as $key=>$row)
			{
				$data['list'][$key]['raw']=$this->db->query("SELECT * FROM production_material,raw_materials,unit_tbl WHERE raw_materials.unit_id=unit_tbl.unit_tbl_id AND production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array();
				$data['list'][$key]['ttl_raw']=$this->db->query("SELECT COUNT(production_material.raw_materials_id) as ttl_raw FROM production_material,raw_materials WHERE production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array()[0]['ttl_raw'];
			}
			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}

	public function update_production()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
		
		$production['plant_id']=$_POST['form_data']['plant_id'];
		$production['product_id']=$_POST['form_data']['product_id'];
		$production['production_start_date']=$_POST['form_data']['production_start_date'];
		
		$data=$this->My_model->update("production",["production_id"=>$_POST['form_data']['production_id']],$production);
		
		$old_products = $this->My_model->select_where("production_material",["production_id"=>$_POST['form_data']['production_id'],"status"=>"active"]);
		foreach($old_products as $row)
		{

	 		// $this->update_raw_material_stock($row['raw_materials_id'],$_POST['form_data']['plant_id'],$row['issued_stock'],"Added While Editing Production");

		}

		$this->My_model->update("production_material",["production_id"=>$_POST['form_data']['production_id']],["status"=>"deleted"]);
		if(isset($_POST['form_data']['aval_stock']))
		{
			for($i=0;$i<count($_POST['form_data']['aval_stock']);$i++)
			{
				$prod_data['aval_stock']=$_POST['form_data']['aval_stock'][$i];
				$prod_data['raw_materials_id']=$_POST['form_data']['raw_materials_id'][$i];
				$prod_data['percentage']=$_POST['form_data']['percentage'][$i];
				$prod_data['unit_id']=$_POST['form_data']['unit_id'][$i];
				$prod_data['plant_raw_materials_id']=$_POST['form_data']['plant_raw_materials_id'][$i];
				$prod_data['production_id']=$_POST['form_data']['production_id'];
				
				$prod_data['status']='active';
				$prod_data['entry_time']=time();
				$prod_data['entry_date']=date('Y-m-d');
				$this->My_model->insert('production_material',$prod_data);
				// $new_stock = (float)$prod_data['aval_stock'] - (float)$_POST['issued_stock'][$i];

	 			// $this->update_raw_material_stock($_POST['raw_materials_id'][$i],$_POST['plant_id'],$_POST['issued_stock'][$i]*-1,"Removed While Editing Production");

			}
		}
		if($data)
				{
					echo json_encode(['status'=>'success','data'=>$production,'post'=>$_POST,'msg'=>'Production Order Updated Successfully...']);
				}
				else
				{
					echo json_encode(['status'=>'success','data'=>$production,'post'=>$_POST,'msg'=>'Production Order Not Updated...']);
				}
		}
	}

	public function delete_production()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$data = $this->My_model->update("production",["production_id"=>$production_id],["production_status"=>"deleted","production_deleted_date"=>date('Y-m-d')]);
			if($data)
				{
					echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Production Deleted Successfully...']);
				}
				else
				{
					echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Production Not Deleted...']);
				}
		}
	}
	public function complete_production_save()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$data = $this->My_model->update("production",["production_id"=>$form_data["production_id"]],["production_status"=>"complete","production_complete_date"=>$form_data['production_complete_date']]);

			for($i=0;$i<count($form_data['production_material_id']);$i++)
			{
				$this->My_model->update("production_material",["production_material_id"=>$form_data['production_material_id'][$i]],[
					"percentage"=>$form_data["percentage"][$i],
				]);
			}
			if($data)
				{
					echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Production Completed Successfully...']);
				}
				else
				{
					echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Production Not Completed...']);
				}
		}
	}

		public function complete_production_list()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data['list'] = $this->db->query("SELECT * FROM production,plant_tbl,product,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND production.product_id=product.product_id AND production.plant_id=plant_tbl.plant_tbl_id AND  production.status='active' AND production.production_status = 'complete' AND plant_tbl.plant_tbl_id='".$plant_id."'   ORDER BY production.production_id DESC ")->result_array();
			foreach($data['list'] as $key=>$row)
			{
				$data['list'][$key]['raw']=$this->db->query("SELECT * FROM production_material,raw_materials WHERE production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array();
				$data['list'][$key]['ttl_raw']=$this->db->query("SELECT COUNT(production_material.raw_materials_id) as ttl_raw FROM production_material,raw_materials WHERE production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array()[0]['ttl_raw'];
			}
			echo json_encode(['data'=>$data]);
		}
	}
		public function edit_complete_production()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$emp_id=getIdByToken($_POST['token']);
			$data['list'] = $this->db->query("SELECT * FROM production,plant_tbl,product,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND production.product_id=product.product_id AND production.plant_id=plant_tbl.plant_tbl_id AND  production.status='active' AND production.production_status = 'complete' AND plant_tbl.plant_tbl_id='".$plant_id."' AND production.production_id='".$_POST['production_id']."'   ORDER BY production.production_id DESC ")->result_array();
			foreach($data['list'] as $key=>$row)
			{
				$data['list'][$key]['raw']=$this->db->query("SELECT * FROM production_material,raw_materials,unit_tbl WHERE raw_materials.unit_id=unit_tbl.unit_tbl_id AND production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array();
				$data['list'][$key]['ttl_raw']=$this->db->query("SELECT COUNT(production_material.raw_materials_id) as ttl_raw FROM production_material,raw_materials WHERE production_material.raw_materials_id=raw_materials.raw_materials_id AND production_material.status='active' AND production_material.status='active' AND production_material.production_id='".$row['production_id']."'  ")->result_array()[0]['ttl_raw'];
			}
			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}
	public function edit_complete_production_save()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$data = $this->My_model->update("production",["production_id"=>$form_data["production_id"]],["production_complete_date"=>$form_data['production_complete_date']]);

			for($i=0;$i<count($form_data['production_material_id']);$i++)
			{
				$this->My_model->update("production_material",["production_material_id"=>$form_data['production_material_id'][$i]],[
					"percentage"=>$form_data["percentage"][$i],
				]);
			}
			if($data)
				{
					echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Production Updated Successfully...']);
				}
				else
				{
					echo json_encode(['status'=>'success','data'=>$data,'post'=>$_POST,'msg'=>'Production Not Updated...']);
				}
		}
	}

	public function supplier_list()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$data['supplier_list']=$this->db->query("SELECT * FROM purchase,supplier_tbl WHERE purchase.supplier_id=supplier_tbl.supplier_tbl_id AND purchase.plant_id='".$_POST['plant_id']."' AND purchase.status='active' AND supplier_tbl.status='active' GROUP BY supplier_tbl.supplier_tbl_id ORDER BY  purchase.purchase_id DESC ")->result_array();
			echo json_encode(['data'=>$data]);
		}
	}
	public function pay_to_supplier()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
			$data["supplier"] = $this->My_model->select_where("supplier_tbl",["supplier_tbl_id"=>$supplier_id]);
			$data["payment_type"] = $this->My_model->select("payment_type");
			$data['supplier_payment_history'] = $this->My_model->select_where("supplier_payment_history",["supplier_id"=>$supplier_id]);

			foreach($data['supplier_payment_history'] as $key=>$row)
			{
				if($row['amount'] >= 0)
				{
					$data['supplier_payment_history'][$key]['bg_clr']='in-success';
				}
				else{
					$data['supplier_payment_history'][$key]['bg_clr']='in-danger';
				}
					$data['supplier_payment_history'][$key]['paid_datetime']=date('Y-m-d H:i a',$row['entry_time']);

			}
			echo json_encode(['data'=>$data,'post'=>$_POST]);
		}
	}

	public function plant_head()
	{
		if(isset($_POST['token']))
		{
			extract($_POST);
		$data['ttl_in_production'] = $this->db->query("SELECT COUNT(production.production_id) as ttl_in_production FROM production,plant_tbl,product,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND production.product_id=product.product_id AND production.plant_id=plant_tbl.plant_tbl_id AND  production.status='active' AND production.production_status = 'in_production' AND plant_tbl.plant_tbl_id='".$plant_id."'   ORDER BY production.production_id DESC ")->result_array()[0]['ttl_in_production'];
		$data['ttl_cmp_production'] = $this->db->query("SELECT COUNT(production.production_id) as ttl_cmp_production FROM production,plant_tbl,product,emp_tbl WHERE plant_tbl.emp_id=emp_tbl.emp_tbl_id AND production.product_id=product.product_id AND production.plant_id=plant_tbl.plant_tbl_id AND  production.status='active' AND production.production_status = 'complete' AND plant_tbl.plant_tbl_id='".$plant_id."'   ORDER BY production.production_id DESC ")->result_array()[0]['ttl_cmp_production'];
		echo json_encode(['data'=>$data]);
	}

	}

		public function print_supplier_payment_receipt($supplier_paid_payment_id)
	{
		$data['pay_det']=$this->My_model->select_where("supplier_paid_payment",['supplier_paid_payment_id'=>$supplier_paid_payment_id]);
		if(isset($data['pay_det'][0]))
		{
			$sid=$data['pay_det'][0]['supplier_id'];
			$data['supplier_det']=$this->My_model->select_where("supplier_tbl",['supplier_tbl_id'=>$sid]);
		}
		// print_r($data);
		// echo "supplier_paid_payment_id = $supplier_paid_payment_id";
		$this->load->view("supplier_paid_payment_slip",$data);
	}
}	
?>
