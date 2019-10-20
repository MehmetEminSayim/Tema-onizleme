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

        if ( $sessionData['is_login'] = 1){
            redirect(base_url());
        }

        $viewDate = new stdClass();
        $viewDate->viewFolder = $this->viewFolder;
        $viewDate->subViewFolder = "login";

        $this->load->view("{$viewDate->viewFolder}/{$viewDate->subViewFolder}/index.php", $viewDate);

    }
    public function do_login(){

        if ( $sessionData['is_login'] = 1){
            redirect(base_url());
        }

        $mail = $this->input->post('user_email');
        $password = $this->input->post('user_pasword');

       if ($this->basic_model->getTable('users',['email' => $mail],true)){

           if($this->basic_model->getTable('users',['email' => $mail,'pasword' => $password],true)){
                $oturum = $this->basic_model->getTable('users',['email' => $mail,'pasword' => $password],true);
                $sessionData = json_decode(json_encode($oturum), true);
                $sessionData['is_login'] = 1;
                $this->session->set_userdata($sessionData);
               redirect(base_url('welcome'));
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
        redirect(base_url('login'));
    }
}
