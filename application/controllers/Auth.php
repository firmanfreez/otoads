<?php
class Auth extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_auth');
  }
  public function login(){

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$response = $this->M_auth->login($username, $password);

		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
        ->_display();
        exit;
	}
  public function tampil_data_login(){
    $this->M_auth->tampil_data();
  }
}
