<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$username=$_POST['username'];
	$userpass=$_POST['userpass'];
	$userpass=md5($userpass);
	$sql="select * from user";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['username']==$username){
			if ($row['userpass']==$userpass){
				$_SESSION['username']=$username;
				echo "<script language='javascript'>alert('��½�ɹ���');location='../��ҳ.html';</script>";
				break;
			}
			else {
				echo "<script language='javascript'>alert('�������');location='../��¼.html';</script>";
				break;
			}
		}
	};
	if($row==false){
		echo "<script language='javascript'>alert('�û��������ڣ�');location='../��¼.html';</script>";
	}else 
	mysql_close($conn);
//}
?>