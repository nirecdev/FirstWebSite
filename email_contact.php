<?php

//----------------PHP STARTUP SCRIPT----------------

 $conn = mysqli_connect('localhost','root','','credit');

/* check if server is alive */
if (mysqli_ping($conn)) {
 echo '<script language="javascript">';
 echo 'confirm("Connection to Database is ok!")';
 echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'confirm("Error", mysql_error($conn))';
    echo '</script>';
}
?>


<?php

	use SMTPValidateEmail\Validator as SMTP_Validate_Email;

if(isset($_POST['contact_btn']))
{
	//This page should not be accessd directly. Need to submit the form.
	echo '<script language="javascript">';
	echo "confirm(you need to submit the form)";
	echo '</script>';

$name_contact = $_POST['name_contact'];
$email_contact = $_POST['email_contact'];
$subject_contact = $_POST['subject_contact'];
$message_contact = $_POST['message_contact'];

//validate first
if(empty($email_contact) || empty($message_contact)){
	
	echo "Email and message are mandatory!";
	exit;
}

$email_to_unahco = 'unahcocentralcredit@gmail.com';
$email_subject = "New Message Form Contact Us";
$email_body = "User: $name_contact \n Email Address: $email_contact \n Message: $message_contact";

	mail($email_to_unahco, $email_subject, $email_body);

	echo '<script language="javascript">';
    echo 'alert("Sent")';
    echo '</script>';
}
?>