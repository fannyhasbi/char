<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panti_model extends CI_Model {
  public function __construct(){
    date_default_timezone_set('Asia/Jakarta');
  }

  private function purify($r){
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);

    return $r;
  }

  private function generateSlug($nama_produk){
    $r = $this->purify($nama_produk);
    $r = strtolower($r);
    $r = str_replace(" ", "-", $r);
    $r = substr($r, 0, 30);
    return $r;
  }
  
  public function check(){
    $data = array(
      'username' => $this->purify($this->input->post('username'))
    );

    return $this->db->get_where('panti', $data);
  }

  public function checkFoto($alamat_foto){
    $foto = $this->db->get_where('produk', ['foto' => $alamat_foto])->row();

    $foto = explode(".", $foto);
    $foto = $foto[0];

    if($foto == $alamat_foto)
      return true;
    else
      return false;
  }

  public function addProduk($alamat_foto){
    $deskripsi = str_replace("\n", "<br>", $this->input->post('deskripsi_produk'));
    $slug = $this->generateSlug($this->input->post('nama_produk'));

    $data = array(
      'nama' => $this->purify($this->input->post('nama_produk')),
      'harga' => (float)$this->input->post('harga_produk'),
      'desk' => $deskripsi,
      'pemilik' => $this->session->userdata('id_panti'),
      'ditambah' => date('Y-m-d'),
      'foto' => $alamat_foto,
      'slug' => $slug
    );

    $this->db->insert('produk', $data);
  }

  public function updateProduk($id_produk, $alamat_foto_baru = NULL){
    $deskripsi = str_replace("\n", "<br>", $this->input->post('deskripsi_produk'));
    $slug = $this->generateSlug($this->input->post('nama_produk'));

    if($alamat_foto_baru === NULL){
      $data = array(
        'nama' => $this->purify($this->input->post('nama_produk')),
        'harga' => (float)$this->input->post('harga_produk'),
        'desk' => $deskripsi,
        'slug' => $slug
      );
    }
    else {
      $data = array(
      'nama' => $this->purify($this->input->post('nama_produk')),
      'harga' => (float)$this->input->post('harga_produk'),
      'desk' => $deskripsi,
      'foto' => $alamat_foto_baru,
      'slug' => $slug
    );
    }

    $this->db->where('id', $id_produk);

    $this->db->update('produk', $data);
  }

  public function getPanti(){
    $data = array(
      'username' => $this->purify($this->input->post('username'))
    );

    $q = $this->db->get_where('panti', $data);
    return $q->row();
  }

  public function getProduk(){
    $q = $this->db->get_where('produk', ['pemilik' => $this->session->userdata('id_panti')]);
    return $q->result();
  }

  public function getProdukById($id){
    $where = array(
      'pemilik' => $this->session->userdata('id_panti'),
      'id' => $id
    );

    $q = $this->db->get_where('produk', $where);
    return $q->row();
  }

}
