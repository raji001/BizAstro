<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if($_POST["ViruName"] !== "" && $_POST["ViruEmail"] !== "") {
    $ViruName = $_POST["ViruName"];
    $ViruEmail = $_POST["ViruEmail"];
    $ViruSubject = $_POST["ViruMessage"];
    $ViruNumber = $_POST["ViruNumber"];
    $bodymessage = "<strong>Name:</strong> " . $ViruName . "<br><strong>Email:</strong> " .$ViruEmail . "<br><strong>mobile no:</strong> " . $ViruNumber . "<br><strong>Message:</strong> " . $ViruSubject;

    try {
        //Server settings                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'woodblack686@gmail.com';                     //SMTP username
        $mail->Password   = 'axkhlfnmdllrsxjf';                               //SMTP password
        $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('woodblack686@gmail.com', 'shelton');
        $mail->addAddress($ViruEmail, $ViruName);     //Add a recipient               //Name is optional

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $bodymessage;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->SMTPDebug = 1;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}