<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="bar brooklyn williamsburg fresh kills cocktails authentic classic trendy drinks alcohol beverages">
    <meta name="author" content="john maguire">
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
	<div class="container-full">
		<div class="row home">
			<div id="logo_container" class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
				<img id="logo" src="./main_logo.png" />
			</div>
		</div>
		<div class="row">
			<div id="menu_container" class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2">
				<div>
					<div class="gold_logo_container">
						<img class="gold_logo" src="./main_gold_logo.png"/>
					</div>
					<div class="section_header">
						<p class="section_header_text">HAPPY HOUR - $9</p>
						<p id="happy_hour">SUNDAY THROUGH THURSDAY 5PM UNTIL 7PM</p>
					</div>
					<li>
						<p class="drink_title">BIN 'N' GITTERS</p>
						<p><span class="alcohol_type">GIN</span> FRESH LIME JUICE, SUGAR, ANGOSTURA BITTERS. SERVED ON CRUSHED ICE.</p>

						<p class="adapted_from">ADAPTED FROM "THE SOUTH AMERICAN GENTLEMAN'S COMPANION, BEING AN EXOTIC DRINKING BOOK OR UP & DOWN THE ANDES WITH JIGGER, BEAKER & FLASK (VOL. I)" BY CHARLES H. BAKER JR., 1951</p>
					</li>

					<li>
						<p class="drink_title">HEADLESS HORSEMAN</p>
						<p><span class="alcohol_type">VODKA</span>, GINGER SYRUP, FRESH LIME JUICE, ANGOSTURA BITTERS, SODA WATER, SERVED LONG.</p>
						<p class="adapted_from">ADAPTED FROM JONES' COMPLETE BAR GUIDE BY STAN JONES, 1977</p>
					</li>

					<li>
						<p class="drink_title">NIGHT FLIGHT</p>
						<p>CHOICE OF <span class="alcohol_type">WHITE</span> OR <span class="alcohol_type">DARK RUM</span>, MAPLE SYRUP, FRESH LIME JUICE, CINNAMON. SERVED ON CRUSHED ICE.</p>
						<p class="adapted_from">ADAPTED FROM "TRADER VIC'S BARTENDER'S GUIDE" BY VICTOR BERGERON, 1947</p>
					</li>

					<li>
						<p class="drink_title">WHISKEY FIX</p>
						<p>CHOICE OF <span class="alcohol_type">RYE WHISKEY</span> OR <span class="alcohol_type">BOURBON</span>, FRESH LEMON JUICE, SUGAR, SERVED ON CRUSHED ICE.</p>
						<p class="adapted_from">ADAPTED FROM "HERE'S HOW" BY THE THREE MOUNTAINEERS, 1939</p>
					</li>

					<p class="section_header_text border_top">HAPPY HOUR WINE <span id="rose_hh">(ROSÉ)</span> - $5</p>

					<p class="section_header_text border_top">HAPPY HOUR BEER - $5</p>

					<li>
						<p><span class="drink_title">BELL'S TWO HEARTED IPA</span><span> - KALAMAZOO, MI (USA) 16 OZ. CAN</span></p>
					</li>

					<p class="section_header_text section_header">LOW ABV% COCKTAILS - $11</p>

						<p>'LOW OCTANE' REFRESHMENTS AVAILABLE DURING ALL HOURS OF BUSINESS.</p>

					<li>
						<p class="drink_title">BISMARK</p>
						<p><span class="alcohol_type">RED WINE</span>, RASPBERRY SYRUP, FRESH LEMON JUICE. SERVED ON CRUSHED ICE.</p>
						<p class="adapted_from">ADAPTED FROM "THE OLD WALDORF ASTORIA BAR BOOK" BY ALBERT STEVENS CROCKETT, C. 1935</p>
					</li>

					<li>
						<p class="drink_title">CALIFORNIA SHERRY COBBLER</p>
						<p><span class="alcohol_type">AMONTILLADO SHERRY</span>, <span class="alcohol_type">PORT</span> WINE, FRESH JUICES OF PINEAPPLE AND LEMON, DEMERARA SYRUP, ANGOSTURA BITTERS, NUTMEG. SERVED ON CRUSHED ICE.</p>
						<p class="adapted_from">ADAPTED FROM "DR. SIEGERT'S ANGOSTURA BITTERS DRINK GUIDE," 1908</p>
					</li>

					<li>
						<p class="drink_title">GREENBRIER JULEP</p>
						<p><span class="alcohol_type">OLOROSSO SHERRY</span>, <span class="alcohol_type">PINK VERMOUTH</span>, MINT, DEMERARA SYRUP, PEACH BITTERS. SERVED ON CRUSHED ICE.</p>
						<p class="adapted_from">ADAPTED FROM "BARFLIES AND COCKTAILS" BY HARRY MACELHONE, 1927</p>
					</li>

					<li>
						<p class="drink_title">NEGRONI SBAGLIATO</p>
						<p><span class="alcohol_type">CAMPARI</span>, <span>SWEET VERMOUTH</span>, <span class="alcohol_type">PROSECCO</span>. SERVED LONG.</p>
						<p class="adapted_from">MIRKO STOCHETTO, BAR BASSO, 1967</p>
					</li>

					<li>
						<p class="drink_title">ROOFGARDEN</p>
						<p><span class="alcohol_type">BLANC VERMOUTH</span>, GINGER SYRUP, FRESH LIME JUICE, ANGOSTURA BITTERS, SODA WATER. SERVED LONG.</p>
						<p class="adapted_from">ADAPTED FROM "THE OLD WALDORF ASTORIA BAR BOOK" BY ALBERT STEVENS CROCKETT, C. 1935</p>
					</li>

					<li>
						<p class="drink_title">VELVET GLOVE</p>
						<p><span class="alcohol_type">COGNAC</span>, <span class="alcohol_type">CRÉME DE CACAO</span>, <span>COCCHI AMERICANO</span>. STIRRED AND SERVED NEAT WITH A LEMON TWIST.</p>
						<p class="adapted_from">ADAPTED FROM "CAFÉ ROYAL COCKTAIL BOOK" BY WILL TARLING, 1937</p>
					</li>

					<p class="section_header"><span id="the_menu">THE MENU  </span><span id="menu_price"> - $13 </span></p>
					
					<p class="served">BUILT IN THE GLASS OVER A ROCK</p>

					<li>
						<p class="drink_title">HOME ON THE RANGE</p>
						<p><span class="alcohol_type">RYE WHISKEY</span>, <span class="alcohol_type">TRIPLE SEC</span>, <span>SWEET VERMOUTH</span>, ANGOSTURA BITTERS, LEMON AND ORANGE TWISTS.</p>
						<p class="adapted_from">ADAPTED FROM "THE STANDARD COCKTAIL GUIDE" BY CROSBY GAIGE, 1944</p>
					</li>

					<li>
						<p class="drink_title">MY HOPE</p>
						<p><span class="alcohol_type">COGNAC</span>, <span class="alcohol_type">PORT</span> WINE, ANGOSTURA BITTERS, CAYENNE PEPPER, LEMON TWIST.</p>
						<p class="adapted_from">ADAPTED FROM THE FLOWING BOWL, BY WILLIAM SCHMIDT, 1891</p>
					</li>

					<li>
						<p class="drink_title">THE COFFEE HOUSE</p>
						<p><span class="alcohol_type">RYE WHISKEY</span>, <span class="alcohol_type">COFFEE LIQUEUR</span>, ORANGE BITTERS, ORANGE TWIST.</p>
						<p class="adapted_from">ADAPTED FROM "THE SALOON IN THE HOME OR A GARLAND OF RUMBLOSSOMS" BY RIDGELY HUNT & GEORGE S. CHAPPELL, 1930</p>
					</li>

					<p class="served">SHAKEN, AND SERVED STRAIGHT UP</p>

					<li>
						<p class="drink_title">CRIMEAN CUP A LA MARMORA</p>
						<p><span class="alcohol_type">COGNAC</span>, OVERPROOF JAMAICAN <span class="alcohol_type">RUM</span>, FRESH LEMON JUICE, HOUSE MADE ORGEAT*, <span class="alcohol_type">MARASCHINO</span> LIQUEUR, <span class="alcohol_type">CHAMPAGNE</span>, LEMON TWIST.</p>
						<p class="adapted_from">ADAPTED FROM "HOW TO MIX DRINKS, OR THE BON VIVANT'S COMPANION" BY JERRY THOMAS, 1862</p>
					</li>

					<li>
						<p class="drink_title">PISCO-APRICOT TROPICALS</p>
						<p><span class="alcohol_type">PISCO</span>, <span class="alcohol_type">APRICOT LIQUEUR</span>, FRESH LIME JUICE, ANGOSTURA BITTERS.</p>
						<p class="adapted_from">ADAPTED FROM "THE SOUTH AMERICAN GENTLEMAN'S COMPANION, BEING AN EXOTIC DRINKING BOOK OR UP & DOWN THE ANDES WITH JIGGER, BEAKER & FLASK (VOL. I)" BY  CHARLES H. BAKER JR., 1951</p>
					</li>

					<li>
						<p class="drink_title">SHANGHAI</p>
						<p>JAMAICAN <span class="alcohol_type">RUM</span>, HOUSE-MADE GRENADINE, FRESH LEMON JUICE, ABSINTHE, CHERRY.</p>
						<p class="adapted_from">ADAPTED FROM "THE OFFICIAL MIXER'S MANUAL" BY PATRICK GAVIN DUFFY, 1940</p>
					</li>

					<p class="served">SERVED LONG</p>

					<li>
						<p class="drink_title">INVISIBLE GIN HIGHBALL</p>
						<p><span class="alcohol_type">GIN</span>, <span class="alcohol_type">APRICOT LIQUEUR</span>, FRESH JUICES OF PINEAPPLE AND LEMON, HOUSE-MADE GINGER SYRUP, SODA WATER.</p>
						<p class="adapted_from">ADAPTED FROM "HOFFMAN HOUSE BARTENDER'S GUIDE" BY CHARLES S. MAHONEY, 1905</p>
					</li>

					<li>
						<p class="drink_title">NORTHSIDE SPECIAL</p>
						<p>BERMUDAN <span class="alcohol_type">RUM</span>, FRESH JUICES OF ORANGE AND LEMON, SUGAR, SODA WATER.</p>
						<p class="adapted_from">ADAPTED FROM "THE SAVOY COCKTAIL BOOK" BY HARRY CRADDOCK, 1930</p>
					</li>

					<li>
						<p class="drink_title">WEST INDIA COUPEREE</p>
						<p><span class="alcohol_type">COGNAC</span>, ORANGE <span>CURAÇAO</span>, VANILLA ICE CREAM, FRESH LEMON JUICE, SODA WATER, NUTMEG.</p>
						<p class="adapted_from">ADAPTED FROM "HOW TO MIX DRINKS OR BON VIVANT'S COMPANION" BY JERRY THOMAS, 1862</p>
					</li>
					
					<p class="served">STIRRED, AND SERVED STRAIGHT UP</p>

					<li>
						<p class="drink_title">ARAWAK</p>
						<p><span class="alcohol_type">PEDRO XIMENEZ SHERRY</span>, JAMAICAN <span class="alcohol_type">RUM</span>, ANGOSTURA BITTERS, LEMON TWIST, CHERRY.</p>
						<p class="adapted_from">ADAPTED FROM "TRADER VIC'S BARTENDER'S GUIDE" BY VICTOR BERGERON, 1947</p>
					</li>

					<li>
						<p class="drink_title">DRAGON'S BREATH</p>
						<p><span class="alcohol_type">CALVADOS</span>, <span>DRY VERMOUTH</span>, <span class="alcohol_type">APRICOT LIQUEUR</span>, HOT SAUCE, PICKLED WALNUT.</p>
						<p class="adapted_from">ADAPTED FROM "1700 COCKTAILS FOR THE MAN BEHIND THE BAR" BY R. DE FLEURY, 1934</p>
					</li>

					<li>
						<p class="drink_title">TUNNEL</p>
						<p><span class="alcohol_type">GIN</span>, <span>CAMPARI</span>, SWEET AND DRY <span class="alcohol_type">VERMOUTH</span>, ORANGE TWIST, CHERRY.</p>
						<p class="adapted_from">ADAPTED FROM "1700 COCKTAILS FOR THE MAN BEHIND THE BAR" BY R. DE FLEURY, 1934</p>
					</li>

					<p class="served">SHAKEN, AND SERVED DOWN</p>

					<li>
						<p class="drink_title">DIZZY SOUR</p>
						<p><span class="alcohol_type">BOURBON</span>, <span>BENEDICTINE</span>, FRESH LEMON JUICE, DEMERARA SYRUP, OVERPROOF JAMAICAN <span class="alcohol_type">RUM</span>.</p>
						<p class="adapted_from">ADAPTED FROM JAYNE'S BARTENDER'S GUIDE, BY DR. D. JAYNE & SON, INC., 1933</p>
					</li>

					<li>
						<p class="drink_title">INIMITABLE COCKTAIL</p>
						<p>OLD TOM <span class="alcohol_type">GIN</span>, FRESH LEMON JUICE, SUGAR, PEYCHAUD'S BITTERS, CHERRY.</p>
						<p class="adapted_from">ADAPTED FROM "MODERN AMERICAN DRINKS" BY GEORGE A. KAPPELER, 1895</p>
					</li>

					<li>
						<p class="drink_title">UNITED SERVICE PUNCH</p>
						<p>BATAVIA <span class="alcohol_type">ARRACK</span>, SALTED LAPSANG SOUCHONG SYRUP, FRESH LEMON JUICE, NUTMEG, LEMON TWIST.</p>
						<p class="adapted_from">ADAPTED FROM "HOW TO MIX DRINKS OR THE BON VIVANT'S COMPANION" BY JERRY THOMAS, 1862</p>
					</li>

					<p id="other_cocktails" class="section_header">ALL OTHER COCKTAILS</p>
					<p>PLACE YOUR TRUST IN US, FOR WE ARE MORE THAN QUALIFIED TO SATISFY*** - $MP</p>

					<p class="section_header_text border_top">BEER</p>
					<li>
						<p class="drink_title">BELLS TWO HEARTED IPA $7</p>
						<p>KALAMAZOO, MI (USA) 16 OZ. CAN </p>
					</li>

					<li>	
						<p class="drink_title">RADEBURGER PILSNER $6</p>
						<p>RADEBERG, GERMANY (16 OZ. CAN)</p>
					</li>
					<li>	
						<p class="drink_title">BLANCHE DE BRUXELLES $7</p>
						<p>REBECQ, BELGIUM (16 OZ. CAN)</p>
					</li>

					<p class="section_header_text border_top">CIDER</p>

					<li>
						<p class="drink_title">J.K.'S SCRUMPY ORGANIC HARD CIDER $8</p>
						<p>FLUSHING, MI (USA) 16 OZ. CAN</p>
					</li>


					<p class="section_header_text border_top">WINE</p>
					<p><span class="wine_type">RED:</span> <span>$8/$11</p>
					<p><span class="wine_type">WHITE:</span> <span> $8/$11</p>
					<p><span class="wine_type">ROSÉ:</span> <span> $8</p>

					<p><span class="wine_type">CHAMPAGNE:</span> <span class="wine_description">PERRIER-JOUËT GRAND BRUT</span> (ÉPERNAY, FRANCE) <span class="wine_description">$14; $30</span> PER 375ML BOTTLE</p>

					<p class="section_header_text border_top">SIPPING SPIRITS:</p>
					<p>FOR YOUR CONSIDERATION ON THE BACK BAR. <span class="drink_title">$MP</span></p>

					<p class="section_header_text border_top">BAR SNACKS $5 EA</p>
					<p>BEEF JERKY <span><img src="./dot.png" id="dot" ></span>  MIXED NUTS</p>

					<p class="allergies">*CONTAINS INGREDIENTS THAT MAY BE HARMFUL TO INDIVIDUALS WITH NUT ALLERGIES!</p>
					<p class="allergies">**CONTAINS MILK SUGAR/LACTOSE</p>
					<p class="allergies">***UPON YOUR REQUEST, UNCOOKED EGG WHITE, EGG YOLK OR WHOLE EGGS MAY BE INCLUDED AS AN INGREDIENT IN SOME OF OUR COCKTAILS. THESE EGGS HAVE BEEN CAREFULLY STORED AND ARE INDIVIDUALLY CRACKED TO ORDER.</p>
				</div>
				<div id="pdf_link">
					<a class="links" href="Menu v10a.pdf" >VIEW AS PDF</a>
				</div>
			</div>
		</div>
		<div class='row'  id="gallery_container">
			<div class="col-lg-2 col-md-2 hidden-sm hidden-xs side_logo">
				<img class="side_img" src="./left_side.png" >
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div>
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css">
					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"></script>

					<div class="row" id="bar_top">
						<img class="bar_top col-md-12 col-lg-12 hidden-sm hidden-xs" src="./bar_top.png"/>
					</div>

					<h3 class='title_bar'>THE COCKTAILS</h3>

					<div class="fotorama photo-div"
							 data-nav="thumbs"
							 data-loop="true"
						>
						<img src='./img/cocktails/Drink_03.jpg' >
						<img src='./img/cocktails/Drink_05.jpg' >
						<img src='./img/cocktails/Drink_07.jpg' >
						<img src='./img/cocktails/Drink_09.jpg' >
						
						<img src='./img/cocktails/Drink_13.jpg'>
						<img src='./img/cocktails/Drink_14.jpg'>
						<img src='./img/cocktails/Drink_16.jpg'>
					</div>

					<h3 class='title_bar'>THE BAR</h3>

					<div class='fotorama photo-div'
							 data-nav="thumbs"
							 data-loop="true"
						>
						<img src="./img/bar/Bar_1.jpg" >
						<img src="./img/bar/Bar_2.jpg" >
					</div>

					<h3 class='title_bar'>THE ICE</h3>

					<div class='fotorama photo-div'
							 data-nav="thumbs"
							 data-loop="true"
						>
						<img src="./img/ice/Ice_01.jpg" >
						<img src="./img/ice/Ice_03.jpg" >
					</div>
					<a href="https://www.instagram.com/freshkillsbar/">
						<h4 id="insta_text">INSTAGRAM </h4>
					</a>
					<div class='row'>
						<a href="https://www.instagram.com/freshkillsbar/" class="col-lg-2 col-md-2 col-sm-2 col-lg-offset-5 col-md-offset-5 col-sm-offset-5" >
							<img src='./instagram.jpg' id='insta_logo'>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 hidden-sm hidden-xs side_logo">
				<img class="side_img" src="./right_side.png" >
			</div>
		</div>
		<div class="row" id="contact_container">
			<div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
					<img class="secondary_logo" src="./secondary_logo.png"/> 
					<div class="map_logo">
						<a href="https://www.google.com/maps/place/Fresh+Kills+Bar/@40.7147805,-73.9637076,17z/data=!3m1!4b1!4m5!3m4!1s0x89c2596059a773ef:0xdb075cac1a1aecaa!8m2!3d40.7147805!4d-73.9615189"  target="_blank">
							<img src="./map_logo.png"/>
						</a>
					</div>
			
					<form action="mailform.php" method="POST">
						<p class="input_fields">NAME</p> <input type="text" name="name">
						<p class="input_fields">EMAIL</p> <input type="text" name="email">
						<p class="input_fields">SUBJECT</p> <input type="text" name="subject">
						<p class="input_fields">MESSAGE</p><textarea name="message" rows="6" cols="30"></textarea><br />
						<input class="input_fields" type="submit" value="SEND"><input class="input_fields" type="reset" value="CLEAR">
					</form>
			</div>
		</div>
	</div>
	<nav class="nav_black">
		<p id="links_p">
			<a class="nav_items_black" id="home" class="current_link" href="#">HOME</a> 
			<a class="nav_items_black" id="menu" class="links" href="#">THE MENU</a> 
			<a class="nav_items_black" id="gallery" class="links" href="#">PICTURES</a>  
			<a class="nav_items_black" id="contact" class="links" href="#">CONTACT</a>
		</p>
	</nav>

	<footer class="row">
		<div id="footer" class="col-md-12 col-lg-12 col-sm-12 footer_black">
			<p id='footer-text'>COPYRIGHT 2016 FRESH KILLS BAR/JOHN MAGUIRE DESIGNS</p>
		</div>
	</footer>
</body>

</html>