
<?php
header("Content-Type: text/html;charset=utf-8");
error_reporting(0); //禁止错误输出
$link = mysql_connect('192.168.0.107:3306','xxx','Qq2389110614'); //创建数据库连接
if(!$link){ //如果失败
    die('连接mysql数据库失败'.mysql_error()); //显示出错误信息
}
mysql_select_db("xxx",$con); //选择需要使用的数据库
$sql = "insert into stu (txtId,txtName,txtAge,txtAddress) values ('".$_POST['txtID']."','".$_POST['txtName']."','".$_POST['txtAge']."''".$_POST['txtAddress']."')";
mysql_query($sql);
echo "<p>插入数据成功</p>";
mysql_close();
echo '连接mysql服务器成功!'; //否则显示连接成功的信息
mysql_close($link); //最后关闭数据库连接
?>
