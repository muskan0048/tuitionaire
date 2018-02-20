<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link  rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

mysql_connect("localhost", "root", "");
mysql_select_db("coaching");
$a=$_REQUEST['type'];
$b=$_REQUEST['area'];
$c=$_REQUEST['subject'];

$str=mysql_query("select name from teacher where type='%$a%' and area='%$b%' and subject='%$c%'  ");


while($row=mysql_fetch_array($str))
{
	echo "
	$row[Name]
	
	";
	}
?>
</body>
</html>