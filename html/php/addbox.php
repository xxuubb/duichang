<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$box_num=$_POST['box_num'];
	$box_size=$_POST['box_size'];
	$box_weight=$_POST['box_weight'];
	$box_other=$_POST['box_other'];

	$sql="insert into box (box_num,box_size,box_weight,box_other) values('$box_num','$box_size','$box_weight','$box_other')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('插入失败！');location='../添加货柜.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../货柜列表.html';</script>";
	}
	mysql_close($conn);
//}
?>