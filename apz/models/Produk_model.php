<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
  
  public function __construct(){
    parent::__construct();
  }

  public function record_count(){
    return $this->db->count_all('produk');
  }

  public function fetch_produk($limit, $start){
    $this->db->limit($limit, $start);
    $query = $this->db->get('produk');

    if($query->num_rows() > 0){
      foreach($query->result() as $row){
        $data[] = $row;
      }

      return $data;
    }

    return false;
  }
  

}
