<?php

class People extends CI_Controller
{

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->API = "https://swapi.dev/api/people/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $json1 = json_decode($this->curl->simple_get($this->API."?page=1"), true);
        $json2 = json_decode($this->curl->simple_get($this->API."?page=2"), true);
        $json3 = json_decode($this->curl->simple_get($this->API."?page=3"), true);
        $json4 = json_decode($this->curl->simple_get($this->API."?page=4"), true);
        $json5 = json_decode($this->curl->simple_get($this->API."?page=5"), true);
        $json6 = json_decode($this->curl->simple_get($this->API."?page=6"), true);
        $json7 = json_decode($this->curl->simple_get($this->API."?page=7"), true);
        $json8 = json_decode($this->curl->simple_get($this->API."?page=8"), true);
        $json9 = json_decode($this->curl->simple_get($this->API."?page=9"), true);

        $arrayAll = [];
        $arrayAll = array_merge($json1['results'],$json2['results'],$json3['results'],$json4['results'],$json5['results'],$json6['results'],$json7['results'],$json8['results'],$json9['results']);
        $data['people'] = $arrayAll;
        
        $this->load->library('curl');
        $this->load->view("templates/topbar");
        $this->load->view("admin/people", $data);
        $this->load->view("templates/footer");
    }
}
