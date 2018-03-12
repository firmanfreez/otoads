<?php
class M_akota extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_kota = FALSE){
    $data = array(
      'id_kota' => $this->input->post('id_kota'),
      'id_wilayah' => $this->input->post('id_wilayah'),
      'nama_kota' => $this->input->post('nama_kota')
    );

    $this->db->select('*');
    $this->db->order_by('id_kota');
    $this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');

    if ($id_kota === FALSE) {
      $query  = $this->db->get('wilayah_data_master');
      return $query->result_array();
      }
      $query = $this->db->get_where('wilayah_data_master', array('id_kota' => $id_kota));
      return $query->row_array();
  }
  public function update_kota(){
    $data = array(
      'id_wilayah' => $this->input->post('id_wilayah'),
      'nama_kota' => $this->input->post('nama_kota')
    );
    $this->db->where('id_kota', $this->input->post('id_kota'));
    return $this->db->update('wilayah_data_master', $data);
  }
  public function get_wilayah(){
    $this->db->order_by('id_wilayah');
    $query = $this->db->get('wilayah_data');
    return $query->result_array();
  }
  public function delete($id_kota){
    $this->db->where('id_kota', $id_kota);
    $this->db->delete('wilayah_data_master');
    return true;
  }
}
