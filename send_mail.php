<?php
function validateInput($data) {
    $errors = [];

    // Validate name
    if (empty($data['name']) || strlen($data['name']) < 3) {
        $errors[] = 'Name must be at least 3 characters long.';
    }

    // Validate phone
    if (empty($data['phone']) || !preg_match('/^[0-9]{10}$/', $data['phone'])) {
        $errors[] = 'Phone must be a 10-digit number.';
    }

    // Validate email
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    // Validate message
    if (empty($data['message']) || strlen($data['message']) < 10) {
        $errors[] = 'Message must be at least 10 characters long.';
    }

    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate input
    $validationErrors = validateInput($_POST);
    if (!empty($validationErrors)) {
        // Include the form again with errors
        include 'contact_form.php';
    } else {
        // Email settings
        $to = 'dummyraj143@gmail.com'; // Your email address
        $subject = 'New Contact Form Submission';
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Email body
        $body = "Name: $name\n";
        $body .= "Phone: $phone\n";
        $body .= "Email: $email\n\n";
        $body .= "Message:\n$message\n";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            // Render success page
            include 'success.php';
        } else {
            // Render error page
            include 'error.php';
        }
    }
} else {
    echo 'Invalid request method.';
}
?>