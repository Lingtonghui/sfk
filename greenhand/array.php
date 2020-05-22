<?php

$arr1=[1,2,3];
$arr2=
[
	'a' =>1.111,
	'b' =>2,
	'c' =>3,


];

$arr2['d']=4;//添加键d
$arr2['b']=22;//改键b值为22
unset($arr2['c']);//删除c
echo $arr2['a'];//查找


var_dump($arr1,$arr2);
?>