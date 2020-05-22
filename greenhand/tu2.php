<?php

header('Content-type:text/html;');
$img=imagecreatetruecolor(200, 200);

$color1=imagecolorallocate($img, 50, 50, 50); //分配颜色
$color2=imagecolorallocate($img, 229, 36, 36); //分配颜色
imagefill($img, 0, 0, $color2);
if(imagejpeg($img,'hh.jpeg')//保存一张图片
){
	echo 'true';
};
imagedestroy($img);
?>