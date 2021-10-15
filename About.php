<?php
defined('BASEPATH') or exit ('no direct script allowed');

class About extends CI_Controller{

    function construct(){
        parent:: __construct();
    }

    public function index(){
        $data['judul'] = "About Page";
        $this->load->view('view-header',$data);
        $this->load->view('view-about',$data);
        $this->load->view('view-footer',$data);
    }
}