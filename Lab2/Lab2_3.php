<html>
    <head>
        <style>
            table, td {
                border: 1px solid black;
            }

            td {
                padding: 30px;
            }

            tr:nth-child(even) td:nth-child(odd) {
                background-color: black;
            }

            tr:nth-child(odd) td:nth-child(even) {
                background-color: black;
            }
        </style>
    </head>

    <body>
    <table>
        <?php
        for($i=1; $i<=8; $i++) {
            echo "<tr>";
            for($j=1; $j<=8; $j++) {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    </body>
</html>


