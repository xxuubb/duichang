<?php
	session_start();
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$customer_phone=$_SESSION["customer_phone"];
	echo "<table width=320 border=1 cellspacing=1> "; 
	echo "<th width=50 scope=col align=center>时间</th> ";
	echo "<th width=50 scope=col align=center>汗蒸卡使用</th> ";
	echo "<th width=50 scope=col align=center>充值卡使用</th> ";
	
	$sql="select * from mzy_customer_recorder";
	$query=mysql_query($sql);
	
	while($row=mysql_fetch_array($query)){
		if ($row['customer_phone']==$customer_phone){
			echo "<tr><td align=center>".$row['customer_use_time']."</td>";
			echo "<td align=center>".$row['customer_hanzheng_used_times']."次</td>";
			echo "<td align=center>".$row['customer_chongzhi_used']."元</td>";
			echo "</tr>";
		}
	};
	echo "</table>";
	mysql_close($conn);
?>