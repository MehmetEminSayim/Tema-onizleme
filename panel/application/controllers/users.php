<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "users.m";
        $this->load->model("users_model");
        $this->load->model("basic_model");
    }

    public function index()
    {
        $viewDate = new stdClass();
        $viewDate->viewFolder = $this->viewFolder;
        $viewDate->subViewFolder = "list";

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
        $this->basic_model->insert('users', $_POST);
        redirect(base_url('users'));
    }

    public function update_form($id)
    {
        $viewData = new stdClass();
        /** Tablodan veri çekme  */
        $item = $this->users_model->get(
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

    public function update_pasword_form($id)
    {
        $viewData = new stdClass();
        /** Tablodan veri çekme  */
        $item = $this->users_model->get(
            array(
                "id" => $id
            )
        );

        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "pasword";
        $viewData->item = $item;
        $viewData->jsSet = '<script src="'.base_url().'assest/assets/js/passwordmatch.js"></script>';


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update($id)
    {

        $update = $this->users_model->update(
            array(
                "id" => $id
            ),
            array(
                "user_name" => $this->input->post("user_name"),
                "full_name" => $this->input->post("full_name"),
                "email" => $this->input->post("email"),
                "pasword" => $this->input->post("pasword"),
            )
        );

        $this->session->set_flashData("alert", $alert);
        redirect(base_url("users"));

    }

    public function update_pasword($id)
    {

        $update = $this->users_model->update(
            array(
                "id" => $id
            ),
            array(
                "pasword" => $this->input->post("pasword"),
                "re_pasword" => $this->input->post("re_pasword"),
            )
        );

        $this->session->set_flashData("alert", $alert);
        redirect(base_url("users"));

    }

    public function delete($id){

        $delete =$this->users_model->delete(
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
        redirect(base_url("users"));
    }

    public function isActiveSetter($id){


        if ($id){
            $aktifmi =($this->input->post("data") ==="true") ? 1 : 0;

            $this->users_model->update(
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