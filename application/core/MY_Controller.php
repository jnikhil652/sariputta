<?php
require APPPATH . '/libraries/Sendgrid.php';

class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->sendgrid = new Sendgrid();
    }

    public function sendEmail($to, $subject, $body_html, $from = null, $cc = null, $attachments = null) {
        $this->sendgrid->to = $to;
        $this->sendgrid->subject = $subject;
        $this->sendgrid->body_html = $body_html;
        $this->sendgrid->cc = $cc;
        if ($attachments and count($attachments)) {
            $this->sendgrid->attachments = $attachments;
        }
        if (isset($from)) {
            $this->sendgrid->from = $from;
        }
        $res = $this->sendgrid->sendEmail();
        return $res;
    }
}