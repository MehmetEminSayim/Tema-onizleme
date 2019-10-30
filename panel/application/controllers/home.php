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
        $data['satin_alan'] = $this->session->userdata('id');
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

    function save2(){
             $udata['full_name'] = $_POST['full_name'];
             $udata['email'] = $_POST['email'];
             $udata['pasword'] = md5($_POST['pasword']);
             $udata['level'] = 'user';

             $odata['telefon_no'] = $_POST['telefon_no'];
             $odata['sozlesme_kabul'] = $_POST['sozlesme_kabul'];
             $odata['tema'] = $_POST['tema'];
             $odata['domain'] = $_POST['domain'];
             $odata['ns_alanı'] = $_POST['ns_alanı'];
             $odata['odeme_tipi'] = $_POST['odeme_tipi'];


        if ($this->basic_model->getRow('users',['email' => $_POST['email']])){
            redirect(base_url(''));
        }else{
            $this->basic_model->insert('users', $udata);
            $userID = $this->db->insert_id() ;
        }

        $odata['satin_alan'] = $userID;
        $odata['telefon_no'] = "90".$odata['telefon_no'];

        if ($this->basic_model->insert('kullanici_bilgileri',$odata)){

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

            //mail göndericek...
            $config = array(
                "protocol"   => "smtp",
                "smtp_host"  => $mailayar->host,
                "smtp_port"  => $mailayar->port,
                "smtp_user"  => $mailayar->mail,
                "smtp_pass"  => $mailayar->password,
                "starttls"   => true,
                "charset"    => "utf-8",
                "mailtype"   => "html",
                "wordwrap"   => true,
                "newline"    => "\r\n"
            );
            $this->load->library("email",$config);
            $this->email->from($mailayar->mail, "FBAR");
            $this->email->to($user->email);
            $this->email->subject($mailayar->sender_name);
            $this->email->message("Üyeliginiz Aktif Hale Gelmiştir.");

            $this->email->send();

            $this->session->set_flashData('success','yes');
            $oturum = $this->basic_model->getTable('users',['id' => $userID],true);
            $sessionData = json_decode(json_encode($oturum), true);
            $sessionData['is_login'] = 1;
            $this->session->set_userdata($sessionData);
            redirect(base_url(''));

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