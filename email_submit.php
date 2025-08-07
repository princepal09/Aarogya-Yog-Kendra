<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Include DB connection
include('database_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $mobile  = $_POST['mobile'];
    $message = $_POST['message'];

    // Store in DB
    $sql = "INSERT INTO contact_form (name, email, mobile, message) VALUES (?, ?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $email, $mobile, $message);
        if ($stmt->execute()) {
            // echo "<p>✅ Data saved successfully!</p>";

            // Start PHPMailer
            $mail = new PHPMailer(true);
            try {
                // Common SMTP Config
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'aarogyayogkendra01@gmail.com';
                $mail->Password   = 'ldsg nmyr fldy acfz'; // App Password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = 465;

                // -----------------------------
                // 1. Email to Website Owner
                // -----------------------------
                $mail->setFrom('aarogyayogkendra01@gmail.com', 'Aarogya Yog Kendra');
                $mail->addAddress('aarogyayogkendra01@gmail.com', 'Rohit Bhatt');
                $mail->isHTML(true);
                $mail->Subject = 'New Subscribes';
                $mail->Body    = "You received a new email:<br><br>" .
    
                    "<b>Email:</b> $email<br>" .
                 
                $mail->send();

                // -----------------------------
                // 2. Thank You Email to User
                // -----------------------------
                $mail->clearAddresses(); // Clear previous recipient
                $mail->addAddress($email, $name);
                $mail->Subject = 'Thank You for Contacting Us!';
                $mail->Body    = "Dear $name,<br><br>" .
                    "Thank you for visiting Aarogya Yog Kendra. We have received your message and will contact you soon.<br><br>" .
                    "Best regards,<br>Aarogya Yog Kendra Team";

                $mail->send();
                // Include the thank you page after successful submission
                include('thank_you.php');  // This will display the thank you page



            } catch (Exception $e) {
                echo "<p>❌ Mail Error: {$mail->ErrorInfo}</p>";
            }
        } else {
            echo "<p>❌ Database Error: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<p>❌ DB Prep Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
