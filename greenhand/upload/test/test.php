<?php

include('class1.php');

echo 123;
exit;

for ($i=0; $i < 10; $i++) { 
	if( $i==5 ){
		continue;
	}
	echo $i;
}

var_dump( new name(1,2) );