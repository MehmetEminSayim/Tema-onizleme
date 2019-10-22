<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siparis extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "siparisler.m";
        $this->load->model("siparis_model");
        $this->load->model("basic_model");
    }

    public function index()
    {
        $viewDate = new stdClass();
        $viewDate->viewFolder = $this->viewFolder;
        $viewDate->subViewFolder = "list";

        $this->load->view("{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php", $viewDate);
    }

    public function delete($id){

        $delete =$this->siparis_model->delete(
            array(
                "id" => $id

            )
        );
        if ($delete){

            $alert = array(
                "text" =>"Kayıt başarılı bir şekilde silidi.",
                "type" =>"success"
            );

        }
        else{

            $alert = array(
                "text" =>"Kayıt silinemedi.",
                "type" =>"error"
            );

        }

        $this->session->set_flashData("alert",$alert);
        redirect(base_url("siparis"));
    }







}