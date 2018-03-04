<?php
class Check_in extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_check');
  }
  public function tampil_data_check_in(){
    $this->M_check->tampil_data_check();
  }
  public function tambah_check_in(){
    $this->M_wilayah->tambah_check_in();
  }
  function gambar_check_in(){

		$config['upload_path'] = $this->imagepath;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '200000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$data = $this->upload->data();

		$data_user['id_check_in'] = $this->input->post('id_check_in');
		$data_user['f_samping_kiri'] = $data['f_samping_kiri'];
    $data_user['f_samping_kanan'] = $data['f_samping_kanan'];
    $data_user['f_speedometer'] = $data['f_speedometer'];
    $data_user['f_belakang'] = $data['f_belakang'];

		$response = $this->M_check->gambar($data_user);

		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
        ->_display();
        exit;
    }
}
