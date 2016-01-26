<?php
	include_once 'conn.php';
	header("Content-Type:text/html;   charset=utf-8"); 
	$sql="select * from business";
	$result=mysql_query($sql);
	echo "<table width=1580 height=70 border=1 cellspacing=1> "; 
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>业务单号</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>箱号</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>箱型</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>箱重</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>操作</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>入库时间</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>入库客户</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>入库地址</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>入库成本</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>进场时间</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>进场客户</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>进场地址</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>进场成本</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>进场费率</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出场时间</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出场客户</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出场地址</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出场费用</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出场费率</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出库时间</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出库客户</th>";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出库地址</th> ";
	echo "<th style=‘width:80px;overflow: hidden;’ scope=col align=center>出库费用</th>";
	echo "</tr>";	
	$datanum=mysql_num_rows($result);

	for($i=1;$i<=$datanum;$i++)
	{
		$info=mysql_fetch_array($result,MYSQL_ASSOC );
		echo "<tr><td align=center>".$info['bu_num']."</td>";
		echo "<td align=center>".$info['bu_box_num']."</td>";
		echo "<td align=center></td>";
		echo "<td align=center></td>";
		echo "<td align=center><a href=''>入库编辑</a><a href=''>进场编辑</a><a href=''>出场编辑</a><a href=''>出库编辑</a></td>";
		echo "<td align=center>".$info['bu_ruku_time']."</td>";
		echo "<td align=center>".$info['bu_ruku_customer']."</td>";
		echo "<td align=center>".$info['bu_ruku_add']."</td>";
		echo "<td align=center>".$info['bu_ruku_cost']."</td>";
		echo "<td align=center>".$info['bu_jc_time']."</td>";
		echo "<td align=center>".$info['bu_jc_customer']."</td>";
		echo "<td align=center>".$info['bu_jc_add']."</td>";
		echo "<td align=center>".$info['bu_jc_fixcost']."</td>";
		echo "<td align=center>".$info['bu_jc_costrate']."</td>";
		echo "<td align=center>".$info['bu_cc_time']."</td>";
		echo "<td align=center>".$info['bu_cc_customer']."</td>";
		echo "<td align=center>".$info['bu_cc_add']."</td>";
		echo "<td align=center>".$info['bu_cc_fixcost']."</td>";
		echo "<td align=center>".$info['bu_cc_costrate']."</td>";
		echo "<td align=center>".$info['bu_ck_time']."</td>";
		echo "<td align=center>".$info['bu_ck_customer']."</td>";
		echo "<td align=center>".$info['bu_ck_add']."</td>";
		echo "<td align=center>".$info['bu_ck_cost']."</td>";
		echo "</tr>";	
	}
	echo "</table>";
	mysql_close($conn);
?>