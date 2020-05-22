<?php
header('content-type:text/html;charset=utf-8');
 
if(isset($_POST['submit'])){
    if(is_uploaded_file($_FILES['myfile']['tmp_name'])){

$arr=pathinfo($_FILES['myfile']['name']);
var_dump($arr);
$newName=date('YmdGis').rand(1000,9999);
//move_uploaded_file($_FILES['myfile']['tmp_name'],"upload/{$newName}.{$arr['extenxion']})"
    	if(move_uploaded_file($_FILES['myfile']['tmp_name'],"upload/{$arr['basename']}")){
    		echo "上传成功";
    	}else{
    		echo '上传失败';
    	}

}else{
	exit('文件上传失败');
}
//var_dump($_FILES);	
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="myfile">
			<input type="submit" name="submit" value="上传文件">

		</form>
</body>
</html>