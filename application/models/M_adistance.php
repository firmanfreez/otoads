<?php
class M_adistance extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_distance = FALSE){
    $data = array(
      'id_distance' => $this->input->post('id_distance'),
      'id_transaksi' => $this->input->post('id_transaksi'),
      'perjalanan_hari_ini' => $this->input->post('perjalanan_hari_ini'),
      'perjalanan_kemarin' => $this->input->post('perjalanan_kemarin'),
      'total_perjalanan' => $this->input->post('total_perjalanan')
    );

    $this->db->select('*');
    $this->db->order_by('id_kota');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = data_distance.id_transaksi');

    if ($id_distance === FALSE) {
      $query  = $this->db->get('data_distance');
      return $query->result_array();
      }
      $query = $this->db->get_where('data_distance', array('id_distance' => $id_distance));
      return $query->row_array();
  }
  public function update_distance($total_perjalanan){

    $data = array(
      'id_transaksi' => $this->input->post('id_transaksi'),
      'perjalanan_hari_ini' => $this->input->post('perjalanan_hari_ini'),
      'perjalanan_kemarin' => $this->input->post('perjalanan_kemarin'),
      'total_perjalanan' => $total_perjalanan
    );
    $this->db->where('id_distance', $this->input->post('id_distance'));
    return $this->db->update('data_distance', $data);
  }
  public function get_transaksi(){
      $this->db->order_by('nama_lengkap');
      $query = $this->db->get('data_transaksi');
      return $query->result_array();
    }
    public function delete($id_distance){
      $this->db->where('id_distance', $id_distance);
      $this->db->delete('data_distance');
      return true;
    }
}
