$(document).ready(function(){
	
	$('#content').on('mouseover', '.owncarousel', function(){
		var wrapIconOverview = $(this).find('.wrap-icon-overview');
	var iconOverview = wrapIconOverview.find('.icon-overview');
	
	iconOverview.each(function(){
		$(this).css('font-weight','600');
		$(this).hover(function(){
			var titleIcover = wrapIconOverview.find('.title-icover');
			titleIcover.each(function(){
				$(this).show();
			});
		},function(){
			var titleIcover = wrapIconOverview.find('.title-icover');
			titleIcover.each(function(){
				$(this).hide();
			});
		});
	});
	
	
		
		var carouselControls = $(this).find('.control-owncarousel');
			carouselControls.each(function(){
				$(this).show();
			});
	});


$('#content').on('mouseout', '.owncarousel', function(){
	var wrapIconOverview = $(this).find('.wrap-icon-overview');
	var iconOverview = wrapIconOverview.find('.icon-overview');
	iconOverview.each(function(){
		$(this).css('font-weight','300');
	});

	
	
	var carouselControls = $(this).find('.control-owncarousel');
	carouselControls.each(function(){
		$(this).hide();
	});
});



$('#content').on('click', '.lcontrol-owncarousel', function () {
					  var parent = $(this).closest('div[class="owncarousel"]'); 
					  var parentId = parent.attr('id');
					   
					  var activeItem = $('#'+parentId + ' .iactive-owncarousel');
					  var prev = $('#'+parentId +' .'+activeItem.attr('data-prev'));
					  
					  activeItem.hide("slide", { direction: "right" }, 0, function(){
						  prev.show("slide", { direction: "left" }, 0, function(){
								activeItem.removeClass('iactive-owncarousel');
								$(this).addClass('iactive-owncarousel');									
						  });
					 });  
					  
				});
				
				
				$('#content').on('click', '.rcontrol-owncarousel', function () {
					   var parent = $(this).closest('div[class="owncarousel"]'); 
					  var parentId = parent.attr('id');
					   
					  var activeItem = $('#'+parentId + ' .iactive-owncarousel');
					  var next = $('#'+parentId +' .'+activeItem.attr('data-next'));
					  
					  activeItem.hide("slide", { direction: "left" }, 0, function(){
						  next.show("slide", { direction: "right" }, 0, function(){
								activeItem.removeClass('iactive-owncarousel');
								$(this).addClass('iactive-owncarousel');									
						  });
					 });  
				});
	
});

$('#content').on('mouseover', '.title-owncarousel', function () {
	$(this).css('text-decoration','none');
});

$('#content').on('click', '.wrap-siblings span', function () {
		var id= $(this).attr('id');
		var xhttp;
		var col = $(this).closest('.col-md-6');
		var p;
		var html;
				
		if(getCookie("viewDressPage") === "3"){
			col.css('width','33%');
		}else{
			col.css('width','50%');
		}
		
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				
				p = eval(this.response);
				
				html='<div id="owncarousel-c-'+p[0].id+'" class="owncarousel">'+
						'<div class="inner-owncarousel">'+
							'<div data-prev="i4-owncarousel" data-next="i2-owncarousel" class="item-owncarousel i1-owncarousel" ><img class="img-owncarousel" src="'+p[0].img+'" /></div>'+
							'<div data-prev="i1-owncarousel" data-next="i3-owncarousel" class="item-owncarousel i2-owncarousel" ><img class="img-owncarousel" src="'+p[0].img2+'" /></div>'+
							'<div data-prev="i2-owncarousel" data-next="i4-owncarousel" class="item-owncarousel i3-owncarousel" ><img class="img-owncarousel" src="'+p[0].img3+'" /></div>'+
							'<div data-prev="i3-owncarousel" data-next="i1-owncarousel" class="item-owncarousel i4-owncarousel iactive-owncarousel" ><img class="img-owncarousel" src="'+p[0].img4+'" /></div>'+
						'</div>'+
				
						'<a class="control-owncarousel lcontrol-owncarousel"><span class="glyphicon glyphicon-chevron-left"></span></a>'+
						'<a class="control-owncarousel rcontrol-owncarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>'+
						'<div class="wrap-icon-overview" style="position: absolute;bottom: 10px;right: 10px;"><span class="title-icover">Überblick</span>&nbsp;<span class="glyphicon glyphicon-eye-open icon-overview"></span></div>'+
					'</div>'+
					'<p style="text-align: center; margin-top:20px; padding-left: 10px;padding-right: 10px;"><a style="color: rgb(51, 51, 51);" href="">'+p[0].title+'</a></p>'+
					'<p style="font-weight: bold;text-align: center;">'+p[0].price+'  €</p>' +
					'<p style="position: relative; text-align:center;" class="wrap-siblings">'+ siblings_2(p[0],p[0].id) +'</p>';
				
				
				col.html(html);
				
				if(getCookie("viewDressPage") === "3"){
					
					var img = col.find('.img-owncarousel')
					img.css('width','100%');
					var carousel = col.find('.owncarousel');
					carousel.css('height','267.567px');
				}
				
				
			}
		};
		xhttp.open("GET", "../../scripts/getproduct.php?id="+id, true);

		xhttp.send();
		
		
		
		
	});
	