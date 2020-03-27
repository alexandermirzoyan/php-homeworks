<?php
    // xndir 1
    /*$matrix = [
      ["facebook.com", "youtube.com", "twitter.com"],
      ["gmail.com", "vk.com", "evernote.com"],
      ["drive.google.com", "classroom.google.com", "w3schools.com"]
    ];
    $n = count($matrix) - 1;
    for ($i = 1; $i < count($matrix); $i++) {
        for($j = $n - $i; $j < $n; $j++){
            echo "<a href='https://". $matrix[$i][$j] ."' >".$matrix[$i][$j]."</a>";
            echo "<br>";
        }
    }*/

    // xndir 2
    /*$matrix = [
      ["1.jpg", "2.jpg", "3.jpg"],
      ["1.jpg", "2.jpg", "3.jpg"],
      ["1.jpg", "2.jpg", "3.jpg"]
    ];
    for($i = 0; $i < count($matrix); $i++) {
    	for($j= $i; $j < count($matrix); $j++) {
    		echo "<img src='./assets/".$matrix[$i][$j]."' >";
    		echo "<br>";
    	}
    }*/

    // xndir 3
    $matrix = [
      ["alexandr.mirz12@gmail.com", "poxosyan.poxos@mail.ru", "manukyan_garnik@kargin_haxordum.am"],
      ["mark_zuckerberg@facebook.com", "armenakyan.ashot@mail.ru", "ashotyan.armenak@gmail.com"],
      ["tim_cook@apple.com", "steve_jobs@apple.com", "bill_gates@mail.ru"]
    ];

    $n = count($matrix);
    for ($i = 0; $i < $n; $i++) {
        echo $matrix[$i][$n - $i - 1] . nl2br("\n");
    }

?>