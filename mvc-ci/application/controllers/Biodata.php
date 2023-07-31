<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function dataPribadi()
    {
        $this->load->view('Biodata/biodata');
    }
}
