<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>病例修改</title>
</head>
<?php
include ("conn.php");
$sql="select * from patientmsg,patientcase where patientmsg.patientname=patientcase.patientname and casenum='$id'";
$result=mysql_query($sql,$conn);
$a=@mysql_fetch_array($result);
?>
<body>
<form id="edit" name="edit" method="post" action="editok.php">
  <label>姓名：
    &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text"  name="patientname" value="<?php echo $a[patientname];?>" id="patientname" />
  </label>
  <br />
  <label>性别：
  <input type="radio" name="sex" value="男" />
    男
  <input type="radio" name="sex" value="女" />
    女 <br />
  </label>
  <label>出生日期:
    &nbsp;&nbsp;
       <input type="text" name="birthday" id="birthday" />
  </label>
  <br />
  <label>科室:
    &nbsp;
      <select name="category">
        <option value="普通外科">普通外科</option>
        <option value="耳鼻喉科">耳鼻喉科</option>
        <option value="皮肤科">皮肤科</option>
        <option value="妇科">妇科</option>
        <option value="肠胃科">肠胃科</option>
        <option value="牙科">牙科</option>
      </select>
  </label>
  <br />
  <label>住址:
    &nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text"  name="address" id="address" />
  </label>
  <br />
  <label>联系方式：
  <input type="text" name="call" id="call" />
  </label>
  <br />
  <label>药物过敏：
  <input type="text" name="drug"  id="drug" />
  <br/>
  病情描述：
  <br />
  </label>
  <label>
  <textarea name="ill" cols="80" rows="3" id="ill"></textarea>
  <br/><br />
  需要检查的项目： <br />
</label>
  <label>
  <textarea name="examine" cols="80" rows="3" id="examine"></textarea>
  <br/><br />
  </label>
  <label>药方： <br />
</label>
  <label>
  <textarea name="medicine" cols="80" rows="3" id="medicine"></textarea>
  </label>
  <label><br />
  <?php echo '<input value="'.$_GET['id'].'" id="id" name="id"/>';?>
  <br />
  <input type="submit" name="submit" value="修改"/>
  </label>
  <input name="button" type="reset" class="butt" value="重置" />
</form>
</body>
</html>

