<?php
    $osztalyzat = array("matek" => 2, "biológia" => 4, "kémia" => 4, "fizika" => 2, "földrajz" =>
        5);
    function avg(array $tomb): float {
        $sum = 0;
        $db = 0;
        foreach ($tomb as $kulcs => $ertek) {
            $sum += $ertek;
            $db++;
        }
        return $sum/$db;
    }

    echo(avg($osztalyzat));