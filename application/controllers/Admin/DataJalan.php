<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJalan extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    if($this->session->userdata('email')==""){
      redirect('index');
    }

    $this->load->model('Admin/Jalan','tbl_mhs');
      $this->load->model('Admin/DashboardAdmin','',TRUE);
      $this->load->database();
  }

	public function index()
	{
    $this->load->view('Admin/OlahData');

  }


  public function ajax_list()
      {
        $xyz=$this->session->userdata('email');
          $list = $this->tbl_mhs->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $tbl_mhs) {
              $no++;
              $row = array();
              $row[] = $no;
              $row[] = $tbl_mhs->namaJalan;
              $row[] = $tbl_mhs->namaKota;
              $row[] = $tbl_mhs->panjangjalan;
              $row[] = $tbl_mhs->fungsijalan;


              $row[] = '<a class="btn btn-primary" href="javascript:void()" title="Edit" onclick="edit_person('."'".$tbl_mhs->idJalan."'".')"><i class="fa fa-pencil-square-o"></i></a>
 <a class="btn btn-danger" href="javascript:void()" title="Edit" onclick="delete_person('."'".$tbl_mhs->idJalan."'".')"><i class="fa fa-times"></i></a>';



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

    $this->db->where('idJalan',$id);
    $this->db->delete('tbl_jalan');
          echo json_encode(array("status" => TRUE));
      }

      public function ajax_confirm($id)
      {

        $this->tbl_mhs->updateStatus($id);
          echo json_encode(array("status" => TRUE));
      }

}
