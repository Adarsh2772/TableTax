<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer using Composer

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Initialize variables
    $expected_captcha = $_POST['expected_captcha'] ?? '';
    $user_captcha = $_POST['captcha'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Save old input values to the session
    $_SESSION['old'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
    ];

    // Generate a new CAPTCHA for the next submission
    $_SESSION['captcha'] = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 6);

    // Validate form
    if ($user_captcha !== $expected_captcha) {
        $_SESSION['error_message'] = "CAPTCHA does not match. Please try again.";
    } elseif (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        $_SESSION['error_message'] = "All fields are required.";
    } else {
        // Send email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = 'alerts@duedeck.com'; // Replace with your email address
            $mail->Password = 'nriwetdzleeanhky'; // Replace with your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('info@tabletax.com', 'Table Tax');
            $mail->addAddress('adarshsolankurkar8367@gmail.com', 'Adarsh'); // Add recipient email and name

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = "New Contact Form Submission: $subject";

            // Email Template
            $emailTemplate = "
                <html>
                <head>
                    <style>
                        .email-body {
                            font-family: Arial, sans-serif;
                            border: 1px solid #ddd;
                            padding: 20px;
                            max-width: 600px;
                            margin: 20px auto;
                            background-color: #f9f9f9;
                        }
                        .email-header {
                            background-color: #007bff;
                            color: #fff;
                            padding: 10px 20px;
                            text-align: center;
                        }
                        .email-content {
                            padding: 20px;
                        }
                        .email-footer {
                            margin-top: 20px;
                            font-size: 12px;
                            color: #666;
                            text-align: center;
                        }
                    </style>
                </head>
                <body>
                    <div class='email-body'>
                        <div class='email-header'>
                            <h1>Contact Form Submission</h1>
                        </div>
                        <div class='email-content'>
                            <p><strong>Name:</strong> $name</p>
                            <p><strong>Email:</strong> $email</p>
                            <p><strong>Phone:</strong> $phone</p>
                            <p><strong>Subject:</strong> $subject</p>
                            <p><strong>Message:</strong></p>
                            <p>$message</p>
                        </div>
                        <div class='email-footer'>
                            <p>This email was sent from your website's contact form.</p>
                        </div>
                    </div>
                </body>
                </html>
            ";

            $mail->Body = $emailTemplate;

            // Send the email
            $mail->send();

            // Success message
            $_SESSION['success_message'] = "Your message has been sent successfully!";
            unset($_SESSION['old']); // Clear old values
        } catch (Exception $e) {
            $_SESSION['error_message'] = "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    // Redirect back to the contact page
    header("Location: contact.html");
    exit;
}
