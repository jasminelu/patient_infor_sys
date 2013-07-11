<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>病例修改</title>
</head>

<body>

<?php 
include ("conn.php");

$sql1="update patientmsg set patientname='$patientname',
sex='$sex',birthday='$birthday',category='$category',address='$address',
callnum='$call',drug='$drug'
  where patientname=(select patientname from patientcase 
  where casenum='$id')";

$sql2="update patientcase set patientname='$patientname',
ill='$ill',examine='$examine',medicine='$medicine'
where casenum='$id'";  
  
mysql_query($sql1,$conn);
mysql_query($sql2,$conn);
echo "<script language=\"javascript\">alert(\"病例已修改;\");window.location.href=\"case.php\";</script>	";
?>

</body>
</html>

