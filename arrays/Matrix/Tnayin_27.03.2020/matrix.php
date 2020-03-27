<?php
    $matrix = [ 
        ["1.jpg", "3.jpg", "2.jpg", "2.jpg", "1.jpg"], 
        ["2.jpg", "1.jpg", "3.jpg", "1.jpg", "3.jpg"],
        ["3.jpg", "2.jpg", "1.jpg", "3.jpg", "2.jpg"],
        ["1.jpg", "3.jpg", "2.jpg", "2.jpg", "1.jpg"],
        ["2.jpg", "1.jpg", "3.jpg", "1.jpg", "3.jpg"],
        ["3.jpg", "2.jpg", "1.jpg", "3.jpg", "2.jpg"]
    ];

    function printImagesFromMatrix($matrix) {
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix[$i]); $j++) {
                echo "<img src='assets./".$matrix[$i][$j]."' >";
                echo "<br>";
            }
        }
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <h1>Տրված է երկչափ զանգված, մեջը image-ներ։ Փոխանցել function-ին և արտածել համապատասխան tag-ում</h1>
        <?php printImagesFromMatrix($matrix); ?>
    </body>
</html>
