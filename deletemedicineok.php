<?php
include ("conn.php");
$sql="update medicine set mednum=mednum-'$mednum' where medname='$medname'";
mysql_query($sql,$conn);
echo "<script language=\"javascript\">alert(\"药品出库成功!\");window.location.href=\"manager.php\";</script>	";
?>

<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="zh-cn">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<style type="text/css">
<!--
.STYLE1 {
	font-size: 18px;
	color: #000000;
}
.STYLE3 {font-size: 24px}
-->
</style>
<title>药品出库</title></HEAD>
<BODY LEFTMARGIN=100 RIGHTMARGIN=100 BGCOLOR=#FFFFFF TEXT=#800080 LINK=#0000C0 ALINK=#0000FF VLINK=#8080FF>
<CENTER>
</CENTER>

</BODY>
</HTML>