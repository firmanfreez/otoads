<?php
class A_mobil extends CI_Controller{
  public function index(){
    $data['title'] = 'DATA MOBIL';

    $data['mobil'] = $this->M_amobil->get_data();

    $this->load->view('templates/header');
    $this->load->view('mobil/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_merk){

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
    redirect('a_mobil');
    }
    public function delete($id_merk){
      $this->M_amobil->delete($id_merk);
      redirect('a_mobil');
    }
}
