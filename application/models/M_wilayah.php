<?php
class M_wilayah extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil_data_kota(){
    $data = array(
      'id_kota' => $this->input->post('id_kota'),
      'id_wilayah' => $this->input->post('id_wilayah'),
      'nama_kota' => $this->input->post('nama_kota')
    );

    $this->db->order_by('id_kota');
    $this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');
    $query  = $this->db->get('wilayah_data_master');

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
  public function tambah_data_kota(){
    $data = array(
      'id_wilayah' => $this->input->post('id_wilayah'),
      'nama_kota' => $this->input->post('nama_kota')
      );
    return $this->db->insert('wilayah_data_master', $data);

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
          ->_display();
          exit;
    }
}
