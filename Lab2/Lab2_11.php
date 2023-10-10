<?php
    $indexTomb = array(2, 4, 3, 5, 7);
    $assocTomb = array("elso" => "alma", "masodik" => "korte", "harmadik" => "szilva");
    // sort($indexTomb);
    //asort($indexTomb);
    ksort($indexTomb);
    print_r($indexTomb);