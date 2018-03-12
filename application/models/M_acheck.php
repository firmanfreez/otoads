<?php
class M_acheck extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_check = FALSE){
    $data = array(
      'id_check_in' => $this->input->post('id_check_in'),
      'tanggal' => $this->input->post('tanggal'),
      'waktu' => $this->input->post('waktu'),
      'f_samping_kiri' => $this->input->post('f_samping_kiri'),
      'f_samping_kanan' => $this->input->post('f_samping_kanan'),
      'f_belakang' => $this->input->post('f_belakang')
    );

    $this->db->select('*');
    $this->db->order_by('id_check');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = check_in.id_transaksi');

    if ($id_check === FALSE) {
      $query  = $this->db->get('check_in');
      return $query->result_array();
      }
      $query = $this->db->get_where('check_in', array('id_check' => $id_check));
      return $query->row_array();
  }
  public function update_check($samping_kiri, $samping_kanan, $belakang, $speedometer){

    $data = array(
      'id_transaksi' => $this->input->post('id_transaksi'),
      'tanggal' => $this->input->post('tanggal'),
      'waktu' => $this->input->post('waktu'),
      'f_samping_kiri' => $samping_kiri,
      'f_samping_kanan' => $samping_kanan,
      'f_belakang' => $belakang,
      'f_speedometer' => $speedometer,
      'angka_speedometer' => $this->input->post('angka_speedometer')
    );
    $this->db->where('id_check', $this->input->post('id_check'));
    return $this->db->update('check_in', $data);
  }
  public function get_transaksi(){
      $this->db->order_by('nama_lengkap');
      $query = $this->db->get('data_transaksi');
      return $query->result_array();
    }
    public function delete($id_check){
    $this->db->where('id_check', $id_check);
    $this->db->delete('check_in');
    return true;
    }
}
