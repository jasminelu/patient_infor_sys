<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>医嘱</title>
</head>

<body>
<table width="985" height="440" border="0">
  <tr>
    <td width="161"><table width="128" height="287" border="1" align="left">
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
        <td>病例管理</td>
      </tr>
      <tr>
        <td>药房管理</td>
      </tr>
      <tr>
        <td>住院管理</td>
      </tr>
    </table></td>
    <td width="814"><form id="addcase" name="addcase" method="post" action="addcaseok.php">
      <table width="814" height="629" border="1" cellspacing="0">
        <tr>
          <td height="52">患者
            <input type="text"  name="patientname" id="patientname" /></td>
        </tr>
        <tr>
          <td height="154"><p>病情描述</p>
              <p>
                <textarea name="ill" cols="80" rows="3" id="ill"></textarea>
              </p>
            <label for="textfield"></label></td>
        </tr>
        <tr>
          <td height="196"><p>需要检查的项目</p>
              <p>
                <textarea name="examine" cols="80" rows="3" id="examine"></textarea>
            </p></td>
        </tr>
        <tr>
          <td height="197"><p>药方</p>
              <p>
                <textarea name="medicine" cols="80" rows="3" id="medicine"></textarea>
            </p></td>
        </tr>
      </table>
      <p>
        <label for="Submit"></label>
        <input type="submit" name="Submit" value="提交" id="Submit" />
      </p>
    </form></td>
  </tr>
</table>
</body>


</html>
