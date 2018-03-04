<?php
class M_speedometer extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil(){
    $data = array(
      'id_speedometer' => $this->input->post('id_speedometer'),
      'id_transaksi' => $this->input->post('id_transaksi'),
      'angka_speedometer' => $this->input->post('angka_speedometer'),
    );

    $this->db->order_by('id_speedometer');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = data_speedometer.id_speedometer');

    $query  = $this->db->get('data_speedometer');
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
  public function tambah(){
    $data = array(
      'id_transaksi' => $this->input->post('id_transaksi'),
      'angka_speedometer' => $this->input->post('angka_speedometer')
    );
    return $this->db->insert('data_speedometer', $data);

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
          ->_display();
          exit;
  }
}
