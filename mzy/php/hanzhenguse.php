
<?php
//验证登陆信息
session_start();
include_once 'conn.php';
header("Content-Type:text/html;   charset=utf-8"); 

$sql="select * from mzy_customer";
$query=mysql_query($sql);

echo "<form id='jinchangaddform' name='jinchangaddform' method='post' action='addhanzhenguse.php'>";
echo "<table width=320 height=70 border=0 cellspacing=1> ";
echo "<tr height=60><td width=100 align=right><p><span>用户姓名</span><span>：          </span></p></td>";
echo "<td width=80 align=center><select style='WIDTH: 140px' id='customer_name' name='customer_name'>";
while($row=mysql_fetch_array($query)){
	echo "<option value=".$row['customer_name'].">".$row['customer_name']."</option>";
};
echo "</select></td>";
echo "</tr>";

echo "<tr height=60><td width=100 align=right><p><span>使用次数</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_hanzheng_used' name='customer_hanzheng_used' type='text' value=''/></td>";
echo "</tr>";

echo "<tr height=60><td width=100 align=right><p><span>备注</span><span>：          </span></p></td>";
echo "<td width=80 align=center><input id='customer_other' name='customer_other' type='text' value=''/>";
echo "</tr>";

echo "<tr height=60><td width=100 align=right></td>";
echo "<td width=80 align=left><input type='submit' value='确定'/></td>";
echo "</tr>";   
echo "</form>";   
mysql_close($conn);

?>