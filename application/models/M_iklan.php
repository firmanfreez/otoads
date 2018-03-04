<?php
class M_iklan extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function listing_iklan($id){

    $data = $this->db
                  ->select('*')
                  ->from('data_iklan')
                  ->where('id_info_pribadi', $id);

    $response = $this->db->query($data);

    return $this->db->query($data)->result();

    $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
        ->_display();
        exit;

  }
  public function tampil_iklan(){
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

    $this->db->order_by('id_iklan');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = data_iklan.id_transaksi');
    $this->db->join('wilayah_data_master', 'wilayah_data_master.id_kota = data_iklan.id_kota');

    $query  = $this->db->get('data_iklan');
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
}
