<html>
<head>
<title>Insert Data</title>
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

	$sql = "INSERT INTO customer (ClientID, Name, Email, CountryCode, Budget, Used) 
		VALUES ('".$_POST["txtClientID"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."'
		,'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "Record add successfully";
	}

	mysqli_close($conn);
?>
</body>
</html>
