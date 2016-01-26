<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from customer";
	$result=mysql_query($sql);
	echo "<table width=700 height=70 border=1 cellspacing=1> "; 
	echo "<th width=50 scope=col align=center>姓名</th> ";
	echo "<th width=100 scope=col align=center>电话</th> ";
	echo "<th width=100 scope=col align=center>E-Mail</th>";
	echo "<th width=100 scope=col align=center>公司名称</th>";
	echo "<th width=100 scope=col align=center>公司地址</th>";
	echo "<th width=100 scope=col align=center>其它</th>";
	echo "<th width=100 scope=col align=center>客户类型</th>";
	echo "<th width=100 scope=col align=center>操作</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);

	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td align=center>".$info['customer_name']."</td>";
		echo "<td align=center>".$info['customer_phone']."</td>";
		echo "<td align=center>".$info['customer_email']."</td>";
		echo "<td align=center>".$info['customer_company']."</td>";
		echo "<td align=center>".$info['customer_address']."</td>";
		echo "<td align=center>".$info['customer_other']."</td>";
		echo "<td align=center>".$info['customer_type']."</td>";
		echo "<td align=center><a href=''>编辑</a></td>";
	}
	echo "</table>";
	mysql_close($conn);
?>