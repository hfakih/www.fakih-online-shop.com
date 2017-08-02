<!DOCTYPE>
<?php
	session_start();
	include("../../inc/db.php");
	include("../../packages/geo/coordinates.php");
	
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
	
	
	<title>Fakih Online Shop/Frauen/Kleidung/Kleider</title>
    
	<!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/bootstrap-social.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../../css/master.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="../../css/register-window.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="css/dress.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="css/popup-win.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="css/product-overview-popup-win.css" media="screen" />	
	<link href="css/jquery-ui.css" rel="stylesheet">
	
	
	
</head>

<body>
	<!--wrapper begin-->
	<div id="wrapper">
		<!--header begin-->
		<?php 
			include('../../header.php');
			
		?>
		<!--header end-->
        
        <!--top div begin-->
		<div id="top">
			<div style="float: left;padding-left: 20px;">
				<ol class="breadcrumb">
					<li class="nolinkli-breadcrumb-topdiv">Damen</li>
					<li class="nolinkli-breadcrumb-topdiv">Kleidung</li>
					<li><a href="<?php echo $_SERVER['PHP_SELF'];?>">Kleider</a></li>        
				</ol>
			</div>
			<div style="float: left;margin-left: 280px; position: relative;">
				<div style="float:left; margin-top:8px;">Ordnen:</div> 
				<div id="wrap-orderdropdown" style="position: absolute; left: 50px; background:#fff; margin-left:5px; margin-top:2px;">
					<div id="orderfilter" class="dropdown" >
						<button id="dropdowntoggle-orderfilter" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span id="value-dropdowntoggle-orderfilter">Popularität</span>
							<span class="caret"></span></button>
						<ul id="dropdownmenu-orderfilter" class="dropdown-menu">
						  <li><a class="orderfiltercontent" data-active="true" data-title="Popularität" data-value="popularitaet" href="#">Popularität</a></li>
						  <li><a class="orderfiltercontent" data-active="false" data-title="Aufsteigende Preise" data-value="aufsteigend" href="#">Aufsteigende Preise</a></li>
						  <li><a class="orderfiltercontent" data-active="false" data-title="Absteigende Preise" data-value="absteigend" href="#">Absteigende Preise</a></li>
						</ul>
					</div>
				</div>
				<div class="clearer"></div>
			</div>
			<ul id="viewopt-topdiv" style="float: right;padding-right: 20px;" class="list-inline">Anzeigen 
				<li><a class="link-viewopttopdiv" data-column="2" href="">2</a></li>
				<li><a class="link-viewopttopdiv" href="" data-column="3">3</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
		<!--top div end-->
		
		<!--left div begin-->
		<div id="left">
			<div style="position:relative;">
				<p id="resultwrap-topdiv"><span></span>&nbsp;Ergebnisse</p>
				<div id="deletefilterwrap"><a href="#">Filter löschen</a></div>
				<div class="dropdown dropdown-leftdiv open">
					<button class="btn btn-primary dropdown-toggle dropdowntoggle-leftdiv" type="button" data-toggle="dropdown" aria-expanded="true">Farbe<span class="glyphicon glyphicon-chevron-up"></span></button>
					<ul  class="dropdown-menu list-inline dropdownmenu-colorfilter dropdownmenu-leftdiv">
						 <li><span id="colorfiltercontentff0000" class="checkbox-colorfilter" data-checked="false" style="background:#ff0000;"></span></li>
						 <li><span id="colorfiltercontent808080" class="checkbox-colorfilter" data-checked="false" style="background: #808080;"></span></li>
						 <li><span id="colorfiltercontent000000" class="checkbox-colorfilter" data-checked="false" style="background:#000000;"></span></li>
						 <li><span id="colorfiltercontenta52a2a" class="checkbox-colorfilter" data-checked="false" style="background:#a52a2a;"></span></li>
						 <li><span id="colorfiltercontentffc0cb" class="checkbox-colorfilter" data-checked="false" style="background:#ffc0cb;"></span></li>
						 <li><span id="colorfiltercontent0000ff" class="checkbox-colorfilter" data-checked="false" style="background:#0000ff;"></span></li>
						 <li><span id="colorfiltercontentffff00" class="checkbox-colorfilter" data-checked="false" style="background:#ffff00;"></span></li>
						 <li><span id="colorfiltercontentffa500" class="checkbox-colorfilter" data-checked="false" style="background:#ffa500;"></span></li>
						 <li><span id="colorfiltercontent008000" class="checkbox-colorfilter" data-checked="false" style="background:#008000;"></span></li>
					 </ul>
				</div>
				
				<div class="dropdown dropdown-leftdiv open">
					<button class="btn btn-primary dropdown-toggle dropdowntoggle-leftdiv" type="button" data-toggle="dropdown" aria-expanded="true">Größe<span class="glyphicon glyphicon-chevron-up"></button>
					<ul class="dropdown-menu list-inline dropdownmenu-sizefilter dropdownmenu-leftdiv" >
						<!--<li class="checkbox"><label><input value="" type="checkbox">Alle Größen</label></li>-->
						<li><span id="sizefiltercontentM-L" class="checkbox-sizefilter" data-checked="false" data-value="M-L"></span>M-L</li>
						<li><span id="sizefiltercontentXS-S" class="checkbox-sizefilter" data-checked="false" data-value="XS-S"></span>XS-S</li>
						<li><span id="sizefiltercontentXS" class="checkbox-sizefilter" data-checked="false" data-value="XS" ></span>XS</li>
						<li><span id="sizefiltercontentS" class="checkbox-sizefilter" data-checked="false" data-value="S" ></span>S</li>
						<li><span id="sizefiltercontentM" class="checkbox-sizefilter" data-checked="false" data-value="M"></span>M</li>
						<li><span id="sizefiltercontentL" class="checkbox-sizefilter" data-checked="false" data-value="L"></span>L</li>			  
					</ul>
				</div>
	
				<div class="dropdown dropdown-leftdiv open">
					<button class="btn btn-primary dropdown-toggle dropdowntoggle-leftdiv" type="button" data-toggle="dropdown" aria-expanded="true">Preis<span class="glyphicon glyphicon-chevron-up"></button>
					<ul class="dropdown-menu list-inline dropdownmenu-leftdiv" >
						<li>
							<p id="amount" style="border:0; color:#333; font-weight:bold;">
								<!--<input type="text" id="amount" readonly style="border:0; color:#333; font-weight:bold;">-->
							</p>
							<div id="slider-range"></div>
						</li>
					</ul>
				</div>
				<div class="clearer"></div>
			</div>
		</div>
		
		<!--left div end -->
		
		<!--content begin-->
        <div id="content" class="container">
		</div>
		<div class="clearer"></div>
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
				 <form action="dress.php?#branch-search" class="form-inline">
				  <div class="form-group" id="zipcode-form-control">
					<input name='zipcode' type="text" class="form-control" id="zipcode" placeholder="Geben Sie eine Postleitzah ein">
				  </div>
				  <button id='branch-search-btn' name="branch_search_btn" type="submit" class="btn btn-default">Suchen</button>
				</form>
				<?php
					} else {
					?>
					<div style="background: #fff;color: #767676;padding: 10px;">
					<form action="dress.php?" style="position: relative;">
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
		
		<!--product overview win begin-->
		<?php include('product-overview-popup-win.php'); ?>
		<!--product overview win end-->
		
		
	
	
	</div>
    <!--wrapper end-->
	
	<!--transparent div begin-->
	<div id="transparent-div"></div>
	<!--transparent div end-->
	
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	-->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	-->
    <script src="javascript/jquery.js"></script>
	<!-- JQuery UI -->
	<script src="javascript/jquery-ui/jquery-ui.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../javascript/bootstrap.min.js"></script>
	<!-- top navigation bar javascript-->
	<script src="../../javascript/top-navigation-bar.js"></script>
	<!-- cookie javascript-->
	<script src="javascript/cookie.js"></script>
	<!-- viewopt javascript-->
	<script src="javascript/viewopt.js"></script>
	<!-- functions javascript-->
	<script src="javascript/functions.js"></script>
	<!-- filters javascript-->
	<script src="javascript/filters.js"></script>
	<!-- url updater javascript-->
	<script src="javascript/url-updater.js"></script>
	<!-- carousel javascript-->
	<script src="javascript/carousel.js"></script>
	<!-- popup win javascript-->
	<script src="javascript/popup-win.js"></script>
	<!-- product overview popup win javascript-->
	<script src="javascript/product-overview-popup-win.js"></script>
	
	
	<script>
		
		
		
		$(window).scroll(function(){
			var botHeader = $('#header').outerHeight();
			if(window.pageYOffset < botHeader)
			{
				$('#top').removeClass('posfixed-topdiv');
				$('#left').removeClass('posfixed-leftdiv');
			}else{
				$('#top').addClass('posfixed-topdiv');
				$('#left').addClass('posfixed-leftdiv').css('top','102px');
			}
		});
		
		
		
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

		$('#top .breadcrumb a').click(function(){$(this).css('text-decoration','none');});
		
		
		$(document).ready(function(){
			
			
			
			$( "body,.dropdown-leftdiv").click(function( event ) {
				  event.stopPropagation();
				  // Do something
			});	
			
			
			$(".dropdowntoggle-leftdiv").click(function(){
				var dropdown = $(this).closest('.dropdown');
				if(dropdown.hasClass('open') == true){
					dropdown.removeClass('open');
					$(this).attr('data-expanded','true');
				}
				else{
					dropdown.addClass('open');
					$(this).attr('data-expanded','false');
				}
			});
			
			
			
		});
		
	</script>
		
	<?php
		if(isset($_GET['page'])){
			echo '<script>
				$(".pagination-links").removeClass("pagination-links-cur");
				$(".pagination-links").addClass("pagination-links-no"); 			
				$("#pagination-link-'.$_GET['page'].'").addClass("pagination-links-cur");
				$("#pagination-link-'.$_GET['page'].'").removeClass("pagination-links-no");			
				</script>';
		}
		
		if(isset($_POST["buyItem"]) || isset($_SESSION["basket_array"]))
		{
			foreach ($_SESSION["basket_array"] as $each_product)  
			{
				$product_quantity = $each_product['quantity'];
				$_SESSION['itemTotal'] = $_SESSION['itemTotal'] + $product_quantity;
		
			}
			echo '<script>$("#badge").html("'.$_SESSION['itemTotal'].'");</script>';
		}
		
	?>
</body>
</html>
