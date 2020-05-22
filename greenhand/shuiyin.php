<?php

header('Content-type:image/jpeg');
$img=imagecreatefromjpeg('font/2.jpg');

$color=imagecolorallocate($img, 255, 255, 255);


$width=imagesx($img);
$height=imagesy($img);
//var_dump(getimagesize('font/2.jpg'));



/*
   //文字水印

$position=imagettfbbox(90, 0,  'font/AnticSlab-Regular.ttf', 'sifangku.com');
$stringWidth=$position[2]-$position[0];





imagettftext($img, 90, 0, $width-1-$stringWidth-($width/50),$height-1-($height/10), $color, 'font/AnticSlab-Regular.ttf', 'sifangku.com');


*/   

/*    

      //图片水印

$img是目标图片像素

$waterMark是要上传的水印

100，100  是水印在目标图片上的宽度和高度的位置

$waterMark, $width-1-$waterMarkWidth, $height-1-$waterMarkHeight   让水印在右下角曾现


0，0是水印从左上角开始印上去开始拷贝

$waterMarkWidth, $waterMarkHeight 是要的水印呈现出来的宽度和高度

imagecopy 图片是左上角 

$waterMarkWidth=imagesx($img);
$waterMarkHeight=imagesy($img);
imagecopy($img, $waterMark, $width-1-$waterMarkWidth, $height-1-$waterMarkHeight, 0, $waterMarkWidth, $waterMarkHeight);



imagecopymerge(...,rand(0,100));   0是透明，100是不透明
*/




imagejpeg($img);
imagedestroy($img);