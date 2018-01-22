<?php
require __DIR__ . '/vendor/autoload.php';

$x=$argv[1];

$x = $argv[1];

try {
    if(!is_file($x)){throw new \Exception("not A file");}
    try {
        $data = file_get_contents($x);
        $item = new Zedchi\Verify();
        echo $item->verify($data) . "\n";
    }
    catch (Exception $e){
        echo $e->getMessage()."\n";
    }
}
catch(Exception $e){
    echo $e->getMessage()."\n";
}
