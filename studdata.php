<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table class="table table-responsive table-striped">
<tr><th>SNo</th>
<th>Name</th>
<th>Subject</th>
<th>Experience</th>
<th>Type</th>
<th>Locality</th>
<th>Contact</th>
<th>Other</th>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("coaching");

$str=mysql_query("Select * from Student");
while($row=mysql_fetch_array($str))
{
	echo "<tr>
	<td>$row[SNo]</td>
	<td>$row[Name]</td>
	<td>$row[Subject]</td>
	<td>$row[Experience]</td>
	<td>$row[Type]</td>
	<td>$row[Locality]</td>
	<td>$row[Contact]</td>
	<td>$row[Other]</td>
	</tr>";
	}
?>
</table>
<a href="addteacher.php">Add Teacher</a>
<a href="delteacher.php">Delete Teacher</a>
</body>
</html>