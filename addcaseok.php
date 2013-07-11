<?php
include ("conn.php");
$sql="select * from patientmsg where patientname='$patientname'";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
if($rows<>0)
{$add="insert into patientcase(patientname,ill,examine,medicine) values('$patientname','$ill','$examine','$medicine')";
mysql_query($add,$conn);
echo "<script language=\"javascript\">alert(\"增加医嘱成功!\");window.location.href=\"manager.php\";</script>	";}
else{
echo "<script language=\"javascript\">alert(\"请先挂号!\");window.location.href=\"addmsg.php\";</script>	";
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>医嘱</title>
</head>

<body>
</body>
</html>
