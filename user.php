<!doctype html>
<?php include "phpconnect.php";?>
<html>
<head>
<meta charset="utf-8">

<?PHP
#USERID will be set Via cookie or GET
$num = "";
$username = "";
$password = "";
$avitar = "";
$DateJoined = "";
$UserBio = "";

if (isset($_GET['USERID'])){$USERID = $_GET['USERID'];};
if (!isset($_GET['USERID'])){$USERID = 1;}; #Take out before release

$dbqur = "SELECT * FROM `user` WHERE num = ".$USERID;

if($row = mysqli_fetch_array($sqlqur)){
	
	$num = $row["num"];
	$username = $row["username"];
	$password = $row["pass"];
	$avitar = $row["aviloc"];
	$DateJoined = $row["timestamp"];
	$UserBio = $row["Bio"];
	};




?>
<title><?php echo $username ; ?></title>
</head>
<body>

<a href="newuser.php">newuser.php</a>

<table align="center" border="1">
<tr align="center">
<td align="center"> Id Number (num)</td>
<td align="center"> username</td>
<td align="center"> password (pass)</td>
<td align="center"> aviloc (text)</td>
<td align="center"> aviloc (IMG)</td>
<td align="center"> Date Joined</td>
<td align="center"> Bio</td>
</tr>
<tr align="center">
<td align="center"><?php echo $num; ?></td>
<td align="center"><?php echo $username; ?></td>
<td align="center"><?php echo $password; ?></td>
<td align="center"><?php echo $avitar; ?></td>
<td align="center"><img src="<?php echo $avitar; ?>" width="100" height="80"></td>
<td align="center"><?php echo $DateJoined; ?></td>
<td align="center"><?php echo $UserBio; ?></td>
</tr>
</table>

<br><br><br><br>
<hr><hr>
<table align="center" border="1">
<tr align="center">
<td align="center"> Id Number (num)</td>
<td align="center"> username</td>
<td align="center"> password (pass)</td>
<td align="center"> aviloc (text)</td>
<td align="center"> Date Joined</td>
<td align="center"> Bio</td>
</tr><?PHP
$sqlQ = "SELECT * FROM `user`";
$data = mysqli_query($dbconnect,$sqlQ);
while($record = mysqli_fetch_array($data))
{
echo "<tr>";
echo "<td>";
echo $record['num'];
echo "</td>";
echo "<td>";
echo $record['username'];
echo "</td>";
echo "<td>";
echo $record['pass'];
echo "</td>";
echo "<td>";
echo $record['aviloc'];
echo "</td>";
echo "<td>";
echo $record['timestamp'];
echo "</td>";
echo "<td>";
echo $record['Bio'];
echo "</td>";
echo "</tr>";}
?>
<hr><hr>
<br><br><Br>


</body>
</html>