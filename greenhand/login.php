<?php
header('Content-type:text/html;charset=utf-8');
  if(isset($_POST['submit'])){
      if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']==='sunshengli' && $_POST['password']==='123456'){
         //用户登录成功后做的操作
      	if(setcookie('username',$_POST['username'],time()+3600)){
      		
      				header('Location:skip2.php?url=skip.php&info=登陆成功');

      	}else{
      		header('Location:skip2.php?url=skip.php&info=对不起滚一边玩去');
      	}


      }else{
      	header('Location:skip2.php?url=skip.php&info=对不起滚一边玩去');
      }







  }


?>


<!DOCTYPE html>
<html>
<head>
	<title>登陆</title>
	<meta charset="utf-8">
</head>
<body>


<form method="post" action="login.php">
	
	姓名:<input type="text" name="username">
	密码:<input type="password" name="password" >
	<input type="submit" name="submit" value="登陆">
</form>
</body>
</html>