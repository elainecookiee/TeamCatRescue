<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Contact Page</title>
	<meta charset="utf-8">
	<link rel='stylesheet' href='stylegao.css' />
	<link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
</head>

<body>
	<div class='contact_imfo'>
<!-- google map -->
		<div class='map'>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.5348007155144!2d-79.40378464877344!3d43.65784616004555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34c1cb1ace01%3A0xd649243cdcfd5a94!2sTot+The+Cat+Cafe!5e0!3m2!1sen!2sca!4v1481130300106" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
<!-- address -->
		<div class='basic_imfo'>
			<div class = 'basic_imfo_text'>
				<span class= 'title'><h3>Address</h3></span>
				<p>298 College Street, Toronto, ON, M5T 1R9</p>
			
<!-- telephone -->
			
				<span class= 'title'><h3>Telephone</h3></span>
				<p>+1 (647) 748-2287</p>
			
<!--  hours -->
			
				<span class= 'title'><h3>Hours</h3></span>
				<p>Mon-Fri: 10am-6pm</p>
				<p>Sat-Sun: 11am-6pm</p>
			</div>
		</div>
	</div>



<!--  contact us -->
	<div class='contact_us'>
		<section class='information'>
			<?php
				$name = isset($_POST['name']) ? $_POST['name'] : null;
				$email = isset($_POST['email']) ? $_POST['email'] : null;
				$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
				$message = isset($_POST['message']) ? $_POST['message'] : null;
				

				if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) ){
					$value = mail( 'someone@address.com', $message, "From:" . $email );
					//Find $email has @?
					$findme   = '@';
					$pos = strpos($email, $findme);
					//$pos = ......????

					if( $value == 1 && $pos > -1) {
						//If yes, send the email
						echo '<script language="javascript">';
						echo 'alert("Message Successfully Sent")';
						echo '</script>';
					} else {
						//if no, show error massage
						echo '<script language="javascript">';
						echo 'alert("Sorry, here is an ERROR, you message is not sent successful! Please try again!")';
						echo '</script>';
					}
				}
			?>		
			<h3 id='subject'>Contact Us</h3>
				<form class='contact-form' method='POST' action='contact_page.php'>
						<div class="form">
							<input id="name" class="input-field a"  name="name" placeholder="Full name" />
							<input id="email" class="input-field a" name="email" placeholder="Email" />
							<input id="phone" class="input-field a" name="phone" placeholder="Phone Number" />
							<textarea id="message" class="textarea-field field-message" rows="10" name="message" placeholder="Write your message here"></textarea>
						</div>
						<div class="button"><input class="input" type="submit" value='SUBMIT'/></div>			
				</form>	
		</section>	
	</div>

</body>
</html>

	