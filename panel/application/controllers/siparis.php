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

    public function detail($id){

        $viewData = new stdClass();
        /** Tablodan veri çekme  */
        $item = $this->siparis_model->get(
            array(
                "id" => $id
            )
        );

        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "eye";
        $viewData->item = $item;
        $viewData->jsSet = '<script src="'.base_url().'assest/assets/js/pdf.js"></script>';


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }


    public function detail2(){



        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "eye";
        $viewData->item = $item;


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

        // Html çıktıyı alalım
        $html = $this->output->get_output();

        // pdf kütüphanesini yükleyelim
        $this->load->library('pdf');

        // Html içreği çağır
        $this->dompdf->loadHtml($html);

        // Opsiyonel ayarlar kağıt boyutu vs
        $this->dompdf->set_option('isRemoteEnabled', TRUE);
        $this->dompdf->set_paper('A4', 'landscape');

        $this->dompdf->render();

        $output = $this->dompdf->output();

    }









}