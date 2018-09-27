<?php
header('Content-type: application/json');
$status = array(
    'type'=>'success',
    'message'=>'Thank you for your submission.'
);

$name = @trim(stripslashes($_POST['name']));
$email = @trim(stripslashes($_POST['email']));
$title = @trim(stripslashes($_POST['title'])); 
$division = @trim(stripslashes($_POST['division'])); 
$dept = @trim(stripslashes($_POST['dept'])); 
$sel1= @trim(stripslashes($_POST['sel1'])); 
$sel2= @trim(stripslashes($_POST['sel2']));
$sel3= @trim(stripslashes($_POST['sel3'])); 
$sel4= @trim(stripslashes($_POST['sel4'])); 
$sel5= @trim(stripslashes($_POST['sel5'])); 
$sel6= @trim(stripslashes($_POST['sel6'])); 
$sel7= @trim(stripslashes($_POST['sel7'])); 
$sel8= @trim(stripslashes($_POST['sel8'])); 
$sel9= @trim(stripslashes($_POST['sel9']));   
$pi = @trim(stripslashes($_POST['pi']));
$poster_title = @trim(stripslashes($_POST['poster_title']));
$abstract = @trim(stripslashes($_POST['abstract']));


$subject = "Mind Bytes Poster Submission";

$email_from = $email; 
$email_to = 'appdev@rcc.uchicago.edu';


$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Title: ' . $title . "\n\n" . 'Division: ' . $division . "\n\n" . 'Department: ' . $dept . "\n\n" . 'Resources: ' . $sel1 . "," . $sel2 . "," . $sel3 . "," . $sel4 . "," . $sel5 . "," . $sel6 . "\n\n" . 'Voting Consideration: ' . $sel7 . "," . $sel8 . "," . $sel9 .  "\n\n" . 'Principal Investigator: ' . $pi . "\n\n" . 'Poster/Project Title: ' . $poster_title . "\n\n" . 'Project Abstract/Description: ' . $abstract . "\n\n" ;


$success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

echo json_encode($status);
die;