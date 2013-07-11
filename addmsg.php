<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>挂号</title>
</head>

<body>
<table width="762" height="551" border="0">
  <tr>
    <td height="547"><table width="128" height="287" border="1" align="left">
      <tr>
        <td width="122">管理菜单</td>
      </tr>
      <tr>
        <td><a href="manager.php">返回首页</a></td>
      </tr>
      <tr>
        <td><a href="clinic.php">返回门诊管理</a></td>
      </tr>
      <tr>
        <td><a href="case.php">病例管理</a></td>
      </tr>
      <tr>
        <td><a href="pharmacy.php">药房管理</a></td>
      </tr>
      <tr>
        <td><a href="inhospital.php">住院管理</a></td>
      </tr>
    </table></td>
    <td><label></label>
      <form id="addmasg" name="addmasg" method="post" action="addmsgok.php">
        <label>姓名：
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text"  name="patientname" id="patientname" />
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
        <br />
        <br />
        <input type="submit" name="submit" id="id" value="挂号"/>
        </label>
            </form>      <label></label></td>
  </tr>
</table>
</body>
</html>
