<?php
class A_check extends CI_Controller{

  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['title'] = 'DATA CHECK IN';

    $data['check'] = $this->M_acheck->get_data();

    $this->load->view('templates/header');
    $this->load->view('check/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id_check = NULL){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    $data['check'] = $this->M_acheck->get_data($id_check);

    $id_check = $data['check']['id_check'];

    if (empty($data['check'])) {
      show_404();
    }

    $data['title'] = $data['check']['nama_lengkap'];

    $this->load->view('templates/header');
    $this->load->view('check/detail', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_check){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

      $data['check'] = $this->M_acheck->get_data($id_check);
      $data['transaksi'] = $this->M_acheck->get_transaksi();
      if (empty($data['check'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Check In';

      $this->load->view('templates/header');
      $this->load->view('check/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $config['upload_path'] = './assets/images/data_check';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2048';
    $config['max_width'] = '2000';
    $config['max_height'] = '2000';
    $this->load->library('upload', $config);

    $this->upload->do_upload('f_samping_kiri');
    $data = array('upload_data' => $this->upload->data());
    $samping_kiri = $_FILES['f_samping_kiri']['name'];

    $this->upload->do_upload('f_samping_kanan');
    $data = array('upload_data' => $this->upload->data());
    $samping_kanan = $_FILES['f_samping_kanan']['name'];

    $this->upload->do_upload('f_belakang');
    $data = array('upload_data' => $this->upload->data());
    $belakang = $_FILES['f_belakang']['name'];

    $this->upload->do_upload('f_speedometer');
    $data = array('upload_data' => $this->upload->data());
    $speedometer = $_FILES['f_speedometer']['name'];
      // $samping_kanan = $_FILES['f_samping_kanan']['name'];
      // $belakang = $_FILES['f_belakang']['name'];
      // $seedometer = $_FILES['f_speedometer']['name'];

    $this->M_acheck->update_check($samping_kiri, $samping_kanan, $belakang, $speedometer);
    $this->session->set_flashdata('update_check', 'Data Check In Berhasil di Edit');
    redirect('a_check');
    }
    public function delete($id_check){
      $this->M_acheck->delete($id_check);
      $this->session->set_flashdata('delete_check', 'Data Check In Berhasil di Hapus');
    redirect('a_check');
  }
}
