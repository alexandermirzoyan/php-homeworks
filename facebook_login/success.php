<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
    $firstname = (isset($_POST["firstname"]) && !empty($_POST["firstname"])) ? $_POST["firstname"] : "";
    $lastname = (isset($_POST["lastname"]) && !empty($_POST["lastname"])) ? $_POST["lastname"] : "";
    $email = (isset($_POST["email"]) && !empty($_POST["email"])) ? $_POST["email"] : "";
    $password = (isset($_POST["password"]) && !empty($_POST["password"])) ? $_POST["password"] : "";
    $day = (isset($_POST["day"]) && !empty($_POST["day"])) ? $_POST["day"] : "";
    $month = (isset($_POST["month"]) && !empty($_POST["month"])) ? $_POST["month"] : "";
    $year = (isset($_POST["year"]) && !empty($_POST["year"])) ? $_POST["year"] : "";
    $gender = (isset($_POST["gender"]) && !empty($_POST["gender"])) ? $_POST["gender"] : "";

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