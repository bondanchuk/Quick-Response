<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    if($this->session->userdata('email')==""){
      redirect('index');
    }
//    }
      $this->load->model('Admin/DashboardAdmin','',TRUE);
      $this->load->database();
  }

	public function index()
	{
    foreach($this->DashboardAdmin->statistik_laporan()->result_array() as $row)
  {
   $data['grafik'][]=(float)$row['Januari'];
   $data['grafik'][]=(float)$row['Februari'];
   $data['grafik'][]=(float)$row['Maret'];
   $data['grafik'][]=(float)$row['April'];
   $data['grafik'][]=(float)$row['Mei'];
   $data['grafik'][]=(float)$row['Juni'];
   $data['grafik'][]=(float)$row['Juli'];
   $data['grafik'][]=(float)$row['Agustus'];
   $data['grafik'][]=(float)$row['September'];
   $data['grafik'][]=(float)$row['Oktober'];
   $data['grafik'][]=(float)$row['November'];
   $data['grafik'][]=(float)$row['Desember'];
  }

		$this->load->view('Admin/OperatorArea', $data);
	}
  public function logout() {
		$this->session->unset_userdata('email');
	//$this->session->unset_userdata('role');
	session_destroy();
	redirect('index');
}
}
