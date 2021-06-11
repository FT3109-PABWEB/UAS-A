<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payun extends CI_Controller {



	public function index()
	{
		$this->load->view('content');

	}
	public function visimisi()
	{	
		$this->load->view('profildesa/visimisi');
	}  
	public function lokasidesa()
	{	
		$this->load->view('profildesa/lokasidesa');
	} 
	public function agendadesa()
	{	
		$this->load->view('informasidesa/agendadesa');
	}
	public function beritadesa()
	{	
		$this->load->view('informasidesa/beritadesa');
	}  
	public function karangtaruna()
	{	
		$this->load->view('informasidesa/lembaga/karangtaruna');
	}
	public function aperaturdesa()
	{	
		$this->load->view('informasidesa/lembaga/aperaturdesa');
	}
	public function administrasi()
	{	
		$this->load->view('pelayanan/administrasi');
	}
	public function rtrw()
	{	
		$this->load->view('pelayanan/v_rtrw');
	}
	public function pelatihan()
	{	
		$this->load->view('pelayanan/pelatihan');
	}
	public function login()
	{	
		$this->load->view('admin/login');
	}


	
}