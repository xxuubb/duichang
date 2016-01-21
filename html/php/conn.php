<?php
//数据库链接文件
$host='localhost';//数据库服务器
$user='root';//数据库用户名
$password='1234';//数据库密码
$database='duichang';//数据库名
$conn=@mysql_connect($host,$user,$password) or die('数据库连接失败！');
@mysql_select_db($database) or die('没有找到数据库！');
mysql_query("set realname 'gb2312'");
mysql_query("set dc_right 'gb2312'");
?>