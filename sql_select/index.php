<?php
$host = "localhost";
$username = "root";
$password = "admin";
$db_name = "db_name";

$con = new mysqli($host, $username, $password, $db_name);
if ($con->connect_error) {
    die("error: " . $con->connect_error);
} else {
    echo "connected successfully";
}

$sql_insert = "SELECT * FROM all_cases"; //all_cases is table's name
$result = $con->query($sql_insert);
if ($result->num_rows) {
    echo "error:".nl2br('\n');
    while ($rows = $result->fetch_assoc()) {
        var_dump($rows);
    }
} else {
    echo "Your data has been added successfully";
    die();
}
$con->close();
