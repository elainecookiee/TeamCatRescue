<?php 

	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
	$message = isset($_POST['message']) ? $_POST['message'] : null;
	$message = "Name: ".$name." || Email: ".$email." || Phone: ".$phone." || Message: ".$message;

	// if variables are blank
	// dont' send mail	

	$value = mail( 'some@address.ca', $message, "From:" . $email );
	if ( $value ) {
		echo " Dear <bold>$name</bold> Thank you for your email!";
	} else {
		echo "Sorry, here is an <bold>ERROR</bold>, you message is not sent successful! Please try again! ";
		echo error_get_last();
	}
	
?>