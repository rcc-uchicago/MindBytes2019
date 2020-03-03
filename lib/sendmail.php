<?php

header('Content-type: application/json');

require 'PHPMailerAutoload.php';

// grab recaptcha library
require_once "recaptchalib.php";

// Register API keys at https://www.google.com/recaptcha/admin
$secret = "6Ldt2DAUAAAAAEcKtPI6GKAPvGxxViQGGIYScXCN";

// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "en";

// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;

$reCaptcha = new ReCaptcha($secret);

//echo $_POST["g-recaptcha-response"];

// Was there a reCAPTCHA response?
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

 if ($resp != null && $resp->success) {

    /*$output_dir = '../posters/';*/

    // SQL server connection information
    require('config.php');

    // Create connection
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = @trim(stripslashes($_POST['form_name'])) or die("You do not input your name, please go back and input it!");
    $email = @trim(stripslashes($_POST['form_email'])) or die("You do not input your email address, please go back and input it!");
    $subject = @trim(stripslashes($_POST['form_subject'])) or die("You do not input the subject, please go back and input it!");

    $phone = @trim(stripslashes($_POST['form_phone']));

    $message = @trim(stripslashes($_POST['form_message'])) or die("You do not input the message, please go back and input it!");

    //Mailer Class Object
    $mail = new PHPMailer;
    $mail->isHTML(true); 

    /*$value = '02232018180154_hw1.pdf';
    $mail->addAttachment($output_dir.$value, $value); */

    $mail->setFrom('events@rcc.uchicago.edu', 'Mind Bytes 2020');
    $mail->addAddress('appdev@rcc.uchicago.edu', 'RCC App Dev Team'); //'appdev@rcc.uchicago.edu';

    $mail->addBCC($email, $name);

    /*$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    $mail->Subject = "Mind Bytes 2020 Contact Information : " . $name . " requested a contact";
    $mail->Body = "<b>Full Name:</b> " . $name . "<br><b>Email:</b> " . $email . "<br><b>Subject:</b> " . $subject . "<br><b>Phone:</b> " . $phone . "<br><b>Message:</b> " . $message;

    /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $subject = mysqli_real_escape_string($conn, $subject);
    $phone = mysqli_real_escape_string($conn, $phone);
    $message = mysqli_real_escape_string($conn, $message);

    $sql = "INSERT INTO tbl_contact(fullname, email, email_subject, phone, message)
        VALUES ('$name','$email','$subject', '$phone', '$message')";

    $status = array(
        'type'=>'error',
        'message'=>'An error occured while sending email!'
    );

    if (mysqli_query($conn, $sql)) {
        //Sends email
        //$success = mail($email_to, $email_subject, $mail_body, 'From: <'.$email_from.'>');
        $success = $mail->Send();

        if ($success){
            $status = array(
                'type'=>'success',
                'message'=>'Thank you, for contacting us.'
            );
        }
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    echo json_encode($status);
}else{
     $status = array(
        'type'=>'error',
        'message'=>'An error occured while sending email!'
     );
     echo json_encode($status);
 }

?>