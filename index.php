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
		<h3 class='title_bar'>THE COCKTAILS</h3>
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

			
		</div>
		<h3 class='title_bar'>THE BAR</h3>
			<div class='fotorama photo-div'
					 data-nav="thumbs"
					 data-loop="true"
				>
				<img src="./img/bar/FreshKillsA_715.jpg" data-caption="Front">
				<img src="./img/bar/FreshKillsA_573.jpg" data-caption="Inside">
				<img src="./img/bar/FreshKillsA_596.jpg" data-caption="Inside2">
			</div>

		<h3 class='title_bar'>THE ICE</h3>
			<div class='fotorama photo-div'
					 data-nav="thumbs"
					 data-loop="true"
				>
				<img src="./img/bar/FreshKillsA_709.jpg" data-caption="Ice">
			</div>

	</div>

	<div id="contact_container" class="row">
			<div>
				<p class="info">Call us at:</p> <p class="contact_info last_info">718.599.7888</p>
				<p class="info">Visit us at:</p>
				<p class="contact_info">161 Grand Street</p>
				<p class="contact_info last_info">Brooklyn, NY</p>
			</div>
			<p class="info">Email us Here:</p>
			<form action="mailform.php" method="POST">
				<p class="input_fields">Name</p> <input type="text" name="name">
				<p class="input_fields">Email</p> <input type="text" name="email">
				<p class="input_fields">Subject</p> <input type="text" name="subject">
				<p class="input_fields">Message</p><textarea name="message" rows="6" cols="30"></textarea><br />
				<input class="input_fields" type="submit" value="Send"><input class="input_fields" type="reset" value="Clear">
			</form>
	</div>

	<nav>
		<p id="links_p">
			<a id="home" class="current_link" href="#">HOME</a> 
			<a id="menu" class="links" href="#">THE MENU</a> 
			<a id="gallery" class="links" href="#">PICTURES</a>  
			<a id="contact" class="links" href="#">CONTACT</a>
		</p>
	</nav>

	<footer class="row">
		<div class="col-md-12 col-lg-12  col-sm-12 footer">
			<p>Copyright 2016 Fresh Kills Bar/John Maguire Designs</p>
		</div>
	</footer>
</body>

</html>