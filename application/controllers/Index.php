<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

  public function __construct()
      {
          parent::__construct();
      $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'Recaptcha'));
        $this->load->model('PengaduanModel');
        $this->load->model('DatatablesLaporan','tbl_mhs');

        if(($this->session->userdata('email')!="")&&($this->session->userdata('role')=='User')){
        redirect('Dashboard');
      }
      }

	public function index()
	{
    $data = array(
           'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
           'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
       );
		$this->load->view('Vindex', $data);
	}

  public function ajax_list()
      {
        $xyz=$this->session->userdata('email');
          $list = $this->tbl_mhs->get_datatablesIndex();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $tbl_mhs) {
              $no++;
              $row = array();
              $row[] = $no;
              $row[] = $tbl_mhs->tanggalLaporan;
              $row[] = $tbl_mhs->namaKota;
              $row[] = $tbl_mhs->namaJalan;
                $row[] = $tbl_mhs->status;
              $row[] = '<img class="img-rounded" id="img_logo"  src="/img/'.$tbl_mhs->fotoLaporan.'">';

              $row[] = '<a class="btn btn-sm btn-primary" href="#map-canvas" title="Edit" onclick="viewmarkerjembatan('."'".$tbl_mhs->idLaporan."'".')"><i class="fa fa-search"></i> Lihat Lokasi</a>';


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

      public function viewMarker($id){
        if (!$this->input->is_ajax_request()) {
          show_404();
        }else{
          if ($this->PengaduanModel->getbyidLaporan($id)->num_rows()!=null){
            $status = 'success';
				    $msg = $this->PengaduanModel->getbyidLaporan($id)->result();
				    $datajembatan = $this->PengaduanModel->getNamaJalan($id)->result();
          }else{
            $status = 'error';
  				  $msg = 'data tidak ditemukan';
				    $datajembatan = null;
          }
          $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>$status,'msg'=>$msg,'datajembatan'=>$datajembatan)));
        }
      }
}
