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

echo "<form id='chukuaddform' name='chukuaddform' method='post' action='addchuku.php'>";
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
echo "<tr height=50><td width=100 align=right><p><span>出库时间</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_ck_time' name='bu_ck_time' type='text' value='$current_time'/></td>";
echo "<td width=100 align=left></td></tr>";

$sql="select * from customer";
$result=mysql_query($sql);
$datanum=mysql_num_rows($result);
echo "<tr height=50><td width=100 align=right><p><span>出库客户</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='bu_ck_customer' name='bu_ck_customer' onChange='javascript:customer_change(this.options[this.options.selectedIndex].value);'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['customer_name'].">".$info['customer_name']."</option>";
}
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>出库地址</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_ck_add' name='bu_ck_add' type='text' value=''/></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>出库状态</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='bu_ck_status' name='bu_ck_status' style='WIDTH: 150px'>";
echo "<option value='未出库'>未出库</option>";
echo "<option value='正出库'>正出库</option>";
echo "<option value='已出库'>已出库</option>";
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>业务类型</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='bu_ck_type' name='bu_ck_type' style='WIDTH: 150px'>";
echo "<option value='售出'>售出</option>";
echo "<option value='租赁'>租赁</option>";
echo "<option value='改制'>改制</option>";
echo "<option value='翻新'>翻新</option>";
echo "<option value='定制'>定制</option>";
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>出库费用</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_ck_cost' name='bu_ck_cost' type='text' value=''/>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=100><td width=100 align=right></td>";
echo "<td width=100 align=center><input type='submit' value='确定'/></td>";
echo "<td width=100 align=left></td></tr>";   
echo "</form>";   
mysql_close($conn);

?>