﻿<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from mzy_income";
	$result=mysql_query($sql);
	echo "<table width=310 border=1 cellspacing=1> "; 
	echo "<th width=50 scope=col align=center>时间</th> ";
	echo "<th width=50 scope=col align=center>收入类型</th> ";
	echo "<th width=50 scope=col align=center>金额</th>";
	echo "<th width=50 scope=col align=center>操作者</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);
	
	date_default_timezone_set('prc');
	$current_month=date("m");
	$total_income=0;
	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		$database_month=date("m", strtotime($info['income_time']));
		if($current_month == $database_month){
			$total_income=$total_income+$info['income_money'];
			echo "<tr><td align=center>".$info['income_time']."</td>";
			echo "<td align=center>".$info['income_type']."</td>";
			echo "<td align=center>".$info['income_money']."</td>";
			echo "<td align=center>".$info['income_user']."</td>";
		}
	}
	echo "</table>";
	echo "<p align=right> 本月收入总计：".$total_income." 元</p>";
	mysql_close($conn);
?>