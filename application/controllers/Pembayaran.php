<?php
class Pembayaran extends CI_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('M_pembayaran');
  }
  public function tampil_data_pembayaran(){
    $this->M_pembayaran->tampil();
  }
  public function tambah_data_pembayaran(){
    $this->M_pembayaran->tambah();
  }
}
