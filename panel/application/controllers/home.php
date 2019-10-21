<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("basic_model");
    }

    public function index()
    {
         $data['siteler'] = $this->basic_model->getTable('products');
         $this->load->view('site/live_preview',$data);
    }

    function sozlesme(){
        $this->load->view('site/hizmet_sozlesme');
    }
}