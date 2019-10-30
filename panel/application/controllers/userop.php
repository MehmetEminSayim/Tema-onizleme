<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
class userop extends CI_Controller{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "users.m";
        $this->load->model("users_model");
        $this->load->model("basic_model");
    }
    public  function login(){

        if ( $this->session->userdata('is_login')){
            redirect(base_url());
        }

        $viewDate = new stdClass();
        $viewDate->viewFolder = $this->viewFolder;
        $viewDate->subViewFolder = "login";

        $this->load->view("{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php", $viewDate);

    }

    public function do_login(){


        $mail = $this->input->post('user_email');
        $password = md5($this->input->post('user_pasword'));

       if ($this->basic_model->getTable('users',['email' => $mail],true)){

           if($this->basic_model->getTable('users',['email' => $mail,'pasword' => $password],true)){
                $oturum = $this->basic_model->getTable('users',['email' => $mail,'pasword' => $password],true);
                $sessionData = json_decode(json_encode($oturum), true);
                $sessionData['is_login'] = 1;
                $this->session->set_userdata($sessionData);
                if ($oturum->level == 'admin'){
                    redirect(base_url('admin'));
                }elseif($oturum->level == 'user'){
                    redirect($_SERVER['HTTP_REFERER']);
                }

           }

           else{
               $this->session->set_flashdata('login', 'pass_error');
                redirect(base_url('login'));
           }

       }else{
           $this->session->set_flashdata('login', 'mail_error');
           redirect(base_url('login'));
       }
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('login', 'logout');
        redirect(base_url(''));
    }

    public function send_mail(){
        $mailayar = $this->basic_model->getRow('mail_ayar',['id' => 1]);

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
        $this->email->from("xxxxx@gmail.com", $mailayar->sender_name);
        $this->email->to("mehmin3589@gmail.com");
        $this->email->subject("Fbar bilgilendirme");
        $this->email->message("Üyeliğiniz aktif olmuştur.");

        $send = $this->email->send();


        if ($send){
            echo "e posta gönderildi";
        }else{
            echo $this->email->print_debugger();
        }
    }

    public  function forget_password(){

        if ( $this->session->userdata('is_login')){
            redirect(base_url());
        }

        $viewDate = new stdClass();
        $viewDate->viewFolder = $this->viewFolder;
        $viewDate->subViewFolder = "forget_password";

        $this->load->view("{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php", $viewDate);

    }

    public function reset_password(){
        echo "sıfırlandı";
    }
}
