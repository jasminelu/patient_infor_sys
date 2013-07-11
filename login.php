<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>医院管理系统</title>
<script language="javascript">
  function checkform()
  {
    if (loginform.username.value==" ")
    {
      alert('请输入用户名')
      loginform.username.focus()
      return false;
     }
    if(loginform.password.value==" ")
    {
      alert('请输入密码')
      loginform.password.focus();
      return false;
     }
   }
</script>
</head>
<body topmargin="200" bgcolor="#DEE7D6" leftmargin="200" >
<center>
<form method="post" name="loginform" action="passport.php" onSubmit="return checkform(this)">
<font color="#000000">&nbsp;&nbsp;<font size="5">医院管理信息系统</font></font><br>
<br>
用户名
<input type="text" name="username" class="text" value=""><br>
<br>
密&nbsp;码
<input type="text" name="password" class="text" value="">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="确认" class="butt">
<input type="button" value="退出" class="butt" onClick="javascript:self.close();">
</form>
<center>
</body>
</html>
