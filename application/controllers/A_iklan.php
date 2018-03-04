<?php
class A_iklan extends CI_Controller{
  public function index(){
    $data['title'] = 'DATA IKLAN';

    $data['iklan'] = $this->M_aiklan->get_data();

    $this->load->view('templates/header');
    $this->load->view('iklan/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_iklan = NULL){
    $data['iklan'] = $this->M_aiklan->get_data($id_iklan);

    $id_iklan = $data['iklan']['id_iklan'];

    if (empty($data['iklan'])) {
      show_404();
    }

    $data['title'] = $data['iklan']['nama_iklan'];

    $this->load->view('templates/header');
    $this->load->view('iklan/detail', $data);
    $this->load->view('templates/footer');
  }
  public function tambah(){
    $data['title'] = 'Tambah Iklan';

    $data['transaksi'] = $this->M_aiklan->get_transaksi();
    $data['wilayah'] = $this->M_aiklan->get_wilayah();

    $this->load->view('templates/header');
    $this->load->view('iklan/tambah', $data);
    $this->load->view('templates/footer');
  }
}
