<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'C:\xampp\htdocs\RealEstate\vendor\autoload.php';
require 'C:\xampp\htdocs\RealEstate\vendor\phpmailer\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\RealEstate\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\RealEstate\vendor\phpmailer\phpmailer\src\SMTP.php';


$mail = new PHPMailer(true); // Enable exceptions

try {
    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "reejuballabh269@gmail.com";

        // Set email subject.
        $subject = "New contact from $name";

        // Build email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // SMTP settings for Gmail
        $mail->isSMTP();
        $mail->Host = env('MAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom('reejuballabh269@gmail.com', 'Reeju Ballabh');
        $mail->addAddress($recipient);

        // Set email content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $email_content;

        // Send the email.
        $mail->send();

        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
} catch (Exception $e) {
    // Handle exceptions here
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message. Error: {$e->getMessage()}";
}
?>
