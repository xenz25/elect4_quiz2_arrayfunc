<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gathering</title>
</head>

<body>
    <?php
    function getTemplate($name, $idx)
    {
        return '<div>
        <label for=' . $name . ' style="font-weight: bold; font-size: 1.5em">Index[' . $idx . ']: </label>
        <input type="text" name=' . $name . ' id=' . $name . '></div>';
    }
    $arrName = $_POST['input_name_arr'];
    $itemCount = $_POST['input_arr_size'];

    echo "<h1>Add values for the array: " . $arrName . "</h1>";

    echo '<form action="./array_printing.php" method="POST">';
    echo '<input type="hidden" name="array_name" value=' . $arrName . '>';
    echo '<input type="hidden" name="array_size" value=' . $itemCount . '>';
    for ($i = 0; $i < $itemCount; $i++) {
        $name = "arr_z[]";
        echo getTemplate($name, $i);
    }
    echo '<button type="submit">Submit</button>';
    echo "</form>";
    ?>
</body>

</html>