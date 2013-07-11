<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>住院统计</title>
</head>
<body>

<p>选则统计条件（单项或多项）</p>
<form id="form1" name="form1" method="post" action="">
  <p>NO：
    <input name="no" type="text" id="no" width="60" />
    &nbsp;&nbsp;&nbsp;
  姓名：
  <input name="name" type="text" id="name" width="60" />
  &nbsp;&nbsp;&nbsp;
  性别：
  <input name="sex" type="text" id="sex" width="60" />
  &nbsp;&nbsp;&nbsp;
  年龄：
  <input name="age1" type="text" id="age1" size="3" width="60" />
  
  至
  <input name="age2" type="text" id="age2" size="3" width="60" />
  &nbsp;&nbsp;&nbsp;
  
  病历号：
  <input name="casenum" type="text" id="casenum" width="60" />
&nbsp;&nbsp;&nbsp;</p>
  <p>身高：
    <input name="high1" type="text" id="high1" size="3" width="60" />
至
<input name="high2" type="text" id="high2" size="3" width="60" /> 
m
&nbsp;&nbsp;&nbsp;体重：
    <input name="weigh1" type="text" id="weigh1" size="3" width="60" />
至
<input name="weigh2" type="text" id="weigh2" size="3" width="60" />
kg
&nbsp;&nbsp;&nbsp;血压
    ：
<input name="blood1" type="text" id="blood1" size="3" width="60" />
至
<input name="blood2" type="text" id="blood2" size="3" width="60" />
mmHg
&nbsp;&nbsp;&nbsp; 
<input type="submit" name="Submit" value="查找" />
  </p>
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse">  
  <tr>
    <td width="7%" bgcolor="#EBE2FE">NO</td>
    <td bgcolor='#EBE2FE'>姓名</td>
    <td bgcolor='#EBE2FE'>性别</td>
    <td bgcolor='#EBE2FE'>年龄</td>
    <td bgcolor='#EBE2FE'>病历号</td>
    <td bgcolor='#EBE2FE'>身份证号</td>
    <td bgcolor='#EBE2FE'>住院时间</td>
    <td bgcolor='#EBE2FE'>家族史</td>
    <td bgcolor="#EBE2FE">备注</td>
    <td width="10%" align="center" bgcolor="#EBE2FE">详细查看</td>
  </tr>
 
<?php 
include ("conn.php");//与专门连接数据库的页面相连
 $sql = "SELECT * FROM inn WHERE 1";
 $i = 0;

 
		if(strlen($no)>0)
		{
			$sql .= " AND no ='$no' ";
		}
		if(strlen($name)>0)
		{
			$sql .= " AND name ='$name' ";
		}
		if(strlen($sex)>0)
		{
			$sql .= " AND sex ='$sex' ";
		}
		if(strlen($age1 or $age2)>0)
		{
			$sql .= " AND (age>='$age1' and age<='$age2') ";
		}
		if(strlen($casenum)>0)
		{
			$sql .= " AND casenum ='$casenum' ";
		}
		if(strlen($high1 or $high2)>0)
		{
			$sql .= " AND (high>='$high1' and high<='$high2') ";
		}
		if(strlen($weigh1 or $weigh2)>0)
		{
			$sql .= " AND (weigh>='$weigh1' and weigh<='$weigh2') ";
		}
		if(strlen($blood1 or $blood2)>0)
		{
			$sql .= " AND (blood>='$blood1' and blood<='$blood2') ";
		}
		
 $q = mysql_query($sql);

 $n = mysql_num_rows($q);
 if($n>0) {
            while($result = mysql_fetch_array($q)) {
			extract($result);
echo'<tr>';
echo'<td>'.$no.'</td>';
echo'<td>'.$name.'</td>';
echo'<td>'.$sex.'</td>';
echo'<td>'.$age.'</td>';
echo'<td>'.$casenum.'</td>';
echo'<td>'.$idd.'</td>';
echo'<td>'.$year.$month.$day.'</td>';
echo'<td>'.$family.'</td>';
echo'<td>'.$beizhu.'</td>';

echo'<td>'.'<a href="detail.php?no='.$result['no'].'">[详细查看]</a>';
echo '</td>';
echo'</tr>';
$i++;    
            }
        }
       
    ?>	
</table>
<p>以上数据共<?php echo $i;?>条
</p>
<p>&nbsp; </p>

</body>
</html>

