<?php

namespace F1;
/*
include "Calculator.php";
include "AdvCalculator.php";
include "NonExistentOperation.php";
*/
include "Loader.php";

$advCalc = new AdvCalculator(5, 6); // itt lep be az autoloader
// beteszi az AdvCalculatort
// abban benne van a Calculator es a
// NonExistentOperation Exception class(ezt akkor, amikor baj van)
// echo $className-el lehet kovetni

echo $advCalc->add() . "<br>";
echo $advCalc->subtract() . "<br>";
echo $advCalc->multiply() . "<br>";
echo $advCalc->divide() . "<br>";
echo "<br>";

try {
    echo $advCalc->pow() . "<br>";
    //echo $advCalc->sqrt() . "<br>";
    printf("%.2f<br>", $advCalc->sqrt());
    echo $advCalc->exp() . "<br>";
    echo $advCalc->alma() . "<br>";
} catch (NonExistentOperation $e) {
    echo $e->myErrorMessage();
}

