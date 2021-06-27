<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HigherEducationController extends CI_Controller
{

    public function higher()
    {
        $this->load->view(WEBSITE . 'higher');
    }

    public function paramedical()
    {
        $this->load->view(WEBSITE . 'paramedical');
    }

    public function mbbsabrod()
    {
        $this->load->view(WEBSITE . 'mbbsabrod');
    }
    public function medicalindia()
    {
        $this->load->view(WEBSITE . 'medicalindia');
    }
    public function stepapp()
    {
        $this->load->view(WEBSITE . 'stepapp');
    }
    public function try()
    {
        $this->load->view(WEBSITE . 'try');
    }
    public function pgp()
    {
        $this->load->view(WEBSITE . 'pgp');
    }
    public function pgdm()
    {
        $this->load->view(WEBSITE . 'pgdm');
    }
    public function probe()
    {
        $this->load->view(WEBSITE . 'probe');
    }
    public function cfp()
    {
        $this->load->view(WEBSITE . 'cfp');
    }
    public function placement()
    {
        $this->load->view(WEBSITE . 'placement');
    }
    public function overseas()
    {
        $this->load->view(WEBSITE . 'overseas');
    }
     public function usa()
    {
        $this->load->view(WEBSITE . 'usa');
    }
     public function uk()
    {
        $this->load->view(WEBSITE . 'uk');
    }
     public function canada()
    {
        $this->load->view(WEBSITE . 'canada');
    }
     public function australia()
    {
        $this->load->view(WEBSITE . 'australia');
    }
     public function germany()
    {
        $this->load->view(WEBSITE . 'germany');
    }
    public function career()
    {
        $this->load->view(WEBSITE . 'career');
    }
    public function IndianAbacus()
    {
        $this->load->view(WEBSITE . 'videos');
    }
    public function terms()
    {
        $this->load->view(WEBSITE . 'terms');
    }
    public function privacy()
    {
        $this->load->view(WEBSITE . 'privacy');
    }
}