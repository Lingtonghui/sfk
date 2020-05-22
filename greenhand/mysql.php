<?php

$host='127.0.0.1';
$user='root';
$pwd='root';
$dbname='php10';

$db = new mysqli($host,$user,$pwd,$dbname);
var_dump($db);

?>