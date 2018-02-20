<?php

mysql_connect("localhost", "root", "");
mysql_select_db("coaching");
$a=$_REQUEST['name'];
$b=$_REQUEST['subject'];
$c=$_REQUEST['qualification'];
$d=$_REQUEST['experience'];
$e=$_REQUEST['class'];
$f=$_REQUEST['locality'];
$g=$_REQUEST['address'];
$h=$_REQUEST['Timimg'];
$i=$_REQUEST['phone'];
$j=$_REQUEST['Type'];
$k=$_REQUEST['fee'];
mysql_query("insert into teacher values('', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k' )");

header("location:tchrdata.php");
?>