<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $q = $this->db->query("SELECT * FROM produk ORDER BY id DESC LIMIT 6");
    $data['produk'] = $q->result();

    $data['message'] = $this->session->flashdata('msg');
    $data['type'] = $this->session->flashdata('type');

    $this->load->view('home/index', $data);
  }

  public function daftar(){
    $this->load->model('home_model');

    if($this->input->post('daftar')){
      $this->home_model->addVolunteer();

      $this->session->set_flashdata('msg', 'Terima kasih telah mendaftar jadi bagian dari kami :)');
      $this->session->set_flashdata('type', 'success');

      redirect(site_url());
    }
    else {
      $this->load->view('home/daftar');
    }
  }
}
