<?php
    $fullNameWithID = isset($_REQUEST['fullname']) ? $_REQUEST['fullname'] : "";
    $age = isset($_REQUEST['age']) ? $_REQUEST['age'] : "";
    $subject = isset($_REQUEST['subject']) ? $_REQUEST['subject'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID. Անուն Ազգանուն</th>
        <th scope="col">Տարիք</th>
        <th scope="col">Դասավանդման առարկա</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <!--
            td(2) with echo;
            the others with php expression
        -->
        <td><?= $fullNameWithID?></td>
        <td><?php echo $age;?></td>
        <td><?= $subject?></td>
    </tr>
    </tbody>
</table>

</body>
</html>
