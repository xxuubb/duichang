
<?php
//验证登陆信息
session_start();
include_once 'conn.php';

$sql="select * from mzy_product_type";
$result=mysql_query($sql);
$datanum=mysql_num_rows($result);	

echo "<form id='jinchangaddform' name='jinchangaddform' method='post' action='addchuku.php'>";
echo "<table width=290 height=70 border=0 cellspacing=1> ";
echo "<tr height=50><td width=100 align=right><p><span>产品名称</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='product_out_name' name='product_out_name'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['product_name'].">".$info['product_name']."</option>";
}
echo "</select></td>";
echo "</tr>";

date_default_timezone_set('prc');
$current_time=date("Y-m-d H:i:s");
echo "<tr height=50><td width=100 align=right><p><span>出库时间</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='product_out_time' name='product_out_time' type='text' value='$current_time'/></td>";
echo "</tr>";

echo "<tr height=50><td width=100 align=right><p><span>出库数量</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='product_out_num' name='product_out_num' type='text' value=''/></td>";
echo "</tr>";

echo "<tr height=50><td width=100 align=right><p><span>出库价格</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='product_out_price' name='product_out_price' type='text' value=''/>";
echo "</tr>";

echo "<tr height=50><td width=100 align=right><p><span>备注</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='product_out_other' name='product_out_other' type='text' value=''/>";
echo "</tr>";

echo "<tr height=100><td width=100 align=right></td>";
echo "<td width=100 align=left><input type='submit' value='确定'/></td>";
echo "</tr>";   
echo "</form>";   
mysql_close($conn);

?>