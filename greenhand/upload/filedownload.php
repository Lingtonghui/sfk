<?php
//要先获取文件的mime

$file='a.rar';
$info=finfo_open(FILEINFO_MIME_TYPE) ;
var_dump(finfo_open($info,$file));


//header('content-type:text/html');

