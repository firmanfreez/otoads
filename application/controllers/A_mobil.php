<?php
class A_mobil extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA KENDARAAN';

    $data['mobil'] = $this->M_amobil->get_data();

    $this->load->view('templates/header');
    $this->load->view('mobil/kendaraan/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_merk){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['mobil'] = $this->M_amobil->get_data($id_merk);
      $data['tipe'] = $this->M_amobil->get_tipe();
      $data['tahun'] = $this->M_amobil->get_tahun();
      $data['warna'] = $this->M_amobil->get_warna();

      if (empty($data['mobil'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Mobil';

      $this->load->view('templates/header');
      $this->load->view('mobil/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_amobil->update_mobil();
    $this->session->set_flashdata('update_mobil', 'Data Kendaraan Berhasil di Edit');
    redirect('a_mobil');
    }
    public function delete($id_merk){
      $this->M_amobil->delete($id_merk);
      $this->session->set_flashdata('delete_mobil', 'Data Kendaraan Berhasil di Hapus');
      redirect('a_mobil');
    }
}
