<?php
//验证登陆信息
session_start();
include_once 'conn.php';

date_default_timezone_set('Asia/Shanghai'); 
$bu_num="SHTJ".date("YmdHis");
$bu_box_num=$_POST['bu_box_num'];
$bu_ruku_time=$_POST['bu_ruku_time'];
$bu_ruku_customer=$_POST['bu_ruku_customer'];
$bu_ruku_add=$_POST['bu_ruku_add'];
$bu_ruku_status=$_POST['bu_ruku_status'];
$bu_ruku_type=$_POST['bu_ruku_type'];
$bu_ruku_cost=$_POST['bu_ruku_cost'];

$sql="insert into business (bu_num,bu_box_num,bu_ruku_time,bu_ruku_customer,bu_ruku_add,bu_ruku_status,bu_ruku_type,bu_ruku_cost) values('$bu_num','$bu_box_num','$bu_ruku_time','$bu_ruku_customer','$bu_ruku_add','$bu_ruku_status','$bu_ruku_type','$bu_ruku_cost')";
$query=mysql_query($sql);	
if ($query==false){		
	echo "<script language='javascript'>alert('添加失败！');location='ruku.php';</script>";		
} else {
	echo "<script language='javascript'>alert('添加成功！');location='ruku.php';</script>";
}
mysql_close($conn);

?>