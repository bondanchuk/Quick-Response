<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashboardAdmin extends CI_Model {

  var $table = 'tbl_laporanuser';

  var $column = array('idLaporan', 'namaKota', 'idJalan', 'detailLaporan');





    public function __construct()

    {

        parent::__construct();

    }



    function statistik_laporan()

 {

  $sql = $this->db->query("

  select

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=1)AND (YEAR(tanggalLaporan)=2016))),0) AS `Januari`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=2)AND (YEAR(tanggalLaporan)=2016))),0) AS `Februari`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=3)AND (YEAR(tanggalLaporan)=2016))),0) AS `Maret`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=4)AND (YEAR(tanggalLaporan)=2016))),0) AS `April`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=5)AND (YEAR(tanggalLaporan)=2016))),0) AS `Mei`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=6)AND (YEAR(tanggalLaporan)=2016))),0) AS `Juni`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=7)AND (YEAR(tanggalLaporan)=2016))),0) AS `Juli`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=8)AND (YEAR(tanggalLaporan)=2016))),0) AS `Agustus`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=9)AND (YEAR(tanggalLaporan)=2016))),0) AS `September`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=10)AND (YEAR(tanggalLaporan)=2016))),0) AS `Oktober`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=11)AND (YEAR(tanggalLaporan)=2016))),0) AS `November`,

  ifnull((SELECT count(idLaporan) FROM (tbl_laporanuser)WHERE((Month(tanggalLaporan)=12)AND (YEAR(tanggalLaporan)=2016))),0) AS `Desember`

  from tbl_laporanuser GROUP BY YEAR(tanggalLaporan) ");



  return $sql;



 }





 private function _get_datatables_query()

 {

   $this->db->from($this->table);

   $this->db->select('idLaporan, tanggalLaporan, namaKota, namaJalan, detailLaporan, fotoLaporan');

//  $this->db->from('tbl_mhs');

$this->db->join('tbl_kota_kab', 'tbl_kota_kab.idKota=tbl_laporanuser.idKota');

$this->db->join('tbl_jalan', 'tbl_jalan.idJalan=tbl_laporanuser.idJalan');











     $i = 0;



     foreach ($this->column as $item) // loop column

     {

         if($_POST['search']['value']) // if datatable send POST for search

         {



             if($i===0) // first loop

             {

                 $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.

                 $this->db->like($item, $_POST['search']['value']);

             }

             else

             {

                 $this->db->or_like($item, $_POST['search']['value']);

             }



             if(count($this->column) - 1 == $i) //last loop

                 $this->db->group_end(); //close bracket

         }

         $column[$i] = $item; // set column array variable to order processing

         $i++;

     }



     if(isset($_POST['order'])) // here order processing

     {

         $this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);

     }

     else if(isset($this->order))

     {

         $order = $this->order;

         $this->db->order_by(key($order), $order[key($order)]);

     }

   /*

   $this->db->from($this->table);

//  $this->db->where('id_user',);

//        $where_clause = $this->db->get_compiled_select();



  $this->db->join('login_user', 'login_user.id_user=tbl_mhs.id_user');

$this->db->join('master_universitas', 'master_universitas.kodeUniversitas=tbl_mhs.kodeUniversitas');

$this->db->where('login_user.validasi','Yes');



$this->db->order_by('tbl_mhs.id_user','asc');



     $i = 0;

     foreach ($this->column as $item)

     {

         if($_POST['search']['value'])

             ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);

         $column[$i] = $item;

         $i++;

     }



     if(isset($_POST['order']))

     {

         $this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);

     }

     else if(isset($this->order))

     {

         $order = $this->order;

         $this->db->order_by(key($order), $order[key($order)]);

     }

     */

 }



 function get_datatables()

 {

$this->db->where('status', 'Menunggu Verifikasi');

$this->db->order_by('tanggalLaporan','desc');

     $this->_get_datatables_query();

//      $this->db->select('kodeUniversitas');



//  $this->db->where('Validasi','No');

//$this->db->where('tbl_mhs.kodeUniversitas','(SELECT kodeUniversitas from tbl_universitas where id_user="'.$xyz.'")',FALSE);



     if($_POST['length'] != -1)

            $this->db->limit($_POST['length'], $_POST['start']);

              $query = $this->db->get();

     $query_result = $query->result();

     return $query_result;



 }



 function count_filtered()

 {

     $this->_get_datatables_query();

     $this->db->where('status', 'Menunggu Verifikasi');

     $query = $this->db->get();

     return $query->num_rows();

 }



 public function count_all()

 {

     $this->db->from($this->table);

     $this->db->where('status', 'Menunggu Verifikasi');

     return $this->db->count_all_results();

 }



 public function get_by_id($id)

 {

     $this->db->select('*');

     $this->db->from($this->table);

     $this->db->join('tbl_kota_kab', 'tbl_kota_kab.idKota=tbl_laporanuser.idKota');
     $this->db->join('tbl_jalan', 'tbl_jalan.idJalan=tbl_laporanuser.idJalan');
     $this->db->join('user_info', 'user_info.email=tbl_laporanuser.email');

     $this->db->where('idLaporan',$id);

     $query = $this->db->get();

     return $query->row();

 }



 function updateStatus($id){

   $data = array(

        'status' => 'Sedang Diproses'

);

$this->db->where('idLaporan', $id);

$this->db->update('tbl_laporanuser', $data);

 }



 public function simpanJalan($data, $idJalan){

   $this->db->set('idKota','(SELECT idKota from tbl_kota_kab where namaKota="'.$idJalan.'")',FALSE);

   $this->db->set($data);

   $this->db->insert('tbl_jalan');



 }

  }

