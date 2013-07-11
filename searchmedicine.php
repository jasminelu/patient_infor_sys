<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>药品查询</title>
</head>
<body>
<form name="findmedicine" method="post" action="">
  <label>药品名称：
  <input type="text" name="medname" id="medname">
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
	 if( strlen($medname)>0){
	 $sql="select * from medicine where medname = '$medname'";
	 $q=@mysql_query($sql,$conn);
	 $result = @mysql_fetch_array($q);}
	 }	
	?>
	    <p>药品信息<br>
      </p>
      <label>药品名称：
     <?php echo $result['medname'];?>
      </label><br>
      <label>药品售价：    
     &nbsp;
     <?php echo $result['medprice'];?>
      </label><br>
	  <label>药品类别：    
     &nbsp;
     <?php echo $result['medcategory'];?>
      </label><br>
	  <label>生产商：    
     &nbsp;
     <?php echo $result['medproduct'];?>
      </label>
	  <label><br>药品数量：    
     &nbsp;
     <?php echo $result['mednum'];?>
      </label><br>
	  	  <label>使用药品数量：    
     &nbsp;
     5
      </label>
<p><br>
</p>
</body>
</html>