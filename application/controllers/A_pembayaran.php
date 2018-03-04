<?php
class A_pembayaran extends CI_Controller{
  public function index(){
    $data['title'] = 'DATA PEMBAYARAN';

    $data['pembayaran'] = $this->M_apembayaran->get_data();

    $this->load->view('templates/header');
    $this->load->view('pembayaran/index', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id_pembayaran){

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
    redirect('a_pembayaran');
    }
    public function delete($id_pembayaran){
      $this->M_apembayaran->delete($id_pembayaran);
      redirect('a_pembayaran');
    }
  }
