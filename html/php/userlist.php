<?php
	include_once 'conn.php';
	$sql="select * from user";
	$result=mysql_query($sql);
	echo "<table width=800 height=70 border=1 cellspacing=1> "; 
	echo "<th width=150 scope=col>�û���</th> ";
	echo "<th width=100 scope=col>����</th> ";
	echo "<th width=100 scope=col>�绰</th>";
	echo "<th width=100 scope=col>����</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);

	echo "��ǰ��".$datanum."����¼������<br>";
	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td>".$info['username']."</td>";
		echo "<td>".$info['realname']."</td>";
		echo "<td>".$info['phone']."</td>";
		echo "<td><a href='del.php?id=".$info['id']."'>ɾ��</a></td>";
	}
	echo "</table>";
	mysql_close($conn);
?>