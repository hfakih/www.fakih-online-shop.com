$(document).ready(function(){
	
	
	// color filter
 $('.checkbox-colorfilter').click(function(){ 
	var checked = $(this).attr('data-checked');
	var li = $(this).closest('li');
	if( checked == 'false'){
		$(this).attr('data-checked','true');
		var id = $(this).attr('id');
		var checkedId = getCookie('colorFilterContent');
		var  checkedIdArr = checkedId.split(',');
		if(getCookie('colorFilterContent') === ''){
			checkedId =  id;
		}
		else{
			if($.inArray(id,checkedIdArr) == -1){
				checkedId = checkedId +','+ id;
			}
			
		}
		
		setCookie('colorFilterContent', checkedId , 1);
		
		
		
		li.css({"border": "1px solid #000"});
		var checkedElem = getCookie('colorFilter');
		var hex = rgbToHex($(this).css('background-color'));
		var colorname = getColorname(hex);
		var arr = checkedElem.split(',');
		
		
		
		if(getCookie('colorFilter') === ''){
			checkedElem =  colorname;
		}
		else{
			if($.inArray(colorname,arr) == -1){
				checkedElem = checkedElem +','+ colorname;
			}
			
		}
		setCookie('colorFilter', checkedElem , 1);
		
		location.reload(true);
		
		
	} 
	else{
		$(this).attr('data-checked','false');
		li.css({'border': 'none'});
		
		//delete checked Id
		var id = $(this).attr('id');
				
		var checkedId  =  getCookie('colorFilterContent');
		checkedId = checkedId.split(',');
		var index = checkedId.indexOf(id);
		checkedId.splice(index, 1);
		if(checkedId.length == 0){
			setCookie('colorFilterContent', '' , 1);
		}
		else{
			checkedId = checkedId.join(',');	
			setCookie('colorFilterContent', checkedId , 1);
		}
		
		
		//delete element
		var hex = rgbToHex($(this).css('background-color'));
		var colorname = getColorname(hex);
		
		var colorValue  =  getCookie('colorFilter');
		colorValue = colorValue.split(',');
		var index = colorValue.indexOf(colorname);
		
		var colors = '';
		colorValue.splice(index, 1);
		if(colorValue.length == 0){
			setCookie('colorFilter', '' , 1);
		}
		else{
			colors = colorValue.join(',');	
			setCookie('colorFilter', colors , 1);
		}
		
		location.reload(true);
		
	}
	
});


 if(getCookie('colorFilterContent')!= ''){
		var checkedColorFilterContent = getCookie('colorFilterContent');
		checkedColorFilterContent = checkedColorFilterContent.split(',');
		for(var i=0; i < checkedColorFilterContent.length; i++){
			var id = checkedColorFilterContent[i];
			$('#'+id).attr('data-checked', 'true');
			var li = $('#'+id).closest('li');
			li.css({'border':'1px solid black'});
		}
		
		
		
	}

//size filter
$('.checkbox-sizefilter').click(function(){
	
	var checkbox = $(this);
	//variable checked
	var checked = checkbox.attr('data-checked');
	//checkbox value
	var checkboxValue = checkbox.attr('data-value');
	
	if(checked == 'false'){ //if checkbox is not checked
		checkbox.attr('data-checked','true'); // set checkbox to checked
		checkbox.css({'background': '#000'});
		var checkboxId = checkbox.attr('id'); 
		var checkedFilterContents = getCookie('sizeFilterContent'); //get alle checkboxes 
		var  tmpArr = checkedFilterContents.split(',');
		if(getCookie('sizeFilterContent') === ''){
				checkedFilterContents =  checkboxId;
		}
		else{
			if($.inArray(checkboxId,tmpArr) == -1){ //check if this checkbox does not exist in the cookie string
				checkedFilterContents = checkedFilterContents +','+ checkboxId; // if yes, then add it to the cookie string
			}			
		}
		
		setCookie('sizeFilterContent', checkedFilterContents , 1); //set the cookie variable to the new value 
		
		
		var filterContentValues = getCookie('sizeFilterContentValues'); 
		var  tmpArr2 = filterContentValues.split(',');
		if(getCookie('sizeFilterContentValues') === ''){
				filterContentValues =  checkboxValue;
		}
		else{
			if($.inArray(checkboxValue,tmpArr2) == -1){ 
				filterContentValues = filterContentValues +','+ checkboxValue;
			}			
		}
		
		setCookie('sizeFilterContentValues', filterContentValues , 1);
		
		location.reload(true);
		
	}
	else{ //if checkbox is checked
		
		
		checkbox.attr('data-checked','false'); // set checkbox to no checked
		checkbox.css({'background': '#fff'});
		
		
		var checkboxId = checkbox.attr('id');
		var checkedFilterContents = getCookie('sizeFilterContent');
		checkedFilterContents = checkedFilterContents.split(',');
		var index = checkedFilterContents.indexOf(checkboxId); //get the position of this checkbox in the cookie string
		checkedFilterContents.splice(index, 1); // delete this checkbox
		if(checkedFilterContents.length == 0){
			setCookie('sizeFilterContent', '' , 1);
		}
		else{
			checkedFilterContents = checkedFilterContents.join(',');	
			setCookie('sizeFilterContent', checkedFilterContents , 1);
		}
		
		var filterContentValues = getCookie('sizeFilterContentValues'); 
		var  filterContentValues = filterContentValues.split(',');
		var index2 = filterContentValues.indexOf(checkboxValue); 
		filterContentValues.splice(index, 1); // delete this checkbox
		if(filterContentValues.length == 0){
			setCookie('sizeFilterContentValues', '' , 1);
		}
		else{
			filterContentValues = filterContentValues.join(',');	
			setCookie('sizeFilterContentValues', filterContentValues , 1);
		}
		setCookie('sizeFilterContentValues', filterContentValues , 1);
		
		location.reload(true);
		
		
	}
});

if(getCookie('sizeFilterContent')!= ''){
		var filterContents = getCookie('sizeFilterContent');
		filterContents = filterContents.split(',');
		for(var i=0; i < filterContents.length; i++){
			var id = filterContents[i];
			var content = $('#'+id);
			content.attr('data-checked', 'true');
			content.css({'background':'#000'});
		}
		
		
		
	}

	//price filter
	$( function() {
		var v1, v2;
		
		if(getCookie('priceFilterContent')!= ''){
			var range = getCookie('priceFilterContent');
			range = range.split(',');
			v1 = parseInt(range[0]);
			v2 = parseInt(range[1]);
		}else{
			v1 = 0;
			v2 = 500;
			
			var range = v1 +','+v2;
		}
		
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ parseInt(v1), parseInt(v2) ],
			slide: function( event, ui ) {
				$( "#amount" ).html('<div style="float:left; margin-left:-5px;">'+ui.values[ 0 ] + '€</div><div style="float:right; margin-right:-5px;">'+ ui.values[ 1 ]+'€</div><div class="clearer"></div>' );
				
				var range = ui.values[ 0 ] + ',' +  ui.values[ 1 ];
				setCookie('priceFilterContent',  range, 1);
				location.reload(true);
			}
		});
		$( "#amount" ).html('<div style="float:left; margin-left:-5px;">'+$( "#slider-range" ).slider( "values", 0 ) + '€</div><div style="float:right; margin-right:-5px;">' + $( "#slider-range" ).slider( "values", 1 )+ '€</div><div class="clearer"></div>' );
		
	});
	
	//order filter
	$("#dropdowntoggle-orderfilter").click(function(e){
		var elem = $(this);
		var pa = elem.closest('.dropdown');
		if(pa.hasClass('open') == true){
			
			$('#wrap-orderdropdown').removeClass('wrap-orderdropdown-opened');
			pa.removeClass('open');
			elem.attr('data-expanded', 'true');
			
		}
		else{
			$('#wrap-orderdropdown').addClass('wrap-orderdropdown-opened');
			pa.addClass('open');
			elem.attr('data-expanded', 'false');
		}				
				
	});
	
	$('.orderfiltercontent').click(function(){
	var elem = $(this);
	
	elem.css({'font-weight':'bold !important'});
	
	var dropMenu = $(this).closest('.dropdown');
	var dropToggle = dropMenu.find('.dropdown-toggle');
	var dropToggleVal = dropToggle.find('#value-dropdowntoggle-orderfilter');
	dropToggleVal.html(elem.attr('data-title'));
	
	dropMenu.removeClass('open');
	$('#wrap-orderdropdown').removeClass('wrap-orderdropdown-opened');
	
	setCookie("orderFilterContent",elem.attr('data-value'),1);
	
	location.reload(true);
	
 });
 
 if(getCookie('orderFilterContent')!= ''){
		var activeElem = $('.orderfiltercontent[data-value="'+getCookie('orderFilterContent')+'"]');
		$('#value-dropdowntoggle-orderfilter').html(activeElem.attr('data-title'));
		
	}
	
	//delete filter wrap
if(getCookie('colorFilter') !='' || getCookie('sizeFilterContentValues') !='' || getCookie('priceFilterContent') !='' || getCookie('orderFilterContent') !=''){
	$('#deletefilterwrap').show();
}else{
	$('#deletefilterwrap').hide();
}


$('#deletefilterwrap a').click(function(){
	setCookie('colorFilter','',1);setCookie('colorFilterContent','',1);
	setCookie('sizeFilterContent','',1);setCookie('sizeFilterContentValues','',1);
	setCookie('priceFilterContent','',1);
	setCookie('orderFilterContent','',1);
	location.reload(true);
});

			
	
	
	
	
	
});