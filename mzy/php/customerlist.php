<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from mzy_customer";
	$result=mysql_query($sql);
	echo "<table width=340 border=1 cellspacing=1> "; 
	echo "<th width=50 scope=col align=center>姓名</th> ";
	echo "<th width=50 scope=col align=center>用户电话</th> ";
	echo "<th width=50 scope=col align=center>开户时间</th> ";
	echo "<th width=50 scope=col align=center>汗蒸卡</th>";
	echo "<th width=50 scope=col align=center>充值卡</th>";
	echo "<th width=50 scope=col align=center>积分</th>";
	echo "<th width=50 scope=col align=center>登记</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);
	

	$total_income=0;
	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td align=center>".$info['customer_name']."</td>";
		echo "<td align=center>".$info['customer_phone']."</td>";
		echo "<td align=center>".$info['customer_reg_time']."</td>";
		echo "<td align=center>".$info['customer_hanzheng_used_times']."/".$info['customer_hanzheng_total_times']."</td>";
		echo "<td align=center>".$info['customer_chongzhi_used']."/".$info['customer_chongzhi_total']."</td>";
		echo "<td align=center>".$info['customer_score']."</td>";
		echo "<td align=center>".$info['customer_user']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_close($conn);
?>