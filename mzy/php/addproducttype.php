<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){

	$product_name=$_POST['product_name'];
	$product_type=$_POST['product_type'];
	$product_price=$_POST['product_price'];
	$product_other=$_POST['product_other'];
	//$sql="INSERT INTO user (username, realname, phone) VALUES ('$_POST[username]','$_POST[realname]','$_POST[phone]')";

	$sql="insert into mzy_product_type (product_name,product_type,product_price, product_other) values('$product_name','$product_type','$product_price','$product_other')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('插入失败！');location='../货品种类管理.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../货品种类管理.html';</script>";
	}
	mysql_close($conn);
//}
?>