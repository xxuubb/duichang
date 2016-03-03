<?php
echo "<form id='rukuaddform' name='rukuaddform' method='post' action='addincome.php'>";
echo "<div id='u0' class='ax_shape' data-label='Placeholder for App Content'>";
echo "<img id='u0_img' class='img ' src='../images/登录/placeholder_for_app_content_u0.png'/>";

echo "<div id='u1' class='text'>";
echo "<p><span>Replace with your iPhone 5 App Design</span></p>";
echo "</div>";
echo "</div>";

echo "<!-- Unnamed (Image) -->";
echo "<div id='u2' class='ax_image'>";
echo "<img id='u2_img' class='img ' src='../images/登录/u2.png'/>";
echo "<!-- Unnamed () -->";
echo "<div id='u3' class='text'>";
echo "<p><span></span></p>";
echo "</div>";
echo "</div>";

echo "<!-- Unnamed (Shape) -->";
echo "<div id='u4' class='ax_shape'>";
echo "<img id='u4_img' class='img ' src='../resources/images/transparent.gif'/>";
echo "<!-- Unnamed () -->";
echo "<div id='u5' class='text'>";
echo "<p><span>欢迎</span><span>您，</span><span> 顾姐！</span></p>";
echo "</div>";
echo "</div>";

echo "<!-- Unnamed (HTML Button) -->";
echo "<div id='u6' class='ax_html_button'>";
echo "<input id='u6_input' type='submit' value='收入登记'/>";
echo "</div>";

echo "<!-- Unnamed (HTML Button) -->";
echo "<div id='u7' class='ax_html_button'>";
echo "<input id='u7_input' type='submit' value='回到首页'/>";
echo "</div>";

echo "<!-- Unnamed (Shape) -->";
echo "<div id='u8' class='ax_shape'>";
echo "<img id='u8_img' class='img ' src='../resources/images/transparent.gif'/>";
echo "<!-- Unnamed () -->";
echo "<div id='u9' class='text'>";
echo "<p><span>收入类型</span><span>：</span></p>";
echo "</div>";
echo "</div>";

echo "<!-- Unnamed (Droplist) -->";
echo "<div id='u10' class='ax_droplist'>";
echo "<select id='income_type' name='income_type'>";
echo "<option value='汗蒸养生'>汗蒸养生</option>";
echo "<option selected value='面部护理'>面部护理</option>";
echo "<option value='产品销售'>产品销售</option>";
echo "</select>";
echo "</div>";

echo "<!-- Unnamed (Shape) -->";
echo "<div id='u11' class='ax_shape'>";
echo "<img id='u11_img' class='img ' src='../resources/images/transparent.gif'/>";
echo "<!-- Unnamed () -->";
echo "<div id='u12' class='text'>";
echo "<p><span>收入</span><span>金额</span><span>：</span></p>";
echo "</div>";
echo "</div>";

echo "<!-- Unnamed (Text Field) -->";
echo "<div id='u13' class='ax_text_field'>";
echo "<input id='income_money' name='income_money' type='text' value=''/>";
echo "</div>";

echo "<!-- Unnamed (Shape) -->";
echo "<div id='u14' class='ax_shape'>";
echo "<img id='u14_img' class='img ' src='../resources/images/transparent.gif'/>";
echo "<!-- Unnamed () -->";
echo "<div id='u15' class='text'>";
echo "<p><span>时&nbsp; &nbsp; &nbsp; &nbsp; 间</span><span>：</span></p>";
echo "</div>";
echo "</div>";

date_default_timezone_set('prc');
$current_time=date("Y-m-d H:i:s");
echo "<!-- Unnamed (Text Field) -->";
echo "<div id='u16' class='ax_text_field'>";
echo "<input id='income_time' name='income_time' type='text' value='$current_time'/>";
echo "</div>";

echo "<!-- Unnamed (Shape) -->";
echo "<div id='u17' class='ax_shape'>";
echo "<img id='u17_img' class='img ' src='../resources/images/transparent.gif'/>";
echo "<!-- Unnamed () -->";
echo "<div id='u18' class='text'>";
echo "<p><span>备&nbsp; &nbsp; &nbsp; &nbsp; 注</span><span>：</span></p>";
echo "</div>";
echo "</div>";

echo "<!-- Unnamed (Text Field) -->";
echo "<div id='u19' class='ax_text_field'>";
echo "<input id='income_other' name='income_other' type='text' value=''/>";
echo "</div>";

echo "<!-- Unnamed (HTML Button) -->";
echo "<div id='u20' class='ax_html_button'>";
echo "<input id='u20_input' type='submit' value='确&nbsp; 定'/>";
echo "</div>";
echo "</form>";  
?>