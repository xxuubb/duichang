<?php
//验证登陆信息
session_start();
include_once 'conn.php';

	header("Content-Type:text/html;   charset=utf-8"); 
	$customer_user=isset($_SESSION["username"]) ?  $_SESSION["username"]: NULL;
	if($customer_user==NULL)
		echo "<script language='javascript'>alert('更新失败！');location='../登录.html';</script>";
	else{
		$old_password=$_POST['old_password'];
		$new_password=$_POST['new_password'];
		$confirm_password=$_POST['confirm_password'];
		if($new_password==$confirm_password){
			$sql="select * from mzy_user";
			$query=mysql_query($sql);
			while($row=mysql_fetch_array($query)){
				if ($row['username']==$customer_user){
					$old_password=md5($old_password);
					if($row['userpass']==$old_password){
						$new_password=md5($new_password);
						$sql="update mzy_user set userpass='$new_password' where username='$customer_user'";
						$query=mysql_query($sql);	
						if ($query==false){		
							echo "<script language='javascript'>alert('修改失败！');location='../密码修改.html';</script>";		
						} else {
							echo "<script language='javascript'>alert('修改成功！');location='../登录.html';</script>";
						}
					}else{
						echo "<script language='javascript'>alert('初始密码输入错误！');location='../密码修改.html';</script>";					
					}
					break;
				}
			};
		}else{
			echo "<script language='javascript'>alert('两次输入密码不一样！');location='../密码修改.html';</script>";
		}
		
	}
	mysql_close($conn);
//}
?>