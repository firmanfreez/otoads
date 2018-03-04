<?php
class M_mobil extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil_data(){
    $data = array(
      'id_merk' => $this->input->post('id_merk'),
      'id_tipe' => $this->input->post('id_tipe'),
      'id_tahun' => $this->input->post('id_tahun'),
      'id_warna' => $this->input->post('id_warna'),
      'merk' => $this->input->post('merk'),
    );

    $this->db->order_by('id_merk');
    $this->db->join('kendaraan_data_tipe', 'kendaraan_data_tipe.id_tipe = kendaraan_data_master.id_tipe');
    $this->db->join('kendaraan_data_tahun', 'kendaraan_data_tahun.id_tahun = kendaraan_data_master.id_tahun');
    $this->db->join('kendaraan_data_warna', 'kendaraan_data_warna.id_warna = kendaraan_data_master.id_warna');
    $query  = $this->db->get('kendaraan_data_master');

    // return $data->result();

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
  public function tambah_data_master_kendaraan(){
    $data = array(
      'id_tipe' => $this->input->post('id_tipe'),
      'id_tahun' => $this->input->post('id_tahun'),
      'id_warna' => $this->input->post('id_warna'),
      'merk' => $this->input->post('merk')
      );
    return $this->db->insert('kendaraan_data_master', $data);

    // $data_1 = array(
    //   'id_info_mobil' => $this->input->post('id_info_mobil')
    // )
    // $this->db->where('id', $this->input->post('id'));
    // return $this->db->update('posts', $data);

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
          ->_display();
          exit;
    }
  }
