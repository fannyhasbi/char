<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('produk_model');
    $this->load->library('pagination');
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
    $config = array();
    $config['base_url'] = base_url() . 'products';
    $config['total_rows'] = $this->produk_model->record_count();
    $config['per_page'] = 12;
    $config['uri_segment'] = 2;

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

    $data['results'] = $this->produk_model->fetch_produk($config['per_page'], $page);
    $data['links'] = $this->pagination->create_links();

    $this->load->view('produk/index', $data);
  }

}
