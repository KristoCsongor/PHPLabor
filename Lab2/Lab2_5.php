<?php
    function avg(float $a, float $b): float {
        return ($a + $b)/2;
    }

    $arrowAvg = fn (float $a, float $b) => ($a + $b)/2;

    echo(avg(2, 8));
    echo "<br>";
    echo(avg(2.5, 6.5));
    echo "<br>";
    //echo(avg("alma", "korte"));
    echo "<br>";
    echo $arrowAvg(5.33, 6.25);