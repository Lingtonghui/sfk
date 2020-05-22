<?php

function sys_function($arg1,$arg2){
	$arg2=$arg2+10;
	return $arg1($arg2);
}

function user_function($num){
	return $num*$num*$num*$num;
}

$user='sys_function';
var_dump( $user('user_function',10));