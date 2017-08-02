$(document).ready(function(){




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
//setCookie('linkGenderMenu', '', 1);
	


$(window).scroll(function(){
	


//top navigation bar begin
			var botHeader = $('#header').outerHeight();
			if(window.pageYOffset < botHeader)
			{
				$('#header-title').show();
				$('#gender-menu').show();
				$('#header').removeClass('navbar-fixed-top');
				
				$('#header').css({'height':'136px','min-height':'136px','padding-top':'25px'});
				
				$('#form-search').removeClass('form-search-small-header');
				$('#list-menulinks').removeClass('list-menulinks-small-header');
				if(getCookie('linkGenderMenu') == 'link-men-gender-menu'){
					$('#submenu-men').removeClass('submenu-gender-item-small-header');
				}else if(getCookie('linkGenderMenu') == 'link-women-gender-menu'){
					$('#submenu-women').removeClass('submenu-gender-item-small-header');
				}
			}
			else
			{
				
				
				$('#header-title').css('display','none');
				$('#gender-menu').css('display','none');				
				$('#header').css({'left':'50%','margin-left':'-500px'}).addClass('navbar-fixed-top');
				
				$('#header').css({'height':'60px','min-height':'60px','padding-top':'0px'});
				$('#form-search').addClass('form-search-small-header');
				$('#list-menulinks').addClass('list-menulinks-small-header');
				
				if(getCookie('linkGenderMenu') == 'link-men-gender-menu'){
					$('#submenu-men').addClass('submenu-gender-item-small-header');
				}else if(getCookie('linkGenderMenu') == 'link-women-gender-menu'){
					$('#submenu-women').addClass('submenu-gender-item-small-header');
				}
			}
			//top navigation bar end
			
});



$('a.link-gender-menu').click(function(){
	$('a.link-gender-menu').removeClass('link-gender-menu-active');
	$(this).addClass('link-gender-menu-active');
	var id = $(this).attr('id');
	setCookie('linkGenderMenu', id, 1);
	if($(this).attr('data-href')=='Damen'){
		location.replace( 'http://localhost/shopproject/www.fakih-online-shop.com/women.php');
		setCookie('scardLinkCategoryWomen', '', 1 );
	}else if($(this).attr('data-href')=='Herren'){
		location.replace( 'http://localhost/shopproject/www.fakih-online-shop.com/men.php');
	}
	
	var contWidth = 0;
	var submenu = $(this).attr('data-submenu');
	$('.dropdown[data-submenu="'+submenu+'"]').each(function(){
		contWidth += ($(this).width() + parseInt($(this).css('margin-right')));
	});
	
	$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width(contWidth);
	$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').css('margin-left', -$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width()/2);
	
	$('.submenu-gender-item').hide();
	$('#'+$(this).attr('data-submenu')).fadeIn('fast');
});


var genderCookie = getCookie('linkGenderMenu');


if(genderCookie == 'link-men-gender-menu'){

	
	var id = genderCookie;
	$('a.link-gender-menu').removeClass('link-gender-menu-active');
	$('#'+id).addClass('link-gender-menu-active');
	var contWidth = 0;
	var submenu = $('#'+id).attr('data-submenu');
	
	$('.dropdown[data-submenu="'+submenu+'"]').each(function(){
		contWidth += ($(this).width() + parseInt($(this).css('margin-right')));
	});
	
	$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width(contWidth);
	$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').css('margin-left', -$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width()/2);
	
	
	$('.submenu-gender-item').hide();
	$('#'+submenu).show();
	
	
}else if(genderCookie == 'link-women-gender-menu'){
	var id = genderCookie;
	$('a.link-gender-menu').removeClass('link-gender-menu-active');
	$('#'+id).addClass('link-gender-menu-active');
	var contWidth = 0;
	var submenu = $('#'+id).attr('data-submenu');
	
	$('.dropdown[data-submenu="'+submenu+'"]').each(function(){
		contWidth += ($(this).width() + parseInt($(this).css('margin-right')));
	});
	
	$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width(contWidth);
	$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').css('margin-left', -$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width()/2);
	
	
	$('.submenu-gender-item').hide();
	$('#'+submenu).show();
	

}




$(function() {
        $(".dropdown-genderitemsubmenu").hover(
            function(){ $(this).addClass('open') },
            function(){ $(this).removeClass('open') }
        );
    });
	

	
	
	$('.dropdown button, .dropdown-menu a').on('click', function(){$(this).css('background', 'none')});
	
	$('.column-wear-dropdown a').on('click', function(){$(this).css('text-decoration', 'none')});
	
	
	
	
	$('#login-dropdown').hover(function(){$('#dropdown-menu-login-dropdown').show(); $('#arrow-up-login-dropdown').show();},function(){$('#dropdown-menu-login-dropdown').hide(); $('#arrow-up-login-dropdown').hide();});
	
	
	$('#login-dropdown button').click(function(){
		location.replace( 'http://localhost/shopproject/www.fakih-online-shop.com/login.php');
	});
		
	
	/*>for testing*/
	setCookie('isLoggedIn', 'false', 1);
	/*for testing <*/
	
	$('#account-link').click(function(){		
		if(getCookie('isLoggedIn') == 'false'){
			location.replace( 'http://localhost/shopproject/www.fakih-online-shop.com/login.php');
		}else if(getCookie('isLoggedIn') == 'true'){
			
		}
	});
	
	$('#order-link').click(function(){
		if(getCookie('isLoggedIn') == 'false'){
			location.replace( 'http://localhost/shopproject/www.fakih-online-shop.com/login.php');
		}else if(getCookie('isLoggedIn') == 'true'){
			
		}
	});
	
	$('#retour-link').click(function(){
		if(getCookie('isLoggedIn') == 'false'){
			location.replace( 'http://localhost/shopproject/www.fakih-online-shop.com/login.php');
		}else if(getCookie('isLoggedIn') == 'true'){
			
		}
	});
	
	//small card
	
	$('.scard-link-women').click(function(){
		var scardLinkCategory = $(this).attr('data-cat');
		setCookie('scardLinkCategoryWomen', scardLinkCategory, 1 );		
	});
	
	if(getCookie('scardLinkCategoryWomen') != ''){
		var submenu = $('#submenu-women');
		var dropdownToggle = submenu.find('#wear-dropdown button');
		dropdownToggle.css({'font-weight':'600','border-bottom':'2px solid #000'});
	}
});