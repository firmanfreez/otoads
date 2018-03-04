<?php
class M_pembayaran extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil(){
    $data = array(
      'id_pembayaran' => $this->input->post('id_pembayaran'),
      'id_transaksi' => $this->input->post('id_transaksi'),
      'nama_bank' => $this->input->post('nama_bank'),
      'nomor_rekening' => $this->input->post('nomor_rekening'),
      'nama_pemilik_rekening' => $this->input->post('nama_pemilik_rekening')
    );

    $this->db->order_by('id_pembayaran');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = data_pembayaran.id_transaksi');

    $query  = $this->db->get('data_pembayaran');
    $response = array(
        'data' => $query->result_array()
        );

    $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }
  public function tambah(){
    $data = array(
        'id_transaksi' => $this->input->post('id_transaksi'),
        'nama_bank' => $this->input->post('nama_bank'),
        'nomor_rekening' => $this->input->post('nomor_rekening'),
        'nama_pemilik_rekening' => $this->input->post('nama_pemilik_rekening')
      );
      return $this->db->insert('data_pembayaran', $data);

      $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
            ->_display();
            exit;
  }
}
