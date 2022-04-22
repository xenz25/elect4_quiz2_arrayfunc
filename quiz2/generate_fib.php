<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        td {
            font-weight: bold;
            padding: 2px;
            font-size: 1.5em;
        }
    </style>

    <title>Generated Fibonacci</title>
</head>

<body>
    <h1>FIBONACCI SEQUENCE TABLE</h1>
    <table border="1" style="padding: 2px;">
        <?php
        $nth = $_POST['input_nth'];
        function getFibAt($nth)
        {
            $sqrt5 = sqrt(5);
            $gRatio = 1.618034;
            $num = (pow($gRatio, $nth) - pow(1 - $gRatio, $nth)) / $sqrt5;
            return round($num, 0, PHP_ROUND_HALF_DOWN);
        }

        for($i = 0; $i <= $nth; $i++){
            echo "<tr>";
            for($j = 0; $j <= $i; $j++){
                echo "<td>" . getFibAt($j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>