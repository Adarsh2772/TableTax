<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer using Composer

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON input
    $data = json_decode(file_get_contents('php://input'), true);

    // Validate and process data
    $name = $data['name'] ?? '';
    $email = $data['email'] ?? '';
    $contact = $data['contact'] ?? '';
    $package = $data['package'] ?? '';

    if ($name && $email && $contact && $package) {
        
        // Send email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = '	adarshsolankurkar8367@gmail.com'; // Replace with your email address
            $mail->Password = 'jfbklbuaacefxuok'; // Replace with your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('info@tabletax.com', 'Table Tax');
            $mail->addAddress('adarshsolankurkar8367@gmail.com', 'Table Tax'); // Add recipient email and name

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = "New ".$package." Package Form Submission:";

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
                            <h1>Package Form Submission</h1>
                        </div>
                        <div class='email-content'>
                            <p><strong>Name:</strong> $name</p>
                            <p><strong>Email:</strong> $email</p>
                            <p><strong>Phone:</strong> $contact</p>
                            <p><strong>Package:</strong> $package</p>
                        </div>
                        <div class='email-footer'>
                            <p>This email was sent from your website.</p>
                        </div>
                    </div>
                </body>
                </html>
            ";

            $mail->Body = $emailTemplate;

            // Send the email
            $mail->send();



            // Recipients
            $mail->setFrom('info@tabletax.com', 'Table Tax');
            $mail->addAddress($email, $name); // Add recipient email and name

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = "Thank You for Contacting TableTax!";

            // Email Template
            $emailTemplate = "
            <style>
                body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                }
                .email-container {
                max-width: 600px;
                margin: 20px auto;
                background-color: #ffffff;
                border: 1px solid #ddd;
                border-radius: 5px;
                overflow: hidden;
                }
                .body {
                padding: 20px;
                color: #333333;
                line-height: 1.6;
                }
                .body h2 {
                color: #0044cc;
                font-size: 20px;
                }
                .footer {
                background-color: #f4f4f4;
                color: #666666;
                text-align: center;
                padding: 15px;
                font-size: 14px;
                }
                .footer a {
                color: #0044cc;
                text-decoration: none;
                }
            </style>
            <body>
            <div class='email-container'>
                
                <!-- Body -->
                <div class='body'>
                <p>Dear <strong>" . $name . "</strong>,</p>
                <p>Thank you for reaching out to <strong>TableTax</strong>! We are delighted to assist you with your tax filing needs and ensure a smooth, hassle-free experience for you.</p>
                
                <p>You have selected the <strong>" . $package . "</strong> package. Here’s what it includes:</p>
                <ul>
                    <li>Accurate <strong>W-2 and 1099 filings</strong>.</li>
                    <li>Convenient <strong>E-filing options</strong> to save time.</li>
                    <li>Comprehensive support for <strong>itemized deductions</strong> and <strong>retirement contributions</strong>.</li>
                </ul>
                
                <p>We will get back to you shortly with more details or a response to your inquiry. Meanwhile, if you need immediate assistance or want to explore our offerings, please feel free to:</p>
                <ul>
                    <li>Visit our website at <a href='https://www.TableTax.com' target='_blank'>www.TableTax.com</a>.</li>
                    <li>Contact us directly at <a href='mailto:support@TableTax.com'>support@TableTax.com</a>.</li>
                </ul>
                
                <p>Thank you for choosing <strong>TableTax</strong>. We look forward to simplifying your tax journey!</p>
                </div>
                
                <!-- Footer -->
                <div class='footer'>
                <p>Best regards,</p>
                <p><strong>The TableTax Team</strong></p>
                <p>Email: <a href='mailto:support@TableTax.com'>support@TableTax.com</a> | Website: <a href='https://www.TableTax.com' target='_blank'>www.TableTax.com</a> | Phone: +1 (123) 456-7890</p>
                </div>
            </div>
            </body>
            </html>";

            // Assign the email body
            $mail->Body = $emailTemplate;

            // Send the email
            $mail->send();
            // Success message
            echo json_encode(['success' => true, 'message' => 'Form submitted successfully.']);
            unset($_SESSION['old']); // Clear old values
        } catch (Exception $e) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Invalid data.']);
        }

        // Send success response
       
    } else {
        // Send error response
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid data.']);
    }
} else {
    // Send method not allowed response
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
}
?>