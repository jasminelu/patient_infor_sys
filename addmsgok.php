<?php
include ("conn.php");
$add="insert into patientmsg values('$patientname','$sex','$birthday','$category','$address','$call','$drug')";
mysql_query($add,$conn);
echo "<script language=\"javascript\">alert(\"挂号成功!\");window.location.href=\"manager.php\";</script>	";
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
<title>挂号成功</title></HEAD>
<BODY LEFTMARGIN=100 RIGHTMARGIN=100 BGCOLOR=#FFFFFF TEXT=#800080 LINK=#0000C0 ALINK=#0000FF VLINK=#8080FF>
<CENTER>
</CENTER>

</BODY>
</HTML>