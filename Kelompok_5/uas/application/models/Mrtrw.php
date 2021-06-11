<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Mrtrw extends CI_Model{ 
 
 public $table = 'rtrw';
 public $id = 'id_jabatan'; 
 
 function __construct()
 {
 parent::__construct();
 }
 
 // melakukan insert data mahasiswa
 function insert($data)
 {
 $this->db->insert($this->table, $data);
 }
 
 // menampilkan data mahasiswa
 function tampil_data(){
 return $this->db->get('rtrw');
 }
 
 // menampilkan data mahasiswa yang akan di update
 function edit_data($where,$table){ 
 return $this->db->get_where($table,$where);
 }
 
 // melakukan update data mahasiswa
 function update_data($where,$data,$table){
 $this->db->where($where);
 $this->db->update($table,$data);
 }
 
 // melakukan delete data mahasiswa
 function delete_data($where,$table){
 $this->db->where($where);
 $this->db->delete($table);
 }
 }
 
?>