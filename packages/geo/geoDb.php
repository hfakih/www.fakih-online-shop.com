<?php
	class GeoDb{
		private $servername = 'localhost';
		private $username = 'root';
        private $password = '';
		private $geoDb = null;

		function __construct() {
		  try {
			$this->geoDb = new PDO('mysql:host='.$this->servername.';dbname=shop', $this->username, $this->password);
			// set the PDO error mode to exception
			$this->geoDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo '<script>console.log("Verbindung zur Geo DB erfolgreich");</script>';
		   }
		   catch(PDOException $e)
		  {
				echo "Verbindung zur Geo DB fehlgeschlagen: " . $e->getMessage();
			}

		}
		
		public function getGeoDb(){
			return $this->geoDb;
		}
	}
?>