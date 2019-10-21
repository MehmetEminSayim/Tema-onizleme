<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Card extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("basic_model");
    }

    public function urun()
    {
       print_r($_GET);
    }
}