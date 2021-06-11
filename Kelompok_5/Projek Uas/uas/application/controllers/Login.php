<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
		$this->load->model('mpayun');
	}
    public function index()
    {
        if($this->input->post()){
             if($this->mpayun->doLogin()) redirect(site_url('home'));
        }    
        $this->load->view("admin/login");
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}