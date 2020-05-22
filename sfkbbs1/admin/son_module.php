<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$link=connect();

$template['title']='子版块列表页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="main">
	<div class="title">子版块列表</div>
	<table class="list">
		<tr>
			<th>排序</th>	 	 	
			<th>版块名称</th>
			<th>所属父版块</th>
			<th>版主</th>
			<th>操作</th>

		</tr>
		<?php 
		$query="select ssm.id,ssm.module_name  as module_name,sfm.module_name as father_module_name ,ssm.member_id from sfk_son_module as ssm,sfk_father_module as sfm where ssm.father_module_id=sfm.id order by sfm.id";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("son_module_delete.php?id={$data['id']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除子版块 {$data['module_name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
$html=<<<A
			<tr>
				<td><input class="sort" type="text" name="sort" /></td>
				<td>{$data['module_name']}[id:{$data['id']}]</td>
				<td>{$data['father_module_name']}</td>
				<td>{$data['member_id']}</td>
				<td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="son_module_update.php?id={$data['id']}">[编辑]</a>&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
			</tr>
A;
			echo $html;
		}
		?>
		
	</table>
</div>
<?php include 'inc/footer.inc.php'?>