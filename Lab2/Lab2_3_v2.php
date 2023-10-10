<html>
<head>
    <style>
        tr:nth-child(even) td:nth-child(odd) {
            background-color: black;
        }

        tr:nth-child(odd) td:nth-child(even) {
            background-color: black;
        }
    </style>
</head>

<body>
<table style='border: 1px solid black'>
    <?php
    for($i=0; $i<8; $i++) {
        echo "<tr>";
        for($j=0; $j<8; $j++) {

            echo "<td style='border: 1px solid black; padding: 30px'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>


