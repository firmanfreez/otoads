<?php
class Iklan extends CI_Controller{
  public $id_transaksi;

  public function __construct(){
    parent::__construct();
    $this->load->model('M_iklan');
  }
  public function listing_iklan(){

    $id = $this->$id_transaksi;

    $this->M_iklan->listing_iklan($id);
  }
  public function tampil_data_iklan(){
    $this->M_iklan->tampil_iklan();
  }
}
