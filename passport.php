<?php
ob_start();
session_start();
include("conn.php");
$sql="select * from users where username='$username' and password='$password';";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
if($rows<>0)
{header("location:manager.php");
  session_start();
  $_SESSION['username']=$_POST['username'];
}
else{header("location:error.php");}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>医院管理信息系统</title>
</head>
</html>