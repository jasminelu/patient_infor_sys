<html>
<head>
<title>��¼����ҳ��</title></head>
��¼������,<span id="time" ">5</span>�����ת����¼ҳ��......
<script language="JavaScript1.2" type="text/javascript">   
   
function delayURL(url) {   
 var delay = document.getElementById("time").innerHTML;//�õ���ǩid=time��ֵ   
 if(delay > 0) {//���delay����0���ͼ�1��Ȼ���delay���¸�ֵ   
  delay--;   
  document.getElementById("time").innerHTML = delay;   
 } else {   
  window.top.location.href = url ;   
 }   
    setTimeout("delayURL('" + url + "')", 1000);   //ÿ��һ��ִ��һ��delayURL(url)���������setTimeout����ʱִ�еĺ�����
}   
   
</script>   
<script type="text/javascript">   
delayURL("login.php");   
</script>  

</body>
</html>