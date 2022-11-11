<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{

  //load logika verifikasi
  public function verifikasi()
  {
    $input = [
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
    ];
    $result = $this->M_obwis->verifikasi("tabeladmin", $input)->num_rows();
    if ($result > 0) {

      $dataSession = [
        'username' => $input['username']
      ];
      $this->session->set_userdata($dataSession);
      $this->session->set_flashdata('noticeLogin', 'Berhasil!');
      redirect(base_url('Admin/indexBerandaAdmin'));
    } else {
      $this->session->set_flashdata('noticeGagalLogin', 'Data tidak sesuai!');
      redirect(base_url('User/indexLogin'));
    }
  }

  //load logika logout
  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->set_flashdata('noticeLogout', 'Berhasil!');
    redirect(base_url('User/indexBerandaUser'));
  }
}
