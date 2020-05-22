<?php

/*
$aa=10;
name($aa,$aa);

function name($nn='100',$yy){

	var_dump($nn,$yy);
}
*/

//把局部变量传回给全局变量
$xx= name(100,200);
var_dump($xx);

if ( name(100,200)==300) {
	echo "ok";
	# code...
};

function name($nn,$yy){

	$cc=$nn+$yy;

	return $cc;
	//return后紧随的代码不再执行,除非return里面是数组
}



?>