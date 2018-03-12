<?php
class Users extends CI_Controller{
  // public function __construct(){
  //   parent::__construct();
  //   $this->load->model('M_users');
  // }
  public function login(){
      $data['title'] = 'Login';

      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() === FALSE){
        $this->load->view('users/login', $data);
      }else{
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $id_login = $this->M_users->login($email, $password);
        if ($id_login) {
          $user_data = array(
            'id_login' => $id_login,
            'email' => $email,
            'logged_in' => true
          );
          $this->session->set_userdata($user_data);
          //nambah pesan
          $this->session->set_flashdata('user_loggedin', 'You are now logged in');
          redirect('page/view');
        }else {
          //nambah pesan
          $this->session->set_flashdata('login_failed', 'Login is invalid');
          redirect('users/login');
        }
      }
    }
    public function logout(){
      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('id_login');
      $this->session->unset_userdata('email');
      $this->session->set_flashdata('user_loggedout', 'You are now logged out');
      redirect('users/login');
    }
}
