<?php
class Pribadi extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_pribadi');
  }
  public function tampil_data_pribadi(){
    $this->M_pribadi->tampil();
  }
  public function tambah_pribadi(){
    $password = md5($this->input->post('password'));
    $this->M_pribadi->tambah_pribadi($password);
  }
  public function tambah_login(){
    $password = md5($this->input->post('password'));
    $this->M_pribadi->tambah_login($password);
  }
  public function edit_pribadi(){
    $this->M_pribadi->edit();
  }
}
