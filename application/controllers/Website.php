	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Website extends CI_Controller
{
	public function __construct() 
	{ 
		parent::__construct();
		$this->load->model('My_model');
		$this->load->helper('form');
		$this->load->helper('url'); 
		$this->load->helper('helper1');
		$this->load->library('session');
		$this->load->library('form_validation');       
	}
	public function ci_flashdata($type,$msg,$set="yes")
	{
		$this->My_model->insert("system_notification",['admin_id'=>'none','type'=>$type,'msg'=>$msg,'sn_time'=>time()]);
		if($set=="yes")
			$this->session->set_flashdata($type, $msg);
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
	public function head()
	{
		$this->load->view('website/head');
	}
	public function nav(){
		$data['company_det'] = $this->My_model->select_where("company_details_tbl",['status'=>'active'])[0];
		$data['service'] = $this->My_model->select_where("service_tbl",['status'=>'active']);
		
		$this->head();
		$this->load->view('website/nav',$data);
	}
	public function footer(){
// 		$this->head();
		$data['about'] = $this->My_model->select_where("about_tbl",['status'=>'active']);
		$data['company_det'] = $this->My_model->select_where("company_details_tbl",['status'=>'active'])[0];
		$this->load->view('website/footer',$data);
	}
	public function company_intro(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'company_intro'])[0];
		$data['weare'] = $this->My_model->select_where("weare_tbl",['status'=>'active']);
		$data['partners'] = $this->My_model->select_where("partners_tbl",['status'=>'active']);
		$data['company_det'] = $this->My_model->select_where("company_intro_tbl",['status'=>'active']);
		$this->load->view('website/company_intro',$data);
		$this->footer();
	}
	public function index()
	{ 
		$this->nav();
		$data['slider'] = $this->My_model->select_where("slider_tbl",['status'=>'active']);
		$data['counter'] = $this->My_model->select_where("counter_tbl",['status'=>'active']);
		$data['procedure'] = $this->My_model->select_where("procedure_tbl",['status'=>'active']);
		$data['testimonials'] = $this->My_model->select_where("testimonials_tbl",['status'=>'active']);
		// $data['plant'] = $this->My_model->select_where("plant_tbl",['status'=>'active']);
		$data['plant'] = $this->db->query("SELECT * FROM plant_tbl WHERE status='active' ORDER BY plant_tbl_id ASC LIMIT 4")->result_array();

		$data['about'] = $this->My_model->select_where("about_tbl",['status'=>'active']);
		$data['blogs'] = $this->My_model->select_where("blog_tbl",['status'=>'active']);
		$data['machine'] = $this->My_model->select_where("machine_tbl",['status'=>'active']);
		$this->load->view('website/index',$data);
		$this->footer();
	}
	
	public function about(){
		$this->nav();
		$data['about'] = $this->My_model->select_where("about_tbl",['status'=>'active']);
		$data['team'] = $this->My_model->select_where("team_tbl",['status'=>'active']);
		$data['mis_vis'] = $this->My_model->select_where("mis_vis_tbl",['status'=>'active']);

		$data['team'] = $this->My_model->select_where("team_tbl",['status'=>'active']);
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'about'])[0];

		$this->load->view('website/about',$data);
		$this->footer();
	}
	public function mis_vis(){
		$this->nav();
		$data['mis_vis'] = $this->My_model->select_where("mis_vis_tbl",['status'=>'active']);
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'mis_vis'])[0];
		
		$this->load->view('website/mis_vis',$data);
		$this->footer();
	}
	public function founder(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'founder'])[0];
		$data['founder'] = $this->My_model->select_where("founder_tbl",['status'=>'active']);
		$this->load->view('website/founder',$data);
		$this->footer();
	}
	public function awards(){
		$this->nav();
		// $data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'awards'])[0];
		// $data['awards'] = $this->My_model->select_where("awards_tbl",['status'=>'active']);
		$this->load->view('website/awards');
		$this->footer();
	}
	public function career(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'career'])[0];
		$data['career'] = $this->My_model->select_where("career_tbl",['status'=>'active']);
		$this->load->view('website/career',$data);
		$this->footer();
	}
	public function blog(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'blog'])[0];
		$data['blog'] = $this->My_model->select_where("blog_tbl",['status'=>'active']);
		$this->load->view('website/blog',$data);
		$this->footer();
	}
		public function services(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'service'])[0];
		$data['service'] = $this->My_model->select_where("service_tbl",['status'=>'active']);
		$this->load->view('website/services',$data);
		$this->footer();
	}

	public function services_details($id){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'service'])[0];
		$data['services'] = $this->My_model->select_where("service_tbl",['status'=>'active']);
		$data['service_det'] = $this->My_model->select_where("service_tbl",['service_tbl_id'=>$id,'status'=>'active'])[0];
		$this->load->view('website/services_details',$data);
		$this->footer();
	}
		public function faq(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'faq'])[0];
		$data['faq'] = $this->My_model->select_where("faq_tbl",['status'=>'active']);
		$this->load->view('website/faq',$data);
		$this->footer();
	}
		public function terms_condition(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'terms_condition'])[0];
		$data['terms'] = $this->My_model->select_where("terms_tbl",['status'=>'active']);
		$this->load->view('website/terms_condition',$data);
		$this->footer();
	}
		public function privacy_policy(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'privacy_policy'])[0];
		$data['privacy'] = $this->My_model->select_where("privacy_tbl",['status'=>'active']);
		$this->load->view('website/privacy_policy',$data);
		$this->footer();
	}
		public function products(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'product'])[0];
		$data['products'] = $this->My_model->select_where("products_tbl",['status'=>'active']);
		$data['raw_products'] = $this->My_model->select_where("raw_products_tbl",['status'=>'active']);
		$this->load->view('website/products',$data);
		$this->footer();
	}
		public function our_plants(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'plant'])[0];
		$data['plant'] = $this->My_model->select_where("plant_tbl",['status'=>'active']);
		$this->load->view('website/our_plants',$data);
		$this->footer();
	}
		public function contact(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'contact'])[0];
		$data['contact'] = $this->My_model->select_where("company_details_tbl",['status'=>'active']);
		$this->load->view('website/contact',$data);
		$this->footer();
	}
		public function gallery(){
		$this->nav();
				$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'gallery'])[0];
		$data['gallery'] = $this->My_model->select_where("gallery_tbl",['status'=>'active']);
		

		$data['gallery_cat'] = $this->My_model->select_where("gallery_cat_tbl",['status'=>'active']);
		$this->load->view('website/gallery',$data);
		$this->footer();
	}
		public function our_presence(){
		$this->nav();
				$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'contact'])[0];
		// $data['gallery'] = $this->My_model->select_where("gallery_tbl",['status'=>'active']);
		

		$this->load->view('website/our_presence',$data);
		$this->footer();
	}
		public function gallery_videos(){
		$this->nav();
				$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'gallery_videos'])[0];
		$data['gallery'] = $this->My_model->select_where("gallery_tbl",['status'=>'active']);
		$data['gallery_video'] = $this->My_model->select_where("gallery_video_tbl",['status'=>'active']);
		$data['gallery_cat'] = $this->My_model->select_where("gallery_cat_tbl",['status'=>'active']);
		$this->load->view('website/gallery_videos',$data);
		$this->footer();
	}
		public function feedback(){
		$this->nav();
		$this->load->view('website/feedback');
		$this->footer();
	}
		public function customers(){
		$this->nav();
		$this->load->view('website/customers');
		$this->footer();
	}
		public function team(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'team'])[0];
			$data['team'] = $this->My_model->select_where("team_tbl",['status'=>'active']);
		$this->load->view('website/team',$data);
		$this->footer();
	}
	public function client_stories(){
		$this->nav();
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'client_stories'])[0];
		$data['client_stories'] = $this->My_model->select_where("client_stories_tbl",['status'=>'active']);
		$this->load->view('website/client_stories',$data);
		$this->footer();
	}
	    public function supplier(){
			$data['raw_list'] = $this->My_model->select_where("raw_materials",['status'=>'active']);
	    	$this->load->view("website/supplier",$data);
	    }
	    public function supplier_msg(){
	    	$_POST['status']='active';
		$_POST['entry_time']=time();
		$this->My_model->insert("supplier_msg",$_POST);
		$raw = $_POST['raw_materials_id'];
		if(isset($raw))
		{
			if($raw)
			{
				for($i = 0 ;$i<count($raw);$i++)
				{
					$plant_mat['raw_materials_id']=$raw[$i];
					$plant_mat['status']='active';
					$plant_mat['entry_time']=time();
					$plant_mat['entry_date']=date('Y-m-d');
					 $this->My_model->create_table("supplier_raw_materials",$plant_mat);
				}
			}
		}
		redirect('Supplier','refresh');
	    }
	    public function blog_details($id){
		$this->nav();
		$data['details'] = $this->My_model->select_where("blog_tbl",['blog_tbl_id'=>$id],['status'=>'active']);
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'blog_details'])[0];
		$data['blogs'] = $this->My_model->select_where("blog_tbl",['status'=>'active']);

		$this->load->view('website/blog_details',$data);
		$this->footer();
	}
    	public function feedback_msg(){
		$_POST['status']='active';
		$_POST['entry_time']=time();
		$this->My_model->insert("feedback_msg",$_POST);
		redirect('Feedback','refresh');
	}

	    public function career_msg(){
		$_POST['status']='active';
		$_POST['entry_time']=time();
			if($_FILES['emp_resume']['name']!="")
			{
				$imgname=$_FILES['resume']['name'];
				$imgtemp=$_FILES['resume']['tmp_name'];
				$path="uploads/";
				$_POST['resume']=$this->upload_img($imgname,$imgtemp,$path);
			}
		$this->My_model->insert("career_msg_tbl",$_POST);
		redirect('Career','refresh');
	}

	  public function enquiry_msg(){
		$_POST['status']='active';
		$_POST['entry_time']=time();
		$this->My_model->create_table("enquiry_msg_tbl",$_POST);
		redirect('Index','refresh');
	}

	    public function contact_msg(){

		$_POST['status']='active';
		$_POST['entry_time']=time();
		$this->My_model->insert("contact_msg_tbl",$_POST);
		redirect('Contact','refresh');
	}
		public function product_details($id){
		$this->nav();
		$data['product_det']=$this->My_model->select_where("products_tbl",['products_tbl_id'=>$id]);
		$data['background_img']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active','page_name'=>'product_details'])[0];
		$this->load->view('website/product_details',$data);
		$this->footer();
	}

	    public function newsletter_msg(){
		$_POST['status']='active';
		$_POST['entry_time']=time();
		$this->My_model->insert("newsletter_msg_tbl",$_POST);
		redirect('Faq','refresh');
	}

	public function enquire($id='')
	{
		$this->nav();
		if($id!='')
		{
			$data['slid']=$this->My_model->select_where("campion_tbl",['campion_tbl_id'=>$id])[0]['emp_id'];
			$data['campion_id']=$id;
		}
		else{
			$data['slid']='';
		}
		$data['company_det'] = $this->My_model->select_where("company_details_tbl",['status'=>'active'])[0];
		$this->load->view('website/enquire',$data);
		$this->footer();
	}
	
	public function save_enquiry()
	{
		$_POST['lead_status']='active';
		$_POST['entry_time']=time();
		$_POST['entry_date']=date('Y-m-d');
		$_POST['status']='active';
		$data=$this->My_model->insert("leads_tbl",$_POST);
		redirect('website/enquire','refresh');
	}
}
?>
