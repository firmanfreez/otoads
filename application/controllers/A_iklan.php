<?php
class A_iklan extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA IKLAN';

    $data['iklan'] = $this->M_aiklan->get_data();

    $this->load->view('templates/header');
    $this->load->view('iklan/data/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_iklan = NULL){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['iklan'] = $this->M_aiklan->get_data($id_iklan);
    $data['m_iklan'] = $this->M_aiklan->get_data_master($id_iklan);
    $data['iklan_k'] = $this->M_aiklan->get_data_kendaraan($id_iklan);

    $id_pengiklan = $data['iklan']['id_iklan'];

    if (empty($data['iklan'])) {
      show_404();
    }

    $data['title'] = $data['iklan']['nama_iklan'];

    $this->load->view('templates/header');
    $this->load->view('iklan/data/detail', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_iklan){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['iklan'] = $this->M_aiklan->get_data($id_iklan);
    $data['wilayah'] = $this->M_aiklan->get_wilayah();

      if (empty($data['iklan'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Iklan';

      $this->load->view('templates/header');
      $this->load->view('iklan/data/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $config['upload_path'] = './assets/images/data_check';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2048';
    $config['max_width'] = '2000';
    $config['max_height'] = '2000';
    $this->load->library('upload', $config);

    $this->upload->do_upload('iklan_gambar');
    $data = array('upload_data' => $this->upload->data());
    $gambar_iklan = $_FILES['iklan_gambar']['name'];

    $this->M_aiklan->update_Iklan($gambar_iklan);
    $this->session->set_flashdata('update_Iklan', 'Data Iklan Berhasil di Edit');
    redirect('a_iklan');
    }
    public function delete($id_iklan){
      $this->M_aiklan->delete($id_iklan);
      $this->session->set_flashdata('delete_iklan', 'Data Iklan Berhasil di Hapus');
    redirect('a_iklan');
  }
  public function delete_kendaraan($id_iklan_kendaraan){
    $this->M_aiklan->delete_kendaraan($id_iklan_kendaraan);
    $this->session->set_flashdata('delete_kendaraan', 'Data Kendaraan di Iklan Berhasil di Hapus');
  redirect('a_iklan');
}
}
