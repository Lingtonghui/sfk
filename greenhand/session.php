<?php


/*session_start();//打开

$_SESSION['name']="林子酱";
$_SESSION['email']='4440364799@qq.com';
$_SESSION['url']='sifangku.com';

*/
//var_dump($_SESSION);
//var_dump($_COOKIE);
session_start();
session_unset();
session_destroy();
setcookie(session_name(),'',time()-3600,'/');


//使用setcookie删除cookie的时候，需要与当初设置cookie的时候参数一致
//session_unset();//销毁
//session_destroy();//销毁一个会话的卡号