
<?php
//验证登陆信息
session_start();
include_once 'conn.php';
	
	$customer_phone=$_SESSION["customer_phone"];
	$sql="select * from mzy_customer";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['customer_phone']==$customer_phone){
			$customer_name=$row['customer_name'];
			$customer_reg_time=$row['customer_reg_time'];
			$customer_chongzhi_total=$row['customer_chongzhi_total'];
			$customer_chongzhi_used=$row['customer_chongzhi_used'];
			$customer_hanzheng_total_times=$row['customer_hanzheng_total_times'];
			$customer_hanzheng_used_times=$row['customer_hanzheng_used_times'];
			$customer_vip_type=$row['customer_vip_type'];
			$customer_score=$row['customer_score'];
		}
		break;
	};
	
echo "<table width=290 height=70 border=0 cellspacing=1> ";
echo "<tr height=30><td width=100 align=left><p><span>客户名称</span><span>：          </span></p></td>";
echo "<td width=100 align=left><p><span>$customer_name</span></p></td>";
echo "</tr>";

echo "<tr height=50><td width=100 align=left><p><span>客户等级</span><span>：          </span></p></td>";
echo "<td width=100 align=left><p><span>VIP$customer_vip_type</span></p></td>";
echo "</tr>";

echo "<tr height=50><td width=100 align=left><p><span>客户注册时间</span><span>：          </span></p></td>";
echo "<td width=100 align=left><p><span>$customer_reg_time</span></p></td>";
echo "</tr>";

echo "<tr height=50><td width=100 align=left><p><span>汗蒸卡状态（已用/总数）</span><span>：          </span></p></td>";
echo "<td width=100 align=left><p><span>$customer_hanzheng_used_times/$customer_hanzheng_total_times</span></p></td>";
echo "</tr>";

echo "<tr height=50><td width=100 align=left><p><span>充值卡状态（已用/总数）</span><span>：          </span></p></td>";
echo "<td width=100 align=left><p><span>$customer_chongzhi_used/$customer_chongzhi_total</span></p></td>";
echo "</tr>";

echo "<tr height=30><td width=100 align=left><p><span>客户积分</span><span>：          </span></p></td>";
echo "<td width=100 align=left><p><span>$customer_score</span></p></td>";
echo "</tr>";
 
  
mysql_close($conn);

?>