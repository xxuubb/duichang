<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from mzy_product_in";
	$result=mysql_query($sql);
	echo "<table width=340 border=1 cellspacing=1> "; 
	echo "<th width=80 scope=col align=center>入库时间</th> ";
	echo "<th width=80 scope=col align=center>产品</th> ";
	echo "<th width=50 scope=col align=center>数量</th> ";
	echo "<th width=50 scope=col align=center>人员</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);
	$total_price=0;
	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td align=center>".$info['product_in_time']."</td>";
		echo "<td align=center>".$info['product_in_name']."</td>";
		echo "<td align=center>".$info['product_in_num']."</td>";
		echo "<td align=center>".$info['product_in_user']."</td></tr>";
	}
	echo "</table>";
	mysql_close($conn);
?>