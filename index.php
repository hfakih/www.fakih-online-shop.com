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
	
	
	<title>Fakih Online Shop</title>
    
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/master.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="css/register-window.css" media="screen" />
	
</head>

<body>
	<!--wrapper begin-->
	<div id="wrapper">
		<!--header begin-->
		<?php 
			include('header.php')
		?>
		<!--header end-->
        
        <!--content begin-->
        <div id="content">
        	<div id="main">
				<div id="women-department" style="float: left;">
				 <a data-link-top-nav="link-women-gender-menu" title="Damen"><img src="images/woman.jpg"></a>
				</div>
				<div id="men-department" style="float: right;">
				 <a data-link-top-nav="link-men-gender-menu" title="Herren"><img src="images/man.jpg"></a>
				</div>
				<div class="clearer"></div>
			</div>
        </div>
        <!--content end-->
		
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
			  <a href="shopping-guide.php?#allg-infos" class="list-group-item footer3-list-item">Allgemeine Informationen</a>
			  <a href="shopping-guide.php?#zahlung" class="list-group-item footer3-list-item">Zahlung</a>
			  <a href="shopping-guide.php?#versand" class="list-group-item footer3-list-item">Versand</a>
			  <a href="shopping-guide.php?#rueckgabe" class="list-group-item footer3-list-item">Rückgabe</a>
			  <a href="shopping-guide.php?#agb" class="list-group-item footer3-list-item">AGB</a>
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
				 <form action="index.php?#branch-search" class="form-inline">
				  <div class="form-group" id="zipcode-form-control">
					<input name='zipcode' type="text" class="form-control" id="zipcode" placeholder="Geben Sie eine Postleitzah ein">
				  </div>
				  <button id='branch-search-btn' name="branch_search_btn" type="submit" class="btn btn-default">Suchen</button>
				</form>
				<?php
					} else {
					?>
					<div style="background: #fff;color: #767676;padding: 10px;">
					<form action="index.php?" style="position: relative;">
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
			  <li><a href="shopping-guide.php?#agb" style="color: rgba(255, 255, 255, 0.83);">Allgemeine Geschäftsbedingungen</a></li>
			  <li><a href="#" style="color: rgba(255, 255, 255, 0.83);">Cookie-Richtlinie</a></li>
			  <li><a href="#" style="color: rgba(255, 255, 255, 0.83);">Datenschutzerklärung</a></li>
			</ul>
        </div>
    	<!--footer end-->
		
		<!--back to top button begin-->
		<a href="#top" id ="backToTopBtn" class="well well-sm">Nach oben</a>
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
		
		<!--register window begin-->
		<div id="register-win">
	<button id="close-btn-register-win" title="schliessen">
		<span id="icon-close-btn-register-win" class="glyphicon glyphicon-remove"></span>
	</button>
	<br><br>
	<form id="form-register-win">
		<h2 style="font-size: 22px;text-align: center;text-transform: uppercase;">
			Registrieren		
		</h2>
		<br><br>					
		<div class="form-group">
			<label for="email-form-register-win" class="label-ep-form-register-win">Email</label>
			<input id="email-form-register-win" class="form-control form-control-form-register-win" type="text">
		</div>
		<div class="form-group">
			<label for="password-form-register-win" class="label-ep-form-register-win">Passwort</label>
			<input id="password-form-register-win" class="form-control form-control-form-register-win" type="text">
		</div> 
		<div class="form-group">
			<input id="no-logout-checkbox" type="checkbox">
      <label for="no-logout-checkbox" class="label-checkbox-form-register-win">Nicht abmelden</label>					
</div>
		<div class="form-group" style="position: relative;">
			<input id="info-using-email-checkbox" style="position: absolute;" type="checkbox">
      <label for="info-using-email-checkbox" class="label-checkbox-form-register-win" style="margin-left: 20px;">Ich möchte interessante Informationen von Fakih <br>per Email erhalten</label>					
</div>
<div class="form-group">
			<input id="accept-data-protection-checkbox" type="checkbox">
      <label for="accept-data-protection-checkbox" class="label-checkbox-form-register-win">Ich akzeptiere die Datenschutzerklärung</label>					
</div>
		<button id="send-btn-form-register-win" type="submit" class="btn btn-lg">Registrieren</button>
		
		<button id="cancel-btn-form-register-win" class="btn btn-lg">Abbrechen</button>
	</form>
			<div class="clearer"></div>
		</div>
		<!--register window end-->
	
	
	</div>
    <!--wrapper end-->
	
	<!--transparent div begin-->
	<div id="transparent-div"></div>
	<!--transparent div end-->
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascript/bootstrap.min.js"></script>
	<!-- top navigation bar javascript-->
	<script src="javascript/top-navigation-bar.js"></script>
	<!-- department javascript-->
	<script src="javascript/department.js"></script>
	
	
	<script>
		$(document).ready(function(){
		
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
		
		// register window begin
		$('#register-link-login-dropdown').click(function(){
			$('#transparent-div').show();
			$('#register-win').show();
		});

		
		$('#close-btn-register-win').click(function(){
			$('#form-register-win').scrollTop(0);
			$('#transparent-div').hide();
			$('#register-win').hide();
		});
		// register window end
		
		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}

		function checkCookie() {
			var user = getCookie("username");
			if (user != "") {
				alert("Welcome again " + user);
			} else {
				user = prompt("Please enter your name:", "");
				if (user != "" && user != null) {
					setCookie("username", user, 365);
				}
			}
		}

		/*
		* ------------------------------------------------------------------------------------------------------------------------------
		*/
		var genderCookie = getCookie('linkGenderMenu');
		
		$(window).load(function(){
			
		
			if(genderCookie == 'link-women-gender-menu'){
				window.location = 'women.php';
			}else if(genderCookie == 'link-men-gender-menu'){
				window.location = 'men.php';
			}
			
		});

		
		
		});
		
	</script>
</body>
</html>
