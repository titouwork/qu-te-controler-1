<?php 

require __DIR__ . '/../vendor/autoload.php';

use App\Hello;

$hi = new Hello();
echo $hi->talk();

?>