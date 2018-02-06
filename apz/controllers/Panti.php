<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panti extends CI_Controller {
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    
  }

  public function login(){
    $this->load->view('home/login');
  }

}
