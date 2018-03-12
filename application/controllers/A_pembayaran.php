<?php
class A_pembayaran extends CI_Controller{
  public function index(){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

    $data['title'] = 'DATA PEMBAYARAN';

    $data['pembayaran'] = $this->M_apembayaran->get_data();

    $this->load->view('templates/header');
    $this->load->view('pembayaran/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_pembayaran){
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

      $data['pembayaran'] = $this->M_apembayaran->get_data($id_pembayaran);
      $data['transaksi'] = $this->M_apembayaran->get_transaksi();

      if (empty($data['pembayaran'])) {
        show_404();
      }
      $data['title'] = 'Edit Data Pembayaran';

      $this->load->view('templates/header');
      $this->load->view('pembayaran/edit', $data);
      $this->load->view('templates/footer');
    }
  public function update(){
    $this->M_apembayaran->update_pembayaran();
    $this->session->set_flashdata('update_pembayaran', 'Data Pembayaran Berhasil di edit');
    redirect('a_pembayaran');
    }
    public function delete($id_pembayaran){
      $this->M_apembayaran->delete($id_pembayaran);
      $this->session->set_flashdata('delete_pembayaran', 'Data Pembayaran Berhasil di hapus');
      redirect('a_pembayaran');
    }
  }
