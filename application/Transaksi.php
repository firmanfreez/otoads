<?php
class Transaksi extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_transaksi');
    $this->imagepath = realpath(APPPATH.'assets/images/informasi_mobil/');
    $this->load->library('image_lib');
  }
  public function tampil_data_transaksi(){
    $this->M_transaksi->tampil();
  }
  public function tambah_data_transaksi(){
    $password = md5($this->input->post('password'));
    $this->M_transaksi->tambah_data($password);
  }
  public function edit_keterangan(){
    $this->M_transaksi->edit_keterangan();
  }
  public function edit_informasi_wilayah(){
    $this->M_transaksi->edit_informasi_wilayah();
  }
  function gambar_info_mobil(){

		$config['upload_path'] = $this->imagepath;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '200000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$data = $this->upload->data();

		$data_user['id_transaksi'] = $this->input->post('id_transaksi');
		$data_user['stnk_gambar'] = $data['file_name'];
    $data_user['sim_gambar'] = $data['file_name'];
    $data_user['ktp_gambar'] = $data['file_name'];

		$response = $this->M_info_mobil->gambar($data_user);

		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
        ->_display();
        exit;
    }
}
