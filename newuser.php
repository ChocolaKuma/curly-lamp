<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<a href="user.php">user.php</a>
<table border="1" bgcolor="#999999">
<td width="147">

<form action="newuser.php" method="post">
<tr>
<td>
USRNUM:
</td>
<td width="146">
<input type="text"  value="###">
</td>
</tr>
<tr>
<td>
UserName:
</td>
<td>
<input type="text" name="usr" value="value">
</td>
</tr>
<tr>
<td>
PassWord:
</td>
<td>
<input type="text" name="pas" value="value">
</td>
</tr>
<tr>
<td>
aviloc (Full Url): 
</td>
<td>
<input type="text" name="avi" value="img/superthumb.png">
</td>
</tr>
<tr>

<td align="center"> Bio</td>

<td width="144">
<input type="text" name="bio" value="Tell Us about your self">
</td>
</tr>
<tr>

<td align="center">Date Joined</td>

<td>
<input type="text" name="date" value="2016-06-29">
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="Enter">
</td>
</tr>
</table>

<!--Input form--------------------------------------------->
VALUES (NULL, 'Kin', 'anotherPass', 'img/superthumb.png', '2016-06-29', 'a;osdjcn;alsvxcn;zXvn');

<?php
include "phpconnect.php";
if(isset($_POST['Enter'])){
//
$sqli_code="INSERT INTO `narvana`.`user` (`num`, `username`, `pass`, `aviloc`, `timestamp`, `Bio`) (
NULL,
'$_POST[usr]',
'$_POST[pas]',
'$_POST[avi]',
'$_POST[date]',
'$_POST[bio]')";	
echo "<br><br><br> SQLI_CODE: ", $sqli_code;	
mysqli_query($dbconnect,$sqli_code);	
};
?>
</body>
</html>