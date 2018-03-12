<?php
class M_dashboard extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  function customer_new(){

    $data = $this->db->select('*'),
                 ->db->from('data_transaksi');
    $total = $data->num_rows();
    return $total;
  }
}
