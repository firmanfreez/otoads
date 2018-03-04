<?php
class Mobil extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_mobil');
  }
  public function tampil_data_master_kendaraan(){
    $this->M_mobil->tampil_data();
  }
  public function tambah_data_master_kendaraan(){
    $this->M_mobil->tambah_data_master_kendaraan();
  }
}
