
<?php
header('contennt-type:text/html;charset=utf-8');
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$template['title']='添加父版块列表页';
// var_dump($_POST);

 


if(isset($_POST['submit'])){
	// var_dump($_POST['module_name']);
	// var_dump($_POST['sort']);
	$link=connect();
	//在输入数据前要先做验证

	include 'inc/check_father_module.php';
	if(empty($_POST['module_name'])){
		skip('father_module_add.php','error',"添加失败,版块内容不能为空");
	}

	if (mb_strlen($_POST['module_name'])>66) {
		skip('father_module_add.php','error',"添加失败,版块名称不能大于66个字符");
	}
	if(! is_numeric($_POST['sort'])){
		skip('father_module_add.php','error',"添加失败,排序只能是数字");
	}

 	//转义字符
 	$_POST=escape($link,$_POST);



 	//查询是否有相同的版块通过mysqli_num_rows判断如果重复添加会出现int(1)

 	$query="select * from sfk_father_module where module_name='{$_POST['module_name']}'";
 	$result=execute($link,$query);
 	if(mysqli_num_rows($result)){
 		skip('father_module_add.php','error',"添加失败,版块名称已存在,请勿重复添加");
 	}




	

	$query="insert into sfk_father_module(module_name,sort) values ('{$_POST['module_name']}','{$_POST['sort']}')";
	
	execute($link,$query);


	if (mysqli_affected_rows($link)==1) {

		skip('father_module.php','ok',"恭喜你,添加成功");
	}else{
		skip('father_module_add.php','error',"添加失败,请重新添加");
	}
	
}
?>








<?php include 'inc/header.inc.php' ?>


<div id="main">
	<div class="title" style="margin-bottom:10px; ">版块</div> 


	<form method="post">
	<table class="au">
		<tr>
			<td>版块名称</td>
			<td><input name="module_name" type="text" /></td>
			<td>
				版块名称不能为空，最大不能超过66个字符
			</td>
		</tr>
		<tr>
			<td>排序</td>
			<td><input name="sort" type="text" /></td>
			<td>
				填写一个数字
			</td>
		</tr>
		
		</table>
		<input style="margin-top: 20px;cursor: pointer;" class="btn" type="submit" name="submit" value="添加">
	</form>
</div>


<?php include 'inc/footer.inc.php' ?>

