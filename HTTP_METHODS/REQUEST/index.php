<?php
$lecturers = array(
    "1" => "Tigranyan Migran",
    "2" => "Manukyan Garnik",
    "3" => "Ashotyan Armen",
    "4" => "Poxosyan Varazdat",
    "5" => "Samsonyan Yura",
    "6" => "Nikoghosyan Tatev",
    "7" => "Osipyan Mosip",
    "8" => "Ulubyan Mulub",
);
?>
<html>
<head>
    <title>Lecturers</title>
    <meta charset="utf-8">
</head>
<body>
<!--<form action="./result.php" method="get">-->
<form action="./result.php" method="post">
    <div>
        <label for="fullname">Անուն Ազգանուն</label>
        <br>
        <select name="fullname" id="fullname">
            <?php
            foreach ($lecturers as $key => $value) {
                echo "<option name='".$value."'>" . $key . ". " . $value . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
    </div>
    <div>
        <label for="age" >Տարիք</label>
        <br>
        <input id="age" type="number" name="age">
        <br>
        <br>
    </div>
    <div>
        <label for="subject">Դասավանդման առարկա</label>
        <br>
        <input id="subject" type="text" name="subject">
    </div>
    <input type="submit" value="Submit">
</form>
</body>
</html>