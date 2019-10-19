<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
class userop extends CI_Controller{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "users.m";
        $this->load->model("users_model");
        $this->load->model("basic_model");
    }
    public  function login(){

        $viewDate = new stdClass();
        $viewDate->viewFolder = $this->viewFolder;
        $viewDate->subViewFolder = "login";

        $this->load->view("{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php", $viewDate);

    }
}
