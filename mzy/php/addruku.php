<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	date_default_timezone_set('prc');
	$product_in_user=isset($_SESSION["username"]) ?  $_SESSION["username"]: NULL;
	$product_in_time=date("Y-m-d H:i:s");
	$product_in_num=$_POST['product_in_num'];
	$product_in_price=$_POST['product_in_price'];
	$product_in_name=$_POST['product_in_name'];
	$product_in_other=$_POST['product_in_other'];

	$sql="insert into mzy_product_in (product_in_time,product_in_name,product_in_num,product_in_price,product_in_user, product_in_other) values('$product_in_time','$product_in_name','$product_in_num','$product_in_price','$product_in_user','$product_in_other')";
	$query=mysql_query($sql);
	
	$product_name=$_POST['product_in_name'];
	$product_num=$product_in_num;
	$product_price=$_POST['product_in_price'];
	$sql="select * from mzy_product";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['product_name']==$product_name){
			$product_num = $row['product_num'] + $product_in_num;
			break;
		}
	};

	if($product_num > $product_in_num) {
		echo "<script language='javascript'>alert('gengxing！');</script>";	
		$sql="update mzy_product set product_num='$product_num', product_price='$product_price' where product_name='$product_name'";
	}
	else
		$sql="insert into mzy_product (product_name,product_num,product_price) values('$product_name','$product_num','$product_price')";
	
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('插入失败！');parent.location.href='../货品入库.html';</script>";		
	} else {
		echo "<script language='javascript'>alert('插入成功！');parent.location.href='../货品入库.html';</script>";
	}
	mysql_close($conn);
//}
?>