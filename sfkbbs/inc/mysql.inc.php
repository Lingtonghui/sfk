<?php
header('contennt-type:text/html;charset=utf-8');

//数据库连接
function connect($host=DB_HOST,$user=DB_USER,$password=DB_PASSWORD,$database=DB_DATABASE,$port=DB_PORT){
	$link=@mysqli_connect($host,$user,$password,$database,$port);
	//var_dump(mysqli_connect_errno());
	if (mysqli_connect_errno()) {
    /*printf("Connect failed: %s\n", mysqli_connect_error());*/
    exit(mysqli_connect_error());
}
	mysqli_set_charset($link,'utf8'); //设置数据库编码
	return $link;  //返回给外部调用
}








//执行一条sql语句，返回结果集对象或者布尔值


function execute($link,$query){
	$result=mysqli_query($link, $query);
	if(mysqli_errno($link)){
	    exit(mysqli_error($link));
	}
	return $result;

}






//执行一条sql语句，只返回布尔值

function execute_bool($link,$query){
	$bool=mysqli_real_query($link,$query);
	if(mysqli_errno($link)){
	    exit(mysqli_error($link));
	}
	return $bool;
}


//一次性执行多条sql语句


//获取记录数

function num($link,$sql_count){
	$result=execute($link,$sql_count);
	$count=mysqli_fetch_row($result);
	return $count[0];
}



//数据入库之前进行转义，确保数据库顺利入库

function escape($link,$data){
	if(is_string($data)){
		return mysqli_real_escape_string($link,$data);
	}
	if(is_array($data)){
		foreach($data as $key=>$val){
			$data[$key]=escape($link,$val);
			//针对多为数组反复调用直到全部被转义
			//只能一维数组有效$data[$key]=mysqli_real_escape_string($link,$val);
		}
	}
	return $data;

}







//关闭与数据库连接
function close($link){
	mysqli_close($link);
}
//在php中如果像函数里面传递的是对象，那么并不是把对象复制一份传给函数，而是直接传递的这个对象本身

?>