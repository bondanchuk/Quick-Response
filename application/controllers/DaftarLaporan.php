<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class DaftarLaporan extends CI_Controller {



  public function __construct(){

    parent::__construct();

    $this->load->helper('url');

    if($this->session->userdata('email')==""){

      redirect('index');

    }

      $this->load->model('UserModel');

      $this->load->model('DatatablesLaporan','tbl_mhs');



  }



	public function index()

	{

    $dataKab=$this->UserModel->getKotaKab();

  $data['kotakab']=$dataKab;

      $email=$this->session->userdata('email');

    $data['user'] = $this->UserModel->show_info($email);

		$this->load->view('DaftarLaporanUser', $data);

	}





  public function ajax_list()

      {

        $xyz=$this->session->userdata('email');

          $list = $this->tbl_mhs->get_datatables($xyz);

          $data = array();

          $no = $_POST['start'];

          foreach ($list as $tbl_mhs) {

              $no++;

              $row = array();

              $row[] = $tbl_mhs->idLaporan;

              $row[] = $tbl_mhs->tanggalLaporan;

              $row[] = $tbl_mhs->namaKota;

              $row[] = $tbl_mhs->namaJalan;



              $row[] = $tbl_mhs->status;




if($tbl_mhs->status!="Pending"){
              //add html for action

              $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void()" title="Edit" onclick="gagal('."'".$tbl_mhs->idLaporan."'".')"><i class="fa fa-check-circle" disabled></i> Selesai</a>';

}else if($tbl_mhs->status=="Pending"){
$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="save('."'".$tbl_mhs->idLaporan."'".')"><i class="fa fa-check-circle "></i> Selesai</a>';

}




              $data[] = $row;

          }



          $output = array(

                          "draw" => $_POST['draw'],

                          "recordsTotal" => $this->tbl_mhs->count_all(),

                          "recordsFiltered" => $this->tbl_mhs->count_filtered(),

                          "data" => $data,

                  );

          //output to json format

          echo json_encode($output);

      }



      public function ajax_edit($id)

      {

          $data = $this->tbl_mhs->get_by_id($id);

          echo json_encode($data);

      }



      public function ajax_add()

      {

          $data = array(

                  'Validasi' => $this->input->post('formx'),



              );

          $insert = $this->tbl_mhs->save($data);

          echo json_encode(array("status" => TRUE));

      }



      public function ajax_update($id)

      {



          $data = array(

                  'Validasi' => "Yes",

                );

          $this->tbl_mhs->update($id, $data);

          echo json_encode(array("status" => TRUE));

      }



      public function ajax_delete($id)

      {

          $this->tbl_mhs->delete_by_id($id);



	  $this->db->where('id_user',$id);

	  $this->db->delete('login_user');

          echo json_encode(array("status" => TRUE));

      }

 public function ajax_confirm($id)

      {

        $this->tbl_mhs->updateStatus($id);

          echo json_encode(array("status" => TRUE));

      }




}

