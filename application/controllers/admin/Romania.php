<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Romania extends MY_Controller
{

    public function index()
    {
        $this->load->view(ADMIN . 'romania');
    }
}
