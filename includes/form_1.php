<?php	
	if(empty($_POST['pname']) && strlen($_POST['pname']) == 0 || empty($_POST['oname']) && strlen($_POST['oname']) == 0 || empty($_POST['pemail']) && strlen($_POST['pemail']) == 0)
	{
		return false;
	}
	
	$pname = $_POST['pname'];
	$oname = $_POST['oname'];
	$pemail = $_POST['pemail'];
	$pmessage = $_POST['pmessage'];
	
	$to = 'pereiram13@students.ecu.edu'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Ray.";
	$email_body = "You have received a new message. \n\n".
				  "Pname: $pname \nOname: $oname \nPemail: $pemail \nPmessage: $pmessage \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: pereiram13@students.ecu.edu\n";
	$headers .= "Reply-To: $pemail";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>