<?php
/* a * x + b = 0
x = -b / a
 */

$a = rand(0, 10);
$b = 5;

if ($a != 0) {
    $x = -$b / $a;
    echo "<span style = \" color: blue;\">Корень рівняння:</span>" . $x;
} else {
    echo "Помилка";
}
