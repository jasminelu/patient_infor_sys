<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>病例管理</title>
</head>

<body>
<?php 
include ("conn.php");
$sql="select * from patientmsg,patientcase where patientmsg.patientname=patientcase.patientname";
$result=mysql_query($sql,$conn);
?>
<div style="text-align:center;">
<div style="text-align:center">
<h2>病例管理</h2>
<table width="100%" border="1" cellpadding="2" cellspacing="2" style="width:100%; margin-left:auto; margin-right:auto;">
<tr>
<th>病历号</th>
<th>姓名</th>
<th>性别</th>
<th>出生日期</th>
<th>科室</th>
<th>住址</th>
<th>联系方式</th>
<th>药物过敏</th>
<th>病情</th>
<th>检查项目</th>
<th>药方</th>
<th>编辑</th>
<th>删除</th>
</tr>
<?php
while($row=mysql_fetch_assoc($result)){
extract($row);
echo'<tr>';
echo'<td>'.$casenum.'</td>';
echo'<td>'.$patientname.'</td>';
echo'<td>'.$sex.'</td>';
echo'<td>'.$birthday.'</td>';
echo'<td>'.$category.'</td>';
echo'<td>'.$address.'</td>';
echo'<td>'.$callnum.'</td>';
echo'<td>'.$drug.'</td>';
echo'<td>'.$ill.'</td>';
echo'<td>'.$examine.'</td>';
echo'<td>'.$medicine.'</td>';
echo'<td>'.'<a href="edit.php?id='.$row['casenum'].'">[编辑]</a>'.'</td>';
echo'<td>'.'<a href="delete.php?id='.$row['casenum'].'">[删除]</a>'.'</td>';
}
?>
</table>
</div>
<div align="right"><a href="manager.php">返回</a></div>
</body>
</html>
