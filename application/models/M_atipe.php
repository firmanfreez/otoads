<?php
class M_atipe extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_tipe = FALSE){
    $data = array(
      'id_tipe' => $this->input->post('id_tipe'),
      'tipe' => $this->input->post('tipe')
    );

    if ($id_tipe === FALSE) {
      $query  = $this->db->get('kendaraan_data_tipe');
      return $query->result_array();
      }
      $query = $this->db->get_where('kendaraan_data_tipe', array('id_tipe' => $id_tipe));
      return $query->row_array();
  }
  public function update_tipe(){
    $data = array(
      'tipe' => $this->input->post('tipe')
    );
    $this->db->where('id_tipe', $this->input->post('id_tipe'));
    return $this->db->update('kendaraan_data_tipe', $data);
  }
}
