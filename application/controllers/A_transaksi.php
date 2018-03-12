<?php
class A_transaksi extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA DRIVER';

    $data['transaksi'] = $this->M_atransaksi->get_data();

    $this->load->view('templates/header');
    $this->load->view('transaksi/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_transaksi = NULL){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['transaksi'] = $this->M_atransaksi->get_data($id_transaksi);
    $data['distance'] = $this->M_atransaksi->get_data_distance($id_transaksi);
    $data['check'] = $this->M_atransaksi->get_data_check($id_transaksi);
    $data['pesan'] = $this->M_atransaksi->get_data_pesan($id_transaksi);

    $id_transaksi = $data['transaksi']['id_transaksi'];

    if (empty($data['transaksi'])) {
      show_404();
    }

    $data['title'] = $data['transaksi']['nama_lengkap'];

    $this->load->view('templates/header');
    $this->load->view('transaksi/detail', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_transaksi){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
      $data['transaksi'] = $this->M_atransaksi->get_data($id_transaksi);

      $data['kota'] = $this->M_atransaksi->get_kota();
      $data['kendaraan'] = $this->M_atransaksi->get_kendaraan();

      if (empty($data['transaksi'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Transaksi';

      $this->load->view('templates/header');
      $this->load->view('transaksi/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
      $config['upload_path'] = './assets/images/data_check';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '2048';
      $config['max_width'] = '2000';
      $config['max_height'] = '2000';
      $this->load->library('upload', $config);

      $this->upload->do_upload('stnk_gambar');
      $data = array('upload_data' => $this->upload->data());
      $stnk = $_FILES['stnk_gambar']['name'];

      $this->upload->do_upload('sim_gambar');
      $data = array('upload_data' => $this->upload->data());
      $sim = $_FILES['sim_gambar']['name'];

      $this->upload->do_upload('ktp_gambar');
      $data = array('upload_data' => $this->upload->data());
      $ktp = $_FILES['ktp_gambar']['name'];

      $this->M_acheck->update_transaksi($stnk, $sim, $ktp);
      $this->session->set_flashdata('update_transaksi', 'Data Driver Berhasil di Edit');
      redirect('a_transaksi');
    }
    public function delete($id_transaksi){
      $this->M_atransaksi->delete($id_transaksi);
      $this->session->set_flashdata('delete_transaksi', 'Data Driver Berhasil di Hapus');
      redirect('a_transaksi');
  }
    public function delete_pesan($id_pesan){
      $this->M_atransaksi->delete_pesan($id_pesan);
      $this->session->set_flashdata('delete_pesan', 'Data Pesan Driver Berhasil di Hapus');
    redirect('a_transaksi');
  }
}
