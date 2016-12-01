<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

  public function __construct()
      {
          parent::__construct();
          $this->load->helper(array('url', 'form'));
            $this->load->library(array('form_validation', 'Recaptcha', 'encrypt'));
            $this->load->model('UserModel');
              if(($this->session->userdata('email')!="")&&($this->session->userdata('role')=='Operator')){
              redirect('Admin/Dashboard');
            }
      }

	public function index()
	{

		$this->load->view('loginadmin');
	}

  public function cek_login() {
    $sha = $this->input->post('password');
    $enkripsi = sha1($sha);

$data = array('email' => $this->input->post('email'),
'password' => $enkripsi
  );
$hasil = $this->UserModel->login($data);
if ($hasil->num_rows() == 1) {
  foreach ($hasil->result() as $sess) {
    $sess_data['logged_in'] = 'Sudah Loggin';
  //	$sess_data['id_login'] = $sess->id_login;
    $sess_data['email'] = $sess->email;
    $sess_data['role'] = $sess->role;
    $this->session->set_userdata($sess_data);

  }

  if ($this->session->userdata('role')=='Operator') {
    redirect('Admin/Dashboard');
  }else{
  echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
  }

}
else {
  echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
}
}

}
