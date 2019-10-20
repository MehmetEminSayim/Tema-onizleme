<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contract extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "contract.m";
        $this->load->model("contract_model");
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
        $viewData->title = "Yeni Sözleşme";



        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }


    public  function  save(){

            $this->contract_model->add(
                array(
                    "contract_name"         => $this->input->post("contract_name"),
                    "contract_description"   => $this->input->post("contract_description"),
                )
            );

            $this->session->set_flashData("alert",$alert);
            redirect(base_url("contract"));

    }

    public function update_form($id)
    {
        $viewData = new stdClass();
        /** Tablodan veri çekme  */
        $item = $this->contract_model->get(
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

        $update = $this->contract_model->update(
            array(
                "id" => $id
            ),
            array(

                "contract_name"          => $this->input->post("contract_name"),
                "contract_description"   => $this->input->post("contract_description"),


            )
        );

        $this->session->set_flashData("alert", $alert);
        redirect(base_url("contract"));

    }

    public function delete($id){

        $delete =$this->contract_model->delete(
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
        redirect(base_url("contract"));
    }

    public function isActiveSetter($id){


        if ($id){
            $aktifmi =($this->input->post("data") ==="true") ? 1 : 0;

            $this->contract_model->update(
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