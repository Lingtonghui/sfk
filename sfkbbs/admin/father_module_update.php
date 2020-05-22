<?php

header('contennt-type:text/html;charset=utf-8');
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';

include_once '../inc/tool.inc.php';
$link=connect();

$query="select * from sfk_father_module";
$result=execute($link,$query);	

$template['title']='父版块修改列表页';

//传id的时候要判断id是否存在
if ( ! isset($_GET['id']) || !is_numeric($_GET['id'])) {
	skip('father_module.php','error',"添加失败,版块内容不存在");
}



$query="select * from sfk_father_module where id={$_GET['id']}";
$result=execute($link,$query);

if (! mysqli_num_rows($result)) {
	skip('father_module.php','error',"添加失败,版块内容不存在");
}


//修改按钮

if (isset($_POST['submit'])) {
	include 'inc/check_father_module.php';
	 $query="update sfk_father_module set module_name='{$_POST['module_name']}',sort={$_POST['sort']} where id={$_GET['id']}";
	 execute($link,$query);
	 if (mysqli_affected_rows($link)==1) {
	 	skip('father_module.php','ok',"添加成功");
	 		 }
}


$data=mysqli_fetch_assoc($result);



?>


<?php include 'inc/header.inc.php' ?>

<div id="main">
	<div class="title" style="margin-bottom:10px; ">修改父版块-<?php echo $data['module_name'] ?></div> 


	<form method="post">
	<table class="au">
		<tr>
			<td>版块名称</td>
			<td><input name="module_name" type="text" value="<?php echo $data['module_name'] ?>" /></td>
			<td>
				版块名称不能为空，最大不能超过66个字符
			</td>
		</tr>
		<tr>
			<td>排序</td>
			<td><input name="sort" type="text" value="<?php echo $data['sort'] ?>"/></td>
			<td>
				填写一个数字
			</td>
		</tr>
		
		</table>
		<input style="margin-top: 20px;cursor: pointer;" class="btn" type="submit" name="submit" value="修改">
	</form>
</div>

<?php include 'inc/footer.inc.php' ?>