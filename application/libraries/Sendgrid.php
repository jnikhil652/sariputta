<?php

class Sendgrid {
    public $from;
    public $to;
    public $subject;
    public $body_html;
    public $body_text;
    public $category;
    public $cc;

    public function __construct() {
        $this->username     = SENDGRID_USERNAME;
        $this->password     = SENDGRID_PASSWORD;
        $this->template_id  = SENDGRID_TEMPLATE_ID;
        $this->url          = SENDGRID_URL;
        $this->from         = SENDGRID_SUPPORT_EMAIL;
        $this->from_name    = SENDGRID_SUPPORT_NAME;
        $this->category     = SENDGRID_DEFAULT_CATEGORY;
    }

    public function sendEmail() {
        // to address should be array('example1@sendgrid.com','example2@sendgrid.com')
        if (is_array($this->to)) {
            $to = $this->to;
        } else {
            $to = array( $this->to );
        }

        // create the json array for SMTPAPI header
        $json_string = array(
            'sub' => array(':name' => array( $this->from_name )),
            'filters' => array('templates' => array('settings' => array('enable' => 1, 'template_id' => $this->template_id))),
            'to' => $to,
            'category' => $this->category,
        );

        // create the params array for the cURL request
        $params = array(
            'api_user'    => $this->username,
            'api_key'     => $this->password,
            'x-smtpapi'   => json_encode($json_string),
            'to'          => $to[0],
            'subject'     => $this->subject,
            'html'        => $this->body_html,
            'text'        => $this->body_text,
            'from'        => $this->from,
            'cc'          => $this->cc
        );

        // Generate curl request
        $request = $this->url.'api/mail.send.json';
        $session = curl_init($request);

        // Tell curl to use HTTP POST
        curl_setopt($session, CURLOPT_POST, true);
        // Tell curl that this is the body of the POST
        curl_setopt($session, CURLOPT_POSTFIELDS, $params);
        // Tell curl not to return headers, but do return the response
        curl_setopt($session, CURLOPT_HEADER, false);

        // Tell PHP not to use SSLv3 (instead opting for TLS)
        // CURL_SSLVERSION_TLSv1_2 is available in PHP since 5.5.19 and 5.6.3
        // Set the value = 6 for older versions
        curl_setopt($session, CURLOPT_SSLVERSION, 6);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // Turn off SSL
        //curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);//New line
        //curl_setopt($session, CURLOPT_SSL_VERIFYHOST, false);//New line

        // obtain response
        $response = curl_exec($session);
        curl_close($session);

        // Error format: {"errors":["Permission denied, wrong credentials"],"message":"error"}
        // Success format: {"message":"success"}
        $res = json_decode($response);
        return $res;
    }
}
