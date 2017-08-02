function getColorname(hexcode){
		switch(hexcode){
			case '#ff0000': return 'rot';
						break;
			case '#808080': return  'grau';
						break;
			case '#000000': return 'schwarz';
						break;			
			case '#a52a2a': return 'braun';
						break;			
			case '#ffc0cb': return 'pink';
						break;			
			case '#0000ff': return 'blau';
						break;
			case '#ffff00': return 'gelb';
						break;
			case '#ffa500': return 'orange';
						break;		
			case '#008000': return 'green';
						break;		
			default:
		}
	}
	
	function convertToHexcode(color){
		switch(color){
			case 'rot': return '#ff0000';
						break;
			case 'grau': return '#808080';
						break;
			case 'blau': return '#0000ff';
						break;
			case 'orange': return '#ffa500';
						break;		
			default:
		}
	}
	
	function rgbToHex(rgbval){
		var parts = rgbval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		delete(parts[0]);
		
		for(var i=1; i <=3; ++i){
			parts[i] = parseInt(parts[i]).toString(16);
			if(parts[i].length == 1) parts[i] = '0'+parts[i];
		}
		
		hex = '#' + parts.join('');
		
		return hex;
	}
	

var arr =null;
	
function showProducts(str,cn) {
  var xhttp;
  
  if (str == "") {
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		arr = eval(this.response);
		var res = arr.length;
		var result = $('#resultwrap-topdiv span');
		result.html('');
		result.html(res);
		
		
		var len = arr.length;
		
		if(cn == 3){
			if(len % cn != 0){
			len = len + (3- len % cn);}
			else{
				len = len;
			}
			
		}else if(cn == 2){
			if(len % cn == 1){
			len = len + 1;}
			else{
				len = len;
			}
			
		}
		
		var contentDiv = $('#content');		
		contentDiv.html('');
		for(var i=0; i<len; i=i+cn){
		
		if(cn==2){
				
				if(res % 2 == 0){
					contentDiv.append('<div class="row" style="margin-left: 0px;margin-right: 0px; margin-bottom:20px;">'+
						getSmallViewHTMLByProduct(i) + getSmallViewHTMLByProduct(i+1) + '</div>');
				}else{
					if(i == len-cn){
						contentDiv.append('<div class="row" style="margin-left: 0px;margin-right: 0px; margin-bottom:20px;">'+
						getSmallViewHTMLByProduct(i)+ '</div>');
					}else{
						contentDiv.append('<div class="row" style="margin-left: 0px;margin-right: 0px; margin-bottom:20px;">'+
						getSmallViewHTMLByProduct(i) + getSmallViewHTMLByProduct(i+1) + '</div>');
					}
				}
				
				
			}else if(cn==3){
				
				
				if(res % 3 ==0){
					contentDiv.append('<div class="row" style="margin-left: 0px;margin-right: 0px; margin-bottom:20px;">'+
						getSmallViewHTMLByProduct(i) + getSmallViewHTMLByProduct(i+1)+ getSmallViewHTMLByProduct(i+2) + '</div>');
					$('.col-md-6').css('width','33%');
					
				}else{
					
					if(i == len-cn){
						var s = '<div class="row" style="margin-left: 0px;margin-right: 0px; margin-bottom:20px;">';
						for(var j=i; j<res; j=j+1){
						
							s += getSmallViewHTMLByProduct(j);
						}
						
						s+= '</div>';
						contentDiv.append(s);
						$('.col-md-6').css('width','33%');
					}else{
						contentDiv.append('<div class="row" style="margin-left: 0px;margin-right: 0px; margin-bottom:20px;">'+
						getSmallViewHTMLByProduct(i) + getSmallViewHTMLByProduct(i+1)+ getSmallViewHTMLByProduct(i+2) + '</div>');
						$('.col-md-6').css('width','33%');
						
					}
					
				}
				
			}
		}
		
		if(cn == 3){
			$('.img-owncarousel').css({'width':'100%','height':'100%'});
			$('.owncarousel').css('height','267.567px');
			$('.col-md-6').css('height','378px');
		}
		
    }
  };
  
  
if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent'); 
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent');
	
	//alert(colorUrlParam +'&'+ sizeUrlParam + '&'+ priceUrlParam +'&'+orderUrlParam);
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam +'&'+ sizeUrlParam + '&'+ priceUrlParam +'&'+orderUrlParam, true); //1111
}

