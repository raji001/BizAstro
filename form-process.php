ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {  
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "muthuvijayanelango@innovativeastrosolutions.com";
    $subject = "Enquiry from $name";
    $email_message = "Dear BizAstro,\n\n";
    $email_message .= "You have received an enquiry from $name. Here are the details:\n\n";
    $email_message .= "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message\n\n";
    $email_message .= "Please respond to the enquiry at your earliest convenience.\n\n";
    $email_message .= "Best regards,\nBizAsto";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $email_message, $headers)) {
        $postData = json_encode([
            'name' => $name,
            'email' => $email,
            'phoneNumber' => $phone,
            'message' => $message
        ]);

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://los-api-ghan9.ondigitalocean.app/inquiry/web',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Cookie: __cf_bm=3yb7LAzFaM06FG2jHVqStD1Z0cS2yVX3VzRo2gpi3js-1713873013-1.0.1.1-FDduxo5KkHpAPDfc_jU4wXEwc1qRWensKDA9Uald5U.IBy8Uzmzr35sfZaXmeH6Gir4aUJ_htuznwFX1nGwc3w'
            ),
        ));
        
        $response = curl_exec($curl);
        if ($response === false) {
            $error = curl_error($curl);
            file_put_contents('error_log.txt', "CURL Error: " . $error . "\n", FILE_APPEND);
            header("Location: error.html");
        } else {
            file_put_contents('error_log.txt', "CURL Response: " . $response . "\n", FILE_APPEND);
            header("Location: thank_you.html");
        }
        curl_close($curl);
        exit;
    } else {
        file_put_contents('error_log.txt', "Failed to send email\n", FILE_APPEND);
        header("Location: error.html");
        exit;
    }
}