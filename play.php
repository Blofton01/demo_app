<?php

$test = "hello"; // scalar variable
$myStuff = array('test'.'test2', 'test3');
$myStuff[] = 'test4';
echo $myStuff . "\n"; // 'test1', 'test2', 'test3', 'test'

if($test !== "goodBye")
{

	print_r('not hello') . "\n";

}

for($i=0; i<count($myStuff); $i++)
{
	
    echo 'item : ' . $myStuff[$i] . "\n";

}

?>