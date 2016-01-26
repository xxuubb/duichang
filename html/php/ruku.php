<script language="javascript">
     function customer_change(customer){
     }
</script>

<?php
//验证登陆信息
session_start();
include_once 'conn.php';

$sql="select * from box";
$result=mysql_query($sql);
$datanum=mysql_num_rows($result);	

echo "<form id='rukuaddform' name='rukuaddform' method='post' action='addruku.php'>";
echo "<table width=700 height=70 border=0 cellspacing=1> ";
echo "<tr height=50><td width=100 align=right><p><span>箱号</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='bu_box_num' name='bu_box_num'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['box_num'].">".$info['box_num']."</option>";
}
echo "</select></td>";
echo "<td width=100 align=left>箱号从货柜列表中获得</td></tr>";

date_default_timezone_set('prc');
$current_time=date("Y-m-d H:i:s");
echo "<tr height=50><td width=100 align=right><p><span>入库时间</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_ruku_time' name='bu_ruku_time' type='text' value='$current_time'/></td>";
echo "<td width=100 align=left></td></tr>";

$sql="select * from customer";
$result=mysql_query($sql);
$datanum=mysql_num_rows($result);
echo "<tr height=50><td width=100 align=right><p><span>入库客户</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='bu_ruku_customer' name='bu_ruku_customer' onChange='javascript:customer_change(this.options[this.options.selectedIndex].value);'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['customer_name'].">".$info['customer_name']."</option>";
}
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>入库地址</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_ruku_add' name='bu_ruku_add' type='text' value=''/></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>入库状态</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='bu_ruku_status' name='bu_ruku_status' style='WIDTH: 150px'>";
echo "<option value='未入库'>未入库</option>";
echo "<option value='正在入库'>正在入库</option>";
echo "<option value='已入库'>已入库</option>";
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>业务类型</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='bu_ruku_type' name='bu_ruku_type' style='WIDTH: 150px'>";
echo "<option value='售出'>售出</option>";
echo "<option value='租赁'>租赁</option>";
echo "<option value='改制'>改制</option>";
echo "<option value='翻新'>翻新</option>";
echo "<option value='定制'>定制</option>";
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>入库成本</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='bu_ruku_cost' name='bu_ruku_cost' type='text' value=''/>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=100><td width=100 align=right></td>";
echo "<td width=100 align=center><input type='submit' value='确定'/></td>";
echo "<td width=100 align=left></td></tr>";   
echo "</form>";   
mysql_close($conn);

?>