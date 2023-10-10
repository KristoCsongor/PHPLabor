<html>
    <head></head>

    <body>
        <table style='border: 1px solid black'>
            <?php

            $vevok = array
            (
                array(
                    "nev" => "Napfütő Bt",
                    "tevekenyseg" => "lógás",
                    "megalakulas" => 1990,
                    "cim" => "Budapest"
                ),
                array(
                    "nev" => "Nevesincs Kft.",
                    "tevekenyseg" => "reklám",
                    "megalakulas" => 1995,
                    "cim" => "Szeged"
                ),
                array(
                    "nev" => "Léhűtő Bt.",
                    "tevekenyseg" => "hűtéstechnika",
                    "megalakulas" => 1998,
                    "cim" => "Budapest"
                )
            );
            foreach($vevok as $kulcs => $ertek) {
                echo "<tr>";
                foreach ($ertek as $_kulcs => $_ertek) {
                    echo "<td style='border: 1px solid black'>$_ertek</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
