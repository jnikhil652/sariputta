<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommonModel');
    }
    public function index()
    {
        $this->load->view(WEBSITE . 'form');
    }
    public function romaForm()
    {
        $postData = $this->input->post();
        $result = $this->CommonModel->iudAction('roma_candidate', 'insert', $postData);
        $response = array();
        if ($result) {
            $response = array(
                'status' => true,
                'msg' => 'insert'
            );
        } else {
            $response = array(
                'status' => false,
                'msg' => 'fail'
            );
        }
        echo json_encode($response);
    }
    public function romaniaPosition()
    {
        $postData = $this->input->post();
        return print_r($postData);
        $result = $this->CommonModel->iudAction('roma_position', 'insert', $postData);
        if ($result) {
            $response = array(
                'status' => true,
                'msg' => 'insert'
            );
        } else {
            $response = array(
                'status' => false,
                'msg' => 'fail'
            );
        }
        echo json_encode($response);
    }
}
