<?php
var_dump($_GET);
$query = isset($_GET['wrong_text']) ? $_GET['wrong_text'] : "nothing inputed";

foreach (explode('&', $query) as $chunk) {
    $param = explode("=", $chunk);

    if ($param) {
        printf("Value for parameter \"%s\" is \"%s\"<br/>\n", urldecode($param[0]), urldecode($param[1]));
    }
}