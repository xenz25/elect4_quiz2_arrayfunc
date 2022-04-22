<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th, td {
            font-weight: bold;
            padding: 2px;
            font-size: 1.5em;
        }
    </style>

    <title>Results in Table</title>
</head>

<body>
    <table border='1'>
        <?php

        function printToRow($items)
        {
            echo "<tr>";
            for ($i = 0; $i < count($items); $i++) {
                echo '<td>'. $items[$i]  . '</td>';
            }
            echo "</tr>";
        }

        $arrayName = $_POST['array_name'];
        $itemPost = $_POST['arr_z'];
        $items = array();

        foreach ($itemPost as $item) {
            $items[] = $item;
        }

        echo '<th colspan=' . count($items) . '>' . $arrayName . "</th>";
        echo "<tr>";
        for ($i = 0; $i < count($items); $i++) {
            echo '<th> Index[' . $i . '] </th>';
        }
        echo "</tr>";
        printToRow($items);
        ?>
    </table>

</body>

</html>