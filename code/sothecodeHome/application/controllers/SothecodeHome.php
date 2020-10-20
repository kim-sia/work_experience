<?php

defined('BASEPATH') OR exit('No direct script access allowed');
define('IMAGE_PATH', APPPATH.'../../images/');
class SothecodeHome extends CI_Controller
{
    public function index()
    {
        $this->load->view('sothecodeHome');
    }

    public function youtube()
    {
        $this->DB_Data->youtube();
    }

    public function project()
    {
        $this->DB_Data->project();
    }

    public function contact()
    {
        $this->DB_Data->contact();
    }

    public function upload()
    {
        $this->Manager->upload();
    }
}
?>