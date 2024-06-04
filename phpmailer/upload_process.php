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

$Dupload = $_FILES["uploadFile"]["name"];
$imageFileType = strtolower(pathinfo($Dupload,PATHINFO_EXTENSION));
$uploadName = $_POST["uploadName"];
$uploadEmail = $_POST["uploadEmail"];
$uploadSubject = $_POST["uploadMessage"];
$uploadNumber = trim($_POST["uploadNumber"]);
$complete_message = "<strong>Name:</strong> " . $uploadName . "<br><strong>Email:</strong> " . $uploadEmail . "<br><strong>mobile no:</strong> " . $uploadNumber . "<br><strong>Message:</strong> " . $uploadSubject;

if($imageFileType == "pdf" || $imageFileType == "docx"){
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
        $mail->addAddress($uploadEmail, $uploadName);     //Add a recipient  
        
        //Attachments
        $mail->addAttachment($_FILES['uploadFile']['tmp_name'], $_FILES['uploadFile']['name']);         //Add attachments

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Delfin Enquiry From: Careers Form';
        $mail->Body    = $complete_message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->SMTPDebug = 1;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    print_r("upload pdf or word formate");
}
