<html>
<head>
<title>KitchenIT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>
<?php include("nav.php");?>

<?php
switch ($_REQUEST['page']) {
	case "Inventory":
		include("inventory.php");
		break;
	
	
}
?>




</body>
</html>
