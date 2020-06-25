<?php

$a = [13, 5, 20, 3, 9, 8, 4, 16];

$length = count($a);

$temp = [];

for ($i = 0; $i < $length; $i++) {
    $temp[$a[$i]] = 1;
}

$alreadyProcessed = [];
$result = [];

for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 1; $j < $length ; $j++) {
        if ($i === $j) {
            continue;
        }

        $k1 = $a[$i];
        $k2 = $a[$j];

        if (isset($temp[$k1 + $k2])) {
            if (!isset($alreadyProcessed[$k1 + $k2])) {
                $alreadyProcessed[$k1 + $k2] = true;
                print_r('(' . $k1 . ',' . $k2 . ')');
            }
        }
    }
}
