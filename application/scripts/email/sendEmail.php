<?php

$scipt_ts = date('Y-m-d H:i:s');
$command1 = "ps -ef|grep " . basename(__FILE__) . "|grep -v grep|wc -l";
print "Command1 = $command1\n";
$running1 = exec($command1);
print "Running output = $running1\n";

#$command = "ps -ef|grep " . basename(__FILE__) . "|grep -v grep|wc -l";
#print "Command = $command\n";
#$running = (int) trim($command);
#print "Running = $running\n";

if ($running1 > 2) {
    error_log("[$scipt_ts]: Script is already running. Exiting this process.");
    exit;
}

echo "[$scipt_ts]: Starting the execution of the script...\n";

include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// get not send email data
$sql = "SELECT * FROM ${table_prefix}email WHERE status = 0";

if (!$result = $edb->query($sql)) {
    throw new Exception($edb->error);
}

$pendingEmailData = array();

while ($row = $result->fetch_assoc()) {
    $pendingEmailData[] = $row;
    echo 'TO Email Id --> ' . $row['to'];
    echo 'Subject --> ' . $row['subject'];
    echo '-----------' . "\n";
}

if (count($pendingEmailData) > 0) {
    foreach ($pendingEmailData as $key => $value) {
        $emails = array(
            'to' => (!empty($value['to'])) ? explode(',', $value['to']) : "",
            'cc' => (!empty($value['cc'])) ? explode(',', $value['cc']) : "",
            'bcc' => (!empty($value['bcc'])) ? explode(',', $value['bcc']) : ""
        );
        $subject = $value['subject'];
        $body_content = $value['body_content'];

        if (sendEmail($emails, $subject, $body_content)) {
            echo 'Mail send successfully!!!' . "\n";

            $record_id = $value['id'];
            $modify_ts = date('Y-m-d H:i:s');
            $sql = "UPDATE ${table_prefix}email SET status = 1, modify_ts = '$modify_ts' WHERE id = $record_id";
            if (!$result = $edb->query($sql)) {
                echo "Error while updating the updating status in DB --> " . $edb->error;
            }
        } else {
            echo 'Failed to send mail!!!' . "\n";
        }
    }

} else {
    echo "Mails are already send successfully!!\n";
}

function sendEmail($recipient, $subject, $email_body)
{
    $mail = new PHPMailer(true);
    try {

        $mail->SMTPDebug = false;                                   // Enable verbose debug output
        $mail->isSMTP();                                        // Set mailer to use SMTP
        $mail->Host = EMAIL_SMTP_HOST;                          // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                 // Enable SMTP authentication
        $mail->Username = PHP_MAILER_USERNAME;                  // SMTP username
        $mail->Password = PHP_MAILER_PASSWORD;                  // SMTP password
        $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                      // TCP port to connect to.. 465 for SSL

        $mail->setFrom(PHP_MAILER_USERNAME, PHP_MAILER_SENDER_NAME);

        if (is_array($recipient)) {
            if (isset($recipient['to']) and !empty($recipient['to'])) {
                if (is_array($recipient['to'])) {
                    for ($i = 0; $i < count($recipient['to']); $i++) {
                        $mail->addAddress($recipient['to'][$i]);
                    }
                } else {
                    $mail->addAddress($recipient['to']);
                }
            }
            if (isset($recipient['cc']) and !empty($recipient['cc'])) {
                if (is_array($recipient['cc'])) {
                    for ($i = 0; $i < count($recipient['cc']); $i++) {
                        $mail->addCC($recipient['cc'][$i]);
                    }
                } else {
                    $mail->addCC($recipient['cc']);
                }
            }
            if (isset($recipient['bcc']) and !empty($recipient['bcc'])) {
                if (is_array($recipient['bcc'])) {
                    for ($i = 0; $i < count($recipient['bcc']); $i++) {
                        $mail->addBCC($recipient['bcc'][$i]);
                    }
                } else {
                    $mail->addBCC($recipient['bcc']);
                }
            }
        } else {
            $mail->addAddress($recipient);     // Add a recipient
        }

        // $mail->addReplyTo('info@example.com', 'Information');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $email_body;
        $mail->AltBody = $email_body;

        if ($mail->send()) {
            echo 'Message has been sent to ' . json_encode($recipient);
            return true;
        } else {
            echo '*Message has not sent to ' . json_encode($recipient);
            return false;
        }

    } catch (Exception $e) {
        echo "mail test error = " . $e->getMessage();
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

?>
