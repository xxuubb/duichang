<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from user";
	$result=mysql_query($sql);
	echo "<table width=700 height=70 border=1 cellspacing=1> "; 
	echo "<th width=50 scope=col align=center>用户名</th> ";
	echo "<th width=100 scope=col align=center>姓名</th> ";
	echo "<th width=100 scope=col align=center>电话</th>";
	echo "<th width=100 scope=col align=center>权限</th>";
	echo "<th width=100 scope=col align=center>操作</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);

	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td align=center>".$info['username']."</td>";
		echo "<td align=center>".$info['realname']."</td>";
		echo "<td align=center>".$info['phone']."</td>";
		echo "<td align=center>".$info['dc_right']."</td>";
		echo "<td align=center><a href=''>编辑</a></td>";
	}
	echo "</table>";
	mysql_close($conn);
?>