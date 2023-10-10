<?php
    $osztalyzat = array("matek" => 2, "biológia" => 4, "kémia" => 4, "fizika" => 2, "földrajz" =>
        5);
    foreach ($osztalyzat as $kulcs => $ertek) {
        echo "$kulcs => $ertek<br>";
    }