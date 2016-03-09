<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	date_default_timezone_set('prc');
	$customer_use_time=date("Y-m-d H:i:s");
	header("Content-Type:text/html;   charset=utf-8"); 
	$customer_user=isset($_SESSION["username"]) ?  $_SESSION["username"]: NULL;
	$customer_chongzhi_used_once=$_POST['customer_chongzhi_used'];
	$customer_name=$_POST['customer_name'];
	$customer_other=$_POST['customer_other'];
	
	$sql="select * from mzy_customer";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['customer_name']==$customer_name){
			$customer_phone=$row['customer_phone'];
			$customer_chongzhi_used = $row['customer_chongzhi_used']+$customer_chongzhi_used_once;
			$customer_chongzhi_total = $row['customer_chongzhi_total'];
			break;
		}
	};
	
	if($customer_chongzhi_used>$customer_chongzhi_total){
		echo "<script language='javascript'>alert('总金额已超出，请检查！');parent.location.href='../充值卡使用.html';</script>";
	}else{
		$sql="update mzy_customer set customer_chongzhi_used='$customer_chongzhi_used' where customer_phone='$customer_phone'";
		$query=mysql_query($sql);
		
		$sql="insert into mzy_customer_recorder (customer_use_time,customer_phone,customer_name,customer_chongzhi_used,customer_use_other,customer_user) 
		values('$customer_use_time','$customer_phone','$customer_name','$customer_chongzhi_used','$customer_other','$customer_user')";
		
		$query=mysql_query($sql);	
		if ($query==false){		
			echo "<script language='javascript'>alert('更新失败！');parent.location.href='../充值卡使用.html';</script>";		
		} else {
			echo "<script language='javascript'>alert('使用成功！');parent.location.href='../用户查看.html';</script>";
		}
	}


	mysql_close($conn);
//}
?>