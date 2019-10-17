<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function insert($tableName,$data){
        return $this->db->insert($tableName,$data);
    }

    public function update ($tablo,$veri,$alan,$id)
    {
        $this->db->where($alan, $id);
        $this->db->update($tablo,$veri);
    }


    public function delete ($tablo,$alan,$id)
    {
        $this->db->where($alan, $id);
        $this->db->delete($tablo);
    }


    public function getTable($table,$where = array(),$row = false){
        $this->db->select('*');
        $this->db->from($table);
        if ($where != NULL) { $this->db->where($where); }
        $query = $this->db->get();
        return ($row) ?  $query->row() :  $query->result();
    }
}