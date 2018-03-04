<?php
class A_wilayah extends CI_Controller{
  public function index(){
    $data['title'] = 'DATA WILAYAH';

    $data['kota'] = $this->M_awilayah->get_data();

    $this->load->view('templates/header');
    $this->load->view('wilayah/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_kota){

      $data['kota'] = $this->M_awilayah->get_data($id_kota);
      $data['wilayah'] = $this->M_awilayah->get_wilayah();

      if (empty($data['kota'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Mobil';

      $this->load->view('templates/header');
      $this->load->view('wilayah/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_awilayah->update_kota();
    redirect('a_wilayah');
    }
    public function delete($id_kota){
      $this->M_awilayah->delete($id_kota);
      redirect('a_wilayah');
    }
  }
