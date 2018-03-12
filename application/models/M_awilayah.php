<?php
class M_awilayah extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_wilayah = FALSE){
    $data = array(
      'id_wilayah' => $this->input->post('id_wilayah'),
      'nama_wilayah' => $this->input->post('nama_wilayah')
    );

    if ($id_wilayah === FALSE) {
      $query  = $this->db->get('wilayah_data');
      return $query->result_array();
      }
      $query = $this->db->get_where('wilayah_data', array('id_wilayah' => $id_wilayah));
      return $query->row_array();
  }
  public function update_wilayah(){
    $data = array(
      'nama_wilayah' => $this->input->post('nama_wilayah')
    );
    $this->db->where('id_wilayah', $this->input->post('id_wilayah'));
    return $this->db->update('wilayah_data', $data);
  }
}
