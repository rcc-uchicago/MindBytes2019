<?php

header('Content-type: application/json');
require 'PHPMailerAutoload.php';

$output_dir = '../posters/2020/';

// SQL server connection information
require('config.php');

// Create connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$is_public = @trim(stripslashes($_POST['is_public'])) or die("You do not input your permission, please go back and input it!");
$fullname = @trim(stripslashes($_POST['fullname'])) or die("You do not input your name, please go back and input it!");
$email = @trim(stripslashes($_POST['email'])) or die("You do not input your email address, please go back and input it!");
$academic_title = @trim(stripslashes($_POST['academic_title'])) or die("You do not input your academic title, please go back and input it!");
$division = @trim(stripslashes($_POST['division'])) or die("You do not input your division, please go back and input it!");
$department = @trim(stripslashes($_POST['department'])) or die("You do not input your department, please go back and input it!");
$principal_investigator = @trim(stripslashes($_POST['principal_investigator']));

$title_of_poster = @trim(stripslashes($_POST['title_of_poster'])) or die("You do not input your title/project, please go back and input it!");
$project_abstract = @trim(stripslashes($_POST['project_abstract'])) or die("You do not input your project description, please go back and input it!");

$rcc_resources = array();
if (isset ($_POST['rcc_resources'])){
	$rcc_resources = ($_POST['rcc_resources']);
}
$rcc_resources = implode(', ', $rcc_resources);

//$award_category = ($_POST['award_category']) or die("You do not input your award category, please go back and input it!");

//$award_category = implode(', ', $award_category);

$files_upload = ($_POST['files_upload']) or die("You do not uploaded any Poster file please go back and upload it!");



//Mailer Class Object
$mail = new PHPMailer;
$mail->isHTML(true); 

//print_r(array_values($files_upload));
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; // . $_SERVER['REQUEST_URI'];

//$uploadFiles = array(); --> For attachments

$uploadFiles = "";
$all_file_name = "";
	
$keys = array_keys($files_upload);
for($i = 0; $i < count($files_upload); $i++) {
    foreach($files_upload[$keys[$i]] as $key => $value) {
		
		$filename = $output_dir.$value;
		
		if (file_exists($filename)) {
			$uploadFiles .= "<br><a href=\"" . $url . '/posters/2020/' . $value . '" target="_blank">' .  $value ."</a>";
			$all_file_name .= $value . ', ';
			//$mail->addAttachment($filename);         // Add attachments
			//$mail->addAttachment($filename, $value);    // Optional name
			//echo $url . '/' . $value;
    		// echo "The file $filename exists";
		}/* else {
			echo "The file $filename does not exist";
		}*/
    }
}

//$uploadFiles = implode(', ', $uploadFiles);

$mail->setFrom('events@rcc.uchicago.edu', 'Mind Bytes 2020');
$mail->addAddress('appdev@rcc.uchicago.edu', 'RCC App Dev Team'); //'appdev@rcc.uchicago.edu';

$mail->addBCC($email, $fullname);

/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

$mail->Subject = "Mind Bytes 2020 Poster Submission Information : " . $fullname . " uploaded a Poster titled ". '"'. $title_of_poster .'"';

$mail->Body = "<b>Is Public:</b> " . $is_public . "<br><b>Full Name:</b> " . $fullname . "<br><b>Email:</b> " . $email . "<br><b>Academic Title:</b> " . $academic_title . "<br><b>Division/School:</b> " . $division . "<br><b>Department:</b> " . $department . "<br><b>RCC resources  used to conduct this research:</b> " . $rcc_resources . "<br><b>Principal Investigator:</b> " . $principal_investigator . "<br><b>Title of Poster/Project:</b> " . $title_of_poster . "<br><b>Project Abstract/Description:</b> " . $project_abstract . "<br><b>Posters:</b> " . $uploadFiles;

$is_public = ($is_public == "Yes"  ? 1 : 0);

/*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/
$is_public = mysqli_real_escape_string($conn, $is_public);
$fullname = mysqli_real_escape_string($conn, $fullname);
$email = mysqli_real_escape_string($conn, $email);
$academic_title = mysqli_real_escape_string($conn, $academic_title);
$division = mysqli_real_escape_string($conn, $division);
$department = mysqli_real_escape_string($conn, $department);
$rcc_resources = mysqli_real_escape_string($conn, $rcc_resources);
$principal_investigator = mysqli_real_escape_string($conn, $principal_investigator);
$title_of_poster = mysqli_real_escape_string($conn, $title_of_poster);
$project_abstract = mysqli_real_escape_string($conn, $project_abstract);
//$award_category =  mysqli_real_escape_string($conn, $award_category);	
$all_file_name = mysqli_real_escape_string($conn, rtrim($all_file_name, ', '));
$year = '2020'; //date("Y");

$sql = "INSERT INTO tbl_poster (files_upload, is_public, fullname, email, academic_title, division, department, rcc_resources, principal_investigator, title_of_poster, project_abstract, year) 
	VALUES ('$all_file_name', $is_public, '$fullname', '$email', '$academic_title', '$division', '$department', '$rcc_resources', '$principal_investigator', '$title_of_poster', '$project_abstract', '$year')";

$status = array(
	'type'=>'error',
	'message'=>'Please contact adminstrator, An error occured while uploading!'
);

if (mysqli_query($conn, $sql)) {
	//Send Email with attachments
	//$success = mail($email_to, $email_subject, $mail_body, 'From: <'.$email_from.'>');
	$success = $mail->Send();
		
	if ($success){
		$status = array(
			'type'=>'success',
			'message'=>'Thank you, your Poster has been successfully submitted.'
		);
	}else{
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo json_encode($status);

function stripslashes_deep($value)
{
	$value = is_array($value) ?
				array_map('stripslashes_deep', $value) :
				stripslashes($value);

	return $value;
}

function printAll($a) {
  if (!is_array($a)) {
    echo $a, ' ';
     return;
   }
}

?>