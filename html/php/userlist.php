<?php
	include_once 'conn.php';
	$sql="select * from user";
	$result=mysql_query($sql);
	echo "<table width=800 height=70 border=1 cellspacing=1> "; 
	echo "<th width=150 scope=col>用户名</th> ";
	echo "<th width=100 scope=col>姓名</th> ";
	echo "<th width=100 scope=col>电话</th>";
	echo "<th width=100 scope=col>操作</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);

	echo "当前有".$datanum."个人录入资料<br>";
	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td>".$info['username']."</td>";
		echo "<td>".$info['realname']."</td>";
		echo "<td>".$info['phone']."</td>";
		echo "<td><a href='del.php?id=".$info['id']."'>删除</a></td>";
	}
	echo "</table>";
	mysql_close($conn);
?>