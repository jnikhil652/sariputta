<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurCollaborationsController extends CI_Controller
{

    public function ourCollaborations()
    {
        $this->load->view(WEBSITE . 'our-collaborations');
    }
}