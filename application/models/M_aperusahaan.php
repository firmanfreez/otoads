<?php
class M_aperusahaan extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_perusahaan = FALSE){
    $data = array(
      'id_perusahaan' => $this->input->post('id_perusahaan'),
      'nama_perusahaan' => $this->input->post('nama_perusahaan'),
      'telpon_perusahaan' => $this->input->post('telpon_perusahaan'),
      'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
      'email_perusahaan' => $this->input->post('email_perusahaan'),
      'pic' => $this->input->post('pic'),
      'telepon_pic' => $this->input->post('telepon_pic'),
      'alamat_pic' => $this->input->post('alamat_pic'),
      'email_pic' => $this->input->post('email_pic'),
    );

    if ($id_perusahaan === FALSE) {
      $query  = $this->db->get('data_perusahaan');
      return $query->result_array();
      }
      $query = $this->db->get_where('data_perusahaan', array('id_perusahaan' => $id_perusahaan));
      return $query->row_array();
  }
  public function get_data_iklan($id_perusahaan){
    $query = $this->db->get_where('data_iklan', array('id_pengiklan' => $id_perusahaan));
    return $query->result_array();
  }
  public function update_perusahaan(){
    $data = array(
      'nama_perusahaan' => $this->input->post('nama_perusahaan'),
      'telepon_perusahaan' => $this->input->post('telepon_perusahaan'),
      'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
      'email_perusahaan' => $this->input->post('email_perusahaan'),
      'pic' => $this->input->post('pic'),
      'telepon_pic' => $this->input->post('telepon_pic'),
      'alamat_pic' => $this->input->post('alamat_pic'),
      'email_pic' => $this->input->post('email_pic'),
    );
    $this->db->where('id_perusahaan', $this->input->post('id_perusahaan'));
    return $this->db->update('data_perusahaan', $data);
  }
}
