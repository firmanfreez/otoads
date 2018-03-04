<?php
class M_amobil extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_merk = FALSE){
    $data = array(
      'id_merk' => $this->input->post('id_merk'),
      'id_tipe' => $this->input->post('id_tipe'),
      'id_tahun' => $this->input->post('id_tahun'),
      'id_warna' => $this->input->post('id_warna'),
      'merk' => $this->input->post('merk')
    );

    $this->db->select('*');
    $this->db->order_by('id_merk');
    $this->db->join('kendaraan_data_tipe', 'kendaraan_data_tipe.id_tipe = kendaraan_data_master.id_tipe');
    $this->db->join('kendaraan_data_tahun', 'kendaraan_data_tahun.id_tahun = kendaraan_data_master.id_tahun');
    $this->db->join('kendaraan_data_warna', 'kendaraan_data_warna.id_warna = kendaraan_data_master.id_warna');

    if ($id_merk === FALSE) {
      $query  = $this->db->get('kendaraan_data_master');
      return $query->result_array();
      }
      $query = $this->db->get_where('kendaraan_data_master', array('id_merk' => $id_merk));
      return $query->row_array();
      $query  = $this->db->get('kendaraan_data_master');
      return $query->result_array();
  }
  public function update_mobil(){
    $data = array(
      'id_tipe' => $this->input->post('id_tipe'),
      'id_tahun' => $this->input->post('id_tahun'),
      'id_warna' => $this->input->post('id_warna'),
      'merk' => $this->input->post('merk')
    );
    $this->db->where('id_merk', $this->input->post('id_merk'));
    return $this->db->update('kendaraan_data_master', $data);
  }
  public function get_tipe(){
      $this->db->order_by('tipe');
      $query = $this->db->get('kendaraan_data_tipe');
      return $query->result_array();
    }
    public function get_tahun(){
        $this->db->order_by('tahun');
        $query = $this->db->get('kendaraan_data_tahun');
        return $query->result_array();
      }
      public function get_warna(){
          $this->db->order_by('warna');
          $query = $this->db->get('kendaraan_data_warna');
          return $query->result_array();
        }
        public function delete($id_merk){
          $this->db->where('id_merk', $id_merk);
          $this->db->delete('kendaraan_data_master');
          return true;
        }
}
