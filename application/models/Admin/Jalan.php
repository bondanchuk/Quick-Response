<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jalan extends CI_Model {
  var $table = 'tbl_jalan';
  var $column = array('idJalan','namaJalan', 'namaKota', 'panjangjalan', 'fungsijalan');


    public function __construct()
    {
        parent::__construct();
    }

    private function _get_datatables_query()
    {
      $this->db->from($this->table);
      $this->db->select('idJalan,namaJalan, namaKota, panjangjalan, fungsijalan');
   //  $this->db->from('tbl_mhs');
   $this->db->join('tbl_kota_kab', 'tbl_kota_kab.idKota=tbl_jalan.idKota');





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
        $this->db->join('tbl_kota_kab', 'tbl_kota_kab.idKota=tbl_jalan.idKota');
        $this->db->where('idJalan',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function delete_by_id($id)
    {
        $this->db->where('idJalan', $id);
        $this->db->delete($this->table);
    }

    public function updateStatus($id){

      $data = array('namaJalan' => $this->input->post('id'),
      'panjangJalan' => $this->input->post('tgl'),
      'fungsiJalan' => $this->input->post('namaKota')
      );

      $namaKota=$this->input->post('nama');
      $this->db->set('idKota','(SELECT idKota from tbl_kota_kab where namaKota="'.$namaKota.'")',FALSE);
      $this->db->where('idJalan', $id);
      $this->db->update('tbl_jalan', $data);
    }
  }
