<?php

    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

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

    $sql_update = "UPDATE users SET email = ".$email.", password = ".$password." WHERE id = ".$id." ";

    $result = $con->query($sql_insert);
    if (!$result) {
        echo "error:".nl2br('\n');
    } else {
        echo "Your data has been updated successfully";
    }
    $con->close();
