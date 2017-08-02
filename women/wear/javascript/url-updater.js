$(document).ready(function(){
	
	var addToUrl = '';
	var colorUrlParam ='';
	var sizeUrlParam ='';
	var orderUrlParam ='';
	var priceUrlParam ='';
	
	var url ='';
	
	
	//
	
	if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = colorUrlParam +'&'+sizeUrlParam+'&'+ priceUrlParam+'&'+orderUrlParam;
		
	}
	else if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') != ''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		addToUrl = colorUrlParam +'&'+sizeUrlParam+'&'+priceUrlParam;
	}
	else if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !='' && getCookie('orderFilterContent') !=''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = colorUrlParam +'&'+sizeUrlParam+'&'+orderUrlParam;			
	}
	else if(getCookie('colorFilter') !='' && getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = colorUrlParam +'&'+priceUrlParam+'&'+orderUrlParam;		
	}
	else if(getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = sizeUrlParam +'&'+priceUrlParam+'&'+orderUrlParam;	
	}	
	else if(getCookie('colorFilter') !='' && getCookie('sizeFilterContentValues') !=''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		addToUrl = colorUrlParam +'&'+sizeUrlParam;	
	}
	else if(getCookie('colorFilter') !='' && getCookie('priceFilterContent') !=''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		addToUrl = colorUrlParam +'&'+priceUrlParam;
	}
	else if(getCookie('colorFilter') !='' && getCookie('orderFilterContent') !=''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = colorUrlParam +'&'+orderUrlParam;
	}
	else if(getCookie('sizeFilterContentValues') !='' && getCookie('priceFilterContent') !=''){
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		addToUrl = sizeUrlParam +'&'+priceUrlParam;
	}
	
	else if(getCookie('sizeFilterContentValues') !='' && getCookie('orderFilterContent') !=''){
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = sizeUrlParam +'&'+orderUrlParam;		
	}
	else if(getCookie('priceFilterContent') !='' && getCookie('orderFilterContent') !=''){
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = priceUrlParam +'&'+orderUrlParam;
	}
	else if(getCookie('colorFilter') !=''){
		var colors = getCookie('colorFilter');
		colorUrlParam ='color='+colors;
		addToUrl = colorUrlParam ;
	}else if(getCookie('sizeFilterContentValues') !=''){
		var sizes = getCookie('sizeFilterContentValues');
		sizeUrlParam ='size='+sizes;
		addToUrl = sizeUrlParam ;
	}else if(getCookie('priceFilterContent') !=''){
		var prices = getCookie('priceFilterContent');
		priceUrlParam ='price='+prices;
		addToUrl = priceUrlParam ;
	}
	else if(getCookie('orderFilterContent') !=''){
		var order = getCookie('orderFilterContent');
		orderUrlParam ='order='+order;
		addToUrl = orderUrlParam ;
	}
	else{
		addToUrl ='';
	}
	
	//
	
	url = location.protocol + '//' + location.host +location.pathname +'?'+addToUrl;
	if (url != window.location)
	{
		// window.history.pushState({path:newurl},'',newurl);
		location.reload(true);
	}
	
	if (url != window.location)
	{
		// window.history.pushState({path:newurl},'',newurl);
		location.href = url;
	}
	
	if (url!=window.location)
	{
		window.history.pushState({path:url},'',url);
	}
	
});