<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	date_default_timezone_set('prc');
	$product_out_user=isset($_SESSION["username"]) ?  $_SESSION["username"]: NULL;
	$product_out_time=date("Y-m-d H:i:s");
	$product_out_num=$_POST['product_out_num'];
	$product_out_price=$_POST['product_out_price'];
	$product_out_name=$_POST['product_out_name'];
	$product_out_other=$_POST['product_out_other'];

	$sql="insert into mzy_product_out (product_out_time,product_out_name,product_out_num,product_out_price,product_out_user, product_out_other) values('$product_out_time','$product_out_name','$product_out_num','$product_out_price','$product_out_user','$product_out_other')";
	$query=mysql_query($sql);
	
	$product_name=$_POST['product_out_name'];
	$product_num=0;
	$product_price=$_POST['product_out_price'];
	$sql="select * from mzy_product";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['product_name']==$product_name){
			$product_num = $row['product_num'] - $product_out_num;
			break;
		}
	};

	if($product_num > 0) {		
		$sql="update mzy_product set product_num='$product_num' where product_name='$product_name'";
		$query=mysql_query($sql);	
		if ($query==false){		
			echo "<script language='javascript'>alert('插入失败！');parent.location.href='../货品出库.html';</script>";		
		} else {
			echo "<script language='javascript'>alert('插入成功！');parent.location.href='../货品出库.html';</script>";
		}
	}
	else
		echo "<script language='javascript'>alert('你没有这么多货品，请检查或先入库！');parent.location.href='../货品出库.html';</script>";

	mysql_close($conn);
//}
?>