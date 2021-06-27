<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUsController extends MY_Controller
{
    public function contactUs()
    {
        $this->load->view(WEBSITE . 'contact-us');
    }
    
    public function sendContactMail() {
        $postData = $this->input->post();
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('email', 'Email Id', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            $result = array(
                "success" => false,
                "statusMsg" => validation_errors(),
            );
        } else {
            $to      = TO_EMAIL;
            $subject = "Contact Us: " . $postData['name'];
            $message = '<strong>Name : </strong>' . $postData["name"] . '<br>' .
                    '<strong>Phone : </strong>' . $postData["phone"] . '<br>' .
                    '<strong>Email : </strong>' . $postData["email"] . '<br>' .
                    '<strong>Message : </strong>' . $postData["message"] . '<br>';

            if ($this->sendEmail($to, $subject, $message)) {
                $result = array(
                    'success' => true,
                    'statusMsg' => "Mail send successfully..!!"
                );
            } else {
                $result = array(
                    'success' => false,
                    'statusMsg' => $this->email->print_debugger()
                );
            }
        }
        echo json_encode($result);
    }

    public function sendEnquiryMail() {
        $postData = $this->input->post();
        $this->form_validation->set_rules('name', 'Full name', 'required');
        $this->form_validation->set_rules('email', 'Email Id', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            $result = array(
                "success" => false,
                "statusMsg" => validation_errors(),
            );
        } else {
            $to      = TO_EMAIL;
            $subject = "Enquiry: " . $postData['name'];
            $message = '<strong>Name : </strong>' . $postData["name"] . '<br>' .
                    '<strong>Phone : </strong>' . $postData["phone"] . '<br>' .
                    '<strong>Email : </strong>' . $postData["email"] . '<br>' .
                    '<strong>Message : </strong>' . $postData["message"] . '<br>';
            
            if ($this->sendEmail($to, $subject, $message)) {
                $result = array(
                    'success' => true,
                    'statusMsg' => "Mail send successfully..!!"
                );
            } else {
                $result = array(
                    'success' => false,
                    'statusMsg' => $this->email->print_debugger()
                );
            }
        }
        echo json_encode($result);
    }
}