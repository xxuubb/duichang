<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$username=$_POST['username'];
	$userpass=$_POST['userpass'];
	$userpass=md5($userpass);
	$realname=$_POST['realname'];
	$phone=$_POST['phone'];
	$dc_right=$_POST['dc_right'];
	//$sql="INSERT INTO user (username, realname, phone) VALUES ('$_POST[username]','$_POST[realname]','$_POST[phone]')";

	$sql="insert into user (username,userpass,realname,phone,dc_right) values('$username','$userpass','$realname','$phone','$dc_right')";
	$query=mysql_query($sql);	
	if ($query==false){		
		echo "<script language='javascript'>alert('����ʧ�ܣ�');location='../����û�.html';</script>";		
	} else {
		echo "<script language='javascript'>location='../�û��б�.html';</script>";
	}
	mysql_close($conn);
//}
?>