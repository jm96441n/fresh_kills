<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
		<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
		<link rel="stylesheet" href="./style.css" />
    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="./javascripts/app.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>


    <title>FreshKillsBar</title>
</head>
<body>
	<h3 class="title_bar">Fresh Kills Bar</h3>
	<nav>
		<p id="links_p">
			<a id="home" class="links" href="#">Home</a> 
			<a id="menu" class="links" href="#">Menu</a> 
			<a id="gallery" class="links" href="#">Gallery</a>  
			<a id="contact" class="links" href="#">Contact</a>
		</p>
	</nav>
	<div id="logo_container">
		<img id="logo" src="./logo.png" />
	</div>

	<div id="menu_container">
		<div>
			<img class="menu_pages" src="./menu2.png"/>
			<img class="menu_pages" src="./menu.png"/>
		</div>
		<div id="pdf_link">
			<a class="links" href="Menu v10a.pdf" >View as PDF</a>
		</div>
	</div>

	<div id="gallery_container">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"></script>
		<h3 class="gallery_titles">Photo's</h3>
		<div class="fotorama photo-div"
				 data-nav="thumbs"
				 data-loop="true"
			>
			<img src='./img/cocktails/FreshKillsA_059.jpg' data-caption="One">
			<img src='./img/cocktails/FreshKillsA_134.jpg' data-caption="Two">
			<img src='./img/cocktails/FreshKillsA_213.jpg' data-caption="Three">
			<img src='./img/cocktails/FreshKillsA_240.jpg' data-caption="Four">
			<img src='./img/cocktails/FreshKillsA_312.jpg' data-caption="Five">
			<img src='./img/cocktails/FreshKillsA_402.jpg' data-caption="Six">
			<img src='./img/cocktails/FreshKillsA_420.jpg' data-caption="Seven">
			<img src='./img/cocktails/FreshKillsA_452.jpg' data-caption="Eigth">
			<img src='./img/cocktails/FreshKillsA_466.jpg' data-caption="Nine">
			<img src='./img/cocktails/FreshKillsA_522.jpg' data-caption="Ten">
			<img src="./img/bar/FreshKillsA_715.jpg" data-caption="Front">
			<img src="./img/bar/FreshKillsA_573.jpg" data-caption="Inside">
			<img src="./img/bar/FreshKillsA_596.jpg" data-caption="Inside2">
			<img src="./img/bar/FreshKillsA_709.jpg" data-caption="Ice">
		</div>
	</div>

	<div id="contact_container">
		<div class="section-page-landing" id="contact">
			<div class="inner-section">
				<div class="contain">
					<center><h2>Contact Me</h2>
						<form class="contact" action="mailer.php" method="post">
						<p>Name:</p> <!-- Can choose to customize form.html inputs starting here as needed, but be sure to reference any changes in mailer.php post fields-->
						<input type="text" name="name" />
						 <p>E-mail:</p>
						<input type="text" name="email" />
						<p>Subject:</p>
						<input type="text" name="subject" />
						<p>Message:</p>
						<textarea name="message" syle="width: 45%; text-align: center;">Please leave a short message here</textarea></p>
						<input class="send" type="submit" value="Send"> <!-- Send button-->
						</form></center>
				</div>
			</div>
		</div>
		<?php
// use actual sendgrid username and password in this section
		$url = 'https://api.sendgrid.com/'; 
		$user = 'app52685651@heroku.com'; // place SG username here
		$pass = 'jm113715'; // place SG password here
		// grabs HTML form's post data; if you customize the form.html parameters then you will need to reference their new new names here
		$name = $_POST['name']; 
		$email = $_POST['email']; 
		$subject = $_POST['subject']; 
		$message = $_POST['message'];
		// note the above parameters now referenced in the 'subject', 'html', and 'text' sections
		// make the to email be your own address or where ever you would like the contact form info sent
		$params = array(
		    'api_user'  => "$user",
		    'api_key'   => "$pass",
		    'to'        => "john@johnmaguiredeveloper.com", // set TO address to have the contact form's email content sent to
		    'subject'   => "Contact Form Submission", // Either give a subject for each submission, or set to $subject
		    'html'      => "<html><head><title> Contact Form</title><body>
		    Name: $name\n<br>
		    Email: $email\n<br>
		    Subject: $subject\n<br>
		    Message: $message <body></title></head></html>", // Set HTML here.  Will still need to make sure to reference post data names
		    'text'      => "
		    Name: $name\n
		    Email: $email\n
		    Subject: $subject\n
		    $message",
		    'from'      => "freshkillsbar@gmail.com", // set from address here, it can really be anything
		  );
					curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
					$request =  $url.'api/mail.send.json';
					// Generate curl request
					$session = curl_init($request);
					// Tell curl to use HTTP POST
					curl_setopt ($session, CURLOPT_POST, true);
					// Tell curl that this is the body of the POST
					curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
					// Tell curl not to return headers, but do return the response
					curl_setopt($session, CURLOPT_HEADER, false);
					curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
					// obtain response
					$response = curl_exec($session);
					curl_close($session);
					// Redirect to thank you page upon successfull completion, will want to build one if you don't alreday have one available
					header('Location: index.php'); // feel free to use whatever title you wish for thank you landing page, but will need to reference that file name in place of the present 'thanks.html'
					exit();
					// print everything out
					print_r($response);
			?>

	</div>

	<footer class="row">
		<div class="col-md-12 col-lg-12  col-sm-12 footer">
			<p>Copyright 2016 Fresh Kills bar/John Maguire Designs</p>
		</div>
	</footer>
</body>

</html>