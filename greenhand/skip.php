<?php
header('Content-type:text/html;charset=utf-8');


//cookie满足条件就成功了
if(isset($_COOKIE['username']) && $_COOKIE['username']==='sunshengli'){
	echo "亲爱的{$_COOKIE['username']}您好，欢迎回来！";
	echo "<a href='loginout.php'>注销</a>";

}else{
	echo "<a href='login.php'>请登录</a>";

}
?>