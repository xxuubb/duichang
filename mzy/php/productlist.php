<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from mzy_product";
	$result=mysql_query($sql);
	echo "<table width=280 border=1 cellspacing=1> "; 
	echo "<th width=50 scope=col align=center>产品名称</th> ";
	echo "<th width=50 scope=col align=center>产品数量</th> ";
	echo "<th width=50 scope=col align=center>价格</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);
	$total_price=0;
	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		$current_price= $info['product_num'] * $info['product_price'];
		$total_price= $current_price  + $total_price;
		echo "<tr><td align=center>".$info['product_name']."</td>";
		echo "<td align=center>".$info['product_num']."</td>";
		echo "<td align=center>".$info['product_price']."</td></tr>";
	}
	echo "</table>";
	echo "<p align=right>总计还有成本: ".$total_price." 元</p>";
	mysql_close($conn);
?>