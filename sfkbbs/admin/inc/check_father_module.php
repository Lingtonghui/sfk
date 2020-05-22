


<?php


if(empty($_POST['module_name'])){
		skip('father_module_add.php','error',"添加失败,版块内容不能为空");
	}

	if (mb_strlen($_POST['module_name'])>66) {
		skip('father_module_add.php','error',"添加失败,版块名称不能大于66个字符");
	}
	if(! is_numeric($_POST['sort'])){
		skip('father_module_add.php','error',"添加失败,排序只能是数字");
	}



	$_POST=escape($link,$_POST);



 	//查询是否有相同的版块通过mysqli_num_rows判断如果重复添加会出现int(1)

 	$query="select * from sfk_father_module where module_name='{$_POST['module_name']}'";
 	$result=execute($link,$query);
 	if(mysqli_num_rows($result)){
 		skip('father_module_add.php','error',"添加失败,版块名称已存在,请勿重复添加");
 	}//如果名字一样只改排序会显示错误


?>