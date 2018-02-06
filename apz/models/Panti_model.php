<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panti_model extends CI_Model {
  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }
  
  public function check(){
    $data = array(
      'username' => $this->purify($this->input->post('username'))
    );

    return $this->db->get_where('panti', $data);
  }

  public function getPanti(){
    $data = array(
      'username' => $this->purify($this->input->post('username'))
    );

    $q = $this->db->get_where('panti', $data);
    return $q->row();
  }

}
