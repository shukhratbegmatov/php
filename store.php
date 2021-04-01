<html>
    <body>
        <?php
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=md5($_POST['password']);
            $file=fopen("user.txt","a");
            fwrite($file,"$name $email $password\n");
            fclose($file);
        ?>
        <a href="register.php"></a>
    </body>
</html>