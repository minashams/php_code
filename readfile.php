<?php
//opena file and give the handle to $f_handle
$f_handle = fopen('./myfiles/file1.txt', 'r');

//reading eachline in loop
while($f_line = fgets($f_handle)){
	echo $f_line;
}

  ?>