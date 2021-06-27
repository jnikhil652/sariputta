<?php
/**
 * Created by PhpStorm.
 * User: prantikd
 * Date: 27/11/19
 * Time: 11:56 AM
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Phpmailer_lib {

    public function __construct() {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load() {
        require_once(APPPATH. 'third_party/PHPMailer/vendor/autoload.php');

        $objMail = new PHPMailer(true);

        return $objMail;
    }
}