else if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent'); 
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam +'&'+ sizeUrlParam + '&'+ priceUrlParam, true); //1110
}
else if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !='' && getCookie('orderFilterContent') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent'); 
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam +'&'+ sizeUrlParam + '&'+ orderUrlParam, true); //1101
}
else if(getCookie('colorFilter') !='' && getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent');
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam +'&'+ priceUrlParam + '&'+ orderUrlParam, true); //1011
}
else if(getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent');
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ sizeUrlParam +'&'+ priceUrlParam + '&'+ orderUrlParam, true); //0111
}
else if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam + '&'+ sizeUrlParam, true); //1100
}
else if(getCookie('colorFilter') !='' && getCookie('priceFilterContent') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam + '&'+ priceUrlParam, true); //1010
}
else if(getCookie('colorFilter') !='' && getCookie('orderFilterContent') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam + '&'+ orderUrlParam, true); //1001
}
else if(getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') !=''){
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ sizeUrlParam + '&'+ priceUrlParam, true); //0110
}
else if(getCookie('sizeFilterContentValues') !='' && getCookie('orderFilterContent') !=''){
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ sizeUrlParam + '&'+ orderUrlParam, true); //0101
}
else if(getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent');
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent');
	
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ priceUrlParam + '&'+ orderUrlParam, true); //0011
}
else if(getCookie('colorFilter') !=''){
	var colorUrlParam = 'colorUrlParam='+ getCookie('colorFilter');
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ colorUrlParam, true);//1000
}
else if(getCookie('sizeFilterContentValues') !=''){
	var sizeUrlParam = 'sizeUrlParam='+ getCookie('sizeFilterContentValues');
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ sizeUrlParam, true); //0100
}
else if(getCookie('priceFilterContent') !=''){
	var priceUrlParam = 'priceUrlParam='+ getCookie('priceFilterContent');
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ priceUrlParam, true); //0010
}
else if(getCookie('orderFilterContent') !=''){
	var orderUrlParam = 'orderUrlParam='+ getCookie('orderFilterContent');
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str+'&'+ orderUrlParam, true); //0001
}
else{
	xhttp.open("GET", "../../scripts/getproducts.php?c="+str, true); //0000
}

  
  xhttp.send();
}


function getSmallViewHTMLByProduct(i){
	html='<div class="col-md-6" style="position:relative;"><div id="owncarousel'+i+'" class="owncarousel">'+
			'<div class="inner-owncarousel">'+
				'<div data-prev="i4-owncarousel" data-next="i2-owncarousel" class="item-owncarousel i1-owncarousel"><img class="img-owncarousel" src="'+arr[i].img+'" /></div>'+
				'<div data-prev="i1-owncarousel" data-next="i3-owncarousel" class="item-owncarousel i2-owncarousel"><img class="img-owncarousel" src="'+arr[i].img2+'" /></div>'+
				'<div data-prev="i2-owncarousel" data-next="i4-owncarousel" class="item-owncarousel i3-owncarousel"><img class="img-owncarousel" src="'+arr[i].img3+'" /></div>'+
				'<div data-prev="i3-owncarousel" data-next="i1-owncarousel" class="item-owncarousel i4-owncarousel iactive-owncarousel"><img class="img-owncarousel" src="'+arr[i].img4+'" /></div>'+
			'</div>'+
	
			'<a class="control-owncarousel lcontrol-owncarousel"><span class="glyphicon glyphicon-chevron-left"></span></a>'+
			'<a class="control-owncarousel rcontrol-owncarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>'+
			'<div class="wrap-icon-overview" style="position: absolute;bottom: 10px;right: 10px;"><span class="title-icover">Überblick</span>&nbsp;<span class="glyphicon glyphicon-eye-open icon-overview"></span></div>'+
		'</div>'+
		'<p style="text-align: center; margin-top:20px; padding-left: 10px;padding-right: 10px;"><a class="title-owncarousel" style="color: rgb(51, 51, 51);" href="">'+arr[i].title+'</a></p>'+
		'<p style="font-weight: bold;text-align: center;">'+arr[i].price+' €</p>' +
		'<p style="text-align: center; width: 23px;height: 23px;border-radius: 11.5px;position: absolute;left: 50%;margin-left: -11.5px; background:'+convertToHexcode(arr[i].color)+';"></p>' +
		'</div>';
	return html;
} 