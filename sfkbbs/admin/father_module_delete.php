<?php

header('contennt-type:text/html;charset=utf-8');
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();

if (!isset($_GET['id'])  || ! is_numeric($_GET['id'])) {

		skip('father_module.php','error','删除失败id不存在');
}
          

$query="delete from sfk_father_module where id ={$_GET['id']}";
execute($link,$query);
if(mysqli_affected_rows($link)==1){
   skip('father_module.php','ok','恭喜你删除成功');
}else{
	skip('father_module.php','error','删除失败');
}
?>