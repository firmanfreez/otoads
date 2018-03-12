  <?php
class M_amaster_iklan extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_master_iklan = FALSE){
    $data = array(
      'id_master_iklan' => $this->input->post('id_master_iklan'),
      'id_transaksi' => $this->input->post('id_transaksi'),
      'id_iklan' => $this->input->post('id_iklan'),
    );

    $this->db->select('*');
    $this->db->order_by('id_master_iklan');
    $this->db->join('data_transaksi', 'data_transaksi.id_transaksi = master_iklan.id_transaksi');
    $this->db->join('data_iklan', 'data_iklan.id_iklan = master_iklan.no_iklan');
    $this->db->join('wilayah_data_master', 'wilayah_data_master.id_kota = data_iklan.id_kota');
    $this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');

    if ($id_master_iklan === FALSE) {
      $query  = $this->db->get('master_iklan');
      return $query->result_array();
      }
      $query = $this->db->get_where('master_iklan', array('id_master_iklan' => $id_master_iklan));
      return $query->row_array();
  }
  public function get_transaksi(){
    $this->db->order_by('nama_lengkap');
    $query = $this->db->get('data_transaksi');
    return $query->result_array();
  }
  public function get_iklan(){
    $this->db->order_by('nama_iklan');
    $query = $this->db->get('data_iklan');
    return $query->result_array();
  }
  public function update(){
    $data = array(
      'id_transaksi' => $this->input->post('id_transaksi'),
      'no_iklan' => $this->input->post('no_iklan'),
    );
    $this->db->where('id_master_iklan', $this->input->post('id_master_iklan'));
    return $this->db->update('master_iklan', $data);
  }
}
