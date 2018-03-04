<?php
class Info_mobil extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_info_mobil');
    $this->imagepath = realpath(APPPATH.'assets/images/informasi_mobil/');
    $this->load->library('image_lib');
  }
  public function tampil_data_info_mobil(){
    $this->M_info_mobil->tampil_data();
  }
  public function tambah_info_mobil(){
    $this->M_info_mobil->tambah_info_mobil();
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

		$data_user['id_info_mobil'] = $this->input->post('id_info_mobil');
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
