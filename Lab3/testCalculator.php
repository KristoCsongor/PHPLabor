<?php
declare(strict_types=1);
include "Calculator.php";

$calc = new Calculator(5,0);
echo $calc->add() . "<br>";
echo $calc->subtract() . "<br>";
echo $calc->multiply() . "<br>";
echo $calc->divide() . "<br>";