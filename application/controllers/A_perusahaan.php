<?php
class A_perusahaan extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA PENGIKLAN';

    $data['pengiklan'] = $this->M_aperusahaan->get_data();

    $this->load->view('templates/header');
    $this->load->view('perusahaan/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_perusahaan = NULL){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['perusahaan'] = $this->M_aperusahaan->get_data($id_perusahaan);
    $data['iklan'] = $this->M_aperusahaan->get_data_iklan($id_perusahaan);

    $id_pengiklan = $data['perusahaan']['id_perusahaan'];

    if (empty($data['perusahaan'])) {
      show_404();
    }

    $data['title'] = $data['perusahaan']['pic'];

    $this->load->view('templates/header');
    $this->load->view('perusahaan/detail', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_perusahaan){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['perusahaan'] = $this->M_aperusahaan->get_data($id_perusahaan);

      if (empty($data['perusahaan'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Perusahaan';

      $this->load->view('templates/header');
      $this->load->view('perusahaan/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_aperusahaan->update_perusahaan();
    $this->session->set_flashdata('update_perusahaan', 'Data Perusahaan Berhasil di Edit');
    redirect('a_perusahaan');
    }
    public function delete($id_perusahaan){
      $this->M_aperusahaan->delete($id_perusahaan);
      $this->session->set_flashdata('delete_perusahaan', 'Data Perusahaan Berhasil di Hapus');
    redirect('a_perusahaan');
  }
}
