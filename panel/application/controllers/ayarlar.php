<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ayarlar extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "ayarlar.m";
        $this->load->model("ayarlar_model");
        $this->load->model("basic_model");
    }

    public function index()
    {
        $viewDate = new stdClass();
        $items = $this->basic_model->getTable('site_ayarlari');
        if ($items)
            $viewDate->subViewFolder = "update";
        else
            $viewDate->subViewFolder = "no_content";

        $viewDate->viewFolder = $this->viewFolder;


        $this->load->view("{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php", $viewDate);
    }


    public function new_form()
    {

        $viewData = new stdClass();
        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $viewData->title = "Yeni Kullanıcı";
        $viewData->jsSet = '<script src="'.base_url().'assest/assets/js/passwordmatch.js"></script>';


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
    {
            $this->ayarlar_model->add(
                array(
                    "meta1"                 => $this->input->post("meta1"),
                    "meta2"                 => $this->input->post("meta2"),
                    "meta3"                 => $this->input->post("meta3"),
                    "meta4"                 => $this->input->post("meta4"),
                    "telefon_degisim"       => $this->input->post("telefon_degisim"),
                    "sozlesme_adi"          => $this->input->post("sozlesme_adi"),
                    "sozlesme_aciklama"     => $this->input->post("sozlesme_aciklama"),
                    "banka_bilgi"           => $this->input->post("banka_bilgi"),
                )
            );

        redirect(base_url("ayarlar"));

    }

    public function update_form($id)
    {
        $viewData = new stdClass();
        /** Tablodan veri çekme  */
        $item = $this->ayarlar_model->get(
            array(
                "id" => $id
            )
        );

        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update($id)
    {

        $update = $this->ayarlar_model->update(
            array(
                "id" => $id
            ),
            array(
                "user_name" => $this->input->post("user_name"),
                "full_name" => $this->input->post("full_name"),
                "email" => $this->input->post("email"),
                "pasword" => md5($this->input->post("pasword")),

            )
        );

        $this->session->set_flashData("alert", $alert);
        redirect(base_url("ayarlar"));

    }

    public function delete($id){

        $delete =$this->ayarlar_model->delete(
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
        redirect(base_url("ayarlar"));
    }

    public function isActiveSetter($id){


        if ($id){
            $aktifmi =($this->input->post("data") ==="true") ? 1 : 0;

            $this->ayarlar_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "isActive" => $aktifmi
                )
            );
        }

    }





}