<?php
class M_pribadi extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil(){
    $data = array(
      'id_info_pribadi' => $this->input->post('id_info_pribadi'),
      'reflect_code' => $this->input->post('reflect_code'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'status' => $this->input->post('status'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password'),
      'nomor_telepon' => $this->input->post('nomor_telepon'),
      'pekerjaan' => $this->input->post('pekerjaan')
    );
    $query  = $this->db->get('informasi_pribadi');
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
  public function tambah_pribadi($password){
    $data = array(
        'reflect_code' => $this->input->post('reflect_code'),
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'status' => $this->input->post('status'),
        'email' => $this->input->post('email'),
        'password' => $password,
        'nomor_telepon' => $this->input->post('nomor_telepon'),
        'pekerjaan' => $this->input->post('pekerjaan')
      );
      $data2 = array(
          'email' => $this->input->post('email'),
          'password' => $password,
        );

      return $this->db->insert('data_transaksi', $data);
      return $this->db->insert('login', $data);

      $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
            ->_display();
            exit;
      }
    public function tambah_login($password){
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $password,
          );
        return $this->db->insert('login', $data);

        $this->output
              ->set_status_header(200)
              ->set_content_type('application/json', 'utf-8')
              ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
              ->_display();
              exit;
        }
    public function edit(){
        $data = array(
          'reflect_code' => $this->input->post('reflect_code'),
          'nama_lengkap' => $this->input->post('nama_lengkap'),
          'jenis_kelamin' => $this->input->post('jenis_kelamin'),
          'status' => $this->input->post('status'),
          'nomor_telepon' => $this->input->post('nomor_telepon'),
          'pekerjaan' => $this->input->post('pekerjaan')
      );
    $this->db->where('id_info_pribadi', $this->input->post('id_info_pribadi'));
    return $this->db->update('posts', $data);
    }
}
