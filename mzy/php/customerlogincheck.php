<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$customer_phone=$_POST['customer_phone'];
	$_SESSION["customer_phone"]=$customer_phone;
	$sql="select * from mzy_customer";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['customer_phone']==$customer_phone){
			echo "<script language='javascript'>alert('登录成功！');location='../登录成功.html';</script>";
			break;
		}
	};
	if($row==false){
		echo "<script language='javascript'>alert('用户名不存在！');location='../登录失败.html';</script>";
	}
	mysql_close($conn);
//}
?>