<?php
class M_atransaksi extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_data($id_transaksi = FALSE){
    $data = array(
      'id_transaksi' => $this->input->post('id_transaksi'),
      'id_kota' => $this->input->post('id_kota'),
      'id_merk' => $this->input->post('id_merk'),
      'reflect_code' => $this->input->post('reflect_code'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'status' => $this->input->post('status'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password'),
      'nomor_telepon' => $this->input->post('nomor_telepon'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'nama_pemilik_kendaraan' => $this->input->post('nama_pemilik_kendaraan'),
      'nomor_polisi_kendaraan ' => $this->input->post('nomor_polisi_kendaraan '),
      'stnk_gambar' => $this->input->post('stnk_gambar'),
      'sim_gambar' => $this->input->post('sim_gambar'),
      'ktp_gambar' => $this->input->post('ktp_gambar')
    );

    $this->db->select('*');
    $this->db->order_by('id_transaksi');
    $this->db->join('kendaraan_data_master', 'kendaraan_data_master.id_merk = data_transaksi.id_merk');
    $this->db->join('wilayah_data_master', 'wilayah_data_master.id_kota = data_transaksi.id_kota');
    $this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');
    $this->db->join('kendaraan_data_tipe', 'kendaraan_data_tipe.id_tipe = kendaraan_data_master.id_tipe');
    $this->db->join('kendaraan_data_tahun', 'kendaraan_data_tahun.id_tahun = kendaraan_data_master.id_tahun');
    $this->db->join('kendaraan_data_warna', 'kendaraan_data_warna.id_warna = kendaraan_data_master.id_warna');

    if ($id_transaksi === FALSE) {
      $query  = $this->db->get('data_transaksi');
      return $query->result_array();
      }
      $query = $this->db->get_where('data_transaksi', array('id_transaksi' => $id_transaksi));
      return $query->row_array();
  }
  public function get_data_distance($id_transaksi){
      $this->db->order_by('total_perjalanan', 'DESC');
      $this->db->limit(1);

      $query = $this->db->get_where('data_distance', array('id_transaksi' => $id_transaksi));
      return $query->row_array();
    }
    public function get_data_check($id_transaksi){
      $query = $this->db->get_where('check_in', array('id_transaksi' => $id_transaksi));
      return $query->result_array();
    }
    public function get_data_pesan($id_transaksi){
      $query = $this->db->get_where('data_pesan', array('id_transaksi' => $id_transaksi));
      return $query->result_array();
    }
  public function get_kendaraan(){
      $this->db->order_by('merk');
      $query = $this->db->get('kendaraan_data_master');
      return $query->result_array();
    }
    public function get_kota(){
        $this->db->order_by('nama_kota');
        $query = $this->db->get('wilayah_data_master');
        return $query->result_array();
      }
    public function update_transaksi($stnk, $sim, $ktp){

      $data = array(
        'id_kota' => $this->input->post('id_kota'),
        'id_merk' => $this->input->post('id_merk'),
        'reflect_code' => $this->input->post('reflect_code'),
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'status' => $this->input->post('status'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'nomor_telepon' => $this->input->post('nomor_telepon'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'nama_pemilik_kendaraan' => $this->input->post('nama_pemilik_kendaraan'),
        'nomor_polisi_kendaraan ' => $this->input->post('nomor_polisi_kendaraan '),
        'stnk_gambar' => $stnk,
        'sim_gambar' => $sim,
        'ktp_gambar' => $ktp
      );
      $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
      return $this->db->update('data_transaksi', $data);
    }
    // public function get_kota($id){
    //   $data = $this->db->order_by('id_kota')
    //                    ->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah')
    //                    ->get_where('wilayah_data_master', array('id_kota' => $id));
    //   return $data->result_array();
    // }
    public function delete($id_transaksi){
    $this->db->where('id_transaksi', $id_transaksi);
    $this->db->delete('data_transaksi');
    return true;
    }
    public function delete_pesan($id_pesan){
      $this->db->where('id_pesan', $id_pesan);
      $this->db->delete('data_pesan');
      return true;
    }
}
