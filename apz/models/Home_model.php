<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
  public function __construct(){
    date_default_timezone_set('Asia/Jakarta');
  }

  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }

  public function addVolunteer(){
    $data = array(
      'nama_depan' => $this->purify($this->input->post('nama_depan')),
      'nama_blkg'  => $this->purify($this->input->post('nama_blkg')),
      'email' => $this->purify($this->input->post('email')),
      'tgl' => date('Y-m-d'),
      'domisili' => $this->purify($this->input->post('domisili'))
    );

    $this->db->insert('volunteer', $data);
  }
  

}
