<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$fee_num=$_POST['fee_num'];
	$fee_name=$_POST['fee_name'];
	$fee_ex=$_POST['fee_ex'];
	//$sql="INSERT INTO user (username, realname, phone) VALUES ('$_POST[username]','$_POST[realname]','$_POST[phone]')";

	$sql="insert into fee (fee_num,fee_name,fee_ex) values('$fee_num','$fee_name','$fee_ex')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('�����Ƿ���ͬ����Ŀ������ʧ�ܣ�');location='../������Ŀ.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../�����б�.html';</script>";
	}
	mysql_close($conn);
//}
?>