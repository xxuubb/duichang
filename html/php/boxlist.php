<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from box";
	$result=mysql_query($sql);
	echo "<table width=700 height=70 border=1 cellspacing=1> "; 
	echo "<th width=100 scope=col align=center>箱号</th> ";
	echo "<th width=100 scope=col align=center>箱型</th> ";
	echo "<th width=100 scope=col align=center>箱重</th>";
	echo "<th width=100 scope=col align=center>其它</th>";
	echo "<th width=100 scope=col align=center>操作</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);

	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td align=center>".$info['box_num']."</td>";
		echo "<td align=center>".$info['box_size']."</td>";
		echo "<td align=center>".$info['box_weight']."</td>";
		echo "<td align=center>".$info['box_other']."</td>";
		echo "<td align=center><a href=''>编辑</a></td>";
	}
	echo "</table>";
	mysql_close($conn);
?>