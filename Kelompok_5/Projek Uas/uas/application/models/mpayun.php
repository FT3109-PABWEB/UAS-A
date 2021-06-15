<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mpayun extends CI_Model {

    public function doLogin()
    {
		$post = $this->input->post();
        $pass = md5($this->input->post("password"));
        $this->db->where('username', $post["username"]);
        $user = $this->db->get('tbl_user')->row();

        if($user){
            $isPasswordTrue = $user->password == $pass;
            $isAdmin = $user->role == "admin";
            if($isPasswordTrue && $isAdmin){ 
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }
                echo '<script language="javascript">
                    window.alert("LOGIN GAGAL! Silakan coba lagi");
                    window.location.href="./";
                  </script>';
		return false;
    }
    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }
}
