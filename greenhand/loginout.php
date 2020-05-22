<?php

header('Content-type:text/html;charset=utf-8');


if(isset($_COOKIE['username']) && $_COOKIE['username']==='sunshengli'){
			if(setcookie('username',$_POST['username'],time()-3600)){
				header('Location:skip2.php?url=skip.php&info=注销成功');
			}else{
				header('Location:skip2.php?url=skip.php&info=失败');
			}




}
?>