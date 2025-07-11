<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webadmin extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('My_model');
		// error_reporting(0);
		// array_multisort(array_column($members, 'member_name'), SORT_ASC, $members);
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('helper1');

		// $this->load->helper('mail');
 		$this->load->library('form_validation');
		$this->load->library('session');
    	$config['upload_path']= './uploads/';
    	$config['allowed_types'] = 'gif|jpg|png|jpeg';
    	$this->load->library('upload', $config);
    	date_default_timezone_set('Asia/Kolkata');
    	if(!isset($_SESSION['admin_id']))
    	{
    		redirect(base_url().'login','refresh');
    	}
    }

     	function upload_img($imgname,$imgtemp,$path="uploads/")
 	{
        $fname=time().rand(00000000,99999999).".".explode(".",$imgname)[count(explode(".",$imgname))-1];
        $path1=$path.$fname;
        move_uploaded_file($imgtemp,$path1);
        return $fname;
    }
    
	public function head()
	{
        $data['company_det']=$this->My_model->select_where("company_details_tbl",['status'=>'active']);

		$this->load->view("webadmin/head",$data);
	}
	public function nav()
	{
		$data['company_det']=$this->My_model->select_where("company_details_tbl",['status'=>'active']);

		$data['admin_det']=$this->My_model->select_where("admin_tbl",['admin_tbl_id'=>$_SESSION['admin_id']])[0];
		$data['system_not']=$this->db->query("SELECT * FROM system_notification ORDER BY system_notification_id DESC limit 20")->result_array();
		$this->load->view("webadmin/nav",$data);
	}
	public function footer()
	{
        $data['company_det']=$this->My_model->select_where("company_details_tbl",['company_det_id'=>'1'])[0];
		$this->load->view("webadmin/footer",$data);
	}

	public function index()
	{
		$this->head();
		$this->nav();
		$data['company_det']=$this->My_model->select_where("company_details_tbl",['company_det_id'=>'1'])[0];
		$this->load->view("webadmin/index",$data);
		$this->footer();
	}

	//About
	public function about(){
		$this->head();
		$this->nav();
		$data['about_company']=$this->My_model->select_where('about_tbl',['status' =>'active']);
		$this->load->view('webadmin/about',$data);
		$this->footer();
	}

	public function add_about(){
		// $about=$this->My_model->select_where('about_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($about[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/about','refresh');
		// }
		// else{
			if($_FILES['about_image']['name']!="")
			{
				$imgname=$_FILES['about_image']['name'];
				$imgtemp=$_FILES['about_image']['tmp_name'];
				$path="uploads/";
				$_POST['about_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("about_tbl",$_POST);
			// $this->ci_flashdata('Success','About Company Details Added Successfully..',"yes");
			redirect('webadmin/about','refresh');	
		// }
	}
	public function edit_company($ab_id)
	{
		$this->head();
		$this->nav();
		$data['about_det']=$this->My_model->select_where("about_tbl",['about_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/about",$data);
		$this->footer();
	}
	public function update_details(){

		if($_FILES['about_image']['name']!="")
		{
			$imgname=$_FILES['about_image']['name'];
			$imgtemp=$_FILES['about_image']['tmp_name'];
			$path="uploads/";
			$_POST['about_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['about_image1'];
			unlink($path1);
		}
		else{
			$_POST['about_image']=$_POST['about_image1'];
		}
		
		unset($_POST['about_image1']);

		$this->My_model->update("about_tbl",['about_tbl_id'=> $_POST['about_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/about','refresh');
	}
	public function service(){
		$this->head();
		$this->nav();
		$data['service_company']=$this->My_model->select_where('service_tbl',['status' =>'active']);
		$this->load->view('webadmin/service',$data);
		$this->footer();
	}

	public function add_service(){
		$service=$this->My_model->select_where('service_tbl',array('status'=>'active','title'=>$_POST['title']));
		if (isset($service[0])) {
			$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
			redirect('webadmin/service','refresh');
		}
		else{
			if($_FILES['service_image']['name']!="")
			{
				$imgname=$_FILES['service_image']['name'];
				$imgtemp=$_FILES['service_image']['tmp_name'];
				$path="uploads/";
				$_POST['service_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("service_tbl",$_POST);
			// $this->ci_flashdata('Success','service Company Details Added Successfully..',"yes");
			redirect('webadmin/service','refresh');	
		}
	}
	public function edit_service($ab_id)
	{
		$this->head();
		$this->nav();
		$data['service_det']=$this->My_model->select_where("service_tbl",['service_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/service",$data);
		$this->footer();
	}

	public function delete_service($id)
	{
		$this->My_model->update("service_tbl",['service_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/service','refresh');
		
	}

	public function update_service(){

		if($_FILES['service_image']['name']!="")
		{
			$imgname=$_FILES['service_image']['name'];
			$imgtemp=$_FILES['service_image']['tmp_name'];
			$path="uploads/";
			$_POST['service_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['service_image1'];
			unlink($path1);
		}
		else{
			$_POST['service_image']=$_POST['service_image1'];
		}
		
		unset($_POST['service_image1']);

		$this->My_model->update("service_tbl",['service_tbl_id'=> $_POST['service_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/service','refresh');
	}   
	// Blogs
	public function blogs(){
		$this->head();
		$this->nav();
		$data['blogs']=$this->My_model->select_where('blog_tbl',['status' =>'active']);
		$this->load->view('webadmin/blogs',$data);
		$this->footer();
	}

	public function add_blog(){
		// $blog=$this->My_model->select_where('blog_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($blog[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/blogs','refresh');
		// }
		// else{
			if($_FILES['blog_image']['name']!="")
			{
				$imgname=$_FILES['blog_image']['name'];
				$imgtemp=$_FILES['blog_image']['tmp_name'];
				$path="uploads/";
				$_POST['blog_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("blog_tbl",$_POST);
			// $this->ci_flashdata('Success','blog Company Details Added Successfully..',"yes");
			redirect('webadmin/blogs','refresh');	
		// }
	}
	public function edit_blog($ab_id)
	{
		$this->head();
		$this->nav();
		$data['blog_det']=$this->My_model->select_where("blog_tbl",['blog_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/blogs",$data);
		$this->footer();
	}

	public function delete_blog($id)
	{
		$this->My_model->update("blog_tbl",['blog_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/blogs','refresh');
		
	}

	public function update_blog(){

		if($_FILES['blog_image']['name']!="")
		{
			$imgname=$_FILES['blog_image']['name'];
			$imgtemp=$_FILES['blog_image']['tmp_name'];
			$path="uploads/";
			$_POST['blog_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['blog_image1'];
			unlink($path1);
		}
		else{
			$_POST['blog_image']=$_POST['blog_image1'];
		}
		
		unset($_POST['blog_image1']);
		$this->My_model->update("blog_tbl",['blog_tbl_id'=> $_POST['blog_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/blogs','refresh');
	}

	// Blogs
	public function gallery(){
		$this->head();
		$this->nav();
		$data['gallery']=$this->My_model->select_where('gallery_tbl',['status' =>'active']);
		$data['gallery_cat']=$this->My_model->select_where('gallery_cat_tbl',['status' =>'active']);
		$this->load->view('webadmin/gallery',$data);
		$this->footer();
	}

	public function add_gallery(){
		// $gallery=$this->My_model->select_where('gallery_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($gallery[0])) {
		// 	// $this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/gallery','refresh');
		// }
		// else{
			if($_FILES['gallery_image']['name']!="")
			{
				$imgname=$_FILES['gallery_image']['name'];
				$imgtemp=$_FILES['gallery_image']['tmp_name'];
				$path="uploads/";
				$_POST['gallery_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("gallery_tbl",$_POST);
			// $this->ci_flashdata('Success','gallery Company Details Added Successfully..',"yes");
			redirect('webadmin/gallery','refresh');	
		// }
	}
	public function edit_gallery($id)
	{
		$this->head();
		$this->nav();
		$data['gallery_cat']=$this->My_model->select_where("gallery_cat_tbl",['status'=>'active']);
		$data['gallery_det']=$this->My_model->select_where("gallery_tbl",['gallery_tbl_id'=>$id]);
		$this->load->view("webadmin/gallery",$data);
		$this->footer();
	}

	public function delete_gallery($id)
	{
		$this->My_model->update("gallery_tbl",['gallery_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/gallery','refresh');
		
	}

	public function update_gallery(){

		if($_FILES['gallery_image']['name']!="")
		{
			$imgname=$_FILES['gallery_image']['name'];
			$imgtemp=$_FILES['gallery_image']['tmp_name'];
			$path="uploads/";
			$_POST['gallery_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['gallery_image1'];
			unlink($path1);
		}
		else{
			$_POST['gallery_image']=$_POST['gallery_image1'];
		}
		
		unset($_POST['gallery_image1']);
		$this->My_model->update("gallery_tbl",['gallery_tbl_id'=> $_POST['gallery_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/gallery','refresh');
	}

	// Gallery Categories
	public function gallery_cat()
	{
		$this->head();
		$this->nav();
		$data['gallery_cat_list']=$this->My_model->select_where("gallery_cat_tbl",['status'=>'active']);
		$this->load->view("webadmin/gallery_cat",$data);
		$this->footer();
	}

	public function save_gallery_cat()
	{

		$_POST['added_by'] = 'admin';
	    $_POST['entry_time'] = time();
	    $_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['status'] = 'active';
		$data=$this->My_model->insert("gallery_cat_tbl",$_POST);
		if($data)
		{
			redirect('webadmin/gallery_cat','refresh');
		}
		else{
			redirect('webadmin/gallery_cat','refresh');
		}
	}

	public function update_gallery_cat()
	{
		$data=$this->My_model->update("gallery_cat_tbl",['gallery_cat_tbl_id'=>$_POST['gallery_cat_tbl_id']],$_POST);
		if($data)
		{
			redirect('webadmin/gallery_cat','refresh');
		}
		else{
			redirect('webadmin/gallery_cat','refresh');
		}
	}

	public function delete_gallery_cat($id)
	{
		$data=$this->My_model->update("gallery_cat_tbl",['gallery_cat_tbl_id'=>$id],['status'=>'deleted']);
		
		if($data)
		{
			redirect('webadmin/gallery_cat','refresh');
		}
		else{
			redirect('webadmin/gallery_cat','refresh');
		}
	}

	function upload_img1($imgname,$imgtemp,$path="uploads/")
	{
		$config['allowed_types'] = 'mp4';
		$config['max_size'] = '102400';
		$fname=time().rand(00000000,99999999).".".explode(".",$imgname)[count(explode(".",$imgname))-1];
		$path1=$path.$fname;
		move_uploaded_file($imgtemp,$path1);
		return $fname;
	}

	// Gallery Video
	public function gallery_video()
	{
		$this->head();
		$this->nav();
		$data['gallery_video_list']=$this->My_model->select_where("gallery_video_tbl",['status'=>'active']);
		$this->load->view("webadmin/gallery_video",$data);
		$this->footer();
	}

	public function save_gallery_video()
	{

		$_POST['added_by'] = 'admin';
	    $_POST['entry_time'] = time();
	    $_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['status'] = 'active';
		if($_FILES['image']['name']!="")
			{
				$imgname=$_FILES['image']['name'];
				$imgtemp=$_FILES['image']['tmp_name'];
				$path="uploads/";
				$_POST['image']=$this->upload_img1($imgname,$imgtemp,$path);
			}
			if($_FILES['video']['name']!="")
			{
				$imgname=$_FILES['video']['name'];
				$imgtemp=$_FILES['video']['tmp_name'];
				$path="uploads/";
				$_POST['video']=$this->upload_img1($imgname,$imgtemp,$path);
			}
		$data=$this->My_model->insert("gallery_video_tbl",$_POST);
		if($data)
		{
			redirect('webadmin/gallery_video','refresh');
		}
		else{
			redirect('webadmin/gallery_video','refresh');
		}
	}
	public function edit_gallery_video($id)
	{
		$this->head();
		$this->nav();
		$data['gallery_det']=$this->My_model->select_where("gallery_video_tbl",['gallery_video_tbl_id'=>$id]);
		$this->load->view("webadmin/gallery_video",$data);
		$this->footer();
	}
	public function update_gallery_video()
	{
		if($_FILES['image']['name']!="")
		{
			$imgname=$_FILES['image']['name'];
			$imgtemp=$_FILES['image']['tmp_name'];
			$path="uploads/";
			$_POST['image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['image1'];
			unlink($path1);
		}

		else{
			$_POST['image']=$_POST['image1'];
		}
		if($_FILES['video']['name']!="")
		{
			$imgname=$_FILES['video']['name'];
			$imgtemp=$_FILES['video']['tmp_name'];
			$path="uploads/";
			$_POST['video']=$this->upload_img1($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['video1'];
			unlink($path1);
		}
		else{
			$_POST['video']=$_POST['video1'];
		}
		unset($_POST['video1']);
		unset($_POST['image1']);
		$data=$this->My_model->update("gallery_video_tbl",['gallery_video_tbl_id'=>$_POST['gallery_video_tbl_id']],$_POST);

		if($data)
		{
			redirect('webadmin/gallery_video','refresh');
		}
		else{
			redirect('webadmin/gallery_video','refresh');
		}
	}

	public function delete_gallery_video($id)
	{
		$data=$this->My_model->update("gallery_video_tbl",['gallery_video_tbl_id'=>$id],['status'=>'deleted']);
		
		if($data)
		{
			redirect('webadmin/gallery_video','refresh');
		}
		else{
			redirect('webadmin/gallery_video','refresh');
		}
	}

	// Testimonials
	public function team(){
		$this->head();
		$this->nav();
		$data['team_company']=$this->My_model->select_where('team_tbl',['status' =>'active']);
		$this->load->view('webadmin/team',$data);
		$this->footer();
	}

	public function add_team(){
		// $team=$this->My_model->select_where('team_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($team[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/team','refresh');
		// }
		// else{
			if($_FILES['team_image']['name']!="")
			{
				$imgname=$_FILES['team_image']['name'];
				$imgtemp=$_FILES['team_image']['tmp_name'];
				$path="uploads/";
				$_POST['team_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("team_tbl",$_POST);
			// $this->ci_flashdata('Success','team Company Details Added Successfully..',"yes");
			redirect('webadmin/team','refresh');	
		// }
	}
	public function edit_team($id)
	{
		$this->head();
		$this->nav();
		$data['team_det']=$this->My_model->select_where("team_tbl",['team_tbl_id'=>$id]);
		$this->load->view("webadmin/team",$data);
		$this->footer();
	}

	public function delete_team($id)
	{
		$this->My_model->update("team_tbl",['team_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/team','refresh');
		
	}

	public function update_team(){

		if($_FILES['team_image']['name']!="")
		{
			$imgname=$_FILES['team_image']['name'];
			$imgtemp=$_FILES['team_image']['tmp_name'];
			$path="uploads/";
			$_POST['team_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['team_image1'];
			unlink($path1);
		}
		else{
			$_POST['team_image']=$_POST['team_image1'];
		}
		
		unset($_POST['team_image1']);

		$this->My_model->update("team_tbl",['team_tbl_id'=> $_POST['team_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/team','refresh');
	}


	// testimonials
	public function testimonials(){
		$this->head();
		$this->nav();
		$data['testimonials']=$this->My_model->select_where('testimonials_tbl',['status' =>'active']);
		$this->load->view('webadmin/testimonials',$data);
		$this->footer();
	}

	public function add_testimonials(){
		// $testimonials=$this->My_model->select_where('testimonials_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($testimonials[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/testimonials','refresh');
		// }
		// else{
			if($_FILES['testimonials_image']['name']!="")
			{
				$imgname=$_FILES['testimonials_image']['name'];
				$imgtemp=$_FILES['testimonials_image']['tmp_name'];
				$path="uploads/";
				$_POST['testimonials_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("testimonials_tbl",$_POST);
			// $this->ci_flashdata('Success','testimonials Company Details Added Successfully..',"yes");
			redirect('webadmin/testimonials','refresh');	
		// }
	}
	public function edit_testimonials($id)
	{
		$this->head();
		$this->nav();
		$data['testimonials_det']=$this->My_model->select_where("testimonials_tbl",['testimonials_tbl_id'=>$id]);
		$this->load->view("webadmin/testimonials",$data);
		$this->footer();
	}

	public function delete_testimonials($id)
	{
		$this->My_model->update("testimonials_tbl",['testimonials_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/testimonials','refresh');
		
	}

	public function update_testimonials(){

		if($_FILES['testimonials_image']['name']!="")
		{
			$imgname=$_FILES['testimonials_image']['name'];
			$imgtemp=$_FILES['testimonials_image']['tmp_name'];
			$path="uploads/";
			$_POST['testimonials_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['testimonials_image1'];
			unlink($path1);
		}
		else{
			$_POST['testimonials_image']=$_POST['testimonials_image1'];
		}
		
		unset($_POST['testimonials_image1']);

		$this->My_model->update("testimonials_tbl",['testimonials_tbl_id'=> $_POST['testimonials_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/testimonials','refresh');
	}      

	//Mission, Vission And What we do 

	public function mis_vis(){
		$this->head();
		$this->nav();
		$data['mis_vis_company']=$this->My_model->select_where('mis_vis_tbl',['status' =>'active']);
		$this->load->view('webadmin/mis_vis',$data);
		$this->footer();
	}

	public function add_mis_vis(){
		$mis_vis=$this->My_model->select_where('mis_vis_tbl',array('status'=>'active','name'=>$_POST['name']));
		if (isset($mis_vis[0])) {
			$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
			redirect('webadmin/mis_vis','refresh');
		}
		else{
			if($_FILES['mis_vis_image']['name']!="")
			{
				$imgname=$_FILES['mis_vis_image']['name'];
				$imgtemp=$_FILES['mis_vis_image']['tmp_name'];
				$path="uploads/";
				$_POST['mis_vis_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("mis_vis_tbl",$_POST);
			// $this->ci_flashdata('Success','mis_vis Company Details Added Successfully..',"yes");
			redirect('webadmin/mis_vis','refresh');	
		}
	}
	public function edit_mis_vis($id)
	{
		$this->head();
		$this->nav();
		$data['mis_vis_det']=$this->My_model->select_where("mis_vis_tbl",['mis_vis_tbl_id'=>$id]);
		$this->load->view("webadmin/mis_vis",$data);
		$this->footer();
	}

	public function delete_mis_vis($id)
	{
		$this->My_model->update("mis_vis_tbl",['mis_vis_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/mis_vis','refresh');
		
	}

	public function update_mis_vis(){

		if($_FILES['mis_vis_image']['name']!="")
		{
			$imgname=$_FILES['mis_vis_image']['name'];
			$imgtemp=$_FILES['mis_vis_image']['tmp_name'];
			$path="uploads/";
			$_POST['mis_vis_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['mis_vis_image1'];
			unlink($path1);
		}
		else{
			$_POST['mis_vis_image']=$_POST['mis_vis_image1'];
		}
		
		unset($_POST['mis_vis_image1']);

		$this->My_model->update("mis_vis_tbl",['mis_vis_tbl_id'=> $_POST['mis_vis_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/mis_vis','refresh');
	}


	public function slider(){
		$this->head();
		$this->nav();
		$data['slider']=$this->My_model->select_where('slider_tbl',['status' =>'active']);
		$this->load->view('webadmin/slider',$data);
		$this->footer();
	}

	public function add_slider(){
		// $slider=$this->My_model->select_where('slider_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($slider[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/slider','refresh');
		// }
		// else{
			if($_FILES['slider_image']['name']!="")
			{
				$imgname=$_FILES['slider_image']['name'];
				$imgtemp=$_FILES['slider_image']['tmp_name'];
				$path="uploads/";
				$_POST['slider_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("slider_tbl",$_POST);
			// $this->ci_flashdata('Success','slider Company Details Added Successfully..',"yes");
			redirect('webadmin/slider','refresh');	
		// }
	}
	public function edit_slider($ab_id)
	{
		$this->head();
		$this->nav();
		$data['slider_det']=$this->My_model->select_where("slider_tbl",['slider_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/slider",$data);
		$this->footer();
	}

	public function delete_slider($id)
	{
		$this->My_model->update("slider_tbl",['slider_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/slider','refresh');
		
	}

	public function update_slider(){

		if($_FILES['slider_image']['name']!="")
		{
			$imgname=$_FILES['slider_image']['name'];
			$imgtemp=$_FILES['slider_image']['tmp_name'];
			$path="uploads/";
			$_POST['slider_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['slider_image1'];
			unlink($path1);
		}
		else{
			$_POST['slider_image']=$_POST['slider_image1'];
		}
		
		unset($_POST['slider_image1']);

		$this->My_model->update("slider_tbl",['slider_tbl_id'=> $_POST['slider_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/slider','refresh');
	}

	public function feedback_msg(){
		$this->head();
		$this->nav();
		$data['feedback_msg']=$this->My_model->select_where("feedback_msg",['status'=>'active']);
		$this->load->view("webadmin/feedback_msg",$data);
		$this->footer();
	}

	

	public function career_msg(){
		$this->head();
		$this->nav();
		$data['career_msg']=$this->My_model->select_where("career_msg",['status'=>'active']);
		$this->load->view("webadmin/career_msg",$data);
		$this->footer();
	}

	//Career Information
	public function newsletter_msg(){
		$this->head();
		$this->nav();
		$data['newsletter_msg']=$this->My_model->select_where('newsletter_msg_tbl',['status' =>'active']);
		$this->load->view('webadmin/newsletter_msg',$data);
		$this->footer();
	}
	public function career(){
		$this->head();
		$this->nav();
		$data['career_company']=$this->My_model->select_where('career_tbl',['status' =>'active']);
		$this->load->view('webadmin/career',$data);
		$this->footer();
	}
	public function add_career(){
		$career=$this->My_model->select_where('career_tbl',array('status'=>'active','title'=>$_POST['title']));
		if (isset($career[0])) {
			// $this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
			redirect('webadmin/career','refresh');
		}
		else{
			if($_FILES['career_image']['name']!="")
			{
				$imgname=$_FILES['career_image']['name'];
				$imgtemp=$_FILES['career_image']['tmp_name'];
				$path="uploads/";
				$_POST['career_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("career_tbl",$_POST);
			// $this->ci_flashdata('Success','career Company Details Added Successfully..',"yes");
			redirect('webadmin/career','refresh');	
		}
	}
	public function edit_career($id)
	{
		$this->head();
		$this->nav();
		$data['career_det']=$this->My_model->select_where("career_tbl",['career_tbl_id'=>$id]);
		$this->load->view("webadmin/career",$data);
		$this->footer();
	}
	public function delete_career($id)
	{
		$this->My_model->update("career_tbl",['career_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/career','refresh');
		
	}
	public function update_career(){

		if($_FILES['career_image']['name']!="")
		{
			$imgname=$_FILES['career_image']['name'];
			$imgtemp=$_FILES['career_image']['tmp_name'];
			$path="uploads/";
			$_POST['career_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['career_image1'];
			unlink($path1);
		}
		else{
			$_POST['career_image']=$_POST['career_image1'];
		}
		
		unset($_POST['career_image1']);

		$this->My_model->update("career_tbl",['career_tbl_id'=> $_POST['career_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/career','refresh');
	}

	// Background Images
	/* All Background Image */

	public function pages_img(){
		$this->head();
		$this->nav();
		$data['photo_gallery']=$this->My_model->select_where('page_imgs_tbl',['status' =>'active']);
		$this->load->view('webadmin/pages_img',$data);
		$this->footer();
	}

	public function page_add(){
// $photo_gallery=$this->My_model->select_where('home_img_tbl',array('status'=>'active','title'=>$_POST['title']));
// if (isset($photo_gallery[0])) {
// $this->ci_flashdata('Danger','This Allready Exit..',"yes");
// redirect('webadmin/pages_img','refresh');
// }
// else{
		if($_FILES['image']['name']!="")
		{
			$imgname=$_FILES['image']['name'];
			$imgtemp=$_FILES['image']['tmp_name'];
			$path="uploads/";
			$_POST['image']=$this->upload_img($imgname,$imgtemp,$path);
		}
		$_POST['status']="active";
		$_POST['entry_by']=$_SESSION['admin_id'];
		$_POST['entry_time']=time();
		$this->My_model->insert("page_imgs_tbl",$_POST);
		// $this->ci_flashdata('Success','Home Image Added Successfully..',"yes");
		redirect('webadmin/pages_img','refresh');
	}
	public function home_img_delete($id){
		$this->My_model->update("page_imgs_tbl",['page_imgs_tbl_id'=>$id],['status'=>'deleted']);
		// $this->ci_flashdata('Success','Deleted Successfully..',"yes");
		redirect('webadmin/pages_img','refresh');
	}
	public function home_img_edit($id){
		$this->head();
		$this->nav();
		$data['photo_gallery_det']=$this->My_model->select_where("page_imgs_tbl",['page_imgs_tbl_id'=>$id]);
		$this->load->view("webadmin/pages_img",$data);
		$this->footer();
	}
	public function home_img_update(){
		if($_FILES['image']['name']!="")
		{
			$imgname=$_FILES['image']['name'];
			$imgtemp=$_FILES['image']['tmp_name'];
			$path="uploads/";
			$_POST['image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['image1'];
			unlink($path1);
		}
		else{
			$_POST['image']=$_POST['image1'];
		}
		unset($_POST['image1']);
		$this->My_model->update("page_imgs_tbl",['page_imgs_tbl_id'=>$_POST['page_imgs_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Home Details Updated Successfully..',"yes");
		redirect('webadmin/pages_img','refresh');
	}

	// Terms And Condition
	public function terms()
	{
		$this->head();
		$this->nav();
		$data['terms_list']=$this->My_model->select_where("terms_tbl",['status'=>'active']);
		$this->load->view("webadmin/terms",$data);
		$this->footer();
	}

	public function save_terms()
	{

		$_POST['added_by'] = 'admin';
	    $_POST['entry_time'] = time();
	    $_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['status'] = 'active';
		$data=$this->My_model->insert("terms_tbl",$_POST);
		if($data)
		{
			redirect('webadmin/terms','refresh');
		}
		else{
			redirect('webadmin/terms','refresh');
		}
	}

	public function edit_terms($id){
		$this->head();
		$this->nav();
		$data['edit_terms']=$this->My_model->select_where("terms_tbl",['terms_tbl_id'=>$id]);
		$this->load->view("webadmin/terms",$data);
		$this->footer();
	}

	public function update_terms()
	{
		$data=$this->My_model->update("terms_tbl",['terms_tbl_id'=>$_POST['terms_tbl_id']],$_POST);
		if($data)
		{
			redirect('webadmin/terms','refresh');
		}
		else{
			redirect('webadmin/terms','refresh');
		}
	}

	public function delete_terms($id)
	{
		$data=$this->My_model->update("terms_tbl",['terms_tbl_id'=>$id],['status'=>'deleted']);
		
		if($data)
		{
			redirect('webadmin/terms','refresh');
		}
		else{
			redirect('webadmin/terms','refresh');
		}
	}      

	// Privacy And Policy
	public function privacy()
	{
		$this->head();
		$this->nav();
		$data['privacy_list']=$this->My_model->select_where("privacy_tbl",['status'=>'active']);
		$this->load->view("webadmin/privacy",$data);
		$this->footer();
	}

	public function save_privacy()
	{

		$_POST['added_by'] = 'admin';
	    $_POST['entry_time'] = time();
	    $_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['status'] = 'active';
		$data=$this->My_model->insert("privacy_tbl",$_POST);
		if($data)
		{
			redirect('webadmin/privacy','refresh');
		}
		else{
			redirect('webadmin/privacy','refresh');
		}
	}

	public function edit_privacy($id){
		$this->head();
		$this->nav();
		$data['edit_privacy']=$this->My_model->select_where("privacy_tbl",['privacy_tbl_id'=>$id]);
		$this->load->view("webadmin/privacy",$data);
		$this->footer();
	}

	public function update_privacy()
	{
		$data=$this->My_model->update("privacy_tbl",['privacy_tbl_id'=>$_POST['privacy_tbl_id']],$_POST);
		if($data)
		{
			redirect('webadmin/privacy','refresh');
		}
		else{
			redirect('webadmin/privacy','refresh');
		}
	}

	public function delete_privacy($id)
	{
		$data=$this->My_model->update("privacy_tbl",['privacy_tbl_id'=>$id],['status'=>'deleted']);
		
		if($data)
		{
			redirect('webadmin/privacy','refresh');
		}
		else{
			redirect('webadmin/privacy','refresh');
		}
	}      
	// Faq's
	public function faq()
	{
		$this->head();
		$this->nav();
		$data['faq_list']=$this->My_model->select_where("faq_tbl",['status'=>'active']);
		$this->load->view("webadmin/faq",$data);
		$this->footer();
	}

	public function save_faq()
	{

		$_POST['added_by'] = 'admin';
	    $_POST['entry_time'] = time();
	    $_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['status'] = 'active';
		$data=$this->My_model->insert("faq_tbl",$_POST);
		if($data)
		{
			redirect('webadmin/faq','refresh');
		}
		else{
			redirect('webadmin/faq','refresh');
		}
	}

	public function edit_faq($id){
		$this->head();
		$this->nav();
		$data['edit_faq']=$this->My_model->select_where("faq_tbl",['faq_tbl_id'=>$id]);
		$this->load->view("webadmin/faq",$data);
		$this->footer();
	}

	public function update_faq()
	{
		$data=$this->My_model->update("faq_tbl",['faq_tbl_id'=>$_POST['faq_tbl_id']],$_POST);
		if($data)
		{
			redirect('webadmin/faq','refresh');
		}
		else{
			redirect('webadmin/faq','refresh');
		}
	}

	public function delete_faq($id)
	{
		$data=$this->My_model->update("faq_tbl",['faq_tbl_id'=>$id],['status'=>'deleted']);
		
		if($data)
		{
			redirect('webadmin/faq','refresh');
		}
		else{
			redirect('webadmin/faq','refresh');
		}
	}


	public function counter()
	{
		$data['counter_list'] = $this->My_model->select_where("counter_tbl",['status'=>'active']);
		$this->head();
		$this->nav();
		$this->load->view("webadmin/counter",$data);
		$this->footer();

		// $data['counter_list']=$this->My_model->select_where("counter_tbl",['status'=>'active']);
	}

	public function save_counter()
	{
		$_POST['added_by'] = 'admin';
	    $_POST['entry_time'] = time();
	    $_POST['entry_by'] = $_SESSION['admin_id'];
		$_POST['status'] = 'active';
		$data=$this->My_model->insert("counter_tbl",$_POST);
		if($data)
		{
			redirect('webadmin/counter','refresh');
		}
		else{
			redirect('webadmin/counter','refresh');
		}
	}

	public function update_counter()
	{
		$data=$this->My_model->update("counter_tbl",['counter_tbl_id'=>$_POST['counter_tbl_id']],$_POST);
		if($data)
		{
			redirect('webadmin/counter','refresh');
		}
		else{
			redirect('webadmin/counter','refresh');
		}
	}

	public function delete_counter($id)
	{
		$data = $this->My_model->update("counter_tbl",['counter_tbl_id'=>$id],['status'=>'deleted']);
		
		if($data)
		{
			redirect('webadmin/counter','refresh');
		}
		else{
			redirect('webadmin/counter','refresh');
		}
	}

	// Products
	public function products(){
		$this->head();
		$this->nav();
		$data['product_company']=$this->My_model->select_where('products_tbl',['status' =>'active']);
		$this->load->view('webadmin/products',$data);
		$this->footer();
	}

	public function add_products(){
		// $products=$this->My_model->select_where('products_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($products[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/products','refresh');
		// }
		// else{
			if($_FILES['products_image']['name']!="")
			{
				$imgname=$_FILES['products_image']['name'];
				$imgtemp=$_FILES['products_image']['tmp_name'];
				$path="uploads/";
				$_POST['products_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("products_tbl",$_POST);
			// $this->ci_flashdata('Success','products Company Details Added Successfully..',"yes");
			redirect('webadmin/products','refresh');	
		// }
	}
	public function edit_products($ab_id)
	{
		$this->head();
		$this->nav();
		$data['products_det']=$this->My_model->select_where("products_tbl",['products_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/products",$data);
		$this->footer();
	}
	public function update_products(){

		if($_FILES['products_image']['name']!="")
		{
			$imgname=$_FILES['products_image']['name'];
			$imgtemp=$_FILES['products_image']['tmp_name'];
			$path="uploads/";
			$_POST['products_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['products_image1'];
			unlink($path1);
		}
		else{
			$_POST['products_image']=$_POST['products_image1'];
		}
		
		unset($_POST['products_image1']);

		$this->My_model->update("products_tbl",['products_tbl_id'=> $_POST['products_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/products','refresh');
	}
	public function delete_product($id){
      	$this->My_model->update("products_tbl",['products_tbl_id'=>$id],['status'=>'deleted']);
      	redirect('webadmin/products','refresh');
	}  

	// Our Raw Products
	public function raw_products(){
		$this->head();
		$this->nav();
		$data['product_company']=$this->My_model->select_where('raw_products_tbl',['status' =>'active']);
		$this->load->view('webadmin/raw_products',$data);
		$this->footer();
	}

	public function add_raw_products(){
		// $raw_products=$this->My_model->select_where('raw_products_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($raw_products[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/raw_products','refresh');
		// }
		// else{
			if($_FILES['raw_products_image']['name']!="")
			{
				$imgname=$_FILES['raw_products_image']['name'];
				$imgtemp=$_FILES['raw_products_image']['tmp_name'];
				$path="uploads/";
				$_POST['raw_products_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("raw_products_tbl",$_POST);
			// $this->ci_flashdata('Success','raw_products Company Details Added Successfully..',"yes");
			redirect('webadmin/raw_products','refresh');	
		// }
	}
	public function edit_raw_products($ab_id)
	{
		$this->head();
		$this->nav();
		$data['raw_products_det']=$this->My_model->select_where("raw_products_tbl",['raw_products_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/raw_products",$data);
		$this->footer();
	}
	public function update_raw_products(){

		if($_FILES['raw_products_image']['name']!="")
		{
			$imgname=$_FILES['raw_products_image']['name'];
			$imgtemp=$_FILES['raw_products_image']['tmp_name'];
			$path="uploads/";
			$_POST['raw_products_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['raw_products_image1'];
			unlink($path1);
		}
		else{
			$_POST['raw_products_image']=$_POST['raw_products_image1'];
		}
		
		unset($_POST['raw_products_image1']);

		$this->My_model->update("raw_products_tbl",['raw_products_tbl_id'=> $_POST['raw_products_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/raw_products','refresh');
	}
	public function delete_raw_product($id){
      	$this->My_model->update("raw_products_tbl",['raw_products_tbl_id'=>$id],['status'=>'deleted']);
      	redirect('webadmin/raw_products','refresh');
	}  

	// Procedure
	public function procedure(){
		$this->head();
		$this->nav();
		$data['procedure_company']=$this->My_model->select_where('procedure_tbl',['status' =>'active']);
		$this->load->view('webadmin/procedure',$data);
		$this->footer();
	}

	public function add_procedure(){
		// $procedure=$this->My_model->select_where('procedure_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($procedure[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/procedure','refresh');
		// }
		// else{
			if($_FILES['procedure_image']['name']!="")
			{
				$imgname=$_FILES['procedure_image']['name'];
				$imgtemp=$_FILES['procedure_image']['tmp_name'];
				$path="uploads/";
				$_POST['procedure_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("procedure_tbl",$_POST);
			// $this->ci_flashdata('Success','procedure Company Details Added Successfully..',"yes");
			redirect('webadmin/procedure','refresh');	
		// }
	}
	public function edit_procedure($id)
	{
		$this->head();
		$this->nav();
		$data['procedure_det']=$this->My_model->select_where("procedure_tbl",['procedure_tbl_id'=>$id]);
		$this->load->view("webadmin/procedure",$data);
		$this->footer();
	}
	public function update_procedure(){

		if($_FILES['procedure_image']['name']!="")
		{
			$imgname=$_FILES['procedure_image']['name'];
			$imgtemp=$_FILES['procedure_image']['tmp_name'];
			$path="uploads/";
			$_POST['procedure_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['procedure_image1'];
			unlink($path1);
		}
		else{
			$_POST['procedure_image']=$_POST['procedure_image1'];
		}
		
		unset($_POST['procedure_image1']);

		$this->My_model->update("procedure_tbl",['procedure_tbl_id'=> $_POST['procedure_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/procedure','refresh');
	}
	public function delete_procedure($id){
      	$this->My_model->update("procedure_tbl",['procedure_tbl_id'=>$id],['status'=>'deleted']);
      	redirect('webadmin/procedure','refresh');
	}


	// WHO WE ARE
	public function weare(){
		$this->head();
		$this->nav();
		$data['weare']=$this->My_model->select_where('weare_tbl',['status' =>'active']);
		$this->load->view('webadmin/weare',$data);
		$this->footer();
	}

	public function add_weare(){
		// $weare=$this->My_model->select_where('weare_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($weare[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/weare','refresh');
		// }
		// else{
			if($_FILES['weare_image']['name']!="")
			{
				$imgname=$_FILES['weare_image']['name'];
				$imgtemp=$_FILES['weare_image']['tmp_name'];
				$path="uploads/";
				$_POST['weare_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			if($_FILES['image_two']['name']!="")
			{
				$imgname=$_FILES['image_two']['name'];
				$imgtemp=$_FILES['image_two']['tmp_name'];
				$path="uploads/";
				$_POST['image_two']=$this->upload_img($imgname,$imgtemp,$path);
			}
			if($_FILES['image_three']['name']!="")
			{
				$imgname=$_FILES['image_three']['name'];
				$imgtemp=$_FILES['image_three']['tmp_name'];
				$path="uploads/";
				$_POST['image_three']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("weare_tbl",$_POST);
			// $this->ci_flashdata('Success','weare Company Details Added Successfully..',"yes");
			redirect('webadmin/weare','refresh');	
		// }
	}
	public function edit_weare($ab_id)
	{
		$this->head();
		$this->nav();
		$data['weare_det']=$this->My_model->select_where("weare_tbl",['weare_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/weare",$data);
		$this->footer();
	}

	public function delete_weare($id)
	{
		$this->My_model->update("weare_tbl",['weare_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/weare','refresh');
		
	}

	public function update_weare(){

		if($_FILES['weare_image']['name']!="")
		{
			$imgname=$_FILES['weare_image']['name'];
			$imgtemp=$_FILES['weare_image']['tmp_name'];
			$path="uploads/";
			$_POST['weare_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['weare_image1'];
			unlink($path1);
		}
		elseif($_FILES['image_two']['name']!="")
		{
			$imgname=$_FILES['image_two']['name'];
			$imgtemp=$_FILES['image_two']['tmp_name'];
			$path="uploads/";
			$_POST['image_two']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['image_two1'];
			unlink($path1);
		}
		elseif($_FILES['image_three']['name']!="")
		{
			$imgname=$_FILES['image_three']['name'];
			$imgtemp=$_FILES['image_three']['tmp_name'];
			$path="uploads/";
			$_POST['image_three']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['image_three1'];
			unlink($path1);
		}
		else{
			$_POST['weare_image']=$_POST['weare_image1'];
			$_POST['image_two']=$_POST['image_two1'];
			$_POST['image_three']=$_POST['image_three1'];
		}
		
		unset($_POST['weare_image1']);
		unset($_POST['image_two1']);
		unset($_POST['image_three1']);
		$this->My_model->update("weare_tbl",['weare_tbl_id'=> $_POST['weare_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/weare','refresh');
	} 

	// Company Introduction
	public function company_intro(){
		$this->head();
		$this->nav();
		$data['company_intro']=$this->My_model->select_where('company_intro_tbl',['status' =>'active']);
		$this->load->view('webadmin/company_intro',$data);
		$this->footer();
	}

	public function add_company_intro(){
		// $company_intro=$this->My_model->select_where('company_intro_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($company_intro[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/company_intro','refresh');
		// }
		// else{
			if($_FILES['company_intro_image']['name']!="")
			{
				$imgname=$_FILES['company_intro_image']['name'];
				$imgtemp=$_FILES['company_intro_image']['tmp_name'];
				$path="uploads/";
				$_POST['company_intro_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("company_intro_tbl",$_POST);
			// $this->ci_flashdata('Success','company_intro Company Details Added Successfully..',"yes");
			redirect('webadmin/company_intro','refresh');	
		// }
	}
	public function edit_company_intro($ab_id)
	{
		$this->head();
		$this->nav();
		$data['company_intro_det']=$this->My_model->select_where("company_intro_tbl",['company_intro_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/company_intro",$data);
		$this->footer();
	}

	public function delete_company_intro($id)
	{
		$this->My_model->update("company_intro_tbl",['company_intro_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/company_intro','refresh');
		
	}

	public function update_company_intro(){
	
		if($_FILES['company_intro_image']['name']!="")
		{
			$imgname=$_FILES['company_intro_image']['name'];
			$imgtemp=$_FILES['company_intro_image']['tmp_name'];
			$path="uploads/";
			$_POST['company_intro_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['company_intro_image1'];
			unlink($path1);
		}
		
		else{
			$_POST['company_intro_image']=$_POST['company_intro_image1'];
		
		}
		
		unset($_POST['company_intro_image1']);
		
		
		$this->My_model->update("company_intro_tbl",['company_intro_tbl_id'=> $_POST['company_intro_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/company_intro','refresh');
	}

	public function partners(){
		$this->head();
		$this->nav();
		$data['partners']=$this->My_model->select_where('partners_tbl',['status' =>'active']);
		$this->load->view('webadmin/partners',$data);
		$this->footer();
	}

	public function add_partners(){
		// $partners=$this->My_model->select_where('partners_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($partners[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/partners','refresh');
		// }
		// else{
			if($_FILES['logo']['name']!="")
			{
				$imgname=$_FILES['logo']['name'];
				$imgtemp=$_FILES['logo']['tmp_name'];
				$path="uploads/";
				$_POST['logo']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("partners_tbl",$_POST);
			// $this->ci_flashdata('Success','partners Company Details Added Successfully..',"yes");
			redirect('webadmin/partners','refresh');	
		// }
	}
	public function edit_partners($ab_id)
	{
		$this->head();
		$this->nav();
		$data['partners_det']=$this->My_model->select_where("partners_tbl",['partners_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/partners",$data);
		$this->footer();
	}

	public function delete_partners($id)
	{
		$this->My_model->update("partners_tbl",['partners_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/partners','refresh');
		
	}

	public function update_partners(){

		if($_FILES['logo']['name']!="")
		{
			$imgname=$_FILES['logo']['name'];
			$imgtemp=$_FILES['logo']['tmp_name'];
			$path="uploads/";
			$_POST['logo']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['logo1'];
			unlink($path1);
		}
		else{
			$_POST['logo']=$_POST['logo1'];
		}
		
		unset($_POST['logo1']);
		$this->My_model->update("partners_tbl",['partners_tbl_id'=> $_POST['partners_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/partners','refresh');
	} 

	public function supplier(){
		$this->head();
		$this->nav();
		$data['supplier']=$this->My_model->select_where('supplier_msg',['status' =>'active']);
		$this->load->view('webadmin/supplier',$data);
		$this->footer();
	}

	public function machine(){
		$this->head();
		$this->nav();
		$data['machine']=$this->My_model->select_where('machine_tbl',['status' =>'active']);
		$this->load->view('webadmin/machine',$data);
		$this->footer();
	}

	public function add_machine(){
		// $machine=$this->My_model->select_where('machine_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($machine[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/machine','refresh');
		// }
		// else{
			if($_FILES['machine_image']['name']!="")
			{
				$imgname=$_FILES['machine_image']['name'];
				$imgtemp=$_FILES['machine_image']['tmp_name'];
				$path="uploads/";
				$_POST['machine_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("machine_tbl",$_POST);
			// $this->ci_flashdata('Success','machine Company Details Added Successfully..',"yes");
			redirect('webadmin/machine','refresh');	
		// }
	}
	public function edit_machine($ab_id)
	{
		$this->head();
		$this->nav();
		$data['machine_det']=$this->My_model->select_where("machine_tbl",['machine_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/machine",$data);
		$this->footer();
	}

	public function delete_machine($id)
	{
		$this->My_model->update("machine_tbl",['machine_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/machine','refresh');
		
	}

	public function update_machine(){
	
		if($_FILES['machine_image']['name']!="")
		{
			$imgname=$_FILES['machine_image']['name'];
			$imgtemp=$_FILES['machine_image']['tmp_name'];
			$path="uploads/";
			$_POST['machine_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['machine_image1'];
			unlink($path1);
		}
		
		else{
			$_POST['machine_image']=$_POST['machine_image1'];
		
		}
		
		unset($_POST['machine_image1']);
		
		
		$this->My_model->update("machine_tbl",['machine_tbl_id'=> $_POST['machine_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/machine','refresh');
	}

	public function founder(){
		$this->head();
		$this->nav();
		$data['founder']=$this->My_model->select_where('founder_tbl',['status' =>'active']);
		$this->load->view('webadmin/founder',$data);
		$this->footer();
	}

	public function add_founder(){
		// $founder=$this->My_model->select_where('founder_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($founder[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/founder','refresh');
		// }
		// else{
			if($_FILES['founder_image']['name']!="")
			{
				$imgname=$_FILES['founder_image']['name'];
				$imgtemp=$_FILES['founder_image']['tmp_name'];
				$path="uploads/";
				$_POST['founder_image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("founder_tbl",$_POST);
			// $this->ci_flashdata('Success','founder Company Details Added Successfully..',"yes");
			redirect('webadmin/founder','refresh');	
		// }
	}
	public function edit_founder($ab_id)
	{
		$this->head();
		$this->nav();
		$data['founder_det']=$this->My_model->select_where("founder_tbl",['founder_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/founder",$data);
		$this->footer();
	}

	public function delete_founder($id)
	{
		$this->My_model->update("founder_tbl",['founder_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/founder','refresh');
		
	}

	public function update_founder(){
	
		if($_FILES['founder_image']['name']!="")
		{
			$imgname=$_FILES['founder_image']['name'];
			$imgtemp=$_FILES['founder_image']['tmp_name'];
			$path="uploads/";
			$_POST['founder_image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['founder_image1'];
			unlink($path1);
		}
		
		else{
			$_POST['founder_image']=$_POST['founder_image1'];
		
		}
		
		unset($_POST['founder_image1']);
		
		
		$this->My_model->update("founder_tbl",['founder_tbl_id'=> $_POST['founder_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/founder','refresh');
	}

	public function client_stories(){
		$this->head();
		$this->nav();
		$data['client_stories']=$this->My_model->select_where('client_stories_tbl',['status' =>'active']);
		$this->load->view('webadmin/client_stories',$data);
		$this->footer();
	}

	public function add_client_stories(){
		// $client_stories=$this->My_model->select_where('client_stories_tbl',array('status'=>'active','title'=>$_POST['title']));
		// if (isset($client_stories[0])) {
		// 	$this->ci_flashdata('Danger','This Offer Allready Exit..',"yes");
		// 	redirect('webadmin/client_stories','refresh');
		// }
		// else{
			if($_FILES['image']['name']!="")
			{
				$imgname=$_FILES['image']['name'];
				$imgtemp=$_FILES['image']['tmp_name'];
				$path="uploads/";
				$_POST['image']=$this->upload_img($imgname,$imgtemp,$path);
			}
			
			
			$_POST['status']="active";
			$_POST['entry_by']=$_SESSION['admin_id'];
			$_POST['entry_time']=time();
			$this->My_model->insert("client_stories_tbl",$_POST);
			// $this->ci_flashdata('Success','client_stories Company Details Added Successfully..',"yes");
			redirect('webadmin/client_stories','refresh');	
		// }
	}
	public function edit_client_stories($ab_id)
	{
		$this->head();
		$this->nav();
		$data['client_stories_det']=$this->My_model->select_where("client_stories_tbl",['client_stories_tbl_id'=>$ab_id]);
		$this->load->view("webadmin/client_stories",$data);
		$this->footer();
	}

	public function delete_client_stories($id)
	{
		$this->My_model->update("client_stories_tbl",['client_stories_tbl_id'=> $id],['status'=>'deleted']);
		redirect('webadmin/client_stories','refresh');
		
	}

	public function update_client_stories(){
	
		if($_FILES['image']['name']!="")
		{
			$imgname=$_FILES['image']['name'];
			$imgtemp=$_FILES['image']['tmp_name'];
			$path="uploads/";
			$_POST['image']=$this->upload_img($imgname,$imgtemp,$path);
			$path1="uploads/".$_POST['image1'];
			unlink($path1);
		}
		
		else{
			$_POST['image']=$_POST['image1'];
		
		}
		
		unset($_POST['image1']);
		
		
		$this->My_model->update("client_stories_tbl",['client_stories_tbl_id'=> $_POST['client_stories_tbl_id']],$_POST);
		// $this->ci_flashdata('Success','Details Updated Successfully..',"yes");
		redirect('webadmin/client_stories','refresh');
	}
	public function date_wise_supplier(){
		  $this->head();
		  $this->nav();
		  $page_no=1;
		  $search="";
		  extract($_GET);
		  $from=strtotime($_GET['from_date']);
		  $to=strtotime($_GET['to_date'].'+1 day');
		  if(!isset($_GET['q']))   
		  {
		    $show=" ";
		  }
		  else
		  {
		    $show=" AND (
		    (name LIKE '%".$_GET['q']."%') 
		    OR (mobile_no LIKE '%".$_GET['q']."%') 
		    OR (email LIKE '%".$_GET['q']."%') 
		  )";
		} 
		
		$total_rows = $this->db->query("SELECT count(supplier_msg_id) as ttl_rows FROM supplier_msg  WHERE status='active'  AND entry_time BETWEEN '".$from."' and '".$to."'  ".$show)->result_array()[0]['ttl_rows'];
		$per_page = 50;
		$data['start']=$per_page*$page_no-$per_page;
		$data['ttl_pages']=$total_rows/$per_page;
		$data['page_no']=$page_no;

		if(isset($_GET['from_date']) || isset($_GET['to_date']))
		{
		  $data['supplier']=$this->db->query("SELECT * FROM supplier_msg WHERE status='active'  AND entry_time BETWEEN '".$from."' and '".$to."' ".$show." ORDER BY supplier_msg_id DESC limit ".$data['start'].",".$per_page)->result_array();
		   $this->load->view("webadmin/supplier", $data);
		        $this->footer();
		}
		}
    
	}
