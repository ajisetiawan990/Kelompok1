<?php
    $angka1 = 20;
    $angka2 = 25;
    $hasil1 = $angka1 + $angka2;

    $angka1 = 15;
    $angka2 = 5;
    $hasil2 = $angka1 + $angka2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nilai</th>
        </tr>
        <tr>
            <td><?php echo $hasil1 ?></td>
        </tr>
        <tr>
            <td><?php echo $hasil2 ?></td>
        </tr>
    </table>
</body>
</html>