<?php
class Speedometer extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_speedometer');
  }
  public function tampil_data_speedometer(){
    $this->M_speedometer->tampil();
  }
  public function tambah_data_speedometer(){
    $this->M_speedometer->tambah();
  }
}
