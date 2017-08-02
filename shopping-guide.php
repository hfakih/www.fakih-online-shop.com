<!DOCTYPE>
<?php
	session_start();
	include("inc/db.php");
	include("packages/geo/coordinates.php");
	
	$_SESSION['itemTotal'] = 0;
	
	if(isset($_GET['closeBranchDiv'])){
	  unset($_GET['branch_search_btn']);
    }
	
	
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	
	<title>Fakih online Shop/Shopping Guide</title>
    
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/master.css" media="screen" />
	<!-- shopping guide stylesheet-->
	<link href="css/shopping-guide.css" rel="stylesheet">
    
	<script type="text/javascript" language="javascript">
    	function resetSessions()
		{
  			<?php
				unset($_SESSION["brand_id"]);
				unset($_SESSION["category_id"]);
				unset($_SESSION["product_gender"]);
			?>
		}
    </script>
</head>

<body>
	<!--wrapper begin-->
	<div id="wrapper">
        
		<!--header begin-->
		<?php 
			include('header.php')
		?>
		<!--header end-->
        
		
		
		<div id="top-nav" class="page" data-pname="Shopping Guide">
			<ul  class="list-inline">
			  <li class="link-box"><a class="link-top-nav" data-left-link="link-p1" data-pname="Rückgabe">Rückgabe</a><span class="fa fa-backward icon-top-nav-shop-gui" aria-hidden="true"></span></li>
			  <li class="link-box"><a class="link-top-nav" data-left-link="link-p2" data-pname="Zahlung">Zahlung</a><span class="fa fa-credit-card payment-icons icon-top-nav-shop-gui"></span></li>
			  <li class="link-box"><a class="link-top-nav" data-left-link="link-p3" data-pname="Versand">Versand</a><span class="fa fa-truck icon-top-nav-shop-gui"></span></li>
			  <li class="link-box"><a class="link-top-nav" data-left-link="link-p4" data-pname="AGB">AGB</a><span class="fa fa-eye icon-top-nav-shop-gui" aria-hidden="true"></span></li>
			  <li class="link-box"><a class="link-top-nav" data-left-link="link-p5" data-pname="Allg. Infos">Allg. Infos</a><span class="fa fa-info icon-top-nav-shop-gui" aria-hidden="true"></span></li>
			</ul>
		</div>
		
		<div id="left-nav">
			<h2 id="curent-page"></h2>
			<ul style="margin:0px 0px 10px; padding-left:40px;">
			  <li class="box-lnk-left-nav" data-link-txt="lnk-txt-gui" ><a class="left-link normal" data-pname="Shopping Guide" ><span class="fa fa-book icon-left-nav-shop-gui" aria-hidden="true"></span></a><span id="lnk-txt-gui" class="left-link-txt">Shopping Guide</span></li>
			  <li class="box-lnk-left-nav" data-link-txt="lnk-txt-backward"><a id="link-p1" class="left-link normal"  data-pname="Rückgabe"><span class="fa fa-backward icon-left-nav-shop-gui" aria-hidden="true"></span></a><span id="lnk-txt-backward" class="left-link-txt">Rückgabe</span></li>
			  <li class="box-lnk-left-nav" data-link-txt="lnk-txt-payment"><a id="link-p2" class="left-link normal"  data-pname="Zahlung"><span class="fa fa-credit-card payment-icons icon-left-nav-shop-gui"></span></a><span id="lnk-txt-payment" class="left-link-txt">Zahlung</span></li>
			  <li class="box-lnk-left-nav" data-link-txt="lnk-txt-truck"><a id="link-p3" class="left-link normal"  data-pname="Versand"><span class="fa fa-truck icon-left-nav-shop-gui"></span></a><span id="lnk-txt-truck" class="left-link-txt">Versand</span></li>
			  <li class="box-lnk-left-nav" data-link-txt="lnk-txt-eye"><a id="link-p4" class="left-link normal"  data-pname="AGB"><span class="fa fa-eye icon-left-nav-shop-gui" aria-hidden="true"></span></a><span id="lnk-txt-eye" class="left-link-txt">AGB</span></li>
			  <li class="box-lnk-left-nav" data-link-txt="lnk-txt-info"><a id="link-p5" class="left-link normal"  data-pname="Allg. Infos"><span class="fa fa-info icon-left-nav-shop-gui" aria-hidden="true"></span></a><span id="lnk-txt-info" class="left-link-txt">Allg.Informationen</span></li>
			</ul>
		</div>
		
		<div id="container">
			<div id="rueckgabe" class="page" data-left-link="link-p1" data-pname="Rückgabe">
					<blockquote>Zwei Wochen Rückgabefrist<br />Kostenlose Rückgabe</blockquote>
					<div class ="list-group teaser">
						<div class = "list-group-item">
							<strong class="heading-paragraph">1.Was muss ich tun, um einen Artikel zurückzugeben?</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>
						<div class = "list-group-item">
							<strong class="heading-paragraph">2.Welche Produkte sind von der Rückgabe ausgeschlossen?</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>
					</div>
		<div class ="list-group complete">
			
			
			<div class = "list-group-item">
				<strong class="heading-paragraph">3.Innerhalb welcher Frist ist eine Rückgabe möglich?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">4.Muss ich für die Rückgabe etwas bezahlen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">5.Wie erhalte ich die Rückerstattung?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">6.Wann erhalte ich die Rückerstattung?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">7.Was muss ich tun, wenn der Rückerstattungsbetrag falsch ist?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			

		</div>
