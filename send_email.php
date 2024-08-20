<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);
    $comment = htmlspecialchars($_POST['comment']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'just2041.justhost.com';                // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'info@medicalcaregiversllc.com';        // SMTP username
        $mail->Password   = 'Jeep89Lima';                           // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable SSL encryption
        $mail->Port       = 465;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom('info@medicalcaregiversllc.com', 'Medical Care Givers LLC');
        $mail->addAddress('info@medicalcaregiversllc.com', 'Web Requests'); // Send to the filtered folder
        
        // You can also send a confirmation to the user if desired
        // $mail->addAddress($email, $fullName);

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'New Web Request';
        $mail->Body    = "<h1>New Web Request</h1>
                          <p><strong>Name:</strong> $fullName</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Phone Number:</strong> $phoneNumber</p>
                          <p><strong>Comment:</strong><br>$comment</p>";
        $mail->AltBody = "New Web Request\n\n
                          Name: $fullName\n
                          Email: $email\n
                          Phone Number: $phoneNumber\n
                          Comment: $comment";

        // Send the email
        $mail->send();
        echo 'Message has been sent successfully';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request method';
}
