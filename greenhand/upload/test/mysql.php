<?php
//预先定义数据库链接参数
$host = '127.0.0.1';
$user = 'root';
$pwd  = 'root';
$dbname = 'php10';

//链接到数据库
$db = new mysqli( $host, $user, $pwd, $dbname );
//检查是否成功
if( $db->connect_errno <> 0 ){
	echo "链接失败，";
	echo $db->connect_error;
}
$db->query("SET NAMES UTF8");

//编写SQL
//$sql = "INSERT INTO msg (content, user, intime) VALUES ('1','user', 12345)";
$sql = "SELECT * FROM msg where id >63 ORDER BY id DESC";

//执行SQL
$mysqli_result = $db->query( $sql );

if( $mysqli_result === false ){
	echo "SQL错误";
	exit;
}
/**
首次调用显示最新的一条记录
重复调用，依次显示后面的记录
如果没有记录可显示，九返回Null

row = array(01,2) == true
row = null == false
*/


$rows = [];

while( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC ) ){
	$rows[] = $row;
}

var_dump( $rows );

/*
//判断执行是否成功。
if( $is == true ){
	echo '插入成功';
}else{
	echo "插入失败";
}*/