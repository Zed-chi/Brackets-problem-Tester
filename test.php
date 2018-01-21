<?php
require __DIR__ . '/vendor/autoload.php';

$x=$argv[1];

try{
	$data = file_get_contents($x);
	$b = new Zedchi\Verify();
	echo $b->verify($data);
}
catch(Exception $e){
	echo $e->getMessage();
}
