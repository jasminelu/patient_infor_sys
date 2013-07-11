<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>药品入库</title>
</head>

<body>
<form id="addmedicine" name="addmedicine" method="post" action="addmedicineok.php">
  <label>药品名称：
    &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text"  name="medname" id="medname" />
  </label>
  <br />
  <label></label>
  <label>药品售价:
    &nbsp;&nbsp;
       <input type="text" name="medprice" id="medprice" />
  </label>
  <br />
  <label>药品类别:
    &nbsp;
      <select name="medcategory">
        <option value="内科用药">内科用药</option>
        <option value="外科用药">外科用药</option>
        <option value="肿瘤用药">肿瘤用药</option>
        <option value="妇科用药">妇科用药</option>
        <option value="眼科用药">眼科用药</option>
        <option value="耳鼻喉科用药">耳鼻喉科用药</option>
                  </select>
  </label>
  <br />
  <label>生产商:
    &nbsp;&nbsp;
       <input type="text"  name="medproduct" id="medproduct" />
  </label>
  <label></label>
  <br />
  <label>进药数量：
  <input type="text" name="mednum"  id="mednum" />
  <br />
  <br />
  <input type="submit" name="submit" id="id" value="药品入库"/>
  </label>
</form>
</body>
</html>
