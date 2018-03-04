<?php
class M_aiklan extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_iklan = FALSE){
    $data = array(
      'id_iklan' => $this->input->post('id_iklan'),
      'id_transaksi' => $this->input->post('id_transaksi'),
      'id_kota' => $this->input->post('id_kota'),
      'nama_iklan' => $this->input->post('nama_iklan'),
      'nama_website' => $this->input->post('nama_website'),
      'harga_iklan' => $this->input->post('harga_iklan'),
      'durasi_iklan' => $this->input->post('durasi_iklan'),
      'area_stiker' => $this->input->post('area_stiker')
    );

    $this->db->select('*');
    $this->db->order_by('id_iklan');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = data_iklan.id_transaksi');
    $this->db->join('wilayah_data_master', 'wilayah_data_master.id_kota = data_iklan.id_kota');
    $this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');

    if ($id_iklan === FALSE) {
      $query  = $this->db->get('data_iklan');
      return $query->result_array();
      }
      $query = $this->db->get_where('data_iklan', array('id_iklan' => $id_iklan));
      return $query->row_array();
  }
  public function get_transaksi(){
    $this->db->order_by('nama_lengkap');
    $query = $this->db->get('data_transaksi');
    return $query->result_array();
  }
  public function get_wilayah(){
    $this->db->order_by('nama_kota');
    $query = $this->db->get('wilayah_data_master');
    return $query->result_array();
  }
}
