<?php
class Distance extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_distance');
  }
  public function tambah_data_distance(){
    // $perjalanan_hari_ini = $this->input->post('perjalanan_hari_ini');
    // $perjalanan_kemarin = $this->input->post('perjalanan_kemarin');
    // $total_perjalanan = $perjalanan_hari_ini + $perjalanan_kemarin;
	  $this->M_distance->tambah(){
    }
  }
}
