<?php
class M_auth extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function login($email, $password){
    $this->db->select('*');
  		$this->db->from('informasi_pribadi');
  		$this->db->where('email', $username);
  		$response = array("result" => "false", "message" => "Username atau password salah");
  		foreach($this->db->get()->result_array() as $row){
  			if ($password == $row['password']){
  				$data['id_login'] = $row['id_login'];

  				$response['result'] = "true";
  				$response['message'] = "Login berhasil";

  				$this->db->insert('login', $data);
  			}
  		}
  		return $response;
    }
    public function tampil_data(){
      $data = array(
        'id_login' => $this->input->post('id_login'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
      );
      $query  = $this->db->get('login');
      $response = array(
          'data' => $query->result_array()
          );

      $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
          ->_display();
          exit;
    }
  }
