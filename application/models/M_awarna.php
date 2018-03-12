<?php
class M_awarna extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_warna = FALSE){
    $data = array(
      'id_warna' => $this->input->post('id_warna'),
      'warna' => $this->input->post('warna')
    );

    if ($id_warna === FALSE) {
      $query  = $this->db->get('kendaraan_data_warna');
      return $query->result_array();
      }
      $query = $this->db->get_where('kendaraan_data_warna', array('id_warna' => $id_warna));
      return $query->row_array();
  }
  public function update_warna(){
    $data = array(
      'warna' => $this->input->post('warna')
    );
    $this->db->where('id_warna', $this->input->post('id_warna'));
    return $this->db->update('kendaraan_data_warna', $data);
  }
}
