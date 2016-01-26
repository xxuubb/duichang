<script language="javascript">
     function customer_change(customer){
     }
</script>

<?php
//验证登陆信息
session_start();
include_once 'conn.php';

$sql="select * from business";
$result=mysql_query($sql);
$datanum=mysql_num_rows($result);	

echo "<form id='jinchangaddform' name='jinchangaddform' method='post' action='addjinchang.php'>";
echo "<table width=700 height=70 border=0 cellspacing=1> ";
echo "<tr height=50><td width=100 align=right><p><span>业务单号</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='bu_num' name='bu_num'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['bu_num'].">".$info['bu_num']."</option>";
}
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

date_default_timezone_set('prc');
$current_time=date("Y-m-d H:i:s");
echo "<tr height=50><td width=100 align=right><p><span>进场时间</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_jc_time' name='bu_jc_time' type='text' value='$current_time'/></td>";
echo "<td width=100 align=left></td></tr>";

$sql="select * from customer";
$result=mysql_query($sql);
$datanum=mysql_num_rows($result);
echo "<tr height=50><td width=100 align=right><p><span>进场客户</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='bu_jc_customer' name='bu_jc_customer' onChange='javascript:customer_change(this.options[this.options.selectedIndex].value);'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['customer_name'].">".$info['customer_name']."</option>";
}
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>进场地址</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_jc_add' name='bu_jc_add' type='text' value=''/></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>进场状态</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='bu_jc_status' name='bu_jc_status' style='WIDTH: 150px'>";
echo "<option value='未进场'>未进场</option>";
echo "<option value='正在进场'>正在进场</option>";
echo "<option value='已进场'>已进场</option>";
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>业务类型</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='bu_jc_type' name='bu_jc_type' style='WIDTH: 150px'>";
echo "<option value='售出'>售出</option>";
echo "<option value='租赁'>租赁</option>";
echo "<option value='改制'>改制</option>";
echo "<option value='翻新'>翻新</option>";
echo "<option value='定制'>定制</option>";
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>进场固定成本</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_jc_fixcost' name='bu_jc_fixcost' type='text' value=''/>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>进场费率</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_jc_costrate' name='bu_jc_costrate' type='text' value=''/>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=100><td width=100 align=right></td>";
echo "<td width=100 align=center><input type='submit' value='确定'/></td>";
echo "<td width=100 align=left></td></tr>";   
echo "</form>";   
mysql_close($conn);

?>