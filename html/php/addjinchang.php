<?php
//验证登陆信息
session_start();
include_once 'conn.php';

date_default_timezone_set('Asia/Shanghai');

$bu_num=$_POST['bu_num'];
$bu_jc_time=$_POST['bu_jc_time'];
$bu_jc_customer=$_POST['bu_jc_customer'];
$bu_jc_add=$_POST['bu_jc_add'];
$bu_jc_status=$_POST['bu_jc_status'];
$bu_jc_type=$_POST['bu_jc_type'];
$bu_jc_fixcost=$_POST['bu_jc_fixcost'];
$bu_jc_costrate=$_POST['bu_jc_costrate'];

$sql="update business set bu_jc_time='$bu_jc_time', bu_jc_customer='$bu_jc_customer', bu_jc_add='$bu_jc_add',  bu_jc_status='$bu_jc_status', bu_jc_type='$bu_jc_type', bu_jc_fixcost= '$bu_jc_fixcost', bu_jc_costrate= '$bu_jc_costrate' where bu_num='$bu_num'";
$query=mysql_query($sql);	
if ($query==false){		
	echo "<script language='javascript'>alert('添加失败！');location='jinchang.php';</script>";		
} else {
	echo "<script language='javascript'>alert('添加成功！');location='jinchang.php';</script>";
}
mysql_close($conn);

?>