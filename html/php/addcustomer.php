<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$customer_name=$_POST['customer_name'];
	$customer_phone=$_POST['customer_phone'];
	$customer_email=$_POST['customer_email'];
	$customer_company=$_POST['customer_company'];
	$customer_address=$_POST['customer_address'];
	$customer_other=$_POST['customer_other'];
	$customer_type=$_POST['customer_type'];

	//$sql="INSERT INTO user (customer_name, customer_phone, customer_email, customer_company, customer_address, customer_other, customer_type) VALUES ('$_POST[username]','$_POST[realname]','$_POST[phone]')";

	$sql="insert into customer (customer_name, customer_phone, customer_email, customer_company, customer_address, customer_other, customer_type) values('$customer_name','$customer_phone','$customer_email','$customer_company','$customer_address','$customer_other','$customer_type')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('��ͬ�ͻ��Ѿ����ڣ�����ʧ�ܣ�');location='../��ӿͻ�.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../�ͻ��б�.html';</script>";
	}
	mysql_close($conn);
//}
?>