<?php

mysql_connect("localhost", "root", "");
mysql_select_db("coaching");
$a=$_REQUEST['name'];
$b=$_REQUEST['loginid'];
$c=$_REQUEST['pass'];
$d=$_REQUEST['phone'];
mysql_query("insert into admin values('', '$a', '$b', '$c', '$d' )");

header("location:admindata.php");
?>