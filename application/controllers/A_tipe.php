<?php
class A_tipe extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA KENDARAAN';

    $data['tipe'] = $this->M_atipe->get_data();

    $this->load->view('templates/header');
    $this->load->view('mobil/tipe/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_tipe){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['tipe'] = $this->M_atipe->get_data($id_tipe);

      if (empty($data['tipe'])) {
        show_404();
      }
      $data['title'] = 'Edit Data tipe Kendaraan';

      $this->load->view('templates/header');
      $this->load->view('mobil/tipe/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_atipe->update_tipe();
    $this->session->set_flashdata('update_tipe', 'Data Tipe Kendaraan Berhasil di Edit');
    redirect('a_tipe');
    }
}
