<!doctype html>
<?php include "phpconnect.php";?>
<html>
<head>
<meta charset="utf-8">

<?PHP

#USERID will be set Via cookie or GET

if (isset($_GET['USERID'])){$USERID = $_GET['USERID'];};

if (!isset($_GET['USERID'])){$USERID = 1;}; #Take out before release


$dbqur = "SELECT * FROM `user` WHERE num = ".$USERID;
$sqlqur = mysqli_query($dbconnect,$dbqur);


while($row = mysqli_fetch_array($sqlqur)){
	
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
<td align="center"><img src="<?php echo $avitar; ?>"></td>
<td align="center"><?php echo $DateJoined; ?></td>
<td align="center"><?php echo $UserBio; ?></td>
</tr>
</table>

<br><br><br><br>
<hr><hr>

<br><br>
database skima: <br><br>num|username|pass|aviloc|timestamp|Bio<br>
1|john|PASS|http://puu.sh/nhxtf/7b20aec200.png|2016-06-28|-My Bio-
3|jess|pass|NULL|NULL|2016-06-28|NULL	

<br><br><br><br>
expected output if get(USERID) set 1<br>
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
<td align="center">1</td>
<td align="center">John</td>
<td align="center">PASS</td>
<td align="center">http://puu.sh/nhxtf/7b20aec200.png</td>
<td align="center"><img src="http://puu.sh/nhxtf/7b20aec200.png"></td>
<td align="center">2016-06-28</td>
<td align="center">-My Bio-</td>
</tr>
</table>
<br><br><br><br>
<hr><hr>

if no user

<br><br><b>No User</b>

</body>
</html>
