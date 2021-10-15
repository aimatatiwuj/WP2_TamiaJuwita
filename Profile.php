<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Profile extends CI_Controller{

    function construct(){
        parent:: __construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "Profil Page";
        $this->load->view('view-header',$data);
        $this->load->view('view-profile',$data);
        $this->load->view('view-footer',$data);
    }
}