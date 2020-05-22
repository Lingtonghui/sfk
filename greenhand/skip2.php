<?php
if(!isset($_GET['url']) || !isset($_GET['info']))
{
	exit();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>正在跳转中...</title>
</head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="3;URL=<?php echo $_GET['url'] ?>">
<body>
   
  <div style="text-align: center;font-size: 20px;"><?php echo $_GET['info']?>,3秒后自动跳转</div>
</body>
</html>