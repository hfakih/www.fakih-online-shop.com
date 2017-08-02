$(document).ready(function(){
	
	$('#content').on('click','.icon-overview',function(){
		$('#transparent-div').show();
		$('.popup-win').show();
	});
	
	$("#carousel-productoverviewwin .carousel-indicators li").click(function(){ 
        var index = $(this).attr('data-slide-to'); 
		$("#carousel-productoverviewwin").carousel(parseInt(index));
    });
	$("#carousel-productoverviewwin .left").click(function(){ 
		$("#carousel-productoverviewwin").carousel('prev');
	});
    $("#carousel-productoverviewwin .right").click(function(){ 
        $("#carousel-productoverviewwin").carousel('next');
    });
	
	$('#carousel-productoverviewwin').carousel({
		interval: false
	}); 
	
});