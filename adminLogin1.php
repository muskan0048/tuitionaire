<?php
session_start();

$us=$_REQUEST['id'];
$pass=$_REQUEST['pass'];
mysql_connect("localhost","root","");
mysql_select_db("coaching");
$a=mysql_query("select * from admin where LoginId='$us' and Password='$pass'");
$row=mysql_fetch_array($a);
if($us==$row['LoginId'] && $pass==$row['Password'])
{
$_SESSION['a']=$us; 
$_SESSION['sno']=$row['s_no']; 
header("location:admin1.php");
}
else
{
	
	header("location:adminLogin.php");
}
?>