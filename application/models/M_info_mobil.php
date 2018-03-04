<?php
class M_info_mobil extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil_data(){
    $data = array(
      'id_info_mobil' => $this->input->post('id_info_mobil'),
      'id_info_pribadi' => $this->input->post('id_info_pribadi'),
      'id_merk' => $this->input->post('id_merk'),
      'nama_pemilik_kendaraan' => $this->input->post('nama_pemilik_kendaraan'),
      'nomor_polisi_kendaraan' => $this->input->post('nomor_polisi_kendaraan'),
      'stnk_gambar' => $this->input->post('stnk_gambar'),
      'sim_gambar' => $this->input->post('sim_gambar'),
      'ktp_gambar' => $this->input->post('ktp_gambar')
    );

    $this->db->order_by('id_info_mobil');
    $this->db->join('informasi_pribadi', 'informasi_pribadi.id_info_pribadi = informasi_mobil.id_info_pribadi');
    $this->db->join('kendaraan_data_master', 'kendaraan_data_master.id_merk = informasi_mobil.id_merk');
    $query  = $this->db->get('informasi_mobil');

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
  public function tambah_info_mobil($data){
    $data = array(
      'nama_pemilik_kendaraan' => $this->input->post('nama_pemilik_kendaraan'),
      'nomor_polisi_kendaraan' => $this->input->post('nomor_polisi_kendaraan')
    );
    return $this->db->insert('informasi_mobil', $data);

    $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
          ->_display();
          exit;
    }

    public function gambar($data_user){

		$condition['id_info_mobil'] = $data_user['id_info_mobil'];
		unset($data_user['id_info_mobil']);
		$this->db->trans_begin();
		$this->db->where($condition);
		$this->db->update('informasi_mobil', $data_user);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$response = array(
				'result' => "false",
				'message' => "Data gagal diubah, Silahkan coba kembali"
				);
		} else {
			$this->db->trans_commit();
			$response = array(
				'result' => "true",
				'message' => "Data berhasil diubah"
				);
		}
		return $response;
	}
}
