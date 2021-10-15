<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Homepage extends CI_Controller{

    function construct(){
        parent:: __construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "Home Page";
        $this->load->view('view-header',$data);
        $this->load->view('view-homepage',$data);
        $this->load->view('view-footer',$data);
    }
}