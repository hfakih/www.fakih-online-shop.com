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
	
	$('#women-department a, #men-department a').click(function(){
		$('a.link-gender-menu').removeClass('link-gender-menu-active');
		$('#'+$(this).attr('data-link-top-nav')).addClass('link-gender-menu-active');

		
		var id = $('#'+$(this).attr('data-link-top-nav')).attr('id');
		setCookie('linkGenderMenu', id, 1);
	
		if($('#'+$(this).attr('data-link-top-nav')).attr('data-href')=='Damen'){
			window.location.href = 'women.php';
		}else if($('#'+$(this).attr('data-link-top-nav')).attr('data-href')=='Herren'){
			window.location.href = 'men.php';
		}
		
		var contWidth = 0;
		var submenu = $('#'+$(this).attr('data-link-top-nav')).attr('data-submenu');
		
		$('.dropdown[data-submenu="'+submenu+'"]').each(function(){
			contWidth += ($(this).width() + parseInt($(this).css('margin-right')));
		});
	
		$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width(contWidth);
		$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').css('margin-left', -$('.container-submenu-gender-item[data-submenu="'+submenu+'"]').width()/2);
		
		$('.submenu-gender-item').hide();
		
		$('#'+$('#'+$(this).attr('data-link-top-nav')).attr('data-submenu')).fadeIn('fast');
		
	});
});