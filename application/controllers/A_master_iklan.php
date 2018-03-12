<?php
class A_master_iklan extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'MASTER IKLAN';

    $data['m_iklan'] = $this->M_amaster_iklan->get_data();

    $this->load->view('templates/header');
    $this->load->view('iklan/master/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_master_iklan = NULL){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['m_iklan'] = $this->M_amaster_iklan->get_data($id_master_iklan);

    $id_master_iklan = $data['m_iklan']['id_master_iklan'];

    if (empty($data['m_iklan'])) {
      show_404();
    }

    $data['title'] = $data['m_iklan']['nama_lengkap'];

    $this->load->view('templates/header');
    $this->load->view('iklan/master/detail', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_master_iklan){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['m_iklan'] = $this->M_amaster_iklan->get_data($id_master_iklan);
      $data['iklan'] = $this->M_amaster_iklan->get_iklan();
      $data['transaksi'] = $this->M_amaster_iklan->get_transaksi();

      if (empty($data['m_iklan'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Master Iklan';

      $this->load->view('templates/header');
      $this->load->view('iklan/master/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_amaster_iklan->update();
    $this->session->set_flashdata('update_master_iklan', 'Data Berhasil di Edit');
    redirect('a_master_iklan');
    }
    public function delete($id_master_iklan){
      $this->M_amaster_iklan->delete($id_master_iklan);
      $this->session->set_flashdata('delete_master_iklan', 'Data Berhasil di Hapus');
    redirect('a_master_iklan');
  }
}
