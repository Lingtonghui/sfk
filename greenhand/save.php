<?php

include('input.php');
include('connect.php');

$content = $_POST['content'];
$user = $_POST['user'];


$input = new input();


//调用函数，检查留言内容
$is = $input->post( $content );
if( $is == false ){
	die('留言内容的数据不正确');
}

//调用函数，检查留言人
$is = $input->post( $user );
if( $is == false ){
	die('留言人的数据不正确');
}
//var_dump( $content, $user );

/*
$host = '127.0.0.1';
$dbuser = 'root';
$pwd  = 'root';
$dbname = 'php10';

$db = new mysqli( $host, $dbuser, $pwd, $dbname );
//先连接到数据库


if ($db->connect_error <> 0){
	echo '链接失败';
	echo $db->connect_error ;
} */
//判断是否连接上数据库

//echo $sql; 确认语句没问题现在SQL里面测试
$time=time();
$sql ="INSERT INTO msg (content,user,intime) VALUES ('{$content}','{$user}','{$time}')";
$is=$db->query($sql);
var_dump($is);
//花括号写上



?>