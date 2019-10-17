<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class new_product extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "product.m";
        $this->load->model("product_image_model");
        $this->load->model("product_model");
        $this->load->model("basic_model");
    }

    public function index()
    {
        $viewDate = new stdClass();
        $viewDate->viewFolder = $this->viewFolder;
        $viewDate->subViewFolder = "list";

        $this->load->view("{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php", $viewDate);
    }

    public  function  new_form(){

        $viewData =new stdClass();
        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder= $this->viewFolder;
        $viewData->subViewFolder="add";
        $viewData->title = "Yeni Tema";



        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public  function  save(){

        $this->load->library("form_validation");

        //Kurallar yazılır...
        $this->form_validation->set_rules("title","urunadı","required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "{field} alanı boş bırakılamaz."
            )
        );

        //Form validation çalıştırılır...
        $validate=$this->form_validation->run();
        if ($validate)
        {

            if ($this->basic_model->insert('products',$_POST)){

                $alert = array(
                    "text" =>"Kayıt İşlemi Başarılıdır.",
                    "type" =>"success"
                );

            }
            else{

                $alert = array(
                    "text" =>"Kayıt İşlemi Başarısızdır.",
                    "type" =>"error"
                );

            }
            // İşlemin sonucunu SESSİONA yazma işlemi...
            $this->session->set_flashData("alert",$alert);

            redirect(base_url("new_product"));

        }else{

            $viewData =new stdClass();
            /** viev e gönderilecek verilerin set edilmesi */
            $viewData->viewFolder= $this->viewFolder;
            $viewData->subViewFolder="add";
            $viewData->form_error=true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
        }

        //Başarılı ise >- kayıt başlar...
        //Başarısız ise->hata gösterilir...

    }

    public function delete($id){


        $this->basic_model->delete('products','id',$id);

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
        redirect(base_url("new_product"));
    }



}

