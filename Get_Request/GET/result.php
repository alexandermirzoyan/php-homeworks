<?php
    $fullNameWithID = isset($_GET['fullname']) ? $_GET['fullname'] : "";
    $age = isset($_GET['age']) ? $_GET['age'] : "";
    $faculty = isset($_GET['faculty']) ? $_GET['faculty'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID. Անուն Ազգանուն</th>
        <th scope="col">Տարիք</th>
        <th scope="col">Ֆակուլտետ</th>
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
        <td><?= $faculty?></td>
    </tr>
    </tbody>
</table>

</body>
</html>
