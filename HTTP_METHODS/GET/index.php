<?php
    $students = array(
        "1" => "Alavardyan Sima",
        "2" => "Hakobyan Artyom",
        "3" => "Mirzoyan Alexandr",
        "4" => "Khachatryan Arsen",
        "5" => "Hacagortsyan Zaruhi",
        "6" => "Sargsyan Vladimir",
        "7" => "Poxosyan Poxos",
        "8" => "Manukyan Garnik",
    );
?>
<html>
    <head>
        <title>713 List</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./result.php" method="get">
        <div>
            <label for="fullname">Անուն Ազգանուն</label>
            <br>
            <select name="fullname" id="fullname">
                <?php
                    foreach ($students as $key => $value) {
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
            <label for="faculty">Ֆակուլտետ</label>
            <br>
            <input id="faculty" type="text" name="faculty">
        </div>
        <input type="submit" value="Submit">
    </form>
    </body>
</html>