<?php
	include_once 'conn.php';
	$sql="select * from user";
	$result=mysql_query($sql);
	echo "document.write("<table width=800 height=70 border=1 cellspacing=1>")"; 
	echo "document.write("<th width=150 scope=col>�û���</th>")";
	echo "document.write("<th width=100 scope=col>����</th>")";
	echo "document.write("<th width=100 scope=col>�绰</th>")";
	echo "document.write("<th width=100 scope=col>����</th>")";
	echo "document.write("</tr>")";	
	$datanum=mysql_num_rows($result);

	echo "��ǰ��".$datanum."����¼������<br>";
	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "document.write("<tr><td>".$info['username']."</td>")";
		echo "document.write("<td>".$info['realname']."</td>")";
		echo "document.write("<td>".$info['phone']."</td>")";
		echo "document.write("<td><a href='del.php?id=".$info['id']."'>ɾ��</a></td>")";
	}
	echo "document.write("</table>";
	mysql_close($conn);
?>