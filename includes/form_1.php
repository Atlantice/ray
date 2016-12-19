<?php	
	if(empty($_POST['input_1157']) && strlen($_POST['input_1157']) == 0 || empty($_POST['input_412']) && strlen($_POST['input_412']) == 0)
	{
		return false;
	}
	
	$input_1157 = $_POST['input_1157'];
	$input_412 = $_POST['input_412'];
	$textarea_2205 = $_POST['textarea_2205'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Ray.";
	$email_body = "You have received a new message. \n\n".
				  "Input_1157: $input_1157 \nInput_412: $input_412 \nTextarea_2205: $textarea_2205 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_412";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>