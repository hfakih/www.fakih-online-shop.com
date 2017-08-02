//$('html,body').height($(document).height());

$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">Shopping Guide</span>');
		$('#left-nav ul').hide();
		$('#left-nav').show('slide', {direction: 'left'}, 1000);
		
		$("div#top-nav  .link-box").click(function(){
			var lnk = $(this).find('a').first();			
			var leftLinkId = lnk.attr('data-left-link');
			$('.left-link').removeClass('active').addClass('normal');
			$('#'+leftLinkId).removeClass('normal').addClass('active');
			var pname = lnk.attr('data-pname');
			$('html,body').stop().animate({
					scrollTop: $('div.page[data-pname="'+pname+'"').offset().top},
				'slow');	
			
			if($('html,body').is(':animated')){			
				
				$('#curent-page').hide('slide', {direction: 'left'}, 250, function(){
				
			
				$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+pname+'</span>');
				$('#curent-page').show('slide', {direction: 'left'}, 250);
				$('#left-nav ul').show();
				});
				var p = $('div.page[data-pname="'+pname+'"]');
				var pid = p.attr('id');
				if(history.pushState) {
						history.pushState(null, null, '#'+pid);
				}
				else {
						location.hash = '#'+pid;
				}
			}
			
		});	
		
		$("div#left-nav  a").click(function(){
			$('.left-link').removeClass('active').addClass('normal');
			$(this).removeClass('normal').addClass('active');
			var pname = $(this).attr('data-pname');			
			$('html,body').animate({
					scrollTop: $('div.page[data-pname="'+pname+'"').offset().top},
				'slow');	
			if($('html,body').is(':animated')){			
				
				$('#curent-page').hide('slide', {direction: 'left'}, 250, function(){
				
			
				$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+pname+'</span>');
				$('#curent-page').show('slide', {direction: 'left'}, 250);
				});		
					
				var p = $('div.page[data-pname="'+pname+'"]');
				var pid = p.attr('id');
				if(history.pushState) {
						history.pushState(null, null, '#'+pid);
				}
				else {
						location.hash = '#'+pid;
				}
				
			}
				
		});	
		
		
		var stat0 = false;
		var stat1 = false;
		var stat2 = false;
		var stat3 = false;
		var stat4 = false;
		var stat5 = false;
		var stat6 = false;
			
		
		$(document).bind('scroll',function(e){
			
			
			$('.page').each(function(){
				
				if (
				   $(this).offset().top < window.pageYOffset + 10
		//begins before top
				&& $(this).offset().top + $(this).height() > window.pageYOffset + 30
		//but ends in visible area
		//+ 10 allows you to change hash before it hits the top border
				) {
					
					if(history.pushState) {
						history.pushState(null, null, '#'+$(this).attr('id'));
					}
					else {
						location.hash = '#'+$(this).attr('id');
					}
					
					
					if($(this).attr('id') == 'top-nav'){
						
						$('#left-nav ul').hide();
						$('.left-link').removeClass('active').addClass('normal');
						
			    
							if(stat0 == false){
				
							
							$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">Shopping Guide</span>');
								
								stat0 = true;
					stat1 = false;
					stat2 = false;
					stat3 = false;
					stat4 = false;
					stat5 = false;
					stat6 = false;
							}
				
						
						
						
					}
					else{
						
						$('#left-nav ul').show();
						$('.left-link').removeClass('active').addClass('normal');
						$('#'+($(this).attr('data-left-link'))).removeClass('normal').addClass('active');

						var id = $(this).attr('id');
						
						switch (id){
							case 'rueckgabe': if( stat1 == false ){
										
										$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+$('#'+id).attr('data-pname')+'</span>');
											
									
										
								
								
											stat0 = false;
											stat1 = true;
											stat2 = false;
											stat3 = false;
											stat4 = false;
											stat5 = false;
											stat6 = false;}
							
									break;
							case 'zahlung': if( stat2 == false ){
										
										$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+$('#'+id).attr('data-pname')+'</span>');
										
									
										
								
								
											stat0 = false;
											stat1 = false;
											stat2 = true;
											stat3 = false;
											stat4 = false;
											stat5 = false;
											stat6 = false;}
							
									break;
							case 'versand': if( stat3 == false ){
										
										$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+$('#'+id).attr('data-pname')+'</span>');
										
									
										
								
								
											stat0 = false;
											stat1 = false;
											stat2 = false;
											stat3 = true;
											stat4 = false;
											stat5 = false;
											stat6 = false;}
							
									break;
							case 'agb': if( stat4 == false ){
										
										$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+$('#'+id).attr('data-pname')+'</span>');
										
									
										
								
								
											stat0 = false;
											stat1 = false;
											stat2 = false;
											stat3 = false;
											stat4 = true;
											stat5 = false;
											stat6 = false;}
							
									break;
							case 'allg-infos': if( stat5 == false ){
										
										$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+$('#'+id).attr('data-pname')+'</span>');
										
									
										
								
								
											stat0 = false;
											stat1 = false;
											stat2 = false;
											stat3 = false;
											stat4 = false;
											stat5 = true;
											stat6 = false;}
							
									break;
							
							
							
							default:
						}
						
						
					}
					
				}
			});
		});
		
		
		
		
			
		
		var completeDiv = $(".complete");
		completeDiv.hide();
		$('.more').text('mehr anzeigen');
			
		
		$('.more').click(function(){
			
			var completeDiv = $(this).closest(".page").find('[class*="complete"]').first();
			if(!(completeDiv.css('display') == 'none')){
				completeDiv.hide();
				$(this).text('mehr anzeigen');
				$('html,body').animate({
					scrollTop: $(this).closest(".page").offset().top},
				'slow');
			}else{
				completeDiv.show();
				$(this).text('weniger anzeigen');
			}
		});
		
		$('.link-box').hover(function(){
			var icon = $(this).find('[class*="icon-top-nav-shop-gui"]').first();
			icon.css('color','#eee');
		},
		function(){
			var icon = $(this).find('[class*="icon-top-nav-shop-gui"]').first();
			icon.css('color','#808080');

		});
		
		$('.box-lnk-left-nav').hover( function(){
				var id = $(this).attr('data-link-txt');
				var el= $('#'+id);
				el.show().animate({'left': '30px'},'fast');
			},
			function(){
				var id = $(this).attr('data-link-txt');
				var el= $('#'+id);
				el.hide().animate({'left': '0px'},'fast');
			}
		);
		
		
		$(window).bind('hashchange',function(){
			var hash = location.hash;
			$('html,body').animate({
					scrollTop: $(''+hash).offset().top},
				'slow');			
		});
		
		$(window).load(function(){
			
			var hash = location.hash;
			switch(hash){
				case '': 
					$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+$('#top-nav').attr('data-pname')+'</span>');										
					$('#left-nav ul').hide();
					
					$('html,body').animate({
						scrollTop: $('#top-nav').offset().top},
					'slow');
					break;
				case '#top-nav': 
					$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+$('#top-nav').attr('data-pname')+'</span>');										
					$('#left-nav ul').hide();
					
					$('html,body').animate({
						scrollTop: $('#top-nav').offset().top},
					'slow');
					break;
				case '#rueckgabe': 
					var rueckgabe = $('#rueckgabe');
					$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+rueckgabe.attr('data-pname')+'</span>');										
					$('.left-link').removeClass('active').addClass('normal');
					$('#'+rueckgabe.attr('data-left-link')).removeClass('normal').addClass('active');
					
					$('#left-nav ul').show();
					
					$('html,body').animate({
						scrollTop: rueckgabe.offset().top},
					'slow');
					break;
				case '#zahlung': 
					var zahlung = $('#zahlung');
					$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+zahlung.attr('data-pname')+'</span>');										
					$('.left-link').removeClass('active').addClass('normal');
					$('#'+zahlung.attr('data-left-link')).removeClass('normal').addClass('active');
					
					$('#left-nav ul').show();
					$('html,body').animate({
						scrollTop: zahlung.offset().top},
					'slow');
					break;
				case '#versand': 
					var versand = $('#versand');
					$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+versand.attr('data-pname')+'</span>');										
					$('.left-link').removeClass('active').addClass('normal');
					$('#'+versand.attr('data-left-link')).removeClass('normal').addClass('active');
					$('#left-nav ul').show();
					$('html,body').animate({
						scrollTop: versand.offset().top},
					'slow');
					break;
				case '#agb': 
					var agb = $('#agb');
					$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+agb.attr('data-pname')+'</span>');										
					$('.left-link').removeClass('active').addClass('normal');
					$('#'+agb.attr('data-left-link')).removeClass('normal').addClass('active');
					$('#left-nav ul').show();
					$('html,body').animate({
						scrollTop: agb.offset().top},
					'slow');
					break;
				case '#allg-infos': 
					var AllgInfos = $('#allg-infos');
					$('#curent-page').html('<span style="display:inline-block; margin-left:22px;">'+AllgInfos.attr('data-pname')+'</span>');										
					$('.left-link').removeClass('active').addClass('normal');
					$('#'+AllgInfos.attr('data-left-link')).removeClass('normal').addClass('active');
					$('#left-nav ul').show();
					$('html,body').animate({
						scrollTop: AllgInfos.offset().top},
					'slow');
					break;
				default:
			}
		});
		
		
		
		