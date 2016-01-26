<?php
//验证登陆信息
session_start();
include_once 'conn.php';

date_default_timezone_set('Asia/Shanghai');

$bu_num=$_POST['bu_num'];
$bu_ck_time=$_POST['bu_ck_time'];
$bu_ck_customer=$_POST['bu_ck_customer'];
$bu_ck_add=$_POST['bu_ck_add'];
$bu_ck_status=$_POST['bu_ck_status'];
$bu_ck_type=$_POST['bu_ck_type'];
$bu_ck_cost=$_POST['bu_ck_cost'];

$sql="update business set bu_ck_time='$bu_ck_time', bu_ck_customer='$bu_ck_customer', bu_ck_add='$bu_ck_add',  bu_ck_status='$bu_ck_status', bu_ck_type='$bu_ck_type', bu_ck_cost= '$bu_ck_cost' where bu_num='$bu_num'";
$query=mysql_query($sql);	
if ($query==false){		
	echo "<script language='javascript'>alert('添加失败！');location='chuku.php';</script>";		
} else {
	echo "<script language='javascript'>alert('添加成功！');location='chuku.php';</script>";
}
mysql_close($conn);

?>