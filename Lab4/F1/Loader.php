<?php

namespace F1;

spl_autoload_register(function ($className) {
    echo $className;
    //$file = $className . ".php";
    $file = __DIR__ . "\\" . $className . ".php";
    echo "<br>" . $file;
    echo "<br>" . $className;
    if(file_exists($file)) {
        include $file;
    } else {
        throw new Exception("Missing file!");
    }
});