<?php

class Film extends CI_Controller
{

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->API = "https://swapi.dev/api/films/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $json = json_decode($this->curl->simple_get($this->API), true);
        
        $data["film"] = $json['results'];
        $this->load->library('curl');
        $this->load->view("templates/topbar");
        $this->load->view("admin/film", $data);
        $this->load->view("templates/footer");
    }
}
