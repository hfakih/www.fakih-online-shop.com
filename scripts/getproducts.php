<?php
	function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}
	
	
	//connect to the database 
	$con = mysqli_connect("localhost", "root", "", "shop");
	
	function getProductsByModel($m){
		
		global $con;
		$query = "select id,color from t_products where model = '".$m."'";
		
		$result = mysqli_query($con, $query); 
		
		return $product = mysqli_fetch_all($result,MYSQLI_ASSOC);
			
	}
	
	
	$c = $_REQUEST['c'];
	if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != '' && isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != '' && isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != '' && isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){
		$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		
		
		$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam) ;
		
		$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];
		
		$oderUrlParam = $_REQUEST['orderUrlParam'];	
		switch ($oderUrlParam) {
		case 'aufsteigend':
			
			$query = "select * from t_products where color in ($colorUrlParam) and siz in ($sizeUrlParam) and price between $value1 and $value2 order by price asc";
			
			break;
		case 'absteigend':
			
			$query = "select * from t_products  where color in ($colorUrlParam) and siz in ($sizeUrlParam) and price between $value1 and $value2 order by price desc";
			
			break;
		case 'popularitaet':
			$query = "select * from t_products  where color in ($colorUrlParam) and siz in ($sizeUrlParam) and price between $value1 and $value2 order by popularity desc";
			
			break;
		default:
			
		}
	}
	else if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != '' && isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != '' && isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != ''){
		
		$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		
		
		$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam) ;
		
		$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];		
		
		
		$query = "select * from t_products where color in ($colorUrlParam) and siz in ($sizeUrlParam) and price between $value1 and $value2";
}else if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != '' && isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != '' && isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){

		$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		
		
		$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam) ;
		
		$oderUrlParam = $_REQUEST['orderUrlParam'];	
		switch ($oderUrlParam) {
		case 'aufsteigend':
			
			$query = "select * from t_products where color in ($colorUrlParam) and siz in ($sizeUrlParam) order by price asc";
			
			break;
		case 'absteigend':
			
			$query = "select * from t_products  where color in ($colorUrlParam) and siz in ($sizeUrlParam) order by price desc";
			
			break;
		case 'popularitaet':
			$query = "select * from t_products  where color in ($colorUrlParam) and siz in ($sizeUrlParam) order by popularity desc";
			
			break;
		default:
			
		}


}else if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != '' && isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != '' && isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){
	$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		
		$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];
		
		$oderUrlParam = $_REQUEST['orderUrlParam'];	
		switch ($oderUrlParam) {
		case 'aufsteigend':
			
			$query = "select * from t_products where color in ($colorUrlParam) and price between $value1 and $value2 order by price asc";
			
			break;
		case 'absteigend':
			
			$query = "select * from t_products  where color in ($colorUrlParam)and price between $value1 and $value2  order by price desc";
			
			break;
		case 'popularitaet':
			$query = "select * from t_products  where color in ($colorUrlParam) and price between $value1 and $value2 order by popularity desc";
			
			break;
		default:
			
		}
		
		
		
}else if(isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != '' && isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != '' && isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){
	$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam);

		$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];	

		$oderUrlParam = $_REQUEST['orderUrlParam'];	
		switch ($oderUrlParam) {
		case 'aufsteigend':
			
			$query = "select * from t_products where siz in ($sizeUrlParam) and price between $value1 and $value2 order by price asc";
			
			break;
		case 'absteigend':
			
			$query = "select * from t_products  where siz in ($sizeUrlParam) and price between $value1 and $value2 order by price desc";
			
			break;
		case 'popularitaet':
			$query = "select * from t_products  where siz in ($sizeUrlParam) and price between $value1 and $value2 order by popularity desc";
			
			break;
		default:
			
		}
}
else if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != '' && isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != ''){
		$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		
		
		$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam) ;
		
		$query = "select * from t_products where color in ($colorUrlParam) and siz in ($sizeUrlParam)";

}else if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != '' && isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != ''){
		$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		
		
		$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];		
		
		
		$query = "select * from t_products where color in ($colorUrlParam) and price between $value1 and $value2";

}else if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != '' && isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){
		$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		
		$orderUrlParam = $_REQUEST['orderUrlParam'];	
		switch ($orderUrlParam) {
		case 'aufsteigend':
			
			$query = "select * from t_products where color in ($colorUrlParam) order by price asc";
			
			break;
		case 'absteigend':
			
			$query = "select * from t_products  where color in ($colorUrlParam) order by price desc";
			
			break;
		case 'popularitaet':
			$query = "select * from t_products  where color in ($colorUrlParam) order by popularity desc";
			
			break;
		default:
			
		}
		
		
}

