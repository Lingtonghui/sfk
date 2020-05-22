<?php

header('contennt-type:text/html;charset=utf-8');
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$link=connect();

$query="select * from sfk_father_module";
$result=execute($link,$query);	

$template['title']='父版块列表页';

// var_dump($link);


//$query='select * from sfk_father_module';

/*
$a=<<<START
de'ss''asas'assa
START;
$b=<<<START
de'ss''asas'asssa
START;
$c=<<<START
de'ss''asas'assssa
START;
*/


/*

在数据库入库前对数据转义
$data=array(
	0=>$a,
	1=>$b,
	2=>$c
);
*/

/*
$data=array(
	0=>$a, 
	1=>array(
		0=>$b,1=>$c
	)

);
var_dump($data);
var_dump(escape($link,$data));

*/
/*
mysqli_real_escape_string($link,$data);//多维数组会显示错误
*/

/*
$a=mysqli_real_escape_string($link,$a);//只能是一个如果是数组显然乏力
$query="insert into sfk_father_module(module_name) values('{$a}')";//加上花括号就是调用变量$a,不加可能会变成字符串

var_dump(execute($link,$query));//执行sql语句,成功返回bool(true)
*/




/*
//获取结果中行的数量

第一种方法
$result=mysqli_query($link,$query);
var_dump(mysqli_num_rows($result));


第二种方法
var_dump(num($link,$query));
*/



//执行一条sql语句，返回结果集对象或者布尔值
//$result=execute($link,$query);
//var_dump(mysqli_fetch_assoc($result));


//执行一条sql语句，只返回布尔值
//$bool=execute_bool($link,$query);
//var_dump($bool);


//一次性执行多条sql语句
/*$arr_sqls=arr(
	'select * from sfk_father_module',
	'select * from sfk_father_module',
	'select * from sfk_father_module',

);
var_dump(execute_multi($link,$arr_sqls,$error));
echo $error;
*/



//关闭数据库
//close($link); 
?>

<?php include 'inc/header.inc.php' ?>

		
	
	<div id="main" style="height:1000px;">
		<div class="title">父版块列表</div>
		
		<table class="list">
			<tr>
				<th>排序</th>	 	 	
				<th>版块名称</th>
				<th>操作</th>
			</tr>

			<?php

		
 
	while ($data=mysqli_fetch_assoc($result)){
		//var_dump($data);
		//father_module_delete.php?id={$data['id']}
		$url=urlencode("father_module_delete.php?id={$data['id']}");
		//$URL传递的是删除的id
		$return_url=urlencode($_SERVER['REQUEST_URI']);
		$message="你真的要删除父版块{$data['module_name']}吗?";
		$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";




$html=<<<START
		<tr>
				<td><input class="sort" type="text" name="sort" /></td>
				<td>{$data['module_name']}[id:{$data['id']}]</td>
				
				<td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="father_module_update.php?id={$data['id']}">[编辑]</a>&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
			</tr>

START;
			echo  $html;
	}


			 ?>
			
			

<!--
			<tr>
				<td><input class="sort" type="text" name="sort" /></td>
				<td>测试板块[id:2]</td>
				
				<td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="#">[编辑]</a>&nbsp;&nbsp;<a href="#">[删除]</a></td>
			</tr>
			<tr>
				<td><input class="sort" type="text" name="sort" /></td>
				<td>测试板块[id:3]</td>
				
				<td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="#">[编辑]</a>&nbsp;&nbsp;<a href="#">[删除]</a></td>
			</tr>
		-->
		</table>
		
	</div>

<?php include 'inc/footer.inc.php' ?>