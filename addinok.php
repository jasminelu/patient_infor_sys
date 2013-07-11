<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include ("conn.php");
$add="insert into inn values('$no','$name','$sex','$age','$casenum','$idd','$mobilephone','$telephone','$name2','$mobilephone2','$telephone2','$year','$month','$day','$year2','$month2','$day2','$family','$beizhu','$high','$weigh','$weighnum','$blood','$beforeill','$ghb','$tg','$ldl','$hdl','$cho','$isa','$ica','$gad','$x1','$x2','$x3','$x4','$x5','$x6','$y1','$y2','$y3','$y4','$y5','$y6','$c1','$c2','$c3','$c4','$c5','$c6','$before','$year3','$month3','$day3','$long','$12long','$qlong','$afterill','$out','$ask','$other','$m1','$d1','$f1','$g1','$p1','$u1','$t1','$b1','$z1','$m2','$d2','$f2','$g2','$p2','$u2','$t2','$b2','$z2','$m3','$d3','$f3','$g3','$p3','$u3','$t3','$b3','$z3','$m4','$d4','$f4','$g4','$p4','$u4','$t4','$b4','$z4','$m5','$d5','$f5','$g5','$p5','$u5','$t5','$b5','$z5','$m6','$d6','$f6','$g6','$p6','$u6','$t6','$b6','$z6','$m7','$d7','$f7','$g7','$p7','$u7','$t7','$b7','$z7','$m8','$d8','$f8','$g8','$p8','$u8','$t8','$b8','$z8','$m9','$d9','$f9','$g9','$p9','$u9','$t9','$b9','$z9','$m10','$d10','$f10','$g10','$p10','$u10','$t10','$b10','$z10','$other2')";
mysql_query($add,$conn);
echo "<script language=\"javascript\">alert(\"保存成功!\");window.location.href=\"manager.php\";</script>	";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>
