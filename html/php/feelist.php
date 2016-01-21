<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from fee";
	$result=mysql_query($sql);
	echo "<table width=700 height=70 border=1 cellspacing=1> "; 
	echo "<th width=50 scope=col align=center>费用代码</th> ";
	echo "<th width=100 scope=col align=center>费用名称</th> ";
	echo "<th width=100 scope=col align=center>费用说明</th>";
	echo "<th width=100 scope=col align=center>操作</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);

	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td align=center>".$info['fee_num']."</td>";
		echo "<td align=center>".$info['fee_name']."</td>";
		echo "<td align=center>".$info['fee_ex']."</td>";
		echo "<td align=center><a href='../添加客户.html'>编辑</a></td>";
	}
	echo "</table>";
	mysql_close($conn);
?>