<?php
class M_users extends CI_Model{

  public function __construct(){
    $this->load->database();
  }
  public function login($email, $password){
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get('login');
    if ($result->num_rows() == 1) {
      return $result->row(0)->id_login;
    }else {
      return false;
    }
  }
}
