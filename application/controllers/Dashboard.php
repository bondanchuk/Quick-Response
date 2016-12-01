<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    if($this->session->userdata('email')==""){
      redirect('index');
    }
      $this->load->model('UserModel');
      $this->load->model('PengaduanModel');
  }

	public function index()
	{
    $dataKab=$this->UserModel->getKotaKab();
  $data['kotakab']=$dataKab;
      $email=$this->session->userdata('email');
    $data['user'] = $this->UserModel->show_info($email);
		$this->load->view('UserArea', $data);
	}
  public function logout() {
		$this->session->unset_userdata('email');
	  $this->session->unset_userdata('role');
	session_destroy();
	redirect('index');
}


public function UploadLaporan(){

  $this->load->library('form_validation');

  $this->form_validation->set_rules('namaJalan', '', 'trim|required');
    $this->form_validation->set_rules('judulLaporan', '', 'trim|required');
  $this->form_validation->set_rules('detailLaporan', '', 'trim|required');


    if($this->form_validation->run()== FALSE){
      $dataKab=$this->UserModel->getKotaKab();
    $data['kotakab']=$dataKab;
        $email=$this->session->userdata('email');
      $data['user'] = $this->UserModel->show_info($email);
      $this->load->view('UserAreA', $data);
    }else{
      $upload_path_url = base_url().'images/';
  		$id = $this->session->userdata('email');
  		 $this->load->library('upload');
          $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
          $config['upload_path'] = FCPATH.'/img/'; //path folder
          $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
          $config['max_size'] = '3048'; //maksimum besar file 2M

          $config['file_name'] = $nmfile; //nama yang terupload nantinya
  		 $this->upload->initialize($config);
$filenam=$_FILES['filefoto']['name'];
      if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {


        $gbr = $this->upload->data();
         $data = array('idLaporan' => null,
         'email' => $id,
         'idKota'=>$this->input->post('Kabupaten'),
         'judulLaporan' => $this->input->post('judulLaporan'),
         'detailLaporan' => $this->input->post('detailLaporan'),
         'latitude' => $this->input->post('latitude'),
         'longitude' => $this->input->post('longitude'),
         'status' => "Menunggu Verifikasi",
         'fotoLaporan' =>$gbr['file_name']);


         $idJalan = $this->input->post('namaJalan');










               $this->UserModel->saveLaporan($data,$id, $idJalan); //akses model untuk menyimpan ke database

               $config2['image_library'] = 'gd2';
               $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
               $config2['new_image'] = FCPATH.'/img/resize/'; // folder tempat menyimpan hasil resize

               $config2['height'] = 100;

               $config2['width'] = 100; //lebar setelah resize menjadi 100 px
               $this->load->library('image_lib',$config2);
               if ( !$this->image_lib->resize()){
               $this->session->set_flashdata('errors', "pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><center>".$this->image_lib->display_errors('', '')."</center></div></div>");

             }
               //pesan yang muncul jika berhasil diupload pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\"><center>Laporan Sudah Dikirim</center></div></div>");
               redirect('Dashboard'); //jika berhasil maka akan ditampilkan view vupload
           }else{
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div  class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Laporan Gagal Dikirim</div></div>");
               redirect('Dashboard'); //jika gagal maka akan ditampilkan form upload
           }
       }
    }
}

public function cari(){
  $keyword=$this->input->post('keyword');
        $data=$this->PengaduanModel->getJalan($keyword);
        echo json_encode($data);  //data array yang telah kota deklarasikan dibawa menggunakan json
}
}
