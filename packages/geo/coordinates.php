<?php
	require_once('geoDb.php');
	
	class Coordinates{
		private $lat = 0;
		private $lon = 0;
		private $zipCode =0;
		private $geoDb = null;
		
		public function __construct($zipCode) {
		   $this->zipCode = $zipCode;
		   $geoDb = new GeoDb();
		   $this->geoDb = $geoDb->getGeoDb();
	    }
	  
        public function getCoordinates(){
			$geoDb = $this->getGeoDb();
			$sql ='SELECT DISTINCT gc.lat, gc.lon FROM `geodb_textdata` AS gt USE INDEX FOR JOIN(text_lid_idx,text_val_idx,text_type_idx) INNER JOIN `geodb_coordinates` AS gc ON gt.loc_id = gc.loc_id WHERE gt.text_val =:text_val AND gt.text_type = 500300000';
			$stmt = $geoDb->prepare($sql);
			$stmt->bindParam(':text_val', $this->zipCode);
			
			if($stmt->execute()){
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
				if(count($result) === 1){
					return $result[0];
				}
				else{
					return (-1);
				}
			}
			else
			{
				return 'Anfrage konnte nicht ausgeführt werden!';
			}
		}
		
		public function getLat(){
			return $this->lat = $this->getCoordinates()['lat'];
		}
		
		public function getLon(){
			return $this->lon = $this->getCoordinates()['lon'];
		}
		
		private function getGeoDb(){
			return $this->geoDb;
		}
	   
	}
	
	class Distance{
		
		private $zip1Lat;
		private $zip1Lon;
		private $zip2Lat;
		private $zip2Lon;
		private $distance;
		
		public function __construct($zip1,$zip2){
			$zip1Coordinates = new Coordinates($zip1);
			$this->zip1Lat = $zip1Coordinates->getLat();
			$this->zip1Lon = $zip1Coordinates->getLon();
			
			$zip2Coordinates = new Coordinates($zip2);
			$this->zip2Lat = $zip2Coordinates->getLat();
			$this->zip2Lon = $zip2Coordinates->getLon();
			
			
			$pi = M_PI;
			$a_lat = ($this->zip1Lat * 2 * $pi)/360;
			$a_lon = ($this->zip1Lon * 2 * $pi)/360;
			$b_lat = ($this->zip2Lat * 2 * $pi)/360;
			$b_lon = ($this->zip2Lon * 2 * $pi)/360;
			
			$x = acos(sin($b_lat)*sin($a_lat)+cos($b_lat)*cos($a_lat)*cos($b_lon - $a_lon));
			$y = 6371.110;
			$this->distance = $x*$y;
		}
		
		public function getDistance(){
			return $this->distance;
		}
	}
	
	
	class ClosestBranchFinder{
		
		private $branchsZipCodes = null;
		private $zipDisPairs = null;
		private $minDistance = null;
		private $closestBranch = null;
		
		
		
		public function __construct($zipCode){
		   $geoDb = new GeoDb();
		   $geoDb = $geoDb->getGeoDb();

		   $sql= 'SELECT zip FROM `branchs`'; 
		   $stmt = $geoDb->prepare($sql);
			if($stmt->execute()){
				$this->branchsZipCodes = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
			}
			else
			{
				echo 'Anfrage konnte nicht ausgeführt werden!';
			}
			
			$this->zipDisPairs = array();
			
			foreach ($this->branchsZipCodes as $z){
				$distance = new Distance($zipCode, $z['zip']);
				$zipDisPair = array();
				array_push($zipDisPair, $z['zip']);
				array_push($zipDisPair, $distance->getDistance());
				array_push($this->zipDisPairs,$zipDisPair);
			}
			
			
			$min = $this->zipDisPairs[0][1];
			$this->closestBranch = $this->zipDisPairs[0][0];
			foreach($this->zipDisPairs as $zdp){
				if($min > $zdp[1]){
					$min = $zdp[1];
					$this->closestBranch = $zdp[0];
				}
			}
			
			$sql= 'SELECT * FROM `branchs` WHERE zip =:closest_branch'; 
		    $stmt = $geoDb->prepare($sql);
			$stmt->bindParam(':closest_branch', $this->closestBranch);
			if($stmt->execute()){
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $banch){
					echo '<div id="branch-info" style="margin-top:32px;">';
					echo '<div id="branch-txt">';
					echo '<h2 style="font-size: 18px;font-weight: 600;margin-bottom: 15px;">Fakih Online Shop</h2>';
					echo '<div class="list-group branch-txt-lists">
					  <span class="list-group-item branch-txt-list-items" style="border: none;">'.$banch['street'].' '.$banch['house_num'].'</span>
					  <span class="list-group-item branch-txt-list-items">'.$banch['zip'].' '.$banch['city'].'</span>
					  <span class="list-group-item branch-txt-list-items">Deutschland</span>
					</div>';
					echo '<div class="list-group branch-txt-lists">
					  <span class="list-group-item branch-txt-list-items" style="border: none;"><span id="branch-txt-phone-icon" class="glyphicon glyphicon-phone-alt"></span>'.$banch['phone'].'</span>
					  <span class="list-group-item branch-txt-list-items"><span id="branch-txt-email-icon" class="glyphicon glyphicon-envelope"></span>'.$banch['email'].'</span>
					</div><div class="clearer"></div>';
					
					
					
					
					//echo '<br /><br />';
					
					
					
					echo '<button id="show-map-lnk" style="background: none;border: none;text-decoration: underline;">Auf der Landkarte anzeigen</button>';
					echo '</div>';
					echo '<div id="map" style="width:100%;height:400px;"></div>';
					echo '</div>';
					echo '<script>
						var map;
						var myCenter;
						document.getElementById("show-map-lnk").addEventListener("click",function(){
							document.getElementById("branch-txt").style.display = "none";
							document.getElementById("map").style.display = "block";
							google.maps.event.trigger(map, "resize");
							map.setCenter(myCenter);
						});
						document.getElementById("map").style.display ="none";
						function myMap() {
							myCenter = new google.maps.LatLng('.$banch["lat"].','.$banch["lon"].');
							var mapProp= {
								center:myCenter,
								zoom:5,
							};
							map=new google.maps.Map(document.getElementById("map"),mapProp);
							var marker = new google.maps.Marker({position: myCenter});
							marker.setMap(map);
							
							var infowindow = new google.maps.InfoWindow({
								content:"<strong>Fakih Online Shop</strong><br />'.$banch['street'].' '.$banch['house_num'].'<br />'. $banch['zip'].' '.$banch['city'].'<br />'.'Deutschland"
								});
							infowindow.open(map,marker);
							}
					</script>';
					echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACQ8SfRwK5D-JmUbjOku0Lo8_5ONrL2eE&callback=myMap"></script>';
					
				}
			}
			else
			{
				echo 'Anfrage konnte nicht ausgeführt werden!';
			}
		   
		}
		
		public function getClosestBranch(){
			
		}
		
		
	}
	
	
	//10115-14199 Berlin

	//55116-55131 Mainz

	//40210–40629 Düsseldorf
	
	
	
	
?>