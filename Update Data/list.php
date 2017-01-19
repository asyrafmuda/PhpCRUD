<html>
<head>
<title>Edit Update Data</title>
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

	$sql = "SELECT * FROM client";

	$query = mysqli_query($conn,$sql);
?>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">ClientID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
	<th width="50"> <div align="center">Edit </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["ClientID"];?></div></td>
    <td><?php echo $result["Name"];?></td>
    <td><?php echo $result["Email"];?></td>
    <td><div align="center"><?php echo $result["CountryCode"];?></div></td>
    <td align="right"><?php echo $result["Budget"];?></td>
    <td align="right"><?php echo $result["Used"];?></td>
	<td align="center"><a href="edit.php?ClientID=<?php echo $result["ClientID"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
