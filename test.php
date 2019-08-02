<?php
require_once "vendor/autoload.php";
use HelloWorld\SayHello;
$obj=new SayHello();
echo $obj->speak();