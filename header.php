<nav id="header" class="navbar">
			<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
			
				<form id="form-search" method="post" action="functions/result.php" enctype="multipart/form-data" class="navbar-form navbar-left">
				  <button id="btn-search" type="submit" name="btnsearch"><span class="glyphicon glyphicon-search" aria-hidden="true" style="color: #B0305B;"></span></button>
				  <div class="form-group">
					<input name="txtsearch"  placeholder="Suchen..." type="text">                        
				  </div>
				</form>
				
				<div class="navbar-header navbar-left" style="margin-bottom: 20px;">
				  <a class="navbar-brand" href="http://localhost/shopproject/www.fakih-online-shop.com/"><h1 id="header-title">Fakih Online Shop</h1></a>
				</div>
				
				
				<ul id="list-menulinks" class="nav navbar-nav navbar-right">
					<li class="list-item-menulinks" style="margin-top: 7px;">
						<div id="cont-login-dropdown" class="container" >
							<div id="login-dropdown" class="dropdown">
								<button class="btn btn-default" type="button"><span id="icon-login-btn-login-dropdown" class="glyphicon glyphicon-user"></span></button>
								<div id="arrow-up-login-dropdown"></div>		
								<ul class="dropdown-menu" id="dropdown-menu-login-dropdown">
										  <li><a id="login-link-login-dropdown" tabindex="-1" href="login.php" >Einloggen</a>
											<p id="not-registred-txt-login-dropdown">Sie haben noch kein Konto?<strong><a id="register-link-login-dropdown">Jetzt<br> registrieren</a></strong></p>
										  </li>
										  <li class="divider"></li>
										  <li><a tabindex="-1" href="#" id="account-link" class="aor-link-login-dropdown">Mein Konto</a></li>
										  <li><a tabindex="-1" href="#" id="order-link" class="aor-link-login-dropdown">Meine Bestellungen</a></li>
										  <li><a tabindex="-1" href="#" id="retour-link" class="aor-link-login-dropdown">Rückgabe</a></li>			  
								</ul>
							</div>
						</div>
					</li>
					<li class="list-item-menulinks">
						<a class="link-menulinks" id="link-cart-menulinks" href="functions/basket.php">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="font-size: 22px;color: #B0305B;"></span>
							<span id="badge" class="badge">0</span>
						</a>
					</li>
				</ul>
				
				<ul id="gender-menu" class="nav navbar-nav">
					<a id="link-women-gender-menu"  class="link-gender-menu" data-href="Damen" data-submenu="submenu-women">Damen</a>
					<a id="link-men-gender-menu" class="link-gender-menu" data-href="Herren" data-submenu="submenu-men">Herren</a>
				</ul>
				
				<div id="submenu-women" class="submenu-gender-item">
	<div class="container-submenu-gender-item" data-submenu="submenu-women">
  <div id="new-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-women">
    <button class="btn btn-default" type="button">Neuheiten</button>
    <ul id="dropdown-menu-new" class="dropdown-menu">
      <li><a tabindex="-1" href="#">Kleidung</a></li>
      <li><a tabindex="-1" href="#">Kleidung</a></li>
	  <li><a tabindex="-1" href="#">Kleidung</a></li>
	  <li class="divider"></li>
	  <li><a tabindex="-1" href="#">Geschenke für sie</a></li>
	  <li><a tabindex="-1" href="#">Geschenke für ihn</a></li>
	  <li class="divider"></li>
	  <li><a tabindex="-1" href="#">Jeans Guide</a></li>
	  
	</ul>
  </div>
  <div id="wear-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-women">
    <button class="btn btn-default" type="button">Kleidung</button>
    <ul id="dropdown-menu-wear" class="dropdown-menu">
      <div class="column-wear-dropdown">
		  <li><a tabindex="-1" href="#">Neuheiten</a></li>
		  <li><a tabindex="-1" href="#">Mäntel und Jacken</a></li>
		  <li><a tabindex="-1" href="#">Pullover</a></li>
		  <li><a tabindex="-1" href="http://localhost/shopproject/www.fakih-online-shop.com/women/wear/dress.php">Kleider</a></li>
		  <li><a tabindex="-1" href="#">T-shirts</a></li>
		  <li><a tabindex="-1" href="#">Bodies</a></li>
		  <li><a tabindex="-1" href="#">Hemden</a></li>
		  <li><a tabindex="-1" href="#">Hosen</a></li>		  		
	  </div>
	  <div class="column-wear-dropdown">
		<li><a tabindex="-1" href="#">Jeans</a></li>
		<li><a tabindex="-1" href="#">Röcke</a></li>
		<li><a tabindex="-1" href="#">Shorts</a></li>
		<li><a tabindex="-1" href="#">T-shirts</a></li>
		<li class="divider"></li>
		<li><a tabindex="-1" href="#">Special Prices</a></li>
		<li class="divider"></li>
		<li><a tabindex="-1" href="#">Bademode</a></li>	  	
	  </div>
	  <div class ="clearer"></div>
  
    </ul>
