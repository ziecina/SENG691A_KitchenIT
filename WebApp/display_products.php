<html>
	<head>
		<title>KitchenIT</title>
	</head>
	<body>	

<?php
require 'config.php';
//require 'aws/aws-autoloader.php';

$mysqli = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
echo 'Success... ' . $mysqli->host_info . "\n";

if ($result = $mysqli->query("SELECT * FROM upc")) {
    printf("Select returned %d rows.\n", $result->num_rows);
	
	while ($row = $result->fetch_object())
		echo $row->UPC . "<br />";
    /* free result set */
    $result->close();
}


//echo $_REQUEST['UPC'];
//echo $_REQUEST['Action'];


?>
	</body>
</html>