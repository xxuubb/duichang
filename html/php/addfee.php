<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$fee_num=$_POST['fee_num'];
	$fee_name=$_POST['fee_name'];
	$fee_ex=$_POST['fee_ex'];
	//$sql="INSERT INTO user (username, realname, phone) VALUES ('$_POST[username]','$_POST[realname]','$_POST[phone]')";

	$sql="insert into fee (fee_num,fee_name,fee_ex) values('$fee_num','$fee_name','$fee_ex')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('请检查是否有同名项目，插入失败！');location='../费用项目.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../费用列表.html';</script>";
	}
	mysql_close($conn);
//}
?>