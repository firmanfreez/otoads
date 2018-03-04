<?php
class Users extends CI_Controller{
  // public function __construct(){
  //   parent::__construct();
  //   $this->load->model('M_users');
  // }
  public function view_users(){


    $this->load->view('templates/header');
    $this->load->view('users/view_users');
    $this->load->view('templates/footer');
  }
}
