<?php
class M_apembayaran extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_pembayaran = FALSE){
    $data = array(
      'id_pembayaran' => $this->input->post('id_pembayaran'),
      'id_transaksi' => $this->input->post('id_transaksi'),
      'nama_bank' => $this->input->post('nama_bank'),
      'nomor_rekening' => $this->input->post('nomor_rekening'),
      'nama_pemilik_rekening' => $this->input->post('nama_pemilik_rekening')
    );

    $this->db->select('*');
    $this->db->order_by('id_pembayaran');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = data_pembayaran.id_transaksi');

    if ($id_pembayaran === FALSE) {
      $query  = $this->db->get('data_pembayaran');
      return $query->result_array();
      }
      $query = $this->db->get_where('data_pembayaran', array('id_pembayaran' => $id_pembayaran));
      return $query->row_array();
  }
  public function update_pembayaran(){
    $data = array(
      'id_transaksi' => $this->input->post('id_transaksi'),
      'nama_bank' => $this->input->post('nama_bank'),
      'nomor_rekening' => $this->input->post('nomor_rekening'),
      'nama_pemilik_rekening' => $this->input->post('nama_pemilik_rekening')
    );
    $this->db->where('id_pembayaran', $this->input->post('id_pembayaran'));
    return $this->db->update('data_pembayaran', $data);
  }
  public function get_transaksi(){
      $this->db->order_by('nama_lengkap');
      $query = $this->db->get('data_transaksi');
      return $query->result_array();
    }
    public function delete($id_pembayaran){
      $this->db->where('id_pembayaran', $id_pembayaran);
      $this->db->delete('data_pembayaran');
      return true;
    }
}
