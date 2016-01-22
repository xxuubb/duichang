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
echo "<table width=700 height=70 border=0 cellspacing=1> ";
echo "<tr height=50><td width=100 align=right><p><span>箱号</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='box_num' name='box_num'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['box_num'].">".$info['box_num']."</option>";
}
echo "</select></td>";
echo "<td width=100 align=left>箱号从货柜列表中获得</td></tr>";

date_default_timezone_set('prc');
$current_time=date("y-m-d h:i:s");
echo "<tr height=50><td width=100 align=right><p><span>入库时间</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='ruku_time' name='ruku_time' type='text' value='$current_time'/></td>";
echo "<td width=100 align=left></td></tr>";

$sql="select * from customer";
$result=mysql_query($sql);
$datanum=mysql_num_rows($result);
echo "<tr height=50><td width=100 align=right><p><span>入库客户</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select style='WIDTH: 150px' id='ruku_customer' name='ruku_customer' onChange='javascript:customer_change(this.options[this.options.selectedIndex].value);'>";
for($i=1;$i<=$datanum;$i++)
{
	$info=mysql_fetch_array($result,MYSQL_ASSOC );
	echo "<option value=".$info['customer_name'].">".$info['customer_name']."</option>";
}
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>入库地址</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='ruku_address' name='ruku_address' type='text' value=''/></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>入库状态</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='ruku_status' name='ruku_status' style='WIDTH: 150px'></select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>业务类型</span><span>：          </span></p></td>";
echo "<td width=100 align=center><select id='ruku_type' name='ruku_type' style='WIDTH: 150px'>";
echo "<option value='售出'>售出</option>";
echo "<option value='租赁'>租赁</option>";
echo "<option value='改制'>改制</option>";
echo "<option value='翻新'>翻新</option>";
echo "<option value='定制'>定制</option>";
echo "</select></td>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=50><td width=100 align=right><p><span>入库成本</span><span>：          </span></p></td>";
echo "<td width=100 align=center><input id='ruku_cost' name='ruku_cost' type='text' value=''/>";
echo "<td width=100 align=left></td></tr>";

echo "<tr height=100><td width=100 align=right></td>";
echo "<td width=100 align=center><input type='submit' value='确定'/></td>";
echo "<td width=100 align=left></td></tr>";      
mysql_close($conn);

$bu_num="SHTJ"+date("ymdhis");
if($_POST['submit']){
	$bu_num="SHTJ"+date("ymdhis");
	$bu_box_num=$_POST['bu_box_num'];
	$bu_ruku_time=$_POST['bu_ruku_time'];
	$bu_ruku_customer=$_POST['bu_ruku_customer'];
	$bu_ruku_add=$_POST['bu_ruku_add'];
	$bu_ruku_status=$_POST['bu_ruku_status'];
	$bu_ruku_type=$_POST['bu_ruku_type'];
	$bu_ruku_cost=$_POST['bu_ruku_cost'];

	$sql="insert into business (bu_num,bu_box_num,bu_ruku_time,bu_ruku_customer,bu_ruku_add,bu_ruku_status,bu_ruku_type,bu_ruku_cost) values('$bu_num','$bu_box_num','$bu_ruku_time','$bu_ruku_customer','$bu_ruku_add','$bu_ruku_status','$bu_ruku_type','$bu_ruku_cost')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('插入失败！');location='../入库操作.html';</script>";		
	} else {
		echo "<script language='javascript'>alert('插入成功！');location='../入库操作.html';</script>";
	}
	mysql_close($conn);
}
?>