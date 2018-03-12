<?php
class M_atahun extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_tahun = FALSE){
    $data = array(
      'id_tahun' => $this->input->post('id_tahun'),
      'tahun' => $this->input->post('tahun')
    );

    if ($id_tahun === FALSE) {
      $query  = $this->db->get('kendaraan_data_tahun');
      return $query->result_array();
      }
      $query = $this->db->get_where('kendaraan_data_tahun', array('id_tahun' => $id_tahun));
      return $query->row_array();
  }
  public function update_tahun(){
    $data = array(
      'tahun' => $this->input->post('tahun')
    );
    $this->db->where('id_tahun', $this->input->post('id_tahun'));
    return $this->db->update('kendaraan_data_tahun', $data);
  }
}
