<?php
class M_aiklan extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_iklan = FALSE){
    $data = array(
      'id_iklan' => $this->input->post('id_iklan'),
      'id_kota' => $this->input->post('id_kota'),
      'id_pengiklan' => $this->input->post('id_pengiklan'),
      'nama_iklan' => $this->input->post('nama_iklan'),
      'harga_iklan' => $this->input->post('harga_iklan'),
      'durasi_iklan' => $this->input->post('durasi_iklan'),
      'area_stiker' => $this->input->post('area_stiker'),
      'iklan_gambar' => $this->input->post('iklan_gambar'),
      'status' => $this->input->post('status'),
    );

    $this->db->select('*');
    $this->db->order_by('id_iklan');
    $this->db->join('wilayah_data_master', 'wilayah_data_master.id_kota = data_iklan.id_kota');
    $this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');

    if ($id_iklan === FALSE) {
      $query  = $this->db->get('data_iklan');
      return $query->result_array();
      }
      $query = $this->db->get_where('data_iklan', array('id_iklan' => $id_iklan));
      return $query->row_array();
  }
  public function get_wilayah(){
    $this->db->order_by('nama_kota');
    $query = $this->db->get('wilayah_data_master');
    return $query->result_array();
  }
  public function get_data_master($id_iklan){
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = master_iklan.id_transaksi');
    $this->db->join('data_iklan', 'data_iklan.id_iklan = master_iklan.no_iklan');

    $this->db->join('wilayah_data_master', 'wilayah_data_master.id_kota = data_iklan.id_kota');
    $this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');

    $query = $this->db->get_where('master_iklan', array('id_iklan' => $id_iklan));
    return $query->result_array();
  }
  public function get_data_kendaraan($id_iklan){
    $this->db->join('data_iklan', 'data_iklan.id_iklan = data_iklan_kendaraan.no_iklan');
    $this->db->join('kendaraan_data_master', 'kendaraan_data_master.id_merk = data_iklan_kendaraan.id_merk');
    $this->db->join('kendaraan_data_tipe', 'kendaraan_data_tipe.id_tipe = kendaraan_data_master.id_tipe');
    $this->db->join('kendaraan_data_tahun', 'kendaraan_data_tahun.id_tahun = kendaraan_data_master.id_tahun');
    $this->db->join('kendaraan_data_warna', 'kendaraan_data_warna.id_warna = kendaraan_data_master.id_warna');

    $query = $this->db->get_where('data_iklan_kendaraan', array('id_iklan' => $id_iklan));
    return $query->result_array();
  }
  public function update_iklan($gambar_iklan){
    $data = array(
      'id_kota' => $this->input->post('id_kota'),
      'nama_iklan' => $this->input->post('nama_iklan'),
      'harga_iklan' => $this->input->post('harga_iklan'),
      'durasi_iklan' => $this->input->post('durasi_iklan'),
      'area_stiker' => $this->input->post('area_stiker'),
      'iklan_gambar' => $gambar_iklan
    );
    $this->db->where('id_iklan', $this->input->post('id_iklan'));
    return $this->db->update('data_iklan', $data);
  }
  public function delete_kendaraan($id_iklan_kendaraan){
    $this->db->where('id_iklan_kendaraan', $id_iklan_kendaraan);
    $this->db->delete('data_iklan_kendaraan');
    return true;
  }
}
