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
		<form action="" method="post">
		First Name: <input type="text" name="first_name"><br>
		Last Name: <input type="text" name="last_name"><br>
		Email: <input type="text" name="email"><br>
		Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
		<input type="submit" name="submit" value="Submit">
		</form>
				<?php 
		if(isset($_POST['submit'])){
		    $to = "john@johnmaguiredeveloper.com"; // this is your Email address
		    $from = $_POST['email']; // this is the sender's Email address
		    $first_name = $_POST['first_name'];
		    $last_name = $_POST['last_name'];
		    $subject = "Form submission";
		    $subject2 = "Copy of your form submission";
		    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
		    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

		    $headers = "From:" . $from;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
		    // You can also use header('Location: thank_you.php'); to redirect to another page.
		    // You cannot use header and echo together. It's one or the other.
		    }
		?>

	</div>

	<footer class="row">
		<div class="col-md-12 col-lg-12  col-sm-12 footer">
			<p>Copyright 2016 Fresh Kills bar/John Maguire Designs</p>
		</div>
	</footer>
</body>

</html>