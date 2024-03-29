<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DatatablesLaporan extends CI_Model {

  var $table = 'tbl_laporanuser';

  var $column = array('idLaporan', 'namaKota', 'namaJalan', 'status');





    public function __construct()

    {

        parent::__construct();

    }



    private function _get_datatables_query()

    {

      $this->db->from($this->table);

      $this->db->select('idLaporan, tanggalLaporan, namaKota, namaJalan, status');

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



    function get_datatables($xyz)

    {



$this->db->where('email',$xyz);

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

//$this->db->select('*');

        $query = $this->db->get();

        return $query->num_rows();

    }



    public function count_all()

    {

        $this->db->from($this->table);

        return $this->db->count_all_results();

    }



    public function get_by_id($id)

    {

        $this->db->select('*');

        $this->db->from($this->table);

        $this->db->join('tbl_kota_kab', 'tbl_kota_kab.idKota=tbl_laporanuser.idKota');

        $this->db->where('idLaporan',$id);

        $query = $this->db->get();

        return $query->row();

    }



    private function _get_datatables_queryIndex()

    {

      $this->db->from($this->table);

      $this->db->select('idLaporan,tanggalLaporan, namaKota, namaJalan, status, fotoLaporan');

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



    }



    function get_datatablesIndex()

    {

//$this->db->where('tbl_mhs.kodeUniversitas','(SELECT kodeUniversitas from tbl_universitas where id_user="'.$xyz.'")',FALSE);

$this->db->order_by('tanggalLaporan','desc');

        $this->_get_datatables_queryIndex();

        if($_POST['length'] != -1)

               $this->db->limit($_POST['length'], $_POST['start']);

                 $query = $this->db->get();

        $query_result = $query->result();

        return $query_result;



    }

function updateStatus($id){

   $data = array(

        'status' => 'Terselesaikan'

);

$this->db->where('idLaporan', $id);

$this->db->update('tbl_laporanuser', $data);

 }


  }

