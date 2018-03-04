<?php
class M_transaksi extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil(){
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

    $this->db->order_by('id_transaksi');
    $this->db->join('kendaraan_data_master', 'kendaraan_data_master.id_merk = data_transaksi.id_merk');
    $this->db->join('wilayah_data_master', 'wilayah_data_master.id_kota = data_transaksi.id_kota');

    $query  = $this->db->get('data_transaksi');
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
  public function tambah_data($password){
    $data = array(
      'id_kota' => $this->input->post('id_kota'),
      'id_merk' => $this->input->post('id_merk'),
      'reflect_code' => $this->input->post('reflect_code'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'status' => $this->input->post('status'),
      'email' => $this->input->post('email'),
      'password' => $password,
      'nomor_telepon' => $this->input->post('nomor_telepon'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'nama_pemilik_kendaraan' => $this->input->post('nama_pemilik_kendaraan'),
      'nomor_polisi_kendaraan' => $this->input->post('nomor_polisi_kendaraan'),
      'stnk_gambar' => $this->input->post('stnk_gambar'),
      'sim_gambar' => $this->input->post('sim_gambar'),
      'ktp_gambar' => $this->input->post('ktp_gambar')
      );


      return $this->db->insert('data_transaksi', $data);

      $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
            ->_display();
            exit;
      }
      public function edit_keterangan(){
        $data = array(
            'nama_pemilik_kendaraan' => $this->input->post('nama_pemilik_kendaraan'),
            'nomor_polisi_kendaraan' => $this->input->post('nomor_polisi_kendaraan'),
            'id_merk' => $this->input->post('id_merk')
          );
      $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
      return $this->db->update('data_transaksi', $data);

      $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
            ->_display();
            exit;
      }
      public function edit_informasi_wilayah(){
        $data = array(
            'id_kota' => $this->input->post('id_kota')
          );
      $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
      return $this->db->update('data_transaksi', $data);

      $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
            ->_display();
            exit;
      }
    public function gambar($data_user){

  		$condition['id_transaksi'] = $data_user['id_transaksi'];
  		unset($data_user['id_transaksi']);
  		$this->db->trans_begin();
  		$this->db->where($condition);
  		$this->db->update('data_transaksi', $data_user);
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
