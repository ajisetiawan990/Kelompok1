<?php
echo "<h1>OPERASI ARITMATIKA</h1>";
$angka1 = 10;
$angka2 = 20;
$angka3 = 35;
$angka4 = 1.05;
$angka5 = 80;
$angka6 = 2;

$hasil = $angka1 + $angka2 ;
$hasil2 = $angka3 - $angka1 ;
$hasil3 = $angka1 * $angka4 ;
$hasil4 = $angka5 / $angka6 ;
?>

<?php
echo '<table border="1">';
echo '<tr><th>Nilai</th></tr>';
echo "<tr><td>$hasil</td></tr>";
echo "<tr><td>$hasil2</td></tr>";
echo "<tr><td>$hasil3</td></tr>";
echo "<tr><td>$hasil4</td></tr>";
echo '</table>';