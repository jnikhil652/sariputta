<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManagementController extends MY_Controller
{
    public function index()
    {
        $this->load->view(WEBSITE . 'management');
    }
}
