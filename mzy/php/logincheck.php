<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$username=$_POST['username'];
	$_SESSION["username"]=$username;
	$userpass=$_POST['userpass'];
	$userpass=md5($userpass);
	$sql="select * from mzy_user";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
		if ($row['username']==$username){
			if ($row['userpass']==$userpass){
				$_SESSION['username']=$username;
				echo "<script language='javascript'>alert('登陆成功！');location='../首页.html';</script>";
				break;
			}
			else {
				echo "<script language='javascript'>alert('密码错误！');location='../登录.html';</script>";
				break;
			}
		}
	};
	if($row==false){
		echo "<script language='javascript'>alert('用户名不存在！');location='../登录.html';</script>";
	}else 
	mysql_close($conn);
//}
?>