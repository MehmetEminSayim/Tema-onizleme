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
        $this->form_validation->set_rules("title","temaadı","required|trim");

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
                $folder_name = $this->input->post("title");
                $path         = "files/$folder_name";

                $creat=mkdir($path,"0777");
                if ($creat){
                    echo "dosya oluştu";
                }
                else{
                    echo "oluşmadı";
                }

            }
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

    public function update_form($id){
        $viewData =new stdClass();
        /** Tablodan veri çekme  */
        $item=$this->product_model->get(
            array(
                "id"  => $id
            )
        );

        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder= $this->viewFolder;
        $viewData->subViewFolder="update";
        $viewData->item= $item;


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public  function  update($id){

        $this->load->library("form_validation");

        //Kurallar yazılır...
        $this->form_validation->set_rules("title","Adı","required|trim");

        $this->form_validation->set_message(
        /** bu kaydı bulduğunda alttaki bilgiler ile değiştir */

            array(
                "required" => "{field} alanı boş bırakılamaz."
            )
        );

        //Form validation çalıştırılır...
        $validate=$this->form_validation->run();
        if ($validate)
        {
            $update = $this->product_model->update(
                array(
                    "id"  => $id
                ),
                array(
                    "title"         => $this->input->post("title"),
                    "url"           => $this->input->post("url"),
                    "tema_fiyat"   => $this->input->post("tema_fiyat"),
                    "tema_kategori"   => $this->input->post("tema_kategori"),
                   )
            );
            if ($update){

                $alert = array(
                    "text" =>"Güncelleme İşlemi Başarılıdır.",
                    "type" =>"success"
                );

            }
            else{

                $alert = array(
                    "text" =>"Güncelleme İşlemi Başarılıdır.",
                    "type" =>"error"
                );

            }

            $this->session->set_flashData("alert",$alert);
            redirect(base_url("new_product"));

        }else{

            $viewData =new stdClass();
            /** Tablodan veri çekme  */
            $item=$this->product_model->get(
                array(
                    "id"  => $id
                )
            );


            /** viev e gönderilecek verilerin set edilmesi */
            $viewData->viewFolder= $this->viewFolder;
            $viewData->subViewFolder="update";
            $viewData->form_error=true;
            $viewData->item = $item;


            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
        }

        //Başarılı ise >- kayıt başlar...
        //Başarısız ise->hata gösterilir...

    }

    public function image_form($id){

        $viewData =new stdClass();
        /** viev e gönderilecek verilerin set edilmesi */
        $viewData->viewFolder= $this->viewFolder;
        $viewData->subViewFolder="image";

        $viewData->item=$this->product_model->get(
            array(
                "id"  => $id
            )

        );
        $viewData->item_images = $this->product_image_model->get_all(
            array(
                "tema_id" => $id
            )
        );

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index",$viewData);

    }

    public  function image_upload($id){

        $file_name =pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"]  = "uploads";
        $config["file_name"] = $file_name;

        $this->load->library("upload" ,$config);

        $upload= $this->upload->do_upload("file");

        if ($upload){

            $uploaded_file=$this->upload->data("file_name");
            $this->product_image_model->add(
                array(
                    "img_url" => $uploaded_file,
                    "tema_id" => $id

                )
            );

        }else{
            echo "işlem başarısız";
        }
    }

    public function refresh_image_list($id){

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item_images = $this->product_image_model->get_all(
            array(
                "tema_id"    => $id
            )
        );

        $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_element/image_list", $viewData, true);

        echo $render_html;

    }

    public function imageDelete($id, $parent_id){

        $fileName = $this->product_image_model->get(
            array(
                "id" => $id
            )
        );

        $delete =$this->product_image_model->delete(
            array(
                "id" => $id

            )
        );


        if ($delete)
        {
            unlink("uploads/$fileName->img_url");
            redirect(base_url("new_product/image_form/$parent_id"));
        }
        else
        {
            redirect(base_url("new_product/image_form/$parent_id"));
        }
    }


}

