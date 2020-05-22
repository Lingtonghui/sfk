<?php


$img=imagecreatetruecolor(200, 200);
header('Content-type:image/jpeg');
$color1=imagecolorallocate($img, 50, 50, 50); //分配颜色
$color2=imagecolorallocate($img, 229, 36, 36); //分配颜色
imagefill($img, 0, 0, $color2);
imagejpeg($img);//返回一张图片
imagedestroy($img);
?>