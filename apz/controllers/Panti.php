<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panti extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('panti_model');
  }

  public function index(){
    $this->cekLogin();

    $this->load->view('panti/dashboard');
  }

  public function cekLogin(){
    if(!$this->session->userdata('login_panti'))
      redirect(site_url('in/signin'));
  }

  public function login(){
    if($this->session->userdata('login_panti'))
      redirect(site_url('in'));

    if($this->input->post('masuk')){
      if($this->panti_model->check()->num_rows() > 0){
        $panti = $this->panti_model->getPanti();

        if(password_verify($this->input->post('password'), $panti->password)){
          $data_session = array(
            'login_panti' => true,
            'id_panti'    => $panti->id,
            'uname_panti' => $panti->username,
            'nama_panti'  => $panti->nama
          );

          $this->session->set_userdata($data_session);
          redirect(site_url('in'));
        }
        else {
          $this->session->set_flashdata('msg', '<p class="alert alert-danger">Username atau password salah</p>');
        }
      }
      else {
        $this->session->set_flashdata('msg', '<p class="alert alert-danger">Username atau password salah</p>');
      }

      redirect(site_url('in/signin'));
    }
    else {
      $data['message'] = $this->session->flashdata('msg');
      $this->load->view('panti/login', $data);
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect(site_url('products'));
  }

  public function produk(){
    $this->cekLogin();

    $data['view_name'] = 'produk';
    $this->load->view('panti/index_view', $data);
  }
}
