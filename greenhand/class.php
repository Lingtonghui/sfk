<?php


class name{

	public $s1=0;
	public $s2=1;
//类属性（像变量），定义类属性可见性（public等）必须存在



	public function s1(){
		echo '$s1';
	}

	public function s2(){
		echo '$s2';
	}
//类方法（像函数），定义类方法不一定要可见性建议都给。

}

$name =new name();//根据类name实例化对象

echo $name->s1;
echo $name->s1();

/*
对比调用属性和方法

$a1=1;
echo $a1;

function a1(){
	echo 'a1'
}
a1();

*/



?>