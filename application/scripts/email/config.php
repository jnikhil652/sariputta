<?php
/**
 * User: Prashant
 * Date: 18/12/19
 * Time: 11:40 AM
 */

// Allow the script only from CLI
(PHP_SAPI !== 'cli' || isset($_SERVER['HTTP_USER_AGENT'])) && die('Access denied');
define('BASEPATH',dirname(dirname(dirname(__FILE__))));
define('ENVIRONMENT','production');

// require_once(dirname(dirname(dirname(__FILE__))).'/application/libraries/Phpmailer_lib.php');
require_once(dirname(dirname(dirname(__FILE__))).'/application/third_party/PHPMailer/vendor/autoload.php');
include(dirname(dirname(dirname(__FILE__))).'/application/config/database.php');

// PHP Mailer related configurations
define('EMAIL_SMTP_HOST', 'smtp.office365.com;');
define('PHP_MAILER_USERNAME', 'donotreply@profferfish.com');
define('PHP_MAILER_PASSWORD', 'PF7oct2019');
define('PHP_MAILER_SENDER_NAME', 'Profferfish');
define('ADMIN_EMAIL', 'info@profferfish.com');

// database configurations
define('DB_NAME', $db['default']['database']);
define('DB_USER', $db['default']['username']);
define('DB_PASSWORD', $db['default']['password']);
define('DB_HOST', $db['default']['hostname']);
$table_prefix = 'pf_';

// Create the mysqli db connection handle for new db
$edb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$edb) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