<br />
<div class="more">mehr anzeigen</div>




		</div>
					
			
			<div id="zahlung" class=" page" data-left-link="link-p2" data-pname="Zahlung">
		
					

					<blockquote>Jetzt ist es noch einfacher <br />deine Bestellung zu bezahlen</blockquote>
					<div class ="list-group teaser">
						<div class = "list-group-item">
							<strong class="heading-paragraph">1.Welche Zahlungsarten stehen mir für den Online-Einkauf zur Verfügung?</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>	
						<div class = "list-group-item">
							<strong class="heading-paragraph">2.Wann genau wird der Kaufbetrag von meinem Bankkonto abgebucht?</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>
			
					</div>
		<div class ="list-group complete">
			
			<div class = "list-group-item">
				<strong class="heading-paragraph">3.Aus welchem Grund wird meine Kreditkarte nicht akzeptiert?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">4.Kann ich eine Rechnung auf den Namen meiner Firma erhalten?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">5.Kann ich Tax-Free einkaufen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">6.Ist es sicher, auf fakih-online-shop.com mit einer Karte einzukaufen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
		</div>
		<div class="more">mehr anzeigen</div>
		</div>
					

			<div id="versand" class=" page" data-left-link="link-p3" data-pname="Versand">
		
					
<blockquote>In die Filiale vollkommen gratis<br />Standardversand 3.95 Euro<br /> Bei Bestellung ab 50 Euro ist Versand kostenlos</blockquote>
					<div class ="list-group teaser">
						<div class = "list-group-item">
							<strong class="heading-paragraph">1.Wohin kann ich meine Bestellung verschicken lassen?</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>
					    <div class = "list-group-item">
							<strong class="heading-paragraph">2.Kann ich eine Bestellung aus einem Land in ein anderes verschicken lassen?</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>
			
					</div>
		<div class ="list-group complete">
			
			<div class = "list-group-item">
				<strong class="heading-paragraph">3.Wann werde ich meine Bestellung erhalten?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">4.Können Rechnungsanschrift und Lieferanschrift unterschiedlich sein? </strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">5.Kann ich den Stand meiner Bestellung sehen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">6.Welche Nachrichten erhalte ich betreffend den Stand meiner Bestellung?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">7.Welchen Status kann meine Bestellung haben?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">8.An wen muss ich mich wenden, wenn ich meine Bestellung in einer Filiale abhole?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">9.Was geschieht, wenn ich nicht unter der angegebenen Anschrift zu erreichen bin, wenn die Bestellung ausgeliefert wird?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
		</div>
		<div class="more">mehr anzeigen</div>
		</div>
		
			<div id="agb" class=" page" data-left-link="link-p4" data-pname="AGB">
		
					

					<blockquote>Einkaufen auf fakih-online-shop.com ist <br />ein Kinderspiel und macht außerdem Spaß</blockquote>
					<div class ="list-group teaser">
						<div class = "list-group-item">
							<strong class="heading-paragraph">1.EINLEITUNG</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>	
						<div class = "list-group-item">
							<strong class="heading-paragraph">2.UNSERE ANGABEN</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>
			
					</div>
		<div class ="list-group complete">
			
			<div class = "list-group-item">
				<strong class="heading-paragraph">3.IHRE ANGABEN UND NUTZUNG DIESER WEBSITE</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">4.NUTZUNG UNSERER WEBSITE</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">5.VERTRAGSABSCHLUSS</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">6.LIEFERBARKEIT DER PRODUKTE</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">7.ABLEHNUNGSVORBEHALT</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">8.LIEFERUNG</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">9.UNZUSTELLBARE LIEFERUNG</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">10.GEFAHR- UND EIGENTUMSÜBERGANG DER PRODUKTE</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">11.PREIS UND ZAHLUNG</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">12.SCHNELLKAUF</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">13.MEHRWERTSTEUER</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">14.UMTAUSCH- UND RÜCKGABERECHT</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">15.GEISTIGES EIGENTUM</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">16.VIREN, PIRATERIE UND COMPUTERANGRIFFE</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">17.LINKS AUF UNSERER WEBSITE</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">18.SCHRIFTLICHE MITTEILUNGEN</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">19.MITTEILUNGEN</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">20.ÜBERTRAGUNG VON RECHTEN UND PFLICHTEN</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">21.EREIGNISSE HÖHERER GEWALT</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">22.VERZICHT</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">23.VERTRAGSUMFANG</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">24.UNSER RECHT ZUR ÄNDERUNG DIESER BEDINGUNGEN</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">25.RECHT UND GERICHTSBARKEIT</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">26.KOMMENTARE UND ANREGUNGEN</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
		</div>
		<div class="more">mehr anzeigen</div>

		</div>
					
			
			<div id="allg-infos" class="page" data-left-link="link-p5" data-pname="Allg. Infos">
		
					

					<blockquote>Einkaufen auf fakih-online-shop.com ist <br/>ein Kinderspiel und macht außerdem Spaß</blockquote>
					<div class ="list-group teaser">
						<div class = "list-group-item">
							<strong class="heading-paragraph">1.Wähle eines der Sortimente Damen, Herren oder Damen und die Art der Kleidung aus, die du kaufen möchtest (Mäntel, Kleider, Blusen, …).</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>	
						<div class = "list-group-item">
							<strong class="heading-paragraph">2.Du kannst dir alle Artikel genau ansehen. Wenn du etwas Bestimmtes suchst, kannst du die Suche über die Registrierkarten verfeinern:</strong>
							<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
							</p>
						</div>
			
					</div>
		<div class ="list-group complete">
			
			<div class = "list-group-item">
				<strong class="heading-paragraph">3.Hast du gefunden, was dir gefällt?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">4.Hast du auch alle Artikel, die du kaufen möchtest, in den Warenkorb gelegt?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">5.Und schon bist du auf der letzten Seite des Kaufvorgangs. Hier kannst du wählen</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">6.Fertig!</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">7.In welchen Ländern kann man online einkaufen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">8.In welchen Sprachen kann man die Website nutzen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">9.Was kann man auf fakih-online-shop.com kaufen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">10.Muss ich mich registrieren, um einkaufen zu können?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">11.Wie kann ich mein Passwort neu anfordern, wenn ich es vergessen habe?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">12.Wie kann ich meine Daten ändern, nachdem ich mich registriert habe?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">13.Welche Webbrowser kann ich benutzen, um die Website von Fakih richtig sehen zu können?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">14.Welche Bildschirmauflösung benötige ich?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>
			<div class = "list-group-item">
				<strong class="heading-paragraph">15.Ist es sicher, online bei Fakih zu kaufen?</strong>
				<p class="paragraph">Nunc eu urna sed nunc interdum vehicula. Praesent pretium odio a nisi rhoncus feugiat. Nunc vel lorem tortor. Duis semper urna et metus consectetur, id lobortis libero fermentum. Quisque sodales tempus finibus. Suspendisse diam quam, blandit nec rhoncus scelerisque, mollis vel lacus. Vestibulum sed dolor tortor. Aliquam laoreet augue suscipit, facilisis velit et, auctor libero. Proin et vehicula est. Nulla ut enim metus. Nulla facilisi. Vestibulum euismod eget augue vitae maximus. Integer tempor congue quam, vel iaculis nibh. Aenean eu laoreet eros. Donec orci mi, egestas et eros eu, rutrum pellentesque neque. Cras quis libero vel tellus pulvinar auctor non vitae enim.
				</p>
			</div>			
		</div>

		<div class="more">mehr anzeigen</div>
		
		</div>
		</div>
					

		
		
		
		
		
        <!--news letter section begin-->
		<div id="footer4">
			<h2 style="margin-bottom: 10px;font-size: 22px;">Newsletter</h2>
			<form id="newsletter-form" action="" class="form-inline">
			  <div class="form-group">
				<input id="newsletter-email-input" name='newsletter_email_input' type="text" class="form-control" placeholder="Geben Sie eine Emailadresse ein">
			  </div>
			  <button id="newsletter-abo-btn" name="newsletter_abo_btn" type="submit" class="btn btn-default">Abonieren</button>
			 </form>
			 <p id="newsletter-abo-text">Abonnieren Sie unseren Newsletter und bleiben Sie als Erste über die letzten Angebote und vieles mehr informiert
				<br /><br />
				<a href="#" id="newsletter-deactivate-link">Newsletter deaktivieren?</a>			 
			 </p>			
			 <div class="clearer"></div>
		</div>
		<!--news letter section end-->		
		
		<!--contact, about us, shopping guide section begin-->
		<div id="footer3">		
			<div class="list-group footer3-list">
			  <h2 class="footer3-list-title">Brauchen Sie Hilfe?</h2>
			  <a id="link-open-contact-online-shop" href="#" class="list-group-item footer3-list-item">Kontakt (Online Shop)</a>
			  <a id="link-open-contact-office-company" href="#" class="list-group-item footer3-list-item">Kontakt (Büros und Unternehmen)</a>
			  <a href="#" id ="footer3-hotline-list-item" class="list-group-item footer3-list-item"><span id="footer3-hotline-list-item-icon" class="glyphicon glyphicon-earphone"></span>0 800 ---- ---</a>
			</div>
			<div id="footer3-second-list" class="list-group footer3-list">
			  <h2 class="footer3-list-title">Shopping Guide</h2>
			  <a href="#" class="list-group-item footer3-list-item">Allgemeine Informationen</a>
			  <a href="#" class="list-group-item footer3-list-item">Zahlung</a>
			  <a href="#" class="list-group-item footer3-list-item">Versand</a>
			  <a href="#" class="list-group-item footer3-list-item">Rückgabe</a>
			  <a href="#" class="list-group-item footer3-list-item">AGB</a>
			</div>
			<div id="footer3-third-list" class="list-group footer3-list">
			  <h2 class="footer3-list-title">Über Fakih</h2>
			  <a href="#" class="list-group-item footer3-list-item">Über uns</a>
			  <a href="#" class="list-group-item footer3-list-item">Büros</a>
			  <a href="#" class="list-group-item footer3-list-item">Karriere</a>
			  <a href="#" class="list-group-item footer3-list-item">Impressum</a>
			</div>
			<div class="clearer"></div>
		</div>
		<!--contact, about us, shopping guide section begin-->
		
        
        <!--branchs, payment options, shop apps, social links section begin-->
		<div id="footer2"> 
			<div id="branch-search">
				<?php 
					if(!isset($_GET['branch_search_btn'])){
				?>
				<h2 style="margin-bottom: 10px;">Finden Sie Ihre Filiale</h2>
				 <form action="shopping-guide.php?#branch-search" class="form-inline">
				  <div class="form-group" id="zipcode-form-control">
					<input name='zipcode' type="text" class="form-control" id="zipcode" placeholder="Geben Sie eine Postleitzah ein">
				  </div>
				  <button id='branch-search-btn' name="branch_search_btn" type="submit" class="btn btn-default">Suchen</button>
				</form>
				<?php
					} else {
					?>
					<div style="background: #fff;color: #767676;padding: 10px;">
					<form action="shopping-guide.php?" style="position: relative;">
						<button title="Filialenansicht schliessen" name="closeBranchDiv" style="position: absolute;right: 0px;height: 30px;width: 30px;color: #000;background: none;border: 1px solid #000;" type="submit">
							<span class="glyphicon glyphicon-eye-close"></span>
						</button>
					</form>
				    <?php
						$closestBranchFinder = new ClosestBranchFinder($_GET['zipcode']);
					?>
					
					</div>
					
				<?php
					}
				?>
			</div>
			<div>
				<div id="payment-options" style="width: 50%;float: left;">
					<ul class="list-inline" style="margin-top: 20px;height:34px;float: left;">
					  <li><span class="fa fa-cc-visa payment-icons"></span></li>
					  <li><span class="fa fa-cc-paypal payment-icons"></span></li>
					  <li><span class="fa fa-credit-card payment-icons"></span></li>
					</ul>
				
				</div>
				<div id="social-links" style="width: 50%;float: right;">
						<ul class="list-inline" style="margin-top: 20px;height:34px;margin: 20px 0px 0px;padding: 0px 0px 0px 10px;float: right;">Folgen Sie uns auf
						  <li><a class="btn btn-social-icon btn-github social-links"><span class="fa fa-facebook"></span></a></li>
						  <li><a class="btn btn-social-icon btn-github social-links"><span class="fa fa-twitter"></span></a></li>
						  <li><a class="btn btn-social-icon btn-github social-links"><span class="fa fa-instagram"></span></a></li>
						  <li><a class="btn btn-social-icon btn-github social-links"><span class="fa fa-youtube"></span></a></li>
						</ul>				
				</div>
				<div class="clearer"></div>
			</div>
		</div>
		<!--branches, payment options, shop apps, social links section end-->
		
		<!--footer begin-->
        <div id="footer"> 
        	©2017 Fakih Online Shop, Alle Rechte vorbehalten
			<ul class="list-inline" style="float: right;">
			  <li><a href="#" style="color: rgba(255, 255, 255, 0.83);">Allgemeine Geschäftsbedingungen</a></li>
			  <li><a href="#" style="color: rgba(255, 255, 255, 0.83);">Cookie-Richtlinie</a></li>
			  <li><a href="#" style="color: rgba(255, 255, 255, 0.83);">Datenschutzerklärung</a></li>
			</ul>
        </div>
    	<!--footer end-->
		
		<!--back to top button begin-->
		<a href="#top" id ="backToTopBtn" class="well well-sm"><span class="glyphicon glyphicon-arrow-up"></span>&nbsp;Nach oben</a>
		<!--back to top button end-->
		
		<!--contact online shop begin-->
		<div id="contact-online-shop">
			<button id="close-btn-contact-online-shop" title="schliessen">
				<span id="close-icon-contact-online-shop" class="glyphicon glyphicon-remove"></span>
			</button>
			<br /><br />
			<form id="contact-form-online-shop">
				<h2 style="font-size: 22px;text-align: center;">Hier beantworten wir alle Fragen <br/>zum Online Shop Dienst.
					<br><br>
					<span style="margin-right: 10px;" class="glyphicon glyphicon-earphone"></span>0 800 ---- ---
					<br />
					<span style="font-size: 18px;margin-top: 8px;display: inline-block;">Von Montag bis Samstag von 9:00 bis 20:00 Uhr</span>
				</h2>
				<br /><br />					
			    <div class="form-group">
					<label for="lastname-contact-form-online-shop">Name*</label>
					<input id="lastname-contact-form-online-shop" class="form-control contact-form-online-shop-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="firstname-contact-form-online-shop">Vorname*</label>
					<input id="firstname-contact-form-online-shop" class="form-control contact-form-online-shop-form-control" type="text">
				</div> 
				<div class="form-group">
					<label for="email-contact-form-online-shop">Email*</label>
					<input id="email-contact-form-online-shop" class="form-control contact-form-online-shop-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="phone-contact-form-online-shop">Telefon*</label>
					<input id="phone-contact-form-online-shop" class="form-control contact-form-online-shop-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="subject-contact-form-online-shop">Betreff*</label>
					<input id="subject-contact-form-online-shop" class="form-control contact-form-online-shop-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="comment-contact-form-online-shop">Kommentar*</label>
					<textarea id="comment-contact-form-online-shop" class="form-control contact-form-online-shop-form-control"></textarea>
				</div>
				<button id="send-btn-contact-form-online-shop" type="submit" class="btn btn-lg">Senden</button>
			</form>
			<div class="clearer"></div>
		</div>
		<!--contact online shop end-->
    
		<!--contact office, company begin-->
		<div id="contact-office-company">
			<button id="close-btn-contact-office-company" title="schliessen">
				<span id="close-icon-contact-office-company" class="glyphicon glyphicon-remove"></span>
			</button>
			<br /><br />
			<form id="contact-form-office-company">
				<h2 style="font-size: 22px;text-align: center;">Hier beantworten wir alle Fragen <br/>zu unseren Brüros und Unternehmen.
					<br><br>
					<span style="margin-right: 10px;" class="glyphicon glyphicon-earphone"></span>0 800 ---- ---
					<br />
					<span style="font-size: 18px;margin-top: 8px;display: inline-block;">Von Montag bis Samstag von 9:00 bis 20:00 Uhr</span>
				</h2>
				<br /><br />					
			    <div class="form-group">
					<label for="lastname-contact-form-office-company">Name*</label>
					<input id="lastname-contact-form-office-company" class="form-control contact-form-office-company-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="firstname-contact-form-office-company">Vorname*</label>
					<input id="firstname-contact-form-office-company" class="form-control contact-form-office-company-form-control" type="text">
				</div> 
				<div class="form-group">
					<label for="email-contact-form-office-company">Email*</label>
					<input id="email-contact-form-office-company" class="form-control contact-form-office-company-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="phone-contact-form-office-company">Telefon*</label>
					<input id="phone-contact-form-office-company" class="form-control contact-form-office-company-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="subject-contact-form-office-company">Betreff*</label>
					<input id="subject-contact-form-office-company" class="form-control contact-form-office-company-form-control" type="text">
				</div>
				<div class="form-group">
					<label for="comment-contact-form-office-company">Kommentar*</label>
					<textarea id="comment-contact-form-office-company" class="form-control contact-form-office-company-form-control"></textarea>
				</div>
				<button id="send-btn-contact-form-office-company" type="submit" class="btn btn-lg">Senden</button>
			</form>
			<div class="clearer"></div>
		</div>
		<!--contact office, company end-->
	
	</div>
    <!--wrapper end-->
	
	<!--transparent div begin-->
	<div id="transparent-div"></div>
	<!--transparent div end-->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JQuery UI -->
	<script src="javascript/jquery-ui/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascript/bootstrap.min.js"></script>
	<!-- shopping guide javascript-->
	<script src="javascript/shopping-guide.js"></script>	
	<!-- top navigation bar javascript-->
	<script src="javascript/top-navigation-bar.js"></script>
	
	<script>
		$('#backToTopBtn').click(function(){
			$('html,body').animate({scrollTop:0},'slow');return false;
		});
		
		$(window).scroll(function() {
			console.log("scroll ",$(this).scrollTop());
			if ($(this).scrollTop() > 1) {
				$('#backToTopBtn:hidden').stop(true, true).fadeIn();
			} else {
				$('#backToTopBtn').stop(true, true).fadeOut();
			}
		});
		
		// contact online shop begin
		$('#link-open-contact-online-shop').click(function(){
			$('#transparent-div').show();
			$('#contact-online-shop').show();
		});

		
		$('#close-btn-contact-online-shop').click(function(){
			$('#contact-form-online-shop').scrollTop(0);
			$('#transparent-div').hide();
			$('#contact-online-shop').hide();
		});
		// contact online shop end
		
		// contact office, company begin
		$('#link-open-contact-office-company').click(function(){
			$('#transparent-div').show();
			$('#contact-office-company').show();
		});

		
		$('#close-btn-contact-office-company').click(function(){
			$('#contact-form-office-company').scrollTop(0);
			$('#transparent-div').hide();
			$('#contact-office-company').hide();
		});
		// contact office, company end
		
	</script>
		
	
</body>
</html>
