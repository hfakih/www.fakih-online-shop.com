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
	
	
	
	
	
	
	$id = $_REQUEST['id'];
	
	if(isset($id) && $id != ''){
		$query = "select * from t_products where id =$id";
		$product = null;
	
		$result = mysqli_query($con, $query); 
		
		
		
		
		$product = mysqli_fetch_all($result,MYSQLI_ASSOC);
		
		foreach ($product as &$p){
			$m = $p['model'];
			$tmp = getProductsByModel($m);
			$p["siblings"] = $tmp;
		}
		
		echo json_encode(utf8ize($product));
		
	}
	
?>