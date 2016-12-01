<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewData extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Admin/M_ListLaporan','tbl_mhs');
    $this->load->helper('url');
    if($this->session->userdata('email')==""){
      redirect('index');
    }
  //  if($this->session->userdata('email')==""){
  //    redirect('index');
//    }
      $this->load->model('Admin/DashboardAdmin','',TRUE);
      $this->load->database();
  }

	public function index()
	{
    $this->load->view('Admin/LihatData');
  }

  public function simpan(){
    $data=array('idJalan' => null,
    'namaJalan' => $this->input->post('namaJalan'),
    'panjangJalan' => $this->input->post('panjangJalan'),
    'fungsiJalan' => $this->input->post('fungsiJalan')
    );

    $idJalan = $this->input->post('namaKota');

    if($this->DashboardAdmin->simpanJalan($data, $idJalan)){
      $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><center>Upload gambar berhasil !!</center></div></div>");
    redirect('Admin/ViewData');
    }else{
      redirect('Admin/ViewData');
    }
  }
}
