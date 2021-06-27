<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurServicesController extends CI_Controller
{

    public function ourServices()
    {
        $this->load->view(WEBSITE . 'our-services');
    }
}