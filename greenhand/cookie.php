<?php

header('content-type:text/html;charset=utf-8');
var_dump(setcookie('member[name]',"林子酱",time()+3600));
var_dump(setcookie('member[name]',"小猪猪",time()+3600));
var_dump($_COOKIE);


var_dump(setcookie('member[name]',"小猪猪",time()-3600)); //销毁小猪猪

//foreach($_COOKIE['member'] as $key=>$val)
//  {var_dump(setcookie('member[$key]',"",time()-3600));}