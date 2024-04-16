<?php
$xn = 0.1;
$xk = 1;
$N = 8;

echo '<table border="1">
        <tr>
            <th>x</th>
            <th>Y(x)</th>
            <th>S(x)</th>
            <th>Близость</th>
        </tr>';

$h = ($xk - $xn) / 10;

for ($i = $xn; $i <= $xk; $i += $h) {
    $y = 2 * (pow(cos($i), 2) - 1);
    $s = 0;
    for ($n = 1; $n <= $N; $n++) {
        $s += pow(-1, $n) * pow(2 * $i, 2 * $n) / (factorial(2 * $n));
    }
    echo "<tr>
            <td>$i</td>
            <td>$y</td>
            <td>$s</td>
            <td>" . abs($y - $s) . "</td>
        </tr>";
}
echo '</table>';

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
?>

