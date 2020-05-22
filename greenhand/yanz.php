
<?php

header('Content-type:image/jpeg');
$width=120;
$height=40;

$element=array('a','b','c','d','e','f','g','h','i','j','k','l');

$string='';
for($i=0;$i<4;$i++){
$string.=$element[rand(0,count($element)-1)];
}


$img=imagecreatetruecolor($width, $height);

$colorBg=imagecolorallocate($img, rand(200,255), rand(200,255), rand(200,255));
imagefill($img, 0, 0, $colorBg);


$colorBorder=imagecolorallocate($img,rand(200,255), rand(200,255), rand(200,255));

$colorString=imagecolorallocate($img, rand(10,100), rand(10,100), rand(10,100));


imagerectangle($img, 0, 0, $width-1, $height-1, $colorBorder);

for($i=0;$i<50;$i++){
imagesetpixel($img, rand(0,$width-1), rand(0,$height-1),imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200 )));
}

for($i=0;$i<3;$i++){
imageline($img, rand(0,$width/2), rand(0,
$height), rand($width/2,$width), rand(0,$height), imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200 )));
}

/*imagestring($img, 25, 0,0,'abcd', $colorString);
*/


$font=dirname(__FILE__).'/font/AnticSlab-Regular.ttf';

imagettftext($img,30,rand(5,10),rand(15,25),rand(30,35),$colorString,$font,$string);


imagejpeg($img);
imagedestroy($img);





?>
