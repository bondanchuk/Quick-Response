<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PengaduanModel extends CI_Model {



    public function __construct()
    {
        parent::__construct();
    }

    function getbyidLaporan($id){
      $this->db->where('idLaporan', $id);
      $query = $this->db->get('tbl_laporanuser');
      return $query;
    }

    function getNamaJalan($id){
      $this->db->select('idJalan');
      $this->db->where('idLaporan', $id);//mengambil data jembatan berdasarkan id_jembatan
      $query = $this->db->get('tbl_laporanuser');
      return $query;
    }

    function getJalan($id){
      $this->db->select('namaJalan, idJalan');
     $this->db->from('tbl_jalan');
     $this->db->like("namaJalan", $id);
    return $this->db->get()->result_array();
    }


}
