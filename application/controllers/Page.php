<?php
  class Page extends CI_Controller{
    public function view($page= 'HOME'){
      if (!file_exists(APPPATH. 'views/page/'.$page.'.php')) {
        show_404();
      }
      if (!$this->session->userdata('logged_in')) {
        redirect('users/login');
      }
      $data['title'] = ucfirst($page);

      $this->load->view('templates/header');
      $this->load->view('page/'.$page, $data);
      $this->load->view('templates/footer');
    }
  }
