<?php
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    echo $email;
    echo nl2br("\n");
    echo $password;

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

    // table structure by columns -> id, email, password
    $sql_insert = "INSERT INTO users VALUES (null, ".$email.", ".$password.")";
    $result = $con->query($sql_insert);
    if (!$result) {
        echo "error:".nl2br('\n');
    } else {
        echo "Your data has been added successfully";
    }
    $con->close();
?>
