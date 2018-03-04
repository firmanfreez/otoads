<?php
class M_check extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function tampil_data_check(){
    $data = array(
      'id_check_in' => $this->input->post('id_check_in'),
      'tanggal' => $this->input->post('tanggal'),
      'waktu' => $this->input->post('waktu'),
    );
    $query  = $this->db->get('check_in');
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
  public function tambah($data){
    $data = array(
      'tanggal' => date("Y-m-d"),
    );
      return $this->db->insert('check_in', $data);

      $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($data,  JSON_PRETTY_PRINT))
            ->_display();
            exit;
    }
    public function gambar($data_user){

		$condition['id_check_in'] = $data_user['id_check_in'];
		unset($data_user['id_check_in']);
		$this->db->trans_begin();
		$this->db->where($condition);
		$this->db->update('check_in', $data_user);
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
