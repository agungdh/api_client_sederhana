<?php
Class Welcome extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        // $this->API="https://apps.agungdh.com/api_mahasiswa/";
        $this->API="https://apps.agungdh.com/kemplo_raspi/api";
    }
    
    function index(){
        $data['data'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('main',$data);
    }
    
}