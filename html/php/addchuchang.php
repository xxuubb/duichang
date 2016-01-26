<?php
//验证登陆信息
session_start();
include_once 'conn.php';

date_default_timezone_set('Asia/Shanghai');

$bu_num=$_POST['bu_num'];
$bu_cc_time=$_POST['bu_cc_time'];
$bu_cc_customer=$_POST['bu_cc_customer'];
$bu_cc_add=$_POST['bu_cc_add'];
$bu_cc_status=$_POST['bu_cc_status'];
$bu_cc_type=$_POST['bu_cc_type'];
$bu_cc_fixcost=$_POST['bu_cc_fixcost'];
$bu_cc_costrate=$_POST['bu_cc_costrate'];

$sql="update business set bu_cc_time='$bu_cc_time', bu_cc_customer='$bu_cc_customer', bu_cc_add='$bu_cc_add',  bu_cc_status='$bu_cc_status', bu_cc_type='$bu_cc_type', bu_cc_fixcost= '$bu_cc_fixcost', bu_cc_costrate= '$bu_cc_costrate' where bu_num='$bu_num'";
$query=mysql_query($sql);	
if ($query==false){		
	echo "<script language='javascript'>alert('添加失败！');location='chuchang.php';</script>";		
} else {
	echo "<script language='javascript'>alert('添加成功！');location='chuchang.php';</script>";
}
mysql_close($conn);

?>