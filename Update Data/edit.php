<html>
<head>
<title>Edit Data</title>
</head>
<body>
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "database";

   $strClientID = null;

   if(isset($_GET["ClientID"]))
   {
	   $strClientID = $_GET["ClientID"];
   }
  
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "database";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

   $sql = "SELECT * FROM client WHERE ClientID = '".$strClientID."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<form action="save.php" name="frmAdd" method="post">
<table width="284" border="1">
  <tr>
    <th width="120">ClientID</th>
    <td width="238"><input type="hidden" name="txtClientID" value="<?php echo $result["ClientID"];?>"><?php echo $result["ClientID"];?></td>
    </tr>
  <tr>
    <th width="120">Name</th>
    <td><input type="text" name="txtName" size="20" value="<?php echo $result["Name"];?>"></td>
    </tr>
  <tr>
    <th width="120">Email</th>
    <td><input type="text" name="txtEmail" size="20" value="<?php echo $result["Email"];?>"></td>
    </tr>
  <tr>
    <th width="120">CountryCode</th>
    <td><input type="text" name="txtCountryCode" size="2" value="<?php echo $result["CountryCode"];?>"></td>
    </tr>
  <tr>
    <th width="120">Budget</th>
    <td><input type="text" name="txtBudget" size="5" value="<?php echo $result["Budget"];?>"></td>
    </tr>
  <tr>
    <th width="120">Used</th>
    <td><input type="text" name="txtUsed" size="5" value="<?php echo $result["Used"];?>"></td>
    </tr>
  </table>
  <input type="submit" name="submit" value="submit">
</form>
<?php
mysqli_close($conn);
?>
</body>
</html>
