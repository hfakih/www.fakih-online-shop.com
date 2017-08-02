$(document).ready(function(){
	
	//viewopt div
	$('#viewopt-topdiv a').click(function(e){
		$('#viewopt-topdiv a').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
		showProducts('kleider', parseInt($(this).attr('data-column')));
		setCookie('viewDressPage', parseInt($(this).attr('data-column')), 1);
	});
	
	if(getCookie('viewDressPage') !=''){
		$('#viewopt-topdiv a').removeClass('active');
		
		showProducts('kleider', parseInt(getCookie('viewDressPage')));
		$('a[data-column="'+getCookie('viewDressPage')+'"]').addClass('active');
	
	}else{
		
		showProducts('kleider', 2);
		$('a[data-column="2"]').addClass('active');
		
	}
	
});