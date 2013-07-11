<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>详细信息</title>
</head>

<body>
<?php 
include ("conn.php");
$sql='select * from inn where no='. $_GET['no'];
$q=@mysql_query($sql,$conn);
$result = @mysql_fetch_array($q);

?>

<form id="form1" name="form1" >
          <table width="933" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2">NO
                <label for="textfield"></label>
                  <input name="no" type="text" id="textfield" size="10" value="<?php echo $result['no']?>"/></td>
              <td colspan="2">姓名
                <input name="name2" type="text" id="no" size="20" value="<?php echo $result['name']?>"/></td>
              <td colspan="2">性别
                <input name="sex" type="text" id="sex" size="15" value="<?php echo $result['sex']?>"/></td>
              <td colspan="2">年龄
                <input name="age" type="text" id="age" size="15" value="<?php echo $result['age']?>"/></td>
              <td colspan="2"><div align="left">病历号
                <input name="casenum" type="text" id="casenum" size="10" value="<?php echo $result['casenum']?>"/>
              </div></td>
            </tr>
            <tr>
              <td colspan="5">身份证号
                <input name="idd" type="text" id="idd" size="30" value="<?php echo $result['idd']?>"/></td>
              <td colspan="3">手机
                <input name="mobilephone" type="text" id="mobilephone" size="25" value="<?php echo $result['mobilephone']?>"/></td>
              <td colspan="2">电话
                <input name="telephone" type="text" id="telephone" size="20" value="<?php echo $result['telephone']?>"/></td>
            </tr>
            <tr>
              <td colspan="3">联系人
                <input name="name2" type="text" id="name2" size="20" value="<?php echo $result['name2']?>"/></td>
              <td colspan="3">手机
                <input name="mobilephone2" type="text" id="mobilephone2" size="25" value="<?php echo $result['mobilephone2']?>"/></td>
              <td colspan="4">电话
                <input name="telephone2" type="text" id="telephone2" size="20" value="<?php echo $result['telephone2']?>"/></td>
            </tr>
            <tr>
              <td colspan="5">住院时间
                <input name="year" type="text" id="year" size="6" value="<?php echo $result['year']?>"/>
                年
                <input name="month" type="text" id="month" size="3" value="<?php echo $result['month']?>"/>
                月
                <input name="day" type="text" id="day" size="3" value="<?php echo $result['day']?>"/>
                日 至
                <input name="year2" type="text" id="year2" size="6" value="<?php echo $result['year2']?>"/>
                年
                <input name="month2" type="text" id="month2" size="3" value="<?php echo $result['month2']?>"/>
                月
                <input name="day2" type="text" id="day2" size="3" value="<?php echo $result['day2']?>"/>
                日</td>
              <td colspan="3">家族史
                <input name="family" type="text" id="family" size="25" value="<?php echo $result['family']?>"/></td>
              <td colspan="2">备注
                <input name="beizhu" type="text" id="beizhu" size="20" value="<?php echo $result['beizhu']?>"/></td>
            </tr>
            <tr>
              <td colspan="2">身高
                <input name="high" type="text" id="high" size="10" value="<?php echo $result['high']?>"/>
                m</td>
              <td colspan="2">体重
                <input name="weigh" type="text" id="weigh" size="10" value="<?php echo $result['weigh']?>"/>
                kg </td>
              <td colspan="4">体重指数
                <input name="weighnum" type="text" id="weighnum" size="15" value="<?php echo $result['weighnum']?>"/>
                (体重/身高2)</td>
              <td colspan="2">血压
                <input name="blood" type="text" id="blood" size="10" value="<?php echo $result['blood']?>"/>
                mmHg</td>
            </tr>
            <tr>
              <td colspan="10">入院前治疗情况
                <textarea name="beforeill" cols="125" id="beforeill" ><?php echo $result['beforeill']?></textarea></td>
            </tr>
            <tr>
              <td colspan="2">术前：GHb=
                <input name="ghb" type="text" id="ghb" size="8" value="<?php echo $result['ghb']?>"/>
                %</td>
              <td colspan="2">TG=
                <input name="tg" type="text" id="tg" size="8" value="<?php echo $result['tg']?>"/>
                mmol/l</td>
              <td colspan="2">LDL=
                <input name="ldl" type="text" id="ldl" size="8" value="<?php echo $result['ldl']?>"/>
                mmol/l</td>
              <td colspan="2">HDL=
                <input name="hdl" type="text" id="hdl" size="8" value="<?php echo $result['hdl']?>"/>
                mmol/l</td>
              <td colspan="2">CHO=
                <input name="cho" type="text" id="cho" size="8" value="<?php echo $result['cho']?>"/>
                mmol/l</td>
            </tr>
            <tr>
              <td colspan="10">术前：慢性血管合并症（心、脑、周围血管、眼、肾、周围神经）</td>
            </tr>
            <tr>
              <td colspan="2">ISA-Ab:
                <input name="isa" type="text" id="isa" size="10" value="<?php echo $result['isa']?>"/></td>
              <td colspan="2">ICA:
                <input name="ica" type="text" id="ica" size="10" value="<?php echo $result['ica']?>"/></td>
              <td colspan="2">GAD-Ab:
                <input name="gad" type="text" id="gad" size="10" value="<?php echo $result['gad']?>"/></td>
              <td width="103">&nbsp;</td>
              <td width="103">&nbsp;</td>
              <td width="95">&nbsp;</td>
              <td width="96">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="10"><div align="center">术前口服葡萄糖C肽释放试验（早6点开始，9点结束）</div></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              <td width="113">空腹</td>
              <td width="109">30min</td>
              <td width="104">1h</td>
              <td width="110">2h</td>
              <td>3h</td>
              <td colspan="3">备注：</td>
            </tr>
            <tr>
              <td colspan="2">血糖（mmol/l）</td>
              <td><input name="x1" type="text" id="x1" size="10" value="<?php echo $result['x1']?>"/></td>
              <td><input name="x2" type="text" id="x2" size="10" value="<?php echo $result['x2']?>"/></td>
              <td><input name="x3" type="text" id="x3" size="10" value="<?php echo $result['x3']?>"/></td>
              <td><input name="x4" type="text" id="x4" size="10" value="<?php echo $result['x4']?>"/></td>
              <td><input name="x5" type="text" id="x5" size="10" value="<?php echo $result['x5']?>"/></td>
              <td colspan="3"><input name="x6" type="text" id="x6" size="20" value="<?php echo $result['x6']?>"/></td>
            </tr>
            <tr>
              <td colspan="2">胰岛素（uU/l）</td>
              <td><input name="y1" type="text" id="y1" size="10" value="<?php echo $result['y1']?>"/></td>
              <td><input name="y2" type="text" id="y2" size="10" value="<?php echo $result['y2']?>"/></td>
              <td><input name="y3" type="text" id="y3" size="10" value="<?php echo $result['y3']?>"/></td>
              <td><input name="y4" type="text" id="y4" size="10" value="<?php echo $result['y4']?>"/></td>
              <td><input name="y5" type="text" id="y5" size="10" value="<?php echo $result['y5']?>"/></td>
              <td colspan="3"><input name="y6" type="text" id="y6" size="20" value="<?php echo $result['y6']?>"/></td>
            </tr>
            <tr>
              <td colspan="2">C肽（ng/ml）</td>
              <td><input name="c1" type="text" id="c1" size="10" value="<?php echo $result['c1']?>"/></td>
              <td><input name="c2" type="text" id="c2" size="10" value="<?php echo $result['c2']?>"/></td>
              <td><input name="c3" type="text" id="c3" size="10" value="<?php echo $result['c3']?>"/></td>
              <td><input name="c4" type="text" id="c4" size="10" value="<?php echo $result['c4']?>"/></td>
              <td><input name="c5" type="text" id="c5" size="10" value="<?php echo $result['c5']?>"/></td>
              <td colspan="3"><input name="c6" type="text" id="c6" size="20" value="<?php echo $result['c6']?>"/></td>
            </tr>
            <tr>
              <td colspan="10">术前诊断：
                <input name="before" type="text" id="before" size="100" value="<?php echo $result['before']?>"/></td>
            </tr>
            <tr>
              <td colspan="5">手术日期：
                <input name="year3" type="text" id="year3" size="6" value="<?php echo $result['year3']?>"/>
                年
                <input name="month3" type="text" id="month3" size="2" value="<?php echo $result['month3']?>"/>
                月
                <input name="day3" type="text" id="day3" size="2" value="<?php echo $result['day3']?>"/>
                日</td>
              <td colspan="5">术式：</td>
            </tr>
            <tr>
              <td colspan="3">小肠长度：
                <input name="long" type="text" id="long" size="8" value="<?php echo $result['long']?>"/>
                cm</td>
              <td colspan="4">小肠切断部位：距十二指肠悬韧带约
                <input name="12long" type="text" id="12long" size="8" value="<?php echo $result['12long']?>"/>
                cm</td>
              <td colspan="3">桥袢长约：
                <input name="qlong" type="text" id="qlong" size="8" value="<?php echo $result['qlong']?>"/>
                cm</td>
            </tr>
            <tr>
              <td colspan="10">术后并发症：
                <input name="afterill" type="text" id="afterill" size="100" value="<?php echo $result['afterill']?>"/></td>
            </tr>
            <tr>
              <td colspan="10">出院时用药情况：
                <input name="out" type="text" id="out" size="100" value="<?php echo $result['out']?>"/></td>
            </tr>
            <tr>
              <td colspan="10">主要随访内容：
                <input name="ask" type="text" id="ask" size="100" value="<?php echo $result['ask']?>"/></td>
            </tr>
            <tr>
              <td colspan="10">备注：
                <input name="other" type="text" id="other" size="100" value="<?php echo $result['other']?>"/></td>
            </tr>
            <tr>
              <td width="99">术后随访</td>
              <td colspan="2">预约日期</td>
              <td>FBG(mmol/l)</td>
              <td>GHb(%)</td>
              <td>CP(ng/ml)</td>
              <td>Fins(uU/l)</td>
              <td>体重（kg）</td>
              <td>血脂</td>
              <td>并发症/备注</td>
            </tr>
            <tr>
              <td>术后1个月</td>
              <td colspan="2"><input name="m1" type="text" id="m1" size="1" value="<?php echo $result['m1']?>"/>
                月
                <input name="d1" type="text" id="d1" size="1" value="<?php echo $result['d1']?>"/>
                日</td>
              <td><input name="f1" type="text" id="f1" size="8" value="<?php echo $result['f1']?>"/></td>
              <td><input name="g1" type="text" id="g1" size="8" value="<?php echo $result['g1']?>"/></td>
              <td><input name="p1" type="text" id="p1" size="8" value="<?php echo $result['p1']?>"/></td>
              <td><input name="u1" type="text" id="u1" size="8" value="<?php echo $result['u1']?>"/></td>
              <td><input name="t1" type="text" id="t1" size="8" value="<?php echo $result['t1']?>"/></td>
              <td><input name="b1" type="text" id="b1" size="8" value="<?php echo $result['b1']?>"/></td>
              <td><input name="z1" type="text" id="z1" size="8" value="<?php echo $result['z1']?>"/></td>
            </tr>
            <tr>
              <td>术后3个月</td>
              <td colspan="2"><input name="m2" type="text" id="m2" size="1" value="<?php echo $result['m2']?>"/>
                月
                <input name="d2" type="text" id="d2" size="1" value="<?php echo $result['d2']?>"/>
                日</td>
              <td><input name="f2" type="text" id="f2" size="8" value="<?php echo $result['f2']?>"/></td>
              <td><input name="g2" type="text" id="g2" size="8" value="<?php echo $result['g2']?>"/></td>
              <td><input name="p2" type="text" id="p2" size="8" value="<?php echo $result['p2']?>"/></td>
              <td><input name="u2" type="text" id="u2" size="8" value="<?php echo $result['u2']?>"/></td>
              <td><input name="t2" type="text" id="t2" size="8" value="<?php echo $result['t2']?>"/></td>
              <td><input name="b2" type="text" id="b2" size="8" value="<?php echo $result['b2']?>"/></td>
              <td><input name="z2" type="text" id="z2" size="8" value="<?php echo $result['z2']?>"/></td>
            </tr>
            <tr>
              <td>术后6个月</td>
              <td colspan="2"><input name="m3" type="text" id="m3" size="1" value="<?php echo $result['m3']?>"/>
                月
                <input name="d3" type="text" id="d3" size="1" value="<?php echo $result['d3']?>"/>
                日</td>
              <td><input name="f3" type="text" id="f3" size="8" value="<?php echo $result['f3']?>"/></td>
              <td><input name="g3" type="text" id="g3" size="8" value="<?php echo $result['g3']?>"/></td>
              <td><input name="p3" type="text" id="p3" size="8" value="<?php echo $result['p3']?>"/></td>
              <td><input name="u3" type="text" id="u3" size="8" value="<?php echo $result['u3']?>"/></td>
              <td><input name="t3" type="text" id="t3" size="8" value="<?php echo $result['t3']?>"/></td>
              <td><input name="b3" type="text" id="b3" size="8" value="<?php echo $result['b3']?>"/></td>
              <td><input name="z3" type="text" id="z3" size="8" value="<?php echo $result['z3']?>"/></td>
            </tr>
            <tr>
              <td>术后9个月</td>
              <td colspan="2"><input name="m4" type="text" id="m4" size="1" value="<?php echo $result['m4']?>"/>
                月
                <input name="d4" type="text" id="d4" size="1" value="<?php echo $result['d4']?>"/>
                日</td>
              <td><input name="f4" type="text" id="f4" size="8" value="<?php echo $result['f4']?>"/></td>
              <td><input name="g4" type="text" id="g4" size="8" value="<?php echo $result['g4']?>"/></td>
              <td><input name="p4" type="text" id="p4" size="8" value="<?php echo $result['p4']?>"/></td>
              <td><input name="u4" type="text" id="u4" size="8" value="<?php echo $result['u4']?>"/></td>
              <td><input name="t4" type="text" id="t4" size="8" value="<?php echo $result['t4']?>"/></td>
              <td><input name="b4" type="text" id="b4" size="8" value="<?php echo $result['b4']?>"/></td>
              <td><input name="z4" type="text" id="z4" size="8" value="<?php echo $result['z4']?>"/></td>
            </tr>
            <tr>
              <td>术后1年</td>
              <td colspan="2"><input name="m5" type="text" id="m5" size="1" value="<?php echo $result['m5']?>"/>
                月
                <input name="d5" type="text" id="d5" size="1" value="<?php echo $result['d5']?>"/>
                日</td>
              <td><input name="f5" type="text" id="f5" size="8" value="<?php echo $result['f5']?>"/></td>
              <td><input name="g5" type="text" id="g5" size="8" value="<?php echo $result['g5']?>"/></td>
              <td><input name="p5" type="text" id="p5" size="8" value="<?php echo $result['p5']?>"/></td>
              <td><input name="u5" type="text" id="u5" size="8" value="<?php echo $result['u5']?>"/></td>
              <td><input name="t5" type="text" id="t5" size="8" value="<?php echo $result['t5']?>"/></td>
              <td><input name="b5" type="text" id="b5" size="8" value="<?php echo $result['b5']?>"/></td>
              <td><input name="z5" type="text" id="z5" size="8" value="<?php echo $result['z5']?>"/></td>
            </tr>
            <tr>
              <td>术后1年半</td>
              <td colspan="2"><input name="m6" type="text" id="m6" size="1" value="<?php echo $result['m6']?>"/>
                月
                <input name="d6" type="text" id="d6" size="1" value="<?php echo $result['d6']?>"/>
                日</td>
              <td><input name="f6" type="text" id="f6" size="8" value="<?php echo $result['f6']?>"/></td>
              <td><input name="g6" type="text" id="g6" size="8" value="<?php echo $result['g6']?>"/></td>
              <td><input name="p6" type="text" id="p6" size="8" value="<?php echo $result['p6']?>"/></td>
              <td><input name="u6" type="text" id="u6" size="8" value="<?php echo $result['u6']?>"/></td>
              <td><input name="t6" type="text" id="t6" size="8" value="<?php echo $result['t6']?>"/></td>
              <td><input name="b6" type="text" id="b6" size="8" value="<?php echo $result['b6']?>"/></td>
              <td><input name="z6" type="text" id="z6" size="8" value="<?php echo $result['z6']?>"/></td>
            </tr>
            <tr>
              <td>术后2年</td>
              <td colspan="2"><input name="m7" type="text" id="m7" size="1" value="<?php echo $result['m7']?>"/>
                月
                <input name="d7" type="text" id="d7" size="1" value="<?php echo $result['d7']?>"/>
                日</td>
              <td><input name="f7" type="text" id="f7" size="8" value="<?php echo $result['f7']?>"/></td>
              <td><input name="g7" type="text" id="g7" size="8" value="<?php echo $result['g7']?>"/></td>
              <td><input name="p7" type="text" id="p7" size="8" value="<?php echo $result['p7']?>"/></td>
              <td><input name="u7" type="text" id="u7" size="8" value="<?php echo $result['u7']?>"/></td>
              <td><input name="t7" type="text" id="t7" size="8" value="<?php echo $result['t7']?>"/></td>
              <td><input name="b7" type="text" id="b7" size="8" value="<?php echo $result['b7']?>"/></td>
              <td><input name="z7" type="text" id="z7" size="8" value="<?php echo $result['z7']?>"/></td>
            </tr>
            <tr>
              <td>术后3年</td>
              <td colspan="2"><input name="m8" type="text" id="m8" size="1" value="<?php echo $result['m8']?>"/>
                月
                <input name="d8" type="text" id="d8" size="1" value="<?php echo $result['d8']?>"/>
                日</td>
              <td><input name="f8" type="text" id="f8" size="8" value="<?php echo $result['f8']?>"/></td>
              <td><input name="g8" type="text" id="g8" size="8" value="<?php echo $result['g8']?>"/></td>
              <td><input name="p8" type="text" id="p8" size="8" value="<?php echo $result['p8']?>"/></td>
              <td><input name="u8" type="text" id="u8" size="8" value="<?php echo $result['u8']?>"/></td>
              <td><input name="t8" type="text" id="t8" size="8" value="<?php echo $result['t8']?>"/></td>
              <td><input name="b8" type="text" id="b8" size="8" value="<?php echo $result['b8']?>"/></td>
              <td><input name="z8" type="text" id="z8" size="8" value="<?php echo $result['z8']?>"/></td>
            </tr>
            <tr>
              <td>术后4年</td>
              <td colspan="2"><input name="m9" type="text" id="m9" size="1" value="<?php echo $result['m9']?>"/>
                月
                <input name="d9" type="text" id="d9" size="1" value="<?php echo $result['d9']?>"/>
                日</td>
              <td><input name="f9" type="text" id="f9" size="8" value="<?php echo $result['f9']?>"/></td>
              <td><input name="g9" type="text" id="g9" size="8" value="<?php echo $result['g9']?>"/></td>
              <td><input name="p9" type="text" id="p9" size="8" value="<?php echo $result['p9']?>"/></td>
              <td><input name="u9" type="text" id="u9" size="8" value="<?php echo $result['u9']?>"/></td>
              <td><input name="t9" type="text" id="t9" size="8" value="<?php echo $result['t9']?>"/></td>
              <td><input name="b9" type="text" id="b9" size="8" value="<?php echo $result['b9']?>"/></td>
              <td><input name="z9" type="text" id="z9" size="8" value="<?php echo $result['z9']?>"/></td>
            </tr>
            <tr>
              <td>术后5年</td>
              <td colspan="2"><input name="m10" type="text" id="m10" size="1" value="<?php echo $result['m10']?>"/>
                月
                <input name="d10" type="text" id="d10" size="2" value="<?php echo $result['d10']?>"/>
                日</td>
              <td><input name="f10" type="text" id="f10" size="8" value="<?php echo $result['f10']?>"/></td>
              <td><input name="g10" type="text" id="g10" size="8" value="<?php echo $result['g10']?>"/></td>
              <td><input name="p10" type="text" id="p10" size="8" value="<?php echo $result['p10']?>"/></td>
              <td><input name="f10" type="text" id="f10" size="8" value="<?php echo $result['f10']?>"/></td>
              <td><input name="t10" type="text" id="t10" size="8" value="<?php echo $result['t10']?>"/></td>
              <td><input name="b10" type="text" id="b10" size="8" value="<?php echo $result['b10']?>"/></td>
              <td><input name="z10" type="text" id="z10" size="8" value="<?php echo $result['z10']?>"/></td>
            </tr>
            <tr>
              <td colspan="10"><p>备注：
                <input name="other2" type="text" id="other2" size="100" value="<?php echo $result['other2']?>"/>
                </p>
                  <p>
                    <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" /></p></td>
            </tr>
          </table>
</form>
</body>
</html>
