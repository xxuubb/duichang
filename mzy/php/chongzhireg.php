
<?php
//验证登陆信息
session_start();
include_once 'conn.php';
header("Content-Type:text/html;   charset=utf-8"); 

echo "<form id='jinchangaddform' name='jinchangaddform' method='post' action='addchongzhireg.php'>";
echo "<table width=260 height=70 border=0 cellspacing=1> ";
echo "<tr height=40><td width=100 align=right><p><span>用户姓名</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_name' name='customer_name' type='text' value=''/></td>";
echo "</tr>";

echo "<tr height=40><td width=100 align=right><p><span>用户电话</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_phone' name='customer_phone' type='text' value=''/></td>";
echo "</tr>";

date_default_timezone_set('prc');
$current_time=date("Y-m-d H:i:s");
echo "<tr height=40><td width=100 align=right><p><span>登记时间</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_reg_time' name='customer_reg_time' type='text' value='$current_time'/></td>";
echo "</tr>";

echo "<tr height=40><td width=100 align=right><p><span>充值金额</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_chongzhi_total' name='customer_chongzhi_total' type='text' value=''/></td>";
echo "</tr>";

echo "<tr height=40><td width=100 align=right><p><span>用户微信</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_weixin' name='customer_weixin' type='text' value=''/></td>";
echo "</tr>";

echo "<tr height=40><td width=100 align=right><p><span>用户QQ</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_qq' name='customer_qq' type='text' value=''/>";
echo "</tr>";

echo "<tr height=40><td width=100 align=right><p><span>用户地址</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_address' name='customer_address' type='text' value=''/>";
echo "</tr>";

echo "<tr height=40><td width=100 align=right><p><span>备注</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_other' name='customer_other' type='text' value=''/>";
echo "</tr>";

echo "<tr height=60><td width=100 align=right></td>";
echo "<td width=80 align=left><input type='submit' value='确定'/></td>";
echo "</tr>";   
echo "</form>";   
mysql_close($conn);

?>