<?php
class A_kota extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA KOTA';

    $data['kota'] = $this->M_akota->get_data();

    $this->load->view('templates/header');
    $this->load->view('wilayah/kota/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_kota){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['kota'] = $this->M_akota->get_data($id_kota);
      $data['wilayah'] = $this->M_akota->get_wilayah();

      if (empty($data['kota'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Kota';

      $this->load->view('templates/header');
      $this->load->view('wilayah/kota/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_akota->update_kota();
    $this->session->set_flashdata('update_kota', 'Data Kota Berhasil di Edit');
    redirect('a_kota');
    }
    public function delete($id_kota){
      $this->M_akota->delete($id_kota);
      $this->session->set_flashdata('delete_kota', 'Data Kota Berhasil di Hapus');
      redirect('a_kota');
    }
  }
