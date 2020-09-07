<?php

class Species extends CI_Controller
{

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->API = "https://swapi.dev/api/species/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $json1 = json_decode($this->curl->simple_get($this->API . "?page=1"), true);
        $json2 = json_decode($this->curl->simple_get($this->API . "?page=2"), true);
        $json3 = json_decode($this->curl->simple_get($this->API . "?page=3"), true);
        $json4 = json_decode($this->curl->simple_get($this->API . "?page=4"), true);

        $arrayAll = [];
        $arrayAll = array_merge($json1['results'], $json2['results'], $json3['results'], $json4['results']);
        $data["species"] = $arrayAll;

        $this->load->library('curl');
        $this->load->view("templates/topbar");
        $this->load->view("admin/species", $data);
        $this->load->view("templates/footer");
    }
}
