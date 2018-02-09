<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->cekSession();
  }

  //cek apakah session sudah ada
  private function cekSession(){
    if(!$this->session->userdata('id_session'))
      $this->session->set_userdata(array('id_session' => $this->generateSession()));
  }

  private function generateSession(){
    $h = "";
    $k = "1234567890qwertyuiopasdfghjklzxcvbnm";
    for ($i=1; $i <= 40; $i++) { 
      $h .= $k[rand(0, strlen($k) - 1)];
    }
    return $h;
  }

  public function index(){
    $q = $this->db->query("SELECT * FROM produk ORDER BY id DESC LIMIT 6");
    $data['produk'] = $q->result();
    $this->load->view('home/index', $data);
  }

  public function daftar(){
    $this->load->view('home/daftar');
  }
}
