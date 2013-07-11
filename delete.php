<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>病例删除</title>
</head>

<body>
<?php 
include ("conn.php");
$sql='delete from patientcase where casenum='. $_GET['id'];
$result=mysql_query($sql,$conn);
echo "<script language=\"javascript\">alert(\"病例已删除!\");window.location.href=\"case.php\";</script>	";
?>

</body>
</html>
