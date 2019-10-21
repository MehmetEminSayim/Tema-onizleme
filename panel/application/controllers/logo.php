<?php
class logo extends CI_Controller
{

    public $viewFolder="";
    public  function __construct()
    {
        parent::__construct();
        $this->viewFolder="logo.m";
        $this->load->model("logo_model");
        $this->load->model("basic_model");
    }

    public  function  index(){

        $viewData =new stdClass();

        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder= $this->viewFolder;
        $viewData->subViewFolder="list";

        $viewData->title = "Ürün Liste";


       $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }


    public  function  new_form(){

        $viewData =new stdClass();
        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder= $this->viewFolder;
        $viewData->subViewFolder="add";
        $viewData->title = "Yeni ürün";



        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public  function  save(){

                $file_name = pathinfo($_FILES["image"]["name"], PATHINFO_FILENAME) . "." . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

                $config["allowed_types"] = "jpg|jpeg|png";
                $config["upload_path"]  = "uploads";
                $config["file_name"] = $file_name;

                $this->load->library("upload" ,$config);

                $upload= $this->upload->do_upload("image");

                if ($upload){
                    $uploaded_file=$this->upload->data("file_name");
                    $this->logo_model->add(
                        array(
                            "logo_adi"          => $this->input->post("logo_adi"),
                            "image"                  =>$uploaded_file
                        )
                    );
                }else{

                    $this->session->set_flashData("alert",$alert);

                    redirect(base_url("logo/new_form"));


                }

            redirect(base_url("logo"));

    }

    public function delete($id){

        $delete =$this->logo_model->delete(
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
        redirect(base_url("logo"));
    }




}