<?php	
	if(empty($_POST['cname']) && strlen($_POST['cname']) == 0 || empty($_POST['cemail']) && strlen($_POST['cemail']) == 0)
	{
		return false;
	}
	
	$cname = $_POST['cname'];
	$cemail = $_POST['cemail'];
	$cmessage = $_POST['cmessage'];
	
	$to = 'pereiram13@students.ecu.edu'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Ray.";
	$email_body = "You have received a new message. \n\n".
				  "Cname: $cname \nCemail: $cemail \nCmessage: $cmessage \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: pereiram13@students.ecu.edu\n";
	$headers .= "Reply-To: $cemail";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>