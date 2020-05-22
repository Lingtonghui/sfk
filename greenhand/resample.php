<?php
//缩放与裁剪


header('Content-type:image/jpeg');
$img=imagecreatefromjpeg('font/2.jpg');

$img1=imagecreatetruecolor(1000,1000);
/*imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)


dst_image, 目标图像资源

src_image,原图像资源（你要采集的那个图像资源）

dst_x, dst_y, 两个参数确定了一个坐标，把采样的部分放到目标资源的什么位置

src_x, src_y,  确定坐标，你要采样的原图像资源的某个部分的起始坐标（左上角的坐标）

dst_w, dst_h,   确定了放到目标图像资源上面的尺寸

src_w, src_h 确定了采样原图像资源的某个部分
*/
imagecopyresampled($img1, $img, 100,100, 0,0, 500,500,8000,8000);




imagejpeg($img1);
imagedestroy($img1);
imagedestroy($img);