<?php
class A_warna extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA WARNA';

    $data['warna'] = $this->M_awarna->get_data();

    $this->load->view('templates/header');
    $this->load->view('mobil/warna/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_warna){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['warna'] = $this->M_awarna->get_data($id_warna);

      if (empty($data['warna'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Warna Kendaraan';

      $this->load->view('templates/header');
      $this->load->view('mobil/warna/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_awarna->update_warna();
    $this->session->set_flashdata('update_warna', 'Data Warna Kendaraan Berhasil di Edit');
    redirect('a_warna');
    }
}
