<?php

require __DIR__.'/vendor/autoload.php';

//require '../src/Hello.php';

use Davidmgilo\Hello;

$hello = new Hello();

//Legibilitat
echo $hello->say();

