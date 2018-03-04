<?php
class Wilayah extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_wilayah');
  }
  public function tampil_data_kota(){
    $this->M_wilayah->tampil_data_kota();
  }
  public function tambah_data_kota(){
    $this->M_wilayah->tambah_data_kota();
  }
}
