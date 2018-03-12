<?php
class A_distance extends CI_Controller{

  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA DISTANCE';

    $data['distance'] = $this->M_adistance->get_data();

    $this->load->view('templates/header');
    $this->load->view('distance/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_distance = NULL){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['distance'] = $this->M_adistance->get_data($id_distance);

    $id_distance = $data['distance']['id_distance'];

    if (empty($data['distance'])) {
      show_404();
    }

    $data['title'] = $data['distance']['nama_lengkap'];

    $this->load->view('templates/header');
    $this->load->view('distance/detail', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_distance){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

      $data['distance'] = $this->M_adistance->get_data($id_distance);
      $data['transaksi'] = $this->M_adistance->get_transaksi();
      if (empty($data['distance'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Distance';

      $this->load->view('templates/header');
      $this->load->view('distance/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $a = $this->input->post('perjalanan_hari_ini');
    $b = $this->input->post('perjalanan_kemarin');
    $total_perjalanan = $a + $b;

    $this->M_adistance->update_distance($total_perjalanan);
    $this->session->set_flashdata('update_distance', 'Data Distance Berhasil di Edit');
    redirect('a_distance');
    }
    public function delete($id_distance){
      $this->M_adistance->delete($id_distance);
      $this->session->set_flashdata('delete_distance', 'Data Distance Berhasil di Hapus');
    redirect('a_distance');
    }
}
