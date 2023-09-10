<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Термометр</title>
    <style>
        h2 {
            text-align: center;
        }

        table, tr, td {
            border: 1px solid black;
            padding: 10px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        td {
            width: 30px;
        }
    </style>
</head>
<body>
    <h2>3.7 Термометр</h2>
    <?php
    $t = rand(-20, 20);
    echo "<table>\n";
    for ($i = -20; $i < 21; $i++) {
        echo "<tr><td>$i</td><td style=\"background-color: " . ($i < $t + 1 ? 'red' : 'gold') . ";\"></td></tr>";
    }
    echo "\n\t</table>\n";
    ?>
</body>
</html>