<?php
  class Dashboard extends CI_Controller{
    public function __construct(){
      $this->load->model('M_dashboard');
    }
     function customer_new(){
      $data['customer'] = $this->M_dashboard->customer_new();

      $this->load->view('transaksi/index', $data);
    }
  }
