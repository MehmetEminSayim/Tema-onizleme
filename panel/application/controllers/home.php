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

    function save(){
        $data =  $_POST;
        unset($data['0']);

      $telno = "90".$_POST['telefon_no'];

        if ($this->basic_model->insert('kullanici_bilgileri',$data)){

            /**
            try {
               $client = new SoapClient("http://soap.netgsm.com.tr:8080/Sms_webservis/SMS?wsdl");

               $msg  = 'test message';
               $gsm  = array($telno);


               $Result = $client -> smsGonder1NV2(
                   array(
                       'username'=>'08503041749',
                       'password' => 'Ct7354095',
                       'header' => '5305011771',
                       'msg' => 'TEST',
                       'gsm' => $gsm,
                       'filter' => '',
                       'startdate'  => '',
                       'stopdate'  => '',
                       'encoding' => ''  )
                        );

           } catch (Exception $exc)
           {
               // Hata olusursa yakala
               echo "Soap Hatasi Olustu: " . $exc->getMessage();
           }*/
           $this->session->set_flashData('success','yes');
           redirect(base_url("home"));
       }
       else{
           $this->session->set_flashData('error','no');
           redirect(base_url("error"));

       }
    }

    function urun_tema(){
        $tema = $_POST['temaid'];

            echo json_encode($this->basic_model->get_productViaCat($tema));

    }


}