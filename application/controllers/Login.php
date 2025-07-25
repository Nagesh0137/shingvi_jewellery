<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_model');
        // error_reporting(0);
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('helper');
        // $this->load->helper('mail');
        $this->load->library('form_validation');
        $this->load->library('session');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        date_default_timezone_set('Asia/Kolkata');
    }
    public function index()
    {

        if (isset($_SESSION['admin_id'])) {
            redirect(base_url() . "admin", 'refresh');
        } elseif (isset($_SESSION['business_admin_id'])) {
            redirect(base_url() . "business", 'refresh');
        } else {
            $data['company_det'] = $this->My_model->select_where("company_details_tbl", ['company_det_id' => '1'])[0];
            // $data['project'] = $this->My_model->select("project_details")[0];
            $this->load->view("login", $data);
        }
    }
    public function login_process()
    {
        if (isset($_SESSION['admin_id'])) {
            redirect(base_url() . "admin", 'refresh');
        } else {
            if (!isset($_POST['admin_email'])) {
                $this->load->view('login');
            } else {
                $_POST['status'] = 'active';
                $data = $this->My_model->select_where_login("admin_tbl", $_POST);
                // $data1=$this->db->query("SELECT * FROM business_admin_tbl WHERE email='".$_POST['admin_email']."' AND password='".$_POST['admin_password']."'")->result_array();
                if (isset($data[0])) {

                    $_SESSION['admin_position'] = 'master_admin';

                    $_SESSION['admin_id'] = $data[0]['admin_tbl_id'];
                    $_SESSION['admin_name'] = $data[0]['admin_name'];
                    $_SESSION['admin_position_id'] = $data[0]['admin_position'];
                    $this->insert_system_log("LogIn", $data[0]['admin_name'] . " LogIn Success");
                    $this->ci_flashdata('Success', 'LogIn Success');
                    redirect(base_url() . "admin", 'refresh');
                }
                // elseif (isset($data1[0])) {

                //  $_SESSION['business_admin_id']=$data1[0]['business_admin_tbl_id'];
                //         $_SESSION['name']=$data1[0]['name'];
                //         $this->insert_system_log("LogIn",$data1[0]['name']." LogIn Success");
                //         $this->ci_flashdata('Success', 'LogIn Success');
                //         redirect(base_url()."business",'refresh');
                // }
                else {
                    $this->insert_system_log("LogIn", "LogIn Failed");
                    $this->session->set_flashdata('Danger', 'E-Mail Or Password Incorrect');
                    echo "<script>history.back();</script>";
                }
            }
        }
    }
    public function insert_system_log($title, $slog_desc)
    {
        $data['slog_title'] = urldecode($title);
        $data['slog_desc'] = urldecode($slog_desc);
        if (isset($_SESSION['admin_id']))
            $data['slog_admin_id'] = (isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] : 'no-admin');
        // elseif(isset($_SESSION['business_admin_id']))
        //     $data['slog_business_admin_id']=(isset($_SESSION['business_admin_id']) ? $_SESSION['business_admin_id']:'no-admin');
        else
            $data['slog_admin_id'] = 'no-admin';

        $data['slog_date'] = date("Y-m-d");
        $data['slog_time'] = time();
        $this->My_model->insert("system_log", $data);
    }
    public function ci_flashdata($type, $msg, $set = "yes")
    {
        if (isset($_SESSION['admin_id'])) {

            $this->My_model->insert("system_notification", ['admin_id' => nil($_SESSION['admin_id']), 'type' => $type, 'msg' => $msg, 'sn_time' => time()]);
            // }else{
            //     $this->My_model->insert("system_notification",['business_admin_id'=>nil($_SESSION['business_admin_id']),'type'=>$type,'msg'=>$msg,'sn_time'=>time()]); 
        }
        if ($set == "yes")
            $this->session->set_flashdata($type, $msg);
    }
    public function logout()
    {
        session_destroy();
        redirect(base_url() . 'login', 'refresh');
    }
}
