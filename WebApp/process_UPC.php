<?php
require 'config.php';
//require 'aws/aws-autoloader.php';

$mysqli = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

if ($_REQUEST['UPC']) {
	 $ServingsPerCarton = 4;
	if ($result = $mysqli->query("INSERT INTO `upc_inventory` (`UPC`, `ServingsAvaliable`) VALUES ('". $_REQUEST['UPC'] ."', '". $ServingsPerCarton ."');")) {
			//echo $row->UPC . "<br />";
		/* free result set */
		

		//$mysqli->insert_id;
		header("HTTP/1.1 201 CREATED");

		$result->close();
	}
}


//echo $_REQUEST['UPC'];
//echo $_REQUEST['Action'];


?>