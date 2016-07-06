<?
require 'aws/aws-autoloader.php';


$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);


echo $_REQUEST['UPC'];
echo $_REQUEST['Action'];


?>
