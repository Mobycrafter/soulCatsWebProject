<!DOCTYPE html>
<?php

//check if form was sent
if($_POST){

	$to = 'some@email.com';
	$subject = 'Testing HoneyPot';
	$header = "From: $name <$name>";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	//honey pot field
	$honeypot = $_POST['firstname'];

	//check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		return; //you may add code here to echo an error etc.
	}else{
		mail( $to, $subject, $message, $header );
	}
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soul Cats</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form method="post" action="#my-form" id="my-form">
			<!-- Create fields for the honeypot -->
			<input name="firstname" type="text" id="firstname" class="hide-robot">
			<!-- honeypot fields end -->
			
			<input name="name" type="text" id="name" placeholder="Name" required><br>
			<input name="email" type="email" id="email" placeholder="Email" required><br>
			<textarea name="message" id="message" placeholder="Enter your message here" required></textarea><br>
			<input type="submit">
		</form>
    
</body>
</html>