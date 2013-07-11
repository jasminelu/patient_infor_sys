<html>
<head>
<title>登录错误页面</title></head>
登录出错了,<span id="time" ">5</span>秒后跳转到登录页面......
<script language="JavaScript1.2" type="text/javascript">   
   
function delayURL(url) {   
 var delay = document.getElementById("time").innerHTML;//拿到标签id=time的值   
 if(delay > 0) {//如果delay大于0，就减1，然后对delay重新赋值   
  delay--;   
  document.getElementById("time").innerHTML = delay;   
 } else {   
  window.top.location.href = url ;   
 }   
    setTimeout("delayURL('" + url + "')", 1000);   //每隔一秒执行一下delayURL(url)这个函数，setTimeout是延时执行的函数。
}   
   
</script>   
<script type="text/javascript">   
delayURL("login.php");   
</script>  

</body>
</html>