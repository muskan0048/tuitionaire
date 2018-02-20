

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("coaching");
$a=$_REQUEST['name'];
$b=$_REQUEST['subject'];
$c=$_REQUEST['exp'];
$d=$_REQUEST['type'];
$e=$_REQUEST['locality'];
$f=$_REQUEST['phone'];

$g=$_REQUEST['email'];
$h=$_REQUEST['other'];

mysql_query("insert into student values('', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h' )");

header("location:studdata.php");
?>
</table>
</body>
</html>