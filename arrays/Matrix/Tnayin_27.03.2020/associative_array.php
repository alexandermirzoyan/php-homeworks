<?php
    $groupArray = array(
        "group" => "713",
        "1" => "Alavardyan Sima",
        "2" => "Hakobyan Artyom",
        "3" => "Mirzoyan Alexandr",
        "4" => "Khachatryan Arsen",
        "5" => "Hacagortsyan Zaruhi",
        "6" => "Sargsyan Vladimir",
        "7" => "Poxosyan Poxos",
        "8" => "Manukyan Garnik",
    );
    $selectBox = "<select>";
    foreach ($groupArray as $key => $value) {
        $selectBox .= "<option value='".$key."' >" . $value . "</option>";
    }
    $selectBox .= "</select>";
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <h1>Տրված է ասոցատիվ զանգված, որի մեջ գրված է մեր խմբի համարը և ազգանունները։ Արտածել select-ների մեջ համապատասխանաբար</h1>
        <?php echo $selectBox; ?>
    </body>
</html>
