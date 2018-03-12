<?php
class A_wilayah extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA WILAYAH';

    $data['wilayah'] = $this->M_awilayah->get_data();

    $this->load->view('templates/header');
    $this->load->view('wilayah/wilayah/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_wilayah){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['wilayah'] = $this->M_awilayah->get_data($id_wilayah);


      if (empty($data['wilayah'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Wilayah';

      $this->load->view('templates/header');
      $this->load->view('wilayah/wilayah/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_awilayah->update_wilayah();
    $this->session->set_flashdata('update_wilayah', 'Data Wilayah Berhasil di Edit');
    redirect('a_wilayah');
    }
  }
