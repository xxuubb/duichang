<?php
//���ݿ������ļ�
$host='localhost';//���ݿ������
$user='root';//���ݿ��û���
$password='1234';//���ݿ�����
$database='duichang';//���ݿ���
$conn=@mysql_connect($host,$user,$password) or die('���ݿ�����ʧ�ܣ�');
@mysql_select_db($database) or die('û���ҵ����ݿ⣡');
mysql_query("set realname 'gb2312'");
mysql_query("set dc_right 'gb2312'");
?>