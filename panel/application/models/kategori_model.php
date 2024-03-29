<?php
class kategori_model extends CI_Model{

    public  $tableName="kategoriler";
    public function __construct()
    {
        parent::__construct();
    }

    /** Sadece istenen veriyi getirir... */
    public function get($where =array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    /**TÜM KAYIRLARI BANA GETİRECEK OLAN FONKSİYON*/
    public  function get_all($where =array(),$order ="id ASC"){

        return $this->db->where($where)->order_by($order)->get("$this->tableName")->result();
    }

    public  function add($data = array()){

        return $this->db->insert($this->tableName,$data);

    }

    /** NEREDE NEYİ KAYDEDİCEM SORUSUNUN CEVABI */
    /** WHERE KULLANIMI İSE NEREDEN SORUSU İÇİNDİR */
    public function update($where =array(),$data = array()){
        return $this->db->where($where)->update($this->tableName,$data);
    }

    public function delete($where = array()){
        return $this->db->where($where)->delete($this->tableName);
    }

}