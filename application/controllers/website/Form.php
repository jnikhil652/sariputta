<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function index()
    {
        $this->load->view(WEBSITE . 'form');
    }
}
