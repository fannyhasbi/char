<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
  
  public function getProduk($start = 0, $count = 12){
    $this->db->limit($count, $start);
    $q = $this->db->get('produk');
    return $q->result();
  }
  

}
