<?php
//预先定义数据库链接参数
/*$host = '127.0.0.1';
$dbuser = 'root';
$pwd  = 'root';
$dbname = 'php10';

$db = new mysqli( $host, $dbuser, $pwd, $dbname );
//先连接到数据库


if ($db->connect_error <> 0){
	echo '链接失败';
	echo $db->connect_error ;
}
//判断是否连接上数据库



//通过query方法修改数据
if($is==true){
	echo '插入成功';
}else{
	echo '插入失败';
}
//var_dump($is);

//var_dump($db);

//设定数据库数据传输的编码
$db->query("SET NAMES UTF8");

*/

//将数据入库
//预先定义数据库链接参数
$host = '127.0.0.1';
$dbuser = 'root';
$pwd  = 'root';
$dbname = 'php10';

$db = new mysqli( $host, $dbuser, $pwd, $dbname );
//先连接到数据库


if ($db->connect_error <> 0){
	echo '链接失败';
	echo $db->connect_error ;
}
//判断是否连接上数据库

$db->query("SET NAMES UTF8");