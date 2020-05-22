<?php


$arr_query[]="insert into t1(name) values('a')";
$arr_query[]="insert into t1(name) values('a')";
$arr_query[]="insert into t1(name) values('a')";
$query=implode(';', $arr_query).';';
var_dump($query);
?>