<?php
    function szorzotabla(int $szam): void {
        for($i=1; $i<10; $i++) {
            $c = $szam * $i;
            echo "$i x $szam = $c<br>";
        }
    }
    szorzotabla(6);

    // TODO: nevtelen

    echo "<br><br><br>";

    $nevtelenSzorzotabla = function(int $szam): void {
        for($i=1; $i<10; $i++) {
            $c = $szam * $i;
            echo "$i x $szam = $c<br>";
        }
    };

    $nevtelenSzorzotabla(5);


