<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

public function index()
{
    $this->load->view('depan');
}

	function Formtambah()
	{
		$this->load->view('admin/belakang/formtambah');
    }
    function berita()
	{
		$this->load->view('admin/belakang/berita');
    }
    function agenda()
	{
		$this->load->view('admin/belakang/agenda');
	}

}