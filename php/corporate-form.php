/* Created by Jenny Plunkett on 2015-07-25 */

<?php 
    $myemail = 'president@ieeecs.ece.utexas.edu';

    $name = $_POST['name']; 
    $company = $_POST['company'];
    $email_address = $_POST['email']; 
    $message = $_POST['message']; 
    $packet = $_POST['packet'];

	$to = $myemail; 
	$email_subject = "Corporate Contact Form: $name";
	$email_body = "\n
    Name: $name \n 
    Company: $company \n
    Email: $email_address \n 
    Message:\n
        $message \n
    Receive Corporate Packet?: $packet"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);

	//redirect to the 'thank you' page
	header('Location: /thank-you.html');

?>
