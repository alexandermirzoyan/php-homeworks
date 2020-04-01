<?php
//echo '<pre>' . var_export($GLOBALS, true) . '</pre>'; //var_export is shows pretty, than var_dump

$arr = ['1.jpg', '2.jpg', '3.jpg'];

function printArrayImagesAsHTML() {
    global $arr;
    for ($i = 0; $i < count($arr); $i++) {
        echo "<img src='./assets/".$arr[$i]."' >" . "<br>";
    }
}

printArrayImagesAsHTML();
