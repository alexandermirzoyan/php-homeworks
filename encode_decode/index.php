<html>
    <head>
        <title>Encode-Decode</title>
    </head>
    <body>
        <?php
            echo '<a href="http://localhost/php/php-homeworks/encode_decode/decode.php?wrong_text=', urlencode("my=apples&are=green+and+red"), '">to other page</a>';
        ?>
        <br>
        <?php
        $str = "A 'quote' is <b>bold</b>";

        // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
        echo htmlentities($str);

        // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
        echo htmlentities($str, ENT_QUOTES);

        echo html_entity_decode($str);
        ?>
        <br>
        <?php
        $str = "\x8F!!!";

        // Outputs an empty string
        echo htmlentities($str, ENT_QUOTES, "UTF-8");

        // Outputs "!!!"
        echo htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
        ?>

        <?php
            $img_url = "<img src='https://hackernoon.com/hn-images/1*YNBTPaCNBNWLoT7XAbJ1Lw.png' >";
            echo $img_url;
            $changed_characters = str_replace("'", ":", $img_url);
            echo $changed_characters;
        ?>

        <?php
            $html_code = "<h1>a</h1> <a>b</a> <p>c</p> <b>d</b> <img src='https://hackernoon.com/hn-images/1*YNBTPaCNBNWLoT7XAbJ1Lw.png'> <header>f</header> <footer>g</footer> <nav>h</nav> <span>i</span>";
            echo $html_code;
            $striped_html_code = strip_tags($html_code, '<h1><a>');
            echo $striped_html_code;
        ?>
    </body>
</html>