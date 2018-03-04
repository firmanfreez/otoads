<?php
class M_distance extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tambah(){
    $data(
      'id_distance' => $this->input->post('id_distance'),
      'id_transaksi' => $this->input->post('id_transaksi'),
      'perjalanan_hari_ini' => $this->input->post('perjalanan_hari_ini'),
      'perjalanan_kemarin' => $this->input->post('perjalanan_kemarin'),
      '$total_perjalanan' => $this->input->post('$total_perjalanan')
      )
      return $this->db->insert('data_distance', $data);

      $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
            ->_display();
            exit;
  }
}
