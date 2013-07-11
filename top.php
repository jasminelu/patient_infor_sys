<?php
ob_start();
session_start();  
include ("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>医院管理信息系统</title>
</head>

<body>
<p>欢迎<?php echo($_SESSION['username'])?>进入医院管理系统，今天是
  <?php
echo date('Y-m-j');
?>
</p>
</body>
</html>