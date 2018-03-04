<?php
class A_transaksi extends CI_Controller{
  public function index(){
    $data['title'] = 'DATA TRANSAKSI';

    $data['transaksi'] = $this->M_atransaksi->get_data();

    $this->load->view('templates/header');
    $this->load->view('transaksi/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_transaksi = NULL){
    $data['transaksi'] = $this->M_atransaksi->get_data($id_transaksi);

    $id_transaksi = $data['transaksi']['id_transaksi'];

    if (empty($data['transaksi'])) {
      show_404();
    }

    $data['title'] = $data['transaksi']['nama_lengkap'];

    $this->load->view('templates/header');
    $this->load->view('transaksi/detail', $data);
    $this->load->view('templates/footer');
  }
  // public function tambah(){
  //   $data['title'] = 'Tambah Transaksi';
  //
  //   $data['kendaraan'] = $this->M_atransaksi->get_kendaraan();
  //   $data['wilayah'] = $this->M_atransaksi->get_wilayah();
  //
  //   //
  //   // $this->form_validation->set_rules('reflect_code', 'Reflect_code', 'required');
  //   // $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required');
  //   // $this->form_validation->set_rules('email', 'Email', 'required');
  //   // $this->form_validation->set_rules('password', 'Password', 'required');
  //   // $this->form_validation->set_rules('nomor_telepon', 'Nomor_telepon', 'required');
  //   // $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
  //   // $this->form_validation->set_rules('nama_pemilik_kendaraan', 'Nama_pemilik_kendaraan', 'required');
  //   // $this->form_validation->set_rules('nomor_polisi_kendaraan', 'Nomor_polisi_kendaraan', 'required');
  //   // if ($this->form_validation->run() === FALSE) {
  //   // }
  //   $password = md5($this->input->post('password'));
  //   $this->M_atransaksi->create($password);
  //
  //   $this->load->view('templates/header');
  //   $this->load->view('transaksi/tambah', $data);
  //   $this->load->view('templates/footer');
  // }
  public function edit($id_transaksi){
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
       $config['upload_path'] = './assets/images/data_transaksi';
       $config['allowed_types'] = 'gif|jpg|png';
       $config['max_size'] = '2048';
       $config['max_width'] = '2000';
       $config['max_height'] = '2000';
       $this->load->library('upload', $config);

       if (!$this->upload->do_upload()) {
         $erros = array('error' => $this->upload->display_errors());
       }else {
         $data = array('upload_data' => $this->upload->data());
         $stnk = $_FILES['stnk_gambar']['name'];
         $sim = $_FILES['sim_gambar']['name'];
         $ktp = $_FILES['ktp_gambar']['name'];
       }
      $data = array($stnk, $sim, $ktp);
      $this->Students_m->db_update($data,$id);
      $this->post_model->update_transaksi();
    }
    // public function get_kota(){
    //   $id = $this->input->post('id');
    //   $data['kota'] = $this->M_atransaksi->get_kota($id);
    // }
}
