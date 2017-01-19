<html>
<head>
<title>Delete list</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "database";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strCustomerID = $_GET["ClientID"];
	$sql = "DELETE FROM client
			WHERE ClientID = '".$strClientID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
	}

	mysqli_close($conn);
?>
</body>
</html>
