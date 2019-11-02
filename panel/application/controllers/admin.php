<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin
    extends CI_Controller {

    public  $viewFolder="";

    public function __construct()
    {

        parent::__construct();
        $this->viewFolder="dasbordum.v";
        if ($this->session->userdata('level') != 'admin'){
            redirect(base_url('kullanici_paneli'));
        }
    }

    public function index()
    {

        $viewDate=new stdClass();
        $viewDate->viewFolder=$this->viewFolder;
        $viewDate->subViewFolder="list";

        $this->load->view("/{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php",$viewDate);
    }


}
