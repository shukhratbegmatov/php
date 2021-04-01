<html>
    <body>
        <?php
        $file=fopen("text.txt",'r');
        while(!feof($file)){
            $text=fgets($file);
            echo "<p>$text</p>";
        }
        fclose($file)
        ?>
    </body>
</html>