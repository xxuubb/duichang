<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	date_default_timezone_set('prc');
	header("Content-Type:text/html;   charset=utf-8"); 
	$customer_user=isset($_SESSION["username"]) ?  $_SESSION["username"]: NULL;
	$customer_reg_time=$_POST['customer_reg_time'];
	$customer_hanzheng_type=$_POST['customer_hanzheng_type'];
	$customer_phone=$_POST['customer_phone'];
	$customer_name=$_POST['customer_name'];
	$customer_address=$_POST['customer_address'];
	$customer_weixin=$_POST['customer_weixin'];
	$customer_qq=$_POST['customer_qq'];
	$customer_other=$_POST['customer_other'];
	$customer_zengsong=$_POST['customer_zengsong'];
	$customer_hanzheng_total_times=0;
	$customer_is_old=0;
	$customer_score=0;
	$customer_vip_type=0;
	
	if($customer_hanzheng_type=="15次卡"){
		$customer_score=300;
		$customer_vip_type=1;
		$customer_hanzheng_total_times=15;
	}elseif($customer_hanzheng_type=="33次卡"){
		$customer_score=500;
		$customer_vip_type=1;
		$customer_hanzheng_total_times=33;	
	}else{
		$customer_score=1000;
		$customer_vip_type=2;
		$customer_hanzheng_total_times=100;
	}
	
	if($customer_zengsong!="")
		$customer_hanzheng_total_times= $customer_hanzheng_total_times + (int)$customer_zengsong;
	
	$sql="select * from mzy_customer";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['customer_phone']==$customer_phone){
			$customer_hanzheng_total_times = $row['customer_hanzheng_total_times'] + $customer_hanzheng_total_times;
			$customer_score = $row['customer_score'] + $customer_score;
			
			if(($customer_score>=1000)&&($customer_score<5000))
				$customer_vip_type=2;
			elseif(($customer_score>=5000)&&($customer_score<10000))
				$customer_vip_type=3;
			elseif($customer_score>10000)
				$customer_vip_type=4;
				
			$customer_is_old=1;
			break;
		}
	};

	if($customer_is_old == 1) {
		$sql="update mzy_customer set customer_hanzheng_total_times='$customer_hanzheng_total_times', customer_score='$customer_score' where customer_phone='$customer_phone'";
	}
	else
		$sql="insert into mzy_customer (customer_name,customer_phone,customer_reg_time,customer_address,customer_hanzheng_total_times,customer_vip_type,customer_score,customer_weixin,customer_qq,customer_other,customer_user) 
	values('$customer_name','$customer_phone','$customer_reg_time','$customer_address','$customer_hanzheng_total_times','$customer_vip_type','$customer_score','$customer_weixin','$customer_qq','$customer_other','$customer_user')";
	
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('插入失败！');parent.location.href='../汗蒸卡登记.html';</script>";		
	} else {
		echo "<script language='javascript'>alert('插入成功！');parent.location.href='../用户查看.html';</script>";
	}
	mysql_close($conn);
//}
?>