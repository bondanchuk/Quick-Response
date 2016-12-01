<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {



    public function __construct()

    {

        parent::__construct();

    }



    public function registrasiUser(){

      $sha=sha1($this->input->post('password'));

      $data=array(

      'email'=>$this->input->post('emailIn'),

      'password'=>$sha,

      'role'=> 'User'

      );

      $data2=array(

      'email'=>$this->input->post('emailIn'),

      'namaLengkap'=>$this->input->post('namaLengkap'),

      'alamat'=>$this->input->post('alamat'),

      'noTelepon'=>$this->input->post('telepon')

      );

  if ($this->db->insert('user_login',$data) && $this->db->insert('user_info',$data2)){
return TRUE;
}else{
return FALSE;
}

}









      public function cekEmail($email)

        {

            $this->db->where('email', $email);

            $result=$this->db->get('user_login')->row_array();

            if(is_array($result))

                {



                    return $result;

                }

            else

                {

                    return false;

                }

        }





        public function login($data) {

			$this->db->select('*');

      $this->db->where($data);

			$query = $this->db->get('user_login', 1);

			return $query;

		}



    function show_info($email){

$this->db->select('*');

$this->db->where('email', $email);

$query = $this->db->get('user_info');

$query_result = $query->result();

return $query_result;

}



function getKotaKab(){

    $this->db->select('*');

    $this->db->from('tbl_kota_kab');

    $query = $this->db->get();

    return $query->result();

  }



  function saveLaporan($data, $id, $idJalan){

    $this->db->set('tanggalLaporan', 'CURDATE()', FALSE);

    $this->db->set('idJalan','(SELECT idJalan from tbl_jalan where namaJalan="'.$idJalan.'")',FALSE);

    $this->db->insert('tbl_laporanuser', $data);

  }



    }

