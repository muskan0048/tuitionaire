<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table border="1">
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("coaching");

$str=mysql_query("Select * from admin");
while($row=mysql_fetch_array($str))
{
	echo "<tr>
	<td>$row[SNo]</td>
	<td>$row[Name]</td>
	<td>$row[LoginId]</td>
	<td>$row[Password]</td>
	<td>$row[Phone]</td>
	
	
	</tr>";
	}
?>
</table>
<a href="addadmin.php">Add Admin</a>
</body>
</html>