<?php
$arr = [];
$n = 10;

function fillArray() {
    $arr = [];
    global $n;
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(1,100);
    }
    return $arr;
}

function countOfSomeInDiapason($a, $b) {
    global $arr;
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] >= $a && $arr[$i] <= $b) {
            $sum += $arr[$i];
        }
    }
    return $sum;
}

$arr = fillArray();

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . nl2br("\n");
}

echo nl2br("\n");
echo nl2br("\n");

echo "Sum of inputed diapason = " . countOfSomeInDiapason(5, 20);