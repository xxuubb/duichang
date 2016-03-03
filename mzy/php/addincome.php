<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	date_default_timezone_set('prc');
	$income_user=isset($_SESSION["username"]) ?  $_SESSION["username"]: NULL;
	$income_time=date("Y-m-d H:i:s");
	$income_type=$_POST['income_type'];
	$income_money=$_POST['income_money'];
	$income_other=$_POST['income_other'];
	//$sql="INSERT INTO user (username, realname, phone) VALUES ('$_POST[username]','$_POST[realname]','$_POST[phone]')";

	$sql="insert into mzy_income (income_time,income_type,income_money,income_user, income_other) values('$income_time','$income_type','$income_money','$income_user','$income_other')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('插入失败！');location='../收入登记.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../收入列表.html';</script>";
	}
	mysql_close($conn);
//}
?>