else if(isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != '' && isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != ''){
	$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam);

		$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];		
		
		
		$query = "select * from t_products where siz in ($sizeUrlParam) and price between $value1 and $value2";
}else if(isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != '' && isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){
	$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam);
		
		$oderUrlParam = $_REQUEST['orderUrlParam'];	
		switch ($oderUrlParam) {
		case 'aufsteigend':
			
			$query = "select * from t_products where siz in ($sizeUrlParam) order by price asc";
			
			break;
		case 'absteigend':
			
			$query = "select * from t_products  where siz in ($sizeUrlParam) order by price desc";
			
			break;
		case 'popularitaet':
			$query = "select * from t_products  where siz in ($sizeUrlParam) order by popularity desc";
			
			break;
		default:
			
		}
}else if(isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != '' && isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){
	$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];		
		
		$oderUrlParam = $_REQUEST['orderUrlParam'];	
		switch ($oderUrlParam) {
		case 'aufsteigend':
			
			$query = "select * from t_products where price between $value1 and $value2 order by price asc";
			
			break;
		case 'absteigend':
			
			$query = "select * from t_products  where price between $value1 and $value2 order by price desc";
			
			break;
		case 'popularitaet':
			$query = "select * from t_products  where  price between $value1 and $value2 order by popularity desc";
			
			break;
		default:
		}
}
else if(isset($_REQUEST['colorUrlParam']) && $_REQUEST['colorUrlParam'] != ''){
	$colorUrlParam = $_REQUEST['colorUrlParam'];
		$colorUrlParam = explode(",",$colorUrlParam);
		for($i = 0; $i < count($colorUrlParam); $i++){
			$colorUrlParam[$i] = "'".$colorUrlParam[$i]."'";
		}
		$colorUrlParam = implode(',', $colorUrlParam) ;
		$query = "select * from t_products where color in ($colorUrlParam)";
}else if(isset($_REQUEST['sizeUrlParam']) && $_REQUEST['sizeUrlParam'] != ''){
	$sizeUrlParam = $_REQUEST['sizeUrlParam'];
		$sizeUrlParam = explode(",",$sizeUrlParam);
		for($j = 0; $j < count($sizeUrlParam); $j++){
			switch ($sizeUrlParam[$j]) {
			case 'M-L':
				$sizeUrlParam[$j] = "'"."M"."','"."L"."'"; 
				break;
			case 'M':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'L':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'XS-S':
				$sizeUrlParam[$j] = "'"."XS"."','"."S"."'";  
				break;
			case 'XS':
				$sizeUrlParam[$j] = $sizeUrlParam[$j]; 
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			case 'S':
				$sizeUrlParam[$j] = $sizeUrlParam[$j];  
				$sizeUrlParam[$j] = "'".$sizeUrlParam[$j]."'";
				break;
			default:
				
			}
			
			
			
		}
		$sizeUrlParam = implode(',', $sizeUrlParam) ;
		
		$query = "select * from t_products where siz in ($sizeUrlParam)";
}else if(isset($_REQUEST['priceUrlParam']) && $_REQUEST['priceUrlParam'] != ''){
	$priceUrlParam = $_REQUEST['priceUrlParam'];
		$priceUrlParam = explode(",",$priceUrlParam);
		$value1 = $priceUrlParam[0];
		$value2 = $priceUrlParam[1];		
		
		
		$query = "select * from t_products where price between $value1 and $value2";
}
else if(isset($_REQUEST['orderUrlParam']) && $_REQUEST['orderUrlParam'] != ''){
	$oderUrlParam = $_REQUEST['orderUrlParam'];
	
	switch ($oderUrlParam) {
    case 'aufsteigend':
        
		$query = "select * from t_products order by price asc";
		
		break;
	case 'absteigend':
        
		$query = "select * from t_products order by price desc";
		
		break;
	case 'popularitaet':
        $query = "select * from t_products order by popularity desc";
		
		break;
    default:
        
	}
	
	
	
}	
else{
	$query = "select * from t_products";
}
	
	
	$product = null;
	
	
	switch ($c) {
    case 'kleider':
        
		$result = mysqli_query($con, $query); 
		
		$product = mysqli_fetch_all($result,MYSQLI_ASSOC);
		
		foreach ($product as &$p){
			$m = $p['model'];
			$tmp = getProductsByModel($m);
			$p["siblings"] = $tmp;
		}
	
		
		
		
		echo json_encode(utf8ize($product));
		
		break;
    default:
        
	}
	
	
	
	
?>