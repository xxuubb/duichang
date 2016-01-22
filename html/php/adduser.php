<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$username=$_POST['username'];
	$userpass=$_POST['userpass'];
	$userpass=md5($userpass);
	$realname=$_POST['realname'];
	$phone=$_POST['phone'];
	$dc_right=$_POST['dc_right'];
	
	$sql="insert into user (username,userpass,realname,phone,dc_right) values ('$username','$userpass','$realname','$phone','$dc_right')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('重复插入失败！');location='../添加用户.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../用户列表.html';</script>";
	}
	mysql_close($conn);
//}
?>