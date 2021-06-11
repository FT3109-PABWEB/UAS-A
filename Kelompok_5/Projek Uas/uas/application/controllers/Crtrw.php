<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crtrw extends CI_Controller {  
  
  function __construct(){
        parent::__construct();
 // memanggil MahasiswaModel.php
        $this->load->model('Mrtrw');        
 $this->load->helper('url');
  }
  
  function index(){ 
 $data['rtrw'] = $this->Mrtrw->tampil_data()->result();
 
 // menampilkan FormMahasiswaView.php 
        $this->load->view('v_rtrw', $data); 

  }
  
  function form_input(){
   
 // menampilkan FormMahasiswaView.php 

        $this->load->view('admin/belakang/formtambah'); 

  }
  
  public function insert(){
    	  
    $data = array(
 'id_jabatan' => $this->input->post('id_jabatan'),
 'nama'   => $this->input->post('nama'),
 'ttl' => $this->input->post('ttl'),
 'pendidikan'         => $this->input->post('pendidikan'),

 );
 // melakukan insert data mahasiswa 
 $this->Mrtrw->insert($data);
 
    redirect(base_url() . "Crtrw" ,'refresh');
  }
  
  function form_update($id){ 
 
 $where = array('id_jabatan' => $id);
 $data['rtrw'] = $this->Mrtrw->edit_data($where,'id_jabatan')->result();
 
 // menampilkan FormMahasiswaView.php 
    $this->load->view('admin/belakang/formedit', $data); 

  }
     
  public function update(){
       
    $data = array(
        'id_jabatan'            => $this->input->post('id_jabatan'),
        'nama'   => $this->input->post('nama'),
        'ttl' => $this->input->post('ttl'),
        'pendidikan'         => $this->input->post('pendidikan'),
 );
 
 $where = array('id_jabatan' => $this->input->post('id_jabatan'));
    // melakukan update data mahasiswa berdasarkan nim       
 $this->Mrtrw->update_data($where,$data,'rtrrw');
          
    redirect(base_url() . "Crtrw" ,'refresh');
        
  }
  
  function delete($id){
 
 $where = array('id_jabatan' => $id);
 // melakukan delete data mahasiswa berdasarkan nim
 $this->Mrtrw->delete_data($where,'rtrw');
 
 redirect(base_url() . "Crtrw" ,'refresh');
  }
  
}
 
?>