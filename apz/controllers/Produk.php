<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('produk_model');
  }

  public function index(){
    $data['produk'] = $this->produk_model->getProduk();
    $this->load->view('produk/index', $data);
  }

}
