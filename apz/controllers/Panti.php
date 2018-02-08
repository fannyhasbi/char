<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panti extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('panti_model');
  }

  public function index(){
    $this->cekLogin();

    $this->load->view('panti/dashboard');
  }

  public function cekLogin(){
    if(!$this->session->userdata('login_panti'))
      redirect(site_url('in/signin'));
  }

  public function generateAlamatFoto(){
    $foto = "";
    $n = "1234567890abcdefghijklmnopqrstuvwxyz_";
    for($i=0;$i<8;$i++){
      $foto .= $n[rand(0, strlen($n) - 1)];
    }

    return 'mfproduct_'.$foto;
  }

  public function login(){
    if($this->session->userdata('login_panti'))
      redirect(site_url('in'));

    if($this->input->post('masuk')){
      if($this->panti_model->check()->num_rows() > 0){
        $panti = $this->panti_model->getPanti();

        if(password_verify($this->input->post('password'), $panti->password)){
          $data_session = array(
            'login_panti' => true,
            'id_panti'    => $panti->id,
            'uname_panti' => $panti->username,
            'nama_panti'  => $panti->nama
          );

          $this->session->set_userdata($data_session);
          redirect(site_url('in'));
        }
        else {
          $this->session->set_flashdata('msg', '<p class="alert alert-danger">Username atau password salah</p>');
        }
      }
      else {
        $this->session->set_flashdata('msg', '<p class="alert alert-danger">Username atau password salah</p>');
      }

      redirect(site_url('in/signin'));
    }
    else {
      $data['message'] = $this->session->flashdata('msg');
      $this->load->view('panti/login', $data);
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect(site_url('products'));
  }

  public function produk(){
    $this->cekLogin();

    $data['produk'] = $this->panti_model->getProduk();

    $data['view_name'] = 'produk';
    $data['message'] = $this->session->flashdata('msg');
    $data['type'] = $this->session->flashdata('type');
    $this->load->view('panti/index_view', $data);
  }

  public function tambah_produK(){
    if($this->input->post('tambah_produk')){
      $foto = $this->generateAlamatFoto();

      // jika alamat foto sudah ada di db
      while($this->panti_model->checkFoto($foto)){
        $foto = $this->generateAlamatFoto();
      }

      $config['upload_path']   = './uploads/p/';
      $config['file_name']     = $foto;
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size']      = 600;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('foto_produk')){
        $this->session->set_flashdata('msg', $this->upload->display_errors());
        $this->session->set_flashdata('type', 'error');
      }
      else {
        // jika berhasil
        $data = $this->upload->data();
        $this->panti_model->addProduk($data['file_name']);
        $this->session->set_flashdata('msg', 'Berhasil menambahkan produk baru');
        $this->session->set_flashdata('type', 'success');
      }

      redirect(site_url('in/produk'));
    }
    else {
      $data['view_name'] = 'tambah_produk';
      $this->load->view('panti/index_view', $data);
    }
  }

  public function edit_produk($id_produk){
    if($this->input->post('edit_produk')){
      if($this->input->post('ubahfoto')){
        $alamat_foto = $this->generateAlamatFoto();

        // jika alamat foto sudah ada di db
        while($this->panti_model->checkFoto($alamat_foto)){
          $foto = $this->generateAlamatFoto();
        }

        $config['upload_path']   = './uploads/p/';
        $config['file_name']     = $alamat_foto;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 600;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto_produk')){
          $this->session->set_flashdata('msg', $this->upload->display_errors());
          $this->session->set_flashdata('type', 'error');
        }
        else {
          // jika berhasil
          $data = $this->upload->data();
          $this->panti_model->updateProduk($id_produk, $data['file_name']);
          $this->session->set_flashdata('msg', 'Berhasil mengubah produk');
          $this->session->set_flashdata('type', 'success');
        }
      }
      else {
        $this->panti_model->updateProduk($id_produk);
        $this->session->set_flashdata('msg', 'Berhasil mengubah produk');
        $this->session->set_flashdata('type', 'success');
      }

      redirect(site_url('in/produk'));
    }
    else {
      $data['produk'] = $this->panti_model->getProdukById($id_produk);
      $data['view_name'] = 'edit_produk';
      $this->load->view('panti/index_view', $data);
    }
  }

}