</div>
  <div id="promo-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-women">
    <button class="btn btn-default" type="button">Promo</button>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Winter Season Sale bis 50%</a></li>
    </ul>
  </div>
  <div id="trends-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-women">
    <button class="btn btn-default" type="button">Trends</button>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Tend 1</a></li>
      <li><a tabindex="-1" href="#">Trend 2</a></li>
	  <li><a tabindex="-1" href="#">Trend 3</a></li>
      <li><a tabindex="-1" href="#">Trend 4</a></li>
	  <li><a tabindex="-1" href="#">Trend 5</a></li>
      <li><a tabindex="-1" href="#">Trend 6</a></li>
	  <li><a tabindex="-1" href="#">Trend 7</a></li>
	 </ul>
  </div>
  <div class ="clearer"></div>
</div>

	</div>
	
				<div id="submenu-men" class="submenu-gender-item">
	<div class="container-submenu-gender-item" data-submenu="submenu-men">
  <div id="new-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-men">
    <button class="btn btn-default" type="button">Neuheiten</button>
    <ul id="dropdown-menu-new" class="dropdown-menu">
      <li><a tabindex="-1" href="#">Kleidung</a></li>
      <li><a tabindex="-1" href="#">Kleidung</a></li>
	  <li class="divider"></li>
	  <li><a tabindex="-1" href="#">Geschenke für sie</a></li>
	  <li><a tabindex="-1" href="#">Geschenke für ihn</a></li>
	  <li class="divider"></li>
	  <li><a tabindex="-1" href="#">Jeans Guide</a></li>
	  <li><a tabindex="-1" href="#">Jeans Guide</a></li>	  
	</ul>
  </div>
  <div id="wear-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-men">
    <button class="btn btn-default" type="button">Kleidung</button>
    <ul id="dropdown-menu-wear" class="dropdown-menu">
      <div class="column-wear-dropdown">
		  <li><a tabindex="-1" href="#">Neuheiten</a></li>
		  <li><a tabindex="-1" href="#">Mäntel und Jacken</a></li>
		  <li><a tabindex="-1" href="#">Pullover</a></li>
		  <li><a tabindex="-1" href="#">Jeans</a></li>
		  <li><a tabindex="-1" href="#">T-shirts</a></li>
		  <li><a tabindex="-1" href="#">Bodies</a></li>
		  <li><a tabindex="-1" href="#">Hemden</a></li>
		  <li><a tabindex="-1" href="#">Hosen</a></li>		  		
	  </div>
	  <div class="column-wear-dropdown">
		<li><a tabindex="-1" href="#">Shorts</a></li>
		<li><a tabindex="-1" href="#">Shorts</a></li>
		<li><a tabindex="-1" href="#">T-shirts</a></li>
		<li class="divider"></li>
		<li><a tabindex="-1" href="#">Special Prices</a></li>
		<li class="divider"></li>
		<li><a tabindex="-1" href="#">Bademode</a></li>	  	
	  </div>
	  <div class ="clearer"></div>
  
    </ul>
</div>
  <div id="promo-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-men">
    <button class="btn btn-default" type="button">Promo</button>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Winter Season Sale bis 50%</a></li>
    </ul>
  </div>
  <div id="trends-dropdown" class="dropdown dropdown-genderitemsubmenu" data-submenu="submenu-men">
    <button class="btn btn-default" type="button">Trends</button>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Tend 1</a></li>
      <li><a tabindex="-1" href="#">Trend 2</a></li>
	  <li><a tabindex="-1" href="#">Trend 3</a></li>
      <li><a tabindex="-1" href="#">Trend 4</a></li>
	  <li><a tabindex="-1" href="#">Trend 5</a></li>
      <li><a tabindex="-1" href="#">Trend 6</a></li>
	  <li><a tabindex="-1" href="#">Trend 7</a></li>
	 </ul>
  </div>
  <div class ="clearer"></div>
</div>

	</div>
	
			
			</div>
		</nav>
		