<?php
class A_tahun extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA TAHUN';

    $data['tahun'] = $this->M_atahun->get_data();

    $this->load->view('templates/header');
    $this->load->view('mobil/tahun/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_tahun){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['tahun'] = $this->M_atahun->get_data($id_tahun);

      if (empty($data['tahun'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Tahun Kendaraan';

      $this->load->view('templates/header');
      $this->load->view('mobil/tahun/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_atahun->update_tahun();
    $this->session->set_flashdata('update_tahun', 'Data Tahun Kendaraan Berhasil di Edit');
    redirect('a_tahun');
    }
}
