<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
    $firstname = (isset($_GET["firstname"]) && !empty($_GET["firstname"])) ? $_GET["firstname"] : "";
    $lastname = (isset($_GET["lastname"]) && !empty($_GET["lastname"])) ? $_GET["lastname"] : "";
    $email = (isset($_GET["email"]) && !empty($_GET["email"])) ? $_GET["email"] : "";
    $password = (isset($_GET["password"]) && !empty($_GET["password"])) ? $_GET["password"] : "";
    $day = (isset($_GET["day"]) && !empty($_GET["day"])) ? $_GET["day"] : "";
    $month = (isset($_GET["month"]) && !empty($_GET["month"])) ? $_GET["month"] : "";
    $year = (isset($_GET["year"]) && !empty($_GET["year"])) ? $_GET["year"] : "";
    $gender = (isset($_GET["gender"]) && !empty($_GET["gender"])) ? $_GET["gender"] : "";

    /*$user_object = array(
 	    "firstName" => $firstname,
 	    "lastName" => $lastname,
 	    "email" => $email,
        "password" => $password,
        "day" => $day,
        "month" => $month,
        "year" => $year,
        "gender" => $gender,
    );*/
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email/Phone number</th>
            <th scope="col">password</th>
            <th scope="col">Birth day</th>
            <th scope="col">Birth month</th>
            <th scope="col">Birth year</th>
            <th scope="col">Gender</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <!--
            td(2) with echo;
            the others with php expression
        -->
        <td><?= $firstname?></td>
        <td><?php echo $lastname;?></td>
        <td><?= $email?></td>
        <td><?= $password?></td>
        <td><?= $day?></td>
        <td><?= $month?></td>
        <td><?= $year?></td>
        <td><?= $gender?></td>
    </tr>
    </tbody>
</table>

</body>
</html>