<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>门诊查询</title>
</head>
<body>
<form name="findpatient" method="post" action="">
  <label>姓名
  <input type="text" name="patientname" id="patientname">
  </label><br>
  <label></label>
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="id" value="查找"/>
</form>
<?php
include 'conn.php';
?>
    <?php
    if($_POST['submit'])
	 {
	 if( strlen($patientname)>0){
	 $sql="select * from patientmsg where patientname = '$patientname'";
	 $q=@mysql_query($sql,$conn);
	 $result = @mysql_fetch_array($q);}
	 }	
	?>
	    <p>门诊信息<br>
      </p>
      <label>用户名：
     <?php echo $result['patientname'];?>
      </label><br>
      <label>性别：    
     &nbsp;
     <?php echo $result['sex'];?>
      </label><br>
	  <label>生日：    
     &nbsp;
     <?php echo $result['birthday'];?>
      </label><br>
	  <label>科室：    
     &nbsp;
     <?php echo $result['category'];?>
      </label><br>
	  <label>住址：    
     &nbsp;
     <?php echo $result['address'];?>
      </label><br>
	  <label>联系方式：    
     &nbsp;
     <?php echo $result['callnum'];?>
      </label><br>
	   <label>药物过敏：    
     &nbsp;
     <?php echo $result['drug'];?>
      </label>
</body>
</html>
